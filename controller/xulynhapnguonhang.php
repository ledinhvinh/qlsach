<?php 
include "../model/conn.php";
if (isset($_POST['nhapnguonhang'])) {
    $tensach = $_POST['tensach'];
    $soluong = $_POST['soluong'];
    $gianhap = $_POST['gianhap'];
    $giaban = $_POST['giaban'];
    $thanhtien = $_POST['thanhtien'];
    $theloai = $_POST['theloai'];
    $tacgia = $_POST['tacgia'];
    $date = $_POST['date'];
    $img = $_POST['img'];
    $idncc = $_POST['idncc'];

    $sql = "INSERT INTO `phieunhaphang`(`id`, `id_nhacungcap`, `namesach`, `soluong`, `gianhap`, `giaban`, `thanhtien`, `theloai_pn`, `tacgia`, `date`, `img`) 
    VALUES ('','$idncc','$tensach','$soluong','$gianhap','$giaban','$thanhtien','$theloai','$tacgia','$date','$img')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: ../view/dsnhapnguonhang.php");
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
}
?>