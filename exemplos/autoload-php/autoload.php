<?php

require 'lib/Psr4AutoloaderClass.php';

// instantiate the loader
$loader = new \Example\Psr4AutoloaderClass;

// register the autoloader
$loader->register();

// register the base directories for the namespace prefix
$loader->addNamespace('Acme\Log\Writer', __DIR__ . '/Acme/Log/Writer/src');
