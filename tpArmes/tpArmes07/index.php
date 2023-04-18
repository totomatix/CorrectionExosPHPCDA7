<?php
session_start();

if(!isset($_SESSION["epee"])) $_SESSION["epee"] = 1;
if(!isset($_SESSION["arc"])) $_SESSION["arc"] = 1;
if(!isset($_SESSION["hache"])) $_SESSION["hache"] = 1;
if(!isset($_SESSION["fleau"])) $_SESSION["fleau"] = 1;

ob_start(); //  ne pas modifier
$titre = "TP 07 - La session"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

require_once "./Arme.php";

$arme1 = new Arme("épée", "Une arme tranchante", 5);
$arme2 = new Arme("arc", "Une arme à distance", 2);
$arme3 = new Arme("hache", "Une arme tranchante ou outil pour couper du bois", 5);
$arme4 = new Arme("fléau", "Une arme du moyen âge", 5);

$armes = [$arme1, $arme2, $arme3, $arme4];

if(isset($_GET["levelepee"])){
    $_SESSION['epee'] = $_GET["levelepee"];
}
if(isset($_GET["levelarc"])){
    $_SESSION['arc'] = $_GET["levelarc"];
}
if(isset($_GET["levelhache"])){
    $_SESSION['hache'] = $_GET["levelhache"];
}
if(isset($_GET["levelfleau"])){
    $_SESSION['fleau'] = $_GET["levelfleau"];
}

$arme1->setLevel($_SESSION['epee']);
$arme2->setLevel($_SESSION['arc']);
$arme3->setLevel($_SESSION['hache']);
$arme4->setLevel($_SESSION['fleau']);

echo "<b>Voici toutes les armes :</b><br>";

foreach ($armes as $arme) {
    echo $arme;
}
?>

<!-- <div class="col s1">
    <form action="" method="post">
        <div class="input-field col s1">
            <select>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </select>
        </div>
    </form>
</div> -->

<?php
/**
 * Ne pa modifier
 * permet d'inclure le menu et le template
 */
$content = ob_get_clean();
require "../../partials/layout.php";
?>