<?php

namespace Julio\Projeto\Infra\Orcamento;

use Julio\Projeto\Domain\Orcamento\EstadosOrcamento\EstadoOrcamento;
use Julio\Projeto\Domain\Orcamento\Orcamento;

class EmAprovacao extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
       return $orcamento->getValor() * 0.05;
    }

    public function aprova(Orcamento $orcamento) : void
    {
        $orcamento->estadoAtual = new Aprovado; 
    }

    public function reprova(Orcamento $orcamento) : void
    {
        $orcamento->estadoAtual = new Rejeitado;
    }

}
