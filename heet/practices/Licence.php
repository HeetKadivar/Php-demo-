<?php
    if(isset($_REQUEST['submit'])){
    $Name=($_REQUEST['Name']);
    echo "<h1>Your Name is: $Name</h1>";
    $Age= ($_REQUEST['Age']);   
}
if($Age>0){

    if($Age>=18){
        echo "<h2>You Are Valid For Licence.....</h2>";
    }
    else{
        echo "<h2>You Are Not Valid For Licence.....</h2>";
    }
}
else{
    echo "<h2>Plese Fill The Age</h2>";
}
?>