<?php

//carregar servicoes e providers

$app->register(new Mustache\Silex\Provider\MustacheServiceProvider, array(
    'mustache.path' => __DIR__ . '/view',
	'mustache.partials_path' => __DIR__ . '/view/partials',
    'mustache.options' => array(
        'cache' => __DIR__.'/tmp/cache/mustache',
    ),
));





//inclue todos os controllers
require_once "home.php";
require_once "quemsomos.php";
require_once "trabalheconosco.php";

