<?php include('config_variables.php');?>
        <!DOCTYPE html>
        <html lang="fr">
        <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?php echo($page_titre) ?></title>
                <link rel="stylesheet" href="../css/style.css">
                <link rel="stylesheet" href="../css/bootstrap.css">
           
            </head>
            <body>
            <div class="container-fluid" id="bg">
            <!-- Création en-tête -->
            <div class="container" id="corps">
            <div class="row">
            <!-- AJOUT COLONNE AVEC IMAGE -->
            <div class="col-md-auto">
            <img src="<?php echo($page_header_logo);?>" alt="Logo_Lafleur">
            </div>
            <!-- AJOUT COLONNE AVEC MENU -->
            <div class="col-md-2">
            <ul id="menu">
            <b><li><a href="http://127.0.0.1:8080/edsa-LafleurExamen/index.php" id="lien"><?php echo($page_header_accueil) ?></a></li></b>
            
            </ul>
            </div>
            <div class="col-md-2">
            <ul id="menu">
            <b><li><a href="http://127.0.0.1:8080/edsa-LafleurExamen/catalogue/fleurs.php" id="lien"><?php echo($page_header_catalogue) ?></a></li></b>
            </ul>
            </div>
            <div class="col-md-2">
            <ul id="menu">
            <b><li><a href="http://127.0.0.1:8080/edsa-LafleurExamen/commande/panier.php" id="lien"><?php echo($page_header_panier) ?></a></li></b>
            </ul>
            </div>
            <div class="col-md-2">
            <ul id="menu">
            
            <b><li><a href="http://127.0.0.1:8080/edsa-LafleurExamen/client/connexion_client.php" id="lien"><?php echo($page_header_connexion) ?></a></li></b>
            
            
            </ul>
            </div>
            
            </div>
            
</div>
