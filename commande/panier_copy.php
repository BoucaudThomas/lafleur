<?php
    include('config_variable.php');
    include('../connect_db.php');
    include('../include/header.php');
?>
<?php      
    // Ajout des éléments de l'id
    
    if (isset($_POST["id"]) AND isset($_POST["description"]) AND isset($_POST["prix"]) AND isset($_POST["image"])) {
        $id = ($_POST["id"]); // Récuération du numéro de ligne à ajouter
        $description = $_POST["description"];
        $prix = ($_POST["prix"]);
        $image = ($_POST["image"]);
    }
?>

                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th scope="col"><?php echo($page_panier_titre_col1) ?></th>
                            <th scope="col"><?php echo($page_panier_titre_col2) ?></th>
                            <th scope="col"><?php echo($page_panier_titre_col3) ?></th>
                            <th scope="col"><?php echo($page_panier_titre_col4) ?></th>
                        </tr>
                    </thead>
                    <?php var_dump($id) ?>

                            <form action="commander.php" methode="POST">
                            <tr>
                                <td scope="row">
                                    <?php echo($id); ?>
                                </td>
                                <td>
                                    <?php echo($description); ?>
                                </td>
                                <td>
                                    <?php echo($prix); ?>
                                </td>
                                <td>
                                    <img src="<?php echo($image); ?>">
                                </td>
                            </tr>

                </table>

                <div style="float:left">
                    <button type="submit" class="btn btn-primary" name="action" value="commander">Commander</button> 
                    <button type="submit" class="btn btn-warning toastrDefaultWarning" name="action" value="annuler">Annuler</button>
                </div>
                </form>