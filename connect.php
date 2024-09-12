<?php

    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'cosodulieu';

    $conn = new mySQLi($server , $user , $pass , $database);

    if($conn){
        mysqLi_query($conn, "SET NAMES 'utf8' ");
        
    }else{
        echo "ket noi that bai";
    }

?>