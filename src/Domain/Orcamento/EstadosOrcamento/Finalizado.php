<?php

namespace Julio\Projeto\Domain\Orcamento\EstadosOrcamento;

use DomainException;
use Julio\Projeto\Domain\Orcamento\Orcamento;

class Finalizado
{
    public function aplicaDescontoExtra(Orcamento $orcamento): float
    {
       throw new DomainException("Um orçamento finalizado não pode receber desconto!");
       
    }

}
