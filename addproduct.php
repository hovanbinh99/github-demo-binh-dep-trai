<?php
    include "connect.php";

    if(isset ($_POST['btn'])){
        $name = $_POST['name'];
        // lay ten hinh anh
        $image = $_FILES['hinhanh']['name'] ;
        // lay duong dan cua anh
        $image_tmp_name = $_FILES['hinhanh']['tmp_name'];
        $price= $_POST['price'];
        $warranty=$_POST['warranty'];
        $sql= "INSERT INTO sanpham(name,image, price, warranty)
        VALUE ('$name', '$image','$price', '$warranty')";
        mysqLi_query($conn,$sql);
        move_uploaded_file($image_tmp_name, 'img/product/'. $image);
    }
?>

<form action="addproduct.php" method="post" emctype = "multipart/form-data">
    <p>name</p>
    <input type ="text" name="name">
    <p>image</p>
    <input type="file" name="hinhanh">
    <p>price</p>
    <input type="text" name="price">
    <p>warranty</p>
    <input type="text" name="warranty">
    <button id= "submit" name ="btn">gui</button>
</form>