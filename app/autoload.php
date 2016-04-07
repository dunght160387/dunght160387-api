<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

$loader->add('Tagcade', (__DIR__.'/../vendor/tagcade/entitybundle'));

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
