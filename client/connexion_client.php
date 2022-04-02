<?php
session_start(); 
include("header.php")
?>
<div class="container" id="content">
	<table class="center" id="connect-table">
		<tr>
	      <td class="content"><form action="connect_client.php" method="post">
     <h2 class="inscript">Connexion</h2>
		  <table class="table" id="tab_connect">
			  <tbody>
			  		<tr>
					  <th scope="row">Identifiant: </th>
					  <td><input type="text" name="identifiant" value="" /></td>
					</tr>
					<tr>
						<th scope="row">Mot de Passe:</th>
						<td><input type="password" name="mot_de_passe" value="" /></td>
					</tr>
					<tr><td></td><td><input type="submit" name="connexion" value="connexion" /></td></tr>
					<label>Si vous n'avez pas de compte, veuillez vous <a href="inscription_client.php">inscrire.</a></label>
			  </tbody>
		  </table>
</form>
<?php
include("connect_db.php");
	if (isset($_POST['connexion'])) {
		$identifiant = $_POST['identifiant'];
		$mot_de_passe = $_POST['mot_de_passe'];

			$query = $db->prepare($sql = "SELECT * FROM client WHERE email='".$identifiant."' and mot_de_passe='".$mot_de_passe."'");
			$query->execute();

				$_SESSION['identifiant'] = $identifiant;
									}	
	else{
	  	 "Le nom d'utilisateur ou le mot de passe est incorrect.";
		}
include("deconnect_db.php");
?>
	   </tr>
	</table>
<?php
include("footer.php");
?>