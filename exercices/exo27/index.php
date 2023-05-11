<?php ob_start(); //  ne pas modifier
$titre = "Exo 27 - Les objets"; // Mettre le titre de la page
?>
<!-- mettre votre code ici -->
<?php
require_once './Animal.php';

$animal1 = new Animal('Rantamplan',10,'chien');
$animal2 = new Animal('Garfield',2,'chat');
$animal3 = new Animal('Mabrouk',12,'chien');
$animal4 = new Animal('Miaou',5,'chat');
$animal5 = new Animal('Fox',7,'renard');

$animaux = [$animal1,$animal2,$animal3,$animal4,$animal5];
?>

<button><a href="https://form02.2isa.org/exercices/exo27/?type=tous">Tous</a></button>
<button><a href="https://form02.2isa.org/exercices/exo27/?type=chien">Chien</a></button>
<button><a href="https://form02.2isa.org/exercices/exo27/?type=chat">Chat</a></button>
<button><a href="https://form02.2isa.org/exercices/exo27/">Reset</a></button><br>

<?php
$type = '';
if (isset($_GET['type'])) {
    $type = htmlentities($_GET['type']);
}

if (!empty($type)) {
    foreach ($animaux as $animal) {
        if ($type == 'tous' || $animal->type == $type ) {
            echo $animal;
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