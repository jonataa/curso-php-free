<?php

define('URI', $_SERVER['PATH_INFO']);
define('ROOT', dirname(__DIR__));

require ROOT . '/app/models/ProdutoRepository.php';
require ROOT . '/app/services/Session.php';
require ROOT . '/app/controllers/produtos/ExibirProdutos.php';
require ROOT . '/app/controllers/carrinho/Carrinho.php';

use App\Models\ProdutoRepository;
use App\Controllers\ExibirProdutos;
use App\Controllers\Carrinho;

if (URI == '/produtos') {

  $controller = new ExibirProdutos(new ProdutoRepository());
  $controller->run();

} elseif (URI == '/carrinho/adicionar') {

  $controller = new Carrinho(
    new ProdutoRepository(), new Session('carrinho'));
  $controller->run($_GET['produto']);

} else {
  echo 'Página não encontrada!';
}
