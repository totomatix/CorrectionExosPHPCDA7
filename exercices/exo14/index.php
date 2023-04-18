<?php ob_start(); //  ne pas modifier
$titre = "Exo 14 - Fonctions"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php

$a = 56952;
$b = 3444;

function pgcd(int $a, int $b): int
{
    do{
        $reste = $a % $b;
        $a = $b;
        $b = $reste;
    } while($reste != 0);

    return $a;
}

echo "Le PGCD de $a et $b est : " .pgcd($a, $b);
echo "<br>";

function pgcdThierry(int $a, int $b)
{
    if(($a <= 0) || ($b <= 0)){
        return "Veuillez entrer des nombres positifs";
    }
    
    while($b > 0){
        $r = $a % $b;
        $a = $b;
        $b = $r;
    }
    return ($a==1) ? "$a - Au moins un des nombres est premier" : $a;
}

echo "Le PGCD de $a et $b est : " .pgcdThierry($a, $b);
echo "<br>";

function pgcdAdrien(int $a, int $b)
{
    $max = max($a, $b);
    for ($i=$max; $i > 0; $i--) { 
        if($a % $i == 0 && $b % $i == 0){
            return $i;
        }
    }
    return -1;
}

echo "Le PGCD de $a et $b est : " .pgcdAdrien($a, $b);

function estPremier(int $nb): bool
{
    if ($nb % 2 == 0 || $nb == 1){
        return false;
    }

    for ($i = 3; $i <= sqrt($nb) ; $i += 2){
        if ($nb % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "<br>=======================<br>";

for($i=0; $i<=100; $i++){
    if(estPremier($i)){
        echo "$i est premier<br>";
    }
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