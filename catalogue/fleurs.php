<?php include('config_variable.php');?>
<?php include('../include/header.php');?>
<?php include('../connect_db.php');?>

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

<!--CONTENU PAGE-->
<div class="container" id="content">
            <div class="row">
                <br>
                <br>
            </div>
        </div>
        <div class="container" id="content">
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-8">
                    <h2><?php echo($page_fleur_titre) ?></h2>
                    <p><?php echo($page_fleur_sous_titre) ?></p>
                    <br>
                </div>
                <div class="col-md-2">

                </div>
            </div>
        </div>
        <!--CREATION TABLEAU À 4 COLONNES-->
        <div class="container" id="content">
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-8">
                    <h4></h4>
                    <br>
                    <br>
<!-- Début message d'alerte Ajout (vert)-->
<?php if($_GET['msg'] == "4"){ ?>
      <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i> Message de confirmation</h5>
                    <?php echo($msg4); ?>
      </div>
    <?php } ?>
    <!-- fin message d'alerte -->

    <!-- Début message d'alerte Modif (bleu) -->
    <?php if($_GET['msg'] == "3"){ ?>
      <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-info"></i> Message de Confirmation</h5>
                    <?php echo($msg3); ?>
      </div>
    <?php } ?>
    <!-- fin message d'alerte -->

    <!-- Début message d'alerte Suppression (rouge) -->
    <?php if($_GET['msg'] == "2"){ ?>
      <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Message de Suppression</h5>
                    <?php echo($msg2); ?>
      </div>
    <?php } ?>
    <!-- fin message d'alerte -->

    <!-- Début message d'alerte Annulation (jaune) -->
    <?php if($_GET['msg'] == "1"){ ?>
      <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Message d'Annulation</h5>
                    <?php echo($msg1); ?>
      </div>
    <?php } ?>
    <!-- fin message d'alerte -->
                    <div style="float:right;">
                        <form method="GET">
                        <input class="form-control form-control-sm" type="search" name="q" placeholder="Recherche..." />&nbsp;<input class="btn btn-block btn-secondary btn-sm w-70" type="submit" value="Rechercher" />
                        
                        </form>
                    </div>   

                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th></th>
                                <th scope="col"><?php echo($page_fleurs_titre_col1) ?></th>
                                <th scope="col"><?php echo($page_fleurs_titre_col2) ?></th>
                                <th scope="col"><?php echo($page_fleurs_titre_col3) ?></th>
                                <th scope="col"><?php echo($page_fleurs_titre_col4) ?></th>
                            </tr>
                        </thead>
                        

                        <tbody>
                        <?php

                            if($_GET['q'])
                            {
                            // Rechercher un mot dans le db (q)
                            $q = ($_GET['q']); // Récuération du mot à chercher

                            // Requête de la recherche dans la db
                            $resultat = $db->query(
                                "SELECT * FROM $db_table
                                WHERE reference LIKE '%$q%'
                                OR description LIKE '%$q%'
                                OR prix LIKE '%$q%'"
                                );

                            //$resultat = $db->query('SELECT * FROM recherche_mot ORDER BY id DESC LIMIT 5');

                            }else{
                                $resultat = $db->query("SELECT * FROM $db_table ORDER BY id ASC");
                            }
                            while($col=$resultat->fetch()){
                        ?>

                                <tr>
                                    <form action="../commande/panier.php" methode="POST">
                                        <td>
                                        <!-- <button title="Ajouter la fleur n° <?php //echo($col['id']); ?>" href="panier.php?id=<?php //echo($col['id']); ?>" type="submit" class="btn btn-primary btn-lg" name="action" value="ajouter">Ajouter</button> -->
                                        </td>                        
                                        <td scope="row" id="tab_fleur" name="id">
                                            <a title="Ajouter la fleur n° <?php echo($col['reference']); ?>" href="../commande/panier.php?id=<?php echo($col['id']);?>&action=ajouter">
                                                <?php echo($col['reference']); ?>
                                            </a>
                                        </td>
                                        <td name="description">
                                            <?php
                                                //affichage du libelle de la fleur
                                                echo($col['description']);
                                            ?>
                                        </td>
                                        <td name="prix">
                                            <?php
                                                //affichage prix
                                                echo($col['prix'])."€"; 
                                            ?>
                                        </td>
                                        <td name="image">
                                            <img src=
                                            <?php
                                                //affichage des images
                                                echo($col['image']); 
                                            ?>>
                                        </td>i
                                </tr>
                       <?php
                       //accolade de fin de boucle
                                }
                                ?>
                                
                        </tbody>
                    </table>
                    
                </div>
                <div class="col-md-2">
                    
                </div>
                </form>
            </div>
        </div>
</div>

<?php include('../include/footer.php'); ?>
<?php include('../script/script.php'); ?>

    <style>
            .divButton{
                visibility: visible;
                transition: 0.3s;
                opacity: 1;
            }
            
            .floating-btn{
                box-shadow: 2px 2px 3px #999;
                position: fixed;
                right: 500px;
                bottom: 20px;
                cursor: pointer;
                
            }
            .floating-btn:active{
                background: #007D63;
            }
        </style>