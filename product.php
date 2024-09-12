<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <thead>
        <tr>
        <th>ID</th>
        <th>ten</th>
        <th>hinh</th>
        <th>gia</th>
        <th>bao hanh</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "connect.php";
        $sql ="SELECT*FROM sanpham";
        $result = mysqLi_query($conn, $sql);
        while ($row=mysqli_fetch_array($result)){
        ?>
             <tr>
                <br>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><img width= "30" height="40" src="img/product/<?php echo $row['image']?>" alt=""></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['warranty'] ?></td>
                <span> <a href="delete.php?this_id=<?php echo $row['id']?>">cancel</a></span>
                <span><a href="edit.php?this_id=<?php echo $row['id']?>">sua</a></span>
             </tr>
        <?php } ?>
    </tbody>
</body>
</html>
