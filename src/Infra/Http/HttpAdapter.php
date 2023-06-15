<?php

namespace Julio\Projeto\Infra\Http;

interface HttpAdapter
{
public function post (string $url, array $data = []) : void;
}
