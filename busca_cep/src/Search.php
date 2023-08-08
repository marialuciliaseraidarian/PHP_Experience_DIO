<?php

namespace LuciliaSeraidarian\BuscaCep;

use LuciliaSeraidarian\BuscaCep\WS\viacep;

class Search
{
    public function getAddressFromZipcode(string $zipCode): array
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode); // se tiver caracter que não for múmero ele irá retirar

        return $this->getFormServer($zipCode);
    }

    private function getFormServer(string $zipCode): array
    {
        $get = new ViaCep();
        return $get->get($zipCode);
    }
}
