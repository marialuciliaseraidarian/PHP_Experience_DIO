<?php

use PHPUnit\Framework\TestCase; // importa o TestCase do framework PHPUnit para podermos usá-la
use LuciliaSeraidarian\BuscaCep\Search; //importa a classe que queremos testar, nesta caso a Search

class SearchTest extends TestCase{

    /**
     * @dataProvider dadosTeste
     */

    public function testGetAddressFromZipcodeDefaultUsage(string $inputCep, array $esperado){

        $resultado = (new Search)->getAddressFromZipcode($inputCep);
      
        $this->assertEquals($esperado, $resultado);        
    }   
    
    public static function dadosTeste(){
        return[
            "Endereço Praça da Sé" => [
                "01001000",
                [
                "cep" => "01001-000",
                "logradouro" => "Praça da Sé",
                "complemento" => "lado ímpar",
                "bairro" => "Sé",
                "localidade" => "São Paulo",
                "uf" => "SP",
                "ibge" => "3550308",
                "gia" => "1004",
                "ddd" => "11",
                "siafi" => "7107"
                ],
            ],

            "Endereço Praça Doutor João Mendes" => [
                "01501000",
                [
                    "cep" => "01501-000",
                    "logradouro" => "Praça Doutor João Mendes",
                    "complemento" => "lado par",
                    "bairro" => "Centro",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ],
            ],

            "Endereço Rua Luís Asson" => [
                "03624010",
                [
                    "cep" => "03624-010",
                    "logradouro" => "Rua Luís Asson",
                    "complemento" => "",
                    "bairro" => "Vila Buenos Aires",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ]
        ];
    }
}