<?php
session_start();
include_once 'app/controlador.php';
include_once 'app/ModeloDB.php';

$rutaUsuario = [
    "Inicio" => "ctrInicio",
    "Empezar" => "ctrEmpezar",
    "Enviar" => "ctrLista",
    "Cerrar" => "ctrCerrar",
    "Consultar" => "ctrConsultar",
    "Admin" => "ctrAdmin",
    "Crear" => "ctrCrear",
    "Borrar" => "ctrBorrar",
    "Alta" => "ctrAlta",
    "Delete" => "ctrDelete",
    "cerrarSesion" => "ctrCerrarSesion"
];

if (isset($_GET['orden'])) {
    if (isset($rutaUsuario[$_GET['orden']])) {
        $procedimiento = $rutaUsuario[$_GET['orden']];
    } else {
        header('Status: 404 Not Found');
        echo '<html><body><h1>Error 404: No existe la ruta <i>' . $_GET['ctl'] . '</p></body></html>';
        exit();
    }
} else {
    $procedimiento = "ctrInicio";
}

$procedimiento();

?>