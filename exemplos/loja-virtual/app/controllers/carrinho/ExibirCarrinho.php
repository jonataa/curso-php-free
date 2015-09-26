<?php

class ExibirCarrinho
{

  public function __construct(
    ProdutoRepository $rep,
    Session $ss,
    Template $template
  ) {
    $this->repository = $rep;
    $this->session = $ss;
    $this->template = $template;
  }

  public function __invoke()
  {
    $produtos = $this->repository->getAll();
    $carrinho = array_filter($produtos, $this->filtrarCarrinho($this->session));
    $carrinho = array_map('self::calcularSubtotal', $carrinho);
    $this->template->render('carrinho.phtml', ['carrinho' => $carrinho]);
  }

  protected function calcularSubtotal($produto)
  {
    $qtd = $this->session->get($produto->id);
    $produto->subtotal = $produto->preco * $qtd;
    return $produto;
  }

  protected function filtrarCarrinho($carrinhoSessao)
  {
    return function($produto) use ($carrinhoSessao) {
      return $carrinhoSessao->contains($produto->id);
    };
  }
}
