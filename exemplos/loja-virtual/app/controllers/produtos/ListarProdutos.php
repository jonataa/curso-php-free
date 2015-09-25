<?php

class ListarProdutos
{

  public function __invoke($produtos)
  {
    require ROOT . '/app/templates/lista_produtos.phtml';
  }

}
