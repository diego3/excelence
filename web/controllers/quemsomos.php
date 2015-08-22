<?php

$app->get("/quemsomos", function() use ($app){
	$params = [];
	return $app["mustache"]->render('quemsomos', $params);
});
