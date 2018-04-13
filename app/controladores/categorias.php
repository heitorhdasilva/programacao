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
    default:
        echo 'acao invalida';
}
