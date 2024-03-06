<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <!-- CDN Iconos bootstrap-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <!-- CDN AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/style-video.css">
    <link href="../assets/css/sign-in.css" rel="stylesheet">
  </head>

  <body>
    <!--Insertamos el código del formulario de login-->
    <?php
        /* Introducimos en la varable page el valor que se nos pasa por GET */
        $page = $_GET['page'];
        /* Según el valor de page incluiremos un código u otro */
        switch ($page) {
            case 'login':
                include "./login.php";
                break;
            
                case 'registro':
                    include "./registro.php";
                    break;
        }
        
    ?>


    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/bootstrap/js/color-modes.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
