<?php namespace Models;
	class Usuario
	{
		private $id;
		private $user_name;
		private $password;
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