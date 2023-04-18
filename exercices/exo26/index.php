<?php ob_start(); //  ne pas modifier
$titre = "Exo 26 - Bonus"; // Mettre le titre de la page
?>

<!-- mettre votre code ici -->
<?php
function debug($v)
{
    echo "<pre>";
    var_dump($v);
    echo "</pre>";
}

$t1 = [
    "nom" => "Rantanplan",
    "âge" => 10,
    "type" => "chien"
];

$t2 = [
    "nom" => "Mabrouk",
    "âge" => 12,
    "type" => "chien"
];

$t3 = [
    "nom" => "Garfield",
    "âge" => 2,
    "type" => "chat"
];

$t4 = [
    "nom" => "Miaou",
    "âge" => 5,
    "type" => "chat"
];

$t5 = [
    "nom" => "Ratatouille",
    "âge" => 5,
    "type" => "rat"
];

$animaux = [$t1, $t3, $t2, $t4, $t5];

function afficherTableau(string $s, array $t)
{
    foreach ($t as $animal) {
        if($s === "tous"){
            foreach($animal as $k =>$v){
                echo "$k : $v<br>";
            }
            echo "<br>************<br>";
        }

        if($s === $animal['type']){
            foreach($animal as $k =>$v){
                echo "$k : $v<br>";
            }
            echo "<br>************<br>";
        }
    }
}


?>

<a href="?type=tous">Tous</a>
<a href="?type=chien">Chiens</a>
<a href="index.php?type=chat">Chats</a>
<a href="index.php?type=rat">Rats</a>
<a href="index.php">Reset</a>
<br>

<?php
if(isset($_GET['type']) && !empty($_GET['type'])){
    afficherTableau($_GET['type'], $animaux);
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