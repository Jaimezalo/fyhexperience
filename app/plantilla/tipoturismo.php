<?php ob_start();?> <!--Guardo la salida en un buffer-->

<div class="row justify-content-md-center mx-auto">
  <h3 class="subtitle mt-5">Selecciona que tipo de turismo buscas principalmente:</h3>
</div> 
<div class="row justify-content-md-center mx-auto">
  <div class="col-lg-auto">
    <a href="?cia=<?= $_SESSION['cia'] ?>&tipo=<?= $_SESSION['tipo'] ?>&precio=<?= $_SESSION['precio'] ?>&afluencia=<?= $_SESSION['afluencia'] ?>&tipotur=Cultural&orden=Enviar">
      <img src="imagenes/cultural.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="cultural">
    </a>
  </div>
  <div class="col-lg-auto">
    <a href="?cia=<?= $_SESSION['cia'] ?>&tipo=<?= $_SESSION['tipo'] ?>&precio=<?= $_SESSION['precio'] ?>&afluencia=<?= $_SESSION['afluencia'] ?>&tipotur=Shopping&orden=Enviar">
      <img src="imagenes/shopping.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="shopping">
    </a>
  </div>
  <div class="col-lg-auto">
    <a href="?cia=<?= $_SESSION['cia'] ?>&tipo=<?= $_SESSION['tipo'] ?>&precio=<?= $_SESSION['precio'] ?>&afluencia=<?= $_SESSION['afluencia'] ?>&tipotur=Turismo+de+noche&orden=Enviar">
      <img src="imagenes/discoteca.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="Turismo de noche">
    </a>
  </div>
</div>

<div class="row justify-content-md-center mx-auto">
  <div class="col-lg-auto">
    <a href="?cia=<?= $_SESSION['cia'] ?>&tipo=<?= $_SESSION['tipo'] ?>&precio=<?= $_SESSION['precio'] ?>&afluencia=<?= $_SESSION['afluencia'] ?>&tipotur=Rural&orden=Enviar">
      <img src="imagenes/rural.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="Rural">
    </a>
  </div>
  <div class="col-lg-auto">
    <a href="?cia=<?= $_SESSION['cia'] ?>&tipo=<?= $_SESSION['tipo'] ?>&precio=<?= $_SESSION['precio'] ?>&afluencia=<?= $_SESSION['afluencia'] ?>&tipotur=Salud&orden=Enviar">
      <img src="imagenes/balneario.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="Salud">
    </a>
  </div>
  <div class="col-lg-auto">
    <?php if($_SESSION['tipo'] == "Costa"){ ?>
    <a href="?cia=<?= $_SESSION['cia'] ?>&tipo=<?= $_SESSION['tipo'] ?>&precio=<?= $_SESSION['precio'] ?>&afluencia=<?= $_SESSION['afluencia'] ?>&tipotur=Sol+y+playa&orden=Enviar">
      <img src="imagenes/solyplaya.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="Sol y playa">
    </a>
    <?php } ?> 
  </div>
</div>

<div class="row justify-content-md-center mx-auto">
  <div class="col-lg-auto">
    <a href="?cia=<?= $_SESSION['cia'] ?>&tipo=<?= $_SESSION['tipo'] ?>&precio=<?= $_SESSION['precio'] ?>&orden=Enviar">
      <input type="button"class="btn btn-success mt-2" value="Volver">
    </a>
      <input type="button"class="btn btn-info mt-2" onclick="confirmarVolver();" value="Volver a Empezar">
    
  </div>
</div>




<?php
$contenido = ob_get_clean();// Vacio el bufer
include_once "secundaria.php";
?>
