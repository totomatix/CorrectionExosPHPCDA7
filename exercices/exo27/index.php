<?php ob_start(); //  ne pas modifier
$titre = "Exo 27 - Les objets"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
/** require de la classe Animal */
require_once 'Animal.php';

/**
 * Création des objets animaux
 */
$animal1 = new Animal("Rantanplan", 10, "chien");
$animal2 = new Animal("Garfield", 2, "chat");
$animal3 = new Animal("Mabrouk", 12, "chien");
$animal4 = new Animal("Miaou", 5, "chat");
$animal5 = new Animal("Foxxx", 7, "renard");
$animal6 = new Animal("Ratatouille", 8, "rat");
$animal7 = new Animal("Ratatouille", 8, "souris");

/**
 * Création d'un tableau d'objet
 */
$animaux = [$animal1, $animal2, $animal3, $animal4, $animal5, $animal6, $animal7];

/**
 * Affichage d'un tableau d'objets animaux
 * Version de base
 *
 * @param string $s
 * @param array $t
 * @return void
 */
function afficherAnimaux(string $s, array $t)
{
    foreach ($t as $animal) {

        if ($s === "chat") {
            if ($animal->type === $s) {
                echo "<p>";
                $animal->afficherAnimal();
                echo "</p>";
                echo "**************";
            }
        }

        if ($s === "chien") {
            if ($animal->type === $s) {
                echo "<p>";
                $animal->afficherAnimal();
                echo "</p>";
                echo "**************";
            }
        }

        if ($s === "tous") {
            echo "<p>";
            $animal->afficherAnimal();
            echo "</p>";
            echo "**************";
        }
    }
}

/**
 * Affichage d'un tableau d'objets animaux
 * Version optimisée
 *
 * @param string $s
 * @param array $t
 * @return void
 */
function afficherAnimaux1(string $s, array $t)
{
    foreach ($t as $animal) {
        /* Filtrer et afficher les animaux par types */
        if ($animal->type === $s) {
            $animal->afficherAnimal();
            echo "=========<br>";
        }

        if ($s === "tous") {
            $animal->afficherAnimal();
            echo "=========<br>";
        }
    }
}

?>

<div class="row">
    <a href="?type=tous" class="waves-effect waves-light btn">Tous</a>
    <a href="?type=chien" class="waves-effect waves-light btn">Chiens</a>
    <a href="index.php?type=chat" class="waves-effect waves-light btn">Chats</a>
    <a href="index.php" class="waves-effect waves-light btn red accent-2">Reset</a>
</div>
<div class="divider"></div>

<?php
echo '<a href="?type=tous">Tous </a>';

/**
 * Construction dynamique d'élément HTML
 */
$tabTypes = [];
foreach($animaux as $animal) {
    if( !in_array($animal->type, $tabTypes)){
        $tabTypes[] = $animal->type;
        echo '<a href="?type='.$animal->type.' ">'.$animal->type.' </a>';
    }
}

echo '<a href="index.php">Reset</a>';

function afficherAnimalerie()
{
    global $animaux;
    foreach ($animaux as $animal) {
        echo "<p>";
        echo "Nom : " . $animal->nom . "<br>";
        echo "Age : " . $animal->age . "<br>";
        echo "Type : " . $animal->type . "<br>";
        echo "</p>";
        echo "**************";
    }
}

function afficherAnimalerie2()
{
    global $animaux;
    foreach ($animaux as $animal) {
        echo "<p>";
        $animal->afficherAnimal();
        echo "</p>";
        echo "**************";
    }
}

function afficherAnimauxParType(string $t)
{
    global $animaux;
    foreach ($animaux as $animal) {
        if ($animal->type === $t) {
            echo "<p>";
            echo "Nom : " . $animal->nom . "<br>";
            echo "Age : " . $animal->age . "<br>";
            echo "Type : " . $animal->type . "<br>";
            echo "</p>";
            echo "**************";
        }
    }
}

function afficherAnimauxParType2(string $t, array $animaux)
{
    // global $animaux;
    foreach ($animaux as $animal) {
        if ($animal->type === $t) {
            echo "<p>";
            $animal->afficherAnimal();
            echo "</p>";
            echo "**************";
        }
    }
}

if (isset($_GET['type']) && !empty($_GET['type'])) {
    if ($_GET['type'] !== "tous") {
        afficherAnimauxParType($_GET['type']);
    } else {
        afficherAnimalerie();
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