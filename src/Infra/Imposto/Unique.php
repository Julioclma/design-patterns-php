<?php

namespace Julio\Projeto\Infra\Imposto;

use Julio\Projeto\Domain\Imposto\ImpostoInterface;
use Julio\Projeto\Domain\Orcamento\Orcamento;

class Unique implements ImpostoInterface
{
    public function calcula(Orcamento $orcamento): float
    {
        if ($orcamento->getValor() - 5 > 0) {
            return $orcamento->getValor() - 5;
        }

        return $orcamento->getValor();
    }
}
