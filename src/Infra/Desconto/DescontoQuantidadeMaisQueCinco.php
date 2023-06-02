<?php

namespace Julio\Projeto\Infra\Desconto;

use Julio\Projeto\Domain\Desconto\DescontoImplement;
use Julio\Projeto\Domain\Orcamento\Orcamento;

class DescontoQuantidadeMaisQueCinco extends DescontoImplement
{
    private string $nameDesconto = "Mais que 5 produtos";
    public function __construct()
    {
        parent::__construct(new SemDesconto);
    }
    public  function calculaDesconto(Orcamento $orcamento): string
    {
        if ($this->verifyDesconto($orcamento)) {

            return "Nome do Desconto: " . $this->getNameDesconto() . " - Desconto: " . $orcamento->getValor() * 0.15;
        }

        return $this->nextDesconto->calculaDesconto($orcamento);
    }

    public function verifyDesconto(Orcamento $orcamento): bool
    {
        if ($orcamento->getQuantidade() > 5) {
            return true;
        }
        return false;
    }

    public function getNameDesconto(): string
    {
        return $this->nameDesconto;
    }
}
