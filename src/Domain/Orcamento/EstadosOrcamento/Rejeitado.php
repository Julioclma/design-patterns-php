<?php

namespace Julio\Projeto\Domain\Orcamento\EstadosOrcamento;

use DomainException;
use Julio\Projeto\Domain\Orcamento\Orcamento;

class Rejeitado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException("Um orçamento rejeitado não pode receber desconto!");
    }

    public function finaliza(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Finalizado;
    }
}
