<?php
try {
    //connexion à la BDD
    $db = new PDO('mysql:host=localhost;dbname=lafleur','root', '');
    //requête qui fixe l'encodage de la connexion au serveur à utf-8 pour le reste du script
    $db->exec("SET CHARACTER SET utf8");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
?>