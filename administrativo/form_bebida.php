<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>
<?php 
	require 'classes/Bebida.php'; 
	require 'classes/BebidaDAO.php';
	$bebida = new Bebida();
	if(isset($_GET['id']) && $_GET['id'] != '') {
		$id = $_GET['id'];
		$bebidaDAO = new BebidaDAO();
		$bebida = $bebidaDAO->get($id);
	}

?>

<div class="row" style="margin-top:40px">
	<div class="col-6 offset-3">
		<h2>Cadastrar bebida</h2>
	</div>
</div>

<div class="row">
	<div class="col-6 offset-3">
		<p>&nbsp;</p>
		<form action="controle_bebida.php?acao=<?= ( $bebida->getId() != '' ? 'editar' : 'cadastrar' )?>" method="post">
			<div class="form-group">
				<label for="id">ID</label>
				<input type="text" class="form-control" name="id" id="id" value="<?=($bebida->getId() != '' ? $bebida->getId() : '')?>" readonly>
			</div>
			<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" name="nome" id="nome" required value="<?= ($bebida->getNome() != '' ? $bebida->getNome() : '') ?>">
			</div>	
			<div class="form-group">
				<label for="preco">Preço</label>
				<input type="text" name="preco" id="preco" value="<?= ($bebida->getPreco() != '' ? $bebida->getPreco() : '0,00' ) ?>" class="form-control moeda">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<button type="reset" class="btn btn-warning">Resetar</button>
			</div>
		</form>
	</div>
</div>

<?php include './layout/footer.php'; ?>