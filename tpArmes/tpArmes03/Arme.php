<?php
class Arme
{
    public $nom;
    public $description;
    public $image;

    public function __construct($nom, $desc, $img)
    {
        $this->nom = $nom;
        $this->description = $desc;
        $this->image = $img;
    }
}