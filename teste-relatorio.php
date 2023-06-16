<?php
include_once 'vendor/autoload.php';

use Julio\Projeto\Aplication\Relatorios\GerarRelatorioOrcamento;
use Julio\Projeto\Domain\Orcamento\Orcamento;
use Julio\Projeto\Infra\Relatorios\ArquivoXML;
use Julio\Projeto\Infra\Relatorios\ArquivoZIP;
use Julio\Projeto\Infra\Relatorios\OrcamentoEmJson;
use Julio\Projeto\Infra\Relatorios\OrcamentoEmZIP;
use Julio\Projeto\Infra\Relatorios\OrcamentoExportado;
use Julio\Projeto\Infra\Relatorios\OrcamentoXML;

echo (new ArquivoZIP("Orcamento"))->salvar(new OrcamentoExportado(new Orcamento(22, 5)));