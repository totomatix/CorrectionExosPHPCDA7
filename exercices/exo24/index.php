<?php ob_start(); //  ne pas modifier
$titre = "Exo 24 - Bonus"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
function debug($v)
{
    echo "<pre>";
    var_dump($v);
    echo "</pre>";
}

$nbLignes = 10;
$nbColonnes = 12;

$lignes = [];

for ($i = 1; $i <= $nbLignes; $i++) {
    $colonne = [];
    for ($j = 1; $j <= $nbColonnes; $j++) {
        $colonne[] = $i * $j;
    }
    $lignes[] = $colonne;
}


?>

<table>
    <?php for ($i = 0; $i < $nbLignes; $i++) : ?>
        <tr>
            <?php for ($j = 0; $j < $nbColonnes; $j++) : ?>
                <td>
                    <?= $lignes[$i][$j]; ?>
                </td>
            <?php endfor ?>
        </tr>
    <?php endfor ?>
</table>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>