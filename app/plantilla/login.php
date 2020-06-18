<div class="row justify-content-md-center">
  <h1 class="subtitle">Bienvenido al modo administrador</h1>
</div>

<div class="row justify-content-md-center">
  <div class="col-lg-auto">
    <a href="?&orden=Crear">
      <img src="imagenes/crear.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="Crear">
    </a>
  </div>
  
</div>

<div class="row justify-content-md-center">
  <div class="col-lg-auto">
    <a href="?&orden=Borrar">
      <img src="imagenes/borrar.jpg" class="rounded img-fluid d-inline-block opciones mt-1" alt="Borrar">
    </a>
  </div>
  
</div>

<div class="row justify-content-md-center mt-5">
  <div class="col-lg-auto">
    <a href="?orden=Inicio">
      <input type="button"class="btn btn-success mt-2" value="Volver">
    </a>
  </div>
  <div class="col-lg-auto">
    <a href="?orden=cerrarSesion">
      <input type="button"class="btn btn-success mt-2" value="Cerrar sesion">
    </a>
  </div>
</div>

<?php  
  $contenido = ob_get_clean();// Vacio el bufer
  include_once "secundaria.php";
?>