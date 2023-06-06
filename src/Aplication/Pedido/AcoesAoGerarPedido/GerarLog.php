<?php

namespace Julio\Projeto\Aplication\Pedido\AcoesAoGerarPedido;

use Julio\Projeto\Domain\Pedido\Pedido;

class GerarLog implements AcaoAposGerarPedidoInterface
{
public function executaAcao(Pedido $pedido) : void
{
    echo 'gerando pedido no banco de dados';
}
}
