<?php

namespace Julio\Projeto\Aplication\Cliente;

use Julio\Projeto\Domain\Cliente\RepositoryCliente;
use PDO;

class ControllerListCliente
{
    public function executa(RepositoryCliente $repository) : array
    {
        return $repository->list();
    }
}
