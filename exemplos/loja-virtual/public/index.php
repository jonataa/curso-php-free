<?php

define('URI', $_SERVER['PATH_INFO']);
define('ROOT', dirname(__DIR__));

require ROOT . '/app/services/Session.php';
require ROOT . '/app/models/ProdutoRepository.php';
require ROOT . '/app/controllers/produtos/ListarProdutos.php';
require ROOT . '/app/controllers/carrinho/AdicionarProduto.php';
require ROOT . '/app/controllers/carrinho/ExibirCarrinho.php';
require ROOT . '/app/controllers/PageNotFound.php';

if (URI == '/produtos') {
  $produtos = (new ProdutoRepository())->getAll();
  $listarProdutos = new ListarProdutos();
  $listarProdutos($produtos);
} elseif (URI == '/carrinho/adicionar') {
  $session = new Session('carrinho');
  $adicionarProduto = new AdicionarProduto($session, $_GET['produto']);
  $adicionarProduto();
} elseif (URI == '/carrinho') {
  $exibirCarrinho = new ExibirCarrinho(new ProdutoRepository(), new Session('carrinho'));
  $exibirCarrinho();
} else {
  $pageNotFound = new PageNotFound;
  $pageNotFound();
}
