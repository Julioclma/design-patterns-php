<?php

namespace Julio\Projeto\Aplication\Cliente;

use Julio\Projeto\Domain\Cliente\Cliente;
use Julio\Projeto\Domain\Cliente\RepositoryCliente;
use PDO;

class ControllerAddCliente
{
    public function executa(RepositoryCliente $repository, string $name, string $email, string $age): bool
    {
        $cliente = new Cliente($name, $email, $age);

        return $repository->add($cliente);
    }
}
