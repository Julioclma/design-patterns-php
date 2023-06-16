<?php
include_once 'vendor/autoload.php';
use Julio\Projeto\Aplication\ApiOrcamento\RegistroDeOrcamento;
use Julio\Projeto\Domain\Orcamento\Orcamento;
use Julio\Projeto\Infra\Http\CurlImplementation;
use Julio\Projeto\Infra\Http\ReactImplementation;

$controllerOrcamento = new RegistroDeOrcamento(new ReactImplementation);
    
$controllerOrcamento->registrar(new Orcamento(22, 2));