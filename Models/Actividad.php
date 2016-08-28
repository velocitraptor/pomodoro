<?php namespace Models;
	class Actividad
	{
		private $id;
		private $id_usuario;
		private $id_referencia;
		private $nombre;
		private $descripcion;
		private $status;

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