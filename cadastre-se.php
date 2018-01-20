<?php 
require 'config.php';
require 'pages/header.php'; 
?>

	<!-- JUMBOTRON -->
	<div class="container">
		<h1>Cadastra-se</h1>
		<form method="POST">
			<div class="form-group">
				<label for="nome">
					Nome:
				</label>
				<input type="text" name="nome" id="nome" class="form-control" />
			</div>
			<div class="form-group">
				<label for="nome">
					E-mail:
				</label>
				<input type="email" name="email" id="email" class="form-control" />
			</div>
			<div class="form-group">
				<label for="nome">
					Senha:
				</label>
				<input type="password" name="senha" id="senha" class="form-control" />
			</div>
			<div class="form-group">
				<label for="nome">
					Telefone:
				</label>
				<input type="number" name="telefone" id="telefone" class="form-control" />
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-success" name="button" value="Cadastrar" />
			</div>
		</form>
	</div>
	<!-- END JUMBOTRON -->

<?php require 'pages/footer.php'; ?>