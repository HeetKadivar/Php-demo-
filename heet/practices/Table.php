<?php
     if(isset($_REQUEST['submit'])){
        $Number=($_REQUEST['Number']);
        echo "<h1>$Number Of The Table....</h1>";
    }

    for($i=1;$i<=10;$i++){

        $a = $Number * $i;
        echo "<h3>$Number * $i = $a </h3>";
        echo "<br>";
    }
?>