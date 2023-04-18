<?php ob_start(); //  ne pas modifier
$titre = "Exo 29 - Attribut statique"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

require_once 'Maison.php';

$maison1 = new Maison(1982, 4, 98);
$maison2 = new Maison(2005, 3, 110);
$maison3 = new Maison(1998, 2, 78);
$maison4 = new Maison(2017, 6, 135);

$maisons = [$maison1, $maison2, $maison3, $maison4];


?>

<table class="striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Date</th>
            <th>Nb chambres</th>
            <th>Surface</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($maisons as $maison) : ?>
            <tr>
                <td><?= $maison->getIdMaison(); ?></td>
                <td><?= $maison->getAnnee(); ?></td>
                <td><?= $maison->getNbChambres(); ?></td>
                <td><?= $maison->getSurface(); ?></td>
            </tr>
        <?php endforeach; ?>
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