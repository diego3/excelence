<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="css/dropzone.css" type="text/css" rel="stylesheet" />
    <title>Sistema de Upload - Alpha Editora</title>
</head>
 
<body>
    <?php
        session_start();
        if (empty($_SESSION["ALGRAF_usuario_cd"])) {
            die("Diego, Você não tem permissão para realizar uploads - Logue no sistema!");
        }
    ?>
    <p class="container-fluid"><a href="/sistema/siteformando/carregapublicacao.php"><i class="glyphicon glyphicon-share-alt"></i> p�gina de publica��o</a></p>
    <form action="upload.php" class="dropzone" id="my-awesome-dropzone" method="post" enctype="multipart/form-data">
        <div class="fallback">
            <input name="file" type="file" multiple />
        </div>
    </form>
    
    <script src="dropzone.min.js"></script>
</body>
</html>