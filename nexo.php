<?php
require_once"Clases/Usuario.php";
require_once"Clases/Auto.php";
require_once"Clases/Factura.php";

$queHago = isset($_POST['queHago']) ? $_POST['queHago'] : NULL;

switch ($queHago) {

    case "AutosEstacionados":
        //$_POST['autos'] = Auto::TraerTodosLosAutos();   	
    	//echo $_POST['autos'] = Auto::TraerTodosLosAutos();
        echo "frmAutosEstacionados";
    	break;

    case "ImportesFacturados":
    	
    	echo "frmImportesFacturados";
    	break;

    case "Usuarios":
    	
    	echo "frmUsuarios";
    	break;

    case "LogIn":
    	
    	echo "frmLogIn";
    	break;

    case "LogOut":

    	echo "frmLogOut";
    	break;

    case "IngresarAuto":
    	echo "frmIngresarAuto";
    	break;

    case "DespacharAuto":
    	Auto::DespacharAuto($_POST['patente']);
        echo "frmAutosEstacionados";

    	break;

    case "Ingresar":
    	//echo setcookie("MisUsuariosCK", $_POST['user']."&".$_POST['user'], time() + (86400 * 30), "/");
    	setcookie("MisUsuariosCK", $_POST['user'], time() + (86400 * 30), "/");
        $usuario = Usuario::TraerUnUsuario($_POST['user']);


        session_start();
        $_SESSION['user'] = $_POST['user'];


    	break;

    case "IngresarUs":

        session_start();
        $_SESSION['tipo'] = "user";

        break;

    case "IngresarAd":

        session_start();
        $_SESSION['tipo'] = "admin";

        break;


    case "CargarAuto":

        $respuesta = Auto::InsertarAuto($_POST['patente'],$_POST['marca'],$_POST['color']);
        echo $respuesta;
        //echo "frmAutosEstacionados";
        break;

    case "DownloadFacturas":
        Factura::DescargarFacturacion($_POST['facturas']);
        break;
    }

?>