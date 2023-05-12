<?php ob_start(); //  ne pas modifier
$titre = "Exo 29 - Attribut statique"; // Mettre le titre de la page
?>
<!-- mettre votre code ici -->
<?php
require_once './Maison.php';

//création des maisons
$m1 = new Maison(4,98,1982);
$m2 = new Maison(3,110,2005);
$m3 = new Maison(2,78,1998);
$m4 = new Maison(6,135,2017);

$maisons = [$m1,$m2,$m3,$m4];

// affichage des maisons dans un tableau html
?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Date</th>
            <th>Nombre de chambres</th>
            <th>Surface</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($maisons as $maison) {
                echo '<tr>';
                echo '<td>'. $maison->getIdentifiant() .'</td>';
                echo '<td>'. $maison->getAnneeConstruction() .'</td>';
                echo '<td>'. $maison->getNbChambres() .'</td>';
                echo '<td>'. $maison->getSurface() .'</td>';
                echo '</tr>';
            }
        ?>
    </tbody>
</table>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>