<?php

require_once 'Model.php';

class ReservaDAO extends Model
{
 
    public function __construct()
    {
     	parent::__construct();
     	$this->class = 'Reserva';
     	$this->tabela = 'reserva';
    }

    public function insereReserva(reserva $reserva)
    {
    	$values = "null, '{$reserva->getNome()}', '{$reserva->getTelefone()}', '{$reserva->getPessoas()}', '{$reserva->getEmail()}', '{$reserva->getHora()}' , '{$reserva->getData()}'";
    	return $this->inserir($values);
    }
    public function alteraReserva(reserva $reserva)
    {
    	$values = "
			nome = '{$reserva->getNome()}'
			, email = '{$reserva->getTelefone()}'
            , email = '{$reserva->getPessoas()}'
            , email = '{$reserva->getEmail()}'
            , email = '{$reserva->getHora()}'
            , email = '{$reserva->getData()}'
    	";

    	$this->alterar($reserva->getId(), $values);
    }

}