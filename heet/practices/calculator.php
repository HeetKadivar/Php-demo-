<?php

        if(isset($_REQUEST['mul'])) {
        $num1=($_REQUEST['num1']);
        echo "Number1:$num1<br>";
        $num2=($_REQUEST['num2']);
        echo "Number2:$num2<br>";
        echo $num1+$num2;
}
        if(isset($_REQUEST['sub'])) {
        $num1=($_REQUEST['num1']);
        echo "Number1:$num1<br>";
        $num2=($_REQUEST['num2']);
        echo "Number2:$num2<br>";
        echo $num1-$num2;
 }
