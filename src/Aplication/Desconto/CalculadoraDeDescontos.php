<?php

namespace Julio\Projeto\Aplication\Desconto;

use Julio\Projeto\Domain\Desconto\DescontoInterface;
use Julio\Projeto\Domain\Orcamento\Orcamento;
use Julio\Projeto\Infra\Desconto\VerificadorDeDescontos;

class CalculadoraDeDescontos
{

    public function calculaDesconto(Orcamento $orcamento): float
    {
        return (new VerificadorDeDescontos($orcamento))->calcula($orcamento);
    }
}
