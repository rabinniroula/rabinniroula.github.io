<?php

    if(isset($_GET["lat"])){
        $myfile = fopen("data.txt", "w");
        $text = $_GET["lat"];
        fwrite($myfile, $text);
        fclose($myfile);
    }


?>
