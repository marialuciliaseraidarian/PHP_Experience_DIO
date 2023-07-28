<?php

declare(strict_types=1);

class Venda
{
    private $data;
    private $produto;
    private $quantidade;
    private $valorTotal;

    public function __construct(
        $data,
        $produto,  
        $quantidade,
        $valorTotal,
    ) {
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;            
    }

    public function visualizarVenda()
    {
        return $this->data ."\n" .$this->produto ."\n" . $this->quantidade ."\n" .$this->valorTotal;
    }
}

$venda = new Venda(
    '21/07/2023',
    'Perfume',
    '1',
    '97,00'  
);

var_dump($venda);
echo($venda->visualizarVenda());