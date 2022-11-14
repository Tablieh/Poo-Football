<?php
Class ClubParJoueur{
    
    private $_club;
    private $_joueur;
    private $_date_entree;

    public function __construct($club,$joueur,$date_entree){
        $this->_club = $club;
        $this->_joueur = $joueur;
        $this->_date_entree = $date_entree;
    }
    public function getClub(){
        return $this->_club;    }
    public function setClub(){
        return $this->_club;
    }

}