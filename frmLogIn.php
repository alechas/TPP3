<html>
<head>
<title>Estacionamiento</title>
</head>
<body> 
		<script type="text/javascript" src="java.js"></script>
		<script type="text/javascript" src="java.js"></script>
        <link rel="stylesheet" type="text/css" href="buttons.css">

        <input type="text" name= "user" id = "user" value = "<?php 
        															if(isset($_COOKIE['MisUsuariosCK']))
        															  echo $_COOKIE['MisUsuariosCK'];   
        													 ?>">
        <br>
        <input type="password" name= "pass" id = "pass" placeholder= "   Ingrse contraseña     ">
        <br>
        <input class= "button-3d" animated = "glowing" type="button" onclick="Ingresar()" name= "ingresar" id = "ingresar" value = "   LogIn                     ">
        <br>
        <?php   
          if(isset($_SESSION))
        	if($_SESSION['user'] == 'admin' )
              echo "<input type='button' onclick='CrearUsuario()' value = 'Crear usuario'>"

        ?>
        <input class= "button-3d" animated = "glowing" type="button" onclick="IngresarUs()" name= "ingresarUs" id = "ingresarUs" value = "   Test Usuario           ">
        <br>
        <input class= "button-3d" animated = "glowing" type="button" onclick="IngresarAd()" name= "ingresarAd" id = "ingresarAd" value = "   Test Administrador   ">
        
</body>
</html>