<?php


require_once  '../models/CrudProduto.php';
require_once  '../models/CrudCategoria.php';


if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao) {
    case 'index':
        echo '<pre>';
        $crud = new CrudProduto();
        $produtos = $crud->getProdutos();
        include '../views/produtos/index.php';
        break;
    case 'listar':
        $crud = new CrudProduto();
        $crud2 = new CrudCategoria();
        $produto = $crud->getProduto($_GET['id']);
        $categoria = $crud2->getCategoria($_GET['id1']);
        include '../views/produtos/produto.php';
        break;
    case 'inserir':
        $crud = new CrudProduto();
        if (isset($_POST['gravar'])){
            $produto = new Produto('',$_POST['nome'],$_POST['descricao'],$_POST['preco'],$_POST['id_categoria']);
            $res = $crud->insertProduto($produto);
            header('Location: categorias.php');
        }else{
            include '../views/produtos/inserir.php';
        }
        break;
    case 'deletar':
        $crud = new CrudProduto();
        $res = $crud->deleteProduto($_GET['id']);
        header('Location: categorias.php');
        break;
    case 'update':
        $crud = new CrudProduto();
        if (isset($_POST['gravar'])){
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $preco = $_POST['preco'];
            $id_categoria = $_POST['id_categoria'];
            $newprod = new Produto($id, $nome, $descricao,$preco,$id_categoria);
            $res = $crud->updateProduto($newprod);
            var_dump($res);
            header('Location: categorias.php');
        }else{
            $prod = $crud->getProduto($_GET['id']);
            include '../views/produtos/update.php';
        }
        break;
}