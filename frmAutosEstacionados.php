<?php

		include_once('Clases/Auto.php');
		include_once('Clases/AccesoDatos.php');
	// var_dump($_POST);
 	if(isset($_POST['idparaborrar']))
 	{
 		echo "id para borrar";
 		$resultado = Autos::DespacharAuto($_POST['idparaborrar']);
 	}


	echo "<table class='table table-hover table-responsive'>
			<thead>
				<tr>
					<th>            </th>				
					<th>  Patente   </th>				
					<th>  Marca   </th>
					<th>  Color     </th>
					<th>  Estado	</th>
				</tr> 
			</thead>
			<script type='text/javascript' src='FuncionesJava.js'></script>";   	

	$autos = Auto::TraerTodosLosAutos();
	foreach ($autos as $au){

  	
	echo	"<tr>";
	if($au->estado == 'I')
			echo		"<td><button class='btn btn-danger' name='Despachar' onclick='Despachar($au->patente)'>Despachar</button></td>";

	else
			echo		"<td>            </td>";				

	echo			"<td>  $au->patente</td>				
					<td>  $au->marca   </td>
					<td>  $au->color   </td>";

	if($au->estado == 'I')
		echo "<td>  Ingrsado    </td>";
	else
		echo "<td>  Desapachado</td>";

	echo	"	</tr> ";
	}

	echo"</table>";	

?>