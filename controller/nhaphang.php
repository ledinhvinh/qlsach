<?php
include "../model/conn.php";
if (isset($_GET['idpnh'])) {
    $idpnh = $_GET['idpnh'];

    $sql_tbl_phieunhap = "SELECT * FROM phieunhaphang where id = $idpnh";
    $rs_tbl_phieunhap = mysqli_query($conn, $sql_tbl_phieunhap);
    if (mysqli_num_rows($rs_tbl_phieunhap) > 0) {
        while ($r = mysqli_fetch_array($rs_tbl_phieunhap)) {

            $name = $r['namesach'];
            $soluong = $r['soluong'];
            $gianhap = $r['gianhap'];
            $giaban = $r['giaban'];
            $theloai = $r['theloai_pn'];
            $tacgia = $r['tacgia'];
            $date = $r['date'];
            $img = $r['img'];
        }
    }

    $sql_tbl_sach = "SELECT * FROM sach";
    $rs_tbl_sach = mysqli_query($conn, $sql_tbl_sach);
    if (mysqli_num_rows($rs_tbl_sach) > 0) {
        while ($row = mysqli_fetch_array($rs_tbl_sach)) {
            $namesach = $row['name'];
            $soluongsach = $row['soluong'];
            $theloai1 = $row['id_theloai'];
        }
    }
    if ($name == $namesach && $theloai == $theloai1) {
        $soluongkho = $soluongsach + $soluong;
        $sql="UPDATE `sach` SET `img`='$img',`id_theloai`='$theloai',`ngaynhapkho`='$date',
        `soluong`='$soluongkho',`gia`='$gianhap',`giaban`='$giaban',`tacgia`='$tacgia' WHERE `name`='$namesach'";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo "Lỗi" .mysqli_error($conn);
        }else{
            echo "Thành công";
        }
    }
    else{
        $sql = "INSERT INTO `sach`(`id`, `name`, `img`, `id_theloai`, `ngaynhapkho`, `mota`, `soluong`, `gia`, `giaban`, `tacgia`) 
        VALUES ('','$name','$img','$theloai','$date','','$soluong','$gianhap','$giaban','$tacgia')";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            echo "Lỗi" .mysqli_error($conn);
        }
        else{
            echo "Thành công";
        }
    }
}
?>