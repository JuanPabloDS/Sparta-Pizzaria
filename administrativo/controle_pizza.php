<?php 
session_start();
require 'classes/Pizza.php';
require 'classes/PizzaDAO.php';

$pizza = new Pizza();
$pizzaDAO = new PizzaDAO();

$acao = $_GET['acao'];
$id = '';
if(isset($_GET['id']) && $_GET['id'] != '') {
	$id = $_GET['id'];
}

/**
Configurações de upload de imagens
*/
$upload['pizzas'] = '../assets/img/pizzas/';
$upload['extensoes'] = ['jpg', 'png', 'gif'];

$upload['erros'][0] = 'Não houve erro';
$upload['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$upload['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$upload['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$upload['erros'][4] = 'Não foi feito o upload do arquivo';



if($acao == 'deletar') {

	$pizzaDAO->deletar($id);
	$msg = 'Pizza excluída com sucesso';

	header("Location: pizza.php?msg=$msg");
} else if($acao == 'cadastrar') {

	if($_FILES['imagem']['name'] != '') {

		if ($_FILES['imagem']['error'] != 0) {
		  $msg = "Não foi possível fazer o upload, erro:" . $upload['erros'][$_FILES['imagem']['error']];
		  header("Location: form_pizza.php?msg=$msg");
		  exit;
		}

		$imagem = explode('.', $_FILES['imagem']['name']);
		$extensao = strtolower(end($imagem));
		if(array_search($extensao, $upload['extensoes']) === false) {
		  $msg = "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
		  header("Location: form_pizza.php?msg=$msg");
		  exit;
		}
		$nome_final = $imagem[0] . '-' . date('YmdHmi') . '.' . $extensao;
		// Depois verifica se é possível mover o arquivo para a pasta escolhida
		if (move_uploaded_file($_FILES['imagem']['tmp_name'], $upload['pizzas'] . $nome_final)) {
			$pizza->setImagem($nome_final);
		} else {
		  // Não foi possível fazer o upload, provavelmente a pasta está incorreta
		  $msg = "Não foi possível enviar o arquivo, tente novamente";
		  header("Location: form_pizza.php?msg=$msg");
		  exit;
		}
	}

	$pizza->setSabor($_POST['sabor']);
	$pizza->setPreco($_POST['preco']);
	$pizza->setDescricao($_POST['descricao']);
	$id_pizza = $pizzaDAO->inserePizza($usuario);
	$msg = 'Pizza cadastrada com sucesso';

	header("Location: form_usuario.php?id=$id_usuario&msg=$msg");

} else if($acao == 'editar') {

	if($_FILES['imagem']['name'] != '') {

		if ($_FILES['imagem']['error'] != 0) {
		  $msg = "Não foi possível fazer o upload, erro:" . $upload['erros'][$_FILES['imagem']['error']];
		  header("Location: form_pizza.php?id=$id_usuario&msg=$msg");
		  exit;
		}

		$imagem = explode('.', $_FILES['imagem']['name']);
		$extensao = strtolower(end($imagem));
		if(array_search($extensao, $upload['extensoes']) === false) {
		  $msg = "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
		  header("Location: form_pizza.php?id=$id_pizza&msg=$msg");
		  exit;
		}
		$nome_final = $imagem[0] . '-' . date('YmdHmi') . '.' . $extensao;

		

		// Depois verifica se é possível mover o arquivo para a pasta escolhida
		if (move_uploaded_file($_FILES['imagem']['tmp_name'], $upload['pizzas'] . $nome_final)) {

			//incluindo a imagem nova no registro do usuário
			$pizza->setImagem($nome_final);

			//alimentando um usuário temporário
			$pizzaTemp = $pizzaDAO->get($id_pizza);
			//montando link da imagem atual do usuario, representado pelo usuario temporario
			$imagem_a_remover = $upload['pizzas'] . $pizzaTemp->getImagem();
			//removendo a imagem antiga
			if( file_exists($imagem_a_remover) ) {
				unlink($imagem_a_remover);
			}

			if($id_pizza == $_SESSION['id_pizza']) {
				$_SESSION['imagem'] = $pizza->getImagem();
			}
		} else {
		  // Não foi possível fazer o upload, provavelmente a pasta está incorreta
		  $msg = "Não foi possível enviar o arquivo, tente novamente";
		  header("Location: form_pizza.php?id=$id_pizza&msg=$msg");
		  exit;
		}
	}

	$pizza->setId($_POST['id']);
	$pizza->setSabor($_POST['sabor']);
	$pizza->setPreco($_POST['preco']);
	$pizza->setDescricao($_POST['descricao']);
	$pizzaDAO->alteraPizza($pizza);
	$msg = 'Pizza alterada com sucesso';
	
	header("Location: form_pizza.php?id=$id_usuario&msg=$msg");

} else if($acao == 'removeImagem') {
	$pizza = $pizzaDAO->get($id);

	$imagem_a_remover = $upload['pizzas'] . $pizza->getImagem();
	//removendo a imagem antiga
	if( file_exists($imagem_a_remover) ) {
		unlink($imagem_a_remover);
	}
	$pizza->setImagem('--');
	$pizzaDAO->alteraPizza($pizza);

	$msg = 'Imagem removida com sucesso';
	
	header("Location: pizzas.php?msg=$msg");

}