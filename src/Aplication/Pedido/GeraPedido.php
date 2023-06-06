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

    public function getOrcamento(): float
    {
        return $this->valorOrcamento;
    }

    public function getNumItens(): int
    {
        return $this->numeroItens;
    }

    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }
    
}
