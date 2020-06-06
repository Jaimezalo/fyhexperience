<?php ob_start();?> <!--Guardo la salida en un buffer-->
<div class="row justify-content-center mx-auto">
  <h3 class="subtitle">Formulario para introducir destinos</h3>
</div>

<form id="form-imagenes">
    <label class="btn btn-file">
        <input type="file" id="ficheroSubir" class="hidden" value="">
        <img src="imagenes/uploadFile.png" alt="descargar" class="rounded img-fluid d-inline-block">

    </label>
     

</form>

<div class="row justify-content-md-center mx-auto"><div class="col-lg-auto mb-5"></div></div>
<?php
$contenido = ob_get_clean();// Vacio el bufer
include_once "secundaria.php";
?>