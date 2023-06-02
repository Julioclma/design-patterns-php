<?php

namespace Julio\Projeto\Infra\Desconto;

use Julio\Projeto\Domain\Desconto\DescontoInterface;
use Julio\Projeto\Domain\Orcamento\Orcamento;

class VerificadorDeDescontos implements DescontoInterface
{
    private DescontoInterface $nextDesconto;

    public function __construct(Orcamento $orcamento)
    {
        $this->nextDesconto = new DescontoMaiorQue500Reais($orcamento);
    }
    function calcula(Orcamento $orcamento): float
    {
        return $this->nextDesconto->calcula($orcamento);
    }

    public function verifyDesconto(Orcamento $orcamento): bool
    {
        return false;
    }
}
