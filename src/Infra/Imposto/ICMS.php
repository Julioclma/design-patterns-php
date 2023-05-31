<?php

namespace Julio\Projeto\Infra\Imposto;

use Julio\Projeto\Domain\Imposto\ImpostoInterface;
use Julio\Projeto\Domain\Orcamento\Orcamento;

class ICMS implements ImpostoInterface
{
    public function calcula(Orcamento $orcamento): float
    {
        return $orcamento->getValor() * 0.1;
    }
}
