<?php
include "../model/conn.php";
if(isset($_POST['searchdh'])){
    $searchdh = $_POST['searchdh'];
    $sql = "SELECT hoadon.*,DATE_FORMAT(hoadon.date, '%d-%m-%Y') as date1 ,khachhang.name as tenkh, sach.name as tensach FROM hoadon 
    INNER JOIN khachhang ON hoadon.id_kh = khachhang.id INNER JOIN sach ON hoadon.id_sach = sach.id where khachhang.name like '%$searchdh%'
    or khachhang.sdt like '%$searchdh%' or sach.name like '%$searchdh%'";
    $result = mysqli_query($conn, $sql);
    $data='<table class="table table-bordered" id="formtable">';
    if(mysqli_num_rows($result) > 0){
        $data.='
        <thead>
        <tr>
        <th>Mã Hóa Đơn</th>
        <th>Tên Khách Hàng</th>
        <th>Tên Sách</th>
        <th>Số Lượng Đặt</th>
        <th>Thành tiền</th>
        <th>Ngày Đặt</th>
        <th>Mô Tả</th>
    
        <th style="width: 200px; text-align: center;">Action</th>
    </tr>
                                        </thead>';
        while($row = mysqli_fetch_array($result)){
            $data.='
            <tr>
                                                <td>'.$row['id'].'</td>
                                                <td>'.$row['tenkh'].'</td>
                                                <td>'.$row['tensach'].'</td>
                                                <td>'.$row['soluong'].'</td>
                                                <td>'.$row['gia'].'</td>
                                                <td>'.$row['date1'].'</td>
                                                <td>'.$row['description'].'</td>
                                               

                                                <td><a href="suadonhang.php?idkh='.$row['id'].'" name="suadonhang" class="btn btn-secondary">Sửa</a>
                                                    <a onclick="return confirm("Xóa Đơn Với ID : '.$row['id'].' ?")" href="../controller/xoadonhang.php?iddh='.$row['id'].'" class="btn btn-danger">Xóa</a>
                                                    <a href="xemdonhang.php?iddh='.$row['id'].'" class="btn btn-primary">Xem</a>
                                                    </td>
                                            </tr>';
        }

    }else{
        $data.='<td cosplan="7">Không có bản ghi!</td>';
    }
    $data.='</table>';
    
    echo $data;
}
?>