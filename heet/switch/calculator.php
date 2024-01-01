<?php
        if(isset($_REQUEST['submit'])){
        $Number1=($_REQUEST['Number1']);
        echo "<h3>You Enter number1: $Number1</h3> <br>";
        $Number2=($_REQUEST['Number2']);
        echo "<h3>You Enter number2: $Number2</h3> <br>";
        $operator=($_REQUEST['operator']);

        switch ($operator){

            case "add":
                echo $Number1 + $Number2;
                break;
            case "sub":
                echo $Number1 - $Number2;
                break;
            case "mul":
                echo $Number1 * $Number2;
                break;
            case "div":
                echo $Number1 / $Number2;
                break;
            default:
                echo "Enter courectly";
                break;
        }

    }
?>