<?php
class Animal 
{
    public $nom;

    public $age;

    public $type;

    public function __construct($nom,$age,$type)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->type = $type;
    }

    public function __toString()
    {
        $chaine = '';
        $chaine .= "nom : " . $this->nom  . '<br>';
        $chaine .= "âge : " . $this->age . '<br>';
        $chaine .= "type : " . $this->type . '<br>';
        return $chaine;
    }
}

?>