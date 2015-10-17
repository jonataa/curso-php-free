<?php

date_default_timezone_set('America/Bahia');

require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Respect\Rest\Router;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('names.log'));

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../templates');
$twig = new Twig_Environment($loader);

$r = new Router;

$r->get('/hello/*', function ($meuNome) use ($log, $twig) {
  // add records to the log
  $log->addInfo('Acessou /hello/' . $meuNome);
  return $twig->render('hello.twig', array('name' => $meuNome));
});
