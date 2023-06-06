<?php

namespace Julio\Projeto\Domain\Pedido;

use DateTimeInterface;
use Julio\Projeto\Domain\Orcamento\Orcamento;

class Pedido
{
    public string $nomeCliente;
    public DateTimeInterface $dataFinalizacao;
    public Orcamento $orcamento;
}
