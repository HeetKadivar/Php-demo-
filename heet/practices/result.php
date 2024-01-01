<?php
    if(isset($_REQUEST['submit'])){
        $Name=($_REQUEST['Name']);
        echo "<h1>Welcome $Name</h1>" ;
        $Marks=($_REQUEST['Marks']);
        // echo "<h2>Your Marks:$Marks</h2><br>";
    }

if($Marks!=NULL){

    if($Marks>=90){
        echo "<h3>Your Grade: A</h3>";
    }elseif($Marks>=80){
        echo "<h3>Your Grade: B</h3>";
    }elseif($Marks>=70){
        echo "<h3>Your Grade: C</h3>";
    }elseif($Marks>=60){
        echo "<h3>Your Grade: D</h3>";
    }elseif($Marks>=40){
        echo "<h3>Your Grade: E</h3>";
    }else{
        echo "<h3>Your Grade: F</h3>";
    }
}
else{
    echo "<h3>Plese Enter Marks<h3>";
}
?>