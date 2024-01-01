<?php
    $file=("Data.txt");

    if(file_exists($file)){

        $filedata=file_get_contents($file);

        echo $filedata;
    }
    else{
        echo "<h3>Sorry we have error....</h3>";
    }
?>