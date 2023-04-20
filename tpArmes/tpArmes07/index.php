<?php
session_start();

if(!isset($_SESSION["epee"])) $_SESSION["epee"] = 1;
if(!isset($_SESSION["arc"])) $_SESSION["arc"] = 1;
if(!isset($_SESSION["hache"])) $_SESSION["hache"] = 1;
if(!isset($_SESSION["fleau"])) $_SESSION["fleau"] = 1;

ob_start(); //  ne pas modifier
$titre = "TP 07 - La session"; // Mettre le titre de la page
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