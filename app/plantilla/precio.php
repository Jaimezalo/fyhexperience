<?php ob_start();?> <!--Guardo la salida en un buffer-->

<div class="row justify-content-md-center">
  <h3 class="subtitle">¿Tienes un presupuesto bajo o este es el viaje para el que llevas ahorrando todo el año?</h3>
</div>

<div class="row justify-content-md-center">
  <div class="col-lg-auto">
  <a href="?cia=<?= $_SESSION['cia'] ?>&tipo=<?= $_SESSION['tipo'] ?>&precio=€&orden=Enviar">
  	<img src="imagenes/preciobajo.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="€">
  </a>
  </div>
  <div class="col-lg-auto">
  <a href="?cia=<?= $_SESSION['cia'] ?>&tipo=<?= $_SESSION['tipo'] ?>&precio=€€&orden=Enviar">
  	<img src="imagenes/preciomedio.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="€€">
  </a>
  </div>
  <div class="col-lg-auto">
  <a href="?cia=<?= $_SESSION['cia'] ?>&tipo=<?= $_SESSION['tipo'] ?>&precio=€€€&orden=Enviar">
  	<img src="imagenes/precioalto.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="€€€">
  </a>
  </div>
</div>

<div class="row justify-content-md-center mt-5">
  <div class="col-lg-auto">
  <a href="?cia=<?= $_SESSION['cia'] ?>&orden=Enviar">
    <input type="button"class="btn btn-success mt-2" value="Volver">
  </a>
  <input type="button"class="btn btn-info mt-2" onclick="confirmarVolver();" value="Volver a Empezar">
  </div>
</div>

<?php
$contenido = ob_get_clean();// Vacio el bufer
include_once "secundaria.php";
?>
