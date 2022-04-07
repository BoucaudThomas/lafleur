<?php
	session_start(); 
	include("../include/header.php");
?>
	<div class="container" id="content">
		<div class="container">
			<form action="connect_client.php" method="POST">
				<h2 class="inscript">Connexion</h2>
				<div style="margin: auto;">
					<div class="form-group" style="float: block;">
						<label for="">Identifiant:</label>
						<input class="form-control" type="text" name="identifiant" value="">
					</div>
					<div class="form-group">
						<label for="">Mot de passe:</label>
						<input class="form-control" type="password" name="mot_de_passe" value="">
					</div>
				</div>
					<input class="btn btn-primary" type="submit" name="action" value="connexion">
					<p style="text-align: right;">Si vous n'avez pas de compte, veuillez vous <a href="inscription_client.php"> inscrire.</a></p>
					<br>
			</form>
		</div>
	</div>
<?php
include("../connect_db.php");
	if (isset($_POST['action'])) {
		$identifiant = $_POST['identifiant'];
		$mot_de_passe = $_POST['mot_de_passe'];

			$query = $db->prepare($sql = "SELECT * FROM client WHERE email='$identifiant' AND mot_de_passe='$mot_de_passe'");
			$query->execute();

				$_SESSION['identifiant'] = $identifiant;
									}	
	else{
	  	 echo("");
		}
//include("deconnect_db.php");
?>

<?php
include("../include/footer.php");
?>