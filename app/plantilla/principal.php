<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FYH - Encuentra tu destino</title>
	<!-- Bootstrap CSS, JQUERY-UI, DEFAULT -->
	<link href="web/css/bootstrap.min.css" rel="stylesheet" >
  <link href="web/css/estilos.css" rel="stylesheet" >
  <link href="web/css/jquery-ui.css" rel="stylesheet" >
    <!-- ------------- -->
	<link rel="icon" href="imagenes/FYHIcono.png" type="image/png">
</head>

<nav id="navbar-superior" class="navbar navbar-expand-lg fixed-top navbar-light">
  <a class="navbar-brand mr-0 mr-md-2" href="index.php" aria-label="icono">
            <img src="imagenes/FYHIcono.png" class="icono">
        </a>
  <h5 class="my-0 mr-md-auto font-weight-normal"><a href="index.php" class="title">Find Your Holidays</a></h5>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse offset-sm-4" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Qué ofrecemos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Quiénes somos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
      </li>
      <!--
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      -->
    </ul>
  </div>
</nav>

<body>
	<?= $contenido ?>

	<script src="web/js/jquery.js"></script>
    <script src="web/js/popper.min.js"></script>
    <script src="web/js/bootstrap.min.js"></script>
    <script src="web/js/jquery-ui.js"></script>
    <script type="text/javascript">
      var index = 0;
      var listaimg = ["imagenes/fondo1.jpg", "imagenes/fondo2.jpg", "imagenes/fondo3.jpg", "imagenes/fondo4.jpg"];
      
      $(function() {
        
        setInterval(carrusel, 5000);
      });


      function carrusel() {
        $('body').css("background-image", 'url(' + listaimg[index] + ')');
        index++;
        if(index == 4)
          index = 0;
      }
    </script>
</body>
<footer>
<nav id="navbar-inferior" class="navbar fixed-bottom navbar-expand-sm navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a class="nav-link" href="https://twitter.com/">
              <img src="imagenes/twitter.png" class="img-fluid icono">    
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="https://www.youtube.com/">
              <img src="imagenes/youtube.png" class="img-fluid icono">
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link disabled" href="https://www.facebook.com/">
              <img src="imagenes/facebook.png" class="img-fluid icono">
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link disabled" href="https://www.instagram.com/">
              <img src="imagenes/instagram.png" class="img-fluid icono">
            </a>
          </li>
        </ul>
      </div>
    </nav>
</footer>
</html>
