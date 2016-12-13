<?php
		include_once('Clases/Usuario.php');
		include_once('Clases/AccesoDatos.php');

	echo "<table class='table table-hover table-responsive'>
			<thead>
				<tr>
					<th>     </th>
					<th>     </th>
					<th>  Usuario   </th>
					<th>  Contraseña</th>
					<th>  Permisos  </th>				
				</tr> 
			</thead>";   	

	$usuarios = Usuario::TraerTodosLosUsuarios();
		
	foreach ($usuarios as $us){
		$conboton = "<td><button class= 'button-3d' animated = 'glowing' onclick=BorrarUsuario('";
		$conB = "')>Borrar</button></td>";
		$user=trim($us->user," ");

		$conboton2 = "<td><button class= 'button-3d' animated = 'glowing' onclick=CambiarContraseña('";
		$conB2 = "')>Modificar</button></td>";
		echo	"<tr>";
		echo  $conboton."$user".$conB; 
		//echo  $conboton2."$user".$conB2; 

		echo			"<td>  $us->user</td>				
						 <td>  $us->pass</td>";

	if($us->tipo == 'a')
		echo "<td>  Administrador    </td>";
	else
		echo "<td>  Usuario</td>";

	echo	"	</tr> ";
	}

	echo"</table>";	

?>