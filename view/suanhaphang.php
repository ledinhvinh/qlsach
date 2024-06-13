<?php
session_start();
include "../model/conn.php";
if (isset($_SESSION['login']['username']) && $_SESSION['login']['username']) {
    if (isset($_GET['idpnh'])) {
        # code...


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
                        <!-- Begin Page Content -->
                        <div class="container-fluid">
                            <form action="../controller/suanhapnguonhang.php" method="POST" id="orderForm">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3  d-flex justify-content-between">
                                                <h6 class="m-0 font-weight-bold text-primary">Sửa Thông Tin Nhập Hàng</h6>
                                                <a href="nhapexcel.php">Nhập với file</a>
                                            </div>
                                            <br>
                                            <?php
                                            $idpnh = $_GET['idpnh'];

                                            $sql = "SELECT phieunhaphang.*, nhacungcap.*, phieunhaphang.tacgia AS tacgia1 FROM phieunhaphang 
                                        INNER JOIN nhacungcap on phieunhaphang.id_nhacungcap = nhacungcap.id WHERE phieunhaphang.id = $idpnh";
                                            $rs = mysqli_query($conn, $sql);
                                            if ($row = mysqli_fetch_array($rs)) {
                                                
                                                   $tacgia = $row['tacgia'];
                                                   $date = $row['date'];
                                                   $namencc = $row['name'];
                                                   $diachi = $row['diachi'];
                                                   $sdt = $row['phone'];
                                                   $email = $row['email'];
                                                   $description = $row['description'];
                                                $idncc = $row['id_nhacungcap'];
                                                    ?>
                                                    <input type="hidden" class="form-control" name="idpnh" value="<?php echo $idpnh?>">
                                                    <div class="form-group">
                                                        <div class="form-group col-md-12">
                                                            <label for="">Tên Sách:</label>
                                                            <input type="text" class="form-control" name="tensach"
                                                                value="<?php echo $row['namesach'] ?>">
                                                        </div>
                                                    </div>
                                                
                                                    <div class="form-row">
                                                        <div class="form-group col-md-3">
                                                            <label for="">Số Lượng</label>
                                                            <input type="number" class="form-control" name="soluong" id="soluong"
                                                                value="<?php echo $row['soluong'] ?>">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="">Giá Nhập</label>
                                                            <input type="number" class="form-control" name="gianhap" id="gianhap"
                                                                value="<?php echo $row['gianhap'] ?>">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="">Giá Bán</label>
                                                            <input type="number" class="form-control" name="giaban" id="giaban"
                                                                value="<?php echo $row['giaban'] ?>">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="">Thành Tiền</label>
                                                            <input type="number" class="form-control" readonly name="thanhtien"
                                                                id="thanhtien" value="<?php echo $row['thanhtien'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-3">
                                                            <label for="">Thể Loại</label>
                                                            <select id="theloai" name="theloai" class="form-control">

                                                                <?php
                                                                $sqlSelecttheloai = "SELECT * FROM theloai";
                                                                $result = mysqli_query($conn, $sqlSelecttheloai);

                                                                if (mysqli_num_rows($result) > 0) {
                                                                    while ($row = mysqli_fetch_array($result)) {
                                                                        ?>
                                                                        <option value="<?php echo $row['id'] ?>">
                                                                            <?php echo $row['name'] ?>
                                                                        </option>
                                                                        <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="">Tác Giả</label>
                                                            <input type="text" class="form-control" name="tacgia_ex"
                                                                value="<?php echo $tacgia?>">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="">Ngày Nhập</label>
                                                            <input type="date" class="form-control" min="" max="" name="date" id="date"
                                                                value="<?php echo $date ?>">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="">Ảnh:(nếu có)</label>
                                                            <input type="file" class="form-control" name="img">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="card shadow mb-4">
                                                    <div class="card-header py-3">
                                                        <h6 class="m-0 font-weight-bold text-primary">Thông Tin NCC</h6>

                                                    </div>
                                                    <br>

                                                    <div class="form-group">
                                                        <div class="form-group col-md-12 search-box">
                                                            <input type="text" name="searchncc" placeholder="Tìm Kiếm..."
                                                                id="searchncc">
                                                            <div id="result"></div>
                                                        </div>
                                                        <button type="button" id="btnsearchncc" style="margin-left: -16px"
                                                            class="btn btn-primary">Chọn</button>
                                                    </div>

                                                    <div id="formdata">
                                                        <input type="hidden" class="form-control" id="idncc" name="idncc" value="<?php echo $idncc?>">
                                                        <div class="form-group">
                                                            <div class="form-group col-md-12">
                                                                <label for="">Tên NCC</label>
                                                                <input class="form-control" readonly id="tenncc" name="tenncc" value="<?php echo $namencc?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <label for="">Địa chỉ</label>
                                                                <input class="form-control" readonly id="diachi" name="diachi" value="<?php echo $diachi?>">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="">SĐT:</label>
                                                                <input class="form-control" readonly id="sdt" name="sdt" value="<?php echo $sdt?>">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="">Email</label>
                                                                <input class="form-control" readonly id="email" name="email" value="<?php echo $email?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="">Mô tả</label>
                                                            <input class="form-control" readonly id="mota" name="mota" value="<?php echo $description?>">
                                                        </div>
                                                    <?php

                                                
                                            }
                                            ?>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <input type="submit" class="btn btn-primary" name="suanhapnguonhang"
                                                    value="Sửa Nhập Nguồn Hàng">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
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
                        $(document).ready(function () {
                            $("#searchncc").keyup(function () {
                                var search = $(this).val();
                                // alert(search);
                                if (search !== "") {
                                    $.ajax({
                                        url: 'xulysearchncc.php',
                                        method: 'POST',
                                        data: { searchncc: search },
                                        success: function (response) {
                                            $("#result").html(response);
                                            $('#result').css('display', 'block');

                                            /// Click to enter result ///
                                            $("#result a").on("click", function () {
                                                $("#searchncc").val($(this).html());
                                            });

                                            $("#searchncc").focusout(function () {
                                                window.setTimeout(function () {
                                                    $('#result').css('display', 'none');
                                                }, 500);
                                            });
                                        }

                                    })
                                } else {
                                    $("#result").html("");
                                    $("#result").css('display', 'none');
                                }

                            })

                            $("#btnsearchncc").click(function () {
                                var evclickncc = $("#searchncc").val();
                                if (evclickncc === "") {
                                    alert("Không tìm thấy thông tin nhà cung cấp!!");
                                    $("#searchncc").focus();
                                    $("#searchncc").val("");
                                } else {
                                    $.ajax({
                                        url: 'timnhacungcap.php',
                                        method: 'POST',
                                        data: { evclickncc: evclickncc },
                                        success: function (data) {
                                            $("#formdata").html(data);
                                        }
                                    });
                                }
                            });
                            $("#soluong, #gianhap").on("input", function () {
                                var soluong = parseFloat($("#soluong").val());
                                var gianhap = parseFloat($("#gianhap").val());

                                if (!isNaN(soluong) && !isNaN(gianhap)) {
                                    var mul = soluong * gianhap;
                                    $("#thanhtien").val(mul.toFixed(0));
                                } else if (soluong === "" || gianhap === "") {
                                    $("#thanhtien").val("");
                                }

                                else {
                                    $("#thanhtien").val("");
                                }
                            });


                            $("#orderForm").on("submit", function (e) { });

                            $("#date").prop("max", function () {
                                return new Date().toJSON().split('T')[0];
                            });
                        });

                    </script>

        </body>


        </html>
        <?php

    } else {
        header("location: dsnhapnguonhang.php");
    }
} else {
    header("location: ../index.php");
}
?>