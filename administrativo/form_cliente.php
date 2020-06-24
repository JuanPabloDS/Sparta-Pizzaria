<?php include './layout/header.php'; ?>
<?php include './layout/menu.php'; ?>
<?php 
	require 'classes/Cliente.php'; 
	require 'classes/ClienteDAO.php';
	$cliente = new Cliente();
	if(isset($_GET['id']) && $_GET['id'] != '') {
		$id = $_GET['id'];
		$clienteDAO = new ClienteDAO();
		$cliente = $clienteDAO->get($id);
	}

?>
<?php 
	if(isset($_GET['msg']) && $_GET['msg'] != '') {
	 echo '<div class="alert alert-info">'.$_GET['msg'].'</div>';
	}
?>
<div class="container" style="padding-left:40px">
<div class="" style="margin-top:40px">
	<div class="col-8 offset-4">
		<h2>Cadastrar cliente</h2>
	</div>
</div>

<form action="controle_cliente.php?acao=<?= ( $cliente->getId() != '' ? 'editar' : 'cadastrar' )?>" method="post" enctype="multipart/form-data">
	<div class="">
		<div class="col-11">
			<p>&nbsp;</p>
			<div class="row">
				<div class="form-group col-2">
					<label for="id">ID:</label>
					<input type="text" class="form-control" name="id" id="id" value="<?=($cliente->getId() != '' ? $cliente->getId() : '')?>" readonly>
				</div>
				<div class="form-group col-10">
					<label for="nome">Nome:</label>
					<input type="text" class="form-control" name="nome" id="nome" required value="<?= ($cliente->getNome() != '' ? $cliente->getNome() : '') ?>">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-4">
					<label for="cpf">CPF:</label>
					<input type="text" name="cpf" id="cpf" value="<?= ($cliente->getCpf() != '' ? $cliente->getCpf() : '' ) ?>" class="form-control cpf">
				</div>
				<div class="form-group col-4">
					<label for="dt_nascimento">Data de nascimento:</label>
					<input type="date" name="dt_nascimento" id="dt_nascimento" value="<?= ($cliente->getDtNascimento() != '' ? $cliente->getDtNascimentoBD() : '' ) ?>" class="form-control">
				</div>
				<div class="form-group col-4">
					<label for="sexo">Sexo:</label>
					<select name="sexo" id="sexo" class="form-control">
						<option value="">Selecione</option>
						<option value="Feminino" <?= ($cliente->getSexo() == 'Feminino' ? 'selected="selected"' : '') ?> >Feminino</option>
						<option value="Masculino" <?= ($cliente->getSexo() == 'Masculino' ? 'selected="selected"' : '') ?>>Masculino</option>
						<option value="Não informado" <?= ($cliente->getSexo() == 'Não informado' ? 'selected="selected"' : '') ?>>Não informado</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-3">
					<label for="celular">Celular:</label>
					<input type="text" name="celular" id="celular" value="<?= ($cliente->getCelular() != '' ? $cliente->getCelular() : '') ?>" class="form-control telefone">
				</div>
				<div class="form-group col-3">
					<label for="senha">Senha:</label>
					<input type="password" name="senha" id="senha" class="form-control" >
				</div>
				<div class="form-group col-6">
					<label for="email">E-mail:</label>
					<input type="email" name="email" id="email" class="form-control" required value="<?= ($cliente->getEmail() != '' ? $cliente->getEmail() : ''); ?>">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-4">
					<label for="cep">CEP: <span class="msg-error-form" id="msg-cep">(CEP não encontrado)</span></label>
					<input type="text" name="cep" id="cep" value="<?= ($cliente->getCep() != '' ? $cliente->getCep() : ''); ?>" class="form-control cep">
				</div>
				<div class="form-group col-8">
					<label for="endereco">Endereco:</label>
					<input type="text" name="endereco" id="endereco" value="<?= ($cliente->getEndereco() != '' ? $cliente->getEndereco() : ''); ?>" class="form-control">
				</div>
			</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>
		</div>
	</div>
</form>
</div>

<?php include './layout/footer.php'; ?>

<script type="text/javascript">


$('.cep').on('change', function() {
	var cep = $(this).val().replace('-', '');
	
	$.ajax({
		url: 'https://viacep.com.br/ws/' + cep + '/json/',
		type: 'GET',
		dataType: 'json',
		beforeSend:function() {
			$('#logradouro').val('...');
			$('#bairro').val('...');
			$('#cidade').val('...');
			$('#estado').val('...');
		},
		success: function(resultado) {
			if(typeof resultado.logradouro === "undefined") {
				$('#msg-cep').show();
				$('#cep').val('');
				$('#logradouro').val('');
				$('#bairro').val('');
				$('#cidade').val('');
				$('#estado').val('');
				$('#cep').focus();
			} else {
				$('#msg-cep').hide();
				$('#logradouro').val(resultado.logradouro);
				$('#bairro').val(resultado.bairro);
				$('#cidade').val(resultado.localidade);
				$('#estado').val(resultado.uf);
				$('#numero').focus();

			}
	    }, 
	})
	
})
</script>