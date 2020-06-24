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
<?php 
	if(isset($_GET['msg']) && $_GET['msg'] != '') {
	 echo '<div class="alert alert-info">'.$_GET['msg'].'</div>';
	}
?>
<div class="row" style="margin-top:40px">
	<div class="col-6 offset-3">
		<h2>Cadastrar Pizza</h2>
	</div>
</div>

<form action="controle_pizza.php?acao=<?= ( $pizza->getId() != '' ? 'editar' : 'cadastrar' )?>" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-3 text-center">
			<img src="../<?= $pizza->getImagem() ?>" alt="" width="150" class="rounded-circle img-thumbnail" id="fotopreview">
			<br>
			<br>
			<div class="custom-file">
			  <input type="file" class="custom-file-input" name="imagem" id="imagem">
			  <label class="custom-file-label" for="imagem">Escolher...</label>
			</div>
			<!-- <div class="form-group">
				<input type="file" name="imagem" id="imagem" class="form-control-file">
			</div> -->
		</div>
		<div class="col-6">
			<p>&nbsp;</p>

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
						<input type="text" name="preco" id="preco" value="<?= ($pizza->getPreco() != '' ? $pizza->getPreco() : '0,00' ) ?>" class="form-control moeda">
				</div>
				<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="descricao">Descrição da Pizza:</label>
						<textarea name="descricao" id="descricao" class="form-control" rows="5"><?= ($pizza->getDescricao() != '' ? $pizza->getDescricao() : '') ?></textarea>
					</div>
				</div>
			</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>
		</div>
	</div>
</form>

<?php include './layout/footer.php'; ?>

<script type="text/javascript">
var uploadfoto = document.getElementById('imagem');
var fotopreview = document.getElementById('fotopreview');

uploadfoto.addEventListener('change', function(e) {
	fotopreview.src = '/assets/img/loading.gif';
    showThumbnail(this.files);
});

function showThumbnail(files) {
    if (files && files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
       fotopreview.src = e.target.result;
    }

        reader.readAsDataURL(files[0]);
    }
}
</script>