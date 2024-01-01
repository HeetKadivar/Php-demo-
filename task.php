<?php
    if(isset($_REQUEST['submit'])){
        $books=($_REQUEST['books']);
        $country=($_REQUEST['country']);
        $shipped_country=($_REQUEST['shipped_country']);
        $shipping_charges=($_REQUEST['shipping_charges']);

        echo $books;
        echo "<br></br>";
        
        echo $country;
        echo "<br></br>";
        
        echo $shipped_country;
        echo "<br></br>";

        if($shipped_country =='Australia')
        {
            echo $shipping_charges;
        }elseif($shipped_country =='Brazil'){
            echo $shipping_charges;
        }elseif($shipped_country =='Canada'){
            echo $shipping_charges;
        }
    }
?>