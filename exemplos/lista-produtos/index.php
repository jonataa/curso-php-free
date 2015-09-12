<?php
$tv = new stdClass();
$tv->nome = 'TV 50"';
$tv->preco = 'R$ 2.000,00';

$xbox = new stdClass();
$xbox->nome = 'XBOX 360';
$xbox->preco = 'R$ 4.500,00';

$produtos = [$tv, $xbox];

require 'lista_produtos.phtml';

?>
