<?php
include "../model/conn.php";
if (isset($_POST['exportfile'])) {
    // Lấy giá trị thể loại được chọn
    $theloai = $_POST['theloai_ex'];
    $startdate = $_POST['startdate_ex'];
    $enddate = $_POST['enddate_ex'];

    if ($theloai != null && $startdate != null && $enddate != null) {

        $sql = "SELECT sach.*, DATE_FORMAT(sach.ngaynhapkho, '%d-%m-%Y') as date,theloai.name as theloaisach FROM sach INNER JOIN theloai on sach.id_theloai = theloai.id WHERE sach.id_theloai = '$theloai' and sach.ngaynhapkho 
    BETWEEN '$startdate' AND '$enddate' GROUP BY sach.id order by sach.id desc";
    } elseif ($theloai == 'tatca' && $startdate != null && $enddate != null) {
        $sql = "SELECT sach.*, DATE_FORMAT(sach.ngaynhapkho, '%d-%m-%Y') as date,theloai.name as theloaisach 
        FROM sach INNER JOIN theloai on sach.id_theloai = theloai.id 
        WHERE sach.ngaynhapkho BETWEEN '$startdate' AND '$enddate' GROUP BY sach.id";

    } else {
        $sql = "SELECT sach.*, DATE_FORMAT(sach.ngaynhapkho, '%d-%m-%Y') as date,theloai.name as theloaisach FROM sach INNER JOIN theloai on sach.id_theloai = theloai.id order by sach.id desc";
    }

    $rs = mysqli_query($conn, $sql);
    $kq = '';
    if (mysqli_num_rows($rs) > 0) {
        $kq .= '
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Sách</th>
                    <th>IMG</th>
                    <th>Thể Loại</th>
                    <th>Ngày Nhập Kho</th>
                    <th>mota</th>
                    <th>Số Lượng</th>
                    <th>Giá Nhập</th>
                    <th>Giá Bán</th>
                    <th>Tác Giả</th>
                </tr>
            </thead>
        ';
        while ($row = mysqli_fetch_array($rs)) {
            $kq .= '
            <tbody id="listbook">
            <tr>
                <td>' . $row["id"] . '></td>
                <td>' . $row["name"] . '></td>
                <td>' . $row["img"] . '></td>
                <td>' . $row["theloaisach"] . '></td>
                <td>' . $row["date"] . '></td>
                <td>' . $row["mota"] . '></td>
                <td>' . $row["soluong"] . '></td>
                <td>' . $row["gia"] . '></td>
                <td>' . $row["giaban"] . '></td>
                <td>' . $row["tacgia"] . '></td>
            </tr>
        </tbody>
            ';
        }
        $kq .= '</table>';

        header("Content-Type: application/xls");
        header("Content-Disposition:attachment; Filename = ListBook.xls");
        echo $kq;
    }
}


?>