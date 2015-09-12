<?php

define('SUCESSO', 'Parabens! O teste funcionou!');
define('FALHOU', 'Nao foi dessa vez! Obtido: %s / Esperado: %s');

/**
 * @access public
 * @param mixed $obtido Resultado Obtido
 * @param mixed $esperado Resultado Esperado
 * @return string Mensagem de sucesso ou de falha
 */
function test($obtido, $esperado)
{
	if (is_bool($esperado))
		$esperado = $esperado ? 'true' : 'false';

	if (is_bool($obtido))
		$obtido = $obtido ? 'true' : 'false';

	$obtido = is_null($obtido) ? 'NULL' : $obtido;

	echo $obtido === $esperado ?
			 SUCESSO :
			 sprintf(FALHOU, $obtido, $esperado);

	echo PHP_EOL;
}

/**
 * @tutorial
 * 1. Buracos nas Palavras:
 * Se você pensar em um papel como um plano e uma letra como uma marcação neste plano,
 * então estas letras dividem o plano em regiões.
 * Por exemplo, as letras A, D e O dividem o plano em 2 pois possuem um espaço confinado em seu desenho, ou um “buraco”.
 * Outras letras como B possuem 2 buracos e letras como C e E não possuem buracos.
 * Deste modo podemos considerar que o número de buracos em um texto é igual a soma dos buracos nas palavras dele.
 *
 * A sua tarefa é, dado um texto qualquer, encontre a quantidade de buracos nele.
 * (Colher de chá: pode ser só com letras maiúsculas)
 *
 * Dica 1: strtoupper($s) retorna a string em "caixa alta" (http://php.net/manual/pt_BR/function.strtoupper.php)
 * Dica 2: array_key_exists($chave, $array) retorna true se uma $chave existe em um array (http://php.net/manual/pt_BR/function.array-key-exists.php)
 * Dica 3: No PHP, uma string é um array de caracteres.
 * Ex.: $palavra = 'ABC'; -> $palavra[0] = 'A';
 *
 * @param string $texto
 * @return int
 */
function buracosLetras($texto)
{

}

/**
 * @tutorial
 * 2. Jokenpo:
 * Jokenpo é uma brincadeira japonesa, onde dois jogadores escolhem um dentre três possíveis itens: Pedra, Papel ou Tesoura.
 * O objetivo é fazer um juiz de Jokenpo que dada a jogada dos dois jogadores informa o resultado da partida.
 * As regras são as seguintes:
 * 1. Pedra empata com Pedra e ganha de Tesoura
 * 2. Tesoura empata com Tesoura e ganha de Papel
 * 3. Papel empata com Papel e ganha de Pedra
 *
 * @param string $escolha_player1
 * @param string $escolha_player2
 * @return string qual item ganhou ou empate
 */
function jokenpo($escolha_player1, $escolha_player2)
{

}


echo '1. Buracos Letras:' . PHP_EOL;
test(buracosLetras('A MANGA DE JOAO'), 7);
test(buracosLetras('O RATO ROEU A ROUPA DO REI DE ROMA'), 18);
test(buracosLetras('TRES PRATOS DE TRIGO PARA TRES TIGRES TRISTES'), 15);
test(buracosLetras('CURSO DE PHP'), 5);

echo PHP_EOL . PHP_EOL;

echo '2. Jokenpo:' . PHP_EOL;
test(jokenpo('pedra', 'pedra'), 'empate');
test(jokenpo('pedra', 'tesoura'), 'pedra');
test(jokenpo('pedra', 'papel'), 'papel');
test(jokenpo('tesoura', 'tesoura'), 'empate');
test(jokenpo('tesoura', 'pedra'), 'pedra');
test(jokenpo('tesoura', 'papel'), 'tesoura');
test(jokenpo('papel', 'papel'), 'empate');
test(jokenpo('papel', 'tesoura'), 'tesoura');
test(jokenpo('papel', 'pedra'), 'papel');
