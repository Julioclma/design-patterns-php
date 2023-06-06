<?php

namespace Julio\Projeto\Aplication\Pedido\AcoesAoGerarPedido;

use Julio\Projeto\Domain\Pedido\Pedido;

interface AcaoAposGerarPedidoInterface
{
    public function executaAcao(Pedido $pedido) : void;
}
