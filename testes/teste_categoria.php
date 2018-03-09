<?php
require_once "../app/models/Categoria.php";

$cat1 = new Categoria(1,'machoAlfa','So pra quem eh macho, mas nao qualquer macho tem que ser macho Alfa');

$cat1->getNome();