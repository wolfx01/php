<?php
$a = 10;
$b = 0; 
try{
    $pdo = new PDO("mysql:host=localhost ; dbname = mabase10", "root", "1234");
}catch(Exception $e){
    echo "le msg de  l'exception : " . $e->getMessage();

}finally{
    echo "<br/> finally - exception ou  non  "; 
}
echo"<br>apree le  try/catch "; 




?>