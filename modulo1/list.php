<?php

declare(strict_types=1);

$pdo = require 'conexaoBancoDados.php';
$sql = 'select * from produtos';

echo '<h3>Produtos: </h3>';

foreach ($pdo->query($sql) as $key => $value) {
    echo 'id: ' . $value['id'] . '<br> Descrição: ' .$value['descricao'] . '<hr>';
}
