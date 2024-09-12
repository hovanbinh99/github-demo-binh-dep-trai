<?php
include "connect.php";
    $this_id =$_GET['this_id'];
    $sql = "SELECT*FROM sanpham WHERE id = " . $this_id;
    $query = mysqLi_query($conn,$sql);
    $row = mysqli_fetch_assoc($query);

    
    
    // khi nhan nut edit
    if(isset($_POST['btn'])){
        $name = $_POST['name'];
        $price=$_POST['price'];
        $warranty=$_POST['warranty'];
        // $image =  ;
        // $image
        echo $name;
    }

?>
<h1>san pham <?php echo $row['name'];   ?></h1>
<form method="post"enctype= "multipart/form-data">
    <p>name</p>
    <input type="text" name ="name" value ="<?php echo $row['name']; ?>">
    <p>image</p>
    <span><img width= "30" height="40" src="img/product/<?php echo $row['image'] ?>" alt=""></span>
    <input type="file" name= "hinhanh">
    <p>price</p>
    <input type="text" name = "price" value ="<?php echo $row['price']; ?>">
    <p>warranty</p>
    <input type="text" name = "warranty" value ="<?php echo $row['warranty']; ?>">
    <br>
    <button name= "btn">edit</button>
</form>