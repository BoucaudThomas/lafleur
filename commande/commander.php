<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Site LAFLEUR</title>
</head>
<body>
<form action="envoie.php" method="POST">

<section class="commander">
    <h1>Commander</h1>

    <strong><label for="nom">Saisissez votre NOM et Prénom</label></strong>
    <input type="text" id="nom" name="name" placeholder="NOM Prénom" required>

    <br>

    <strong><label for="adresse">Adresse personnelle</label></strong>
    <input type="text" id="adresse" name="adress" placeholder="Votre adresse" required>

    <br>

    <strong><label for="cp">Code postal</label></strong>
    <input type="number" id="codepostal" name="cp" placeholder="971.." required>

    <br>

    <strong><label for="ville">Ville</label></strong>
    <input type="text" id="ville" name="city" placeholder="Ville" required>

    <br>

    <strong><label for="email">Mail</label></strong>
    <input type="text" id="email" name="mail" placeholder="wxc@gmail.com" required>

    <br><br>

    <button type="submit" name="envoyer" id="send">Envoyer</button>
    <button type="reset" name="effacer" id="delete">Effacer</button>
</section>

</form>
</body>
</html>