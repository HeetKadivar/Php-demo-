<?php
    if(isset($_REQUEST['button'])){
        $username=($_REQUEST['username']);
        echo "<h3>Enter Name:$username</h3><br>";
        $password=($_REQUEST['password']);
        echo "<h3>Enter password:$password</h3><br>";
    }

    $Product1='new_headphone.jpg';
    $height_1=300;
    $width_1=450;
    $Product2='AirPods.jpg';
    $height_2=450;
    $width_2=370;
    if($username=="Heet" && $password=="1234"){
        echo '<img src="' .$Product1 .'"alt="product1" height='.$height_1.'" width="'.$width_1.'">';
        echo "<h3><br> Price=20000</h3>";
    }elseif($username=="Arpit" && $password=="4321"){
        echo '<img src="' .$Product2 .'"alt="product2" height='.$height_2.'" width="'.$width_2.'">';
        echo "<h3><br> Price=15000</h3>";
    }else{
        echo "Please Fill the Details";
    }
?>