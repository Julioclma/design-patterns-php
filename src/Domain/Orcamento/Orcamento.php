<?php

namespace Julio\Projeto\Domain\Orcamento;

use InvalidArgumentException;

class Orcamento
{
    private float $valor;

    public function __construct(float $valor)
    {
        $this->setValor($valor);
    }
    private function setValor(float $valor) : void
    {
        if ($valor <= 0) {
            throw new InvalidArgumentException("Valor deve ser maior que 0");
        }

       $this->valor = $valor;
    }

    public function getValor(): float
    {
        return $this->valor;
    }
}
