<?php
 include('../connect/connect.php');
?>
<?php
    $id= $_GET['id'];
    $sql55 = "DELETE FROM tb_lienhe WHERE id = $id ";
    $rel55 = mysqli_query($conn,$sql55);
    if($rel55 == true){
     header('Location:leads.php');
    }
    else{
        echo ' Xóa dữ liệu không thành công';
    }
?>