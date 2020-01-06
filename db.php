<?php 
    //CREATE CONNECTION
    $conn = mysqli_connect('localhost', 'root', '', 'phpmyblog');


    //Check Connection 
    if(mysqli_connect_errno()){
        //Connection Failed
        echo 'Failed to connect to Mysql' . mysqli_connect_errno();
    }


?>