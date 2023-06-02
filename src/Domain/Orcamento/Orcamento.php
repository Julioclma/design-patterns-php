<?php

namespace Julio\Projeto\Domain\Orcamento;

use InvalidArgumentException;

class Orcamento
{
    private float $valor;
    private int $quantidadeItens;

    public function __construct(float $valor, int $quantidadeItens)
    {
        $this->setValor($valor);
        $this->setQuantidade($quantidadeItens);
    }
    private function setValor(float $valor): void
    {
        if ($valor <= 0) {
            throw new InvalidArgumentException("Valor deve ser maior que 0");
        }

        $this->valor = $valor;
    }

    private function setQuantidade(int $quantidadeItens): void
    {
        if ($quantidadeItens < 0) {
            throw new InvalidArgumentException("Quantidade não pode ser menor que zero");
        }
        $this->quantidadeItens = $quantidadeItens;
    }

    public function getQuantidade() : int
    {
        return $this->quantidadeItens;
    }

    public function getValor(): float
    {
        return $this->valor;
    }
}
