<?php

echo '<pre>';
var_dump($_SERVER);

require 'libs/PDOFactory.php';
require 'libs/ProdutoModel.php';
require 'libs/ProdutoModelFactory.php';

$produtoModel = ProdutoModelFactory::create();
$produto = $produtoModel->getById($_GET['id']);

if ($produto === false) {
  die('Produto não encontrado!');
}

require 'templates/visualizar-produto.phtml';

?>
