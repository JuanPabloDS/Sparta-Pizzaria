<?php
require_once 'Model.php';

class ImagemDAO extends Model
{
    
    public function __construct()
    {
        parent::__construct();
        $this->tabela = 'imagens';
        $this->class = 'Imagem';
    }

    public function insereImagem(Imagem $imagem) {
    	$values = "null, 
    				'{$imagem->getDescricao()}',
    				'{$imagem->getCaminho()}',
    				'{$imagem->getPizzaId()}'";
    	return $this->inserir($values);
    }

    public function alteraImagem(Imagem $imagem) {
    	$values = "descricao = '{$pizza->getDescricao()}',
    				caminho = '{$pizza->getCaminho()}',
    				pizza_id = '{$pizza->getPizzaId()}'";
    	$this->alterar($imagem->getId(), $values);
    }

    public function listarPorPizza($pizza_id)
    {
        $sql = "SELECT * FROM {$this->tabela} WHERE pizza_id = {$pizza_id}";
        $stmt = $this->db->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, $this->class);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}