<?php

		include_once('Clases/Auto.php');
		include_once('Clases/AccesoDatos.php');
var_dump($_POST);
	if(isset($_POST['idparaborrar']))
	{
		echo "id para borrar";
		$resultado = Autos::DespacharAuto($_POST['idparaborrar']);
	}

	echo "       <script type='text/javascript'>
	        function Despachar(id)
	        {
	        	<?php Autos::DespacharAuto(id); ?>
	        }
        </script>
		";

	echo "<table class='table table-hover table-responsive'>
			<thead>
				<tr>
					<th>            </th>				
					<th>  Patente   </th>				
					<th>  Marca   </th>
					<th>  Color     </th>
					<th>  Estado	</th>
				</tr> 
			</thead>";   	


	$autos = Auto::TraerTodosLosAutos();
	foreach ($autos as $au){

  	
	echo	"<tr>";
	if($au->estado == 'I')
			echo		"
					<form method='POST' >
						<td><button class='btn btn-danger' name='Despachar' onclick='Despachar($au->patente)'>Despachar</button></td>
					</form>";

	else
			echo		"<td>            </td>";				

	echo			"<td>  $au->patente</td>				
					<td>  $au->marca   </td>
					<td>  $au->color   </td>";

	//echo "$auto->GetPatente $auto->GetMarca $auto->GetColor"   ;


			if($au->estado == 'I')
				echo "<td>  Ingrsado    </td>";
			else
				echo "<td>  Desapachado</td>";

	echo	"	</tr> ";
	}

	echo"</table>";	

?>