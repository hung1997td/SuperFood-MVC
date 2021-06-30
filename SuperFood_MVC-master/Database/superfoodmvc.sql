-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 18, 2021 lúc 10:51 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `superFood_MVCmvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `animation`
--

CREATE TABLE `animation` (
  `id` int(11) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `animation` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `animation_delay` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `images_delay` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `title_delay` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `description_delay` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `link_delay` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `animation`
--

INSERT INTO `animation` (`id`, `location`, `animation`, `animation_delay`, `images`, `images_delay`, `title`, `title_delay`, `description`, `description_delay`, `link`, `link_delay`, `created_at`, `updated_at`) VALUES
(4, 'customize-item', '', '', 'zoomIn', '0.5s', 'zoomIn', '0.7s', 'zoomIn', '0.9s', '', '', '2021-03-17 07:45:20', '2021-03-17 01:45:20'),
(5, 'customize-item', '', '', 'fadeIn', '1s', 'zoomIn', '1.2s', 'zoomIn', '1.4s', '', '', '2021-03-15 12:26:28', '2021-03-15 06:26:28'),
(6, 'customize-item', '', '', 'fadeInRight', '1.5s', 'zoomIn', '1.7s', 'zoomIn', '1.9s', '', '', '2021-03-15 12:26:39', '2021-03-15 06:26:39'),
(8, 'about-item', '', '', 'fadeInLeft', '0.3s', 'fadeInUp', '0.5s', 'fadeInUp', '0.7s', 'fadeInUp', '0.9s', '2021-03-15 12:27:47', '2021-03-15 06:27:47'),
(9, 'about-item', '', '', 'fadeInUp', '0.6s', 'fadeInUp', '0.8s', 'fadeInUp', '1s', 'fadeInUp', '1.2s', '2021-03-15 12:27:59', '2021-03-15 06:27:59'),
(10, 'about-item', '', '', 'fadeInRight', '0.9s', 'fadeInUp', '1.1s', 'fadeInUp', '1.3s', 'fadeInUp', '1.5s', '2021-03-15 12:28:10', '2021-03-15 06:28:10'),
(11, 'client-item', 'fadeInUp', '0.5s', '', '', '', '', '', '', '', '', '2021-03-15 12:29:57', '2021-03-15 06:29:57'),
(12, 'client-item', 'fadeInDown', '0.5s', '', '', '', '', '', '', '', '', '2021-03-15 12:30:15', '2021-03-15 06:30:15'),
(13, 'client-item', 'fadeInUp', '0.5s', '', '', '', '', '', '', '', '', '2021-03-15 12:30:23', '2021-03-15 06:30:23'),
(14, 'client-item', 'fadeInDown', '0.5s', '', '', '', '', '', '', '', '', '2021-03-15 12:30:30', '2021-03-15 06:30:30'),
(15, 'slider-item', 'fadeInLeft', '1s', 'fadeInUp', '', '', '', '', '', '', '', '2021-03-15 06:38:54', '2021-03-15 06:38:54'),
(16, 'slider-item', 'fadeInLeft', '1s', 'fadeInUp', '', '', '', '', '', '', '', '2021-03-15 06:39:32', '2021-03-15 06:39:32'),
(17, 'slider-item', 'fadeInLeft', '1s', 'fadeInUp', '', '', '', '', '', '', '', '2021-03-15 06:39:46', '2021-03-15 06:39:46'),
(18, 'counter-item', 'zoomIn', '1s', '', '', '', '', '', '', '', '', '2021-03-15 19:51:19', '2021-03-15 19:51:19'),
(19, 'counter-item', 'zoomIn', '1s', '', '', '', '', '', '', '', '', '2021-03-15 19:51:31', '2021-03-15 19:51:31'),
(20, 'counter-item', 'zoomIn', '1s', '', '', '', '', '', '', '', '', '2021-03-15 19:51:39', '2021-03-15 19:51:39'),
(21, 'counter-item', 'zoomIn', '1s', '', '', '', '', '', '', '', '', '2021-03-15 19:51:48', '2021-03-15 19:51:48'),
(22, 'counter-item', 'zoomIn', '1s', '', '', '', '', '', '', '', '', '2021-03-15 19:51:56', '2021-03-15 19:51:56'),
(24, 'contact-item', '', '', '', '', '', '', 'fadeInLeft', '0.5s', 'fadeInUp', '1s', '2021-03-15 20:40:50', '2021-03-15 20:40:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `link_news_tag`
--

CREATE TABLE `link_news_tag` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `link_news_tag`
--

INSERT INTO `link_news_tag` (`id`, `news_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(106, 22, 8, '2021-03-15 06:11:06', '2021-03-15 06:11:06'),
(107, 22, 10, '2021-03-15 06:11:06', '2021-03-15 06:11:06'),
(108, 22, 11, '2021-03-15 06:11:06', '2021-03-15 06:11:06'),
(109, 22, 12, '2021-03-15 06:11:06', '2021-03-15 06:11:06'),
(110, 23, 10, '2021-03-15 06:13:08', '2021-03-15 06:13:08'),
(111, 23, 11, '2021-03-15 06:13:08', '2021-03-15 06:13:08'),
(112, 23, 12, '2021-03-15 06:13:08', '2021-03-15 06:13:08'),
(113, 23, 13, '2021-03-15 06:13:08', '2021-03-15 06:13:08'),
(114, 23, 15, '2021-03-15 06:13:08', '2021-03-15 06:13:08'),
(115, 24, 7, '2021-03-15 06:13:37', '2021-03-15 06:13:37'),
(116, 24, 8, '2021-03-15 06:13:37', '2021-03-15 06:13:37'),
(117, 24, 9, '2021-03-15 06:13:37', '2021-03-15 06:13:37'),
(118, 24, 14, '2021-03-15 06:13:37', '2021-03-15 06:13:37'),
(119, 24, 15, '2021-03-15 06:13:37', '2021-03-15 06:13:37'),
(120, 25, 7, '2021-03-15 19:44:57', '2021-03-15 19:44:57'),
(121, 25, 9, '2021-03-15 19:44:57', '2021-03-15 19:44:57'),
(122, 25, 10, '2021-03-15 19:44:57', '2021-03-15 19:44:57'),
(123, 25, 11, '2021-03-15 19:44:57', '2021-03-15 19:44:57'),
(124, 25, 12, '2021-03-15 19:44:57', '2021-03-15 19:44:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `link_product_tag`
--

CREATE TABLE `link_product_tag` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `link_product_tag`
--

INSERT INTO `link_product_tag` (`id`, `product_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(7, 4, 1, '2021-03-16 22:30:24', '2021-03-16 22:30:24'),
(8, 4, 2, '2021-03-16 22:30:24', '2021-03-16 22:30:24'),
(9, 5, 1, '2021-03-17 22:00:11', '2021-03-17 22:00:11'),
(10, 6, 1, '2021-03-17 22:00:39', '2021-03-17 22:00:39'),
(11, 6, 2, '2021-03-17 22:00:39', '2021-03-17 22:00:39'),
(12, 7, 1, '2021-03-18 00:28:32', '2021-03-18 00:28:32'),
(13, 8, 2, '2021-03-18 00:29:04', '2021-03-18 00:29:04'),
(14, 9, 1, '2021-03-18 00:54:02', '2021-03-18 00:54:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `link_role_permission`
--

CREATE TABLE `link_role_permission` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `link_role_permission`
--

INSERT INTO `link_role_permission` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(205, 2, 6, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(206, 2, 8, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(207, 2, 7, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(208, 2, 5, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(209, 2, 2, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(210, 2, 4, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(211, 2, 3, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(212, 2, 1, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(213, 2, 10, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(214, 2, 12, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(215, 2, 11, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(216, 2, 9, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(217, 2, 14, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(218, 2, 16, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(219, 2, 15, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(220, 2, 13, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(221, 15, 6, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(222, 15, 2, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(223, 15, 13, '2021-03-10 04:00:53', '2021-03-10 04:01:08'),
(263, 2, 17, '2021-03-15 07:48:34', '2021-03-15 07:48:34'),
(264, 2, 18, '2021-03-15 07:48:34', '2021-03-15 07:48:34'),
(265, 2, 19, '2021-03-15 07:48:46', '2021-03-15 07:48:46'),
(266, 2, 20, '2021-03-15 07:48:46', '2021-03-15 07:48:46'),
(267, 2, 21, '2021-03-15 07:48:55', '2021-03-15 07:48:55'),
(268, 2, 22, '2021-03-15 07:48:55', '2021-03-15 07:48:55'),
(269, 2, 23, '2021-03-15 07:49:06', '2021-03-15 07:49:06'),
(270, 2, 24, '2021-03-15 07:49:06', '2021-03-15 07:49:06'),
(271, 1, 1, '2021-03-18 00:35:09', '2021-03-18 00:35:09'),
(272, 1, 2, '2021-03-18 00:35:09', '2021-03-18 00:35:09'),
(273, 1, 3, '2021-03-18 00:35:09', '2021-03-18 00:35:09'),
(274, 1, 4, '2021-03-18 00:35:09', '2021-03-18 00:35:09'),
(275, 1, 5, '2021-03-18 00:35:09', '2021-03-18 00:35:09'),
(276, 1, 6, '2021-03-18 00:35:09', '2021-03-18 00:35:09'),
(277, 1, 7, '2021-03-18 00:35:09', '2021-03-18 00:35:09'),
(278, 1, 8, '2021-03-18 00:35:09', '2021-03-18 00:35:09'),
(279, 1, 13, '2021-03-18 00:35:09', '2021-03-18 00:35:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `content`, `author`, `category_id`, `image`, `date`, `created_at`, `updated_at`) VALUES
(22, 'adsasdasd', 'qưdqwdqwdqw', '<p>dsfsfasdasasdasdasd</p>\r\n', 'đáas', 5, 'news/2021/03/15/3.1.jpg', NULL, '2021-03-15 06:11:06', '2021-03-15 06:11:06'),
(23, 'tin tức 2', 'ádasdasdasdasd', '<p>lldqwoidmqwndwqdnsam,dasicbasm,dnam,sdnwqodqw</p>\r\n', 'huy', 5, 'news/2021/03/15/5.1.jpg', NULL, '2021-03-15 06:13:08', '2021-03-15 06:13:08'),
(24, 'tin tức 3', 'tin', '<p>ưqjdqwdjqwmqwlkdmasklmdlkasdnaisdjlqwdqwdasdasdasfcsdfsdafsd</p>\r\n', 'sdsad', 4, 'news/2021/03/15/9.1_grande.jpg', NULL, '2021-03-15 12:13:51', '2021-03-15 06:13:51'),
(25, 'đắqdqưdqư', 'ưqrqweqweqweq', '<p>rưefregrefdssfasfds</p>\r\n', '43fwewefd', 8, 'news/2021/03/16/13.1.jpg', NULL, '2021-03-15 19:44:57', '2021-03-15 19:44:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news_categories`
--

CREATE TABLE `news_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news_categories`
--

INSERT INTO `news_categories` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(4, 'Ngoài nước', 0, '2021-03-09 17:15:55', '2021-03-09 11:15:55'),
(5, 'Thể thao', 0, '2021-03-09 17:06:18', '2021-03-09 17:06:51'),
(6, 'Bóng đá', 5, '2021-03-09 17:06:18', '2021-03-09 17:06:51'),
(7, 'Trong nước', 0, '2021-03-09 17:06:18', '2021-03-09 17:06:51'),
(8, 'Thời sự', 0, '2021-03-09 17:06:18', '2021-03-09 17:06:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news_tags`
--

CREATE TABLE `news_tags` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news_tags`
--

INSERT INTO `news_tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(7, 'Thời sự', '2021-03-09 17:29:38', '2021-03-09 17:29:56'),
(8, 'Thế giới', '2021-03-09 17:29:38', '2021-03-09 17:29:56'),
(9, 'Pháp luật', '2021-03-09 17:29:38', '2021-03-09 17:29:56'),
(10, 'Sức khỏe', '2021-03-09 17:29:38', '2021-03-09 17:29:56'),
(11, 'Đời sống', '2021-03-09 17:29:38', '2021-03-09 17:29:56'),
(12, 'Du lịch', '2021-03-09 17:29:38', '2021-03-09 17:29:56'),
(13, 'Khoa học', '2021-03-09 17:29:38', '2021-03-09 17:29:56'),
(14, 'Thể thao', '2021-03-09 17:29:38', '2021-03-09 17:29:56'),
(15, 'Tâm sự', '2021-03-09 17:29:38', '2021-03-09 17:29:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, 'product_view', 'Xem sản phẩm', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(2, 'product_add', 'Thêm sản phẩm', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(3, 'product_edit', 'Sửa sản phẩm', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(4, 'product_delete', 'Xóa sản phẩm', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(5, 'post_view', 'Xem bài viết', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(6, 'post_add', 'Thêm bài viết', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(7, 'post_edit', 'Sửa bài viết', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(8, 'post_delete', 'Xóa bài viết', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(9, 'role_view', 'Xem quyền', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(10, 'role_add', 'Thêm quyền', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(11, 'role_edit', 'Sửa quyền', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(12, 'role_delete', 'Xóa quyền', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(13, 'user_view', 'Xem người dùng', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(14, 'user_add', 'Thêm người dùng', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(15, 'user_edit', 'Sửa người dùng', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(16, 'user_delete', 'Xóa người dùng', '2021-03-10 04:00:14', '2021-03-10 04:00:29'),
(17, 'animation_view', 'Xem hiệu ứng', '2021-03-15 06:12:24', '2021-03-15 06:12:24'),
(18, 'animation_add', 'Thêm hiệu ứng', '2021-03-15 06:12:24', '2021-03-15 06:12:24'),
(19, 'animation_edit', 'Sửa hiệu ứng', '2021-03-15 06:13:03', '2021-03-15 06:13:03'),
(20, 'animation_delete', 'Xóa hiệu ứng', '2021-03-15 06:13:03', '2021-03-15 06:13:03'),
(21, 'widget_view', 'Xem widget', '2021-03-15 06:16:05', '2021-03-15 06:16:05'),
(22, 'widget_add', 'Xem widget', '2021-03-15 06:16:05', '2021-03-15 06:16:05'),
(23, 'widget_edit', 'Sửa widget', '2021-03-15 06:16:33', '2021-03-15 06:16:33'),
(24, 'widget_delete', 'Xóa widget', '2021-03-15 06:16:33', '2021-03-15 06:16:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `base_price` float NOT NULL,
  `discount_price` float NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `content`, `avatar`, `images`, `base_price`, `discount_price`, `category_id`, `created_at`, `updated_at`) VALUES
(4, 'ádasdas', 'dưqdqwdqwd', '<p>qưdqwfqdqwdqwdqwdqwd</p>\r\n', 'product/2021/03/17/1.4.jpg', '', 213123, 12212, 1, '2021-03-16 22:30:24', '2021-03-16 22:30:24'),
(5, 'fwefwefq', 'fqwwdqwdqwd', '<p>feqefqwwfafsdfadsfasf</p>\r\n', 'product/2021/03/18/1.1Organic-Garlic.jpg', '', 123123, 412, 1, '2021-03-17 22:00:11', '2021-03-17 22:00:11'),
(6, 'qưeqwe3r32r2', '1e1212e1', '<p>f34fweffef2fwefsdfasdf2ewd</p>\r\n', 'product/2021/03/18/17.2_grande.jpg', '', 423423, 1231, 1, '2021-03-17 22:00:39', '2021-03-17 22:00:39'),
(7, 'rvcasqw', 'effqwdas', '<p>feqfasdasdasxycqqwasascascascasc</p>\r\n\r\n<p>acsasca</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>casas</p>\r\n\r\n<p>c</p>\r\n\r\n<p>asc</p>\r\n\r\n<p>ascascas</p>\r\n', 'product/2021/03/18/9.1_grande.jpg', '', 231, 211, 1, '2021-03-18 00:28:32', '2021-03-18 00:28:32'),
(8, 'qweqwdvrvbdfgfdg', '34235r43trdgfddfgdfgfd', '<p>jrjrthfghdfgsfafafcadcasafaasfasfasd</p>\r\n', 'product/2021/03/18/15.1.jpg', '', 1231, 312, 1, '2021-03-18 00:29:03', '2021-03-18 00:29:03'),
(9, 'lựkeofidcsdmn', 'sfijwefmsdmsvmojvmw', '<p>lkweropwkfwmfsdmfodsfwfd&ouml;wsdjfpsdojs</p>\r\n', 'product/2021/03/18/13.1.jpg', '', 4542, 323, 2, '2021-03-18 00:54:02', '2021-03-18 00:54:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Thức ăn', 0, '2021-03-14 20:49:43', '2021-03-14 20:49:43'),
(2, 'Đồ uống', 0, '2021-03-14 20:49:53', '2021-03-14 20:49:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_tags`
--

CREATE TABLE `product_tags` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Đang đổ dữ liệu cho bảng `product_tags`
--

INSERT INTO `product_tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'mới', '2021-03-15 02:37:16', '2021-03-14 20:37:16'),
(2, 'hot', '2021-03-14 20:35:46', '2021-03-14 20:35:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, 'nv_nhap_lieu', 'Nhân viên nhập liệu', '2021-03-09 17:50:53', '2021-03-09 17:51:10'),
(2, 'quan_ly', 'Quản lý', '2021-03-09 17:50:53', '2021-03-09 17:51:10'),
(15, '', 'Ăn hại', '2021-03-09 17:50:53', '2021-03-09 17:51:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `image`, `firstname`, `lastname`, `email`, `password`, `created_at`, `updated_at`, `is_active`, `status`, `role_id`) VALUES
(18, 'user/2021/03/12/12.4.jpg', 'Huy', 'Đào', 'namhuydao@tutamail.com', '164d5fdfd02634293161afac4cf47299', '2021-01-27 03:01:30', '2021-03-12 03:44:29', 1, 1, 2),
(23, 'user/2021/03/12/9.1_grande.jpg', 'huy', 'ádasdasd', 'lackilu1ke@tutamail.com', '164d5fdfd02634293161afac4cf47299', '2021-03-01 03:53:04', '2021-03-12 09:33:16', 1, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `widget`
--

CREATE TABLE `widget` (
  `id` int(11) NOT NULL,
  `image` varchar(255) CHARACTER SET utf16 NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `description` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `content` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `number` int(11) NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `widget`
--

INSERT INTO `widget` (`id`, `image`, `location`, `title`, `description`, `content`, `link`, `number`, `author`, `position`, `created_at`, `updated_at`) VALUES
(2, 'widget/2021/03/15/about-1.jpg', 'about-item', 'Retina Ready', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.', '', 'blog.php', 0, '', '', '2021-03-15 12:57:56', '2021-03-15 06:57:56'),
(3, 'widget/2021/03/15/about-2.jpg', 'about-item', 'Only the Best', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.', '', 'blog.php', 0, '', '', '2021-03-15 12:58:54', '2021-03-15 06:58:54'),
(4, 'widget/2021/03/15/about-3.jpg', 'about-item', 'Elated Design', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.', '', 'blog.php', 0, '', '', '2021-03-15 12:59:04', '2021-03-15 06:59:04'),
(5, '', 'portfolio-title', 'Selected Works', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod. Lorem ipsum dolor Tur adipiscing elit, sed do eiusmod.', '', '', 0, '', '', '2021-03-15 09:42:19', '2021-03-15 09:42:32'),
(6, 'widget/2021/03/15/portfolio-1.jpg', 'portfolio-item', 'Đậu Hà Lan', 'Hà Nam', '', '', 0, '', '', '2021-03-15 12:59:17', '2021-03-15 06:59:17'),
(7, 'widget/2021/03/15/portfolio-2.jpg', 'portfolio-item', '???', 'Hà Nam', '', '', 0, '', '', '2021-03-15 12:59:29', '2021-03-15 06:59:29'),
(8, 'widget/2021/03/15/portfolio-3.jpg', 'portfolio-item', 'Sup Lo', 'Lang Son', '', '', 0, '', '', '2021-03-15 12:59:42', '2021-03-15 06:59:42'),
(9, 'widget/2021/03/15/portfolio-4.jpg', 'portfolio-item', 'Dau Tay', 'Hai Phong', '', '', 0, '', '', '2021-03-15 12:59:54', '2021-03-15 06:59:54'),
(10, 'widget/2021/03/15/portfolio-5.jpg', 'portfolio-item', 'Cu Den', 'Thanh Hoa', '', '', 0, '', '', '2021-03-15 13:00:13', '2021-03-15 07:00:13'),
(11, 'widget/2021/03/15/portfolio-6.jpg', 'portfolio-item', 'Khoai Tay', 'Hoa Binh', '', '', 0, '', '', '2021-03-15 13:00:26', '2021-03-15 07:00:26'),
(12, 'widget/2021/03/15/portfolio-7.jpg', 'portfolio-item', 'Man', 'Phu Yen', '', '', 0, '', '', '2021-03-15 13:00:40', '2021-03-15 07:00:40'),
(13, 'widget/2021/03/15/portfolio-8.jpg', 'portfolio-item', 'Cai Bap', 'Ca Mau', '', '', 0, '', '', '2021-03-15 13:01:00', '2021-03-15 07:01:00'),
(14, '', 'customize-title', 'Easy to Customize', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod. Lorem ipsum dolor Tur adipiscing elit, sed do eiusmod.', '', '', 0, '', '', '2021-03-15 09:42:19', '2021-03-15 09:42:32'),
(15, 'widget/2021/03/15/customize-1.jpg', 'customize-item', 'Icon Collections', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod. Lorem ipsum dolor Tur adipiscing elit, sed do eiusmod.', '', '', 0, '', '', '2021-03-15 13:01:29', '2021-03-15 07:01:29'),
(16, 'widget/2021/03/15/customize-2.jpg', 'customize-item', 'Enjoy difference', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.', '', '', 0, '', '', '2021-03-15 13:01:43', '2021-03-15 07:01:43'),
(17, 'widget/2021/03/15/customize-3.jpg', 'customize-item', 'Supreme Teamwork', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod. Lorem ipsum dolor Tur adipiscing elit, sed do eiusmod.', '', '', 0, '', '', '2021-03-15 13:01:56', '2021-03-15 07:01:56'),
(18, 'widget/2021/03/15/clients-1.jpg', 'client-item', 'Anna White', 'Lorem ipsum dolor sit amet, conset etur sadip scing elitrsed.', '', '', 0, '', '', '2021-03-15 13:02:23', '2021-03-15 07:02:23'),
(19, 'widget/2021/03/15/clients-2.jpg', 'client-item', 'David Harrison', 'Lorem ipsum dolor sit amet, conset etur sadip scing elitrsed.', '', '', 0, '', '', '2021-03-15 13:02:40', '2021-03-15 07:02:40'),
(20, 'widget/2021/03/15/clients-3.jpg', 'client-item', 'Lydia Bergen', 'Lorem ipsum dolor sit amet, conset etur sadip scing elitrsed.', '', '', 0, '', '', '2021-03-15 14:12:25', '2021-03-15 08:12:25'),
(21, 'widget/2021/03/15/clients-4.jpg', 'client-item', 'Melany Cristof', 'Lorem ipsum dolor sit amet, conset etur sadip scing elitrsed.', '', '', 0, '', '', '2021-03-15 14:12:34', '2021-03-15 08:12:34'),
(22, 'widget/2021/03/15/slider-1.png', 'slider-item', 'Choosing only the Natural', 'Spadefish tiger shark Alaska blackfish wels catfish plaice four-eyed fish peladillo glass knifefish sbasis, taking local availability.', '', '', 0, '', '', '2021-03-15 13:03:21', '2021-03-15 07:03:21'),
(23, 'widget/2021/03/15/slider-2.png', 'slider-item', 'Choosing the Right Nutrition', 'With an emphasis on Organic and Local, we do as little conventional shopping as possible. We are always open to suggestions.', '', '', 0, '', '', '2021-03-15 13:03:34', '2021-03-15 07:03:34'),
(24, 'widget/2021/03/15/slider-3.png', 'slider-item', 'Choosing the Right Nutrition', 'With an emphasis on Organic and Local, we do as little conventional shopping as possible. We are always open to suggestions.', '', '', 0, '', '', '2021-03-15 13:03:47', '2021-03-15 07:03:47'),
(25, 'widget/2021/03/16/counter-1.png', 'counter-item', 'Team energy left', '', '', '', 9859, '', '', '2021-03-16 01:50:05', '2021-03-15 19:50:05'),
(26, 'widget/2021/03/16/counter-2.png', 'counter-item', 'Lines of code', '', '', '', 8197, '', '', '2021-03-16 01:50:24', '2021-03-15 19:50:24'),
(27, 'widget/2021/03/16/counter-3.png', 'counter-item', 'Awesome Projects', '', '', '', 1143, '', '', '2021-03-15 19:48:46', '2021-03-15 19:48:46'),
(28, 'widget/2021/03/16/counter-4.png', 'counter-item', 'Cups of coffe', '', '', '', 2177, '', '', '2021-03-15 19:49:12', '2021-03-15 19:49:12'),
(29, 'widget/2021/03/16/testimonials-1.jpg', 'testimonial-item', '', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium natus error sit volu ptatem omnis. Sed ut                             perspiciatis unde omnis iste natus errorsit voluptatem accusantium.', '', '', 0, 'Sara Newman', 'Manager', '2021-03-16 02:36:10', '2021-03-15 20:36:10'),
(30, 'widget/2021/03/16/testimonials-2.jpg', 'testimonial-item', '', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium natus error sit volu ptatem omnis. Sed ut                             perspiciatis unde omnis iste natus errorsit voluptatem accusantium.', '', '', 0, 'James Newbie', 'Doctor', '2021-03-16 02:36:23', '2021-03-15 20:36:23'),
(31, 'widget/2021/03/16/testimonials-3.jpg', 'testimonial-item', '', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium natus error sit volu ptatem omnis. Sed ut                             perspiciatis unde omnis iste natus errorsit voluptatem accusantium.', '', '', 0, 'David Harrison', 'Artist', '2021-03-16 02:36:35', '2021-03-15 20:36:35'),
(32, '', 'testimonial-title', 'Testimonials', 'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem.', '', '', 0, '', '', '2021-03-16 02:18:37', '2021-03-15 20:18:37'),
(33, 'widget/2021/03/16/contact.jpg', 'contact-item', 'Liên hệ ngay', 'Tìm kiếm sản phẩm chất lượng, đảm bảo sức khỏe!', '', '', 0, '', '', '2021-03-15 20:39:23', '2021-03-15 20:39:23'),
(34, 'widget/2021/03/16/banner.webp', 'banner-item', 'Giới thiệu', 'Trang chủ', '', '', 0, '', '', '2021-03-15 21:07:12', '2021-03-15 21:07:12'),
(35, 'widget/2021/03/16/reason.png', 'reason-item', 'Why Choose Us', 'Our company began in 1967 as a food buying club when the “Founding Mothers” and other individuals banded together to establish a source for unadulterated, unrefined, locally grown food. Eeltail catfish yellow moray pumpkinseed Pacific albacore northern pearleye glass knifefish Red salmon largemouth bass, regal whiptail catfish flabby whalefish dogteeth tetra elephantnose fish; red snapper guitarfish.  Sea devil Indian mul milkfish madtom bonytongue denticle herring–featherback daggertooth pike conger, rivuline. Brook lamprey,spikefish', '', '', 0, '', '', '2021-03-16 03:30:07', '2021-03-15 21:30:07'),
(36, '', 'reason-number-item', 'Happy Clients', '', '', '', 800, '', '', '2021-03-15 21:26:20', '2021-03-15 21:26:20'),
(37, '', 'reason-number-item', 'Projects', '', '', '', 30, '', '', '2021-03-15 21:26:40', '2021-03-15 21:26:40'),
(38, '', 'reason-number-item', 'Products', '', '', '', 200, '', '', '2021-03-15 21:26:59', '2021-03-15 21:26:59');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `animation`
--
ALTER TABLE `animation`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `link_news_tag`
--
ALTER TABLE `link_news_tag`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `link_product_tag`
--
ALTER TABLE `link_product_tag`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `link_role_permission`
--
ALTER TABLE `link_role_permission`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news_tags`
--
ALTER TABLE `news_tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `widget`
--
ALTER TABLE `widget`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `animation`
--
ALTER TABLE `animation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `link_news_tag`
--
ALTER TABLE `link_news_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT cho bảng `link_product_tag`
--
ALTER TABLE `link_product_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `link_role_permission`
--
ALTER TABLE `link_role_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `news_tags`
--
ALTER TABLE `news_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `widget`
--
ALTER TABLE `widget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
