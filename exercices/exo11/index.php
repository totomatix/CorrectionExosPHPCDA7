<?php ob_start(); //  ne pas modifier
$titre = "Exo 11 - Boucles"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

$nbChoisi = 122;

// $compteur = 0;

// do{
//     $numTire = rand(100, 999);
//     $compteur++;

//     echo "$compteur : $numTire<br>";
// } while($nbChoisi != $numTire);

// echo "$nbChoisi trouvé en $compteur coups";

echo "<br>============ Méthode 2 ==============<br>";

$compteur = 1;


for($i=rand(100, 999); $i != $nbChoisi; $i=rand(100, 999)){
    echo "Tirage $compteur : $i<br>";
    $compteur++;
}

echo "Tirage $compteur : $i<br>";
echo "$nbChoisi trouvé en $compteur coups";

// echo "<br>============ Méthode 3 ==============<br>";

// $x = 122;
// $guess = random_int(100, 999);
// $nbCoups = 1;

// while($guess != $x){
//     $nbCoups++;
//     $guess = random_int(100, 999);
//     echo "$guess<br>";
// }

// echo "Nombre de coups aléatoires : $nbCoups";


?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>