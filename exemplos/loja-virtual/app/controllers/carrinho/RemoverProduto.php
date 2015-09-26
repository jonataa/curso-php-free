<?php

class RemoverProduto
{
  public function __construct(Session $session, $produtoId)
  {
    $this->session = $session;
    $this->produtoId = $produtoId;
  }

  public function __invoke()
  {
    $qtd = $this->session->get($this->produtoId);
    $this->session->attach($this->produtoId, --$qtd);
    header('Location: /carrinho');
  }

}
