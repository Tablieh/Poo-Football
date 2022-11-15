<?php
Class Joueur{
    private $_nom;
    private $_prenom;
    private $_ville;
    private DateTime $_DatedeNaissance;
    private array $carears;
    private $club;
    public function __construct($nom,$prenom,$ville,$DatedeNaissance){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_ville = $ville;
        $this->_DatedeNaissance = new DateTime($DatedeNaissance);
        $this->carears= [];
    }
    public function AjoutListClub($carear) {
        array_push($this->carears,$carear);
    }
    public function afficheListClub() {
        $result = "$this"."<ul>";
        foreach ($this->carears as $carear) {
            $result .= "<li>".$carear->getClub()." ".$carear->getDate_entree()."</li>";
        }
        $result .= "</ul>";
        return $result;
    }
    
    public function getDatedeNaissance(){
        return $this->_DatedeNaissance;
    }
    public function setDatedeNaissance($dns){
        return $this->_DatedeNaissance =$dns->format("Y-m-d");
    }
    public function getAge(){
        $dateAj = new DateTime();
        $dateNs = $this->getDatedeNaissance();
        $age = $dateAj ->diff($dateNs)->format("%y ans");
        return $age;
    }
    public function __toString()
    {
        return $this->_nom." ".$this->_prenom." de ".$this->_ville;
    }
}
