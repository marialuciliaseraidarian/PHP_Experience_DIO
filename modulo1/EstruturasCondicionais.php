<?php
//Operadores lógicos:

$bool = true && false; // false
var_dump($bool);

$bool = (true or (true and false)); // em php o que vem em parênteses tem precedência de execução.
var_dump($bool);

//Condicional IF:

$variavel1 = true;
$variavel2 = true;
$variavel3 = true;

if($variavel1 == $variavel2) {
    echo "As variáveis são iguais." . "\n";
}

if($variavel1 == $variavel3 && 10 > 5) {
    echo "As variáveis são iguais e 10 é maior que cinco." . "\n";
    if(8 != 4) {
        echo "Diferente." . "\n";
    }
}

// condicional if-else:
   
    $nota = 2;
    
    if($nota >=7){
        echo "Aluno aprovado!" . "\n"; 
    } else {
        echo "Aluno reprovado!" . "\n"; 
    };
    
    // A mesma operação acima só que com if ternário:
    
        echo $nota >= 7 ? "Aluno aprovado!" . "\n" : "Aluno reprovado!" . "\n";
    
    // o que vem depois dos : é a mensagem exibida no else,
     //ou seja se a primeira expressão não for verdadeira aparecerá a mensagem depois dos :

// condicional if-elseif-else:

    if ($nota >= 7){
        echo "Aluno aprovado!" . "\n";
    } else if (($nota < 7) && ($nota >= 4)){
        echo "Aluno está em recuperação!" . "\n";
    } else if (($nota < 4) && ($nota >= 2)){
        echo "Aluno está em conselho de classe!" . "\n";       
    } else {
        echo "Aluno reprovado!" . "\n";
    }

    //condicional Switch case:

    $sorteio = rand(0,5);
    echo "Valor sorteado: " . $sorteio . "\n";
    switch($sorteio){
        case 0:
            echo "Você ganhou 2 pontos" . "\n";
            break;
        case 1:
            echo "Você ganhou 1 pontos" . "\n";
            break;
        case 2:
            echo "Você ganhou um bônus! Parabéns ganhou 3 pontos" . "\n";
            break;
        default:
            echo "Jogue novamente" . "\n";
            break;                  
    }

    

?>