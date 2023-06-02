<?php

namespace Julio\Projeto\Infra\Desconto;

use Julio\Projeto\Domain\Desconto\DescontoInterface;
use Julio\Projeto\Domain\Orcamento\Orcamento;

class DescontoMaiorQue500Reais implements DescontoInterface
{
    private DescontoInterface $nextDesconto;

    public function __construct(Orcamento $orcamento)
    {
        $this->nextDesconto = new DescontoQuantidadeMaisQueCinco($orcamento);
    }
    public  function calcula(Orcamento $orcamento): float
    {
        if ($this->verifyDesconto($orcamento)) {

            return $orcamento->getValor() * 0.1;
        }

        return $this->nextDesconto->calcula($orcamento);
    }

    public function verifyDesconto(Orcamento $orcamento): bool
    {
        if ($orcamento->getValor() > 500) {
            return true;
        }
        return false;
    }
}
