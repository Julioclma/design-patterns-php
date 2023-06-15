<?php

namespace Julio\Projeto\Aplication\ApiOrcamento;

use DomainException;
use Julio\Projeto\Domain\Orcamento\Orcamento;
use Julio\Projeto\Infra\Http\HttpAdapter;
use Julio\Projeto\Infra\Orcamento\Finalizado;

class RegistroDeOrcamento
{
    private HttpAdapter $http;
    public function __construct(HttpAdapter $http)
    {
        $this->http = $http;
    }

    public function registrar(Orcamento $orcamento): void
    {
        if (!$orcamento->estadoAtual instanceof Finalizado) {
            throw new DomainException("Apenas orçamentos finalizados podem ser registrados!");
        }
        
        $this->http->post('http://api.registrar.orcamento', [
            'estadoAtual' => $orcamento->estadoAtual,
            'quantidadeItens' => $orcamento->getQuantidade(),
            'valor' => $orcamento->getValor()
        ]);
    }
}
