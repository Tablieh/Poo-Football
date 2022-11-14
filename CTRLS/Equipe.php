<?php
Class Equipe{
    private $_club;
    private $_pays;
    private $_annee_club;

    public function __construct($club,$pays,$annee_club){
        $this->_club = $club;
        $this->_pays = $pays;
        $this->_pays->ajouterEquipe($this);
        $this->_annee_club = $annee_club;
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
