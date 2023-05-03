<?php ob_start(); //  ne pas modifier
$titre = "Exo 17 - Tableaux"; // Mettre le titre de la page
?>
<!-- mettre votre code ici -->
<?php
function moyenne1(array $notes) : float
{
    // moyenne en calculant la somme dans une boucle
    $somme = 0;
    foreach ($notes as $note) {
        $somme += $note;
    }
    return round($somme/count($notes),2);
}
function moyenne2(array $notes) : float
{
    // moyenne en calculant la somme avec la fonction array_sum
    return round(array_sum($notes)/count($notes),2);
}

$notes_marc = [12.4,5,19.3,7.5,13.4 ,2];
$notes_luc = [1,2,3,5,6,9];

// affichage de la moyenne du tableau de notes de Marc en utilisant la fonction moyenne1
echo "La moyenne des notes de Marc est " . moyenne1($notes_marc) . '<br>';
// affichage de la moyenne du tableau de notes de Luc en utilisant la fonction moyenne2
echo "La moyenne des notes de Luc est " . moyenne2($notes_luc) . '<br>';
?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>