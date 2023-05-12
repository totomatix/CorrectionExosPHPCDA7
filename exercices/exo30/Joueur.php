<?php
require_once './Arme.php';
class Joueur
{
    private $nom, $force, $PV, $arme;

    public function __construct(string $nom, int $force, int $PV, Arme $arme)
    {
        $this->nom = $nom;
        $this->force = $force;
        $this->PV = $PV;
        $this->arme = $arme;
    }

    public function __toString()
    {
        $str = 'Nom : ' . $this->nom . '<br>';
        $str .= 'Force : ' . $this->force . '<br>';
        $str .= 'PV : ' . $this->PV . '<br>';
        $str .= 'Arme : <br> ' . $this->arme . '<br>';
        return $str;
    }
}

?>