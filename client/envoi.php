<?php

session_start();

$identifiant=$_POST["identifiant"];
$mot_de_passe=$_POST["mot_de_passe"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$rue=$_POST["rue"];
$ville=$_POST["ville"];
$cp=$_POST["cp"];
$tel=$_POST["tel"];
$mob=$_POST["mob"];

//connexion à la base de données
 include("connect_db.php");
 
//insérer les données dans la base de données
	$sql="INSERT INTO client ( email, nom, prenom, rue, ville, cp, tel, mob, mot_de_passe) VALUES ('$identifiant','$nom','$prenom', '$rue', '$ville', '$cp', '$tel','$mob', '$mot_de_passe')";
	
/*exécution de la requete*/
	$statement = $db->query($sql); 
	$_SESSION["identifiant"]=$identifiant;
	$_SESSION["nom"]=$nom;
	$_SESSION["prenom"]=$prenom;
//déconnexion à la base de donnée 
  include("deconnect_db.php");
?>