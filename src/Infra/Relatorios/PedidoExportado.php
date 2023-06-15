<?php

namespace Julio\Projeto\Infra\Relatorios;

use Julio\Projeto\Domain\Pedido\Pedido;

class PedidoExportado  implements ConteudoExportado
{

    private Pedido $pedido;
    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }
    function conteudo(): array
    {
        return [
            'nome' => $this->pedido->nomeCliente,
            'data' => $this->pedido->dataFinalizacao
        ];
    }
}
