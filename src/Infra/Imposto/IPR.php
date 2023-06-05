<?php

namespace Julio\Projeto\Infra\Imposto;

use Julio\Projeto\Domain\Orcamento\Orcamento;

class IPR extends ImpostoSobreQuantidadeValor
{
    protected function checaImpostoDeQuantidade(Orcamento $orcamento): float
    {
        if ($orcamento->getQuantidade() > 5) {
            return $orcamento->getValor() * 0.05;
        }

        return 0;
    }

    protected function checaImpostoDeValor(Orcamento $orcamento): float
    {

        if ($orcamento->getValor() > 1000) {
            return $orcamento->getValor() * 0.1;
        }
        return 0;
    }
}
