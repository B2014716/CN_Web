<?php

class DModel
{

	protected $db = array();

	public function __construct()
	{
		$connect = 'mysql:dbname=webbanquanao_pdo; host=localhost; charset=utf8';
		$user = 'root';
		$pass = 'Tub2014716';
		$this->db = new Database($connect, $user, $pass);
	}
}
