<?php ob_start(); //  ne pas modifier
$titre = "TP 02 - Tableaux associatifs"; // Mettre le titre de la page
?>
<!-- mettre votre code ici -->
<?php

?>

<?php
    /**
     * Ne pa modifier
     * permet d'inclure le menu et le template
     */
    $content = ob_get_clean(); 
    require "../../partials/layout.php";
?>