<?php 
require 'classes/Bebida.php';
require 'classes/BebidaDAO.php';

$bebida = new Bebida();
$bebidaDAO = new BebidaDAO();

$acao = $_GET['acao'];
$id = '';
if(isset($_GET['id']) && $_GET['id'] != '') {
	$id = $_GET['id'];
}

if($acao == 'deletar') {

	$bebidaDAO->deletar($id);
	$msg = 'Bebida excluído com sucesso';

} else if($acao == 'cadastrar') {

	$bebida->setNome($_POST['nome']);
	$bebida->setPreco($_POST['preco']);
	$bebidaDAO->insereBebida($bebida);
	$msg = 'Bebida cadastrado com sucesso';

} else if($acao == 'editar') {

	$bebida->setId($_POST['id']);
	$bebida->setNome($_POST['nome']);

	$bebidaDAO->alteraBebida($bebida);
	$msg = 'Pizza alterado com sucesso';
	
}

 else if($acao == 'buscarBebidaPreco') {

	$bebida = $bebidaDAO->get($id);
	echo $bebida->getPreco();
	exit;
	
}



header("Location: pizza.php?msg=$msg");