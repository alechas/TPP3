<?php

require_once"AccesoDatos.php";
require_once"Factura.php";

class Auto
{
	public $patente;
	public $marca;
	public $color;
	public $estado;

  	public function GetPatente()
	{
		return $this->patente;
	}

  	public function GetMarca()
	{
		return $this->marca;
	}

  	public function GetColor()
	{
		return $this->color;
	}

  	public function GetEstado()
	{
		return $this->estado;
	}

	// public function __construct($pa,$ma,$co,$es)
	// {
	// 	$this->patente = $pa;
	// 	$this->marca = $ma;
	// 	$this->color = $co;
	// 	$this->patende = $es;
	// }

	// public static function BorrarAuto($patente)
	//  {

	// 		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
	// 		$consulta =$objetoAccesoDato->RetornarConsulta("
	// 			delete 
	//			from autos 				
	// 			WHERE patente=:patente");	
	// 			$consulta->bindValue(':patente',$patente, PDO::PARAM_INT);		
	// 			$consulta->execute();
	// 			//return $consulta->rowCount();

	//  }
 
	
	 public static function InsertarAuto($patente,$marca,$color)
	 {

	 			//Obtengo todos los autos
	 			$autos = Auto::TraerTodosLosAutos();
	 			foreach ($autos as $au){

					IF($au->patente == $patente)
					{
						$autoExistente = $au;
					}				
				}

				if ($autoExistente==NULL) {

					$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
					//var_dump($this);
					$consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO `autos`(`patente`, `marca`, `color`,`estado`) VALUES('$patente','$marca','$color','I')");
					$consulta->execute();
					//return $objetoAccesoDato->RetornarUltimoIdInsertado();
					var_dump($objetoAccesoDato->RetornarUltimoIdInsertado());
				}

				else
				{
					$autoExistente->estado = 'I';
					Auto::ModificarAuto($autoExistente);
				}
	
				//Creo una factura
				Factura::InsertarFactura($patente);
	 }

	  public static function DespacharAuto($patente)
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				//$consulta =$objetoAccesoDato->RetornarConsulta("UPDATE 'autos' set estado=:estado where patente=:patente");
				$consulta =$objetoAccesoDato->RetornarConsulta("UPDATE `autos` SET `estado`=:estado where patente=:patente");

				$consulta->bindValue(':estado','E', PDO::PARAM_INT);
				$consulta->bindValue(':patente',$patente, PDO::PARAM_INT);
				$consulta->execute();		
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }

	public static function TraerTodosLosAutos()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		//$consulta=$objetoAccesoDato->RetornarConsulta("select patente, marca,color,estado from autos");
		//$consulta=$objetoAccesoDato->RetornarConsulta("SELECT * FROM `autos`");
		$consulta=$objetoAccesoDato->RetornarConsulta("SELECT `patente`, `marca`, `color`, `estado` FROM `autos`");
		$consulta->execute();
		//var_dump($consulta->fetchall(PDO::FETCH_CLASS,"Auto"));
		return $consulta->fetchall(PDO::FETCH_CLASS,"Auto");
	}
}
?>