<?php
	require_once"Clases/Factura.php";
	
	$total_facturado = 0;

	echo "<table class='table table-hover table-responsive'>
			<thead>
				<tr>
					<th>  N°       </th>				
					<th>  Patente  </th>		
					<th>  Ingreso  </th>
					<th>  Egreso   </th>
					<th>  Importe  </th>
				</tr> 
			</thead>";   	


	$facturas = Factura::TraerTodasLasFacturas();
	//var_dump($facturas);

	$total_facturado = 0;		
	foreach ($facturas as $fc){

	echo			"<tr>
					 <td>$fc->id</td>				
					 <td>$fc->patente</td>
					 <td>$fc->hora_ingreso</td>
					 <td>$fc->hora_egreso</td>
					 <td>$fc->facturado</td>
					 </tr>";

	$total_facturado = $total_facturado + $fc->facturado;
	}
	//$_POST['facturas'] = $facturas;
	//var_dump($facturas);
	$json_string = json_encode($facturas) ;
	//$fac[] = $facturas;
	echo "  <script type='text/javascript' src='FuncionesJava.js'></script>
			<tr>
					<th>  <button class=btn btn-danger onclick='DescargarFacturación( $json_string )'>Descargar</button></th>
					<th>  Total facturado   </th>		
					<th>     </th>
					<th>      </th>
					<th>  $total_facturado  </th>
		  </tr>";   	

	echo"</table>";	

?>