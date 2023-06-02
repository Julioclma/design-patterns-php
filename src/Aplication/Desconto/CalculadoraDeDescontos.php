<?php

namespace Julio\Projeto\Aplication\Desconto;

use Julio\Projeto\Domain\Desconto\DescontoInterface;
use Julio\Projeto\Domain\Orcamento\Orcamento;
use Julio\Projeto\Infra\Desconto\DescontoMaiorQue500Reais;
use Julio\Projeto\Infra\Desconto\VerificadorDeDescontos;

class CalculadoraDeDescontos
{

    public function calculaDesconto(Orcamento $orcamento): string
    {
 return (new DescontoMaiorQue500Reais)->calculaDesconto($orcamento);
    }
}
