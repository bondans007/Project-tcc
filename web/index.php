<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('index.twig');
});

$app->get('/book', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('book.twig');
});

$app->get('/book2', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('book2.twig');
});
$app->get('/offers', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('offers.twig');
});

$app->get('/safety', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('safety.twig');
});

$app->get('/services', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('services.twig');
});

$app->get('/contacts', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('contacts.twig');
});

$app->run();
