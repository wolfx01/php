<?php

class Personne {
    private string $cin ;
    private string $nom ;
    private string $prenom ;
    public function __construct (string $cin , string $nom , string $prenom){
        $this -> cin = $cin ;
        $this -> nom = $nom ;
        $this -> prenom = $prenom ;
    }
    public function getCin() : string {
        return $this -> cin ;
    }
    public function getNom() : string {
        return $this -> nom ;
    }
    public function getPrenom() : string {
        return $this -> prenom ;
    }
    public function toString() : string {
        return "CIN : " . $this -> cin  ." | " . " Nom : " . $this -> nom . " | " . " Prenom : " . $this -> prenom ;
    }
}

class Formateur extends Personne {
    private string $matricule ;
    public function __construct(string $cin , string $nom , string $prenom , string $matricule ){
        parent::__construct($cin , $nom , $prenom) ;
        $this -> matricule = $matricule ;
    }
    public function getMatricule() : string {
        return $this -> matricule ;
    }
    public function toString() : string {
        return parent::toString() ." | " . " Matricule : " . $this -> matricule ;
    }
}

class Groupe {
    private int $codeG ;
    private string $effectif ;
    public function __construct(int $codeG , string $effectif ){
        $this -> codeG = $codeG ;
        $this -> effectif = $effectif ;
    }
    public function getCodeG() : int {
        return $this -> codeG ;
    }
    public function getEffectif() : string {
        return $this -> effectif ;
    }
    public function toString() : string {
        return " Code de groupe : " . $this -> codeG ." | " . " effectif :" . $this -> effectif ;
    }
}

class Module {
    private int $codeModule ;
    private string $nomModule ;
    private float $masseHoraire ;
    public function __construct (int $codeModule , string $nomModule , float $masseHoraire){
        $this -> codeModule = $codeModule ;
        $this -> nomModule = $nomModule ;
        $this -> masseHoraire = $masseHoraire ;
    }
    public function getCodeModule() : int {
        return $this -> codeModule ;
    }
    public function getNomModule() : string {
        return $this -> nomModule ;
    }
    public function getMasseHoraire() : float {
        return $this -> masseHoraire ;
    }
    public function toString() : string {
        return "Code Module : " . $this -> codeModule .  " | " ." Nom Module : " . $this -> nomModule . " | " ." Masse Horaire : " . $this -> masseHoraire ;
    }
}

class Cours {
    private int $codeCours ;
    private DateTime $date ;
    private Formateur $formateur ;
    private Groupe $groupe ;
    private Module $module ; 
    public function __construct (int $codeCours , DateTime $date , Formateur $formateur , Groupe $groupe , Module $module ){
        $this -> codeCours = $codeCours ;
        $this -> date = $date ;
        $this -> formateur = $formateur ;
        $this -> groupe = $groupe ;
        $this -> module = $module ;
    }
    public function getCodeCours() : int {
        return $this -> codeCours ;
    }
    public function getDate() : DateTime {
        return $this -> date ;
    }
    public function getFormateur() : Formateur {
        return $this -> formateur ;
    }
    public function getGroupe() : Groupe {
        return $this -> groupe ;
    }
    public function getModule() : Module {
        return $this -> module ;
    }
    public function toString() : string {
        return "Code Cours : " . $this -> codeCours . " | " .
                " Date : " . $this -> date -> format("Y-m-d") . " | " . 
                " Formateur : " . $this -> formateur -> getNom() . " " . $this -> formateur -> getPrenom() .  " | " .
                " Groupe : " . $this -> groupe -> getCodeG() .  " | " .
                " Module : " . $this -> module -> getNomModule() ;
    }
}
$listformateur = [];
$listformateur[] = new Formateur("f" , "rff" , "efds" , "sfd")
?>











<!-- 



$listFormateur = [] ;
$listGroupe = [] ;
$listModule = [] ;

$listCours = [] ;

// Formateurs
$listFormateur[] = new Formateur("AB1234", "Dahbi", "Ayoub", "MAT001") ;
$listFormateur[] = new Formateur("CD5678", "Hrimate", "Imane", "MAT002") ;
$listFormateur[] = new Formateur("EF9012", "Karim", "Ali", "MAT003") ;

// Groupes
$listGroupe[] = new Groupe(101, "DD101") ;
$listGroupe[] = new Groupe(102, "DD102") ;
$listGroupe[] = new Groupe(103, "DD103") ;

// Modules
$listModule[] = new Module(1, "PHP", 60) ;
$listModule[] = new Module(2, "Java", 80) ;
$listModule[] = new Module(3, "JavaScript", 50) ;

// Cours
$listCours[] = new Cours(1, new DateTime("2026-03-01"), $listFormateur[0], $listGroupe[0], $listModule[0]) ;
$listCours[] = new Cours(2, new DateTime("2026-03-02"), $listFormateur[1], $listGroupe[1], $listModule[1]) ;
$listCours[] = new Cours(3, new DateTime("2026-03-03"), $listFormateur[2], $listGroupe[2], $listModule[2]) ;

echo " <h3>============  LISTE FORMATEURS  ============</h3> " ;
foreach($listFormateur as $form){
    echo $form -> toString() . "<br>";
}

echo " <h3>============  LISTE GROUPES  ============</h3> " ;
foreach ($listGroupe as $grou) {
    echo $grou -> toString() . "<br>" ;
}

echo " <h3>============  LIST MODULES  ============</h3> " ;
foreach ($listModule as $mod) {
    echo $mod -> toString() . "<br>" ;
}

echo "<br><br>";
// =======================  RECHERCHE  ==========================

function rechercherModulesFormateur(string $matricule): array {
    global $listCours;

    $resultats = [];

    foreach ($listCours as $cours) {
        if ($cours->getFormateur()->getMatricule() === $matricule) {
            $resultats[] = $cours;
        }
    }

    return $resultats;
}
$modules = rechercherModulesFormateur("MAT001");

if (empty($modules)) {
    echo "Aucun cours trouvé.";
} else {
    foreach ($modules as $cours) {
        echo "Module : " . $cours->getModule()->getNomModule() . " | ";
        echo "Groupe : " . $cours->getGroupe()->getCodeG() . "<br>";
    }
} -->
class Formateur extends Personne {
    private string $matricule ;
    public function __construct(string $cin , string $nom , string $prenom , string $matricule ){
        parent::__construct($cin , $nom , $prenom) ;
        $this -> matricule = $matricule ;
    }
    public function getMatricule() : string {
        return $this -> matricule ;
    }
    public function toString() : string {
        return parent::toString() ." | " . " Matricule : " . $this -> matricule ;
    }
}

class Groupe {
    private int $codeG ;
    private string $effectif ;
    public function __construct(int $codeG , string $effectif ){
        $this -> codeG = $codeG ;
        $this -> effectif = $effectif ;
    }
    public function getCodeG() : int {
        return $this -> codeG ;
    }
    public function getEffectif() : string {
        return $this -> effectif ;
    }
    public function toString() : string {
        return " Code de groupe : " . $this -> codeG ." | " . " effectif :" . $this -> effectif ;
    }
}

class Module {
    private int $codeModule ;
    private string $nomModule ;
    private float $masseHoraire ;
    public function __construct (int $codeModule , string $nomModule , float $masseHoraire){
        $this -> codeModule = $codeModule ;
        $this -> nomModule = $nomModule ;
        $this -> masseHoraire = $masseHoraire ;
    }
    public function getCodeModule() : int {
        return $this -> codeModule ;
    }
    public function getNomModule() : string {
        return $this -> nomModule ;
    }
    public function getMasseHoraire() : float {
        return $this -> masseHoraire ;
    }
    public function toString() : string {
        return "Code Module : " . $this -> codeModule .  " | " ." Nom Module : " . $this -> nomModule . " | " ." Masse Horaire : " . $this -> masseHoraire ;
    }
}

class Cours {
    private int $codeCours ;
    private DateTime $date ;
    private Formateur $formateur ;
    private Groupe $groupe ;
    private Module $module ; 
    public function __construct (int $codeCours , DateTime $date , Formateur $formateur , Groupe $groupe , Module $module ){
        $this -> codeCours = $codeCours ;
        $this -> date = $date ;
        $this -> formateur = $formateur ;
        $this -> groupe = $groupe ;
        $this -> module = $module ;
    }
    public function getCodeCours() : int {
        return $this -> codeCours ;
    }
    public function getDate() : DateTime {
        return $this -> date ;
    }
    public function getFormateur() : Formateur {
        return $this -> formateur ;
    }
    public function getGroupe() : Groupe {
        return $this -> groupe ;
    }
    public function getModule() : Module {
        return $this -> module ;
    }
    public function toString() : string {
        return "Code Cours : " . $this -> codeCours . " | " .
                " Date : " . $this -> date -> format("Y-m-d") . " | " . 
                " Formateur : " . $this -> formateur -> getNom() . " " . $this -> formateur -> getPrenom() .  " | " .
                " Groupe : " . $this -> groupe -> getCodeG() .  " | " .
                " Module : " . $this -> module -> getNomModule() ;
    }
}
$listformateur = [];
$listformateur[] = new Formateur("f" , "rff" , "efds" , "sfd")
?>











<!-- 



$listFormateur = [] ;
$listGroupe = [] ;
$listModule = [] ;

$listCours = [] ;

// Formateurs
$listFormateur[] = new Formateur("AB1234", "Dahbi", "Ayoub", "MAT001") ;
$listFormateur[] = new Formateur("CD5678", "Hrimate", "Imane", "MAT002") ;
$listFormateur[] = new Formateur("EF9012", "Karim", "Ali", "MAT003") ;

// Groupes
$listGroupe[] = new Groupe(101, "DD101") ;
$listGroupe[] = new Groupe(102, "DD102") ;
$listGroupe[] = new Groupe(103, "DD103") ;

// Modules
$listModule[] = new Module(1, "PHP", 60) ;
$listModule[] = new Module(2, "Java", 80) ;
$listModule[] = new Module(3, "JavaScript", 50) ;

// Cours
$listCours[] = new Cours(1, new DateTime("2026-03-01"), $listFormateur[0], $listGroupe[0], $listModule[0]) ;
$listCours[] = new Cours(2, new DateTime("2026-03-02"), $listFormateur[1], $listGroupe[1], $listModule[1]) ;
$listCours[] = new Cours(3, new DateTime("2026-03-03"), $listFormateur[2], $listGroupe[2], $listModule[2]) ;

echo " <h3>============  LISTE FORMATEURS  ============</h3> " ;
foreach($listFormateur as $form){
    echo $form -> toString() . "<br>";
}

echo " <h3>============  LISTE GROUPES  ============</h3> " ;
foreach ($listGroupe as $grou) {
    echo $grou -> toString() . "<br>" ;
}

echo " <h3>============  LIST MODULES  ============</h3> " ;
foreach ($listModule as $mod) {
    echo $mod -> toString() . "<br>" ;
}

echo "<br><br>";
// =======================  RECHERCHE  ==========================

function rechercherModulesFormateur(string $matricule): array {
    global $listCours;

    $resultats = [];

    foreach ($listCours as $cours) {
        if ($cours->getFormateur()->getMatricule() === $matricule) {
            $resultats[] = $cours;
        }
    }

    return $resultats;
}
$modules = rechercherModulesFormateur("MAT001");

if (empty($modules)) {
    echo "Aucun cours trouvé.";
} else {
    foreach ($modules as $cours) {
        echo "Module : " . $cours->getModule()->getNomModule() . " | ";
        echo "Groupe : " . $cours->getGroupe()->getCodeG() . "<br>";
    }
} -->
