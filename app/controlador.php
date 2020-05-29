<?php

include_once 'app/ModeloDB.php';

function ctrInicio()
{
    include_once 'plantilla/finicio.php';
}

function ctrEmpezar()
{
    include_once 'plantilla/compania.php';
}

function ctrLista()
{
    /*if(isset($_SESSION['cia'])){
    	$_SESSION['cia'] = $_SESSION['cia'];
    	include_once 'plantilla/tipo.php';
    }else{
    	header('Location:index.php');
    }*/

    if(isset($_SESSION['cia']) && isset($_SESSION['tipo']) && isset($_SESSION['precio']) && isset($_SESSION['afluencia']) 
        && isset($_GET['tipotur'])){
        $_SESSION['tipotur'] = $_GET['tipotur'];
        $destinos = BaseDatos::Consultar();
        include_once 'plantilla/fresultados.php';
    }else{
        if(isset($_SESSION['cia']) && isset($_SESSION['tipo']) && isset($_SESSION['precio']) && isset($_GET['afluencia'])){
            $_SESSION['afluencia'] = $_GET['afluencia'];
            include_once 'plantilla/tipoturismo.php';
        }else{
            if(isset($_SESSION['cia']) && isset($_SESSION['tipo']) && isset($_GET['precio'])){
                $_SESSION['precio'] = $_GET['precio'];
                include_once 'plantilla/afluencia.php';
            }
            else{
                if(isset($_SESSION['cia']) && isset($_GET['tipo'])){
                	$_SESSION['tipo'] = $_SESSION['tipo'];
                	include_once 'plantilla/precio.php';
                }else{
                	if(isset($_GET['cia'])){
                		$_SESSION['cia'] = $_GET['cia'];
                		include_once 'plantilla/tipo.php';
                	}else{
                		include_once 'plantilla/compania.php';
                	}
                }
            }
        }
    }    
    //print_r($_SESSION['cia']);
    //print_r($_SESSION['tipo']);
    //print_r($_SESSION['precio']);
    //$destinos = BaseDatos::Consultar();
    //include_once 'plantilla/fresultados.php';
}

function ctrCerrar()
{
    header('Location:index.php');
}

function testLista(){
    $destinos = BaseDatos::Consultar();



}