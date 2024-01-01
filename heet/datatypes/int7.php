<?php
//int
    $a=10;$b=20;$c=0;
    echo $c=$a>$b;
    echo "Sorry";
//string
    $string="Hii sir";
    var_dump($string);
    echo "<br>";
//float
    $float=10.5%15.6;
    var_dump($float);
    echo "<br>";
//bool
    $a=20;
    if($a%2==0)
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
   class Order{
    function method(){
    $name=" Pizza";
    $Price=250;
    echo "Order Name:" .$name;
    echo ",";
    echo "Price:" .$Price;
    }
}
$obj= new Order();
$obj->method();
echo "<br>";
//calleble
function mul_of_digit(){
$a=10;
$b=20;
echo $c=$a*$b;
}
call_user_func("mul_of_digit");

?>