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
                    '{$bebida->getNome()}',
                    '{$bebida->getPrecoBD()}'";
        return $this->inserir($values);
    }

    public function alteraBebida(Bebida $bebida) {
        $values = "nome = '{$bebida->getNome()}',
                    preco = '{$bebida->getPrecoBD()}'";
        $this->alterar($bebida->getId(), $values);

    }

    public function listar($pesquisa = '')
    {
        if($pesquisa != '') {
            $sql = "SELECT * FROM {$this->tabela} 
                    WHERE nome like '%{$pesquisa}%'
                        OR preco like '%{$pesquisa}%'";
        } else {
            $sql = "SELECT * FROM {$this->tabela}";
        }
        $stmt = $this->db->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS, $this->class);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}