<?php
    $severname="localhost";
    $username="root";
    $database="bandongho";

    $connect= new mysqli($severname,$username,"",$database);
    if(mysqli_connect_errno()){
        echo "loi ket noi".mysqli_connect_error();
        exit();
    }
?>