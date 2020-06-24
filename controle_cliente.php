<?php 
session_start();
require 'administrativo/classes/Cliente.php';
require 'administrativo/classes/ClienteDAO.php';

$cliente = new Cliente();
$clienteDAO = new ClienteDAO();

$acao = $_GET['acao'];
$id = '';
if(isset($_GET['id']) && $_GET['id'] != '') {
	$id = $_GET['id'];
}



if($acao == 'deletar') {

	$clienteDAO->deletar($id);
	$msg = 'Cliente excluído com sucesso';

	header("Location: clientes.php?msg=$msg");
} else if($acao == 'cadastrar') {

	$cliente->setNome($_POST['nome']);
	$cliente->setCpf($_POST['cpf']);
	$cliente->setDtNascimento($_POST['dt_nascimento']);
	$cliente->setSexo($_POST['sexo']);
	$cliente->setCelular($_POST['celular']);
	$cliente->setEmail($_POST['email']);
	$cliente->setSenha($_POST['senha']);
	$cliente->setCep($_POST['cep']);
	$cliente->setEndereco($_POST['endereco']);

	$id_cliente = $clienteDAO->insereCliente($cliente);
	$msg = 'Cliente cadastrado com sucesso';

	header("Location: logar.php?id=$id_cliente&msg=$msg");

} else if($acao == 'editar') {

	if($_POST['senha'] != ''){
		$cliente->setSenha($_POST['senha']);
	}
	$id_cliente = $_POST['id'];

	$cliente->setId($_POST['id']);
	$cliente->setNome($_POST['nome']);
	$cliente->setCpf($_POST['cpf']);
	$cliente->setDtNascimento($_POST['dt_nascimento']);
	$cliente->setSexo($_POST['sexo']);
	$cliente->setCelular($_POST['celular']);
	$cliente->setEmail($_POST['email']);
	$cliente->setCep($_POST['cep']);
	$cliente->setEndereco($_POST['endereco']);
	$clienteDAO->alteraCliente($cliente);
	$msg = 'Cliente alterado com sucesso';
	
	header("Location: form_cliente.php?id=$id_cliente&msg=$msg");

}



