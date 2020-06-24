<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>
<?php 
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
$path = $_SERVER['DOCUMENT_ROOT'];

require 'classes/Pizza.php';
require 'classes/PizzaDAO.php';
$pizzaDAO = new PizzaDAO();
$pizzas = $pizzaDAO->listar();

?>
<?php 
	if(isset($_GET['msg']) && $_GET['msg'] != '') {
	 echo '<div class="alert alert-info">'.$_GET['msg'].'</div>';
	}
?>
<div class="row" style="margin-top:40px">
	<div class="col-10">
		<h2>Gerenciar Pizzas</h2>
	</div>
	<div class="col-2">
		<a href="form_pizza.php" class="btn btn-success">Nova</a>
	</div>
</div>
<div class="row">
	<table class="table table-hover table-bordered table-striped">
		<thead>
			<tr>
				<th></th>
				<th>#ID</th>
				<th>Sabor</th>
				<th>Preço</th>
				<th>Descrição</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($pizzas as $pizza){ ?>
			<tr>
				<td class="text-center">
					<img src="../<?= $pizza->getImagem() ?>" alt="" width="50" class="rounded-circle">
				</td>
				<td><?= $pizza->getId() ?></td>
				<td><?= $pizza->getSabor() ?></td>
				<td>R$ <?= $pizza->getPreco() ?></td>
				<td data-toggle="tooltip" title="<?= ($pizza->getDescricao() != '' ? $pizza->getDescricao() : ''); ?>"><?= ($pizza->getDescricao() != '' ? substr($pizza->getDescricao(),0,15).'...' : ''); ?></td>
				<td>
					<a href="form_pizza.php?id=<?= $pizza->getId() ?>" class="btn btn-warning">
						<i class="fas fa-edit"></i>
					</a>
					<a href="controle_pizza.php?acao=deletar&id=<?= $pizza->getId() ?>" onclick="return confirm('Deseja realmente excluir?')" class="btn btn-danger">
						<i class="fas fa-trash-alt"></i>
					</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<?php include './layout/footer.php'; ?>