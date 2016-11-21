<html>
<head>
<title>Estacionamiento</title>
</head>
<body> 
		<script type="text/javascript" src="java.js"></script>
		<script type="text/javascript" src="java.js"></script>

        <h1> <?php require_once"Clases/Usuario.php";
                   //$userM = Usuario::getUM(); 
                   //echo $userM
                   //Usuario::getUM(); ?> 
               </h1>
        <br>
        <input type="password" name= "pass" id = "pass" placeholder= "   Ingrse contraseña     ">
        <br>
    <select id = "tipo">
    <option value='a'> Administrador </option>    
    <option value='u'> Usuario </option>    
    </select>

        <br>
        <input class= "button-3d" animated = "glowing" type="button" onclick= "ModificarUsuarioSQL('alex')"  value = '       Modificar                     ';   

        <br>

</body>
</html>