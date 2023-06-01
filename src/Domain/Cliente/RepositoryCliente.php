<?php

namespace Julio\Projeto\Domain\Cliente;

interface RepositoryCliente
{
    public function list() : array;
    public function add(Cliente $cliente): bool;
    public function search(string $email): Cliente;
    public function remove(string $email): bool;
    public function edit(string $email, Cliente $cliente): bool;
}
