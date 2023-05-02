<?php ob_start(); //  ne pas modifier
$titre = "Exo 14 - Fonctions"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
function PGCD(int $nb1, int $nb2) : int
{
    $reste = -1;
    $res = 0;
    while ($reste != 0) {
        $reste = $nb1 % $nb2;
        if ($reste==0) {
            return $res;
        }
        $res = $reste;
        $nb1 = $nb2;
        $nb2 = $reste;
    }
}

echo "Le PGCD de 80 et 692 est : " . PGCD(80,692) . '<br>';
echo "Le PGCD de 56952 et 3444 est : " . PGCD(56952,3444);
?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>