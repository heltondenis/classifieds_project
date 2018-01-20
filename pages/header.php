
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Classified</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="assets/js/script.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>

	<!-- NAVBAR -->
	<nav class="navbar navbar-inverse bg-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="./">
					Classified
				</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])):?>
					<li><a href="meus-anuncios.php">Meus Anúncios</a></li>
					<li><a href="sair.php">Sair</a></li>
				<?php else: ?>
					<li><a href="cadastre-se.php">Cadastra-se</a></li>
					<li><a href="login.php">Login</a></li>
				<?php endif; ?>
			</ul>
		</div>
	</nav>
	<!-- END NAVBAR -->