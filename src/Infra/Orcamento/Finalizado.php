<?php

namespace Julio\Projeto\Infra\Orcamento;

use DomainException;
use Julio\Projeto\Domain\Orcamento\EstadosOrcamento\EstadoOrcamento;
use Julio\Projeto\Domain\Orcamento\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function aplicaDescontoExtra(Orcamento $orcamento): float
    {
       throw new DomainException("Um orçamento finalizado não pode receber desconto!");
       
    }

    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return 0;
    }
}
