<?php

class Arme
{
    private $nom;
    private $description;
    private $level;

    public function __construct($nom, $desc)
    {
        $this->nom = $nom;
        $this->description = $desc;
        $this->level = 1;
    }

    public function getNom(){return $this->nom;}
    public function getDescription(){return $this->description;}
    public function getLevel(){return $this->level;}

    public function setNom($n){$this->nom = $n;}
    public function setDescription($d){$this->description = $d;}
    public function setLevel($l){$this->level = $l;}

    private function supCarSpec()
    {
        $this->nom = strtolower($this->nom);

        $tmp = $this->nom;
        $tmp = str_replace("é", "e", $tmp);
        $tmp = str_replace("è", "e", $tmp);
        $tmp = str_replace("ê", "e", $tmp);
        $tmp = str_replace("ë", "e", $tmp);
        $tmp = str_replace("ç", "c", $tmp);
        return $tmp;
    }

    public function supCarSpec2()
    {
        $this->nom = strtolower($this->nom);

        $recherche = ["é", "è", "ê", "ë", "ç"];
        $remplace =  ["e", "e", "e", "e", "c"];
        return str_replace($recherche, $remplace, $this->nom);
    }

    public function imageLevel()
    {
        $tmp = "./../source/";
        $tmp .= $this->supCarSpec();
        $tmp .= "/";
        $tmp .= $this->supCarSpec2();
        $tmp .= (string)$this->level;
        $tmp .= ".png";
        return $tmp;
    }

    public function __toString()
    {
        $txt = "";
        $txt .= '<div class="row">';
            $txt .= '<div class="col s4">';
                $txt .= '<img src="' .$this->imageLevel(). '" alt="arme">';
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