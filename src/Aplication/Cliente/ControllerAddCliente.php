<?php

namespace Julio\Projeto\Aplication\Cliente;

use Julio\Projeto\Domain\Cliente\Cliente;
use Julio\Projeto\Infra\Cliente\RepositoryClientePDO;
use PDO;

class ControllerAddCliente
{
    public function executa(PDO $pdo, string $name, string $email, string $age): bool
    {
        $cliente = new Cliente($name, $email, $age);

        return (new RepositoryClientePDO($pdo))->add($cliente);
    }
}
