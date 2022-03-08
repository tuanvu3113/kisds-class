-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2022 at 10:18 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vie45947_vieclam`
--

-- --------------------------------------------------------

--
-- Table structure for table `gdt_aboutus`
--

CREATE TABLE `gdt_aboutus` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) NOT NULL,
  `title_vn` varchar(255) DEFAULT NULL,
  `link` varchar(150) NOT NULL,
  `label` varchar(150) NOT NULL,
  `picture` varchar(150) NOT NULL,
  `json_pictures` text NOT NULL,
  `content` text NOT NULL,
  `content_vn` text,
  `area` tinyint(4) NOT NULL DEFAULT '1',
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `email_support` varchar(50) NOT NULL,
  `email_sales` varchar(50) NOT NULL,
  `email_other` varchar(50) NOT NULL,
  `phone_support` varchar(25) NOT NULL,
  `phone_sales` varchar(25) NOT NULL,
  `phone_other` varchar(25) NOT NULL,
  `fax_1` varchar(25) NOT NULL,
  `fax_2` varchar(25) NOT NULL,
  `map` text NOT NULL,
  `is_publish` tinyint(4) NOT NULL DEFAULT '0',
  `user_create` char(50) NOT NULL,
  `time_create` datetime DEFAULT NULL,
  `user_update` char(50) NOT NULL,
  `time_update` datetime DEFAULT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gdt_aboutus`
--

INSERT INTO `gdt_aboutus` (`id`, `title`, `title_vn`, `link`, `label`, `picture`, `json_pictures`, `content`, `content_vn`, `area`, `address`, `city`, `state`, `zip_code`, `country`, `email_support`, `email_sales`, `email_other`, `phone_support`, `phone_sales`, `phone_other`, `fax_1`, `fax_2`, `map`, `is_publish`, `user_create`, `time_create`, `user_update`, `time_update`, `is_delete`) VALUES
(4, 'Liên hệ', 'Contact Info', '97845 Baker st. 567 Los Angeles - US', 'Liên hệ', 'Bac.jpg', '[{\"name\":\"Bac.jpg\",\"label\":\"\",\"link\":\"\",\"display\":1}]', '<h2><span style=\"font-size:16px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>CÔNG TY TNHH LH WORK</strong></span></span></h2>\n\n<div><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\">Hotline: </span></span></div>\n\n<ul style=\"margin-left:40px\">\n	<li><span style=\"font-family:arial,helvetica,sans-serif; font-size:16px\">Khu vực Đồng Nai:&nbsp;</span><strong><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\"><a href=\"tel:+842871097338\">0287.1097.338</a>&nbsp;</span></span></strong></li>\n	<li><span style=\"font-family:arial,helvetica,sans-serif; font-size:16px\">Khu vực Bình Dương:&nbsp;</span><strong><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\"><a href=\"tel:+842871097337\">0287.1097.337</a>&nbsp;</span></span></strong></li>\n	<li><span style=\"font-family:arial,helvetica,sans-serif; font-size:16px\">Khu vực Vũng Tàu:&nbsp;</span><strong><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\"><a href=\"tel:+842871097336\">0287.1097.336</a>&nbsp;</span></span></strong></li>\n</ul>\n\n<div><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\">Email: lhwork@vieclammiennam.vn</span></span><br />\n<span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\">Địa chỉ: C1A tố 7, KP.10, Phường An Bình, Thành phố Biên Hoà, tỉnh Đồng Nai</span></span><br />\n<span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\">Website: https://vieclammiennam.vn</span></span></div>', '<h2><span style=\"font-size:16px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>CÔNG TY TNHH LH WORK</strong></span></span></h2>\n\n<div><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\">Hotline: </span></span></div>\n\n<ul style=\"margin-left:40px\">\n	<li><span style=\"font-family:arial,helvetica,sans-serif; font-size:16px\">Khu vực Đồng Nai:&nbsp;</span><strong><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\"><a href=\"tel:+842871097338\">0287.1097.338</a>&nbsp;</span></span></strong></li>\n	<li><span style=\"font-family:arial,helvetica,sans-serif; font-size:16px\">Khu vực Bình Dương:&nbsp;</span><strong><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\"><a href=\"tel:+842871097337\">0287.1097.337</a>&nbsp;</span></span></strong></li>\n	<li><span style=\"font-family:arial,helvetica,sans-serif; font-size:16px\">Khu vực Vũng Tàu:&nbsp;</span><strong><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\"><a href=\"tel:+842871097336\">0287.1097.336</a>&nbsp;</span></span></strong></li>\n</ul>\n\n<div><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\">Email: lhwork@vieclammiennam.vn</span></span><br />\n<span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\">Địa chỉ: C1A tố 7, KP.10, Phường An Bình, Thành phố Biên Hoà, tỉnh Đồng Nai</span></span><br />\n<span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\">Website: https://vieclammiennam.vn</span></span></div>', 1, '97845 Baker st. 567 Los Angeles - US', '', '', '', '', '', 'shoes@gmail.com', '', '0287.1097.338', '0287.1097.338', '', '', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31339.577701771967!2d106.88482425435237!3d10.929551589159436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1632883929730!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 1, '1', '2020-04-05 09:44:16', '1', '2022-03-02 14:25:18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gdt_config`
--

CREATE TABLE `gdt_config` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `value` text NOT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gdt_config`
--

INSERT INTO `gdt_config` (`id`, `name`, `value`, `is_delete`) VALUES
(1, 'btn_home', '[\"Greystone Solutions\",\"Click Here for More Information\"]', 0),
(2, 'btn_solution', '[\"Contact Us\",\"Let\'s Build Together\"]', 0),
(3, 'btn_detail', '[\"Contact Us\",\"Let\'s Build Together\"]', 0),
(4, 'btn_greystonevn', '[\"Contact Us\",\"Let\'s Build Together\"]', 0),
(5, 'btn_company', '[\"Contact Us\",\"Let\'s Build Together\"]', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gdt_contact`
--

CREATE TABLE `gdt_contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `cellphone` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `content` text,
  `datecreated` datetime DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `isdelete` int(2) DEFAULT '0',
  `reply_content` text,
  `reply_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gdt_email_newsletter`
--

CREATE TABLE `gdt_email_newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gdt_general_pages`
--

CREATE TABLE `gdt_general_pages` (
  `id` int(11) NOT NULL,
  `page_title` varchar(100) DEFAULT NULL,
  `page_content` text,
  `page_image` varchar(100) DEFAULT NULL,
  `page_link` text,
  `date_updated` varchar(45) DEFAULT NULL,
  `page_alias` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gdt_general_pages`
--

INSERT INTO `gdt_general_pages` (`id`, `page_title`, `page_content`, `page_image`, `page_link`, `date_updated`, `page_alias`) VALUES
(0, '', '', '', NULL, '2022-02-16 06:44:28', 'aboutus');

-- --------------------------------------------------------

--
-- Table structure for table `gdt_groups`
--

CREATE TABLE `gdt_groups` (
  `id` int(11) NOT NULL,
  `groupname` varchar(100) NOT NULL,
  `params` varchar(5000) DEFAULT NULL,
  `isadmin` tinyint(1) DEFAULT '0',
  `grouptype` tinyint(1) DEFAULT NULL,
  `datecreate` datetime NOT NULL,
  `usercreate` char(50) NOT NULL,
  `userupdate` char(50) DEFAULT NULL,
  `dateupdate` datetime DEFAULT NULL,
  `isdelete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gdt_groups`
--

INSERT INTO `gdt_groups` (`id`, `groupname`, `params`, `isadmin`, `grouptype`, `datecreate`, `usercreate`, `userupdate`, `dateupdate`, `isdelete`) VALUES
(1, 'Root', '{\"21\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"right\":\"\",\"delete\":\"\"},\"22\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"right\":\"\",\"delete\":\"\"},\"66\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"68\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"81\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"82\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"11\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"right\":\"\",\"delete\":\"\"},\"12\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"}}', 1, 0, '2013-07-01 08:57:48', 'root', 'root', '2022-02-16 12:37:57', 0),
(2, 'Staff', '{\"21\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"right\":\"\",\"delete\":\"\"},\"22\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"right\":\"\",\"delete\":\"\"},\"66\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"68\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"71\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"72\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"73\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"51\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"52\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"}}', 0, 4, '2015-12-20 20:11:21', 'root', 'root', '2021-10-04 10:36:59', 0),
(3, 'Editor', '{\"71\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"72\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"73\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"51\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"},\"52\":{\"view\":\"\",\"add\":\"\",\"edit\":\"\",\"delete\":\"\"}}', 0, 4, '2022-01-18 10:49:36', 'root', NULL, '2022-01-18 10:49:58', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gdt_home`
--

CREATE TABLE `gdt_home` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) NOT NULL,
  `title_vn` varchar(255) DEFAULT NULL,
  `link` varchar(150) NOT NULL,
  `label` varchar(150) NOT NULL,
  `label_vn` varchar(155) DEFAULT NULL,
  `picture` varchar(150) NOT NULL,
  `picture_mobile` varchar(100) NOT NULL,
  `json_pictures` text NOT NULL,
  `content` text NOT NULL,
  `content_vn` text,
  `area` tinyint(4) NOT NULL DEFAULT '1',
  `is_publish` tinyint(4) NOT NULL DEFAULT '0',
  `user_create` char(50) NOT NULL,
  `time_create` datetime DEFAULT NULL,
  `user_update` char(50) NOT NULL,
  `time_update` datetime DEFAULT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gdt_home`
--

INSERT INTO `gdt_home` (`id`, `title`, `title_vn`, `link`, `label`, `label_vn`, `picture`, `picture_mobile`, `json_pictures`, `content`, `content_vn`, `area`, `is_publish`, `user_create`, `time_create`, `user_update`, `time_update`, `is_delete`) VALUES
(1, 'Hình ảnh Trang chủ', 'Hình ảnh Trang chủ', '/home.html', 'LH WORK HỖ TRỢ VIỆC LÀM CHÍNH THỨC', 'LH WORK HỖ TRỢ VIỆC LÀM CHÍNH THỨC', 'stats.jpg', 'stats.jpg', '[{\"name\":\"tamnhin_1.jpg\",\"label\":\"\",\"link\":\"\",\"display\":1,\"mobie\":1,\"pc\":1}]', '<p>LH WORK HỖ TRỢ VIỆC LÀM CHÍNH THỨC</p>', '<p>LH WORK HỖ TRỢ VIỆC LÀM CHÍNH THỨC</p>', 1, 0, '1', '2016-05-22 18:36:05', '1', '2021-12-23 15:28:30', 0),
(2, 'Mobile Life Cycle', NULL, '/slide.html', 'Home Slide', NULL, 'slide.png', '', '[{\"name\":\"app_slide.jpg\",\"label\":\"\",\"link\":\"mobile-app\",\"display\":0},{\"name\":\"cloud_slide.jpg\",\"label\":\"\",\"link\":\"cloud\",\"display\":1},{\"name\":\"call-center_slide.jpg\",\"label\":\"\",\"link\":\"call-center\",\"display\":1},{\"name\":\"repair_slide.jpg\",\"label\":\"\",\"link\":\"repair-facility\",\"display\":1},{\"name\":\"retail_slide.jpg\",\"label\":\"\",\"link\":\"retail-environment\",\"display\":1},{\"name\":\"warehouse_slide.jpg\",\"label\":\"\",\"link\":\"warehouse\",\"display\":1},{\"name\":\"certification_slide.jpg\",\"label\":\"\",\"link\":\"certification\",\"display\":1},{\"name\":\"Test-Tools.jpg\",\"label\":\"\",\"link\":\"hdd-equipment\",\"display\":1},{\"name\":\"App_Slider.jpg\",\"label\":\"\",\"link\":\"mobile-app\",\"display\":1}]', 'Home Slide', NULL, 2, 0, '1', '2016-05-22 18:42:13', '1', '2016-07-27 18:11:52', 1),
(3, 'Technology designed for you', NULL, '/solutions.html', 'Technology designed for you', NULL, 'img1.jpg', '', '[{\"name\":\"img1.png\",\"label\":\"Greystone systems are so easy to use, very intuitive.\",\"link\":\"Linda M.\",\"display\":1},{\"name\":\"calc1.png\",\"label\":\"Greystone understands our needs, they have very innovative solutions.\",\"link\":\"Tony T.\",\"display\":1},{\"name\":\"calc1.png\",\"label\":\"We needed a means to track our product, the Greystone system met and exceeded our needs. Thank you for supporting us with such an outstanding product!\",\"link\":\" Chris P.\",\"display\":1},{\"name\":\"calc1.png\",\"label\":\"The level of professionalism demonstrated by Greystone’s Technical Support personnel is evident in everything they do.\",\"link\":\"Tim S.\",\"display\":1},{\"name\":\"calc1.png\",\"label\":\"Greystone has saved us time, resources and money. I wish we discovered them sooner! Greystone is our number 1 go to for anything mobile device related.\",\"link\":\"Brian W.\",\"display\":1},{\"name\":\"calc1.png\",\"label\":\"We gave Greystone our ‘Wish-List’ for tools and support before they gave us a demo of their abilities. I was pleasantly surprised they had solutions and tools to meet our needs that are easy to use!\",\"link\":\"David E.\",\"display\":1}]', 'Greystone Data Technology is an engineering company that provides innovative, tailored hardware &amp; software solutions from mobile device testing to security imaging technology.', NULL, 3, 0, '1', '2016-05-22 18:45:15', '1', '2016-08-25 12:49:53', 1),
(4, 'TEST', NULL, '1', '1', NULL, 'app_layer_c.png', '', '[{\"name\":\"app_mobile.jpg\",\"label\":\"\",\"link\":\"\",\"display\":0}]', '1', NULL, 1, 1, '1', '2019-06-21 22:36:35', '', NULL, 1),
(5, 'Hình ảnh Trang chủ1', 'Hình ảnh Trang chủ1', '', 'LH WORK HỖ TRỢ VIỆC LÀM CHÍNH THỨC', 'LH WORK HỖ TRỢ VIỆC LÀM CHÍNH THỨC', 'd3f9b46a1fd7d5898cc6.jpg', 'd3f9b46a1fd7d5898cc6.jpg', '[{\"name\":\"d3f9b46a1fd7d5898cc6.jpg\",\"label\":\"\",\"link\":\"\",\"display\":1,\"mobie\":1,\"pc\":1}]', '<p>LH WORK HỖ TRỢ VIỆC LÀM CHÍNH THỨC</p>', '<p>LH WORK HỖ TRỢ VIỆC LÀM CHÍNH THỨC</p>', 1, 0, '1', '2022-01-05 10:08:40', '1', '2022-01-05 11:01:54', 1),
(6, 'Hình trang chủ 2', 'Hình trang chủ 2', '', 'LH WORK HỖ TRỢ VIỆC LÀM CHÍNH THỨC', 'LH WORK HỖ TRỢ VIỆC LÀM CHÍNH THỨC', '1e4866bfc202085c5113.jpg', '1e4866bfc202085c5113.jpg', '[{\"name\":\"1e4866bfc202085c5113.jpg\",\"label\":\"\",\"link\":\"\",\"display\":1,\"mobie\":1,\"pc\":1}]', '<p>LH WORK HỖ TRỢ VIỆC LÀM CHÍNH THỨC</p>', '<p>LH WORK HỖ TRỢ VIỆC LÀM CHÍNH THỨC</p>', 1, 1, '1', '2022-01-05 11:03:45', '1', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gdt_images`
--

CREATE TABLE `gdt_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` varchar(100) DEFAULT NULL,
  `image_file` varchar(100) DEFAULT NULL,
  `isdelete` int(2) DEFAULT '0',
  `date_created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gdt_language`
--

CREATE TABLE `gdt_language` (
  `id` int(11) NOT NULL,
  `language` char(3) DEFAULT 'vn',
  `langpage` char(50) DEFAULT 'all',
  `keyword` char(50) DEFAULT NULL,
  `translation` varchar(250) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gdt_language`
--

INSERT INTO `gdt_language` (`id`, `language`, `langpage`, `keyword`, `translation`, `isdelete`) VALUES
(1, 'vn', 'all', 'search', 'Tìm kiếm', 0),
(2, 'vn', 'all', 'refresh', 'Làm mới', 0),
(3, 'vn', 'all', 'add', 'Thêm mới', 0),
(4, 'vn', 'all', 'edit', 'Sửa', 0),
(5, 'vn', 'all', 'delete', 'Xóa', 0),
(6, 'vn', 'group', 'group_name', 'Nhóm quyền', 0),
(7, 'vn', 'group', 'group_type', 'Loại quyền', 0),
(8, 'vn', 'group', 'select_group_type', 'Chọn loại quyền', 0),
(9, 'vn', 'all', 'school', 'Trường', 0),
(10, 'vn', 'all', 'select_school', 'Chọn trường', 0),
(11, 'vn', 'all', 'stt', 'STT', 0),
(12, 'vn', 'group', 'right', 'Phân quyền', 0),
(13, 'vn', 'group', 'group-empty', 'Nhóm quyền không được trống.', 0),
(14, 'vn', 'all', 'edit-fail', 'Sửa không thành công.', 0),
(15, 'us', 'group', 'group-exists', 'Group existed', 0),
(16, 'us', 'group', 'delete-group', 'Are you sure you want to delete?', 0),
(27, 'us', 'all', 'add_failed', 'Add failed', 0),
(28, 'us', 'all', 'edit_failed', 'Edit failed', 0),
(29, 'us', 'user', 'username', 'Username', 0),
(30, 'us', 'user', 'password', 'Password', 0),
(31, 'us', 'user', 'fullname', 'Fullname', 0),
(32, 'us', 'all', 'avatar', 'Avatar', 0),
(33, 'us', 'group', 'select_group', 'Select group', 0),
(34, 'us', 'user', 'username_empty', 'User name does not empty', 0),
(35, 'us', 'user', 'fullname_empty', 'Full name does not empty', 0),
(36, 'us', 'user', 'password_empty', 'Password does not empty', 0),
(37, 'us', 'all', 'phone-valid', 'Phone number invalid', 0),
(38, 'us', 'user', 'user_exits', 'Username existed', 0),
(39, 'us', 'all', 'email-valid', 'Email invalid', 0),
(40, 'us', 'all', 'empty', ' does not empty', 0),
(43, 'us', 'all', 'exist', 'existed', 0),
(60, 'us', 'all', 'order', 'Order', 0),
(113, 'us', 'all', 'add_success', 'Add success', 0),
(116, 'us', 'all', 'edit_failed', 'Edit failed', 0),
(117, 'us', 'all', 'edit_success', 'Edit success', 0),
(118, 'us', 'all', 'print', 'Print', 0),
(119, 'us', 'all', 'date', 'Date', 0),
(120, 'vn', 'products', 'product_name', 'Tên sản phẩm', 0),
(121, 'us', 'all', 'title', 'Title', 0),
(122, 'us', 'all', 'description', 'Description', 0),
(123, 'us', 'all', 'images', 'Image', 0),
(124, 'us', 'all', 'alias', 'Alias', 0),
(125, 'us', 'all', 'permission_denied', 'Permission denied', 0),
(126, 'vn', 'all', 'error_unknow', 'Lỗi không xác đinh. Liên hệ nhà phát triển để sửa.', 0),
(127, 'us', 'all', 'error_unknow', 'Unknow error. Please contact developer to fix.', 0),
(128, 'us', 'products', 'product_exist', 'Product existed', 0),
(129, 'us', 'all', 'error_select_empty', 'You need select at least only object', 0),
(130, 'us', 'all', 'back', 'Back', 0),
(131, 'us', 'all', 'delete_confirm', 'Are you sure you want to delete?', 0),
(132, 'us', 'all', 'content', 'Content', 0),
(133, 'us', 'all', 'priority', 'Priority', 0),
(134, 'us', 'all', 'summary', 'Summary', 0),
(135, 'us', 'all', 'name', 'Name', 0),
(136, 'us', 'all', 'link', 'Link', 0),
(137, 'us', 'all', 'save', 'Save', 0),
(138, 'us', 'products', 'product_name', 'Product name', 0),
(139, 'us', 'all', 'company', 'Company', 0),
(140, 'us', 'all', 'email', 'Email', 0),
(141, 'us', 'all', 'phone', 'Phone', 0),
(142, 'us', 'all', 'type', 'Type', 0),
(143, 'us', 'contact', 'reply', 'Reply', 0),
(144, 'us', 'all', 'send', 'Send', 0),
(145, 'us', 'all', 'content_empty', 'Content does not empty', 0),
(146, 'us', 'all', 'send_error', 'Send error', 0),
(147, 'us', 'contact', 'replied', 'Replied', 0),
(148, 'us', 'all', 'view', 'View', 0),
(150, 'us', 'profile', 'current_pass', 'Current password', 0),
(151, 'us', 'profile', 'new_pass', 'New password', 0),
(152, 'us', 'profile', 'new_pass_confirm', 'Confirm new password', 0),
(153, 'us', 'profile', 'wrong_pass', 'Wrong password', 0),
(158, 'us', 'all', 'images_large', 'Large image', 0),
(161, 'us', 'all', 'get_image_size_error', 'Can not get image size', 0),
(162, 'us', 'all', 'image_size_error', 'Size of image should be', 0),
(163, 'us', 'all', 'image_large_size_error', 'Size of large image should be', 0),
(164, 'us', 'all', 'search', 'Search', 0),
(165, 'us', 'all', 'refresh', 'Refresh', 0),
(166, 'us', 'all', 'add', 'Add', 0),
(167, 'us', 'all', 'edit', 'Edit', 0),
(168, 'us', 'all', 'delete', 'Delete', 0),
(169, 'us', 'group', 'group_name', 'Group name', 0),
(170, 'us', 'group', 'group_type', 'Group type', 0),
(171, 'us', 'group', 'select_group_type', 'Select group type', 0),
(172, 'us', 'all', 'school', 'Field', 0),
(173, 'us', 'all', 'select_school', 'Select field', 0),
(174, 'us', 'group', 'right', 'Permission', 0),
(175, 'us', 'group', 'group-empty', 'Group does not empty', 0),
(176, 'us', 'all', 'edit-fail', 'Edit fail', 0),
(177, 'us', 'all', 'stt', 'No.', 0),
(178, 'vn', 'all', 'images_large', 'Hình ảnh lớn', 0),
(179, 'vn', 'all', 'get_image_size_error', 'Không thể lấy kích cỡ của hình', 0),
(180, 'vn', 'all', 'image_size_error', 'Kích thước hình ảnh phải là', 0),
(181, 'vn', 'all', 'image_large_size_error', 'Kích thước hình ảnh lớn phải là', 0),
(182, 'us', 'all', 'text_align', 'Text align', 0),
(183, 'us', 'all', 'publish', 'Publish', 0),
(184, 'us', 'menu', 'quan-tri', 'Admin', 0),
(185, 'vn', 'menu', 'quan-tri', 'Quản trị', 0),
(186, 'us', 'menu', 'trang-chu', 'Home', 0),
(187, 'vn', 'menu', 'trang-chu', 'Trang chủ', 0),
(188, 'us', 'menu', 'giai-phap', 'Solutions', 0),
(189, 'vn', 'menu', 'giai-phap', 'Giải pháp', 0),
(190, 'us', 'menu', 'cong-ty', 'Company', 0),
(191, 'vn', 'menu', 'cong-ty', 'Công ty', 0),
(192, 'us', 'menu', 'lien-he', 'Contact US', 0),
(193, 'vn', 'menu', 'lien-he', 'Liên hệ', 0),
(194, 'us', 'menu', 'tro-giup', 'Help', 0),
(195, 'vn', 'menu', 'tro-giup', 'Trợ giúp', 0),
(196, 'us', 'menu', 'nhom-quyen', 'Groups Permission', 0),
(197, 'vn', 'menu', 'nhom-quyen', 'Nhóm quyền', 0),
(198, 'us', 'menu', 'nguoi-dung', 'Users', 0),
(199, 'vn', 'menu', 'nguoi-dung', 'Người dùng', 0),
(200, 'us', 'menu', 'cau-hinh', 'Config', 0),
(201, 'vn', 'menu', 'cau-hinh', 'Cấu hình', 0),
(202, 'us', 'menu', 'danh-sach-giai-phap', 'List solutions', 0),
(203, 'vn', 'menu', 'danh-sach-giai-phap', 'Danh sách giải pháp', 0),
(204, 'us', 'menu', 'chi-tiet-giai-phap', 'Detail solutions', 0),
(205, 'vn', 'menu', 'chi-tiet-giai-phap', 'Chi tiết giải pháp', 0),
(206, 'us', 'menu', 'danh-muc-dau-tu', 'Portfolio', 0),
(207, 'vn', 'menu', 'danh-muc-dau-tu', 'Danh mục đầu tư', 0),
(208, 'us', 'menu', 'chung-nhan', 'Certificate', 0),
(209, 'vn', 'menu', 'chung-nhan', 'Chứng nhận', 0),
(210, 'us', 'menu', 'danh-sach-lien-he', 'Contact List', 0),
(211, 'vn', 'menu', 'danh-sach-lien-he', 'Danh sách liên hệ', 0),
(212, 'us', 'menu', 'thong-tin-lien-he', 'Contact Information', 0),
(213, 'vn', 'menu', 'thong-tin-lien-he', 'Thông tin liên hệ', 0),
(214, 'us', 'menu', 'tai-lieu', 'Documents', 0),
(215, 'vn', 'menu', 'tai-lieu', 'Tài liệu', 0),
(216, 'us', 'menu', 'loi-nhan-xet', 'Testimonials', 0),
(217, 'vn', 'menu', 'loi-nhan-xet', 'Lời nhận xét', 0),
(218, 'us', 'menu', 'thiet-bi-hdd', 'Hdd equipment', 0),
(219, 'vn', 'menu', 'thiet-bi-hdd', 'Thiết bị HDD', 0),
(220, 'us', 'menu', 'tin-tuc', 'News', 0),
(221, 'vn', 'menu', 'tin-tuc', 'Tin tức', 0),
(222, 'us', 'menu', 'san-pham', 'Products', 0),
(223, 'vn', 'menu', 'san-pham', 'Sản phẩm', 0),
(224, 'vn', 'user', 'username', 'Tên tài khoản', 0),
(225, 'vn', 'user', 'password', 'Mật khẩu', 0),
(226, 'vn', 'user', 'fullname', 'Họ và tên', 0),
(227, 'vn', 'user', 'username_empty', 'Tài khoản không được bỏ trống', 0),
(228, 'vn', 'user', 'fullname_empty', 'Họ và tên không được bỏ trống', 0),
(229, 'vn', 'user', 'password_empty', 'Mật khẩu không được bỏ trống', 0),
(230, 'vn', 'user', 'user_exits', 'Tài khoản đã tồn tại', 0),
(231, 'vn', 'all', 'phone', 'Điện thoại', 0),
(232, 'us', 'all', 'tim-thay', 'Found', 0),
(233, 'vn', 'all', 'tim-thay', 'Tìm thấy', 0),
(234, 'us', 'all', 'ket-qua', 'results', 0),
(235, 'vn', 'all', 'ket-qua', 'kết quả', 0),
(236, 'vn', 'all', 'email', 'Email', 0),
(237, 'vn', 'all', 'email-valid', 'Email không hợp lệ', 0),
(238, 'vn', 'all', 'avatar', 'Ảnh đại diện', 0),
(239, 'us', 'all', 'chon-file', 'Choose file', 0),
(240, 'vn', 'all', 'chon-file', 'Chọn file', 0),
(241, 'vn', 'all', 'phone-valid', 'Số điện thoại không hợp lệ', 0),
(242, 'vn', 'all', 'add_failed', 'Thêm mới không thành công', 0),
(243, 'us', 'all', 'chon-nguoi-dung', 'Please choose at least one user', 0),
(244, 'vn', 'all', 'chon-nguoi-dung', 'Vui lòng chọn 1 người dùng', 0),
(245, 'vn', 'all', 'delete_confirm', 'Bạn có chắc chắn muốn xóa?', 0),
(246, 'us', 'all', 'xoa-khong-thanh-cong', 'Delete failed', 0),
(247, 'vn', 'all', 'xoa-khong-thanh-cong', 'Xóa không thành công', 0),
(248, 'vn', 'all', 'save', 'Lưu', 0),
(249, 'us', 'all', 'cancel', 'Cancel', 0),
(250, 'vn', 'all', 'cancel', 'Hủy', 0),
(251, 'vn', 'all', 'title', 'Tiêu đề', 0),
(252, 'us', 'all', 'solution', 'Solution', 0),
(253, 'vn', 'all', 'solution', 'Phương thức', 0),
(254, 'us', 'all', 'vui-long-chon', '-- Please chosse --', 0),
(255, 'vn', 'all', 'vui-long-chon', '-- Vui lòng chọn --', 0),
(256, 'vn', 'all', 'error_select_empty', 'Bạn cần chọn ít nhất một đối tượng', 0),
(257, 'us', 'all', 'save_error', 'Save failed', 0),
(258, 'vn', 'all', 'save_error', 'Lưu không thành công', 0),
(259, 'us', 'all', 'label', 'Label', 0),
(260, 'vn', 'all', 'label', 'Nhãn', 0),
(261, 'us', 'all', 'content', 'Content', 0),
(262, 'vn', 'all', 'content', 'Nội dung', 0),
(264, 'vn', 'all', 'publish', 'Công khai', 0),
(265, 'us', 'all', 'images', 'Images', 0),
(266, 'vn', 'all', 'images', 'Hình ảnh', 0),
(267, 'us', 'all', 'Type', 'Type', 0),
(268, 'vn', 'all', 'Type', 'Kiểu', 0),
(269, 'us', 'all', 'config-information', 'Config information', 0),
(270, 'vn', 'all', 'config-information', 'Thông tin cấu hình', 0),
(271, 'us', 'all', 'btn_home', 'Button Home', 0),
(272, 'vn', 'all', 'btn_home', 'Nút trang chủ', 0),
(273, 'us', 'all', 'btn_greystonevn', 'Button Greystonevn', 0),
(274, 'vn', 'all', 'btn_greystonevn', 'Nút Greystonevn', 0),
(275, 'us', 'all', 'btn_solution', 'Button Solution', 0),
(276, 'vn', 'all', 'btn_solution', 'Nút phương thức', 0),
(277, 'us', 'all', 'btn_detail', 'Button Detail', 0),
(278, 'vn', 'all', 'btn_detail', 'Nút chi tiết', 0),
(279, 'us', 'all', 'btn_company', 'Button company', 0),
(280, 'vn', 'all', 'btn_company', 'Nút công ty', 0),
(281, 'us', 'all', 'view-number', 'View number', 0),
(282, 'vn', 'all', 'view-number', 'Xem số', 0),
(283, 'vn', 'all', 'date', 'Ngày', 0),
(284, 'us', 'all', 'popular', 'Popular', 0),
(285, 'vn', 'all', 'popular', 'Phổ biến', 0),
(286, 'us', 'all', 'show', 'Show', 0),
(287, 'vn', 'all', 'show', 'Hiển thị', 0),
(288, 'us', 'all', 'image-popular', 'Image popular', 0),
(289, 'vn', 'all', 'image-popular', 'Hình ảnh phố biến', 0),
(290, 'us', 'all', 'permision_denied', 'Permision denied', 0),
(291, 'vn', 'all', 'permision_denied', 'Quyền của bạn bị giới hạn', 0),
(292, 'us', 'all', 'author', 'Author', 0),
(293, 'vn', 'all', 'author', 'Tác giả', 0),
(294, 'us', 'all', 'enable', 'Enable', 0),
(295, 'vn', 'all', 'enable', 'Cho phép', 0),
(296, 'us', 'all', 'disable', 'Disable', 0),
(297, 'vn', 'all', 'disable', 'Không cho phép', 0),
(298, 'us', 'all', 'background-img', 'Background img', 0),
(299, 'vn', 'all', 'background-img', 'Hình nền', 0),
(300, 'us', 'all', 'select-images', 'Select Images', 0),
(301, 'vn', 'all', 'select-images', 'Chọn hình ảnh', 0),
(302, 'us', 'all', 'upload-images', 'Upload Images', 0),
(303, 'vn', 'all', 'upload-images', 'Tải hình ảnh', 0),
(304, 'us', 'all', 'picture', 'Picture', 0),
(305, 'vn', 'all', 'picture', 'Hình ảnh', 0),
(306, 'us', 'all', 'link', 'Link', 0),
(307, 'vn', 'all', 'link', 'Đường dẫn', 0),
(308, 'us', 'all', 'function', 'Fuction', 0),
(309, 'vn', 'all', 'function', 'Chức năng', 0),
(310, 'vn', 'all', 'back', 'Quay lại', 0),
(311, 'us', 'all', 'title-is-not-empty', 'Title is not empty', 0),
(312, 'vn', 'all', 'title-is-not-empty', 'Tiêu đề không được bỏ trống', 0),
(313, 'us', 'all', 'picture-not-empty-or-size-not-incorrect', 'The picture has not been selected or size mismatch (1340x1006)', 0),
(314, 'vn', 'all', 'picture-not-empty-or-size-not-incorrect', 'Hình ảnh chưa được chọn hoặc kích thước không khớp (1340x1006)', 0),
(315, 'us', 'all', 'content-not-empty', 'Content is not empty', 0),
(316, 'vn', 'all', 'content-not-empty', 'Nội dung không được bỏ trống', 0),
(317, 'us', 'all', 'item_exist', 'Item Exist', 0),
(318, 'vn', 'all', 'item_exist', 'Thư mục đã tồn tại', 0),
(319, 'vn', 'all', 'description', 'Mô tả', 0),
(320, 'vn', 'products', 'product_exist', 'Sản phẩm đã tồn tại', 0),
(321, 'us', 'all', 'remove', 'Remove', 0),
(322, 'vn', 'all', 'remove', 'Xóa', 0),
(323, 'vn', 'all', 'order', 'Thứ tự', 0),
(324, 'vn', 'all', 'text_align', 'Canh chỉnh', 0),
(325, 'us', 'all', 'icon', 'Icon', 0),
(326, 'vn', 'all', 'icon', 'Biểu tượng', 0),
(327, 'us', 'all', 'color-text', 'Color text', 0),
(328, 'vn', 'all', 'color-text', 'Màu chữ', 0),
(329, 'us', 'all', 'text', 'Text', 0),
(330, 'vn', 'all', 'text', 'Văn bản', 0),
(331, 'us', 'all', 'background-mobile', 'Background Mobile', 0),
(332, 'vn', 'all', 'background-mobile', 'Hình nền điện thoại', 0),
(333, 'us', 'all', 'link-not-empty', 'Link is not empty', 0),
(334, 'vn', 'all', 'link-not-empty', 'Đường dẫn không được trống', 0),
(335, 'us', 'all', 'label-not-empty', 'Label is not empty', 0),
(336, 'vn', 'all', 'label-not-empty', 'Nhãn không được trống', 0),
(337, 'us', 'all', 'icon-not-empty', 'Icon is not empty', 0),
(338, 'vn', 'all', 'icon-not-empty', 'Biểu tượng không được trống', 0),
(339, 'us', 'all', 'color-not-empty', 'Color is not empty', 0),
(340, 'vn', 'all', 'color-not-empty', 'Màu không được trống', 0),
(341, 'us', 'all', 'content-not-empty', 'Content is not empty', 0),
(342, 'vn', 'all', 'content-not-empty', 'Nội dung không được trống', 0),
(343, 'us', 'all', 'list-image-not-empty', 'List image is not empty', 0),
(344, 'vn', 'all', 'list-image-not-empty', 'Danh sách hình ảnh không được trống', 0),
(345, 'us', 'all', 'left', 'Left', 0),
(346, 'vn', 'all', 'left', 'Trái', 0),
(347, 'us', 'all', 'right', 'Right', 0),
(348, 'vn', 'all', 'right', 'Phải', 0),
(349, 'us', 'all', 'center', 'Center', 0),
(350, 'vn', 'all', 'center', 'Chính giữa', 0),
(351, 'us', 'all', 'single-picture', 'Single Picture', 0),
(352, 'vn', 'all', 'single-picture', 'Ảnh đơn', 0),
(353, 'us', 'all', 'multi-picture', 'Multi picture', 0),
(354, 'vn', 'all', 'multi-picture', 'Nhiều hình ảnh', 0),
(355, 'us', 'all', 'slide', 'Slide', 0),
(356, 'vn', 'all', 'slide', 'Trình chiếu', 0),
(357, 'us', 'all', 'top', 'Top', 0),
(358, 'vn', 'all', 'top', 'Phái trên', 0),
(359, 'us', 'all', 'align-picture', 'Align picture', 0),
(360, 'vn', 'all', 'align-picture', 'Canh chỉnh hình', 0),
(361, 'us', 'all', 'certificate-footer', 'Certificate footer', 0),
(362, 'vn', 'all', 'certificate-footer', 'Chứng nhận chân trang', 0),
(363, 'us', 'all', 'no', 'No', 0),
(364, 'vn', 'all', 'no', 'Không đồng ý', 0),
(365, 'us', 'all', 'yes', 'Yes', 0),
(366, 'vn', 'all', 'yes', 'Đồng ý', 0),
(367, 'us', 'all', 'title-picture', 'Title picture', 0),
(368, 'vn', 'all', 'title-picture', 'Tiêu đề hình ảnh', 0),
(369, 'us', 'all', 'text-picture', 'Text picture', 0),
(370, 'vn', 'all', 'text-picture', 'Văn bản hình ảnh', 0),
(371, 'us', 'all', 'solution-not-selected', 'Solution is not selected', 0),
(372, 'vn', 'all', 'solution-not-selected', 'Giải pháp không được chọn', 0),
(373, 'us', 'all', 'author-not-empty', 'Author is not empty', 0),
(374, 'vn', 'all', 'author-not-empty', 'Tác giả không được để trống', 0),
(375, 'vn', 'all', 'Top-Left', 'Phía trên-Bên trái', 0),
(376, 'vn', 'all', 'Top-Right', 'Phía trên-Bên phải', 0),
(377, 'vn', 'all', 'Top-Center', 'Phía trên-Chính giữa', 0),
(378, 'vn', 'all', 'Bottom-Left', 'Phía dưới-Bên trái', 0),
(379, 'vn', 'all', 'Bottom-Right', 'Phía dưới-Bên phải', 0),
(380, 'vn', 'all', 'Bottom-Center', 'Phía dưới-Chính giữa', 0),
(381, 'vn', 'all', 'Center-Left', 'Chính giữa-Bên trái', 0),
(382, 'vn', 'all', 'Center-Right', 'Chính giữa-Bên phải', 0),
(383, 'vn', 'all', 'Center-Center', 'Chính giữa- Chính giữa', 0),
(384, 'us', 'all', 'Top-Left', 'Top-Left', 0),
(385, 'us', 'all', 'Top-Right', 'Top-Right', 0),
(386, 'us', 'all', 'Top-Center', 'Top-Center', 0),
(387, 'us', 'all', 'Bottom-Left', 'Bottom-Left', 0),
(388, 'us', 'all', 'Bottom-Right', 'Bottom-Right', 0),
(389, 'us', 'all', 'Bottom-Center', 'Bottom-Center', 0),
(390, 'us', 'all', 'Center-Left', 'Center-Left', 0),
(391, 'us', 'all', 'Center-Right', 'Center-Right', 0),
(392, 'us', 'all', 'Center-Center', 'Center-Center', 0),
(393, 'us', 'all', 'file-features', 'File features', 0),
(394, 'vn', 'all', 'file-features', 'Tính năng của file', 0),
(395, 'vn', 'all', 'Parent', NULL, 0),
(396, 'us', 'all', 'name', 'Name', 0),
(397, 'vn', 'all', 'name', 'Tên menu', 0),
(398, 'us', 'all', 'parent', 'Parent', 0),
(399, 'vn', 'all', 'parent', 'Thư mục cha', 0),
(400, 'us', 'menu', 'phuong-cham', 'Purpose', 0),
(401, 'vn', 'menu', 'phuong-cham', 'Phương châm', 0),
(402, 'us', 'menu', 'thanh-vien', 'Member', 0),
(403, 'vn', 'menu', 'thanh-vien', 'Thành viên', 0),
(404, 'us', 'menu', 've-chung-toi', 'About Us', 0),
(405, 'vn', 'menu', 've-chung-toi', 'Về chúng tôi', 0),
(406, 'us', 'all', 'luu-thanh-cong', 'Save Successful', 0),
(407, 'vn', 'all', 'luu-thanh-cong', 'Lưu thành công', 0),
(408, 'us', 'all', 'learn-more', 'Lern more', 0),
(409, 'vn', 'all', 'learn-more', 'Đọc thêm', 0),
(410, 'vn', 'profile', 'current_pass', 'Mật khẩu hiện tại', 0),
(411, 'vn', 'profile', 'new_pass', 'Mật khẩu mới', 0),
(412, 'vn', 'profile', 'new_pass_confirm', 'Nhập lại mật khẩu mới', 0),
(413, 'us', 'all', 'my-profile', 'My Profile', 0),
(414, 'vn', 'all', 'my-profile', 'Thông tin của tôi', 0),
(415, 'us', 'all', 'log-out', 'Log out', 0),
(416, 'vn', 'all', 'log-out', 'Thoát', 0),
(417, 'us', 'menu', 'home_image', 'Home Image', 0),
(418, 'vn', 'menu', 'home_image', 'Hình ảnh trang chủ', 0),
(419, 'us', 'menu', 'home_public', 'Home public', 0),
(420, 'vn', 'menu', 'home_public', 'Thông tin trang chủ', 0),
(421, 'vn', 'all', '', NULL, 0),
(422, 'us', 'all', 'address', 'Address', 0),
(423, 'vn', 'all', 'address', 'Địa chỉ', 0),
(424, 'us', 'all', 'city', 'City', 0),
(425, 'vn', '', 'city', 'Thành phố', 0),
(426, 'us', 'all', 'state', 'State', 0),
(427, 'vn', 'all', 'state', 'Tiểu bang', 0),
(428, 'us', 'all', 'zip-code', 'Zip code', 0),
(429, 'vn', 'all', 'zip-code', 'Mã bưu điện', 0),
(430, 'us', 'all', 'country', 'Country', 0),
(431, 'vn', 'all', 'country', 'Quốc gia', 0),
(432, 'us', 'all', 'email-support', 'Email support', 0),
(433, 'vn', 'all', 'email-support', 'Email hổ trợ', 0),
(434, 'us', 'all', 'email-sales', 'Email sales', 0),
(435, 'vn', 'all', 'email-sales', 'Email bán hàng', 0),
(436, 'us', 'all', 'phone-support', 'Phone support', 0),
(437, 'vn', 'all', 'phone-support', 'Điện thoại hổ trợ', 0),
(438, 'us', 'all', 'phone-sales', 'Phone sales', 0),
(439, 'vn', 'all', 'phone-sales', 'Điện thoại bán hàng', 0),
(440, 'us', 'all', 'full-name', 'Full name', 0),
(441, 'vn', 'all', 'full-name', 'Họ và tên', 0),
(442, 'vn', 'all', 'company', 'Công ty', 0),
(443, 'us', 'all', 'your-message', 'Your message', 0),
(444, 'vn', 'all', 'your-message', 'Tin nhắn của bạn', 0),
(445, 'us', 'all', 'send-message', 'Send Message', 0),
(446, 'vn', 'all', 'send-message', 'Gửi tin nhắn', 0),
(447, 'us', 'all', 'technology', 'Technology', 0),
(448, 'vn', 'all', 'technology', 'Công nghệ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gdt_menus`
--

CREATE TABLE `gdt_menus` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `route` char(25) NOT NULL,
  `classicon` char(50) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `params` char(100) NOT NULL DEFAULT 'view,add,edit,delete',
  `keylang` char(100) DEFAULT NULL,
  `ordering` int(11) NOT NULL DEFAULT '1',
  `isdelete` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gdt_menus`
--

INSERT INTO `gdt_menus` (`id`, `name`, `route`, `classicon`, `parent`, `params`, `keylang`, `ordering`, `isdelete`) VALUES
(1, 'Home', '#', 'fa-dashboard', 0, '', 'quan-tri', 17, 0),
(2, 'Home', '#', 'fa-dashboard', 0, '', 'trang-chu', 2, 0),
(5, 'Contact US', '#', 'fa-envelope-o', 0, '', 'lien-he', 16, 0),
(11, 'Groups Permission', 'group', '', 1, 'view,add,edit,right,delete', 'nhom-quyen', 1, 0),
(12, 'Users', 'user', '', 1, 'view,add,edit,delete', 'nguoi-dung', 2, 0),
(21, 'Home page', 'home_image', '', 2, 'view,add,edit,right,delete', 'home_image', 1, 0),
(22, 'Public page', 'home_public', '', 2, 'view,add,edit,right,delete', 'home_public', 2, 0),
(66, 'News', 'news', '', 2, 'view,add,edit,delete', 'tin-tuc', 6, 0),
(68, 'Menu', 'menu', '', 2, 'view,add,edit,delete', NULL, 8, 0),
(81, 'Contact List', 'contact', '', 5, 'view,add,edit,delete', 'danh-sach-lien-he', 1, 0),
(82, 'Contact Information', 'contact_information', '', 5, 'view,add,edit,delete', 'thong-tin-lien-he', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gdt_news`
--

CREATE TABLE `gdt_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_title` varchar(255) DEFAULT NULL,
  `news_summary` text,
  `news_content` text,
  `news_image` varchar(100) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `isdelete` int(2) DEFAULT '0',
  `news_priority` int(10) DEFAULT NULL,
  `views_number` int(11) DEFAULT '0',
  `author` varchar(45) DEFAULT NULL,
  `popular` tinyint(4) DEFAULT '0',
  `isshow` tinyint(4) DEFAULT '0',
  `date_update` datetime DEFAULT NULL,
  `news_image_right` varchar(100) DEFAULT NULL,
  `news_image_mobile` varchar(100) DEFAULT NULL,
  `news_image_mobile_right` varchar(100) DEFAULT NULL,
  `tag` varchar(45) DEFAULT NULL,
  `categories` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gdt_news`
--

INSERT INTO `gdt_news` (`id`, `news_title`, `news_summary`, `news_content`, `news_image`, `date_created`, `isdelete`, `news_priority`, `views_number`, `author`, `popular`, `isshow`, `date_update`, `news_image_right`, `news_image_mobile`, `news_image_mobile_right`, `tag`, `categories`) VALUES
(1, 'Chống dịch quyết liệt, vì sao Singapore vẫn gặp cú sốc?', '<p>A bomb blast hits a police building in Turkey&#39;s majority-Kurdish Diyarbakir province, reportedly killing five people and injuring at least 36.</p>\r\n', '<p style=\"text-align:justify\"><span style=\"font-size:14px\">D&ugrave; đ&atilde; d&ugrave;ng nhiều biện ph&aacute;p cứng rắn để kiềm chế dịch bệnh, số ca nhiễm ở Singapore vẫn tăng mạnh do l&agrave;n s&oacute;ng người trở về từ nước ngo&agrave;i v&agrave; t&igrave;nh trạng l&acirc;y nhiễm trong cộng đồng.</span></p>\n\n<div class=\"the-article-body\">\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Đầu th&aacute;ng 3, Singapore chỉ c&oacute; hơn 100 ca nhiễm. Đảo quốc Đ&ocirc;ng Nam &Aacute; được khắp thế giới nh&igrave;n nhận như một h&igrave;nh mẫu trong cuộc chiến chống Covid-19 khi sớm khống chế được dịch bệnh nhờ triển khai sớm c&aacute;c biện ph&aacute;p hạn chế đi lại, c&aacute;ch ly, theo d&otilde;i nghi&ecirc;m ngặt cũng như x&eacute;t nghiệm tr&ecirc;n diện rộng.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">T&iacute;nh đến 25/3, Singapore đ&atilde; tiến h&agrave;nh 6.800 x&eacute;t nghiệm/1 triệu người, nhiều hơn cả H&agrave;n Quốc v&agrave; Đ&agrave;i Loan với c&aacute;c con số lần lượt l&agrave; 6.500 v&agrave; 1.000 x&eacute;t nghiệm/1 triệu người. Trường học v&agrave; ngay cả trung t&acirc;m thương mại tr&ecirc;n quốc đảo sư tử vẫn mở cửa, nhịp sống vẫn diễn ra b&igrave;nh thường, theo <em>South China Morning Post</em>.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Tuy nhi&ecirc;n, tất cả thay đổi ch&oacute;ng mặt chỉ trong 1 th&aacute;ng. Ng&agrave;y 1/4, Singapore vượt mốc 1.000 ca nhiễm, bức tranh kh&ocirc;ng c&ograve;n &quot;m&agrave;u hồng&quot;. Số ca nhiễm tăng kỷ lục trong ng&agrave;y 1/4 (74 ca) v&agrave; 2/4 (49 ca), theo <em>Straits Times</em>.</span></p>\n\n<table align=\"center\" class=\"picture\">\n	<tbody>\n		<tr>\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\"><img alt=\"Chong dich quyet liet, vi sao Singapore van gap cu soc 1.000 ca nhiem? hinh anh 1 Lan_song_nguoi_tro_ve_tu_nuoc_ngoai_la_mot_trong_nhung_nguyen_nhan_dan_den_dot_bung_phat_dich_benh_moi_o_Singapore._Anh_Reuters.jpg\" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/zdhwqwqd2/2020_04_01/Lan_song_nguoi_tro_ve_tu_nuoc_ngoai_la_mot_trong_nhung_nguyen_nhan_dan_den_dot_bung_phat_dich_benh_moi_o_Singapore._Anh_Reuters.jpg\" /></span></td>\n		</tr>\n		<tr>\n			<td>\n			<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em>L&agrave;n s&oacute;ng người trở về từ nước ngo&agrave;i l&agrave; một trong những nguy&ecirc;n nh&acirc;n dẫn đến đợt b&ugrave;ng ph&aacute;t dịch bệnh mới ở Singapore. Ảnh: Reuters.</em></span></p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<div class=\"banner size_masthead\" id=\"advMiddle1\" style=\"display: block;\">\n<div class=\"z2-zads-zone\" id=\"adtima-zone-2782058279008172787\">\n<div id=\"adtimaDivWrapper_2782058279008172787\" style=\"display: block; text-align: justify;\">&nbsp;</div>\n</div>\n</div>\n\n<p style=\"text-align: justify;\"><strong><span style=\"font-size:16px\">&quot;L&agrave;n s&oacute;ng thứ hai&quot;</span></strong></p>\n\n<p style=\"text-align: justify;\"><span style=\"font-size:14px\">Theo c&aacute;c chuy&ecirc;n gia, số lượng ca nhiễm tăng vọng tại Singapore cho thấy một l&agrave;n s&oacute;ng l&acirc;y nhiễm thứ hai ở đất nước 5,7 triệu d&acirc;n.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">L&agrave;n s&oacute;ng thứ nhất bắt nguồn từ du kh&aacute;ch từ Trung Quốc đại lục sang, những ca nhiễm đầu ti&ecirc;n xuất hiện trước khi ch&iacute;nh quyền Singapore kịp thực hiện bất kỳ hạn chế du lịch n&agrave;o.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Khi số người mắc bệnh tăng l&ecirc;n, Singapore đ&atilde; triển khai c&aacute;c biện ph&aacute;p hạn chế du lịch nghi&ecirc;m ngặt, đầu ti&ecirc;n nhắm v&agrave;o c&aacute;c du kh&aacute;ch nước ngo&agrave;i đến từ Trung Quốc; sau đ&oacute; l&agrave; H&agrave;n Quốc, Italy v&agrave; Iran; cuối c&ugrave;ng l&agrave; cấm tất cả du kh&aacute;ch nước ngo&agrave;i.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Tuy nhi&ecirc;n, l&agrave;n s&oacute;ng l&acirc;y nhiễm thứ hai phần lớn li&ecirc;n quan đến người Singapore trở về từ c&aacute;c nước như Mỹ v&agrave; Anh, nơi dịch bệnh đang lan rộng. Đ&aacute;ng lo ngại hơn l&agrave; đợt b&ugrave;ng ph&aacute;t mới c&oacute; nhiều ca l&acirc;y nhiễm tại địa phương v&agrave; một số ca kh&ocirc;ng x&aacute;c định được nguồn l&acirc;y nhiễm.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Đối ph&oacute; với l&agrave;n s&oacute;ng thứ hai, ch&iacute;nh quyền Singapore đ&atilde; thực hiện c&aacute;c biện ph&aacute;p c&aacute;ch ly x&atilde; hội nghi&ecirc;m ngặt hơn, cấm nhập cảnh đối với tất cả du kh&aacute;ch từ ng&agrave;y 23/3, ng&agrave;y 27/3 đ&oacute;ng cửa c&aacute;c qu&aacute;n bar v&agrave; tụ điểm vui chơi về đ&ecirc;m, hạn chế tụ tập từ 10 người v&agrave; &aacute;p dụng c&aacute;c h&igrave;nh phạt cho những c&aacute; nh&acirc;n v&agrave; nh&agrave; h&agrave;ng kh&ocirc;ng đảm bảo khoảng c&aacute;ch 1 m giữa c&aacute;c kh&aacute;ch h&agrave;ng.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ch&iacute;nh phủ k&ecirc;u gọi người d&acirc;n ở nh&agrave;, chỉ ra ngo&agrave;i khi thực sự cần thiết.</span></p>\n\n<table align=\"center\" class=\"picture\">\n	<tbody>\n		<tr>\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\"><img alt=\"Chong dich quyet liet, vi sao Singapore van gap cu soc 1.000 ca nhiem? hinh anh 2 Chinh_phu_Singapore_khuyen_cao_nguoi_dan_thuc_han_che_toi_da_viec_ra_khoi_nha_de_kiem_soat_dich_benh._Anh_AFP.jpg\" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/zdhwqwqd2/2020_04_01/Chinh_phu_Singapore_khuyen_cao_nguoi_dan_thuc_han_che_toi_da_viec_ra_khoi_nha_de_kiem_soat_dich_benh._Anh_AFP.jpg\" /></span></td>\n		</tr>\n		<tr>\n			<td>\n			<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ch&iacute;nh phủ Singapore khuyến c&aacute;o người d&acirc;n thực hạn chế tối đa việc ra khỏi nh&agrave; để kiểm so&aacute;t dịch bệnh. Ảnh: <em>AFP</em>.</span></p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Tuần n&agrave;y, Bộ trưởng Ph&aacute;t triển quốc gia Lawrence Wong đồng thời l&agrave; người đứng đầu nh&oacute;m c&ocirc;ng t&aacute;c đặc biệt chống Covid-19 của Singapore, cho hay khoảng thời gian hai tuần tới sẽ &quot;quyết định&quot; xem c&aacute;c biện ph&aacute;p tr&ecirc;n c&oacute; hiệu quả kh&ocirc;ng.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">&Ocirc;ng Wong n&oacute;i rằng ch&iacute;nh phủ cần l&agrave;m cho &quot;tất cả người d&acirc;n Singapore hiểu rằng l&uacute;c n&agrave;y mỗi người đều đang ở tiền tuyến trong mặt trận chống dịch&quot;.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">&quot;Tất cả ch&uacute;ng ta chắc chắn kh&ocirc;ng thể thờ ơ trước l&agrave;n s&oacute;ng thứ hai n&agrave;y&quot;, Ph&oacute; gi&aacute;o sư Jeremy Lim từ chương tr&igrave;nh y tế to&agrave;n cầu tại Trường Y tế c&ocirc;ng cộng Saw Swee Hock b&agrave;y tỏ quan ngại.</span></p>\n\n<h3 style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Người d&acirc;n chưa đủ &quot;quyết liệt&quot;</strong></span></h3>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em>Reuters</em> dẫn &yacute; kiến của Michael Osterholm, một chuy&ecirc;n gia về bệnh truyền nhiễm tại Đại học Minnesota, Mỹ, cho rằng cho đến nay, c&aacute;ch tiếp cận của Singapore l&agrave; một trong những phương thức hiệu quả nhất để đối ph&oacute; với virus corona.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">D&ugrave; vậy, vấn đề m&agrave; c&aacute;c chuy&ecirc;n gia quan t&acirc;m l&agrave; tại sao &quot;chiến lược ngăn chặn&quot; của Singapore vẫn chưa thể chặn đứng ho&agrave;n to&agrave;n dịch bệnh.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Kitty Lee, người phụ tr&aacute;ch mảng khoa học đời sống v&agrave; sức khỏe ở khu vực ch&acirc;u &Aacute; - Th&aacute;i B&igrave;nh Dương của c&ocirc;ng ty tư vấn Oliver Wyman, cho hay t&igrave;nh h&igrave;nh ở Singapore hiện nay &quot;kh&aacute; đ&aacute;ng ngại&quot;. B&agrave; n&oacute;i người d&acirc;n vẫn chưa thực hiện triệt để gi&atilde;n c&aacute;ch x&atilde; hội, chỉ c&oacute; 40% nh&acirc;n vi&ecirc;n tại khu trung t&acirc;m l&agrave;m việc tại nh&agrave;. Ch&iacute;nh phủ Singapore đ&atilde; phải cảnh b&aacute;o sẽ phạt những người kh&ocirc;ng thực hiện l&agrave;m việc từ xa d&ugrave; c&oacute; thể.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Theo chuy&ecirc;n gia bệnh truyền nhiễm Leong Hoe Nam, người d&acirc;n Singapore cần &quot;quyết liệt&quot; hơn nữa trong thực hiện gi&atilde;n c&aacute;ch x&atilde; hội. &quot;Như hiện nay l&agrave; chưa đủ để chấm dứt dịch bệnh. Dịch bệnh đang tiếp tục ho&agrave;nh h&agrave;nh bởi sự thiếu &yacute; thức của người d&acirc;n&quot;, &ocirc;ng Leong n&oacute;i.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Gi&aacute;o sư Teo Yik Ying, Hiệu trưởng Trường Sức khỏe cộng đồng Saw Swee Hock thuộc Đại học Quốc gia Singapore, n&oacute;i với <em>Straits Times</em> rằng nếu người Singapore kh&ocirc;ng &quot;l&agrave;m theo những hướng dẫn đơn giản th&igrave; d&ugrave; ch&iacute;nh phủ c&oacute; &aacute;p đặt biện ph&aacute;p g&igrave; đi nữa cũng chẳng thể ngăn dịch b&ugrave;ng ph&aacute;t&quot;.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Biện ph&aacute;p gi&atilde;n c&aacute;ch x&atilde; hội đang được tăng cường ch&uacute; trọng trong bối cảnh c&oacute; nghi&ecirc;n cứu mới chỉ ra rằng Covid-19 c&oacute; thể l&acirc;y nhiễm ngay cả trước khi bệnh nh&acirc;n xuất hiện triệu chứng.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Trong một hội thảo trực tuyến của b&aacute;o <em>T&agrave;i T&acirc;n</em> (Caixin Global) h&ocirc;m 26/4, &ocirc;ng Vernon Lee, chuy&ecirc;n gia bệnh truyền nhiễm của Bộ Y tế Singapore, cho biết tỷ lệ l&acirc;y nhiễm ở Singapore l&agrave; dưới 1, c&oacute; nghĩa l&agrave; 1 người mắc l&acirc;y cho &iacute;t hơn một người kh&aacute;c. Tỉ lệ n&agrave;y tại Vũ H&aacute;n, Trung Quốc l&agrave; 2,35 trước khi th&agrave;nh phố n&agrave;y bị phong tỏa.</span></p>\n\n<table align=\"center\" class=\"picture\">\n	<tbody>\n		<tr>\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\"><img alt=\"Chong dich quyet liet, vi sao Singapore van gap cu soc 1.000 ca nhiem? hinh anh 3 Tinh_trang_lay_nhiem_trong_cong_dong_moi_xuat_hien_khien_chinh_phu_Singapore_keu_goi_nguoi_dan_thuc_hien_nghiem_ngat_hon_gian_cac_xa_hoi._Anh_Nikkei_Asian_Review.jpg\" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/zdhwqwqd2/2020_04_01/Tinh_trang_lay_nhiem_trong_cong_dong_moi_xuat_hien_khien_chinh_phu_Singapore_keu_goi_nguoi_dan_thuc_hien_nghiem_ngat_hon_gian_cac_xa_hoi._Anh_Nikkei_Asian_Review.jpg\" /></span></td>\n		</tr>\n		<tr>\n			<td>\n			<p style=\"text-align:justify\"><em><span style=\"font-size:14px\">T&igrave;nh trạng l&acirc;y nhiễm trong cộng đồng mới xuất hiện khiến ch&iacute;nh phủ Singapore k&ecirc;u gọi người d&acirc;n thực hiện nghi&ecirc;m ngặt hơn gi&atilde;n c&aacute;c x&atilde; hội. Ảnh: Nikkei Asian Review.</span></em></p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">T&igrave;nh trạng l&acirc;y nhiễm trong cộng đồng mới xuất hiện cũng khiến ch&iacute;nh phủ Singapore phải thay đổi lập trường đối với việc đeo khẩu trang đại tr&agrave;, kh&ocirc;ng c&ograve;n khuyến c&aacute;o người d&acirc;n kh&ocirc;ng cần phải đeo khẩu trang nếu khỏe mạnh như trước đ&acirc;y.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Chuy&ecirc;n gia bệnh truyền nhiễm Leong Hoe Nam nhận định Singapore hiện đối mặt với 2 th&aacute;ch thức l&agrave; kh&ocirc;ng đủ khẩu trang cho to&agrave;n bộ d&acirc;n số v&agrave; gi&atilde;n c&aacute;ch x&atilde; hội cần thực hiện nghi&ecirc;m ngặt hơn nữa.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">&Ocirc;ng Leong lo ngại nếu kh&ocirc;ng h&agrave;nh động mạnh mẽ th&igrave; hệ thống chăm s&oacute;c sức khỏe của Singapore c&oacute; thể sẽ qu&aacute; tải bởi sự l&acirc;y nhiễm theo cấp số nh&acirc;n.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">C&ocirc;ng ty thiết bị game Razer ở Singapore mới đ&acirc;y th&ocirc;ng b&aacute;o sẽ bắt đầu sản xuất khẩu trang trong v&ograve;ng 30 ng&agrave;y, một t&iacute;n hiệu đ&aacute;ng mừng. Trong khi đ&oacute;, nhiều chuy&ecirc;n gia hy vọng lập trường cứng rắn của ch&iacute;nh phủ về l&agrave;m việc từ xa sẽ ph&aacute;t huy hiệu quả.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Theo Ph&oacute; gi&aacute;o sư Jeremy Lim, nếu c&aacute;c biện ph&aacute;p hiện nay vẫn kh&ocirc;ng thể dứt điểm dịch bệnh th&igrave; c&oacute; lẽ chỉ c&ograve;n 3 điều nữa m&agrave; ch&iacute;nh phủ Singapore c&oacute; thể l&agrave;m: đ&oacute; l&agrave; đ&oacute;ng cửa trường học, dừng c&aacute;c phương tiện giao th&ocirc;ng c&ocirc;ng cộng, v&agrave; ra lệnh cho tất cả c&aacute;c địa điểm ăn uống, trung t&acirc;m thương mại đ&oacute;ng cửa.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Đến ng&agrave;y 3/4, Thủ tướng L&yacute; Hiển Long đ&atilde; th&ocirc;ng b&aacute;o phần lớn nơi l&agrave;m việc sẽ phải đ&oacute;ng cửa từ ng&agrave;y 7/4, trong khi tất cả trường học chuyển sang chế độ học online từ xa từ ng&agrave;y 8/4.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Những nơi l&agrave;m việc được mở cửa l&agrave; nơi cung cấp c&aacute;c dịch vụ thiết yếu như cửa h&agrave;ng thực phẩm, si&ecirc;u thị, ph&ograve;ng kh&aacute;m, bệnh viện, dịch vụ giao th&ocirc;ng v&agrave; ng&acirc;n h&agrave;ng. Nh&agrave; trẻ sẽ đ&oacute;ng cửa, nhưng vẫn sẽ giữ trẻ l&agrave; con của những người vẫn phải đi l&agrave;m.</span></p>\n</div>', 'unnamed.jpg', '2021-09-28 00:00:00', 0, 1, 0, 'Tuấn Vũ', 1, 0, '2021-09-28 11:35:07', 'unnamed.jpg', NULL, NULL, 'Food,Cooktails', '1,2'),
(2, 'Three dead in Alps avalanche', '<p>Two French schoolchildren and a Ukrainian tourist have been killed in an avalanche at a ski resort in the French Alps, officials say.</p>\r\n', 'BBBBBBBBBBBBBBBBB', 'app_img1_mobile.jpg', '2015-01-20 00:00:00', 0, 3, 0, '', 1, 1, '2021-09-27 19:33:06', 'Call-center(1)_PC.jpg', NULL, NULL, 'Food,Bars', '1'),
(3, 'Carbon emissions \'postpone ice age\'', 'The next ice age may have been delayed by more than 50,000 years because of the greenhouse gases put in the atmosphere by humans, scientists in Germany say.', '123', 'certification_img2.jpg', '2015-01-20 00:00:00', 0, 2, 0, '', 0, 1, '2019-06-21 20:31:50', 'cloud_img2_mobile.jpg', NULL, NULL, 'Shops,Restaurants', '1'),
(10, 'Turkey car bomb hits police HQ near Diyarbakir', '<p>A car bomb blast has hit a police headquarters in south-eastern Turkey, killing six people and wounding at least 39, officials say.</p>\r\n', '<p>Five civilians including a baby were among the dead. Rescuers searched the rubble for survivors at the scene in Cinar district, Diyarbakir province.</p>\n\n<p>Officials blamed the blast on Kurdistan Worker&#39;s Party (PKK) militants, who are active in the mainly Kurdish province.</p>\n\n<p>No group has so far said it carried out the attack.<br />\n&nbsp;</p>\n\n<p>The bomb was detonated at the entrance of the Cinar district police complex, officials say. The attackers then reportedly fired rockets at the headquarters.</p>\n\n<p>The blast damaged nearby residential buildings, where a mother and her five-month-old baby were killed. A girl aged one and a five-year-old boy also died when a house collapsed.</p>\n\n<p>Another police station, in Midyat town, in neighbouring Mardin province, was also attacked by militants, according to Turkish media, but there are no reports of casualties.</p>\n\n<p><img alt=\"\" src=\"localhost:81/images/general/20160201092726news5_1.png\" style=\"height:351px; width:624px\" /><img alt=\"\" src=\"localhost:81/images/general/20160201092733news5_2.png\" style=\"height:351px; width:624px\" /></p>\n\n<p>A ceasefire between the army and the PKK collapsed in July.</p>\n\n<p>A curfew was imposed on Diyarbakir and several other towns and cities as part of a security crackdown after PKK attacks in the east that left 16 soldiers and 14 police officers dead.</p>\n\n<p><img alt=\"\" src=\"localhost:81/images/general/20160201092739news5_3.png\" style=\"height:351px; width:624px\" /></p>\n\n<p>Speaking after a suicide bombing in Istanbul blamed on Islamic State (IS) jihadists, in which 10 German tourists were killed, Mr Erdogan said the government drew no distinction between terror groups, whatever their name.</p>\n\n<p>The hashtag #1128katil (1,128 killers) was trending in Turkey on Thursday, particularly among government and nationalist supporters, apparently in reference to the academics. PM Ahmet Davutoglu condemned the overnight bomb attack and echoed the president&#39;s criticism of the petition.</p>\n\n<p>Turkish jets have bombed PKK bases in northern Iraq and the army launched a ground operation there.</p>\n\n<p>Turkey is also part of a US-led coalition that has been carrying out air strikes against Islamic State (IS) militants in Iraq and Syria.</p>\n\n<p>However, Ankara has been accused of hitting mostly PKK targets, angering Kurds who are themselves fighting IS in the two countries.</p>\n\n<h2>&#39;1,128 killers&#39;</h2>\n\n<p>There have been repeated clashes between PKK separatists and the Turkish army in recent months, but the violence has escalated in the past week.</p>\n\n<p>Civilians have been caught up in the clashes in the towns of Cizre and Silopi, close to the borders with Syria and Iraq.</p>\n\n<p>Since August, human rights activists say 170 civilians have lost their lives in areas under curfew.</p>\n\n<p>More than 1,100 Turkish and foreign academics have signed a petition calling for an end to Turkish military operations in the south-east, drawing criticism from President Recep Tayyip Erdogan.</p>', 'EcoFunc.png', '2016-02-01 00:00:00', 0, 1, 0, '', 0, 1, '2019-06-21 20:32:50', 'efunc 1.jpg', NULL, NULL, 'Bars,Shops,Cooktails', '3'),
(11, 'GDT data erasure solution has been certified by ADISA', '<p>Two French schoolchildren and a Ukrainian tourist have been killed in an avalanche at a ski resort in the French Alps, officials say.</p>\r\n', 'Greystone Data Technology is a trusted source of partnership in the mobile device processing and reverse logistics environments. Greystone Data Technology is proud to announce that our data erasure solutions have been further validated by the Asset Disposal &amp; Information Security Alliance (ADISA) claims test process. Our data erase process of iOS and Android mobile devices have been proven effective beyond forensic recovery. Greystone Data Technology is proud to provide our partners with additional security and one more reason to trust Greystone with your mobile device processing needs.<br />\n<br />\n<strong>About ADISA</strong><br />\n<br />\nUK&#39;s leading independent forensic research laboratory. Specializing in Data Sanitization for ITAD Data Processors, Data Controllers and OEMs. The ARC is based in Cardiff, Wales and is a specialist research center providing thought leadership, product assurance and forensic services to government and commercial sectors. Under the control of Dr Andrew Blyth, the ARC is currently the only laboratory worldwide which provides product assurance for Data Sanitization software across all media types.<br />\n<a href=\"https://adisarc.com/\">https://adisarc.com</a>', 'Banner certificate.jpg', '2019-03-03 00:00:00', 0, 3, 268, '', 1, 1, '2019-03-22 16:39:12', 'Screenshot from 2019-03-22 16-20-51.png', NULL, NULL, 'Cooktails,Restaurants', '4'),
(12, 'Carbon emissions \'postpone ice age\'', 'The next ice age may have been delayed by more than 50,000 years because of the greenhouse gases put in the atmosphere by humans, scientists in Germany say.', 'Nguyen Thi Hoa', 'logo-adisa.png', '2019-03-21 00:00:00', 0, 2, 132, 'nth', 0, 1, '2019-06-21 20:32:00', 'cloud_img1_mobile.jpg', NULL, NULL, 'Cooktails', '5'),
(13, 'US thanks Iran for freeing sailors', 'The US thanks Iran for the swift release of 10 sailors held for entering its waters, an incident which could have held up implementation of a nuclear deal.', 'Noi dung chinh', 'index.jpeg', '2019-03-21 00:00:00', 0, 4, 0, 'test', 0, 1, '2019-06-21 20:32:12', 'Group copy.png', NULL, NULL, 'Restaurants', '6'),
(14, '123', 'The US thanks Iran for the swift release of 10 sailors held for entering its waters, an incident which could have held up implementation of a nuclear deal.', 'The US thanks Iran for the swift release of 10 sailors held for entering its waters, an incident which could have held up implementation of a nuclear deal.', 'photo_2019-05-31_12-20-52.jpg', '2019-06-21 18:53:09', 0, NULL, 1, '', 0, 1, NULL, 'photo_2019-05-31_12-20-52.jpg', NULL, NULL, 'Restaurants', '1,7'),
(15, 'Dũng \"Trọc\" bị Công an TP Hòa Bình bắt', NULL, '<p>Dũng &quot;Trọc&quot; bị C&ocirc;ng an TP H&ograve;a B&igrave;nh bắt quả tang khi đang tổ chức sử dụng ma t&uacute;y tại một qu&aacute;n karaoke tr&ecirc;n địa b&agrave;n.</p>\n\n<div class=\"the-article-body\">\n<p>S&aacute;ng 12/9, trao đổi với <em>Zing</em>, C&ocirc;ng an TP <a class=\"topic location autolink quickview\" href=\"https://zingnews.vn/tieu-diem/hoa-binh.html\">H&ograve;a B&igrave;nh</a> cho biết đang tạm giữ Nguyễn Văn Dũng (52 tuổi, tức Dũng &quot;Trọc&quot;) để điều tra về h&agrave;nh vi Tổ chức sử dụng tr&aacute;i ph&eacute;p chất ma t&uacute;y.</p>\n\n<p>&quot;Ch&uacute;ng t&ocirc;i bắt Dũng khi anh ta đang tổ chức sử dụng ma t&uacute;y tại một qu&aacute;n karaoke&quot;, đại diện C&ocirc;ng an TP H&ograve;a B&igrave;nh cho hay.</p>\n\n<table align=\"right\" class=\"picture\">\n	<tbody>\n		<tr>\n			<td><img alt=\"Dung troc Ha Dong bi bat anh 1\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/ngotgs/2020_09_11/z2072214536584_af2d6bec7335bff9e4dbe676ba46c899.jpg\" title=\"Dũng trọc Hà Đông bị bắt ảnh 1\" /></td>\n		</tr>\n		<tr>\n			<td>\n			<p>H&igrave;nh ảnh của Dũng &quot;Trọc&quot;. Ảnh: <em>FBNV.</em></p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Dũng &quot;Trọc&quot; c&oacute; quan hệ th&acirc;n thiết với c&aacute;c &quot;giang hồ mạng&quot; như: Huấn Hoa Hồng, Kh&aacute; Bảnh, Dương Minh Tuyền... Dũng cũng thường livestream tr&ecirc;n Facebook c&aacute; nh&acirc;n khoe khoang t&agrave;i sản.</p>\n\n<p>Năm 2013, &ocirc;ng ta bị phạt 24 th&aacute;ng t&ugrave; về tội G&acirc;y rối trật tự c&ocirc;ng cộng do li&ecirc;n quan vụ nổ s&uacute;ng ở vũ trường Next Top. Sau khi ra t&ugrave;, Dũng &quot;Trọc&quot; trở th&agrave;nh &quot;hiện tượng&quot; mạng x&atilde; hội với h&agrave;ng chục ngh&igrave;n lượt đăng k&yacute; theo d&otilde;i.</p>\n</div>', '95801398_1118866368489375_8537126985548169216_o.jpg', '2020-09-12 12:49:21', 0, NULL, 0, '', 0, 0, NULL, '95801398_1118866368489375_8537126985548169216_o.jpg', NULL, NULL, 'Restaurants,Transports', '2'),
(16, 'Ca sĩ Choi Yun Jin bán cà phê để kiếm sống', NULL, '<p>Cựu thần tượng nh&oacute;m TINT tiết lộ từ bỏ ước mơ l&agrave;m ca sĩ, chuyển sang kinh doanh qu&aacute;n c&agrave; ph&ecirc; v&igrave; thực tế khắc nghiệt.</p>\n\n<div class=\"the-article-body\">\n<p>Tr&ecirc;n <em>Newsen,</em> cựu th&agrave;nh vi&ecirc;n nh&oacute;m TINT - Choi Yun Jin chia sẻ video về cuộc sống h&agrave;ng ng&agrave;y. Video nhận được sự quan t&acirc;m của cộng đồng mạng H&agrave;n Quốc.</p>\n\n<p>Trong video, Yun Jin tiết lộ c&ocirc; đ&atilde; quản l&yacute; một qu&aacute;n c&agrave; ph&ecirc; khoảng hai năm với bạn của m&igrave;nh. Họ l&agrave; bạn th&acirc;n từ thời tiểu học v&agrave; quyết định c&ugrave;ng nhau mua lại qu&aacute;n c&agrave; ph&ecirc; để kinh doanh. Yun Jin từng l&agrave; th&agrave;nh vi&ecirc;n TINT, nh&oacute;m nhạc n&agrave;y tan r&atilde; v&agrave;o năm 2015.</p>\n\n<p>&quot;Những người kh&aacute;c đang theo đuổi giấc mơ của họ. T&ocirc;i cũng từng như thế v&agrave; b&acirc;y giờ t&ocirc;i theo đuổi thực tế&quot;, c&ocirc; chia sẻ.</p>\n\n<table align=\"center\" class=\"picture\">\n	<tbody>\n		<tr>\n			<td>\n			<div class=\"zad-inimage-wrapper\" style=\"overflow: hidden;\"><img alt=\"than tuong Kpop tu bo uoc mo anh 1\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/bzivoxbp/2020_09_12/Webp.net_resizeimage_2.jpg\" title=\"thần tượng Kpop từ bỏ ước mơ ảnh 1\" /></div>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p>Choi Yun Jin l&agrave; cựu th&agrave;nh vi&ecirc;n nh&oacute;m nhạc nữ TINT, tan r&atilde; năm 2015.</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>C&ocirc; chia sẻ phải bắt đầu ng&agrave;y mới sớm hơn mọi người v&igrave; qu&aacute;n c&agrave; ph&ecirc; nằm ở Yeouido, khu vực tập trung nhiều nh&acirc;n vi&ecirc;n t&agrave;i ch&iacute;nh ng&acirc;n h&agrave;ng. Yun Jin di chuyển bằng phương tiện c&ocirc;ng cộng trước 7 giờ s&aacute;ng để mở qu&aacute;n c&agrave; ph&ecirc; trước giờ đi l&agrave;m của kh&aacute;ch h&agrave;ng. Sau khi mở cửa qu&aacute;n c&agrave; ph&ecirc;, c&ocirc; sẽ mang những hộp tr&aacute;i c&acirc;y nặng từ trong kho để chuẩn bị đồ uống đ&oacute;n kh&aacute;ch.</p>\n\n<p>Cựu thần tượng tiết lộ m&igrave;nh phải từ bỏ giấc mơ l&agrave;m ca sĩ khi đối mặt với thực tế. L&agrave;ng <a class=\"topic normal autolink\" href=\"https://zingnews.vn/tieu-diem/giai-tri-han-quoc-kpop.html\" title=\"Tin tức Giải trí Hàn Quốc\">giải tr&iacute; H&agrave;n Quốc</a> nổi tiếng khắc nghiệt, nhiều c&aacute;m dỗ, kh&ocirc;ng dễ d&agrave;ng để vươn l&ecirc;n trở th&agrave;nh ng&ocirc;i sao.</p>\n\n<p>Video nhanh ch&oacute;ng lan truyền v&agrave; nhận được hơn 2,5 triệu lượt xem. Ph&iacute;a dưới video, nhiều cư d&acirc;n mạng tỏ &yacute; khen ngợi v&agrave; cổ vũ nữ doanh nh&acirc;n trẻ v&igrave; l&agrave;m việc chăm chỉ để giữ cho qu&aacute;n c&agrave; ph&ecirc; của m&igrave;nh mở cửa.</p>\n\n<table align=\"center\" class=\"picture\">\n	<tbody>\n		<tr>\n			<td><img alt=\"than tuong Kpop tu bo uoc mo anh 2\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/bzivoxbp/2020_09_12/1599844568_cafe.jpg\" title=\"thần tượng Kpop từ bỏ ước mơ ảnh 2\" /></td>\n		</tr>\n		<tr>\n			<td>\n			<p>Choi Yun Jin l&agrave;m việc chăm chỉ để chuẩn bị mở cửa qu&aacute;n c&agrave; ph&ecirc;.</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>Cư d&acirc;n mạng b&igrave;nh luận: &quot;C&aacute;i t&acirc;m l&agrave;m việc cũng đẹp đẽ như vẻ ngo&agrave;i của c&ocirc; ấy vậy&quot;, &quot;Thật tuyệt vời khi c&ocirc; ấy d&aacute;m l&agrave;m những g&igrave; m&igrave;nh muốn ở độ tuổi trẻ như vậy. Điều h&agrave;nh một qu&aacute;n c&agrave; ph&ecirc; vốn kh&ocirc;ng dễ d&agrave;ng&quot;...</p>\n\n<p>TINT l&agrave; nh&oacute;m nhạc nữ 5 th&agrave;nh vi&ecirc;n, thuộc quyền quản l&yacute; của GH Entertainment. Nh&oacute;m ra mắt năm 2013 với ca kh&uacute;c <em>Love At First Sight.</em> Một năm sau, họ comeback với ca kh&uacute;c <em>Wolf Is Stupi</em><em>d</em>, đi theo h&igrave;nh tượng c&ocirc; b&eacute; qu&agrave;ng khăn đỏ dễ thương.</p>\n\n<p>Tuy nhi&ecirc;n, v&igrave; h&igrave;nh tượng c&oacute; phần trẻ con, lại đến từ c&ocirc;ng ty nhỏ n&ecirc;n TINT kh&ocirc;ng thể trụ lại trong Kpop. Kh&ocirc;ng l&acirc;u sau ng&agrave;y ph&aacute;t h&agrave;nh single thứ hai, nh&oacute;m nhạc tuy&ecirc;n bố tan r&atilde;. C&aacute;c th&agrave;nh vi&ecirc;n đều c&oacute; kế hoạch ri&ecirc;ng để ph&aacute;t triển sự nghiệp.</p>\n</div>', '95570885_1117370788638933_458381475587293184_n.jpg', '2020-09-12 12:50:08', 0, NULL, 0, '', 0, 0, NULL, '95570885_1117370788638933_458381475587293184_n.jpg', NULL, NULL, 'Restaurants', '3'),
(27, '11', NULL, '11', '95570885_1117370788638933_458381475587293184_n.jpg', '2020-09-12 13:04:30', 0, NULL, 0, '11', 0, 1, NULL, '95570885_1117370788638933_458381475587293184_n.jpg', NULL, NULL, 'Transports', '4'),
(28, 'Những mẹo giúp bạn dễ dàng trúng tuyển', 'Bạn nên chuẩn bị kiến thức thật tốt cho buổi phỏng vấn mà bạn sắp tham gia. Tìm hiểu về nhiệm vụ, chức năng, các công việc liên quan tới công việc ứng tuyển của bạn.', '<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>1. Kiến thức - Niểm tin</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Bạn nên chuẩn bị kiến thức thật tốt cho buổi phỏng vấn mà bạn sắp tham gia. Tìm hiểu về nhiệm vụ, chức năng, các công việc liên quan tới công việc ứng tuyển của bạn. Bạn có thể tìm hiểu ở nhiều kênh kiến thức khác nhau như trên mạng internet, từ người thân, bạn bè có kinh nghiệm hoạt động trong lĩnh vực đó, từ công ty, tập đoàn lớn. Bạn càng chuẩn bị kĩ, nhiều kiến thức thì sẽ rất tự tin trong buổi phỏng vấn.</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>2. Câu hỏi giao tiếp</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Bạn cũng không nên quá chú trọng vào những kiến thức chuyên môn. Ngoài ra mình cũng có thể chuẩn bị trước một số câu hỏi giao tiếp đơn giản với nhà tuyển dụng. Bạn nên nhờ người thân, bạn bè hỏi những câu hỏi giao tiếp đơn giản và chuẩn bị sẵn những câu trả lời thật tốt để chứng tỏ bạn là người giao tiếp với đồng nghiệp tốt trong công việc. Bạn cũng không nên hỏi hoặc thắc mắc quá nhiều về công việc và công ty, chỉ nên đặt câu hỏi và sự kiến chính.</span></span></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<p style=\"text-align:center\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><img alt=\"\" src=\"http://vieclammiennam.vn/img_data/files/featured.jpg\" style=\"height:480px; width:679px\" /></span></span></p>\n\n<p style=\"text-align:center\">&nbsp;</p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>3. Câu hỏi khó</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Khi gặp những câu hỏi khó về chuyên môn, bạn nên thẳng thắn chia sẽ về kiến thức hoặc kinh nghiệm của mình về vấn đề trên. Không nên nói dối hoặc im lặng, bạn sẽ biến những thiếu sót, điểm yếu của mình thành điểm mạnh để trả lời nhà tuyển dụng. Ví dụ khi gặp câu hỏi `Bạn hãy chia sẽ về điểm yếu của mình trong công việc?`, bạn hãy chọn lấy 1 điểm yếu của bạn thân và biến nó thành điểm mạnh `Tôi là một người thiếu kiên nhẫn trong công việc, chỉ vì bản thân tôi luôn muốn hoàn thành công việc được giao đúng hẹn.`</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>4. Chuẩn bị những câu hỏi</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Bạn cũng nên chuẩn bị cho mình một số câu hỏi để chứng minh mình là người có tư duy và biết phản biện. `Tôi có thể không nhận phần này không?` nếu nhà tuyển dụng không muốn nhắc đến vấn đề trên, đó là cơ hội để bạn tìm hiểu thêm về vấn đề đấy.</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>5. Chuẩn bị về trang phục</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Bạn nên chọn 1 bộ quần áo mặc đi phỏng vấn làm sao để thấy được sự chuyên nghiệp, gọn gàng. Bạn cũng nên tìm hiểu về văn hóa của công ty để ăn mặc phù hợp khi đi phỏng vấn. Bạn nên chọn những bộ đồ thoải mái, không nên quá cầu kì. Bạn cũng nên mặc vét đi phỏng vấn.</span></span></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>', 'featured.jpg', '2021-11-09 10:11:25', 0, NULL, 214, 'Admin', 1, 1, '2021-12-13 14:01:36', 'featured.jpg', NULL, NULL, 'Transports', '5'),
(29, 'Có tốt hay không việc làm mãi ở 1 công ty?', 'Với muôn vàn lý do được đưa ra cho lý do trên như: công việc ổn định, đồng nghiệp, chính sách công ty,... Nhưng mọi người không thể cãi được là lý do chính yếu của vấn đề trên là cá nhân bạn rất sợ rủi ro khi chuyển công ty mới.', '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>Vấn đề làm lâu năm ở 1 công ty luôn được mọi người đặt ra. Vậy việc làm cố định lâu năm tại 1 công ty có tốt hay không? Bạn nghĩ sao về ý kiến trên?</strong></span></span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Với muôn vàn lý do được đưa ra cho lý do trên như: công việc ổn định, đồng nghiệp, chính sách công ty,... Nhưng mọi người không thể cãi được là lý do chính yếu của vấn đề trên là cá nhân bạn rất sợ rủi ro khi chuyển công ty mới. Không phải bắt buộc hay đúng với mọi trường hợp, nhưng tôi khuyên bạn sau khi làm việc 3-4 năm tại 1 công ty, bạn nên nhìn lại chặng đường mà mình đã đi để đánh giá sự nghiệp của mình. Với kinh nghiệm của bạn thân, tôi xin chia sẽ một số lợi ích khi bạn chuyển công ty mới:</span></span></p>\n\n<ul>\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Nâng cao khả năng thích nghi với công việc mới, trình độ bản thân.</span></span></li>\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Nâng cao khả năng giao tiếp, phỏng vấn của bạn.</span></span></li>\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Nhận biết được giá trị của bản thân.</span></span></li>\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Mở rộng các mối quan hệ đồng nghiệp trên lĩnh vực công việc của bản thân.</span></span></li>\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Nâng cao mức thu nhập của bản thân khi tham gia 1 môi trường công ty mới.</span></span></li>\n</ul>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<p style=\"text-align:center\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><img alt=\"\" src=\"http://vieclammiennam.vn/img_data/files/co-nen-tim-viec-lam-online-7.jpeg\" style=\"height:418px; width:650px\" /></span></span></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Lời khuyên trên phải luôn đúng với mọi người, tuy nhiên bạn hãy cho bản thân 1 cơ hội để phát triển trong lịnh vực, công việc mà bạn theo đuổi và đam mê. Nếu công ty luôn tạo điều kiện cho bạn phát triển trong tương lai và có thể gắn bó lâu dài, bạn nên cân nhắc việc ở lại công ty và đóng góp 1 cách tích cực vào sự phát triển chung.</span></span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Sự nghiệp của bạn là do bạn quyết định, hãy là 1 người lái đò tuyệt vời để lèo lái cuộc sống của bạn đến những nơi tốt đẹp và hành phúc nhất. Đừng lo rủi ro, hãy suy nghĩ cơi mở và chúc bạn sẽ thành công trong tương lai nhé.</span></span></p>', 'co-nen-tim-viec-lam-online-7.jpeg', '2021-12-09 08:50:30', 0, NULL, 116, 'Admin', 1, 1, '2021-12-13 14:02:08', 'co-nen-tim-viec-lam-online-7.jpeg', NULL, NULL, 'Transports', '6'),
(30, 'TOP 5 câu trả lời bạn không nên dùng trong buổi phỏng vấn', 'Bạn không nên kể quá chi tiết về gia đình của mình ngay trong buổi phỏng vấn đầu tiên, vì đó sẽ là cơ sở để công ty quyết định những định hướng, chế độ cho bạn khi bạn được nhận.', '<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>1. Giới thiệu bản thân</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Bạn không nên kể quá chi tiết về gia đình của mình ngay trong buổi phỏng vấn đầu tiên, vì đó sẽ là cơ sở để công ty quyết định những định hướng, chế độ cho bạn khi bạn được nhận. Khi gặp những loại câu hỏi về công việc cũ của bản thân, bạn nên liệt kế các kinh nghiệm đã có được ở công việc cũ và bạn sẽ áp dụng chúng vào công việc mới như thế nào. Nếu còn thời gian, bạn có thể giới thiệu 1 vài sở thích, sở trường của mình.</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>2. Kiến thức của ứng viên về công ty tuyển dụng</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Việc bạn không nghiên cứu kĩ về công ty cũng như công việc ứng tuyển tại công sẽ là 1 điểm trừ lớn trong buổi phỏng vấn của bạn. Bạn sẽ bị đánh giá là lười biếng, ứng tuyển cho vui. Vì thế hãy nghiên cứu thật kĩ về công ty, định hướng công ty, công việc và sản phẩm công ty. Có rất nhiều thứ bạn có thể tìm được về công ty trên internet, nhưng bạn chỉ cần chú trọng vào 1 vài vấn đề chính, đừng quá dài dòng.</span></span></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://vieclammiennam.vn/img_data/files/dai-su-quan-nhat-goi-phong-van2.jpg\" style=\"height:366px; width:650px\" /></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>3. Điểm mạnh</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Bạn hãy chọn cho mình 1 điểm mạnh và lên kế hoạch thật kĩ cho câu trả lời của bạn thân. Việc tích cực liên kết, làm việc nhóm trong công việc luôn là ưu tiên hàng đầu của các nhà tuyển dụng hiện nay. Bạn hãy chứng mình là bản thân đã liên kết, hợp tác giữa các nhóm/bộ phân trong công ty cũ như thế nào để đạt được những thành công trong công việc.</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>4. Điểm yếu</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Với những chia sẽ trung thực về các điểm yếu của bạn thân, bạn sẽ nhận được những dấu hiệu tích cực từ nhà tuyển dụng. Nhưng bạn phải biết vận dụng điểm yếu đầu trở thành thế mạnh và áp dụng vào công việc trong tương lai. Đừng trả lời rằng điểm yếu đó sẽ đi theo mình qua môi trường làm việc mới, mà hãy nói rằng nó sẽ giúp ích cho mình hoàn thiện bản thân hơn khi làm việc lâu dài.</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>5. Vị trí của bạn trong tương lai</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Những ứng viên có suy nghĩ luôn hướng lên phía trước sẽ được nhà tuyển dụng quan tâm. Bạn đừng chia sẽ mình sẽ làm công việc như vậy trong tương lai, mà hãy nói mình luôn muốn phát triển và đạt được 1 vị trí cao hơn khi làm việc tại công ty. Những dấu hiệu tích cực trên sẽ giúp bạn ghi điểm khá nhiều trong mắt nhà tuyển dụng.</span></span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Chúc bạn có 1 buổi phóng vấn thành công!</span></span></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>', 'dai-su-quan-nhat-goi-phong-van2.jpg', '2021-10-26 04:15:00', 0, NULL, 302, 'Admin', 1, 1, '2021-12-13 14:02:17', 'dai-su-quan-nhat-goi-phong-van2.jpg', NULL, NULL, 'Transports', '1'),
(31, 'Những nỗi khổ của người xuất khẩu lao động', 'Với mong muốn có thật nhiều tiền để đổi đời, hầu hết mọi người lao động đều mong muốn được đi xuất khẩu lao động để kiếm được thu nhập tốt cho bản thân và gia đình và Nhật Bản ', '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Với mong muốn có thật nhiều tiền để đổi đời, hầu hết mọi người lao động đều mong muốn được đi xuất khẩu lao động để kiếm được thu nhập tốt cho bản thân và gia đình và Nhật Bản luôn là quốc gia được nhiều người lựa chọn. Mất một số tiền lớn để đi xuất khẩu lao động, tôi hoàn toàn vở mộng với những gì phải trải qua.</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>Những khó khăn về cuộc sống</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Hết giờ làm việc, mọi người lao động từ Việt Nam qua Nhật Bản làm việc đều như tôi, đều được sắp xếp 1 căn phòng trọ mà công ty trợ cấp. Căn phòng chỉ rộng khoảng 15m2 dành cho 4 người ở. Mức lương bên Nhật kể cả tăng ca sẽ được hưởng từ 25-30 triệu, trừ hết tiền nhà, điện, nước, ăn uống ra thì tôi dư khoảng 10 triệu tiền tiết kiệm hàng tháng để gửi về cho gia đình. Ở Việt Nam thì số tiền đó là lớn, nhưng không ai biết được những gì tôi phải trải qua là cái giá qúa đắt.</span></span></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://vieclammiennam.vn/img_data/files/aa.jpg\" style=\"height:433px; width:650px\" /></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Chúng tôi phải thức dậy lúc 5h30 sáng và làm việc đến 23h mỗi ngày, có ngày đi làm dưới cái lạnh -2 độ C chỉ khi có bão lớn hay lũ lụt ảnh hưởng đến tính mạng con người thì chúng tôi mới được nghỉ, còn lại vẫn phải đi làm bình thường.</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>Quy tắc ở những công ty Nhật</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Người Nhật rất quy cũ và nghiêm khắc với bộ quy tắc của mình. Trong công ty thường có những quy tắc, quy định rất nghiêm, đó là lý do nhiều người lao động như chúng tôi cảm thấy mệt mỏi và bị stress thời gian đầu khi qua đây làm việc. Ai cũng mong muốn kết thúc 1 ngày làm việc thật nhanh để ra khỏi công ty.</span></span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Nhưng cuộc sống vốn dĩ luôn phải đánh đổi để có được thứ mình mong muốn, chúng tôi ai cũng cố gắng lao động để có được tiền gửi về cho gia đình, người thân. Ai cũng mong được kết thúc 1 năm làm việc để Tết được về Việt Nam thăm gia đình và đó là động lực to lớn nhất để mọi người cùng vượt qua khó khăn.</span></span></p>', 'aa.jpg', '2021-12-07 09:14:14', 0, NULL, 95, 'Admin', 1, 1, '2021-12-13 14:02:26', 'aa.jpg', NULL, NULL, 'Transports', '1'),
(32, 'Những tính cách sẽ gây phiền cho bạn trong công ty', 'Đây là tính cách đầu tiên bạn cần phải bỏ khi làm việc tập thể. Nóng giận luôn đi kèm với sự kém khôn ngoan, điều đó sẽ làm bạn bị mất điểm với những đồng nghiệp của mình. Bản phải luôn làm chủ', '<h1 style=\"text-align:justify\"><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:14px\"><strong>Tức giận</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:14px\">Đây là tính cách đầu tiên bạn cần phải bỏ khi làm việc tập thể. Nóng giận luôn đi kèm với sự kém khôn ngoan, điều đó sẽ làm bạn bị mất điểm với những đồng nghiệp của mình. Bản phải luôn làm chủ được cảm xúc của bản thân trong giải quyết công việc, việc bản tỏ ra nóng giận sẽ chẳng giúp ích được gì trong công việc chung của công ty.</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:14px\"><strong>Kiêu ngạo</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:14px\">Mặc dù bản thân bạn là người rất giỏi và năng động trong công việc, nhưng việc bạn kiêu ngạo quá mức cần thiết với bạn bè đồng nghiệp, nhận hết mọi công lao, ưu điểm của công việc về mình sẽ làm bạn ngày càng bị tách ra ngoài nhóm hoạt động công việc của mình. Có những công việc cần phải hoạt động theo nhóm để hoàn thành, vì vậy bạn nên chủ động giao tiếp, khiêm tốn để cùng đồng nghiệp hoàn thành tốt công việc của mình.</span></span></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://vieclammiennam.vn/img_data/files/interviewing-skills-training-course.jpg\" style=\"height:406px; width:650px\" /></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:14px\"><strong>Cẩu thả</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:14px\">Bạn có thể biết mình sẽ thực hiện được công việc đó một cách nhanh gọn và thành công, nhưng vì bản tính cẩu thả bạn làm mọi chuyện trở nên rắc rối và thất bại và đó là 1 tính cách không nên có trong công việc. Khi bạn nhận 1 nhiệm vụ từ công ty, bạn phải tìm hiểu và làm bằng trách nhiệm của bản thân, không chỉ làm đối phó mà phải thành công để chứng minh năng lực bản thân với đồng nghiệp và sếp. Hãy luôn chuẩn bị cho mình 1 tư thế sẵn sàng tiếp nhận mọi công việc được giao.</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:14px\"><strong>Đứng núi này, trông núi nọ</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:14px\">Khi bạn làm việc trong 1 tập thể, 1 công ty bạn nên biết mình đang ở đâu và vị trí cụ thể phù hợp với năng lực của bản thân. Thay vì bạn luôn đi nói xấu người đang đứng ở vị trí mình mong muốn để có ý làm giảm uy tín, hệ bệ họ thì bạn nên chứng mình thực lục của bạn thân mình 1 cách tích cực hơn. Hãy lấy kiến thức, tài năng của mình là vũ khí để mình đạt được mọi thành công trong công việc.</span></span></p>', 'interviewing-skills-training-course.jpg', '2021-11-30 07:13:13', 0, NULL, 12, 'Admin', 1, 1, '2021-12-13 14:02:34', 'interviewing-skills-training-course.jpg', NULL, NULL, 'Transports', '1');
INSERT INTO `gdt_news` (`id`, `news_title`, `news_summary`, `news_content`, `news_image`, `date_created`, `isdelete`, `news_priority`, `views_number`, `author`, `popular`, `isshow`, `date_update`, `news_image_right`, `news_image_mobile`, `news_image_mobile_right`, `tag`, `categories`) VALUES
(33, 'Cách giải quyết mâu thuẩn trong công việc', 'Việc mâu thuẩn giữa các thành viên trong nhóm là điều hết sức bình thường, các ý kiến trái chiều được đưa ra cho 1 vấn đề sẽ gây tranh cãi gay gắt, nhằm đến những sáng tạo, phát triển cho dự án ', '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Việc mâu thuẩn giữa các thành viên trong nhóm là điều hết sức bình thường, các ý kiến trái chiều được đưa ra cho 1 vấn đề sẽ gây tranh cãi gay gắt, nhằm đến những sáng tạo, phát triển cho dự án công ty là điều đang quý trọng. Nhưng bạn nên biết việc tranh cải để giải quyết công việc không để vược quá giới hạn làm mâu thuẫn sâu sắc giữa các thành viên trong công ty.</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>Hãy lắng nghe</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Khi mọi chuyện đã đang đi quá giới hạn, bạn nên là người lắng xuống và lắng nghe ý kiến của mọi người. Đừng giả vờ nghe rồi cho qua, việc đó sẽ chỉ làm mọi chuyện thêm tồi tệ. Bạn hãy tỏ thái độ cởi mở, cho đồng nghiệp 1 vài lời khuyên những điều đó sẽ giúp buổi tranh luận giảm dần mâu thuẩn và giải quyết được mọi việc 1 cách hiệu quả.</span></span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Về phía mình, bạn nên chia sẽ cho mọi người nghe về vấn đề của mình đừng chỉ đổ lỗi cho người khác mà hãy thành thật nhận lỗi về mình nếu bạn mắc sai lầm.</span></span></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://vieclammiennam.vn/img_data/files/images(1).jpeg\" style=\"height:432px; width:650px\" /></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>Tình hình trở nên tệ hơn</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Nếu đồng nghiệp của bạn tỏ ra quá khích, bạn nên yêu cầu đừng buổi thảo luận và đi ra ngoài. Bạn có thể bắt đầu lại buổi thảo luận bằng những cách giao tiếp khác như dùng giấy, bảng con để trò chuyển nhằm giảm sự căng thẳng của mọi người hoặc nhờ 1 người thứ ba giải quyết những mẫu thuẩn giữa 2 người. Bạn không quá cho mình luôn đúng, hiểu biết hơn điều đó có thể làm mọi thứ tồi tệ.</span></span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>Đưa ra giải pháp</strong></span></span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Khi mọi thứ đã được giải quyết và làm rõ, sử dụng những thông tin của bạn trong buổi nói chuyện để đưa ra giải pháp khắc phục, giúp không để tái diễn tình trạng này nữa. Nếu đồng nghiệp của bạn không đồng ý với cách giải quyết đấy của bạn, thì bạn nên phân tích hiểu rõ vì sao và cố chèo kéo về phía mình.</span></span></p>', 'images.jpeg', '2021-12-13 13:23:21', 0, NULL, 123, 'Admin', 1, 1, '2021-12-13 14:02:42', 'images.jpeg', NULL, NULL, 'Transports', '3');

-- --------------------------------------------------------

--
-- Table structure for table `gdt_news_categories`
--

CREATE TABLE `gdt_news_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gdt_news_categories`
--

INSERT INTO `gdt_news_categories` (`id`, `name`, `isdelete`) VALUES
(1, 'Food', 0),
(2, 'Places to visit', 0),
(3, 'New Places', 0),
(4, 'Suggestions and guides', 0),
(5, 'Transports', 0),
(6, 'Restaurants', 0),
(7, 'Bars', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gdt_product`
--

CREATE TABLE `gdt_product` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `list_img` text,
  `price` double(10,0) NOT NULL,
  `isdelete` tinyint(1) DEFAULT '0',
  `isshow` tinyint(1) DEFAULT '1',
  `user_created` varchar(45) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `ishot` tinyint(1) DEFAULT '0',
  `isnew` tinyint(1) DEFAULT '0',
  `qty_instock` int(11) DEFAULT NULL,
  `time_countdown` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gdt_product`
--

INSERT INTO `gdt_product` (`id`, `name`, `code`, `image`, `list_img`, `price`, `isdelete`, `isshow`, `user_created`, `date_created`, `ishot`, `isnew`, `qty_instock`, `time_countdown`) VALUES
(1, 'X Armor Air X Fear', '3DcAM01', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 1500, 0, 1, 'tuanva', '2022-02-19 00:00:00', 0, 1, 30, '2022-03-31 00:00:00'),
(2, 'Y Armor Air Y Fear', 'USB02', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 120, 0, 1, 'tuanva', '2022-02-19 00:00:00', 1, 0, 0, '2022-03-31 00:00:00'),
(3, 'Z Armor Air Z Fear', 'wristWear03', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 50, 0, 1, 'tuanva', '2022-02-19 00:00:00', 0, 1, 2, '2022-03-31 00:00:00'),
(4, 'D Armor Air D Fear', 'LPN45', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 600, 0, 1, 'tuanva', '2022-02-19 00:00:00', 0, 1, 500, '2022-03-31 00:00:00'),
(5, 'A Armor Air D Fear', 'LPN47', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 550, 0, 1, 'tuanva', '2022-02-19 00:00:00', 0, 1, 500, '2022-03-31 00:00:00'),
(6, 'B Armor Air D Fear', 'LPN48', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 725, 0, 1, 'tuanva', '2022-02-19 00:00:00', 0, 1, 500, '2022-03-31 00:00:00'),
(7, 'C Armor Air D Fear', 'LPN49', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 865, 0, 1, 'tuanva', '2022-02-19 00:00:00', 0, 1, 500, '2022-03-31 00:00:00'),
(8, 'I Armor Air D Fear', 'LPN50', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 333, 0, 1, 'tuanva', '2022-02-19 00:00:00', 1, 0, 500, '2022-03-31 00:00:00'),
(9, 'F Armor Air D Fear', 'LPN51', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 264, 0, 1, 'tuanva', '2022-02-19 00:00:00', 1, 0, 500, '2022-03-31 00:00:00'),
(10, 'G Armor Air D Fear', 'LPN52', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 875, 0, 1, 'tuanva', '2022-02-19 00:00:00', 1, 0, 500, '2022-03-31 00:00:00'),
(11, 'H Armor Air D Fear', 'LPN53', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 456, 0, 1, 'tuanva', '2022-02-19 00:00:00', 0, 1, 500, '2022-03-31 00:00:00'),
(12, 'J Armor Air D Fear', 'LPN54', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 987, 0, 1, 'tuanva', '2022-02-19 00:00:00', 1, 0, 500, '2022-03-31 00:00:00'),
(13, 'M Armor Air D Fear', 'LPN55', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 563, 0, 1, 'tuanva', '2022-02-19 00:00:00', 1, 0, 500, '2022-03-31 00:00:00'),
(14, 'N Armor Air D Fear', 'LPN56', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 324, 0, 1, 'tuanva', '2022-02-19 00:00:00', 0, 1, 500, '2022-03-31 00:00:00'),
(15, 'O Armor Air D Fear', 'LPN57', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 521, 0, 1, 'tuanva', '2022-02-19 00:00:00', 1, 0, 500, '2022-03-31 00:00:00'),
(16, 'P Armor Air D Fear', 'LPN58', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 523, 0, 1, 'tuanva', '2022-02-19 00:00:00', 0, 1, 500, '2022-03-31 00:00:00'),
(17, 'Q Armor Air D Fear', 'LPN59', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 852, 0, 1, 'tuanva', '2022-02-19 00:00:00', 1, 0, 500, '2022-03-31 00:00:00'),
(18, 'E Armor Air D Fear', 'LPN60', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 4562, 0, 1, 'tuanva', '2022-02-19 00:00:00', 1, 0, 500, '2022-03-31 00:00:00'),
(19, 'R Armor Air D Fear', 'LPN61', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 698, 0, 1, 'tuanva', '2022-02-19 00:00:00', 1, 0, 500, '2022-03-31 00:00:00'),
(20, 'T Armor Air D Fear', 'LPN62', '1.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg', 753, 0, 1, 'tuanva', '2022-02-19 00:00:00', 1, 0, 500, '2022-03-31 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gdt_product_brand`
--

CREATE TABLE `gdt_product_brand` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gdt_product_brand`
--

INSERT INTO `gdt_product_brand` (`id`, `name`, `isdelete`) VALUES
(1, 'Addidas', 0),
(2, 'Nike', 0),
(3, 'Vans', 0),
(4, 'Pumas', 0),
(5, 'Bitis', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gdt_product_categories`
--

CREATE TABLE `gdt_product_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gdt_product_categories`
--

INSERT INTO `gdt_product_categories` (`id`, `name`, `isdelete`) VALUES
(1, 'Men', 0),
(3, 'Women', 0),
(4, 'Tranning', 0),
(5, 'Running', 0),
(6, 'Hiking', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gdt_product_color`
--

CREATE TABLE `gdt_product_color` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gdt_product_color`
--

INSERT INTO `gdt_product_color` (`id`, `name`, `isdelete`) VALUES
(1, 'Black', 0),
(2, 'Red', 0),
(3, 'Blue', 0),
(4, 'Yellow', 0),
(5, 'White', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gdt_product_detail`
--

CREATE TABLE `gdt_product_detail` (
  `id` int(11) NOT NULL,
  `id_product` varchar(45) DEFAULT NULL,
  `description` text,
  `content` text,
  `color` varchar(45) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  `weight` varchar(45) DEFAULT NULL,
  `manifacturer` varchar(45) DEFAULT NULL,
  `brand` varchar(45) DEFAULT NULL,
  `categories` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gdt_product_detail`
--

INSERT INTO `gdt_product_detail` (`id`, `id_product`, `description`, `content`, `color`, `size`, `weight`, `manifacturer`, `brand`, `categories`) VALUES
(1, '3DcAM01', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.', '1,2,3', '150x100x100', '0.6kg', 'Manifacturer', '1', '1,6,3'),
(2, 'USB02', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.', '2', '150x100x100', '0.6kg', 'Manifacturer', '2', '3'),
(3, 'wristWear03', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.', '4', '150x100x100', '0.6kg', 'Manifacturer', '3', '4'),
(4, 'LPN45', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.', '1,2,3,4,5', '150x100x100', '0.6kg', 'Manifacturer', '4', '1,5'),
(5, 'LPN62', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.', '1,2,3,4,5', '150x100x100', '0.6kg', 'Manifacturer', '1', '5,2,3'),
(6, 'LPN47', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.', '1,2,3,4,5', '150x100x100', '0.6kg', 'Manifacturer', '2', '5,1,2'),
(7, 'LPN48', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.', '1,2,3,4,5', '150x100x100', '0.6kg', 'Manifacturer', '3', '1,2'),
(8, 'LPN49', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.', '1,2,3,4,5', '150x100x100', '0.6kg', 'Manifacturer', '4', '1'),
(9, 'LPN50', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.', '1,2,3,4,5', '150x100x100', '0.6kg', 'Manifacturer', '1', '2'),
(10, 'LPN51', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.', '1,2,3,4,5', '150x100x100', '0.6kg', 'Manifacturer', '2', '3'),
(11, 'LPN52', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.', '1,2,3,4,5', '150x100x100', '0.6kg', 'Manifacturer', '3', '5,1'),
(12, 'LPN53', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.', '1,2,3,4,5', '150x100x100', '0.6kg', 'Manifacturer', '4', '1,3'),
(13, 'LPN54', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.', '1,2,3,4,5', '150x100x100', '0.6kg', 'Manifacturer', '1', '3,2'),
(14, 'LPN55', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.', '1,2,3,4,5', '150x100x100', '0.6kg', 'Manifacturer', '2', '2,5'),
(15, 'LPN56', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.', '1,2,3,4,5', '150x100x100', '0.6kg', 'Manifacturer', '3', '5'),
(16, 'LPN57', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.', '1,2,3,4,5', '150x100x100', '0.6kg', 'Manifacturer', '4', '5'),
(17, 'LPN58', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.', '1,2,3,4,5', '150x100x100', '0.6kg', 'Manifacturer', '4', '5'),
(18, 'LPN59', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.', '1,2,3,4,5', '150x100x100', '0.6kg', 'Manifacturer', '4', '5'),
(19, 'LPN60', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.', '1,2,3,4,5', '150x100x100', '0.6kg', 'Manifacturer', '4', '5'),
(20, 'LPN61', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel', 'Lorem ipsum dolor sit amet, in eleifend inimicus elaboraret his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.', '1,2,3,4,5', '150x100x100', '0.6kg', 'Manifacturer', '4', '5');

-- --------------------------------------------------------

--
-- Table structure for table `gdt_product_discount`
--

CREATE TABLE `gdt_product_discount` (
  `id` int(11) NOT NULL,
  `id_product` varchar(45) DEFAULT NULL,
  `discount` varchar(45) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gdt_product_discount`
--

INSERT INTO `gdt_product_discount` (`id`, `id_product`, `discount`, `isdelete`) VALUES
(1, '3DcAM01', '30', 0),
(2, 'LPN45', '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gdt_public`
--

CREATE TABLE `gdt_public` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) DEFAULT NULL,
  `title_vn` varchar(255) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `label` varchar(150) DEFAULT NULL,
  `picture` varchar(150) DEFAULT NULL,
  `picture_mobile` varchar(100) DEFAULT NULL,
  `json_pictures` text,
  `content` text,
  `content_vn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `area` tinyint(4) NOT NULL DEFAULT '1',
  `is_publish` tinyint(4) NOT NULL DEFAULT '0',
  `user_create` char(50) DEFAULT NULL,
  `time_create` datetime DEFAULT NULL,
  `user_update` char(50) DEFAULT NULL,
  `time_update` datetime DEFAULT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gdt_public_menus`
--

CREATE TABLE `gdt_public_menus` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(100) DEFAULT NULL,
  `menu_alias` varchar(45) DEFAULT NULL,
  `menu_link` varchar(100) DEFAULT NULL,
  `menu_parent` int(11) DEFAULT NULL,
  `isdelete` int(2) DEFAULT '0',
  `ordering` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gdt_public_menus`
--

INSERT INTO `gdt_public_menus` (`id`, `menu_name`, `menu_alias`, `menu_link`, `menu_parent`, `isdelete`, `ordering`) VALUES
(49, 'Home', 'HOME', '', 0, 0, NULL),
(50, 'About', 'ABOUT', 'aboutus.html', 0, 0, NULL),
(51, 'Product', 'Product', 'product.html', 0, 0, NULL),
(52, 'News', 'News', 'news.html', 0, 0, NULL),
(53, 'Contact Us', 'ContactUs', 'contact.html', 0, 0, NULL),
(56, 'Men\'s Collection', 'Men\\\'sCollection', '', 51, 0, NULL),
(57, 'Womens\'s Collection', 'Womens\\\'sCollection', '', 51, 0, NULL),
(58, 'Kids\'s Collection', 'Kids\\\'sCollection', '', 51, 0, NULL),
(59, 'Lorem Ipsum 1', 'LoremIpsum1', '', 56, 0, NULL),
(60, 'Lorem Ipsum 2', 'LoremIpsum2', '', 56, 0, NULL),
(61, 'Lorem Ipsum 3', 'LoremIpsum3', '', 56, 0, NULL),
(62, 'Lorem Ipsum 4', 'LoremIpsum4', '', 56, 0, NULL),
(63, 'Lorem Ipsum 5', 'LoremIpsum5', '', 57, 0, NULL),
(64, 'Lorem Ipsum 6', 'LoremIpsum6', '', 57, 0, NULL),
(65, 'Lorem Ipsum 7', 'LoremIpsum7', '', 57, 0, NULL),
(66, 'Lorem Ipsum 8', 'LoremIpsum8', '', 58, 0, NULL),
(67, 'Lorem Ipsum 9', 'LoremIpsum9', '', 58, 0, NULL),
(68, 'Lorem Ipsum 1', 'LoremIpsum1', '', 52, 0, NULL),
(69, 'Lorem Ipsum 2', 'LoremIpsum2', '', 52, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gdt_solutions_list`
--

CREATE TABLE `gdt_solutions_list` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `title` varchar(150) NOT NULL,
  `title_vn` varchar(45) DEFAULT NULL,
  `label` varchar(150) DEFAULT NULL,
  `menu` varchar(50) NOT NULL,
  `link` varchar(150) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `picture_mobile` varchar(100) NOT NULL,
  `json_pictures` text NOT NULL,
  `icon` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `content_vn` text,
  `is_publish` tinyint(4) DEFAULT '0',
  `position` tinyint(4) NOT NULL DEFAULT '1',
  `align` tinyint(4) NOT NULL DEFAULT '1',
  `menu_main` tinyint(4) NOT NULL DEFAULT '0',
  `color` char(7) DEFAULT '#000000',
  `user_create` char(50) NOT NULL,
  `time_create` datetime DEFAULT NULL,
  `user_update` char(50) NOT NULL,
  `time_update` datetime DEFAULT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gdt_users`
--

CREATE TABLE `gdt_users` (
  `id` int(10) NOT NULL,
  `groupid` int(10) DEFAULT NULL,
  `username` char(50) DEFAULT NULL,
  `password` char(100) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` char(50) DEFAULT NULL,
  `email` char(100) DEFAULT NULL,
  `department` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT '0',
  `usercreate` char(70) DEFAULT NULL,
  `datecreate` datetime DEFAULT '0000-00-00 00:00:00',
  `dateupdate` datetime DEFAULT '0000-00-00 00:00:00',
  `userupdate` char(70) DEFAULT NULL,
  `ipcreate` char(25) DEFAULT NULL,
  `ipupdate` char(25) DEFAULT NULL,
  `lastlogin` datetime DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gdt_users`
--

INSERT INTO `gdt_users` (`id`, `groupid`, `username`, `password`, `fullname`, `address`, `mobile`, `email`, `department`, `image`, `gender`, `usercreate`, `datecreate`, `dateupdate`, `userupdate`, `ipcreate`, `ipupdate`, `lastlogin`, `isdelete`) VALUES
(1, 1, 'root', '95a378d2085b6054ba4310d2ff4be387', 'Root', '', '', 'vuanhtuan3113@gmail.com', 0, 'avatar1_small.jpg', 1, 'tuanvu', '2012-12-05 11:24:56', '2021-10-04 10:42:06', 'root', NULL, '::1', '2015-10-05 15:31:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `log_exception`
--

CREATE TABLE `log_exception` (
  `id` int(11) NOT NULL,
  `page` varchar(45) NOT NULL,
  `content` text NOT NULL,
  `date_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gdt_aboutus`
--
ALTER TABLE `gdt_aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdt_config`
--
ALTER TABLE `gdt_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdt_contact`
--
ALTER TABLE `gdt_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdt_email_newsletter`
--
ALTER TABLE `gdt_email_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdt_groups`
--
ALTER TABLE `gdt_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdt_home`
--
ALTER TABLE `gdt_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdt_images`
--
ALTER TABLE `gdt_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdt_language`
--
ALTER TABLE `gdt_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdt_menus`
--
ALTER TABLE `gdt_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_parent` (`parent`),
  ADD KEY `idx_router` (`route`),
  ADD KEY `idx_menu_0` (`parent`,`isdelete`,`ordering`),
  ADD KEY `idx_menu_1` (`parent`,`isdelete`,`route`,`ordering`);

--
-- Indexes for table `gdt_news`
--
ALTER TABLE `gdt_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdt_news_categories`
--
ALTER TABLE `gdt_news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdt_product`
--
ALTER TABLE `gdt_product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `gdt_product_brand`
--
ALTER TABLE `gdt_product_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdt_product_categories`
--
ALTER TABLE `gdt_product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdt_product_color`
--
ALTER TABLE `gdt_product_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdt_product_detail`
--
ALTER TABLE `gdt_product_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdt_product_discount`
--
ALTER TABLE `gdt_product_discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdt_public_menus`
--
ALTER TABLE `gdt_public_menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `gdt_users`
--
ALTER TABLE `gdt_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_exception`
--
ALTER TABLE `log_exception`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gdt_aboutus`
--
ALTER TABLE `gdt_aboutus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gdt_config`
--
ALTER TABLE `gdt_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gdt_contact`
--
ALTER TABLE `gdt_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=395;
--
-- AUTO_INCREMENT for table `gdt_email_newsletter`
--
ALTER TABLE `gdt_email_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gdt_groups`
--
ALTER TABLE `gdt_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gdt_home`
--
ALTER TABLE `gdt_home`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `gdt_images`
--
ALTER TABLE `gdt_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gdt_language`
--
ALTER TABLE `gdt_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=449;
--
-- AUTO_INCREMENT for table `gdt_menus`
--
ALTER TABLE `gdt_menus`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `gdt_news`
--
ALTER TABLE `gdt_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `gdt_news_categories`
--
ALTER TABLE `gdt_news_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `gdt_product`
--
ALTER TABLE `gdt_product`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `gdt_product_brand`
--
ALTER TABLE `gdt_product_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gdt_product_categories`
--
ALTER TABLE `gdt_product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `gdt_product_color`
--
ALTER TABLE `gdt_product_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gdt_product_detail`
--
ALTER TABLE `gdt_product_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `gdt_product_discount`
--
ALTER TABLE `gdt_product_discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gdt_public_menus`
--
ALTER TABLE `gdt_public_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `gdt_users`
--
ALTER TABLE `gdt_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `log_exception`
--
ALTER TABLE `log_exception`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
