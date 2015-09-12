<?php
/**
* Calcular o saldo final de cada extrato.
*/
require __DIR__ . '/../test.php';
require 'saldo.php';
$extrato = array(
  'saldo_anterior' => 10000,
  'movimentacoes'   => [
    ['28/05/2015', 'Transf. Bancária', -5500,],
    ['28/05/2015', 'Aluguel', -440,],
    ['01/06/2015', 'Recebimento de Título', 200,],
    ['04/06/2015', 'Depósito', 150,],
    ['10/06/2015', 'Conta de Luz', -350,],
    ['25/06/2015', 'Taxas', -10,],
  ]
);
test(calcularSaldoFinal($extrato), 4050);
$extrato = array(
  'saldo_anterior' => -5000,
  'movimentacoes'   => [
    ['28/05/2015', 'Salário', 3000,],
    ['28/05/2015', 'Depósito', 2500,],
    ['01/06/2015', 'Transf. Bancária', 3050,],
    ['04/06/2015', 'Subway', -50,],
  ]
);
test(calcularSaldoFinal($extrato), 3500);
