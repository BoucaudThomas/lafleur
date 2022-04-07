<?php
session_start(); 
//formulaire d'inscription php
	include("../include/header.php");
?>

<div class="container" id="content">
		<div class="container">
			<form action="create_user.php" method="POST">
				<h2 class="inscript">Inscription</h2>
				<div class="card-body" style="display: block; float:middle; margin:auto; width:500px;">
					<div class="form-group" style="float: block;">
						<label for="">Identifiant:</label>
						<input class="form-control" type="text" name="identifiant" value="">
					</div>
					<div class="form-group" style="float: block;">
						<label for="">Mot de passe:</label>
						<input class="form-control" type="password" name="mot_de_passe" value="">
					</div>
					<div class="form-group" style="float: block;">
						<label for="">Nom:</label>
						<input class="form-control" type="text" name="nom" value="">
					</div>
					<div class="form-group" style="float: block;">
						<label for="">Prenom:</label>
						<input class="form-control" type="text" name="prenom" value="">
					</div>
					<div class="form-group" style="float: block;">
						<label for="">Adresse:</label>
						<input class="form-control" type="text" name="adresse" value="">
					</div>
					<div class="form-group">
						<label for="">Ville:</label>
						<input class="form-control" type="text" name="ville" value="">
					</div>
					<div class="form-group">
						<label for="">Code Postal:</label>
						<input class="form-control" type="number" name="code_postal" value="">
					</div>
					<div class="form-group">
						<label for="">Téléphone:</label>
						<input class="form-control" type="number" name="telephone" value="">
					</div>
				</div>
					<input class="btn btn-primary" type="submit" name="inscription" value="inscription">
					<p style="text-align: right;">Si vous avez deja un compte, veuillez vous <a href="connexion_client.php"> connectez.</a></p>
					<br>
			</form>
		</div>
	</div>

        <?php
        if (isset ($_POST['inscription'])){
            //récupération des données client
            $identifiant=$_POST['identifiant'];
            $mot_de_passe=$_POST['mot_de_passe'];
            $nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
            $adresse=$_POST['adresse'];
            $ville=$_POST['ville'];
			$code_postal=$_POST['code_postal'];
            $tel=$_POST['telephone'];
            //connexion à la base de donnée
            include("../connect_db.php");
            //script sql d'insertion
            $sql = "INSERT INTO client VALUES ('$identifiant','$nom','$prenom','$adresse','$ville',$code_postal,'$telephone','$mot_de_passe')";
            $query = $db->prepare($sql);
			$query->execute(); 
				echo "Votre compte a été crée avec succes.";
        }
        ?>

	<?php
include("../include/footer.php");
?>