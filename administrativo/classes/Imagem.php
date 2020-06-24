<?php

class Imagem{
	
	private $id;    
	private $descricao;
	private $caminho;
	private $pizza_id;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     *
     * @return self
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCaminho()
    {
        return $this->caminho;
    }

    /**
     * @param mixed $caminho
     *
     * @return self
     */
    public function setCaminho($caminho)
    {
        $this->caminho = $caminho;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPizzaId()
    {
        return $this->pizza_id;
    }

    /**
     * @param mixed $pizza_id
     *
     * @return self
     */
    public function setPizzaId($pizza_id)
    {
        $this->pizza_id = $pizza_id;

        return $this;
    }
}