<?php

declare(strict_types=1); //faz checagem de tipo

class Produto
{
    //cria a conexão com o BD, e a cada vez que instanciamos a classe vai ser feita a validação com o BD e vai atribuir essa conexão a um atributo de classe, a uma propriedade
    private $conexao;

    public function __construct()
    {
        try {
            $this->conexao = new PDO('mysql:host=localhost;dbname=exemplo', 'root', '');
        } catch (Exception $e) {
            echo $e ->getMessage();
            die();
        }
        
    }

    //métodos responsáveis por realizar as operações na base de dados:       
    //método para inserir produtos:
    public function insert(string $descricao) : int
    {
        $sql = 'insert into produtos(descricao) values(?)';

        $prepare = $this->conexao->prepare($sql);
        $prepare->bindParam(1, $descricao);
        $prepare->execute();

        return $prepare->rowCount();
    }

    //método para listar produtos:
    public function list() : array
    {
        $sql = 'select * from produtos';
        $produtos = [];
        
        foreach ($this->conexao->query($sql) as $key => $value) {
            array_push($produtos, $value); //o parâmetro value é valor que eu quero inserir no array produtos
            //a cada iteração esse valor vai ser adicionado à lista de produtos, ao array produtos por causa do push           
        }
        return $produtos;
    }

    //método para modificar produtos:
    public function update(string $descricao, int $id) : int
    {
        $sql = 'update produtos set descricao = ? where id = ?';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $descricao);
        $prepare->bindParam(2, $id);

        $prepare->execute();
        return $prepare->rowCount();
    }

    //método para deletar produtos:
    public function delete(int $id) : int
    {
        $sql = 'delete from produtos where id = ?';

        $prepare = $this->conexao->prepare($sql); 
        
        $prepare->bindParam(1, $id);

        $prepare->execute();
        return $prepare->rowCount(); 
    }
}