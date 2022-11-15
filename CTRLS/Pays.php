<?php
Class Pays{
    private $_pays;
    private array $equipes;
    
    public function __construct($pays){
        $this->_pays = $pays;
        $this->equipes = [];
    }
    public function ajouterEquipe(Equipe $equipe) {
        $this->equipes[] = $equipe;
    }
    public function afficheEquipe() {
        $result = "Equipes de $this<br><ul>";
        foreach ($this->equipes as $equipe) {
            $result .= "<li>$equipe</li>";
        }
        $result .= "</ul>";
        return $result;
    }
    public function getEquipes(){
        return $this->_ClubParJoueur;
    }
    public function setEquipes(){
        return $this->_ClubParJoueur;
    }

    public function __toString()
    {
        return $this->_pays;
    }
}

