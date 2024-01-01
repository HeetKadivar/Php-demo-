<?php
//int
    $a=10;
    $b=20;
    echo $a==$b;
    echo "Error";
    echo "<br>";
//float
    $a=120.5;
    $b=2.0;
    echo $a % $b;
    echo "<br>";
//string
    $a=13;
    if($a%2==0){
        echo "$a is odd";
    }
    else{
        echo "Even";
    }
    echo "<br>";
//Boolean
$boolean=(5>3);
{
    if($boolean==FALSE){
        echo "Sorry";
    }
    else{
        echo "$boolean is a Bollean datatype<br>";
    }
}
//Null,Array
$array=["heet","arpit",NULL,"sahil","yas"];
var_dump($array);
//object
echo "<br>";
$obj=(object) 122252.55;
echo $obj->scalar;
echo "<br>";
//callable
function mathes(){
    $a=10;
    $b=20;
    $c=$a!=$b;
    echo "$c is true";
}
call_user_func("mathes");
?>