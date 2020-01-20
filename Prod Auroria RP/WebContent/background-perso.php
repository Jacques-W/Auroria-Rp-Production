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
	<section class="container-fluid bg-secondary text-center">
		<section class="container bg-dark text-light">
			<div class="row">
					<?php 
					   $reponse = $db->query('SELECT * FROM background_perso'); 
					   while($bg = $reponse->fetch(PDO::FETCH_ASSOC)){
				    ?>
				<div class="jumbotron text-light bg-dark border-top border-bottom border-danger">
					<h1 class="display-4"><?php echo $bg['nom']?></h1>
					<p class="lead"><?php echo $bg['age']?><br><?php echo $bg['metier']?></p>
						<hr class="my-4">
					<p>
						<?php echo $bg['caractere']?>
							<hr class="my-4">
						<?php echo $bg['physique']?>
							<hr class="my-4">
						<?php echo $bg['histoire']?>
					</p>
				</div>
					<?php }?>
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