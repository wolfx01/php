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
class  Bus{
    private string $matricule, $marque, $type; 
    public function __construct(string $matricule, string $marque,string $type){
        $this->matricule = $matricule;
        $this->marque = $marque;
        $this->type = $type; 
    



    }
    public function getMatricule():string{
        return $this->matricule;
    }
    public function getMarque():string{
        return $this->marque;
    }
    public function getType():string{
        return $this->type;
    }
    public  function toString(){
        return "$this->matricule  $this->marque  $this->type";
    }
    
}






?>