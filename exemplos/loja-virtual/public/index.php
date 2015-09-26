<?php

define('URI', isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/');
define('ROOT', dirname(__DIR__));
define('TEMPLATE_PATH', ROOT . '/app/templates/');

require ROOT . '/app/services/Session.php';
require ROOT . '/app/services/Template.php';
require ROOT . '/app/models/ProdutoRepository.php';
require ROOT . '/app/controllers/produtos/ListarProdutos.php';
require ROOT . '/app/controllers/carrinho/Carrinho.php';
require ROOT . '/app/controllers/carrinho/ExibirCarrinho.php';
require ROOT . '/app/controllers/PageNotFound.php';

$template = new Template(TEMPLATE_PATH);

if (URI == '/produtos') {
  $produtos = (new ProdutoRepository())->getAll();
  $listarProdutos = new ListarProdutos($produtos, $template);
  $listarProdutos();
} elseif (URI == '/carrinho/adicionar') {
  $session = new Session('carrinho');
  $carrinho = new Carrinho($session);
  $carrinho->adicionar($_GET['produto']);
} elseif (URI == '/carrinho/remover') {
  $session = new Session('carrinho');
  $carrinho = new Carrinho($session);
  $carrinho->remover($_GET['produto']);
} elseif (URI == '/carrinho') {
  $rep = new ProdutoRepository();
  $ss = new Session('carrinho');
  $exibirCarrinho = new ExibirCarrinho($rep, $ss, $template);
  $exibirCarrinho();
} else {
  $pageNotFound = new PageNotFound($template);
  $pageNotFound();
}
