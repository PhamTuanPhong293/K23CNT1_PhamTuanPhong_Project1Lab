-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2025 at 09:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `k23cnt1_phamtuanphong_2310900081_project1db`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(48, '2014_10_12_000000_create_users_table', 1),
(49, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(50, '2019_08_19_000000_create_failed_jobs_table', 1),
(51, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(52, '2024_12_18_021953_create__p_t_p__l_o_a_i__s_a_n__p_h_a_m_table', 1),
(53, '2024_12_19_144127_create__p_t_p__q_u_a_n__t_r_i_table', 1),
(54, '2024_12_19_151410_create__p_t_p__s_a_n__p_h_a_m_table', 1),
(55, '2024_12_19_153842_create__p_t_p__k_h_a_c_h__h_a_n_g_table', 1),
(56, '2024_12_19_154158_create__p_t_p__h_o_a__d_o_n_table', 1),
(57, '2024_12_19_154415_create__p_t_p__c_t__h_o_a__d_o_n_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptp_ct_hoa_don`
--

CREATE TABLE `ptp_ct_hoa_don` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ptpHoaDonID` varchar(20) NOT NULL,
  `ptpSanPhamID` varchar(20) NOT NULL,
  `ptpSoLuongMua` int(11) NOT NULL,
  `ptpDonGiaMua` double(8,2) NOT NULL,
  `ptpThanhTien` double(8,2) NOT NULL,
  `ptpTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ptp_ct_hoa_don`
--

INSERT INTO `ptp_ct_hoa_don` (`id`, `ptpHoaDonID`, `ptpSanPhamID`, `ptpSoLuongMua`, `ptpDonGiaMua`, `ptpThanhTien`, `ptpTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'HD001', 'VP001', 1, 100000.00, 100000.00, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ptp_hoa_don`
--

CREATE TABLE `ptp_hoa_don` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ptpMaHoaDon` varchar(255) NOT NULL,
  `ptpMaKhachHang` bigint(20) NOT NULL,
  `ptpNgayHoaDon` date NOT NULL,
  `ptpHoTenKhachHang` varchar(255) NOT NULL,
  `ptpEmail` varchar(255) NOT NULL,
  `ptpDienThoai` varchar(255) NOT NULL,
  `ptpDiaChi` varchar(255) NOT NULL,
  `ptpTongTriGia` double(8,2) NOT NULL,
  `ptpTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ptp_hoa_don`
--

INSERT INTO `ptp_hoa_don` (`id`, `ptpMaHoaDon`, `ptpMaKhachHang`, `ptpNgayHoaDon`, `ptpHoTenKhachHang`, `ptpEmail`, `ptpDienThoai`, `ptpDiaChi`, `ptpTongTriGia`, `ptpTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'HD001', 0, '2024-12-31', 'Phạm Tuấn Phong', 'phongpham29305@gmail.com', '0981907669', 'Hà Nội', 100000.00, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ptp_khach_hang`
--

CREATE TABLE `ptp_khach_hang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ptpMaKhachHang` varchar(255) NOT NULL,
  `ptpHoTenKhachHang` varchar(255) NOT NULL,
  `ptpEmail` varchar(255) NOT NULL,
  `ptpMatKhau` varchar(255) NOT NULL,
  `ptpDienThoai` varchar(255) NOT NULL,
  `ptpDiaChi` varchar(255) NOT NULL,
  `ptpNgayDangKy` date NOT NULL,
  `ptpTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ptp_khach_hang`
--

INSERT INTO `ptp_khach_hang` (`id`, `ptpMaKhachHang`, `ptpHoTenKhachHang`, `ptpEmail`, `ptpMatKhau`, `ptpDienThoai`, `ptpDiaChi`, `ptpNgayDangKy`, `ptpTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'KH001', 'Phạm Tuấn Phong', 'phongpham29305@gmail.com', '$2y$10$OVPJsTlbU.8KmRjOvhpdmuZB0pVOXHEeQDjT9ace4Et1Oxpij8Azy', '0981907669', 'Hà Nội', '2024-12-31', 2, NULL, '2025-01-09 07:53:34'),
(2, 'KH002', 'Đặng Minh Hiển', 'hien1552k@gmail.com', '$2y$10$r.ntysK/881RnG0weg3bceYBUWIeYaKWhfuJpS6B31R5uobY6S.8y', '0981907679', 'Hải Phòng', '2005-02-10', 1, '2025-01-09 07:40:03', '2025-01-09 07:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `ptp_loai_san_pham`
--

CREATE TABLE `ptp_loai_san_pham` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ptpMaLoai` varchar(255) NOT NULL,
  `ptpTenLoai` varchar(255) NOT NULL,
  `ptpTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ptp_loai_san_pham`
--

INSERT INTO `ptp_loai_san_pham` (`id`, `ptpMaLoai`, `ptpTenLoai`, `ptpTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'L001', 'Cây cảnh văn phòng', 0, NULL, NULL),
(2, 'L002', 'Cây để bàn', 0, NULL, NULL),
(3, 'L003', 'Cây cảnh phong thủy', 0, NULL, NULL),
(4, 'L004', 'Cây thủy canh', 0, NULL, NULL),
(5, 'L005', 'Cây hoa nhài', 1, '2024-12-31 08:57:11', '2024-12-31 08:57:23');

-- --------------------------------------------------------

--
-- Table structure for table `ptp_quan_tri`
--

CREATE TABLE `ptp_quan_tri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ptpTaiKhoan` varchar(255) NOT NULL,
  `ptpMatKhau` varchar(255) NOT NULL,
  `ptpTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ptp_quan_tri`
--

INSERT INTO `ptp_quan_tri` (`id`, `ptpTaiKhoan`, `ptpMatKhau`, `ptpTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'phongpham@gmail.com', '123456789', 1, NULL, NULL),
(2, '0981907669', '123456789', 0, NULL, NULL),
(3, 'phongpham29305@gmail.com', '123456789', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ptp_san_pham`
--

CREATE TABLE `ptp_san_pham` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ptpMaSanPham` varchar(255) NOT NULL,
  `ptpTenSanPham` varchar(255) NOT NULL,
  `ptpHinhAnh` varchar(255) NOT NULL,
  `ptpSoLuong` int(11) NOT NULL,
  `ptpDonGia` double(8,2) NOT NULL,
  `ptpMaLoai` bigint(20) NOT NULL,
  `ptpTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ptp_san_pham`
--

INSERT INTO `ptp_san_pham` (`id`, `ptpMaSanPham`, `ptpTenSanPham`, `ptpHinhAnh`, `ptpSoLuong`, `ptpDonGia`, `ptpMaLoai`, `ptpTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'VP001', 'Cây phú quý', 'img/san_pham/T7uVgcbWLYVeuhpKjwDBbiVrWlWhbHb0i4Iy7K3a.jpg', 100, 699000.00, 1, 0, NULL, '2025-01-09 07:28:06'),
(2, 'VP002', 'Cây đại phú gia', 'images/san-pham/VP002.jpg', 200, 550000.00, 1, 0, NULL, NULL),
(3, 'VP003', 'Cây hạnh phúc', 'images/san-pham/VP003.jpg', 150, 250000.00, 1, 0, NULL, NULL),
(4, 'VP004', 'Cây vạn lộc', 'images/san-pham/VP004.jpg', 300, 799000.00, 1, 0, NULL, NULL),
(5, 'PT001', 'Cây thiết mộc lan', 'images/san-pham/PT001.jpg', 150, 590000.00, 3, 0, NULL, NULL),
(6, 'PT002', 'Cây trường sinh', 'images/san-pham/PT002.jpg', 100, 150000.00, 3, 0, NULL, NULL),
(7, 'PT003', 'Cây hạnh phúc', 'images/san-pham/PT003.jpg', 200, 299000.00, 3, 0, NULL, NULL),
(8, 'PT004', 'Cây hoa nhài (Lài ta)', 'img/san_pham/ZnLcsIROaT26T5Fyvai95qsRO944NNHiGoRGzhco.jpg', 300, 199000.00, 2, 0, NULL, '2025-01-09 07:27:44'),
(9, 'PT005', 'Hoa Hồng Nở', 'img/san_pham/PT005.jpg', 10, 140000.00, 3, 1, '2025-01-09 07:12:52', '2025-01-09 07:12:52'),
(10, 'PT009', 'Hoa Hồng Nở', 'img/san_pham/PT009.jpg', 12, 135000.00, 1, 1, '2025-01-09 07:15:01', '2025-01-09 07:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ptp_ct_hoa_don`
--
ALTER TABLE `ptp_ct_hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ptp_hoa_don`
--
ALTER TABLE `ptp_hoa_don`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ptp_hoa_don_ptpmahoadon_unique` (`ptpMaHoaDon`);

--
-- Indexes for table `ptp_khach_hang`
--
ALTER TABLE `ptp_khach_hang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ptp_khach_hang_ptpmakhachhang_unique` (`ptpMaKhachHang`);

--
-- Indexes for table `ptp_loai_san_pham`
--
ALTER TABLE `ptp_loai_san_pham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ptp_loai_san_pham_ptpmaloai_unique` (`ptpMaLoai`);

--
-- Indexes for table `ptp_quan_tri`
--
ALTER TABLE `ptp_quan_tri`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ptp_quan_tri_ptptaikhoan_unique` (`ptpTaiKhoan`);

--
-- Indexes for table `ptp_san_pham`
--
ALTER TABLE `ptp_san_pham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ptp_san_pham_ptpmasanpham_unique` (`ptpMaSanPham`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ptp_ct_hoa_don`
--
ALTER TABLE `ptp_ct_hoa_don`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ptp_hoa_don`
--
ALTER TABLE `ptp_hoa_don`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ptp_khach_hang`
--
ALTER TABLE `ptp_khach_hang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ptp_loai_san_pham`
--
ALTER TABLE `ptp_loai_san_pham`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ptp_quan_tri`
--
ALTER TABLE `ptp_quan_tri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ptp_san_pham`
--
ALTER TABLE `ptp_san_pham`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
