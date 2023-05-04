<?php ob_start(); //  ne pas modifier
$titre = "Exo 18 - Les tableaux"; // Mettre le titre de la page
?>
<!-- mettre votre code ici -->
<?php

// création du tableau de tableaux de notes
$tableau_notes = [
    [12,4,7,18],
    [14,14,17,8],
    [2,4,7,9],
    [12,4,7,18,20]
];

// affichage de la moyenne des notes de chaque élève
foreach ($tableau_notes as $index => $notes_eleve) {
    echo "La moyennne des notes de l'élève <b>" . ($index+1) . '</b> est de <b> ' . moyenne($notes_eleve) . '</b><br>'; 
}

// Mes fonctions
function moyenne(array $tab) : float
{
    return round(array_sum($tab)/count($tab),2);
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