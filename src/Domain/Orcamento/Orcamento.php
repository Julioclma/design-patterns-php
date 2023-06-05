<?php

namespace Julio\Projeto\Domain\Orcamento;

use InvalidArgumentException;
use Julio\Projeto\Domain\Orcamento\EstadosOrcamento\EstadoOrcamento;
use Julio\Projeto\Infra\Orcamento\EmAprovacao;

class Orcamento
{
    private float $valor;
    private int $quantidadeItens;
    public EstadoOrcamento $estadoAtual;


    public function __construct(float $valor, int $quantidadeItens)
    {
        $this->setValor($valor);
        $this->setQuantidade($quantidadeItens);
        $this->estadoAtual = new EmAprovacao;
    }
    private function setValor(float $valor): void
    {
        if ($valor <= 0) {
            throw new InvalidArgumentException("Valor deve ser maior que 0");
        }

        $this->valor = $valor;
    }

    private function setQuantidade(int $quantidadeItens): void
    {
        if ($quantidadeItens < 0) {
            throw new InvalidArgumentException("Quantidade não pode ser menor que zero");
        }
        $this->quantidadeItens = $quantidadeItens;
    }

    public function getQuantidade(): int
    {
        return $this->quantidadeItens;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function aplicaDescontoExtra(): void
    {
        $this->valor -=  $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova(): void
    {
        $this->estadoAtual->aprova($this);
    }

    public function reprova(): void
    {
        $this->estadoAtual->reprova($this);
    }

    public function finaliza(): void
    {
        $this->estadoAtual->finaliza($this);
    }
}
