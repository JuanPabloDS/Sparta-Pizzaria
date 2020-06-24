<?php 
require 'classes/Pizza.php';
require 'classes/Imagem.php';
require 'classes/PizzaDAO.php';
require 'classes/ImagemDAO.php';

$pizza = new Pizza();
$pizzaDAO = new PizzaDAO();

$acao = $_GET['acao'];
$id = '';
if(isset($_GET['id']) && $_GET['id'] != '') {
	$id = $_GET['id'];
}

if($acao == 'deletar') {

	$pizzaDAO->deletar($id);
	$msg = 'Pizza excluído com sucesso';
	header("Location: pizza.php?msg=$msg");

} else if($acao == 'cadastrar') {

	$pizza->setSabor($_POST['sabor']);
	$pizza->setPreco($_POST['preco']);
	$pizza->setImagem($_POST['imagem']);
	$pizza->setDescricao($_POST['descricao']);

	$id = $pizzaDAO->inserePizza($pizza);
	$msg = 'Pizza cadastrado com sucesso';
	header("Location: form_pizza.php?id=$id&msg=$msg");

} else if($acao == 'editar') {
	$id = $_POST['id'];

	$pizza->setId($_POST['id']);
	$pizza->setSabor($_POST['sabor']);
	$pizza->setPreco($_POST['preco']);
	$pizza->setImagem($_POST['imagem']);
	$pizza->setDescricao($_POST['descricao']);
	/*print_r($pizza); exit;*/

	$pizzaDAO->alteraPizza($pizza);
	$msg = 'Pizza alterado com sucesso';

	header("Location: form_pizza.php?id=$id&msg=$msg");
	
} else if($acao == 'cadastraImagens') {

	$pizza_id = $_POST['pizza_id'];
	/**
	Configurações de upload de imagens
	*/
	$upload['pasta_imagens'] = 'assets/img/produtos/';
	$pasta = $upload['pasta_imagens'] . $pizza_id . '/';

	if(!is_dir($pasta)) {
		mkdir($upload['pasta_imagens'] . $pizza_id . '/', 0775, true);
	}

	$upload['extensoes'] = ['jpg', 'png', 'gif'];

	$upload['erros'][0] = 'Não houve erro';
	$upload['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
	$upload['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
	$upload['erros'][3] = 'O upload do arquivo foi feito parcialmente';
	$upload['erros'][4] = 'Não foi feito o upload do arquivo';


	$imagem = new Imagem();
	$imagemDAO = new ImagemDAO();

	$imagem->setPizzaId($pizza_id);

	$qtd_imagens = count($_FILES['imagens']['name']);

	for($i = 0; $i < $qtd_imagens; $i++)
	{

		$descricao = explode('.', $_FILES['imagens']['name'][$i]);

		$extensao = strtolower(end($descricao));
		if(array_search($extensao, $upload['extensoes']) === false) {
		  $msg = "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
		  header("Location: form_pizza.php?id=$pizza_id&msg=$msg");
		  exit;
		}
		$nome_final = $descricao[0] . '-' . date('YmdHmi') . '.' . $extensao;
		$imagem->setDescricao($descricao[0]);
		
		// Depois verifica se é possível mover o arquivo para a pasta escolhida
		if (move_uploaded_file($_FILES['imagens']['tmp_name'][$i], $pasta . $nome_final)) {
			$caminho = $pasta . $nome_final;

			$imagem->setCaminho($caminho);
			$imagemDAO->insereImagem($imagem);

		} else {
		  // Não foi possível fazer o upload, provavelmente a pasta está incorreta
		  $msg = "Não foi possível enviar o(s) arquivo, tente novamente";
		  header("Location: form_pizza.php?id=$pizza_id&msg=$msg");
		  exit;
		}

	}
	$msg = "Imagens cadastradas com sucesso.";
	header("Location: SpartaPizzaria/administrativo/form_pizza.php?id=$pizza_id&msg=$msg");

}
