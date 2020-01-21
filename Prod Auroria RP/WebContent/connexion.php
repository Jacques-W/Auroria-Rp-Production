<!DOCTYPE html>
<html>
	<?php include 'include/gestion_connexion.php'; ?>
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
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar" aria-expanded="false" aria-label="Toggle Nav">
					<span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse" id="navBar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Accueil</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="background.html">Notre Histoire</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="creationBackgroundPerso.php">Cr&eacute;er son Background</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="background-perso.php">Background Personnages</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="rules.html">Notre Code P&eacute;nale</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="concess_main.html">Le Concessionnaire</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="contact.php">Nous Contacter</a>
					</li>
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" id="navDeroulant" role="button" data-toggle="dropdown" aria-haspopup="true" 
						aria-expanded="false">Mon Compte</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="connexion.php">Se Connecter</a>
								<a class="dropdown-item" href="background-perso.php">Les Background Personnages</a>
								<a class="dropdown-item" href="profile.php">Mon Profil</a>
							</div>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<section class="container-fluid bg-secondary text-center py-5">
		<section class="container bg-dark text-light py-5">
			<div class="row">
				<div class="col-md-12">
					<form method="post">
						<label>Nom</label>
							<input class="form-control" name="nom">
						<label>Pr&eacute;nom</label>
							<input class="form-control" name="prenom">
						<label>Num&eacute;ro de T&eacute;l&eacute;phone</label>
							<input class="form-control" name="numphone" placeholder="Num&eacute;ro IG">
								<button type="submit" class="btn btn-success">Se Connecter</button>
					</form>
				</div>
			</div>
		</section>
	</section>
	<section class="container-fluid bg-dark text-center text-light">
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<p>@copyright 2020-2021 - Tous droits r&eacute;serv&eacute;s &agrave; Auroria R&ocirc;lePlay - Propuls&eacute; par Jacques Blake 
						<a type="button" class="btn btn-dark" href="mentions.html" role="button">Mentions L&eacute;gales</a>
					</p>
				</div>
			</div>
		</section>
	</section>
</body>
</html>