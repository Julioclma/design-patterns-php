<?php

use Julio\Projeto\Aplication\CalculadoraDeImpostos;
use Julio\Projeto\Domain\Orcamento\Orcamento;
use Julio\Projeto\Infra\Imposto\ICMS;

include_once 'vendor/autoload.php';




echo (new CalculadoraDeImpostos)->executa(new ICMS, new Orcamento(10));