<?php

define('URI', $_SERVER['SCRIPT_NAME']);
define('ROOT', dirname(__DIR__));

require ROOT . '/models/ProdutoRepository.php';
require ROOT . '/services/Session.php';

function filtrarCarrinho($carrinhoSessao)
{
  return function($produto) use ($carrinhoSessao) {
    return $carrinhoSessao->contains($produto->id);
  };
}

if (URI == '/produtos') {
  $produtoRepository = new ProdutoRepository();
  $produtos = $produtoRepository->getAll();
  require ROOT . '/templates/lista_produtos.phtml';
} elseif (URI == '/carrinho/adicionar') {

  // banco de dados
  $produtoRepository = new ProdutoRepository();
  $produtos = $produtoRepository->getAll();

  // sessions
  $id = $_GET['produto'];
  session_start();
  $session = new Session($_SESSION['carrinho']);
  $session->attach($id, $id);

  // filtragem
  $carrinho = array_filter($produtos, filtrarCarrinho($session));

  // Template
  require ROOT . '/templates/carrinho.phtml';

} else {
  echo 'Página não encontrada!';
}
