<?php
//J'inclus la configuration script espace membre//
include('config.php');
?>

//Debut Site//
<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<!-- css -->
			<link rel="stylesheet" href="css/bootstrap.css">
			<title>Auroria RP</title>
		</head>
		<body>
			<header>
				<div id="header">
					<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
						<h2 class="text-danger">Auroria R&ocirc;leplay</h2>
							<a class="navbar-brand" href="#"></a>
								<button class="navbar-toggler" type="button" data-toggle="colapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									<ul class="navbar-nav ml-auto">
										<li class="nav-item">
											<a class="nav-link text-light" href="index.html">Accueil</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-light" href="background.html">Notre Histoire</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-light" href="background-perso.html">Histoire des Personnages</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-light" href="rules.html">Notre Code P&eacute;nal</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-light" href="concess_main.html">Le Concessionnaire</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-light" href="contact.php">Nous contacter</a>
										</li>	
									</ul>
								</div>
					</nav>
				</div>
			</header>
			<section class="container-fluid bg-secondary text-light m-0 py-5">
				<section class="container bg-dark">
					<div class="row">
						<div class="col-md-12">
							<h5 class="text-danger">Bienvenue sur la page d'inscription!!</h5>
						</div>
						<!-- PHP Formulaire -->
							<?php 
							     //Verification de l'envoi du formulaire//
							if (isset($_POST['username'], $_POST['password'], $_POST['passverif'], $_POST['email'], $_POST['avatar']) && $_POST['username'] != ''){
							    //Je désactive l'echappement par rapport au "quotes"//
							    if(get_magic_quotes_gpc()){
							        $_POST['username'] = stripslashes($_POST['username']);
							        $_POST['password'] = stripslashes($_POST['password']);
							        $_POST['passverif']	= stripslashes($_POST['passverif']);
							        $_POST['email'] = stripslashes($_POST['email']);
							        $_POST['avatar'] = stripslashes($_POST['avatar']);
							    }
							    //Verification du mot de passe//
							    if($_POST['password'] == $_POST['passverif']){
							        //Verification de la taille du mot de passe//
							        if(strlen($_POST['password']) >= 8){
							            //Verification du mail//
							            if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i', $_POST['email'])){
							                //Echape les variables pour les mettre en SQL//
							                $username = mysql_real_escape_string($_POST['username'])
							            }
							        }
							    }
							}
							?>
					</div>
				</section>
			</section>
			<section class="container-fluid bg-secondary text-light m-0 py-5">
				<section class="container shadow p-3 mb-5 bg-dark rounded">
					<div class="row">
						<div class="col-md-12 text-center text-danger">
							<p class="bas">copyright 2019-2020 - All Rights reserved to Auroria R&ocirc;lePlay - Designed by Jacques Blake.
								<a type="button" class="btn btn-dark" href="mentions.html" role="button"> Mentions l&eacute;gales</a>
							</p>
						</div>
					</div>
				</section>
			</section>
		</body>
	</html>