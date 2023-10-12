<?php
    $host = "localhost";
    $user = "chfhrdk";
    $pw = "add940922!";
    $db = "chfhrdk";
    
    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("UTF-8");

    // if(mysqli_connect_errno()){
    //     echo "DATABASE Connect False";
    // } else {
    //     echo "DATABASE Connect True";
    // }
?>