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

			<div class="slide">
				<div id="carouselExampleControls" class="carousel slide absoluto" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="slide2" src="assets\img\slide1.jpg">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 slide" src="assets\img\slide3.jpg" alt="Segundo Slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 slide2" src="assets\img\slide2.jpg" alt="Terceiro Slide">
					    </div>
					  </div>
					   <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Anterior</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Proximo</span>
						  </a>
					  <div class="linha">
					</div>
				</div>
			</div>
				<div class="menu-index">
					<div class="menu-separa">
						<a href="cardapio.php">
						<button class="button button1">
							<i class="fas fa-book-open"></i>
							<p style="font-size: 20px">CARDÁPIO </p>
						</button>
						</a>
					</div>
					<div class="menu-separa">
						<a href="rodizio.php">
						<button class="button button2">
							<i class='fas fa-pizza-slice'></i>
							<p style="font-size: 20px">RODIZIO</p>
						</button>
						</a>
					</div>
					<div class="menu-separa">
						<a href="delivery.php">
						<button class="button button3">
							<i class="fas fa-truck"></i>
							<p style="font-size: 20px">DELIVERY</p>
						</button>
						</a>
					</div>
					<div class="menu-separa">
						<a href="reserva.php">
						<button class="button button5">
							<i class="far fa-calendar-alt"></i>
							<p style="font-size: 20px">RESERVA</p>
						</button>
						</a>
					</div>
				
			<div class="menuCor">
			</div>
			<div class="texto-in">
			<div class="promocao ">
				<table class="table table-bordered">
				  <thead>
				    <tr scope="col">
				       
				      <h4 class="texto">
				      Os melhores e mais diversificados sabores de Pizza são a especialidade da casa, contamos com a maior variedade premium de Pizzas constante do nosso cardápio.
					</h4>
					<h4 class="texto" align="carousel-control-next">
					Venha se deliciar e explorar os nossos sabores exclusivos.
					</h4>
					<br><br>
					<br><br>
				    </tr>
				  </thead>
				</table>
			</div>
			</div>
			<br><br>
				<div class="medidas">
					<div class="">
						<div class="container promocao10">
							<h4 align="center"><b>ALGUMAS OPÇÕES</b></h4>
						</div>
					</div>
				</div>
			<div class="meio-index">
				<div class="meio-index2">

					<?php foreach($pizzas as $pizza){ ?>
  					<div class=" pizza ">
  						<a href="pedido.php" style="text-decoration:none;">
						<form class="forma-pizza">
						    <img class="imagem2" src="<?= $pizza->getImagem() ?>">
						      	<h3 class="pizzatexto"><?= $pizza->getSabor() ?></h3>
						      	<h5 class="pizzatexto"><?= $pizza->getDescricao() ?></h5>
						</form>
						</a>
					</div>
					<?php } ?>
					


			</div>
		




<?php include './layout/footer.php'; ?>