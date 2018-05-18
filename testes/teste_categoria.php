<?php
require_once "../app/models/CrudCategoria.php";
require_once "../app/models/Categoria.php";
$crud = new CrudCategoria();
$categorias = $crud->getCategorias();

var_dump($categorias);

