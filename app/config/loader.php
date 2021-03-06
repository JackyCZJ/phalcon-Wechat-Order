<?php

$loader = new \Phalcon\Loader();

$namespace = [

];
/**
 * We're a registering a set of directories taken from the configuration file
 */

$map = require $config->application->vendorDir.'composer/autoload_namespaces.php';

foreach ($map as $k => $values) {
    $k = trim($k, '\\');
    if (!isset($namespaces[$k])) {
        $dir = '/' . str_replace('\\', '/', $k) . '/';
        $namespaces[$k] = implode($dir . ';', $values) . $dir;
    }
}

$loader->registerNamespaces($namespaces);

$classMap = require $config->application->vendorDir . 'composer/autoload_classmap.php';

$loader->registerClasses($classMap);

$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->modelsDir
    ]
);

$loader->register();
