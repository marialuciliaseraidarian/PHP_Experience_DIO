<?php

//fazendo uma conexão com uma base de dados:

declare(strict_types=1);

$pdo = null; //nesta variável é que vamos atribuir a conexão ao banco de dados 

try{
    $pdo = new PDO('mysql:host=localhost;dbname=exemplo', 'root', ''); 
    //('tipo do banco de dados:host=host do banco de dados;nome do banco de dados', 'usuário(root)', 'senha')
}catch(Exception $e){
    echo $e->getMessage();
    die();
}

return $pdo;