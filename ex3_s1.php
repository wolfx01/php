<?php
class Stagiaire{
    private  int $code; 
    private string $nom, $prenom, $groupe;
    private static int $nbrStagiaire = 0;
    public function __construct( $nom , $prenom , $groupe){
        $this->nom =$nom ; 
        $this->prenom  = $prenom ; 
        $this->groupe  = $groupe;
        $this->code = ++self::$nbrStagiaire ;
    }
    public function getCode():int{
        return $this->code; 
    }
    
    public function getNom():string{
        return $this->nom; 
    }
    public function getPrenom():string{
        return $this->prenom; 
    }
    public function getGroupe():string{
        return $this->groupe; 
    }
    public function setNom($nom): void {
        $this->nom = $nom ; 
    }
    public function setPrenom($prenom): void {
        $this->prenom = $prenom ; 
    }
    public function setGroupe($groupe): void {
        $this->groupe = $groupe ; 
    }
    public function toString(){
        return " <br> $this->code  , $this->nom , $this->prenom , $this->groupe <br> "; 
    }
    public function getNbrStagiaire():int{
        return self::$nbrStagiaire; 
    }



}


$s = new Stagiaire("bila", "chouichou", "DD101");
$s1 = new Stagiaire("MOHAMED", "chouichou", "DD102");
$s2 = new Stagiaire("abdlmomn", "chouichou", "DD102");
echo "<br>";
echo$s->toString();
echo "<br>";
echo $s1->toString();
echo "<br>";
echo $s2->toString();



$s1->setGroupe("DD103") ;
echo "<br>";
echo $s1->toString();

echo "<br>";
echo$s2->getCode();
echo "<br>";
echo $s2->getNbrStagiaire();
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";










?>