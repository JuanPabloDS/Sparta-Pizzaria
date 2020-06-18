<?php

class Pizza
{
	private $id;
	private $sabor;
	private $preco;
	private $imagem;
	private $descricao;
    private $categoria;

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
    public function getSabor()
    {
        return $this->sabor;
    }

    /**
     * @param mixed $sabor
     *
     * @return self
     */
    public function setSabor($sabor)
    {
        $this->sabor = $sabor;

        return $this;
    }
     /**
     * @return mixed
     */
    public function getPreco()
    {
        return number_format($this->preco, 2, ',','.');
    }
    public function getPrecoBD()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     *
     * @return self
     */
    public function setPreco($preco)
    {	
    	$preco = str_replace('.', '', $preco);
        $preco = str_replace(',', '.', $preco);
        $this->preco = $preco;


        return $this;
    }
    /**
     * @return mixed
     */
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * @param mixed $imagem
     *
     * @return self
     */
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;

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
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     *
     * @return self
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }
    
}