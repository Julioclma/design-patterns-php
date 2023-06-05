<?php

namespace Julio\Projeto\Domain\Orcamento\EstadosOrcamento;

use DomainException;
use Julio\Projeto\Domain\Orcamento\Orcamento;

abstract class EstadoOrcamento
{

    public abstract function calculaDescontoExtra(Orcamento $orcamento): float;

    public function aprova(Orcamento $orcamento) : void
    {
        throw new DomainException("Este orçamento não pode ser aprovado!");
    }

    public function reprova(Orcamento $orcamento) : void
    {
        throw new DomainException("Este orçamento não pode ser reprovado!");
    }

    public function finaliza(Orcamento $orcamento) : void
    {
        throw new DomainException("Este orçamento não pode ser finalizado!");
    }
}
