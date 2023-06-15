<?php

include_once 'vendor/autoload.php';

use Julio\Projeto\Aplication\Pedido\GeraPedido;
use Julio\Projeto\Aplication\Pedido\GerarPedidoHandler;
use Julio\Projeto\Domain\Orcamento\Orcamento;
use Julio\Projeto\Domain\Pedido\Pedido;

$valorOrcamento = $argv[1];

$numItens = $argv[2];

$nomeCliente = $argv[3];

//gere
(new GerarPedidoHandler())->executa(new GeraPedido($valorOrcamento, $numItens, $nomeCliente));
