<?php

namespace Julio\Projeto\Aplication\Cliente;

use Julio\Projeto\Domain\Cliente\RepositoryCliente;
use PDO;

class ControllerRemoveCliente
{
    public function executa(RepositoryCliente $repository, string $email): bool
    {
        return $repository->remove($email);
    }
}
