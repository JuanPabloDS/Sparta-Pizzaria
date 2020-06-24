<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>
<?php 

require 'classes/Bebida.php';
require 'classes/BebidaDAO.php';
$bebidaDAO = new BebidaDAO();
$bebidas = $bebidaDAO->listar();

?>
<?php 
	if(isset($_GET['msg']) && $_GET['msg'] != '') {
	 echo '<div class="alert alert-info">'.$_GET['msg'].'</div>';
	}
?>
<div class="row" style="margin-top:40px">
	<div class="col-10">
		<h2>Gerenciar Bebidas</h2>
	</div>
	<div class="col-2">
		<a href="form_bebida.php" class="btn btn-success">Nova</a>
	</div>
</div>
<div class="row">
	<table class="table table-hover table-bordered table-striped">
		<thead>
			<tr>
				<th>#ID</th>
				<th>Nome</th>
				<th>Preço</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($bebidas as $bebida){ ?>
			<tr>
				<td><?= $bebida->getId() ?></td>
				<td><?= $bebida->getNome() ?></td>
				<td>R$ <?= $bebida->getPreco() ?></td>
				<td>
					<a href="form_bebida.php?id=<?= $bebida->getId() ?>"class="btn btn-warning">
						<i class="fas fa-edit"></i></a>
					<a href="controle_bebida.php?acao=deletar&id=<?= $bebida->getId() ?>" onclick="return confirm('Deseja realmente excluir?')"class="btn btn-danger">
						<i class="fas fa-trash-alt"></i></a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<?php include './layout/footer.php'; ?>