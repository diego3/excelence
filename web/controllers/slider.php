<?php
use Symfony\Component\HttpFoundation\Request;

$app->get("/slider", function(Request $request) use ($app) {
    $params = [
        "basePath" => $request->getBasePath()
    ];
    return $app["mustache"]->render("slider", $params);
});

