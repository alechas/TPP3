<html>
<head>	  
		<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
		<!--final de Estilos-->
		   <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo.css">

       <script type="text/javascript">
	        function DespacharAuto(patente)
	        {
	        	alert(id);
	        	document.getElementById('patente').value=id;
	        	document.frmAutosEstacionados.submit();
	        }
        </script>
</head>
<body>
 <a class="btn btn-info" href="index.html">Menu principal</a>
<?php
	if(isset($_POST['patente']))
	{
		echo "Debo borrar";
		include_once('clases/Auto.php');
		include_once('clases/AccesoDatos.php');
		$resultado = Auto::DespacharAuto($_POST['patente']);
	}

?>	
		
<?php 
include_once("clases/Auto.php");
include_once("clases/AccesoDatos.php");

// $datos= cd::TraerTodosLosCds();
// var_dump($datos);-->

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
		</div>
	</div>
</body>
</html>