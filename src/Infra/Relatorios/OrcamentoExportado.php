<?php

namespace Julio\Projeto\Infra\Relatorios;

use Julio\Projeto\Domain\Orcamento\Orcamento;

class OrcamentoExportado implements ConteudoExportado
{
    private Orcamento $orcamento;
    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }
    function conteudo(): array
    {
        return [
            'valor' => $this->orcamento->getValor(),
            'quantidade' => $this->orcamento->getQuantidade()
        ];
    }
}
