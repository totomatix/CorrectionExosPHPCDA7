<?php
/**
 * Création de la classe animal
 */
class Animal{

    public $nom;
    public $age;
    public $type;

    /**
     * Constructeur des objets
     *
     * @param string $n
     * @param integer $a
     * @param string $t
     */
    public function __construct(string $n, int $a, string $t)
    {
        $this->nom = $n;
        $this->age = $a;
        $this->type = $t;
    }

    /**
     * Un animal doit savoir s'afficher
     *
     * @return void
     */
    public function afficherAnimal() {
        echo "Nom : " .$this->nom. "<br>";
        echo "Age : " .$this->age. "<br>";
        echo "Type : " .$this->type. "<br>";
    }
}