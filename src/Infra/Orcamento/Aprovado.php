<?php

namespace Julio\Projeto\Infra\Orcamento;

use Julio\Projeto\Domain\Orcamento\EstadosOrcamento\EstadoOrcamento;
use Julio\Projeto\Domain\Orcamento\Orcamento;

class Aprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
     return $orcamento->getValor() * 0.02;
    }

    public function finaliza(Orcamento $orcamento) : void
    {
        $orcamento->estadoAtual = new Finalizado;
    }
}
