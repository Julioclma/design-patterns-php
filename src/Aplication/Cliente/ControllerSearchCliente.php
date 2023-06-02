<?php

namespace Julio\Projeto\Aplication\Cliente;

use Julio\Projeto\Domain\Cliente\Cliente;
use Julio\Projeto\Infra\Cliente\RepositoryClientePDO;
use PDO;

class ControllerSearchCliente
{
    public function executa(RepositoryClientePDO $repository, string $email): array
    {
        $cliente = $repository->search($email);

        return [
            'name' => $cliente->getName(),
            'email' => $cliente->getEmail(),
            'age' => $cliente->getAge()
        ];
    }
}
