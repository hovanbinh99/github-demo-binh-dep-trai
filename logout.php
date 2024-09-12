<?php
session_start();

// xoa session , xoa cookie
if(isset($_SESSION['mySession'])){
    unset($_SESSION['mySession']);
}
header('location:login.php');
?>