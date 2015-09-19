<?php

# E_DEPRECATED
mysql_escape_string('Hoje tem aula sobre php.ini');

# E_NOTICE
echo $array[0];

# E_STRICT
class TesteEStrict
{
  public function imprimirOk()
  {
    echo 'ok';
  }
}

TesteEStrict::imprimirOk();

# E_ALL
require 'uma_pagina_que_nao_existe.php';
