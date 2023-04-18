<?php

class Voiture{
    private $modele;
    private $marque;
    private $couleur;
    private $annee;

    public function __construct($mod, $mar, $cou, $ann)
    {
        $this->modele = $mod;
        $this->marque = $mar;
        $this->couleur = $cou;
        $this->annee = $ann;
    }

    public function getModele(){
        return $this->modele;
    }

    public function getMarque(){
        return $this->marque;
    }

    public function getCouleur(){
        return $this->couleur;
    }

    public function getAnnee(){
        return $this->annee;
    }

    public function __toString(){
        return "Modèle : " .$this->modele. "<br>Marque : " .$this->marque. "<br>Couleur : " .$this->couleur. "<br>Année : " .$this->annee. "<br>-----------------<br>";
    }
}