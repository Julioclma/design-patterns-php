<?php

namespace Julio\Projeto\Infra\Imposto;

use Julio\Projeto\Domain\Orcamento\Orcamento;

class IPR extends ImpostoSobreQuantidadeValor
{
    public function checaImpostoDeQuantidade(Orcamento $orcamento): float
    {
        if ($orcamento->getQuantidade() > 5) {
            return $orcamento->getValor() * 0.05;
        }

        return 0;
    }

    public function checaImpostoDeValor(Orcamento $orcamento): float
    {

        if ($orcamento->getValor() > 1000) {
            return $orcamento->getValor() * 0.1;
        }
        return 0;
    }
}
