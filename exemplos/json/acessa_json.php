<?php
$content = file_get_contents(__DIR__ . '/produtos.json');
$produtos = json_decode($content);

foreach($produtos as $produto){
  echo $produto->id . PHP_EOL;
  echo $produto->nome . PHP_EOL;
  echo $produto->preco . PHP_EOL;
  echo PHP_EOL;
}
