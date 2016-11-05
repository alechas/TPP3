<?php

require_once"AccesoDatos.php";

class Usuario
{
	public $user;
	public $pass;
	public $tipo;


	public function __construct($us,$pa,$ti)
	{
		$this->user = $us;
		$this->pass = $pa;
		$this->tipo = $ti;
	}

	public static function InsertarUsuario($usuario)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into usuarios (:user,pass,tipo)values(:user,:pass,:tipo)");
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL InsertarUsuario (:user,:pass,:tipo)");
		$consulta->bindValue(':user',$usuario->user, PDO::PARAM_STR);
		$consulta->bindValue(':pass', $usuario->pass, PDO::PARAM_STR);
		$consulta->bindValue(':dni', $usuario->tipo, PDO::PARAM_STR);
		$consulta->execute();		
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	
				
	}
	public static function TraerUnUsuario($user) 
	{	

		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from usuarios where user =:user");
		//$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerUnaPersona(:id)");
		$consulta->bindValue(':user', $user, PDO::PARAM_INT);
		$consulta->execute();
		//var_dump($consulta);
		return $consulta->fetchall(PDO::FETCH_CLASS,"usuario");

		// $usuarioBuscada= $consulta->fetchObject('user');
		// return $usuarioBuscada;	
					
	}

}

?>