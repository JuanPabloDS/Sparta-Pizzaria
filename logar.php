<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>

<div class="container">
<div class="row login">
	<?php 
	if(isset($_GET['msg']) && $_GET['msg'] != '') {
	 echo '<div class="alert alert-danger col-4 offset-4">'.$_GET['msg'].'</div>';
	}
	?>
</div>
<div class="row">
	<div class="col-4 offset-4 ">
		<div class="card">
			<div class="card-header">
				<strong >Entrar</strong>
			</div>
			<div class="card-body">
				<form action="login.php" method="post">
					<div class="form-group row">
						<input type="email" name="email" id="email" class="form-control" required onfocus="this.removeAttribute('readonly');" readonly autofocus placeholder="E-mail">
					</div>
					<div class="form-group row">
						<!-- <label for="senha">Senha:</label> -->
							<input type="password" name="senha" id="senha" class="form-control col-10" required onfocus="this.removeAttribute('readonly');" readonly placeholder="Senha">
							<a href="#" class="btn-show-password btn btn-outline-secondary col-2" >
								<i class="fas fa-eye"></i>
							</a>
							
					</div>
					<div class="form-group row">
						<button type="submit" class="btn btn-primary btn-block">Logar</button>
					</div>
				</form>
					<a href="form_usuario.php">
						<div class="form-group row">
							<button type="submit" class="btn btn-primary btn-block">Cadastre-se</button>
						</div>
					</a>
			</div>
		</div>
	</div>
</div>

</div>

<?php include './layout/footer.php'; ?>
