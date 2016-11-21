<?php

require_once"AccesoDatos.php";

class Factura
{

	public $id;
	public $patente;
	public $hora_ingreso;
	public $hora_egreso;
	public $facturado;

	public function GetId()
	{
		return $this->Id;
	}

	public function GetPatente()
	{
		return $this->patente;
	}

	public function GetHora_Ingreso()
	{
		return $this->hora_ingreso;
	}

	public function GetHora_Egreso()
	{
		return $this->hora_egreso;
	}

	public function GetFacturado()
	{
		return $this->facturado;
	}

	 public static function InsertarFactura($patente)
	 {
	 		//$hora = date("h:i:s");
			$hora = date("Y/m/d H:i:s");
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			//var_dump($this);
			$consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO `facturacion`(`patente`, `hora_ingreso`, `hora_egreso`,`facturado`) VALUES('$patente','$hora',' ',' ')");
			$consulta->execute();
			//return $objetoAccesoDato->RetornarUltimoIdInsertado();
			//var_dump($objetoAccesoDato->RetornarUltimoIdInsertado());

	 }

	  public static function Facturar($patente)
	 {
	 			$unaFac=Factura::TraerUnaFactura($patente);
	 			$unaFac->hora_egreso = date("Y/m/d H:i:s");
				//$unaFac->facturado = Factura::CalcularFactura($unaFac, date("h:i:s"), '30');	
				$unaFac->facturado = minutos_transcurridos($unaFac->hora_ingreso, $unaFac->hora_egreso);					

	 			//$hora = date("h:i:s");
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				//$consulta =$objetoAccesoDato->RetornarConsulta("UPDATE 'autos' set estado=:estado where patente=:patente");
				$consulta =$objetoAccesoDato->RetornarConsulta("UPDATE `facturacion` SET `hora_egreso`=:hora_egreso, `facturado`=:facturado where id=:id");

				$consulta->bindValue(':hora_egreso',$unaFac->hora_egreso, PDO::PARAM_INT);
				$consulta->bindValue(':id',$unaFac->id, PDO::PARAM_INT);
				$consulta->bindValue(':facturado',$unaFac->facturado, PDO::PARAM_INT);
				$consulta->execute();		
				//return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 			echo "A $1 el minuto, se debe abonar: $ $unaFac->facturado";
	 }

	public static function TraerUnaFactura($patente) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select  id , patente, hora_ingreso, hora_egreso from facturacion WHERE patente=:patente AND facturado='0'");
			//$consulta->execute(array($id, $anio));
			$consulta->bindValue(':patente',$patente, PDO::PARAM_INT);
			$consulta->execute();
			$FacBuscado= $consulta->fetchObject('factura');
      		return $FacBuscado;				

			
	}

function minutos_transcurridos($fecha_i,$fecha_f)
{
	$minutos = (strtotime($fecha_i)-strtotime($fecha_f))/60;
	$minutos = abs($minutos); $minutos = floor($minutos);
	return $minutos;
}

	public static function TraerTodasLasFacturas()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		$consulta=$objetoAccesoDato->RetornarConsulta("SELECT `id`, `patente`, `hora_ingreso`, `hora_egreso` , `facturado` FROM `facturacion` WHERE facturado != 0");
		$consulta->execute();
		return $consulta->fetchall(PDO::FETCH_CLASS,"Factura");
	}

public static function DescargarFacturacion($facturacion)
{
	//var_dump($facturacion);
	//var_dump($facturacion);
    $json_string = json_encode($facturacion) ;

	//echo " descargar";
	//var_dump($facturacion);
	//$json_string = json_encode($_POST['facturas']) ;

	$myfile = fopen('Facturacion.json', 'w+');// or die("Error al crear el archivo");
    
	//fwrite($myfile, $json_string);
	fwrite($myfile, $json_string);

	fclose($myfile);

}

}

?>