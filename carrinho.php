<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>

	<div class="carrinho_background">
		<div class="carrinho_inicio">
			<div class="medidas">
				<div class="">
					<div class="container promocao3">
						<h4 align="center"><b>CARRINHO</b></h4>
					</div>
				</div>
			</div>
			<div class="carrinho_tela">
			<div class="container carrinho_tela2">
				<div class="carrinho_tela3">
				</div>
				<div class="carrinho_rolagem"> 
				    <table class="carrinho_rolagem2">
				        <thead>
				            <tr>
				                <th class="carrinho_tabela5"></th>
				                <th class="carrinho_tabela6"></th>
				                <th class="carrinho_tabela7"></th>
				                <th class="carrinho_tabela8"></th>
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
				                	<button type="button" class="btn btn-danger carrinho_comprar"><i class="fas fa-trash-alt"></i></button>
				                </td>

				            </tr>';
								}?>               
					        </tbody>
					    </table>
					</div>

				</div>
			</div>	
		</div>
		<div class="carrinho_total7">
			<div class="container total-pagar">
				<h1>TOTAL</h1>
			</div>
			<div class="carrinho_preco_conta">
				<div class="total-conta container">
					<h4 align="center"><b>R$ 99,99</b></h4>
				</div>
			</div>
			<div class="carrinho_preco-conta2">
				
					<div class="carrinho_compra-conta2 container">
						<a href="pedido.php">
						<button type="button" class="btn btn-success carrinho_comprar-conta2"><p>CONTINUAR COMPRANDO<p></i></button>
						</a>
					</div>
					<div class="carrinho_compra-conta container">
						<a href="carrinho.php">
						<button type="button" class="btn btn-success carrinho_comprar-conta"><p>COMPRAR<p></i></button>
						</a>
					</div>
			</div>

		</div>
	</div>






























<?php include './layout/footer.php'; ?>