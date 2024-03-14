<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
   <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <!-- CDN Iconos bootstrap-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <!-- CDN AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/style-video.css"">
  </head>
  <body>
<?php 
include "./includes/menu.php";

$page = $_GET['page'];
switch ($page) {
  case 'listado':
      include "./includes/listado.inc.php";
      break;
  
  case 'new':
      include "./includes/new.inc.php";
      break;
      
  default:
      break;
}
?>

<script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>