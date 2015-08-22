<?php

$app->get("/admin", function() use ($app) {
	$params= [
		'Title' => 'Painel administrativo'
	];
	return $app["mustache"]->render("admin", $params);
});


