<?php

namespace Julio\Projeto\Aplication\Cliente;

use Julio\Projeto\Infra\Cliente\RepositoryClientePDO;
use PDO;

class ControllerRemoveCliente
{
    public function executa(RepositoryClientePDO $repository, string $email): bool
    {
        return $repository->remove($email);
    }
}
