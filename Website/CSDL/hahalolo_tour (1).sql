-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 15, 2022 lúc 11:34 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hahalolo_tour`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `avatar`
--

CREATE TABLE `avatar` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `upload_on` datetime NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `avatar`
--

INSERT INTO `avatar` (`id`, `file_name`, `upload_on`, `name`) VALUES
(26, 'anh_avt_HD.jpg', '2022-01-11 17:49:55', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_comment`
--

CREATE TABLE `db_comment` (
  `id` int(11) NOT NULL,
  `user_comment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_cmt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ma_tour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_images`
--

CREATE TABLE `db_images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploaded_on` date NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_tour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_images`
--

INSERT INTO `db_images` (`id`, `file_name`, `uploaded_on`, `status`, `ma_tour`) VALUES
(24, 'áo2.png', '2022-05-15', '1', 'A01'),
(25, 'ao5.png', '2022-05-15', '1', 'A02'),
(26, 'set.png', '2022-05-15', '1', 'Q01'),
(27, 'quanthun2.png', '2022-05-15', '1', 'Q02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_nguoidung`
--

CREATE TABLE `db_nguoidung` (
  `ma_nguoidung` int(11) NOT NULL,
  `ten_nguoidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verification_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_nguoidung`
--

INSERT INTO `db_nguoidung` (`ma_nguoidung`, `ten_nguoidung`, `email`, `mat_khau`, `status`, `email_verification_link`, `email_verified_at`) VALUES
(9, 'admin123', 'adminTour@gmail.com', '$2y$10$5H1WoMchjxkV1Jq/uf4qGeYYH.WtpO0w.1r3DFxZqcfjzWfcBBbEy', '2', '4c5c0dd18098a778101ed69a8ad45a0e3344', '2022-01-10 16:05:38'),
(12, 'Nguyễn Huy Hoàng', 'nguyenhoang080721@gmail.com', '$2y$10$ITvuSaO76K06LKmZwx.U.OEflqyCA8gvWgsOEYb8wKUUtTGXpjrye', '1', '116705dde6eb4deee5177e1416dc57d44356', '2022-01-11 12:58:46'),
(15, 'Giang Nguyễn Công', 'nguyenconggiang21@gmail.com', '$2y$10$WLuQPFnnOakZVtbS9vpLG.oj9OKhRl1EfCRreRUmjuRdC.jEqGQiC', '1', '90d1903b15d00468c03a14f4c36ad22e8326', '2022-05-13 15:57:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_thongtinchitiet`
--

CREATE TABLE `db_thongtinchitiet` (
  `ThoiGianKhoiHanh` date NOT NULL,
  `ThoiGianKetThuc` date NOT NULL,
  `DiemKhoiHanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiemDen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_ngay` int(11) NOT NULL,
  `tra_gop` tinyint(1) NOT NULL,
  `khuyen_mai` tinyint(1) NOT NULL,
  `id_tour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_thongtintour`
--

CREATE TABLE `db_thongtintour` (
  `ma_tour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chu_tour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai_tour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_tour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_diem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoi_gian` datetime NOT NULL,
  `gia_tour` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `db_thongtintour`
--

INSERT INTO `db_thongtintour` (`ma_tour`, `chu_tour`, `loai_tour`, `ten_tour`, `dia_diem`, `thoi_gian`, `gia_tour`, `mo_ta`) VALUES
('A01', 'Áo', 'Áo Thun', '99%', '', '0000-00-00 00:00:00', '100.000', 'Áo thun nam vải cá sấu cotton cao cấp mềm mịn'),
('A02', 'Áo', 'Áo Thun', '96%', '', '0000-00-00 00:00:00', '105.000', 'Áo chống nhăn tốt, dễ giặt sạch, nhanh khô.Giặt tay hay giặt máy thoải mái không sợ ra màu, nhăn , mất form'),
('Q01', 'Quần', 'Quần Jean', '98%', '', '0000-00-00 00:00:00', '120.000', 'Quần được làm từ chất liệu cá sấu cotton co giãn với bề mặt vải mềm mại, thấm hút mồ hôi tốt tạo cảm giác thoải mái, thoáng mát cho người mặc.'),
('Q02', 'Quần', 'Quần Thun', '80%', '', '0000-00-00 00:00:00', '110.000', 'Quần được làm từ chất liệu cotton co giãn với bề mặt vải mềm mại, thấm hút mồ hôi tốt tạo cảm giác thoải mái, thoáng mát cho người mặc.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `avatar`
--
ALTER TABLE `avatar`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `db_comment`
--
ALTER TABLE `db_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nguoidung` (`user_comment`),
  ADD KEY `fk_userCommentt` (`ma_tour`);

--
-- Chỉ mục cho bảng `db_images`
--
ALTER TABLE `db_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tour` (`ma_tour`);

--
-- Chỉ mục cho bảng `db_nguoidung`
--
ALTER TABLE `db_nguoidung`
  ADD PRIMARY KEY (`ma_nguoidung`),
  ADD UNIQUE KEY `ten_nguoidung` (`ten_nguoidung`);

--
-- Chỉ mục cho bảng `db_thongtinchitiet`
--
ALTER TABLE `db_thongtinchitiet`
  ADD PRIMARY KEY (`id_tour`);

--
-- Chỉ mục cho bảng `db_thongtintour`
--
ALTER TABLE `db_thongtintour`
  ADD PRIMARY KEY (`ma_tour`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `avatar`
--
ALTER TABLE `avatar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `db_comment`
--
ALTER TABLE `db_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `db_images`
--
ALTER TABLE `db_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `db_nguoidung`
--
ALTER TABLE `db_nguoidung`
  MODIFY `ma_nguoidung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `db_thongtinchitiet`
--
ALTER TABLE `db_thongtinchitiet`
  ADD CONSTRAINT `fk_thongtintour` FOREIGN KEY (`id_tour`) REFERENCES `db_thongtintour` (`ma_tour`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
