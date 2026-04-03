<?php
class  Point{
    private int  $x  , $y ;
    public function __construct($x , $y){
        $this->x = $x;
        $this->y = $y; 

    } 
    public function toString(): string{
        return "POINT( $this->x  , $this->y)"; 

    }
    public function norme():float{
        return sqrt($this->x ** 2 + $this->y ** 2);
    }
}


$p = new Point(2 , 4) ;
echo "this  : " . $p->toString();


"<br>";
echo"this  norm : ".$p->norme()
}
class  Point2D{
    private int  $x  , $y ;
    public function __construct($x , $y){
        $this->x = $x;
        $this->y = $y; 

    } 
    public function toString(): string{
        return "POINT( $this->x  , $this->y)"; 

    }
    public function norme():float{
        return sqrt($this->x ** 2 + $this->y ** 2);
    }
}


$p = new Point(2 , 4) ;
echo "this  : " . $p->toString();


"<br>";
echo"this  norm : ".$p->norme()












?>