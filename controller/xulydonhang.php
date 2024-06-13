<?php
include "../model/conn.php";
if (isset($_POST['themdonhang']) && $_POST['themdonhang']) {
    $id_kh = $_POST['id'];
    $id_sach = $_POST['id_sach'];
    $soluong = $_POST['soluong'];
    $gia = $_POST['gia'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $sltonhang = $_POST['tonhang'];
    // Validate if id_sach exists
    $check_sql = "SELECT id FROM sach WHERE id = '$id_sach'";
    $check_result = mysqli_query($conn, $check_sql);
    if (mysqli_num_rows($check_result) == 0) {
        die("Sách với ID $id_sach không tồn tại.");
    }

    $sqlupdate_sl_sach="UPDATE `sach` SET `soluong`='.$sltonhang.' WHERE `id`='$id_sach'";
    $rs = mysqli_query($conn, $sqlupdate_sl_sach);
    if(!$rs){
        echo "Lỗi: " . mysqli_error($conn);
    }
    $sql = "INSERT INTO `hoadon`(`id`, `id_kh`, `id_sach`, `soluong`, `gia`, `date`, `description`) VALUES ('', '$id_kh', '$id_sach', '$soluong', '$gia', '$date', '$description')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: ../view/danhsachdonhang.php");
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }

    // Cập nhật số lượng đơn hàng
    
}
?>
