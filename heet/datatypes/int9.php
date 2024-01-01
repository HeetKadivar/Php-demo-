<?php

// Integer
$integerVar = 42;

// Float (double)
$floatVar = 3.14;

// String
$stringVar = "Hello, PHP!";

// Boolean
$boolVar = true;

// Array
$arrayVar = array(1, 2, 3, "four", 5.5);

//callable
function data(){
    $a=90;
    $b="ram";
    if($a==90)
    echo "$b Grade is A";
}


// Null
$nullVar = null;

// Object
class ExampleClass
{
    public $property1 = "I am a class property!";
}

$objectVar = new ExampleClass();

echo "Integer: $integerVar<br>";
echo "Float: $floatVar<br>";
echo "String: $stringVar<br>";
echo "Boolean: $boolVar<br>";

echo "Array:";
print_r($arrayVar);
echo "<br>";
call_user_func("data");
echo "<br>";
echo "Null $nullVar<br>";
echo "Object property: " . $objectVar->property1 . "<br>";

?>