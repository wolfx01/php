<?php

class Employe {
    private string $matricule, $nom, $prenom;
    private int  $dateNaissance , $dateEmbauche , $salaire;
    public  function __construct( string $matricule ,string $nom , string $prenom , int $dateNaissance ,  int $dateEmbauche, int $salaire ){
        $this->matricule = $matricule; 
        $this->nom = $nom; 
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->dateEmbauche = $dateEmbauche;
        $this->salaire = $salaire;

    }
    public function Age(): int{
        $age = date("Y") - $this->dateNaissance;
        return $age; 
    }
    public function Anciennete( ){
        return date("Y") - $this->dateEmbauche; 
    }
    public function AugmentationDuSalaire( ) {
        if($this->Anciennete() < 5 ){
            $this->salaire += ($this->salaire * 0.02);
        }
        elseif($this->Anciennete() < 10 ){
            $this->salaire += ($this->salaire * 0.05);
        }
        else{
            $this->salaire += ($this->salaire * 0.1);
        }
    }
    public function AfficherEmploye(){
        echo "
        <br>
           - Matricule : [ $this->matricule ]
           <br>
           - Nom complet : [   " .strtoupper($this->nom) ." ,". ucfirst($this->prenom)."]
           <br>
           - Age : [" . $this->Age() . "]
           <br>
           - Ancienneté : [" . $this->Anciennete() . " ]
           <br>
           - Salaire : [ $this->salaire ]
           <br>
";
    }




}



$e = new Employe("12|A|57 ", "bilal", "chouichou", 2005, 2023, 10000);
$e->AfficherEmploye();
echo "<br>";
echo $e->Age(); 
echo "<br>";
echo $e->Anciennete(); 
echo "<br>";
$e->AugmentationDuSalaire();
echo "<br>";
$e->AfficherEmploye();
echo "<br>"; 




?>