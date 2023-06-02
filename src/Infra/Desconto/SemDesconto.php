<?php

namespace Julio\Projeto\Infra\Desconto;

use Julio\Projeto\Domain\Desconto\DescontoImplement;
use Julio\Projeto\Domain\Orcamento\Orcamento;

class SemDesconto extends DescontoImplement
{

    private string $nameDesconto = "Sem desconto";

    public function __construct()
    {
        parent::__construct(null);
    }

    public  function calculaDesconto(Orcamento $orcamento): string
    {
       return $this->getNameDesconto();
    }

    public function verifyDesconto(Orcamento $orcamento): bool
    {
        return false;
    }

    public function getNameDesconto(): string
    {
        return $this->nameDesconto;
    }
}
