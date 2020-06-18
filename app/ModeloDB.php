
<?php

function Consultar(){
    $cia=$_SESSION['cia'];
    $tipo=$_SESSION['tipo'];
    $precio=$_SESSION['precio'];
    $afluencia=$_SESSION['afluencia'];
    $tipotur=$_SESSION['tipotur'];

    $resultado= [];

    $url = "https://find-your-holidays-5eb36.firebaseio.com/.json";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $destinos = json_decode (curl_exec($ch), true);
    curl_close($ch);      
    foreach ($destinos as $destino) {
        if($destino['d_compania'] == $cia && ($destino['d_tipo']==$tipo || $tipo=="Indiferente") && ($destino['d_precio']==$precio || $precio=="Indiferente") && ($destino['d_afluencia']==$afluencia || $afluencia=="Indiferente") &&  $destino['d_tipo_turismo'] == $tipotur){
            $datosdestino = [
                $destino['d_descripcion'],
                $destino['d_link']
            ];
            $resultado[$destino['d_nombre']]=$datosdestino;
        }
    }
    return $resultado;
}
    
function modeloDelete(){
    $solucion ='';
    
    $url = "https://find-your-holidays-5eb36.firebaseio.com/.json";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $destinos = json_decode (curl_exec($ch), true);
    curl_close($ch);
    
    foreach ($destinos as $clave => $valor) {
        if($_POST['nombreborrar'] == $valor['d_nombre']){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://find-your-holidays-5eb36.firebaseio.com/" . $clave . ".json");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
            $result = curl_exec($ch);
            
            if(curl_errno($ch)){
                $solucion = null ;//"Error" . curl_errno($ch);
            }else{
                $solucion = $_POST['nombreborrar'];;
            }
            curl_close($ch);
        }
    }
    return $solucion;
}
 
    
function modeloAlta(){
    $nombre =$_POST['nombre'] ;
    $afluencia= $_POST['afluencia'];
    $precio = $_POST['precio'];
    $compañia = $_POST['compania'];
    $tipoTurismo = $_POST['tipo_turismo'];
    $tipo = $_POST['tipo'];
    $descripcion = $_POST['descripcion'];
    $enlace = $_POST['enlace'];
    
    $resultados = '{"d_nombre":"'.$nombre.'",
                    "d_afluencia":"'.$afluencia.'",
                    "d_precio":"'.$precio.'",
                    "d_compania":"'.$compañia.'",
                    "d_tipo_turismo":"'.$tipoTurismo.'",
                    "d_descripcion":"'.$descripcion.'",
                    "d_link":"'.$enlace.'"}';
    return $resultados;
}

function modeloSubida($resultados){
    $solucion ='';
    $url = "https://find-your-holidays-5eb36.firebaseio.com/.json";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $destinos = curl_exec($ch);
    $destinos = json_decode (curl_exec($ch), true);
    curl_close($ch);
    
    $_SESSION['clave'] = count($destinos);

    $url = "https://find-your-holidays-5eb36.firebaseio.com/".$_SESSION['clave'] .".json";
    
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, $url);
    curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, "PATCH" );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $resultados);

    $response = curl_exec($ch);
    if( curl_errno($ch) ){
        $solucion = null;//return 'Error:'.curl_errno($ch);
    }else{
        $solucion =  '<p style="color:green"> Destino grabado con exito';
    }
    return $solucion;
}
    
    
    
?>