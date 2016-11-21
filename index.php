<!DOCTYPE html>
<html>
<head>
<title>Estacionamiento</title>
<meta charset="utf-8">
<!-- Google Fonts  -->
<link href='http://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
<!-- CSS Files  -->
<link rel="stylesheet" type="text/css" href="buttons.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
<!-- Contact Form --> 
<link href="contact-form/css/style.css" media="screen" rel="stylesheet" type="text/css">
<link href="contact-form/css/uniform.css" media="screen" rel="stylesheet" type="text/css">
<!-- JS Files -->
<script src="js/jquery.tools.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript" src="FuncionesJava.js"></script>
</head>
<body>
<div class="header">
  <!-- Main Menu -->
  <ol id="menu">
    <li class="active_menu_item"><a >      Gestión Autos       </a>
      <!-- sub menu -->
      <ol>
        <input class= "button-rounded" animated = "glowing" type="button" onclick="IngresarAuto()" name= "ingresar" id = "ingresar" value = "       Ingresar               ">
        <br>
      </ol>
    </li>
    <!-- END sub menu -->
    <li><a >Grillassss</a>
      <!-- sub menu -->
      <ol>
        <input class= "button-rounded" animated = "glowing" type="button" onclick="AutosEstacionados()" name= "autos_estacionados" id = "autos_estacionados" value = " Autos        ">
        <br>
        <input class= "button-rounded" animated = "glowing" type="button" onclick="TodosAutosEstacionados()" name= "autos_estacionado" id = "autos_estacionado" value = " Autos(todos)">
        <br>
        <input class= "button-rounded" animated = "glowing" type="button" onclick="ImportesFacturados()" name= "importes_facturados" id = "importes_facturados" value = " Importes    ">
        <br>
      </ol>
    </li>
    <!-- END sub menu -->
    <li><a >Acceso</a>
        <ol>
          <input class= "button-rounded" animated = "glowing" type="button" onclick="LogIn()" name= "login" id = "login" value = "   LogIn        ">
          <br>
          <input class= "button-rounded" animated = "glowing" type="button" onclick="LogOut()" name= "logOut" id = "LogOut" value = "   LogOut      ">
        </ol>
</li>
<?php
//session_start();
  //if($_SESSION['tipo'] == 'admin')
  // echo "<li class='active_menu_item'><a >Gestión Autos</a>
  //         <ol>
  //           <input type='button' onclick='GestionarUsuarios()' name= 'ingresar' id = 'ingresar' value = '       Usuarios               '>
  //           <br>
  //         </ol>
  //       </li>";
?>
    <li><a >Usuarios</a>
        <ol>
          <input class= "button-rounded" animated = "glowing" type="button" onclick="ListarUsuarios()" value = "   Listar        ">
          <br>
          <input class= "button-rounded" animated = "glowing" type="button" onclick="AgregarUsuario()" value = "   Agregar      ">
        </ol>
    </li>

</div>
<!-- END header -->
<div id="container">
  <!-- tab panes -->
</div>
<!-- END footer -->

</body>
</html>