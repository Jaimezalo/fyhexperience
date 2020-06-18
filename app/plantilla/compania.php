<?php ob_start();?> <!--Guardo la salida en un buffer-->
 
<div class="row justify-content-center mx-auto">
  <h3 class="subtitle">¿Con quién te apetece viajar ahora mismo?</h3>
</div>

<div class="row justify-content-center mx-auto">
  <div class="col-lg-auto">
    <a href="?tipotur=<?= $_SESSION['tipotur'] ?>&cia=Amigos&orden=Enviar">
      <img src="imagenes/amigos.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="Amigos">
    </a>
  </div>
  <div class="col-lg-auto">
    <a href="?tipotur=<?= $_SESSION['tipotur'] ?>&cia=Pareja&orden=Enviar">
      <img src="imagenes/pareja.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="Pareja">
    </a>
  </div>
</div>

<div class="row justify-content-center mx-auto">
  <div class="col-lg-auto">
    <a href="?tipotur=<?= $_SESSION['tipotur'] ?>&cia=Sol@&orden=Enviar">
      <img src="imagenes/solo.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="Solo">
    </a>
  </div>
  <div class="col-lg-auto">
    <a href="?tipotur=<?= $_SESSION['tipotur'] ?>&cia=Familia&orden=Enviar">
      <img src="imagenes/familia.png" class="rounded img-fluid d-inline-block opciones mt-1" alt="Familia">
    </a>
  </div>
</div>

<div class="row justify-content-center mx-auto mt-5">
  <div class="col-lg-auto">
    <a href="?orden=Empezar">
      <input type="button"class="btn btn-success mt-2" value="Volver">
    </a>
  </div>
</div>
<div class="row justify-content-md-center mx-auto"><div class="col-lg-auto mb-5"></div></div>

<?php
$contenido = ob_get_clean();// Vacio el bufer
include_once "secundaria.php";
?>
