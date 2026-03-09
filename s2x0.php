<?php

class Personne{
    private string $nom , $prenom , $email , $tel ; 
    public function __construct(string $nom , string  $prenom , string  $email , string  $tel){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->tel = $tel; 

    }
    public function getNom():string{
        return $this->nom; 
    }
    public function getPrenom():string{
        return $this->prenom; 
    }
    public function getEmail():string{
        return $this->email; 
    }
    public function getTel():string{
        return $this->tel; 
    }
    public function setNom($value): void{
        $this->nom = $value; 
    }
    public function setPrenom($value):void{
        $this->prenom = $value; 
    }
    public function setEmail($value):void{
        $this->email = $value; 
    }
    public function setTel($value):void{
        $this->tel = $value; 
    }
    public function toString():string{
        return "$this->nom , $this->prenom , $this->email , $this->tel"; 
    }


}

class Stagaire extends Personne {
    private string $groupe; 
    public function __construct($nom  , $prenom  , $email , $tel , $groupe){
        parent::__construct($nom, $prenom, $email, $tel); 
        $this->groupe = $groupe; 
    }
    public function getGroupe(){
        return $this->groupe; 
    }
    public function setGroupe($value){
        $this->groupe = $value; 
    }
    public function toString():string{
        
        return parent::toString() . "$this->groupe" ;

    }

}


class Formateur extends Personne {
    private int $salaire; 
    public function __construct(string $nom , string $prenom , string $email  , string $tel , int $salaire){
        parent::__construct(  $nom ,  $prenom ,  $email  ,  $tel );
        $this->salaire = $salaire ; 

    }
    public function getSalaire(): int{
        return $this->salaire; 
    }
    public function setSalaire($value):void{
        $this->salaire = $value; 
    }
    public function toString():string{
        
        return parent::toString() . "$this->salaire" ;

    }

}

$personne = new Personne("bilal" , "chouichou" , "bilal@gemail.com" , "06738404436");
$stagiaire = new Stagaire("bilal", "chouichou", "chouich@geeze.com", "23534355", "DD101");
$formateur = new Formateur("bilal", "chouichou", "bilal@gail.com", "2343545", 10000);


echo "<br>";
echo $personne->toString();
echo "<br>";
echo $stagiaire->toString();
echo "<br>";
echo $formateur->toString();
echo "<br>";
echo "<br>";





?>