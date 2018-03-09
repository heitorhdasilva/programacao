<?php
require_once "../app/models/CrudCategoria.php";
require_once "../app/models/Categoria.php";
$crud = new CrudCategoria();
$cat = new Categoria('31','doces','somente doces deliciosos');
$res = $crud->insertCategoria($cat);
echo $res;