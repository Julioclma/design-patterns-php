<?php

namespace Julio\Projeto\Aplication\Pedido;

use Julio\Projeto\Domain\Orcamento\Orcamento;
use Julio\Projeto\Domain\Pedido\Pedido;

class GeraPedido
{

    private float $valorOrcamento;
    private int $numeroItens;
    private string $nomeCliente;


    public function __construct(float $valorOrcamento, int $numeroItens, string $nomeCliente)
    {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroItens = $numeroItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function executa()
    {

        $orcamento = new Orcamento($this->valorOrcamento, $this->numeroItens);

        $pedido = new Pedido();

        $pedido->dataFinalizacao = new \DateTimeImmutable();

        $pedido->nomeCliente = $this->nomeCliente;

        $pedido->orcamento = $orcamento;
    }
}
