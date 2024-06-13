<?php
include "../model/conn.php";
if (isset($_GET['iddh'])) {
    $id = $_GET['iddh'];
    $sql = "DELETE FROM `hoadon` WHERE hoadon.id = $id";
    // echo $sql;
    $result = mysqli_query($conn, $sql);
    if ($result) {
       
        header("location: ../view/danhsachdonhang.php");
    }else {
        echo("Lỗi: " .mysqli_error($conn));
    }
}
else{
    header("location: ../view/danhsachdonhang.php");
}
?>