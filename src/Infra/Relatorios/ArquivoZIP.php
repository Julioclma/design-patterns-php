<?php

namespace Julio\Projeto\Infra\Relatorios;

use ZipArchive;

class ArquivoZIP implements ArquivosExportados
{
    private string $nomeArquivoInterno;

    public function __construct(string $nomeArquivoInterno)
    {
        $this->nomeArquivoInterno = $nomeArquivoInterno;
    }

    function salvar(ConteudoExportado $conteudo): string
    {
        $arquivo = new ZipArchive;
        $caminhoArquivo =   tempnam(sys_get_temp_dir(), 'zip');
        $arquivo->open($caminhoArquivo);
        $arquivo->addFromString($this->nomeArquivoInterno, serialize($conteudo->conteudo()));
        $arquivo->close();

        return $caminhoArquivo;
    }
}
