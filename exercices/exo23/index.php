<?php ob_start(); //  ne pas modifier
$titre = "Exo 23 - Formulaires"; // Mettre le titre de la page
?>

<form action="" method="POST">
    <input type="text" name="nb1" placeholder="nb1" required>
    <input type="text" name="nb2" placeholder="nb2" required>
    <input type="text" name="nb3" placeholder="nb3" required>
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

if(
    isset($_POST["nb1"]) && $_POST["nb1"] !== "" &&
    isset($_POST["nb2"]) && $_POST["nb2"] !== "" &&
    isset($_POST["nb3"]) && $_POST["nb3"] !== "" &&
    is_int((int)$_POST["nb1"])
){
    $tableau = [$_POST["nb1"], $_POST["nb2"], $_POST["nb3"]];
    debug($tableau);

    echo "La moyenne des ".count($tableau)." notes est de : " .moyenne($tableau). "<br>";
    echo "La moyenne des ".count($tableau)." notes est de : " .moyenne2($_POST["nb1"], $_POST["nb2"], $_POST["nb3"]). "<br>";
}

function moyenne(array $t): float
{
    $tmp = 0;
    foreach($t as $nb){
        $tmp += $nb;
    }
    return round($tmp/count($t), 3);
}

function moyenne2(... $v): float
{
    $tmp = 0;
    foreach($v as $nb){
        $tmp += $nb;
    }
    return round($tmp/count($v), 3);
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