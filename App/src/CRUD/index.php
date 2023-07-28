<?php

//arquivo de entrada, onde se visualiza no browser.
require 'Produto.php';

$produto = new Produto();

switch ($_GET['operacao']) {

    case 'list':

        echo '<h3>Produtos: </h3>';

        foreach ($produto->list() as $value) {
            echo 'id: ' . $value['id'] . '<br> Descrição: ' .$value['descricao'] . '<hr>';
        }
        break;

    case 'insert':
        $status = $produto->insert('Produto');//irá inserir Produto, numa aplicação real tem que colocar dinamicamente
        if(!$status) {
            echo "Não foi possível executar a operação!";
            return false;
        }

        echo "Registro inserido com sucesso!";

        break;

    case 'update':

         $status = $produto->update('Produto03', 4);

         if(!$status) {
            echo "Não foi possível executar a operação!";
            return false;
        }

        echo "Registro atualizado com sucesso!";

        break;

    case 'delete':
        $status = $produto->delete($id);
       
        if(!$status) {
            echo "Não foi possível executar a operação!";
            return false;
        }

        echo "Registro removido com sucesso!";

        break;

    default:
        # code...
        break;
}