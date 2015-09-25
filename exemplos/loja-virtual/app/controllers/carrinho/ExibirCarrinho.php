<?php

class ExibirCarrinho
{  

  public function __construct(ProdutoRepository $rep, Session $ss)
  {
    $this->repository = $rep;
    $this->session = $ss;
  }

  public function __invoke()
  {
    $produtos = $this->repository->getAll();
    $carrinho = array_filter($produtos, $this->filtrarCarrinho($this->session));
    require ROOT . '/app/templates/carrinho.phtml';
  }

  protected function filtrarCarrinho($carrinhoSessao)
  {
    return function($produto) use ($carrinhoSessao) {
      return $carrinhoSessao->contains($produto->id);
    };
  }
}
