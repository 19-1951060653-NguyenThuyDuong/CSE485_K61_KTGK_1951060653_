-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 01:32 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951060653_employees`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `maNV` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hovaten` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phongban` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luong` float NOT NULL,
  `ngayvaolam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`maNV`, `hovaten`, `chucvu`, `phongban`, `luong`, `ngayvaolam`) VALUES
('NV01', 'Nguyễn Văn A', 'Trưởng phòng', 'Phòng hành chính', 20000000, '2016-01-12'),
('NV02', 'Nguyễn Văn B', 'Phó phòng', 'Phòng hành chính', 18000000, '2017-03-03'),
('NV03', 'Nguyễn Văn C', 'Nhân viên', 'Phòng marketing', 12000000, '2015-01-16'),
('NV04', 'Nguyễn Văn D', 'Nhân viên', 'Phòng marketing', 12000000, '2015-01-12'),
('NV05', 'Nguyễn Thùy C', 'Trưởng phòng', 'Phòng nhân sự', 22000000, '2013-02-05'),
('NV06', 'Nguyễn Quỳnh A', 'Nhân viên', 'Phòng nhân sự', 10000000, '2015-01-16');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`maNV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
