<?php ob_start(); //  ne pas modifier
$titre = "Exo 21 - Formulaires"; // Mettre le titre de la page
?>

<form action="" method="GET">
    <input type="text" name="nom" placeholder="Votre pseudo">
    <input type="text" name="age" placeholder="votre âge">
    <input type="submit" value="Valider">

</form>
<!-- mettre votre code ici -->
<?php
    function debug($v)
    {
        echo "<pre>";
        var_dump($v);
        echo "</pre>";
    }

    debug($_GET);

    if(
        isset($_GET["nom"]) && $_GET["nom"] !== "" &&
        isset($_GET["age"]) && !empty($_GET["age"])){

        echo "<p>".$_GET['nom']." a ". $_GET['age']." ans</p>";
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