<?php
    session_start();

    $db_server="localhost";
    $db_username="root";
    $db_password="";
    $db_database="trends";

    $conn=mysqli_connect($db_server,$db_username,$db_password,$db_database);

    if(!$conn){
        echo "database connection error",mysqli_connect_error();
    }
?>