<?php

namespace Julio\Projeto\Infra\Desconto;

use Julio\Projeto\Domain\Desconto\DescontoImplement;
use Julio\Projeto\Domain\Orcamento\Orcamento;

class DescontoMaiorQue500Reais extends DescontoImplement
{

    private string $nameDesconto = "Mais que 500 reais";

    public function __construct()
    {
        parent::__construct(new DescontoQuantidadeMaisQueCinco);
    }
    public  function calculaDesconto(Orcamento $orcamento): string
    {
        if ($this->verifyDesconto($orcamento)) {

            return "Nome do Desconto: ".$this->getNameDesconto(). " - Desconto: ".$orcamento->getValor() * 0.1;
        }

        return $this->nextDesconto->calculaDesconto($orcamento);
    }

    public function verifyDesconto(Orcamento $orcamento): bool
    {
        if ($orcamento->getValor() > 500) {
            return true;
        }
        return false;
    }

    public function getNameDesconto() : string
    {
        return $this->nameDesconto;
    }
}
