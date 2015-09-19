<?php

class ProdutoRepository
{

  public function getAll()
  {
    $db = file_get_contents(ROOT . '/db/produtos.json');
    return json_decode($db);
  }

}
