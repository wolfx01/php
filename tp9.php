<?php
class Point{
    private float $x, $y; 
    public function __construct($x , $y ){
        $this->x = $x;
        $this->y = $y; 

    }
    
    public function __get($att){
        return $this->$att;
    }

    public function __set($att, $val)
    {
        $this->$att = $val;
    }
    public function afficher():string{
        return "POINT($this->x , $this->y )"; 
    }
    public function norme($point): float{
        return sqrt(($point->x - $point->y) ** 2 + ($this->x - $this->y) ** 2);
    }
}


class Cercle{
    private  $contre; 
    private float $r ; 
    public function  __construct( $contre , float $r){
        $this->contre = $contre ;
        $this->r = $r;  

    }
    public function getPerimetre(){
        return 2 * pi() * $this->r; 
    }
    public function getSurface(){
        return  pi() * ( $this->r**2); 
    }
    public function appartient($p):bool{
        return $this->contre->norme($p) == $this->r; 
    }
    public function afficher(){
     echo "CERCLE(".$this->contre->x .",". $this->contre->y." ,". $this->r.")"; 
    }


}

$centre = new Point(0,0);
$p = new Point(3,4);
$cercle = new Cercle($centre, 5);

$p->afficher();
$cercle->afficher();

echo "le périmètre du cercle : " . $cercle->getPerimetre();
echo "<br/>la surface du cercle : " . $cercle->getSurface();

if($cercle->appartient($p))
    echo "<br/>p appartient au cercle";
else
    echo "<br/>p n'appartient pas au cercle";











?>