
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
        if(($destino['d_afluencia']==$afluencia)&&($destino['d_compania']==$cia)&&
        ($destino['d_tipo']==$tipo)&&($destino['d_precio']==$precio)&&
        ($destino['d_tipo_turismo'])){
            $datosdestino = [
                $destino['d_descripcion'],
                $destino['d_link']
            ];
            $resultado[$destino['d_nombre']]=$datosdestino;
        }
    }
    return $resultado;
}
    
?>