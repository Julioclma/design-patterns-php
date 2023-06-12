<?php

namespace Julio\Projeto\Aplication\Pedido;

use Julio\Projeto\Aplication\Pedido\AcoesAoGerarPedido\AcaoAposGerarPedidoInterface;
use Julio\Projeto\Aplication\Pedido\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Julio\Projeto\Aplication\Pedido\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Julio\Projeto\Aplication\Pedido\AcoesAoGerarPedido\GerarLog;
use Julio\Projeto\Domain\Orcamento\Orcamento;
use Julio\Projeto\Domain\Pedido\Pedido;

class GerarPedidoHandler
{
    public function __construct(/*Pedido repository*/)
    {
    }

    public function adicionarAcaoAoGerarPedido(array $acoes, Pedido $pedido): void
    {
        foreach ($acoes as  $acao) {
            $acao->executaAcao($pedido);
        }
    }

    public function executa(GeraPedido $gerarPedido)
    {
        $orcamento = new Orcamento($gerarPedido->getOrcamento(), $gerarPedido->getNumItens());

        $pedido = new Pedido();

        $pedido->dataFinalizacao = new \DateTimeImmutable();

        $pedido->nomeCliente = $gerarPedido->getNomeCliente();

        $pedido->orcamento = $orcamento;

        $this->adicionarAcaoAoGerarPedido([new CriarPedidoNoBanco(), new EnviarPedidoPorEmail(), new GerarLog()], $pedido);
    }
}
