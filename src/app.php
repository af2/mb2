<?php
require_once __DIR__.'/silex.phar'; 

$app = new Silex\Application(); 

$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path'       => __DIR__.'/views',
    'twig.class_path' => __DIR__.'/../vendor/Twig/lib',
));

require_once __DIR__.'/../src/database.php';

//$app['autoloader']->registerNamespace('Silex', __DIR__.'/../vendor/Silex/src');

//$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
//$app->register(new Silex\Provider\SessionServiceProvider());

// if you want to logout, access to 'auth/logout'
//$app->mount('/auth', new Silex\Provider\BasicAuthControllerProvider());

