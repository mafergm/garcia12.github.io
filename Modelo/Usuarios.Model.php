<?php
	
	class Usuarios
	{
		function __construct()
		{

		}
      
		public function busqueda($usuario, $password)
		{
			$conectar = new Conexion();
			$qr = "SELECT * FROM `examen` WHERE `Usuario`='$usuario' AND `Password`='$password';";
			$resultado = $conectar->query($qr);
			$conectar->close();
			return $resultado;

			
		}
	}
?>