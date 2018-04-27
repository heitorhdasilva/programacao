<?php
require_once '../app/models/CrudProduto.php';
require_once '../app/models/Produto.php';

$prod = new Produto(9,'telefone tijolao','o telefone mais duro',100.00,1);
$crud = new CrudProduto();
$res = $crud->insertProduto($prod);
var_dump($res);
