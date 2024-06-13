<?php
include "../model/conn.php";
$evclickncc = $_POST['evclickncc'];
$sql = "SELECT * FROM nhacungcap where nhacungcap.name = '$evclickncc'";
$query = mysqli_query($conn, $sql);
$data = '';

if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        $data .= '
        <div id="formdata">
                                            <input type="hidden" class="form-control" readonly id="idncc" name="idncc" value="'.$row['id'].'">
                                            <div class="form-group">
                                                <div class="form-group col-md-12">
                                                    <label for="">Tên NCC</label>
                                                    <input class="form-control" readonly id="tenncc" name="tenncc" value="'.$row['name'].'">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="">Địa chỉ</label>
                                                    <input class="form-control" readonly id="diachi" name="diachi" value="'.$row['diachi'].'">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">SĐT:</label>
                                                    <input class="form-control" readonly id="sdt" name="sdt" value="'.$row['phone'].'">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="">Email</label>
                                                    <input class="form-control" readonly id="email" name="email" value="'.$row['email'].'">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">Mô tả</label>
                                                <input class="form-control" readonly id="mota" name="mota" value="'.$row['description'].'">
                                            </div>

                                        </div>';
    }
}

echo $data;
?>