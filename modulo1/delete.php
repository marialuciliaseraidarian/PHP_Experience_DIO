<?php

declare(strict_types=1);

$pdo = require 'conexaoBancoDados.php';
$sql = 'delete from produtos where id = ?';

$prepare = $pdo->prepare($sql); 

$prepare->bindParam(1, $_GET['id']); 
//O número 1 que está dentro do parênteses do bindParam quer dizer que é o primeiro parâmetro descrito na instrução sql, que neste caso é o id
$prepare->execute(); 

echo $prepare->rowCount(); 


