<?php

namespace App\Controllers;

use App\Models\ProdutoRepository;

class Carrinho
{

  public function __construct(ProdutoRepository $rep, \Session $ss)
  {
    $this->repository = $rep;
    $this->session = $ss;
  }

  public function adicionar($id)
  {
    $produtos = $this->repository->getAll();
    $qtd = $this->session->get($id);
    $this->session->attach($id, ++$qtd);
    $carrinho = array_filter(
      $produtos, $this->filtrarCarrinho($this->session)
    );
    require ROOT . '/app/templates/carrinho.phtml';
  }

  protected function filtrarCarrinho($carrinhoSessao)
  {
    return function($produto) use ($carrinhoSessao) {
      return $carrinhoSessao->contains($produto->id);
    };
  }

}
