<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>
<?php 

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
<div class="container">
<div class="row" style="margin-top:40px">
	<div class="col-10">
		<h2>Gerenciar produtos</h2>
	</div>
	<div class="col-2">
		<a href="form_pizza.php" class="btn btn-success">Novo</a>
	</div>
</div>
<div class="row">
	<table class="table table-hover table-bordered table-striped">
		<thead>
			<tr>
				<th>#ID</th>
				<th>Sabor</th>
				<th>Preço</th>
				<th>Imagem</th>
				<th>Descriçao</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php foreach($pizzas as $pizza){
					?>
				<td><?= $pizza->getId() ?> </td>
				<td><?= $pizza->getSabor() ?> </td>
				<td>R$ <?= $pizza->getPreco() ?></td>
				<td><?= $pizza->getImagem() ?></td>
				<td><?= $pizza->getDescricao() ?></td>
				<td>
					<a href="form_pizza.php?id=<?= $pizza->getId() ?>">Editar</a> | 
					<a href="controle_pizza.php?acao=deletar&id=<?= $pizza->getId() ?>" onclick="return confirm('Deseja realmente excluir?')">Excluir</a>
				</td>
				
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
</div>

<?php include './layout/footer.php'; ?>