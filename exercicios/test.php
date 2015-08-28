<?php

function test($obtido, $esperado)
{
	if (is_bool($esperado))
		$esperado = $esperado ? 'true' : 'false';

	if (is_bool($obtido))
		$obtido = $obtido ? 'true' : 'false';

	$obtido = is_null($obtido) ? 'NULL' : $obtido;

	echo $obtido === $esperado ?
			 'Parabens! O teste funcionou!' :
			 sprintf('Falhou! Obtido: %s / Esperado: %s', $obtido, $esperado);

	echo PHP_EOL;
}
