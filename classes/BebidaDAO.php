<?php
require_once 'Model.php';
class BebidaDAO extends Model
{
    public function __construct()
    {
    	parent::__construct();
        $this->tabela = 'bebida';
        $this->class  = 'Bebida';
    }

    public function insereBebida(Bebida $bebida)
    {
    	$values = "null, 
    				'{$pizza->getNome()}',
    				'{$pizza->getPrecoBD()}'";

    	return $this->inserir($values);
    }

     public function alteraBebida(Bebida $bebida) {
    	$values = "nome = '{$bebida->getnome()}',
    				preco = '{$bebida->getPrecoBD()}'";

    	$this->alterar($pizza->getId(), $values);
    }
    public function listar()
    {
    	$sql = "SELECT * FROM {$this->tabela}";
    	$stmt = $this->db->prepare($sql);
    	$stmt->setFetchMode(PDO::FETCH_CLASS, $this->class);
    	$stmt->execute();
    	return $stmt->fetchAll();
    }
}