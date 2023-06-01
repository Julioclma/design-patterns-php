<?php

namespace Julio\Projeto\Infra\Cliente;

use Julio\Projeto\Domain\Cliente\Cliente;
use Julio\Projeto\Domain\Cliente\RepositoryCliente;
use PDO;

class RepositoryClientePDO implements RepositoryCliente
{

    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    function list(): array
    {
        $query = "SELECT * FROM clientes";

        $stmt = $this->pdo->prepare($query);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function add(Cliente $cliente): bool
    {
        $query = "INSERT INTO clientes VALUES(:name, :email, :age)";

        $stmt = $this->pdo->prepare($query);

        $stmt->bindValue(':name', $cliente->getName());

        $stmt->bindValue(':email', $cliente->getEmail());

        $stmt->bindValue(':age', $cliente->getAge());

        return $stmt->execute();
    }

    public function search(string $email): Cliente
    {
        $query = "SELECT clientes WHERE :email = email";

        $stmt = $this->pdo->prepare($query);

        $stmt->bindValue(':email', $email);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function remove(string $email): bool
    {
        $query = "DELETE clientes WHERE :email = email";

        $stmt = $this->pdo->prepare($query);

        $stmt->bindValue(':email', $email);

        return $stmt->execute();
    }

    public function edit(string $email, Cliente $cliente): bool
    {
        $query = "UPDATE clientes VALUES(:name, :email, :age) WHERE :email = email";

        $stmt = $this->pdo->prepare($query);

        $stmt->bindValue(':name', $cliente->getName());

        $stmt->bindValue(':email', $cliente->getEmail());

        $stmt->bindValue(':age', $cliente->getAge());

        return $stmt->execute();
    }
}
