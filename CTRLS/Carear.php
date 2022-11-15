<?php
Class Carear{
    private Joueur $joueur;
    private $club;
    private $date_entree;

    public function __construct(Joueur $joueur,$club,$date_entree){
        $this->joueur =$joueur;
        $this->date_entree = $date_entree;
        $this->club = $club;
        $club->AjoutJoueur($this);
        $joueur->AjoutListClub($this);
    }
    
    public function getJoueur(){
        return $this->joueur;
    }
    public function setjoueur($joueur){
        $this->joueur=$joueur;
    }
    public function getClub(){
        return $this->club;
    }
    public function setClub($club){
        $this->club=$club;
    }
    public function getDate_entree(){
        return $this->date_entree;
    }
    public function setDate_entree($date_entree){
        $this->_date_entree=$date_entree;
    }
    public function __toString()
    {
        return $this->joueur."<br>"." Joue à "." ".$this->club." de la session"." ".$this->date_entree;
    }
}
