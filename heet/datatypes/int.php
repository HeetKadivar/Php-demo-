<?php
    $a=10;
    $b=20;
    $c=$a+$b;
    //int
    echo $c;
    echo "<br>";
    var_dump ($c);
    echo "<br>";
    //string
    $d="heet";
    var_dump($d);
    echo "<br>";
    echo $d;
    echo "<br>";
    //float
    $e=22.5;
    echo $e;
    echo "<br>";
    var_dump($e);
    echo "<br>";
    //boolen
    $f=TRUE;
    echo "$f";
    echo "<br>";
    var_dump($f);
    echo "<br>";
    //array
    $array=array("heet","arpit","yas");
    var_dump($array);
    echo "<br>";
    //Null
    $x="heet";
    $x=NULL;
    var_dump($x);
    echo "<br>";
    //Object
    class bike {  //Main class or Parent class
        function model() {  //Mthod of the class
             $model_name = "Royal Enfield";  
             echo "Bike Model: " .$model_name;  
           }  
   }  
   $obj = new bike();  //class instance  (object)
   $obj -> model();  //call method 
   echo "<br>";
  //callable 
  function callable_functio(){
    echo "hello world";
  }

  call_user_func("callable_functio");

?>