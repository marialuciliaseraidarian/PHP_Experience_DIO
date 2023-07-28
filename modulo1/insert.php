<?php

declare(strict_types=1);

$pdo = require 'conexaoBancoDados.php'; //importa a conexão com o banco feita no aquivo conexaoBancoDados.php
$sql = 'insert into produtos(descricao) values(?)'; //cria a query sql, que neste caso é um insert

$prepare = $pdo->prepare($sql); //prepara para receber o atributo
$prepare->bindParam(1, $_GET['descricao']); //faz a atribuição 
$prepare->execute(); //executa de fato a instrução sql

echo $prepare->rowCount(); //método da classe PDO, exibe o núm de linha afetadas numa instrução


