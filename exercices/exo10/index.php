<?php ob_start(); //  ne pas modifier
$titre = "Exo 10- Boucles"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
echo "============ Méthode 1 ================<br>";
$compteur = 0;

do{
    $nb1 = rand(1, 1000);
    $nb2 = rand(1, 1000);
    $nb3 = rand(1, 1000);
    $compteur++;
    if($nb1 % 2 == 0 && $nb2 % 2 == 1 && $nb3 % 2 == 1){
        echo "$nb1,$nb2,$nb3";
        echo "<br>";
        echo "Résultat obtenu en $compteur coups";
    } else {
        echo "$nb1,$nb2,$nb3";
        echo "<br>";
    }
} while(!($nb1 % 2 == 0 && $nb2 % 2 == 1 && $nb3 % 2 == 1));

echo "<br>============ Méthode 2 ================<br>";

$compteur = 0;

do{
    $nb1 = rand(1, 1000);
    $nb2 = rand(1, 1000);
    $nb3 = rand(1, 1000);
    $compteur++;
    echo "$nb1,$nb2,$nb3";
    echo "<br>";
} while(!($nb1 % 2 == 0 && $nb2 % 2 == 1 && $nb3 % 2 == 1));

echo "Résultat obtenu en $compteur coups";

echo "<br>============= Méthode 3 ===============<br>";

$compteur = 0;

do{
    $nb1 = rand(1, 1000);
    $nb2 = rand(1, 1000);
    $nb3 = rand(1, 1000);
    $compteur++;
    echo "$nb1,$nb2,$nb3";
    echo "<br>";
} while($nb1 % 2 != 0 || $nb2 % 2 != 1 || $nb3 % 2 != 1);

echo "Résultat obtenu en $compteur coups";



?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>