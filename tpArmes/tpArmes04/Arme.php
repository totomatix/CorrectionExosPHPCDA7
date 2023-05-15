<?php
class Arme {

    private $nom, $image, $description;

    public function __construct($nom, $image, $description)
    {
        $this->nom = $nom;
        $this->image = $image;
        $this->description = $description;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function getImage()
    {
        // pas très propre, car il faut gérer chaque cas d'exception ici
        if ($this->nom == 'arc') {
            return str_replace('$',rand(1,2),$this->image);
        }
        return str_replace('$',rand(1,5),$this->image);
    }
    public function getDescription()
    {
        return $this->description;
    }

    public function __toString()
    {
        $str = '<div id="flex-container">';
        $str .= '<img src="' . $this->getImage() . '" alt= "' . $this->nom . '">';
        $str .= '<div>';
        $str .= '<h5>'.$this->nom .'</h5>';
        $str .= '<p>'.$this->description .'</p>';
        $str .= '</div>';
        $str .= '</div>';
        return $str;
    }
}
?>