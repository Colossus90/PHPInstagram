<?php
    $db_connect = mysqli_connect("localhost", "root", "root", "imdstagram");
    if(mysqli_connect_errno()) {
        echo "Error: " . mysqli_connect_error();
        exit;
    }
?>