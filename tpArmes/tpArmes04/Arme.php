<?php
class Arme
{
    private $nom;
    private $description;
    private $image;

    public function __construct($nom, $desc, $img)
    {
        $this->nom = $nom;
        $this->description = $desc;
        $this->image = $img;
    }

    public function getNom(){return $this->nom;}
    public function getDescription(){return $this->description;}
    public function getImage(){return $this->image;}

    public function setNom($n){$this->nom = $n;}
    public function setDescription($d){$this->description = $d;}
    public function setImage($i){$this->image = $i;}

    public function __toString()
    {
        $txt = "";
        $txt .= '<div class="row">';
            $txt .= '<div class="col s4">';
                $txt .= '<img src="' .$this->image. '" alt="arme">';
            $txt .= '</div>';
            $txt .= '<div class="col s8">';
                $txt .= '<div>';
                    $txt .= '<h4>' .$this->nom. '</h4>';
                    $txt .= '<p>' .$this->description. '</p>';
                $txt .= '</div>';
            $txt .= '</div>';
        $txt .= '</div>';
        return $txt;
    }
}