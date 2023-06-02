<?php

namespace Julio\Projeto\Domain\Desconto;

use Julio\Projeto\Domain\Orcamento\Orcamento;

interface DescontoInterface
{

    public function calcula(Orcamento $orcamento): float;

    public function verifyDesconto(Orcamento $orcamento): bool;
}
