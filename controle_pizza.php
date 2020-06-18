<?php 
require 'classes/Pizza.php';
require 'classes/PizzaDAO.php';

$pizza = new Pizza();
$pizzaDAO = new PizzaDAO();

$acao = $_GET['acao'];
$id = '';
if(isset($_GET['id']) && $_GET['id'] != '') {
	$id = $_GET['id'];
}

if($acao == 'deletar') {

	$pizzaDAO->deletar($id);
	$msg = 'Produto excluído com sucesso';

} else if($acao == 'cadastrar') {

	$pizza->setSabor($_POST['sabor']);
	$pizza->setPreco($_POST['preco']);
	$pizza->setImagem($_POST['imagem']);
	$pizza->setDescricao($_POST['descricao']);
	$pizzaDAO->inserePizza($pizza);
	$msg = 'Produto cadastrado com sucesso';

} else if($acao == 'editar') {

	$pizza->setId($_POST['id']);
	$pizza->setSabor($_POST['sabor']);
	$pizza->setPreco($_POST['preco']);
	$pizza->setImagem($_POST['imagem']);
	$pizza->setDescricao($_POST['descricao']);

	$produtoDAO->alteraProduto($produto);
	$msg = 'Produto alterado com sucesso';
	
}


header("Location: pizza.php?msg=$msg");