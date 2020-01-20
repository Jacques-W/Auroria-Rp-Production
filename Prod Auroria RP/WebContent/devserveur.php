<!DOCTYPE html>
<html>

<?php
$erreurs ="";
$db = new PDO('mysql:host=mysql-mariadb14-104.zap-hosting.com;dbname=zap445718-4;charset=utf8', 'zap445718-4', 'Awhb8hCUX7MLjzds');

if (isset($_POST['creer_tache'])) {
    if (empty($_POST['creer_tache'])) {
        $erreurs = 'le formulaire n\'est pas rempli compl&ecirc;tement';
    } else {
        $tache = $_POST['creer_tache'];
        $db->exec("INSERT INTO tache(tache) VALUES('$tache')");
        
    }
}
if(isset($_GET['supprimer_tache'])) {
    $id = $_GET['supprimer_tache'];
    $db->exec("DELETE FROM tache WHERE id=$id");
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script type="text/javascript" src="https://ff.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=oPbbkgEJwELk0vxmJKjp_9ih9MFxdC2cqFvC3pQqlUsfsfU3cE-Bl16T_fDVs3zntX9ohJjnbvOZLhMp2HU8JG5Du60DbmAPHtOtq1bFmauijaiCss79PPEl6riA4lLqFkZ55oMRcbDfEKIFCe-AbEgYFao4IwNMq9QHSQDy4RLQWWcqF6s0dcZf2E1sdVZVPFjGIoME7H5m04Jd5HjmA1V4FX_MIjkYHboLiw0fQ9E" charset="UTF-8"></script><script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <title>Auroria RP</title>
</head>
<body>
	<header>
		<div id="header">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
				<h2 class="text-danger">Auroria R&ocirc;lePlay</h2>
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
	<section class="container-fluid bg-secondary py-5">
		<section class="container-fluid bg-secondary">
		<section class="container bg-dark">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center text-danger">Formulaire ToDo Liste!!!!</h2>
				</div>
				<div class="col-md-12 text-center">
					<form class="taches_input" method="post">
        				<input id="inserer" type="text" name="creer_tache" placeholder="Priorit&eacute;/T&acirc;che">
        					<button class="btn btn-success" id="envoyer">Cr&eacute;er</button>
    				</form>
				</div>
			</div>
		</section>
		<section class="container-fluid bg-secondary py-5">
			<section class="container bg-dark text-light py-5">
				<div class="row">
    				<table class="taches">
    					<tr class="text-center">
            				<th>N</th>
            					<th>T&acirc;che</th>
            					<th>Action</th>
        					</tr>
        						<?php
                                      $reponse = $db->query('Select * from tache');
                                      while ($taches = $reponse->fetch()) {
                                ?>
            				<tr class="text-center py-2">
                				<td><?php echo $taches['id'] ?></td>
                				<td><?php echo $taches['tache'] ?></td>
                				<td><a class="suppr" href="devserveur.php?supprimer_tache=<?php echo $taches['id'] ?>"> X</a></td>
            				</tr>
            					<?php
                                    }
                                ?>
     				</table>
				</div>
			</section>
		</section>
	</section>
	</section>
	<section class="container-fluid bg-dark py-5">
		<div class="row">
			<div class="col-md-12 text-center text-danger">
				<p class="bas">copyright 2019-2020 - All rights reserved to Auroria R&ocirc;lePlay - 
					Design by Jacques Blake. <a type="button" class="btn btn-dark" href="mentions.html" role="button"> Mentions L&eacute;gales</a>
				</p>
			</div>
		</div>
	</section>
	<script src="js/jquery-3.4.1.js"></script>
	<script>
		$(window).on('load', function({
			$('#textcache').hide()
		})
	</script>
</body>
</html>