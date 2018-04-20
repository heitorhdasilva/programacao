<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 20/04/18
 * Time: 15:51
 */
require "DBConnection.php";
require "Produto.php";
class CrudProduto
{
    private $conexao;

    public function getProduto(int $id){
        $this->conexao = DBConnection::getConexao();

        $sql = "select * from produto where id_produto = ".$id;

        $result = $this->conexao->query($sql);

        $produto = $result->fetch(PDO::FETCH_ASSOC);

        $objcat = new Produto($produto['id_produto'],$produto['nome_produto'],$produto['descricao_produto'],$produto['preco_produto'],$produto['id_categoria']);

        return $objcat;
    }

    public function getProdutos(){
        $this->conexao = DBConnection::getConexao();

        $sql = 'select * from produto';

        $result = $this->conexao->query($sql);
        $produtos = $result->fetchAll(PDO::FETCH_ASSOC);
        $listaProdutos = [];
        foreach ($produtos as $produto){
            $listaProdutos[] = new Produto($produto['id_produto'],$produto['nome_produto'],$produto['descricao_produto'],$produto['preco_produto'],$produto['id_categoria']);
        }
        return $listaProdutos;
    }
}