<?php ob_start(); //  ne pas modifier
$titre = "Exo 16 - Tableaux"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

$hommes = ["Marc", "Luc", "Clément", "Vincent"];
$femmes = ["Mathilde", "Lucie", "Véronique"];

$personnes = [$hommes, $femmes];

foreach($personnes as $k => $personne){
    if($k != 0){
        echo "******************<br>";
    }

    foreach($personne as $k2 => $v){

        echo "$k2 : $v<br>";
    }

}

foreach($personnes as $k => $personne){
    echo ($k === 0) ? "" : "*************<br>";
    foreach($personne as $k2 => $v){

        echo "$k2 : $v<br>";
    }

}

?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>