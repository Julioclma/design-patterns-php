<?php


namespace Julio\Projeto\Domain;

use InvalidArgumentException;

class Email
{
    private string $endereco;

    public function __construct(string $endereco)
    {
        $this->validateEmail($endereco);
    }

    private function validateEmail(string $endereco): void
    {

        if (!filter_var($endereco, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("Email inválido");
        }

        $this->endereco = $endereco;
    }

    public function __toString()
    {
        return $this->endereco;
    }
}
