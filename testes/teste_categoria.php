<?php
require_once "../app/models/CrudCategoria.php";

$crud = new CrudCategoria();

var_dump($crud->getCategoria(1));