<?php ob_start(); //  ne pas modifier
$titre = "Exo 22 - Formulaires"; // Mettre le titre de la page
?>

<form action="" method="POST">
    <input type="number" name="nombre" placeholder="saisir un nombre">
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

if(isset($_POST["nombre"]) && $_POST["nombre"] !== ""){
    echo "<p>{$_POST['nombre']} ".estPair($_POST['nombre'])."</p>";
}

function estPair(int $v): string
{
    return ($v%2===0) ? "est pair" : "est impair";
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