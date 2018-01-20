<?php 
require 'config.php';
require 'pages/header.php'; 
?>

	<!-- JUMBOTRON -->
	<div class="container">
		<h1>Cadastra-se</h1>
		<?php 
			require 'classes/usuarios_class.php';
			$u = new Usuarios();
			if (isset($_POST['nome']) && !empty($_POST['nome'])) {
				$nome = addslashes($_POST['nome']);
				$email = addslashes($_POST['email']);
				$senha = addslashes($_POST['senha']);
				$telefone = addslashes($_POST['telefone']);

			if (!empty($nome) && !empty($email) && !empty($senha)) {
				$u->cadastrar($nome, $email, $senha, $telefone);
			} else {
				?>
				<div class="alert alert-danger">
					Preencha todos os campos!
				</div>
				<?php
			}
		}
		?>
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