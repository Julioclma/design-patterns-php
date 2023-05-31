<?php

namespace Julio\Projeto\Domain\Imposto;
use Julio\Projeto\Domain\Orcamento\Orcamento;


interface ImpostoInterface
{
    public function calcula(Orcamento $orcamento): float;

}
