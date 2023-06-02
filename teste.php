<?php

use Julio\Projeto\Aplication\CalculadoraDeImpostos;
use Julio\Projeto\Aplication\Desconto\CalculadoraDeDescontos;
use Julio\Projeto\Domain\Orcamento\Orcamento;
use Julio\Projeto\Infra\Desconto\DescontoQuantidadeMaisQueCinco;
use Julio\Projeto\Infra\Desconto\VerificadorDeDescontos;
use Julio\Projeto\Infra\Imposto\ICMS;

include_once 'vendor/autoload.php';




// echo (new CalculadoraDeImpostos)->executa(new ICMS, new Orcamento(10));

echo (new CalculadoraDeDescontos)->calculaDesconto(new Orcamento(100, 6));
