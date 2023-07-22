<?php

//Exemplo de tratamento de exceção com InvalidArgumentException:

function f1() {
    echo "F1 está antes da exceção" . "\n";
}

function f2($int) {
    try{
        if(!is_int($int)) {
        throw new Exception("O argumento não é do tipo esperado");
        }else{
             echo "F2 está na exceção" . "\n";
        }
        f3();
    } catch(Exception){
        echo "O argumento não é do tipo esperado" . "\n";
    }
}

function f3() {
    echo "F3 está depois da exceção"  . "\n";
}

f1();
f2(int: 5.5); 

//Exemplo de tratamento de exceção com RangeException:

function divisao($dividendo, $divisor) {
    try{
        if($divisor == 0) {
        throw new RangeException("O número não pode ser dividodo por zero");
        }

        $resultado = $dividendo / $divisor;
        echo "O resultado é: " .$resultado;
    } catch(Exception) {
        echo "O número não pode ser dividido por zero, por favor, insira um número válido" . "\n";
    } finally{
        echo "Tratando exceções";
    }
}


divisao(10,0);

/* O finally é opcional e ele é imprimido na tela tendo ou não acontecido a exceção, é uma finalização.
Nos dois exemplos acima foram aplicados o modo do PHP8,
no modo tracional se usa no catch a variável error ($e), exemplo:

    catch(Exception $e){
        echo $e->getMessage();        
    } */


?>
