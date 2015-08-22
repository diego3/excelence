<?php

$app->get('/', function () use ($app) {
	$params = [
		'title' => 'Home',
		'basePath' => PATH_RESOURCES 
	];
	
	$template = "home";
	return $app["mustache"]->render($template, $params);
});

