<?php

$app->get('/', function () use ($app) {
	$params = [
		'title' => 'Home',
		'basePath' => PATH_RESOURCES 
	];
	
	$template = "home";
	return $app["mustache"]->render($template, $params);
});

function render($app, $template, $title, $params) {
	$parameters = [
		'title' => 'Home',
		'basePath' => PATH_RESOURCES 
	];
	
	$parameters = array_merge($parameters, $params);
	return $app["mustache"]->render($template, $parameters);
}