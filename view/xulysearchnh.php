<?php
include "../model/conn.php";
if(isset($_POST['searchnh'])){
    $searchnh = $_POST['searchnh'];
    $sql = "SELECT phieunhaphang.*, phieunhaphang.id as idpnh ,nhacungcap.* FROM `phieunhaphang`
            INNER JOIN nhacungcap on phieunhaphang.id_nhacungcap = nhacungcap.id
            where phieunhaphang.id like '%$searchnh%' or nhacungcap.name like '%$searchnh%' or phieunhaphang.namesach like '%$searchnh%' or phieunhaphang.date like '%$searchnh%'
            ORDER BY `phieunhaphang`.`id` ASC";
    $result = mysqli_query($conn, $sql);
    $data='<table class="table table-bordered" id="formtable">';
    if(mysqli_num_rows($result) > 0){
        $data.='
        <thead>
                                            <tr>
                                                <th>Mã Hóa Đơn</th>
                                                <th>Tên Nhà Cung Cấp</th>
                                                <th>Tên Sách</th>
                                                <th>Số Lượng</th>
                                                <th>Giá Nhập</th>
                                                <th>Thành tiền</th>
                                                <th>Ngày Đặt</th>

                                                <th style="text-align: center; width: 250px;">Action</th>
                                                <th style="width: 100px;"></th>
                                            </tr>
                                        </thead>
                ';
        while($row = mysqli_fetch_array($result)){
            $data.='
            <tr>
                                                        <td>'.$row['idpnh'].'</td>
                                                        <td>'.$row['name'].'</td>
                                                        <td>'.$row['namesach'].'</td>
                                                        <td>'.$row['soluong'].'</td>
                                                        <td>'.$row['gianhap'].'</td>
                                                        <td>'.$row['thanhtien'].'</td>
                                                        <td>'.$row['date'].'</td>
                                                        <td><a href="#" class="btn btn-secondary">Sửa</a>
                                                            <a onclick="return confirm("Xác Nhận Xóa ?")" href="../controller/xoaphieunhaphang.php?idpnh='.$row['idpnh'].'" class="btn btn-danger">Xóa</a>
                                                        <a href="" class="btn btn-primary">Nhập Hàng</a>
                                                            </td>
                                                            <td>
                                                            
                                                            <a href="indonhang.php" class="btn btn-success">In Đơn</a>
                                                        </td>
                                                    </tr>
                    ';
        }

    }else{
        $data.='<td cosplan="7">Không có bản ghi!</td>';
    }
    $data.='</table>';
    
    echo $data;
}
?>