<?php
$db = new PDO('mysql:host=intranetcg2805.mysql.db;dbname=intranetcg2805;charset=utf8', 'intranetcg2805', 'Tango2267');
$erreur = '';

$nom = $_POST['nom'] ?? '';
$prenom = $_POST['prenom'] ?? '';
$age = $_POST['age'] ?? '';
$role = $_POST['role'] ?? '';
$metier = $_POST['metier'] ?? '';
$caractere = $_POST['caractere'] ?? '';
$physique = $_POST['physique'] ?? '';
$histoire = $_POST['histoire'] ?? '';


$longueurMinimum = 10;
$verifAge = '#[0-9]{2}#';

if(empty($nom)&& empty($prenom)&& empty($age)&& empty($role)&& empty($metier)&& empty($caractere)&& empty($physique)&& empty($histoire)){
    $erreur = 'Le Formulaire n\'a pas &eacute;t&eacute; rempli enti&egrave;rement';
}elseif($caractere < $longueurMinimum){
    $erreur = 'Vous n\'avez pas r&eacute;spect&eacute; la taille minimum du champ caract&egrave;';
}elseif($physique < $longueurMinimum){
    $erreur = 'Vous n\'avez pas r&eacute;spect&eacute; la taille minimum du champ Physique;';
}elseif($histoire < $longueurMinimum){
    $erreur = 'Vous n\'avez pas r&eacute;spect&eacute; la taille minimum du champ caract&egrave;';
}elseif(!preg_match($age, $verifAge)){
    $erreur = 'Vous n\'avez pas entr&eacute; d\'age valide';
}else{
    $requete = $db->exec('INSERT INTO background_perso(nom, prenom, age, role, metier, caractere, physique, histoire) VALUES("'.$nom.'", "'.$prenom.'", "'.$age.'", "'.$role.'", "'.$metier.'", "'.$caractere.'", "'.$physique.'", "'.$histoire.'")');
}