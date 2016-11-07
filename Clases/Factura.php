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

	 		$hora = date("h:i:s");
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			//var_dump($this);
			$consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO `facturacion`(`patente`, `hora_ingreso`, `hora_egreso`,`facturado`) VALUES('$patente','$hora',' ',' ')");
			$consulta->execute();
			//return $objetoAccesoDato->RetornarUltimoIdInsertado();
			var_dump($objetoAccesoDato->RetornarUltimoIdInsertado());

	 }

	  public static function ModificarFactura($id)
	 {
	 			$hora = date("h:i:s");
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				//$consulta =$objetoAccesoDato->RetornarConsulta("UPDATE 'autos' set estado=:estado where patente=:patente");
				$consulta =$objetoAccesoDato->RetornarConsulta("UPDATE `facturacion` SET `hora_egreso`=:hora_egreso where id=:id");

				$consulta->bindValue(':hora_egreso',$hora, PDO::PARAM_INT);
				$consulta->bindValue(':id',$id, PDO::PARAM_INT);
				$consulta->execute();		
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }




	// public static function TraerTodosLosAutos()
	// {
	// 	$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
	// 	//$consulta=$objetoAccesoDato->RetornarConsulta("select patente, marca,color,estado from autos");
	// 	//$consulta=$objetoAccesoDato->RetornarConsulta("SELECT * FROM `autos`");
	// 	$consulta=$objetoAccesoDato->RetornarConsulta("SELECT `patente`, `marca`, `color`, `estado` FROM `autos`");
	// 	$consulta->execute();
	// 	//var_dump($consulta->fetchall(PDO::FETCH_CLASS,"Auto"));
	// 	return $consulta->fetchall(PDO::FETCH_CLASS,"Auto");
	// }

}

?>