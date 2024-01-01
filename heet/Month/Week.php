<?php
    $Number=NULL;
    if(isset($_REQUEST['button'])){
        $Number=($_REQUEST['Number']);
        echo "<h1>$Number</h1>";
    }

    if($Number!=NULL){

        if($Number==1){
            echo "Sunday";
        }elseif($Number==2){
            echo "Monday";
        }elseif($Number==3){
            echo "Tuesday";
        }elseif($Number==4){
            echo "Wednesday";
        }elseif($Number==5){
            echo "Thursday";
        }elseif($Number==6){
            echo "Friday";
        }elseif($Number==7){
            echo "Saturday";
        }else{
            echo "Plese Enter Number Between 1 to 7";
        }
    }else{
        echo "Plese Fill Detail";
    }
?>