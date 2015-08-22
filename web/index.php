<?php
//http://silex.sensiolabs.org/doc/usage.html

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

set_include_path(__DIR__);
define('PATH_APP', __DIR__);


require_once "bootstrap.php";

$app['debug'] = true;

$app->run();

