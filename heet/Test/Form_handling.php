<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        Enter user Name:<input placeholder="Enter User Name" name="name" id="name"><br>
        <button type="submit" name="button" id="button">Click me</button>
    </form>

    <?php
        if(isset($_REQUEST['button'])){
            $name=($_REQUEST['name']);
            echo "<h1>Hello $name Sir Have A Greate Day.....</h1>";
            
        }
    ?>
</body>
</html>