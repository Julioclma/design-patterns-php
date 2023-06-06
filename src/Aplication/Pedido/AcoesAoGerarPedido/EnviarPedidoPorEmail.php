<?php

namespace Julio\Projeto\Aplication\Pedido\AcoesAoGerarPedido;

use Julio\Projeto\Domain\Pedido\Pedido;

class EnviarPedidoPorEmail implements AcaoAposGerarPedidoInterface
{
    public function executaAcao(Pedido $pedido) : void
    {
        echo 'eviando pedido para email';
    }
}
