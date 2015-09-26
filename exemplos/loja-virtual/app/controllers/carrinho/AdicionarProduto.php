<?php

class AdicionarProduto
{
  public function __construct(Session $session, $produtoId)
  {
    $this->session = $session;
    $this->produtoId = $produtoId;
  }

  public function __invoke()
  {
    $this->session->attach($this->produtoId, 1);
    header('Location: /carrinho');
  }

}
