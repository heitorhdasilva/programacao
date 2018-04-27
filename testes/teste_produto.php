<?php
require_once '../app/models/CrudProduto.php';
require_once '../app/models/Produto.php';

$prod = new Produto(8,'telefone tijolao','o telefone mais duro',100.00,5);
$crud = new CrudProduto();
$res = $crud->updateProduto($prod);
var_dump($res);


