<?php
class Arme {
    private $identifiant, $force, $nom;

    private static $nbArmesCrees = 0;

    public function __construct($force,$nom)
    {
        self::$nbArmesCrees++;
        $this->identifiant = self::$nbArmesCrees;
        $this->force = $force;
        $this->nom = $nom;
    }

    public function __toString()
    {
        $str = 'Identifiant : ' . $this->identifiant . '<br>';
        $str .= 'Nom : ' . $this->nom . '<br>';
        $str .= 'Force : ' . $this->force . '<br>';
        return $str;
    }
}
?>