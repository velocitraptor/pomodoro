<?php namespace Models; 
	class RegistroActividad
	{
		private $id;
		private $id_usuario;
		private $id_pomodoro;
		private $id_actividad;
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