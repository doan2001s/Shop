<?php
 include('../connect/connect.php');
?>
<?php
    $ma_nv= $_GET['ma_nv'];
    $sql55 = "DELETE FROM tb_admin WHERE ma_nv = $ma_nv ";
    $rel55 = mysqli_query($conn,$sql55);
    if($rel55 == true){
     header('Location:clients.php');
    }
    else{
        echo ' Xóa dữ liệu không thành công';
    }
?>