<?php

use Silex\Application;
use Silex\Provider\ValidatorServiceProvider;

$app = new Application;
$app->register(new ValidatorServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../templates',
));

return $app;
