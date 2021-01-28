<?php

    $connect = mysqli_connect("localhost", 'root', 'root', "users-info");

    if(!$connect){
        die("Error. Not connected");
    }

?>