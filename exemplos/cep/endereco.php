<?php
require 'cep_api.php';
$api = new CepApi($_GET['cep']);
$dados = $api->buscar();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Endereço Completo</title>
  </head>
  <body>
    <h1>Endereço Completo</h1>
    <ul>
      <li>Logradouro: <?= $dados->logradouro ?></li>
      <li>Bairro: <?= $dados->bairro ?></li>
      <li>UF: <?= $dados->uf ?></li>
      <li>Cidade: <?= $dados->localidade ?></li>
    </ul>
  </body>
</html>
