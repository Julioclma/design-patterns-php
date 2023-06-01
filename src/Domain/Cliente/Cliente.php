<?php

namespace Julio\Projeto\Domain\Cliente;

use Julio\Projeto\Domain\Email;

class Cliente
{

    private string $name;
    private Email $email;
    private string $age;


    public function __construct(string $name, string $email, string $age)
    {
        $this->name = $name;
        $this->email = new Email($email);
        $this->age = $age;
    }

   
    public function getName() : string
    {
        return $this->name;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function getAge() : string
    {
        return $this->age;
    }
}
