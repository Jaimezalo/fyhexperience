<?php ob_start();?> <!--Guardo la salida en un buffer-->
 

<div class="row justify-content-md-center">
<h3 class="subtitle">¿Eres de los que prefiere estar tranquilito o de los que le encanta el ambiente?</h3>
</div>

<div class="row justify-content-md-center">
  <div class="col-lg-auto">
  <a href="?cia=<?= $_SESSION['cia'] ?>&tipo=<?= $_SESSION['tipo'] ?>&precio=<?= $_SESSION['precio'] ?>&afluencia=Baja&orden=Enviar">
  	<img src="imagenes/afluenciabaja.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="baja">
  </a>
  </div>
  <div class="col-lg-auto">
  <a href="?cia=<?= $_SESSION['cia'] ?>&tipo=<?= $_SESSION['tipo'] ?>&precio=<?= $_SESSION['precio'] ?>&afluencia=Media&orden=Enviar">
  	<img src="imagenes/afluenciamedia.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="media">
  </a>
  </div>
  <div class="col-lg-auto">
  <a href="?cia=<?= $_SESSION['cia'] ?>&tipo=<?= $_SESSION['tipo'] ?>&precio=<?= $_SESSION['precio'] ?>&afluencia=Alta&orden=Enviar">
  	<img src="imagenes/afluenciaalta.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="alta">
  </a>
  </div>
</div>

<div class="row justify-content-md-center mt-5">
  <div class="col-lg-auto">
    <a href="?cia=<?= $_SESSION['cia'] ?>&tipo=<?= $_SESSION['tipo'] ?>&orden=Enviar">
      <input type="button"class="btn btn-success mt-2" value="Volver">
    </a>
      <input type="button"class="btn btn-info mt-2" onclick="confirmarVolver();" value="Volver a Empezar">
  </div>
</div>



<?php
$contenido = ob_get_clean();// Vacio el bufer
include_once "secundaria.php";
?>
