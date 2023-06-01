<?php

namespace Julio\Projeto\Aplication\Cliente;

use Julio\Projeto\Infra\Cliente\RepositoryClientePDO;
use PDO;

class ControllerRemoveCliente
{
    public function executa(PDO $pdo, string $email): bool
    {
        return (new RepositoryClientePDO($pdo))->remove($email);
    }
}
