<?php
ob_start(); //  ne pas modifier
$titre = "Exo 28 - Private et Getters"; // Mettre le titre de la page
require_once './Voiture.php';

?>
<link rel="stylesheet" href="style.css">

<?php
// création des voitures
$v1 = new Voiture("Opel", 'Astra', 2017, 'rouge');
$v2 = new Voiture("Renault", 'Twingo', 2019, 'vert');
$v3 = new Voiture("Peugeot", '308', 2020, 'bleu');
$v4 = new Voiture("Opel", 'Tigra', 2021, 'noir');
$v5 = new Voiture("Renault", 'Mégane', 2019, 'rouge');

$voitures = [$v1, $v2, $v3, $v4, $v5];

// récupération des données pour le filtrage
$marque = '';
if (isset($_POST['marque'])) {
    $marque = $_POST['marque'];
}
$annee = '';
if (isset($_POST['annee'])) {
    $annee = $_POST['annee'];
}


?>
<!-- Formulaire de filtrage -->
<form action="" method="post">
    <div id="flex-container">
        <div>
            <label for="marque">Marque :</label>

            <select name="marque" id="marque">
                <option value="">--Choisissez une marque--</option>
                <?php
                    $marques = ['Opel','Renault','Peugeot'];
                    foreach ($marques as $value) {
                        echo "<option " .(($marque==$value)? 'selected': '') . " value=\"$value\">$value</option>";
                    }
                ?>
                
            </select>
        </div>

        <div>
            <label for="annee">Annee :</label>

            <select name="annee" id="annee">
                <option value="">--Choisissez une année--</option>
                <?php
                    $annees = [2017,2019,2020,2021];
                    foreach ($annees as $value) {
                        echo "<option " .(($annee==$value)? 'selected': '') . " value=\"$value\">$value</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    <button type="submit">Valider</button>
    <button type="reset">Reset</button>
</form>

<?php
// affichage des voitures
foreach ($voitures as $voiture) {
    if (
        ($voiture->getMarque() == $marque || empty($marque)) &&
        ($voiture->getAnnee() == $annee || empty($annee))
    ) {
        echo $voiture;
        echo '=====================<br>';
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