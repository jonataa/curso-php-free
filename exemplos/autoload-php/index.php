<?php

require_once 'autoload.php';

use Acme\Log\Writer\FileWriter;

$log = new FileWriter;
$log->info('Testando o Autoload');
