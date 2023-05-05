<?php ob_start(); //  ne pas modifier
$titre = "Exo 21 - Formulaires"; // Mettre le titre de la page
?>
<!-- mettre votre code ici -->
<form action="" method="get">
    <label for="pseudo"></label>
    <input type="text" name="pseudo" id="pseudo" required>
    <label for="age"></label>
    <input type="number" name="age" id="age" required>
    <button type="submit">Valider</button>
</form>

<?php
    $pseudo = '';
    if (isset($_GET['pseudo'])) {
        $pseudo = htmlentities($_GET['pseudo']);
    }
    $age = '';
    if (isset($_GET['age'])) {
        $age = htmlentities($_GET['age']);
    }
    if (!empty($pseudo) && !empty($age)) {
        echo "$pseudo a $age ans.";
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