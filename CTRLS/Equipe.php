<?php
Class Equipe{
    private $_club;
    private $_pays;
    private $_annee_club;
    private array $joueurs;

    public function __construct($club,$pays,$annee_club){
        $this->_club = $club;
        $this->_pays = $pays;
        $this->_pays->ajouterEquipe($this);
        $this->_annee_club = $annee_club;
        $this->joueurs = [];
        $this->carears= [];
    }
    public function AjoutJoueur($joueur) {
        array_push($this->joueurs, $joueur);
    }
    public function afficheJoueur() {
        $result = " $this"."<br>"."<br><ul>";
        foreach ($this->joueurs as $joueur) {
            $result .= "<li>$joueur</li>";
        }
        $result .= "</ul>";
        return $result;
    }
    public function getAnnee_club(){
        return $this->_annee_club;
    }
    public function setAnnee_club(){
        return $this->_annee_club;
    }
    public function getPays(){
        return $this->_pays;
    }
    public function setPays(){
        return $this->_pays;
    }
    public function __toString()
    {
        return $this->_club;
    }
}
