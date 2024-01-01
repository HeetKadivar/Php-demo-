<?php
//int
    $a=10;
    $b=20;
    echo $a-$b;
    echo "<br>";
//float
    $a=120.5;
    $b=2.0;
    $c=0;
    echo $c=$a/$b;
    echo "<br>";
//string
    $a="heet";
    if($a="heet"){
        echo "$a is string";
    }
    else{
        echo "Error";
    }
    echo "<br>";
//Boolean
$boolean=(5>3);
{
    if($boolean==TRUE){
        echo "$boolean is a Bollean datatype<br>";
    }
    else{
        echo "Sorry<br>";
    }
}
//Null,Array
$array=[1,2,NULL,4,5];
var_dump($array);
//object
class Mathes {
    public function add($a, $b) {
        return $a + $b;
    }

    public function sub($a, $b) {
        return $a - $b;
    }
}
$mathes = new Mathes(); 
echo "<br>";
echo $mathes->add(13, 17);
echo ",";
echo $mathes->sub(17, 13);
//object
echo "<br>";
$obj=(object) 'hello this is a object data types';
echo $obj->scalar;
echo "<br>";
//callable
function mathes(){
    $a=10;
    $b=20;
    $c=$a/$b;
    echo $c;
}
call_user_func("mathes");
?>