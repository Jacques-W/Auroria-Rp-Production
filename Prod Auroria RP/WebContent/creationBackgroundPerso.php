<!DOCTYPE html>
<html>
	<?php include 'include/fonctions_background_perso.php'; ?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title>Auroria R&ocirc;lePlay</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="index.html">Auroria R&ocirc;lePlay</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse" id="navBar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.html">Accueil</a>
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
	<section class="container-fluid bg-secondary text-light py-5">
		<section class="container bg-dark">
			<div class="row text-center">
				<div class="col-md-12">
					<h5 class="text-danger">Tu peux enregistrer ton Background Ici!</h5>
				</div>
				<div class="col-md-12 py-5">
					<form method="post">
						<label class="text-danger text-center">Nom</label>
							<input class="form-control" type="text" name="nom">
						<label class="text-danger text-center">Pr&eacute;nom</label>
							<input class="form-control" type="text" name="prenom">
						<label class="text-danger text-center">Age</label>
							<input class="form-control" type="text" name="age">
						<label class="text-danger text-center">R&ocirc;le</label>
							<select class="form-control" name="role">
								<option>Classe-D</option>
								<option>Scientifique</option>
								<option>FIM Epsilon-11</option>
								<option>Garde Du Site</option>
								<option>Insurrection du Chaos</option>
							</select>
						<label class="text-danger text-center">M&eacute;ier</label>
							<select class="form-control" name="metier">
								<option>Avocat</option>
								<option>Night Club</option>
								<option>Burger Hot</option>
								<option>LSPD</option>
								<option>EMS</option>
								<option>M&eacute;canicien</option>
								<option>Concessionnaire</option>
								<option>Agent Immobilier</option>
								<option>Bar ElColmillo</option>
								<option>Bar Bahamas</option>
								<option>D&eacute;bitant de Tabac</option>
								<option>Agent du Gouvernement</option>
								<option>Arm&eacute;e - Navy Seals</option>
							</select>
						<label class="text-danger text-center py-2">Caract&egrave;re</label>
							<input class="form-control" name="caractere">
						<label class="text-danger text-center">Physique</label>
							<input class="form-control" name="physique">
						<label class="text-danger text-center">Histoire</label>
							<input class="form-control" name="histoire" placeholder="10 Lignes minimum">
								<button class="btn btn-success" type="submit">Valider</button>
					</form>
				</div>
			</div>
		</section>
	</section>
	<section class="container-fluid bg-dark text-light">
		<section class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p>
						@copyright 2020-2021 - Tous droits r&eacute;serv&eacute;s &acirc; Auroria R&ocirc;lePlay - Propuls&eacute; par Jacques Blake <a type="button" class="btn btn-dark" href="mentions.html" role="button">Mentions Légales</a>
					</p>
				</div>
			</div>
		</section>
	</section>
</body>
</html>
