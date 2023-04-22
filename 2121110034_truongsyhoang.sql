-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 21, 2023 lúc 10:00 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `2121110034_truongsyhoang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_brand`
--

CREATE TABLE `tsh_brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `metakey` varchar(1000) NOT NULL,
  `metadesc` varchar(1000) NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tsh_brand`
--

INSERT INTO `tsh_brand` (`id`, `name`, `slug`, `image`, `sort_order`, `metakey`, `metadesc`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(18, 'Nhã Nam', 'nha-nam', 'nha-nam.jpg', 0, 'Nhã Nam', '<p>Nh&atilde; Nam</p>', 1, NULL, 1, '2023-04-15 02:18:17', '2023-04-15 02:18:17'),
(19, 'Kim Đồng', 'kim-dong', 'kim-dong.png', 1, 'Kim Đồng', '<p>Kim Đồng</p>', 1, NULL, 1, '2023-04-15 02:18:37', '2023-04-15 02:18:37'),
(20, 'NXB Trẻ', 'nxb-tre', 'nxb-tre.jpg', 3, 'NXB Trẻ', '<p>NXB Trẻ</p>', 1, 1, 1, '2023-04-15 02:18:57', '2023-04-15 02:19:04'),
(21, 'NXB Hà Nội', 'nxb-ha-noi', NULL, 0, 'NXB Hà Nội', '<p>NXB H&agrave; Nội</p>', 1, NULL, 1, '2023-04-19 00:46:30', '2023-04-19 00:46:30'),
(22, 'Tsuki LightNovel', 'tsuki-lightnovel', NULL, 0, 'Tsuki LightNovel', '<p>Tsuki LightNovel</p>', 1, NULL, 1, '2023-04-19 00:52:16', '2023-04-19 00:52:16'),
(23, 'IPM', 'ipm', NULL, 1, 'IPM', '<p>IPM</p>', 1, NULL, 1, '2023-04-19 01:04:25', '2023-04-19 01:04:25'),
(24, 'Amak', 'amak', NULL, 2, 'Amak', '<p>Amak</p>', 1, NULL, 1, '2023-04-19 01:11:35', '2023-04-19 01:11:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_cart`
--

CREATE TABLE `tsh_cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_category`
--

CREATE TABLE `tsh_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `metakey` varchar(1000) NOT NULL,
  `metadesc` text NOT NULL,
  `level` tinyint(3) UNSIGNED NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tsh_category`
--

INSERT INTO `tsh_category` (`id`, `name`, `slug`, `parent_id`, `sort_order`, `image`, `metakey`, `metadesc`, `level`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(12, 'Light novel', 'light-novel', 0, 0, NULL, 'Light novel', '<p><strong>Light novel</strong>&nbsp;(ライトノベル&nbsp;<em>raito noberu</em><a href=\"https://vi.wikipedia.org/wiki/Tr%E1%BB%A3_gi%C3%BAp:Ti%E1%BA%BFng_Nh%E1%BA%ADt\" title=\"Trợ giúp:Tiếng Nhật\"><sup>?</sup></a>)&nbsp;hay tiểu thuyết ngắn, l&agrave; một d&ograve;ng&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Ti%E1%BB%83u_thuy%E1%BA%BFt\" title=\"Tiểu thuyết\">tiểu thuyết</a>&nbsp;c&oacute; nguồn gốc từ&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Nh%E1%BA%ADt_B%E1%BA%A3n\" title=\"Nhật Bản\">Nhật Bản</a>.<sup><a href=\"https://vi.wikipedia.org/wiki/Light_novel#cite_note-1\">[1]</a></sup>&nbsp;&quot;Light&quot; trong &quot;light novel&quot; nghĩa l&agrave; ngắn, nhẹ về số lượng từ ngữ. Light novel thường được gọi tắt l&agrave;&nbsp;<em>ranobe</em>&nbsp;(ラノベ&nbsp;<em>ranobe</em><a href=\"https://vi.wikipedia.org/wiki/Tr%E1%BB%A3_gi%C3%BAp:Ti%E1%BA%BFng_Nh%E1%BA%ADt\" title=\"Trợ giúp:Tiếng Nhật\"><sup>?</sup></a>)&nbsp;hay&nbsp;<em>rainobe</em>&nbsp;(ライノベ&nbsp;<em>rainobe</em><a href=\"https://vi.wikipedia.org/wiki/Tr%E1%BB%A3_gi%C3%BAp:Ti%E1%BA%BFng_Nh%E1%BA%ADt\" title=\"Trợ giúp:Tiếng Nhật\"><sup>?</sup></a>).<sup><a href=\"https://vi.wikipedia.org/wiki/Light_novel#cite_note-autogenerated1-2\">[2]</a></sup>&nbsp;Mỗi light novel thường d&agrave;i kh&ocirc;ng qu&aacute; 40 - 50 ngh&igrave;n từ (loại light novel ngắn hơn c&oacute; độ d&agrave;i tương đương với&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Ti%E1%BB%83u_thuy%E1%BA%BFt_ng%E1%BA%AFn\" title=\"Tiểu thuyết ngắn\">tiểu thuyết ngắn</a>&nbsp;theo ti&ecirc;u chuẩn của Hoa Kỳ), thường được xuất bản dưới dạng&nbsp;<em><a href=\"https://vi.wikipedia.org/wiki/Bunkobon\" title=\"Bunkobon\">văn khố bản</a></em>&nbsp;(<em>bunkobon</em>), v&agrave; thường được minh họa trang b&igrave;a bởi c&aacute;c họa sĩ.<sup><a href=\"https://vi.wikipedia.org/wiki/Light_novel#cite_note-3\">[3]</a></sup>&nbsp;Nội dung light novel thường được đăng nhiều kỳ tr&ecirc;n c&aacute;c tập san văn thơ trước khi xuất bản dưới dạng tập tiểu thuyết ho&agrave;n chỉnh.</p>', 1, 1, NULL, 1, '2023-04-15 02:16:59', '2023-04-15 02:16:59'),
(13, 'Manga', 'manga', 0, 1, NULL, 'Manga', '<p><strong>Manga</strong>&nbsp;(漫画<sup>&nbsp;(mạn hoạ)</sup>/&nbsp;まんが/&nbsp;マンガ<a href=\"https://vi.wikipedia.org/wiki/Tr%E1%BB%A3_gi%C3%BAp:Ti%E1%BA%BFng_Nh%E1%BA%ADt\" title=\"Trợ giúp:Tiếng Nhật\"><sup>?</sup></a>&nbsp;<a href=\"https://vi.wikipedia.org/wiki/T%E1%BA%ADp_tin:Ja-Manga.oga\" title=\"Về âm thanh này\"><img alt=\"Về âm thanh này\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Loudspeaker.svg/11px-Loudspeaker.svg.png\" style=\"height:11px; width:11px\" /></a><a href=\"https://upload.wikimedia.org/wikipedia/commons/0/08/Ja-Manga.oga\" title=\"Ja-Manga.oga\">nghe</a>&nbsp;<small>(<a href=\"https://vi.wikipedia.org/wiki/Tr%E1%BB%A3_gi%C3%BAp:%C3%82m_thanh\" title=\"Trợ giúp:Âm thanh\">trợ gi&uacute;p</a>&middot;<a href=\"https://vi.wikipedia.org/wiki/T%E1%BA%ADp_tin:Ja-Manga.oga\" title=\"Tập tin:Ja-Manga.oga\">th&ocirc;ng tin</a>)</small>)&nbsp;l&agrave; một cụm từ&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Ti%E1%BA%BFng_Nh%E1%BA%ADt\" title=\"Tiếng Nhật\">tiếng Nhật</a>&nbsp;để chỉ c&aacute;c loại&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Truy%E1%BB%87n_tranh\" title=\"Truyện tranh\">truyện tranh</a>&nbsp;v&agrave;&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Tranh_bi%E1%BA%BFm_h%E1%BB%8Da\" title=\"Tranh biếm họa\">tranh biếm họa</a>&nbsp;của Nhật Bản. B&ecirc;n ngo&agrave;i&nbsp;<a href=\"https://vi.wikipedia.org/wiki/Nh%E1%BA%ADt_B%E1%BA%A3n\" title=\"Nhật Bản\">Nhật Bản</a>, Manga &aacute;m chỉ t&iacute;nh đặc trưng ri&ecirc;ng biệt của truyện tranh Nhật Bản, hoặc như một phong c&aacute;ch truyện tranh phổ biến tại Nhật Bản m&agrave; thường được m&ocirc; tả bởi đồ họa tr&agrave;n đầy m&agrave;u sắc, c&aacute;c nh&acirc;n vật sống động v&agrave; những chủ đề tuyệt vời.</p>', 1, 1, NULL, 1, '2023-04-15 02:17:33', '2023-04-15 02:17:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_comment`
--

CREATE TABLE `tsh_comment` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `body` text NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `reply_id` int(11) DEFAULT 0,
  `type` char(30) NOT NULL,
  `table_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tsh_comment`
--

INSERT INTO `tsh_comment` (`id`, `user_id`, `body`, `parent_id`, `reply_id`, `type`, `table_id`, `status`, `created_at`, `updated_at`) VALUES
(108, 17, 'thu nghiem 1', 0, 0, 'product', 45, 1, '2023-04-16 03:15:12', '2023-04-16 03:15:12'),
(109, 17, 'thu nghiem 2', 108, 17, 'product', 45, 1, '2023-04-16 03:15:27', '2023-04-16 03:15:27'),
(110, 17, 'thu nghiem 3', 108, 17, 'product', 45, 1, '2023-04-16 03:15:43', '2023-04-16 03:15:43'),
(111, 17, 'thu nghiem 4', 108, 17, 'product', 45, 1, '2023-04-16 03:15:58', '2023-04-16 03:15:58'),
(112, 17, '1234567891', 0, 0, 'product', 64, 1, '2023-04-21 00:45:49', '2023-04-21 00:45:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_config`
--

CREATE TABLE `tsh_config` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `metakey` varchar(1000) NOT NULL,
  `metadesc` varchar(1000) NOT NULL,
  `author` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `googleplus` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_contact`
--

CREATE TABLE `tsh_contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `replay_id` int(10) UNSIGNED DEFAULT NULL,
  `reply_content` text DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_link`
--

CREATE TABLE `tsh_link` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL,
  `table_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tsh_link`
--

INSERT INTO `tsh_link` (`id`, `link`, `type`, `table_id`) VALUES
(43, 'sach-hay', 'topic', 9),
(46, 'gioi-thieu', 'page', 16),
(47, 'chinh-sach-mua-hang', 'page', 17),
(48, 'chinh-sach-bao-hanh', 'page', 18),
(49, 'chinh-sach-doi-tra-san-pham', 'page', 19),
(50, 'chinh-sach-van-chuyen', 'page', 20),
(51, 'light-novel', 'category', 12),
(52, 'manga', 'category', 13),
(53, 'nha-nam', 'brand', 18),
(54, 'kim-dong', 'brand', 19),
(55, 'nxb-tre', 'brand', 20),
(56, 'nxb-ha-noi', 'brand', 21),
(57, 'tsuki-lightnovel', 'brand', 22),
(58, 'ipm', 'brand', 23),
(59, 'amak', 'brand', 24);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_menu`
--

CREATE TABLE `tsh_menu` (
  `id` int(11) NOT NULL COMMENT 'Mã Menu',
  `name` varchar(255) NOT NULL COMMENT 'Tên Menu',
  `link` varchar(255) NOT NULL COMMENT 'Liên kết',
  `type` varchar(50) NOT NULL COMMENT 'Kiểu Menu',
  `table_id` int(11) NOT NULL DEFAULT 0 COMMENT 'Mã trong bảng',
  `sort_order` int(11) NOT NULL DEFAULT 0 COMMENT 'Thứ tự',
  `position` varchar(255) NOT NULL COMMENT 'Vị trí',
  `level` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL COMMENT 'Mã cấp cha',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày Tạo',
  `created_by` tinyint(4) NOT NULL DEFAULT 1 COMMENT 'Người tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày sửa',
  `updated_by` tinyint(4) NOT NULL DEFAULT 1 COMMENT 'Người sửa',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT 'Trạng thái'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tsh_menu`
--

INSERT INTO `tsh_menu` (`id`, `name`, `link`, `type`, `table_id`, `sort_order`, `position`, `level`, `parent_id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`) VALUES
(104, 'Trang chủ', '/', 'custom', 0, 1, 'mainmenu', 1, 0, '2023-04-11 18:45:53', 1, '2023-04-11 18:46:07', 1, 1),
(105, 'Sản phẩm', '/product', 'custom', 0, 3, 'mainmenu', 1, 0, '2023-04-11 18:47:54', 1, '2023-04-19 05:30:57', 1, 1),
(109, 'Giới thiệu', 'page', 'custom', 0, 2, 'mainmenu', 1, 0, '2023-04-11 18:53:17', 1, '2023-04-11 19:02:04', 1, 1),
(110, 'Tin tức', '/post', 'custom', 0, 4, 'mainmenu', 1, 0, '2023-04-11 18:54:28', 1, '2023-04-11 18:55:46', 1, 1),
(111, 'Liên hệ', '/contact', 'custom', 0, 5, 'mainmenu', 1, 0, '2023-04-11 18:54:51', 1, '2023-04-11 18:55:57', 1, 1),
(113, 'Trang chủ', '/', 'custom', 0, 0, 'footermenu', 1, 0, '2023-04-12 20:19:15', 1, '2023-04-12 20:19:42', 1, 1),
(114, 'Sản phẩm', '/product', 'custom', 0, 1, 'footermenu', 1, 0, '2023-04-12 20:20:01', 1, '2023-04-20 18:59:46', 1, 0),
(115, 'Manga', 'manga', 'category', 13, 3, 'mainmenu', 1, 105, '2023-04-19 05:28:14', 1, '2023-04-19 05:31:45', 1, 1),
(116, 'Light novel', 'light-novel', 'category', 12, 2, 'mainmenu', 1, 105, '2023-04-19 05:28:14', 1, '2023-04-19 05:32:11', 1, 1),
(117, 'Tất cả sản phẩm', '/product', 'custom', 0, 3, 'mainmenu', 1, 105, '2023-04-19 06:04:56', 1, '2023-04-19 06:05:42', 1, 1),
(118, 'Chính sách vận chuyển', 'chinh-sach-van-chuyen', 'page', 20, 1, 'mainmenu', 1, 0, '2023-04-20 20:38:12', 1, '2023-04-20 20:38:36', 1, 0),
(119, 'Sản phẩm', '/product', 'custom', 0, 1, 'footermenu', 1, 0, '2023-04-20 21:58:26', 1, '2023-04-20 21:58:26', 1, 2),
(120, 'Sản phẩm', '/product', 'custom', 0, 1, 'footermenu', 1, 0, '2023-04-20 21:58:26', 1, '2023-04-20 21:58:34', 1, 1),
(121, 'Bài viết', '/post', 'custom', 0, 1, 'footermenu', 1, 0, '2023-04-20 21:58:54', 1, '2023-04-20 21:59:05', 1, 1),
(122, 'Giới thiệu', '/page', 'custom', 0, 1, 'footermenu', 1, 0, '2023-04-20 21:59:20', 1, '2023-04-20 22:01:21', 1, 1),
(123, 'Liên hệ', '/contact', 'custom', 0, 1, 'footermenu', 1, 0, '2023-04-20 21:59:40', 1, '2023-04-20 22:00:50', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_migrations`
--

CREATE TABLE `tsh_migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tsh_migrations`
--

INSERT INTO `tsh_migrations` (`id`, `migration`, `batch`) VALUES
(41, '2014_10_12_000000_create_users_table', 1),
(42, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(43, '2023_02_18_093329_create_category_table', 1),
(44, '2023_02_18_100157_create_brand_table', 1),
(45, '2023_02_18_101622_create_contact_table', 1),
(46, '2023_02_18_101655_create_menu_table', 1),
(47, '2023_02_18_101725_create_order_table', 1),
(48, '2023_02_18_101812_create_orderdetail_table', 1),
(49, '2023_02_18_101837_create_post_table', 1),
(50, '2023_02_18_101903_create_product_table', 1),
(51, '2023_02_18_101928_create_slider_table', 1),
(52, '2023_02_18_102001_create_topic_table', 1),
(53, '2023_02_18_102023_create_user_table', 1),
(54, '2023_03_07_080616_create_config_table', 1),
(55, '2023_03_07_082138_create_link_table', 1),
(56, '2023_03_11_075005_create_product_image_table', 1),
(57, '2023_03_11_075715_create_product_option_table', 1),
(58, '2023_03_11_080038_create_product_value_table', 1),
(59, '2023_03_11_160749_create_product_sale_table', 1),
(60, '2023_03_11_161537_create_product_store_table', 1),
(62, '2023_03_21_163449_create_roles_table', 2),
(63, '2023_03_21_163528_create_user_roles_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_order`
--

CREATE TABLE `tsh_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tsh_order`
--

INSERT INTO `tsh_order` (`id`, `user_id`, `name`, `email`, `phone`, `address`, `code`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(21, 17, 'hoangfg', 'dochanh2303@gmail.com', '0918146697', '12345', '20230421', 1, 1, '2023-04-21 00:46:11', '2023-04-21 00:47:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_orderdetail`
--

CREATE TABLE `tsh_orderdetail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `qty` int(10) UNSIGNED NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tsh_orderdetail`
--

INSERT INTO `tsh_orderdetail` (`id`, `order_id`, `product_id`, `price`, `qty`, `amount`, `created_at`, `updated_at`) VALUES
(26, 20, 40, '123456', 10, '1234560', '2023-04-11 10:17:15', '2023-04-11 10:17:15'),
(27, 21, 45, '70000', 2, '140000', '2023-04-21 00:46:11', '2023-04-21 00:46:11'),
(28, 21, 64, '123456', 1, '123456', '2023-04-21 00:46:11', '2023-04-21 00:46:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_personal_access_tokens`
--

CREATE TABLE `tsh_personal_access_tokens` (
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
-- Cấu trúc bảng cho bảng `tsh_post`
--

CREATE TABLE `tsh_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(1000) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `detail` mediumtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `metakey` varchar(1000) NOT NULL,
  `metadesc` varchar(1000) NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tsh_post`
--

INSERT INTO `tsh_post` (`id`, `topic_id`, `title`, `slug`, `detail`, `image`, `type`, `metakey`, `metadesc`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(13, 9, 'Chuyện con ốc sên muốn biết tại sao nó chậm chạp', 'chuyen-con-oc-sen-muon-biet-tai-sao-no-cham-chap', '<p>Chuyện Con Ốc S&ecirc;n Muốn Biết Tại Sao N&oacute; Chậm Chạp ra đời từ một gợi &yacute; rất ngộ nghĩnh khi t&aacute;c giả nhận được c&acirc;u hỏi của cậu ch&aacute;u trai: &ldquo;&Ocirc;ng ơi, v&igrave; sao con ốc s&ecirc;n lại chậm chạp như vậy?&rdquo;. Được viết bởi Luis Sepulveda, t&aacute;c giả đ&atilde; từng rất th&agrave;nh c&ocirc;ng qua quyển s&aacute;ch Chuyện Con M&egrave;o Dạy Hải &Acirc;u Bay &ndash; quyển s&aacute;ch với c&acirc;u chuyện giản dị v&agrave; ngộ nghĩnh nhưng ẩn chứa nhiều b&agrave;i học v&agrave; triết l&yacute; s&acirc;u sắc đ&atilde; được h&agrave;ng triệu độc giả tr&ecirc;n thế giới đọc v&agrave; cảm nhận. Ở quyển s&aacute;ch mới n&agrave;y, &ocirc;ng vẫn vận dụng lối viết theo kiểu ngụ ng&ocirc;n, với nh&acirc;n vật ch&iacute;nh l&agrave; ch&uacute; ốc s&ecirc;n nhỏ b&eacute; v&agrave; c&acirc;u chuyện đi t&igrave;m khao kh&aacute;t v&agrave; &yacute; nghĩa cuộc sống. Chuyện Con Ốc S&ecirc;n Muốn Biết Tại Sao N&oacute; Chậm Chạp chắn chắn sẽ mang đến cho độc giả những trải nghiệm th&uacute; vị nhưng cũng đầy &yacute; nghĩa.</p>\r\n\r\n<p><img alt=\"Chuyện con ốc sên muốn biết tại sao nó chậm chạp\" src=\"https://bizweb.dktcdn.net/thumb/large/100/047/782/articles/oc-sen.jpg?v=1452585704087\" /></p>\r\n\r\n<p>Chuyện Con Ốc S&ecirc;n Muốn Biết Tại Sao N&oacute; Chậm Chạp kể về một ch&uacute; ốc s&ecirc;n đ&atilde; dũng cảm chấp nhận hy sinh, &ldquo;tự l&agrave;m khổ m&igrave;nh&rdquo; để c&oacute; thể trưởng th&agrave;nh hơn. Ch&uacute; ốc s&ecirc;n n&agrave;y thuở nhỏ sống c&ugrave;ng bầy ốc s&ecirc;n của m&igrave;nh ở một nơi c&oacute; t&ecirc;n l&agrave; Qu&ecirc; hương Bồ C&ocirc;ng Anh. Bọn ch&uacute;ng sống một cuộc đời chậm chạp, lặng lẽ, cam chịu v&agrave; gọi nhau đơn giản l&agrave; &ldquo;s&ecirc;n&rdquo;, cho đến khi ch&uacute; ốc s&ecirc;n n&agrave;y dũng cảm n&ecirc;u l&ecirc;n &yacute; kiến của m&igrave;nh rằng cuộc đời n&agrave;y thật bất c&ocirc;ng khi d&agrave;nh sự ưu &aacute;i qu&aacute; nhiều cho c&aacute;c lo&agrave;i vật kh&aacute;c, trong khi bọn ch&uacute;ng lại được &ldquo;ban&rdquo; cho sự chậm chạp v&agrave; thậm ch&iacute; kh&ocirc;ng c&oacute; nổi một c&aacute;i t&ecirc;n ri&ecirc;ng. Sau khi n&ecirc;u r&otilde; quan điểm của m&igrave;nh, ch&uacute; đ&atilde; bị đồng loại của m&igrave;nh chế giễu v&agrave; cho rằng giống lo&agrave;i của ch&uacute;ng đ&atilde; qu&aacute; quen với cuộc sống chậm chạp. Để rồi từ đ&oacute;, kẻ nổi loạn quyết t&acirc;m rời xa chốn th&acirc;n thuộc của m&igrave;nh để đi t&igrave;m c&acirc;u trả lời cho những thắc mắc bấy l&acirc;u.</p>\r\n\r\n<p>Tr&ecirc;n chuyến h&agrave;nh tr&igrave;nh ấy, ch&uacute; ốc s&ecirc;n may mắn gặp được một b&aacute;c r&ugrave;a gi&agrave; &ndash; cũng ch&iacute;nh l&agrave; người đ&atilde; đặt cho ch&uacute; c&aacute;i t&ecirc;n Dũng Kh&iacute; &ndash; v&agrave; chỉ dạy cho ch&uacute; nhiều b&agrave;i học qu&yacute; gi&aacute;. V&agrave; cũng nhờ cuộc h&agrave;nh tr&igrave;nh đ&oacute; m&agrave; ch&uacute; ốc s&ecirc;n Dũng Kh&iacute; biết được một tai họa lớn sắp ập xuống đồng cỏ &ndash; nơi c&aacute;c lo&agrave;i sinh vật v&agrave; đồng loại của ch&uacute; đang sống y&ecirc;n b&igrave;nh. Để rồi bằng tấm l&ograve;ng y&ecirc;u thương của m&igrave;nh, ch&uacute; ốc s&ecirc;n nhỏ quyết định quay trở về b&aacute;o tin cho đồng loại c&ugrave;ng như c&aacute;c lo&agrave;i vật kh&aacute;c như họ nh&agrave; kiến, bọ hung, chuột chũi,&hellip;</p>\r\n\r\n<p>Với giọng văn giản dị, dễ hiểu, c&oacute; đ&ocirc;i ch&uacute;t h&oacute;m hỉnh kể về c&acirc;u chuyện ch&uacute; ốc s&ecirc;n Dũng Kh&iacute; v&agrave; những lo&agrave;i vật, Chuyện Con Ốc S&ecirc;n Muốn Biết Tại Sao N&oacute; Chậm Chạp ph&ugrave; hợp cho mọi lứa tuổi chứ kh&ocirc;ng chỉ c&aacute;c em thiếu nhi. Bằng sự t&agrave;i t&igrave;nh trong ng&ograve;i b&uacute;t, Luis Sepulveda cũng đ&atilde; vẽ ra trước mắt độc giả những h&igrave;nh ảnh thi&ecirc;n nhi&ecirc;n sống động với c&aacute;c lo&agrave;i vật đang sinh sống v&agrave; c&oacute; những suy nghĩ, t&iacute;nh c&aacute;ch kh&aacute;c nhau hệt như con người, qua đ&oacute; mang đến cho độc giả những cảm nhận rất ri&ecirc;ng t&ugrave;y v&agrave;o từng lứa tuổi hay quan niệm sống, nhưng hơn hết, sau khi đọc v&agrave; ngấm những g&igrave; m&agrave; t&aacute;c giả gửi gắm, mỗi người chắc chắn cũng sẽ r&uacute;t ra được cho m&igrave;nh những b&agrave;i học s&acirc;u sắc về cuộc sống, về l&ograve;ng dũng cảm, kh&aacute;t vọng vươn l&ecirc;n v&agrave; khẳng định c&aacute;i t&ocirc;i. Qua Chuyện Con Ốc S&ecirc;n Muốn Biết Tại Sao N&oacute; Chậm Chạp, mỗi người trong ch&uacute;ng ta thấy m&igrave;nh cũng giống như ch&uacute; ốc s&ecirc;n nhỏ, hồn nhi&ecirc;n, nhiệt th&agrave;nh v&agrave; như được tiếp th&ecirc;m sức mạnh để sống hết m&igrave;nh tr&ecirc;n chuyến h&agrave;nh tr&igrave;nh t&igrave;m kiếm những điều lớn lao.</p>', 'chuyen-con-oc-sen-muon-biet-tai-sao-no-cham-chap.webp', 'post', 'Chuyện con ốc sên muốn biết tại sao nó chậm chạp', '<h3><a href=\"https://bookstore-theme.mysapo.net/chuyen-con-oc-sen-muon-biet-tai-sao-no-cham-chap\" title=\"Chuyện con ốc sên muốn biết tại sao nó chậm chạp\">Chuyện con ốc s&ecirc;n muốn biết tại sao n&oacute; chậm chạp</a></h3>', 1, NULL, 1, '2023-04-15 01:49:53', '2023-04-15 01:49:53'),
(14, 9, 'Lũ trẻ nhà Penderwicks', 'lu-tre-nha-penderwicks', '<p>Quyển s&aacute;ch l&agrave; c&acirc;u chuyện xoay quanh những th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh Penderwicks với người bố &ldquo;g&agrave; trống nu&ocirc;i con&rdquo; lu&ocirc;n biết lắng nghe, với chị cả Rosalind 12 tuổi &ndash; người đảm đang nhất nh&agrave;, với chị hai Skye 11 tuổi, t&oacute;c v&agrave;ng mắt xanh giống mẹ &ndash; l&agrave; một t&agrave;i năng về c&aacute;c m&ocirc;n khoa học tự nhi&ecirc;n, chị ba Jane ham viết l&aacute;ch với giấc mơ trở th&agrave;nh nh&agrave; văn, b&eacute; &uacute;t Batty rụt r&egrave;, nh&uacute;t nh&aacute;t v&agrave; ch&uacute; c&uacute;n trung th&agrave;nh, đ&aacute;ng y&ecirc;u. Tuy chỉ l&agrave; những c&acirc;u chuyện gần gũi v&agrave; giản dị về những niềm vui, nỗi buồn trong cuộc sống cũng như những chuyến phi&ecirc;u lưu mạo hiểm nhưng Lũ Trẻ Nh&agrave; Penderwicks đ&atilde; h&uacute;t hồn h&agrave;ng triệu độc giả ở c&aacute;c độ tuổi kh&aacute;c nhau tr&ecirc;n khắp thế giới bởi n&oacute; diễn tả được t&igrave;nh cảm nồng ấm giữa c&aacute;c th&agrave;nh vi&ecirc;n trong một gia đ&igrave;nh kh&ocirc;ng c&ograve;n mẹ.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/thumb/large/100/047/782/articles/lu-tre.jpg?v=1452585724897\" /></p>\r\n\r\n<p>&ldquo;Nếu kh&ocirc;ng c&oacute; chuyến đi đến một nơi n&agrave;o kh&aacute;c biệt th&igrave; c&ograve;n gọi g&igrave; l&agrave; nghỉ h&egrave; nữa?&rdquo;. Bắt đầu từ ch&acirc;n l&yacute; rất trẻ con ấy, c&aacute;i t&ecirc;n Anrundel được chọn v&agrave; cả gia đ&igrave;nh họ g&oacute;i gh&eacute;m h&agrave;nh trang l&ecirc;n đường. Để rồi cuối c&ugrave;ng sự t&igrave;nh cờ th&uacute; vị ấy lại đưa họ đến với v&ocirc; v&agrave;n những điều kh&oacute; qu&ecirc;n. Với lời văn giản dị v&agrave; s&uacute;c t&iacute;ch cũng như sử dụng c&aacute;c từ ngữ mi&ecirc;u tả cảm x&uacute;c thật đắc, t&aacute;c giả đ&atilde; như đưa người đọc v&agrave;o một thế giới kh&aacute;c hẳn với sự x&ocirc; bồ n&aacute;o nhiệt hiện tại, để được đắm m&igrave;nh v&agrave;o thi&ecirc;n nhi&ecirc;n, được trở về tuổi thơ th&ecirc;m một lần nữa qua c&acirc;u chuyện của nh&agrave; Penderwicks.</p>\r\n\r\n<p>Kỳ nghỉ của Lũ Trẻ Nh&agrave; Penderwicks đưa người đọc đến với dinh thự Anrundel với khu vườn m&ecirc;nh m&ocirc;ng y&ecirc;n b&igrave;nh, với ph&ograve;ng kh&aacute;ch lộng lẫy như một viện bảo t&agrave;ng thu nhỏ, với kho b&aacute;u b&iacute; mật tr&ecirc;n căn g&aacute;c cũ, những buổi vũ hội v&agrave; c&aacute;c n&agrave;ng c&ocirc;ng ch&uacute;a bất đắc dĩ, hiệp sĩ đấu b&ograve; v&agrave; cuộc giải v&acirc;y gay cấn&hellip; Kỳ nghỉ ấy, bọn trẻ c&ograve;n được gặp gỡ v&agrave; kết th&acirc;n với những con người đ&aacute;ng mến như cậu chủ nhỏ Jeffrey th&acirc;n thiện, anh Cagney điểm trai, b&aacute;c Harry c&agrave; chua, b&aacute;c Churchie b&aacute;nh gừng, v&agrave; đối đầu với cả những kẻ đ&aacute;ng gh&eacute;t như b&agrave; Tifton k&ecirc;nh kiệu, g&atilde; Dexter đỏm d&aacute;ng nhưng xấu t&iacute;nh. Tuy nhi&ecirc;n, điểm nhấn của truyện c&oacute; lẽ vẫn nằm ở những giọt nước mắt đ&atilde; rơi xuống trong chuyến h&agrave;nh tr&igrave;nh, khi họ đ&atilde; gi&uacute;p mẹ con Jeffrey hiểu nhau hơn v&agrave; cậu bạn Jeffrey tho&aacute;t khỏi ng&ocirc;i trường qu&acirc;n sự qu&aacute;i quỷ. C&oacute; vẻ như, tất cả những cung bậc của cảm x&uacute;c đều được t&aacute;c giả Jeanne Birdsall g&oacute;i gh&eacute;m trong c&acirc;u chuyện n&agrave;y.</p>\r\n\r\n<p>Lũ Trẻ Nh&agrave; Penderwicks kết th&uacute;c với sự trưởng th&agrave;nh hơn của 4 c&ocirc; b&eacute; trong truyện sau kỳ nghỉ h&egrave;, khi m&agrave; chị cả Rosalind đ&atilde; bắt đầu biết lắng nghe những rung động đầu đời, Skye đ&atilde; bớt n&oacute;ng nảy hơn, Jane ho&agrave;n th&agrave;nh xuất sắc t&aacute;c phẩm của m&igrave;nh để tiến gần hơn đến với ước mơ, v&agrave; Batty kh&ocirc;ng c&ograve;n sợ sệt, ngơ ng&aacute;c trước những người lớn chẳng mấy th&acirc;n thiện.</p>\r\n\r\n<p>Lũ Trẻ Nh&agrave; Penderwicks c&oacute; lẽ kh&ocirc;ng phải l&agrave; một c&acirc;u chuyện qu&aacute; cầu kỳ, nhưng n&oacute; ấn tượng bởi sự giản dị, dễ thương v&agrave; gần gũi rất đời thường m&agrave; ai cũng c&oacute; thể nhận ra m&igrave;nh giống một phần trong đ&oacute;. C&acirc;u chuyện c&ograve;n thu h&uacute;t người đọc bởi cảnh sắc thi&ecirc;n nhi&ecirc;n thơ mộng, với nắng h&egrave; v&agrave; &aacute;nh trăng đ&ecirc;m đ&ecirc;m d&aacute;t bạc xuống v&ugrave;ng qu&ecirc; y&ecirc;n tĩnh, như gi&uacute;p l&ograve;ng người lắng đọng lại giữa cuộc sống bộn bề. V&agrave; hơn hết, Lũ Trẻ Nh&agrave; Penderwicks ấn tượng bởi n&oacute; mang đậm dấu ấn của một gia đ&igrave;nh mỗi người một t&iacute;nh c&aacute;ch, một sở th&iacute;ch nhưng l&uacute;c n&agrave;o đầy ắp t&igrave;nh y&ecirc;u thương.</p>\r\n\r\n<p>&ldquo;Đ&acirc;y quả l&agrave; một sự trở lại những năm 1950, kỷ nguy&ecirc;n của những m&ugrave;a h&egrave; khi bọn trẻ được du ngoạn v&agrave; đọc s&aacute;ch. Truyền h&igrave;nh ư? Tr&ograve; chơi điện tử ư? H&atilde;y qu&ecirc;n ch&uacute;ng đi! Lũ trẻ nh&agrave; Penderwicks mang lại niềm vui cho những độc giả trẻ tuổi, khiến họ nhớ ra một thể loại văn học của qu&aacute; khứ nhưng chưa bao giờ bị qu&ecirc;n l&atilde;ng.&rdquo; &ndash; Nhận định của Children Literature về t&aacute;c phẩm Lũ Trẻ Nh&agrave; Penderwicks.</p>', 'lu-tre-nha-penderwicks.jpg', 'post', 'Lũ trẻ nhà Penderwicks', '<h1>Lũ trẻ nh&agrave; Penderwicks</h1>', 1, NULL, 1, '2023-04-15 02:00:53', '2023-04-15 02:00:53'),
(15, 9, 'Em muốn có một cuộc tình già với anh', 'em-muon-co-mot-cuoc-tinh-gia-voi-anh', '<p>Em Muốn C&oacute; Một Cuộc T&igrave;nh Gi&agrave; Với Anh l&agrave; quyển s&aacute;ch th&uacute; vị v&agrave; &yacute; nghĩa được viết bởi t&aacute;c giả Ho&agrave;ng Anh T&uacute;, l&agrave; một trong những t&aacute;c giả được y&ecirc;u th&iacute;ch với nhiều t&aacute;c phẩm quen thuộc như Mắc Kẹt Ở Thi&ecirc;n Đường, Th&agrave;nh Phố Của Những Linh Hồn Lạc,&hellip; v&agrave; gần đ&acirc;y nhất l&agrave; Y&ecirc;u L&agrave; Y&ecirc;u Thế Th&ocirc;i v&agrave; Ng&atilde; Tư Mưa, Ng&atilde; V&agrave;o Đ&acirc;u Cũng Nhớ. Vẫn l&agrave; những c&acirc;u chuyện l&atilde;ng mạn, nhẹ nh&agrave;ng xen lẫn ch&uacute;t h&agrave;i hước nhưng cũng kh&ocirc;ng k&eacute;m phần s&acirc;u sắc, Em Muốn C&oacute; Một Cuộc T&igrave;nh Gi&agrave; Với Anh đ&uacute;ng như lời t&aacute;c giả b&agrave;y tỏ: &ldquo;Đ&acirc;y l&agrave; cuốn Nhật k&yacute; học y&ecirc;u vợ của một anh chồng v&ocirc; t&acirc;m&rdquo; khi ẩn chứa rất nhiều những cung bậc cảm x&uacute;c cũng như những trải nghiệm của ch&iacute;nh t&aacute;c giả về t&igrave;nh y&ecirc;u, h&ocirc;n nh&acirc;n cũng như cuộc sống h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p><img src=\"https://bizweb.dktcdn.net/thumb/large/100/047/782/articles/cuoc-tinh.jpg?v=1452585680560\" /></p>\r\n\r\n<p>Kh&aacute;c với những t&aacute;c phẩm trước, độc giả sẽ kh&ocirc;ng t&igrave;m thấy trong Em Muốn C&oacute; Một Cuộc T&igrave;nh Gi&agrave; Với Anh những x&uacute;c cảm ngọt ng&agrave;o, l&atilde;ng mạn của thuở mới y&ecirc;u, cũng kh&ocirc;ng bắt gặp những tiếc nuối về những mối t&igrave;nh đ&atilde; qua hay những cơn &ldquo;say nắng&rdquo; dễ thương của tuổi học tr&ograve;. Thay v&agrave;o đ&oacute;, xuy&ecirc;n suốt quyển s&aacute;ch l&agrave; những cung bậc cảm x&uacute;c kh&aacute;c nhau của hai người đ&atilde; c&ugrave;ng nhau nắm tay để vượt qua một chặng đường đủ d&agrave;i, l&agrave; những nồng n&agrave;n m&agrave; c&agrave;ng qua thời gian c&agrave;ng th&ecirc;m thắm đượm, l&agrave; c&aacute;i kh&aacute;t khao to lớn để g&igrave;n giữ h&ocirc;n nh&acirc;n cũng như t&igrave;nh cảm vợ chồng lu&ocirc;n vững bền theo năm th&aacute;ng.</p>\r\n\r\n<p>Đọc EEm Muốn C&oacute; Một Cuộc T&igrave;nh Gi&agrave; Với Anh, người đọc c&oacute; thể dễ d&agrave;ng bắt gặp những c&acirc;u chuyện quen thuộc trong đời sống h&ocirc;n nh&acirc;n m&agrave; bạn đ&atilde;, đang v&agrave; sẽ c&oacute; thể trải qua qua h&igrave;nh ảnh nh&acirc;n vật &ldquo;t&ocirc;i&rdquo; v&agrave; &ldquo;vợ&rdquo;. Từ những việc nhỏ như chuyện người vợ gửi tin nhắn &ldquo;tỏ t&igrave;nh&rdquo; với chồng m&igrave;nh để xem phản ứng của chồng như thế n&agrave;o, cho đến những luận b&agrave;n s&acirc;u sắc về đức hy sinh của người phụ nữ, c&aacute;ch ri&ecirc;ng l&agrave; người vợ, người mẹ trong gia đ&igrave;nh hay thậm ch&iacute; cả việc ngoại t&igrave;nh &ndash; vấn đề mu&ocirc;n thuở trong việc g&igrave;n giữ v&agrave; bảo vệ hạnh ph&uacute;c gia đ&igrave;nh, đều được Ho&agrave;ng Anh T&uacute; đề cập trong quyển s&aacute;ch n&agrave;y. Qua đ&oacute;, t&aacute;c giả mang đến cho người đọc những chi&ecirc;m nghiệm, suy nghĩ về cuộc sống, t&igrave;nh y&ecirc;u v&agrave; cuộc sống gia đ&igrave;nh của bản th&acirc;n để rồi từ đ&oacute; c&oacute; thể tự điều chỉnh c&aacute;ch ứng xử của m&igrave;nh để g&igrave;n giữ t&igrave;nh y&ecirc;u của m&igrave;nh như ngọn lửa ch&aacute;y m&atilde;i với thời gian.</p>\r\n\r\n<p>Em Muốn C&oacute; Một Cuộc T&igrave;nh Gi&agrave; Với Anh viết về t&igrave;nh y&ecirc;u v&agrave; cuộc sống sau h&ocirc;n nh&acirc;n, tuy nhi&ecirc;n quyển s&aacute;ch n&agrave;y kh&ocirc;ng chỉ d&agrave;nh cho những người đ&atilde; l&agrave; chồng, l&agrave; vợ, m&agrave; c&ograve;n d&agrave;nh cho những ai đ&atilde;, đang v&agrave; sẽ bước v&agrave;o t&igrave;nh y&ecirc;u. Đọc để biết, để hiểu, để chuẩn bị v&agrave; sẵn s&agrave;ng v&agrave; đ&oacute;n nhận hạnh ph&uacute;c. V&igrave; như Ho&agrave;ng Anh T&uacute; đ&atilde; n&oacute;i: &ldquo;Nếu bạn tin th&igrave; h&atilde;y mở bất cứ trang n&agrave;o trong cuốn s&aacute;ch n&agrave;y để đọc. Bởi đ&acirc;y l&agrave; một cuốn s&aacute;ch c&oacute; thể đọc từ bất cứ trang n&agrave;o. N&oacute; giống như Hạnh Ph&uacute;c, khi bạn tin, th&igrave; bất kỳ l&uacute;c n&agrave;o, khi n&agrave;o, ở đ&acirc;u bạn cũng sẽ nhận được Hạnh Ph&uacute;c!&rdquo;.</p>', 'em-muon-co-mot-cuoc-tinh-gia-voi-anh.webp', 'post', 'Em muốn có một cuộc tình già với anh', '<h1>Em muốn c&oacute; một cuộc t&igrave;nh gi&agrave; với anh</h1>', 1, NULL, 1, '2023-04-15 02:01:51', '2023-04-15 02:01:51'),
(16, NULL, 'Giới thiệu', 'gioi-thieu', '<p>C&ocirc;ng ty Cổ phẩn C&ocirc;ng nghệ DKT bắt đầu với website Bookstore từ th&aacute;ng 12/2004. Từ khi th&agrave;nh lập đến nay, Bookstore lu&ocirc;n l&agrave; Nh&agrave; s&aacute;ch tr&ecirc;n mạng h&agrave;ng đầu tại Việt Nam v&agrave; được ghi nhận từ nhiều cơ quan, tổ chức trong v&agrave; ngo&agrave;i nước. Quan trọng hơn hết, Bookstore được h&agrave;ng triệu kh&aacute;ch h&agrave;ng thường xuy&ecirc;n mua sắm trực tuyến đặt sự tin tưởng v&agrave; t&iacute;n nhiệm của m&igrave;nh trong suốt hơn 10 năm qua để Bookstore lu&ocirc;n được phục vụ v&agrave; ph&aacute;t triển.</p>\r\n\r\n<p>Với sứ mệnh x&oacute;a bỏ mọi giới hạn về kh&ocirc;ng gian trong việc ph&acirc;n phối &quot;tri thức&quot; đến mọi miền đất nước bằng m&ocirc; h&igrave;nh mua sắm trực tuyến hiện đại, từ miền n&uacute;i đến hải đảo xa x&ocirc;i, từ th&agrave;nh phố đến v&ugrave;ng qu&ecirc; v&agrave; từ Việt Nam đến kiều b&agrave;o ta ở tr&ecirc;n to&agrave;n thế giới, mục ti&ecirc;u của ch&uacute;ng t&ocirc;i l&agrave; lu&ocirc;n mở rộng thị trường s&aacute;ch trực tuyến c&ugrave;ng với đ&agrave; ph&aacute;t triển của c&ocirc;ng nghệ th&ocirc;ng tin. Để thực hiện mục ti&ecirc;u đ&oacute;, ch&uacute;ng t&ocirc;i đ&atilde; c&oacute; những nhận thức đ&uacute;ng đắn về vai tr&ograve; của nguồn nh&acirc;n lực trong x&acirc;y dựng v&agrave; ph&aacute;t triển kinh doanh. Ch&uacute;ng t&ocirc;i đ&atilde; v&agrave; đang kh&ocirc;ng ngừng ho&agrave;n thiện hơn nữa m&ocirc;i trường l&agrave;m việc với c&aacute;c trang thiết bị hiện đại, cung c&aacute;ch l&agrave;m việc hiệu quả để ng&agrave;y c&agrave;ng ho&agrave;n thiện việc phục vụ kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p>Phong c&aacute;ch Bookstore: Phục vụ kh&aacute;ch h&agrave;ng tốt nhất, nhanh nhất, chu đ&aacute;o nhất v&agrave; tiết kiệm nhất. Bookstore l&agrave; Nh&agrave; s&aacute;ch, v&igrave; vậy Dịch vụ của Bookstore hướng đến v&agrave; hiểu những qu&yacute; kh&aacute;ch h&agrave;ng l&agrave; những người đọc s&aacute;ch. Hiện nay, Bookstore l&agrave; nh&agrave; s&aacute;ch tr&ecirc;n mạng c&oacute; số lượng đầu s&aacute;ch lớn nhất với hơn 60,000 tựa s&aacute;ch v&agrave; đều cập nhật mới mỗi ng&agrave;y.</p>\r\n\r\n<p>Dịch vụ Bookstore:</p>\r\n\r\n<p>- Đặt h&agrave;ng trực tuyến, giao h&agrave;ng tận nơi. Đội ngũ giao h&agrave;ng trong th&agrave;nh phố th&acirc;n thiện, tận t&acirc;m. Sẵn s&agrave;ng giao đến mọi miền đất nước th&ocirc;ng qua dịch vụ giao h&agrave;ng của Bưu Ch&iacute;nh Việt Nam. Chuyển s&aacute;ch đi nước ngo&agrave;i th&ocirc;ng qua dịch vụ chuyển ph&aacute;t nhanh DHL hoặc chuyển ph&aacute;t bằng m&aacute;y bay. Nhiều h&igrave;nh thức thanh to&aacute;n tiện lợi, trả trước bằng thẻ trực tuyến hoặc thu tiền tận nơi</p>\r\n\r\n<p>- S&aacute;ch trước khi giao được bao bọc cẩn thận trong th&ugrave;ng giấy hoặc t&uacute;i giấy Kraft Vintage, lịch sự v&agrave; bảo vệ m&ocirc;i trường. Dịch vụ bọc s&aacute;ch bằng bọc nhựa cao cấp, thực hiện tỉ mỉ v&agrave; cẩn thận cho từng cuốn. Dịch vụ g&oacute;i qu&agrave;, gi&uacute;p qu&yacute; kh&aacute;ch gởi tặng những m&oacute;n qu&agrave; tinh thần bổ &iacute;ch đến những người th&acirc;n y&ecirc;u</p>\r\n\r\n<p>- Dịch vụ chăm s&oacute;c kh&aacute;ch h&agrave;ng 7 ng&agrave;y trong tuần, kể cả thứ 7 v&agrave; chủ nhật th&ocirc;ng qua tổng đ&agrave;i, hệ thống hỗ trợ kh&aacute;ch h&agrave;ng qua email hoặc c&aacute;c h&igrave;nh thức chat trực tuyến Yahoo Messenger, Skype v&agrave; Facebook. Trong trường hợp qu&yacute; kh&aacute;ch c&oacute; bất kỳ nhu cầu hay c&acirc;u hỏi n&agrave;o về s&aacute;ch, đừng ngần ngại gởi email về cho ch&uacute;ng t&ocirc;i hoặc gọi đến tổng đ&agrave;i Bookstore.</p>', NULL, 'page', 'Giới thiệu', '<h1><a href=\"https://bookstore-theme.mysapo.net/gioi-thieu#\">Giới thiệu</a></h1>', 1, NULL, 1, '2023-04-15 02:03:41', '2023-04-15 02:03:41'),
(17, NULL, 'CHÍNH SÁCH MUA HÀNG', 'chinh-sach-mua-hang', '<p><strong>CH&Iacute;NH S&Aacute;CH CHUNG V&Agrave; ĐIỀU KIỆN MUA B&Aacute;N SẢN PHẨM</strong></p>\r\n\r\n<p>Ch&iacute;nh s&aacute;ch chung v&agrave; Điều kiện Mua b&aacute;n Sản phẩm (sau đ&acirc;y gọi l&agrave; &ldquo;Ch&iacute;nh s&aacute;ch chung&rdquo;) n&agrave;y được &aacute;p dụng đối với bất kỳ v&agrave; tất cả c&aacute;c hoạt động mua b&aacute;n Sản phẩm (như được định nghĩa dưới đ&acirc;y) giữa Qu&yacute; kh&aacute;ch (như được định nghĩa dưới đ&acirc;y) v&agrave; LG Việt Nam (như được định nghĩa dưới đ&acirc;y) th&ocirc;ng qua Gian h&agrave;ng điện tử được vận h&agrave;nh tr&ecirc;n website thương mại điện tử&nbsp;<a href=\"https://www.lg.com/vn%20\">https://www.lg.com/vn</a>&nbsp;(&ldquo;Gian h&agrave;ng&rdquo;).<br />\r\nCh&iacute;nh s&aacute;ch chung n&agrave;y được soạn thảo v&agrave; c&oacute; thể được sửa đổi, bổ sung v&agrave;/hoặc thay thế bởi LG Việt Nam t&ugrave;y từng thời điểm tr&ecirc;n cơ sở tu&acirc;n thủ c&aacute;c quy định hiện h&agrave;nh của ph&aacute;p luật Việt Nam.</p>\r\n\r\n<p><br />\r\n<strong>I. ĐỊNH NGHĨA</strong><br />\r\n1. &ldquo;LG Việt Nam&rdquo;, &ldquo;LG Online Brand Shop&rdquo; hay &ldquo;Ch&uacute;ng t&ocirc;i&rdquo; nghĩa l&agrave; C&ocirc;ng ty TNHH LG Electronics Việt Nam Hải Ph&ograve;ng &ndash; một c&ocirc;ng ty được th&agrave;nh lập v&agrave; hoạt động hợp ph&aacute;p theo Giấy chứng nhận đăng k&yacute; doanh nghiệp số 0201311397 do Sở Kế hoạch v&agrave; Đầu tư Tp. Hải Ph&ograve;ng cấp ng&agrave;y 06/09/2013 &ndash; l&agrave; đại diện ch&iacute;nh thức v&agrave; duy nhất của tập đo&agrave;n điện tử LG H&agrave;n Quốc tại Việt Nam.<br />\r\n2. &ldquo;Qu&yacute; kh&aacute;ch&rdquo; nghĩa l&agrave; bất kỳ c&aacute; nh&acirc;n, tổ chức n&agrave;o thực hiện c&aacute;c giao dịch mua b&aacute;n Sản phẩm với LG Việt Nam tr&ecirc;n Gian h&agrave;ng.<br />\r\n3. &ldquo;Gian h&agrave;ng&rdquo; nghĩa l&agrave; cửa h&agrave;ng trực tuyến/gian h&agrave;ng điện tử thuộc sở hữu v&agrave; được vận h&agrave;nh bởi LG Việt Nam th&ocirc;ng qua nền tảng internet tại địa chỉ&nbsp;<a href=\"https://www.lg.com/vn\">https://www.lg.com/vn (&ldquo;Website thương mai điện tử&rdquo;)</a><br />\r\n4. Sản phẩm l&agrave; bất kỳ hoặc to&agrave;n bộ sản phẩm mang thương hiệu LG được LG Việt Nam kinh doanh tr&ecirc;n Gian h&agrave;ng.<br />\r\n5. Ng&agrave;y l&agrave;m việc l&agrave; c&aacute;c ng&agrave;y từ thứ Hai đến thứ S&aacute;u h&agrave;ng tuần, kh&ocirc;ng bao gồm c&aacute;c ng&agrave;y nghỉ Lễ, Tết theo quy định của ph&aacute;p luật Lao động.<br />\r\n6. Sự kiện bất khả kh&aacute;ng: l&agrave; bất kỳ sự kiện, t&igrave;nh huống n&agrave;o nằm ngo&agrave;i tầm kiểm so&aacute;t hợp l&yacute; khiến cho một hoặc hai B&ecirc;n kh&ocirc;ng thể thực hiện nghĩa vụ của m&igrave;nh, bao gồm nhưng kh&ocirc;ng giới hạn bởi lệnh cấm hoặc tr&igrave; ho&atilde;n của Ch&iacute;nh phủ hoặc cơ quan Nh&agrave; nước, bạo động, chiến tranh, t&igrave;nh trạng khẩn cấp Quốc gia (c&oacute; tuy&ecirc;n bố hoặc kh&ocirc;ng c&oacute; tuy&ecirc;n bố), sự th&ugrave; địch, sự hỗn loạn, đ&igrave;nh c&ocirc;ng, h&agrave;nh động của người nằm trong diện nguy hiểm, sự tẩy chay, thừa nhận, c&aacute;c tranh chấp lao động kh&aacute;c v&agrave; b&atilde;i c&ocirc;ng, dịch bệnh, hỏa hoạn, lũ lụt, động đất, b&atilde;o, s&oacute;ng thần hoặc c&aacute;c thi&ecirc;n tai&hellip;.</p>\r\n\r\n<p><strong>II. CAM KẾT</strong><br />\r\nBằng việc tạo đơn h&agrave;ng v&agrave;/hoặc t&agrave;i khoản tr&ecirc;n Gian h&agrave;ng theo Ch&iacute;nh s&aacute;ch chung n&agrave;y, Qu&yacute; kh&aacute;ch cam kết v&agrave; đồng &yacute; rằng:<br />\r\n- Qu&yacute; kh&aacute;ch lu&ocirc;n tu&acirc;n thủ v&agrave; chịu sự r&agrave;ng buộc bởi Ch&iacute;nh s&aacute;ch chung n&agrave;y trong suốt qu&aacute; tr&igrave;nh mua b&aacute;n tr&ecirc;n Gian h&agrave;ng cũng như thực hiện c&aacute;c hoạt động, dịch vụ c&oacute; li&ecirc;n quan kh&aacute;c.<br />\r\n- Qu&yacute; kh&aacute;ch c&oacute; đầy đủ năng lực theo quy định ph&aacute;p luật để thực thi tất cả c&aacute;c nghĩa vụ ph&aacute;t sinh từ c&aacute;c giao dịch tr&ecirc;n Gian h&agrave;ng theo Ch&iacute;nh s&aacute;ch chung n&agrave;y bao gồm cả việc c&oacute; được tất cả sự cho ph&eacute;p nội bộ v&agrave; đ&aacute;p ứng c&aacute;c quy định ph&aacute;p luật hoặc của c&aacute;c cơ quan thẩm quyền kh&aacute;c (nếu c&oacute;).<br />\r\n- Tất cả những th&ocirc;ng tin Qu&yacute; kh&aacute;ch cung cấp cho LG Việt Nam th&ocirc;ng qua Gian h&agrave;ng l&agrave; đầy đủ v&agrave; ch&iacute;nh x&aacute;c.<br />\r\n- Tất cả Sản phẩm được mua tr&ecirc;n Gian h&agrave;ng chỉ nhằm mục đ&iacute;ch phục vụ nhu cầu ti&ecirc;u d&ugrave;ng của Qu&yacute; kh&aacute;ch. Việc chuyển giao Sản phẩm cho b&ecirc;n thứ 3 (nếu c&oacute;) cũng kh&ocirc;ng v&igrave; bất kỳ mục đ&iacute;ch kinh doanh thương mại n&agrave;o. Mọi h&agrave;nh vi mua đi b&aacute;n lại c&aacute;c Sản phẩm tr&ecirc;n Gian h&agrave;ng đều l&agrave; h&agrave;nh vi vi phạm Ch&iacute;nh s&aacute;ch chung n&agrave;y.<br />\r\n- Việc thanh to&aacute;n cho c&aacute;c đơn đặt h&agrave;ng tr&ecirc;n Gian h&agrave;ng sẽ được thực hiện th&ocirc;ng qua B&ecirc;n thứ 3 c&oacute; chức năng cung cấp dịch vụ trung gian thanh to&aacute;n theo đ&uacute;ng quy định ph&aacute;p luật hiện h&agrave;nh. Th&ocirc;ng tin về c&aacute;c đơn vị cung cấp dịch vụ n&agrave;y sẽ được thể hiện tr&ecirc;n Gian h&agrave;ng tại bước Thanh to&aacute;n v&agrave; c&oacute; thể được sửa đổi, bổ sung bởi LG OBS t&ugrave;y từng thời điểm.<br />\r\n<br />\r\n<strong>III. ĐĂNG K&Yacute; T&Agrave;I KHOẢN</strong><br />\r\n- Qu&yacute; kh&aacute;ch c&oacute; thể đăng k&yacute; t&agrave;i khoản bằng c&aacute;ch v&agrave;o mục &quot;Đăng nhập/Đăng k&yacute;&quot; ở đầu trang v&agrave; chọn &quot;Đăng k&yacute; ngay&quot; sau đ&oacute; l&agrave;m theo hướng dẫn.<br />\r\n- Sau khi đăng k&yacute; th&agrave;nh c&ocirc;ng, Qu&yacute; kh&aacute;ch sẽ trở th&agrave;nh Th&agrave;nh vi&ecirc;n LG v&agrave; được tận hưởng c&aacute;c ưu đ&atilde;i đặc biệt d&agrave;nh ri&ecirc;ng cho Th&agrave;nh vi&ecirc;n như khuyến mại, &aacute;p dụng phiếu mua h&agrave;ng&hellip;<br />\r\n- Qu&yacute; kh&aacute;ch c&oacute; thể quản l&yacute; v&agrave; cập nhật th&ocirc;ng tin t&agrave;i khoản của m&igrave;nh tại mục &quot;<strong>LG của t&ocirc;</strong>i&quot; sau khi đăng nhập.<br />\r\n<strong>Lưu &yacute;:</strong><br />\r\n- Việc bảo mật th&ocirc;ng tin c&aacute; nh&acirc;n như t&agrave;i khoản đăng nhập v&agrave; mật khẩu lu&ocirc;n được LG Việt Nam khuyến nghị nhằm hạn chế c&aacute;c vấn đề r&ograve; rỉ th&ocirc;ng tin c&aacute; nh&acirc;n cũng như c&aacute;c bất lợi c&oacute; thể ảnh hưởng đến quyền lợi Th&agrave;nh vi&ecirc;n của Qu&yacute; kh&aacute;ch.<br />\r\n- Với mục đ&iacute;ch tăng cường t&iacute;nh bảo mật [cho c&aacute;c giao dịch tr&ecirc;n Gian h&agrave;ng], b&ecirc;n cạnh việc x&aacute;c thực t&agrave;i khoản bằng t&ecirc;n đăng nhập v&agrave; mật khẩu, LG Việt Nam &aacute;p dụng biện ph&aacute;p x&aacute;c thực 02 tầng th&ocirc;ng qua m&atilde; x&aacute;c thực (OTP &ndash; One Time Password). Theo đ&oacute;, Qu&yacute; kh&aacute;ch đồng &yacute; nhận m&atilde; x&aacute;c thực qua tin nhắn được LG Việt Nam gửi đến số điện thoại m&agrave; Qu&yacute; kh&aacute;ch đ&atilde; đăng k&yacute; mỗi khi Qu&yacute; kh&aacute;ch đăng nhập t&agrave;i khoản.<br />\r\n- LG Việt Nam bảo lưu quyền phong tỏa t&agrave;i khoản v&agrave;/hoặc hủy đơn h&agrave;ng của Qu&yacute; kh&aacute;ch nếu Qu&yacute; kh&aacute;ch kh&ocirc;ng đảm bảo được c&aacute;c cam kết quy định tại Ch&iacute;nh s&aacute;ch chung n&agrave;y.</p>\r\n\r\n<p><strong>IV. SẢN PHẨM</strong><br />\r\n- C&aacute;c Sản phẩm được kinh doanh tr&ecirc;n Gian h&agrave;ng đều l&agrave; sản phẩm ch&iacute;nh h&atilde;ng LG được tập đo&agrave;n điện tử LG H&agrave;n Quốc sản xuất tại c&aacute;c nh&agrave; m&aacute;y trực thuộc ở nhiều quốc gia kh&aacute;c nhau tr&ecirc;n to&agrave;n thế giới v&agrave; được ph&acirc;n phối tại thị trường Việt Nam th&ocirc;ng qua C&ocirc;ng ty TNHH LG Electronics Việt Nam Hải Ph&ograve;ng.<br />\r\n- Sản phẩm lu&ocirc;n đảm bảo c&aacute;c t&iacute;nh năng v&agrave; th&ocirc;ng số kỹ thuật như đ&atilde; c&ocirc;ng bố, ph&ugrave; hợp với c&aacute;c ti&ecirc;u chuẩn, quy chuẩn (nếu c&oacute;) của ph&aacute;p luật Việt Nam.<br />\r\n- LG Việt Nam lu&ocirc;n cố gắng để c&aacute;c th&ocirc;ng tin v&agrave; h&igrave;nh ảnh về Sản phẩm được hiển thị ch&iacute;nh x&aacute;c nhất. Tuy nhi&ecirc;n, c&aacute;c sơ suất về th&ocirc;ng tin cũng như sai kh&aacute;c về h&igrave;nh ảnh, m&agrave;u sắc vẫn c&oacute; thể xảy ra do thiết bị hiển thị của Qu&yacute; kh&aacute;ch hoặc c&aacute;c yếu tố kh&aacute;ch quan.</p>\r\n\r\n<p><strong>V. GI&Aacute; SẢN PHẨM</strong><br />\r\n- Gi&aacute; của c&aacute;c Sản phẩm sẽ được ni&ecirc;m yết tr&ecirc;n Gian h&agrave;ng v&agrave; chỉ c&oacute; hiệu lực trong thời gian hiển thị. Gi&aacute; Sản phẩm đ&atilde; bao gồm thuế GTGT. Trừ khi c&oacute; quy định kh&aacute;c đi trong Th&ocirc;ng b&aacute;o giao Sản phẩm, gi&aacute; ni&ecirc;m yết tr&ecirc;n Gian h&agrave;ng l&agrave; gi&aacute; đ&atilde; bao gồm ph&iacute; giao h&agrave;ng.<br />\r\n- Gi&aacute; của Sản phẩm c&oacute; thể được cập nhật theo từng thời điểm, tuy nhi&ecirc;n những thay đổi n&agrave;y sẽ kh&ocirc;ng được &aacute;p dụng trong trường hợp Ch&uacute;ng t&ocirc;i đ&atilde; gửi đến Qu&yacute; kh&aacute;ch &ldquo;Th&ocirc;ng b&aacute;o x&aacute;c nhận đặt h&agrave;ng&rdquo;.<br />\r\n- LG Việt Nam c&oacute; thể ph&acirc;n phối c&ugrave;ng một sản phẩm với nhiều mức gi&aacute; kh&aacute;c nhau v&agrave;o c&ugrave;ng một thời điểm t&ugrave;y theo đối tượng kh&aacute;ch h&agrave;ng v&agrave; chương tr&igrave;nh ưu đ&atilde;i đang triển khai. Qu&yacute; kh&aacute;ch được quyền tự do lựa chọn mức gi&aacute; ph&ugrave; hợp nhất đang c&oacute; hiệu lực &aacute;p dụng với m&igrave;nh.</p>\r\n\r\n<p><strong>VI. MUA H&Agrave;NG</strong><br />\r\n<strong>1. Đơn đặt h&agrave;ng</strong><br />\r\n- Qu&yacute; kh&aacute;ch lựa chọn Sản phẩm ph&ugrave; hợp với nhu cầu v&agrave; th&ecirc;m v&agrave;o giỏ h&agrave;ng<br />\r\n- Cung cấp đầy đủ v&agrave; ch&iacute;nh x&aacute;c th&ocirc;ng tin giao h&agrave;ng.<br />\r\n- Việc thanh to&aacute;n sẽ được thực hiện trực tuyến th&ocirc;ng qua hệ thống cổng thanh to&aacute;n của đơn vị cung cấp dịch vụ trung gian thanh to&aacute;n được t&iacute;ch hợp ngay tr&ecirc;n Gian h&agrave;ng.<br />\r\nC&aacute;c h&igrave;nh thức thanh to&aacute;n được chấp nhận bao gồm: ATM; JCB; Master card; Visa; QR code; Trả g&oacute;p.<br />\r\n- Qu&yacute; kh&aacute;ch vui l&ograve;ng kiểm tra kỹ mọi th&ocirc;ng tin li&ecirc;n quan đến Đơn đặt h&agrave;ng trước khi Thanh to&aacute;n. Sau khi thanh to&aacute;n th&agrave;nh c&ocirc;ng, Đơn đặt h&agrave;ng sẽ được tự động gửi v&agrave;o hệ thống quản l&yacute; đơn h&agrave;ng của LG Việt Nam.<br />\r\n- Đơn đặt h&agrave;ng được Qu&yacute; kh&aacute;ch tạo lập v&agrave; gửi cho LG Việt Nam theo c&aacute;ch thức tr&ecirc;n được xem l&agrave; một đề nghị giao kết hợp đồng mua b&aacute;n Sản phẩm của Qu&yacute; kh&aacute;ch theo Ch&iacute;nh s&aacute;ch chung n&agrave;y.<br />\r\n2. X&aacute;c nhận đơn h&agrave;ng<br />\r\n- Sau khi đặt h&agrave;ng th&agrave;nh c&ocirc;ng, Qu&yacute; kh&aacute;ch sẽ nhận được th&ocirc;ng b&aacute;o x&aacute;c nhận đơn h&agrave;ng từ LG Việt Nam đ&atilde; k&egrave;m theo số tham chiếu Đơn đặt h&agrave;ng v&agrave; chi tiết về Sản phẩm m&agrave; Qu&yacute; kh&aacute;ch đ&atilde; đặt.<br />\r\n- Trường hợp một đơn h&agrave;ng c&oacute; nhiều sản phẩm sau khi đ&atilde; ho&agrave;n tất việc thanh to&aacute;n, nếu Qu&yacute; kh&aacute;ch muốn hủy một sản phẩm trong đơn h&agrave;ng hoặc muốn đổi một sản phẩm kh&aacute;c, vui l&ograve;ng hủy đơn h&agrave;ng hiện tại v&agrave; đặt một đơn h&agrave;ng mới.<br />\r\n- Sau khi LG Việt Nam l&ecirc;n m&atilde; vận đơn, Qu&yacute; kh&aacute;ch sẽ kh&ocirc;ng thể hủy đơn đặt h&agrave;ng.<br />\r\n- Th&ocirc;ng b&aacute;o x&aacute;c nhận đơn h&agrave;ng được gửi cho Qu&yacute; kh&aacute;ch được xem l&agrave; lời chấp nhận giao kết Hợp đồng mua b&aacute;n Sản phẩm với Qu&yacute; kh&aacute;ch từ LG Việt Nam. Khi đ&oacute;, Hợp đồng mua b&aacute;n giữa Qu&yacute; kh&aacute;ch v&agrave; LG OBS ch&iacute;nh thức được x&aacute;c lập theo c&aacute;c điều khoản v&agrave; điều kiện quy định tại Ch&iacute;nh s&aacute;ch chung n&agrave;y.<br />\r\n3. Kiểm tra t&igrave;nh trạng đơn h&agrave;ng<br />\r\nQu&yacute; kh&aacute;ch c&oacute; thể kiểm tra đơn đặt h&agrave;ng bằng c&aacute;ch:<br />\r\n<strong>- Bước 1:</strong>&nbsp;Đăng nhập<br />\r\n<strong>- Bước 2:</strong>&nbsp;Chọn &quot;Đơn h&agrave;ng của t&ocirc;i&quot;<br />\r\n<strong>- Bước 3:</strong>&nbsp;Chọn &quot;Chi tiết&quot; để xem t&igrave;nh trạng của đơn h&agrave;ng mong muốn<br />\r\n<strong>4. Hủy đơn h&agrave;ng</strong><br />\r\n- Qu&yacute; kh&aacute;ch chỉ c&oacute; thể hủy đơn h&agrave;ng trước khi vận đơn được tạo (đơn h&agrave;ng c&ograve;n hiển thị chức năng &ldquo;Hủy bỏ&rdquo;).<br />\r\n- C&aacute;ch thức hủy: Truy cập &quot;Đơn h&agrave;ng của t&ocirc;i&quot;, chọn đơn h&agrave;ng muốn hủy v&agrave; nhấn n&uacute;t &ldquo;Hủy bỏ&rdquo;<br />\r\n- Qu&yacute; kh&aacute;ch sẽ nhận được email th&ocirc;ng b&aacute;o hủy đơn h&agrave;ng cho c&aacute;c đơn hảng được hủy bỏ th&agrave;nh c&ocirc;ng.<br />\r\n<strong>5. Ho&agrave;n tiền</strong><br />\r\n- Qu&yacute; kh&aacute;ch sẽ được ho&agrave;n trả to&agrave;n bộ khoản thanh to&aacute;n cho đơn h&agrave;ng được hủy bỏ th&agrave;nh c&ocirc;ng bởi Qu&yacute; kh&aacute;ch hoặc LG OBS<br />\r\n- Thời gian ho&agrave;n tiền (t&iacute;nh từ thời điểm Qu&yacute; kh&aacute;ch nhận được email x&aacute;c nhận ho&agrave;n tiền):<br />\r\n+ Đối với thẻ thanh to&aacute;n thẻ ATM, phương thức QRcode: trong v&ograve;ng 15 ng&agrave;y l&agrave;m việc.<br />\r\n+ Đối với thẻ quốc tế: trong kỳ sao k&ecirc; gần nhất nhưng tối đa l&agrave; 45 ng&agrave;y (t&ugrave;y loại thẻ v&agrave; ng&acirc;n h&agrave;ng ph&aacute;t h&agrave;nh)<br />\r\n- Việc hủy đơn h&agrave;ng c&oacute; sử dụng dịch vụ trả g&oacute;p c&oacute; thể ph&aacute;t sinh ph&iacute; chuyển đổi trả g&oacute;p cho Qu&yacute; kh&aacute;ch, tương đương 3% gi&aacute; trị đơn h&agrave;ng trả g&oacute;p, t&ugrave;y theo quy định của ng&acirc;n h&agrave;ng cho vay.<br />\r\n6. Từ chối hoặc bảo lưu<br />\r\nCh&uacute;ng t&ocirc;i c&oacute; c&oacute; quyền từ chối hoặc bảo lưu Đơn đặt h&agrave;ng của Qu&yacute; kh&aacute;ch khi c&oacute; căn cứ r&otilde; r&agrave;ng x&aacute;c định rằng Qu&yacute; kh&aacute;ch kh&ocirc;ng đảm bảo được c&aacute;c cam kết quy định tại Ch&iacute;nh s&aacute;ch chung n&agrave;y.</p>\r\n\r\n<p><strong>VII. GIAO NHẬN H&Agrave;NG</strong><br />\r\n<strong>1. Thời gian giao h&agrave;ng</strong><br />\r\n- Sản phẩm được đặt h&agrave;ng th&agrave;nh c&ocirc;ng sẽ được LG Việt Nam trực tiếp hoặc th&ocirc;ng qua b&ecirc;n thứ giao miễn ph&iacute; đến Qu&yacute; kh&aacute;ch theo th&ocirc;ng tin thể hiện trong đơn đặt h&agrave;ng trong v&ograve;ng 07 ng&agrave;y kể từ ng&agrave;y x&aacute;c nhận, t&ugrave;y v&agrave;o khu vực giao h&agrave;ng. Trước khi giao Sản phẩm, ch&uacute;ng t&ocirc;i sẽ th&ocirc;ng b&aacute;o cho Qu&yacute; kh&aacute;ch.<br />\r\n- Qu&yacute; kh&aacute;ch cần kiểm tra t&igrave;nh trạng ngoại quan của sản phẩm (bao gồm cả bao b&igrave;) trước khi x&aacute;c nhận nhận h&agrave;ng để đảm bảo h&agrave;ng h&oacute;a được giao đ&uacute;ng chủng loại, số lượng, m&agrave;u sắc theo đơn đặt h&agrave;ng v&agrave; kh&ocirc;ng bị bể vỡ/ trầy xước/ m&oacute;p, m&eacute;o. Nếu ph&aacute;t hiện bất k&igrave; dấu hiệu bất thường tr&ecirc;n th&ugrave;ng v&agrave; tr&ecirc;n sản phẩm, Qu&yacute; kh&aacute;ch vui l&ograve;ng từ chối nhận h&agrave;ng v&agrave; ghi ch&uacute; v&agrave;o chứng từ giao nhận h&agrave;ng &quot;Từ chối nhận h&agrave;ng do h&agrave;ng bị hỏng ngoại quan&quot;.<br />\r\n- Với c&aacute;c sản phẩm cồng kềnh, qu&aacute; khổ, nhằm đảm bảo an to&agrave;n trong qu&aacute; tr&igrave;nh vận chuyển, LG Việt Nam bảo lưu quyền từ chối hỗ trợ bốc/dỡ sản phẩm l&ecirc;n/xuống tầng (lầu) nếu nh&agrave; ở/c&ocirc;ng tr&igrave;nh x&acirc;y dựng c&oacute; kh&ocirc;ng gian, kết cấu kh&ocirc;ng ph&ugrave; hợp hoặc kh&ocirc;ng c&oacute; c&aacute;c trang thiết bị cần thiết hỗ trợ bốc dỡ Sản phẩm (thang n&acirc;ng, thang m&aacute;y&hellip;)<br />\r\n- Đơn h&agrave;ng sẽ được hủy nếu việc giao h&agrave;ng cho Qu&yacute; kh&aacute;ch kh&ocirc;ng thực hiện được sau 3 lần tiến h&agrave;nh. Trong trường hợp n&agrave;y, Qu&yacute; kh&aacute;ch sẽ được ho&agrave;n tiền theo quy định tại Ch&iacute;nh s&aacute;ch chung. Qu&yacute; kh&aacute;ch c&oacute; thể đặt đơn h&agrave;ng mới nếu vẫn c&oacute; nhu cầu mua Sản phầm n&agrave;y.</p>\r\n\r\n<p><br />\r\n<strong>2. Thay đổi thời gian giao h&agrave;ng</strong><br />\r\n- Trong một số trường hợp, thời gian giao h&agrave;ng c&oacute; thể bị thay đổi v&igrave; c&aacute;c trở ngại kh&aacute;ch quan hoặc sự kiện bất khả kh&aacute;ng. LG Việt Nam rất mong nhận được sự th&ocirc;ng cảm của Qu&yacute; kh&aacute;ch cho những bất tiện n&agrave;y.<br />\r\n- Việc thay đổi n&agrave;y sẽ được th&ocirc;ng b&aacute;o cho Qu&yacute; kh&aacute;ch th&ocirc;ng qua email hoặc số điện thoại đăng k&yacute; trong đơn đặt h&agrave;ng hoặc t&agrave;i khoản. Trường hợp kh&ocirc;ng đồng &yacute; với thời gian giao h&agrave;ng mới, Qu&yacute; kh&aacute;ch c&oacute; thể hủy đơn h&agrave;ng v&agrave; được ho&agrave;n tiền theo quy định tại Ch&iacute;nh s&aacute;ch n&agrave;y &hellip;</p>\r\n\r\n<p><strong>3. Dịch vụ lắp đặt</strong><br />\r\n- Dịch vụ lắp đặt sẽ được &aacute;p dụng miễn ph&iacute; cho: Tất cả sản phẩm m&aacute;y giặt, m&aacute;y sấy; Sản phẩm Tivi từ 55inch trở l&ecirc;n; c&aacute;c d&ograve;ng tủ lạnh c&oacute; dung t&iacute;ch lớn hơn 600L<br />\r\n- Thời gian lắp đặt: Trong v&ograve;ng 03 ng&agrave;y kể từ ng&agrave;y Qu&yacute; kh&aacute;ch nhận được h&agrave;ng, Kỹ thuật vi&ecirc;n sẽ li&ecirc;n hệ với Qu&yacute; kh&aacute;ch để thực hiện lắp đặt.</p>\r\n\r\n<p><strong>VIII. H&Oacute;A ĐƠN</strong><br />\r\n- H&oacute;a đơn t&agrave;i ch&iacute;nh hợp ph&aacute;p sẽ được xuất v&agrave; gửi cho Qu&yacute; kh&aacute;ch th&ocirc;ng qua email đăng k&yacute; trong t&agrave;i khoản theo c&aacute;c th&ocirc;ng tin Qu&yacute; kh&aacute;ch đ&atilde; cung cấp.<br />\r\n- LG bảo lưu quyền từ chối điều chỉnh v&agrave;/hoặc xuất lại h&oacute;a đơn trong trường hợp Qu&yacute; kh&aacute;ch cung cấp th&ocirc;ng tin kh&ocirc;ng ch&iacute;nh x&aacute;c.</p>\r\n\r\n<p><strong>IX. QUYỀN SỞ HỮU V&Agrave; RỦI RO</strong><br />\r\n- Quyền sở hữu v&agrave; mọi rủi ro đối với Sản phẩm sẽ được chuyển giao cho Qu&yacute; kh&aacute;ch kể từ khi Sản phẩm được giao th&agrave;nh c&ocirc;ng theo quy định của Ch&iacute;nh s&aacute;ch chung.<br />\r\n- Kể từ ng&agrave;y chuyển giao rủi ro theo điều khoản n&agrave;y, LG Việt Nam sẽ kh&ocirc;ng chịu bất cứ tr&aacute;ch nhiệm n&agrave;o về tổn thất hay hư hại của Sản phẩm đ&oacute; ngoại trừ những hư hỏng do chất lượng linh kiện hay lỗi kỹ thuật trong quy tr&igrave;nh sản xuất theo ch&iacute;nh s&aacute;ch của ch&uacute;ng t&ocirc;i.</p>\r\n\r\n<p><strong>X. BẢO H&Agrave;NH</strong><br />\r\nChi tiết ch&iacute;nh s&aacute;ch bảo h&agrave;nh sản phẩm được quy định v&agrave; cập nhật tại đường dẫn dưới đ&acirc;y:<br />\r\n<a href=\"https://www.lg.com/vn/tro-giup/bao-hanh\">https://www.lg.com/vn/tro-giup/bao-hanh</a></p>\r\n\r\n<p><strong>XI. CH&Iacute;NH S&Aacute;CH ĐỔI TRẢ</strong><br />\r\nCh&iacute;nh s&aacute;ch đổi trả n&agrave;y chỉ &aacute;p dụng cho c&aacute;c đơn h&agrave;ng được mua tại website https://www.lg.com/vn<br />\r\n- Ch&iacute;nh s&aacute;ch trả hoặc đổi sản phẩm kh&aacute;c c&ugrave;ng loại (c&ugrave;ng m&atilde; sản phẩm) trong v&ograve;ng 15 ng&agrave;y kể từ ng&agrave;y nhận h&agrave;ng (căn cứ theo Bi&ecirc;n bản giao nhận h&agrave;ng) sẽ được &aacute;p dụng miễn ph&iacute; cho tất cả Sản phẩm được mua tr&ecirc;n Gian h&agrave;ng c&oacute; khiếm khuyết, hư hỏng do lỗi của nh&agrave; sản xuất được x&aacute;c nhận bởi kỹ thuật vi&ecirc;n hoặc đại diện ủy quyền của LG Việt Nam).<br />\r\n- Trường hợp sản phẩm thay thế kh&ocirc;ng c&oacute; sẵn tại thời điểm Qu&yacute; kh&aacute;ch thực hiện đổi h&agrave;ng h&oacute;a, LG Việt Nam sẽ thu hồi Sản phẩm lỗi v&agrave; thực hiện ho&agrave;n tiền cho Qu&yacute; kh&aacute;ch theo quy định tại Ch&iacute;nh s&aacute;ch n&agrave;y.<br />\r\n- Khi ph&aacute;t sinh nhu cầu đổi trả Sản phẩm, Qu&yacute; kh&aacute;ch vui l&ograve;ng li&ecirc;n hệ tổng đ&agrave;i 18001590 để được hổ trợ.. Kỹ thuật vi&ecirc;n hoặc đại diện ủy quyền của LG Việt Nam sẽ chủ động li&ecirc;n hệ để kiểm tra Sản phẩm v&agrave; x&aacute;c nhận nguy&ecirc;n nh&acirc;n lỗi nếu Sản phẩm thỏa điều kiện của ch&iacute;nh s&aacute;ch.<br />\r\n<strong>Lưu &yacute;:</strong><br />\r\n- Kh&ocirc;ng &aacute;p dụng ch&iacute;nh s&aacute;ch đổi trả cho c&aacute;c Sản phẩm kh&ocirc;ng thể ho&agrave;n trả bộ phụ kiện gốc (th&ugrave;ng, hộp, s&aacute;ch hướng dẫn, d&acirc;y c&aacute;p, điều khiển từ xa&hellip;) v&agrave;/hoặc qu&agrave; tặng k&egrave;m theo (nếu c&oacute;) như tại thời điểm mua h&agrave;ng.<br />\r\n- Đối với c&aacute;c Sản phẩm được mua trong chương tr&igrave;nh khuyến mại giảm gi&aacute; tr&ecirc;n Gian h&agrave;ng:Việc đổi trả sẽ được &aacute;p dụng theo đ&uacute;ng ch&iacute;nh s&aacute;ch gi&aacute; của Sản phẩm tại thời điểm Qu&yacute; kh&aacute;ch mua h&agrave;ng<br />\r\n- Đối với c&aacute;c Sản phẩm được mua theo combo (g&oacute;i sản phẩm kết hợp): Việc đổi trả sẽ được &aacute;p dụng cho tất cả sản phẩm trong combo đ&atilde; mua nếu c&aacute;c sản phẩm trong combo đều thỏa điều kiện của ch&iacute;nh s&aacute;ch đổi trả. Nếu Qu&yacute; Kh&aacute;ch muốn đổi trả đơn h&agrave;ng được mua với gi&aacute; đ&atilde; giảm trong khoảng thời gian thực hiện chương tr&igrave;nh khuyến m&atilde;i tại trang lg.com/vn, tất cả sản phẩm trong đơn h&agrave;ng cần được đổi trả đồng thời để c&oacute; thể nhận ho&agrave;n lại số tiền đ&atilde; thanh to&aacute;n.</p>\r\n\r\n<p><strong>Ch&iacute;nh s&aacute;ch đổi trả sẽ kh&ocirc;ng được &aacute;p dụng trong c&aacute;c trường hợp sau:</strong><br />\r\n- Lỗi phần mềm đối với c&aacute;c sản phẩm laptop.<br />\r\n- Sử dụng, lắp đặt, bảo tr&igrave; kh&ocirc;ng đ&uacute;ng hướng dẫn k&egrave;m theo sản phẩm..<br />\r\n- Sản phẩm được đặt nơi bụi bẩn, ẩm ướt, bị chất lỏng hoặc nước v&agrave;o, bị thấm nước.<br />\r\n- Hư hỏng g&acirc;y ra bởi c&aacute;c nguy&ecirc;n nh&acirc;n như thi&ecirc;n tai (lũ lụt/s&eacute;t đ&aacute;nh&hellip;), hỏa hoạn, gỉ s&eacute;t, c&oacute; vệt mốc, bị ăn m&ograve;n, oxy h&oacute;a bởi h&oacute;a chất, vận chuyển, c&ocirc;n tr&ugrave;ng, động vật x&acirc;m nhập v&agrave;o&hellip;<br />\r\n- Sản phẩm, nh&atilde;n sản phẩm, nh&atilde;n của linh kiện cấu th&agrave;nh sản phẩm, kiểu sản phẩm, số m&aacute;y kh&ocirc;ng c&ograve;n nguy&ecirc;n dạng.<br />\r\n- Sản phẩm đ&atilde; bị can thiệp, sửa chữa bởi c&aacute; nh&acirc;n hoặc tổ chức kh&ocirc;ng được ủy quyền bởi LG Việt Nam.<br />\r\n- Sản phẩm kh&ocirc;ng đảm bảo 100% h&igrave;nh dạng ban đầu.<br />\r\n- C&aacute;c trường hợp khiếm khuyết, hư hỏng kh&aacute;c xảy ra đối với Sản phẩm kh&ocirc;ng do lỗi của nh&agrave; sản xuất.</p>\r\n\r\n<p><strong>XI. SỰ KIỆN BẤT KHẢ KH&Aacute;NG</strong><br />\r\n- Ch&uacute;ng t&ocirc;i kh&ocirc;ng chịu tr&aacute;ch nhiệm với bất kỳ vi phạm hay chậm trễ trong việc thực thi c&aacute;c nghĩa vụ của ch&uacute;ng t&ocirc;i theo một Hợp đồng mua b&aacute;n do một Sự kiện bất khả kh&aacute;ng.<br />\r\n- Nếu Sự kiện bất khả kh&aacute;ng xảy ra, ảnh hướng tới việc thực hiện c&aacute;c nghĩa vụ của ch&uacute;ng t&ocirc;i theo Hợp đồng mua b&aacute;n th&igrave;:<br />\r\n(a) Ch&uacute;ng t&ocirc;i sẽ th&ocirc;ng b&aacute;o cho Qu&yacute; kh&aacute;ch nhanh nhất c&oacute; thể;<br />\r\n(b) C&aacute;c nghĩa vụ của ch&uacute;ng t&ocirc;i theo Hợp đồng mua b&aacute;n sẽ được tạm ngưng v&agrave; thời gian thực hiện nghĩa vụ của ch&uacute;ng t&ocirc;i sẽ được gia hạn dựa tr&ecirc;n khoảng thời gian diễn ra Sự kiện bất khả kh&aacute;ng.</p>\r\n\r\n<p><strong>XII. PH&Aacute;T T&Aacute;N VI R&Uacute;T, X&Acirc;M NHẬP TR&Aacute;I PH&Eacute;P V&Agrave; C&Aacute;C H&Igrave;NH THỨC X&Acirc;M PHẠM KH&Aacute;C</strong><br />\r\n- Qu&yacute; kh&aacute;ch kh&ocirc;ng được lợi dụng Gian h&agrave;ng để chủ động tạo ra hoặc ph&aacute;t t&aacute;n c&aacute;c vi r&uacute;t, Trojan, s&acirc;u, bom logic hoặc c&aacute;c t&agrave;i liệu độc hại kh&aacute;c.<br />\r\n- Ch&uacute;ng t&ocirc;i sẽ kh&ocirc;ng chịu tr&aacute;ch nhiệm cho bất kỳ tổn thất hoặc thiệt hại n&agrave;o g&acirc;y ra bởi một cuộc tấn c&ocirc;ng từ chối dịch vụ ph&acirc;n t&aacute;n, vi r&uacute;t hay c&aacute;c t&agrave;i liệu độc hại kh&aacute;c c&oacute; thể l&acirc;y nhiễm cho thiết bị điện tử của Qu&yacute; kh&aacute;ch, c&aacute;c chương tr&igrave;nh m&aacute;y t&iacute;nh, dữ liệu hay t&agrave;i liệu độc quyền kh&aacute;c do việc Qu&yacute; kh&aacute;ch sử dụng Gian h&agrave;ng hoặc tải về bất kỳ t&agrave;i liệu n&agrave;o được đăng tr&ecirc;n Gian h&agrave;ng hay bất kỳ trang web n&agrave;o li&ecirc;n kết với Gian h&agrave;ng.</p>\r\n\r\n<p><strong>XIII. PHIẾU MUA H&Agrave;NG ĐIỆN TỬ (E-VOUCHER)</strong><br />\r\n- Qu&yacute; kh&aacute;ch c&oacute; thể sử dụng phiếu mua h&agrave;ng điện tử do LG Việt Nam ph&aacute;t h&agrave;nh để thanh to&aacute;n cho c&aacute;c giao dịch được thực hiện tr&ecirc;n Gian h&agrave;ng.<br />\r\n- Mỗi đơn đặt h&agrave;ng c&oacute; thể &aacute;p dụng chỉ một hoặc c&ugrave;ng l&uacute;c nhiều phiếu mua h&agrave;ng, t&ugrave;y v&agrave;o sản phẩm v&agrave; chương tr&igrave;nh đang &aacute;p dụng. Tuy nhi&ecirc;n phiếu mua h&agrave;ng c&oacute; thể kh&ocirc;ng c&oacute; hiệu lực với c&aacute;c đơn h&agrave;ng c&oacute; chứa c&aacute;c Sản phẩm kh&ocirc;ng &aacute;p dụng h&igrave;nh thức thanh to&aacute;n bằng phiếu mua h&agrave;ng.<br />\r\n- Trường hợp gi&aacute; trị phiếu mua h&agrave;ng kh&ocirc;ng đủ để thanh to&aacute;n cho to&agrave;n bộ gi&aacute; trị đơn đặt h&agrave;ng th&igrave; Qu&yacute; kh&aacute;ch cần thanh to&aacute;n phần c&ograve;n lại bằng c&aacute;c h&igrave;nh thức thanh to&aacute;n được chấp nhận kh&aacute;c.<br />\r\n- Việc chuyển nhượng phiếu mua h&agrave;ng hoặc sử dụng phiếu mua h&agrave;ng bởi b&ecirc;n thứ 3 c&oacute; thể được chấp nhận đối với c&aacute;c phiếu mua h&agrave;ng kh&ocirc;ng ghi r&otilde; th&ocirc;ng tin chủ sở hữu.</p>\r\n\r\n<p><strong>XIV. TR&Aacute;CH NHIỆM PH&Aacute;P L&Yacute;</strong><br />\r\n- Tuỳ thuộc v&agrave;o nghĩa vụ được quy định trong Ch&iacute;nh s&aacute;ch chung kh&ocirc;ng thể loại trừ, LG Việt Nam sẽ kh&ocirc;ng chịu tr&aacute;ch nhiệm cho bất kỳ tổn thất kinh doanh n&agrave;o (bao gồm cả tổn thất về lợi nhuận, doanh thu, tiết kiệm dự kiến, dữ liệu, uy t&iacute;n hoặc chi ti&ecirc;u l&atilde;ng ph&iacute;) hay bất kỳ thiệt hại gi&aacute;n tiếp hoặc do hậu quả kh&aacute;c m&agrave; cả Qu&yacute; kh&aacute;ch v&agrave; LG Việt Nam kh&ocirc;ng thể dự đo&aacute;n trước một c&aacute;ch hợp l&yacute; khi Qu&yacute; kh&aacute;ch bắt đầu sử dụng Gian h&agrave;ng.<br />\r\n- C&aacute;c quy định trong Ch&iacute;nh s&aacute;ch chung n&agrave;y sẽ kh&ocirc;ng loại trừ hoặc l&agrave;m giảm tr&aacute;ch nhiệm của LG Việt Nam trong những trường hợp sau:<br />\r\n(a) Tử vong hoặc thương t&iacute;ch c&aacute; nh&acirc;n do sơ suất của Ch&uacute;ng t&ocirc;i;<br />\r\n(b) Gian lận hay khai b&aacute;o gian lận;<br />\r\n(c) Bất kỳ h&agrave;nh vi vi phạm ph&aacute;o luật về bảo vệ quyền lợi người ti&ecirc;u d&ugrave;ng;<br />\r\n(d) Sản phẩm c&oacute; khuyết tật (sản phẩm c&oacute; khuyết tật theo định nghĩa trong Luật Bảo vệ quyền lợi người ti&ecirc;u d&ugrave;ng) trừ khi Ch&uacute;ng t&ocirc;i chứng minh được khuyết tật của Sản phẩm kh&ocirc;ng thể ph&aacute;t hiện được với tr&igrave;nh độ khoa học, kỹ thuật tại thời điểm ch&uacute;ng t&ocirc;i cung cấp Sản phẩm cho Qu&yacute; kh&aacute;ch;<br />\r\n(f) Bất kỳ h&agrave;nh vi cố &yacute; vi phạm những quy định n&agrave;o trong Ch&iacute;nh s&aacute;ch chung n&agrave;y cho ph&eacute;p Qu&yacute; kh&aacute;ch chấm dứt việc mua b&aacute;n; hoặc<br />\r\n(g) Bất kỳ vấn đề n&agrave;o kh&aacute;c m&agrave; khi Ch&uacute;ng t&ocirc;i loại trừ, hoặc cố gắng loại trừ tr&aacute;ch nhiệm của Ch&uacute;ng t&ocirc;i đối với vấn đề đ&oacute; sẽ bị coi l&agrave; bất hợp ph&aacute;p.<br />\r\n- Mọi tranh chấp ph&aacute;t sinh từ hoặc li&ecirc;n quan đến c&aacute;c giao dịch được thực hiện tr&ecirc;n Gian h&agrave;ng m&agrave; LG Việt Nam v&agrave; Qu&yacute; kh&aacute;ch kh&ocirc;ng thể thương lượng, thống nhất th&igrave; sẽ được giải quyết theo quy định của ph&aacute;p luật Việt Nam.</p>\r\n\r\n<div class=\"ddict_btn\" style=\"left:381.363px; top:31px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>', NULL, 'page', 'CHÍNH SÁCH MUA HÀNG', '<h1>CH&Iacute;NH S&Aacute;CH MUA H&Agrave;NG</h1>', 1, NULL, 1, '2023-04-15 02:05:12', '2023-04-15 02:05:12');
INSERT INTO `tsh_post` (`id`, `topic_id`, `title`, `slug`, `detail`, `image`, `type`, `metakey`, `metadesc`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(18, NULL, 'Chính sách bảo hành', 'chinh-sach-bao-hanh', '<p><strong>1. T&ocirc;i c&oacute; thể bảo h&agrave;nh sản phẩm tại đ&acirc;u?</strong></p>\r\n\r\n<p>- Bảo h&agrave;nh ch&iacute;nh h&atilde;ng: kh&aacute;ch h&agrave;ng c&oacute; thể mang sản phẩm đến trực tiếp h&atilde;ng để bảo h&agrave;nh m&agrave; kh&ocirc;ng cần th&ocirc;ng qua Tiki.</p>\r\n\r\n<p>- Bảo h&agrave;nh th&ocirc;ng qua Tiki: kh&aacute;ch h&agrave;ng li&ecirc;n hệ Tiki để được hỗ trợ tư vấn về bảo h&agrave;nh.<br />\r\n&nbsp;</p>\r\n\r\n<p><strong>2. T&ocirc;i c&oacute; thể được bảo h&agrave;nh sản phẩm miễn ph&iacute; kh&ocirc;ng?</strong></p>\r\n\r\n<p>Sản phẩm của qu&yacute; kh&aacute;ch được bảo h&agrave;nh miễn ph&iacute; ch&iacute;nh h&atilde;ng khi:</p>\r\n\r\n<ul>\r\n	<li>C&ograve;n thời hạn bảo h&agrave;nh (dựa tr&ecirc;n tem/phiếu bảo h&agrave;nh hoặc thời điểm k&iacute;ch hoạt bảo h&agrave;nh điện tử).</li>\r\n	<li>Tem/phiếu bảo h&agrave;nh c&ograve;n nguy&ecirc;n vẹn.</li>\r\n	<li>Sản phẩm bị lỗi kỹ thuật.</li>\r\n</ul>\r\n\r\n<p>C&aacute;c trường hợp c&oacute; thể ph&aacute;t sinh ph&iacute; bảo h&agrave;nh:</p>\r\n\r\n<ul>\r\n	<li>Sản phẩm hết thời hạn bảo h&agrave;nh.</li>\r\n	<li>Sản phẩm bị bể, biến dạng, ch&aacute;y, nổ, ẩm thấp trong động cơ hoặc hư hỏng trong qu&aacute; tr&igrave;nh sử&nbsp;dụng.</li>\r\n</ul>\r\n\r\n<p><strong>3. Sau bao l&acirc;u t&ocirc;i c&oacute; thể nhận lại sản phẩm bảo h&agrave;nh?</strong></p>\r\n\r\n<p>Nếu sản phẩm của qu&yacute; kh&aacute;ch vẫn c&ograve;n trong thời hạn bảo h&agrave;nh, Tiki khuyến kh&iacute;ch qu&yacute; kh&aacute;ch gửi trực tiếp đến trung t&acirc;m của h&atilde;ng để được hỗ trợ bảo h&agrave;nh trong thời gian nhanh nhất.</p>\r\n\r\n<p>Trường hợp qu&yacute; kh&aacute;ch gửi h&agrave;ng về Tiki, thời gian bảo h&agrave;nh dự kiến trong v&ograve;ng 21- 45 ng&agrave;y t&ugrave;y thuộc v&agrave;o điều kiện sẵn c&oacute; của linh kiện thay thế từ nh&agrave; sản xuất/lỗi sản phẩm (kh&ocirc;ng t&iacute;nh thời gian vận chuyển đi v&agrave; về). Đối với sản phẩm của Apple (iPhone, iPad, Macbook,&hellip;), thời gian ho&agrave;n tất bảo h&agrave;nh dự kiến từ 30 đến 60 ng&agrave;y.</p>\r\n\r\n<p><strong>4. Tiki bảo h&agrave;nh bằng c&aacute;c h&igrave;nh thức n&agrave;o?</strong></p>\r\n\r\n<p>Sản phẩm tại Tiki sẽ được bảo h&agrave;nh bằng 1 trong 4 h&igrave;nh thức sau:</p>\r\n\r\n<ul>\r\n	<li>H&oacute;a đơn: kh&aacute;ch h&agrave;ng mang theo h&oacute;a đơn trực tiếp hoặc h&oacute;a đơn gi&aacute; trị gia tăng c&oacute; th&ocirc;ng tin của sản phẩm để được bảo h&agrave;nh.</li>\r\n	<li>Phiếu bảo h&agrave;nh: đi k&egrave;m theo sản phẩm, c&oacute; đầy đủ th&ocirc;ng tin về nơi bảo h&agrave;nh v&agrave; điều kiện bảo h&agrave;nh.</li>\r\n	<li>Tem bảo h&agrave;nh: loại tem đặc biệt chỉ sử dụng một lần, được d&aacute;n trực tiếp l&ecirc;n sản phẩm. Sản phẩm c&ograve;n trong thời hạn bảo h&agrave;nh phải thỏa điều kiện tem c&ograve;n nguy&ecirc;n vẹn v&agrave; thời gian bảo h&agrave;nh phải trước ng&agrave;y được viết tr&ecirc;n tem.</li>\r\n	<li>Điện tử: l&agrave; chế độ bảo h&agrave;nh sản phẩm trực tuyến thay thế cho phương ph&aacute;p bảo h&agrave;nh th&ocirc;ng thường bằng giấy hay thẻ bảo h&agrave;nh bằng c&aacute;ch: nhắn tin SMS k&iacute;ch hoạt, qu&eacute;t m&atilde; QR-Code từ tem nh&atilde;n, đăng k&yacute; tr&ecirc;n website hoặc bằng ứng dụng bảo h&agrave;nh.</li>\r\n</ul>\r\n\r\n<p><strong>5. Tiki c&oacute; bảo h&agrave;nh qu&agrave; tặng k&egrave;m sản phẩm kh&ocirc;ng?</strong></p>\r\n\r\n<p>Tiki rất tiếc hiện chưa hỗ trợ bảo h&agrave;nh qu&agrave; tặng đi k&egrave;m sản phẩm ch&iacute;nh.&nbsp;</p>\r\n\r\n<p><strong>Lưu &yacute;:</strong>&nbsp;Để đảm bảo quyền lợi kh&aacute;ch h&agrave;ng v&agrave; Tiki c&oacute; cơ sở l&agrave;m việc với c&aacute;c bộ phận li&ecirc;n quan, tất cả y&ecirc;u cầu bảo h&agrave;nh qu&yacute; kh&aacute;ch cần cung cấp h&igrave;nh ảnh/clip sản phẩm lỗi. Tiki xin ph&eacute;p từ chối khi chưa nhận đủ th&ocirc;ng tin h&igrave;nh ảnh từ qu&yacute; kh&aacute;ch.&nbsp;</p>', NULL, 'page', 'Chính sách bảo hành', '<h1>Ch&iacute;nh s&aacute;ch bảo h&agrave;nh</h1>', 1, NULL, 1, '2023-04-15 02:07:19', '2023-04-15 02:07:19'),
(19, NULL, 'Chính sách đổi trả sản phẩm', 'chinh-sach-doi-tra-san-pham', '<p style=\"text-align:start\"><br />\r\n<span style=\"font-size:13.8px\"><span style=\"color:#010101\"><span style=\"font-family:sans-serif\"><span style=\"background-color:#ffffff\">Tại Tiki, ch&uacute;ng t&ocirc;i tr&acirc;n trọng sự tin tưởng của kh&aacute;ch h&agrave;ng khi đặt mua sản phẩm. Ch&iacute;nh s&aacute;ch hậu m&atilde;i ở Tiki được x&acirc;y dựng dựa tr&ecirc;n cam kết bảo vệ quyền lợi người ti&ecirc;u d&ugrave;ng để qu&yacute; kh&aacute;ch c&oacute; thể y&ecirc;n t&acirc;m mua sắm v&agrave; trải nghiệm dịch vụ.</span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:13.8px\"><span style=\"color:#010101\"><span style=\"font-family:sans-serif\"><span style=\"background-color:#ffffff\">Tiki đảm bảo sản phẩm được b&aacute;n tại Tiki l&agrave; sản phẩm mới v&agrave; 100% ch&iacute;nh h&atilde;ng. Trong trường hợp hiếm hoi sản phẩm qu&yacute; kh&aacute;ch nhận được c&oacute; khiếm khuyết, hư hỏng hoặc kh&ocirc;ng như m&ocirc; tả, Tiki cam kết bảo vệ kh&aacute;ch h&agrave;ng bằng ch&iacute;nh s&aacute;ch đổi trả v&agrave; bảo h&agrave;nh.<img alt=\"2020-10-26_160215 HC2.jpg\" src=\"https://hotro.tiki.vn/servlet/rtaImage?eid=ka05h000000dszY&amp;feoid=00N5Y00000TZwdJ&amp;refid=0EM5Y000003Ukas\" style=\"border:0px; box-sizing:border-box; height:74px; margin-bottom:12px; max-width:100%; vertical-align:middle; width:766px\" /></span></span></span></span></p>\r\n\r\n<table cellspacing=\"0\" style=\"background-color:#ffffff; border-collapse:collapse; border-spacing:0px; box-sizing:border-box; color:#010101; font-family:sans-serif; font-size:13.8px; font-style:normal; font-variant-ligatures:normal; font-weight:400; overflow-wrap:normal; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; white-space:normal; width:750px; word-break:normal\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"2\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center; width:299.663px\"><strong>&nbsp;NG&Agrave;NH H&Agrave;NG</strong></td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center; width:149.837px\"><strong>THỜI GIAN ĐỔI TRẢ (KỂ TỪ KHI GIAO H&Agrave;NG TH&Agrave;NH C&Ocirc;NG)</strong></td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center; width:149.837px\"><strong>SẢN PHẨM LỖI<br />\r\n			(do nh&agrave; cung cấp)</strong></td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center; width:149.863px\"><strong>TRẢ DO NHU CẦU (SẢN PHẨM KH&Ocirc;NG LỖI)&nbsp;</strong>(*)</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">Điện Thoại - M&aacute;y T&iacute;nh Bảng<br />\r\n			Điện tử - Điện Lạnh, Laptop - M&aacute;y vi t&iacute;nh<br />\r\n			&nbsp;M&aacute;y ảnh - M&aacute;y quay phim</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">7 ng&agrave;y đầu ti&ecirc;n</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">Đổi mới/ Ho&agrave;n tiền<br />\r\n			<span style=\"color:#e74c3c\">C&aacute;c sản phẩm thuộc thương hiệu Apple sẽ &aacute;p dụng theo&nbsp;</span><a href=\"https://www.apple.com/legal/warranty/products/warranty-rest-of-apac-vietnamese.html\" style=\"box-sizing:border-box; color:var(--lwc-brandTextLink,#415aa8); text-decoration:none; transition:color 0.1s linear 0s; cursor:pointer\" target=\"_blank\"><span style=\"color:#e74c3c\">ch&iacute;nh s&aacute;ch của h&atilde;ng</span></a><span style=\"color:#e74c3c\">, xem tại&nbsp;</span><a href=\"https://www.apple.com/legal/warranty/products/warranty-rest-of-apac-vietnamese.html\" style=\"box-sizing:border-box; color:var(--lwc-brandTextLink,#415aa8); text-decoration:none; transition:color 0.1s linear 0s; cursor:pointer\" target=\"_blank\"><span style=\"color:#3498db\"><u><strong><em>đ&acirc;y</em></strong></u></span></a>&nbsp;<span style=\"color:#e74c3c\">.</span></td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">Kh&ocirc;ng hỗ trợ đổi/ trả</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">Phụ kiện số, linh kiện điện tử</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">7 ng&agrave;y đầu ti&ecirc;n</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">Đổi mới/ Ho&agrave;n tiền</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">Ho&agrave;n tiền</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"2\" style=\"background-color:#ffffff; text-align:center\">Điện gia dụng</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">Nh&agrave; b&aacute;n Tiki Trading</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">30 ng&agrave;y đầu ti&ecirc;n (**)</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">Đổi mới/ Ho&agrave;n tiền</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">Ho&agrave;n tiền</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">Nh&agrave; b&aacute;n kh&aacute;c</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">7 ng&agrave;y đầu ti&ecirc;n</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">Đổi mới/ Ho&agrave;n tiền</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">Ho&agrave;n tiền</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">Sản phẩm xe m&aacute;y, xe m&aacute;y điện&nbsp;&nbsp; &nbsp;</td>\r\n			<td colspan=\"3\" rowspan=\"2\" style=\"background-color:#ffffff; text-align:center\">Kh&ocirc;ng hỗ trợ đổi/ trả</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">Voucher/ E-voucher dịch vụ&nbsp;&nbsp; &nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"2\" style=\"background-color:#ffffff; text-align:center\">Tiki NGON</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">H&agrave;ng tươi sống</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">Tại thời điểm nhận h&agrave;ng</td>\r\n			<td colspan=\"1\" rowspan=\"2\" style=\"background-color:#ffffff; text-align:center\">Ho&agrave;n tiền</td>\r\n			<td colspan=\"1\" rowspan=\"2\" style=\"background-color:#ffffff; text-align:center\">Kh&ocirc;ng hỗ trợ đổi/ trả</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">C&ograve;n lại</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">1 ng&agrave;y</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">C&aacute;c ng&agrave;nh h&agrave;ng c&ograve;n lại</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">30 ng&agrave;y đầu ti&ecirc;n</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">Đổi mới/ Ho&agrave;n tiền</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:center\">Ho&agrave;n tiền</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<div style=\"text-align:start\"><br />\r\n<span style=\"font-size:13.8px\"><span style=\"color:#010101\"><span style=\"font-family:sans-serif\"><span style=\"background-color:#ffffff\">C&aacute;c sản phẩm kh&ocirc;ng thỏa điều kiện đổi trả như tr&ecirc;n: &aacute;p dụng bảo h&agrave;nh ch&iacute;nh h&atilde;ng (nếu c&oacute;).<br />\r\n<br />\r\n(*) Chỉ &aacute;p dụng khi sản phẩm đ&aacute;p ứng đủ điều kiện theo&nbsp;<a href=\"https://tiki.my.site.com/s/article/lam-cach-nao-de-toi-co-the-tra-hang-do-khong-con-nhu-cau\" style=\"box-sizing:border-box; color:var(--lwc-brandTextLink,#415aa8); text-decoration:none; transition:color 0.1s linear 0s; cursor:pointer\" target=\"_blank\">ch&iacute;nh s&aacute;ch</a>.<br />\r\n<br />\r\n(**) &Aacute;p dụng cho c&aacute;c đơn h&agrave;ng từ 16/12/2022.<br />\r\n<br />\r\n<span style=\"color:#0000ff\"><img alt=\"2020-10-26_160511_HC3.jpg\" src=\"https://hotro.tiki.vn/servlet/rtaImage?eid=ka05h000000dszY&amp;feoid=00N5Y00000TZwdJ&amp;refid=0EM5Y000003Ukb2\" style=\"border:0px; box-sizing:border-box; height:41px; margin-bottom:12px; max-width:100%; vertical-align:middle; width:878px\" /><strong>- Lưu &yacute;:&nbsp;<em>Trong v&ograve;ng 7 ng&agrave;y kể từ khi nhận h&agrave;ng, nếu thiết bị của qu&yacute; kh&aacute;ch bị lỗi kỹ thuật v&agrave; đ&atilde; qua sửa chữa, Tiki rất tiếc chưa hỗ trợ đổi trả sản phẩm, chỉ hỗ trợ bảo h&agrave;nh (nếu sản phẩm đủ điều kiện).</em></strong></span></span></span></span></span></div>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:13.8px\"><span style=\"color:#010101\"><span style=\"font-family:sans-serif\"><span style=\"background-color:#ffffff\">Tiki rất tiếc sẽ kh&ocirc;ng &aacute;p dụng đổi - trả theo nhu cầu của kh&aacute;ch h&agrave;ng khi sản phẩm kh&ocirc;ng lỗi với c&aacute;c sản phẩm nằm trong danh mục sau v&agrave; khi sản phẩm kh&ocirc;ng đ&aacute;p ứng điều kiện theo&nbsp;<a href=\"https://tiki.my.site.com/s/article/lam-cach-nao-de-toi-co-the-tra-hang-do-khong-con-nhu-cau\" style=\"box-sizing:border-box; color:var(--lwc-brandTextLink,#415aa8); text-decoration:none; transition:color 0.1s linear 0s; cursor:pointer\" target=\"_blank\">ch&iacute;nh s&aacute;ch Trả - Ho&agrave;n Tiền Theo Mong Muốn Của Kh&aacute;ch H&agrave;ng:</a></span></span></span></span></p>\r\n\r\n<table cellspacing=\"0\" style=\"background-color:#ffffff; border-collapse:collapse; border-spacing:0px; box-sizing:border-box; color:#010101; font-family:sans-serif; font-size:13.8px; font-style:normal; font-variant-ligatures:normal; font-weight:400; overflow-wrap:normal; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; white-space:normal; width:auto; word-break:normal\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:230.55px\"><strong>DANH MỤC</strong></td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left\"><strong>SẢN PHẨM</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:329px\">Điện thoại - M&aacute;y t&iacute;nh bảng - Laptop</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:857px\">Điện thoại, m&aacute;y t&iacute;nh bảng, laptop</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:329px\">Thiết bị số - Phụ kiện số - Thiết bị IT</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:857px\">Sản phẩm đ&atilde; được k&iacute;ch hoạt bảo h&agrave;nh, đ&atilde; th&aacute;o seal, qua sử dụng, sao lưu dữ liệu,....</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:329px\">M&aacute;y&nbsp;ảnh - M&aacute;y quay phim</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:857px\">Tất cả sản phẩm trong&nbsp;danh mục &quot;M&aacute;y&nbsp;ảnh - M&aacute;y quay phim&quot;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:329px\">Tivi</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:857px\">Tất cả sản phẩm Tivi</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:329px\">Điện lạnh</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:857px\">Tủ lạnh, m&aacute;y giặt, m&aacute;y lạnh - m&aacute;y điều h&ograve;a, m&aacute;y nước n&oacute;ng, m&aacute;y sấy quần &aacute;o, m&aacute;y rửa ch&eacute;n, tủ đ&ocirc;ng - tủ m&aacute;t, tủ ướp rượu</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:329px\">Thời trang</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:857px\">Đồ l&oacute;t, Đồ bơi, Đồ ngủ, Đồ bộ, trang sức<br />\r\n			Gi&agrave;y d&eacute;p thuộc thương hiệu:&nbsp;Converse, Vans<br />\r\n			Thương hiệu đồng hồ của một số nh&agrave; b&aacute;n:<br />\r\n			- Nh&agrave; b&aacute;n&nbsp;Đồng Hồ T&acirc;n T&acirc;n:&nbsp;BULOVA, CARAVELLE, Citizen, CITIZEN (Japan), Movado, Tissot.<br />\r\n			- Nh&agrave; b&aacute;n&nbsp;Nguy&ecirc;n Vạn Lộc (Nguyen Van Loc):&nbsp;Adriatica, ANNE KLEIN, Armitron, Jazma, LACOSTE, Obaku, Sonata, STORM, Titan, TOMMY HILFIGER.<br />\r\n			H&agrave;ng thời trang thuộc nh&atilde;n hiệu&nbsp;Mango</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:329px\">L&agrave;m đẹp - Sức khỏe</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:857px\">Nước hoa</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:329px\">Sản phẩm cho mẹ &amp; b&eacute;</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:857px\">Sữa, bột ăn dặm, c&aacute;c loại thực phẩm, thức uống cho mẹ v&agrave; b&eacute;.&nbsp;<br />\r\n			Đồ l&oacute;t, đồ bơi của b&eacute;.</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:329px\">S&aacute;ch</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:857px\">B&aacute;o, tạp ch&iacute;, c&aacute;c ấn phẩm định kỳ.&nbsp;<br />\r\n			Băng đĩa CD/DVD.<br />\r\n			Sản phẩm đ&atilde; bọc bookcare.</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:329px\">Voucher -Dịch vụ</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:857px\">Tất cả sản phẩm trong danh mục Voucher - Dịch vụ</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:329px\">Xe M&aacute;y, &Ocirc; t&ocirc;, Xe Đạp</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:857px\">Xe m&aacute;y, xe m&aacute;y điện, xe đạp điện, xe đạp.</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:329px\">Thực phẩm tươi sống</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:857px\">Thịt, Hải sản, Rau củ, Tr&aacute;i c&acirc;y, Thực phẩm đ&ocirc;ng lạnh, Thực phẩm chế biến sẵn, Bơ sữa &amp; Trứng</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left\">Rượu - Đồ uống c&oacute; cồn</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:857px\">Rượu</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left\">Sản phẩm kh&aacute;c</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left\">\r\n			<p>Sản phẩm khuyến mại, tặng k&egrave;m, thanh l&yacute;.<br />\r\n			H&agrave;ng mua tại c&aacute;c sự kiện Offline.<br />\r\n			Sản phẩm c&oacute; th&ocirc;ng tin chi tiết kh&ocirc;ng &aacute;p dụng đổi trả (Tissot, Citizen, Titan, Obaku...).</p>\r\n\r\n			<p>Sản phẩm mua với h&igrave;nh thức thanh to&aacute;n trả g&oacute;p.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:13.8px\"><span style=\"color:#010101\"><span style=\"font-family:sans-serif\"><span style=\"background-color:#ffffff\">- Ch&iacute;nh s&aacute;ch đổi trả h&agrave;ng giao từ nước ngo&agrave;i:&nbsp;<a href=\"https://tiki.my.site.com/s/article/lam-cach-nao-de-toi-co-the-doi-tra-bao-hanh-don-hang-giao-tu-nuoc-ngoai\" style=\"box-sizing:border-box; color:var(--lwc-brandTextLink,#415aa8); text-decoration:none; transition:color 0.1s linear 0s; cursor:pointer\" target=\"_blank\">Xem th&ecirc;m tại đ&acirc;y</a></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:13.8px\"><span style=\"color:#010101\"><span style=\"font-family:sans-serif\"><span style=\"background-color:#ffffff\">- Qu&yacute; kh&aacute;ch vui l&ograve;ng th&ocirc;ng b&aacute;o cho TikiCare khi:<br />\r\n&nbsp; &nbsp; + Sản phẩm c&oacute;&nbsp;<strong>lỗi ngoại quan</strong>&nbsp;(trầy xước, hư hỏng b&ecirc;n ngo&agrave;i, bể vỡ):&nbsp;<strong>2 ng&agrave;y&nbsp;</strong>kể từ khi nhận h&agrave;ng th&agrave;nh c&ocirc;ng<strong>.</strong><br />\r\n&nbsp; &nbsp; + Sản phẩm&nbsp;<strong>giao sai hoặc giao thiếu</strong>:&nbsp;<strong>7 ng&agrave;y</strong>&nbsp;kể từ khi nhận h&agrave;ng th&agrave;nh c&ocirc;ng.<br />\r\n<br />\r\n- Qu&yacute; kh&aacute;ch cần chuẩn bị th&ecirc;m&nbsp;c&aacute;c bằng chứng để đối chiếu/ khiếu nại về sau như:<br />\r\n&nbsp; &nbsp; +&nbsp;Video clip mở kiện h&agrave;ng từ l&uacute;c bắt đầu khui ngoại quan đến kiểm tra sản phẩm b&ecirc;n trong th&ugrave;ng h&agrave;ng/ H&igrave;nh ảnh sản phẩm lỗi.<br />\r\n&nbsp; &nbsp; +&nbsp;H&igrave;nh chụp tem kiện h&agrave;ng c&oacute; thể hiện m&atilde; đơn h&agrave;ng.<br />\r\n&nbsp; &nbsp; +&nbsp;T&igrave;nh trạng ngoại quan (băng keo, seal, h&igrave;nh dạng th&ugrave;ng h&agrave;ng) đặc biệt c&aacute;c vị tr&iacute; nghi ngờ c&oacute; t&aacute;c động đến&nbsp;sản phẩm.<br />\r\n&nbsp; &nbsp; + T&igrave;nh trạng sản phẩm b&ecirc;n trong.<br />\r\n<br />\r\n&nbsp;&nbsp;- Để đảm bảo quyền lợi kh&aacute;ch h&agrave;ng v&agrave; Tiki c&oacute; cơ sở l&agrave;m việc với c&aacute;c bộ phận li&ecirc;n quan, tất cả y&ecirc;u cầu đổi/ trả/ bảo h&agrave;nh qu&yacute; kh&aacute;ch cần cung cấp h&igrave;nh ảnh/ clip sản phẩm lỗi. Qu&aacute; thời gian đổi/ trả sản phẩm nếu chưa nhận được đủ h&igrave;nh ảnh/ clip từ qu&yacute; kh&aacute;ch, Tiki xin ph&eacute;p từ chối hỗ trợ. B&ecirc;n cạnh đ&oacute;, qu&yacute; kh&aacute;ch cần quay video clip đ&oacute;ng g&oacute;i sản phẩm để l&agrave;m bằng chứng đối chiếu/ khiếu nại li&ecirc;n quan đến đổi trả&nbsp;về sau (nếu cần).</span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:13.8px\"><span style=\"color:#010101\"><span style=\"font-family:sans-serif\"><span style=\"background-color:#ffffff\">- B&ecirc;n cạnh ch&iacute;nh s&aacute;ch chung về thời gian v&agrave; điều kiện đổi trả, quy định đổi/ trả/ bảo h&agrave;nh c&aacute;c sản phẩm thuộc nh&oacute;m&nbsp;<strong>Qu&agrave;</strong><strong>&nbsp;tặng k&egrave;m, Sản phẩm/ Dịch vụ mua k&egrave;m,&nbsp;Mua k&egrave;m giảm th&ecirc;m</strong>&nbsp;c&oacute; th&ecirc;m một số điều kiện như sau:</span></span></span></span></p>\r\n\r\n<table cellspacing=\"0\" style=\"background-color:#ffffff; border-collapse:collapse; border-spacing:0px; box-sizing:border-box; color:#010101; font-family:sans-serif; font-size:13.8px; font-style:normal; font-variant-ligatures:normal; font-weight:400; overflow-wrap:normal; text-align:start; text-decoration-color:initial; text-decoration-style:initial; text-decoration-thickness:initial; white-space:normal; width:auto; word-break:normal\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:230.55px\">&nbsp;</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:268.975px\"><strong>QU&Agrave; TẶNG K&Egrave;M</strong></td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left; width:269px\"><strong>SẢN PHẨM MUA K&Egrave;M/ MUA K&Egrave;M GIẢM TH&Ecirc;M</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left\"><strong>Sản phẩm lỗi (do nh&agrave; cung cấp)</strong></td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left\">Đổi (sản phẩm ch&iacute;nh bị lỗi) hoặc Trả nguy&ecirc;n bộ</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left\">Đổi sản phẩm lỗi hoặc Trả nguy&ecirc;n bộ</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left\"><strong>Sản phẩm kh&ocirc;ng lỗi</strong></td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left\">Trả nguy&ecirc;n bộ</td>\r\n			<td colspan=\"1\" rowspan=\"1\" style=\"background-color:#ffffff; text-align:left\">Trả nguy&ecirc;n bộ</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:13.8px\"><span style=\"color:#010101\"><span style=\"font-family:sans-serif\"><span style=\"background-color:#ffffff\"><span style=\"color:#0000ff\"><strong>Lưu &yacute;:&nbsp;</strong></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:13.8px\"><span style=\"color:#010101\"><span style=\"font-family:sans-serif\"><span style=\"background-color:#ffffff\">- Kh&ocirc;ng &aacute;p dụng đổi/ trả/ bảo h&agrave;nh với sản phẩm qu&agrave; tặng.&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:13.8px\"><span style=\"color:#010101\"><span style=\"font-family:sans-serif\"><span style=\"background-color:#ffffff\">- Chỉ hỗ trợ trả h&agrave;ng nếu qu&agrave; tặng/sản phẩm mua k&egrave;m/sản phẩm mua theo g&oacute;i c&ograve;n nguy&ecirc;n mới v&agrave; được gửi lại đầy đủ.&nbsp;</span></span></span></span></p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:13.8px\"><span style=\"color:#010101\"><span style=\"font-family:sans-serif\"><span style=\"background-color:#ffffff\">- C&aacute;c trường hợp bảo h&agrave;nh sẽ theo ch&iacute;nh s&aacute;ch bảo h&agrave;nh của nh&agrave; b&aacute;n/nh&agrave; sản xuất.</span></span></span></span></p>', NULL, 'page', 'Chính sách đổi trả sản phẩm', '<h1>Ch&iacute;nh s&aacute;ch đổi trả sản phẩm</h1>', 1, NULL, 1, '2023-04-15 02:08:11', '2023-04-15 02:08:11'),
(20, NULL, 'Chính sách vận chuyển', 'chinh-sach-van-chuyen', '<h2><img alt=\"\" src=\"https://www.phucanh.vn/media/lib/63.jpg\" style=\"height:817px; width:1200px\" /></h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>&nbsp;<strong>CH&Iacute;NH S&Aacute;CH VẬN CHUYỂN &amp; GIAO NHẬN H&Agrave;NG HO&Aacute;</strong></h2>\r\n\r\n<p>Ch&iacute;nh s&aacute;ch vận chuyển v&agrave; giao nhận h&agrave;ng h&oacute;a &aacute;p dụng cho mọi h&igrave;nh thức mua h&agrave;ng tại Ph&uacute;c Anh.</p>\r\n\r\n<p><strong>I. H&Igrave;NH THỨC VẬN CHUYỂN &amp; GIAO NHẬN H&Agrave;NG H&Oacute;A</strong></p>\r\n\r\n<p>Khi mua h&agrave;ng tại Ph&uacute;c Anh, qu&yacute; kh&aacute;ch c&oacute; thể lựa chọn một trong c&aacute;c h&igrave;nh thức vận chuyển, giao nhận sau:</p>\r\n\r\n<ul>\r\n	<li>Ph&uacute;c Anh trực tiếp vận chuyển v&agrave; giao h&agrave;ng tận tay kh&aacute;ch h&agrave;ng.</li>\r\n	<li>Ph&uacute;c Anh giao h&agrave;ng cho kh&aacute;ch h&agrave;ng th&ocirc;ng qua c&aacute;c nh&agrave; cung cấp dịch vụ chuyển ph&aacute;t.</li>\r\n</ul>\r\n\r\n<p><strong>II. NỘI DUNG&nbsp;</strong></p>\r\n\r\n<p><strong>1. Ph&uacute;c Anh trực tiếp giao h&agrave;ng tận nơi sử dụng cho kh&aacute;ch h&agrave;ng</strong></p>\r\n\r\n<ul>\r\n	<li>Miễn ph&iacute; giao h&agrave;ng: Khoảng c&aacute;ch l&ecirc;n tới 300km.</li>\r\n	<li>Khung giờ giao h&agrave;ng từ 8h00 đến 21h00 h&agrave;ng ng&agrave;y.</li>\r\n</ul>\r\n\r\n<p><strong><img alt=\"\" src=\"https://www.phucanh.vn/media/lib/tn-tay.jpg\" style=\"height:600px; width:1200px\" /></strong></p>\r\n\r\n<p><strong>Nội dung chi tiết:&nbsp;</strong></p>\r\n\r\n<p><strong>1.1 Thời gian giao h&agrave;ng&nbsp;</strong><em>(Khoảng c&aacute;ch được t&iacute;nh từ cơ sở giao h&agrave;ng đến địa điểm kh&aacute;ch h&agrave;ng)</em></p>\r\n\r\n<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Khoảng c&aacute;ch</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Thời gian giao h&agrave;ng</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Trong trường hợp c&oacute; y&ecirc;u cầu lắp r&aacute;p, c&agrave;i đặt</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Từ 0km &ndash; 15km</p>\r\n			</td>\r\n			<td>\r\n			<p>&lt; 2h giờ l&agrave;m việc</p>\r\n			</td>\r\n			<td>\r\n			<p>&lt; 3h giờ l&agrave;m việc</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Tr&ecirc;n 15km &ndash; 25km</p>\r\n			</td>\r\n			<td>\r\n			<p>&lt; 3h giờ l&agrave;m việc</p>\r\n			</td>\r\n			<td>\r\n			<p>&lt; 4h giờ l&agrave;m việc</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Tr&ecirc;n 25km &ndash; 40km</p>\r\n			</td>\r\n			<td>\r\n			<p>&lt; 5h giờ l&agrave;m việc</p>\r\n			</td>\r\n			<td>\r\n			<p>&lt; 6h giờ l&agrave;m việc</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Tr&ecirc;n 40km &ndash; 60km</p>\r\n			</td>\r\n			<td>\r\n			<p>&lt; 7h giờ l&agrave;m việc</p>\r\n			</td>\r\n			<td>\r\n			<p>&lt; 8h giờ l&agrave;m việc</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Tr&ecirc;n 60km</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Thỏa thuận với kh&aacute;ch h&agrave;ng</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>1.2 Chi ph&iacute; giao h&agrave;ng</strong></p>\r\n\r\n<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Theo gi&aacute; trị đơn h&agrave;ng</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Số Km được miễn ph&iacute;</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Mức ph&iacute;</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>&lt;500.000VNĐ</p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p>30.000đ/ 15km. Từ km thứ 16 thu 5.000đ/ 1km.</p>\r\n\r\n			<p>Giao h&agrave;ng tối đa 30km.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Từ 500.000VNĐ &ndash; 1.000.000VNĐ</p>\r\n			</td>\r\n			<td>\r\n			<p>10 Km</p>\r\n			</td>\r\n			<td>&nbsp;Từ km thứ 11 thu 5.000đ/ 1km</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Tr&ecirc;n 1.000.000VNĐ</p>\r\n			</td>\r\n			<td>\r\n			<p>15 Km</p>\r\n			</td>\r\n			<td>\r\n			<p>Từ km thứ 16 thu 5.000đ/ 1km</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Tr&ecirc;n 3.000.000VNĐ</p>\r\n			</td>\r\n			<td>\r\n			<p>25 Km</p>\r\n			</td>\r\n			<td>\r\n			<p>Từ km thứ 26 thu 5.000đ/ 1km</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Tr&ecirc;n 10.000.000VNĐ</p>\r\n			</td>\r\n			<td>\r\n			<p>40 Km</p>\r\n			</td>\r\n			<td>\r\n			<p>Từ km thứ 41 thu 5.000đ/ 1km</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Tr&ecirc;n 50.000.000VNĐ</p>\r\n			</td>\r\n			<td>\r\n			<p>50 Km</p>\r\n			</td>\r\n			<td>\r\n			<p>Từ km thứ 51 thu 10.000đ/ 1km.</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Tr&ecirc;n 100.000.000 VNĐ</p>\r\n			</td>\r\n			<td>\r\n			<p>100 Km</p>\r\n			</td>\r\n			<td>\r\n			<p>Từ km thứ 101 thu ph&iacute; 10.000đ/ 1km</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Tr&ecirc;n 200.000.000 VNĐ</p>\r\n			</td>\r\n			<td>\r\n			<p>200 Km</p>\r\n			</td>\r\n			<td>\r\n			<p>Từ km thứ 201 thu ph&iacute; 10.000đ/ 1km</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Tr&ecirc;n 300.000.000 VNĐ</p>\r\n			</td>\r\n			<td>\r\n			<p>300 Km</p>\r\n			</td>\r\n			<td>\r\n			<p>Từ km thứ 301 thu ph&iacute; 10.000đ/ 1km</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>C&aacute;c trường hợp kh&aacute;c</p>\r\n			</td>\r\n			<td colspan=\"2\">\r\n			<p>Thỏa thuận</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Lưu &yacute;:</strong></p>\r\n\r\n<ul>\r\n	<li>Trường hợp giao h&agrave;ng c&oacute; lắp r&aacute;p, c&agrave;i đặt với khoảng c&aacute;ch&nbsp;lớn hơn&nbsp;50km: Ph&uacute;c Anh sẽ thu th&ecirc;m chi ph&iacute; nh&acirc;n c&ocirc;ng lắp r&aacute;p, c&agrave;i đặt: 100.000 VND/ người / 01 buổi l&agrave;m việc (04 tiếng, bao gồm cả thời gian di chuyển đến v&agrave; đi về).</li>\r\n	<li>Trường hợp h&agrave;ng đặc biệt c&oacute; k&iacute;ch thước hoặc khối lượng lớn, vận chuyển bằng phương tiện kh&aacute;c: Chi ph&iacute; vận chuyển được t&iacute;nh theo chi ph&iacute; ph&aacute;t sinh thực tế v&agrave; Ph&uacute;c Anh sẽ hỗ trợ qu&yacute; kh&aacute;ch một phần chi ph&iacute; chuyển ph&aacute;t;&nbsp;Qu&yacute; kh&aacute;ch vui l&ograve;ng li&ecirc;n hệ với nh&acirc;n vi&ecirc;n kinh doanh của Ph&uacute;c Anh để được tư vấn.</li>\r\n</ul>\r\n\r\n<p><strong>2. Giao h&agrave;ng th&ocirc;ng qua nh&agrave; cung cấp dịch vụ chuyển ph&aacute;t.</strong></p>\r\n\r\n<p><strong>2.1&nbsp;C&aacute;ch thức giao h&agrave;ng:</strong></p>\r\n\r\n<ul>\r\n	<li>Ph&uacute;c Anh sẽ lựa chọn một nh&agrave; cung cấp dịch vụ chuyển ph&aacute;t để giao h&agrave;ng tới Kh&aacute;ch h&agrave;ng.</li>\r\n	<li>Thời gian giao h&agrave;ng tới địa điểm kh&aacute;ch h&agrave;ng y&ecirc;u cầu theo chỉ ti&ecirc;u về thời gian giao h&agrave;ng của nh&agrave; cung cấp dịch vụ.</li>\r\n	<li>Để thuận tiện v&agrave; sắp xếp thời gian, địa điểm nhận h&agrave;ng ph&ugrave; hợp, Qu&yacute; kh&aacute;ch h&agrave;ng vui l&ograve;ng chủ động li&ecirc;n hệ với đơn vị trung gian để nhận h&agrave;ng.</li>\r\n</ul>\r\n\r\n<p><img alt=\"\" src=\"https://www.phucanh.vn/media/lib/chuyen-phat.jpg\" style=\"height:600px; width:1200px\" /></p>\r\n\r\n<p><strong>2.2 Tham khảo h&igrave;nh thức giao h&agrave;ng:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><strong>H&igrave;nh thức giao h&agrave;ng</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Điều kiện để được &aacute;p dụng</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Địa điểm giao h&agrave;ng</strong></p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Ph&iacute; vận chuyển</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Ph&uacute;c Anh giao h&agrave;ng cho kh&aacute;ch h&agrave;ng th&ocirc;ng qua c&aacute;c nh&agrave; cung cấp dịch vụ chuyển ph&aacute;t nhanh</p>\r\n			</td>\r\n			<td>\r\n			<p>Nơi nhận h&agrave;ng của Qu&yacute; kh&aacute;ch nằm trong phạm vi hoạt động của đơn vị chuyển ph&aacute;t nhanh</p>\r\n			</td>\r\n			<td>\r\n			<p>Tại địa chỉ y&ecirc;u cầu của kh&aacute;ch h&agrave;ng</p>\r\n			</td>\r\n			<td>\r\n			<p>Kh&aacute;ch h&agrave;ng thanh to&aacute;n theo gi&aacute; cước thể hiện tr&ecirc;n ho&aacute; đơn của đơn vị chuyển ph&aacute;t nhanh</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Ph&uacute;c Anh giao h&agrave;ng cho kh&aacute;ch h&agrave;ng qua chủ xe &ocirc; t&ocirc; chạy tuyến X &ndash; H&agrave; Nội (trong đ&oacute;, X l&agrave; địa b&agrave;n kh&aacute;ch h&agrave;ng muốn nhận h&agrave;ng)</p>\r\n			</td>\r\n			<td>\r\n			<p>Kh&aacute;ch h&agrave;ng cung cấp cho Ph&uacute;c Anh t&ecirc;n chủ xe, số điện thoại li&ecirc;n hệ, số xe, địa chỉ bến xe ở H&agrave; Nội, giờ xe v&agrave;o/ra bến</p>\r\n			</td>\r\n			<td>\r\n			<p>Theo thoả thuận giữa kh&aacute;ch h&agrave;ng v&agrave; chủ xe &ocirc; t&ocirc;</p>\r\n			</td>\r\n			<td>\r\n			<p>Kh&aacute;ch h&agrave;ng thanh to&aacute;n theo gi&aacute; thoả thuận giữa kh&aacute;ch h&agrave;ng với chủ xe</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Kh&aacute;c</p>\r\n			</td>\r\n			<td>\r\n			<p>Khi kh&aacute;ch h&agrave;ng c&oacute; y&ecirc;u cầu</p>\r\n			</td>\r\n			<td>\r\n			<p>Theo thoả thuận giữa kh&aacute;ch h&agrave;ng v&agrave; Ph&uacute;c Anh</p>\r\n			</td>\r\n			<td>\r\n			<p>Kh&aacute;ch h&agrave;ng thanh to&aacute;n theo từng y&ecirc;u cầu cụ thể về h&igrave;nh thức giao h&agrave;ng</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Lưu &yacute;:&nbsp;</strong></p>\r\n\r\n<p>Trước khi giao h&agrave;ng cho đơn vị trung gian vận chuyển, Ph&uacute;c Anh c&oacute; thực hiện ni&ecirc;m phong v&agrave; c&acirc;n h&agrave;ng h&oacute;a; Do đ&oacute;, Qu&yacute; kh&aacute;ch vui l&ograve;ng v&agrave; c&oacute; tr&aacute;ch nhiệm kiểm tra ni&ecirc;m phong v&agrave; cận nặng h&agrave;ng h&oacute;a trước khi nhận.</p>\r\n\r\n<p><strong>Quy c&aacute;ch ni&ecirc;m&nbsp;phong:</strong></p>\r\n\r\n<ul>\r\n	<li>Tất cả h&agrave;ng ho&aacute; Ph&uacute;c Anh gửi qua đơn vị trung gian đều được c&acirc;n trọng lượng, d&aacute;n ni&ecirc;m phong trước khi gửi.</li>\r\n	<li>Trọng lượng của h&agrave;ng gửi bao gồm cả vỏ hộp, được ghi r&otilde; tr&ecirc;n vỏ hộp bằng b&uacute;t dạ ghi bảng.</li>\r\n	<li>Giấy ni&ecirc;m phong c&oacute; đ&oacute;ng dấu tr&ograve;n của C&ocirc;ng ty hoặc d&aacute;n băng d&iacute;nh c&oacute; thương hiệu Ph&uacute;c Anh.</li>\r\n	<li>Trong trường hợp Qu&yacute; kh&aacute;ch h&agrave;ng ph&aacute;t hiện thấy giấy ni&ecirc;m phong đ&atilde; bị r&aacute;ch, hoặc c&oacute; dấu hiệu bị mở trước đ&oacute; v&agrave; hoặc h&agrave;ng (bao gồm cả vỏ hộp) kh&ocirc;ng đủ trọng lượng được ghi tr&ecirc;n vỏ hộp:\r\n	<ul>\r\n		<li>Qu&yacute;&nbsp;kh&aacute;ch&nbsp;lập bi&ecirc;n bản ngay với đơn vị trung gian vận chuyển.</li>\r\n		<li>Th&ocirc;ng b&aacute;o ngay cho nh&acirc;n vi&ecirc;n kinh doanh Ph&uacute;c Anh để c&oacute; hướng giải quyết kịp thời.</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;.</p>\r\n\r\n<p>Chậm nhất l&agrave; 02 giờ kể từ khi h&agrave;ng về đến nơi theo y&ecirc;u cầu của Qu&yacute; kh&aacute;ch h&agrave;ng, Qu&yacute; kh&aacute;ch h&agrave;ng kh&ocirc;ng phản hồi th&ocirc;ng tin cho Ph&uacute;c Anh th&igrave; Ph&uacute;c Anh coi như Qu&yacute; kh&aacute;ch h&agrave;ng đ&atilde; nhận đ&uacute;ng, đủ h&agrave;ng theo thoả thuận.</p>', NULL, 'page', 'Chính sách vận chuyển', '<p>Ch&iacute;nh s&aacute;ch vận chuyển</p>', 1, NULL, 1, '2023-04-15 02:13:09', '2023-04-15 02:13:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_product`
--

CREATE TABLE `tsh_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'product',
  `price_buy` decimal(10,0) NOT NULL,
  `detail` mediumtext NOT NULL,
  `metakey` varchar(1000) NOT NULL,
  `metadesc` mediumtext NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tsh_product`
--

INSERT INTO `tsh_product` (`id`, `category_id`, `brand_id`, `name`, `slug`, `type`, `price_buy`, `detail`, `metakey`, `metadesc`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(45, 12, 19, 'Grimgar Ảo Ảnh Và Tro Tàn - Tập 10', 'grimgar-ao-anh-va-tro-tan-tap-10', 'product', '85000', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>C&ocirc;ng ty ph&aacute;t h&agrave;nh</td>\r\n			<td>Nh&agrave; Xuất Bản Kim Đồng</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại b&igrave;a</td>\r\n			<td>B&igrave;a mềm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Số trang</td>\r\n			<td>304</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; xuất bản</td>\r\n			<td>Nh&agrave; Xuất Bản Kim Đồng</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'Grimgar Ảo Ảnh Và Tro Tàn - Tập 10', '<p><em>Tại sao ch&uacute;ng t&ocirc;i lại phải l&agrave;m việc n&agrave;y&hellip;?</em></p>\r\n\r\n<p>Khi nhận thức được, Haruhiro đ&atilde; ở trong b&oacute;ng tối. Cậu vẫn chẳng hiểu tại sao m&igrave;nh lại ở một chỗ như thế n&agrave;y, cũng kh&ocirc;ng biết được nơi đ&acirc;y l&agrave; đ&acirc;u. Xung quanh đều l&agrave; những ch&agrave;ng trai c&ocirc; g&aacute;i giống cậu, chỉ nhớ được duy nhất t&ecirc;n của bản th&acirc;n. Thứ đ&oacute;n chờ họ sau khi ra khỏi đường hầm dưới đất l&agrave; thế giới &ldquo;giống như trong game&rdquo;. Để sinh tồn, Haruhiro đ&atilde; lập tổ đội với những chiến hữu c&ugrave;ng chung cảnh ngộ, học tập c&aacute;c kĩ năng, dấn bước v&agrave;o thế giới &ldquo;Grimgar&rdquo; n&agrave;y với tư c&aacute;ch một người l&iacute;nh t&igrave;nh nguyện tập sự.</p>\r\n\r\n<p>Cho d&ugrave; vẫn kh&ocirc;ng biết điều g&igrave; đang chờ đợi m&igrave;nh ph&iacute;a trước&hellip;</p>\r\n\r\n<p>Đ&acirc;y l&agrave; c&acirc;u chuyện phi&ecirc;u lưu được sinh ra từ trong đ&aacute;m tro t&agrave;n.</p>\r\n\r\n<p>* GRIMGAR - ẢO ẢNH V&Agrave; TRO T&Agrave;N l&agrave; series light-novel d&agrave;i k&igrave; đặc sắc của t&aacute;c giả Ao Jyumonji:</p>\r\n\r\n<p>- Lu&ocirc;n nằm trong top s&aacute;ch b&aacute;n chạy theo tuần tại Nhật Bản mỗi khi ra tập mới!</p>\r\n\r\n<p>- Được chuyển thể th&agrave;nh manga, anime, OVA!</p>\r\n\r\n<p>- Đ&atilde; chuyển ngữ sang nhiều nước tr&ecirc;n thế giới như Anh, Ph&aacute;p, Đ&agrave;i Loan.</p>\r\n\r\n<p>- Số tập: 16 (on-going)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>---</p>\r\n\r\n<p>Một ấn phẩm của WINGS BOOKS - Thương hiệu s&aacute;ch trẻ của NXB Kim Đồng.</p>\r\n\r\n<p>Gi&aacute; sản phẩm tr&ecirc;n Tiki đ&atilde; bao gồm thuế theo luật hiện h&agrave;nh. B&ecirc;n cạnh đ&oacute;, tuỳ v&agrave;o loại sản phẩm, h&igrave;nh thức v&agrave; địa chỉ giao h&agrave;ng m&agrave; c&oacute; thể ph&aacute;t sinh th&ecirc;m chi ph&iacute; kh&aacute;c như ph&iacute; vận chuyển, phụ ph&iacute; h&agrave;ng cồng kềnh, thuế nhập khẩu (đối với đơn h&agrave;ng giao từ nước ngo&agrave;i c&oacute; gi&aacute; trị tr&ecirc;n 1 triệu đồng).....</p>', 1, NULL, 1, '2023-04-15 02:23:55', '2023-04-15 02:23:55'),
(47, 12, 19, '86 - Eightysix - Ep.7', '86-eightysix-ep7', 'product', '126000', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>C&ocirc;ng ty ph&aacute;t h&agrave;nh</td>\r\n			<td>IPM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ng&agrave;y xuất bản</td>\r\n			<td>2023-02-01 00:00:00</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dịch Giả</td>\r\n			<td>Ng&acirc;n Linh</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Loại b&igrave;a</td>\r\n			<td>B&igrave;a mềm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nh&agrave; xuất bản</td>\r\n			<td>Nh&agrave; Xuất Bản Hồng Đức</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '86 - Eightysix - Ep.7', '<p>Lữ đo&agrave;n Biệt k&iacute;ch Cơ động 86 đ&atilde; bắt giữ th&agrave;nh c&ocirc;ng Nữ ho&agrave;ng t&agrave;n nhẫn, một trong c&aacute;c chỉ huy cấp cao của Legion, &ldquo;vi&ecirc;n đạn bạc&rdquo; qu&yacute; b&aacute;u gi&uacute;p con người lật ngược thế cờ trong cuộc chiến với lũ m&aacute;y m&oacute;c giết ch&oacute;c. &nbsp;Việc ph&acirc;n t&iacute;ch, &ldquo;tra khảo&rdquo; Nữ ho&agrave;ng t&agrave;n nhẫn được Li&ecirc;n bang v&agrave; Vương quốc Li&ecirc;n hiệp tiến h&agrave;nh tại nước đồng minh đ&oacute;ng vai tr&ograve; b&ecirc;n thứ ba - Đồng minh Hiệp ước Wald. &nbsp;Nh&oacute;m Shin, Lena được thưởng một k&igrave; nghỉ đặc biệt sau chiến c&ocirc;ng lớn n&ecirc;u tr&ecirc;n. Khoảng thời gian xả hơi gi&uacute;p họ tạm qu&ecirc;n đi chiến trường sặc m&ugrave;i sắt th&eacute;p v&agrave; m&aacute;u tanh. C&oacute; điều trong l&uacute;c đ&oacute;, hầu như tất cả mọi người trừ hai nh&acirc;n vật ch&iacute;nh đều thầm nghĩ&hellip; &ldquo;Hai người mau mau th&agrave;nh đ&ocirc;i đi!&rdquo; &nbsp;Một &ldquo;cuộc chiến&rdquo; mới (!?) đang chờ đợi hai c&ocirc; cậu tuổi thiếu ni&ecirc;n! &nbsp;Gi&aacute; sản phẩm tr&ecirc;n Tiki đ&atilde; bao gồm thuế theo luật hiện h&agrave;nh. B&ecirc;n cạnh đ&oacute;, tuỳ v&agrave;o loại sản phẩm, h&igrave;nh thức v&agrave; địa chỉ giao h&agrave;ng m&agrave; c&oacute; thể ph&aacute;t sinh th&ecirc;m chi ph&iacute; kh&aacute;c như ph&iacute; vận chuyển, phụ ph&iacute; h&agrave;ng cồng kềnh, thuế nhập khẩu (đối với đơn h&agrave;ng giao từ nước ngo&agrave;i c&oacute; gi&aacute; trị tr&ecirc;n 1 triệu đồng).....</p>', 1, 1, 1, '2023-04-15 02:36:46', '2023-04-16 01:08:07'),
(48, 13, 18, 'Sách Bungo Stray Dogs - Văn Hào Lưu Lạc - BEAST (Manga) (Boxset 4 Tập)', 'sach-bungo-stray-dogs-van-hao-luu-lac-beast-manga-boxset-4-tap_2023-04-16', 'product', '300000', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Danh Mục</p>\r\n\r\n			<p><a href=\"https://shopee.vn/\">Shopee</a><a href=\"https://shopee.vn/Nh%C3%A0-S%C3%A1ch-Online-cat.11036863\">Nh&agrave; S&aacute;ch Online</a><a href=\"https://shopee.vn/S%C3%A1ch-Ti%E1%BA%BFng-Vi%E1%BB%87t-cat.11036863.11108503\">S&aacute;ch Tiếng Việt</a><a href=\"https://shopee.vn/Truy%E1%BB%87n-Tranh-cat.11036863.11108503.11108505\">Truyện Tranh</a></p>\r\n\r\n			<p>Thương hiệu<a href=\"https://shopee.vn/search?brands=1255544\">FAHASA</a></p>\r\n\r\n			<p>Nhập khẩu/ trong nước</p>\r\n\r\n			<p>Trong nước</p>\r\n\r\n			<p>Ng&ocirc;n ngữ</p>\r\n\r\n			<p>Tiếng Việt</p>\r\n\r\n			<p>Xuất xứ</p>\r\n\r\n			<p>Trong nước</p>\r\n\r\n			<p>Loại nắp</p>\r\n\r\n			<p>B&igrave;a cứng</p>\r\n\r\n			<p>Loại phi&ecirc;n bản</p>\r\n\r\n			<p>Phi&ecirc;n bản h&agrave;ng năm</p>\r\n\r\n			<p>Nh&agrave; Ph&aacute;t H&agrave;nh</p>\r\n\r\n			<p>Nhiều nh&agrave; xuất bản</p>\r\n\r\n			<p>Năm xuất bản</p>\r\n\r\n			<p>2023</p>\r\n\r\n			<p>Kho h&agrave;ng</p>\r\n\r\n			<p>14</p>\r\n\r\n			<p>Gửi từ</p>\r\n\r\n			<p>TP. Hồ Ch&iacute; Minh</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'Sách Bungo Stray Dogs - Văn Hào Lưu Lạc - BEAST (Manga) (Boxset 4 Tập)', '<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh: IPM Nh&agrave; xuất bản: NXB Hồng Đức T&aacute;c giả: Nhiều t&aacute;c giả Loại b&igrave;a: Bộ Hộp Số trang: 836 Năm xuất bản: 2023 Bungo Stray Dogs - Văn H&agrave;o Lưu Lạc - BEAST (Manga) (Boxset 4 Tập) VĂN H&Agrave;O LƯU LẠC - BEAST l&agrave; một thế giới khả năng của VĂN H&Agrave;O LƯU LẠC, m&agrave; trong đ&oacute; ch&oacute; săn của Port Mafia l&agrave; Akutagawa nay trở th&agrave;nh nh&acirc;n vi&ecirc;n c&ocirc;ng ty th&aacute;m tử, c&ograve;n nh&acirc;n vi&ecirc;n c&ocirc;ng ty th&aacute;m tử l&agrave; Atsushi nay đứng v&agrave;o h&agrave;ng ngũ Port Mafia. Vẫn gay cấn, hồi hộp tới nghẹt thở. Vẫn h&agrave;m chứa nhiều li&ecirc;n tưởng, suy ngẫm. Trong VĂN H&Agrave;O LƯU LẠC - BEAST, kh&ocirc;ng chỉ c&aacute;c văn h&agrave;o &ldquo;lưu lạc&rdquo; trong những trận chiến kiếm t&igrave;m bản ng&atilde; v&agrave; sự thật, m&agrave; ch&iacute;nh người đọc cũng sẽ &ldquo;lưu lạc&rdquo; từ bất ngờ n&agrave;y sang bất ngờ kh&aacute;c để t&igrave;m kiếm &ldquo;ch&igrave;a kh&oacute;a&rdquo; giải m&atilde; cốt truyện.</p>', 1, 1, 1, '2023-04-16 03:47:02', '2023-04-16 03:50:42'),
(49, 12, 19, 'Arya Bàn Bên Thỉnh Thoảng Lại Trêu Ghẹo Tôi Bằng Tiếng Nga - Tập 1', 'arya-ban-ben-thinh-thoang-lai-treu-gheo-toi-bang-tieng-nga-tap-1_2023-04-19', 'product', '95000', '<p>Danh Mục</p>\r\n\r\n<p><a href=\"https://shopee.vn/\">Shopee</a><a href=\"https://shopee.vn/Nh%C3%A0-S%C3%A1ch-Online-cat.11036863\">Nh&agrave; S&aacute;ch Online</a><a href=\"https://shopee.vn/S%C3%A1ch-Ti%E1%BA%BFng-Vi%E1%BB%87t-cat.11036863.11108503\">S&aacute;ch Tiếng Việt</a><a href=\"https://shopee.vn/Ti%E1%BB%83u-thuy%E1%BA%BFt-ng%E1%BA%AFn-cat.11036863.11108503.11108519\">Tiểu thuyết ngắn</a></p>\r\n\r\n<p>Thương hiệu<a href=\"https://shopee.vn/search?brands=3362549\">SUNSUNSUN</a></p>\r\n\r\n<p>Ng&ocirc;n ngữ</p>\r\n\r\n<p>Tiếng Việt</p>\r\n\r\n<p>Nhập khẩu/ trong nước</p>\r\n\r\n<p>Trong nước</p>\r\n\r\n<p>Kho h&agrave;ng</p>\r\n\r\n<p>17</p>\r\n\r\n<p>Gửi từ</p>\r\n\r\n<p>Quận Thanh Xu&acirc;n, H&agrave; Nội</p>', 'Arya Bàn Bên Thỉnh Thoảng Lại Trêu Ghẹo Tôi Bằng Tiếng Nga - Tập 1', '<p>T&ecirc;n Nh&agrave; Cung Cấp NXB Kim Đồng - Wings Books</p>\r\n\r\n<p>T&aacute;c giả: SUNSUNSUN</p>\r\n\r\n<p>Họa sĩ: MOMOCO</p>\r\n\r\n<p>Thể loại: ROMCOM, HỌC ĐƯỜNG</p>\r\n\r\n<p>NXB NXB Kim Đồng</p>\r\n\r\n<p>Năm XB 2022</p>\r\n\r\n<p>Ng&ocirc;n Ngữ Tiếng Việt</p>\r\n\r\n<p>Trọng lượng (gr) 500</p>\r\n\r\n<p>K&iacute;ch Thước Bao B&igrave; 19 x 13 cm</p>\r\n\r\n<p>Số trang 296 trang đen trắng + 8 trang m&agrave;u</p>\r\n\r\n<p>Gi&aacute; b&igrave;a: 95.000đ (Bản phổ th&ocirc;ng) &amp; 125.000đ (Bản boxset )</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Qu&agrave; tặng đặc biệt:</p>\r\n\r\n<p>+ Bản boxset: 01 bookmark bo g&oacute;c + 01 m&oacute;c kh&oacute;a</p>\r\n\r\n<p>+ Bản phổ th&ocirc;ng: 01 bookmark bế h&igrave;nh + 01 b&igrave;a &aacute;o đặc biệt</p>\r\n\r\n<p>(*) Bản boxset k&egrave;m Poster khổ lớn, chất liệu in d&agrave;y dặn, số lượng c&oacute; hạn</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>#Lưu &yacute;: Đối với mỗi đơn h&agrave;ng đặt Phi&ecirc;n bản &lt;&lt;S&aacute;ch c&oacute; tặng k&egrave;m poster&gt;&gt;, nh&agrave; s&aacute;ch chỉ nhận gửi MỖI ĐƠN 1 POSTER, đơn n&agrave;o đặt phi&ecirc;n bản &lt;&lt;S&aacute;ch c&oacute; tặng k&egrave;m poster&gt;&gt; nhiều hơn số lượng 1 cuốn b&ecirc;n m&igrave;nh gửi đủ số s&aacute;ch nhưng CHỈ GỬI 1 POSTER, kh&aacute;ch h&agrave;ng lưu &yacute; để chọn đ&uacute;ng phi&ecirc;n bản tr&aacute;nh việc tăng chi ph&iacute; khi đặt mua h&agrave;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Giới thiệu s&aacute;ch:</p>\r\n\r\n<p>&ldquo;Hở, g&igrave; thế?&rdquo;</p>\r\n\r\n<p>&ldquo;C&oacute; g&igrave; đ&acirc;u? T&ocirc;i n&oacute;i &lsquo;C&aacute;i t&ecirc;n n&agrave;y đ&uacute;ng l&agrave; đồ ngốc&rsquo; &yacute; m&agrave;.&rdquo;</p>\r\n\r\n<p>&ldquo;Cậu th&ocirc;i c&aacute;i tr&ograve; mắng người ta bằng tiếng Nga đi!?&rdquo;</p>\r\n\r\n<p>Arya - c&ocirc; n&agrave;ng xinh đẹp tuyệt trần c&oacute; m&aacute;i t&oacute;c bạch kim ngồi cạnh t&ocirc;i - đang nở một nụ cười đắc thắng... Nhưng sự thật th&igrave;, c&acirc;u tiếng Nga c&ocirc; ấy vừa n&oacute;i c&oacute; nghĩa l&agrave; [H&atilde;y để &yacute; đến t&ocirc;i đi] cơ!</p>\r\n\r\n<p>T&ocirc;i - Kuze Masachika - l&agrave; người c&oacute; khả năng nghe hiểu tiếng Nga th&ocirc;ng thạo như người bản xứ. Nhưng kh&ocirc;ng hề hay biết điều đ&oacute;, c&ocirc; n&agrave;ng Arya h&ocirc;m nay vẫn tiếp tục thể hiện những cảm x&uacute;c rất ngọt ng&agrave;o bằng tiếng Nga khiến t&ocirc;i kh&ocirc;ng thể ngừng cười!?</p>\r\n\r\n<p>C&acirc;u chuyện t&igrave;nh thanh xu&acirc;n h&agrave;i hước của t&ocirc;i với c&ocirc; n&agrave;ng nữ sinh trung học gốc Nga ho&agrave;n hảo đ&atilde; bắt đầu như thế...</p>', 1, NULL, 1, '2023-04-19 00:40:22', '2023-04-19 00:40:22'),
(50, 12, 21, 'Date A Live - Tập 13 - NIA CREATION', 'date-a-live-tap-13-nia-creation_2023-04-19', 'product', '138000', '<p>Danh Mục</p>\r\n\r\n<p><a href=\"https://shopee.vn/\">Shopee</a><a href=\"https://shopee.vn/Nh%C3%A0-S%C3%A1ch-Online-cat.11036863\">Nh&agrave; S&aacute;ch Online</a><a href=\"https://shopee.vn/S%C3%A1ch-Ti%E1%BA%BFng-Vi%E1%BB%87t-cat.11036863.11108503\">S&aacute;ch Tiếng Việt</a><a href=\"https://shopee.vn/Ti%E1%BB%83u-thuy%E1%BA%BFt-ng%E1%BA%AFn-cat.11036863.11108503.11108519\">Tiểu thuyết ngắn</a></p>\r\n\r\n<p>Thương hiệu<a href=\"https://shopee.vn/search?brands=1255900\">Koushi Tachibana</a></p>\r\n\r\n<p>Loại phi&ecirc;n bản</p>\r\n\r\n<p>Phi&ecirc;n bản th&ocirc;ng thường</p>\r\n\r\n<p>Ng&ocirc;n ngữ</p>\r\n\r\n<p>Tiếng Việt</p>\r\n\r\n<p>Nhập khẩu/ trong nước</p>\r\n\r\n<p>Trong nước</p>\r\n\r\n<p>Địa chỉ tổ chức chịu tr&aacute;ch nhiệm sản xuất</p>\r\n\r\n<p>Đang cập nhật</p>\r\n\r\n<p>ISBN</p>\r\n\r\n<p>978-604-382-296-0</p>\r\n\r\n<p>Năm xuất bản</p>\r\n\r\n<p>2022</p>\r\n\r\n<p>Nh&agrave; Ph&aacute;t H&agrave;nh</p>\r\n\r\n<p>AMAK</p>\r\n\r\n<p>Kho h&agrave;ng</p>\r\n\r\n<p>364</p>\r\n\r\n<p>Gửi từ</p>\r\n\r\n<p>H&agrave; Nội</p>', 'Date A Live - Tập 13 - NIA CREATION', '<p>T&aacute;c giả: Koushi Tachibana</p>\r\n\r\n<p>Minh họa: Tsunako</p>\r\n\r\n<p>Dịch giả: Touno Shi&nbsp;</p>\r\n\r\n<p>Thể loại: Light Novel</p>\r\n\r\n<p>Khổ s&aacute;ch: 13x18cm</p>\r\n\r\n<p>Số trang: 362 trang (8 trang m&agrave;u, 356 trang đen trắng)</p>\r\n\r\n<p>ISBN: 978-604-382-296-0</p>\r\n\r\n<p>NXB li&ecirc;n kết: NXB H&agrave; Nội</p>\r\n\r\n<p>Qu&agrave; tặng k&egrave;m:</p>\r\n\r\n<p>Bản thường: 2 Bookmark, 1 Postcard. Gi&aacute; b&igrave;a 128.000đ</p>\r\n\r\n<p>Bản boxset 1: gồm hộp đựng, s&aacute;ch k&egrave;m 2 Bookmark, 1 Postcard, 1 vỏ gối 40x60cm (kh&ocirc;ng k&egrave;m ruột), 1 poster A3 (mẫu 1). Gi&aacute; b&igrave;a: 258.000đ</p>\r\n\r\n<p>Bản boxset 2:&nbsp;gồm hộp đựng, s&aacute;ch k&egrave;m 2 Bookmark, 1 Postcard, 1 l&oacute;t chuột kt 22x26cm, set 10 postcard đặc biệt, 1 poster A3 (mẫu 2). Gi&aacute; b&igrave;a: 258.000đ</p>\r\n\r\n<p>Ph&aacute;t h&agrave;nh: 30/11/2022</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Giới thiệu:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Cuối th&aacute;ng 12, khi lễ Gi&aacute;ng sinh vừa tr&ocirc;i qua, Itsuka Shidou v&ocirc; t&igrave;nh gặp được Nia - tinh linh số 9 đang đ&oacute;i lả b&ecirc;n vệ đường.&nbsp;</p>\r\n\r\n<p>&ldquo;Cứ đ&agrave; n&agrave;y chắc phải hủy bản thảo số tiếp theo mất th&ocirc;i&hellip;&rdquo;</p>\r\n\r\n<p>V&igrave; một l&yacute; do n&agrave;o đ&oacute;, Shidou đ&agrave;nh phải trợ gi&uacute;p Nia trong c&ocirc;ng việc vẽ truyện tranh ở nh&agrave; của c&ocirc;, b&ecirc;n cạnh đ&oacute; cậu c&ograve;n biết được rằng c&ocirc; ch&iacute;nh l&agrave; Tinh linh bị DEM giam giữ&hellip; Cả hội l&ecirc;n kế hoạch phong ấn Linh lực của Nia bằng một cuộc hẹn ở Akihabara y&ecirc;u dấu của c&ocirc;, thế nhưng&hellip;</p>\r\n\r\n<p>&ldquo;Thực ra t&ocirc;i&hellip;chỉ y&ecirc;u những thứ l&agrave; 2D th&ocirc;i&hellip;&rdquo;</p>\r\n\r\n<p>Giữa chừng cuộc hẹn h&ograve; ng&agrave;y h&ocirc;m đ&oacute;, cậu lại nghe được ph&aacute;t ng&ocirc;n g&acirc;y chấn động n&agrave;y của Nia!?</p>\r\n\r\n<p>Liệu Shidou c&oacute; thể ph&aacute; vỡ r&agrave;o cản về kh&ocirc;ng gian, k&eacute;o Tinh linh họa sĩ truyện tranh ki&ecirc;m otaku n&agrave;y khỏi thế giới 2D, hẹn h&ograve; với c&ocirc; n&agrave;ng v&agrave; khiến Nia y&ecirc;u m&igrave;nh kh&ocirc;ng!?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>#amak #ln #lightnovel #datealive #date_a_live #nia&nbsp;</p>', 1, NULL, 1, '2023-04-19 00:50:18', '2023-04-19 00:50:18'),
(51, 12, 22, 'Gửi Em Của Mười Năm Sau', 'gui-em-cua-muoi-nam-sau_2023-04-19', 'product', '129000', '<p>Danh Mục</p>\r\n\r\n<p><a href=\"https://shopee.vn/\">Shopee</a><a href=\"https://shopee.vn/Nh%C3%A0-S%C3%A1ch-Online-cat.11036863\">Nh&agrave; S&aacute;ch Online</a><a href=\"https://shopee.vn/S%C3%A1ch-Ti%E1%BA%BFng-Vi%E1%BB%87t-cat.11036863.11108503\">S&aacute;ch Tiếng Việt</a><a href=\"https://shopee.vn/Ti%E1%BB%83u-thuy%E1%BA%BFt-ng%E1%BA%AFn-cat.11036863.11108503.11108519\">Tiểu thuyết ngắn</a></p>\r\n\r\n<p>Thương hiệu<a href=\"https://shopee.vn/search?brands=1256146\">Natsuki Amasawa</a></p>\r\n\r\n<p>Loại phi&ecirc;n bản</p>\r\n\r\n<p>Phi&ecirc;n bản th&ocirc;ng thường</p>\r\n\r\n<p>Ng&ocirc;n ngữ</p>\r\n\r\n<p>Tiếng Việt</p>\r\n\r\n<p>Nhập khẩu/ trong nước</p>\r\n\r\n<p>Trong nước</p>\r\n\r\n<p>Loại nắp</p>\r\n\r\n<p>B&igrave;a mềm</p>\r\n\r\n<p>Nh&agrave; Ph&aacute;t H&agrave;nh</p>\r\n\r\n<p>Tsuki LightNovel</p>\r\n\r\n<p>ISBN</p>\r\n\r\n<p>9786043457452</p>\r\n\r\n<p>Năm xuất bản</p>\r\n\r\n<p>2022</p>\r\n\r\n<p>Kho h&agrave;ng</p>\r\n\r\n<p>12</p>\r\n\r\n<p>Gửi từ</p>\r\n\r\n<p>Quận T&acirc;y Hồ, H&agrave; Nội</p>', 'Gửi Em Của Mười Năm Sau', '<p>Gửi Em Của Mười Năm Sau ISBN 9786043457452 M&atilde; c&ocirc;ng ty 8935325004513 Qu&agrave; tặng 01 bookmark C&ocirc;ng ty ph&aacute;t h&agrave;nh Tsuki LightNovel Nh&agrave; xuất bản NXB THẾ GIỚI K&iacute;ch thước 13 x 18 cm T&aacute;c giả Natsuki Amasawa Dịch giả Kam Tr&ograve;n Loại b&igrave;a B&igrave;a mềm (c&oacute; b&igrave;a &aacute;o) Số trang 400 trang + 2 trang m&agrave;u Ng&agrave;y xuất bản 21/3/2022 Gi&aacute; b&igrave;a 129.000 VNĐ * * * Giới thiệu s&aacute;ch: Gửi Em Của Mười Năm Sau C&acirc;u chuyện thanh xu&acirc;n của s&aacute;u học sinh trung học lạc lối được kết nối với nhau th&ocirc;ng qua chiếc hộp thời gian. Chihiro, c&ocirc; g&aacute;i đang ở trong một mối quan hệ mập mờ m&agrave; bản th&acirc;n kh&ocirc;ng gh&eacute;t nhưng cũng kh&ocirc;ng hề cảm thấy hứng th&uacute;. Touya, cựu cầu thủ đ&atilde; trốn khỏi c&aacute;c hoạt động của c&acirc;u lạc bộ b&oacute;ng đ&aacute;. Yuu, một cậu b&eacute; hư đang học bổ t&uacute;c tại trường. Minatsu, người đang ngột ngạt trong cuộc sống của một c&ocirc; g&aacute;i. Tokiko, một người kh&ocirc;ng bao giờ muốn rời khỏi nh&agrave; nửa bước. V&agrave; một Akira vẫn lu&ocirc;n nghĩ về người con g&aacute;i đ&atilde; từng c&atilde;i nhau hồi c&ograve;n tiểu học. Bức thư gửi &quot;T&ocirc;i b&acirc;y giờ&quot; m&agrave; t&ocirc;i viết mười năm trước sẽ thay đổi vận mệnh của họ từng ch&uacute;t một. Đ&acirc;y l&agrave; t&aacute;c phẩm về thanh xu&acirc;n kh&ocirc;ng thể bỏ lỡ đến từ Natsuki Amasawa - t&aacute;c giả của cuốn tiểu thuyết ăn kh&aacute;ch &ldquo;V&agrave; rồi, th&aacute;ng 9 kh&ocirc;ng c&oacute; cậu đ&atilde; tới&rdquo; v&agrave; cũng l&agrave; người từng đạt giải của Giải thưởng tiểu thuyết Dengeki lần thứ 19. C&acirc;u chuyện với những g&oacute;c nh&igrave;n của c&aacute;c nh&acirc;n vật sẽ b&oacute;c t&aacute;ch từng mảng tối trong t&acirc;m l&iacute;, đưa đến &yacute; nghĩa thật sự của t&igrave;nh y&ecirc;u v&agrave; thắp s&aacute;ng ước mơ của những c&aacute;i t&ocirc;i đang ch&ecirc;nh v&ecirc;nh trong cuộc đời. ----------------------------- TR&Iacute;CH DẪN S&Aacute;CH: Hồi b&eacute;, tr&aacute;i tim t&ocirc;i từng c&oacute; những &ocirc; cửa sổ v&agrave; t&ocirc;i thường mở toang ch&uacute;ng ra. Nhưng năm th&aacute;ng tr&ocirc;i qua, t&ocirc;i đ&atilde; lần lượt đ&oacute;ng từng &ocirc; cửa sổ đ&oacute; lại. T&ocirc;i đ&atilde; l&agrave;m điều đ&oacute; một c&aacute;ch v&ocirc; thức, hoặc&hellip; cố &yacute;. &Iacute;t nhất, l&uacute;c t&ocirc;i vẽ tranh c&ugrave;ng Akira, những &ocirc; cửa sổ của tr&aacute;i tim t&ocirc;i đều được mở hết. Cuối c&ugrave;ng, ch&uacute;ng t&ocirc;i chia tay sau một trận c&atilde;i cọ&hellip; C&oacute; lẽ trong khi cố gắng hết sức đ&oacute;ng chặt k&iacute; ức để kh&ocirc;ng nhớ lại ch&uacute;ng th&igrave; t&ocirc;i cũng đ&oacute;ng lu&ocirc;n cả những &ocirc; cửa sổ của tr&aacute;i tim.</p>', 1, NULL, 1, '2023-04-19 00:57:34', '2023-04-19 00:57:34'),
(52, 12, 23, 'Re: Zero Bắt Đầu Lại Ở Thế Giới Khác (Light Novel) - Tập 12', 're-zero-bat-dau-lai-o-the-gioi-khac-light-novel-tap-12_2023-04-19', 'product', '120000', '<p>Danh Mục</p>\r\n\r\n<p><a href=\"https://shopee.vn/\">Shopee</a><a href=\"https://shopee.vn/Nh%C3%A0-S%C3%A1ch-Online-cat.11036863\">Nh&agrave; S&aacute;ch Online</a><a href=\"https://shopee.vn/S%C3%A1ch-Ti%E1%BA%BFng-Vi%E1%BB%87t-cat.11036863.11108503\">S&aacute;ch Tiếng Việt</a><a href=\"https://shopee.vn/Ti%E1%BB%83u-thuy%E1%BA%BFt-ng%E1%BA%AFn-cat.11036863.11108503.11108519\">Tiểu thuyết ngắn</a></p>\r\n\r\n<p>Thương hiệu<a href=\"https://shopee.vn/search?brands=1146015\">Tappei Nagatsuki</a></p>\r\n\r\n<p>Ng&ocirc;n ngữ</p>\r\n\r\n<p>Tiếng Việt</p>\r\n\r\n<p>Nhập khẩu/ trong nước</p>\r\n\r\n<p>Trong nước</p>\r\n\r\n<p>Kho h&agrave;ng</p>\r\n\r\n<p>2</p>\r\n\r\n<p>Gửi từ</p>\r\n\r\n<p>Quận Thanh Xu&acirc;n, H&agrave; Nội</p>', 'Re: Zero Bắt Đầu Lại Ở Thế Giới Khác (Light Novel) - Tập 12', '<p>T&ecirc;n Nh&agrave; Cung Cấp IPM</p>\r\n\r\n<p>T&aacute;c giả Tappei Nagatsuki</p>\r\n\r\n<p>NXB NXB Hồng Đức</p>\r\n\r\n<p>Thời gian ph&aacute;t h&agrave;nh dự kiến: 4/5/2022</p>\r\n\r\n<p>Ng&ocirc;n Ngữ Tiếng Việt</p>\r\n\r\n<p>Trọng lượng (gr) 300</p>\r\n\r\n<p>K&iacute;ch Thước Bao B&igrave; 18 x 13 cm</p>\r\n\r\n<p>Số trang 408</p>\r\n\r\n<p>H&igrave;nh thức B&igrave;a Mềm</p>\r\n\r\n<p>Thể loại: light novel, isekai</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Qu&agrave; tặng đi k&egrave;m cho lần ph&aacute;t h&agrave;nh đẩu ti&ecirc;n v&agrave; những kh&aacute;c h&agrave;ng mua sớm nhất: Bookmark PVC in m&agrave;u (SỐ LƯỢNG C&Oacute; HẠN)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Giới thiệu s&aacute;ch:</p>\r\n\r\n<p>Cứ mỗi lần lặp lại, Th&aacute;nh vực lại ph&aacute;t triển theo một diễn biến kh&aacute;c với k&iacute; ức của Subaru. Ở lượt lặp thứ tư, cậu đ&atilde; gi&aacute;p mặt một kẻ đ&aacute;ng ra kh&ocirc;ng n&ecirc;n tồn tại: Ph&ugrave; thủy Đố kị.</p>\r\n\r\n<p>Khi Th&aacute;nh vực bị b&oacute;ng ảnh nuốt chửng, Garfiel d&ugrave; đối địch với Subaru vẫn ra sức tương trợ. Nhờ đ&oacute; Subaru t&igrave;m ra sự thật về nơi chốn vốn l&agrave; tr&agrave;ng th&iacute; nghiệm thất bại n&agrave;y&hellip; Nhưng cuối c&ugrave;ng tất cả vẫn cười nhạo v&agrave;o nỗ lực của cậu, v&agrave; thế giới bị v&ugrave;i lấp trong kết cục trắng to&aacute;t.</p>\r\n\r\n<p>Hi vọng rồi tuyệt vọng, kh&aacute;m ph&aacute; sự thật để rồi suy sụp, Subaru vẫn kh&ocirc;ng từ bỏ tương lai, cậu đi tới phần mộ với mong muốn hỏi &yacute; kiến ph&ugrave; thủy. Ở đ&acirc;y, cậu phải đối mặt với &ldquo;hiện tại kh&ocirc;ng n&ecirc;n tồn tại&rdquo;&hellip;</p>\r\n\r\n<p>&ldquo;Kh&ocirc;ng đứng l&ecirc;n được nữa &agrave;, Subaru?&rdquo;</p>\r\n\r\n<p>Re:Zero đang v&eacute;n l&ecirc;n bức m&agrave;n thứ 12 đầy chờ mong v&agrave; phản bội&hellip;</p>', 1, NULL, 1, '2023-04-19 01:06:55', '2023-04-19 01:06:55'),
(53, 12, 24, 'GAMERS! 5 - Các game thủ và đòn Game Over tuyệt diệt', 'gamers-5-cac-game-thu-va-don-game-over-tuyet-diet_2023-04-19', 'product', '108000', '<p>Danh Mục</p>\r\n\r\n<p><a href=\"https://shopee.vn/\">Shopee</a><a href=\"https://shopee.vn/Nh%C3%A0-S%C3%A1ch-Online-cat.11036863\">Nh&agrave; S&aacute;ch Online</a><a href=\"https://shopee.vn/S%C3%A1ch-Ti%E1%BA%BFng-Vi%E1%BB%87t-cat.11036863.11108503\">S&aacute;ch Tiếng Việt</a><a href=\"https://shopee.vn/Ti%E1%BB%83u-thuy%E1%BA%BFt-ng%E1%BA%AFn-cat.11036863.11108503.11108519\">Tiểu thuyết ngắn</a></p>\r\n\r\n<p>Thương hiệu<a href=\"https://shopee.vn/search?brands=1191057\">SEKINA AOI</a></p>\r\n\r\n<p>Ng&ocirc;n ngữ</p>\r\n\r\n<p>Tiếng Việt</p>\r\n\r\n<p>Nhập khẩu/ trong nước</p>\r\n\r\n<p>Trong nước</p>\r\n\r\n<p>Nh&agrave; Ph&aacute;t H&agrave;nh</p>\r\n\r\n<p>Amak</p>\r\n\r\n<p>Kho h&agrave;ng</p>\r\n\r\n<p>141</p>\r\n\r\n<p>Gửi từ</p>\r\n\r\n<p>H&agrave; Nội</p>', 'GAMERS! 5 - Các game thủ và đòn Game Over tuyệt diệt', '<p>TH&Ocirc;NG B&Aacute;O PH&Aacute;T H&Agrave;NH - GAMERS! 5 - C&aacute;c game thủ v&agrave; đ&ograve;n Game Over tuyệt diệt</p>\r\n\r\n<p>T&aacute;c giả: Sekina Aoi</p>\r\n\r\n<p>Minh họa: Sabotenn</p>\r\n\r\n<p>Dịch giả: Cupid</p>\r\n\r\n<p>Thể loại: Light Novel</p>\r\n\r\n<p>Khổ s&aacute;ch: 13x18cm</p>\r\n\r\n<p>Số trang: 264 trang&nbsp;</p>\r\n\r\n<p>ISBN: 978-604-374-577-1</p>\r\n\r\n<p>NXB li&ecirc;n kết: NXB H&agrave; Nội</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Qu&agrave; tặng k&egrave;m: 01 bookmark bế h&igrave;nh 10x15cm, 01 standee giấy 10x17cm, 01 poster A3,</p>\r\n\r\n<p>Qu&agrave; tặng giới hạn th&ecirc;m cho s&aacute;ch: m&oacute;c kh&oacute;a nh&acirc;n vật c&oacute; tem độc quyền Kadokawa (d&agrave;nh cho 200 đơn đầu ti&ecirc;n)</p>\r\n\r\n<p>Ph&aacute;t h&agrave;nh: 25/02/2023</p>\r\n\r\n<p>Giới thiệu:</p>\r\n\r\n<p>&ldquo;Ưu ti&ecirc;n Aguri hơn việc chơi game&rdquo;, Amano Keita, một nh&acirc;n vật ch&iacute;nh tầm thường như quần ch&uacute;ng, đ&atilde; ph&aacute; vỡ thiết lập nh&acirc;n vật của m&igrave;nh. Chưa kể c&ograve;n &ldquo;chim chuột&rdquo; với Chiaki ở qu&aacute;n ăn gia đ&igrave;nh, xxx với Konoha giống như game khi&ecirc;u d&acirc;m, c&oacute; kh&aacute;c g&igrave; nh&acirc;n vật ch&iacute;nh trong tiểu thuyết harem đ&acirc;u chứ! Uehara v&agrave; Tendo kh&ocirc;ng c&aacute;ch n&agrave;o ch&uacute;c ph&uacute;c được cho c&aacute;i thế giới kh&ocirc;ng hề tuyệt vời n&agrave;y. Mặc d&ugrave; rất muốn bắt đầu lại từ con số 0 từ thế giới kh&aacute;c, nhưng phong c&aacute;ch của t&aacute;c phẩm lại kh&ocirc;ng cho ph&eacute;p chuyển trường&hellip;</p>\r\n\r\n<p>Nếu thế, chỉ c&ograve;n c&aacute;ch x&acirc;y dựng từ sự đ&atilde; rồi!</p>\r\n\r\n<p>Ch&iacute;nh v&igrave; vậy s&acirc;n khấu ch&iacute;nh sẽ l&agrave; &ldquo;Vương quốc Spiel&rdquo; (c&ocirc;ng vi&ecirc;n giải tr&iacute;), nơi to&aacute;t l&ecirc;n cảm gi&aacute;c của một th&agrave;nh phố nh&agrave;m ch&aacute;n trong phần giữa của dạng game nhập vai RPG! Cuộc đấu tr&iacute; khốc liệt giữa những gamer chuy&ecirc;n g&acirc;y rắc rối ch&iacute;nh thức bắt đầu!</p>\r\n\r\n<p>M&agrave;, kh&ocirc;ng thể giải quyết được ở trong game &agrave;!?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>#amak #rom_com #gamers5 #lightnovel</p>', 1, NULL, 1, '2023-04-19 01:12:56', '2023-04-19 01:12:56'),
(54, 12, 21, 'Kỵ sĩ rồng bất bại', 'ky-si-rong-bat-bai_2023-04-19', 'product', '99000', '<p>Danh Mục</p>\r\n\r\n<p><a href=\"https://shopee.vn/\">Shopee</a><a href=\"https://shopee.vn/Nh%C3%A0-S%C3%A1ch-Online-cat.11036863\">Nh&agrave; S&aacute;ch Online</a><a href=\"https://shopee.vn/S%C3%A1ch-Ti%E1%BA%BFng-Vi%E1%BB%87t-cat.11036863.11108503\">S&aacute;ch Tiếng Việt</a><a href=\"https://shopee.vn/Ti%E1%BB%83u-thuy%E1%BA%BFt-ng%E1%BA%AFn-cat.11036863.11108503.11108519\">Tiểu thuyết ngắn</a></p>\r\n\r\n<p>Thương hiệu<a href=\"https://shopee.vn/search?brands=1242490\">Senri Akatsuki</a></p>\r\n\r\n<p>Loại phi&ecirc;n bản</p>\r\n\r\n<p>Phi&ecirc;n bản th&ocirc;ng thường</p>\r\n\r\n<p>Ng&ocirc;n ngữ</p>\r\n\r\n<p>Tiếng Việt</p>\r\n\r\n<p>Nhập khẩu/ trong nước</p>\r\n\r\n<p>Trong nước</p>\r\n\r\n<p>Loại nắp</p>\r\n\r\n<p>B&igrave;a mềm</p>\r\n\r\n<p>Nh&agrave; Ph&aacute;t H&agrave;nh</p>\r\n\r\n<p>Zgroup</p>\r\n\r\n<p>Năm xuất bản</p>\r\n\r\n<p>2017</p>\r\n\r\n<p>Kho h&agrave;ng</p>\r\n\r\n<p>180</p>\r\n\r\n<p>Gửi từ</p>\r\n\r\n<p>Quận Đống Đa, H&agrave; Nội</p>', 'Kỵ sĩ rồng bất bại', '<p>T&ecirc;n Nh&agrave; Cung Cấp Zgroup T&aacute;c giả Akatsuki Senri Người Dịch Trang Kumi NXB H&agrave; Nội Năm XB 07-2017 Trọng lượng (gr) 150 K&iacute;ch Thước Bao B&igrave; 13 x 18 Số trang 328 H&igrave;nh thức B&igrave;a Mềm Giới thiệu s&aacute;ch: Năm năm trước, Lux - ho&agrave;ng tử của Đế quốc cũ, Đế quốc đ&atilde; bị lật đổ sau cuộc C&aacute;ch mạng của người d&acirc;n, do lạc đường m&agrave; đi nhầm v&agrave;o ph&ograve;ng tắm của k&yacute; t&uacute;c x&aacute; nữ rồi xảy ra cuộc gặp gỡ định mệnh với Lisesharte - c&ocirc;ng ch&uacute;a của T&acirc;n vương quốc. &ldquo;Định cưỡi l&ecirc;n ta đến khi n&agrave;o hả đồ biến th&aacute;iiiii!&rdquo; C&ugrave;ng với Long gi&aacute;p - vũ kh&iacute; cổ đại được khai quật từ T&agrave;n t&iacute;ch. Lux từng được gọi l&agrave; Kỵ sĩ rồng v&ocirc; địch. Nay Lux bị chuyển sang gọi l&agrave; Kỵ sĩ rồng tối nhược v&ocirc; địch do c&aacute;ch đ&aacute;nh tuyệt đối kh&ocirc;ng tấn c&ocirc;ng đối thủ trước. Lisesharte th&aacute;ch đấu Lux. Sau trận quyết chiến đ&oacute;, chẳng hiểu thế n&agrave;o m&agrave; Lux lại nhập học trường nữ sinh chuy&ecirc;n đ&agrave;o tạo Kỵ sĩ rồng&hellip;!? C&acirc;u truyện về Lux - ho&agrave;ng tử sa cơ lu&ocirc;n được c&aacute;c tiểu thư con nh&agrave; quyền qu&yacute;, vốn l&agrave; học sinh của học viện sĩ quan vương lập v&acirc;y quanh - bắt đầu. Xoay quanh c&aacute;ch l&agrave;m vua v&agrave; c&aacute;ch cai trị đất nước, học viện Fantasy Battle &ldquo;v&ocirc; địch&rdquo; mở m&agrave;n! ĐẶC BIỆT LƯU Ý: Các bạn vui lòng quay clip mở hàng để được giải quyết các vấn đề về sản phẩm. Vui lòng liên hệ fanpage Cẩm Phong Showroom để được giải đáp nhanh nhất.</p>', 1, NULL, 1, '2023-04-19 01:16:37', '2023-04-19 01:16:37'),
(55, 12, 22, 'Hành Trình Trở Thành Nhà Thám Hiểm Của Chàng Lính Đánh Thuê Bần Hàn (Tập 3)', 'hanh-trinh-tro-thanh-nha-tham-hiem-cua-chang-linh-danh-thue-ban-han-tap-3_2023-04-19', 'product', '139000', '<p>Danh Mục</p>\r\n\r\n<p><a href=\"https://shopee.vn/\">Shopee</a><a href=\"https://shopee.vn/Nh%C3%A0-S%C3%A1ch-Online-cat.11036863\">Nh&agrave; S&aacute;ch Online</a><a href=\"https://shopee.vn/S%C3%A1ch-Ti%E1%BA%BFng-Vi%E1%BB%87t-cat.11036863.11108503\">S&aacute;ch Tiếng Việt</a><a href=\"https://shopee.vn/Ti%E1%BB%83u-thuy%E1%BA%BFt-ng%E1%BA%AFn-cat.11036863.11108503.11108519\">Tiểu thuyết ngắn</a></p>\r\n\r\n<p>Thương hiệu<a href=\"https://shopee.vn/search?brands=2274238\">m.i.n.e</a></p>\r\n\r\n<p>Loại phi&ecirc;n bản</p>\r\n\r\n<p>Phi&ecirc;n bản th&ocirc;ng thường</p>\r\n\r\n<p>Ng&ocirc;n ngữ</p>\r\n\r\n<p>Tiếng Việt</p>\r\n\r\n<p>Nhập khẩu/ trong nước</p>\r\n\r\n<p>Trong nước</p>\r\n\r\n<p>Loại nắp</p>\r\n\r\n<p>B&igrave;a mềm</p>\r\n\r\n<p>ISBN</p>\r\n\r\n<p>9786043921809</p>\r\n\r\n<p>Năm xuất bản</p>\r\n\r\n<p>2023</p>\r\n\r\n<p>Nh&agrave; Ph&aacute;t H&agrave;nh</p>\r\n\r\n<p>Tsuki LightNovel</p>\r\n\r\n<p>Kho h&agrave;ng</p>\r\n\r\n<p>100</p>\r\n\r\n<p>Gửi từ</p>\r\n\r\n<p>Quận T&acirc;y Hồ, H&agrave; Nội</p>', 'Hành Trình Trở Thành Nhà Thám Hiểm Của Chàng Lính Đánh Thuê Bần Hàn (Tập 3)', '<p>H&agrave;nh Tr&igrave;nh Trở Th&agrave;nh Nh&agrave; Th&aacute;m Hiểm Của Ch&agrave;ng L&iacute;nh Đ&aacute;nh Thu&ecirc; Bần H&agrave;n (Tập 3)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>T&aacute;c giả Mine</p>\r\n\r\n<p>Dịch giả Kam Tr&ograve;n</p>\r\n\r\n<p>Thể loại Light Novel</p>\r\n\r\n<p>K&iacute;ch thước 13x18 cm</p>\r\n\r\n<p>Nh&agrave; xuất bản Thế Giới</p>\r\n\r\n<p>Thương hiệu Tsuki LightNovel</p>\r\n\r\n<p>Gi&aacute; b&igrave;a 139.000 VNĐ</p>\r\n\r\n<p>Qu&agrave; tặng k&egrave;m</p>\r\n\r\n<p>- Bản thường: Bookmark</p>\r\n\r\n<p>- Bản đặc biệt: Bookmark + standee card + ticket</p>\r\n\r\n<p>M&atilde; code 8935325011139</p>\r\n\r\n<p>M&atilde; ISBN 9786043921809</p>\r\n\r\n<p>Loại b&igrave;a B&igrave;a &aacute;o + b&igrave;a keo</p>\r\n\r\n<p>Số trang 392 trang + 4 trang m&agrave;u</p>\r\n\r\n<p>Ph&aacute;t h&agrave;nh: 15/3/2023</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>* * *</p>\r\n\r\n<p>Giới thiệu s&aacute;ch:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>T&igrave;nh huống kh&ocirc;ng ngờ tại m&ecirc; cung - nơi tiến h&agrave;nh nhiệm vụ!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Loren v&agrave; Lapis đ&atilde; nắm được th&ocirc;ng tin về một bộ phận cơ thể của Lapis m&agrave; c&ocirc; đang t&igrave;m kiếm n&ecirc;n đ&atilde; nhận nhiệm vụ đồng h&agrave;nh c&ugrave;ng học vi&ecirc;n trong kỳ thi tốt nghiệp của Trường huấn luyện nh&agrave; th&aacute;m hiểm Volf. Hai người cũng gặp lại nh&oacute;m Klaas - những người từng tốt nghiệp từ ng&ocirc;i trường đ&oacute;. Sau đ&oacute;, họ đến ng&ocirc;i trường v&agrave; bắt đầu đi v&agrave;o m&ecirc; cung c&ugrave;ng với c&aacute;c học vi&ecirc;n. Kỳ lạ thay, kh&ocirc;ng hề c&oacute; con qu&aacute;i vật n&agrave;o chờ bọn họ ở m&ecirc; cung...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đ&acirc;y ch&iacute;nh l&agrave; c&acirc;u chuyện phi&ecirc;u lưu của ch&agrave;ng l&iacute;nh đ&aacute;nh thu&ecirc; cừ kh&ocirc;i, người mới chuyển nghề th&agrave;nh &quot;tấm chiếu mới&quot; trong giới nh&agrave; th&aacute;m hiểm.</p>', 1, NULL, 1, '2023-04-19 01:21:23', '2023-04-19 01:21:23'),
(56, 12, 19, 'Nhân vật hạ cấp Tomozaki', 'nhan-vat-ha-cap-tomozaki_2023-04-19', 'product', '111000', '<p>Danh Mục</p>\r\n\r\n<p><a href=\"https://shopee.vn/\">Shopee</a><a href=\"https://shopee.vn/Nh%C3%A0-S%C3%A1ch-Online-cat.11036863\">Nh&agrave; S&aacute;ch Online</a><a href=\"https://shopee.vn/S%C3%A1ch-Ti%E1%BA%BFng-Vi%E1%BB%87t-cat.11036863.11108503\">S&aacute;ch Tiếng Việt</a><a href=\"https://shopee.vn/Ti%E1%BB%83u-thuy%E1%BA%BFt-ng%E1%BA%AFn-cat.11036863.11108503.11108519\">Tiểu thuyết ngắn</a></p>\r\n\r\n<p>Thương hiệu<a href=\"https://shopee.vn/search?brands=1139260\">Nhiều t&aacute;c giả</a></p>\r\n\r\n<p>Loại phi&ecirc;n bản</p>\r\n\r\n<p>Phi&ecirc;n bản th&ocirc;ng thường</p>\r\n\r\n<p>Ng&ocirc;n ngữ</p>\r\n\r\n<p>Tiếng Việt</p>\r\n\r\n<p>Nhập khẩu/ trong nước</p>\r\n\r\n<p>Trong nước</p>\r\n\r\n<p>Loại nắp</p>\r\n\r\n<p>B&igrave;a mềm</p>\r\n\r\n<p>Nh&agrave; Ph&aacute;t H&agrave;nh</p>\r\n\r\n<p>Kim Đồng</p>\r\n\r\n<p>ISBN</p>\r\n\r\n<p>8935244879810</p>\r\n\r\n<p>Năm xuất bản</p>\r\n\r\n<p>2021</p>\r\n\r\n<p>Kho h&agrave;ng</p>\r\n\r\n<p>11</p>\r\n\r\n<p>Gửi từ</p>\r\n\r\n<p>Bắc Ninh</p>', 'Nhân vật hạ cấp Tomozaki', '<p>Th&ocirc;ng tin sản phẩm</p>\r\n\r\n<p>M&atilde; h&agrave;ng: 8935244879810</p>\r\n\r\n<p>Độ Tuổi: 18+</p>\r\n\r\n<p>T&ecirc;n Nh&agrave; Cung Cấp: Nh&agrave; Xuất Bản Kim Đồng</p>\r\n\r\n<p>T&aacute;c giả: Yuki Yaku, Fly</p>\r\n\r\n<p>Người Dịch: akiyuki</p>\r\n\r\n<p>NXB: NXB Kim Đồng</p>\r\n\r\n<p>Năm XB : 2021</p>\r\n\r\n<p>Ng&ocirc;n Ngữ Tiếng Việt</p>\r\n\r\n<p>Trọng lượng (gr): 450</p>\r\n\r\n<p>K&iacute;ch Thước Bao B&igrave;: 19 x 13 cm</p>\r\n\r\n<p>Số trang: 424</p>\r\n\r\n<p>H&igrave;nh thức: B&igrave;a Mềm</p>\r\n\r\n<p>----------------------------------------</p>\r\n\r\n<p>Nh&acirc;n Vật Hạ Cấp Tomozaki</p>\r\n\r\n<p>Cuộc đời l&agrave; một tr&ograve; chơi r&aacute;c rưởi. C&acirc;u n&oacute;i xưa như tr&aacute;i đất đ&oacute;, đ&aacute;ng tiếc lại l&agrave; sự thật. L&agrave; một trong những game thủ h&agrave;ng đầu Nhật Bản, lời t&ocirc;i đ&atilde; n&oacute;i kh&ocirc;ng c&oacute; g&igrave; phải b&agrave;n c&atilde;i. Vậy m&agrave;, c&ocirc; ta, Hinami Aoi, một nh&acirc;n vật thượng đẳng từ trong trứng, cũng l&agrave; nữ ch&iacute;nh ho&agrave;n hảo học đường, đ&atilde; đạt đến tr&igrave;nh độ ngang ngửa t&ocirc;i trong c&ugrave;ng một tr&ograve; chơi điện tử, lại quả quyết cho rằng cuộc đời l&agrave; một tr&ograve; chơi tuyệt đỉnh.</p>\r\n\r\n<p>C&ugrave;ng với Hinami Aoi, một người ho&agrave;n to&agrave;n kh&ocirc;ng bị tr&oacute;i buộc trong những khu&ocirc;n mẫu th&ocirc;ng thường, nh&acirc;n vật hạ cấp Tomozaki sẽ l&agrave;m g&igrave; để t&igrave;m ra lời giải đ&aacute;p cho c&acirc;u hỏi: Liệu cuộc đời c&oacute; phải l&agrave; một tr&ograve; chơi tuyệt đỉnh!?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>* NH&Acirc;N VẬT HẠ CẤP TOMOZAKI l&agrave; t&aacute;c phẩm đạt giải xuất sắc trong khu&ocirc;n khổ giải thưởng Light novel Shogakukan lần thứ mười. 5 năm liền lọt top bảng xếp hạng Kono Light novel ga sugoi!</p>\r\n\r\n<p>Số tập: 9+ (on-going)</p>\r\n\r\n<p>---</p>\r\n\r\n<p>Một ấn phẩm của WINGS BOOKS - Thương hiệu s&aacute;ch trẻ của NXB Kim Đồng.</p>\r\n\r\n<p>----------CAM KẾT--------</p>\r\n\r\n<p>1. Cung cấp c&aacute;c s&aacute;ch ch&iacute;nh h&atilde;ng của NH&Agrave; XUẤT BẢN, đ&uacute;ng nguồn gốc (n&oacute;i KH&Ocirc;NG với h&agrave;ng giả, h&agrave;ng nh&aacute;i, h&agrave;ng k&eacute;m chất lượng)</p>\r\n\r\n<p>* Ph&aacute;t hiện giả xin đền 10 triệu</p>\r\n\r\n<p>2. S&aacute;ch mới 100%, đ&oacute;ng g&oacute;i chuy&ecirc;n nghiệp, cẩn thận, xử l&yacute; đơn h&agrave;ng nhanh</p>\r\n\r\n<p>3. Phục vụ kh&aacute;ch h&agrave;ng nhiệt t&igrave;nh, chu đ&aacute;o với kinh nghiệm nhiều năm trong lĩnh vực b&aacute;n s&aacute;ch</p>\r\n\r\n<p>4. Mọi thắc mắc xin li&ecirc;n hệ với shop qua Shopee</p>\r\n\r\n<p>---------ĐỔI TRẢ -----------</p>\r\n\r\n<p>Điều kiện &aacute;p dụng (trong v&ograve;ng 07 ng&agrave;y kể từ khi nhận sản phẩm) nếu:</p>\r\n\r\n<p>- H&agrave;ng ho&aacute; bị lỗi hoặc hư hỏng do vận chuyển hoặc do nh&agrave; sản xuất</p>\r\n\r\n<p>- Kh&ocirc;ng đ&uacute;ng s&aacute;ch m&agrave; kh&aacute;ch h&agrave;ng đặt</p>\r\n\r\n<p>- Kh&ocirc;ng đủ số lượng, kh&ocirc;ng đủ bộ như trong đơn h&agrave;ng</p>\r\n\r\n<p>Trường hợp kh&ocirc;ng đủ điều kiện &aacute;p dụng ch&iacute;nh s&aacute;ch:</p>\r\n\r\n<p>- Qu&aacute; 07 ng&agrave;y kể từ khi Qu&yacute; kh&aacute;ch nhận h&agrave;ng</p>\r\n\r\n<p>- Gửi lại h&agrave;ng kh&ocirc;ng đ&uacute;ng mẫu m&atilde;, kh&ocirc;ng phải sản phẩm của shop</p>\r\n\r\n<p>- Kh&ocirc;ng th&iacute;ch, kh&ocirc;ng hợp, đặt nhầm m&atilde;, nhầm sản phẩm ...</p>', 1, NULL, 1, '2023-04-19 01:24:54', '2023-04-19 01:24:54'),
(57, 12, 23, 'Phương Pháp \"ĐÀO TẠO\" Nữ Chính Nhạt Nhòa', 'phuong-phap-dao-tao-nu-chinh-nhat-nhoa_2023-04-19', 'product', '270000', '<p>Danh Mục</p>\r\n\r\n<p><a href=\"https://shopee.vn/\">Shopee</a><a href=\"https://shopee.vn/Nh%C3%A0-S%C3%A1ch-Online-cat.11036863\">Nh&agrave; S&aacute;ch Online</a><a href=\"https://shopee.vn/S%C3%A1ch-Ti%E1%BA%BFng-Vi%E1%BB%87t-cat.11036863.11108503\">S&aacute;ch Tiếng Việt</a><a href=\"https://shopee.vn/Ti%E1%BB%83u-thuy%E1%BA%BFt-ng%E1%BA%AFn-cat.11036863.11108503.11108519\">Tiểu thuyết ngắn</a></p>\r\n\r\n<p>Thương hiệu<a href=\"https://shopee.vn/search?brands=1139260\">Nhiều t&aacute;c giả</a></p>\r\n\r\n<p>Ng&ocirc;n ngữ</p>\r\n\r\n<p>Tiếng Việt</p>\r\n\r\n<p>Nhập khẩu/ trong nước</p>\r\n\r\n<p>Trong nước</p>\r\n\r\n<p>Kho h&agrave;ng</p>\r\n\r\n<p>43</p>\r\n\r\n<p>Gửi từ</p>\r\n\r\n<p>Quận Thanh Xu&acirc;n, H&agrave; Nội</p>', 'Phương Pháp \"ĐÀO TẠO\"; Nữ Chính Nhạt Nhòa', '<p>T&ecirc;n nh&agrave; cung cấp : IPM</p>\r\n\r\n<p>NXB NXB H&agrave; Nội</p>\r\n\r\n<p>Ng&ocirc;n Ngữ Tiếng Việt</p>\r\n\r\n<p>Năm XB 2023</p>\r\n\r\n<p>T&aacute;c giả Maruto Fumiaki</p>\r\n\r\n<p>Minh họa Misaki Kurehito</p>\r\n\r\n<p>Người dịch Hải Yến</p>\r\n\r\n<p>Thể loại: Học đường, h&agrave;i hước, l&atilde;ng mạn</p>\r\n\r\n<p>Khổ: 13 x 18 cm</p>\r\n\r\n<p>Số trang: 264</p>\r\n\r\n<p>Trọng lượng: ~ 200 g.</p>\r\n\r\n<p>Ph&aacute;t h&agrave;nh dự kiến: 16/2/2023 (c&aacute;c tỉnh kh&aacute;c phụ thuộc v&agrave;o hệ thống ph&acirc;n phối)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ĐẶC BIỆT LƯU &Yacute;: C&aacute;c bạn vui l&ograve;ng quay clip mở h&agrave;ng để được giải quyết c&aacute;c vấn đề về sản phẩm.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Qu&agrave; tặng k&egrave;m: Tập 1</p>\r\n\r\n<p>To&agrave;n bộ bản in đầu đều c&oacute; b&igrave;a hai mặt, với mặt trong được thiết kế ri&ecirc;ng cho phi&ecirc;n bản Việt Nam.</p>\r\n\r\n<p>Bản giới hạn: Poster lụa + 01 Gameplay card (card nhựa trong).</p>\r\n\r\n<p>Bản đặc biệt: 01 Gameplay card (card nhựa trong) d&agrave;nh cho những độc giả đặt h&agrave;ng sớm nhất.</p>\r\n\r\n<p>Bản thường: Kh&ocirc;ng qu&agrave;.</p>\r\n\r\n<p>Qu&agrave; tặng k&egrave;m tập 2</p>\r\n\r\n<p>To&agrave;n bộ bản in đầu đều c&oacute; b&igrave;a hai mặt, với mặt trong được thiết kế ri&ecirc;ng cho phi&ecirc;n bản Việt Nam.</p>\r\n\r\n<p>Bản đặc biệt: 01 Gameplay card (card nhựa trong) d&agrave;nh cho những độc giả đặt h&agrave;ng sớm nhất.</p>\r\n\r\n<p>Bản thường: Kh&ocirc;ng qu&agrave;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nội dung</p>\r\n\r\n<p>C&acirc;u chuyện &ldquo;cảm động&rdquo; n&agrave;y kể về h&agrave;nh tr&igrave;nh cậu nam sinh otaku Aki Tomoya &ldquo;đ&agrave;o tạo&rdquo; một c&ocirc; bạn nhạt</p>\r\n\r\n<p>nh&ograve;a th&agrave;nh n&agrave;ng nữ ch&iacute;nh chuẩn mực v&agrave; lấy c&ocirc; l&agrave;m h&igrave;nh mẫu để sản xuất galgame. Tr&ecirc;n h&agrave;nh tr&igrave;nh ấy,</p>\r\n\r\n<p>Tomoya c&oacute; sự gi&uacute;p đỡ của hai &ldquo;đồng nghiệp&rdquo; cực k&igrave; c&oacute; tiếng trong giới s&aacute;ng tạo ki&ecirc;m &ldquo;nhị vị th&aacute;nh nữ&rdquo;</p>\r\n\r\n<p>(tưởng chừng) thập to&agrave;n thập mỹ của trường.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, kh&ocirc;ng kh&iacute; ở mỗi buổi hoạt động của nh&oacute;m sản xuất game lại l&agrave;&hellip;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Hả? Bất t&agrave;i v&ocirc; dụng m&agrave; tự dưng đ&ograve;i chế t&aacute;c game? &Ocirc;ng khinh đời đấy &agrave;?&rdquo;</p>\r\n\r\n<p>&ldquo;T&ocirc;i c&oacute; đam m&ecirc; ch&aacute;y bỏng! &Aacute;! Đừng vo n&aacute;t! Mất cả đ&ecirc;m t&ocirc;i mới viết xong&hellip;!&rdquo;</p>\r\n\r\n<p>&ldquo;Bản kế hoạch c&oacute; độc trang b&igrave;a m&agrave; sao mất cả đ&ecirc;m?&rdquo;</p>\r\n\r\n<p>&ldquo;Ngủ mười một tiếng th&igrave; thời gian c&ograve;n lại đương nhi&ecirc;n rất &iacute;t rồi.&rdquo;</p>\r\n\r\n<p>&ldquo;Kh&ocirc;ng biết phải mắng thế n&agrave;o nữa! Đồ, c&aacute;i đồ&hellip;!&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Vậy l&agrave; vở h&agrave;i kịch &ldquo;đ&agrave;o tạo nữ ch&iacute;nh&rdquo; bắt đầu!</p>', 1, NULL, 1, '2023-04-19 01:30:22', '2023-04-19 01:30:22'),
(58, 12, 24, 'Hiệp sĩ lưu ban', 'hiep-si-luu-ban_2023-04-19', 'product', '118000', '<p>Danh Mục</p>\r\n\r\n<p><a href=\"https://shopee.vn/\">Shopee</a><a href=\"https://shopee.vn/Nh%C3%A0-S%C3%A1ch-Online-cat.11036863\">Nh&agrave; S&aacute;ch Online</a><a href=\"https://shopee.vn/S%C3%A1ch-Ti%E1%BA%BFng-Vi%E1%BB%87t-cat.11036863.11108503\">S&aacute;ch Tiếng Việt</a><a href=\"https://shopee.vn/Ti%E1%BB%83u-thuy%E1%BA%BFt-ng%E1%BA%AFn-cat.11036863.11108503.11108519\">Tiểu thuyết ngắn</a></p>\r\n\r\n<p>Thương hiệu<a href=\"https://shopee.vn/search?brands=1139260\">Nhiều t&aacute;c giả</a></p>\r\n\r\n<p>Ng&ocirc;n ngữ</p>\r\n\r\n<p>Tiếng Việt</p>\r\n\r\n<p>Nhập khẩu/ trong nước</p>\r\n\r\n<p>Trong nước</p>\r\n\r\n<p>Nh&agrave; Ph&aacute;t H&agrave;nh</p>\r\n\r\n<p>AMAK</p>\r\n\r\n<p>Năm xuất bản</p>\r\n\r\n<p>2022</p>\r\n\r\n<p>Kho h&agrave;ng</p>\r\n\r\n<p>11</p>\r\n\r\n<p>Gửi từ</p>\r\n\r\n<p>H&agrave; Nội</p>', 'Hiệp sĩ lưu ban', '<p>Năm ph&aacute;t h&agrave;nh: 2022</p>\r\n\r\n<p>Số trang: 196</p>\r\n\r\n<p>Nh&agrave; ph&aacute;t h&agrave;nh: AMAK</p>\r\n\r\n<p>Nh&agrave; xuất bản: NXB Hồng Đức</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Shizuku bị đ&oacute;ng đinh bằng v&ocirc; số thanh kiếm v&agrave; Amane cười khinh miệt khi đứng trước mặt c&ocirc;. Trận tứ kết quyết định đối thủ đấu tay đ&ocirc;i của Ikki đ&atilde; kh&eacute;p lại với bi kịch diễn ra trước trận đấu</p>\r\n\r\n<p>V&ograve;ng b&aacute;n kết của Thất Tinh. Hai hiệp sĩ hạng A l&agrave; C&ocirc;ng chứa t&oacute;c đỏ v&agrave; Phong vũ kiếm vương đ&atilde; triển khai trận đấu kinh người, x&acirc;m lấn to&agrave;n bộ s&agrave;n đấu với quy m&ocirc; chưa từng c&oacute;.</p>\r\n\r\n<p>Hơn nữa, vẫn c&ograve;n một trận đấu tại v&ograve;ng b&aacute;n kết. Trận đấu giữa Kiếm vương kh&ocirc;ng ngai v&agrave; Bad luck</p>\r\n\r\n<p>&ldquo;Em&hellip;xin từ bỏ trận thi đấu n&agrave;y ạ.&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Phần mở m&agrave;n trở n&ecirc;n huy&ecirc;n n&aacute;o hơn v&igrave; ph&aacute;t ng&ocirc;n bất ngờ của Amane! Với quyết t&acirc;m vững ch&atilde;i của m&igrave;nh, Ikki đương đầu với Amane &ndash; người vẫn lu&ocirc;n tỏ ra giễu cợt.</p>', 1, NULL, 1, '2023-04-19 01:34:04', '2023-04-19 01:34:04'),
(59, 13, 19, 'BlueLock - Tập 3', 'bluelock-tap-3_2023-04-19', 'product', '35000', '<p>Danh Mục</p>\r\n\r\n<p><a href=\"https://shopee.vn/\">Shopee</a><a href=\"https://shopee.vn/Nh%C3%A0-S%C3%A1ch-Online-cat.11036863\">Nh&agrave; S&aacute;ch Online</a><a href=\"https://shopee.vn/S%C3%A1ch-Ti%E1%BA%BFng-Vi%E1%BB%87t-cat.11036863.11108503\">S&aacute;ch Tiếng Việt</a><a href=\"https://shopee.vn/Truy%E1%BB%87n-Tranh-cat.11036863.11108503.11108505\">Truyện Tranh</a></p>\r\n\r\n<p>Thương hiệu<a href=\"https://shopee.vn/search?brands=1255544\">FAHASA</a></p>\r\n\r\n<p>Nhập khẩu/ trong nước</p>\r\n\r\n<p>Trong nước</p>\r\n\r\n<p>Ng&ocirc;n ngữ</p>\r\n\r\n<p>Tiếng Việt</p>\r\n\r\n<p>Xuất xứ</p>\r\n\r\n<p>Trong nước</p>\r\n\r\n<p>Loại nắp</p>\r\n\r\n<p>B&igrave;a cứng</p>\r\n\r\n<p>Loại phi&ecirc;n bản</p>\r\n\r\n<p>Phi&ecirc;n bản h&agrave;ng năm</p>\r\n\r\n<p>Nh&agrave; Ph&aacute;t H&agrave;nh</p>\r\n\r\n<p>Nhiều nh&agrave; xuất bản</p>\r\n\r\n<p>Năm xuất bản</p>\r\n\r\n<p>2023</p>\r\n\r\n<p>Kho h&agrave;ng</p>\r\n\r\n<p>153</p>\r\n\r\n<p>Gửi từ</p>\r\n\r\n<p>TP. Hồ Ch&iacute; Minh</p>', 'BlueLock - Tập 3', '<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh: Nh&agrave; Xuất Bản Kim Đồng Nh&agrave; xuất bản: NXB Kim Đồng T&aacute;c giả: Nhiều t&aacute;c giả Loại b&igrave;a: B&igrave;a Mềm Số trang: 192 Năm xuất bản: 2023 ĐẶT CƯỢC TO&Agrave;N BỘ SINH MẠNG CỦA M&Igrave;NH QUA TỪNG TRẬN ĐẤU!! H&Atilde;Y GI&Agrave;NH LẤY CHIẾN THẮNG! Đ&Oacute; L&Agrave; LUẬT DUY NHẤT Ở Đ&Acirc;Y!! 2 trong số 4 trận đấu của v&ograve;ng tuyển chọn đầu ti&ecirc;n tại BLUELOCK đ&atilde; kết th&uacute;c. Sau khi đ&aacute;nh bại đối thủ trong một trận đấu phải đ&aacute;nh cược cả mạng sống v&agrave; được nếm trải hương vị chiến thắng, Isagi c&ugrave;ng đội Z hừng hực kh&iacute; thế tiến tới trận đấu thứ 3 với đội W!! Tuy nhi&ecirc;n lại c&oacute; lục đục nội bộ ngo&agrave;i dự kiến ph&aacute;t sinh trong đội Z!? Liệu họ c&oacute; thể đẩy l&ugrave;i được cuộc tấn c&ocirc;ng dữ dội từ anh em nh&agrave; Wanima &ndash; bộ đ&ocirc;i &aacute;t chủ b&agrave;i của đội W kh&ocirc;ng, đ&atilde; vậy c&ograve;n phải đối mặt với một vấn đề mang t&ecirc;n Chigiri Hyoma, người đ&atilde; gần như từ bỏ việc chiến đấu. &ldquo;MUỐN CHƠI B&Oacute;NG&rdquo;. KHỞI NGUỒN CỦA NGỌN LỬA NHIỆT HUYẾT Đ&Oacute; CH&Iacute;NH L&Agrave; &ldquo;VŨ KH&Iacute;&rdquo; CỦA RI&Ecirc;NG M&Igrave;NH!! Muneyuki Kaneshiro &ldquo;Hồi nhỏ, t&ocirc;i từng kh&oacute;c khi xem thi đấu thể thao. Sự hưng phấn khi đội tuyển gi&agrave;nh chiến thắ...</p>', 1, NULL, 1, '2023-04-19 05:36:41', '2023-04-19 05:36:41'),
(60, 13, 19, 'Thám tử lừng danh Conan (Tập 51 - 100 )', 'tham-tu-lung-danh-conan-tap-51-100_2023-04-19', 'product', '28000', '<p>Danh Mục</p>\r\n\r\n<p><a href=\"https://shopee.vn/\">Shopee</a><a href=\"https://shopee.vn/Nh%C3%A0-S%C3%A1ch-Online-cat.11036863\">Nh&agrave; S&aacute;ch Online</a><a href=\"https://shopee.vn/S%C3%A1ch-Ti%E1%BA%BFng-Vi%E1%BB%87t-cat.11036863.11108503\">S&aacute;ch Tiếng Việt</a><a href=\"https://shopee.vn/Truy%E1%BB%87n-Tranh-cat.11036863.11108503.11108505\">Truyện Tranh</a></p>\r\n\r\n<p>Thương hiệu<a href=\"https://shopee.vn/search?brands=1069678\">Gosho Aoyama</a></p>\r\n\r\n<p>Nhập khẩu/ trong nước</p>\r\n\r\n<p>Trong nước</p>\r\n\r\n<p>Ng&ocirc;n ngữ</p>\r\n\r\n<p>Tiếng Việt</p>\r\n\r\n<p>Xuất xứ</p>\r\n\r\n<p>Nhật Bản</p>\r\n\r\n<p>Loại nắp</p>\r\n\r\n<p>B&igrave;a mềm</p>\r\n\r\n<p>Loại phi&ecirc;n bản</p>\r\n\r\n<p>Phi&ecirc;n bản h&agrave;ng năm</p>\r\n\r\n<p>Nh&agrave; Ph&aacute;t H&agrave;nh</p>\r\n\r\n<p>Kim Đồng</p>\r\n\r\n<p>ISBN</p>\r\n\r\n<p>8935244815214</p>\r\n\r\n<p>Năm xuất bản</p>\r\n\r\n<p>2021</p>\r\n\r\n<p>Kho h&agrave;ng</p>\r\n\r\n<p>1166</p>\r\n\r\n<p>Gửi từ</p>\r\n\r\n<p>Bắc Ninh</p>', 'Thám tử lừng danh Conan (Tập 51 - 100 )', '<p>GIỚI THIỆU SẢN PHẨM</p>\r\n\r\n<p>- S&aacute;ch: Th&aacute;m tử lừng danh Conan ( Từ tập 51 - Tập 100)</p>\r\n\r\n<p>- T&aacute;c giả: Gosho Aoyama</p>\r\n\r\n<p>- Nh&agrave; xuất bản: NXB Kim Đồng</p>\r\n\r\n<p>- Ph&aacute;t h&agrave;nh: Kim Đồng</p>\r\n\r\n<p>- Độ tuổi: 11-15 tuổi</p>\r\n\r\n<p>- K&iacute;ch thước: 11,3 x17,6 cm</p>\r\n\r\n<p>- Số trang: 184</p>\r\n\r\n<p>- Năm xuất bản: 2021</p>\r\n\r\n<p>- H&igrave;nh thức: B&igrave;a mềm</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>---- GIỚI THIỆU ----</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Th&aacute;m tử lừng danh Conan (Từ tập 51 - Tập 100)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kudo Shinichi l&agrave; một cậu th&aacute;m tử học sinh năng nổ với biệt t&agrave;i suy luận c&oacute; thể s&aacute;nh ngang với Sherlock Holmes! Một ng&agrave;y nọ, khi mải đuổi theo những kẻ khả nghi, cậu đ&atilde; bị ch&uacute;ng cho uống một loại thuốc k&igrave; lạ khiến cho cơ thể bị teo nhỏ. Vậy l&agrave; một th&aacute;m tử t&iacute; hon xuất hiện với c&aacute;i t&ecirc;n giả: Edogawa Conan!!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ở tập 80 n&agrave;y, Bằng suy luận sắc b&eacute;n, bộ đ&ocirc;i th&aacute;m tử Conan - Heiji đ&atilde; pha &aacute;n thật t&agrave;i t&igrave;nh! Đ&acirc;u l&agrave; sự thật bất ngờ ẩn sau những vết m&agrave;u trong vụ &aacute;n ma c&agrave; rồng? Tập truyện n&agrave;y cũng giới thiệu với c&aacute;c bạn vụ &aacute;n li&ecirc;n quan tới dịch vụ chuyển ph&aacute;t nhanh h&agrave;ng đ&ocirc;ng lạnh m&agrave; Haibara, theo một nghĩa n&agrave;o đ&oacute; (?), đ&atilde; l&acirc;m v&agrave;o t&igrave;nh huống hết sức ngặt ngh&egrave;o, vụ &aacute;n chiếc ch&igrave;a kh&oacute;a rương chứa hoa quả h&eacute; lộ &iacute;t nhiều về qu&aacute; khứ của Sera, v&agrave; vụ &aacute;n giả mạo di thư với sự xuất hiện của anh ch&agrave;ng &quot;người y&ecirc;u&quot; của Yumi!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>---- CAM KẾT ----</p>\r\n\r\n<p>1. Cung cấp c&aacute;c s&aacute;ch ch&iacute;nh h&atilde;ng, đ&uacute;ng nguồn gốc (n&oacute;i KH&Ocirc;NG với h&agrave;ng giả, h&agrave;ng nh&aacute;i, h&agrave;ng k&eacute;m chất lượng)</p>\r\n\r\n<p>2. S&aacute;ch mới 100%, đ&oacute;ng g&oacute;i chuy&ecirc;n nghiệp, cẩn thận, xử l&yacute; đơn h&agrave;ng nhanh</p>\r\n\r\n<p>3. Phục vụ kh&aacute;ch h&agrave;ng nhiệt t&igrave;nh, chu đ&aacute;o với kinh nghiệm nhiều năm trong lĩnh vực b&aacute;n s&aacute;ch</p>\r\n\r\n<p>4. Mọi thắc mắc xin li&ecirc;n hệ với shop qua Shopee</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>---- ĐỔI TRẢ -----</p>\r\n\r\n<p>Điều kiện &aacute;p dụng (trong v&ograve;ng 07 ng&agrave;y kể từ khi nhận sản phẩm) nếu:</p>\r\n\r\n<p>- H&agrave;ng ho&aacute; bị lỗi hoặc hư hỏng do vận chuyển hoặc do nh&agrave; sản xuất</p>\r\n\r\n<p>- Kh&ocirc;ng đ&uacute;ng s&aacute;ch m&agrave; kh&aacute;ch h&agrave;ng đặt</p>\r\n\r\n<p>- Kh&ocirc;ng đủ số lượng, kh&ocirc;ng đủ bộ như trong đơn h&agrave;ng</p>\r\n\r\n<p>Trường hợp kh&ocirc;ng đủ điều kiện &aacute;p dụng ch&iacute;nh s&aacute;ch:</p>\r\n\r\n<p>- Qu&aacute; 07 ng&agrave;y kể từ khi Qu&yacute; kh&aacute;ch nhận h&agrave;ng</p>\r\n\r\n<p>- Gửi lại h&agrave;ng kh&ocirc;ng đ&uacute;ng mẫu m&atilde;, kh&ocirc;ng phải sản phẩm của shop</p>\r\n\r\n<p>- Kh&ocirc;ng th&iacute;ch, kh&ocirc;ng hợp, đặt nhầm m&atilde;, nhầm sản phẩm ...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>#kbookvn #conan #thamtulungdanhconan #truyentranh #trinhtham #tutap80den98</p>\r\n\r\n<p>#sachchinhhang #sachmevabe #sachgiadinh #sachkynang #sachthieunhi #sachehon #sachkinhdoanh #sachvanhoc #sachlamgiau</p>', 1, NULL, 1, '2023-04-19 05:39:09', '2023-04-19 05:39:09');
INSERT INTO `tsh_product` (`id`, `category_id`, `brand_id`, `name`, `slug`, `type`, `price_buy`, `detail`, `metakey`, `metadesc`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(61, 13, 20, 'ReLIFE (Trọn bộ)', 'relife-tron-bo_2023-04-19', 'product', '78000', '<p>Danh Mục</p>\r\n\r\n<p><a href=\"https://shopee.vn/\">Shopee</a><a href=\"https://shopee.vn/Nh%C3%A0-S%C3%A1ch-Online-cat.11036863\">Nh&agrave; S&aacute;ch Online</a><a href=\"https://shopee.vn/S%C3%A1ch-Ti%E1%BA%BFng-Vi%E1%BB%87t-cat.11036863.11108503\">S&aacute;ch Tiếng Việt</a><a href=\"https://shopee.vn/Truy%E1%BB%87n-Tranh-cat.11036863.11108503.11108505\">Truyện Tranh</a></p>\r\n\r\n<p>Thương hiệu<a href=\"https://shopee.vn/search?brands=1074404\">YayoiSo</a></p>\r\n\r\n<p>Nhập khẩu/ trong nước</p>\r\n\r\n<p>Trong nước</p>\r\n\r\n<p>Ng&ocirc;n ngữ</p>\r\n\r\n<p>Tiếng Việt</p>\r\n\r\n<p>Xuất xứ</p>\r\n\r\n<p>Nhật Bản</p>\r\n\r\n<p>Loại nắp</p>\r\n\r\n<p>B&igrave;a mềm</p>\r\n\r\n<p>Loại phi&ecirc;n bản</p>\r\n\r\n<p>Phi&ecirc;n bản th&ocirc;ng thường</p>\r\n\r\n<p>Nh&agrave; Ph&aacute;t H&agrave;nh</p>\r\n\r\n<p>Zgroup</p>\r\n\r\n<p>Năm xuất bản</p>\r\n\r\n<p>2018</p>\r\n\r\n<p>Kho h&agrave;ng</p>\r\n\r\n<p>1317</p>\r\n\r\n<p>Gửi từ</p>\r\n\r\n<p>Quận Đống Đa, H&agrave; Nội</p>', 'ReLIFE (Trọn bộ)', '<p>M&Ocirc; TẢ SẢN PHẨM</p>\r\n\r\n<p>T&ecirc;n Nh&agrave; Cung Cấp: ZGROUP</p>\r\n\r\n<p>Nh&atilde;n s&aacute;ch Uranix</p>\r\n\r\n<p>T&aacute;c giả: YAYOISO</p>\r\n\r\n<p>NXB: NXB D&acirc;n Tr&iacute;</p>\r\n\r\n<p>Năm XB: 2018</p>\r\n\r\n<p>Ng&ocirc;n Ngữ: Tiếng Việt</p>\r\n\r\n<p>Trọng lượng (gr): 200</p>\r\n\r\n<p>K&iacute;ch Thước Bao B&igrave;: 19 x 14 cm</p>\r\n\r\n<p>Số trang: 196</p>\r\n\r\n<p>H&igrave;nh thức: B&igrave;a Mềm</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Giới thiệu sản phẩm:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ReLIFE</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kaizaki Arata, 27 tuổi, thất nghiệp, ch&aacute;n nản với cuộc đời. T&igrave;nh cờ trong một lần say xỉn, anh trở th&agrave;nh đối tượng th&iacute; nghiệm của dự &aacute;n mang t&ecirc;n ReLIFE, bị thu nhỏ về h&igrave;nh dạng của một học sinh cao trung 17 tuổi, từ đ&oacute; bắt đầu h&agrave;nh tr&igrave;nh học lại kỹ năng sống, l&agrave;m lại cuộc đời.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Giới thiệu T&aacute;c giả - Họa sĩ:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>YAYOISO &ndash; T&aacute;c giả c&oacute; lượng view cao nhất web đọc truyện online COMICO, với t&aacute;c phẩm đ&atilde; được chuyển thể th&agrave;nh phim hoạt h&igrave;nh, phim điện ảnh v&agrave; tiểu thuyết.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ĐẶC BIỆT LƯU &Yacute;: C&aacute;c bạn vui l&ograve;ng quay clip mở h&agrave;ng để được giải quyết c&aacute;c vấn đề về sản phẩm. Vui l&ograve;ng li&ecirc;n hệ fanpage Cẩm Phong Showroom để được giải đ&aacute;p nhanh nhất.</p>', 1, NULL, 1, '2023-04-19 05:41:06', '2023-04-19 05:41:06'),
(62, 13, 23, 'Your name (Boxset 3 tập)', 'your-name-boxset-3-tap_2023-04-19', 'product', '127000', '<p>Danh Mục</p>\r\n\r\n<p><a href=\"https://shopee.vn/\">Shopee</a><a href=\"https://shopee.vn/Nh%C3%A0-S%C3%A1ch-Online-cat.11036863\">Nh&agrave; S&aacute;ch Online</a><a href=\"https://shopee.vn/S%C3%A1ch-Ti%E1%BA%BFng-Vi%E1%BB%87t-cat.11036863.11108503\">S&aacute;ch Tiếng Việt</a><a href=\"https://shopee.vn/Truy%E1%BB%87n-Tranh-cat.11036863.11108503.11108505\">Truyện Tranh</a></p>\r\n\r\n<p>Thương hiệu<a href=\"https://shopee.vn/search?brands=1139260\">Nhiều t&aacute;c giả</a></p>\r\n\r\n<p>Nhập khẩu/ trong nước</p>\r\n\r\n<p>Trong nước</p>\r\n\r\n<p>Ng&ocirc;n ngữ</p>\r\n\r\n<p>Tiếng Việt</p>\r\n\r\n<p>Xuất xứ</p>\r\n\r\n<p>Trong nước</p>\r\n\r\n<p>Kho h&agrave;ng</p>\r\n\r\n<p>14</p>\r\n\r\n<p>Gửi từ</p>\r\n\r\n<p>Quận Thanh Xu&acirc;n, H&agrave; Nội</p>', 'our name (Boxset 3 tập)', '<p>T&ecirc;n Nh&agrave; Cung Cấp IPM</p>\r\n\r\n<p>T&aacute;c giả Shinkai Makoto, Kotone Ranmaru</p>\r\n\r\n<p>Người Dịch Minh An</p>\r\n\r\n<p>NXB NXB Hồng Đức</p>\r\n\r\n<p>Năm XB 2017</p>\r\n\r\n<p>Ng&ocirc;n ngữ: Tiếng Việt</p>\r\n\r\n<p>K&iacute;ch Thước Bao B&igrave; 13 x 18 cm</p>\r\n\r\n<p>Số trang 200+</p>\r\n\r\n<p>H&igrave;nh thức Bộ Hộp</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Boxset Your Name - 3 Tập (Truyện Tranh Manga)</p>\r\n\r\n<p>Nội dung:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ở một nơi heo h&uacute;t, c&oacute; một thị trấn nhỏ x&iacute;u, kh&ocirc;ng c&ograve;n văn vật g&igrave; hiển h&aacute;ch ngo&agrave;i một ng&ocirc;i đền đ&atilde; bị thu nhỏ quy m&ocirc;, một sản phẩm d&acirc;y tết kh&ocirc;ng c&ograve;n ai hiểu &yacute; nghĩa, v&agrave; một c&ocirc;ng nghệ l&agrave;m rượu khiến thanh thiếu ni&ecirc;n cực k&igrave; ngần ngại.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mitsuha cũng nằm trong số c&aacute;c thanh thiếu ni&ecirc;n ấy. C&ocirc; khao kh&aacute;t tho&aacute;t khỏi c&aacute;i thị trấn chật chội nhiều săm soi va chạm, để đến sống ở th&agrave;nh phố lớn. V&agrave;o một đ&ecirc;m tối tăm, c&ocirc; ch&aacute;n chường k&ecirc;u l&ecirc;n, &ldquo;Kiếp sau, xin h&atilde;y cho con l&agrave;m một anh ch&agrave;ng đẹp trai ở Tokyo!&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Rồi v&agrave;o một ng&agrave;y s&aacute;ng sủa, c&ocirc; quả nhi&ecirc;n thấy m&igrave;nh biến th&agrave;nh một ch&agrave;ng trai. Tỉnh dậy trong căn ph&ograve;ng lạ lẫm, gặp gỡ những người bạn kh&ocirc;ng quen, khung cảnh sầm uất của Tokyo trải rộng trước mắt. Bối rối nhưng m&atilde;n nguyện, Mitsuha h&aacute;o hức tận hưởng cuộc sống nơi đ&ocirc; thị phồn hoa c&ocirc; vẫn hằng ước mong.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&ugrave;ng l&uacute;c đ&oacute; Taki, một nam sinh cấp ba sống ở Tokyo, lại thấy m&igrave;nh biến th&agrave;nh một nữ sinh sống ở v&ugrave;ng qu&ecirc; hẻo l&aacute;nh m&agrave; cậu chưa từng đến.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>T&igrave;nh trạng k&igrave; lạ đ&oacute; cứ lặp đi lặp lại.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hai người dần dần nhận ra sự ngắt qu&atilde;ng trong k&iacute; ức v&agrave; thời gian.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Cơ thể ho&aacute;n đổi, cuộc sống x&aacute;o trộn hết lần n&agrave;y đến lần kh&aacute;c, tuy bối rối nhưng Taki v&agrave; Mitsuha mau ch&oacute;ng chấp nhận sự thật. Hai người trao đổi lời nhắn qua vở ghi v&agrave; điện thoại, đ&ocirc;i khi c&atilde;i cọ, đ&ocirc;i khi tận hưởng cuộc sống của nhau, cứ thế c&ugrave;ng trải qua những ng&agrave;y th&aacute;ng ấy.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nhưng ngay khi hai người bắt đầu mở l&ograve;ng, t&igrave;nh trạng ho&aacute;n đổi đột nhi&ecirc;n dừng lại.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đ&acirc;y l&agrave; c&acirc;u chuyện k&igrave; diệu về duy&ecirc;n hội ngộ giữa hai người chưa từng gặp gỡ, về một mối t&igrave;nh g&acirc;y sững sờ do c&oacute; sự can thiệp của thi&ecirc;n tai, d&ograve;ng thời gian v&agrave; định mệnh an b&agrave;i từ h&agrave;ng ng&agrave;n năm về trước.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sau th&agrave;nh c&ocirc;ng vang dội của phi&ecirc;n bản điện ảnh v&agrave; tiểu thuyết, mối t&igrave;nh thi&ecirc;n tai định mệnh an b&agrave;i đ&oacute; giờ trở lại với ch&uacute;ng ta trong ba tập truyện tranh c&ugrave;ng t&ecirc;n, chi tiết, gọn g&agrave;ng, tươi trẻ.</p>', 1, 1, 1, '2023-04-19 05:43:59', '2023-04-19 05:44:51'),
(63, 13, 23, 'Văn Hào Lưu Lạc - 1', 'van-hao-luu-lac-1_2023-04-19', 'product', '45000', '<p>Danh Mục</p>\r\n\r\n<p><a href=\"https://shopee.vn/\">Shopee</a><a href=\"https://shopee.vn/Nh%C3%A0-S%C3%A1ch-Online-cat.11036863\">Nh&agrave; S&aacute;ch Online</a><a href=\"https://shopee.vn/S%C3%A1ch-Ti%E1%BA%BFng-Vi%E1%BB%87t-cat.11036863.11108503\">S&aacute;ch Tiếng Việt</a><a href=\"https://shopee.vn/Truy%E1%BB%87n-Tranh-cat.11036863.11108503.11108505\">Truyện Tranh</a></p>\r\n\r\n<p>Thương hiệu<a href=\"https://shopee.vn/search?brands=1255223\">Asagiri Kafka</a></p>\r\n\r\n<p>Nhập khẩu/ trong nước</p>\r\n\r\n<p>Trong nước</p>\r\n\r\n<p>Ng&ocirc;n ngữ</p>\r\n\r\n<p>Tiếng Việt</p>\r\n\r\n<p>Xuất xứ</p>\r\n\r\n<p>Trong nước</p>\r\n\r\n<p>Nh&agrave; Ph&aacute;t H&agrave;nh</p>\r\n\r\n<p>IPM</p>\r\n\r\n<p>Kho h&agrave;ng</p>\r\n\r\n<p>72</p>\r\n\r\n<p>Gửi từ</p>\r\n\r\n<p>H&agrave; Nội</p>', 'Văn Hào Lưu Lạc - 1', '<p>C&ocirc;ng ty ph&aacute;t h&agrave;nh: IPM</p>\r\n\r\n<p>T&aacute;c giả: Asagiri Kafka</p>\r\n\r\n<p>Họa sĩ minh họa: Harukawa Sango</p>\r\n\r\n<p>Nh&agrave; xuất bản: NXB Hồng Đức</p>\r\n\r\n<p>Năm xuất bản: 2021</p>\r\n\r\n<p>Số trang: 196</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nội dung:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kh&ocirc;ng xửa kh&ocirc;ng xưa, c&oacute; một c&acirc;u chuyện k&igrave; quặc cực c&ugrave;ng,</p>\r\n\r\n<p>xảy ra ở một th&agrave;nh phố lạ l&ugrave;ng,</p>\r\n\r\n<p>với những nh&acirc;n vật lập dị&hellip;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>18 tuổi, cao 1m70, nặng 55 kg</p>\r\n\r\n<p>22 tuổi, cao 1m81, nặng 67 kg</p>\r\n\r\n<p>22 tuổi, cao 1m89, nặng 78 kg</p>\r\n\r\n<p>&hellip;</p>\r\n\r\n<p>A, c&oacute; g&igrave; lập dị với thanh xu&acirc;n ngời ngời c&ugrave;ng những chỉ số c&acirc;n đối như thế?</p>\r\n\r\n<p>C&oacute; đ&oacute;, khi m&agrave; tất cả đều sở hữu năng lực si&ecirc;u nhi&ecirc;n, họ t&ecirc;n như c&aacute;c văn h&agrave;o v&agrave; sống một cuộc đời l&agrave;m th&oacute;t tim những người mơ ổn định.</p>\r\n\r\n<p>Mang c&aacute;i t&ecirc;n một nh&agrave; văn đoản mệnh, 18 tuổi lớn l&ecirc;n trong trại trẻ mồ c&ocirc;i. Trại n&agrave;y vẫn hoạt động tươm tất cho đến ng&agrave;y ruộng vườn bị gi&agrave;y x&eacute;o, nh&agrave; kho bị ph&aacute; hoại. Để giảm bớt miệng ăn, trại đuổi 18 tuổi đi. Cậu b&eacute; ngơ ng&aacute;c dạt tr&ocirc;i đến Yokohama, đ&oacute;i qu&aacute; kh&ocirc;ng ai cho lương thiện nữa, cậu quyết định trấn lột người qua đường để sống s&oacute;t&hellip;</p>\r\n\r\n<p>&hellip; th&igrave; gặp 22 tuổi, mang c&aacute;i t&ecirc;n của một nh&agrave; văn &aacute;m ảnh tự tử, đang trẫm m&igrave;nh dưới nước.</p>\r\n\r\n<p>Từ đ&acirc;y, cậu sẽ gặp 22 tuổi kh&aacute;c c&oacute; t&ecirc;n một t&aacute;c gia l&atilde;ng mạn, chuy&ecirc;n k&egrave; k&egrave; b&ecirc;n m&igrave;nh cuốn cẩm nang nhan đề L&yacute; tưởng, v&agrave; theo ch&acirc;n họ đến một c&ocirc;ng ty tập hợp to&agrave;n những nh&acirc;n vật c&ugrave;ng loại. 18 tuổi bước v&agrave;o một thế giới phi&ecirc;u lưu ly k&igrave;, v&agrave; nhờ đ&oacute; ph&aacute;t hiện ra rằng bản th&acirc;n m&igrave;nh cũng ly k&igrave; kh&ocirc;ng k&eacute;m.</p>\r\n\r\n<p>Bằng lối dẫn truyện trẻ trung, h&igrave;nh ảnh sinh động, khắc họa cao độ c&aacute; t&iacute;nh nh&acirc;n vật, v&agrave; đặc biệt l&agrave; ch&egrave;o l&aacute;i hiện thực theo &yacute; tưởng kh&aacute;c thường khi đẩy tuột c&aacute;c t&aacute;c giả t&aacute;c phẩm nổi tiếng v&agrave;o một h&agrave;nh tr&igrave;nh cực k&igrave; xa lạ, Văn H&agrave;o Lưu Lạc vừa k&iacute;ch th&iacute;ch t&acirc;m thế t&igrave;m hiểu kh&aacute;m ph&aacute;, vừa mở ra một hướng thưởng thức mới cho ch&uacute;ng ta từ những điều tưởng chừng xưa cũ. Mời bạn đến với Văn H&agrave;o Lưu Lạc tập 1.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>#IPM #Văn_h&agrave;o_lưu_lạc #manga #BungoStrayDogs #phi&ecirc;u_lưu</p>', 1, NULL, 1, '2023-04-19 05:46:51', '2023-04-19 05:46:51'),
(64, 13, 21, 'fsfzfz', 'fsfzfz_2023-04-20', 'product', '123456', '<p>drtd</p>', 'fzfszf', '<p>tuuf</p>', 1, NULL, 1, '2023-04-19 18:55:04', '2023-04-19 18:55:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_product_image`
--

CREATE TABLE `tsh_product_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `ordinal_number` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tsh_product_image`
--

INSERT INTO `tsh_product_image` (`id`, `product_id`, `ordinal_number`, `image`) VALUES
(131, 45, 1, 'grimgar-ao-anh-va-tro-tan-tap-10_1_45.webp'),
(132, 45, 2, 'grimgar-ao-anh-va-tro-tan-tap-10_2_45.webp'),
(133, 45, 3, 'grimgar-ao-anh-va-tro-tan-tap-10_3_45.webp'),
(142, 47, 1, '86-eightysix-ep7_1_47.jpg'),
(143, 47, 2, '86-eightysix-ep7_2_47.jpg'),
(146, 47, 5, '86-eightysix-ep7_5_47.jpg'),
(147, 48, 1, 'sach-bungo-stray-dogs-van-hao-luu-lac-beast-manga-boxset-4-tap__1_48.jpg'),
(148, 48, 2, 'sach-bungo-stray-dogs-van-hao-luu-lac-beast-manga-boxset-4-tap__2_48.jpg'),
(149, 48, 3, 'sach-bungo-stray-dogs-van-hao-luu-lac-beast-manga-boxset-4-tap__3_48.jpg'),
(150, 48, 4, 'sach-bungo-stray-dogs-van-hao-luu-lac-beast-manga-boxset-4-tap__4_48.jpg'),
(151, 48, 5, 'sach-bungo-stray-dogs-van-hao-luu-lac-beast-manga-boxset-4-tap__5_48.jpg'),
(152, 49, 1, 'arya-ban-ben-thinh-thoang-lai-treu-gheo-toi-bang-tieng-nga-tap-1_2023-04-19_1_49.jpg'),
(153, 49, 2, 'arya-ban-ben-thinh-thoang-lai-treu-gheo-toi-bang-tieng-nga-tap-1_2023-04-19_2_49.jpg'),
(154, 49, 3, 'arya-ban-ben-thinh-thoang-lai-treu-gheo-toi-bang-tieng-nga-tap-1_2023-04-19_3_49.jpg'),
(155, 49, 4, 'arya-ban-ben-thinh-thoang-lai-treu-gheo-toi-bang-tieng-nga-tap-1_2023-04-19_4_49.jpg'),
(156, 50, 1, 'date-a-live-tap-13-nia-creation_2023-04-19_1_50.jpg'),
(157, 50, 2, 'date-a-live-tap-13-nia-creation_2023-04-19_2_50.jpg'),
(158, 50, 3, 'date-a-live-tap-13-nia-creation_2023-04-19_3_50.jpg'),
(159, 50, 4, 'date-a-live-tap-13-nia-creation_2023-04-19_4_50.jpg'),
(160, 50, 5, 'date-a-live-tap-13-nia-creation_2023-04-19_5_50.jpg'),
(161, 51, 1, 'gui-em-cua-muoi-nam-sau_2023-04-19_1_51.jpg'),
(162, 51, 2, 'gui-em-cua-muoi-nam-sau_2023-04-19_2_51.jpg'),
(163, 51, 3, 'gui-em-cua-muoi-nam-sau_2023-04-19_3_51.jpg'),
(164, 51, 4, 'gui-em-cua-muoi-nam-sau_2023-04-19_4_51.jpg'),
(165, 52, 1, 're-zero-bat-dau-lai-o-the-gioi-khac-light-novel-tap-12_2023-04-19_1_52.jpg'),
(166, 53, 1, 'gamers-5-cac-game-thu-va-don-game-over-tuyet-diet_2023-04-19_1_53.jpg'),
(167, 53, 2, 'gamers-5-cac-game-thu-va-don-game-over-tuyet-diet_2023-04-19_2_53.jpg'),
(168, 53, 3, 'gamers-5-cac-game-thu-va-don-game-over-tuyet-diet_2023-04-19_3_53.jpg'),
(169, 53, 4, 'gamers-5-cac-game-thu-va-don-game-over-tuyet-diet_2023-04-19_4_53.jpg'),
(170, 54, 1, 'ky-si-rong-bat-bai_2023-04-19_1_54.jpg'),
(171, 55, 1, 'hanh-trinh-tro-thanh-nha-tham-hiem-cua-chang-linh-danh-thue-ban-han-tap-3_2023-04-19_1_55.jpg'),
(172, 55, 2, 'hanh-trinh-tro-thanh-nha-tham-hiem-cua-chang-linh-danh-thue-ban-han-tap-3_2023-04-19_2_55.jpg'),
(173, 55, 3, 'hanh-trinh-tro-thanh-nha-tham-hiem-cua-chang-linh-danh-thue-ban-han-tap-3_2023-04-19_3_55.jpg'),
(174, 55, 4, 'hanh-trinh-tro-thanh-nha-tham-hiem-cua-chang-linh-danh-thue-ban-han-tap-3_2023-04-19_4_55.jpg'),
(175, 55, 5, 'hanh-trinh-tro-thanh-nha-tham-hiem-cua-chang-linh-danh-thue-ban-han-tap-3_2023-04-19_5_55.jpg'),
(176, 56, 1, 'nhan-vat-ha-cap-tomozaki_2023-04-19_1_56.jpg'),
(177, 57, 1, 'phuong-phap-dao-tao-nu-chinh-nhat-nhoa_2023-04-19_1_57.jpg'),
(178, 58, 1, 'hiep-si-luu-ban_2023-04-19_1_58.jpg'),
(179, 58, 2, 'hiep-si-luu-ban_2023-04-19_2_58.jpg'),
(180, 58, 3, 'hiep-si-luu-ban_2023-04-19_3_58.jpg'),
(181, 58, 4, 'hiep-si-luu-ban_2023-04-19_4_58.jpg'),
(182, 59, 1, 'bluelock-tap-3_2023-04-19_1_59.jpg'),
(183, 60, 1, 'tham-tu-lung-danh-conan-tap-51-100_2023-04-19_1_60.jpg'),
(184, 60, 2, 'tham-tu-lung-danh-conan-tap-51-100_2023-04-19_2_60.jpg'),
(185, 61, 1, 'relife-tron-bo_2023-04-19_1_61.jpg'),
(186, 62, 1, 'our-name-boxset-3-tap_2023-04-19_1_62.jpg'),
(187, 62, 2, 'our-name-boxset-3-tap_2023-04-19_2_62.jpg'),
(188, 62, 3, 'our-name-boxset-3-tap_2023-04-19_3_62.jpg'),
(189, 63, 1, 'van-hao-luu-lac-1_2023-04-19_1_63.jpg'),
(190, 64, 1, 'fsfzfz_2023-04-20_1_64.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_product_option`
--

CREATE TABLE `tsh_product_option` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_product_sale`
--

CREATE TABLE `tsh_product_sale` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `price_sale` decimal(10,0) DEFAULT NULL,
  `date_begin` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tsh_product_sale`
--

INSERT INTO `tsh_product_sale` (`id`, `product_id`, `price_sale`, `date_begin`, `date_end`) VALUES
(34, 45, '70000', '2023-04-16 00:00:00', '2023-05-14 00:00:00'),
(36, 47, '100000', '2023-04-16 00:00:00', '2023-04-28 00:00:00'),
(37, 48, '270000', '2023-04-16 00:00:00', '2023-04-30 00:00:00'),
(38, 49, '80750', '2023-04-19 00:00:00', '2023-05-07 00:00:00'),
(39, 50, '128000', '2023-04-19 00:00:00', '2023-05-05 00:00:00'),
(40, 51, '109000', '2023-04-19 00:00:00', '2023-05-14 00:00:00'),
(41, 52, NULL, NULL, NULL),
(42, 53, NULL, NULL, NULL),
(43, 54, NULL, NULL, NULL),
(44, 55, NULL, NULL, NULL),
(45, 56, NULL, NULL, NULL),
(46, 57, NULL, NULL, NULL),
(47, 58, NULL, NULL, NULL),
(48, 59, NULL, NULL, NULL),
(49, 60, NULL, NULL, NULL),
(50, 61, NULL, NULL, NULL),
(51, 62, '100000', '2023-04-19 00:00:00', '2023-04-29 00:00:00'),
(52, 63, NULL, NULL, NULL),
(53, 64, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_product_store`
--

CREATE TABLE `tsh_product_store` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `qty` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tsh_product_store`
--

INSERT INTO `tsh_product_store` (`id`, `product_id`, `price`, `qty`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(37, 45, '85000', 998, 1, NULL, '2023-04-15 02:23:55', '2023-04-21 00:46:11'),
(39, 47, '126000', 1000, 1, 1, '2023-04-15 02:36:46', '2023-04-16 01:08:07'),
(40, 48, '300000', 1000, 1, 1, '2023-04-16 03:47:02', '2023-04-16 03:50:42'),
(41, 49, '95000', 1000, 1, NULL, '2023-04-19 00:40:22', '2023-04-19 00:40:22'),
(42, 50, '138000', 1000, 1, NULL, '2023-04-19 00:50:18', '2023-04-19 00:50:18'),
(43, 51, '129000', 1000, 1, NULL, '2023-04-19 00:57:34', '2023-04-19 00:57:34'),
(44, 52, '120000', 1000, 1, NULL, '2023-04-19 01:06:55', '2023-04-19 01:06:55'),
(45, 53, '108000', 1000, 1, NULL, '2023-04-19 01:12:56', '2023-04-19 01:12:56'),
(46, 54, '99000', 1000, 1, NULL, '2023-04-19 01:16:37', '2023-04-19 01:16:37'),
(47, 55, '139000', 1000, 1, NULL, '2023-04-19 01:21:23', '2023-04-19 01:21:23'),
(48, 56, '111000', 1000, 1, NULL, '2023-04-19 01:24:54', '2023-04-19 01:24:54'),
(49, 57, '270000', 1000, 1, NULL, '2023-04-19 01:30:22', '2023-04-19 01:30:22'),
(50, 58, '118000', 1000, 1, NULL, '2023-04-19 01:34:04', '2023-04-19 01:34:04'),
(51, 59, '35000', 1000, 1, NULL, '2023-04-19 05:36:41', '2023-04-19 05:36:41'),
(52, 60, '28000', 1, 1, NULL, '2023-04-19 05:39:09', '2023-04-19 05:39:09'),
(53, 61, '78000', 100, 1, NULL, '2023-04-19 05:41:06', '2023-04-19 05:41:06'),
(54, 62, '127000', 100, 1, 1, '2023-04-19 05:43:59', '2023-04-19 05:44:51'),
(55, 63, '45000', 100, 1, NULL, '2023-04-19 05:46:51', '2023-04-19 05:46:51'),
(56, 64, '123456', 122, 1, NULL, '2023-04-19 18:55:04', '2023-04-21 00:46:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_product_value`
--

CREATE TABLE `tsh_product_value` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `option_id` int(10) UNSIGNED NOT NULL,
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `value` varchar(255) NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_roles`
--

CREATE TABLE `tsh_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `permissions` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_slider`
--

CREATE TABLE `tsh_slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `position` varchar(255) NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tsh_slider`
--

INSERT INTO `tsh_slider` (`id`, `name`, `slug`, `link`, `image`, `sort_order`, `position`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(5, 'sale', 'sale', 'sale', 'sale.jpg', 0, 'slideshow', 1, NULL, 1, '2023-04-20 18:29:29', '2023-04-20 18:29:29'),
(6, 'bôk', 'bok', 'book', 'bok.jpg', 1, 'slideshow', 1, NULL, 1, '2023-04-20 22:05:05', '2023-04-20 22:05:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_topic`
--

CREATE TABLE `tsh_topic` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(1000) NOT NULL,
  `slug` varchar(1000) NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `metakey` varchar(1000) NOT NULL,
  `metadesc` varchar(1000) NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tsh_topic`
--

INSERT INTO `tsh_topic` (`id`, `name`, `slug`, `parent_id`, `sort_order`, `metakey`, `metadesc`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Sách hay', 'sach-hay', 0, 0, 'Sách hay', '<p>S&aacute;ch hay</p>', 1, NULL, 1, '2023-04-15 01:47:53', '2023-04-15 01:47:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_user`
--

CREATE TABLE `tsh_user` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `actived_token` varchar(100) DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender` tinyint(3) UNSIGNED DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `roles` varchar(255) NOT NULL DEFAULT '0',
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tsh_user`
--

INSERT INTO `tsh_user` (`id`, `name`, `email`, `phone`, `username`, `password`, `remember_token`, `actived_token`, `expires_at`, `address`, `gender`, `image`, `roles`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'h0918146697@gmail.com', '0918146697', 'admin', '$2y$10$KFCSZzkQDTsRwu2ER/TSE.63GYVXQ16eBoQPWuHIwvGuNtcsp2Qvi', 'd3ndknSLARBJWUU6o7PFrCBWZ70zSbeIVvCMonLi9w3MzGoXZbEt4UoxdePt', NULL, NULL, '147 Phuoc Long B', 0, 'user_men.png', '1', 1, 1, 1, '2023-03-17 00:17:28', '2023-03-25 08:45:20'),
(2, 'TruongHoang', 'h0918146697@gmail.com', '0343086645', 'QLBH', '$2y$10$/ABWABtBBUEox09iC4DKc.8SJE/qnOcOdQ/ZrSmbOZtlSOzVgKjTe', NULL, NULL, NULL, '124', 0, 'user_men.png', '0', 1, 1, 1, '2023-03-17 00:16:38', '2023-03-25 21:49:59'),
(7, 'ss', 'a@gmail.com', '034545', 'ryeyeyeye', '$2y$10$.Ii9G/QNqEMWhgMO9K1l0.cL.Oxfnt5npesmDp.ljVzcaNa/HMWcW', NULL, NULL, NULL, 'ss', 0, 'user_men.png', '1', 1, 1, 2, '2023-03-25 08:55:50', '2023-03-25 08:58:02'),
(8, 'QLBHQLBHQLBHQLBH', 'h3415@gmail.com', '034011', 'Hoang120', '$2y$10$s0G0SECdKJ5YTbMAE88z6.lmXzFqhldMhlcrNqUE8bre8cr8OibsC', NULL, NULL, NULL, 'svsvc', 0, 'user_men.png', '0', 8, 1, 2, '2023-03-25 22:00:08', '2023-04-12 20:32:51'),
(14, 'h0918146697', 'h0918146697@gmail.com', NULL, 'h0918146697', '$2y$10$mtnSOx1BD290BDP1Wwa1ouvBXJcpKLu9oVaQRaV3Zq81jBXb66hyy', NULL, NULL, NULL, NULL, 0, 'user_men.png', '0', NULL, NULL, 1, '2023-04-06 21:19:40', '2023-04-06 21:19:50'),
(17, 'hoangfg', 'dochanh2303@gmail.com', NULL, 'hoangfg', '$2y$10$8IJqmojSe8soBxjavMXHpeep2xxwaAw/QL/KdoCoEDftpaMR7kWKy', NULL, NULL, NULL, NULL, 0, 'user_men.png', '0', NULL, NULL, 1, '2023-04-08 10:16:34', '2023-04-11 09:40:27'),
(19, '321', '321@gmail.com', '3213213213', '32121', '$2y$10$yWXP9u4s0pOaRDv7x6clSOPfC7XqUGM7vBpQK1NnFLHag46udFQJ.', NULL, NULL, NULL, '321', 0, 'user_men.png', '1', 1, NULL, 1, '2023-04-14 05:27:42', '2023-04-14 05:27:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_users`
--

CREATE TABLE `tsh_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tsh_user_roles`
--

CREATE TABLE `tsh_user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tsh_brand`
--
ALTER TABLE `tsh_brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsh_cart`
--
ALTER TABLE `tsh_cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsh_category`
--
ALTER TABLE `tsh_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsh_comment`
--
ALTER TABLE `tsh_comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsh_config`
--
ALTER TABLE `tsh_config`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsh_contact`
--
ALTER TABLE `tsh_contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsh_link`
--
ALTER TABLE `tsh_link`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsh_menu`
--
ALTER TABLE `tsh_menu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `tsh_migrations`
--
ALTER TABLE `tsh_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsh_order`
--
ALTER TABLE `tsh_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsh_orderdetail`
--
ALTER TABLE `tsh_orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsh_personal_access_tokens`
--
ALTER TABLE `tsh_personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tsh_personal_access_tokens_token_unique` (`token`),
  ADD KEY `tsh_personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `tsh_post`
--
ALTER TABLE `tsh_post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsh_product`
--
ALTER TABLE `tsh_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsh_product_image`
--
ALTER TABLE `tsh_product_image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsh_product_option`
--
ALTER TABLE `tsh_product_option`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsh_product_sale`
--
ALTER TABLE `tsh_product_sale`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsh_product_store`
--
ALTER TABLE `tsh_product_store`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsh_product_value`
--
ALTER TABLE `tsh_product_value`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsh_roles`
--
ALTER TABLE `tsh_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tsh_roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `tsh_slider`
--
ALTER TABLE `tsh_slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsh_topic`
--
ALTER TABLE `tsh_topic`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsh_user`
--
ALTER TABLE `tsh_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tsh_users`
--
ALTER TABLE `tsh_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tsh_users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `tsh_user_roles`
--
ALTER TABLE `tsh_user_roles`
  ADD PRIMARY KEY (`role_id`),
  ADD KEY `tsh_user_roles_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tsh_brand`
--
ALTER TABLE `tsh_brand`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `tsh_cart`
--
ALTER TABLE `tsh_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `tsh_category`
--
ALTER TABLE `tsh_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tsh_comment`
--
ALTER TABLE `tsh_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT cho bảng `tsh_config`
--
ALTER TABLE `tsh_config`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tsh_contact`
--
ALTER TABLE `tsh_contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tsh_link`
--
ALTER TABLE `tsh_link`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `tsh_menu`
--
ALTER TABLE `tsh_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã Menu', AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT cho bảng `tsh_migrations`
--
ALTER TABLE `tsh_migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `tsh_order`
--
ALTER TABLE `tsh_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tsh_orderdetail`
--
ALTER TABLE `tsh_orderdetail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `tsh_personal_access_tokens`
--
ALTER TABLE `tsh_personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tsh_post`
--
ALTER TABLE `tsh_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tsh_product`
--
ALTER TABLE `tsh_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `tsh_product_image`
--
ALTER TABLE `tsh_product_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT cho bảng `tsh_product_option`
--
ALTER TABLE `tsh_product_option`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tsh_product_sale`
--
ALTER TABLE `tsh_product_sale`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `tsh_product_store`
--
ALTER TABLE `tsh_product_store`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `tsh_product_value`
--
ALTER TABLE `tsh_product_value`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tsh_roles`
--
ALTER TABLE `tsh_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tsh_slider`
--
ALTER TABLE `tsh_slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tsh_topic`
--
ALTER TABLE `tsh_topic`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tsh_user`
--
ALTER TABLE `tsh_user`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tsh_users`
--
ALTER TABLE `tsh_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tsh_user_roles`
--
ALTER TABLE `tsh_user_roles`
  ADD CONSTRAINT `tsh_user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `tsh_roles` (`id`),
  ADD CONSTRAINT `tsh_user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `tsh_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
