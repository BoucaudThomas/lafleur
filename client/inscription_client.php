<?php
session_start(); 
//formulaire d'inscription php
	include("header.php"); ?>
	<table class="center">
		<tr>
	      <td class="content"><form action="envoi.php" method="post">
     <p class="inscript">Inscription</p>
		  <table>
			<tr><td> Identifiant(email): </td><td><input type="text" name="identifiant" value="" required /></td></tr>
			<tr><td> Mot de Passe: </td><td><input type="password" name="mot_de_passe" value="" required /></td></tr>
			<tr><td> Nom: </td><td><input type="text" name="nom" value="" required /></td></tr>
			<tr><td> Prenom: </td><td><input type="text" name="prenom" value="" required /></td></tr>
			<tr><td> Rue: </td><td><input type="text" name="rue" value="" required /></td></tr>
			<tr><td> Ville: </td><td><input type="text" name="ville" value="" required /></td></tr>
			<tr><td> Code Postal: </td><td><input type="text" name="cp" value="" required /></td></tr>
			<tr><td> Téléphone: </td><td><input type="text" name="tel" value="" required /></td></tr>
			<tr><td> Mobile: </td><td><input type="text" name="mob" value="" required /></td></tr>
			<tr><td></td><td><input type="submit" name="Inscription" value="valider" /></td></tr>
			<tr><td></td><td><input type="submit" name="reset" value="annuler" /></td></tr>
		  </table>
</form>
        <?php
        if (isset ($_POST['Inscription'])){
            //récupération des données client
            $identifiant=$_POST['identifiant'];
            $mot_de_passe=$_POST['mot_de_passe'];
            $nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
            $rue=$_POST['rue'];
            $ville=$_POST['ville'];
			$cp=$_POST['cp'];
            $tel=$_POST['tel'];
            $mob=$_POST['mob'];
            //connexion à la base de donnée
            include("connect_db.php");
            //script sql d'insertion
            $sql = "INSERT INTO client VALUES ('".$identifiant."','".$nom."','".$prenom."','".$rue."','".$ville."','".$cp."','".$tel."','".$mob."','".$mot_de_passe."')";
            $statement = $db->query($sql); 
				echo "Votre compte a été crée avec succes.";
            //déconnexion à la base de donnée
            include("deconnect_db.php");
        }
        ?>
	   </tr>
	</table>

	<?php
include("footer.php");
?>