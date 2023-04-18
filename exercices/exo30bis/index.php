<!DOCTYPE html>
<html lang="fr">
<?php
require_once './Arme.php';
require_once './Joueur.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours PHP</title>
</head>

<body>
    <h1>Exo 30bis</h1>

    

    <?php
        $arme1 = new Arme("Hache", 17);
        $arme2 = new Arme("Massue", 35);

        $joueur1 = new Joueur("Toto", 4, 100, $arme1->getId());
        $joueur2 = new Joueur("Riri", 6, 100, $arme2->getId());

        $joueur1->afficherJoueur();
        echo "=========================<br>";
        $joueur2->afficherJoueur();

    ?>

</body>

</html>