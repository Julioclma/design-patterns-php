<?php

namespace Julio\Projeto\Domain\Imposto;

use Julio\Projeto\Domain\Orcamento\Orcamento;


abstract class ImpostoInterface
{

    private ?ImpostoInterface $outroImposto;
    abstract protected function realizaCalculoEspecifico(Orcamento $orcamento): float;

    public function __construct(ImpostoInterface $outroImposto = null)
    {
        $this->outroImposto = $outroImposto;
    }   
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $this->realizaCalculoEspecifico($orcamento) + $this->outroImposto->realizaCalculoDeOutroImposto($orcamento); //calculo de outro imposto
    }

    private function realizaCalculoDeOutroImposto(Orcamento $orcamento): float
    {
        return $this->outroImposto === null ? 0 : $this->outroImposto->calculaImposto($orcamento);
    }
}
