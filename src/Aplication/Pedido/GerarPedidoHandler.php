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

    private array $acoesAoGerarPedido;

    public function __construct(/*Pedido repository*/)
    {
    }

    public function adicionarAcaoAoGerarPedido(array $acoes): void
    {
        foreach ($acoes as  $acao) {
            $this->acoesAoGerarPedido[] = $acao;
        }
    }

    public function executa(GeraPedido $gerarPedido)
    {
        $orcamento = new Orcamento($gerarPedido->getOrcamento(), $gerarPedido->getNumItens());

        $pedido = new Pedido();

        $pedido->dataFinalizacao = new \DateTimeImmutable();

        $pedido->nomeCliente = $gerarPedido->getNomeCliente();

        $pedido->orcamento = $orcamento;

        $this->adicionarAcaoAoGerarPedido([new CriarPedidoNoBanco(), new EnviarPedidoPorEmail(), new GerarLog()]);

        foreach ($this->acoesAoGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }
}
