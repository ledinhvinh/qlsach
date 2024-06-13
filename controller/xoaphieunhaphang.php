<?php
include "../model/conn.php";
if (isset($_GET['idpnh'])) {
    $id = $_GET['idpnh'];
    $sql = "DELETE FROM `phieunhaphang` WHERE phieunhaphang.id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
       
        header("location: ../view/dsnhapnguonhang.php");
    }else {
        echo("Error description: " .mysqli_error($conn));
    }
}
else{
    header("location: ../view/dsnhapnguonhang.php");
}
?>