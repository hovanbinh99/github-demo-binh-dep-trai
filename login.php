<?php
include "connect.php";
session_start();
// neu ton tai sesion roi thi vao login nhảy sang index luôn. ko vào đc trang login dc nữa
if(isset($_SESSION['mySession'])){
    header('location:index.php');
}

if(isset($_POST['dangnhap'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
// ktra trung hay k
    $sql = "SELECT * FROM thanhvien WHERE username='$username' and password='$password' ";
    // chay
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) ==1){
    // khi dang nhap thanh cong tao ra 1 session ->gui sang index.php
        $_SESSION['mySession']= $username;
        header( "location:index.php");
    }else{
        echo "tai khoan hoac mk sai";
    }
}
?>



<form action="login.php" method="post">
<label for="">username</label> 
<input type="text" name = "username">
<label for="">password</label>
<input type="password" name = "password">
<button type= "submit" name= "dangnhap">login</button>
<button type= "submit" name= "dangki"><a href="signup.php">signup</a></button>
</form>
