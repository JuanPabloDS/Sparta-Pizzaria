<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>
<?php

require 'classes/Pizza.php';
require 'classes/PizzaDAO.php';
require 'classes/Bebida.php';
require 'classes/BebidaDAO.php';

$pizzaDAO = new PizzaDAO();
$pizzas = $pizzaDAO->listar();

$bebidaDAO = new BebidaDAO();
$bebidas = $bebidaDAO->listar();


?>
<?php 
	if(isset($_GET['msg']) && $_GET['msg'] != '') {
	 echo '<div class="alert alert-info">'.$_GET['msg'].'</div>';
	}
?>


	<div class="pedido">
		<div class="medidas">
			<div class="">
				<div class="container promocao3">
					<h4 align="center"><b>FAÇA SEU PEDIDO</b></h4>
				</div>
			</div>
		</div>
		<div class="medidas2">
			<div class="">
				<div class=" promocao4">
					<div class="segundo">
						<div include="div-select">
							<form action='processa.php' method='POST'>
							<select id="pizzasp" name="pizzasp" class="select-css">
							    <option>Escolha sua primeira metade</option>
							    <?php foreach($pizzas as $pizza){ ?>
							    <option><?= $pizza->getSabor() ?></option>
							    <?php } ?>
							    
							</select>
							</form>
							</div>
					</div>
					<div class="segundo">
						<div include="div-select" class="select-css1">
							<select class="select-css ">
							    <option>Escolha sua primeira metade</option>
							    <?php foreach($pizzas as $pizza){ ?>
							    <option><?= $pizza->getSabor() ?></option>
							    <?php } ?>
							</select>
							</div>
					</div>
				</div>
			</div>
		</div>
		<div class="metade">
			<div class="sabor">
				<img src="assets\img\pizzas\calabresa2.png">

			</div>
			<div class="sabor2">
				<img src="assets\img\pizzas\calabresa1.png">
			</div>

			<div class="detalhes-pizza">
				<div class="molde">
					<h5 class="pizzatexto"><?php echo "$cliente" ?></h5>
				</div>
				<div class="molde2">
					<h5 class="pizzatexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus justo ligula, aliquam quis commodo et,ipsum Vivamus justo ligula, aliquam quis commodo et,ipsum  </h5>
				</div>
			</div>
		</div>
		<div class="preco">
			<div class="preco-conta">
				<div class="total-conta">
					<h4 align="center"><b>R$ 99,99</b></h4>
				</div>
			</div>
		</div>
		<div class="bebida">
			<div class="container bebidas">
				<div class="total">
					<div class="promocao7 container">
						<h4 align="center"><b>BEBIDAS</b></h4>
					</div>
				</div>
				<div class=" promocao8">
					<div class="terceiro">
						<div include="div-select">
							<select class="select-css2">
							    <option>Escolha sua bebida</option>
							    <?php foreach($bebidas as $bebida){ ?>
							    <option><?= $bebida->getNome() ?></option>
							    <?php } ?>
							</select>
						</div>
					</div>
				</div>
				<div class="promocao9">
					<div class="compra">
						<button type="button" class="btn btn-success comprar"><i class="fas fa-shopping-cart"></i></button>
					</div>
					<div class="preco3">
						<h4 align="center"><b>R$ 99,99</b></h4>
					</div>
				</div>
				<div class="rolagem"> 
				    <table class="tabela rolagem2">
				        <thead>
				            <tr>
				                <th class="tabela5"></th>
				                <th class="tabela6"></th>
				                <th class="tabela7"></th>
				                <th class="tabela8"></th>
				            </tr>
				        </thead>
				        <tbody>
				        	<?php foreach($bebidas as $bebida){ ?>
				        	<tr>
				                <td>1</td>
				                <td><?= $bebida->getNome() ?></td>
				                <td><?= $bebida->getPreco() ?></td>	
				                <td>
				                	<button type="button" class="btn btn-danger comprar"><i class="fas fa-trash-alt"></i></button>
				                </td>
				            </tr>
				            <?php } ?>
				        </tbody>
				    </table>
				</div>

			</div>
		</div>
		<div class="total7">
			<div class="container total-pagar">
				<h1>TOTAL</h1>
			</div>
			<div class="preco-conta">
				<div class="total-conta container">
					<h4 align="center"><b>R$ 99,99</b></h4>
				</div>
			</div>
			<div class="preco-conta2">
				
					<div class="compra-conta container">
						<a href="carrinho.php">
						<button type="button" class="btn btn-success comprar-conta"><p>CARRINHO<p></i></button>
						</a>
					</div>
			</div>

		</div>
	</div>	




<?php include './layout/footer.php'; ?>