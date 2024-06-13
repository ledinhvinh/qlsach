<?php
include "../model/conn.php";
if (isset($_POST['searchkh'])) {
    $search = $_POST['searchkh'];
    $sql = "SELECT khachhang.*, nhomkhachhang. *, nhomkhachhang.name_kh as theloaikh FROM khachhang INNER JOIN nhomkhachhang on khachhang.id_nhomkh = nhomkhachhang.id where khachhang.name like '%$search%' or khachhang.sdt like '%$search%' GROUP BY khachhang.id ";
    $result = mysqli_query($conn, $sql);
    $data = '<table class="table table-bordered" id="formtable">';
    if (mysqli_num_rows($result) > 0) {
        $data.='
        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên KH</th>
                                                <th>SĐT</th>
                                                <th>Nhóm KH</th>
                                                <th>Địa Chỉ</th>
                                                <th style="width: 138px; text-align: center;">Action</th>
                                                <th style="width: 150px;"></th>
                                            </tr>
                                        </thead>
        ';
        while ($row = mysqli_fetch_array($result)) {
            $data.='<tbody>
                        <tr>
                            <td>'.$row[0].'</td>
                            <td>'.$row[1].'</td>
                            <td>'.$row['sdt'].'</td>
                            <td>'.$row['theloaikh'].'</td>
                            <td>'.$row['diachi'].'</td>


                            <td><a href="suakhachhang.php?idkh='.$row[0].'"
                                    class="btn btn-secondary">Sửa</a>
                                <a onclick="return confirm("Xác Nhận Xóa ?")"
                                    href="../controller/xoakhachhang.php?idkh='.$row[0].'"
                                    class="btn btn-danger">Xóa</a>
                            </td>
                            <td><a href="createdon.php?id='.$row[0].'"
                                    class="btn btn-success">Tạo đơn hàng</a></td>
                        </tr>
                </tbody>';
        }
    }else {
        $data.='<td cosplan="6">Không có bản ghi!</td>';
    }
    $data.='</table>';

    echo $data;
}
?>