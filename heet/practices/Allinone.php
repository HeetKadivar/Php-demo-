<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        button {
            background-color: #39A7FF;
            color: white;
            /*border-radius: 5px;*/
            border: none;
            height: 25px;
            width: 100%;
            /* margin-left:105px;*/
        }

        #textbox {
            background-color: #FF8F8F;
        }

        #PhoneNo {
            background-color: #FF8F8F;
        }

        body {
            align: center;
        }
    </style>

</head>

<body>
    <form method="post" action="">
        <table border : 1px solid black>
            <tr>
                <td>Enter Data: </td>
                <td><input placeholder="Enter Data" name="textbox" id="textbox" /></td>
            </tr>
            <tr>
                <td>Enter PhoneNo:</td>
                <td><input placeholder="Enter PhoneNo" name="PhoneNo" id="PhoneNo" /></td>
            </tr>
            <td colspan="2"><button type="submit" name="submit">Click me</button></td>
        </table>
    </form>

    <?php
        if(isset($_POST['submit']))
        {
            $entereddata=$_POST['textbox'];
            echo "<p>Entered Data: $entereddata </p>";
            $entereddata=$_POST['PhoneNo'];
            echo "<p>Entered PhoneNO: $entereddata </p>";
        }
    ?>
</body>

</html>