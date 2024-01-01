<?php
//int
        $a=10;
        $b=20;
        $c=$a%$b;
        echo $c;
        echo "<br>";
//float
        $a=10.5%5.5;
        echo $a;
        echo "<br>";
//string
        $a="I AM A MACHINE";
        echo $a;
        echo "<br>";
//boolen
$a=TRUE;
$b=FALSE;
var_dump($b);
var_dump($a);
echo "<br>";
//Null,Array
$array = array(
        'key1' => 'heet',
        'key2' => NULL,
        'key3' => 'arpit'
    );
    var_dump($array);
    echo "<br>";
//Object
class Attendance {
        public $name;
        public $Pre_Abs;
    }
    
    $person = new Attendance();
    $person->name = "ramesh";
    $person->pre_abs = "Absent";
    
    echo $person->name; 
    echo ",";
    echo $person->pre_abs;  
    echo "<br>";
//calleble
function condition(){
        $a=10;
        if($a==10){
                echo "$a is true";
        }
        else{
                echo "$a is false";
        }
}
call_user_func("condition");
?>
?>