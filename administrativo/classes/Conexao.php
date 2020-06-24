<?php

class Conexao
{
	private $host;
	private $user;
	private $password;
	private $conn;

	public function __construct() {
		$this->host = 'mysql:host=localhost;dbname=pizzaria_sparta';
		$this->user = 'root';
		$this->password = 'JuanPablo';
	}

    public function conectar() {
    	try {
			$conn = new PDO(
							$this->host,
							$this->user, 
							$this->password
						);

			return $conn;
			
		} catch (PDOException $e) {
			echo 'Erro na conexao. Erro reportado: ' . $e->getMessage();
			exit;
		}
    }
}