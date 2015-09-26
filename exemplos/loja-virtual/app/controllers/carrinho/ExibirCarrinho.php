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
    $total = array_reduce($carrinho, function($buffer, $produto) {
      return $buffer + $produto->subtotal;
    });
    $this->template->render('carrinho.phtml', [
      'carrinho' => $carrinho,
      'total' => $total
    ]);
  }

  protected function calcularTotal($carrinho)
  {

  }

  protected function calcularSubtotal($produto)
  {
    $produto->qtd = $this->session->get($produto->id);
    $produto->subtotal = $produto->preco * $produto->qtd;
    return $produto;
  }

  protected function filtrarCarrinho($carrinhoSessao)
  {
    return function($produto) use ($carrinhoSessao) {
      return $carrinhoSessao->contains($produto->id);
    };
  }
}
