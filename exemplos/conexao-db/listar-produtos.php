<?php

require 'libs/PDOFactory.php';
require 'libs/ProdutoModel.php';
require 'libs/ProdutoModelFactory.php';

$produtoModel = ProdutoModelFactory::create();
$produtos = $produtoModel->getAll();

require 'templates/listar-produtos.phtml';

?>
