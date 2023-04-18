<?php
class Arme
{
    private static $count = 0;
    private static $armes = [];

    private $id;
    private $nom;
    private $puissance;

    public function __construct($nom, $puissance)
    {
        self::$count++;
        $this->id = self::$count;
        $this->nom = $nom;
        $this->puissance = $puissance;
        self::$armes[] = $this;
    }

    public function getId(){return $this->id;}
    public function getom(){return $this->nom;}
    public function getPuissance(){return $this->puissance;}

    public function setNom($nom){$this->nom = $nom;}
    public function setPuissance($puissance){$this->puissance = $puissance;}

    public function __toString()
    {
        // return "Id : " . $this->id . "<br>Nom : " . $this->nom . "<br>Puissance : " . $this->puissance . "<br>";

        return "Nom : " . $this->nom . "<br>Puissance : " . $this->puissance . "<br>";
    }

    public static function getArme($id)
    {
        foreach (self::$armes as $arme) {
            if ($arme->id === $id) {
                return $arme;
            }
        }
    }
}
