<?php ob_start(); //  ne pas modifier
$titre = "Exo 24 - Bonus"; // Mettre le titre de la page
?>
<!-- mettre votre code ici -->
<?php
// génération du tableau à 2 dimensions contenant les tables de multiplication
$tables_multiplication = [];
for ($i = 1; $i <= 10; $i++) {
    $table = [$i];
    for ($j = 2; $j <= 10; $j++) {
        array_push($table, $i * $j);
    }
    array_push($tables_multiplication, $table);
}


?>

<!-- affichage des tables dans un tableau html -->
<table>
    <?php
        // boucle sur le nombre de tablea de multiplication
        for ($i=0; $i < count($tables_multiplication); $i++) { 
            echo '<tr>';
            // boucle sur toutes les valeurs de la table en cours
            for ($j=0; $j < count($tables_multiplication[$i]); $j++) { 
                echo "<td>".$tables_multiplication[$i][$j]."</td>";
            }
            echo '</tr>';
        }
    ?>
</table>

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>