-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 04, 2020 lúc 04:50 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shorten_link`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `short`
--

CREATE TABLE `short` (
  `id` int(11) NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateEnd` date NOT NULL,
  `descript` text COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `query` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `short`
--

INSERT INTO `short` (`id`, `link`, `author`, `dateEnd`, `descript`, `password`, `query`) VALUES
(1, 'helo.com', 'baomanh', '0000-00-00', '', '', 'G2y3Z7'),
(2, 'hello.com', 'baomanh', '0000-00-00', '', '', 'R5XJEP'),
(3, 'hello.com', 'baomanh', '0000-00-00', '', '', 'SyOwgw'),
(4, 'conme.me', 'desod-vn', '3333-02-22', 'hihi', 'concac', 'POQOg0'),
(5, 'hehehe.com', 'desod-vn', '0000-00-00', '', '', 'Z8zwNJ'),
(6, 'concac.me', 'desod-vn', '0000-00-00', '', '', 'bosYiH'),
(7, 'huhu.com', 'desod-vn', '0000-00-00', '', '', 'cuchuoi'),
(8, 'luoc.ga', 'baomanh', '0000-00-00', '', '', ''),
(9, 'luoc.ga', 'baomanh', '0000-00-00', '', '', 'aFmO03'),
(10, 'luoc.ga', 'baomanh', '0000-00-00', '', '', 'i3Funy'),
(11, 'sextop1.pro', 'baomanh', '0000-00-00', '', '', 'rXwsfa'),
(12, 'sextop1.pro', 'baomanh', '0000-00-00', '', '', 'NJvREh'),
(13, 'banhdauxanh.com', 'desod-vn', '0000-00-00', '', '', 'banh-dau-xanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password`, `fullname`, `phone`, `birthday`, `level`) VALUES
(12, 'baomanhmix@gmail.com', 'baomanh', 'chelsea1st', '', '', '0000-00-00', 0),
(14, 'thangdotpro@gmail.com', 'desod-vn', 'chelsea1st', '', '', '0000-00-00', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `short`
--
ALTER TABLE `short`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `short`
--
ALTER TABLE `short`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
