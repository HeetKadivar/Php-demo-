<?php
        if(isset($_POST['submit']))
        {
            $entereddata=$_POST['textbox'];
            echo "<p>Entered Data: $entereddata </p>";
            $entereddata=$_POST['PhoneNo'];
            echo "<p>Entered PhoneNO: $entereddata </p>";
        }
    ?>