<?php
    if(isset($_REQUEST['submit'])){
        $Number=($_REQUEST['Number']);
    }

if($Number!=NULL){

    if($Number%2==0){
        echo "<h3>$Number is Even....</h3>";
    }
    else{
        echo "<h3>$Number is Odd....</h3>";
    }
}
else{
    echo "<h3>Plese Fill The Details....</h3>";
}
?>