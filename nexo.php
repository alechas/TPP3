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
        $usuario = Usuario::TraerUnUsuario($_POST['user'],$_POST['pass']);

        if (count($usuario) == 0) {
            header('http/1.0 500 ');

        }
        if ($usuario->tipo == 'a') {
            $_SESSION['tipo'] = "admin";
echo "<li class='active_menu_item'><a >Gestión Autos</a>
          <ol>
            <input type='button' onclick='GestionarUsuarios()' name= 'ingresar' id = 'ingresar' value = '       Usuarios               '>
            <br>
          </ol>
        </li>";
        }

        else
            $_SESSION['tipo'] = $_POST['user'];

        //echo "index";
    	break;

    case "IngresarUs":

        $_SESSION['tipo'] = "user";
        echo "index";
        break;

    case "IngresarAd":

        $_SESSION['tipo'] = "admin";
        echo "index";
        break;


    case "CargarAuto":

        $respuesta = Auto::InsertarAuto($_POST['patente'],$_POST['marca'],$_POST['color']);
        echo $respuesta;
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

         //Usuario::InsertarUsuario($_POST['user'],$_POST['pass'],$_POST['tipo']);      
        echo "agregar auto";
    break;

    default:
    echo "Error";
    }

?>