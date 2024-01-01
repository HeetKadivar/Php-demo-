<?php
//int
    $a=10;
    $b=20;
    $c=$a*$b;
    echo $c;
    echo "<br>";
//string
    $a="string";
    for($i=1;$i<=4;$i++){
        echo "$a,";
    }
    echo "<br>";
//float
    $a=21.15;
    $b=22.7;
    echo $a*$b;
    echo "<br>";
//null
    $a=NULL;
    var_dump($a);
//boolean,callable
function Data_types(){
    $a=TRUE;
    $b=FALSE;
    echo "<br>";
    var_dump($a);
    echo "<br>";
    var_dump($b);
}
call_user_func("Data_types");
//Array
$array=array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);
var_dump($array);
echo "<br>";
//object
class stud {  //Main class or Parent class
    function method() {  //Mthod of the class
         $stud_name = "Heet kadivar";  
         echo "student Model: " .$stud_name;  
       }  
}  
$obj = new stud();  //class instance  
$obj -> method();  //call method 
echo "<br>";
?>