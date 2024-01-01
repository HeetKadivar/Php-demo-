<?php

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
        echo "Your Quantity: $Quantity<br>";
        $Product=($_REQUEST['Product']);
        echo "Your Product Image: <img src='new_headphone.jpg'  height ='100' width='100' alt='Product Image'>
        <img src='AirPods.jpg'  height ='100' width='100' alt='Product Image'>
        <img src='smart_watch.jpg'  height ='100' width='100' alt='Product Image'>
        <img src='Speakers.jpg'  height ='100' width='100' alt='Product Image'>";
    }

?>