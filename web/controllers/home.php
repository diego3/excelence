<?php
use Symfony\Component\HttpFoundation\Request;

$app->get('/', function (Request $request) use ($app) {
    $params = [
        'title' => 'Home',
        'basePath' => $request->getBasePath(),
        'email' => 'tecnologia@excellencetecnologia.com.br',
    ];
    
    //TODO devem vir do banco, fazer DAO e tela de cadastro administrativo
    $data =  array(
        "slides" => array(
             array(
                "title" => "web design & development",
                "informationAction" => "/service/develpment",
                "description" => 'Visually Compelling & Functional',
                "mainFile" => $request->getBasePath() . '/resources/img/major/s3.png',
                "thumb" => $request->getBasePath() . '/resources/img/major/s3t.jpg',
            ),
            array(
                "title" => "revenda de hospedagem",
                "informationAction" => "/service/hospedagem",
                "description" => 'Hospedagem de qualidade com melhor preço do mercado',
                "mainFile" => $request->getBasePath() . '/resources/img/major/s5.png',
                "thumb" => $request->getBasePath() . '/resources/img/major/s5t.jpg',
            )
        )
    );
    
    $params = array_merge($params, $data);

    return $app["mustache"]->render("home", $params);
});