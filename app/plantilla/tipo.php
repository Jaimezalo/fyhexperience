<?php ob_start();?> <!--Guardo la salida en un buffer-->


<div class="row justify-content-md-center mx-auto">
  <h3 class="subtitle">¿Qué prefieres?¿Un viaje en la costa o en el interior?</h3>
</div>
<div class="row justify-content-md-center mx-auto">
  <div class="col-lg-auto">
    <a href="?cia=<?= $_SESSION['cia'] ?>&tipo=Costa&orden=Enviar">
      <img src="imagenes/costa.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="Costa">
    </a>
  </div>
  <div class="col-lg-auto">
    <a href="?cia=<?= $_SESSION['cia'] ?>&tipo=Interior&orden=Enviar">
      <img src="imagenes/interior.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="Interior">
    </a>
  </div>
</div>
<div class="row justify-content-md-center mt-5 mx-auto">
  <div class="col-lg-auto">
    <a href="?orden=Enviar">
      <input type="button"class="btn btn-success mt-2" value="Volver">
    </a>
  </div>
</div>

<?php
$contenido = ob_get_clean();// Vacio el bufer
include_once "secundaria.php";
?>
