<html>
<head>
<title>Estacionamiento</title>
</head>
<body> 
		<script type="text/javascript" src="java.js"></script>
		<script type="text/javascript" src="java.js"></script>

        <input type="text" name= "user" id = "user" placeholder= "   Ingrse usuario     " 
                                                    value = "<?php 
                                                                    if(isset($_POST['usuarioMod']))
                                                                      echo $_POST['usuarioMod'];   
                                                             ?>">
        <br>
        <input type="text" name= "pass" id = "pass" placeholder= "   Ingrse contraseña     "
                                                    value = "<?php 
                                                                    if(isset($_POST['passMod']))
                                                                      echo $_POST['passMod'];   
                                                             ?>">
        <br>
        <input type="text" name= "tipo" id = "tipo" placeholder= "   Ingrse tipo de usuario"
                                                    value = "<?php 
                                                                    if(isset($_POST['tipoMod']))
                                                                      echo $_POST['tipoMod'];   
                                                             ?>">
        <br>
        <input type="button" onclick= "<?php 
                                            if(isset($_POST['usuarioMod']))
                                              echo 'ModificarUsuario()'. ' value ='.'    Modificar                     ';   
                                            else
                                              echo 'AgregarUsuarioSQL()'. ' value ='.'    Agregar                     ';   
                                       ?>">

        <br>
        
</body>
</html>