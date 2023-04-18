<?php

class Arme
{
    private static $count = 12356;
    private static $armes = [];
    
    private $id;
    private $nom;
    private $puissance;

    public function __construct($n, $p)
    {
        self::$count++;
        $this->id = self::$count;
        $this->nom = $n;
        $this->puissance = $p;

        
        self::$armes[] = $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public static function getArme($id)
    {
        foreach(self::$armes as $a) {
            if($id == $a->id){
                return $a;
            }
        }
    }

    public function afficherArme()
    {
        echo $this->id;
        echo "<br>";
        echo $this->nom;
        echo "<br>";
        echo $this->puissance;
        echo "<br>";
    }
}