<?php
include("../connect_db.php");
include("config_variable.php");
include("../include/header.php");
?>

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

<div class="container" id="content">
    <div class="container">
        <div class="card card-body" style="display: block;">
            <h2 style="display:block; float:inline-end">Votre commande a été confirmer !</h2>
            <p>Votre commande est en cours de traitement, dès quelle sera expedié nous vous informerons par mail !</p>

            <?php include("../include/footer.php");
