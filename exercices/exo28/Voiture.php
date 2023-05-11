<?php
class Voiture {
    private $marque, $modele, $annee, $couleur;

    public function __construct($marque, $modele, $annee, $couleur)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->couleur = $couleur;
    }

    public function getMarque()
    {
        return $this->marque;
    }
    public function getModele()
    {
        return $this->modele;
    }
    public function getAnnee()
    {
        return $this->annee;
    }
    public function getCouleur()
    {
        return $this->couleur;
    }

    public function __toString()
    {
        $str ='';
        $str .= 'Modèle : ' . $this->modele . '<br>';
        $str .= 'Marque : ' . $this->marque . '<br>';
        $str .= 'Couleur : ' . $this->couleur . '<br>';
        $str .= 'Annee : ' . $this->annee . '<br>';
        return $str;
    }
}
?>