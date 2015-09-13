<?php
$content = file_get_contents(__DIR__ . '/produtos.json');
$produtos = json_decode($content);

require 'lista_produtos.phtml';
