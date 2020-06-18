<?php ob_start();?> <!--Guardo la salida en un buffer-->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="config/css/bootstrap.min.css">
  <link rel="stylesheet" href="config/js/jquery-ui.css" >
  <link rel="stylesheet" href="Estilos/estilos.css">
</head>
  <style type="text/css">
    body{background: linear-gradient(#8CB6C6, #9198e5);}
  </style>
<body>

<form name='borrar' method="POST" action="index.php?orden=Delete">

  <div class="form-group">
    <label for="exampleFormControlInput1"><strong>Nombre del archivo que quieras borrar: </strong></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="nombreborrar" required>
  </div>	
  
  <p><strong>Recuerde poner el nombre exacto, con las mismas mayusculas y tildes</strong></p>
		
	<input  type="hidden" name="orden" value="Delete">
	<input id='boton'  type="submit" class="btn btn-success" value="Borrar" >
	<input id='boton' onClick="javascript:window.history.back();" type="button" class="btn btn-success" name="Submit" value="Atras" />
</form>

<?= (isset($msg))?$msg:"" ?>
<?php
$contenido = ob_get_clean();// Vacio el bufer
include_once "secundaria.php";
?>