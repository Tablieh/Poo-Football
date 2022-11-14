<?php
Class JoueurParClub{
    
    private $_joueur;
    private $_ClubParJoueur;

    public function __construct($joueur,$ClubParJoueur){
        $this->_joueur = $joueur;
        $this->_ClubParJoueur = $ClubParJoueur;
    }
    public function getJoueur(){
        return $this->_joueur;
    }
    public function setJoueur(){
        return $this->_joueur;
    }
    public function getClubParJoueur(){
        return $this->_ClubParJoueur;
    }
    public function setClubParJoueur(){
        return $this->_ClubParJoueur;
    }

}
