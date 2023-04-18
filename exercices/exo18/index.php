<?php ob_start(); //  ne pas modifier
$titre = "Exo 18 - Les tableaux"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$notes = [
    [12,15,11,9,18],
    [11,14,10,4,20,8,2],
    [12,15,6,15,20,11,9],
    [15,20,14,12,10,5,3]
];

/**
 * Avec un foreach
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

/**
 * Avec un for
 *
 * @param array $notes
 * @return float
 */
function moyenne1(array $notes): float
{
    $tmp = 0;
    for ($i=0; $i < count($notes); $i++) { 
        $tmp += $notes[$i];
    }
    return round($tmp/count($notes), 2);
}

foreach ($notes as $index => $tableau) {
    echo "La moyenne des notes de l'élève <b>" .($index + 1). "</b> est de <b>" .moyenne($tableau). "</b><br>";
}
echo "=========================<br>";
foreach ($notes as $index => $tableau) {
    echo "La moyenne des notes de l'élève <b>" .($index + 1). "</b> est de <b>" .moyenne1($tableau). "</b><br>";
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