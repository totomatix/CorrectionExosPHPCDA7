<?php ob_start(); //  ne pas modifier
$titre = "Exo 28 - Private et Getters"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
/** import de la classe Voiture */
require_once 'Voiture.php';

/** Création des voitures */
$voit1 = new Voiture("Astra", "Opel", "Rouge", 2017);
$voit2 = new Voiture("Twingo", "Renault", "Vert", 2019);
$voit3 = new Voiture("308", "Peugeot", "Bleu", 2020);
$voit4 = new Voiture("Tigra", "Opel", "Noir", 2021);
$voit6 = new Voiture("Corsa", "Opel", "Noir", 2019);
$voit5 = new Voiture("Mégane", "Renault", "Rouge", 2019);

/** Création du tableau d'objets */
$voitures = [$voit1, $voit2, $voit3, $voit4, $voit5, $voit6];

/** Tableaux qui serviront à remplir les selects en HTML */
$marques = ["Toutes", "Peugeot", "Renault", "Opel", "Dacia"];
$annees = ["Toutes", 2017, 2018, 2019, 2020, 2021];

?>

<!-- Formulaire de "filtrage des voitures -->
<form action="" method="POST">
    <div class="row">
        <div class="input-field col s12 m6">
            <select name="marque" id="marque">
                <!-- <option value="" disabled selected>Choisir une marque</option> -->
                <?php foreach ($marques as $marque) : ?>
                    <option value="<?= $marque ?>"><?= $marque ?></option>
                <?php endforeach; ?>
            </select>
            <label for="marque">Marque</label>
        </div>
        <div class="input-field col s12 m6">
            <select name="annee" id="annee">
                <!-- <option value="" disabled selected>Choisir une année</option> -->
                <?php foreach ($annees as $annee) : ?>
                    <option value="<?= $annee ?>"><?= $annee ?></option>
                <?php endforeach; ?>
            </select>
            <label for="annee">Année</label>
        </div>
    </div>

    <button class="btn waves-effect waves-light" type="submit">Valider
        <i class="material-icons right">send</i>
    </button>
    <a href="index.php" class="waves-effect waves-light btn red accent-2">Reset</a>
</form>
<div class="row">
</div>
<div class="divider"></div>

<?php

function debug($v)
{
    echo "<pre>";
    var_dump($v);
    echo "</pre>";
}

function afficherToutesLesVoitures($v){
    foreach($v as $voiture){
        echo $voiture;
    }
}

function afficherVoituresFiltrees(array $v, string $m, string $a){
    foreach($v as $voiture){
        if(($voiture->getMarque() === $m || $m === "Toutes") && ($voiture->getAnnee() === (int)$a || $a === "Toutes")){
            echo $voiture;
        }
    }
}

if(isset($_POST['marque']) && !empty($_POST['marque']) &&
     isset($_POST['annee']) && !empty($_POST['annee'])) {
    afficherVoituresFiltrees($voitures, $_POST['marque'], $_POST['annee']);
} else {
    afficherToutesLesVoitures($voitures);
}

function collecteMarques(array $t): array
{
    $marques = ["Toutes"];
    foreach($t as $voiture){
        if(!in_array($voiture->getMarque(), $marques)){
            $marques[] = $voiture->getMarque();
        }
    }
    return $marques;
}

debug(collecteMarques($voitures));


?>


<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>