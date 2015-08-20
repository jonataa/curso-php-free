<?php

//Créditos a Nick Parlante (CodingBat)

define('SUCESSO', 'Parabens! O teste funcionou!');
define('FALHOU', 'Nao foi dessa vez! Obtido: %s / Esperado: %s');

/**
 * @access public
 * @param mixed $esperado Resultado esperado
 * @param mixed $obtido Resultado Obtido
 * @return string Mensagem de sucesso ou de falha
 */
function test($esperado, $obtido)
{
	if(is_bool($esperado))
		$esperado = $esperado ? 'true' : 'false';
	if(is_bool($obtido))
		$obtido = $obtido ? 'true' : 'false';

	echo $obtido === $esperado ? SUCESSO . PHP_EOL : sprintf(FALHOU, $obtido, $esperado) . PHP_EOL;
}

/**
 * @tutorial
 * 1. Soma Dobro:
 * Sejam dois números inteiros
 * Se ambos forem diferentes entre si, retorna apenas a sua soma,
 * caso contrario, retorna o dobro da sua soma
 * @param int $a
 * @param int $b
 * @return int
 */

function somaDobro($a, $b)
{
	return $a === $b ? ($a + $b)*2 : ($a + $b);
}

/**
 * @tutorial
 * 2. Papagaio:
 * Temos um papagaio que fala muito alto
 * $hora é um parâmetro entre 0 e 23
 * Teremos problemas se o papagaio estiver falando
 * antes das 7 e depois das 20 (retorna true)
 * @param boolean $falando
 * @param int $hora
 * @return boolean
 */

function papagaio($falando, $hora)
{
	return ($falando && ($hora < 7 || $hora > 20)) ? true : false;
}

/**
 * @tutorial
 * 3. Problema Alunos:
 * Temos 2 alunos A e B
 * $a_sorri e $b_sorri representam o estado dos alunos A e B, se eles sorriem ou não.
 * Teremos problemas se ambos estiverem sorrindo ou se ambos não estiverem sorrindo
 * Retorna true se tivermos problemas
 * @param boolean $a_sorri
 * @param boolean $b_sorri
 * @return boolean
 */

function problemaAlunos($a_sorri, $b_sorri)
{
	return (($a_sorri && $b_sorri) || (!$a_sorri && !$b_sorri)) ? true : false;
}

echo '1. Soma Dobro:' . PHP_EOL;
test(somaDobro(1, 2), 3);
test(somaDobro(2, 2), 8);
test(somaDobro(2, 1), 3);
test(somaDobro(3, 3), 12);

echo PHP_EOL . PHP_EOL;

echo '2. Papagaio:' . PHP_EOL;
test(papagaio(true, 6), true);
test(papagaio(true, 10), false);
test(papagaio(false, 19), false);
test(papagaio(true, 21), true);

echo PHP_EOL . PHP_EOL;

echo '3. Problema Alunos:' . PHP_EOL;
test(problemaAlunos(true, true), true);
test(problemaAlunos(true, false), false);
test(problemaAlunos(false, true), false);
test(problemaAlunos(false, false), true);
