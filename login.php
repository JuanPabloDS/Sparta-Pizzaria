<?php
session_start();
require 'administrativo/classes/Cliente.php';
require 'administrativo/classes/ClienteDAO.php';
$clienteDAO = new ClienteDAO();

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$cliente = $clienteDAO->getLogin($email, $senha);

if(empty($cliente)) {
	$msg = 'Usuário não encontrado';
	header("Location: logar.php?msg=$msg");
} else {
	$_SESSION['nome'] = $cliente->getNome();
	$_SESSION['email'] = $cliente->getEmail();
	$_SESSION['id_cliente'] = $cliente->getId();

	$msg = 'Usuário logado com sucesso!';
	header("Location: index.php?msg=$msg");
}

	$session = $_SESSION['nome'];

	function console_log()
{
    foreach (func_get_args() as $session) {
        printf('<script>console.log(%s)</script>', json_encode($mixed));
    }
}
?>