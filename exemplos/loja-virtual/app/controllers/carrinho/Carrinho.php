<?php

class Carrinho
{
  public function __construct(Session $session)
  {
    $this->session = $session;
  }

  public function adicionar($produtoId)
  {
    $qtd = $this->session->get($produtoId);
    $this->session->attach($produtoId, ++$qtd);
    header('Location: /carrinho');
  }

  public function remover($produtoId)
  {
    $qtd = $this->session->get($produtoId);
    $this->session->attach($produtoId, --$qtd);
    header('Location: /carrinho');
  }

  public function excluir($produtoId)
  {
    $this->session->remove($produtoId);
    header('Location: /carrinho');
  }

}
