<?php

$app->get("/upload/", function() use ($app){
    if (empty($_SESSION["logged"])) {
        die("Você não tem permissão para realizar uploads - Logue no sistema!");
    }

    $ds          = DIRECTORY_SEPARATOR;
    $storeFolder = '../uploaded_files';

    if (!empty($_FILES)) {
        $tempFile = $_FILES['file']['tmp_name'];            
        $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;
        $targetFile =  $targetPath. $_FILES['file']['name'];
        if (!move_uploaded_file($tempFile,$targetFile)) {
            header("HTTP/1.1 401 Unauthorized");
        }
    }
});