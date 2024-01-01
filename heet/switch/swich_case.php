<?php
if (isset($_REQUEST['button'])) {
    if (isset($_REQUEST['Number'])) {
        $Number = $_REQUEST['Number'];
        $i=$Number;
        $a = 10;
        $b = 20;

        switch ($i) {
            case 1:
                echo ($Number == 1) || ($Number == 2) ? $a : $b;
                break;

            case 2:
                echo ($Number != 3) ? $i : "Sorry";
                break;

            default:
                echo "Invalid value for $i";
        }
    } 
    else {
        echo "Please Fill The Details";
    }
}
?>