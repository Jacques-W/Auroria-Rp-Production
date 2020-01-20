<!DOCTYPE html>
<html>
	<?php include 'include/traitement.php'; ?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<title>Auroria RP</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
			<h2 class="text-danger">Auroria R&ocirc;lePlay</h2>
				<a class="navbar-brand" href="#"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barNavigation" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				<div class="collapse navbar-collapse" id="barNavigation">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Accueil</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="background.html">Notre Histoire</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="creationBackgroundPerso.php">Cr&eacute;er son background</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="background-perso.php">Background Personnages</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="rules.html">Notre Code P&eacute;nal</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="concess_main.html">Le Concessionnaire</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="contact.php">Nous contacter</a>
						</li>
					</ul>
				</div>
		</nav>
	</header>
	<section class="container-fluid bg-secondary py-5">
		<section class="container bg-dark text-center">
			<div class="row">
				<div class="col-md-12">
					<div class="jumbotron bg-dark text-light">
						<h1 class="display-4">Vous &ecirc;tes sur la page de contact.</h1>
						<p class="lead">Posez Vos questions ou autres.</p>
							<hr class="my-4">
						<form method="post">
							<p>Vos Coordonn&eacute;es:</p>
								<label class="text-danger">Nom: </label><br>
									<input type="text" class="form-control" name="nom">
								<label class="text-danger">Email: </label><br>
									<input type="text" class="form-control" name="email">
							<p>Votre message: </p>
								<label class="text-danger">Objet:</label><br>
									<input type="text" class="form-control" name="objet">
								<label class="text-danger">Message:</label><br>
									<input id="champTexteFormulaire" class="form-control" name="message">
										<button id="activationBouton" type="submit" class="btn btn-block active btn-success mt-5" id="valider" name="envoi">Envoyer</button>
						</form>
					</div>
				</div>
			</div>
		</section>
	</section>
	<section class="container-fluid bg-dark p-1">
		<div class="row">
			<div class="col-md-12 text-center text-danger">
				<p>@copyright 2020-2021 - Tous droits r&eacute;serv&eacute;s &agrave; Auroria R&ocirc;lePlay - Propuls&eacute; par 
				Jacques Blake. <a type="button" class="btn btn-dark" href="mentions.html" role="button"> Mentions L&eacute;gales</a></p>
			</div>
		</div>
	</section>
		<script src="js/contact.js"></script>
</body>
</html>