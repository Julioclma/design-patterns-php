<?php

namespace Julio\Projeto\Infra\Http;

class CurlImplementation implements HttpAdapter
{
    function post(string $url, array $data = []): void
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, $data);
        curl_exec($curl);
    }
}
