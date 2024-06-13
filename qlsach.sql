-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 11, 2024 lúc 12:42 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlsach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `sdt` int(11) DEFAULT NULL,
  `diachi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`, `name`, `sdt`, `diachi`) VALUES
('admin', '1', '', NULL, ''),
('vinh1111', '1', 'asdadsa', 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `id_sach` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id`, `id_kh`, `id_sach`, `soluong`, `gia`, `date`, `description`) VALUES
(113, 129, 110, 12, 2850000, '2024-06-11', 'ok'),
(115, 130, 101, 2, 182000, '2024-05-23', ''),
(117, 126, 101, 2, 247000, '2024-05-23', 'ff'),
(121, 131, 110, 2, 420000, '2024-06-04', 'asdc ok'),
(122, 126, 103, 8, 1140000, '2024-06-10', 'ok');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `id_nhomkh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `name`, `sdt`, `email`, `diachi`, `id_nhomkh`) VALUES
(10, 'Phong Sỹ Ðan ', '332456223', 'PhongSyd1an@gmail.com', 'Hà Nội', 1),
(11, 'Đường Vinh Diệu ', '332456224', 'DuongVinhDieu@gmail.com', 'Hà Nội', 1),
(12, 'Cao Anh Ðức ', '332456274', 'CaoAnhÐuc@gmail.com', 'Hà Nội', 1),
(13, 'Cảnh Anh Duy ', '987654321', 'CanhAnhDuy@gmail.com', 'Hà Nội', 1),
(14, 'An Quốc Khánh ', '987654322', 'AnQuocKhanh@gmail.com', 'Hà Nội', 1),
(15, 'Thiều Minh Hải ', '987654372', 'ThieuMinhHai@gmail.com', 'Hà Nội', 1),
(16, 'Hồ Minh Hiếu ', '987654422', 'HoMinhHieu@gmail.com', 'Hà Nội', 1),
(17, 'Phạm Ðức Long ', '987654472', 'PhamÐucLong@gmail.com', 'Hà Nội', 1),
(18, 'Hầu Ðức Minh ', '987654522', 'HauÐucMinh@gmail.com', 'Hà Nội', 1),
(19, 'Mạch Trí Minh ', '987654572', 'MachTriMinh@gmail.com', 'Hà Nội', 1),
(20, 'Chung Hoàng Mỹ ', '987654622', 'ChungHoangMy@gmail.com', 'Hà Nội', 1),
(21, 'Tông Thuận Phong ', '987654672', 'TongThuanPhong@gmail.com', 'Hà Nội', 1),
(126, 'Vinh', '0987654321', '', 'Hoài Đức-Hà Nội', 1),
(129, 'Quyền', '0229331228', '', 'UBND XÃ Đất Mũi 2', 1),
(130, 'Đức', '09931312', '', '29 Hà Nội 35', 1),
(131, 'Nguyễn Văn A', '0987654321', '', '29 Hà Nội', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`id`, `name`, `diachi`, `phone`, `email`, `description`) VALUES
(1, 'CTY TNHH S', 'UBND XÃ ĐẤT MỚI', 322435789, 'ctys1@gmail.com', 'CTY TNHH S: NCC'),
(2, 'CTY TaoBao', 'Ủy Ban Xã Hồ Nam', 2147483647, 'taobao1@gmail.com', 'CTY Tao : NCC');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhomkhachhang`
--

CREATE TABLE `nhomkhachhang` (
  `id` int(11) NOT NULL,
  `name_kh` varchar(255) DEFAULT 'khachvanglai',
  `sale` int(11) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhomkhachhang`
--

INSERT INTO `nhomkhachhang` (`id`, `name_kh`, `sale`) VALUES
(1, 'Khách Vãng Lai', 5),
(2, 'Khách Thân Quen', 10),
(3, 'VIP', 30),
(5, 'Siêu VIP', 50);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhaphang`
--

CREATE TABLE `phieunhaphang` (
  `id` int(11) NOT NULL,
  `id_nhacungcap` int(11) NOT NULL,
  `namesach` varchar(255) NOT NULL,
  `soluong` double NOT NULL,
  `gianhap` double NOT NULL,
  `giaban` float NOT NULL,
  `thanhtien` double NOT NULL,
  `theloai_pn` int(11) NOT NULL,
  `tacgia` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieunhaphang`
--

INSERT INTO `phieunhaphang` (`id`, `id_nhacungcap`, `namesach`, `soluong`, `gianhap`, `giaban`, `thanhtien`, `theloai_pn`, `tacgia`, `date`, `img`) VALUES
(16, 2, 'Nhật Ký Trong Tù 1234', 120, 2000, 210000, 240000, 1, 'Hồ Chí Minh', '2024-06-07', ''),
(34, 2, 'Chí Phèo', 12, 12500, 22000, 150000, 1, 'Nam Cao', '2024-06-10', ''),
(230, 2, 'Học tarot cho người mới', 12, 25000, 50000, 300000, 1, 'NXB Hà Nội', '2024-06-10', ''),
(231, 2, 'Tiếng Mõ Cầu Trong Gió', 13, 26000, 60000, 338000, 2, 'NXB Hà Nội', '2024-06-10', ''),
(232, 2, 'Mùa Xuân Ở Xứ Sở Nhiệt Đới', 14, 27000, 70000, 378000, 3, 'NXB Hà Nội', '2024-06-10', ''),
(233, 2, 'Hãy Thôi Để Quá Khứ Níu Kéo', 15, 28000, 80000, 420000, 4, 'NXB Hà Nội', '2024-06-10', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `id_theloai` int(11) NOT NULL,
  `ngaynhapkho` date NOT NULL,
  `mota` varchar(1000) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` double NOT NULL COMMENT 'giá nhập',
  `giaban` double NOT NULL COMMENT 'giá bán',
  `tacgia` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`id`, `name`, `img`, `id_theloai`, `ngaynhapkho`, `mota`, `soluong`, `gia`, `giaban`, `tacgia`) VALUES
(101, 'Tô Bình Yên Vẽ Hạnh Phúc (Tái Bản 2022)', '', 1, '2024-05-21', 'Câu chuyện cảm động về tình yêu và sự sống.', 10, 130000, 130000, 'José Mauro de Vasconcelos'),
(102, 'Cây Cam Ngọt Của Tôi', '', 5, '2024-01-05', 'Câu chuyện cảm động về tình yêu và sự sống.', 12, 64800, 100000, 'José Mauro de Vasconcelos'),
(103, 'Vị Thần Của Những Quyết Định', '', 1, '2024-05-21', 'Phương pháp mới giúp giải quyết vấn đề thông qua câu hỏi và vị thần quyết định.', 2, 150000, 150000, 'Universe'),
(104, 'Không Phải Sói Nhưng Cũng Đừng Là Cừu', 'Screenshot 2024-05-11 084935.png', 1, '2023-07-08', 'Sự thấu suốt và thách thức lối tư duy của bạn.', 14, 86900, 120000, 'Lê Bảo Ngọc'),
(105, 'Chuyện Tâm Lý Trong Phòng Pháp Lý', '439024754_945137823958230_6552558436107716295_n.jpg', 1, '2023-10-10', 'Sự thấu suốt và thách thức lối tư duy của bạn.', 15, 108800, 120000, 'Lê Bảo Ngọc'),
(106, 'Nóng Giận Là Bản Năng , Tĩnh Lặng Là Bản Lĩnh', '', 5, '2024-04-03', 'Cung cấp những bài học và lời tâm sự về nhân sinh, giúp bạn hiểu rõ hơn về cuộc sống và cách sống hạnh phúc.', 16, 57400, 123000, 'Tống Mặc'),
(108, 'Sổ Tay Nhà Thôi Miên', '', 1, '2024-02-22', 'Câu chuyện hấp dẫn và bí ẩn về những thế giới giả tạo.', 12, 258000, 258000, 'Cao Minh'),
(110, 'Hãy Tìm Tôi Giữa Cánh Đồng', 'Screenshot 2024-04-07 163931.png', 1, '2024-01-18', 'Thái độ và chân lý hiểu biết về công việc và cuộc sống.', 0, 211050, 300000, 'Cao Minh'),
(230, 'Rèn Luyện Tư Duy Phản Biện', '', 1, '2024-05-17', 'Mở rộng tầm nhìn và tri thức thông qua thu thập ý tưởng và đức tin từ mọi người.', 12, 100000, 185000, 'Nhà Xuất Bản Phụ Nữ'),
(231, 'Yêu Những Ngày Nắng Chẳng Ghét Những Ngày Mưa', '', 6, '2024-06-07', 'Thế giới đầy màu sắc, truyền cảm hứng và chữa lành tâm hồn', 21, 200000, 200000, 'Nhà Xuất Bản Phụ Nữ'),
(359, ' Ông già và biển cả', '', 1, '2024-05-03', 'Tác phẩm này được viết theo thể loại truyện viễn tưởng và được nhiều người đọc biết đến với nguyên lý “tảng băng trôi” với lý thuyết là một phần nổi - bảy phần chìm. Câu chuyện xoay quanh về cuộc đối đầu không cân sức giữa ông lão đánh cá và con cá hung dữ giữa biển khơi.', 27, 80000, 270000, 'Ernest Hemingway'),
(29091, 'Tô Bình Yên, Vẽ Hạnh Phúc', '', 1, '2024-05-15', 'Bai Hoc Ve Y Nghia Cuoc Song', 70, 80000, 200000, 'Cao Minh'),
(29092, 'Tiền Và Luật Hấp Dẫn', '', 1, '2024-05-10', 'Bản chất sức hút của Luật Hấp dẫn là: chính suy nghĩ của bạn sẽ làm cho bạn cảm thấy tốt hơn, sẽ thu hút tiền, vật chất, mối quan hệ, kinh nghiệm, hoàn cảnh hay sự kiện tốt đẹp hơn cho bạn. Tiền và Luật Hấp dẫn sẽ chỉ cho bạn điều đó trong từng chi tiết của cuộc sống', 20, 124, 250000, 'Elsie Wild'),
(29093, 'Giải Mã Thuật Tiên Tri', '', 1, '2024-05-11', 'Bản chất sức hút của Luật Hấp dẫn là: chính suy nghĩ của bạn sẽ làm cho bạn cảm thấy tốt hơn, sẽ thu hút tiền, vật chất, mối quan hệ, kinh nghiệm, hoàn cảnh hay sự kiện tốt đẹp hơn cho bạn. Tiền và Luật Hấp dẫn sẽ chỉ cho bạn điều đó trong từng chi tiết của cuộc sống', 20, 124, 250000, 'Elsie Wild'),
(29094, 'Tu Tâm', '', 2, '2024-05-10', 'Tu tâm dạy chúng ta tu tâm dưỡng tính theo giáo lý nhà Phật. Từ các ham muốn vật chất như danh lợi, địa vị, tiền tài, sắc dục đến các ham muốn tinh thần như sức khỏe và an lạc thân tâm đều được tác giả phân tích, giảng giải thông qua các công án thiền và những câu chuyện thực tế đời thường sinh động, dễ đọc, dễ hiểu.', 21, 87, 258000, 'Mộc Mộc'),
(29095, 'Hoà Thượng Nói Với Doanh Nhân', '', 3, '2024-05-11', 'Nhận thức là một hòn đảo, hòn đảo càng lớn thì lĩnh vực chúng ta chưa biết tới càng rộng. Tri thức, văn hóa, khoa học đã khơi mở tư tưởng cho con người, nhưng đừng tùy tiện nói: Tôi biết rồi.”\r\nĐối xử tốt với người khác, đối xử tốt với xã hội, đối xử tốt với thiên nhiên, suy cho cùng chính là đối xử tốt với chính mình.”', 20, 76, 150000, 'Diệu Hoa Pháp Sư'),
(29096, 'Tâm Và Thuật Trong Đối Nhân Xử Thế\r\n', '', 1, '2024-05-10', 'Một triết gia nổi tiếng từng nói: “Thói quen là một loại sức mạnh vừa ngoan cường lại vừa mạnh mẽ. Nó có thể làm chúa tể cuộc đời của con người. Cho nên, ai cũng cần phải thông qua giáo dục để bồi dưỡng nên những thói quen tốt đẹp.”\r\nVì vậy, các lời khuyên về nguyên tắc đối nhân xử thế trong TÂM & THUẬT TRONG ĐỐI NHÂN XỬ THẾ sẽ giúp bạn “học một lần, cả đời được lợi”!\r\nXã hội càng phát triển, con người càng có nhiều mối quan hệ phức tạp, vì thế muốn làm nên sự nghiệp lớn, tất yếu mỗi người phải cần có “tâm” và “thuật”.', 26, 158, 200000, 'MÃ NGÂN XUÂN - VIÊN LỆ BÌNH'),
(29097, 'Sống Trong Ánh Sáng', '', 6, '2024-05-10', 'Cuốn sách Sống trong Ánh Sáng của tác giả Shakti Gawain. Cuốn sách đã tạo ra một tác động mạnh mẽ trong lần xuất bản đầu tiên, được dịch ra hơn 35 thứ tiếng, bán được hơn 10 triệu bản và dành được sự đón nhận nồng nhiệt của hàng triệu người trên khắp thế giới.', 20, 124, 190000, 'Shakti Gawain'),
(29098, 'Vòng Tròn Bất Tận\r\n', '', 4, '2024-05-10', 'Vòng Tròn Bất Tận\r\n\r\n“Một cuốn sách thông thái cả về tâm linh và đời sống. Glassman là một vị thầy sáng suốt với phương tiện thiện xảo, có thể làm sáng tỏ những chủ đề sâu xa trong Thiền.”', 20, 45, 189000, 'NXB Hồng Đức'),
(29099, 'Đức Phật Trong Tấm Gương Của Bạn\r\n', '', 2, '2024-05-10', 'Đức Phật Trong Tấm Gương Của Bạn\r\n\r\nBất kể bạn đọc cuốn sách này vì tò mò hay có nhu cầu nâng cao đời sống tinh thần và hoàn cảnh của mình, hãy nỗ lực kiên trì làm theo các lời khuyên thực tế được cung cấp trong cuốn sách này. Có thể một số khái niệm Phật giáo ở đây dường như kỳ lạ hoặc cách xa hành trình tâm linh của riêng bạn, nhưng nếu bạn đang gặp khó khăn thì đã đến lúc tự mở cánh cửa để nhìn thấy một điều gì đó mới mẻ trong cuộc đời', 120, 124, 250000, 'Nhiều Tác Giả'),
(29101, 'Hạnh Phúc Đến Từ Sự Biến Mất', '', 4, '2024-05-15', 'ạnh Phúc Đến Từ Sự Biến Mất Mọi người đều muốn cuộc sống diễn ra êm đềm, nhưng mọi thứ chẳng mấy khi như mong đợi. Dù chỉ là những va vấp trên đường hay khủng hoảng thực sự, chúng ta cũng sống trong một thế giới của những sự kiện không mong muốn mà không năng lực ý chí nào ngăn cản được. Trong Hạnh Phúc Đến Từ Sự Biến Mất: Ajahn Brahm giúp chúng ta học cách trừ bỏ cơn gió ngược, tức những mong đợi sai lầm, và thay vào đó đi theo con đường giác ngộ của Đức Phật. Một khi giải tỏa sự dính mắc vào quá khứ và tương lai, vào bản thân và người khác, chúng ta có thể trực tiếp trải nghiệm trạng thái thanh tĩnh tự nhiên, khám phá phúc lạc của khoảnh khắc hiện tại. Trong không gian ấy, chúng ta hiểu biến mất là gì. Ajahn Brahm, người hướng dẫn đầy sáng tạo về phúc lạc của thiền, sẽ chỉ ra rằng chuyến hành trình ấy tràn ngập niềm vui và rất đáng thực hiện.', 20, 104000, 250000, 'NXB Hồng Đức'),
(29102, 'Chú Hổ Ma Thuật: Vua Sư Tử Đá Banh', '', 5, '2024-05-15', 'Trong tập này, các bạn sẽ gặp được nhiều nhân vật nổi tiếng trong rừng sâu, không chỉ có vua sư tử mà còn có sói xám, khủng long, tê giác, hổ vằn… Đây là những con vật to lớn và hung tợn mà ai nghe đến cũng đều giật mình sợ hãi. Nhưng trong tập này, chúng ta sẽ thấy một bộ mặt hoàn toàn khác của chúng. Vua sư tử hiểu chuyện lắm, còn biết đá banh cùng con người nữa. Còn sói xám con thì thật thà và hiền lành, muốn đi học và kết bạn với tất cả các loài. Còn khủng long, tê giác, hổ vằn… thì sao? Vô số câu chuyện hấp dẫn đang chờ các bạn tìm đọc trong tập “Vua sư tử đá banh” đó nhé.', 6, 52000, 58000, 'NXB Hồng Đức'),
(29103, 'Nàng heo Annie gầy còm', '', 5, '2024-05-15', 'Nàng Heo Annie Gầy Còm.Liều thuốc tăng cân thần kỳ của Annie. Một triết lý sống nhẹ nhàng và vui tươi. Ddành cho các bạn nhỏ.Hạnh phúc… đến từ đâu?. Phải chăng là có thật nhiều tiền?. Là được tiêu tiền thỏa thích?. Hay bước lên những nấc thang thành công cao hơn?', 20, 80000, 150000, 'NXB Hồng Đức'),
(29104, 'Sách Chú Hổ Ma Thuật: Ảo Thuật Gia Gian Xảo', '', 5, '2024-05-14', 'Lần này Chú Hổ Ma Thuật đã gặp phải một đối thủ đáng gờm “nhà ảo thuật” phép thuật cao cường. Hắn không chỉ nhanh trí mà còn gian xảo, khiến Chú Hổ Ma Thuật và Tiểu Bảo bao phen lao đao. Hắn không chỉ ăn cắp chiếc dù bay thần kỳ, còn vu oan giá họa cho Chú Hổ Ma Thuật và Tiểu Bảo, khiến Tiểu Bảo bị tống vào ngục, còn Chú Hổ Ma Thuật bị cảnh sát truy lùng. Kiếp nạn này liệu Chú Hổ Ma Thuật có vượt qua? Cuối cùng công lý có đứng về phía người ngay thẳng? Các bạn hãy cùng theo dõi câu chuyện hấp dẫn này trong cuốn “Ảo thuật gia gian xảo” nhé', 22, 49000, 79000, 'NXB Hồng Đức'),
(29105, 'Sách Chú Hổ Ma Thuật: Vị Khách Thần Bí Lúc Nửa Đêm', '', 5, '2024-05-14', 'Ai là vị khách thần bí lúc nửa đêm? Vị khách đến đã làm xáo trộn cuộc sống của Tiểu Bảo và bà nội như thế nào? Ở trường Tiểu Bảo và Chú Hổ Ma Thuật đã gây náo loạn ra sao? Các bạn và cô giáo đã bất ngờ đến thế nào? Các tay “đàn anh” hay bắt nạt các bạn trong trường sẽ bị chú hổ và Tiểu Bảo xử lý ra sao? Cuộc sống trường lớp vui nhộn của Tiểu Bảo sẽ được thể hiện hết trong tập “Vị khách thần bí lúc nửa đêm”. Các bạn đừng bỏ qua những câu chuyện thú vị trong tập này nhé!', 1, 124000, 250000, 'NXB Hồng Đức'),
(29106, 'Sách Chú Hổ Ma Thuật: Thợ Săn Trong Rừng', '', 1, '2024-05-12', 'Trong rừng sâu, nơi bạn bè Chú Hổ Ma Thuật đang sinh sống bỗng xảy ra biến cố, có một tên thợ săn “nhanh như chớp” đang hoành hành. Hắn nhắm chuẩn vô cùng và làm hại muôn loài. Các con thú phải trốn chạy, khổ sở vô cùng. Chú Hổ Ma Thuật trở về liền ra tay giúp đỡ. Nhưng liệu phép thuật của chú có đấu lại cây súng của tên thợ săn không? Trong tập “Thợ săn trong rừng” này còn có câu chuyện của gấu đen và thỏ con cũng vô cùng hấp dẫn, các bạn hãy cùng tìm đọc nhé.', 20, 94000, 250000, 'NXB Hồng Đức'),
(29107, 'Sách Chú Hổ Ma Thuật: Ngôi Trường Tinh Nghịch', '', 5, '2024-05-13', 'Có bạn nào đi học mà dám trộm đề thi chưa? Nỗi sợ thi cử chắc hẳn luôn ám ảnh mỗi chúng ta. Tiểu Bảo cũng vậy, học bài chưa hết mà ngày thi cận kề rồi. Làm sao đây? Chỉ còn cách nhờ Chú Hổ Ma Thuật giúp đỡ thôi. Nhưng không phải chuyện nào chú hổ cũng giúp được đâu, có chuyện chú hổ càng giúp càng rối tung. Kết quả cuối cùng bài thi của Tiểu Bảo ra sao? Cô giáo có phát hiện ra hành vi gian dối của Tiểu bảo không? Vô số tình tiết hấp dẫn sẽ được hé lộ trong tập “Ngôi trường tinh nghịch”, các bạn đừng bỏ lỡ nhé!', 26, 73000, 249000, 'NXB Hồng Đức');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `chuthich` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `name`, `chuthich`) VALUES
(1, 'Văn Học', ''),
(2, 'Tiểu Sử Hồi Kĩ', ''),
(3, 'Kinh Tế - Chính Trị', ''),
(4, 'Tâm Lý - Kĩ Năng Sống', ''),
(5, 'Sách Thiếu Nhi', ''),
(6, 'Nghệ Thuật - Giải Trí', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hoadon_khachhang` (`id_kh`),
  ADD KEY `fk_hoadon_sach` (`id_sach`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_khachang_nhomkhachhang` (`id_nhomkh`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhomkhachhang`
--
ALTER TABLE `nhomkhachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phieunhaphang`
--
ALTER TABLE `phieunhaphang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_phieunhap_nhacungcap` (`id_nhacungcap`),
  ADD KEY `fk_phieunhap_sach` (`namesach`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sach_theloai` (`id_theloai`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nhomkhachhang`
--
ALTER TABLE `nhomkhachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `phieunhaphang`
--
ALTER TABLE `phieunhaphang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29126;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_hoadon_khachhang` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `fk_hoadon_sach` FOREIGN KEY (`id_sach`) REFERENCES `sach` (`id`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `fk_khachang_nhomkhachhang` FOREIGN KEY (`id_nhomkh`) REFERENCES `nhomkhachhang` (`id`);

--
-- Các ràng buộc cho bảng `phieunhaphang`
--
ALTER TABLE `phieunhaphang`
  ADD CONSTRAINT `fk_phieunhap_nhacungcap` FOREIGN KEY (`id_nhacungcap`) REFERENCES `nhacungcap` (`id`);

--
-- Các ràng buộc cho bảng `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `fk_sach_theloai` FOREIGN KEY (`id_theloai`) REFERENCES `theloai` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
