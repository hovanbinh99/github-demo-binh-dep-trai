<?php
include "connect.php";
if(isset($_POST['btn'])){
    $id=1;
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=2;

    $sql= "INSERT INTO thanhvien (id,username,password,level)
    VALUES('$id','$username','$password','$level');
    ";
 // chay
    mysqli_query($conn,$sql);
    header('location:login.php');
}

?>

<form action="signup.php" method = "post">
    <label for="">username</label>
    <input type="text" name= "username">
    <label for="">password</label>
    <input type="text" name= "password">
    <button type = "submit" name="btn">sign up</button>
</form>