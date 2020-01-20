<?php
//Démarrage de la session//
session_start();
//Session démarrée//
/*
//Connexion DB//
$db = new PDO('mysql:host=mysql-mariadb-5-101.zap-hosting.com;dbname=zap445718-1', 'zap445718-1', 'r7tXnGPqpDTi5wSx');
//DB Connectée//

if(isset($_GET['name']) AND $_GET['name'] != '') {
   $getname = strval($_GET['name']);
   $requser = $bdd->prepare("SELECT firstname, lastname, dateofbirth, height, phone_number, money, bank, job FROM users WHERE name = ? AND phone_number = ?");
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
}*/
?>

<!DOCTYPE html>
<html>

<?php 
//Connexion DB//
$db = new PDO('mysql:host=mysql-mariadb-5-101.zap-hosting.com;dbname=zap445718-1', 'zap445718-1', 'r7tXnGPqpDTi5wSx');
//DB Connectée//

if(isset($_GET['name']) AND $_GET['name'] != '') {
    $getname = intval($_GET['name']);
    
}
$reponse = $db->query('SELECT * FROM users WHERE name= :name AND phone= :phone_number');
$userinfo = $reponse;

?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	
	<link rel="stylesheet" href="css/bootstrap.css">


    <title>Auroria RP</title>
 
  </head>

<body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
<header>
	<div id="header">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
			<h2 class="text-danger">Auroria RôlelePlay</h2>
				<a class="navbar-brand" href="#"></a>
		  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    			<span class="navbar-toggler-icon"></span>
		  			</button>
		  				<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    				<ul class="navbar-nav ml-auto">
		      					<li class="nav-item active bg-danger">
		        					<a class="nav-link text-light" href="index.html">Accueil <span class="sr-only">(Page actuelle)</span></a>
		      					</li>
                    		    <li class="nav-item">
                    		        <a class="nav-link text-light" href="background.html">Notre Histoire</a>
                    		    </li>
                    		    <li class="nav-item">
                    		      	<a class="nav-link text-light" href="background-perso.html">Histoire des Personnages</a>
                    		    </li>
                    		    <li class="nav-item">
                    		      	<a class="nav-link text-light" href="rules.html">Notre Code Pénal</a>
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
<section class="container-fluid bg-secondary text-light">
	<section class="container bg-dark text-light">
		<div class="row">
			<div class="col-md-4">
				<div class="card" style="width: 18rem;">
  					<?php 
  					
  					     $reponse = $db->prepare('SELECT name, firstname, lastname, dateofbirth, height, phone_number, money, bank, job FROM users WHERE name = :name AND phone_number = :phone');
                         $reponse ->execute(array(
                            'name' => $userinfo,
                            'phone' => $userinfo
                        ));
                         
                     ?>
                     <?php 
                     while ($utilisateur = $reponse->fetch()){?>
                     
  					<ul class="list-group list-group-flush">
    					<li class="list-group-item bg-secondary text-light">test<?php echo $utilisateur['firstname']; ?></li>
                        <li class="list-group-item bg-secondary">test<?php echo $utilisateur['lastname']; ?></li>
                        <li class="list-group-item bg-secondary">test<?php echo $utilisateur['dateofbirth']; ?></li>
                        <li class="list-group-item bg-secondary">test<?php echo $utilisateur['height']; ?></li>
                        <li class="list-group-item bg-secondary">test<?php echo $utilisateur['phone_number']; ?></li>
                        <li class="list-group-item bg-secondary">test<?php echo $utilisateur['money']; ?></li>
                        <li class="list-group-item bg-secondary">test<?php echo $utilisateur['bank']; ?></li>
                        <li class="list-group-item bg-secondary">test<?php echo $utilisateur['job']; ?></li>
                        	<?php
                                if(isset($_SESSION['name']) AND $userinfo['name'] == $_SESSION['name']) {
                            ?>
                        <button class="btn btn-danger" type="button" href="deconnexion.php">Se D&eacute;connecter</button>
                        	<?php }?>
                     </ul>
                     <?php }?>
    			</div>
			</div>
		</div>
	</section>
</section>
<!-- Footer -->
	<section class="container-fluid bg-dark p-1">
		<div class="row">
			<div class="col-md-12 text-center text-danger">
				<p class="bas">copyright 2019-2020 - All rights reserved to Auroria RôlePlay - 
				Design by Jacques Blake. <a type="button" class="btn btn-dark" href="mentions.html" role="button"> Mentions Légales</a>
				</p>
			</div>
		</div>
	</section>
</body>
</html>