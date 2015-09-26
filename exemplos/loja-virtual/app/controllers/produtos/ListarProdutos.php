<?php

class ListarProdutos
{

  public function __construct($produtos, Template $template)
  {
    $this->produtos = $produtos;
    $this->template = $template;
  }

  public function __invoke()
  {
    $this->template->render('lista_produtos.phtml', [
      'produtos' => $this->produtos
    ], 'layout0.phtml');
  }

}
