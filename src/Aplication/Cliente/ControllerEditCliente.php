<?php

namespace Julio\Projeto\Aplication\Cliente;

use Julio\Projeto\Domain\Cliente\Cliente;
use Julio\Projeto\Infra\Cliente\RepositoryClientePDO;
use PDO;

class ControllerEditCliente
{
    public function executa(PDO $pdo, string $emailAntigo, string $emailNovo, string $name, string $age) : bool
    {

      return  (new RepositoryClientePDO($pdo))->edit($emailAntigo, new Cliente($name, $emailNovo, $age));

    }

}
