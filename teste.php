<?php

use Julio\Projeto\Aplication\Desconto\CalculadoraDeDescontos;
use Julio\Projeto\Aplication\Impostos\CalculadoraDeImpostos;
use Julio\Projeto\Domain\Orcamento\EstadosOrcamento\EmAprovacao;
use Julio\Projeto\Domain\Orcamento\Orcamento;
use Julio\Projeto\Infra\Desconto\DescontoQuantidadeMaisQueCinco;
use Julio\Projeto\Infra\Desconto\VerificadorDeDescontos;
use Julio\Projeto\Infra\Imposto\ICMS;
use Julio\Projeto\Infra\Imposto\IPR;

include_once 'vendor/autoload.php';




// echo (new CalculadoraDeImpostos)->executa(new IPR, new Orcamento(1002, 6));

// echo (new CalculadoraDeDescontos)->calculaDesconto(new Orcamento(33, 6));

$orcamento = new Orcamento(225, 5);

echo (new EmAprovacao())->aprova($orcamento);

echo $orcamento->aplicaDescontoExtra();