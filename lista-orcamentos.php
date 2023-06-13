<?php

include_once 'vendor/autoload.php';

use Julio\Projeto\Domain\Orcamento\Orcamento;
use Julio\Projeto\Infra\Orcamento\ListaDeOrcamentos;


$listaOrcamentos = [];

$orcamento1 = new Orcamento(100, 2);
$orcamento1->aprova();

$orcamento2 = new Orcamento(500, 2);
$orcamento2->reprova();

$orcamento3 = new Orcamento(500, 3);
$orcamento3->aprova();
$orcamento3->finaliza();


$lista = (new ListaDeOrcamentos())->addOrcamento($orcamento1)->addOrcamento($orcamento2)->addOrcamento($orcamento3);

var_dump($lista->orcamentosFinalizados());

// foreach ($lista as $orcamento) {
//     echo 'valor: ' . $orcamento->getValor() . PHP_EOL .
//         'estado: ' . get_class($orcamento->estadoAtual) . PHP_EOL .
//         'quantidade itens ' . $orcamento->getQuantidade() . PHP_EOL;
// }
