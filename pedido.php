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
							<select class="select-css selectpicker">
							    <option>Escolha sua primeira metade</option>
							    <?php foreach($pizzas as $pizza){ ?>
							    <option><?= $pizza->getSabor() ?></option>
							    <?php } ?>
							    
							</select>
							</div>
					</div>
					<div class="segundo">
						<div include="div-select" class="select-css1">
							<select class="select-css ">
							    <option>Escolha sua primeira metade</option>
							    <option>Calabresa</option>
							    <option>Frango</option>
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
					<h5 class="pizzatexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus justo ligula, aliquam quis commodo et, Vivamus justo ligula, aliquam quis commodo et,ipsum </h5>
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
							<select class="select-css2 ">
							    <option>Escolha sua bebida</option>
							    <option>Cola-cola 500 ml</option>
							    <option>Cola-cola 1 lt</option>
							    <option>Cola-cola 2 lt</option>
							    <option>Cola-cola 3 lt</option>
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
				        	<?php
								for ($x = 0; $x <= 8; $x++) {
			  					echo '<tr>
				                <td>1</td>
				                <td>Cola-cola 1 lt</td>
				                <td>R$ 99,99</td>	
				                <td>
				                	<button type="button" class="btn btn-danger comprar"><i class="fas fa-trash-alt"></i></button>
				                </td>

				            </tr>';
								}?>               
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