<?php
class Chauffeur{
    private string $cin, $nom, $prenom; 
    public function __construct($cin , $nom , $prenom){
        $this->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    public function toString():string{
        return "$this->cin , $this->nom ,  $this->prenom";

    }
    
}







?>