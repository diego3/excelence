<?php
use Symfony\Component\HttpFoundation\Request;

$app->get("/admin", function(Request $request) use ($app) {
	$params= [
		'title' => 'Painel administrativo',
		'basepath' => $request->getBasePath()
	];
	return $app["mustache"]->render("admin", $params);
});

$app->get("/admin/configure/home", function(Request $request) use ($app) {
	$params= [
		'title' => 'Configurar Home page',
		'basepath' => $request->getBasePath()
	];
	
	return $app["mustache"]->render("admin_home", $params);
});


