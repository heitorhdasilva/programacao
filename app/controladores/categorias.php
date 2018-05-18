<?php
require_once '../models/CrudCategoria.php';
require_once '../models/CrudProduto.php';

if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){
    case 'index':
        $crud = new CrudCategoria();
        $crud1 = new CrudProduto();
        $categorias = $crud->getCategorias();
        $produtos = $crud1->getProdutos();
        include '../views/categorias/index.php';
        break;
    case 'inserir':
        $crud = new CrudCategoria();
        if (isset($_POST['gravar'])){
            $cat = new Categoria('',$_POST['nome'],$_POST['descricao']);
            $res = $crud->insertCategoria($cat);
            header('Location: categorias.php');
        }else{
            include '../views/categorias/inserir.php';
        }
        break;
    case 'listar':
        $crud = new CrudCategoria();
        $crud1 = new CrudProduto();
        $produtos = $crud1->getProdutos($_GET['id']);
        $categoria = $crud->getCategoria($_GET['id']);
        include '../views/categorias/categoria.php';
        break;
    case 'update':
        $crud = new CrudCategoria();

        if (isset($_POST['gravar'])){
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $newcat = new Categoria($id, $nome, $descricao);
            $res = $crud->updateCategoria($newcat);
            header('Location: categorias.php');
        }else{
            $cat = $crud->getCategoria($_GET['id']);
            include '../views/categorias/update.php';
        }
        break;
    case 'delete':
        $crud = new CrudCategoria();
        $res = $crud->deleteCategoria($_GET['id']);
        header('Location: categorias.php');
        break;
    default:
        echo 'acao invalida';
}
