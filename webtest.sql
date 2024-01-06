-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2024 lúc 01:27 PM
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
-- Cơ sở dữ liệu: `webtest`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(16, 'sản phẩm ok', 12, 25, '2023-10-10 17:25:45'),
(17, 'ok', 12, 25, '2023-10-10 17:25:48'),
(18, 'loa nghe hay ', 12, 33, '2023-10-10 17:26:08'),
(19, 'oke', 12, 33, '2023-10-10 17:26:12'),
(20, 'tai nghe chất lượng', 12, 29, '2023-10-10 17:26:27'),
(21, 'ok đấy', 12, 29, '2023-10-10 17:26:33'),
(22, 'điệ thoại xịn', 12, 36, '2023-10-10 17:26:46'),
(23, 'quá xịn', 12, 36, '2023-10-10 17:26:52'),
(24, 'ok rồi', 12, 36, '2023-10-10 17:26:56'),
(25, 'ok', 11, 39, '2023-10-12 14:46:41'),
(26, 'sản phẩm ok', 11, 25, '2023-10-12 22:10:17'),
(27, 'lmao', 11, 32, '2024-01-03 22:09:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'Laptop'),
(2, 'Điện Thoại'),
(5, 'loa'),
(6, 'tai nghe'),
(7, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(12, 'tainghe', 300000.00, '84b63823d1186c6c8ffd01ce6026ea76.jpg', '                         mnhmmjhmmkjh                      ', 70, 6),
(24, 'Lab top gameming', 99999999.99, '../uploads/budgetgaminglaptop-2048px-9124.jpg', '            quá đẹp chật lượng           ', 10, 1),
(25, 'lab top văn phòng giá rẻ', 10000000.00, '../uploads/images.jpg', '            sản phẩm chất lượng           ', 0, 1),
(26, 'laptop gameming hiệu năng cao', 20000000.00, '../uploads/638018700298075854_lenovo-gaming-legion-5-15arh7-xam-dam-dd.jpg', '                       ', 0, 1),
(27, 'laptop gameming hiệu năng cao', 10000000.00, '../uploads/tải xuống.jpg', '                                              ', 601, 1),
(29, 'tainghe bluetooth', 300.00, '../uploads/earbud.jpg', '', 0, 6),
(30, 'tainghe dẹp', 800.00, '../uploads/BT28 2.png', '                       ', 100, 6),
(31, 'tainghe chùm tai đẹp', 1000000.00, '../uploads/tah4205bl-00-ims-en-gb.png', '                                              ', 703, 6),
(32, 'loa bluetooth ', 700.00, '../uploads/Audioengine-A5.jpg', '                                              ', 0, 5),
(33, 'loa giá rẻ nghe hay', 9000000.00, '../uploads/MX-12.webp', '                                              ', 4012, 5),
(34, 'loa bluetooth ', 200.00, '../uploads/tải xuống (1).jpg', '                       ', 0, 5),
(35, 'iphon12promax', 20000000.00, '../uploads/iphone-12-promax-oneway_1657260526.png', '                                              ', 80, 2),
(36, 'iphon13', 10000000.00, '../uploads/azayj9bkotl3t.jpg', '                                              ', 0, 2),
(37, 'iphon15', 45000000.00, '../uploads/ckeditor_3370949.jpg', '                                                                     ', 10, 2),
(38, 'iphon11', 10000000.00, '../uploads/ip12a-tim.jpg', '                                              ', 800, 2),
(39, 'iphon15promax', 50000000.00, '../uploads/iphone-15-pro-max-gold-thumbnew-600x600.jpg', '                                                                                                                   ', 0, 2),
(40, 'laptop', 99999999.99, '1668641182136.webp', '                       ', 503, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(11, 'admin', '123456', 'hiepdepzai2508@gmail.com', NULL, NULL, 1),
(12, 'hiep123', '123456', 'hiepddph35730@fpt.edu.vn', NULL, NULL, 0),
(13, 'hiep', '8888888', 'hiepdepzai1323@gmail.com', NULL, NULL, 0),
(14, 'hiepdd', '123456', 'hiepdepzai2508@gmail.co', NULL, NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpro` (`idpro`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
