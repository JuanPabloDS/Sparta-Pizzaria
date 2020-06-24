<?php
class Reserva
{
	private $id;
	private $nome;
    private $email;
    private $telefone;
    private $pessoas;
	private $hora;
	private $data;

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
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     *
     * @return self
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPessoas()
    {
        return $this->pessoas;
    }

    /**
     * @param mixed $Hora
     *
     * @return self
     */
    public function setPessoas($Pessoas)
    {
        $this->Pessoas = $Pessoas;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @param mixed $senha
     *
     * @return self
     */
    public function setHora($hora)
    {
        $this->hora = md5($hora);

        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $senha
     *
     * @return self
     */
    public function setData($data)
    {
        $this->data = md5($data);

        return $this;
    }

}