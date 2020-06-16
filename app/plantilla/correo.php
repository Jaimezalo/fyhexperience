<?php 

if (isset($_POST['EnviarMsg'])){
  if(!empty($_POST['nombre']) && !empty($_POST['dir_email']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])){
    $nombre = $_POST['nombre'];
    $cliente = $_POST['dir_email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $mensaje .= "\n"."Correo del cliente: ".$cliente;
    $direccion = "aplicacionturismodaw@gmail.com";

    $header = "From: noreply@example.com"."\r\n";
    $header .= "Reply-To: ".$cliente."\r\n";
    $header .= "X-Mailer: PHP/".phpversion();

    $enviado = mail($direccion,$asunto,$mensaje,$header);
    if($enviado){
      echo "<h4 style='color: white;'>Su consulta ha sido enviada, pronto recibirás una respuesta</h4>";
    }
  }
}
?>
