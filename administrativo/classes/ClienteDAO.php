<?php
require_once 'Model.php';

class ClienteDAO extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->class = 'Cliente';
        $this->tabela = 'clientes';
    }
    public function insereCliente(Cliente $cliente)
    {
    	$values = "null,
				   '{$cliente->getNome()}',
				   '{$cliente->getCpf()}',
				   '{$cliente->getDtNascimentoBD()}',
				   '{$cliente->getSexo()}',
				   '{$cliente->getEmail()}',
				   '{$cliente->getSenha()}',
				   '{$cliente->getCelular()}',
				   '{$cliente->getCep()}',
				   '{$cliente->getEndereco()}'
    				";
    	return $this->inserir($values);
    }
    public function alteraCliente(Cliente $cliente)
    {
    	$altera_senha = ($cliente->getSenha() != '' ? ", senha = '{$cliente->getSenha()}'" : '');
    	$values = "nome = '{$cliente->getNome()}',
				   cpf = '{$cliente->getCpf()}',
				   dt_nascimento = '{$cliente->getDtNascimentoBD()}',
				   sexo = '{$cliente->getSexo()}',
				   email = '{$cliente->getEmail()}',
				   celular = '{$cliente->getCelular()}',
				   cep = '{$cliente->getCep()}',
				   logradouro = '{$cliente->getEndereco()}'
    				";
    	$this->alterar($cliente->getId(), $values);
    }

    public function listar($pesquisa = '')
    {
    	if($pesquisa != '') {
    		$sql = "SELECT * FROM {$this->tabela}
    				WHERE nome LIKE '%{$pesquisa}%'
    					OR email LIKE '%{$pesquisa}%'
    					OR cpf LIKE '%{$pesquisa}%'";
    	} else {
    		$sql = "SELECT * FROM {$this->tabela}";
    	}
    	$stmt = $this->db->prepare($sql);
    	$stmt->setFetchMode(PDO::FETCH_CLASS, $this->class);
    	$stmt->execute();
    	return $stmt->fetchAll();
    }

    public function getLogin($email, $senha)
    {
        $sql = "SELECT * FROM {$this->tabela} 
                WHERE email = :email AND senha = :senha";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->setFetchMode(PDO::FETCH_CLASS, $this->class);
        $stmt->execute();
        return $stmt->fetch();
    }
}