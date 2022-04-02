<?php include('config_variable.php');?>
<?php include('../include/header.php');?>
<?php include('../connect_db.php');?>

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
                            <!--<caption>Nos compositions</caption>-->
                            <?php

                                //mise en place de la boucle d'affichage des produits
                                $resultat = $db->query("SELECT * FROM $db_table");
                                while($col=$resultat->fetch()){
                            ?>

                                <tr>
                                    <form action="../commande/panier.php" methode="POST">
                                        <td>
                                        <!-- <button title="Ajouter la fleur n° <?php //echo($col['id']); ?>" href="panier.php?id=<?php //echo($col['id']); ?>" type="submit" class="btn btn-primary btn-lg" name="action" value="ajouter">Ajouter</button> -->
                                        </td>                        
                                        <td scope="row" id="tab_fleur" name="id">
                                            <a title="Ajouter la fleur n° <?php echo($col['id']); ?>" href="../commande/panier.php?id=<?php echo($col['id']);?>&action=ajouter">
                                                <?php echo($col['id']); ?>
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
        <!--FIN DE BOUCLE-->
</div>

<?php include('../include/footer.php'); ?>

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