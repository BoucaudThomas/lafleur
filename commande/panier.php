<?php
    include('config_variable.php');
    include('../connect_db.php');
    include('../include/header.php');
?>


<?php
    // AJOUTER les données dans la db         
    if($_GET['action'] == "ajouter")
        {   
            // Récupération des données du formulaire à ajouter
            $id = ($_GET['id']);
        }
?>

<?php
        //mise en place de la boucle d'affichage des produits
        //$resultat = $db->query('SELECT * FROM '.$db_table.' WHERE id = "'.$id.'"');
        $resultat = $db->query('SELECT * FROM '.$db_table.' WHERE id = "'.$_GET['id'].'"');
        while ($col = $resultat->fetch()) {
?>
        <?php if ($_GET['action'] == "ajouter") {?>
            <table class="table align-middle">
            <thead>
                <tr>
                    <th scope="col"><?php echo($page_panier_titre_col1) ?></th>
                    <th scope="col"><?php echo($page_panier_titre_col2) ?></th>
                    <th scope="col"><?php echo($page_panier_titre_col3) ?></th>
                    <th scope="col"><?php echo($page_panier_titre_col4) ?></th>
                </tr>
            </thead>

                    <form action="commander.php?id=<?php echo($col['id']);?>&action=commander" methode="POST">
                    <tr>
                        <td scope="row" name="id">
                            <?php if($_GET['action'] == "ajouter"){ ?><?php echo($col['id']); ?><?php }?>
                        </td>

                        <td name="description">
                            <?php if($_GET['action'] == "ajouter"){ ?><?php echo($col['description']); ?><?php }?>
                        </td>

                        <td name="prix">
                            <?php if($_GET['action'] == "ajouter"){ ?><?php echo($col['prix']); ?><?php }?>
                        </td>

                        <td name="image">
                            <?php if($_GET['action'] == "ajouter"){ ?><img src=<?php echo($col['image']); ?> alt="aniwa" id="img_tab"><?php }?>
                        </td>
                    </tr>

        </table>

        <div style="float:left">
            <!-- <button type="submit" class="btn btn-primary" name="action" value="commander">Commander</button>-->
            <a class="btn btn-primary" href="../commande/commander.php?id=<?php echo($col['id']);?>&action=commander">Commander</a>
            <button type="submit" class="btn btn-warning toastrDefaultWarning" name="action" value="annuler">Annuler</button>
        </div>
        </form>
        <?php } ?>
        <?php } ?>