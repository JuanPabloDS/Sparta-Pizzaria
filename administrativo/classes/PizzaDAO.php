<?php

require_once 'Model.php';

class PizzaDAO extends Model
{
 
    public function __construct()
    {
        parent::__construct();
        $this->class = 'Pizza';
        $this->tabela = 'pizza';
    }

    public function inserePizza(Pizza $pizza)
    {
        $values = "null, '{$pizza->getSabor()}','{$pizza->getPrecoBD()}', '{$pizza->getImagem()}', '{$pizza->getDescricao()}'";
        return $this->inserir($values);
    }
    public function alteraPizza(Pizza $pizza)
    {
     
        $altera_imagem = ($pizza->getImagem() != '' ? ", imagem = '{$pizza->getImagem()}'" : '');

        $values = "
            sabor = '{$pizza->getSabor()}',
                    preco = '{$pizza->getPrecoBD()}',
                    {$altera_imagem},
                    descricao = '{$pizza->getDescricao()}',
        ";

        $this->alterar($pizza->getId(), $values);
    }
}