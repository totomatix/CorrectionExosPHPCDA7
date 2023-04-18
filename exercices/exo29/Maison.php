<?php

class Maison
{
    private static $count = 0;
    private $idMaison;
    private $annee;
    private $nbChambres;
    private $surface;

    public function __construct($annee, $nbChambres, $surface)
    {
        self::$count++;
        $this->idMaison = self::$count;
        $this->annee = $annee;
        $this->nbChambres = $nbChambres;
        $this->surface = $surface;
    }

    public function getAnnee(){return $this->annee;}

    public function getNbChambres(){return $this->nbChambres;}

    public function getSurface(){return $this->surface;}

    public function getIdMaison(){return $this->idMaison;}
}
