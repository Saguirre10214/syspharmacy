<?php 

	class Conexion{
		
		public function Get_Conection()
		{
			$codificacion=array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
			$dsn = 'mysql:host=localhost;dbname=dbsistema_csp';
			$user ='root';
			$password ='';
		try 
		{
			
				$cn = new PDO($dsn, $user, $password,$codificacion);
				
				return $cn;
					
		}catch(PDOException $e) 
			{
					echo 'Falló la conexión:'.$e->getMessage();
			}
		}
		
	}

?>