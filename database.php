<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="donation";

    $sql= mysqli_connect($server,$username,$password,$database);
    if(!$sql){
        die("sql not connected");
    }

?>