<?php

//Créditos a Nick Parlante (CodingBat)

/**
 * Class Aula1_Rookie
 */
class Aula1_Rookie
{

	/**
	 * @access public
	 * @param mixed $esperado Resultado esperado
	 * @param mixed $obtido Resultado Obtido
	 * @return string Mensagem de sucesso ou de falha
	 */
	public function assert($esperado, $obtido)
	{
		if(is_bool($esperado))
			$esperado = $esperado ? 'true' : 'false';
		if(is_bool($obtido))
			$obtido = $obtido ? 'true' : 'false';

		return 
			$obtido === $esperado ? 
			'Parabens! O teste funcionou!' :
			sprintf('Nao foi dessa vez! Obtido: %s / Esperado: %s', $obtido, $esperado)
		;
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

	public function somaDobro($a, $b)
	{
		return 
			$a === $b ? 
			($a + $b)*2 : 
			($a + $b)
			;
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

	public function papagaio($falando, $hora)
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

	public function problemaAlunos($a_sorri, $b_sorri)
	{
		return (($a_sorri && $b_sorri) || (!$a_sorri && !$b_sorri)) ? true : false;
	}
}

$aula1 = new Aula1_Rookie();

echo '1. Soma Dobro:' . PHP_EOL;
echo $aula1->assert($aula1->somaDobro(1,2), 3);
echo PHP_EOL;
echo $aula1->assert($aula1->somaDobro(2,2), 8);
echo PHP_EOL;
echo $aula1->assert($aula1->somaDobro(2,1), 3);
echo PHP_EOL;
echo $aula1->assert($aula1->somaDobro(3,3), 12);

echo PHP_EOL . PHP_EOL;

echo '2. Papagaio:' . PHP_EOL;
echo $aula1->assert($aula1->papagaio(true,6), true);
echo PHP_EOL;
echo $aula1->assert($aula1->papagaio(true,10), false);
echo PHP_EOL;
echo $aula1->assert($aula1->papagaio(false,19), false);
echo PHP_EOL;
echo $aula1->assert($aula1->papagaio(true,21), true);

echo PHP_EOL . PHP_EOL;

echo '3. Problema Alunos:' . PHP_EOL;
echo $aula1->assert($aula1->problemaAlunos(true,true), true);
echo PHP_EOL;
echo $aula1->assert($aula1->problemaAlunos(true,false), false);
echo PHP_EOL;
echo $aula1->assert($aula1->problemaAlunos(false,true), false);
echo PHP_EOL;
echo $aula1->assert($aula1->problemaAlunos(false,false), true);
echo PHP_EOL;
