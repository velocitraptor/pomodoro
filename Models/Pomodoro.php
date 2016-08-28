<?php namespace Models;
	
	class Pomodoro
	{
		private $id;
		private $id_usuario;
		private $desde;
		private $hasta;
		private $con;

		public function __construct()
		{
			$this->con = new Conexion();
		}
		
		public function add()
		{

		}

		public function edit($id)
		{

		}

		public function delete($id)
		{

		}

		public function list()
		{

		}		
	}
?>