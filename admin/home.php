<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> El usuario existe</h1>
    <?php 
        print_r($_SESSION['id']);
        print_r($_SESSION['email']);
        print_r($_SESSION['sesion_id']);
    ?>
</body>
</html>