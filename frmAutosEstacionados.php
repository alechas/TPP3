<?php

		include_once('clases/Autos.php');
		include_once('clases/AccesoDatos.php');

	if(isset($_POST['idparaborrar']))
	{
		echo "id para borrar";
		$resultado = Autos::DespacharAuto($_POST['idparaborrar']);
	}

	echo "       <script type='text/javascript'>
	        function Despachar(id)
	        {
	        	document.getElementById('idparaborrar').value=id;
	        	document.frmAutosEstacionados.submit();
	        }
        </script>
		";

	echo "<table class='table table-hover table-responsive'>
			<thead>
				<tr>
					<th>  Patente   </th>				
					<th>  Marca   </th>
					<th>  Color     </th>
					<th>  Estado	</th>
				</tr> 
			</thead>";   	

		include_once('clases/Autos.php');
		include_once('clases/AccesoDatos.php');
	$autos = Auto::TraerTodosLosAutos();
	foreach ($autos as $au){

  	
	echo	"<tr>
					<td><button class='btn btn-danger' name='Despachar' onclick='Despachar($au->patente)'>Despachar</button></td>
					<td>  $au->patente</td>				
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