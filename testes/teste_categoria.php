<?php
require_once "../app/models/CrudCategoria.php";
require_once "../app/models/Categoria.php";
$crud = new CrudCategoria();
$cat = new Categoria('1','doces','somente doces deliciosos');
