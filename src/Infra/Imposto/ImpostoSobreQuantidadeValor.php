<?php

namespace Julio\Projeto\Infra\Imposto;

use Julio\Projeto\Domain\Imposto\ImpostoInterface;
use Julio\Projeto\Domain\Orcamento\Orcamento;

abstract class ImpostoSobreQuantidadeValor implements ImpostoInterface
{
    public function calcula(Orcamento $orcamento): float
    {
        return $this->checaImpostoDeQuantidade($orcamento) + $this->checaImpostoDeValor($orcamento);
    }

    protected abstract function checaImpostoDeQuantidade(Orcamento $orcamento): float;
    protected abstract function checaImpostoDeValor(Orcamento $orcamento): float;
}
