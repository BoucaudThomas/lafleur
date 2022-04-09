<?php
    include('config_variable.php');
    include('../connect_db.php');
    include('../include/header.php');
?>

<?php
    // Redirection en cas de demande d'ANNULATION de modification + message d'annulation      
    if($_GET['action'] == "annuler")
        {   
            header("location:../catalogue/fleurs.php?msg=1");
        }
?>

<?php
    // Action de SUPPRESSION de l'article
    if($_GET['action'] == "supprimer")
        {   
            // Suppression de l'article  N°xxx
            $id = ($_GET['id']); // Récuération du numéro de l'article à supprimer
            $db->query("DELETE FROM $db_table_commande WHERE id='$id'"); // Requête de suppression

            // redirection après suppression + message de supression
            header("location:../catalogue/fleurs.php?&msg=2");
        }
?>

<?php
    // Récuperation de la quantité d'article         
    if($_GET['action'] == "appliquer")
        {   
            $quantite = $newQuantite;
        }
?>

<?php
    //     
    if($_GET['action'] == "ajouter")
        {  
            $resultat = $db->query('SELECT * FROM '.$db_table.' WHERE id = "'.$_GET['id'].'"');
            while ($col = $resultat->fetch()) {
                $quantite = 3; 
                // Récupération de la reference de l'article à ajouter
                $id = ($_GET['id']);
                $reference = ($_GET['reference']);
                $description = ($col['description']);
                $prix = ($col['prix']);
                $image = ($col['image']);
                //$quantite = ($col['quantite']);
                //$montant = ($col['montant']);
                $montant = ($prix * $quantite);

                //AJOUT de l'article dans la table commande
                $db->query("INSERT INTO $db_table_commande (reference, description, prix, image, quantite, montant) VALUES ('$reference', '$description', $prix, '$image', $quantite, $montant)"); // Requête de suppression
            }
        }
?>


<?php
        // Requête permettant d'afficher les données de l'article, a la référence de l'id récuperer
        $resultat = $db->query('SELECT * FROM '.$db_table.' WHERE id = "'.$_GET['id'].'"');
        while ($col = $resultat->fetch()) {
?>

<?php if($_GET['action'] == "confirmer_supprimer"){ ?>

<!-- Début container confirmation de suppression -->
<div class="card card-warning card-outline" style="text-align:center;width: 500px;margin:auto;">

    <div class="card-header">
        <h3 class="card-title">
        <i class="fas fa-edit"></i>
        Demande de Confirmation
        </h3>
    </div>

    <div class="card-body">
        <div class="text-muted mt-3">
            Confirmez-vous la suppression de l'article n°<b><?php echo($col['reference']); ?></b> ?
            <BR><BR>
        </div>

        <form action="" methode="POST">
            <input type="hidden" name="id" value="<?php echo($_GET['id']); ?>">
                <button type="submit" class="btn btn-warning toastrDefaultWarning" name="action" value="annuler">
                Non Annuler
                </button>

                <a href="../catalogue/fleurs.php?id=<?php echo($col['id']);?>&action=supprimer" type="submit" class="btn btn-danger toastrDefaultError" name="action" value="supprimer">
                Oui Supprimer
                </a>
        </form>
    </div>

</div>
<!-- Fin container confirmation de suppression -->

<?php } else { ?>

        <?php if ($_GET['action'] == "ajouter") {?>
            <table class="table align-middle">
            <thead>
                <tr>
                    <th scope="col"><?php echo($page_panier_titre_col1) ?></th>
                    <th scope="col"><?php echo($page_panier_titre_col2) ?></th>
                    <th scope="col"><?php echo($page_panier_titre_col3) ?></th>
                    <th scope="col"><?php echo($page_panier_titre_col4) ?></th>
                    <th scope="col"><?php echo($page_panier_titre_col5) ?></th>
                    <th scope="col"><?php echo($page_panier_titre_col6) ?></th>
                    <th scope="col"><?php echo($page_panier_titre_col7) ?></th>
                </tr>
            </thead>

                    <form action="commander.php?id=<?php echo($col['id']);?>&action=commander" methode="POST">
                    <tr>
                        <td scope="row" name="id">
                            <?php if($_GET['action'] == "ajouter"){ ?><?php echo($col['reference']); ?><?php }?>
                        </td>

                        <td name="description">
                            <?php if($_GET['action'] == "ajouter"){ ?><?php echo($col['description']); ?><?php }?>
                        </td>

                        <td name="prix">
                            <?php if($_GET['action'] == "ajouter"){ ?><?php $prix = $col['prix']; echo($col['prix']); ?><?php }?>
                        </td>

                        <td name="image">
                            <?php if($_GET['action'] == "ajouter"){ ?><img src=<?php echo($col['image']); ?> alt="aniwa" id="img_tab"><?php }?>
                        </td>

                        <td>
                            <?php if($_GET['action'] == "ajouter"){ ?><?php $quantite = 1;?>
                                                                        <input style="width:50px;" class="form-control form-control-sm" type="number" name="quantite" value="<?php echo($quantite); ?>">
                                                                        <button class="btn btn-primary btn-sm" name="action" value="appliquer">Appliquer</button>
                                                                        <?php } ?>
                        </td>

                        <td>
                            <?php if($_GET['action'] == "ajouter"){ ?><?php $montant = ($prix * $quantite); echo($montant); ?><?php }?>
                        </td>

                        <td>
                            <a class="btn btn-danger btn-sm" title="supprimer l'article n° <?php echo($col['reference']); ?>" href="panier.php?id=<?php echo($col['id']);?>&action=confirmer_supprimer">
                                <img src="../images/Accueil/cady.png" alt="image_panier_supp">
                            </a>
                        </td>
                    </tr>
                    

                    </table>
        <br>
        <p>Montant total de la commande : <?php echo("<strong>$montant</strong>");// echo($total); ?></p>
        <br>
        <div style="float:left">
            <!-- <button type="submit" class="btn btn-primary" name="action" value="commander">Commander</button>-->
            <a class="btn btn-primary" href="../commande/commander.php?id=<?php echo($col['id']);?>&action=commander">Commander</a>
            <button type="submit" class="btn btn-warning toastrDefaultWarning" name="action" value="annuler">Annuler</button>
        </div>
        </form>
        <?php } ?>
        <?php } ?>
        <?php } ?>