<?php
    $Number=NULL;
    if(isset($_REQUEST['button'])){
        $Number=($_REQUEST['Number']);
        echo "<h1>$Number</h1>";
    }

    if($Number!=NULL){

        if($Number==1){
            echo "January";
        }elseif($Number==2){
            echo "February";
        }elseif($Number==3){
            echo "March";
        }elseif($Number==4){
            echo "April";
        }elseif($Number==5){
            echo "May";
        }elseif($Number==6){
            echo "Jun";
        }elseif($Number==7){
            echo "July";
        }elseif($Number==8){
            echo "Augest";
        }elseif($Number==9){
            echo "September";
        }elseif($Number==10){
            echo "Octomber";
        }elseif($Number==11){
            echo "November";
        }elseif($Number==12){
            echo "December";
        }else{
            echo "Plese Enter Number Between 1 to 12";
        }
    }else{
        echo "Plese Fill Detail";
    }
?>