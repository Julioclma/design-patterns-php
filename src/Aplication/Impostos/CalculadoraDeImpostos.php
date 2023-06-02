<?php


namespace Julio\Projeto\Aplication\Impostos;
use Julio\Projeto\Domain\Imposto\ImpostoInterface;
use Julio\Projeto\Domain\Orcamento\Orcamento;

class CalculadoraDeImpostos
{

    public function executa(ImpostoInterface $imposto, Orcamento $orcamento): float
    {
      return  $imposto->calcula($orcamento);
    }
}
