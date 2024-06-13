<?php
session_start();
include "../model/conn.php";
require "../vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if (isset($_POST['save_excel_data'])) {
    $fileName = $_FILES['import_file']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowed_ext = ['xls', 'csv', 'xlsx'];
    

    if (in_array($file_ext, $allowed_ext)) {
        $inputFileNamePath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = "0";
        foreach ($data as $row) {
            if ($count > 0) {

                $id = $row['0'];
                $tenkh = $row['1'];
                $sdt = $row['2'];
                $email = $row['3'];
                $diachi = $row['4'];
                $theloai = $row['5'];
                

                
                $sql = "INSERT INTO `khachhang`(`id`, `name`, `sdt`, `email`, `diachi`, `id_nhomkh`) VALUES
                 ('$id','$tenkh','$sdt','$email','$diachi','$theloai')";
                 
                 $result = mysqli_query($conn, $sql);
                 $msg = true;
                
            } else {
                $count = "1";
            }
        }

            if (isset($msg)) {
                $_SESSION['message'] = "Nhập Mới Thành Công";
                header('Location: ../view/themoikhachhangexcel.php');
                exit(0);
            } else {
                $_SESSION['message'] = "Nhập Không Thành Công!!";
                header('Location: ../view/themoikhachhangexcel.php');
                exit(0);
            }
        } else {
            $_SESSION['message'] = "Tập file không hợp lệ";
            header('Location: ../view/themoikhachhangexcel.php');
            exit(0);
    }
}
?>