<?php
include "../model/conn.php";
if (isset($_GET['idkh']) && $_GET['idkh'] && $_POST['suakh'])  {
    $id = $_GET['idkh'];
    $name = $_POST['namekh'];
    $nhomkh = $_POST['nhomkh'];
    $sdt = $_POST['sdt'];
    $diachi = $_POST['diachi'];
    $email = $_POST['email'];
   
    $sql = "UPDATE `khachhang` SET `name`='$name',`sdt`='$sdt', `email`='$email',
    `diachi`='$diachi',`id_nhomkh`='$nhomkh' WHERE `id`='$id'";
    //   echo $sql;
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo("Error description: " .mysqli_error());
    }else {
        header("location: ../view/danhsachkhachhang.php");
    }
    
}else {
    header("location: ../view/danhsachkhachhang.php");
}
?>