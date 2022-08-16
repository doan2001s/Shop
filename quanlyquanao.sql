-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 10, 2022 lúc 04:19 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlyquanao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_admin`
--

CREATE TABLE `tb_admin` (
  `ma_nv` varchar(50) NOT NULL,
  `ten_nv` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_admin`
--

INSERT INTO `tb_admin` (`ma_nv`, `ten_nv`, `email`, `password`, `diachi`, `phone`) VALUES
('9999', 'Nguyễn Đình Đoàn', 'dinhdoan9908@gmail.com', 'admin', 'Hà Tây', '13456789');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_sanpham`
--

CREATE TABLE `tb_sanpham` (
  `ma_sp` int(11) NOT NULL,
  `ten_sp` varchar(50) NOT NULL,
  `danhmuc` varchar(50) NOT NULL,
  `gioitinh` varchar(50) NOT NULL,
  `mausac` varchar(50) NOT NULL,
  `giaban` varchar(50) NOT NULL,
  `giasale` varchar(50) NOT NULL,
  `mota` mediumtext NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_sanpham`
--

INSERT INTO `tb_sanpham` (`ma_sp`, `ten_sp`, `danhmuc`, `gioitinh`, `mausac`, `giaban`, `giasale`, `mota`, `img`) VALUES
(7, 'Áo vest', 'aosomi', 'nam', 'den', '500000', '450000', '', 'product-6.jpg'),
(11, 'Áo măng tô', 'aosomi', 'nu', 'den', '500000', '250000', '', 'product-7.jpg'),
(12, 'Váy', 'vay', 'nu', 'trang', '400000', '360000', '', 'product-1.jpg'),
(13, 'Váy SERT', 'vay', 'nu', 'den', '400000', '360000', '', 'product-4.jpg'),
(14, 'Áo bò', 'aosomi', 'treem', 'xanhlam', '', '450000', '', 'product-2.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`ma_nv`);

--
-- Chỉ mục cho bảng `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD PRIMARY KEY (`ma_sp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  MODIFY `ma_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
