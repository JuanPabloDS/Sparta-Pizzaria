<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>

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
			<div class="menuCor">
				<div>
				<table class="menu2">
				  <thead>
				    <tr>
				      <th class="menu3" scope="col">
				      	<a href="cardapio.php">
				      	<div class="borda2">
				      	<font color="black">
				      		<img class=" imagem " src="assets\img\cardapio.jpg">
				      		<br><br>CARDÁPIO</font> 
				      	</div>
				      	</a> 
				      </th>
				      <th class="menu3" scope="col">
				      	<a href="cardapio.php">
					      	<div class="borda2">
					      		<font color="black">
					      			<img class=" imagem " src="assets\img\rodizio.jpg">
					      			<br><br>RODIZIO 
					      		</font> 
					      	</div>
				      	</a>
				      </th> 
				      </th>
				      <th class="menu3" scope="col">
				      	<a href="cardapio.php">
				      		<div class="borda2">
					      		<font color="black">
					      			<img class=" imagem " src="assets\img\delivery.jpg"><br><br>DELIVERY
					      		</font> 
				      		</div>
				      	</a>
				      </th>
				      <th class="menu3" scope="col">
				      	<a href="cardapio.php">
				      		<div class="borda2">
					      		<font color="black">
					      			<img class=" imagem " src="assets\img\novidades.jpg"><br><br>NOVIDADES
					      		</font> 
				      		</div>
				      	</a>
				      </th>
				    </tr>
				  </thead>
				</table>
			</div>
			<br><br>
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
			<br><br>
				<div class="medidas">
					<div class="">
						<div class="container promocao10">
							<h4 align="center"><b>PROMOÇOES</b></h4>
						</div>
					</div>
				</div>
			<div class="meio-index">
				<div class="meio-index2">
					<?php
					for ($x = 0; $x <= 8; $x++) {
  					echo '<div class=" pizza ">
						<form class="forma-pizza">
						    <img class="imagem2" src="assets\img\basca.png">
						      	<h3 class="pizzatexto">BASCA</h3>
						      	<h5 class="pizzatexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus justo ligula, aliquam quis commodo et,ipsum</h5>
						</form>
					</div>';
					}?>
					


			</div>
		




<?php include './layout/footer.php'; ?>