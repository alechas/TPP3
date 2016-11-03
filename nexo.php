<?php

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
    	break;

    }

?>