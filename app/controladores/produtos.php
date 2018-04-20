<?php


require_once  '../models/CrudProduto.php';


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
        $categoria = $crud2->getCategoria($produto->getIdCategoria());
        include '../views/produtos/produto.php';
        break;
}