<?php

namespace Julio\Projeto\Aplication\Pedido\AcoesAoGerarPedido;
use Julio\Projeto\Domain\Pedido\Pedido;

class CriarPedidoNoBanco
{
    public function executaAcao(Pedido $pedido) : void
    {
        echo 'salvando pedido no banco de dados';
    }
}
