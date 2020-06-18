<?php
require_once 'Model.php';
class PizzaDAO extends Model
{
    public function __construct()
    {
    	parent::__construct();
        $this->tabela = 'pizza';
        $this->class  = 'Pizza';
    }

    public function inserePizza(Pizza $pizza)
    {
    	$values = "null, 
    				'{$pizza->getSabor()}',
    				'{$pizza->getPrecoBD()}',
    				'{$pizza->getImagem()}',
    				'{$pizza->getDescricao()}'";
    	return $this->inserir($values);
    }

     public function alteraPizza(Pizza $pizza) {
    	$values = "sabor = '{$pizza->getSabor()}',
    				preco = '{$pizza->getPrecoBD()}',
    				descricao = '{$pizza->getDescricao()}'";
    	$this->alterar($pizza->getId(), $values);
    }
    public function listarDemonstrativo()
    {
    	$sql = "SELECT * FROM {$this->tabela} limit 12";
    	$stmt = $this->db->prepare($sql);
    	$stmt->setFetchMode(PDO::FETCH_CLASS, $this->class);
    	$stmt->execute();
    	return $stmt->fetchAll();
    }

    public function listarSalgada()
    {
        $sql = "SELECT * FROM {$this->tabela} where categoria=1";
        $stmt = $this->db->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, $this->class);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function listarDoce()
    {
        $sql = "SELECT * FROM {$this->tabela} where categoria=0 ";
        $stmt = $this->db->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, $this->class);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}