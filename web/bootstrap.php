<?php

//carregar servicoes e providers
$app->register(new Mustache\Silex\Provider\MustacheServiceProvider, array(
    'mustache.path' => __DIR__ . '/view',
	'mustache.partials_path' => __DIR__ . '/view/partials',
    'mustache.options' => array(
        'cache' => __DIR__.'/tmp/cache/mustache',
    ),
));

$app->register(new Silex\Provider\SessionServiceProvider());




//inclue todos os controllers
require_once "controllers/home.php";
require_once "controllers/quemsomos.php";
require_once "controllers/trabalheconosco.php";
require_once "controllers/admin.php";

