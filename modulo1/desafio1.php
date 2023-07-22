<?php

$numero = 10;
$soma = 0;

for($i=1; $i <= $numero; $i++){
    if($i % 3 != 0){
        $soma += $i;
    };
}
    echo $soma;

?> 