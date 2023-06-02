<?php

namespace Julio\Projeto\Aplication\Cliente;

use Julio\Projeto\Domain\Cliente\Cliente;
use Julio\Projeto\Domain\Cliente\RepositoryCliente;
use PDO;

class ControllerEditCliente
{
    public function executa(RepositoryCliente $repository, string $emailAntigo, string $emailNovo, string $name, string $age) : bool
    {

      return  $repository->edit($emailAntigo, new Cliente($name, $emailNovo, $age));

    }

}
