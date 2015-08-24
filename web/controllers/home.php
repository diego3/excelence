<?php
use Symfony\Component\HttpFoundation\Request;

$app->get('/', function (Request $request) use ($app) {
    $params = [
        'title' => 'Home',
        'basePath' => $request->getBasePath()
    ];

    return $app["mustache"]->render("home", $params);
});