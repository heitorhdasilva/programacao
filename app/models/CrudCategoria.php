<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 09/03/18
 * Time: 08:55
 */
require "DBConnection.php";
require "Categoria.php";


class CrudCategoria
{
    private $conexao;

    public function getCategoria(int $id){
        $this->conexao = DBConnection::getConexao();

        $sql = "select * from categoria where id_categoria = ".$id;

        $result = $this->conexao->query($sql);

        $categoria = $result->fetch(PDO::FETCH_ASSOC);

        $objcat = new Categoria($categoria['id_categoria'],$categoria['nome_categoria'],$categoria['descricao_categoria']);

        return $objcat;
    }

    public function getCategorias(){
        $this->conexao = DBConnection::getConexao();

        $sql = 'select * from categoria';

        $result = $this->conexao->query($sql);

        $categorias = $result->fetchAll(PDO::FETCH_ASSOC);
    }
}