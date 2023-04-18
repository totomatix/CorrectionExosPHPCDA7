<?php ob_start(); //  ne pas modifier
$titre = "Exo 19 - Tableaux"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

$clement = [
    "nom" => "Clément",
    "age" => 25,
    "sexe" => true
];

$mathilde = [
    "nom" => "Mathilde",
    "age" => 19,
    "sexe" => false
];

$personnes = [$clement, $mathilde];

foreach($personnes as $k1 => $personne){
    if($k1 != 0){
        echo "******************<br>";
    }
    foreach($personne as $k => $v){
        if($k === "sexe"){
            $v = $v ? "homme" : "femme";
        }
        echo "$k : $v<br>";
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