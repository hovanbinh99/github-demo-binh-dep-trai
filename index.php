<?php
session_start();
// neu k ton tai thi gui ve login
if(!isset($_SESSION['mySession'])){
    header('location:login.php');
}
?>
<H1>TRANG CHU</H1>
<form action="" method ="post">
    <input type="text" name= "noidung">
    <button type = "submit" name = "btn">tim kiem</button>
</form>

<a href="logout.php">
    <button type= "submit" name= "dangxuat">dang xuat</button>
</a>

<?php  
if(isset($_POST['btn'])){
    $noidung= $_POST['noidung'];
    echo $noidung;
}
include "connect.php";
// tim kiem sp trong data
?>

<?php
include "connect.php";
// tim kiem sp trong data
$sql = "SELECT *FROM sanpham WHERE name LIKE '%$noidung%'";
// chay
$result = mysqli_query($conn, $sql);
while($row= mysqli_fetch_array($result)){
    echo $row['name'];
}
?>












































<!-- <?php
// echo "hello" ; //goi ra
// $name = " <h1> binh  </h1>" ; //bien chu
// $year = 1999 ; //bien so
// $tuoi = 25;

// echo "<br>" . $name . $year; // them html cho php
// echo '$name'; //nhan dien la chhu, k nhan dien la bien
// echo $name . $tuoi;
// print "hello"; // echo dem =5, print dem =1

// $a = 1;
// if ($a == 4){
//     echo "a bang 4";
// }elseif($a == 5){
//     echo "a bang 5";
// }else{
//     echo "a bang 6";
// }

// $color = "red";
// switch ($color){
//     case "red";
//        echo "la mau do";
//        break;
//     case "blue";
// }

// for ($i=0 ; $i <=10 ;$i++){
//     echo $i;
// }

// $i =1;
// while ($i<=10){
//     echo $i;
//     $i++;
// }

// $i =1;
// do{
//     echo $i;
//     $i++;
// }while( $i > 10);


// $ten =array("ho" , "van" , "binh");
// for($i=0; $i < count($ten); $i++){
//     echo $ten[$i];
// }

// function soyeulylich($ten,$nam){
//     echo "ten toi la $ten toi sinh nam $nam <br> ";
// }
// soyeulylich("binh","1999");
// soyeulylich("mo", "2000");

// function phepCong(int $a ,int $b){
//    $tong = $a+ $b;
//    return $tong;
// }
//  echo phepCong (2,3);

// $thongTin = array (
//     array("binh","1999"),
//     array("mo","2000")
// );

// echo $thongTin[1][1];
// $ten = array( "C" , "B" , "A" );
// echo print_r($ten);
// sort($ten);



?> -->

<!-- <form action="xuly.php" method ="post" >
name: <input type= "radio"  value="ten">
gmail: <input type ="radio" value="gmail">
<input type="submit">
</form> -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    



</body>
</html> -->

<!-- <?php
        // if($_SERVER["REQUEST_METHOD"] == "POST"){
        //    $name = $_POST["ten"];
        //    if( $name == "binh"){
        //     echo "ten binh sinh nam 1999";
        //    }else if($name =="mo"){
        //     echo "ten mo sinh nam 2000";
        //    }else{
        //     echo "nguoi nay khong co trong lop";
        //    }
        // }

        // $myfile =fopen("helloworld.txt", "r") or die ("loi");
        // echo fread( $myfile, filesize("helloworld.txt"));
        // fclose($myfile);

        // $myfile = fopen("File.txt","w");


?> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="xuly.php" method="POST" enctype="multipart/form-data">
        <input type="file" name ="hinhanh" value="chon anh">
        <input type="submit" name = "btn" value= "gui">
    </form>
</body>
</html>
     -->
<!-- <form action="login.php" method = "post">
     <label>email</label>
     <input type="text" name ="email">
     <label> password</label>
     <input type="password" name= "password">
     <button type = submit name = "dangnhap">login</button>
</form> -->

<?php
//   $cookieName = "user";
//   $cookieValue = "binh";

//   setcookie ( $cookieName , $cookieValue, time()+(30), "/");
//   if (isset($_COOKIE[$cookieName])){
//     echo "cookie " . $cookieName . " da ton tai";
//   }else{
//     echo "cookie " . $cookieName . " da chet";
//   }

// $so= "234b";
// if( !filter_var($so, FILTER_VALIDATE_INT)== false){
//     echo "so nguyen";
// }else{
//     echo "ko la so nguyen";
// }

// if(isset($_POST['dangnhap'])){
//     $email= $_POST['email'];
//     $password= $_POST['password'];
//     if($email=='admin@gmail.com' && $password == '123123'){
//         header ('location:admin.php');
//     }else{
//         echo "tai khoan hoac mat khau sai";
//     }
// }
// if(isset($_GET['page_layout'])){
//     switch($_GET['page_layout']){
//         case 'trangchu';
//         include "trangchu.php";
//         break;

//         case 'sanpham';
//         include "sanpham.php";
//         break;
//     }
// }

// include "connect.php";
// $sql = "CREATE TABLE thanhvien (  
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
//     taikhoan VARCHAR(30) NOT NULL,
//     matkhau VARCHAR(30) NOT NULL,
//     level INT(6)

// )";

// if( $conn->query($sql) == TRUE ) {
//     echo "tao bang thanh cong";
// }else{
//     echo "tao bang ko thanh cong";
// }

// if( mysqli_query($conn , $sql)){
//     echo "tao data thanh cong";
// }else{
//     echo "tao data that bai";
// }


// $id = "2";
// $taikhoan = 'nguoi';
// $matkhau = '123123';
// $level = 1;

// $sql = " INSERT INTO thanhvien (id , taikhoan , matkhau , level)
// VALUES('$id' , '$taikhoan' , '$matkhau' , '$level' ) ";

// mysqLi_query($conn , $sql);

// $sql = " SELECT * FROM thanhvien";
// $result = mysqLi_query ( $conn , $sql);
// echo mysqLi_num_rows( $result);


// $sql = " DELETE FROM thanhvien WHERE id='2' ";
// mysqLi_query($conn, $sql);


// $id= 2;
// $taikhoan= 'binh';
// $matkhau= '123';
// $level = 2;
// $sql = " UPDATE thanhvien SET id = '$id' , taikhoan='$taikhoan' , matkhau ='$matkhau' , level ='$level' WHERE id=2 ";
// mysqLi_query( $conn , $sql);
// include "connect.php";

// $sql = " SELECT * FROM thanhvien";
// $result =mysqLi_query( $conn , $sql);
// while ($row = mysqLi_fetch_array($result)){


// include "connect.php";
// $sql = "SELECT * FROM thanhvien ORDER BY RAND() ";
// $result = mysqli_query($conn, $sql);
// if (mysqLi_num_rows($result)>0){
//     while( $row = mysqli_fetch_array($result)){
//         echo $row['id'] .'|'.  $row['taikhoan'];
//     }
// }

// include "connect.php";
// $password = $_POST['password'];
// if(isset($_POST['btn'])){
//     do{
//         echo "nhap mat khau";
        
//     }while ($password !== "kaiba1234");
//     echo "password matched";
// }


?>

<!-- 
<form action="index.php" method="post">
<label for="">TK</label>
<input type="text" name= "password">
<input type="submit" name = "btn" >
</form> -->

<!-- <ul>
van o index nhung gia tri bang trang chu
<li><a href="index.php?page_layout=trangchu">trang chu</a></li> 
<li><a href="index.php?page_layout=sanpham">san pham</a></li>
</ul> -->
