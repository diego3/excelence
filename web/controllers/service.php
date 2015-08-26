<?php

$app->get("/service", function() use ($app){
    $params = [];
    return $app["mustache"]->render("services", $params);
});
