<?php

namespace LuciliaSeraidarian\BuscaCep\ws;

class viacep
{
    private $url = "https://viacep.com.br/ws/";

    public function get(string $zipCode): array
    {
        $get = file_get_contents($this->url . $zipCode . "/json");
        return (array) json_decode($get);
    }
}
