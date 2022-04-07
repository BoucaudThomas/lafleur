<?php

if (!isset($_SESSION)) session_start();

$identifiant=$_POST["identifiant"];
$mot_de_passe=$_POST["mot_de_passe"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$adresse=$_POST["adresse"];
$ville=$_POST["ville"];
$cp=$_POST["code_postal"];
$tel=$_POST["telephone"];

//connexion à la base de données
 include("../connect_db.php");
 
//insérer les données dans la base de données
	$sql="SELECT $identifiant, $mot_de_passe FROM client";
	
/*exécution de la requete*/
	$statement = $db->query($sql); 
	$_SESSION["identifiant"]=$identifiant;
	$_SESSION["nom"]=$nom;
	$_SESSION["prenom"]=$prenom;
//déconnexion à la base de donnée 
  include("deconnect_db.php");
?>