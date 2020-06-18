<!DOCTYPE html>
<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>
<?php

require 'classes/Pizza.php';
require 'classes/PizzaDAO.php';

$pizzaDAO = new PizzaDAO();
$pizzasSalgada = $pizzaDAO->listarSalgada();
$pizzasDoce = $pizzaDAO->listarDoce();

?>
<?php 
  if(isset($_GET['msg']) && $_GET['msg'] != '') {
   echo '<div class="alert alert-info">'.$_GET['msg'].'</div>';
  }
?>

<div class="pizzas-salgadas">
<img src="assets\img\cardapio-pizzaria-sparta-salgado.png" class="img-fluid slide3 " >
<section class="service">
  <div class="container">
    <div class="price-listing position-relative p-5">
      <div class="row ">
        <?php foreach($pizzasSalgada as $pizza){ ?>
        <div class="col-lg-6">
          <div class="listing d-inline-block">
            <ul>
              <form action='cardapio_pedido.php' method='POST'>
              <li>
                <a href="pedido.php">
                <span style="font-size: 18px; color: #D51B1E;">
                  <?= $pizza->getSabor() ?>
                </span>
                </a>
                <h6>
                  <?= $pizza->getDescricao() ?>
                </h6>
                <span class="float-right"> 
                </span>
              </li>
              </form>
          </div>
        </div>
        <?php } ?>  
      </div>
    </div>
  </div>
 </section>
</div>

<div class="pizzas-doces">
<img src="assets\img\cardapio-pizzaria-sparta-doce.png" class="img-fluid slide3">	
<section class="service">
  <div class="container">
    <div class="price-listing position-relative p-5">
      <div class="row ">
        <?php foreach($pizzasDoce as $pizza){ ?>
        <div class="col-lg-6">
          <div class="listing d-inline-block">
            <ul>
              <li><span style="font-size: 18px; color: #D51B1E;">
                <?= $pizza->getSabor() ?></span><h6><?= $pizza->getDescricao() ?></h6> <span class="float-right">  </span></li>
          </div>
        </div>
        <?php } ?>
       
      </div>
    </div>
  </div>
</section>
</div>

<?php include './layout/footer.php'; ?>