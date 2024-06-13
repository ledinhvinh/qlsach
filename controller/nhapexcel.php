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
    $idncc = $_POST['idncc'];

    if (in_array($file_ext, $allowed_ext)) {
        $inputFileNamePath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = "0";
        foreach ($data as $row) {
            if ($count > 0) {

                $id = $row['0'];
                $tensach = $row['1'];
                $soluong = $row['2'];
                $gianhap = $row['3'];
                $giaban = $row['4'];
                $thanhtien = $row['5'];
                $theloai = $row['6'];
                $tacgia = $row['7'];
                $date = $row['8'];
                $img = $row['9'];

                $ngay = new DateTime($date);
                $ngay_dd = $ngay->format("Y-m-d");
                $sql = "INSERT INTO `phieunhaphang`(`id`, `id_nhacungcap`, `namesach`, `soluong`, `gianhap`, `giaban`, `thanhtien`, `theloai_pn`, `tacgia`, `date`, `img`) 
                        VALUES ('$id','$idncc','$tensach','$soluong','$gianhap','$giaban','$thanhtien','$theloai','$tacgia','$ngay_dd','$img')";
                 
                 $result = mysqli_query($conn, $sql);
                 $msg = true;
                
            } else {
                $count = "1";
            }
        }

            if (isset($msg)) {
                $_SESSION['message'] = "Successfully Imported";
                header('Location: ../view/dsnhapnguonhang.php');
                exit(0);
            } else {
                $_SESSION['message'] = "Not Imported";
                header('Location: ../view/nhapexcel.php');
                exit(0);
            }
        } else {
            $_SESSION['message'] = "Invalid File";
            header('Location: ../view/nhapexcel.php');
            exit(0);
    }
}
?>