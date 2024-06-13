<?php
require '../vendor/autoload.php';
use Dompdf\Dompdf;
use Dompdf\Options;

function generateProfitReport($month, $year, $profitData, $totalProfit) {
    $firstDay = date("Y-m-01", strtotime("$year-$month-01"));
    $lastDay = date("Y-m-t", strtotime("$year-$month-01"));

    $content = "
    <html>
        <head>
            <style>
@font-face {
                    font-family: 'DejaVu Sans';
                    font-style: normal;
                    font-weight: normal;
                    src: url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/DejaVuSans.ttf') format('truetype');
                }
                body {
                    font-family: 'DejaVu Sans', sans-serif;
                }
                h1 {
                    text-align: center;
                    font-size: 24px;
                }
                .subheading {
                    text-align: center;
                    font-size: 14px;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                th, td {
                    border: 1px solid black;
                    padding: 8px;
                    text-align: left;
                }
                th {
                    background-color: #f2f2f2;
                }
                tfoot td {
                    font-weight: bold;
                    background-color: #f2f2f2;
                }
            </style>
        </head>
        <body>
            <h1>Báo cáo lợi nhuận tháng $month/$year</h1>
            <div class='subheading'><i>Từ ngày $firstDay Đến ngày $lastDay</i></div>
            <table>
                <thead>
                    <tr>
                        <th>Ngày</th>
                        <th>Tên Sách</th>
                        <th>Giá Nhập</th>
                        <th>Giá Bán</th>
                        <th>Số Lượng</th>
                        <th>Lợi Nhuận</th>
                    </tr>
                </thead>
                <tbody>";

    foreach ($profitData as $row) {
        $content .= "
                    <tr>
                        <td>{$row['ngay']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['gia_goc']}</td>
                        <td>{$row['gia_ban']}</td>
                        <td>{$row['soluong']}</td>
                        <td>{$row['profit']}</td>
                    </tr>";
    }

    $content .= "
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan='5'>Tổng Lợi Nhuận</td>
                        <td>$totalProfit</td>
                    </tr>
                </tfoot>
            </table>
        </body>
    </html>";

    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isRemoteEnabled', true); // Kích hoạt tải font từ URL
    $dompdf = new Dompdf($options);

    $dompdf->loadHtml($content);

    $dompdf->setPaper('A4', 'portrait');

    $dompdf->render();

    $pdfPath = '../view/resource/profit_report_prev_month.pdf';

    file_put_contents($pdfPath, $dompdf->output());

    return $pdfPath;
}
function indonhang($iddh, $namekh, $sdt, $email, $diachi, $theloaikh, $namesach, $soluong, $giaban, $thanhtien, $ngaydat, $description){
    $kq = "<html>
        <head>
            <style>
            @font-face {
                            font-family: 'DejaVu Sans';
                            font-style: normal;
                            font-weight: normal;
                            src: url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/DejaVuSans.ttf') format('truetype');
                        }
                        body {
                            font-family: 'DejaVu Sans', sans-serif;
                        }
                        h1 {
                            text-align: center;
                            font-size: 24px;
                        }
                        .subheading {
                            text-align: center;
                            font-size: 14px;
                        }
                        .tbl_thongtindathang {
                            width: 100%;
                            border-collapse: collapse;
                        }
                        th, td {
                            border: 1px solid black;
                            padding: 8px;
                            text-align: left;
                        }
                        th {
                            background-color: #f2f2f2;
                        }
                        tfoot td {
                            font-weight: bold;
                            background-color: #f2f2f2;
                        }
                        .ttkh{
                            width: 140px;
                            text-align: center;
                        }
                        .ttdh{
                            text-align: center;
                        }
                    </style>
</head>";
    $kq.= "<body>";
    $kq.= '<h1>Phần Mềm Quản Lý Nhà Sách Hoàng Hà</h1>
    <h5>Thông tin khách hàng</h5>
    <table class="tbl_thongtindathang">
        <tr>
            <th class="ttkh">Tên Khách Hàng: </th>
            <td>'.$namekh.'</td>
        </tr>
        <tr>
            <th class="ttkh">SĐT: </th>
            <td>'.$sdt.'</td>
        </tr>
        <tr>
            <th class="ttkh">Email: </th>
            <td>'.$email.'</td>
        </tr>
        <tr>
            <th class="ttkh">Sale OF: </th>
            <td>'.$theloaikh.'</td>
        </tr>
        <tr>
            <th class="ttkh">Địa Chỉ: </th>
            <td>'.$diachi.'</td>
        </tr>
    </table>';

    $kq.='<h5>Thông tin đặt hàng</h5>
    <table class="tbl_thongtindathang">
        <tr>
            <th class="ttdh">STT</th>
            <th class="ttdh">Tên Sách</th>
            <th class="ttdh">Số Lượng Đặt Mua</th>
            <th class="ttdh">Giá Bán</th>
            <th class="ttdh">Ngày Đặt Mua</th>
        </tr>
        <tr>
            <td>1</td>
            <td>'.$namesach.'</td>
            <td>'.$soluong.'</td>
            <td>'.$giaban.'</td>
            <td>'.$ngaydat.'</td>
        </tr>
        <tr>
            <td colspan="4" class="ttdh">Thành Tiền:</td>
            <td>'.$thanhtien.'</td>
        </tr>
    </table>
    <h5>Mô tả</h5>
    <p>
        '.$description.'
    </p>
    ';

    $kq.='</body>
</html>';    
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isRemoteEnabled', true); // Kích hoạt tải font từ URL
    $dompdf = new Dompdf($options);

    $dompdf->loadHtml($kq);

    $dompdf->setPaper('A4', 'portrait');

    $dompdf->render();

    $pdfPath = '../view/resource/indonhang'.$iddh.'.pdf';

    file_put_contents($pdfPath, $dompdf->output());

    return $pdfPath;
}
function inphieunhaphang($iddh, $tenncc, $diachi, $sdt, $email, $mota, $namesach, $soluong, $gianhap, $giaban, $thanhtien, $tacgia, $date){
    $kq = "<html>
        <head>
            <style>
            @font-face {
                            font-family: 'DejaVu Sans';
                            font-style: normal;
                            font-weight: normal;
                            src: url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/DejaVuSans.ttf') format('truetype');
                        }
                        body {
                            font-family: 'DejaVu Sans', sans-serif;
                        }
                        h1 {
                            text-align: center;
                            font-size: 24px;
                        }
                        .subheading {
                            text-align: center;
                            font-size: 14px;
                        }
                        .tbl_thongtindathang {
                            width: 100%;
                            border-collapse: collapse;
                        }
                        th, td {
                            border: 1px solid black;
                            padding: 8px;
                            text-align: left;
                        }
                        th {
                            background-color: #f2f2f2;
                        }
                        tfoot td {
                            font-weight: bold;
                            background-color: #f2f2f2;
                        }
                        .ttkh{
                            width: 140px;
                            text-align: center;
                        }
                        .ttdh{
                            text-align: center;
                        }
                    </style>
</head>";
$kq.= "<body>";
    $kq.= '<h1>Phần Mềm Quản Lý Nhà Sách Hoàng Hà</h1>
    <h5>Thông tin NCC</h5>
    <table class="tbl_thongtindathang">
        <tr>
            <th class="ttkh">Tên NCC: </th>
            <td>'.$tenncc.'</td>
        </tr>
        <tr>
            <th class="ttkh">SĐT: </th>
            <td>'.$sdt.'</td>
        </tr>
        <tr>
            <th class="ttkh">Email: </th>
            <td>'.$email.'</td>
        </tr>
       
        <tr>
            <th class="ttkh">Địa Chỉ: </th>
            <td>'.$diachi.'</td>
        </tr>
         <tr>
            <th class="ttkh">Mô Tả: </th>
            <td>'.$mota.'</td>
        </tr>
    </table>';

    $kq.='<h5>Thông tin đặt hàng</h5>
    <table class="tbl_thongtindathang">
        <tr>
            <th class="ttdh">STT</th>
            <th class="ttdh">Tên Sách</th>
            <th class="ttdh">Số Lượng</th>
            <th class="ttdh">Giá Nhập</th>
            <th class="ttdh">Giá Bán</th>
            <th class="ttdh">Tác Giả</th>
            <th class="ttdh">Ngày Đặt</th>
        </tr>
        <tr>
            <td>1</td>
            <td>'.$namesach.'</td>
            <td>'.$soluong.'</td>
            <td>'.$gianhap.'</td>
            <td>'.$giaban.'</td>
            <td>'.$tacgia.'</td>
            <td>'.$date.'</td>
        </tr>
        <tr>
            <td colspan="6" class="ttdh">Thành Tiền:</td>
            <td>'.$thanhtien.'</td>
        </tr>
    </table>
    
    ';

    $kq.='</body>
</html>';    
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isRemoteEnabled', true); // Kích hoạt tải font từ URL
    $dompdf = new Dompdf($options);

    $dompdf->loadHtml($kq);

    $dompdf->setPaper('A4', 'portrait');

    $dompdf->render();

    $pdfPath = '../view/resource/inphieunhap'.$iddh.'.pdf';

    file_put_contents($pdfPath, $dompdf->output());

    return $pdfPath;
}
?>