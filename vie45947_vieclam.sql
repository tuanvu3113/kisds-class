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
(4, 'Li??n h???', 'Contact Info', '97845 Baker st. 567 Los Angeles - US', 'Li??n h???', 'Bac.jpg', '[{\"name\":\"Bac.jpg\",\"label\":\"\",\"link\":\"\",\"display\":1}]', '<h2><span style=\"font-size:16px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>C??NG TY TNHH LH WORK</strong></span></span></h2>\n\n<div><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\">Hotline: </span></span></div>\n\n<ul style=\"margin-left:40px\">\n	<li><span style=\"font-family:arial,helvetica,sans-serif; font-size:16px\">Khu v???c ?????ng Nai:&nbsp;</span><strong><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\"><a href=\"tel:+842871097338\">0287.1097.338</a>&nbsp;</span></span></strong></li>\n	<li><span style=\"font-family:arial,helvetica,sans-serif; font-size:16px\">Khu v???c B??nh D????ng:&nbsp;</span><strong><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\"><a href=\"tel:+842871097337\">0287.1097.337</a>&nbsp;</span></span></strong></li>\n	<li><span style=\"font-family:arial,helvetica,sans-serif; font-size:16px\">Khu v???c V??ng T??u:&nbsp;</span><strong><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\"><a href=\"tel:+842871097336\">0287.1097.336</a>&nbsp;</span></span></strong></li>\n</ul>\n\n<div><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\">Email: lhwork@vieclammiennam.vn</span></span><br />\n<span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\">?????a ch???: C1A t??? 7, KP.10, Ph?????ng An B??nh, Th??nh ph??? Bi??n Ho??, t???nh ?????ng Nai</span></span><br />\n<span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\">Website: https://vieclammiennam.vn</span></span></div>', '<h2><span style=\"font-size:16px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>C??NG TY TNHH LH WORK</strong></span></span></h2>\n\n<div><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\">Hotline: </span></span></div>\n\n<ul style=\"margin-left:40px\">\n	<li><span style=\"font-family:arial,helvetica,sans-serif; font-size:16px\">Khu v???c ?????ng Nai:&nbsp;</span><strong><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\"><a href=\"tel:+842871097338\">0287.1097.338</a>&nbsp;</span></span></strong></li>\n	<li><span style=\"font-family:arial,helvetica,sans-serif; font-size:16px\">Khu v???c B??nh D????ng:&nbsp;</span><strong><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\"><a href=\"tel:+842871097337\">0287.1097.337</a>&nbsp;</span></span></strong></li>\n	<li><span style=\"font-family:arial,helvetica,sans-serif; font-size:16px\">Khu v???c V??ng T??u:&nbsp;</span><strong><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\"><a href=\"tel:+842871097336\">0287.1097.336</a>&nbsp;</span></span></strong></li>\n</ul>\n\n<div><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\">Email: lhwork@vieclammiennam.vn</span></span><br />\n<span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\">?????a ch???: C1A t??? 7, KP.10, Ph?????ng An B??nh, Th??nh ph??? Bi??n Ho??, t???nh ?????ng Nai</span></span><br />\n<span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\">Website: https://vieclammiennam.vn</span></span></div>', 1, '97845 Baker st. 567 Los Angeles - US', '', '', '', '', '', 'shoes@gmail.com', '', '0287.1097.338', '0287.1097.338', '', '', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31339.577701771967!2d106.88482425435237!3d10.929551589159436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1632883929730!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 1, '1', '2020-04-05 09:44:16', '1', '2022-03-02 14:25:18', 0);

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
(1, 'H??nh ???nh Trang ch???', 'H??nh ???nh Trang ch???', '/home.html', 'LH WORK H??? TR??? VI???C L??M CH??NH TH???C', 'LH WORK H??? TR??? VI???C L??M CH??NH TH???C', 'stats.jpg', 'stats.jpg', '[{\"name\":\"tamnhin_1.jpg\",\"label\":\"\",\"link\":\"\",\"display\":1,\"mobie\":1,\"pc\":1}]', '<p>LH WORK H??? TR??? VI???C L??M CH??NH TH???C</p>', '<p>LH WORK H??? TR??? VI???C L??M CH??NH TH???C</p>', 1, 0, '1', '2016-05-22 18:36:05', '1', '2021-12-23 15:28:30', 0),
(2, 'Mobile Life Cycle', NULL, '/slide.html', 'Home Slide', NULL, 'slide.png', '', '[{\"name\":\"app_slide.jpg\",\"label\":\"\",\"link\":\"mobile-app\",\"display\":0},{\"name\":\"cloud_slide.jpg\",\"label\":\"\",\"link\":\"cloud\",\"display\":1},{\"name\":\"call-center_slide.jpg\",\"label\":\"\",\"link\":\"call-center\",\"display\":1},{\"name\":\"repair_slide.jpg\",\"label\":\"\",\"link\":\"repair-facility\",\"display\":1},{\"name\":\"retail_slide.jpg\",\"label\":\"\",\"link\":\"retail-environment\",\"display\":1},{\"name\":\"warehouse_slide.jpg\",\"label\":\"\",\"link\":\"warehouse\",\"display\":1},{\"name\":\"certification_slide.jpg\",\"label\":\"\",\"link\":\"certification\",\"display\":1},{\"name\":\"Test-Tools.jpg\",\"label\":\"\",\"link\":\"hdd-equipment\",\"display\":1},{\"name\":\"App_Slider.jpg\",\"label\":\"\",\"link\":\"mobile-app\",\"display\":1}]', 'Home Slide', NULL, 2, 0, '1', '2016-05-22 18:42:13', '1', '2016-07-27 18:11:52', 1),
(3, 'Technology designed for you', NULL, '/solutions.html', 'Technology designed for you', NULL, 'img1.jpg', '', '[{\"name\":\"img1.png\",\"label\":\"Greystone systems are so easy to use, very intuitive.\",\"link\":\"Linda M.\",\"display\":1},{\"name\":\"calc1.png\",\"label\":\"Greystone understands our needs, they have very innovative solutions.\",\"link\":\"Tony T.\",\"display\":1},{\"name\":\"calc1.png\",\"label\":\"We needed a means to track our product, the Greystone system met and exceeded our needs. Thank you for supporting us with such an outstanding product!\",\"link\":\" Chris P.\",\"display\":1},{\"name\":\"calc1.png\",\"label\":\"The level of professionalism demonstrated by Greystone???s Technical Support personnel is evident in everything they do.\",\"link\":\"Tim S.\",\"display\":1},{\"name\":\"calc1.png\",\"label\":\"Greystone has saved us time, resources and money. I wish we discovered them sooner! Greystone is our number 1 go to for anything mobile device related.\",\"link\":\"Brian W.\",\"display\":1},{\"name\":\"calc1.png\",\"label\":\"We gave Greystone our ???Wish-List??? for tools and support before they gave us a demo of their abilities. I was pleasantly surprised they had solutions and tools to meet our needs that are easy to use!\",\"link\":\"David E.\",\"display\":1}]', 'Greystone Data Technology is an engineering company that provides innovative, tailored hardware &amp; software solutions from mobile device testing to security imaging technology.', NULL, 3, 0, '1', '2016-05-22 18:45:15', '1', '2016-08-25 12:49:53', 1),
(4, 'TEST', NULL, '1', '1', NULL, 'app_layer_c.png', '', '[{\"name\":\"app_mobile.jpg\",\"label\":\"\",\"link\":\"\",\"display\":0}]', '1', NULL, 1, 1, '1', '2019-06-21 22:36:35', '', NULL, 1),
(5, 'H??nh ???nh Trang ch???1', 'H??nh ???nh Trang ch???1', '', 'LH WORK H??? TR??? VI???C L??M CH??NH TH???C', 'LH WORK H??? TR??? VI???C L??M CH??NH TH???C', 'd3f9b46a1fd7d5898cc6.jpg', 'd3f9b46a1fd7d5898cc6.jpg', '[{\"name\":\"d3f9b46a1fd7d5898cc6.jpg\",\"label\":\"\",\"link\":\"\",\"display\":1,\"mobie\":1,\"pc\":1}]', '<p>LH WORK H??? TR??? VI???C L??M CH??NH TH???C</p>', '<p>LH WORK H??? TR??? VI???C L??M CH??NH TH???C</p>', 1, 0, '1', '2022-01-05 10:08:40', '1', '2022-01-05 11:01:54', 1),
(6, 'H??nh trang ch??? 2', 'H??nh trang ch??? 2', '', 'LH WORK H??? TR??? VI???C L??M CH??NH TH???C', 'LH WORK H??? TR??? VI???C L??M CH??NH TH???C', '1e4866bfc202085c5113.jpg', '1e4866bfc202085c5113.jpg', '[{\"name\":\"1e4866bfc202085c5113.jpg\",\"label\":\"\",\"link\":\"\",\"display\":1,\"mobie\":1,\"pc\":1}]', '<p>LH WORK H??? TR??? VI???C L??M CH??NH TH???C</p>', '<p>LH WORK H??? TR??? VI???C L??M CH??NH TH???C</p>', 1, 1, '1', '2022-01-05 11:03:45', '1', NULL, 0);

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
(1, 'vn', 'all', 'search', 'T??m ki???m', 0),
(2, 'vn', 'all', 'refresh', 'L??m m???i', 0),
(3, 'vn', 'all', 'add', 'Th??m m???i', 0),
(4, 'vn', 'all', 'edit', 'S???a', 0),
(5, 'vn', 'all', 'delete', 'X??a', 0),
(6, 'vn', 'group', 'group_name', 'Nh??m quy???n', 0),
(7, 'vn', 'group', 'group_type', 'Lo???i quy???n', 0),
(8, 'vn', 'group', 'select_group_type', 'Ch???n lo???i quy???n', 0),
(9, 'vn', 'all', 'school', 'Tr?????ng', 0),
(10, 'vn', 'all', 'select_school', 'Ch???n tr?????ng', 0),
(11, 'vn', 'all', 'stt', 'STT', 0),
(12, 'vn', 'group', 'right', 'Ph??n quy???n', 0),
(13, 'vn', 'group', 'group-empty', 'Nh??m quy???n kh??ng ???????c tr???ng.', 0),
(14, 'vn', 'all', 'edit-fail', 'S???a kh??ng th??nh c??ng.', 0),
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
(120, 'vn', 'products', 'product_name', 'T??n s???n ph???m', 0),
(121, 'us', 'all', 'title', 'Title', 0),
(122, 'us', 'all', 'description', 'Description', 0),
(123, 'us', 'all', 'images', 'Image', 0),
(124, 'us', 'all', 'alias', 'Alias', 0),
(125, 'us', 'all', 'permission_denied', 'Permission denied', 0),
(126, 'vn', 'all', 'error_unknow', 'L???i kh??ng x??c ??inh. Li??n h??? nh?? ph??t tri???n ????? s???a.', 0),
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
(178, 'vn', 'all', 'images_large', 'H??nh ???nh l???n', 0),
(179, 'vn', 'all', 'get_image_size_error', 'Kh??ng th??? l???y k??ch c??? c???a h??nh', 0),
(180, 'vn', 'all', 'image_size_error', 'K??ch th?????c h??nh ???nh ph???i l??', 0),
(181, 'vn', 'all', 'image_large_size_error', 'K??ch th?????c h??nh ???nh l???n ph???i l??', 0),
(182, 'us', 'all', 'text_align', 'Text align', 0),
(183, 'us', 'all', 'publish', 'Publish', 0),
(184, 'us', 'menu', 'quan-tri', 'Admin', 0),
(185, 'vn', 'menu', 'quan-tri', 'Qu???n tr???', 0),
(186, 'us', 'menu', 'trang-chu', 'Home', 0),
(187, 'vn', 'menu', 'trang-chu', 'Trang ch???', 0),
(188, 'us', 'menu', 'giai-phap', 'Solutions', 0),
(189, 'vn', 'menu', 'giai-phap', 'Gi???i ph??p', 0),
(190, 'us', 'menu', 'cong-ty', 'Company', 0),
(191, 'vn', 'menu', 'cong-ty', 'C??ng ty', 0),
(192, 'us', 'menu', 'lien-he', 'Contact US', 0),
(193, 'vn', 'menu', 'lien-he', 'Li??n h???', 0),
(194, 'us', 'menu', 'tro-giup', 'Help', 0),
(195, 'vn', 'menu', 'tro-giup', 'Tr??? gi??p', 0),
(196, 'us', 'menu', 'nhom-quyen', 'Groups Permission', 0),
(197, 'vn', 'menu', 'nhom-quyen', 'Nh??m quy???n', 0),
(198, 'us', 'menu', 'nguoi-dung', 'Users', 0),
(199, 'vn', 'menu', 'nguoi-dung', 'Ng?????i d??ng', 0),
(200, 'us', 'menu', 'cau-hinh', 'Config', 0),
(201, 'vn', 'menu', 'cau-hinh', 'C???u h??nh', 0),
(202, 'us', 'menu', 'danh-sach-giai-phap', 'List solutions', 0),
(203, 'vn', 'menu', 'danh-sach-giai-phap', 'Danh s??ch gi???i ph??p', 0),
(204, 'us', 'menu', 'chi-tiet-giai-phap', 'Detail solutions', 0),
(205, 'vn', 'menu', 'chi-tiet-giai-phap', 'Chi ti???t gi???i ph??p', 0),
(206, 'us', 'menu', 'danh-muc-dau-tu', 'Portfolio', 0),
(207, 'vn', 'menu', 'danh-muc-dau-tu', 'Danh m???c ?????u t??', 0),
(208, 'us', 'menu', 'chung-nhan', 'Certificate', 0),
(209, 'vn', 'menu', 'chung-nhan', 'Ch???ng nh???n', 0),
(210, 'us', 'menu', 'danh-sach-lien-he', 'Contact List', 0),
(211, 'vn', 'menu', 'danh-sach-lien-he', 'Danh s??ch li??n h???', 0),
(212, 'us', 'menu', 'thong-tin-lien-he', 'Contact Information', 0),
(213, 'vn', 'menu', 'thong-tin-lien-he', 'Th??ng tin li??n h???', 0),
(214, 'us', 'menu', 'tai-lieu', 'Documents', 0),
(215, 'vn', 'menu', 'tai-lieu', 'T??i li???u', 0),
(216, 'us', 'menu', 'loi-nhan-xet', 'Testimonials', 0),
(217, 'vn', 'menu', 'loi-nhan-xet', 'L???i nh???n x??t', 0),
(218, 'us', 'menu', 'thiet-bi-hdd', 'Hdd equipment', 0),
(219, 'vn', 'menu', 'thiet-bi-hdd', 'Thi???t b??? HDD', 0),
(220, 'us', 'menu', 'tin-tuc', 'News', 0),
(221, 'vn', 'menu', 'tin-tuc', 'Tin t???c', 0),
(222, 'us', 'menu', 'san-pham', 'Products', 0),
(223, 'vn', 'menu', 'san-pham', 'S???n ph???m', 0),
(224, 'vn', 'user', 'username', 'T??n t??i kho???n', 0),
(225, 'vn', 'user', 'password', 'M???t kh???u', 0),
(226, 'vn', 'user', 'fullname', 'H??? v?? t??n', 0),
(227, 'vn', 'user', 'username_empty', 'T??i kho???n kh??ng ???????c b??? tr???ng', 0),
(228, 'vn', 'user', 'fullname_empty', 'H??? v?? t??n kh??ng ???????c b??? tr???ng', 0),
(229, 'vn', 'user', 'password_empty', 'M???t kh???u kh??ng ???????c b??? tr???ng', 0),
(230, 'vn', 'user', 'user_exits', 'T??i kho???n ???? t???n t???i', 0),
(231, 'vn', 'all', 'phone', '??i???n tho???i', 0),
(232, 'us', 'all', 'tim-thay', 'Found', 0),
(233, 'vn', 'all', 'tim-thay', 'T??m th???y', 0),
(234, 'us', 'all', 'ket-qua', 'results', 0),
(235, 'vn', 'all', 'ket-qua', 'k???t qu???', 0),
(236, 'vn', 'all', 'email', 'Email', 0),
(237, 'vn', 'all', 'email-valid', 'Email kh??ng h???p l???', 0),
(238, 'vn', 'all', 'avatar', '???nh ?????i di???n', 0),
(239, 'us', 'all', 'chon-file', 'Choose file', 0),
(240, 'vn', 'all', 'chon-file', 'Ch???n file', 0),
(241, 'vn', 'all', 'phone-valid', 'S??? ??i???n tho???i kh??ng h???p l???', 0),
(242, 'vn', 'all', 'add_failed', 'Th??m m???i kh??ng th??nh c??ng', 0),
(243, 'us', 'all', 'chon-nguoi-dung', 'Please choose at least one user', 0),
(244, 'vn', 'all', 'chon-nguoi-dung', 'Vui l??ng ch???n 1 ng?????i d??ng', 0),
(245, 'vn', 'all', 'delete_confirm', 'B???n c?? ch???c ch???n mu???n x??a?', 0),
(246, 'us', 'all', 'xoa-khong-thanh-cong', 'Delete failed', 0),
(247, 'vn', 'all', 'xoa-khong-thanh-cong', 'X??a kh??ng th??nh c??ng', 0),
(248, 'vn', 'all', 'save', 'L??u', 0),
(249, 'us', 'all', 'cancel', 'Cancel', 0),
(250, 'vn', 'all', 'cancel', 'H???y', 0),
(251, 'vn', 'all', 'title', 'Ti??u ?????', 0),
(252, 'us', 'all', 'solution', 'Solution', 0),
(253, 'vn', 'all', 'solution', 'Ph????ng th???c', 0),
(254, 'us', 'all', 'vui-long-chon', '-- Please chosse --', 0),
(255, 'vn', 'all', 'vui-long-chon', '-- Vui l??ng ch???n --', 0),
(256, 'vn', 'all', 'error_select_empty', 'B???n c???n ch???n ??t nh???t m???t ?????i t?????ng', 0),
(257, 'us', 'all', 'save_error', 'Save failed', 0),
(258, 'vn', 'all', 'save_error', 'L??u kh??ng th??nh c??ng', 0),
(259, 'us', 'all', 'label', 'Label', 0),
(260, 'vn', 'all', 'label', 'Nh??n', 0),
(261, 'us', 'all', 'content', 'Content', 0),
(262, 'vn', 'all', 'content', 'N???i dung', 0),
(264, 'vn', 'all', 'publish', 'C??ng khai', 0),
(265, 'us', 'all', 'images', 'Images', 0),
(266, 'vn', 'all', 'images', 'H??nh ???nh', 0),
(267, 'us', 'all', 'Type', 'Type', 0),
(268, 'vn', 'all', 'Type', 'Ki???u', 0),
(269, 'us', 'all', 'config-information', 'Config information', 0),
(270, 'vn', 'all', 'config-information', 'Th??ng tin c???u h??nh', 0),
(271, 'us', 'all', 'btn_home', 'Button Home', 0),
(272, 'vn', 'all', 'btn_home', 'N??t trang ch???', 0),
(273, 'us', 'all', 'btn_greystonevn', 'Button Greystonevn', 0),
(274, 'vn', 'all', 'btn_greystonevn', 'N??t Greystonevn', 0),
(275, 'us', 'all', 'btn_solution', 'Button Solution', 0),
(276, 'vn', 'all', 'btn_solution', 'N??t ph????ng th???c', 0),
(277, 'us', 'all', 'btn_detail', 'Button Detail', 0),
(278, 'vn', 'all', 'btn_detail', 'N??t chi ti???t', 0),
(279, 'us', 'all', 'btn_company', 'Button company', 0),
(280, 'vn', 'all', 'btn_company', 'N??t c??ng ty', 0),
(281, 'us', 'all', 'view-number', 'View number', 0),
(282, 'vn', 'all', 'view-number', 'Xem s???', 0),
(283, 'vn', 'all', 'date', 'Ng??y', 0),
(284, 'us', 'all', 'popular', 'Popular', 0),
(285, 'vn', 'all', 'popular', 'Ph??? bi???n', 0),
(286, 'us', 'all', 'show', 'Show', 0),
(287, 'vn', 'all', 'show', 'Hi???n th???', 0),
(288, 'us', 'all', 'image-popular', 'Image popular', 0),
(289, 'vn', 'all', 'image-popular', 'H??nh ???nh ph??? bi???n', 0),
(290, 'us', 'all', 'permision_denied', 'Permision denied', 0),
(291, 'vn', 'all', 'permision_denied', 'Quy???n c???a b???n b??? gi???i h???n', 0),
(292, 'us', 'all', 'author', 'Author', 0),
(293, 'vn', 'all', 'author', 'T??c gi???', 0),
(294, 'us', 'all', 'enable', 'Enable', 0),
(295, 'vn', 'all', 'enable', 'Cho ph??p', 0),
(296, 'us', 'all', 'disable', 'Disable', 0),
(297, 'vn', 'all', 'disable', 'Kh??ng cho ph??p', 0),
(298, 'us', 'all', 'background-img', 'Background img', 0),
(299, 'vn', 'all', 'background-img', 'H??nh n???n', 0),
(300, 'us', 'all', 'select-images', 'Select Images', 0),
(301, 'vn', 'all', 'select-images', 'Ch???n h??nh ???nh', 0),
(302, 'us', 'all', 'upload-images', 'Upload Images', 0),
(303, 'vn', 'all', 'upload-images', 'T???i h??nh ???nh', 0),
(304, 'us', 'all', 'picture', 'Picture', 0),
(305, 'vn', 'all', 'picture', 'H??nh ???nh', 0),
(306, 'us', 'all', 'link', 'Link', 0),
(307, 'vn', 'all', 'link', '???????ng d???n', 0),
(308, 'us', 'all', 'function', 'Fuction', 0),
(309, 'vn', 'all', 'function', 'Ch???c n??ng', 0),
(310, 'vn', 'all', 'back', 'Quay l???i', 0),
(311, 'us', 'all', 'title-is-not-empty', 'Title is not empty', 0),
(312, 'vn', 'all', 'title-is-not-empty', 'Ti??u ????? kh??ng ???????c b??? tr???ng', 0),
(313, 'us', 'all', 'picture-not-empty-or-size-not-incorrect', 'The picture has not been selected or size mismatch (1340x1006)', 0),
(314, 'vn', 'all', 'picture-not-empty-or-size-not-incorrect', 'H??nh ???nh ch??a ???????c ch???n ho???c k??ch th?????c kh??ng kh???p (1340x1006)', 0),
(315, 'us', 'all', 'content-not-empty', 'Content is not empty', 0),
(316, 'vn', 'all', 'content-not-empty', 'N???i dung kh??ng ???????c b??? tr???ng', 0),
(317, 'us', 'all', 'item_exist', 'Item Exist', 0),
(318, 'vn', 'all', 'item_exist', 'Th?? m???c ???? t???n t???i', 0),
(319, 'vn', 'all', 'description', 'M?? t???', 0),
(320, 'vn', 'products', 'product_exist', 'S???n ph???m ???? t???n t???i', 0),
(321, 'us', 'all', 'remove', 'Remove', 0),
(322, 'vn', 'all', 'remove', 'X??a', 0),
(323, 'vn', 'all', 'order', 'Th??? t???', 0),
(324, 'vn', 'all', 'text_align', 'Canh ch???nh', 0),
(325, 'us', 'all', 'icon', 'Icon', 0),
(326, 'vn', 'all', 'icon', 'Bi???u t?????ng', 0),
(327, 'us', 'all', 'color-text', 'Color text', 0),
(328, 'vn', 'all', 'color-text', 'M??u ch???', 0),
(329, 'us', 'all', 'text', 'Text', 0),
(330, 'vn', 'all', 'text', 'V??n b???n', 0),
(331, 'us', 'all', 'background-mobile', 'Background Mobile', 0),
(332, 'vn', 'all', 'background-mobile', 'H??nh n???n ??i???n tho???i', 0),
(333, 'us', 'all', 'link-not-empty', 'Link is not empty', 0),
(334, 'vn', 'all', 'link-not-empty', '???????ng d???n kh??ng ???????c tr???ng', 0),
(335, 'us', 'all', 'label-not-empty', 'Label is not empty', 0),
(336, 'vn', 'all', 'label-not-empty', 'Nh??n kh??ng ???????c tr???ng', 0),
(337, 'us', 'all', 'icon-not-empty', 'Icon is not empty', 0),
(338, 'vn', 'all', 'icon-not-empty', 'Bi???u t?????ng kh??ng ???????c tr???ng', 0),
(339, 'us', 'all', 'color-not-empty', 'Color is not empty', 0),
(340, 'vn', 'all', 'color-not-empty', 'M??u kh??ng ???????c tr???ng', 0),
(341, 'us', 'all', 'content-not-empty', 'Content is not empty', 0),
(342, 'vn', 'all', 'content-not-empty', 'N???i dung kh??ng ???????c tr???ng', 0),
(343, 'us', 'all', 'list-image-not-empty', 'List image is not empty', 0),
(344, 'vn', 'all', 'list-image-not-empty', 'Danh s??ch h??nh ???nh kh??ng ???????c tr???ng', 0),
(345, 'us', 'all', 'left', 'Left', 0),
(346, 'vn', 'all', 'left', 'Tr??i', 0),
(347, 'us', 'all', 'right', 'Right', 0),
(348, 'vn', 'all', 'right', 'Ph???i', 0),
(349, 'us', 'all', 'center', 'Center', 0),
(350, 'vn', 'all', 'center', 'Ch??nh gi???a', 0),
(351, 'us', 'all', 'single-picture', 'Single Picture', 0),
(352, 'vn', 'all', 'single-picture', '???nh ????n', 0),
(353, 'us', 'all', 'multi-picture', 'Multi picture', 0),
(354, 'vn', 'all', 'multi-picture', 'Nhi???u h??nh ???nh', 0),
(355, 'us', 'all', 'slide', 'Slide', 0),
(356, 'vn', 'all', 'slide', 'Tr??nh chi???u', 0),
(357, 'us', 'all', 'top', 'Top', 0),
(358, 'vn', 'all', 'top', 'Ph??i tr??n', 0),
(359, 'us', 'all', 'align-picture', 'Align picture', 0),
(360, 'vn', 'all', 'align-picture', 'Canh ch???nh h??nh', 0),
(361, 'us', 'all', 'certificate-footer', 'Certificate footer', 0),
(362, 'vn', 'all', 'certificate-footer', 'Ch???ng nh???n ch??n trang', 0),
(363, 'us', 'all', 'no', 'No', 0),
(364, 'vn', 'all', 'no', 'Kh??ng ?????ng ??', 0),
(365, 'us', 'all', 'yes', 'Yes', 0),
(366, 'vn', 'all', 'yes', '?????ng ??', 0),
(367, 'us', 'all', 'title-picture', 'Title picture', 0),
(368, 'vn', 'all', 'title-picture', 'Ti??u ????? h??nh ???nh', 0),
(369, 'us', 'all', 'text-picture', 'Text picture', 0),
(370, 'vn', 'all', 'text-picture', 'V??n b???n h??nh ???nh', 0),
(371, 'us', 'all', 'solution-not-selected', 'Solution is not selected', 0),
(372, 'vn', 'all', 'solution-not-selected', 'Gi???i ph??p kh??ng ???????c ch???n', 0),
(373, 'us', 'all', 'author-not-empty', 'Author is not empty', 0),
(374, 'vn', 'all', 'author-not-empty', 'T??c gi??? kh??ng ???????c ????? tr???ng', 0),
(375, 'vn', 'all', 'Top-Left', 'Ph??a tr??n-B??n tr??i', 0),
(376, 'vn', 'all', 'Top-Right', 'Ph??a tr??n-B??n ph???i', 0),
(377, 'vn', 'all', 'Top-Center', 'Ph??a tr??n-Ch??nh gi???a', 0),
(378, 'vn', 'all', 'Bottom-Left', 'Ph??a d?????i-B??n tr??i', 0),
(379, 'vn', 'all', 'Bottom-Right', 'Ph??a d?????i-B??n ph???i', 0),
(380, 'vn', 'all', 'Bottom-Center', 'Ph??a d?????i-Ch??nh gi???a', 0),
(381, 'vn', 'all', 'Center-Left', 'Ch??nh gi???a-B??n tr??i', 0),
(382, 'vn', 'all', 'Center-Right', 'Ch??nh gi???a-B??n ph???i', 0),
(383, 'vn', 'all', 'Center-Center', 'Ch??nh gi???a- Ch??nh gi???a', 0),
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
(394, 'vn', 'all', 'file-features', 'T??nh n??ng c???a file', 0),
(395, 'vn', 'all', 'Parent', NULL, 0),
(396, 'us', 'all', 'name', 'Name', 0),
(397, 'vn', 'all', 'name', 'T??n menu', 0),
(398, 'us', 'all', 'parent', 'Parent', 0),
(399, 'vn', 'all', 'parent', 'Th?? m???c cha', 0),
(400, 'us', 'menu', 'phuong-cham', 'Purpose', 0),
(401, 'vn', 'menu', 'phuong-cham', 'Ph????ng ch??m', 0),
(402, 'us', 'menu', 'thanh-vien', 'Member', 0),
(403, 'vn', 'menu', 'thanh-vien', 'Th??nh vi??n', 0),
(404, 'us', 'menu', 've-chung-toi', 'About Us', 0),
(405, 'vn', 'menu', 've-chung-toi', 'V??? ch??ng t??i', 0),
(406, 'us', 'all', 'luu-thanh-cong', 'Save Successful', 0),
(407, 'vn', 'all', 'luu-thanh-cong', 'L??u th??nh c??ng', 0),
(408, 'us', 'all', 'learn-more', 'Lern more', 0),
(409, 'vn', 'all', 'learn-more', '?????c th??m', 0),
(410, 'vn', 'profile', 'current_pass', 'M???t kh???u hi???n t???i', 0),
(411, 'vn', 'profile', 'new_pass', 'M???t kh???u m???i', 0),
(412, 'vn', 'profile', 'new_pass_confirm', 'Nh???p l???i m???t kh???u m???i', 0),
(413, 'us', 'all', 'my-profile', 'My Profile', 0),
(414, 'vn', 'all', 'my-profile', 'Th??ng tin c???a t??i', 0),
(415, 'us', 'all', 'log-out', 'Log out', 0),
(416, 'vn', 'all', 'log-out', 'Tho??t', 0),
(417, 'us', 'menu', 'home_image', 'Home Image', 0),
(418, 'vn', 'menu', 'home_image', 'H??nh ???nh trang ch???', 0),
(419, 'us', 'menu', 'home_public', 'Home public', 0),
(420, 'vn', 'menu', 'home_public', 'Th??ng tin trang ch???', 0),
(421, 'vn', 'all', '', NULL, 0),
(422, 'us', 'all', 'address', 'Address', 0),
(423, 'vn', 'all', 'address', '?????a ch???', 0),
(424, 'us', 'all', 'city', 'City', 0),
(425, 'vn', '', 'city', 'Th??nh ph???', 0),
(426, 'us', 'all', 'state', 'State', 0),
(427, 'vn', 'all', 'state', 'Ti???u bang', 0),
(428, 'us', 'all', 'zip-code', 'Zip code', 0),
(429, 'vn', 'all', 'zip-code', 'M?? b??u ??i???n', 0),
(430, 'us', 'all', 'country', 'Country', 0),
(431, 'vn', 'all', 'country', 'Qu???c gia', 0),
(432, 'us', 'all', 'email-support', 'Email support', 0),
(433, 'vn', 'all', 'email-support', 'Email h??? tr???', 0),
(434, 'us', 'all', 'email-sales', 'Email sales', 0),
(435, 'vn', 'all', 'email-sales', 'Email b??n h??ng', 0),
(436, 'us', 'all', 'phone-support', 'Phone support', 0),
(437, 'vn', 'all', 'phone-support', '??i???n tho???i h??? tr???', 0),
(438, 'us', 'all', 'phone-sales', 'Phone sales', 0),
(439, 'vn', 'all', 'phone-sales', '??i???n tho???i b??n h??ng', 0),
(440, 'us', 'all', 'full-name', 'Full name', 0),
(441, 'vn', 'all', 'full-name', 'H??? v?? t??n', 0),
(442, 'vn', 'all', 'company', 'C??ng ty', 0),
(443, 'us', 'all', 'your-message', 'Your message', 0),
(444, 'vn', 'all', 'your-message', 'Tin nh???n c???a b???n', 0),
(445, 'us', 'all', 'send-message', 'Send Message', 0),
(446, 'vn', 'all', 'send-message', 'G???i tin nh???n', 0),
(447, 'us', 'all', 'technology', 'Technology', 0),
(448, 'vn', 'all', 'technology', 'C??ng ngh???', 0);

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
(1, 'Ch???ng d???ch quy???t li???t, v?? sao Singapore v???n g???p c?? s???c?', '<p>A bomb blast hits a police building in Turkey&#39;s majority-Kurdish Diyarbakir province, reportedly killing five people and injuring at least 36.</p>\r\n', '<p style=\"text-align:justify\"><span style=\"font-size:14px\">D&ugrave; ??&atilde; d&ugrave;ng nhi???u bi???n ph&aacute;p c???ng r???n ????? ki???m ch??? d???ch b???nh, s??? ca nhi???m ??? Singapore v???n t??ng m???nh do l&agrave;n s&oacute;ng ng?????i tr??? v??? t??? n?????c ngo&agrave;i v&agrave; t&igrave;nh tr???ng l&acirc;y nhi???m trong c???ng ?????ng.</span></p>\n\n<div class=\"the-article-body\">\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">?????u th&aacute;ng 3, Singapore ch??? c&oacute; h??n 100 ca nhi???m. ?????o qu???c ??&ocirc;ng Nam &Aacute; ???????c kh???p th??? gi???i nh&igrave;n nh???n nh?? m???t h&igrave;nh m???u trong cu???c chi???n ch???ng Covid-19 khi s???m kh???ng ch??? ???????c d???ch b???nh nh??? tri???n khai s???m c&aacute;c bi???n ph&aacute;p h???n ch??? ??i l???i, c&aacute;ch ly, theo d&otilde;i nghi&ecirc;m ng???t c??ng nh?? x&eacute;t nghi???m tr&ecirc;n di???n r???ng.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">T&iacute;nh ?????n 25/3, Singapore ??&atilde; ti???n h&agrave;nh 6.800 x&eacute;t nghi???m/1 tri???u ng?????i, nhi???u h??n c??? H&agrave;n Qu???c v&agrave; ??&agrave;i Loan v???i c&aacute;c con s??? l???n l?????t l&agrave; 6.500 v&agrave; 1.000 x&eacute;t nghi???m/1 tri???u ng?????i. Tr?????ng h???c v&agrave; ngay c??? trung t&acirc;m th????ng m???i tr&ecirc;n qu???c ?????o s?? t??? v???n m??? c???a, nh???p s???ng v???n di???n ra b&igrave;nh th?????ng, theo <em>South China Morning Post</em>.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Tuy nhi&ecirc;n, t???t c??? thay ?????i ch&oacute;ng m???t ch??? trong 1 th&aacute;ng. Ng&agrave;y 1/4, Singapore v?????t m???c 1.000 ca nhi???m, b???c tranh kh&ocirc;ng c&ograve;n &quot;m&agrave;u h???ng&quot;. S??? ca nhi???m t??ng k??? l???c trong ng&agrave;y 1/4 (74 ca) v&agrave; 2/4 (49 ca), theo <em>Straits Times</em>.</span></p>\n\n<table align=\"center\" class=\"picture\">\n	<tbody>\n		<tr>\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\"><img alt=\"Chong dich quyet liet, vi sao Singapore van gap cu soc 1.000 ca nhiem? hinh anh 1 Lan_song_nguoi_tro_ve_tu_nuoc_ngoai_la_mot_trong_nhung_nguyen_nhan_dan_den_dot_bung_phat_dich_benh_moi_o_Singapore._Anh_Reuters.jpg\" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/zdhwqwqd2/2020_04_01/Lan_song_nguoi_tro_ve_tu_nuoc_ngoai_la_mot_trong_nhung_nguyen_nhan_dan_den_dot_bung_phat_dich_benh_moi_o_Singapore._Anh_Reuters.jpg\" /></span></td>\n		</tr>\n		<tr>\n			<td>\n			<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em>L&agrave;n s&oacute;ng ng?????i tr??? v??? t??? n?????c ngo&agrave;i l&agrave; m???t trong nh???ng nguy&ecirc;n nh&acirc;n d???n ?????n ?????t b&ugrave;ng ph&aacute;t d???ch b???nh m???i ??? Singapore. ???nh: Reuters.</em></span></p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<div class=\"banner size_masthead\" id=\"advMiddle1\" style=\"display: block;\">\n<div class=\"z2-zads-zone\" id=\"adtima-zone-2782058279008172787\">\n<div id=\"adtimaDivWrapper_2782058279008172787\" style=\"display: block; text-align: justify;\">&nbsp;</div>\n</div>\n</div>\n\n<p style=\"text-align: justify;\"><strong><span style=\"font-size:16px\">&quot;L&agrave;n s&oacute;ng th??? hai&quot;</span></strong></p>\n\n<p style=\"text-align: justify;\"><span style=\"font-size:14px\">Theo c&aacute;c chuy&ecirc;n gia, s??? l?????ng ca nhi???m t??ng v???ng t???i Singapore cho th???y m???t l&agrave;n s&oacute;ng l&acirc;y nhi???m th??? hai ??? ?????t n?????c 5,7 tri???u d&acirc;n.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">L&agrave;n s&oacute;ng th??? nh???t b???t ngu???n t??? du kh&aacute;ch t??? Trung Qu???c ?????i l???c sang, nh???ng ca nhi???m ?????u ti&ecirc;n xu???t hi???n tr?????c khi ch&iacute;nh quy???n Singapore k???p th???c hi???n b???t k??? h???n ch??? du l???ch n&agrave;o.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Khi s??? ng?????i m???c b???nh t??ng l&ecirc;n, Singapore ??&atilde; tri???n khai c&aacute;c bi???n ph&aacute;p h???n ch??? du l???ch nghi&ecirc;m ng???t, ?????u ti&ecirc;n nh???m v&agrave;o c&aacute;c du kh&aacute;ch n?????c ngo&agrave;i ?????n t??? Trung Qu???c; sau ??&oacute; l&agrave; H&agrave;n Qu???c, Italy v&agrave; Iran; cu???i c&ugrave;ng l&agrave; c???m t???t c??? du kh&aacute;ch n?????c ngo&agrave;i.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Tuy nhi&ecirc;n, l&agrave;n s&oacute;ng l&acirc;y nhi???m th??? hai ph???n l???n li&ecirc;n quan ?????n ng?????i Singapore tr??? v??? t??? c&aacute;c n?????c nh?? M??? v&agrave; Anh, n??i d???ch b???nh ??ang lan r???ng. ??&aacute;ng lo ng???i h??n l&agrave; ?????t b&ugrave;ng ph&aacute;t m???i c&oacute; nhi???u ca l&acirc;y nhi???m t???i ?????a ph????ng v&agrave; m???t s??? ca kh&ocirc;ng x&aacute;c ?????nh ???????c ngu???n l&acirc;y nhi???m.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">?????i ph&oacute; v???i l&agrave;n s&oacute;ng th??? hai, ch&iacute;nh quy???n Singapore ??&atilde; th???c hi???n c&aacute;c bi???n ph&aacute;p c&aacute;ch ly x&atilde; h???i nghi&ecirc;m ng???t h??n, c???m nh???p c???nh ?????i v???i t???t c??? du kh&aacute;ch t??? ng&agrave;y 23/3, ng&agrave;y 27/3 ??&oacute;ng c???a c&aacute;c qu&aacute;n bar v&agrave; t??? ??i???m vui ch??i v??? ??&ecirc;m, h???n ch??? t??? t???p t??? 10 ng?????i v&agrave; &aacute;p d???ng c&aacute;c h&igrave;nh ph???t cho nh???ng c&aacute; nh&acirc;n v&agrave; nh&agrave; h&agrave;ng kh&ocirc;ng ?????m b???o kho???ng c&aacute;ch 1 m gi???a c&aacute;c kh&aacute;ch h&agrave;ng.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ch&iacute;nh ph??? k&ecirc;u g???i ng?????i d&acirc;n ??? nh&agrave;, ch??? ra ngo&agrave;i khi th???c s??? c???n thi???t.</span></p>\n\n<table align=\"center\" class=\"picture\">\n	<tbody>\n		<tr>\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\"><img alt=\"Chong dich quyet liet, vi sao Singapore van gap cu soc 1.000 ca nhiem? hinh anh 2 Chinh_phu_Singapore_khuyen_cao_nguoi_dan_thuc_han_che_toi_da_viec_ra_khoi_nha_de_kiem_soat_dich_benh._Anh_AFP.jpg\" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/zdhwqwqd2/2020_04_01/Chinh_phu_Singapore_khuyen_cao_nguoi_dan_thuc_han_che_toi_da_viec_ra_khoi_nha_de_kiem_soat_dich_benh._Anh_AFP.jpg\" /></span></td>\n		</tr>\n		<tr>\n			<td>\n			<p style=\"text-align:justify\"><span style=\"font-size:14px\">Ch&iacute;nh ph??? Singapore khuy???n c&aacute;o ng?????i d&acirc;n th???c h???n ch??? t???i ??a vi???c ra kh???i nh&agrave; ????? ki???m so&aacute;t d???ch b???nh. ???nh: <em>AFP</em>.</span></p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Tu???n n&agrave;y, B??? tr?????ng Ph&aacute;t tri???n qu???c gia Lawrence Wong ?????ng th???i l&agrave; ng?????i ?????ng ?????u nh&oacute;m c&ocirc;ng t&aacute;c ?????c bi???t ch???ng Covid-19 c???a Singapore, cho hay kho???ng th???i gian hai tu???n t???i s??? &quot;quy???t ?????nh&quot; xem c&aacute;c bi???n ph&aacute;p tr&ecirc;n c&oacute; hi???u qu??? kh&ocirc;ng.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">&Ocirc;ng Wong n&oacute;i r???ng ch&iacute;nh ph??? c???n l&agrave;m cho &quot;t???t c??? ng?????i d&acirc;n Singapore hi???u r???ng l&uacute;c n&agrave;y m???i ng?????i ?????u ??ang ??? ti???n tuy???n trong m???t tr???n ch???ng d???ch&quot;.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">&quot;T???t c??? ch&uacute;ng ta ch???c ch???n kh&ocirc;ng th??? th??? ?? tr?????c l&agrave;n s&oacute;ng th??? hai n&agrave;y&quot;, Ph&oacute; gi&aacute;o s?? Jeremy Lim t??? ch????ng tr&igrave;nh y t??? to&agrave;n c???u t???i Tr?????ng Y t??? c&ocirc;ng c???ng Saw Swee Hock b&agrave;y t??? quan ng???i.</span></p>\n\n<h3 style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Ng?????i d&acirc;n ch??a ????? &quot;quy???t li???t&quot;</strong></span></h3>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><em>Reuters</em> d???n &yacute; ki???n c???a Michael Osterholm, m???t chuy&ecirc;n gia v??? b???nh truy???n nhi???m t???i ?????i h???c Minnesota, M???, cho r???ng cho ?????n nay, c&aacute;ch ti???p c???n c???a Singapore l&agrave; m???t trong nh???ng ph????ng th???c hi???u qu??? nh???t ????? ?????i ph&oacute; v???i virus corona.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">D&ugrave; v???y, v???n ????? m&agrave; c&aacute;c chuy&ecirc;n gia quan t&acirc;m l&agrave; t???i sao &quot;chi???n l?????c ng??n ch???n&quot; c???a Singapore v???n ch??a th??? ch???n ?????ng ho&agrave;n to&agrave;n d???ch b???nh.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Kitty Lee, ng?????i ph??? tr&aacute;ch m???ng khoa h???c ?????i s???ng v&agrave; s???c kh???e ??? khu v???c ch&acirc;u &Aacute; - Th&aacute;i B&igrave;nh D????ng c???a c&ocirc;ng ty t?? v???n Oliver Wyman, cho hay t&igrave;nh h&igrave;nh ??? Singapore hi???n nay &quot;kh&aacute; ??&aacute;ng ng???i&quot;. B&agrave; n&oacute;i ng?????i d&acirc;n v???n ch??a th???c hi???n tri???t ????? gi&atilde;n c&aacute;ch x&atilde; h???i, ch??? c&oacute; 40% nh&acirc;n vi&ecirc;n t???i khu trung t&acirc;m l&agrave;m vi???c t???i nh&agrave;. Ch&iacute;nh ph??? Singapore ??&atilde; ph???i c???nh b&aacute;o s??? ph???t nh???ng ng?????i kh&ocirc;ng th???c hi???n l&agrave;m vi???c t??? xa d&ugrave; c&oacute; th???.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Theo chuy&ecirc;n gia b???nh truy???n nhi???m Leong Hoe Nam, ng?????i d&acirc;n Singapore c???n &quot;quy???t li???t&quot; h??n n???a trong th???c hi???n gi&atilde;n c&aacute;ch x&atilde; h???i. &quot;Nh?? hi???n nay l&agrave; ch??a ????? ????? ch???m d???t d???ch b???nh. D???ch b???nh ??ang ti???p t???c ho&agrave;nh h&agrave;nh b???i s??? thi???u &yacute; th???c c???a ng?????i d&acirc;n&quot;, &ocirc;ng Leong n&oacute;i.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Gi&aacute;o s?? Teo Yik Ying, Hi???u tr?????ng Tr?????ng S???c kh???e c???ng ?????ng Saw Swee Hock thu???c ?????i h???c Qu???c gia Singapore, n&oacute;i v???i <em>Straits Times</em> r???ng n???u ng?????i Singapore kh&ocirc;ng &quot;l&agrave;m theo nh???ng h?????ng d???n ????n gi???n th&igrave; d&ugrave; ch&iacute;nh ph??? c&oacute; &aacute;p ?????t bi???n ph&aacute;p g&igrave; ??i n???a c??ng ch???ng th??? ng??n d???ch b&ugrave;ng ph&aacute;t&quot;.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Bi???n ph&aacute;p gi&atilde;n c&aacute;ch x&atilde; h???i ??ang ???????c t??ng c?????ng ch&uacute; tr???ng trong b???i c???nh c&oacute; nghi&ecirc;n c???u m???i ch??? ra r???ng Covid-19 c&oacute; th??? l&acirc;y nhi???m ngay c??? tr?????c khi b???nh nh&acirc;n xu???t hi???n tri???u ch???ng.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Trong m???t h???i th???o tr???c tuy???n c???a b&aacute;o <em>T&agrave;i T&acirc;n</em> (Caixin Global) h&ocirc;m 26/4, &ocirc;ng Vernon Lee, chuy&ecirc;n gia b???nh truy???n nhi???m c???a B??? Y t??? Singapore, cho bi???t t??? l??? l&acirc;y nhi???m ??? Singapore l&agrave; d?????i 1, c&oacute; ngh??a l&agrave; 1 ng?????i m???c l&acirc;y cho &iacute;t h??n m???t ng?????i kh&aacute;c. T??? l??? n&agrave;y t???i V?? H&aacute;n, Trung Qu???c l&agrave; 2,35 tr?????c khi th&agrave;nh ph??? n&agrave;y b??? phong t???a.</span></p>\n\n<table align=\"center\" class=\"picture\">\n	<tbody>\n		<tr>\n			<td style=\"text-align:justify\"><span style=\"font-size:14px\"><img alt=\"Chong dich quyet liet, vi sao Singapore van gap cu soc 1.000 ca nhiem? hinh anh 3 Tinh_trang_lay_nhiem_trong_cong_dong_moi_xuat_hien_khien_chinh_phu_Singapore_keu_goi_nguoi_dan_thuc_hien_nghiem_ngat_hon_gian_cac_xa_hoi._Anh_Nikkei_Asian_Review.jpg\" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/zdhwqwqd2/2020_04_01/Tinh_trang_lay_nhiem_trong_cong_dong_moi_xuat_hien_khien_chinh_phu_Singapore_keu_goi_nguoi_dan_thuc_hien_nghiem_ngat_hon_gian_cac_xa_hoi._Anh_Nikkei_Asian_Review.jpg\" /></span></td>\n		</tr>\n		<tr>\n			<td>\n			<p style=\"text-align:justify\"><em><span style=\"font-size:14px\">T&igrave;nh tr???ng l&acirc;y nhi???m trong c???ng ?????ng m???i xu???t hi???n khi???n ch&iacute;nh ph??? Singapore k&ecirc;u g???i ng?????i d&acirc;n th???c hi???n nghi&ecirc;m ng???t h??n gi&atilde;n c&aacute;c x&atilde; h???i. ???nh: Nikkei Asian Review.</span></em></p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">T&igrave;nh tr???ng l&acirc;y nhi???m trong c???ng ?????ng m???i xu???t hi???n c??ng khi???n ch&iacute;nh ph??? Singapore ph???i thay ?????i l???p tr?????ng ?????i v???i vi???c ??eo kh???u trang ?????i tr&agrave;, kh&ocirc;ng c&ograve;n khuy???n c&aacute;o ng?????i d&acirc;n kh&ocirc;ng c???n ph???i ??eo kh???u trang n???u kh???e m???nh nh?? tr?????c ??&acirc;y.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Chuy&ecirc;n gia b???nh truy???n nhi???m Leong Hoe Nam nh???n ?????nh Singapore hi???n ?????i m???t v???i 2 th&aacute;ch th???c l&agrave; kh&ocirc;ng ????? kh???u trang cho to&agrave;n b??? d&acirc;n s??? v&agrave; gi&atilde;n c&aacute;ch x&atilde; h???i c???n th???c hi???n nghi&ecirc;m ng???t h??n n???a.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">&Ocirc;ng Leong lo ng???i n???u kh&ocirc;ng h&agrave;nh ?????ng m???nh m??? th&igrave; h??? th???ng ch??m s&oacute;c s???c kh???e c???a Singapore c&oacute; th??? s??? qu&aacute; t???i b???i s??? l&acirc;y nhi???m theo c???p s??? nh&acirc;n.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">C&ocirc;ng ty thi???t b??? game Razer ??? Singapore m???i ??&acirc;y th&ocirc;ng b&aacute;o s??? b???t ?????u s???n xu???t kh???u trang trong v&ograve;ng 30 ng&agrave;y, m???t t&iacute;n hi???u ??&aacute;ng m???ng. Trong khi ??&oacute;, nhi???u chuy&ecirc;n gia hy v???ng l???p tr?????ng c???ng r???n c???a ch&iacute;nh ph??? v??? l&agrave;m vi???c t??? xa s??? ph&aacute;t huy hi???u qu???.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Theo Ph&oacute; gi&aacute;o s?? Jeremy Lim, n???u c&aacute;c bi???n ph&aacute;p hi???n nay v???n kh&ocirc;ng th??? d???t ??i???m d???ch b???nh th&igrave; c&oacute; l??? ch??? c&ograve;n 3 ??i???u n???a m&agrave; ch&iacute;nh ph??? Singapore c&oacute; th??? l&agrave;m: ??&oacute; l&agrave; ??&oacute;ng c???a tr?????ng h???c, d???ng c&aacute;c ph????ng ti???n giao th&ocirc;ng c&ocirc;ng c???ng, v&agrave; ra l???nh cho t???t c??? c&aacute;c ?????a ??i???m ??n u???ng, trung t&acirc;m th????ng m???i ??&oacute;ng c???a.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">?????n ng&agrave;y 3/4, Th??? t?????ng L&yacute; Hi???n Long ??&atilde; th&ocirc;ng b&aacute;o ph???n l???n n??i l&agrave;m vi???c s??? ph???i ??&oacute;ng c???a t??? ng&agrave;y 7/4, trong khi t???t c??? tr?????ng h???c chuy???n sang ch??? ????? h???c online t??? xa t??? ng&agrave;y 8/4.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Nh???ng n??i l&agrave;m vi???c ???????c m??? c???a l&agrave; n??i cung c???p c&aacute;c d???ch v??? thi???t y???u nh?? c???a h&agrave;ng th???c ph???m, si&ecirc;u th???, ph&ograve;ng kh&aacute;m, b???nh vi???n, d???ch v??? giao th&ocirc;ng v&agrave; ng&acirc;n h&agrave;ng. Nh&agrave; tr??? s??? ??&oacute;ng c???a, nh??ng v???n s??? gi??? tr??? l&agrave; con c???a nh???ng ng?????i v???n ph???i ??i l&agrave;m.</span></p>\n</div>', 'unnamed.jpg', '2021-09-28 00:00:00', 0, 1, 0, 'Tu???n V??', 1, 0, '2021-09-28 11:35:07', 'unnamed.jpg', NULL, NULL, 'Food,Cooktails', '1,2'),
(2, 'Three dead in Alps avalanche', '<p>Two French schoolchildren and a Ukrainian tourist have been killed in an avalanche at a ski resort in the French Alps, officials say.</p>\r\n', 'BBBBBBBBBBBBBBBBB', 'app_img1_mobile.jpg', '2015-01-20 00:00:00', 0, 3, 0, '', 1, 1, '2021-09-27 19:33:06', 'Call-center(1)_PC.jpg', NULL, NULL, 'Food,Bars', '1'),
(3, 'Carbon emissions \'postpone ice age\'', 'The next ice age may have been delayed by more than 50,000 years because of the greenhouse gases put in the atmosphere by humans, scientists in Germany say.', '123', 'certification_img2.jpg', '2015-01-20 00:00:00', 0, 2, 0, '', 0, 1, '2019-06-21 20:31:50', 'cloud_img2_mobile.jpg', NULL, NULL, 'Shops,Restaurants', '1'),
(10, 'Turkey car bomb hits police HQ near Diyarbakir', '<p>A car bomb blast has hit a police headquarters in south-eastern Turkey, killing six people and wounding at least 39, officials say.</p>\r\n', '<p>Five civilians including a baby were among the dead. Rescuers searched the rubble for survivors at the scene in Cinar district, Diyarbakir province.</p>\n\n<p>Officials blamed the blast on Kurdistan Worker&#39;s Party (PKK) militants, who are active in the mainly Kurdish province.</p>\n\n<p>No group has so far said it carried out the attack.<br />\n&nbsp;</p>\n\n<p>The bomb was detonated at the entrance of the Cinar district police complex, officials say. The attackers then reportedly fired rockets at the headquarters.</p>\n\n<p>The blast damaged nearby residential buildings, where a mother and her five-month-old baby were killed. A girl aged one and a five-year-old boy also died when a house collapsed.</p>\n\n<p>Another police station, in Midyat town, in neighbouring Mardin province, was also attacked by militants, according to Turkish media, but there are no reports of casualties.</p>\n\n<p><img alt=\"\" src=\"localhost:81/images/general/20160201092726news5_1.png\" style=\"height:351px; width:624px\" /><img alt=\"\" src=\"localhost:81/images/general/20160201092733news5_2.png\" style=\"height:351px; width:624px\" /></p>\n\n<p>A ceasefire between the army and the PKK collapsed in July.</p>\n\n<p>A curfew was imposed on Diyarbakir and several other towns and cities as part of a security crackdown after PKK attacks in the east that left 16 soldiers and 14 police officers dead.</p>\n\n<p><img alt=\"\" src=\"localhost:81/images/general/20160201092739news5_3.png\" style=\"height:351px; width:624px\" /></p>\n\n<p>Speaking after a suicide bombing in Istanbul blamed on Islamic State (IS) jihadists, in which 10 German tourists were killed, Mr Erdogan said the government drew no distinction between terror groups, whatever their name.</p>\n\n<p>The hashtag #1128katil (1,128 killers) was trending in Turkey on Thursday, particularly among government and nationalist supporters, apparently in reference to the academics. PM Ahmet Davutoglu condemned the overnight bomb attack and echoed the president&#39;s criticism of the petition.</p>\n\n<p>Turkish jets have bombed PKK bases in northern Iraq and the army launched a ground operation there.</p>\n\n<p>Turkey is also part of a US-led coalition that has been carrying out air strikes against Islamic State (IS) militants in Iraq and Syria.</p>\n\n<p>However, Ankara has been accused of hitting mostly PKK targets, angering Kurds who are themselves fighting IS in the two countries.</p>\n\n<h2>&#39;1,128 killers&#39;</h2>\n\n<p>There have been repeated clashes between PKK separatists and the Turkish army in recent months, but the violence has escalated in the past week.</p>\n\n<p>Civilians have been caught up in the clashes in the towns of Cizre and Silopi, close to the borders with Syria and Iraq.</p>\n\n<p>Since August, human rights activists say 170 civilians have lost their lives in areas under curfew.</p>\n\n<p>More than 1,100 Turkish and foreign academics have signed a petition calling for an end to Turkish military operations in the south-east, drawing criticism from President Recep Tayyip Erdogan.</p>', 'EcoFunc.png', '2016-02-01 00:00:00', 0, 1, 0, '', 0, 1, '2019-06-21 20:32:50', 'efunc 1.jpg', NULL, NULL, 'Bars,Shops,Cooktails', '3'),
(11, 'GDT data erasure solution has been certified by ADISA', '<p>Two French schoolchildren and a Ukrainian tourist have been killed in an avalanche at a ski resort in the French Alps, officials say.</p>\r\n', 'Greystone Data Technology is a trusted source of partnership in the mobile device processing and reverse logistics environments. Greystone Data Technology is proud to announce that our data erasure solutions have been further validated by the Asset Disposal &amp; Information Security Alliance (ADISA) claims test process. Our data erase process of iOS and Android mobile devices have been proven effective beyond forensic recovery. Greystone Data Technology is proud to provide our partners with additional security and one more reason to trust Greystone with your mobile device processing needs.<br />\n<br />\n<strong>About ADISA</strong><br />\n<br />\nUK&#39;s leading independent forensic research laboratory. Specializing in Data Sanitization for ITAD Data Processors, Data Controllers and OEMs. The ARC is based in Cardiff, Wales and is a specialist research center providing thought leadership, product assurance and forensic services to government and commercial sectors. Under the control of Dr Andrew Blyth, the ARC is currently the only laboratory worldwide which provides product assurance for Data Sanitization software across all media types.<br />\n<a href=\"https://adisarc.com/\">https://adisarc.com</a>', 'Banner certificate.jpg', '2019-03-03 00:00:00', 0, 3, 268, '', 1, 1, '2019-03-22 16:39:12', 'Screenshot from 2019-03-22 16-20-51.png', NULL, NULL, 'Cooktails,Restaurants', '4'),
(12, 'Carbon emissions \'postpone ice age\'', 'The next ice age may have been delayed by more than 50,000 years because of the greenhouse gases put in the atmosphere by humans, scientists in Germany say.', 'Nguyen Thi Hoa', 'logo-adisa.png', '2019-03-21 00:00:00', 0, 2, 132, 'nth', 0, 1, '2019-06-21 20:32:00', 'cloud_img1_mobile.jpg', NULL, NULL, 'Cooktails', '5'),
(13, 'US thanks Iran for freeing sailors', 'The US thanks Iran for the swift release of 10 sailors held for entering its waters, an incident which could have held up implementation of a nuclear deal.', 'Noi dung chinh', 'index.jpeg', '2019-03-21 00:00:00', 0, 4, 0, 'test', 0, 1, '2019-06-21 20:32:12', 'Group copy.png', NULL, NULL, 'Restaurants', '6'),
(14, '123', 'The US thanks Iran for the swift release of 10 sailors held for entering its waters, an incident which could have held up implementation of a nuclear deal.', 'The US thanks Iran for the swift release of 10 sailors held for entering its waters, an incident which could have held up implementation of a nuclear deal.', 'photo_2019-05-31_12-20-52.jpg', '2019-06-21 18:53:09', 0, NULL, 1, '', 0, 1, NULL, 'photo_2019-05-31_12-20-52.jpg', NULL, NULL, 'Restaurants', '1,7'),
(15, 'D??ng \"Tr???c\" b??? C??ng an TP H??a B??nh b???t', NULL, '<p>D??ng &quot;Tr???c&quot; b??? C&ocirc;ng an TP H&ograve;a B&igrave;nh b???t qu??? tang khi ??ang t??? ch???c s??? d???ng ma t&uacute;y t???i m???t qu&aacute;n karaoke tr&ecirc;n ?????a b&agrave;n.</p>\n\n<div class=\"the-article-body\">\n<p>S&aacute;ng 12/9, trao ?????i v???i <em>Zing</em>, C&ocirc;ng an TP <a class=\"topic location autolink quickview\" href=\"https://zingnews.vn/tieu-diem/hoa-binh.html\">H&ograve;a B&igrave;nh</a> cho bi???t ??ang t???m gi??? Nguy???n V??n D??ng (52 tu???i, t???c D??ng &quot;Tr???c&quot;) ????? ??i???u tra v??? h&agrave;nh vi T??? ch???c s??? d???ng tr&aacute;i ph&eacute;p ch???t ma t&uacute;y.</p>\n\n<p>&quot;Ch&uacute;ng t&ocirc;i b???t D??ng khi anh ta ??ang t??? ch???c s??? d???ng ma t&uacute;y t???i m???t qu&aacute;n karaoke&quot;, ?????i di???n C&ocirc;ng an TP H&ograve;a B&igrave;nh cho hay.</p>\n\n<table align=\"right\" class=\"picture\">\n	<tbody>\n		<tr>\n			<td><img alt=\"Dung troc Ha Dong bi bat anh 1\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/ngotgs/2020_09_11/z2072214536584_af2d6bec7335bff9e4dbe676ba46c899.jpg\" title=\"D??ng tr???c H?? ????ng b??? b???t ???nh 1\" /></td>\n		</tr>\n		<tr>\n			<td>\n			<p>H&igrave;nh ???nh c???a D??ng &quot;Tr???c&quot;. ???nh: <em>FBNV.</em></p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>D??ng &quot;Tr???c&quot; c&oacute; quan h??? th&acirc;n thi???t v???i c&aacute;c &quot;giang h??? m???ng&quot; nh??: Hu???n Hoa H???ng, Kh&aacute; B???nh, D????ng Minh Tuy???n... D??ng c??ng th?????ng livestream tr&ecirc;n Facebook c&aacute; nh&acirc;n khoe khoang t&agrave;i s???n.</p>\n\n<p>N??m 2013, &ocirc;ng ta b??? ph???t 24 th&aacute;ng t&ugrave; v??? t???i G&acirc;y r???i tr???t t??? c&ocirc;ng c???ng do li&ecirc;n quan v??? n??? s&uacute;ng ??? v?? tr?????ng Next Top. Sau khi ra t&ugrave;, D??ng &quot;Tr???c&quot; tr??? th&agrave;nh &quot;hi???n t?????ng&quot; m???ng x&atilde; h???i v???i h&agrave;ng ch???c ngh&igrave;n l?????t ????ng k&yacute; theo d&otilde;i.</p>\n</div>', '95801398_1118866368489375_8537126985548169216_o.jpg', '2020-09-12 12:49:21', 0, NULL, 0, '', 0, 0, NULL, '95801398_1118866368489375_8537126985548169216_o.jpg', NULL, NULL, 'Restaurants,Transports', '2'),
(16, 'Ca s?? Choi Yun Jin b??n c?? ph?? ????? ki???m s???ng', NULL, '<p>C???u th???n t?????ng nh&oacute;m TINT ti???t l??? t??? b??? ?????c m?? l&agrave;m ca s??, chuy???n sang kinh doanh qu&aacute;n c&agrave; ph&ecirc; v&igrave; th???c t??? kh???c nghi???t.</p>\n\n<div class=\"the-article-body\">\n<p>Tr&ecirc;n <em>Newsen,</em> c???u th&agrave;nh vi&ecirc;n nh&oacute;m TINT - Choi Yun Jin chia s??? video v??? cu???c s???ng h&agrave;ng ng&agrave;y. Video nh???n ???????c s??? quan t&acirc;m c???a c???ng ?????ng m???ng H&agrave;n Qu???c.</p>\n\n<p>Trong video, Yun Jin ti???t l??? c&ocirc; ??&atilde; qu???n l&yacute; m???t qu&aacute;n c&agrave; ph&ecirc; kho???ng hai n??m v???i b???n c???a m&igrave;nh. H??? l&agrave; b???n th&acirc;n t??? th???i ti???u h???c v&agrave; quy???t ?????nh c&ugrave;ng nhau mua l???i qu&aacute;n c&agrave; ph&ecirc; ????? kinh doanh. Yun Jin t???ng l&agrave; th&agrave;nh vi&ecirc;n TINT, nh&oacute;m nh???c n&agrave;y tan r&atilde; v&agrave;o n??m 2015.</p>\n\n<p>&quot;Nh???ng ng?????i kh&aacute;c ??ang theo ??u???i gi???c m?? c???a h???. T&ocirc;i c??ng t???ng nh?? th??? v&agrave; b&acirc;y gi??? t&ocirc;i theo ??u???i th???c t???&quot;, c&ocirc; chia s???.</p>\n\n<table align=\"center\" class=\"picture\">\n	<tbody>\n		<tr>\n			<td>\n			<div class=\"zad-inimage-wrapper\" style=\"overflow: hidden;\"><img alt=\"than tuong Kpop tu bo uoc mo anh 1\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/bzivoxbp/2020_09_12/Webp.net_resizeimage_2.jpg\" title=\"th???n t?????ng Kpop t??? b??? ?????c m?? ???nh 1\" /></div>\n			</td>\n		</tr>\n		<tr>\n			<td>\n			<p>Choi Yun Jin l&agrave; c???u th&agrave;nh vi&ecirc;n nh&oacute;m nh???c n??? TINT, tan r&atilde; n??m 2015.</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>C&ocirc; chia s??? ph???i b???t ?????u ng&agrave;y m???i s???m h??n m???i ng?????i v&igrave; qu&aacute;n c&agrave; ph&ecirc; n???m ??? Yeouido, khu v???c t???p trung nhi???u nh&acirc;n vi&ecirc;n t&agrave;i ch&iacute;nh ng&acirc;n h&agrave;ng. Yun Jin di chuy???n b???ng ph????ng ti???n c&ocirc;ng c???ng tr?????c 7 gi??? s&aacute;ng ????? m??? qu&aacute;n c&agrave; ph&ecirc; tr?????c gi??? ??i l&agrave;m c???a kh&aacute;ch h&agrave;ng. Sau khi m??? c???a qu&aacute;n c&agrave; ph&ecirc;, c&ocirc; s??? mang nh???ng h???p tr&aacute;i c&acirc;y n???ng t??? trong kho ????? chu???n b??? ????? u???ng ??&oacute;n kh&aacute;ch.</p>\n\n<p>C???u th???n t?????ng ti???t l??? m&igrave;nh ph???i t??? b??? gi???c m?? l&agrave;m ca s?? khi ?????i m???t v???i th???c t???. L&agrave;ng <a class=\"topic normal autolink\" href=\"https://zingnews.vn/tieu-diem/giai-tri-han-quoc-kpop.html\" title=\"Tin t???c Gi???i tr?? H??n Qu???c\">gi???i tr&iacute; H&agrave;n Qu???c</a> n???i ti???ng kh???c nghi???t, nhi???u c&aacute;m d???, kh&ocirc;ng d??? d&agrave;ng ????? v????n l&ecirc;n tr??? th&agrave;nh ng&ocirc;i sao.</p>\n\n<p>Video nhanh ch&oacute;ng lan truy???n v&agrave; nh???n ???????c h??n 2,5 tri???u l?????t xem. Ph&iacute;a d?????i video, nhi???u c?? d&acirc;n m???ng t??? &yacute; khen ng???i v&agrave; c??? v?? n??? doanh nh&acirc;n tr??? v&igrave; l&agrave;m vi???c ch??m ch??? ????? gi??? cho qu&aacute;n c&agrave; ph&ecirc; c???a m&igrave;nh m??? c???a.</p>\n\n<table align=\"center\" class=\"picture\">\n	<tbody>\n		<tr>\n			<td><img alt=\"than tuong Kpop tu bo uoc mo anh 2\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/bzivoxbp/2020_09_12/1599844568_cafe.jpg\" title=\"th???n t?????ng Kpop t??? b??? ?????c m?? ???nh 2\" /></td>\n		</tr>\n		<tr>\n			<td>\n			<p>Choi Yun Jin l&agrave;m vi???c ch??m ch??? ????? chu???n b??? m??? c???a qu&aacute;n c&agrave; ph&ecirc;.</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>C?? d&acirc;n m???ng b&igrave;nh lu???n: &quot;C&aacute;i t&acirc;m l&agrave;m vi???c c??ng ?????p ????? nh?? v??? ngo&agrave;i c???a c&ocirc; ???y v???y&quot;, &quot;Th???t tuy???t v???i khi c&ocirc; ???y d&aacute;m l&agrave;m nh???ng g&igrave; m&igrave;nh mu???n ??? ????? tu???i tr??? nh?? v???y. ??i???u h&agrave;nh m???t qu&aacute;n c&agrave; ph&ecirc; v???n kh&ocirc;ng d??? d&agrave;ng&quot;...</p>\n\n<p>TINT l&agrave; nh&oacute;m nh???c n??? 5 th&agrave;nh vi&ecirc;n, thu???c quy???n qu???n l&yacute; c???a GH Entertainment. Nh&oacute;m ra m???t n??m 2013 v???i ca kh&uacute;c <em>Love At First Sight.</em> M???t n??m sau, h??? comeback v???i ca kh&uacute;c <em>Wolf Is Stupi</em><em>d</em>, ??i theo h&igrave;nh t?????ng c&ocirc; b&eacute; qu&agrave;ng kh??n ????? d??? th????ng.</p>\n\n<p>Tuy nhi&ecirc;n, v&igrave; h&igrave;nh t?????ng c&oacute; ph???n tr??? con, l???i ?????n t??? c&ocirc;ng ty nh??? n&ecirc;n TINT kh&ocirc;ng th??? tr??? l???i trong Kpop. Kh&ocirc;ng l&acirc;u sau ng&agrave;y ph&aacute;t h&agrave;nh single th??? hai, nh&oacute;m nh???c tuy&ecirc;n b??? tan r&atilde;. C&aacute;c th&agrave;nh vi&ecirc;n ?????u c&oacute; k??? ho???ch ri&ecirc;ng ????? ph&aacute;t tri???n s??? nghi???p.</p>\n</div>', '95570885_1117370788638933_458381475587293184_n.jpg', '2020-09-12 12:50:08', 0, NULL, 0, '', 0, 0, NULL, '95570885_1117370788638933_458381475587293184_n.jpg', NULL, NULL, 'Restaurants', '3'),
(27, '11', NULL, '11', '95570885_1117370788638933_458381475587293184_n.jpg', '2020-09-12 13:04:30', 0, NULL, 0, '11', 0, 1, NULL, '95570885_1117370788638933_458381475587293184_n.jpg', NULL, NULL, 'Transports', '4'),
(28, 'Nh???ng m???o gi??p b???n d??? d??ng tr??ng tuy???n', 'B???n n??n chu???n b??? ki???n th???c th???t t???t cho bu???i ph???ng v???n m?? b???n s???p tham gia. T??m hi???u v??? nhi???m v???, ch???c n??ng, c??c c??ng vi???c li??n quan t???i c??ng vi???c ???ng tuy???n c???a b???n.', '<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>1. Ki???n th???c - Ni???m tin</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">B???n n??n chu???n b??? ki???n th???c th???t t???t cho bu???i ph???ng v???n m?? b???n s???p tham gia. T??m hi???u v??? nhi???m v???, ch???c n??ng, c??c c??ng vi???c li??n quan t???i c??ng vi???c ???ng tuy???n c???a b???n. B???n c?? th??? t??m hi???u ??? nhi???u k??nh ki???n th???c kh??c nhau nh?? tr??n m???ng internet, t??? ng?????i th??n, b???n b?? c?? kinh nghi???m ho???t ?????ng trong l??nh v???c ????, t??? c??ng ty, t???p ??o??n l???n. B???n c??ng chu???n b??? k??, nhi???u ki???n th???c th?? s??? r???t t??? tin trong bu???i ph???ng v???n.</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>2. C??u h???i giao ti???p</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">B???n c??ng kh??ng n??n qu?? ch?? tr???ng v??o nh???ng ki???n th???c chuy??n m??n. Ngo??i ra m??nh c??ng c?? th??? chu???n b??? tr?????c m???t s??? c??u h???i giao ti???p ????n gi???n v???i nh?? tuy???n d???ng. B???n n??n nh??? ng?????i th??n, b???n b?? h???i nh???ng c??u h???i giao ti???p ????n gi???n v?? chu???n b??? s???n nh???ng c??u tr??? l???i th???t t???t ????? ch???ng t??? b???n l?? ng?????i giao ti???p v???i ?????ng nghi???p t???t trong c??ng vi???c. B???n c??ng kh??ng n??n h???i ho???c th???c m???c qu?? nhi???u v??? c??ng vi???c v?? c??ng ty, ch??? n??n ?????t c??u h???i v?? s??? ki???n ch??nh.</span></span></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<p style=\"text-align:center\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><img alt=\"\" src=\"http://vieclammiennam.vn/img_data/files/featured.jpg\" style=\"height:480px; width:679px\" /></span></span></p>\n\n<p style=\"text-align:center\">&nbsp;</p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>3. C??u h???i kh??</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Khi g???p nh???ng c??u h???i kh?? v??? chuy??n m??n, b???n n??n th???ng th???n chia s??? v??? ki???n th???c ho???c kinh nghi???m c???a m??nh v??? v???n ????? tr??n. Kh??ng n??n n??i d???i ho???c im l???ng, b???n s??? bi???n nh???ng thi???u s??t, ??i???m y???u c???a m??nh th??nh ??i???m m???nh ????? tr??? l???i nh?? tuy???n d???ng. V?? d??? khi g???p c??u h???i `B???n h??y chia s??? v??? ??i???m y???u c???a m??nh trong c??ng vi???c?`, b???n h??y ch???n l???y 1 ??i???m y???u c???a b???n th??n v?? bi???n n?? th??nh ??i???m m???nh `T??i l?? m???t ng?????i thi???u ki??n nh???n trong c??ng vi???c, ch??? v?? b???n th??n t??i lu??n mu???n ho??n th??nh c??ng vi???c ???????c giao ????ng h???n.`</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>4. Chu???n b??? nh???ng c??u h???i</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">B???n c??ng n??n chu???n b??? cho m??nh m???t s??? c??u h???i ????? ch???ng minh m??nh l?? ng?????i c?? t?? duy v?? bi???t ph???n bi???n. `T??i c?? th??? kh??ng nh???n ph???n n??y kh??ng?` n???u nh?? tuy???n d???ng kh??ng mu???n nh???c ?????n v???n ????? tr??n, ???? l?? c?? h???i ????? b???n t??m hi???u th??m v??? v???n ????? ?????y.</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>5. Chu???n b??? v??? trang ph???c</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">B???n n??n ch???n 1 b??? qu???n ??o m???c ??i ph???ng v???n l??m sao ????? th???y ???????c s??? chuy??n nghi???p, g???n g??ng. B???n c??ng n??n t??m hi???u v??? v??n h??a c???a c??ng ty ????? ??n m???c ph?? h???p khi ??i ph???ng v???n. B???n n??n ch???n nh???ng b??? ????? tho???i m??i, kh??ng n??n qu?? c???u k??. B???n c??ng n??n m???c v??t ??i ph???ng v???n.</span></span></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>', 'featured.jpg', '2021-11-09 10:11:25', 0, NULL, 214, 'Admin', 1, 1, '2021-12-13 14:01:36', 'featured.jpg', NULL, NULL, 'Transports', '5'),
(29, 'C?? t???t hay kh??ng vi???c l??m m??i ??? 1 c??ng ty?', 'V???i mu??n v??n l?? do ???????c ????a ra cho l?? do tr??n nh??: c??ng vi???c ???n ?????nh, ?????ng nghi???p, ch??nh s??ch c??ng ty,... Nh??ng m???i ng?????i kh??ng th??? c??i ???????c l?? l?? do ch??nh y???u c???a v???n ????? tr??n l?? c?? nh??n b???n r???t s??? r???i ro khi chuy???n c??ng ty m???i.', '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>V???n ????? l??m l??u n??m ??? 1 c??ng ty lu??n ???????c m???i ng?????i ?????t ra. V???y vi???c l??m c??? ?????nh l??u n??m t???i 1 c??ng ty c?? t???t hay kh??ng? B???n ngh?? sao v??? ?? ki???n tr??n?</strong></span></span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">V???i mu??n v??n l?? do ???????c ????a ra cho l?? do tr??n nh??: c??ng vi???c ???n ?????nh, ?????ng nghi???p, ch??nh s??ch c??ng ty,... Nh??ng m???i ng?????i kh??ng th??? c??i ???????c l?? l?? do ch??nh y???u c???a v???n ????? tr??n l?? c?? nh??n b???n r???t s??? r???i ro khi chuy???n c??ng ty m???i. Kh??ng ph???i b???t bu???c hay ????ng v???i m???i tr?????ng h???p, nh??ng t??i khuy??n b???n sau khi l??m vi???c 3-4 n??m t???i 1 c??ng ty, b???n n??n nh??n l???i ch???ng ???????ng m?? m??nh ???? ??i ????? ????nh gi?? s??? nghi???p c???a m??nh. V???i kinh nghi???m c???a b???n th??n, t??i xin chia s??? m???t s??? l???i ??ch khi b???n chuy???n c??ng ty m???i:</span></span></p>\n\n<ul>\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">N??ng cao kh??? n??ng th??ch nghi v???i c??ng vi???c m???i, tr??nh ????? b???n th??n.</span></span></li>\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">N??ng cao kh??? n??ng giao ti???p, ph???ng v???n c???a b???n.</span></span></li>\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Nh???n bi???t ???????c gi?? tr??? c???a b???n th??n.</span></span></li>\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">M??? r???ng c??c m???i quan h??? ?????ng nghi???p tr??n l??nh v???c c??ng vi???c c???a b???n th??n.</span></span></li>\n	<li style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">N??ng cao m???c thu nh???p c???a b???n th??n khi tham gia 1 m??i tr?????ng c??ng ty m???i.</span></span></li>\n</ul>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<p style=\"text-align:center\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><img alt=\"\" src=\"http://vieclammiennam.vn/img_data/files/co-nen-tim-viec-lam-online-7.jpeg\" style=\"height:418px; width:650px\" /></span></span></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">L???i khuy??n tr??n ph???i lu??n ????ng v???i m???i ng?????i, tuy nhi??n b???n h??y cho b???n th??n 1 c?? h???i ????? ph??t tri???n trong l???nh v???c, c??ng vi???c m?? b???n theo ??u???i v?? ??am m??. N???u c??ng ty lu??n t???o ??i???u ki???n cho b???n ph??t tri???n trong t????ng lai v?? c?? th??? g???n b?? l??u d??i, b???n n??n c??n nh???c vi???c ??? l???i c??ng ty v?? ????ng g??p 1 c??ch t??ch c???c v??o s??? ph??t tri???n chung.</span></span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">S??? nghi???p c???a b???n l?? do b???n quy???t ?????nh, h??y l?? 1 ng?????i l??i ???? tuy???t v???i ????? l??o l??i cu???c s???ng c???a b???n ?????n nh???ng n??i t???t ?????p v?? h??nh ph??c nh???t. ?????ng lo r???i ro, h??y suy ngh?? c??i m??? v?? ch??c b???n s??? th??nh c??ng trong t????ng lai nh??.</span></span></p>', 'co-nen-tim-viec-lam-online-7.jpeg', '2021-12-09 08:50:30', 0, NULL, 116, 'Admin', 1, 1, '2021-12-13 14:02:08', 'co-nen-tim-viec-lam-online-7.jpeg', NULL, NULL, 'Transports', '6'),
(30, 'TOP 5 c??u tr??? l???i b???n kh??ng n??n d??ng trong bu???i ph???ng v???n', 'B???n kh??ng n??n k??? qu?? chi ti???t v??? gia ????nh c???a m??nh ngay trong bu???i ph???ng v???n ?????u ti??n, v?? ???? s??? l?? c?? s??? ????? c??ng ty quy???t ?????nh nh???ng ?????nh h?????ng, ch??? ????? cho b???n khi b???n ???????c nh???n.', '<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>1. Gi???i thi???u b???n th??n</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">B???n kh??ng n??n k??? qu?? chi ti???t v??? gia ????nh c???a m??nh ngay trong bu???i ph???ng v???n ?????u ti??n, v?? ???? s??? l?? c?? s??? ????? c??ng ty quy???t ?????nh nh???ng ?????nh h?????ng, ch??? ????? cho b???n khi b???n ???????c nh???n. Khi g???p nh???ng lo???i c??u h???i v??? c??ng vi???c c?? c???a b???n th??n, b???n n??n li???t k??? c??c kinh nghi???m ???? c?? ???????c ??? c??ng vi???c c?? v?? b???n s??? ??p d???ng ch??ng v??o c??ng vi???c m???i nh?? th??? n??o. N???u c??n th???i gian, b???n c?? th??? gi???i thi???u 1 v??i s??? th??ch, s??? tr?????ng c???a m??nh.</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>2. Ki???n th???c c???a ???ng vi??n v??? c??ng ty tuy???n d???ng</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Vi???c b???n kh??ng nghi??n c???u k?? v??? c??ng ty c??ng nh?? c??ng vi???c ???ng tuy???n t???i c??ng s??? l?? 1 ??i???m tr??? l???n trong bu???i ph???ng v???n c???a b???n. B???n s??? b??? ????nh gi?? l?? l?????i bi???ng, ???ng tuy???n cho vui. V?? th??? h??y nghi??n c???u th???t k?? v??? c??ng ty, ?????nh h?????ng c??ng ty, c??ng vi???c v?? s???n ph???m c??ng ty. C?? r???t nhi???u th??? b???n c?? th??? t??m ???????c v??? c??ng ty tr??n internet, nh??ng b???n ch??? c???n ch?? tr???ng v??o 1 v??i v???n ????? ch??nh, ?????ng qu?? d??i d??ng.</span></span></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://vieclammiennam.vn/img_data/files/dai-su-quan-nhat-goi-phong-van2.jpg\" style=\"height:366px; width:650px\" /></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>3. ??i???m m???nh</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">B???n h??y ch???n cho m??nh 1 ??i???m m???nh v?? l??n k??? ho???ch th???t k?? cho c??u tr??? l???i c???a b???n th??n. Vi???c t??ch c???c li??n k???t, l??m vi???c nh??m trong c??ng vi???c lu??n l?? ??u ti??n h??ng ?????u c???a c??c nh?? tuy???n d???ng hi???n nay. B???n h??y ch???ng m??nh l?? b???n th??n ???? li??n k???t, h???p t??c gi???a c??c nh??m/b??? ph??n trong c??ng ty c?? nh?? th??? n??o ????? ?????t ???????c nh???ng th??nh c??ng trong c??ng vi???c.</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>4. ??i???m y???u</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">V???i nh???ng chia s??? trung th???c v??? c??c ??i???m y???u c???a b???n th??n, b???n s??? nh???n ???????c nh???ng d???u hi???u t??ch c???c t??? nh?? tuy???n d???ng. Nh??ng b???n ph???i bi???t v???n d???ng ??i???m y???u ?????u tr??? th??nh th??? m???nh v?? ??p d???ng v??o c??ng vi???c trong t????ng lai. ?????ng tr??? l???i r???ng ??i???m y???u ???? s??? ??i theo m??nh qua m??i tr?????ng l??m vi???c m???i, m?? h??y n??i r???ng n?? s??? gi??p ??ch cho m??nh ho??n thi???n b???n th??n h??n khi l??m vi???c l??u d??i.</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>5. V??? tr?? c???a b???n trong t????ng lai</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Nh???ng ???ng vi??n c?? suy ngh?? lu??n h?????ng l??n ph??a tr?????c s??? ???????c nh?? tuy???n d???ng quan t??m. B???n ?????ng chia s??? m??nh s??? l??m c??ng vi???c nh?? v???y trong t????ng lai, m?? h??y n??i m??nh lu??n mu???n ph??t tri???n v?? ?????t ???????c 1 v??? tr?? cao h??n khi l??m vi???c t???i c??ng ty. Nh???ng d???u hi???u t??ch c???c tr??n s??? gi??p b???n ghi ??i???m kh?? nhi???u trong m???t nh?? tuy???n d???ng.</span></span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Ch??c b???n c?? 1 bu???i ph??ng v???n th??nh c??ng!</span></span></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>', 'dai-su-quan-nhat-goi-phong-van2.jpg', '2021-10-26 04:15:00', 0, NULL, 302, 'Admin', 1, 1, '2021-12-13 14:02:17', 'dai-su-quan-nhat-goi-phong-van2.jpg', NULL, NULL, 'Transports', '1'),
(31, 'Nh???ng n???i kh??? c???a ng?????i xu???t kh???u lao ?????ng', 'V???i mong mu???n c?? th???t nhi???u ti???n ????? ?????i ?????i, h???u h???t m???i ng?????i lao ?????ng ?????u mong mu???n ???????c ??i xu???t kh???u lao ?????ng ????? ki???m ???????c thu nh???p t???t cho b???n th??n v?? gia ????nh v?? Nh???t B???n ', '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">V???i mong mu???n c?? th???t nhi???u ti???n ????? ?????i ?????i, h???u h???t m???i ng?????i lao ?????ng ?????u mong mu???n ???????c ??i xu???t kh???u lao ?????ng ????? ki???m ???????c thu nh???p t???t cho b???n th??n v?? gia ????nh v?? Nh???t B???n lu??n l?? qu???c gia ???????c nhi???u ng?????i l???a ch???n. M???t m???t s??? ti???n l???n ????? ??i xu???t kh???u lao ?????ng, t??i ho??n to??n v??? m???ng v???i nh???ng g?? ph???i tr???i qua.</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>Nh???ng kh?? kh??n v??? cu???c s???ng</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">H???t gi??? l??m vi???c, m???i ng?????i lao ?????ng t??? Vi???t Nam qua Nh???t B???n l??m vi???c ?????u nh?? t??i, ?????u ???????c s???p x???p 1 c??n ph??ng tr??? m?? c??ng ty tr??? c???p. C??n ph??ng ch??? r???ng kho???ng 15m2 d??nh cho 4 ng?????i ???. M???c l????ng b??n Nh???t k??? c??? t??ng ca s??? ???????c h?????ng t??? 25-30 tri???u, tr??? h???t ti???n nh??, ??i???n, n?????c, ??n u???ng ra th?? t??i d?? kho???ng 10 tri???u ti???n ti???t ki???m h??ng th??ng ????? g???i v??? cho gia ????nh. ??? Vi???t Nam th?? s??? ti???n ???? l?? l???n, nh??ng kh??ng ai bi???t ???????c nh???ng g?? t??i ph???i tr???i qua l?? c??i gi?? q??a ?????t.</span></span></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://vieclammiennam.vn/img_data/files/aa.jpg\" style=\"height:433px; width:650px\" /></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Ch??ng t??i ph???i th???c d???y l??c 5h30 s??ng v?? l??m vi???c ?????n 23h m???i ng??y, c?? ng??y ??i l??m d?????i c??i l???nh -2 ????? C ch??? khi c?? b??o l???n hay l?? l???t ???nh h?????ng ?????n t??nh m???ng con ng?????i th?? ch??ng t??i m???i ???????c ngh???, c??n l???i v???n ph???i ??i l??m b??nh th?????ng.</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>Quy t???c ??? nh???ng c??ng ty Nh???t</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Ng?????i Nh???t r???t quy c?? v?? nghi??m kh???c v???i b??? quy t???c c???a m??nh. Trong c??ng ty th?????ng c?? nh???ng quy t???c, quy ?????nh r???t nghi??m, ???? l?? l?? do nhi???u ng?????i lao ?????ng nh?? ch??ng t??i c???m th???y m???t m???i v?? b??? stress th???i gian ?????u khi qua ????y l??m vi???c. Ai c??ng mong mu???n k???t th??c 1 ng??y l??m vi???c th???t nhanh ????? ra kh???i c??ng ty.</span></span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Nh??ng cu???c s???ng v???n d?? lu??n ph???i ????nh ?????i ????? c?? ???????c th??? m??nh mong mu???n, ch??ng t??i ai c??ng c??? g???ng lao ?????ng ????? c?? ???????c ti???n g???i v??? cho gia ????nh, ng?????i th??n. Ai c??ng mong ???????c k???t th??c 1 n??m l??m vi???c ????? T???t ???????c v??? Vi???t Nam th??m gia ????nh v?? ???? l?? ?????ng l???c to l???n nh???t ????? m???i ng?????i c??ng v?????t qua kh?? kh??n.</span></span></p>', 'aa.jpg', '2021-12-07 09:14:14', 0, NULL, 95, 'Admin', 1, 1, '2021-12-13 14:02:26', 'aa.jpg', NULL, NULL, 'Transports', '1'),
(32, 'Nh???ng t??nh c??ch s??? g??y phi???n cho b???n trong c??ng ty', '????y l?? t??nh c??ch ?????u ti??n b???n c???n ph???i b??? khi l??m vi???c t???p th???. N??ng gi???n lu??n ??i k??m v???i s??? k??m kh??n ngoan, ??i???u ???? s??? l??m b???n b??? m???t ??i???m v???i nh???ng ?????ng nghi???p c???a m??nh. B???n ph???i lu??n l??m ch???', '<h1 style=\"text-align:justify\"><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:14px\"><strong>T???c gi???n</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:14px\">????y l?? t??nh c??ch ?????u ti??n b???n c???n ph???i b??? khi l??m vi???c t???p th???. N??ng gi???n lu??n ??i k??m v???i s??? k??m kh??n ngoan, ??i???u ???? s??? l??m b???n b??? m???t ??i???m v???i nh???ng ?????ng nghi???p c???a m??nh. B???n ph???i lu??n l??m ch??? ???????c c???m x??c c???a b???n th??n trong gi???i quy???t c??ng vi???c, vi???c b???n t??? ra n??ng gi???n s??? ch???ng gi??p ??ch ???????c g?? trong c??ng vi???c chung c???a c??ng ty.</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:14px\"><strong>Ki??u ng???o</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:14px\">M???c d?? b???n th??n b???n l?? ng?????i r???t gi???i v?? n??ng ?????ng trong c??ng vi???c, nh??ng vi???c b???n ki??u ng???o qu?? m???c c???n thi???t v???i b???n b?? ?????ng nghi???p, nh???n h???t m???i c??ng lao, ??u ??i???m c???a c??ng vi???c v??? m??nh s??? l??m b???n ng??y c??ng b??? t??ch ra ngo??i nh??m ho???t ?????ng c??ng vi???c c???a m??nh. C?? nh???ng c??ng vi???c c???n ph???i ho???t ?????ng theo nh??m ????? ho??n th??nh, v?? v???y b???n n??n ch??? ?????ng giao ti???p, khi??m t???n ????? c??ng ?????ng nghi???p ho??n th??nh t???t c??ng vi???c c???a m??nh.</span></span></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://vieclammiennam.vn/img_data/files/interviewing-skills-training-course.jpg\" style=\"height:406px; width:650px\" /></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:14px\"><strong>C???u th???</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:14px\">B???n c?? th??? bi???t m??nh s??? th???c hi???n ???????c c??ng vi???c ???? m???t c??ch nhanh g???n v?? th??nh c??ng, nh??ng v?? b???n t??nh c???u th??? b???n l??m m???i chuy???n tr??? n??n r???c r???i v?? th???t b???i v?? ???? l?? 1 t??nh c??ch kh??ng n??n c?? trong c??ng vi???c. Khi b???n nh???n 1 nhi???m v??? t??? c??ng ty, b???n ph???i t??m hi???u v?? l??m b???ng tr??ch nhi???m c???a b???n th??n, kh??ng ch??? l??m ?????i ph?? m?? ph???i th??nh c??ng ????? ch???ng minh n??ng l???c b???n th??n v???i ?????ng nghi???p v?? s???p. H??y lu??n chu???n b??? cho m??nh 1 t?? th??? s???n s??ng ti???p nh???n m???i c??ng vi???c ???????c giao.</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:14px\"><strong>?????ng n??i n??y, tr??ng n??i n???</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:14px\">Khi b???n l??m vi???c trong 1 t???p th???, 1 c??ng ty b???n n??n bi???t m??nh ??ang ??? ????u v?? v??? tr?? c??? th??? ph?? h???p v???i n??ng l???c c???a b???n th??n. Thay v?? b???n lu??n ??i n??i x???u ng?????i ??ang ?????ng ??? v??? tr?? m??nh mong mu???n ????? c?? ?? l??m gi???m uy t??n, h??? b??? h??? th?? b???n n??n ch???ng m??nh th???c l???c c???a b???n th??n m??nh 1 c??ch t??ch c???c h??n. H??y l???y ki???n th???c, t??i n??ng c???a m??nh l?? v?? kh?? ????? m??nh ?????t ???????c m???i th??nh c??ng trong c??ng vi???c.</span></span></p>', 'interviewing-skills-training-course.jpg', '2021-11-30 07:13:13', 0, NULL, 12, 'Admin', 1, 1, '2021-12-13 14:02:34', 'interviewing-skills-training-course.jpg', NULL, NULL, 'Transports', '1');
INSERT INTO `gdt_news` (`id`, `news_title`, `news_summary`, `news_content`, `news_image`, `date_created`, `isdelete`, `news_priority`, `views_number`, `author`, `popular`, `isshow`, `date_update`, `news_image_right`, `news_image_mobile`, `news_image_mobile_right`, `tag`, `categories`) VALUES
(33, 'C??ch gi???i quy???t m??u thu???n trong c??ng vi???c', 'Vi???c m??u thu???n gi???a c??c th??nh vi??n trong nh??m l?? ??i???u h???t s???c b??nh th?????ng, c??c ?? ki???n tr??i chi???u ???????c ????a ra cho 1 v???n ????? s??? g??y tranh c??i gay g???t, nh???m ?????n nh???ng s??ng t???o, ph??t tri???n cho d??? ??n ', '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Vi???c m??u thu???n gi???a c??c th??nh vi??n trong nh??m l?? ??i???u h???t s???c b??nh th?????ng, c??c ?? ki???n tr??i chi???u ???????c ????a ra cho 1 v???n ????? s??? g??y tranh c??i gay g???t, nh???m ?????n nh???ng s??ng t???o, ph??t tri???n cho d??? ??n c??ng ty l?? ??i???u ??ang qu?? tr???ng. Nh??ng b???n n??n bi???t vi???c tranh c???i ????? gi???i quy???t c??ng vi???c kh??ng ????? v?????c qu?? gi???i h???n l??m m??u thu???n s??u s???c gi???a c??c th??nh vi??n trong c??ng ty.</span></span></p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>H??y l???ng nghe</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Khi m???i chuy???n ???? ??ang ??i qu?? gi???i h???n, b???n n??n l?? ng?????i l???ng xu???ng v?? l???ng nghe ?? ki???n c???a m???i ng?????i. ?????ng gi??? v??? nghe r???i cho qua, vi???c ???? s??? ch??? l??m m???i chuy???n th??m t???i t???. B???n h??y t??? th??i ????? c???i m???, cho ?????ng nghi???p 1 v??i l???i khuy??n nh???ng ??i???u ???? s??? gi??p bu???i tranh lu???n gi???m d???n m??u thu???n v?? gi???i quy???t ???????c m???i vi???c 1 c??ch hi???u qu???.</span></span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">V??? ph??a m??nh, b???n n??n chia s??? cho m???i ng?????i nghe v??? v???n ????? c???a m??nh ?????ng ch??? ????? l???i cho ng?????i kh??c m?? h??y th??nh th???t nh???n l???i v??? m??nh n???u b???n m???c sai l???m.</span></span></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://vieclammiennam.vn/img_data/files/images(1).jpeg\" style=\"height:432px; width:650px\" /></p>\n\n<p style=\"text-align:justify\">&nbsp;</p>\n\n<h1 style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>T??nh h??nh tr??? n??n t??? h??n</strong></span></span></h1>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">N???u ?????ng nghi???p c???a b???n t??? ra qu?? kh??ch, b???n n??n y??u c???u ?????ng bu???i th???o lu???n v?? ??i ra ngo??i. B???n c?? th??? b???t ?????u l???i bu???i th???o lu???n b???ng nh???ng c??ch giao ti???p kh??c nh?? d??ng gi???y, b???ng con ????? tr?? chuy???n nh???m gi???m s??? c??ng th???ng c???a m???i ng?????i ho???c nh??? 1 ng?????i th??? ba gi???i quy???t nh???ng m???u thu???n gi???a 2 ng?????i. B???n kh??ng qu?? cho m??nh lu??n ????ng, hi???u bi???t h??n ??i???u ???? c?? th??? l??m m???i th??? t???i t???.</span></span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>????a ra gi???i ph??p</strong></span></span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:arial,helvetica,sans-serif\">Khi m???i th??? ???? ???????c gi???i quy???t v?? l??m r??, s??? d???ng nh???ng th??ng tin c???a b???n trong bu???i n??i chuy???n ????? ????a ra gi???i ph??p kh???c ph???c, gi??p kh??ng ????? t??i di???n t??nh tr???ng n??y n???a. N???u ?????ng nghi???p c???a b???n kh??ng ?????ng ?? v???i c??ch gi???i quy???t ?????y c???a b???n, th?? b???n n??n ph??n t??ch hi???u r?? v?? sao v?? c??? ch??o k??o v??? ph??a m??nh.</span></span></p>', 'images.jpeg', '2021-12-13 13:23:21', 0, NULL, 123, 'Admin', 1, 1, '2021-12-13 14:02:42', 'images.jpeg', NULL, NULL, 'Transports', '3');

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
