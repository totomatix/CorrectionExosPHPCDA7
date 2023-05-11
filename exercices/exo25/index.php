<?php ob_start(); //  ne pas modifier
$titre = "Exo 25 - Bonus"; // Mettre le titre de la page
?>
<!-- mettre votre code ici -->
<link rel="stylesheet" href="style.css">
<?php
require_once('../../functions/mesFonctions.php');


?>

<div id="container_flex">
    <div>
        <h2>Tableau 1</h2>
        <?php
        $tab1 = [2,6,10,20,8,14];
        afficherTableau($tab1);
        echo '<br>';
        echo 'La moyenne est de : ' . moyenne($tab1) . '<br>';
        if (estTableauPair($tab1)) {
            echo "Le tableau contient que des valeurs paires.";
        } else {
            echo 'Le tableau ne contient pas que des valeurs paires.';
        }
        ?>
    </div>
    <div>
        <h2>Tableau 2</h2>
        <?php
        $tab2 = [12,15,6,15,20,11,9,10];
        afficherTableau($tab2);
        echo '<br>';
        echo 'La moyenne est de : ' . moyenne($tab2) . '<br>';
        if (estTableauPair($tab2)) {
            echo "Le tableau contient que des valeurs paires.";
        } else {
            echo 'Le tableau ne contient pas que des valeurs paires.';
        }
        ?>
    </div>
</div>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>