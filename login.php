<?php 
require 'config.php';
require 'pages/header.php'; 
?>

	<!-- JUMBOTRON -->
	<div class="container">
		<h1>Login</h1>
		<?php 
			require 'classes/usuarios_class.php';
			$u = new Usuarios();
			if (isset($_POST['email']) && !empty($_POST['email'])) {
				$email = addslashes($_POST['email']);
				$senha = $_POST['senha'];

				if ($u->login($email, $senha)) {
					?>
					<script type="text/javascript">window.location.href="./";</script>
					<?php
				} else {
					?>
						<div class="alert alert-danger">
							Senha errada!
						</div>
					<?php
				}
			}
		?>
		<form method="POST">
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
				<input type="submit" class="btn btn-success" name="button" value="Fazer Login" />
			</div>
		</form>
	</div>
	<!-- END JUMBOTRON -->

<?php require 'pages/footer.php'; ?>