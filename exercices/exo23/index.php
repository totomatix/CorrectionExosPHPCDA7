<?php ob_start(); //  ne pas modifier
$titre = "Exo 23 - Formulaires"; // Mettre le titre de la page
?>
<!-- mettre votre code ici -->
<form action="" method="post">
    <label for="note1">Note 1</label>
    <input type="number" name="note1" id="note1" required>
    <label for="note2">Note 2</label>
    <input type="number" name="note2" id="note2" required>
    <label for="note3">Note 3</label>
    <input type="number" name="note3" id="note3" required>
    <button type="submit">Valider</button>
</form>
<?php
$note1 = '';
$note2 = '';
$note3 = '';
if (isset($_POST['note1'])) {
    $note1 = htmlentities($_POST['note1']);
}
if (isset($_POST['note2'])) {
    $note2 = htmlentities($_POST['note2']);
}
if (isset($_POST['note3'])) {
    $note3 = htmlentities($_POST['note3']);
}
if (is_numeric($note1) && is_numeric($note2) && is_numeric($note3) ) {
    echo "La moyenne des 3 notes est de " . moyenne([$note1,$note2,$note3]);
} else {
    echo "Rentrez les 3 notes";
}

function moyenne(array $tab)
{
    return round(array_sum($tab)/count($tab),2);
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