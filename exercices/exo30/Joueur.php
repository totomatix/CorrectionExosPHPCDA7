<?php
class Joueur
{
    private $nom;
    private $force;
    private $pv;
    private $idArme;

    public function __construct()
    {
        $this->force = 5;
        $this->pv = 100;
    }

    public function getNom(){return $this->nom;}
    public function getForce(){return $this->force;}
    public function getPv(){return $this->pv;}
    public function getIdArme(){return $this->idArme;}

    public function setNom($nom){$this->nom = $nom;}
    public function setForce($force){$this->force = $force;}
    public function setpv($pv){$this->pv = $pv;}
    public function setIdArme($idArme){$this->idArme = $idArme;}

    public function __toString()
    {
        $arme = Arme::getArme($this->idArme);
        return "Nom : " .$this->nom. "<br>Force : " .$this->force. "<br>PV : " .$this->pv. "<br>Arme : " .$this->idArme. "<br>" .$arme;
    }
}