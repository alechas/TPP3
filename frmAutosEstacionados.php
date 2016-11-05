<?php

require_once"Clases/Auto.php";

	echo "<table class='table table-hover table-responsive'>
			<thead>
				<tr>
					<th>  Patente   </th>				
					<th>  Marca   </th>
					<th>  Color     </th>
					<th>  Estado	</th>
				</tr> 
			</thead>";   	

	$autos = Auto::TraerTodosLosAutos();
	foreach ($autos as $au){

  	
	echo	"<tr>
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