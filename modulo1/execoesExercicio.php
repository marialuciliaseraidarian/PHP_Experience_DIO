<?php

function divisao($num1, $num2)
{
    if($num1 == 0 || $num2 == 0)
    {
        throw new Exception("Número inválido, insira um número maior que zero.");
    } else {
        $resultado = $num1 / $num2;
        return $resultado;
    }    
}

$num1 = 6;
$num2 = 0;

try {
    $status = divisao($num1, $num2);
} catch (Exception $e) {
    echo $e->getMessage();
    die();
} 

echo "O resultado da divisão é: " . (divisao($num1, $num2));