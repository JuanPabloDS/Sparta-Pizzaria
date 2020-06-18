<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>
<?php 

require 'classes/Pizza.php';
require 'classes/PizzaDAO.php';

$pizzaDAO = new PizzaDAO();
$pizzas = $pizzaDAO->listarDemonstrativo();

?>
<?php 
	if(isset($_GET['msg']) && $_GET['msg'] != '') {
	 echo '<div class="alert alert-info">'.$_GET['msg'].'</div>';
	}
?>
	<img src="assets\img\delivery-entrega.png" class="img-fluid slide2 " >
	<div>
		<blockquote class="blockquote text-center">
  			<p class="mb-0">Contamos com entregadores de bastante eficácia e que entrega no prazo determinado sem enrolação para que seu pedido sempre chegue bem quentinho para você.</p>
  			<p class="mb-0">Caso ocorra do seu pedido não chega na hora informada, você o recebera sem pagar nada!</p>
  			<footer class="blockquote-footer">O mais rápido e eficiente delivery do mercado só na <cite title="Título da fonte">Pizarria Sparta</cite></footer>
		</blockquote>
		<div class="container" style="height: 230px;">
			<a href="pedido.php">
				<div align="center">
					<img class=" imagem " src="assets\img\delivery2.jpg"><br>	<div class="medidas">
		<div class="">
			<div class="container promocao10">
				<h4 align="center"><b>PEÇA AGORA</b></h4>
			</div>
		</div>
	</div>
				</div>
			</a>
		</div>
	</div>






<?php include './layout/footer.php'; ?>