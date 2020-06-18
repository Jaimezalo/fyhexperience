<!doctype html>
<html lang="es">
  <head>
    <title>Contacto</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="Imagenes/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="config/css/bootstrap.min.css">
    <link rel="stylesheet" href="config/js/jquery-ui.css" >
    <link rel="stylesheet" href="Estilos/estilos.css">
  </head>
  <style type="text/css">
    body{
            background: linear-gradient(#e66465, #9198e5);
        }
  </style>
  <body>
    
    <!-- Formulario -->
 
    <section>
      <div class="container formulario">
        <br>
      <h3>¿Tienes alguna duda?¿Te ha surgido algún tipo de problema?</h3>
      <h5>Contacta con nosotros y te lo solucionaremos lo antes posible...</h5>  
      <form>
        <div class="form-group">
          <label for="exampleFormControlInput1">Nombre: *</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ismael" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Apellidos: *</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Villa" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Indique su dirección de e-mail: *</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com" required>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Sexo: </label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option selected="true">Seleccione su sexo</option>
            <option>Masculino</option>
            <option>Femenino</option>
            <option>Otro</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect2">Seleccione el tema de su incidencia: </label>
          <select multiple class="form-control" id="exampleFormControlSelect2">
            <option>Estilo responsive</option>
            <option>Imágenes o vídeos</option>
            <option>Elaboración de formularios</option>
            <option>Otro</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Indique su incidencia: *</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required=""></textarea>
        </div>
        <input type="submit" onclick="cargarBarra()" class="btn btn-success" value="Enviar">
        <input type="reset" class="btn btn-danger" value="Limpiar">
      </form>
      <br>
    </div>
    </section>

    <br><br><br><br><br><br><br><br>
    <!-- Pie de página -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="config/js/jquery.js"></script>
    <script src="config/js/popper.min.js"></script>
    <script src="config/js/bootstrap.min.js"></script>
    <script src="config/js/jquery-ui.js"></script>
  </body>
</html>