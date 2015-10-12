<?php

class ProdutoModel
{

  protected $db;

  public function __construct(\PDO $db)
  {
    $this->db = $db;
  }

  public function getAll()
  {
    return $this->db
         ->query('SELECT * FROM produtos')
         ->fetchAll(PDO::FETCH_OBJ);
  }

  public function getById($id)
  {
    $stmt = $this
              ->db
              ->prepare('SELECT nome, preco, imagem FROM produtos WHERE id = :id');
              
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);
  }
}
