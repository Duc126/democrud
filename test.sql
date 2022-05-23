-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 23, 2022 lúc 08:28 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

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
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `noidung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `email`, `diachi`, `noidung`) VALUES
(73, 'duc', 'bui', 2147483647, 'hoang121341@gmail.com', 'Vinh', 'NO'),
(76, 'nam ', 'giang', 2147483647, 'namgiang112@gmail.com', 'Nghệ An', 'không có'),
(77, 'duc', 'bui', 1325362635, 'hoang12341@gmail.com', 'nghệ an', 'Không có'),
(78, 'ha', 'nam', 123456, 'hanam1211@gmail.com', 'nghệ an', 'Không có'),
(79, 'kien', 'hoang', 2147483647, 'hoang1234@gmail.com', 'nghệ an', 'Không có'),
(80, 'lam', 'nam', 2147483647, 'hung1@gmail.com', 'Vinh', 'Khong'),
(84, 'hai', 'van', 1325362635, 'hoang123411@gmail.com', 'Nghệ An', 'nam'),
(85, 'nam', 'hai', 1111122, 'nam1@gmail.com', 'vinh', 'Khong'),
(86, 'hai', 'lam', 2147483647, 'ducbui1211111@gmail.com', 'vinh', 'Không có'),
(87, 'ha', 'bui', 2147483647, 'letrongky01110@gmail.com', 'Vinh', 'Không có'),
(88, 'Trần', 'lam', 249653256, 'tranlam12@gmail.com', 'Vinh', 'abc'),
(89, 'lam', 'ha', 1325362635, 'lamha1@gmail.com', 'Nghệ An', 'Không có'),
(90, 'duc', 'bui', 2147483647, 'ducbui12111@gmail.com', 'nghệ an', 'Không có');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
