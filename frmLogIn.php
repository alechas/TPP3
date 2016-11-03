<html>
<head>
<title>Estacionamiento</title>
</head>
<body>
		<script type="text/javascript" src="java.js"></script>
		<script type="text/javascript" src="java.js"></script>

        <input type="text" name= "user" id = "user" value = "<?php 
        															if(isset($_COOKIE['MisUsuariosCK']))
        															  echo $_COOKIE['MisUsuariosCK']   

        													 ?>">
        <br>
        <input type="text" name= "pass" id = "pass" value = "   Ingrse contraseña     ">

        <input type="button" onclick="Ingresar()" name= "ingresar" id = "ingresar" value = "   Ingresar    ">
</body>
</html>