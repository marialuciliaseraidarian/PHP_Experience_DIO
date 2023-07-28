<?php

declare(strict_types=1);

$pdo = require 'conexaoBancoDados.php';
$sql = 'update produtos set descricao = ? where id = ?';
//A interrogação quer dizer que será selecionado pelo usuário, no momento não se sabe qual é.
$prepare = $pdo->prepare($sql); //prepara a instrução sql para receber o atributo
//A ordem do bindParam tem que seguir a ordem da instrução $sql acima: primeiro descrição depois o id
$prepare->bindParam(1, $_GET['descricao']); //faz a atribuição do parametro de descricao 
$prepare->bindParam(2, $_GET['id']); ////faz a atribuição do parametro de id

$prepare->execute(); //executa de fato a instrução sql

echo $prepare->rowCount(); //método da classe PDO, exibe o núm de linhas afetadas com a instrução


