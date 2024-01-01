<?php
//int
    $a=-10;
    if($a==-10){
        echo "number is nagative";
    }
    else{
        echo "number is positive";
    }
    echo "<br>";
// Float (double)
$floatVar = 7.21;
echo $floatVar;
echo "<br>";
//bollen
    if(TRUE)
        echo "True";
    if(FALSE)
        echo "False";
        echo "<br>";
//Float
    $a=10;
    $b=10.5;
    if($a<$b)
    echo "$b is bigger";
    echo "<br>";
//string
$a="heet";
echo "hello $a";
echo "<br>";
//array
$bikes=array("Yamaha","Ktm");
var_dump($bikes);
echo "<br>";
//Null
$a=NULL;
var_dump($a);
echo "<br>";
//object
class name{
    var $message;
    function name($message){
        $this->message=$message;
    }

    function msg(){
        return "msg".$this->message."!";
    }
}
$newObj=new name("obj data type");
echo $newObj->msg();
?>