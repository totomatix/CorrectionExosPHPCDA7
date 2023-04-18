<?php ob_start(); //  ne pas modifier
$titre = "Exo 17 - Tableaux"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
$marc = [11,15,17,2,9];
$luc = [15,18,19,17,2];

$notes = ["Marc" => $marc, "Luc" => $luc];

function moyenne(array $a)
{
    $cumul = 0;
    foreach ($a as $v) {
        $cumul += $v;
    }

    return round($cumul/count($a));
}

function moyenneClasse(array $c)
{
    $chaine = "";
    foreach($c as $k => $v){
        $chaine .= "La moyenne de $k est de : " .moyenne($v);
        $chaine .= "<br>";
    }
    return $chaine;
}

echo moyenneClasse($notes);

// echo moyenne($Marc);
// echo "<br>";
// echo moyenne($Luc);

?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>