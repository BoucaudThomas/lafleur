<?php
session_start();
//formulaire de récupération de mot de passe
    include ("header.php");?>

    <table class="center">
		<tr>
	      <td class="content"><form action="envoi.php" method="post">
     <p class="recup_mdp">Mot de passe oublié</p>
		  <table>
			<tr><td> Identifiant(email): </td><td><input type="text" name="identifiant" value="" required /></td></tr>
            <tr><td></td><td><input type="submit" name="Réinitialiser le mot de passe" value="recover" /></td></tr>
		  </table>
<?php
include("connect_db.php");
	if (isset($_POST['recover'])) {
		$identifiant = $_POST['identifiant'];

			$query = $db->prepare($sql = "SELECT * FROM client WHERE email= $identifiant");
			$query->execute();

				$_SESSION['identifiant'] = $identifiant;
				header("Location: header.php");
	                              }	
    
            if (!empty($ligne) && $ligne['nb'] > 0) {
            echo "Veuillez renseigner une adresse email.";
            }
    else{
        echo "aucun compte n'est associé a cet email.";
              }
include("deconnect_db.php");

?>
<?php
include ("footer.php");
?>




