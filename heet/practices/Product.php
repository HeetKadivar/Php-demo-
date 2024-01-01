*9<?php

    if(isset($_REQUEST['submit'])){

        $Name=($_REQUEST['Name']);
        echo "Your Name: $Name";
        echo "<br>";
        $Product=($_REQUEST['Product']);
        echo "Your Product: $Product";
        echo "<br>";
        $Price=($_REQUEST['Price']);
        echo "Your Price: $Price";
        echo "<br>";
        $Quantity=($_REQUEST['Quantity']);
        echo "Your Quantity: $Quantity";
        
    }

?>