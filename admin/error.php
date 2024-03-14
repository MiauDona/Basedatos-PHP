<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: #f8f9fa;
        text-align: center;
        margin-top: 100px;
        min-height: 100vh;
    }
</style>
<body>
    <h1>Error</h1>
    <p>Usuario o contraseña incorrectos</p>
    <a href="index.php?page=login">Volver a intentar</a>
    <?php
        print_r($_SESSION['id']);
        print_r($_SESSION['email']);
        print_r($_SESSION['sesion_id']);
        //$_DEBUG($sql);
    ?>
</body>
</html>