<?php
session_start();
include "../model/conn.php";
$username = $_POST['user'];
$password = $_POST['pass'];

$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$query = mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($query);
if ($num_rows==0) {
    
    echo'<h6>Thông tin tài khoản không chính xác</h6>';
    header("location: ../index.php");
    
}else{
    //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
    $_SESSION['login']['username'] = $username;
    
    header("location: ../view/index.php");
}
?>