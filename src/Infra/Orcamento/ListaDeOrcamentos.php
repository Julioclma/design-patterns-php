<?php

namespace Julio\Projeto\Infra\Orcamento;

use ArrayIterator;
use IteratorAggregate;
use Julio\Projeto\Domain\Orcamento\Orcamento;

class ListaDeOrcamentos implements IteratorAggregate
{

    private array $orcamentos;
    private array $orcamentosFinalizados;

    public function __construct()
    {
        $this->orcamentos = [];
        $this->orcamentosFinalizados = [];
    }
    public function addOrcamento(Orcamento $orcamento): ListaDeOrcamentos
    {
        $this->orcamentos[] = $orcamento;

        return $this;
    }



    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->orcamentos);
    }

    public function orcamentosFinalizados(): array
    {
        foreach ($this->orcamentos as $orcamento) {
            if ($orcamento->estadoAtual instanceof Finalizado) {
                $this->orcamentosFinalizados[] = $orcamento;
            }
        }
        return $this->orcamentosFinalizados;
    }
}
