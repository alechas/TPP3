<?php
session_start();
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
        
        if ($_SESSION['tipo'] == 'admin')
    	   echo "frmImportesFacturados";

        else
            header('http/1.0 500 ');


    	break;

    case "Usuarios":
    	
    	echo "frmUsuarios";
    	break;

    case "LogIn":
    	
    	echo "frmLogIn";
    	break;

    case "LogOut":
        $_SESSION['tipo'] = "";
    	//echo "frmLogOut";
    	break;

    case "IngresarAuto":
    	echo "frmIngresarAuto";
    	break;

    case "DespacharAuto":
    	Auto::DespacharAuto($_POST['patente']);
        //echo "frmAutosEstacionados";

    	break;

    case "Ingresar":
    	//echo setcookie("MisUsuariosCK", $_POST['user']."&".$_POST['user'], time() + (86400 * 30), "/");
    	setcookie("MisUsuariosCK", $_POST['user'], time() + (86400 * 30), "/");
        
        $usuario = Usuario::TraerUnUsuario($_POST['user'],$_POST['pass']);

        if (count($usuario) == 0) {
            header('http/1.0 500 ');

        }
        if ($usuario[0]->tipo == 'a') {
            $_SESSION['tipo'] = 'admin';
            }

        else
            $_SESSION['tipo'] = 'user';

    	break;

    case "IngresarUs":

        $_SESSION['tipo'] = "user";
        
        break;

    case "IngresarAd":

        $_SESSION['tipo'] = "admin";
        echo "index";
        break;


    case "CargarAuto":

        $respuesta = Auto::InsertarAuto($_POST['patente'],$_POST['marca'],$_POST['color']);
        // for ($i=0; $i < 500; $i++) { 
        //     $pat = $_POST['patente'].$i;
        //     $respuesta = Auto::InsertarAuto($pat,$_POST['marca'],$_POST['color']);

        // }
        //echo $respuesta;
        //echo "frmAutosEstacionados";
        break;

    case "DownloadFacturas":
        Factura::DescargarFacturacion($_POST['facturas']);

        break;

    case "ListarUsuarios":

        echo "frmUsuarios";

    break;

    case "CambiarContraseña":
        echo "frmGestionUsuario";

    break;

    case "BorrarUsuario":
        Usuario::BorrarUsuario($_POST['user']);
        echo "frmUsuarios";

    break;

    case "AgregarUsuario":
        echo "frmAltaUsuario";
    break;

    case "AgregarUsuarioSQL":
        //var_dump($_POST);
        Usuario::InsertarUsuario($_POST['user'],$_POST['pass'],$_POST['tipo']);      
        //echo "frmUsuarios";
    
    break;

    default:
    echo "Error";

    case "ChequearPatente":
        
        $auto = Auto::TraerUnAuto($_POST['patente']);
        //var_dump($auto);
        //echo $auto[0]->color.'&'.$auto[0]->marca;
        echo $auto[0];
    }

?>