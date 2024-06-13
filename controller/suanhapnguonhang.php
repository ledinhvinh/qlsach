<?php 
include "../model/conn.php";
if ($_POST['suanhapnguonhang']) {
    $idpnh = $_POST['idpnh'];
    $tensach = $_POST['tensach'];
    $soluong = $_POST['soluong'];
    $gianhap = $_POST['gianhap'];
    $giaban = $_POST['giaban'];
    $thanhtien = $_POST['thanhtien'];
    $theloai = $_POST['theloai'];
    $tacgia_ex = $_POST['tacgia_ex'];
    $date = $_POST['date'];
    $img = $_POST['img'];
    $idncc = $_POST['idncc'];

    $sql = "UPDATE `phieunhaphang` SET 
    `id_nhacungcap`='$idncc',`namesach`='$tensach',`soluong`='$soluong',`gianhap`='$gianhap',`giaban`='$giaban',
    `thanhtien`='$thanhtien',`theloai_pn`='$theloai',`tacgia`='$tacgia_ex',`date`='$date',`img`='$img' WHERE `id`='$idpnh'";
    $rs = mysqli_query($conn, $sql);
    if(!$rs){
        echo 'Lỗi'. mysqli_error($conn);
    }else
    {
        header("location: ../view/dsnhapnguonhang.php");
    }
}else{
    header("location: ../view/suanhaphang.php?idpnh=$idpnh");
}
?>