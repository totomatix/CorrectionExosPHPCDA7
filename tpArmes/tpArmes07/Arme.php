<?php

class Arme
{
    private $nom;
    private $description;
    private $level;
    private $maxLevel;

    public function __construct($nom, $desc, $maxL)
    {
        $this->nom = $nom;
        $this->description = $desc;
        $this->maxLevel = $maxL;
        $this->level = 1;
    }

    public function getNom(){return $this->nom;}
    public function getDescription(){return $this->description;}
    public function getLevel(){return $this->level;}
    public function getLevelMax(){return $this->maxLevel;}

    public function setNom($n){$this->nom = $n;}
    public function setDescription($d){$this->description = $d;}
    public function setLevel($l){$this->level = $l;}
    public function setLevelMax($lm){$this->maxLevel = $lm;}

    private function supCarSpec()
    {
        $tmp = $this->nom;
        $tmp = str_replace("é", "e", $tmp);
        $tmp = str_replace("è", "e", $tmp);
        $tmp = str_replace("ê", "e", $tmp);
        $tmp = str_replace("ë", "e", $tmp);
        $tmp = str_replace("ç", "c", $tmp);
        return $tmp;
    }

    private function supCarSpec2()
    {
        $recherche = ["é", "è", "ê", "ë", "ç"];
        $remplace =  ["e", "e", "e", "e", "c"];
        return str_replace($recherche, $remplace, $this->nom);
    }

    public function imageLevel()
    {
        $tmp = "./../sources/";
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
            $txt .= '<div class="col s3">';
                $txt .= '<img src="' .$this->imageLevel(). '" alt="arme">';
            $txt .= '</div>';

            $txt .= '<div class="col s2">';
                $txt .= '<form action="" method="GET">';
                    $txt .= '<div class="input-field col s12">';
                        $txt .= '<select onChange="submit()" name="level' . $this->supCarSpec(). '">';
                        for($i=1; $i<= $this->maxLevel; $i++){
                            $txt .= '<option value="'. $i. '"';
                            $txt .= ($i === (int)$_SESSION[$this->supCarSpec()]) ? "selected" : "";
                            $txt .= '>'. $i. '</option>';
                        }
                        $txt .= '</select>';
                    $txt .= '</div>';
                $txt .= '</form>';
            $txt .= '</div>';

            $txt .= '<div class="col s7">';
                $txt .= '<div>';
                    $txt .= '<h4>' .$this->nom. '</h4>';
                    $txt .= '<p>' .$this->description. '</p>';
                $txt .= '</div>';
            $txt .= '</div>';
        $txt .= '</div>';
        return $txt;
    }
}