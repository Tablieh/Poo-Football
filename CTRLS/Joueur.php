<?php
Class Joueur{
    private $_nom;
    private $_prenom;
    private $_ville;
    private $_Age;

    public function __construct($nom,$prenom,$ville,$Age){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_ville = $ville;
        $this->_Age = $Age;
    }
    public function __toString()
    {
        return $this->_nom.'<br>'.$this->_prenom.'<br>'.$this->_ville." ".$this->_Age;
    }
}
