<?php
class Segment{
    private float $a, $b; 
    public function __construct($a , $b){
        $this->a = $a;
        $this->b = $b; 

    }
    public function longueur(){
        return abs($this->a - $this->b); 
    }
    public function toString(): string{
        return"segment($this->a , $this->b)" ;
    }
    public function getA():float{
        return $this->a; 
    }
    public function getB():float{
        return $this->b; 
    }
    public function setA($value):void{
        $this->a = $value; 
    }
    public function setB($value):void{
        $this->b = $value; 
    }

}

$s = new Segment(3, 10);
echo "est : " . $s->toString();
echo "<br> largeur est  : " . $s->longueur();








?>