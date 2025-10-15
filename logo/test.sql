-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 08, 2023 lúc 04:59 PM
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
-- Cơ sở dữ liệu: `test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `namemomo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `stkmomo` int(11) NOT NULL,
  `namevcb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `stkvcb` int(11) NOT NULL,
  `namembbank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `stkmbbank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `bank`
--

INSERT INTO `bank` (`id`, `namemomo`, `stkmomo`, `namevcb`, `stkvcb`, `namembbank`, `stkmbbank`) VALUES
(1, 'Duc Huu', 123456789, 'Duc Huu', 123456789, 'Duc Huu', 123456789);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `infoadmin`
--

CREATE TABLE `infoadmin` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `linkmess` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `linkfb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `linktelegram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `linkbehance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `infoadmin`
--

INSERT INTO `infoadmin` (`id`, `ten`, `img`, `linkmess`, `linkfb`, `linktelegram`, `linkbehance`, `sdt`) VALUES
(1, 'DUC HUU', '/images/upload/avt2.png', 'fsfdf', 'sdfsf', 'sdfs', 'sdfsf', '0987654');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `maulogo`
--

CREATE TABLE `maulogo` (
  `id` int(11) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `cash` int(11) NOT NULL,
  `product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `maulogo`
--

INSERT INTO `maulogo` (`id`, `img`, `cash`, `product`) VALUES
(1, 'https://iamhoang.vn/images/upload/logoclmm/clzl.png', 100000, 'mixigaming'),
(5, 'https://iamhoang.vn/images/upload/logoclmm/logo1.png', 2432545, 'gggfdg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mauthue`
--

CREATE TABLE `mauthue` (
  `id` int(11) NOT NULL,
  `nameWebsite` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `linkContact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `currentPicked` varchar(255) NOT NULL,
  `currentPrice` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `status` int(1) NOT NULL COMMENT '1 = chờ duyệt\r\n2 = thành công\r\n3 = hủy',
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `mauthue`
--

INSERT INTO `mauthue` (`id`, `nameWebsite`, `linkContact`, `currentPicked`, `currentPrice`, `time`, `status`, `logo`) VALUES
(1, 'ẻ', 'ẻ', 'mixigaming', '100,000 VND', 1685453716, 2, ''),
(2, 'ddddd', 'https://www.facebook.com/messages/t/100057160880261', 'mixigaming', '100,000 VND', 1685454219, 2, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `muc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `giatri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id`, `muc`, `giatri`) VALUES
(1, 'tenWeb', 'Duc Huu Test Code'),
(2, 'description', 'WEBSITE THIẾT KẾ LOGO CLMM SỐ 1 VN'),
(3, 'logoweb', '/images/upload/iamhoang7.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `infoadmin`
--
ALTER TABLE `infoadmin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `maulogo`
--
ALTER TABLE `maulogo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mauthue`
--
ALTER TABLE `mauthue`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `infoadmin`
--
ALTER TABLE `infoadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `maulogo`
--
ALTER TABLE `maulogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `mauthue`
--
ALTER TABLE `mauthue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
