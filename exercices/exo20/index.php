<?php ob_start(); //  ne pas modifier
$titre = "Exo 20 - Tableaux"; // Mettre le titre de la page
?>
<!-- mettre votre code ici -->
<?php
$personnes = [
    // pour le sexe : true = homme
    [
        "nom" => "Clément",
        "age" => 25,
        "sexe" => true,
        "notes" => [12, 15, 11, 9.56, 18]
    ],
    [
        "nom" => "Mathilde",
        "age" => 19,
        "sexe" => false,
        "notes" => [11, 14, 10, 4, 20, 8, 2]
    ],
    [
        "nom" => "Oscar",
        "age" => 15,
        "sexe" => true,
        "notes" => [12, 15, 6, 15, 20, 11, 9]
    ],
    [
        "nom" => "Toto",
        "age" => 15,
        "sexe" => true,
        "notes" => []
    ]
];
AfficherPersonnes($personnes);

function AfficherPersonnes($tab_personnes)
{
    // parcours du 1er niveau du tableau
    foreach ($tab_personnes as $personne) {
        // parcours du tableau de chaque personne
        foreach ($personne as $propriete => $value) {
            if ($propriete == 'sexe') {
                // affichage du sexe
                echo "$propriete : " . ((!$value) ? 'femme' : 'homme') . '<br>';
            } else if ($propriete == 'notes') {
                if (count($value) >= 1) {
                    // affichage de chacune des notes et de la moyenne
                    foreach ($value as $index => $note) {
                        // affichage des notes une par une 
                        echo "Note " . ($index + 1) . " : $note<br>";
                    }
                    // affichage de la moyenne
                    echo "La moyenne est de : " . moyenne($value) . '<br>';
                } else {
                    echo "Cette personne n'a pas de notes<br>";
                }


            } else {
                // affichage du nom ou de l'âge
                echo "$propriete : $value<br>";
            }
        }
        echo "=============<br>";
    }
}

function moyenne(array $tab): float
{
    return round(array_sum($tab) / count($tab), 2);
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