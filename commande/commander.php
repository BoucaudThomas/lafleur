<?php
	session_start(); 
	include("../include/header.php");
    include("../connect_db.php");
    include("config_variable.php");
?>


<?php
        $resultat = $db->query('SELECT * FROM '.$db_table.' WHERE id = "'.$_GET['id'].'"');
        while ($col = $resultat->fetch()) {
?>
	<div class="container" id="content">
		<div class="container">
                <div class="card card-body" style="display: block;">
                    <h2 style="display:block; float:inline-end">Récapitulatif de commande</h2>
                    <br>
                    <div class="col-md-6" style="margin: auto;">
                        <div>
                                    <label>Référence:</label>
                                    <input style="width: 400px; margin:auto;" class="form-control" type="text" name="nom" value="
                                    <?php if($_GET['action'] == "commander"){ ?><?php echo($col['id']); ?><?php }?>" readonly>
                                </div>
                                <div class="form-group" style="float: block;">
                                    <label for="">Description:</label>
                                    <input style="width: 400px; margin:auto;" class="form-control" type="text" name="prenom" value="
                                    <?php if($_GET['action'] == "commander"){ ?><?php echo($col['description']); ?><?php }?>" readonly>
                                </div>
                                <div class="form-group" style="float: block;">
                                    <label for="">Prix:</label>
                                    <input style="width: 400px; margin:auto;" class="form-control" type="text" name="adresse" value="
                                    <?php if($_GET['action'] == "commander"){ ?><?php echo($col['prix']); ?><?php }?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Image:</label>
                                    <img src=
                                            <?php
                                                //affichage des images
                                                echo($col['image']); 
                                            ?>>
                                </div>
                    </div>
                </div>
                &nbsp;
                <div class="card card-body" style="display: block;">
                    <h2 style="display:block; float:inline-end">Renseignez vos informations</h2>
                    <form action="confirme_commande.php?id=<?php echo($col['id']);?>&action=confirmer" methode="POST">
                                <div>
                                    <label for="">Nom:</label>
                                    <input class="form-control" type="text" name="nom" value="" maxlength="20" placeholder="BOUCAUD" required>
                                </div>
                                <div class="form-group" style="float: block;">
                                    <label for="">Prenom:</label>
                                    <input class="form-control" type="text" name="prenom" value="" maxlength="20" placeholder="Thomas" required>
                                </div>
                                <div class="form-group" style="float: block;">
                                    <label for="">Adresse:</label>
                                    <input class="form-control" type="text" name="adresse" value="" maxlength="50" placeholder="45 rue de jesaispasquoi" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Ville:</label>
                                    <input class="form-control" type="text" name="ville" value="" maxlength="20" placeholder="Les Abymes" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Code Postal:</label>
                                    <input class="form-control" type="text" name="code_postal" value="" maxlength="5" placeholder="97139" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Email:</label>
                                    <input class="form-control" type="text" name="email" value="" maxlength="30" placeholder="test.youpi@gmail.com" required>
                                </div>
                                
                </div>
                <br>
                <button class="btn btn-primary" type="submit" name="confirmer" value="ConfirmerCommande">Confirmer</button>
                <br><br>
            </form>
                    </div>
                </div>
		</div>
	</div>
    <?php } ?>
<?php
	if (isset($_POST['confirmer']) == "ConfirmerCommande") {
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $ville = $_POST['ville'];
        $code_postal = $_POST['code_postal'];
        $email = $_POST['email'];

		$query = $db->prepare($sql = "INSERT INTO $db_table_commande VALUES ('$nom','$prenom','$adresse','$ville',$code_postal,'$email')");
		$query->execute();
        }
//include("deconnect_db.php");
?>


<?php
include("../include/footer.php");
?>