<?php ob_start();?> <!--Guardo la salida en un buffer-->

<div class="row justify-content-md-center mx-auto">
  <h3 class="subtitle text-center">¿Tienes un presupuesto bajo o este es el viaje para el que llevas ahorrando todo el año?</h3>
</div>

<div class="row justify-content-md-center mx-auto">
  <div class="col-lg-auto">
  <a href="?tipotur=<?= $_SESSION['tipotur'] ?>&cia=<?= $_SESSION['cia'] ?>&tipo=<?= $_SESSION['tipo'] ?>&precio=€&orden=Enviar">
  	<img src="imagenes/preciobajo.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="€">
  </a>
  </div>
  <div class="col-lg-auto">
  <a href="?tipotur=<?= $_SESSION['tipotur'] ?>&cia=<?= $_SESSION['cia'] ?>&tipo=<?= $_SESSION['tipo'] ?>&precio=€€&orden=Enviar">
  	<img src="imagenes/preciomedio.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="€€">
  </a>
  </div>
</div>

  <div class="row justify-content-md-center mx-auto">
  <div class="col-lg-auto">
    <a href="?tipotur=<?= $_SESSION['tipotur'] ?>&cia=<?= $_SESSION['cia'] ?>&tipo=<?= $_SESSION['tipo'] ?>&precio=€€€&orden=Enviar">
    	<img src="imagenes/precioalto.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="€€€">
    </a>
  </div>
  <div class="col-lg-auto">
    <a href="?tipotur=<?= $_SESSION['tipotur'] ?>&cia=<?= $_SESSION['cia'] ?>&tipo=<?= $_SESSION['tipo'] ?>&precio=Indiferente&orden=Enviar">
      <img src="imagenes/indiferente.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="Indiferente">
    </a>
  </div>
</div>

<div class="row justify-content-md-center mt-5 mx-auto">
  <div class="col-lg-auto">
  <a href="?tipotur=<?= $_SESSION['tipotur'] ?>&cia=<?= $_SESSION['cia'] ?>&orden=Enviar">
    <input type="button"class="btn btn-success mt-2" value="Volver">
  </a>
  <input type="button"class="btn btn-info mt-2" onclick="confirmarVolver();" value="Volver a Empezar">
  </div>
</div>

<?php
$contenido = ob_get_clean();// Vacio el bufer
include_once "secundaria.php";
?>
