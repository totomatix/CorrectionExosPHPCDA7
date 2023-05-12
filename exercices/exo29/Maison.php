<?php
class Maison {

    private $identifiant, $nbChambres, $surface, $anneeConstruction;

    private static $nbMaisonCrees = 0;

    public function __construct($nbChambres,$surface, $anneeConstruction)
    {
        self::$nbMaisonCrees++;
        $this->nbChambres = $nbChambres;
        $this->surface = $surface;
        $this->anneeConstruction = $anneeConstruction;
        $this->identifiant = self::$nbMaisonCrees;
    }

    public function getIdentifiant()
    {
        return $this->identifiant;
    }
    public function getNbChambres()
    {
        return $this->nbChambres;
    }
    public function getSurface()
    {
        return $this->surface;
    }
    public function getAnneeConstruction()
    {
        return $this->anneeConstruction;
    }
}
?>