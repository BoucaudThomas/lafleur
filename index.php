<?php include('config_variable.php');?>
<?php include('include/header.php');?>
<?php include('connect_db.php');?>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
  
<!--CONTENU DE LA PAGE-->
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
                    <h2><?php echo($page_index_titre)?></h2>
                    <br>
                </div>
                <div class="col-md-2">

                </div>
            </div>
        </div>
        <div class="container" id="content">
            <br>
            <img src="assets/ACCUEIL.JPG" alt="image_accueil" id="img_accueil">
            <br>
            <br>
            <center><p><?php echo($page_index_sous_titre) ?></p></center>
            <br>
            <img src="assets/fleur_logo.png" alt="fleur_logo">
            <br>
            <br>
        </div>
        
    </div>
    
<?php
include("include/footer.php");
    
?>
