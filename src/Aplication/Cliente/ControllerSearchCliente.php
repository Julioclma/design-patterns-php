<?php

namespace Julio\Projeto\Aplication\Cliente;

use Julio\Projeto\Domain\Cliente\Cliente;
use Julio\Projeto\Domain\Cliente\RepositoryCliente;
use PDO;

class ControllerSearchCliente
{
    public function executa(RepositoryCliente $repository, string $email): array
    {
        $cliente = $repository->search($email);

        return [
            'name' => $cliente->getName(),
            'email' => $cliente->getEmail(),
            'age' => $cliente->getAge()
        ];
    }
}
