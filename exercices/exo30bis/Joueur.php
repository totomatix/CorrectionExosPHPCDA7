<?php

class Joueur
{
    private $nom;
    private $force;
    private $pv;
    private $idArme;

    public function __construct($n, $f, $pv, $arme)
    {
        $this->nom = $n;
        $this->force = $f;
        $this->pv = $pv;
        $this->idArme = $arme;
    }

    public function afficherJoueur()
    {
        $a = Arme::getArme($this->idArme);

        echo $this->nom;
        echo "<br>"; 
        echo $this->force;
        echo "<br>"; 
        echo $this->pv;
        echo "<br>"; 
        echo $this->idArme;
        echo "<br>";

        $a->afficherArme();
    }
}