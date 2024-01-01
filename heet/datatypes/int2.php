<?php
//int
    $a=10;$b=20;$c=0;
    echo $c=$a+$b;
    echo "<br>";
//string
    $string="hello world";
    var_dump($string);
    echo "<br>";
//float
    $float=10.5+15.6;
    var_dump($float);
    echo "<br>";
//bool
    $a=20;
    if($a==10)
    {
        $a=TRUE;
    }
    else{
        $a=FALSE;
    }
    var_dump($a);
    echo "<br>";
//null
   function null(){

    return null;
   }
  var_dump ($a=null());
  //array
  $numeric_array=array(10,20,30);
  var_dump($numeric_array);
  echo "<br>";
//object
   class Employe{
    function method(){
    $e_name="Suresh Sharma";
    $e_id=1255;
    echo "Employe Name:" .$e_name;
    echo "<br>";
    echo "Employe id:" .$e_id;
    }
}
$obj= new Employe();
$obj->method();
echo "<br>";
//calleble
function sum_of_digit(){
$a=10;
$b=20;
echo $c=$a+$b;
}
call_user_func("sum_of_digit");

?>