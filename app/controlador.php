<?php

include_once 'app/ModeloDB.php';

function ctrInicio()
{
    include_once 'plantilla/finicio.php';
}

function ctrEmpezar()
{
    include_once 'plantilla/tipoturismo.php';
}

function ctrLista()
{

    if(isset($_GET['tipotur']) && isset($_GET['cia']) && isset($_GET['tipo']) && isset($_GET['precio']) 
        && isset($_GET['afluencia'])){
        $_SESSION['afluencia'] = $_GET['afluencia'];
        $resultado=Consultar();
        include_once 'plantilla/fresultados.php';
    }else{
        if(isset($_GET['tipotur']) && isset($_GET['cia']) && isset($_GET['tipo']) && isset($_GET['precio'])){
            $_SESSION['precio'] = $_GET['precio'];
            include_once 'plantilla/afluencia.php';
        }else{
            if(isset($_GET['tipotur']) && isset($_GET['cia']) && isset($_GET['tipo'])){
                $_SESSION['tipo'] = $_GET['tipo'];
                include_once 'plantilla/precio.php';
            }
            else{
                if(isset($_GET['tipotur']) && isset($_GET['cia'])){
                	$_SESSION['cia'] = $_GET['cia'];
                	include_once 'plantilla/tipo.php';
                }else{
                	if(isset($_GET['tipotur'])){
                		$_SESSION['tipotur'] = $_GET['tipotur'];
                		include_once 'plantilla/compania.php';
                	}else{
                		include_once 'plantilla/tipoturismo.php';
                	}
                }
            }
        }
    }
}

function ctrCerrar()
{
    header('Location:index.php');
}


function ctrAdmin(){
    
    if(isset($_SESSION['user'])){
        include_once 'plantilla/login.php';
    }else{
        include_once 'plantilla/datos.php';
    }
}

function ctrCerrarSesion(){
    session_destroy();
    header('Location:index.php?orden=Inicio');
}
function ctrBorrar(){
    include_once 'plantilla/borrar.php';
}

function ctrCrear(){
    include_once 'plantilla/crear.php';
}

function ctrDelete(){
    
    $nombre = modeloDelete();
    if($nombre != null){
        echo "<script>";
        echo "borrarNombre(" . $nombre . ")";
        echo "</script>";
        $msg = '<p style="color:green"> ' . $nombre .' borrado con exito</p>';
    } else {
        $msg = '<p style="color:red"> Error. El destino no ha sido borrado </p>';
    }
    include_once 'plantilla/borrar.php';
    
}

function ctrAlta(){
    $resultados = modeloAlta();
    $msg = modeloSubida($resultados);
    include_once 'plantilla/crear.php';
}

?>