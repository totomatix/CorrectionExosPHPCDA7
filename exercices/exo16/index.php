<?php ob_start(); //  ne pas modifier
$titre = "Exo 16 - Tableaux"; // Mettre le titre de la page
?>
<!-- mettre votre code ici -->
<?php
$noms_masculins = ['Marc','Luc','Clément','Vincent'];
$noms_feminins = array('Mathilde','Lucie','Véronique');

// affichage 1er tableau
for ($i=0; $i < count($noms_masculins); $i++) { 
    echo "$i : $noms_masculins[$i]<br>";
}

echo '******************<br>';
// affichage 2eme tableau
foreach ($noms_feminins as $indice => $prenom) {
    echo "$indice : $prenom<br>";
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