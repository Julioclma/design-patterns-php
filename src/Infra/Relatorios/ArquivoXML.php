<?php

namespace Julio\Projeto\Infra\Relatorios;

use SimpleXMLElement;

class ArquivoXML implements ArquivosExportados
{
    private string $nomeDoElementoPai;
    public function __construct(string $nomeDoElementoPai)
    {
        $this->nomeDoElementoPai = $nomeDoElementoPai;
    }
    function salvar(ConteudoExportado $conteudo): string
    {
        $elementoXml = new SimpleXMLElement("<{$this->nomeDoElementoPai}/>");
        foreach ($conteudo->conteudo() as $key => $value) {
            $elementoXml->addChild($key, $value);
        }
        $caminhoArquivo =  tempnam(sys_get_temp_dir(), 'xml');
        $elementoXml->asXML($caminhoArquivo);
        return $caminhoArquivo;
    }
}
