<?php ob_start();?> <!--Guardo la salida en un buffer-->

<!doctype html>
<html lang="es">
  <head>
    <title>Formulario de alta</title>
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
            background: linear-gradient(#8CB6C6, #9198e5);
        }
  </style>
   <body>
    <?= (isset($msg))?$msg:"" ?>
    <form name='ALTA' method="POST" action="index.php?orden=Alta">
       <div class="form-group">
             <label for="exampleFormControlInput1">Nombre: </label>
             <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre" required>
       </div>
        		
        <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Afluencia</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="afluencia" id="gridRadios1" value="Baja" required>
                  <label class="form-check-label" for="gridRadios1">
                    Baja
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="afluencia" id="gridRadios1" value="Media" required>
                  <label class="form-check-label" for="gridRadios2">
                    Media
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="afluencia" id="gridRadios1" value="Alta" required>
                  <label class="form-check-label" for="gridRadios2">
                    Alta
                  </label>
                </div>
              </div>
            </div>
          </fieldset>
    
        <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Tipo de turismo</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="tipo_turismo" id="gridRadios1" value="Salud" required>
                  <label class="form-check-label" for="gridRadios1">
                    Salud
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="tipo_turismo" id="gridRadios1" value="Shopping" required>
                  <label class="form-check-label" for="gridRadios2">
                    Shopping
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="tipo_turismo" id="gridRadios1" value="Rural" required>
                  <label class="form-check-label" for="gridRadios2">
                    Rural
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="tipo_turismo" id="gridRadios1" value="Sol y playa" required>
                  <label class="form-check-label" for="gridRadios2">
                    Sol y playa
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="tipo_turismo" id="gridRadios1" value="Cultural" required>
                  <label class="form-check-label" for="gridRadios2">
                    Cultural
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="tipo_turismo" id="gridRadios1" value="Turismo de noche" required>
                  <label class="form-check-label" for="gridRadios2">
                    Turismo de noche
                  </label>
                </div>
              </div>
            </div>
          </fieldset>
          
          <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Compañia</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="compania" id="gridRadios1" value="Solo" required>
                  <label class="form-check-label" for="gridRadios1">
                    Solo
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="compania" id="gridRadios1" value="Familia" required>
                  <label class="form-check-label" for="gridRadios2">
                    Familia
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="compania" id="gridRadios1" value="Amigos" required>
                  <label class="form-check-label" for="gridRadios2">
                    Amigos
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="compania" id="gridRadios1" value="Pareja" required>
                  <label class="form-check-label" for="gridRadios2">
                    Pareja
                  </label>
                </div>
              </div>
            </div>
          </fieldset>
        	
        <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Tipo</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="tipo" id="gridRadios1" value="Costa" required>
                  <label class="form-check-label" for="gridRadios1">
                    Costa
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="tipo" id="gridRadios1" value="Interior" required>
                  <label class="form-check-label" for="gridRadios2">
                    Interior
                  </label>
                </div>
              </div>
            </div>
          </fieldset>	
        		
        <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Precio</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="precio" id="gridRadios1" value="�" required>
                  <label class="form-check-label" for="gridRadios1">
                    Bajo
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="precio" id="gridRadios1" value="��" required>
                  <label class="form-check-label" for="gridRadios2">
                    Medio
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="precio" id="gridRadios1" value="���" required>
                  <label class="form-check-label" for="gridRadios2">
                    Alto
                  </label>
                </div>
              </div>
            </div>
          </fieldset>
        		
    
        		<div class="form-group">
                  <label for="exampleFormControlTextarea1">Descripcion</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion" required></textarea>
                </div>
    
        		<div class="form-group">
                  <label for="exampleFormControlInput1">Enlace </label>
                  <input type="text" class="form-control" id="exampleFormControlInput1"  name="enlace" required>
                </div>
        		
        	</table>
        	<input  type="hidden" name="orden" value="Enviar">
        	<input id='boton' type="submit"  class="btn btn-success" value="Enviar datos">
        	<input id='boton' onClick="javascript:window.history.back();" class="btn btn-success" type="button" name="Submit" value="Atras" />
    </form>
   
<?php
$contenido = ob_get_clean();// Vacio el bufer
include_once "secundaria.php";
?>