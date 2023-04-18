<?php ob_start(); //  ne pas modifier
$titre = "Exo 15 - Tableaux"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

function supVoyelles(string $s)
{
    return str_replace(["a","e","i","o","u","y"], "", $s);
}

function myStrReplace(string $s)
{
    $voyelles = ["a","e","i","o","u","y"];
    $result = "";

    $sLen = strlen($s);
    $voyLen = count($voyelles);

    for ($i=0; $i < $sLen; $i++) { 
        $trouve = false;

        for ($j=0; $j < $voyLen; $j++) { 
            if($s[$i] == $voyelles[$j]){
                $trouve = true;
                break;
            }
        }

        if(!$trouve){
            $result .= $s[$i];
        }
    }

    return $result;
}

echo supVoyelles("bordure en plastique");
echo "<br>";
echo myStrReplace("bordure en plastique");


?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>