<?php
//int
        $a=10;
        $b=20;
        $c=$a;
        $d=$b;
        echo $c;
        echo "<br>";
        echo $d;
        echo "<br>";
//float
        $a=10.5/5.5;
        echo $a;
        echo "<br>";
//string
        $a="HeLLo NeW UsEr";
        echo $a;
        echo "<br>";
//boolen
$a=TRUE;
$b=FALSE;

if($a){
        echo " This will print because $a is execute ";
}
else{
        echo "This will print because $b is execute ";
}
echo "<br>";
//Null,Array
$array = array(
        'key1' => 'value1',
        'key2' => NULL,
        'key3' => 'value3'
    );
    var_dump($array);
    echo "<br>";
//Object
class Person {
        public $name;
        public $age;
    }
    
    $person = new Person();
    $person->name = "Mukesh";
    $person->age = 19;
    
    echo $person->name; 
    echo "<br>";
    echo $person->age;  
    echo "<br>";
//calleble
function condition(){
        $a=10;
        $b=20;
        if($a>$b){
                echo "$a is bigger";
        }
        else{
                echo "$b is bigger";
        }
}
call_user_func("condition");
?>