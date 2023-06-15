<?php
include_once 'vendor/autoload.php';

use Julio\Projeto\Aplication\Relatorios\GerarRelatorioOrcamento;
use Julio\Projeto\Domain\Orcamento\Orcamento;
use Julio\Projeto\Infra\Relatorios\OrcamentoEmJson;
use Julio\Projeto\Infra\Relatorios\OrcamentoEmZIP;
use Julio\Projeto\Infra\Relatorios\OrcamentoXML;


echo (new GerarRelatorioOrcamento(new OrcamentoEmZIP))->gerar(new Orcamento(22, 5));