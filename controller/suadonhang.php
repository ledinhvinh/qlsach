<?php 
include "../model/conn.php";
if (isset($_POST['capnhapdonhang'])) {
     $iddh = $_POST['iddh'];
     $idkh = $_POST['idkh'];
     $idsach = $_POST['idsach'];
     $soluong = $_POST['soluong'];
     $thanhtien = $_POST['gia'];
     $date = $_POST['date'];
     $mota = $_POST['description'];

    $sql = "UPDATE `hoadon` SET `id_kh`='$idkh',`id_sach`='$idsach',
    `soluong`='$soluong',`gia`='$thanhtien',`date`='$date',`description`='$mota' WHERE `id`='$iddh'";
    $rs = mysqli_query($conn, $sql);
    if(!$rs){
        echo 'Lỗi'. mysqli_error($conn);
    }else
    {
        header("location: ../view/danhsachdonhang.php");
    }
}else{
    header("location: ../view/suadonhang.php?idkh=$iddh");
}
?>