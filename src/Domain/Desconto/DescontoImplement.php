<?php

namespace Julio\Projeto\Domain\Desconto;

use Julio\Projeto\Domain\Orcamento\Orcamento;

abstract class DescontoImplement
{
    protected ?DescontoImplement $nextDesconto;
    public function __construct(?DescontoImplement $nextDesconto)
    {
        $this->nextDesconto = $nextDesconto;
    }

    abstract public function calculaDesconto(Orcamento $orcamento): string;

    abstract public function verifyDesconto(Orcamento $orcamento): bool;

    abstract public function getNameDesconto() : string;

}
