<?php
 include('../connect/connect.php');
?>
<?php
    $ma_hd= $_GET['ma_hd'];
    $sql55 = "DELETE FROM tb_hoadon WHERE ma_hd = $ma_hd ";
    $rel55 = mysqli_query($conn,$sql55);
    if($rel55 == true){
     header('Location:tickets.php');
    }
    else{
        echo ' Xóa dữ liệu không thành công';
    }
?>