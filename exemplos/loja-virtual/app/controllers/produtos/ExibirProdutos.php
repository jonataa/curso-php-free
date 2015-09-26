<?php

namespace App\Controllers;

use App\Models\ProdutoRepository;

class ExibirProdutos
{

  protected $repository;

  public function __construct(ProdutoRepository $repository)
  {
    $this->repository = $repository;
  }

  public function run()
  {
    $produtos = $this->repository->getAll();
    require ROOT . '/app/templates/lista_produtos.phtml';
  }

}
