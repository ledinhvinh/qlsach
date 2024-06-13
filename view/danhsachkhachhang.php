<?php
session_start();
include "../model/conn.php";
if (isset($_SESSION['login']['username']) && $_SESSION['login']['username']) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Document</title>

        <!-- Custom fonts for this template-->
        <link href="../view/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center"
                    href="index.php">
                    <div class="sidebar-brand-icon rotate-n-15">

                    </div>
                    <div class="sidebar-brand-text mx-3">HoangHa</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">

                        <span>Tổng Quan</span></a>
                </li>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">

                        <span>Đơn Hàng</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">


                            <a class="collapse-item" href="danhsachdonhang.php">Danh Sách Đơn Hàng</a>
                            <a class="collapse-item" href="nhapnguonhang.php">Tạo/Nhập Nguồn Hàng</a>
                            <a class="collapse-item" href="dsnhapnguonhang.php">DS Nhập Nguồn Hàng</a>
                            <a class="collapse-item" href="nhacungcap.php">Nhà Cung Cấp</a>
                        </div>
                    </div>
                </li>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listsach.php">

                        <span>Sản Phẩm Sách</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapse" aria-expanded="true"
                        aria-controls="collapse">

                        <span>Khách Hàng</span>
                    </a>
                    <div id="collapse" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">

                            <a class="collapse-item" href="danhsachkhachhang.php">Danh Sách Khách Hàng</a>
                            <a class="collapse-item" href="nhomkhachhang.php">Nhóm Khách Hàng</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="baocao.php">

                        <span>Báo Cáo</span></a>
                </li>


                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>



            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->
                        <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                    aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                placeholder="Search for..." aria-label="Search"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>



                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="profile">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="settings">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../index.php" name="logout" value="Logout">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                        <?php
                                        if (isset($_POST['logout']) && $_POST['logout']) {
                                            unset($_SESSION['login']['username']);
                                            header("location: ../index.php");
                                        }
                                        ?>
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <div class="container-fluid">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary d-flex justify-content-between">Danh Sách Khách Hàng</h6>
                                <a href="themoikhachhangexcel.php">Thêm Mới Với File Excel</a>
                            </div>
                            <div class="card-body">
                                <div class="form-row">

                                    <div class="form-group col-md-2">
                                        <div>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#form">
                                                Thêm Mới
                                            </button>
                                        </div>

                                        <div class="modal fade" id="form" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header border-bottom-0">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tạo Mới Khách Hàng
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="../controller/khachhang.php" method="post">
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="email1">Name</label>
                                                                <input type="text" class="form-control" name="name"
                                                                    aria-describedby="emailHelp" placeholder="Enter name">

                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">SDT</label>
                                                                <input type="number" class="form-control" id="phone" min="0"
                                                                    placeholder="" name="sdt">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Email</label>
                                                                <input type="email" class="form-control" id="phone" 
                                                                    placeholder="" name="email">
                                                            </div>


                                                            <div class="form-group col-md-6">
                                                                <label for="">Nhóm KH</label>
                                                                <select class="form-control" name="nhomkh">
                                                                    <?php
                                                                    $sqlSelecttheloai = "SELECT * FROM nhomkhachhang";
                                                                    $result = mysqli_query($conn, $sqlSelecttheloai);
                                                                    if (mysqli_num_rows($result) > 0) {
                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                            ?>
                                                                            <option value="<?php echo $row['id'] ?>">
                                                                                <?php echo $row['name_kh'] ?>
                                                                            </option>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="">Địa Chỉ:</label>
                                                                <input type="text" class="form-control" id="address"
                                                                    placeholder="Địa Chỉ" name="diachi">
                                                            </div>

                                                        </div>
                                                        <div
                                                            class="modal-footer border-top-1 d-flex justify-content-center">
                                                            <input type="submit" class="btn btn-primary" name="uploadclick"
                                                                value="Thêm Mới">
                                                                
                                                                
                                                        </div>
                                                        
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        

                                            <div class="input-group">
                                                <input type="text" class="form-control" name="searchkh" id="searchkh"
                                                    required placeholder="Tìm kiếm thông tin khách hàng" autofocus>
                                            </div>
                                        
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="formtable">
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
                                        <tbody>
                                            <?php
                                            $sql = "SELECT khachhang.*, nhomkhachhang. *, nhomkhachhang.name_kh as theloaikh FROM khachhang INNER JOIN nhomkhachhang on khachhang.id_nhomkh = nhomkhachhang.id GROUP BY khachhang.id";
                                            $result = mysqli_query($conn, $sql);
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_array($result)) {

                                                    ?>
                                                    
                                                    <tr>
                                                        <td><?php echo $row[0] ?></td>
                                                        <td><?php echo $row[1] ?></td>
                                                        <td><?php echo $row['sdt'] ?></td>
                                                        <td><?php echo $row['theloaikh'] ?></td>
                                                        <td><?php echo $row['diachi'] ?></td>


                                                        <td><a href="suakhachhang.php?idkh=<?php echo $row[0] ?>"
                                                                class="btn btn-secondary">Sửa</a>
                                                            <a onclick="return confirm('Xác Nhận Xóa ?')"
                                                                href="../controller/xoakhachhang.php?idkh=<?php echo $row[0] ?>"
                                                                class="btn btn-danger">Xóa</a>
                                                        </td>
                                                        <td><a href="createdon.php?id=<?php echo $row[0] ?>"
                                                                class="btn btn-success">Tạo đơn hàng</a></td>
                                                    </tr>
                                                    </div>
                                                   
                                                <?php
                                                }
                                            }
                                            ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Website 2024</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->


            <!-- Bootstrap core JavaScript-->
            <script src="../view/vendor/jquery/jquery.min.js"></script>
                    <script src="../view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    <script src="../view/vendor/jquery-easing/jquery.easing.min.js"></script>

                    <!-- Custom scripts for all pages-->
                    <script src="js/sb-admin-2.min.js"></script>
                    <!-- Page level plugins -->
                    <script src="../view/vendor/chart.js/Chart.min.js"></script>

                    <!-- Page level custom scripts -->
                    <script src="js/demo/chart-area-demo.js"></script>
                    <script src="js/demo/chart-pie-demo.js"></script>
                    <script src="js/demo/chart-bar-demo.js"></script>
                    <script src="../view/vendor/datatables/jquery.dataTables.min.js"></script>
                    <script src="../view/vendor/datatables/dataTables.bootstrap4.min.js"></script>
                    <script src="js/demo/datatables-demo.js"></script>
                    <script src="js/searchsach.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>

                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script>
                $(document).ready(function(){
                    $("#searchkh").keyup(function(){
                        var search = $("#searchkh").val();
                        $.ajax({
                            url:'xulysearchkh.php',
                            method:'post',
                            data:{searchkh : search},
                            success:function(response){
                                $("#formtable").html(response)
                            }
                        })
                    })
                })
            </script>
    </body>

    </html>
    <?php
} else {
    header("location: ../index.php");
}
?>