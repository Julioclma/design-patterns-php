<?php

namespace Julio\Projeto\Aplication\Cliente;

use Julio\Projeto\Infra\Cliente\RepositoryClientePDO;
use PDO;

class ControllerListCliente
{
    public function executa(PDO $pdo) : array
    {
        return (new RepositoryClientePDO($pdo))->list();
    }
}
