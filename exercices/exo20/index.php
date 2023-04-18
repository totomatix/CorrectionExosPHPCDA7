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
        "notes" => [12, 15, 11, 9, 18]
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
        "nom" => "Piège",
        "age" => 15,
        "sexe" => true,
        "notes" => 12
    ]
];

/**
 * Méthode Adrien
 *
 * @param array $personnes
 * @return void
 */
function afficherPersonnes(array $personnes)
{
    foreach ($personnes as $k => $v) {
        if ($k != 0) {
            echo "******************<br>";
        }

        foreach ($v as $k2 => $v2) {
            if ($k2 === "sexe") {
                echo ($v2 ? "homme" : "femme") . "<br>";
            } elseif ($k2 === "notes") {
                if (is_array($v2)) {
                    foreach ($v2 as $k3 => $v3) {
                        echo $k3 + 1 . " $v3<br>";
                    }
                    $moyenne = round(array_sum($v2) / count($v2));
                    echo "La moyenne des notes est $moyenne<br>";
                } elseif (is_int($v2)) {
                    echo "$k2 : $v2<br>";
                } else {
                    echo "Elève non notyé";
                }
            } else {
                echo "$k2 $v2<br>";
            }
        }
    }
}

/**
 * Affichage du tableau passé en paramètre
 *
 * @param array $t
 * @return void
 */
function afficherPersonnes1(array $t) {
    $longueur = count($t);
    for ($i=0; $i < $longueur; $i++) { 

        foreach ($t[$i] as $key => $value) {
            if($key == "sexe") {
                /* ternaire qui va "transformer" le booleen en string */
                $value = $value ? "homme" : "femme";
            }
            /* si note est un tableau on effectue une boucle pour l'affichage
            et on calcule la moyenne */
            if($key == "notes" && is_array($value)) {
                for ($j=0; $j<count($value); $j++) {
                    echo "Note ".($j+1)." : " . $value[$j]. "<br>";
                }
                echo "La moyenne est de : " .moyenne($value). "<br>";
            }
            /* sinon on affiche juste la valeur */ 
            else {
                echo $key. " : " .$value. "<br>";
            }
        }

        /* on affiche le trait de séparation sauf si c'est le dernier élément du tableau */
        if($i < count($t)-1){
            echo "=============<br>";
        }
    }
}

/**
 * Calcul de la moyenne du tableau passé en paramètre
 *
 * @param array $notes
 * @return float
 */
function moyenne(array $notes): float {
    $tmp = 0;
    foreach($notes as $note) {
        $tmp += $note;
    }
    return round($tmp/count($notes), 2);
}

afficherPersonnes1($personnes);

?>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>