<?php
require_once '../functions/functions.php';

class Arme {

    private $nom, $level, $description;

    public function __construct($nom, $description)
    {
        $this->nom = $nom;
        $this->level = 1;
        $this->description = $description;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function getLevel()
    {
        return $this->level;
    }
    public function getDescription()
    {
        return $this->description;
    }

    private function genererCheminImage() : string {
        $cheminBase = '/tpArmes/source/';
        $image = $cheminBase .remove_accents($this->nom) . '/' .remove_accents($this->nom) . $this->level . '.png';
        return $image; 
    }

    public function __toString()
    {
        $str = '<div id="flex-container">';
        $str .= '<img src="' . $this->genererCheminImage() . '" alt= "' . $this->nom . '">';
        $str .= '<div>';
        $str .= '<h5>'.$this->nom .'</h5>';
        $str .= '<p>'.$this->description .'</p>';
        $str .= '</div>';
        $str .= '</div>';
        return $str;
    }
}
?>