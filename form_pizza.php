<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>
<?php 

	require 'classes/Pizza.php'; 
	require 'classes/PizzaDAO.php';
	$pizza = new Pizza();
	if(isset($_GET['id']) && $_GET['id'] != '') {
		$id = $_GET['id'];
		$pizzaDAO = new PizzaDAO();
		$pizza = $pizzaDAO->get($id);
	}

?>
<div class="row" style="margin-top:40px">
	<div class="col-6 offset-3">
		<h2>Cadastrar pizza</h2>
	</div>
</div>
<div class="row">
	<div class="col-6 offset-3">
		<p>&nbsp;</p>
		<form action="controle_pizza.php?acao=<?= ( $pizza->getId() != '' ? 'editar' : 'cadastrar' )?>" method="post">
			<div class="form-group">
				<label for="id">ID</label>
				<input type="text" class="form-control" name="id" id="id" value="<?=($pizza->getId() != '' ? $pizza->getId() : '')?>" readonly>
			</div>
			<div class="form-group">
				<label for="sabor">Sabor</label>
				<input type="text" class="form-control" name="sabor" id="sabor" required value="<?= ($pizza->getSabor() != '' ? $pizza->getSabor() : '') ?>">
			</div>
			<div class="form-group">
				<label for="preco">Preço</label>
				<input type="text" name="preco" id="preco" required value="<?= ($pizza->getPreco() != '' ? $pizza->getPreco() : '0,00' ) ?>" class="form-control moeda">
			</div>
			<div class="form-group">
				<label for="imagem">Imagem</label>
				<input type="text" class="form-control" name="imagem" id="imagem" required value="<?=($pizza->getImagem() != '' ? $pizza->getImagem() : '')?>">
			</div>
			<div class="form-group">
				<label for="descricao">Descricao</label>
				<input type="text" class="form-control" name="descricao" id="descricao" required value="<?=($pizza->getDescricao() != '' ? $pizza->getDescricao() : '')?>">
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Salvar</button>
			</div>
		</form>
	</div>
</div>

<?php include './layout/footer.php'; ?>