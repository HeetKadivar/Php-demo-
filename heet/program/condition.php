<?php
   if(isset($_REQUEST['submit'])){
    $name=($_REQUEST['name']);
    echo "<h1>Welcome $name</h1>" ;
    $marks=($_REQUEST['Marks']);
   }
    if($marks!=NULL){
        
        if($marks>=90){
            echo "Your Grade is A";
        }elseif($marks>=80){
            echo "Your Grade is B";
        }elseif($marks>=70){
            echo "Your Grade is C";
        }elseif($marks>=60){
            echo "Your Grade is D";
        }elseif($marks>=40){
            echo "Your Grade is E";
        }else{
            echo "Sorry you are Fail";
        }
}
else
{
        echo "Enter Data";
}
?>