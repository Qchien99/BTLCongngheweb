-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 28, 2021 lúc 01:27 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_bku`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblEmployees`
--

CREATE TABLE `tblEmployees` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL CHECK (`email` like '%@%'),
  `img` varchar(80) DEFAULT NULL,
  `sb_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblEmployees`
--

INSERT INTO `tblEmployees` (`id`, `name`, `position`, `about`, `email`, `img`, `sb_id`) VALUES
(1, 'Nguyễn Bình Minh', 'Trưởng Bộ môn', 'Tiến sỹ (Tin học Ứng dụng, Trường Đại học Kĩ thuật Slovak, Slovakia , 2013)\r\nKỹ sư (Máy tính hỗ trợ thiết kế, Trường Đại học Tổng hợp kĩ thuật Tambov,\r\nLiên Bang Nga, 2008)', 'minhnb@soict.hust.edu.vn', 'https://soict.hust.edu.vn/content/uploads/2019/06/DHP_5224.jpg', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblPosts`
--

CREATE TABLE `tblPosts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub-title` varchar(255) NOT NULL,
  `create-date` date NOT NULL,
  `content` text NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblPosts`
--

INSERT INTO `tblPosts` (`id`, `title`, `sub-title`, `create-date`, `content`, `type`) VALUES
(1, 'Title-News', 'Subtitle-News', '2021-08-27', 'Content is here', 'news'),
(2, 'Title-event', 'Subtitle-event', '2021-08-27', 'Content is here', 'event'),
(3, 'Title-ExStudent', 'Subtitle-ExStudent', '2021-08-27', 'Content is here', 'exstudent');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblSubjects`
--

CREATE TABLE `tblSubjects` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `e-name` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tblSubjects`
--

INSERT INTO `tblSubjects` (`id`, `name`, `e-name`, `address`, `tel`, `email`, `type`) VALUES
(1, 'Công nghệ phần mềm', 'Software Engineering Department', 'Phòng 601, nhà B1, trường Đại học Bách khoa Hà Nội', '024 38 68 25 95', 'se@soict.hust.edu.vn', 'subject'),
(2, 'Hệ thống thông tin', 'Information Systems', 'Phòng 603, nhà B1, trường Đại học Bách khoa Hà Nội', '+84 24 3869 612', 'is@soict.hust.edu.vn', 'subject'),
(3, 'Khoa học máy tính', 'Computer Science', 'Phòng 602, nhà B1, trường Đại học Bách khoa Hà Nội', '+84 (0)24 38696', 'cs@soict.hust.edu.vn', 'subject'),
(4, 'Kỹ thuật máy tính', 'Department of Computer Engineering', 'P502-B1, Trường Đại học Bách khoa Hà Nội', '(+84) 024 38696', 'ce@soict.hust.edu.vn', 'subject'),
(5, 'Truyền thông và Mạng máy tính', 'Department of Data Communications and Commputer Networks', 'Phòng 501, nhà B1, trường Đại học Bách khoa Hà Nội', '024-38682596', 'dccn@soict.hust.edu.vn', 'subject'),
(6, 'Trung tâm máy tính', 'Computer Center', 'P401-B1, Đại học Bách khoa Hà Nội', '(+84)38692205', 'cc@soict.hust.edu.vn', 'department'),
(7, 'Trung tâm đổi mới sáng tạo', 'Innovation Center', 'Địa chỉ: P407-B1, Đại học Bách khoa Hà Nội', '(+84)38692205', 'ic@soict.hust.edu.vn', 'department'),
(8, 'Trung tâm Navis', 'International Centre for R&D on Satellite Navigation Technology in South East Asia (NAVIS Centre)', 'Phòng 605, Thư viện Tạ Quang Bửu, Đại học Bách kho', '024 38 68 26 28', 'navis@hust.edu.vn', 'department'),
(9, 'Trung tâm Cyber Security', 'Center for Information Assurance and Security (CIAS)', 'Phòng 405, Nhà B1, Đại học Bách khoa Hà Nội', '+84 24 8719 612', 'cias@soict.hust.edu.vn', 'department');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `hoten`, `ngaysinh`, `email`, `username`, `pass`, `role`) VALUES
(1, 'Lê Quốc Đạt', '1998-04-22', 'datle@gmail.com', 'datle', 'admin123', 'admin'),
(2, 'Dương Quang Chiến', '1999-08-19', 'chien@gmail.com', 'chien', 'admin123', 'admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tblEmployees`
--
ALTER TABLE `tblEmployees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sb_id` (`sb_id`);

--
-- Chỉ mục cho bảng `tblPosts`
--
ALTER TABLE `tblPosts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblSubjects`
--
ALTER TABLE `tblSubjects`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tblEmployees`
--
ALTER TABLE `tblEmployees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tblPosts`
--
ALTER TABLE `tblPosts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tblSubjects`
--
ALTER TABLE `tblSubjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tblEmployees`
--
ALTER TABLE `tblEmployees`
  ADD CONSTRAINT `tblEmployees_ibfk_1` FOREIGN KEY (`sb_id`) REFERENCES `tblSubjects` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
