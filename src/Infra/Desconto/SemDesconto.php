<?php

namespace Julio\Projeto\Infra\Desconto;

use Julio\Projeto\Domain\Desconto\DescontoInterface;
use Julio\Projeto\Domain\Orcamento\Orcamento;

class SemDesconto implements DescontoInterface
{

    public function __construct(Orcamento $orcamento)
    {
        $this->verifyDesconto($orcamento);
    }
    public function calcula(Orcamento $orcamento): float
    {
        return 0;
    }

    public function verifyDesconto(Orcamento $orcamento): bool
    {
        return false;
    }
}
