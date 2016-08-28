<?php namespace Models; 

	class Conexion()
	{
		private HOST = "localhost";
		private USER = "root";
		private PASS = "123";
		private DB = "pomdb";
		
		private $con;
		public function __construct()
		{
			$this->con = new \mysqli(HOST, USER, PASS, DB);
		}


		public function consultaSimple($sql)
		{
			$this->con->query($sql);
		}

		public function consultaRetorno($sql)
		{
			$datos = $this->con->query($sql);

			return $datos;
		}

	}



?>