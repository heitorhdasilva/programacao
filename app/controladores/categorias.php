<?php
require_once '../models/CrudCategoria.php';

if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){
    case 'index':
        echo '<pre>';
        $crud = new CrudCategoria();
        $categorias = $crud->getCategorias();
        include '../views/categorias/index.php';
        break;
    case 'inserir':
        echo 'Você escolheu inserir';
        break;
    case 'listar':
        $crud = new CrudCategoria();
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
    default:
        echo 'acao invalida';
}
