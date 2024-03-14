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
    <header class="miheader bg-dark bg-opacity-50 margen-b">
      <video
        playsinline="playsinline"
        autoplay="autoplay"
        muted="muted"
        loop="loop"
        src="./images/video.mp4"
        type="video/mp4"
      ></video>


      
      <!-- Menú -->
      <nav
        class="navbar navbar-expand-md bg-dark fixed-top bg-opacity-50 border-bottom border-white border-1"
        data-bs-theme="dark"
      >
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Logo</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mimenu"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mimenu">
            <ul class="navbar-nav me-auto ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >Inicio</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sobre nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Trabajos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./admin/index.php?page=login">[Admin]</a>
              </li>
            </ul>
            <div class="d-flex social">
              <i class="bi bi-github"></i>
              <i class="bi bi-youtube"></i>
              <i class="bi bi-whatsapp"></i>
            </div>
          </div>
        </div>
      </nav>
      <div
        class="container d-flex justify-content-center align-items-center h-100"
      >
        <div class="row">
          <div class="col text-center">
            <h1 class="text-white display-1" data-aos="zoom-in" data-aos-duration="1500">Horas de Libre Configuración</h1>
            <h2 class="text-white display-2" data-aos="zoom-in" data-aos-duration="1000"  data-aos-delay="1000">Aprendiendo Bootstrap</h2>
          </div>
        </div>
      </div>
    </header>
    <!-- GALERÍA -->
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
