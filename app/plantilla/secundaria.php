<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FYH - Preferencias</title>
	<!-- Bootstrap CSS, JQUERY-UI, DEFAULT -->
	<link type="text/css" href="web/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="web/css/estilos.css" rel="stylesheet">
  <link type="text/css" href="web/css/jquery-ui.css" rel="stylesheet">
  <link rel="icon" href="imagenes/FYHIcono.png" type="image/png">

</head>

<nav id="navbar-superior" class="navbar navbar-expand-lg fixed-top navbar-dark">
  <a class="navbar-brand mr-0 mr-md-2" href="index.php" aria-label="icono">
      <img src="imagenes/FYHIcono.png" class="icono">
  </a>
  <p class="my-0 mr-md-auto font-weight-normal"><a href="index.php" class="title">Find Your Holidays</a></p>
  <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse offset-sm-4" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link font-italic Italica lead text-light mr-3" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-italic Italica lead text-light mr-3" href="app/plantilla/varios.php">Qué ofrecemos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-italic Italica lead text-light mr-3" href="app/plantilla/varios.php#team">Quiénes somos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-italic Italica lead text-light" href="app/plantilla/varios.php#contact">Contacto</a>
      </li>    
    </ul>
  </div>
</nav>

<body>

<div class="container mb-5">
<div class="row mt-5"></div>
<div class="row mt-5"></div>

<div id="listaResultados" class="row mt-2 ">
    <?= isset($_GET['tipotur'])?"<div class='col-lg-2 col-md-4 col-xs-12 col-sm-4 bg-primary mx-1 font-italic Italica lead text-light rounded shadow p-2 text-right'>".$_GET['tipotur'].
    "<a class=\"cruces ml-5\" href=\"?orden=Enviar\">&#x2718;</a></div>":''?>
  
    <?= isset($_GET['cia'])?"<div class='col-lg-2 col-md-4 col-xs-12 col-sm-4 bg-secondary mx-1 font-italic Italica lead text-light rounded shadow p-2 text-right'>".$_GET['cia'].
    "<a class=\"cruces ml-5\" href=\"?tipotur=".$_SESSION['tipotur']."&orden=Enviar\">&#x2718;</a> </div>":''?>
 
    <?= isset($_GET['tipo'])?"<div class='col-lg-2 col-md-4 col-xs-12 col-sm-4 bg-success mx-1 font-italic Italica lead text-light rounded shadow p-2 text-right'>".$_GET['tipo'].
    "<a class=\"cruces ml-5\" href=\"?tipotur=".$_SESSION['tipotur']."&cia=".$_SESSION['cia']."&orden=Enviar\">&#x2718;</a></div>":''?>
  
    <?= isset($_GET['precio'])?"<div class='col-lg-2 col-md-4 col-xs-12 col-sm-4 bg-danger mx-1 font-italic Italica lead text-light rounded shadow p-2 text-right'>".$_GET['precio'].
    "<a class=\"cruces ml-5\" href=\"?tipotur=".$_SESSION['tipotur']."&cia=".$_SESSION['cia']."&tipo=".$_SESSION['tipo']."&orden=Enviar\">&#x2718;</a></div>":''?>
  
    <?= isset($_GET['afluencia'])?"<div class='col-lg-2 col-md-4 col-xs-12 col-sm-4 bg-warning mx-1 font-italic Italica lead text-light rounded shadow p-2 text-right'>".$_GET['afluencia'].
    "<a class=\"cruces ml-5\" href=\"?tipotur=".$_SESSION['tipotur']."&cia=".$_SESSION['cia']."&tipo=".$_SESSION['tipo']."&precio=".$_SESSION['precio']."&orden=Enviar\">&#x2718;</a></div>":''?>
  
</div>
</div>
<div id="contenido2" class="container mb-5">
<?= $contenido ?>
</div>
	<script src="web/js/jquery.js"></script>
  <script src="web/js/popper.min.js"></script>
  <script src="web/js/bootstrap.min.js"></script>
  <script src="web/js/jquery-ui.js"></script>
  <script src="web/js/misfunciones.js"></script>
   <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
   <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-app.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-firestore.js"></script>
  <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-storage.js"></script>
  <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
      apiKey: "AIzaSyDZcx0RkSilhBmk3E7Ccu8WtxNjwPk4USg",
      authDomain: "find-your-holidays-5eb36.firebaseapp.com",
      databaseURL: "https://find-your-holidays-5eb36.firebaseio.com",
      projectId: "find-your-holidays-5eb36",
      storageBucket: "find-your-holidays-5eb36.appspot.com",
      messagingSenderId: "621872618497",
      appId: "1:621872618497:web:2e7fedbbca637a52abf400",
      measurementId: "G-Y6QYVKD6XB"
    };

    firebase.initializeApp(firebaseConfig);
  </script>
  <script type="text/javascript" src="web/js/imagenesFirebase.js"></script>

</body>
<footer>
<nav class="navbar fixed-bottom navbar-expand-sm navbar-dark">
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
      <div class="col-lg-4 text-lg-right" style="color: white;">
            Copyright © FYH travels 2020
        </div>
    </nav>
</footer>
</html>
