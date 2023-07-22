<?php
//Estruturas de repetição:
//Array: armazena múltiplos valores em uma única variável:
//Tipos de Arrays:
//arrays numéricos
//arrays associativos
//arrays multidimensionais

//Pode-se declarar um array de dois modos: 

$variavel = array("chave", "valor");
print_r($variavel);

$carro = ["Ferrari", "BMW", "Mercebes Benz"];
print_r($carro);

//será impresso:

/* Array
(
    [0] => Ferrari
    [1] => BMW
    [2] => Mercebes Benz
) */

//array associativo, a chave passa ser o que inserimos antes da seta =>
$endereco = [
    'cep' => '20211901',
    'número' => '15',
    'cidade' => 'Rio de Janeiro',
    'estado' => 'RJ'
];

print_r($endereco);

//será impresso:

/* Array
(
    [cep] => 20211901
    [número] => 15
    [cidade] => Rio de Janeiro
    [estado] => RJ
) */

//Um array dentro de outro array:
$enderecoPessoas = [
    'pessoa1' => array(
        'cep' => '20211901',
        'número' => '15',
        'cidade' => 'Rio de Janeiro',
        'estado' => 'RJ'
    ),

    'pessoa2' => [
        'cep' => '07600000',
        'número' => '315',
        'cidade' => 'Mairiporã',
        'estado' => 'SP'
    ],
    ];

    print_r($enderecoPessoas['pessoa1']['cep']); // irá imprimir o cep da pessoa 1

    // proprieade isset verifica se existe a chave antes de fazer a ação.
    if(isset($enderecoPessoas['pessoa1']['cidade'])){
        print_r($enderecoPessoas['pessoa1']['cidade']);
    }else{
        echo "A chave não existe";
    }

    /*Incremento e decremento:
    ++$a => pré-incremento - incrementa antes a variável para depois fazer a ação.
    $a++ => pós-incremento - faz a ação depois incrementa.
    --$a => pré-decremento
    $a-- => pós-decremento
    Exemplo:*/
    $a = null;
    echo "Deve ser : " . ++$a; //imprimirá: Deve ser: 1
    
    //FOR:
    $arrayNumeros = [3, 5, 6, 1, 2];
    $qtd_elementos_array = count($arrayNumeros); //conta quantas posições tem o array.
    var_dump($qtd_elementos_array);

    for ($i=0; $i < 5; $i++) { 
        print_r($arrayNumeros[$i]);
    }

    //Desafio: algoritimo de ordenação

    $arr = [1, 5, 3, 0];
    $qtd_elementos_arr = count($arr); //4
    
    for($i=0; $i< $qtd_elementos_arr -1; $i++){
        for($posicaoAtual=0; $posicaoAtual<$qtd_elementos_arr -$i -1; $posicaoAtual++){
            $proximaPosicao = $posicaoAtual+1; //0

            if($arr[$proximaPosicao] < $arr[$posicaoAtual]){
                $auxiliar = $arr[$posicaoAtual];
                $arr[$posicaoAtual] = $arr[$proximaPosicao];
                $arr[$proximaPosicao] = $auxiliar;
            }

        }

    }
    print_r($arr);

    //esse algoritimo de ordenação pode ser feito por funções do php como a funçao sort
    $listaNumeros = [1, 10, 25, 3, 7, 9, 20, 13];
    sort($listaNumeros); //esse função ordena do nun. menor ao maior
    print_r($listaNumeros);

    /* vai imprimir:
    Array
(
    [0] => 1
    [1] => 3
    [2] => 7
    [3] => 9
    [4] => 10
    [5] => 13
    [6] => 20
    [7] => 25
)
 */

 //Foreach
 $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
 $qtd_elementos_numeros = count($numeros);

 foreach ($numeros as $indice => $value){
    echo "A posição do indice é: ". $indice . ", e o valor é: ". $value . "\n";
 }

/*  imprimirá:
A posição do indice é: 0, e o valor é: 1
A posição do indice é: 1, e o valor é: 2
A posição do indice é: 2, e o valor é: 3
A posição do indice é: 3, e o valor é: 4
A posição do indice é: 4, e o valor é: 5
A posição do indice é: 5, e o valor é: 6
A posição do indice é: 6, e o valor é: 7
A posição do indice é: 7, e o valor é: 8
A posição do indice é: 8, e o valor é: 9
A posição do indice é: 9, e o valor é: 10 */

//para se interromper a execução de um loop a qualquer momento pode-se usar o camando break

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
 $qtd_elementos_numeros = count($numeros);

 foreach ($numeros as $indice => $value){
    if($value == 2){
        break;
    }

    echo "A posição do indice é: ". $indice . ", e o valor é: ". $value . "\n";
 }

 //outra palavra reservada que podemos usar é o continue:

 $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
 $qtd_elementos_numeros = count($numeros);

 foreach ($numeros as $indice => $value){
    if($value % 2 == 0){
        continue;
    }

    echo "A posição do indice é: ". $indice . ", e o valor é: ". $value . "\n";
 }
//neste caso o loop vai pular todos os número que dividos por 2 tem o resultado zero, ou seja os pares.

/* While e Do While

While - verifica e depois faz o que está dentro do escopo.
Do While - primerio executa o que está no escopo depois verifica, então ele sempre vai executar
pelo menos uma vez pois a verificação que está dentro do escopo e verificada ao final da execução */

//Exemplo de while
$frutas = ["banana", "maçã", "pera", "uva"];
$contador = count($frutas);
$i = 0;

while ($i < $contador) {
    if($frutas[$i] == "pera"){
        break;
    }
    echo $frutas[$i] . "\n";
    $i++;
} 

//aqui também podemos usar o break ou o continue.

//exemplo Do While:

do {

    echo $frutas[$i] . "\n";

    $i++;

} while ($i < $contador);  

?>