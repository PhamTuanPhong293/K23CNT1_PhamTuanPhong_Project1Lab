-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2024 lúc 04:33 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ptp_lesson01_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ptpaccount`
--

CREATE TABLE `ptpaccount` (
  `ptp_id` varchar(20) NOT NULL,
  `ptp_username` varchar(50) NOT NULL,
  `ptp_password` varchar(255) NOT NULL,
  `ptp_fullname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ptpaccount`
--

INSERT INTO `ptpaccount` (`ptp_id`, `ptp_username`, `ptp_password`, `ptp_fullname`) VALUES
('2310900081', 'Phong Phạm', 'PhongPham', 'Phạm Tuấn Phong'),
('2310900082', 'Đàm Hưng', 'DamHung', 'Đàm Tuấn Hưng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ptpaccount`
--
ALTER TABLE `ptpaccount`
  ADD PRIMARY KEY (`ptp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
