<?php
require_once '../functions/functions.php';

class Arme
{

    private $nom, $level, $description;
    private $maxLevel;

    public function __construct($nom, $description, $maxLevel)
    {
        $this->nom = $nom;
        $this->level = 1;
        $this->description = $description;
        $this->maxLevel = $maxLevel;
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

    public function setLevel($level)
    {
        $this->level = $level;
    }

    private function genererCheminImage(): string
    {
        $cheminBase = '/tpArmes/source/';
        $image = $cheminBase . remove_accents($this->nom) . '/' . remove_accents($this->nom) . $this->level . '.png';
        return $image;
    }

    public function __toString()
    {
        $str = '<div id="flex-container">';
        $str .= '<img src="' . $this->genererCheminImage() . '" alt= "' . $this->nom . '">';
        $str .= '<form action="" method="post"><select name="' . remove_accents($this->nom) . '" onchange="if(this.value != 0) { this.form.submit(); }">';
        for ($i = 1; $i <= $this->maxLevel; $i++) {
            if ($i == $this->level) {
                $str .= '<option selected value="' . $i . '">' . $i . '</option>';
            } else {
                $str .= '<option value="' . $i . '">' . $i . '</option>';
            }
        }
        $str .= '</select></form>';
        $str .= '<div>';
        $str .= '<h5>' . $this->nom . '</h5>';
        $str .= '<p>' . $this->description . '</p>';
        $str .= '</div>';
        $str .= '</div>';
        return $str;
    }
}
?>