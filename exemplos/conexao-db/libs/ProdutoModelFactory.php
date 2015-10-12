<?php

class ProdutoModelFactory
{
  public static function create()
  {
    $db = PDOFactory::create();
    return new ProdutoModel($db);
  }
}
