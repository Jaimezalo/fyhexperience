
<?php ob_start();?> <!--Guardo la salida en un buffer-->

<?php 
    $msg ="";
    if (isset($_POST['user']) && isset($_POST['clave'])){
        if($_POST['user'] == 'admin' && $_POST['clave'] == '12345'){
            $_SESSION['user'] = $_POST['user'];
            $_SESSION['clave'] = $_POST['clave'];
            header('Location:index.php?orden=Admin');
        } else {
            $msg =  'Usuario o clave incorrectos';
            header('Location:index.php?orden=Admin');  
        }
    } else {
?>

<div id='aviso'><b><?php echo $msg?></b></div>

<div class="row mt-5"></div>
<div class="row justify-content-md-center mt-5">
  <h1 class="subtitle">Bienvenido al modo administrador</h1>
</div>

<form class="offset-2" name='ACCESO' method="POST" action="index.php?orden=Admin">
  <div class="form-group col-xs-3">
    <label for="usuario">Usuario</label>
    <input type="text" class="form-control" name="user" id="usuario" aria-describedby="Nombre de usuario" placeholder="Introduce usuario">
  </div>
  <div class="form-group">
    <label for="clave">Contraseña</label>
    <input type="password" class="form-control" name="clave" id="clave" placeholder="Contraseña">
  </div>

  <button type="submit" class="btn btn-primary" value="Entrar">Entrar</button>
</form>  
    
<?php
    }
    $contenido = ob_get_clean();// Vacio el bufer
    include_once "secundaria.php";
?>