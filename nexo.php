<?php
require_once"Clases/Usuario.php";

$queHago = isset($_POST['queHago']) ? $_POST['queHago'] : NULL;

switch ($queHago) {

    case "AutosEstacionados":
    	
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
    	echo "frmDespacharAuto";
    	break;

    case "Ingresar":
    	//echo setcookie("MisUsuariosCK", $_POST['user']."&".$_POST['user'], time() + (86400 * 30), "/");
    	echo setcookie("MisUsuariosCK", $_POST['user'], time() + (86400 * 30), "/");
        session_start();
        $_SESSION['user'] = $_POST['user'];
        var_dump($_SESSION);
        var_dump($_POST);
        $usuario = Usuario::TraerUnUsuario($_POST['user']);

    	break;

    }

?>