-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 31, 2023 lúc 02:45 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bandongho`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'c4ca4238a0b923820dcc509a6f75849b'),
(2, 'admin', '123455');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_detail`
--

CREATE TABLE `tbl_cart_detail` (
  `id_cart_detail` int(11) NOT NULL,
  `code_cart` varchar(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `ngaymua` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_detail`
--

INSERT INTO `tbl_cart_detail` (`id_cart_detail`, `code_cart`, `id_sanpham`, `soluongmua`, `ngaymua`) VALUES
(4, '285', 13, 1, '2023-08-13'),
(5, '6071', 13, 1, '2023-07-13'),
(6, '6071', 12, 1, '2023-08-13'),
(7, '1671', 13, 1, '2023-08-13'),
(8, '1671', 12, 1, '2023-08-13'),
(9, '4309', 13, 1, '2023-08-13'),
(10, '1671', 13, 1, '2023-06-13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_khachhang` int(11) NOT NULL,
  `hovaten` varchar(250) NOT NULL,
  `taikhoan` varchar(100) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` text NOT NULL,
  `chucvu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_khachhang`, `hovaten`, `taikhoan`, `matkhau`, `sodienthoai`, `email`, `diachi`, `chucvu`) VALUES
(1, 'Nguyễn Minh Tâm', 'maki', 'c4ca4238a0b923820dcc509a6f75849b', 569029353, 'mikuohandsome@gmail.com', '																																																																																																																																										13/C																																																																																																																			', 1),
(9, 'Lê Văn Hùng', 'lehung', '202cb962ac59075b964b07152d234b70', 123456, 'lehung@gmail.com', 'Thanh Hóa', 0),
(0, 'Trần Đăng Khoa', 'khoaadmt', 'e10adc3949ba59abbe56e057f20f883e', 366516834, 'khoaadmt@gmail.com', 'Hưng Yên', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(10) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(1, 'Quần short', 1),
(2, 'Áo có cổ', 2),
(3, 'Bộ quần áo', 3),
(4, 'Quần bơi', 4),
(5, 'Quần golf', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(11) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_payment`) VALUES
(47, 0, '8749', 1, 'Tiền Mặt'),
(48, 0, '1663', 1, 'Tiền Mặt'),
(49, 0, '6924', 1, 'Tiền Mặt'),
(50, 0, '285', 1, 'Tiền Mặt'),
(51, 0, '6071', 1, 'Tiền Mặt'),
(52, 0, '1671', 1, 'Tiền Mặt'),
(53, 0, '4309', 1, 'Tiền Mặt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `masanpham` varchar(100) NOT NULL,
  `giasanpham` float NOT NULL,
  `soluong` int(100) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `tomtat` tinyint(4) NOT NULL,
  `noidung` text NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masanpham`, `giasanpham`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `id_danhmuc`, `trangthai`) VALUES
(1, 'Quần short nam AKST299-6', 'AKST299-6', 500727, 50, '1.jpg', 0, 'Quần short nam AKST299-6\r\n\r\nChất liệu: Cotton54% Polyester46%\r\nCông nghệ : AT DRY BASE, AT DRY FREEZE, GREENSHELL\r\nDòng sản phẩm : Fitness/ Luyện tập\r\nForm dáng : Regular fit\r\nXuất xứ: Chính Hãng\r\nCông nghệ AT DRY BASE , AT DRY FREEZE của Li-Ning là công nghệ kháng khuẩn và khử mùi được sử dụng trong sản phẩm thể thao của hãng. Công nghệ này giúp ngăn chặn sự phát triển và sản sinh các vi khuẩn gây hại, đồng thời giữ cho sản phẩm luôn khô ráo, khử mùi hiệu quả.\r\n\r\n', 1, 0),
(1, 'Quần short nam AKST299-6', 'AKST299-6', 100000, 20, '1.jpg', 0, '', 1, 1),
(2, 'Quần short nam AKST283-2', 'AKST283-2', 120000, 10, '2.jpg', 0, '', 1, 0),
(3, 'Quần short nam AAPT017-3', 'AAPT017-3', 130000, 40, '3.jpg', 0, '', 1, 0),
(4, 'Quần gió nam AYKSC19-1', 'AYKSC19-1', 1000000, 50, '3.jpg', 0, 'Quần gió thể thao Li-Ning là món đồ không thể thiếu cho team đam mê tập luyện hoặc yêu thích phong cách năng động. Mỗi thiết kế Quần gió đều đề cao lựa chọn chất liệu thông thoáng, siêu nhẹ, cho giờ tập luyện thêm hiệu quả. Đường may trang phục không những phải cẩn thận, tỉ mỉ mà cần đảm bảo bền chắc, chịu lực co giãn, đàn hồi tốt. Quần gió thể thao cũng là một gợi ý set đồ lý tưởng mỗi khi đi dã ngoại, đi chơi hay hẹn hò. \r\n\r\n', 5, 1),
(5, 'Quần Golf nam AKST719-2', 'AKST719-2', 6000000, 25, '5.jpg', 20, 'Quần golf của Lining là một sản phẩm thời trang cao cấp dành cho những người yêu thích môn thể thao quý tộc này. Quần được làm từ chất liệu vải co giãn, thoáng khí và chống nhăn, giúp bạn luôn thoải mái và tự tin khi ra sân. Quần có thiết kế đơn giản nhưng tinh tế, với các đường may chắc chắn và túi tiện lợi. Quần có nhiều màu sắc và kích cỡ để bạn lựa chọn, phù hợp với phong cách cá nhân của bạn. Quần golf của Lining là sự lựa chọn hoàn hảo cho những người đam mê golf và muốn thể hiện sự sang trọng và lịch lãm của mình.', 5, 1),
(6, 'Quần Bơi nam AUAT005-1', 'AUAT005-1', 60000, 30, '6.jpg', 3, 'được thiết kế để phù hợp với nhiều môn thể thao khác nhau như chạy bộ, bóng rổ, cầu lông, bóng đá và golf. Ngoài các công nghệ được áp dụng trong quá trình sản xuất thì quần áo Li-Ning cũng có những ưu điểm như chất liệu vải tốt với độ thấm hút và thoát khí cực cao, giúp người dùng thoải mái khi hoạt động giữa trời nắng nóng\r\n\r\n', 4, 0),
(7, 'quần bơi nam AUAT005-2', 'AUAT005-2', 90000, 44, '7.jpg', 15, 'được thiết kế để phù hợp với nhiều môn thể thao khác nhau như chạy bộ, bóng rổ, cầu lông, bóng đá và golf. Ngoài các công nghệ được áp dụng trong quá trình sản xuất thì quần áo Li-Ning cũng có những ưu điểm như chất liệu vải tốt với độ thấm hút và thoát khí cực cao, giúp người dùng thoải mái khi hoạt động giữa trời nắng nóng\r\n\r\n', 4, 0),
(8, 'Bộ quần áo cầu lông nam AATT021-3', 'AATT021-3', 50000, 25, '8.jpg', 14, 'Công nghệ AT-Dry là giải pháp \"mát lạnh\" giúp sản phẩm có khả năng làm khô nhanh và làm mát, giúp mồ hôi bay hơi nhanh chóng, cho bạn cảm giác khô ráo và thoải mái. Đồng thời công nghệ này còn hỗ trợ chống bám bẩn, tránh gió, nước và kháng khuẩn.', 3, 1),
(9, 'Bộ quần áo cầu lông nam AATT019-4', 'AATT019-4', 451126, 25, '9.jpg', 15, 'Công nghệ AT-Dry là giải pháp \"mát lạnh\" giúp sản phẩm có khả năng làm khô nhanh và làm mát, giúp mồ hôi bay hơi nhanh chóng, cho bạn cảm giác khô ráo và thoải mái. Đồng thời công nghệ này còn hỗ trợ chống bám bẩn, tránh gió, nước và kháng khuẩn.', 3, 0),
(10, 'Áo Polo nam APLSC21-2', 'APLSC21-2', 555889, 0, '10.jpg', 5, 'Áo Polo nam APLSC21-2\r\n\r\nChất liệu vải : 89%POLYESTER11%ELASTANE\r\nCông nghệ : AT Dry \r\nDòng sản phẩm : Fitness/ Luyện tập\r\nForm dáng : Slim\r\nXuất xứ: Trung Quốc\r\nForm Chọn Size : SMU\r\n', 2, 0),
(11, 'Áo Polo nam APLSC21-1', 'APLSC21-1', 700000, 43, '11.jpg', 23, 'Áo Polo nam APLSC21-1\r\n\r\nChất liệu vải : 89%POLYESTER11%ELASTANE\r\nCông nghệ : AT Dry \r\nDòng sản phẩm : Fitness/ Luyện tập\r\nForm dáng : Slim\r\nXuất xứ: Trung Quốc\r\nForm Chọn Size : SMU', 2, 0),
(12, 'Quần short nam AKST283-3', 'AKST283-3', 68000, 30, '12.jpg', 23, 'Quần short nam AKST283-3\r\n\r\nChất liệu: Cotton72% Polyester28%\r\nDòng sản phẩm : Basketball/ Bóng rổ\r\nForm dáng : Loose fit\r\nGhép Bộ Áo : AHST289-2, AHST289-5, AHST289-7', 1, 0),
(13, 'Quần Golf nam AKST719-2', 'AKST719-2', 56000, 12, '13.jpg', 13, 'Quần Golf nam AKST719-2\r\n\r\nChất liệu: POLYESTER96% ELASTANE4%\r\nDòng sản phẩm : Training/Tập luyện\r\nForm dáng : Regular\r\nXuất xứ : Trung Quốc', 5, 0),
(14, 'Áo Polo nam APLT171-8', 'APLT171-8', 450000, 23, '14.jpg', 0, 'Áo thể thao nam APLT171-8\r\n\r\nChất liệu vải : Nylon75% Elastane25%\r\nDòng sản phẩm : Training/ Luyện tập\r\nForm dáng : Regular fit\r\nXuất xứ: Trung Quốc\r\nForm Chọn Size : SMU', 2, 0),
(15, 'Bộ quần áo bóng rổ nam AATT001-2', 'AATT001-2', 652000, 30, '15.jpg', 5, 'Bộ quần áo bóng rổ nam AATT001-2\r\n\r\nChất liệu vải : Polyester100%\r\nCông nghệ : AT DRY BASE\r\nDòng sản phẩm : Basketball/ Bóng rổ\r\nForm dáng : Regular fit\r\nXuất xứ: Trung Quốc', 3, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  ADD PRIMARY KEY (`id_cart_detail`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`id_cart`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  MODIFY `id_cart_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
