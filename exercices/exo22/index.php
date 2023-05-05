<?php ob_start(); //  ne pas modifier
$titre = "Exo 22 - Formulaires"; // Mettre le titre de la page
?>

<form action="" method="post">
    <label for="nombre"></label>
    <input type="number" name="nombre" id="nombre" required>
    <button type="submit">Valider</button>
</form>

<?php
    // $nombre = '';
    if (isset($_POST['nombre'])) {
        $nombre = htmlentities($_POST['nombre']);
    }
    echo $nombre.'<br>';
    var_dump(empty($nombre));
    if (!empty($nombre) || $nombre==='0') {
        echo "Le nombre $nombre est ". (($nombre%2==0) ? "pair." : "impair.");
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