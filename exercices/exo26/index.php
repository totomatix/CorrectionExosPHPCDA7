<?php ob_start(); //  ne pas modifier
$titre = "Exo 26 - Bonus"; // Mettre le titre de la page
?>
<!-- mettre votre code ici -->
<?php
$animal1 = ['nom'=>'Rantamplan','age'=>10,'type'=>'chien'];
$animal2 = ['nom'=>'Garfield','age'=>2,'type'=>'chat'];
$animal3 = ['nom'=>'Mabrouk','age'=>12,'type'=>'chien'];
$animal4 = ['nom'=>'Miaou','age'=>5,'type'=>'chat'];

$animaux = [$animal1,$animal2,$animal3,$animal4];
?>

<button><a href="https://form02.2isa.org/exercices/exo26/?type=tous">Tous</a></button>
<button><a href="https://form02.2isa.org/exercices/exo26/?type=chien">Chien</a></button>
<button><a href="https://form02.2isa.org/exercices/exo26/?type=chat">Chat</a></button>
<button><a href="https://form02.2isa.org/exercices/exo26/">Reset</a></button><br>

<?php
$type = '';
if (isset($_GET['type'])) {
    $type = htmlentities($_GET['type']);
}

if (!empty($type)) {
    foreach ($animaux as $animal) {
        if ($type == 'tous' || $animal['type'] == $type ) {
            echo "nom : " . $animal['nom']  . '<br>';
            echo "âge : " . $animal['age'] . '<br>';
            echo "type : " . $animal['type'] . '<br>';
            echo '================<br>';
        }
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