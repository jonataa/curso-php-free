<?php

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../app/controllers/Usuario.php';

$app = require __DIR__ . '/../src/app.php';

$app['debug'] = true;

$app->get('/usuario/cadastro', function () use ($app) {
  $data = array('errors' => array());
  return $app['twig']->render('usuario-cadastro.twig', $data);
});

$app->post('/usuario/salvar', 'MyApp\Controllers\Usuario::salvar');

$app->run();
