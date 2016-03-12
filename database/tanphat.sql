-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2016 at 08:57 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanphat`
--

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) UNSIGNED NOT NULL,
  `captcha_time` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(4, 1451372462, '127.0.0.1', '69550255'),
(5, 1451372552, '127.0.0.1', '17632835'),
(6, 1451372603, '127.0.0.1', '02771429'),
(7, 1451372734, '127.0.0.1', '91346182'),
(8, 1451372823, '127.0.0.1', '11041825'),
(9, 1451372848, '127.0.0.1', '33073459'),
(10, 1451372852, '127.0.0.1', '57101500'),
(11, 1451372875, '127.0.0.1', '03062257'),
(12, 1451372927, '127.0.0.1', '03615437'),
(13, 1451373528, '127.0.0.1', '11841846'),
(14, 1451374114, '127.0.0.1', '57187489'),
(15, 1451374116, '127.0.0.1', '76505930'),
(16, 1451374159, '127.0.0.1', '39343391'),
(17, 1451374161, '127.0.0.1', '26830192'),
(18, 1451374282, '127.0.0.1', '57744357'),
(19, 1451374284, '127.0.0.1', '56386881'),
(20, 1451374292, '127.0.0.1', '95518306'),
(21, 1451374304, '127.0.0.1', '88448665'),
(22, 1451375037, '127.0.0.1', '44497642'),
(23, 1451375073, '127.0.0.1', '35090092'),
(24, 1451375108, '127.0.0.1', '40030192'),
(25, 1451375162, '127.0.0.1', '12811848'),
(26, 1451375184, '127.0.0.1', '36708412'),
(27, 1451375212, '127.0.0.1', '17161888'),
(28, 1451375232, '127.0.0.1', '06763473'),
(29, 1451375236, '127.0.0.1', '47436475'),
(30, 1451375244, '127.0.0.1', '09982292'),
(31, 1451375284, '127.0.0.1', '40396753'),
(32, 1451375298, '127.0.0.1', '94681652'),
(33, 1451375337, '127.0.0.1', '04362463'),
(34, 1451375358, '127.0.0.1', '61270409'),
(35, 1451375431, '127.0.0.1', '16055439'),
(36, 1451375478, '127.0.0.1', '99573234'),
(37, 1451375503, '127.0.0.1', '43951396'),
(38, 1451375509, '127.0.0.1', '13625473'),
(39, 1451375525, '127.0.0.1', '70117359'),
(40, 1451375530, '127.0.0.1', '86070173'),
(41, 1451375537, '127.0.0.1', '73709390'),
(42, 1451375580, '127.0.0.1', '54371603'),
(43, 1451375592, '127.0.0.1', '57760257'),
(44, 1451375596, '127.0.0.1', '74422929'),
(45, 1451375603, '127.0.0.1', '77851232'),
(46, 1451375628, '127.0.0.1', '69827157'),
(47, 1451375635, '127.0.0.1', '46553975'),
(48, 1451375749, '127.0.0.1', '47136078'),
(49, 1451375758, '127.0.0.1', '62565050'),
(50, 1451375815, '127.0.0.1', '38160544'),
(51, 1451375823, '127.0.0.1', '59344043'),
(52, 1451375915, '127.0.0.1', '86055395'),
(53, 1451375922, '127.0.0.1', '87829290'),
(54, 1451376031, '127.0.0.1', '65449145'),
(55, 1451376039, '127.0.0.1', '47212249'),
(56, 1451376224, '127.0.0.1', '50299808'),
(57, 1451376231, '127.0.0.1', '94336892'),
(58, 1451376695, '127.0.0.1', '55294572'),
(59, 1451376710, '127.0.0.1', '80314562'),
(60, 1451376717, '127.0.0.1', '28088540'),
(61, 1451376726, '127.0.0.1', '09352604'),
(62, 1451376730, '127.0.0.1', '31659706'),
(63, 1451376825, '127.0.0.1', '22964381'),
(64, 1451376833, '127.0.0.1', '42009464'),
(65, 1451376982, '127.0.0.1', '16180988'),
(66, 1451376990, '127.0.0.1', '99903734'),
(67, 1451377183, '127.0.0.1', '93539970'),
(68, 1451377192, '127.0.0.1', '51253104'),
(69, 1451377324, '127.0.0.1', '29039473'),
(70, 1451377331, '127.0.0.1', '38566999'),
(71, 1451377620, '127.0.0.1', '74152457'),
(72, 1451377633, '127.0.0.1', '99532083'),
(73, 1451377770, '127.0.0.1', '58956028'),
(74, 1451377789, '127.0.0.1', '72548301'),
(75, 1451377814, '127.0.0.1', '53663359'),
(76, 1451377911, '127.0.0.1', '75366263'),
(77, 1451377923, '127.0.0.1', '53409636'),
(78, 1451377923, '127.0.0.1', '94114420'),
(79, 1451378105, '127.0.0.1', '19077156'),
(80, 1451378397, '127.0.0.1', '37006131'),
(81, 1451378399, '127.0.0.1', '36316184'),
(82, 1451378415, '127.0.0.1', '89038545'),
(83, 1451378415, '127.0.0.1', '56024584'),
(84, 1451378704, '127.0.0.1', '17326676'),
(85, 1451378717, '127.0.0.1', '12520709'),
(86, 1451378717, '127.0.0.1', '86833505'),
(87, 1451378761, '127.0.0.1', '47333363'),
(88, 1451378800, '127.0.0.1', '69327030'),
(89, 1451378803, '127.0.0.1', '12062054'),
(90, 1451378847, '127.0.0.1', '81351235'),
(91, 1451378859, '127.0.0.1', '20900847'),
(92, 1451378859, '127.0.0.1', '02357527'),
(93, 1451378883, '127.0.0.1', '75623570'),
(94, 1451378896, '127.0.0.1', '98128433'),
(95, 1451378896, '127.0.0.1', '49967968'),
(96, 1451378909, '127.0.0.1', '42609105'),
(97, 1451378915, '127.0.0.1', '61587441'),
(98, 1451379062, '127.0.0.1', '61963444'),
(99, 1451379073, '127.0.0.1', '15826571'),
(100, 1451379091, '127.0.0.1', '92541497'),
(101, 1451379136, '127.0.0.1', '25264552'),
(102, 1451379141, '127.0.0.1', '19308274'),
(103, 1451379147, '127.0.0.1', '24053724'),
(104, 1451379157, '127.0.0.1', '48621149'),
(105, 1451379189, '127.0.0.1', '39192216'),
(106, 1451379189, '127.0.0.1', '73074491'),
(107, 1451385771, '127.0.0.1', '43821318'),
(108, 1451390814, '127.0.0.1', '29249259'),
(109, 1451391228, '127.0.0.1', '94680165'),
(110, 1451391257, '127.0.0.1', '39782375'),
(111, 1451402149, '127.0.0.1', '91528481'),
(112, 1451402157, '127.0.0.1', '55612755'),
(113, 1451403325, '127.0.0.1', '37514697'),
(114, 1451403622, '127.0.0.1', '97451727'),
(115, 1451471786, '127.0.0.1', '91854361'),
(116, 1451472532, '127.0.0.1', '88020812'),
(117, 1451472582, '127.0.0.1', '79609439'),
(118, 1451473388, '127.0.0.1', '26151193'),
(119, 1451473468, '127.0.0.1', '11171355'),
(120, 1451473469, '127.0.0.1', '84937494');

-- --------------------------------------------------------

--
-- Table structure for table `category_customers`
--

CREATE TABLE `category_customers` (
  `category_id` int(11) NOT NULL DEFAULT '0',
  `customer_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_customers`
--

INSERT INTO `category_customers` (`category_id`, `customer_id`) VALUES
(0, 58),
(609, 58),
(611, 58),
(608, 58),
(610, 58),
(623, 66),
(622, 61),
(0, 62),
(618, 62);

-- --------------------------------------------------------

--
-- Table structure for table `images_products`
--

CREATE TABLE `images_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` text NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images_products`
--

INSERT INTO `images_products` (`id`, `url`, `product_id`) VALUES
(23, '14535316651453531665china-pt06-new-thiet-bi-dinh-vi-gps-danh-cho-xe-may-den-5237-716562-1-product.jpg', 1620),
(24, '14535316651453531665dinh-vi-pt08 (1).jpg', 1620),
(25, '14535316651453531665dinh-vi-pt08.jpg', 1620),
(26, '14535316651453531665thiet_bi_dinh_vi_gps_antc_tracker_v1.jpg', 1620),
(27, '14535316651453531665thiet-biet-dinh-vi-xe-may-gt07-300x199.jpg', 1620),
(29, '14535337441453533744images (1).jpg', 1622),
(30, '14535337441453533744images.jpg', 1622),
(31, '145353388814535338881.jpg', 1623),
(32, '14535338881453533888alotin.vn_1404275936_huongptp20121129141036913_0.jpg', 1623),
(33, '14535338881453533888gscan.jpg', 1623),
(34, '14535338881453533888images (2).jpg', 1623),
(35, '14535338881453533888images.jpg', 1623);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `pro_name` text NOT NULL,
  `image` text NOT NULL,
  `pro_qty` int(10) NOT NULL,
  `pro_price` int(10) NOT NULL,
  `order_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`pro_name`, `image`, `pro_qty`, `pro_price`, `order_id`) VALUES
('Máy rửa nước lạnh áp lực 9Mpa', '/uploads/products/thumb/3112201512093128969_VJW-5C-18 phu.gif', 1, 0, 134),
('Máy rửa và làm sạch bằng hơi nước nóng', '/uploads/products/thumb/3112201512023827481_IVP Vesuvio phu.jpg', 1, 0, 135),
('Máy làm sạch bằng hơi nước nóng', '/uploads/products/thumb/311220151204442309_IVP 4.0 VAC 4000 phu.jpg', 1, 0, 135),
('Máy rửa xe áp lực cao IPC PW-C40', '/uploads/products/thumb/301220151142149656_PW-C40.png', 1, 0, 136),
('Máy rửa nước lạnh áp lực cao', '/uploads/products/thumb/3112201512104428969_VJW-5C-18 phu.gif', 1, 0, 137),
('Máy rửa nước nóng áp lực cao', '/uploads/products/thumb/3112201512085632429_MR-30VM phu.gif', 1, 0, 137),
('Máy rửa xe áp lực cao và tạo bọt tuyết', '/uploads/products/thumb/3112201512065029433_AY-1 Series phu.jpg', 1, 0, 137),
('Máy rửa xe áp lực cao IPC PW-C40', '/uploads/products/thumb/301220151142149656_PW-C40.png', 1, 0, 138),
('Máy làm sạch bằng hơi nước nóng', '/uploads/products/thumb/311220151204442309_IVP 4.0 VAC 4000 phu.jpg', 1, 0, 138),
('Máy làm sạch bằng hơi nước nóng', '/uploads/products/thumb/311220151204442309_IVP 4.0 VAC 4000 phu.jpg', 1, 0, 139),
('Máy rửa nước lạnh áp lực cao', '/uploads/products/thumb/3112201512104428969_VJW-5C-18 phu.gif', 1, 0, 140),
('Sản phẩm điện dân dụng', '/uploads/products/thumb/020120161141421.jpg', 1, 0, 141),
('Máy rửa nước lạnh áp lực 9Mpa', '/uploads/products/thumb/3112201512093128969_VJW-5C-18 phu.gif', 1, 0, 142);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) UNSIGNED NOT NULL,
  `label` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `label`) VALUES
(3, 'Administrator'),
(4, 'Shop manager'),
(5, 'Biên tập nội dung');

-- --------------------------------------------------------

--
-- Table structure for table `role_modules`
--

CREATE TABLE `role_modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `module_code` varchar(100) NOT NULL,
  `module_label` varchar(200) NOT NULL,
  `add` tinyint(1) NOT NULL DEFAULT '0',
  `edit` tinyint(1) NOT NULL DEFAULT '0',
  `del` tinyint(1) NOT NULL DEFAULT '0',
  `view` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_modules`
--

INSERT INTO `role_modules` (`id`, `role_id`, `module_code`, `module_label`, `add`, `edit`, `del`, `view`) VALUES
(76, 3, 'product', '', 1, 1, 1, 1),
(77, 3, 'product_category', '', 1, 1, 1, 1),
(78, 3, 'articles', '', 1, 1, 1, 1),
(79, 3, 'order', '', 1, 1, 1, 1),
(80, 3, 'khachhang', '', 1, 1, 1, 1),
(81, 3, 'system', '', 1, 1, 1, 1),
(82, 3, 'recruitment', '', 1, 1, 1, 1),
(83, 3, 'introduce', '', 1, 1, 1, 1),
(84, 3, 'service', '', 1, 1, 1, 1),
(85, 3, 'report', '', 1, 1, 1, 1),
(86, 5, 'product', '', 0, 0, 0, 0),
(87, 5, 'product_category', '', 0, 0, 0, 0),
(88, 5, 'articles', '', 1, 1, 1, 1),
(89, 5, 'order', '', 0, 0, 0, 0),
(90, 5, 'khachhang', '', 0, 0, 0, 0),
(91, 5, 'system', '', 0, 0, 0, 0),
(92, 5, 'recruitment', '', 1, 1, 1, 1),
(93, 5, 'introduce', '', 1, 1, 1, 1),
(94, 5, 'service', '', 1, 1, 1, 1),
(95, 5, 'report', '', 0, 0, 0, 0),
(96, 9, 'product', '', 1, 1, 1, 1),
(97, 9, 'product_category', '', 1, 1, 1, 1),
(98, 9, 'articles', '', 0, 0, 0, 0),
(99, 9, 'order', '', 0, 0, 0, 0),
(100, 9, 'khachhang', '', 0, 0, 0, 0),
(101, 9, 'system', '', 0, 0, 0, 0),
(102, 9, 'recruitment', '', 0, 0, 0, 0),
(103, 9, 'introduce', '', 0, 0, 0, 0),
(104, 9, 'service', '', 0, 0, 0, 0),
(105, 9, 'report', '', 0, 0, 0, 0),
(106, 3, 'slide', '', 1, 1, 1, 1),
(107, 3, 'role', '', 0, 0, 0, 0),
(108, 3, 'config', '', 0, 1, 0, 1),
(109, 5, 'slide', '', 0, 0, 0, 0),
(110, 5, 'config', '', 0, 0, 0, 0),
(111, 4, 'product', '', 1, 1, 1, 1),
(112, 4, 'product_category', '', 1, 1, 1, 1),
(113, 4, 'articles', '', 1, 1, 1, 1),
(114, 4, 'order', '', 0, 0, 0, 0),
(115, 4, 'khachhang', '', 1, 1, 1, 1),
(116, 4, 'system', '', 0, 0, 0, 0),
(117, 4, 'recruitment', '', 1, 1, 1, 1),
(118, 4, 'introduce', '', 1, 1, 1, 1),
(119, 4, 'service', '', 1, 1, 1, 1),
(120, 4, 'report', '', 0, 0, 0, 0),
(121, 4, 'slide', '', 1, 1, 1, 1),
(122, 4, 'config', '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tanphat_posts`
--

CREATE TABLE `tanphat_posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `desc` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `url_rewrite` text NOT NULL,
  `language` int(1) NOT NULL DEFAULT '1',
  `type` char(32) NOT NULL DEFAULT '',
  `status` char(1) NOT NULL DEFAULT '1',
  `seo_keyword` text NOT NULL,
  `seo_desc` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_created` int(1) NOT NULL DEFAULT '0',
  `user_updated` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tanphat_posts`
--

INSERT INTO `tanphat_posts` (`id`, `title`, `image`, `desc`, `content`, `url_rewrite`, `language`, `type`, `status`, `seo_keyword`, `seo_desc`, `created_at`, `user_created`, `user_updated`) VALUES
(59, 'Đào tạo', '/uploads/posts/thumbs/98760026ce8a50a9d7f5ca193ae7ce6c.jpg', 'Công ty Tân Phát luôn đánh giá cao tầm quan trọng của việc Đào tạo và chuyển giao công nghệ cho khách hàng sau khi mua hàng của chúng tôi, với mục đích của chúng tôi là:', '&#160;Công ty Tân Phát luôn đánh giá cao tầm quan trọng của việc Đào tạo và chuyển giao công nghệ cho khách hàng sau khi mua hàng của chúng tôi, với mục đích của chúng tôi là:', 'dao-tao', 1, 'SER', '1', 'Đào tạo Đào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạo', 'Đào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạoĐào tạo', '2016-01-14 05:14:02', 0, 157),
(60, 'Nhân viên Kinh doanh máy vệ sinh công nghiệp (tuyển gấp)', '/uploads/posts/thumbs/3dfaa68d7e9ef891a42f61e156c1b6cf.jpg', 'Căn cứ theo Luật Việc làm số 38/2013/QH13 có hiệu lực từ ngày 1/1/2015 có quy định: Đánh giá kỹ năng nghề Quốc gia cho Người lao động nhằm mục đích hoàn thiện năng lực nghề nghiệp của bản thân Người lao động, tìm công việc phù hợp hoặc công việc yêu cầu p', '<span style="color: rgb(51, 51, 51); font-family: Arial; font-size: 14px; line-height: 18px;">Căn cứ theo Luật Việc làm số 38/2013/QH13 có hiệu lực từ ngày 1/1/2015 có quy định: Đánh giá kỹ năng nghề Quốc gia cho Người lao động nhằm mục đích hoàn thiện năng lực nghề nghiệp của bản thân Người lao động, tìm công việc phù hợp hoặc công việc yêu cầu phải có chứng chỉ kỹ năng nghề quốc gia.</span>', 'nhan-vien-kinh-doanh-may-ve-sinh-cong-nghiep--tuyen-gap-', 1, 'REC', '1', '', 'Nhân viên Kinh doanh máy vệ sinh công nghiệp (tuyển gấp)', '2016-01-11 11:31:37', 0, 157),
(61, 'Các gara sửa chữa ô tô khu vực Hải Phòng', '/uploads/posts/thumbs/83f4b60293ba29dbf8655e000c235d62.jpg', 'Các gara sửa chữa ô tô khu vực Quảng Ninh Các gara sửa chữa ô tô khu vực Quảng Ninh Các gara sửa chữa ô tô khu vực Quảng Ninh Các gara sửa chữa ô tô khu vực Quảng Ninh Các gara sửa chữa ô tô khu vực Quảng Ninh ', '&#160;<strong style="font-family: Arial, Helvetica, sans-serif; text-align: justify; color: rgb(215, 167, 0); background-color: rgb(18, 18, 18);">Các gara sửa chữa ô tô khu vực Hải Phòng</strong>', 'cac-gara-sua-chua-o-to-khu-vuc-hai-phong', 0, 'CUS', '1', 'Các gara sửa chữa ô tô khu vực Hải Phòng', 'Các gara sửa chữa ô tô khu vực Hải Phòng', '2016-01-19 10:33:47', 0, 153),
(62, 'Các gara sửa chữa ô tô khu vực Quảng Ninh', '/uploads/posts/thumbs/8b516a328cc14b08fa2960c3060759db.jpg', '', '&#160;Các gara sửa chữa ô tô khu vực Quảng Ninh', 'cac-gara-sua-chua-o-to-khu-vuc-quang-ninh', 0, 'CUS', '1', 'gara ô tô quảng ninh, sửa chữa ô tô tại quảng ninh', 'Các gara sửa chữa ô tô khu vực Quảng Ninh Các gara sửa chữa ô tô khu vực Quảng NinhCác gara sửa chữa ô tô khu vực Quảng NinhCác gara sửa chữa ô tô khu vực Quảng NinhCác gara sửa chữa ô tô khu vực Quảng Ninh', '2016-01-20 02:15:03', 0, 153),
(63, 'Video giới thiệu công ty', '/uploads/posts/thumbs/82e5d7280bc50cfa88a8dd3b06a3aea5.jpg', 'Video giới thiệu công ty Video giới thiệu công ty Video giới thiệu công ty Video giới thiệu công ty Video giới thiệu công ty Video giới thiệu công ty Video giới thiệu công ty Video giới thiệu công ty ', '<iframe width="660" height="415" frameborder="0" src="http://www.youtube.com/embed/0PbvSq5GJ8E?rel=0&amp;start=5&amp;autoplay=1&amp;loop=1" allowfullscreen=""></iframe>', 'video-gioi-thieu-cong-ty', 1, 'INT', '1', '', 'Video giới thiệu công ty', '2016-01-20 02:22:06', 0, 153),
(64, 'Giới thiệu chung', '/uploads/posts/thumbs/5896dfad5927346f809adb8081fcf489.jpg', 'Giới thiệu chung Giới thiệu chung Giới thiệu chung Giới thiệu chung Giới thiệu chung Giới thiệu chung Giới thiệu chung Giới thiệu chung Giới thiệu chung Giới thiệu chung Giới thiệu chung', '<span style="color: rgb(0, 0, 0);"><font style="text-align:justify; color:#A8A8A8;">  </font></span><font style="text-align:justify; color:#A8A8A8;">\n<p>\n<p>&#160;</p>\n<span style="color: rgb(0, 0, 0);">\n<p><span style="font-size: medium;"><span style="font-family: Arial;"><small><b><span style="line-height: 115%;">Lĩnh vực ô tô, xe máy&#160;&#160; </span></b></small></span></span></p>\n</span></p>\n<div style="text-align: justify; margin: 0cm 0cm 10pt">\n<div style="text-align: justify; margin: 0cm 0cm 10pt">&#160;</div>\n<span style="color: rgb(0, 0, 0);">\n<div style="text-align: justify; margin: 0cm 0cm 10pt"><span style="font-size: medium;"><span style="font-family: Arial;"><small><span style="line-height: 115%;">Tân Phát là đ</span><span style="line-height: 115%;">ơn vị đi đầu trong lĩnh vực </span><span style="line-height: 115%;">cung  cấp thiết bị cho nhà máy sản xuất lắp ráp ô tô xe máy, thiết bị cho  trạm bảo hành và sửa chữa ô tô trên toàn quốc. Là nhà cung cấp uy tín  cho các trạm bảo hành của các hãng xe nổi tiếng: Mercedes, Honda,  Toyota, Huyndai, Mitsubishi, Ford, Daewoo, Isuzu… và trạm bảo hành xe  buýt, xe tải, xe chuyên dùng, đặc chủng thuộc Bộ Công an, Bộ Quốc phòng,  các trạm bảo hành sửa chữa xe buýt thuộc Tổng công ty vận tải và dịch  vụ công…&#160;</span></small></span></span></div>\n</span></div>\n<div style="text-align: justify; margin: 0cm 0cm 10pt">\n<div style="text-align: justify; margin: 0cm 0cm 10pt">&#160;</div>\n<span style="color: rgb(0, 0, 0);">\n<div style="text-align: justify; margin: 0cm 0cm 10pt"><span style="font-size: medium;"><span style="font-family: Arial;"><small><b><span style="line-height: 115%;">Lĩnh vực dạy nghề, đào tạo&#160;</span></b></small></span></span></div>\n</span></div>\n<div style="text-align: justify; margin: 0cm 0cm 10pt">\n<div style="text-align: justify; margin: 0cm 0cm 10pt">&#160;</div>\n<span style="color: rgb(0, 0, 0);">\n<div style="text-align: justify; margin: 0cm 0cm 10pt"><span style="font-size: medium;"><span style="font-family: Arial;"><small><span style="line-height: 115%;">Công  ty Tân Phát là một trong những công ty hàng đầu Việt Nam về lĩnh vực  cung cấp thiết bị dạy nghề, cung cấp dịch vụ trọn gói từ tư vấn và thiết  kế giải pháp đầu tư tổng thể đến cung cấp thiết bị cho các trường dạy  nghề với các trình độ từ trung tâm, trung cấp đến đại học cho đến các  nghề cơ khí, điện, tự động hóa, ô tô, khí nén, thủy lực… </span></small></span></span></div>\n</span></div>\n<div style="text-align: justify; margin: 0cm 0cm 10pt">\n<div style="text-align: justify; margin: 0cm 0cm 10pt">&#160;</div>\n<span style="color: rgb(0, 0, 0);">\n<div style="text-align: justify; margin: 0cm 0cm 10pt"><span style="font-size: medium;"><span style="font-family: Arial;"><small><span style="line-height: 115%;">Đến  nay công ty Tân Phát là nhà cung cấp uy tín của hàng trăm trường dạy  nghề từ trình độ trung cấp đến đại học trên toàn quốc, thuộc Bộ Giáo dục  và Đào tạo, Bộ Lao động- Thương binh và xã hội, Bộ NN&amp;PTNT, Bộ Quốc  phòng… và các gói thầu vốn ODA và Ngân hàng thế giới.&#160;</span></small></span></span></div>\n</span></div>\n<div style="text-align: justify; margin: 0cm 0cm 10pt">\n<div style="text-align: justify; margin: 0cm 0cm 10pt">&#160;</div>\n<span style="color: rgb(0, 0, 0);">\n<div style="text-align: justify; margin: 0cm 0cm 10pt"><span style="font-size: medium;"><span style="font-family: Arial;"><small><b><span style="line-height: 115%;">Thiết bị cơ khí&#160;</span></b></small></span></span></div>\n</span></div>\n<div style="text-align: justify; margin: 0cm 0cm 10pt">\n<div style="text-align: justify; margin: 0cm 0cm 10pt">&#160;</div>\n<span style="color: rgb(0, 0, 0);">\n<div style="text-align: justify; margin: 0cm 0cm 10pt"><span style="font-size: medium;"><span style="font-family: Arial;"><small><span style="line-height: 115%;">Tư  vấn kỹ thuật và cung cấp thiết bị cho các nhà máy cơ khí, nhà máy sản  xuất chế biến theo quy mô hiện đại như: Nhà máy cơ khí chế tạo, nhà máy  cơ khí sửa chữa ô tô, xưởng bảo dưỡng sửa chữa chung cho các nhà máy quy  mô lớn, nhà máy cơ khí chế tạo kết cấu…&#160;</span></small></span></span></div>\n</span></div>\n<div style="text-align: justify; margin: 0cm 0cm 10pt">\n<div style="text-align: justify; margin: 0cm 0cm 10pt">&#160;</div>\n<span style="color: rgb(0, 0, 0);">\n<div style="text-align: justify; margin: 0cm 0cm 10pt"><span style="font-size: medium;"><span style="font-family: Arial;"><small><b><span style="line-height: 115%;">Thiết bị nhiệt&#160;</span></b></small></span></span></div>\n</span></div>\n<div style="text-align: justify; margin: 0cm 0cm 10pt">\n<div style="text-align: justify; margin: 0cm 0cm 10pt">&#160;</div>\n<span style="color: rgb(0, 0, 0);">\n<div style="text-align: justify; margin: 0cm 0cm 10pt"><span style="font-size: medium;"><span style="font-family: Arial;"><small><span style="line-height: 115%;">Tư  vấn giải pháp kỹ thuật, giải pháp tự động hóa nhà máy và cung cấp thiết  bị nhiệt (như nồi hơi, lò khí hóa than… ) cho lĩnh vực như: Nhà máy  nhiệt điện, nhà máy giấy, nhà máy cán thép, nhà máy bia, nhà máy chế  biến thức ăn chăn nuôi, nhà máy xử lý rác thải…&#160;</span></small></span></span></div>\n</span></div>\n<div style="text-align: justify; margin: 0cm 0cm 10pt">\n<div style="text-align: justify; margin: 0cm 0cm 10pt">&#160;</div>\n<span style="color: rgb(0, 0, 0);">\n<div style="text-align: justify; margin: 0cm 0cm 10pt"><span style="font-size: medium;"><span style="font-family: Arial;"><small><b><span style="line-height: 115%;">Thiết bị và công nghệ xử lý môi trường&#160;&#160; </span></b></small></span></span></div>\n</span></div>\n<div style="text-align: justify; margin: 0cm 0cm 10pt">\n<div style="text-align: justify; margin: 0cm 0cm 10pt">&#160;</div>\n<span style="color: rgb(0, 0, 0);">\n<div style="text-align: justify; margin: 0cm 0cm 10pt"><span style="font-size: medium;"><span style="font-family: Arial;"><small><span style="line-height: 115%;">Công  ty Tân Phát luôn đi đầu trong công nghệ, đặc biệt trong công nghệ xử lý  rác thải. Đã từ lâu công ty đã đầu tư nghiên cứu, tìm hiểu các công  nghệ xử lý rác thải rắn, nước thải sinh hoạt và nước thải công nghiệp từ  các nước phát triển trên thế giới, để lựa chọn ra công nghệ mới nhất,  phù hợp với điều kiện Việt Nam.&#160;&#160;&#160;</span></small></span></span></div>\n</span></div>\n<div style="text-align: justify; margin: 0cm 0cm 10pt">\n<div style="text-align: justify; margin: 0cm 0cm 10pt">&#160;</div>\n<span style="color: rgb(0, 0, 0);">\n<div style="text-align: justify; margin: 0cm 0cm 10pt"><span style="font-size: medium;"><span style="font-family: Arial;"><small><span style="line-height: 115%;">Hiện  nay công ty đã thu thập được nhiều kiến thức, kinh nghiệm, tổ chức  nhiều hội thảo giới thiệu công nghệ đốt rác phát điện (dùng nhiệt do quá  trình đốt rác sinh ra để phát điện và hòa vào mạng lưới điện Quốc gia)  cho các thành phố lớn với công suất từ 300 tấn đến 5000 tấn/ ngày.&#160;</span></small></span></span></div>\n</span></div>\n<div style="text-align: justify; margin: 0cm 0cm 10pt">\n<div style="text-align: justify; margin: 0cm 0cm 10pt">&#160;</div>\n<span style="color: rgb(0, 0, 0);">\n<div style="text-align: justify; margin: 0cm 0cm 10pt"><span style="font-size: medium;"><span style="font-family: Arial;"><small><b><span style="line-height: 115%;">Thiết bị viễn thông&#160;</span></b></small></span></span></div>\n</span></div>\n<div style="text-align: justify; margin: 0cm 0cm 10pt">\n<div style="text-align: justify; margin: 0cm 0cm 10pt">&#160;</div>\n<span style="color: rgb(0, 0, 0);">\n<div style="text-align: justify; margin: 0cm 0cm 10pt"><span style="font-size: medium;"><span style="font-family: Arial;"><small><span style="line-height: 115%;">Công  ty Tân Phát là một trong những đơn vị đi đầu trong dịch vụ xây dựng,  cho thuê hạ tầng trạm thu phát sóng thông tin di động BTS. Hiện nay công  ty Tân Phát đã và đang cung cấp hàng trăm trạm BTS cho Mobiphone,  Vinaphone… </span></small></span></span></div>\n</span></div>\n<div style="text-align: justify; margin: 0cm 0cm 10pt">\n<div style="text-align: justify; margin: 0cm 0cm 10pt">&#160;</div>\n<span style="color: rgb(0, 0, 0);">\n<div style="text-align: justify; margin: 0cm 0cm 10pt"><span style="font-size: medium;"><span style="font-family: Arial;"><small><span style="line-height: 115%;">Mặt khác công ty Tân Phát là nhà cung cấp quen thuộc thiết bị trạm nguồn, ổn áp đạt tiêu chuẩn quốc tế viễn thông và dân dụng.&#160;</span></small></span></span></div>\n</span></div>\n<div style="text-align: justify; margin: 0cm 0cm 10pt">\n<div style="text-align: justify; margin: 0cm 0cm 10pt">&#160;</div>\n<span style="color: rgb(0, 0, 0);">\n<div style="text-align: justify; margin: 0cm 0cm 10pt"><span style="font-size: medium;"><span style="font-family: Arial;"><small><b><span style="line-height: 115%;">Xưởng sản xuất thiết bị dạy nghề và thiết bị điện&#160;</span></b></small></span></span></div>\n</span></div>\n<div style="text-align: justify; margin: 0cm 0cm 10pt"><span style="color: rgb(0, 0, 0);"><span style="font-size: medium;"><span style="font-family: Arial;"><small><span style="line-height: 115%;">Sản  xuất các thiết bị điện từ dân dụng, đến các thiết bị điện tự động hóa  phục vụ cho các dây chuyền nhà máy, khu công nghiệp, các thiết bị điện,  điện tử kỹ thuật cao trong ngành hàng tự động hóa.&#160;&#160; <br />\n</span></small></span></span><font style="text-align:justify; color:#A8A8A8;"> </font></span></div>\n</font><span style="color: rgb(0, 0, 0);"><font style="text-align:justify; color:#A8A8A8;"> </font></span>', 'gioi-thieu-chung', 1, 'INT', '1', 'Giới thiệu chungGiới thiệu chungGiới thiệu chungGiới thiệu chung', 'Giới thiệu chungGiới thiệu chungGiới thiệu chungGiới thiệu chung', '2016-01-20 02:26:13', 0, 153),
(66, 'Công ty trách nhiệm hữu hạn thiết bị an toàn Lửa Việt', '/uploads/posts/thumbs/5c3aad98804cb4e6b67f48da6fb2e22c.jpg', '', '<br />', 'cong-ty-trach-nhiem-huu-han-thiet-bi-an-toan-lua-viet', 0, 'CUS', '1', 'cong-ty-trach-nhiem-huu-han-thiet-bi-an-toan-lua-viet', 'cong-ty-trach-nhiem-huu-han-thiet-bi-an-toan-lua-viet', '2016-01-18 09:44:41', 153, 153);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_articles`
--

CREATE TABLE `tbl_articles` (
  `article_id` int(10) UNSIGNED NOT NULL,
  `article_title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `article_title_rewrite` varchar(200) CHARACTER SET utf8 NOT NULL,
  `article_info` text CHARACTER SET utf8 NOT NULL,
  `article_full` longtext CHARACTER SET utf8 NOT NULL,
  `article_image` varchar(200) CHARACTER SET utf8 NOT NULL,
  `article_order` int(10) NOT NULL,
  `article_date` varchar(100) CHARACTER SET utf8 NOT NULL,
  `article_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categorie`
--

CREATE TABLE `tbl_categorie` (
  `cago_id` int(10) UNSIGNED NOT NULL,
  `cago_name` varchar(100) NOT NULL,
  `cago_rewrite` varchar(255) NOT NULL,
  `cago_info` text NOT NULL,
  `cago_full` longtext NOT NULL,
  `cago_author` varchar(200) NOT NULL,
  `cago_date` varchar(200) NOT NULL,
  `cago_key` text NOT NULL,
  `cago_des` text NOT NULL,
  `cago_order` int(10) NOT NULL,
  `cago_status` char(1) NOT NULL DEFAULT '1',
  `cago_lang` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_categorie`
--

INSERT INTO `tbl_categorie` (`cago_id`, `cago_name`, `cago_rewrite`, `cago_info`, `cago_full`, `cago_author`, `cago_date`, `cago_key`, `cago_des`, `cago_order`, `cago_status`, `cago_lang`) VALUES
(230, 'Tin công ty', 'tin-cong-ty', '', '&#160;', '', '', '', '', 0, '1', 1),
(231, 'Tin bóng đá', 'tin-bong-da', '', '&#160;', '', '', '', '', 0, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cate_id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(100) NOT NULL,
  `cate_rewrite` varchar(200) NOT NULL,
  `cate_images` text NOT NULL,
  `cate_info` text NOT NULL,
  `cate_full` longtext NOT NULL,
  `cate_date` varchar(200) NOT NULL,
  `cate_key` text NOT NULL,
  `cate_des` text NOT NULL,
  `cate_order` int(10) NOT NULL DEFAULT '0',
  `cate_status` int(1) NOT NULL DEFAULT '1',
  `cate_view` int(10) NOT NULL,
  `cate_parent` varchar(100) NOT NULL,
  `cate_lang` tinyint(1) NOT NULL DEFAULT '1',
  `is_home` tinyint(1) NOT NULL DEFAULT '1',
  `cate_id_parent` int(10) NOT NULL,
  `cate_display` varchar(200) NOT NULL,
  `user_created` int(11) DEFAULT '0',
  `user_updated` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cate_id`, `cate_name`, `cate_rewrite`, `cate_images`, `cate_info`, `cate_full`, `cate_date`, `cate_key`, `cate_des`, `cate_order`, `cate_status`, `cate_view`, `cate_parent`, `cate_lang`, `is_home`, `cate_id_parent`, `cate_display`, `user_created`, `user_updated`) VALUES
(626, 'Thiết bị điện dân dụng', 'thiet-bi-dien-dan-dung', '1451492644594.jpg', 'Thiết bị điện dân dụng', '&#160;', '', 'Thiết bị điện dân dụng Meta Keyword', 'Thiết bị điện dân dụng Meta Description', 991, 1, 0, '', 1, 0, 0, '0', 153, 153),
(627, 'Dây chuyền sản xuất công nghiệp', 'day-chuyen-san-xuat-cong-nghiep', '1451492681143.jpg', 'Dây chuyền sản xuất công nghiệp', '&#160;', '', 'Dây chuyền sản xuất công nghiệp', 'Dây chuyền sản xuất công nghiệp', 990, 1, 0, '', 1, 1, 0, '0', 153, 0),
(618, 'Máy rửa xe', 'may-rua-xe', '14514922345.jpg', '', '&#160;', '', 'Máy rửa xe, May rua xe, Máy rửa xe nước nóng, máy rửa xe áp lực cao', 'Công ty cổ phần thiết bị Tân Phát chuyên phân phối dòng sản phẩm Máy rửa xe, máy rửa xe áp lực cao, giá thành tốt', 999, 1, 0, '', 1, 1, 0, '0', 153, 153),
(619, 'Thiết bị ô tô - xe máy', 'thiet-bi-oto-xe-may', '1451492287904.jpg', 'Công ty cổ phần thiết bị Tân Phát - Thiết bị ô tô - xe máy', '&#160;', '', 'Thiết bị ô tô - xe máy, cầu nâng, phòng sơn, máy đọc lỗi hộp đen, tử đồ nghề, máy nén khí', 'Công ty CP thiết bị Tân Phát cung cấp thiết bị sửa chữa ô tô, Thiết bị kiểm định ô tô, thiết bị thủy lực, thiết bị bơm dầu mỡ, thiết bị đọc lỗi G-Scan', 998, 1, 0, '', 1, 1, 0, '0', 153, 158),
(620, 'Thiết Bị Thí Nghiệm KISTLER', 'thiet-bi-thi-nghiem-kistler', '1451492341437.jpg', 'Thiết Bị Thí Nghiệm KISTLER', '&#160;', '', 'Thiết Bị Thí Nghiệm KISTLER', 'Thiết Bị Thí Nghiệm KISTLER', 997, 1, 0, '', 1, 1, 0, '0', 153, 0),
(621, 'Thiết bị chăm sóc xe', 'thiet-bi-cham-soc-xe', '1452672014954.png', 'Thiết bị chăm sóc xe', '&#160;', '', 'Thiết bị chăm sóc xe, máy hút bụi giặt thảm, dầu nhờn eneos, cầu nâng 1 trụ rửa xe, máy rửa xe, máy nén khí, dầu nhờn eneos', 'Công ty CP thiết bị Tân Phát chuyên Thiết bị chăm sóc xe, máy rửa xe, máy nén khí, Dầu nhờn eneos, Máy hút bụi- giặt thảm hàng đầu Việt Nam', 996, 1, 0, '', 1, 1, 0, '0', 153, 158),
(622, 'Thiết bị làm sạch công nghiệp', 'thiet-bi-lam-sach-cong-nghiep', '1451492499319.jpg', 'Thiết bị làm sạch công nghiệp', '&#160;', '', 'Thiết bị làm sạch công nghiệp', 'Thiết bị làm sạch công nghiệp', 995, 1, 0, '', 1, 1, 0, '0', 153, 0),
(623, 'Thiết bị dạy nghề', 'thiet-bi-day-nghe', '1451492537644.jpg', 'Thiết bị dạy nghề', '&#160;', '', 'Thiết bị dạy nghề', 'Thiết bị dạy nghề', 994, 1, 0, '', 1, 1, 0, '0', 153, 0),
(624, 'Thiết bị cơ khí', 'thiet-bi-co-khi', '1451492567474.JPG', 'Thiết bị cơ khí', '&#160;', '', 'Thiết bị cơ khí', 'Thiết bị cơ khí', 993, 1, 0, '', 1, 1, 0, '0', 153, 0),
(625, 'Nhiệt công nghiệp', 'nhiet-cong-nghiep', '1451492611627.jpg', 'Nhiệt công nghiệp', '&#160;', '', 'Nhiệt công nghiệp', 'Nhiệt công nghiệp', 992, 1, 0, '', 1, 1, 0, '0', 153, 0),
(628, 'Dụng cụ chuyên dùng sửa chữa động cơ', 'dung-cu-chuyen-dung-sua-chua-dong-co', '', 'Dụng cụ chuyên dùng sửa chữa động cơ', '&#160;', '', 'Dụng cụ chuyên dùng sửa chữa động cơ', 'Dụng cụ chuyên dùng sửa chữa động cơ', 989, 1, 0, '', 1, 1, 619, '0', 153, 0),
(629, 'Dụng cụ chuyên dùng sửa chữa hệ thống gầm, lái, treo', 'dung-cu-chuyen-dung-sua-chua-he-thong-gam--lai--treo', '', 'Dụng cụ chuyên dùng sửa chữa hệ thống gầm, lái, treo', '&#160;', '', 'Dụng cụ chuyên dùng sửa chữa hệ thống gầm, lái, treo', 'Dụng cụ chuyên dùng sửa chữa hệ thống gầm, lái, treo', 988, 1, 0, '', 1, 1, 619, '0', 153, 0),
(630, 'Tủ đồ nghề và dụng cụ cầm tay', 'tu-do-nghe-va-dung-cu-cam-tay', '', 'Tủ đồ nghề và dụng cụ cầm tay', '&#160;', '', 'Tủ đồ nghề và dụng cụ cầm tay', 'Tủ đồ nghề và dụng cụ cầm tay', 987, 1, 0, '', 1, 1, 619, '0', 153, 0),
(636, 'ODBII scanner', 'odbii-scanner', '', 'ODBII scanner', '<br />', '', 'ODBII scanner', 'ODBII scanner', 0, 1, 0, '', 2, 0, 0, '0', 153, 153),
(637, 'Dầu ô tô', 'dau-o-to', '1453534644593.jpg', 'Dầu ô tô', '&#160;', '', 'Dầu ô tô', 'Dầu ô tô', 0, 1, 0, '', 1, 0, 0, '0', 160, 160),
(638, 'Tủ đồ cầm tay', 'tu-do-cam-tay', '1453535497389.jpg', 'Tủ đồ cầm tay', '&#160;', '', 'Tủ đồ cầm tay', 'Tủ đồ cầm tay', 0, 1, 0, '', 1, 0, 630, '0', 160, 160);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cloud`
--

CREATE TABLE `tbl_cloud` (
  `id` int(10) UNSIGNED NOT NULL,
  `label1` text NOT NULL,
  `label2` text NOT NULL,
  `label3` text NOT NULL,
  `label4` text NOT NULL,
  `label5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cloud`
--

INSERT INTO `tbl_cloud` (`id`, `label1`, `label2`, `label3`, `label4`, `label5`) VALUES
(1, 'thiet bi day nghe', 'http://youtube.com', 'cntt.tanphat@gmail.com', '123456@', 'frame=315, width=500');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_config`
--

CREATE TABLE `tbl_config` (
  `config_id` int(10) UNSIGNED NOT NULL,
  `marquee` text NOT NULL,
  `hotline` text NOT NULL,
  `facebook` text NOT NULL,
  `youtube` text NOT NULL,
  `config_title` text NOT NULL,
  `config_key` text NOT NULL,
  `config_des` text NOT NULL,
  `config_logo` text NOT NULL,
  `config_footer` text NOT NULL,
  `config_email` text NOT NULL,
  `config_intro` longtext NOT NULL,
  `config_contact` longtext NOT NULL,
  `language` int(11) NOT NULL DEFAULT '1',
  `logo` text NOT NULL,
  `mienbac` text NOT NULL,
  `miennam` text NOT NULL,
  `danang` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_config`
--

INSERT INTO `tbl_config` (`config_id`, `marquee`, `hotline`, `facebook`, `youtube`, `config_title`, `config_key`, `config_des`, `config_logo`, `config_footer`, `config_email`, `config_intro`, `config_contact`, `language`, `logo`, `mienbac`, `miennam`, `danang`) VALUES
(1, 'Công ty cổ phần thiết bị Tân Phát - 168 Phan Trọng Tuệ - Thanh Trì - Hà Nội - Hotline: 0983 330 658 - Tel: 043. 6812043 - Fax: 043. 6812042 - Email: tanphat@tanphat.com', 'Miền bắc: 0983.330.658 - Miền Nam: 0902 14 0089', 'Link fanpage facebook', '<iframe width="560" height="315" frameborder="0" src="http://www.youtube.com/embed/0PbvSq5GJ8E?rel=0&amp;start=5&amp;autoplay=1&amp;loop=1" allowfullscreen=""></iframe>', 'Công ty cổ phần thiết bị Tân Phát', 'Công ty cổ phần thiết bị Tân Phát. Chuyên cung cấp các loại thiết bị ôtô, thiết bị máy cơ khí ', 'Thiết bị ô tô, thiet bi o to, thiết bị kiểm định, cầu nâng, phòng sơn, thiết bị chăm sóc xe', '', '<p style="color:#368f1a; font-weight:bold; float:left;">\r\n	C&Ocirc;NG TY CỔ PHẦN CH&Egrave; T&Acirc;N CƯƠNG HO&Agrave;NG B&Igrave;NH</p>\r\n<p style="clear:left;">\r\n	Địa chỉ : X&atilde; Quyết Thắng - TP Th&aacute;i Nguy&ecirc;n - Tỉnh Th&aacute;i Nguy&ecirc;n</p>\r\n<p>\r\n	ĐT : 02803.746.433 - Fax : 02803.746.766.</p>\r\n', '', '0', '0', 1, '/uploaded/thumbs/394f20237f80745f5dc4d6dad8796828.png', 'Email:&#160;&#160;&#160; Tanphat@tanphat.com<br />\r\nKỹ thuật: <span class="skype_c2c_print_container notranslate">098 202 0303&#160;</span><span data-ismobile="false" data-isrtl="false" data-isfreecall="false" data-numbertype="paid" data-numbertocall="+44982020303" onclick="SkypeClick2Call.MenuInjectionHandler.makeCall(this, event)" onmouseout="SkypeClick2Call.MenuInjectionHandler.hideMenu(this, event)" onmouseover="SkypeClick2Call.MenuInjectionHandler.showMenu(this, event)" tabindex="-1" dir="ltr" class="skype_c2c_container notranslate" id="skype_c2c_container"><span skypeaction="skype_dropdown" dir="ltr" class="skype_c2c_highlighting_inactive_common"><span id="non_free_num_ui" class="skype_c2c_textarea_span"><img width="0" height="0" src="resource://skype_ff_extension-at-jetpack/skype_ff_extension/data/call_skype_logo.png" class="skype_c2c_logo_img" alt="" />089</span></span></span><br />\r\nCSKH:&#160; &#160;&#160; <span class="skype_c2c_print_container notranslate">098 202 0707</span><br />\r\n<div class="skype_c2c_menu_container notranslate" id="skype_c2c_menu_container" style="display: none;" onmouseover="SkypeClick2Call.MenuInjectionHandler.showMenu(this, event)" onmouseout="SkypeClick2Call.MenuInjectionHandler.hideMenu(this, event)" data-fp="{A4367926-97FD-49EC-B938-95CE5FB3C389}" data-murl="https://pipe.skype.com/Client/2.0/" data-p2murl="https://c2c-p2m-secure.skype.com/p2m/v1/push" data-uiid="1" data-uilang="en">\r\n<div class="skype_c2c_menu_click2call"><a class="skype_c2c_menu_click2call_action" id="skype_c2c_menu_click2call_action" target="_self">Call</a></div>\r\n<div class="skype_c2c_menu_click2sms"><a class="skype_c2c_menu_click2sms_action" id="skype_c2c_menu_click2sms_action" target="_self">Send SMS</a></div>\r\n<div class="skype_c2c_menu_push_to_mobile"><a class="skype_c2c_menu_push_to_mobile_action" id="skype_c2c_menu_push_to_mobile_action" target="_blank">Call from mobile</a></div>\r\n<div class="skype_c2c_menu_add2skype"><a class="skype_c2c_menu_add2skype_text" id="skype_c2c_menu_add2skype_text" target="_self">Add to Skype</a></div>\r\n<div class="skype_c2c_menu_toll_info"><span class="skype_c2c_menu_toll_callcredit">You''ll need Skype Credit</span><span class="skype_c2c_menu_toll_free">Free via Skype</span></div>\r\n</div>', ' 0983 330 658', '0902 140 089'),
(2, 'Dòng chữ chạy bằng tiếng anh', 'Hotline', 'https://www.facebook.com/ThietBiOToTanPhat/?fref=ts', '<iframe width="560" height="315" src="https://www.youtube.com/embed/0PbvSq5GJ8E" frameborder="0" allowfullscreen></iframe>', 'Tiêu đề website bằng tiếng anh', 'Meta description', 'Meta keyword test test', '', '', '', '', '', 2, '/uploaded/thumbs/bf41f4d2b30c0ac3123f9edb82880ddc.png', '<br />', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `con_id` int(10) UNSIGNED NOT NULL,
  `con_name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `con_email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `con_phone` varchar(50) CHARACTER SET utf8 NOT NULL,
  `con_full` text CHARACTER SET utf8,
  `office_id` int(11) NOT NULL,
  `con_date` varchar(255) NOT NULL,
  `con_status` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`con_id`, `con_name`, `con_email`, `con_phone`, `con_full`, `office_id`, `con_date`, `con_status`) VALUES
(217, 'nguyễn xuân hòa', 'hoa@hoa.com', '332', 'ddssd', 3, '11:39:51 - 19/01/2016', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_info`
--

CREATE TABLE `tbl_contact_info` (
  `contact_id` int(10) UNSIGNED NOT NULL,
  `contact_value` text CHARACTER SET utf8 NOT NULL,
  `contact_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact_info`
--

INSERT INTO `tbl_contact_info` (`contact_id`, `contact_value`, `contact_status`) VALUES
(1, '<h4>\n	<strong>C&ocirc;ng ty TNHH Giải ph&aacute;p Trực Tuyến North Star</strong></h4>\n<h4 style="color: rgb(0, 0, 0);">\n	Địa chỉ : Số 100 - Kiều Mai - Ph&uacute; Diễn - H&agrave; Nội</h4>\n<p>\n	<span style="color: rgb(0, 0, 0);">Hotline : 0976.256.106<br />\n	Website : &nbsp;<a title="cong ty thiet ke website NorthStar" _fcksavedurl="http://NorthStar.Vn" href="http://northstar.vn/">NorthStar.Vn</a></span></p>\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

CREATE TABLE `tbl_content` (
  `con_id` int(10) UNSIGNED NOT NULL,
  `con_title` varchar(255) NOT NULL,
  `con_position` varchar(200) NOT NULL,
  `con_number` int(50) NOT NULL,
  `con_location` varchar(200) NOT NULL,
  `con_price` varchar(100) NOT NULL,
  `con_full` longtext NOT NULL,
  `con_images` varchar(200) NOT NULL,
  `con_date` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`con_id`, `con_title`, `con_position`, `con_number`, `con_location`, `con_price`, `con_full`, `con_images`, `con_date`) VALUES
(18, 'Kỹ sư hệ thống điện/điện tự động', 'Kỹ sư hệ thống điện/điện tự động', 3, 'Hà Nội', '7000.000 VND', '<p> <span><strong><u>Yêu cầu:</u></strong></span></p>\r\n<p> <span>- Trình độ: Đại học</span></p>\r\n<p> <span>- Số năm kinh nghiệm: 2 năm</span></p>\r\n<p> <span>- Ưu tiên ứng viên có kinh nghiệm bóc thầu hoặc đã thi công trên công trường</span></p>\r\n<p> <span><strong><u>Kỹ năng:</u></strong></span></p>\r\n<p> <span>- Sử dụng tiếng Anh thành thạo;</span></p>\r\n<p> <span>- Có khả năng làm việc độc lập cũng như theo nhóm;</span></p>\r\n<p> <span><strong><u>Mô tả công việc:</u></strong></span></p>\r\n<p> <span>- Bóc tách khối lượng, triển khai bản vẽ thi công, làm hồ sơ thầu.</span></p>\r\n<p> <span>- Giám sát, triển khai thi công.</span></p>\r\n<p> <span>- Bố trí, sắp xếp công việc trên công trường.</span></p>\r\n<p> <span>- Làm việc với nhà thầu trên công trường (có sử dụng tiếng Anh)</span></p>\r\n<p> <span><strong><u>Quyền lợi được hưởng:</u></strong></span></p>\r\n<p> <span>- Làm việc trong môi trường năng động, mức lương cạnh tranh.<br />\r\n - Các chế độ bảo hiểm y tế, bảo hiểm xã hội theo quy định của pháp luật.<br />\r\n - Ngoài Lương, hưởng các chế độ khác theo năng lực.</span></p>\r\n<p> <span><strong><u>Hồ sơ bao gồm:</u></strong>(bản photo)</span></p>\r\n<p> <span>- Đơn xin việc kèm theo hình ảnh;</span></p>\r\n<p> <span>- Sơ yếu lý lịch;<br />\r\n - Các văn bằng chứng chỉ có liên quan;<br />\r\n - Bản mô tả chi tiết quá trình công tác đến thời điểm hiện tại.</span></p>\r\n', 'engineer.jpg', '03/01/2013'),
(20, 'Công nhân Điện, Cơ khí, Hàn', 'Nhân viên', 10, 'Hà Nội', '7.000.000 VND', '<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""><p><strong><u>Yêu cầu:</u></strong></p>\r\n<p>- Trình độ: Đại học</p>\r\n<p>- Số năm kinh nghiệm: 2 năm</p>\r\n<p>- Ưu tiên ứng viên có kinh nghiệm bóc thầu hoặc đã thi công trên công trường</p>\r\n<p><strong><u>Kỹ năng:</u></strong></p>\r\n<p>- Sử dụng tiếng Anh thành thạo;</p>\r\n<p>- Có khả năng làm việc độc lập cũng như theo nhóm;</p>\r\n<p><strong><u>Mô tả công việc:</u></strong></p>\r\n<p>- Bóc tách khối lượng, triển khai bản vẽ thi công, làm hồ sơ thầu.</p>\r\n<p>- Giám sát, triển khai thi công.</p>\r\n<p>- Bố trí, sắp xếp công việc trên công trường.</p>\r\n<p>- Làm việc với nhà thầu trên công trường (có sử dụng tiếng Anh)</p>\r\n<p><strong><u>Quyền lợi được hưởng:</u></strong></p>\r\n<p>- Làm việc trong môi trường năng động, mức lương cạnh tranh.<br />\r\n- Các chế độ bảo hiểm y tế, bảo hiểm xã hội theo quy định của pháp luật.<br />\r\n- Ngoài Lương, hưởng các chế độ khác theo năng lực.</p>\r\n<p><strong><u>Hồ sơ bao gồm:</u></strong>(bản photo)</p>\r\n<p>- Đơn xin việc kèm theo hình ảnh;</p>\r\n<p>- Sơ yếu lý lịch;<br />\r\n- Các văn bằng chứng chỉ có liên quan;<br />\r\n- Bản mô tả chi tiết quá trình công tác đến thời điểm hiện tại.</p>\r\n</p>\r\n', 'thumb.gif', '05/01/2013'),
(21, 'Kỹ sư Cấp thoát nước', 'Nhân viên', 5, 'Hà Nội', '7.000.000 VND', '<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""></p>\r\n<p rgb(51,="" 51,="" 51);="" font-family:="" arial;="" line-height:="" 16px;="" text-align:="" justify;="" background-color:="" rgb(236,="" 248,="" 255);="" "="" geneva,="" sans-serif;line-height:20px;"=""><p><strong><u>Yêu cầu:</u></strong></p>\r\n<p>- Trình độ: Đại học</p>\r\n<p>- Số năm kinh nghiệm: 2 năm</p>\r\n<p>- Ưu tiên ứng viên có kinh nghiệm bóc thầu hoặc đã thi công trên công trường</p>\r\n<p><strong><u>Kỹ năng:</u></strong></p>\r\n<p>- Sử dụng tiếng Anh thành thạo;</p>\r\n<p>- Có khả năng làm việc độc lập cũng như theo nhóm;</p>\r\n<p><strong><u>Mô tả công việc:</u></strong></p>\r\n<p>- Bóc tách khối lượng, triển khai bản vẽ thi công, làm hồ sơ thầu.</p>\r\n<p>- Giám sát, triển khai thi công.</p>\r\n<p>- Bố trí, sắp xếp công việc trên công trường.</p>\r\n<p>- Làm việc với nhà thầu trên công trường (có sử dụng tiếng Anh)</p>\r\n<p><strong><u>Quyền lợi được hưởng:</u></strong></p>\r\n<p>- Làm việc trong môi trường năng động, mức lương cạnh tranh.<br />\r\n- Các chế độ bảo hiểm y tế, bảo hiểm xã hội theo quy định của pháp luật.<br />\r\n- Ngoài Lương, hưởng các chế độ khác theo năng lực.</p>\r\n<p><strong><u>Hồ sơ bao gồm:</u></strong>(bản photo)</p>\r\n<p>- Đơn xin việc kèm theo hình ảnh;</p>\r\n<p>- Sơ yếu lý lịch;<br />\r\n- Các văn bằng chứng chỉ có liên quan;<br />\r\n- Bản mô tả chi tiết quá trình công tác đến thời điểm hiện tại.</p>\r\n</p>\r\n', 'thumb.jpg', '05/01/2013');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_count_search`
--

CREATE TABLE `tbl_count_search` (
  `count_id` int(10) UNSIGNED NOT NULL,
  `count_name` varchar(255) NOT NULL,
  `count_total` int(10) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cus_id` int(10) UNSIGNED NOT NULL,
  `cus_name` varchar(50) NOT NULL,
  `cus_password` char(50) NOT NULL,
  `cus_fullname` varchar(50) NOT NULL,
  `cus_gender` char(1) NOT NULL DEFAULT '2',
  `cus_phone` varchar(100) DEFAULT NULL,
  `cus_address` varchar(200) NOT NULL,
  `cus_email` varchar(50) NOT NULL,
  `cus_ip` varchar(100) NOT NULL DEFAULT '0',
  `cus_date` varchar(100) NOT NULL,
  `cus_day` varchar(100) NOT NULL,
  `cus_lastlogin` varchar(100) NOT NULL,
  `cus_level` int(10) UNSIGNED NOT NULL DEFAULT '2',
  `cus_mod` int(10) NOT NULL DEFAULT '0',
  `cus_status` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cus_id`, `cus_name`, `cus_password`, `cus_fullname`, `cus_gender`, `cus_phone`, `cus_address`, `cus_email`, `cus_ip`, `cus_date`, `cus_day`, `cus_lastlogin`, `cus_level`, `cus_mod`, `cus_status`) VALUES
(151, 'raovatlang', 'e10adc3949ba59abbe56e057f20f883e', 'tuanuyen', '1', '1234567890', '', 'ttttt@gmail.com', '210.245.94.131', '23:51:24 - 10/06/2015', '10-06-2015', '23:52:26 - 10/06/2015', 2, 0, 1),
(150, 'bachnx', '726f56c54291dd7ce74be36e91256536', 'Nguyễn Xuân Bách', '1', '0976256106', 'ha noi', 'bachnx92@gmail.com', '210.245.94.131', '23:48:06 - 10/06/2015', '', '23:50:13 - 10/06/2015', 2, 0, 1),
(152, 'hoanx', 'e10adc3949ba59abbe56e057f20f883e', 'nguyen xuan hoa', '1', '0983330658', '', 'hoanx@tanphat.com', '0', '14:11:51 - 04/09/2015', '04-09-2015', '', 2, 0, 1),
(153, 'test', 'e10adc3949ba59abbe56e057f20f883e', 'test', '1', '0983333333', '', 'hoa.vietnamnet@gmail.com', '0', '00:49:15 - 05/09/2015', '05-09-2015', '', 2, 0, 1),
(154, 'Nguyễn Huấn', 'f21362a738ace7dd8f4245bffd9636d2', 'nguyễn huấn', '1', '0902173039', '', 'huannv@tanphat.com', '0', '16:58:22 - 14/09/2015', '14-09-2015', '', 2, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doitac`
--

CREATE TABLE `tbl_doitac` (
  `doitac_id` int(11) NOT NULL,
  `doitac_name` varchar(100) NOT NULL,
  `doitac_rewrite` varchar(150) NOT NULL,
  `doitac_image` varchar(255) NOT NULL,
  `doitac_order` int(11) NOT NULL DEFAULT '0',
  `doitac_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_doitac`
--

INSERT INTO `tbl_doitac` (`doitac_id`, `doitac_name`, `doitac_rewrite`, `doitac_image`, `doitac_order`, `doitac_status`) VALUES
(9, 'Eneos Motor Oil', 'Eneos-Motor-Oil', '1450948820_9.png', 0, 1),
(10, 'G-Scan', 'G-Scan', '1450948839_10.jpg', 0, 1),
(11, 'Beta', 'Beta', '1450948849_1.png', 0, 1),
(12, 'Impact', 'Impact', '1450948863_2.jpg', 0, 1),
(13, 'Black Hawk', 'Black-Hawk', '1450948881_3.jpg', 0, 1),
(14, 'AHS', 'AHS', '1450948895_4.jpg', 0, 1),
(15, 'Lucas Nulle', 'Lucas-Nulle', '1450948931_5.jpg', 0, 1),
(16, 'Graco', 'Graco', '1450948941_6.jpg', 0, 1),
(17, 'Midtronics', 'Midtronics', '1450948966_7.jpg', 0, 1),
(18, 'Corghi', 'Corghi', '1450948989_8.png', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_education`
--

CREATE TABLE `tbl_education` (
  `edu_id` int(10) UNSIGNED NOT NULL,
  `edu_info` text CHARACTER SET utf8 NOT NULL,
  `edu_full` longtext CHARACTER SET utf8 NOT NULL,
  `edu_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_education`
--

INSERT INTO `tbl_education` (`edu_id`, `edu_info`, `edu_full`, `edu_status`) VALUES
(1, '<p>\r\n	<font color="#333333" face="Tahoma, Geneva, sans-serif" size="2">&lt;span 20px;&quot;=&quot;&quot;&gt;Nội dung đang cập nhật ...</font></p>\r\n', '\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_favorites`
--

CREATE TABLE `tbl_favorites` (
  `fa_id` int(10) NOT NULL,
  `fa_userid` int(10) NOT NULL,
  `pro_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_favorites`
--

INSERT INTO `tbl_favorites` (`fa_id`, `fa_userid`, `pro_id`) VALUES
(43, 142, 1515),
(40, 135, 1245);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guide`
--

CREATE TABLE `tbl_guide` (
  `guide_id` int(10) NOT NULL,
  `guide_full` longtext CHARACTER SET utf8 NOT NULL,
  `guide_status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guide`
--

INSERT INTO `tbl_guide` (`guide_id`, `guide_full`, `guide_status`) VALUES
(1, '<p>\r\n	Noi dung dang cap nhat...</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hangsanxuat`
--

CREATE TABLE `tbl_hangsanxuat` (
  `hangsanxuat_id` int(11) NOT NULL,
  `hangsanxuat_name` varchar(100) NOT NULL,
  `hangsanxuat_rewrite` varchar(100) NOT NULL,
  `hangsanxuat_image` varchar(255) NOT NULL,
  `hangsanxuat_order` int(11) NOT NULL DEFAULT '0',
  `hangsanxuat_status` tinyint(1) NOT NULL DEFAULT '1',
  `language` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_hangsanxuat`
--

INSERT INTO `tbl_hangsanxuat` (`hangsanxuat_id`, `hangsanxuat_name`, `hangsanxuat_rewrite`, `hangsanxuat_image`, `hangsanxuat_order`, `hangsanxuat_status`, `language`) VALUES
(8, 'IPC', 'IPC', '', 0, 1, 1),
(9, 'Fasa - Italy', 'Fasa---Italy', '', 0, 1, 1),
(10, 'Okatsune - Nhật Bản', 'Okatsune---Nhat-Ban', '', 0, 1, 1),
(11, 'Test Hãng Sản Xuất', 'Test-Hang-San-Xuat', '', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_intro`
--

CREATE TABLE `tbl_intro` (
  `in_id` int(10) UNSIGNED NOT NULL,
  `in_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `in_name_rewrite` varchar(200) CHARACTER SET utf8 NOT NULL,
  `in_value` longtext CHARACTER SET utf8 NOT NULL,
  `in_images` varchar(200) CHARACTER SET utf8 NOT NULL,
  `in_order` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_intro`
--

INSERT INTO `tbl_intro` (`in_id`, `in_name`, `in_name_rewrite`, `in_value`, `in_images`, `in_order`) VALUES
(10, 'Năng lực', 'nang-luc', 'Năng lực', '', 2),
(2, 'Giới thiệu chung', 'gioi-thieu-chung', '<h2 class="Lead"  0px; font-size: 14px; font-family: ''Times New Roman'', Times, serif; color: rgb(95, 95, 95); line-height: 18px; background-color: rgb(244, 245, 246);">Cuộc khủng hoảng con tin ở Algeria bắt đầu sáng 16/1 và đang tiếp diễn, gây chấn động thế giới. Sinh mạng của vài chục con tin nước ngoài chưa được làm rõ.<br />\n&gt;&#160;<a href="http://vnexpress.net/gl/the-gioi/2013/01/60-con-tin-nuoc-ngoai-bat-vo-am-tin-o-algeria/" class="Lead"  none; padding: 3px 0px 0px; font-size: 11px; line-height: normal; font-family: arial; color: rgb(102, 102, 102); text-decoration: initial;">60 con tin nước ngoài bặt vô âm tín ở Algeria</a>&#160;<br />\n&gt;&#160;<a href="http://vnexpress.net/gl/the-gioi/2013/01/phien-quan-algeria-bat-coc-41-con-tin-nuoc-ngoai/" class="Lead"  none; padding: 3px 0px 0px; font-size: 11px; line-height: normal; font-family: arial; color: rgb(102, 102, 102); text-decoration: initial;">Phiến quân Algeria bắt con tin nước ngoài</a></h2>\n<table cellspacing="0" cellpadding="3" width="1" align="center" border="0"  rgb(0, 0, 0); font-size: 16px; background-color: rgb(244, 245, 246);">\n    <tbody>\n        <tr>\n            <td  top;"><img src="http://vnexpress.net/Files/Subject/3b/be/0d/e7/hostages-crisis.jpg" width="480" height="389" border="1" alt="Ảnh: BBC" /></td>\n        </tr>\n        <tr>\n            <td class="Image"  arial; color: rgb(102, 102, 102); padding-top: 5px; padding-bottom: 5px; margin-top: 2px; margin-bottom: 2px; vertical-align: top;">Diễn biễn khủng hoảng con tin ở Algeria:&#160;<br />\n            1. Xe buýt chở nhân công Algeria và nước ngoài bị tấn công trên đường đi sân bay.<br />\n            2. Họ trở thành các con tin, bị giam giữ tại khu nhà ở và nhà máy.&#160;<br />\n            3,4,5. Quân đội Algeria bao vây và tấn công phiến quân tại nhà máy In Amenas, ở sa mạc Sahara, miền đông Algeria.&#160;<br />\n            Đồ họa: BBC</td>\n        </tr>\n    </tbody>\n</table>\n<p class="Normal"  16px; line-height: 20px; background-color: rgb(244, 245, 246);"><strong>Sáng sớm 16/1</strong>, một nhóm phiến quân Hồi giáo đã tấn công hai chiếc xe buýt chở nhân viên nhà máy khí đốt đang trên đường đi ra sân bay In Amenas. Chiếc xe cảnh sát hộ tống xe buýt chống trả. Một người Anh và một người Algeria chết ngay trong cuộc đụng độ. Những kẻ bắt cóc sau đó lái ít nhất ba xe tới Tigantourine, miền đông Algeria, đưa các công nhân bản địa cũng như ngoại quốc tới khu vực nhà ở và cơ sở chính của nhà máy khí đốt In Amenas.</p>\n<p class="Normal"  16px; line-height: 20px; background-color: rgb(244, 245, 246);">Những tên phiến quân này được trang bị súng phóng lựu đạn và nói với các con tin rằng chúng đã đặt mìn quanh nhà máy, theo lời một nhân chứng. Theo những thông tin ban đầu, động cơ của hành động bắt cóc con tin là nhằm buộc Pháp ngừng can thiệp quân sự tại nước láng giềng của Algeria, Mali.</p>\n<p class="Normal"  16px; line-height: 20px; background-color: rgb(244, 245, 246);">Trong ngày, lực lượng an ninh và quân đội Algeria được triển khai để bao vây những kẻ bắt cóc. Theo số liệu những tên phiến quân đưa ra, có khoảng 41 con tin nước ngoài đến từ ít nhất 10 quốc tịch khác nhau như Mỹ, Anh, Na Uy, Nhật Bản, Pháp, Philippines... Các lãnh đạo phương tây đã kêu gọi Algeria phải tham vấn với họ trước khi hành động và yêu cầu Algeria đặt sự an toàn của con tin lên hàng đầu.</p>', 'roga11.jpg', 1),
(11, 'Lĩnh vực hoạt động', 'linh-vuc-hoat-dong', 'Thông tin đang cập nhật', '', 3),
(12, 'Dự án nổi bạt', 'du-an-noi-bat', 'Dự án nổi bạt', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_intro_one`
--

CREATE TABLE `tbl_intro_one` (
  `intro_id` int(10) UNSIGNED NOT NULL,
  `intro_full` longtext CHARACTER SET utf8 NOT NULL,
  `intro_status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_intro_one`
--

INSERT INTO `tbl_intro_one` (`intro_id`, `intro_full`, `intro_status`) VALUES
(1, '<div class="sub_title" style="color: rgb(255, 0, 0); font-family: arial;">\r\n	<h1 style="font-size: 16px; text-transform: uppercase;">\r\n		C&Ocirc;NG TY THIẾT KẾ WEBSITE CHUY&Ecirc;N NGHIỆP</h1>\r\n</div>\r\n<div class="page_content" style="line-height: 22px; font-family: arial;">\r\n	<p>\r\n		<font color="#000000"><b>NorthStar</b></font><font color="#333333">&nbsp;- c&ocirc;ng ty thiết kế website TMĐT chuy&ecirc;n nghiệp được th&agrave;nh lập th&aacute;ng 6/2008 với mục ti&ecirc;u cung cấp phần mềm mang lại lợi &iacute;ch thiết thực cho kh&aacute;ch h&agrave;ng.</font></p>\r\n	<font color="#333333"><img alt="Thiết kế website" height="222" src="http://www.hurasoft.vn/includes/images/img12.png" style="border: 1px solid rgb(204, 204, 204); float: left; margin: 0px 15px 0px 0px; padding: 2px;" width="222" /></font>\r\n	<p style="color: rgb(51, 51, 51);">\r\n		Với khẩu hiệu &quot;<u>Make Software Useful</u>&quot; (l&agrave;m phần mềm hữu &iacute;ch), ch&uacute;ng t&ocirc;i tập trung khai th&aacute;c v&agrave; ph&aacute;t triển c&aacute;c ứng dụng phần mềm thực sự gi&uacute;p kh&aacute;ch h&agrave;ng giải quyết được những kh&oacute; khăn, th&aacute;ch thức trong qu&aacute; tr&igrave;nh quản l&yacute;, tiếp thị thương hiệu hoặc mua b&aacute;n sản phẩm. Hiện nay, thế mạnh của&nbsp;<font color="#000000"><b>NorthStar</b></font><font color="#333333">&nbsp;</font>l&agrave; cung cấp c&aacute;c giải ph&aacute;p kinh doanh thương mại điện tử tối ưu cho kh&aacute;ch h&agrave;ng bao gồm:&nbsp;<a href="#" style="text-decoration: none; color: rgb(0, 153, 0);">thiết kế website b&aacute;n h&agrave;ng</a>&nbsp;(TMĐT),&nbsp;<a href="#" style="text-decoration: none; color: rgb(0, 153, 0);">lưu trữ website</a>&nbsp;(web hosting), v&agrave;&nbsp;<a href="#" style="text-decoration: none; color: rgb(0, 153, 0);">quảng c&aacute;o website</a>.</p>\r\n	<p style="color: rgb(51, 51, 51);">\r\n		&nbsp;</p>\r\n	<p style="color: rgb(51, 51, 51);">\r\n		<font color="#000000"><b>NorthStar</b></font><font color="#333333">&nbsp;</font>c&oacute; đội ngũ nh&acirc;n vi&ecirc;n đầy năng lực, c&oacute; tr&aacute;ch nhiệm, th&acirc;n thiện với kh&aacute;ch h&agrave;ng v&agrave; nhiều kinh nghiệm trong việc triển khai thiết kế website. Một số kh&aacute;ch h&agrave;ng lớn của c&ocirc;ng ty l&agrave; : Pico Plaza, AHA.vn, Mediamart, Ph&uacute;c Anh Computer, GiaLong Computer, Hanoi Computer (vui l&ograve;ng xem&nbsp;<a href="#" style="text-decoration: none; color: rgb(0, 153, 0);">danh s&aacute;ch kh&aacute;ch h&agrave;ng</a>&nbsp;của ch&uacute;ng t&ocirc;i). Ch&uacute;ng t&ocirc;i tin tưởng sẽ mang lại cho kh&aacute;ch h&agrave;ng sự h&agrave;i l&ograve;ng cao nhất về dịch vụ bằng sự am hiểu kỹ thuật chuy&ecirc;n m&ocirc;n v&agrave; kinh nghiệm chăm s&oacute;c kh&aacute;ch h&agrave;ng.</p>\r\n	<p style="color: rgb(51, 51, 51);">\r\n		&nbsp;</p>\r\n	<div class="clear" style="color: rgb(51, 51, 51); clear: both;">\r\n		&nbsp;</div>\r\n	<p style="color: rgb(255, 0, 0); font-weight: bold;">\r\n		Th&ocirc;ng tin li&ecirc;n hệ</p>\r\n	<p>\r\n		<span style="color: rgb(51, 51, 51);">Địa chỉ : Số 15 - Dương Quảng H&agrave;m - Cầu Giấy - H&agrave; Nội<br />\r\n		Điện thoại:&nbsp;<strong>0976.256.106</strong>&nbsp;| Hotline: </span><font color="#ff0000">0974.136.509</font><br />\r\n		<font color="#333333"> Email:&nbsp;bachnx92@gmail.com</font></p>\r\n</div>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_link`
--

CREATE TABLE `tbl_link` (
  `link_id` int(11) NOT NULL,
  `link_url` varchar(255) NOT NULL,
  `link_order` int(11) NOT NULL DEFAULT '0',
  `link_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_link`
--

INSERT INTO `tbl_link` (`link_id`, `link_url`, `link_order`, `link_status`) VALUES
(1, 'http://thietbigara.com.vn', 10, 1),
(2, 'http://tanphat.com', 0, 1),
(3, 'http://kouritsu.vn', 1, 1),
(4, 'http://garahanoi.com', 0, 1),
(5, 'http://noihoitanphat.com', 0, 1),
(6, 'http://thietbigaraoto.vn', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menu_id` int(10) UNSIGNED NOT NULL,
  `menu_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `menu_rewrite` varchar(200) CHARACTER SET utf8 NOT NULL,
  `menu_order` int(1) NOT NULL,
  `menu_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `menu_name`, `menu_rewrite`, `menu_order`, `menu_status`) VALUES
(1, 'Giới thiệu', 'gioi-thieu', 1, 1),
(2, 'Thế mạnh', 'the-manh', 2, 1),
(3, 'Kiến thức', 'kien-thuc', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(10) UNSIGNED NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_rewrite` varchar(200) NOT NULL,
  `news_author` varchar(100) NOT NULL,
  `news_info` text NOT NULL,
  `news_full` longtext NOT NULL,
  `news_tags` varchar(255) NOT NULL,
  `news_tags_rewrite` varchar(255) NOT NULL,
  `news_images` varchar(255) NOT NULL,
  `news_date` varchar(100) NOT NULL,
  `news_key` text NOT NULL,
  `news_des` text NOT NULL,
  `news_external` varchar(255) NOT NULL,
  `news_view` varchar(255) NOT NULL DEFAULT '0',
  `news_hot` int(1) NOT NULL DEFAULT '1',
  `news_status` int(1) NOT NULL DEFAULT '1',
  `news_lang` tinyint(1) NOT NULL DEFAULT '1',
  `cago_id` int(10) UNSIGNED NOT NULL,
  `user_created` int(11) NOT NULL DEFAULT '0',
  `user_updated` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `news_rewrite`, `news_author`, `news_info`, `news_full`, `news_tags`, `news_tags_rewrite`, `news_images`, `news_date`, `news_key`, `news_des`, `news_external`, `news_view`, `news_hot`, `news_status`, `news_lang`, `cago_id`, `user_created`, `user_updated`) VALUES
(189, 'Đăng ký tham dự Kỳ đánh giá kỹ năng nghề quốc gia, nghề Công nghệ ô tô ', 'dang-ky-tham-du-ky-danh-gia-ky-nang-nghe-quoc-gia-nghe-cong-nghe-o-to', '', 'Căn cứ theo Luật Việc làm số 38/2013/QH13 có hiệu lực từ ngày 1/1/2015 có quy định: Đánh giá kỹ năng nghề Quốc gia cho Người lao động nhằm mục đích hoàn thiện năng lực nghề nghiệp của bản thân Người lao động, tìm công việc phù hợp hoặc công việc yêu cầu phải có chứng chỉ kỹ năng nghề quốc gia.  ', '&#160;<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-family: Arial, Helvetica, sans-serif; text-align: justify; color: rgb(168, 168, 168); background: rgb(18, 18, 18);">\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">Căn cứ theo Luật Việc làm số 38/2013/QH13 có hiệu lực từ ngày 1/1/2015 có quy định: Đánh giá kỹ năng nghề Quốc gia cho Người lao động nhằm mục đích hoàn thiện năng lực nghề nghiệp của bản thân Người lao động, tìm công việc phù hợp hoặc công việc yêu cầu phải có chứng chỉ kỹ năng nghề quốc gia. &#160;</p>\n</font><br style="color: rgb(240, 242, 236); font-family: Arial, Helvetica, sans-serif; text-align: justify; background-color: rgb(18, 18, 18);" />\n<font style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font-family: Arial, Helvetica, sans-serif; text-align: justify; color: rgb(168, 168, 168); background: rgb(18, 18, 18);">\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">Hiện nay Chính phủ đang đưa ra Nghị định dự thảo quy định chi tiết một số điều của Luật Việc làm về việc đánh giá, cấp chứng chỉ kỹ năng nghề quốc gia, trong đó có quy định rõ một số công việc ảnh hưởng trực tiếp đến an toàn, sức khỏe của cá nhân người lao động và cộng đồng phải có chứng chỉ kỹ năng nghề quốc gia bao gồm có công việc sửa chữa ô tô.</p>\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">&#160;</p>\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">Trong giai đoạn đầu triển khai thực hiện đánh giá, cấp chứng chỉ kỹ năng nghề quốc gia, các thí sinh tham dự đang được nhà nước hỗ trợ về lệ phí đánh giá, cấp chứng chỉ kỹ năng nghề quốc gia theo quy định nhà nước. &#160;</p>\n<p style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">&#160;</p>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">Công ty CP Thiết bị Tân Phát được chọn là Trung tâm đánh giá kỹ năng nghề Quốc gia cho nghề Công nghệ ô tô theo Giấy chứng nhận Trung tâm đánh giá kỹ năng số 36/2014/GCN-ĐGKNN ngày 31/12/2014 do Tổng cục Dạy nghề Bộ Lao động thương binh và xã hội cấp. Năm 2015,</div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">Tổng cục Dạy nghề phối hợp cùng Công ty CP Thiết bị Tân Phát lên kế hoạch tổ chức đánh giá, cấp chứng chỉ kỹ năng nghề quốc gia, nghề công nghệ ô tô (bậc 1,2,3), cụ thể như sau:</div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">&#160;</div>\n<ul style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; list-style: none; background: transparent;">\n    <li style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(255, 153, 0); background: transparent;"><b>Thời gian:</b></span>&#160;Dự kiến Tháng 5/2015</li>\n    <li style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(255, 153, 0); background: transparent;"><b>Địa điểm</b></span><b>:</b>&#160;Trung tâm đánh giá kỹ năng nghề quốc gia, nghề Công nghệ ô tô thuộc Công ty CP Thiết bị Tân Phát, Số 168 Phan Trọng Tuệ, xã Thanh Liệt, huyện Thanh Trì, TP Hà Nội</li>\n    <li style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(255, 153, 0); background: transparent;"><b>Đối tượng:</b></span>&#160;Bậc 1, bậc 2, bậc 3 (Xem phụ lục 1)</li>\n    <li style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(255, 153, 0); background: transparent;"><b>Kinh phí:</b></span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; color: rgb(255, 255, 0); background: transparent;">&#160;</span>Do Tổng cục Dạy nghề hỗ trợ</li>\n</ul>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">&#160;</div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">Công ty CP Thiết bị Tân Phát trân trọng thông báo tới các Doanh nghiệp và người lao động biết và đăng ký tham dự kỳ đánh giá. Sau khi đánh giá, các thí sinh đạt yêu cầu sẽ được Tổng cục Dạy nghề cấp chứng chỉ kỹ năng nghề quốc gia.</div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">&#160;</div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><b><i>Đánh giá kỹ năng nghề là điều kiện thuận lợi để doanh nghiệp đánh giá tay nghề của công nhân, đồng thời người công nhân cũng sẽ tự tin hơn về tay nghề của mình.</i></b></div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">&#160;</div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">Rất mong nhận được sự hợp tác của Quý công ty/Doanh nghiệp!</div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><b><i>Xin trân trọng cảm ơn!</i></b></div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">&#160;</div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><i>Chi tiết liên quan đến hoạt động này, vui lòng liên hệ theo địa chỉ:</i></div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><i>Bà Đặng Minh Nguyệt, Trung tâm đánh giá kỹ năng nghề quốc gia - Công ty CP Thiết bị Tân Phát</i></div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><i>168 Phan Trọng Tuệ, &#160;xã Thanh Liệt, &#160;huyện Thanh Trì, &#160;TP Hà Nội.</i></div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><i>Điện thoại:&#160;<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;" class="skype_c2c_print_container notranslate">0904 898 915</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;" id="skype_c2c_container" class="skype_c2c_container notranslate" dir="ltr" tabindex="-1" data-numbertocall="+44904898915" data-isfreecall="false" data-isrtl="false" data-ismobile="false"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;" class="skype_c2c_highlighting_inactive_common" dir="ltr" skypeaction="skype_dropdown"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;" class="skype_c2c_textarea_span" id="non_free_num_ui"><img width="0" height="0" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;" alt="" class="skype_c2c_logo_img" src="resource://skype_ff_extension-at-jetpack/skype_ff_extension/data/call_skype_logo.png" /><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;" class="skype_c2c_text_span">0904 898 915</span></span></span></span>&#160;/&#160;<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;" class="skype_c2c_print_container notranslate">0973 961 920</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;" id="skype_c2c_container" class="skype_c2c_container notranslate" dir="ltr" tabindex="-1" data-numbertocall="+84973961920" data-isfreecall="false" data-isrtl="false" data-ismobile="false"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;" class="skype_c2c_highlighting_inactive_common" dir="ltr" skypeaction="skype_dropdown"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;" class="skype_c2c_textarea_span" id="non_free_num_ui"><img width="0" height="0" style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;" alt="" class="skype_c2c_logo_img" src="resource://skype_ff_extension-at-jetpack/skype_ff_extension/data/call_skype_logo.png" /><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;" class="skype_c2c_text_span">0973 961 920</span></span></span></span></i></div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><i>Email:&#160;</i><a style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-decoration: none; background: transparent;" href="mailto:minhnguyet@tanphat.com"><i>minhnguyet@tanphat.com</i></a></div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">&#160;</div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">&#160;</div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><strong>Phụ lục 1</strong>: Thủ tục đăng ký tham dự kỳ đánh giá, cấp chứng chỉ kỹ năng nghề (<a style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-decoration: none; background: transparent;" href="http://tanphat.vn/upload/fckeditor/phuluc1(1).doc">download tại đây</a>)</div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><strong>Phụ lục 2:</strong>&#160;Phiếu đăng ký tham dự (<a style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-decoration: none; background: transparent;" href="http://tanphat.vn/upload/fckeditor/phucluc2(1).doc">download tại đây</a>)</div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><strong>Phụ lục 3:</strong>&#160;Danh mục công việc nghề Công nghệ ô tô (<a style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-decoration: none; background: transparent;" href="http://tanphat.vn/upload/fckeditor/Nghe%20Cong%20nghe%20oto%20theo%20bac(2).pdf">download tại đây</a>)</div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">&#160;</div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><em style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;"><u><strong>Tài liệu tham khảo</strong></u></em></div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">&#160;</div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">Luật việc làm&#160;<a style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-decoration: none; background: transparent;" href="http://vanban.chinhphu.vn/portal/page/portal/chinhphu/hethongvanban?class_id=1&amp;_page=1&amp;mode=detail&amp;document_id=171410">vanban.chinhphu.vn/portal/page/portal/chinhphu/hethongvanban</a>&#160;</div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">Thông tư 15/2011/TT-BLĐTBXH&#160;<a style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-decoration: none; background: transparent;" href="http://www.molisa.gov.vn/vi/pages/ChiTietVanBan.aspx?vID=27657">www.molisa.gov.vn/vi/pages/ChiTietVanBan.aspx</a></div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">Nghị định dự thảo Luật việc làm quy định chi tiết một số điều về đánh giá cấp chứng chỉ kỹ năng nghề quốc gia</div>\n<div style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent;">&#160;<a style="margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; text-decoration: none; background: transparent;" href="http://www.chinhphu.vn/portal/page/portal/chinhphu/congdan/DuThaoVanBan?_piref135_27935_135_27927_27927.mode=detail&amp;_piref135_27935_135_27927_27927.id=982">www.chinhphu.vn/portal/page/portal/chinhphu/congdan/DuThaoVanBan</a></div>\n</font>', '', '', '145149609172.jpg', '00:21:31 - 31/12/2015', '', '', '', '0', 1, 1, 2, 230, 0, 0),
(190, 'Internet of Things: Quá đà, không cần thiết và dễ bị lợi dụng', 'internet-of-things--qua-da--khong-can-thiet-va-de-bi-loi-dung', '', 'Mới đây, tay viết kỳ cựu Gary Ebersole trên trang Huffingtonpost đã chia sẻ góc nhìn của ổng về xu hướng phát triển Internet of Things (IoT) trong những năm qua. Điều đáng nói, Ebersole chính là đồng sáng lập của quỹ Open IoT, quỹ hỗ trợ phát triển và khai thác đúng hướng các giá trị của IoT trong cuộc sống con người.\r\n', '<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Mới đây, tay viết kỳ cựu Gary Ebersole trên trang Huffingtonpost đã chia sẻ góc nhìn của ổng về xu hướng phát triển Internet of Things (IoT) trong những năm qua. Điều đáng nói, Ebersole chính là đồng sáng lập của quỹ Open IoT, quỹ hỗ trợ phát triển và khai thác đúng hướng các giá trị của IoT trong cuộc sống con người.</p>\r\n<p class="VCSortableInPreviewModeWrapper" style="margin: 0px; padding: 8px 0px; text-align: center; font-size: 17px; line-height: 25px;">&#160;</p>\r\n<div class="VCSortableInPreviewMode" type="Photo" style="margin: auto !important; padding: 0px; font-style: italic; width: 396px; display: inline-block; box-sizing: border-box;">\r\n<div style="margin: 0px; padding: 0px; float: none; width: auto; box-sizing: border-box; text-align: center;"><img alt="\r\nGary Ebersole không ngần ngại bày tỏ quan điểm của ông về Internet of Things.\r\n" id="img_166188" photoid="166188" src="https://genknews.vcmedia.vn/k:2015/headshot-1448447343337/internet-of-things-qua-da-khong-can-thiet-va-de-bi-loi-dung.jpg" rel="https://genknews.vcmedia.vn/2015/headshot-1448447343337.jpg" type="photo" style="margin: 0px; padding: 0px !important; border: none; display: inline; max-width: 100%; cursor: none;" /></div>\r\n<div class="PhotoCMS_Caption" style="margin: 0px; padding: 0px; float: none; width: auto; box-sizing: border-box;">\r\n<p style="margin: 0px; padding: 8px 0px; text-align: center;">Gary Ebersole không ngần ngại bày tỏ quan điểm của ông về Internet of Things.</p>\r\n</div>\r\n</div>\r\n<p>&#160;</p>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Ông cho rằng bản thân có phần "cầu toàn" khi cảm thấy mối quan hệ giữa mình và mạng Internet đang ở mức "vừa đủ". Các công cụ tìm kiếm như Google mang lại cho chúng ta nhiều thông tin vô cùng hữu ích chỉ bằng vài thao tác. Rõ ràng trong mọi thứ bạn luôn cần cho đi để nhận lại điều gì đó, ở trường hợp này, Google cung cấp cho bạn nhiều dịch vụ miễn phí, đồng thời thu thập các thông tin liên quan của khách hàng để hỗ trợ mảng kinh doanh quảng cáo trực tuyến của họ.</p>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Cứ mỗi khi chúng ta tìm kiếm hay sử dụng các dịch vụ của Google, họ càng hiểu rõ hơn về chúng ta. Nhờ đó, các khách hàng khác của Google, những người trả tiền để đăng quảng cáo thông qua hệ thống AdWords, có thể sử dụng thông tin Google thu thập được để nhắm đúng đối tượng mục tiêu mà họ hướng tới. Dĩ nhiên chẳng ai bắt bạn sử dụng các công cụ tìm kiếm như Google hay Yahoo, có rất nhiều lựa chọn khác không hề theo dõi bạn, nhưng nó không thể tốt bằng các công cụ tìm kiếm nói trên. Như Ebersole đã nói, có đi thì có lại, không ai cho không bạn điều gì hết.</p>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Hầu hết chúng ta đều sử dụng các dịch vụ email miễn phí, như Google hay Yahoo. Có không ít dịch vụ email trả tiền, những dịch vụ đảm bảo sự riêng tư của bạn, với việc bạn phải bỏ ra từ 5 - 10 USD mỗi tháng. Tất nhiên, không có lý gì để từ chối Gmail cả, và Google thu lợi từ việc "chỉ đường" cho các email quảng cáo tới đúng hòm mail của bạn. Một lần nữa cần phải nhắc lại, "không có ai cho không bạn điều gì hết".</p>\r\n<p class="VCSortableInPreviewModeWrapper" style="margin: 0px; padding: 8px 0px; text-align: center; font-size: 17px; line-height: 25px;">&#160;</p>\r\n<div class="VCSortableInPreviewMode" type="Photo" style="margin: auto !important; padding: 0px; font-style: italic; width: 640px;">\r\n<div style="margin: 0px; padding: 0px;"><img alt="\r\nInternet of Thing sẽ tạo ra thềm hàng tỷ kết nối toàn cầu, với băng thông tiêu tốn không thể ước tính.\r\n" id="img_166189" photoid="166189" src="https://genknews.vcmedia.vn/k:thumb_w/640/2015/blog1-1448447343671/internet-of-things-qua-da-khong-can-thiet-va-de-bi-loi-dung.jpg" rel="https://genknews.vcmedia.vn/2015/blog1-1448447343671.jpg" type="photo" style="margin: 0px; padding: 0px !important; border: none; display: inline; max-width: 100%; cursor: none;" /></div>\r\n<div class="PhotoCMS_Caption" style="margin: 0px; padding: 0px;">\r\n<p style="margin: 0px; padding: 8px 0px; text-align: center;">Internet of Thing sẽ tạo ra thềm hàng tỷ kết nối toàn cầu, với băng thông tiêu tốn không thể ước tính.</p>\r\n</div>\r\n</div>\r\n<p>&#160;</p>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Một số người cảm giác đó là sự trao đổi công bằng, giữa người cung cấp dịch vụ và người sử dụng dịch vụ. Google cho chúng ta dùng các dịch vụ từ công cụ tìm kiếm cho tới hòm mail miễn phí, và lấy đi 1 phần riêng tư của mỗi người. Facebook kết nối mọi người với nhau mà không hề tính phí, chúng ta cũng chỉ mất "một chút" riêng tư. Mọi thứ đều ổn cho tới khi ai cũng đòi hỏi "sự tự do" và "riêng tư" đồng thời lên án "những kẻ theo dõi họ". Mô hình hoạt động này vẫn tỏ ra cân bằng về lợi ích dù nhìn từ bất cứ góc độ nào, nhờ đó mà các dịch vụ trực tuyến không ngừng phát triển. Bởi lẽ, "không ai cho không bạn điều gì hết".</p>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Dù sao đi nữa, phải nói rằng người được lợi nhiều hơn vẫn là các công ty, tập đoàn công nghệ như Google, Facebook hay Apple. Thông tin của bạn tạo ra hàng tỷ USD mỗi năm cho những "gã khổng lồ" này. Và dĩ nhiên, lợi nhuận đó sẽ tăng lên khi họ có nhiều hơn những thông tin về bạn, đây là lúc mà chúng ta nên nghĩ tới Internet of Things (IoT). Thường được gọi là Internet Vạn Vật, dễ hiểu hơn, mọi thứ trong cuộc sống của chúng ta sẽ có khả năng kết nối Internet. Khi đó, từ tù lạnh, máy giặt cho tới bàn chải đánh răng của bạn cũng có thể trở thành chiếc cần câu "thông tin cá nhân" từ một bên thứ 3.</p>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Ebersole so sánh IoT như "ma cà rồng hút dữ liệu". Thực tế sẽ có hàng triệu con ma cà rồng như vậy trong tương lai, nếu IoT thực sự phát triển. Theo tính toán, các thiết bị sử dụng IoT sẽ tiêu tốn hàng tỷ bit dữ liệu, chúng đều là thông tin cá nhân và lịch sử hoạt động hàng ngày của người dùng. Dù các thiết bị IoT phần nào sẽ giúp cuộc sống của bạn dễ dàng hơn, nhưng nó là điệp viên theo dõi mà bạn chẳng thể nào kiểm soát nổi.</p>\r\n<p class="VCSortableInPreviewModeWrapper" style="margin: 0px; padding: 8px 0px; text-align: center; font-size: 17px; line-height: 25px;">&#160;</p>\r\n<div class="VCSortableInPreviewMode IMSCurrentEditorEditObject" type="Photo" style="margin: auto !important; padding: 0px; font-style: italic; width: 640px;">\r\n<div style="margin: 0px; padding: 0px;"><img alt="\r\nInternet of Things là tương lai hay chỉ là chiêu trò hút máu người dùng?\r\n" id="img_166190" photoid="166190" src="https://genknews.vcmedia.vn/k:thumb_w/640/2015/iot-2-1448447370212/internet-of-things-qua-da-khong-can-thiet-va-de-bi-loi-dung.jpg" rel="https://genknews.vcmedia.vn/2015/iot-2-1448447370212.jpg" type="photo" style="margin: 0px; padding: 0px !important; border: none; display: inline; max-width: 100%; cursor: none;" /></div>\r\n<div class="PhotoCMS_Caption" style="margin: 0px; padding: 0px;">\r\n<p style="margin: 0px; padding: 8px 0px; text-align: center;">Internet of Things là tương lai hay chỉ là chiêu trò "hút máu" người dùng?</p>\r\n</div>\r\n</div>\r\n<p>&#160;</p>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Bạn sẽ nghĩ rằng mình bỏ tiền ra để mua công tắc đèn thông minh, hay thiết bị sưởi có khả năng "học tập", nhưng thực chất bạn đang mua về những điệp viên theo dõi chính mình. Lúc đó, câu "không ai cho không bạn điều gì hết" chẳng còn đúng nữa, có lẽ nên thay bằng "tiền mất tật mang" thì hơn. Đây là thời điểm mà sự cân bằng về lợi ích giữa khách hàng và người cung cấp dịch vụ không còn nữa.</p>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Đáng buồn thay, một Internet không công bằng và thiếu minh bạch đang được người ta tung hô và nhanh chóng trở thành một xu hướng mới, một tiêu chuẩn mới. Các công ty lớn đang dùng cái họ gọi là "lợi ích người dùng" để che đi sự thiếu minh bạch của họ. Họ dùng ngôn từ pháp lý để che giấu bản chất và mức độ thu thập thông tin "quá đáng" thông qua các "ma cà rồng dữ liệu" của mình. Thậm chí còn tệ hơn, các doanh nghiệp lớn tin rằng người dùng sẽ không ngần ngại chi tiền để rước "điệp viên" của họ về nhà. Như vậy, các doanh nghiệp thu lời 2 lần, còn người dùng phải trả giá 2 lần bằng tiền và sự riêng tư của họ.</p>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Một lần nữa phải nhắc tới sự "Không công bằng" mà chúng ta đang hướng tới trên con đường phát triển của khoa học công nghệ. Dễ dàng thấy được một bộ phận người tiêu dùng đang mù quáng, chấp nhận thế giới Internet "vẩn đục" và làm giàu cho các đại gia công nghệ. Đó là lý do tại sao Ebersole thành lập nên quỹ OpenIoT với một nhiệm vụ định hướng lại cách nhìn của mọi người về Internet Vạn Vật, đồng thở chỉ ra cho họ đâu là những con ma cà rồng.</p>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Niềm tin của người dùng đang bị xâm phạm bởi những kẻ thiếu ý thức xây dựng xã hội, đồng thời Ebersole cũng không nghĩ rằng Internet of Things sẽ sớm mang lại những giá trị thực sự cho cuộc sống, đơn thuần nó chỉ "hút" tiền và thông tin của chúng ta mà thôi.</p>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Còn nhớ, TheVerge đã từng phải lên tiếng về một sản phẩm mang cái mác "Internet of Things" vô cùng lố lăng. Bàn chải "thông minh" của Philips có giá lên tới 350 USD chỉ với tác dụng mua vui cho những đứa trẻ, và quá nửa số tiền để để mua 1 ứng dụng ngộ nghĩnh trên iPad giúp dỗ dành trẻ em khi chúng đánh răng.</p>\r\n<div class="VCSortableInPreviewMode" data-height="400px" data-src="http://vcplayer.vcmedia.vn/1.1/?_site=genk&amp;vid=genk/hzzbzknp1gqgrkhiew-4avs8g3glnq/2015/11/25/how-to-brush-with-the-new-philips-sonicare-for-kids-connected-electric-toothbrush-with-free-app-youtube-1448447532419-b5fd5.MP4&amp;autoplay=false&amp;_info=6d6f0b85bd044bf889f96977fbe26f23" data-width="600px" id="videoid_16243" type="VideoStream" videoid="16243" style="padding: 0px; font-size: 17px; line-height: 25px; text-align: center; margin: auto !important;"><iframe width="600px" height="400px" src="http://vcplayer.vcmedia.vn/1.1/?_site=genk&amp;vid=genk/hzzbzknp1gqgrkhiew-4avs8g3glnq/2015/11/25/how-to-brush-with-the-new-philips-sonicare-for-kids-connected-electric-toothbrush-with-free-app-youtube-1448447532419-b5fd5.MP4&amp;autoplay=false&amp;_info=6d6f0b85bd044bf889f96977fbe26f23&amp;_videoId=16243&amp;_admParamTvc=0;0;0;0" frameborder="0" allowfullscreen="" webkitallowfullscreen="" mozallowfullscreen="" oallowfullscreen="" msallowfullscreen="" scrolling="no" style="margin: 0px; padding: 0px;"></iframe>\r\n<div class="VideoCMS_Caption" style="margin: 0px; padding: 0px;">\r\n<p style="margin: 0px; padding: 8px 0px;">Video quảng cáo chiếc bàn chải dán mác "Internet of Things" của Philips.</p>\r\n</div>\r\n</div>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Qua đó, chúng ta thấy rõ được một số hãng công nghệ đang coi thường người dùng tới mức nào. Họ tự tạo ra thứ gọi là "xu hướng của tương lai", sau đó bám vào để thu lợi 1 cách thiếu minh bạch. Hơn bao giờ hết, người dùng công nghệ cần tự nhận thức và khẳng định quyền sử dụng Internet một cách minh bạch, đó là 1 Internet cân bằng với những giá trị đích thực, có cho đi và cũng có nhận lại.</p>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Internet of Things có thể trở thành tương lai của nhân loại hay không, hay đó chỉ là khái niệm ngông cuồng, thiếu thực tiễn và là mồi câu của các thế lực lớn?</p>', '', '', '1453525967856.jpg', '12:02:53 - 02/01/2016', 'Kế hoạch hướng tới châu âu năm2016Kế hoạch hướng tới châu âu năm2016Kế hoạch hướng tới châu âu năm2016', 'Kế hoạch hướng tới châu âu năm2016Kế hoạch hướng tới châu âu năm2016Kế hoạch hướng tới châu âu năm2016Kế hoạch hướng tới châu âu năm2016', '', '0', 1, 1, 1, 230, 0, 160),
(191, 'Intel muốn phát triển cộng đồng Internet of Things tại Việt Nam', 'intel-muon-phat-trien-cong-dong-internet-of-things-tai-viet-nam', '', 'Intel muốn phát triển cộng đồng Internet of Things tại Việt Nam', '&#160;\r\n<p class="VCSortableInPreviewModeWrapper" style="margin: 0px; padding: 8px 0px; text-align: center; font-size: 17px; line-height: 25px;">&#160;</p>\r\n<div class="VCSortableInPreviewMode IMSCurrentEditorEditObject" type="Photo" style="margin: auto !important; padding: 0px; font-style: italic; width: 640px; text-align: center;">\r\n<div style="margin: 0px; padding: 0px;"><img alt="\r\nNhà máy lắp ráp chip lớn nhất của Intel nằm tại Việt Nam. Ảnh: Internet\r\n" id="img_181734" photoid="img_181734" src="https://genknews.vcmedia.vn/k:thumb_w/640/2016/1-intel-1-1452595194124/intel-muon-phat-trien-cong-dong-internet-of-things-tai-viet-nam.jpg" rel="https://genknews.vcmedia.vn/2016/1-intel-1-1452595194124.jpg" type="photo" style="margin: 0px; padding: 0px !important; border: none; display: inline; max-width: 650px; cursor: none;" /></div>\r\n<div class="PhotoCMS_Caption" style="margin: 0px; padding: 0px;">\r\n<p style="margin: 0px; padding: 8px 0px;">Nhà máy lắp ráp chip lớn nhất của Intel nằm tại Việt Nam. Ảnh: Internet</p>\r\n</div>\r\n</div>\r\n<p>&#160;</p>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Hôm nay (12/1), Thứ trưởng Bộ TT&amp;TT Nguyễn Thành Hưng đã có buổi tiếp và làm việc với ông Trần Đức Trung, Tổng giám đốc Intel Việt Nam. Tại buổi làm việc, Intel đã trao đổi với Thứ trưởng về những kế hoạch cũng như chiến lược của công ty tại Việt Nam trong năm 2016, đồng thời mong muốn nhận được sự hỗ trợ của Bộ TT&amp;TT.</p>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Ông Trần Đức Trung cho biết trong năm nay, Intel sẽ tập trung phát triển Internet of Things tại Việt Nam. Mọi công ty, cá nhân đều có thể tham gia vào các hoạt động Internet of Things và Intel sẽ hết sức hỗ trợ, tạo điều kiện thuận lợi. Công ty mong muốn phát triển cộng đồng Internet of Things tại Việt Nam, từ đó các công ty, cá nhân Việt Nam có thể tham gia vào cộng đồng, giao lưu và giới thiệu các giải pháp IoT ra nước ngoài, đặc biệt là đối tượng start-up của Việt Nam.</p>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Ngoài ra, trong lĩnh vực giáo dục, Intel sẽ tăng cường phối hợp với Bộ Giáo dục &amp; Đào tạo&#160;để phổ cập tin học, tổ chức các cuộc thi ứng dụng CNTT. Một điểm đáng lưu ý là Intel sẽ phối hợp với Bộ Giáo dục &amp; Đào tạo&#160;và các công ty để triển khai giáo dục STEM (viết tắt của các từ Science -&#160;khoa học, Technology -&#160;công nghệ, Engineering -&#160;kỹ thuật&#160;và Math -&#160;toán học). Giáo dục STEM về bản chất là trang bị cho người học những kiến thức và kỹ năng cần thiết liên quan đến các lĩnh vực khoa học, công nghệ, kỹ thuật và toán học. Như vậy, giới trẻ ngay từ cấp 1 đã có điều kiện tiếp cận với nền khoa học, có thể sáng tạo ứng dụng để đáp ứng trong thực tế, chẳng hạn các ứng dụng về môi trường. Các em học sinh cũng có thể tự lập trình ra giải pháp, ứng dụng IoT, Intel sẽ đưa các em vào các cuộc thi toàn cầu. Trong năm qua, Intel đã tổ chức ngày hội STEM đầu tiên tai Hà Nội và sắp tới&#160;công ty đang phối hợp để tổ chức ngày hội STEM tại TP.HCM.</p>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Thứ trưởng Nguyễn Thành Hưng cho biết, Bộ TT&amp;TT rất hoan nghênh các hoạt động của Intel tại Việt Nam, cũng như nỗ lực hợp tác chặt chẽ nhằm đổi mới giáo dục, ứng dụng IoT. Thứ trưởng cũng lưu ý Intel cung cấp các giải pháp hỗ trợ phát triển thương mại điện tử ở Việt Nam, hợp tác với các doanh nghiệp vừa và nhỏ trong nước, cụ thể hóa những&#160;kế hoạch hợp tác và kinh doanh tại Việt Nam.</p>\r\n<div>&#160;</div>', '', '', '1453525256323.jpg', '12:00:56 - 23/01/2016', 'Intel muốn phát triển cộng đồng Internet of Things tại Việt Nam', 'Intel muốn phát triển cộng đồng Internet of Things tại Việt Nam', 'http://genk.vn/internet/intel-muon-phat-trien-cong-dong-internet-of-things-tai-viet-nam-2016011217412618.chn', '0', 1, 1, 1, 230, 160, 160),
(192, 'Chuẩn WiFi mới được phê duyệt: mạnh mẽ hơn, xa hơn, tiết kiệm điện năng hơn ', 'chuan-wifi-moi-duoc-phe-duyet--manh-me-hon--xa-hon--tiet-kiem-dien-nang-hon-', '', 'Liên minh WiFi vừa chính thức phê duyệt chuẩn WiFi mới 802.11ah, mạnh mẽ hơn và tiết kiệm điện năng hơn các chuẩn cũ.', '&#160;<span style="font-size: 17px; line-height: 25px;">Cuối cùng, sau một thời gian thử nghiệm, liên minh WiFi (WiFi Alliance) đã chính thức phê duyệt tiêu chuẩn WiFi mới 802.11ah, thường được gọi là "HaLow".</span>\r\n<p class="VCSortableInPreviewModeWrapper" style="margin: 0px; padding: 8px 0px; text-align: center; font-size: 17px; line-height: 25px;">&#160;</p>\r\n<div class="VCSortableInPreviewMode IMSCurrentEditorEditObject" type="Photo" style="margin: auto !important; padding: 0px; font-style: italic; width: 640px;">\r\n<div style="margin: 0px; padding: 0px;"><img alt="" id="img_179165" photoid="179165" src="https://genknews.vcmedia.vn/k:thumb_w/640/2016/wifim1-1451926485518/chuan-wifi-moi-duoc-phe-duyet-manh-me-hon-xa-hon-tiet-kiem-dien-nang-hon.jpg" rel="https://genknews.vcmedia.vn/2016/wifim1-1451926485518.jpg" type="photo" h="739" w="1277" style="margin: 0px; padding: 0px !important; border: none; display: inline; max-width: 100%; cursor: none;" /></div>\r\n<div class="PhotoCMS_Caption" style="margin: 0px; padding: 0px;">&#160;</div>\r\n</div>\r\n<p>&#160;</p>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Các thiết bị được phê duyệt sẽ hoạt động trong băng tần 900 MHz. Phạm vi phủ sóng của chuẩn WiFi mới gấp đôi so với tiêu chuẩn 2,4 GHz hiện hành, nhưng lại tiêu tốn ít năng lượng hơn và có khả năng xuyên qua các vật cản (như bức tường) tốt hơn. Các chuyên gia đánh giá tiêu chuẩn này chính là chìa khóa của IoT (internet of things) và các thiết bị kết nối trong nhà.</p>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Các tiện ích trong gia đình như cảm biến ở cửa, bóng đèn thông minh và máy ảnh cần có đủ năng lượng để truyền tải dữ liệu đường dài đến các trung tâm xử lí hay các router. Tuy nhiên, các chuẩn WiFi cũ lại không thích hợp vì tiêu hao quá nhiều năng lượng, do đó hiệu quả truyền tải dữ liệu đường dài là rất thấp.</p>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">WiFi Alliance cho biết rằng HaLow sẽ "được áp dụng rộng rãi thay thế cho các giao thức WiFi hiện tại" ở khả năng bảo mật và tương tác. Các sản phẩm mới dựa trên HaLow như router sẽ hoạt động cùng lúc với băng tần 2,4 và 5 GHz. Việc tương thích ngược sẽ là điều kiện giúp phổ biến dần các thiết bị sử dụng chuẩn 900 MHz mới trong tương lai gần.</p>\r\n<p style="margin: 0px; padding: 8px 0px; font-size: 17px; line-height: 25px;">Liên minh WiFi cũng cho biết thêm tiêu chuẩn&#160;<a draggable="false" href="http://genk.vn/wifi.htm" target="_blank" title="WiFi" style="margin: 0px; padding: 0px; text-decoration: none; color: blue;">WiFi</a>&#160;mới sẽ giúp sử dụng một cách có hiệu quả hơn năng lượng trong nhà thông minh, xe hơi… cũng như trong lĩnh vực công nghiệp, bán lẻ, nông nghiệp và môi trường thành phố thông minh.</p>', '', '', '1453525332778.jpg', '12:01:54 - 23/01/2016', 'Chuẩn WiFi mới được phê duyệt: mạnh mẽ hơn, xa hơn, tiết kiệm điện năng hơn ', 'Chuẩn WiFi mới được phê duyệt: mạnh mẽ hơn, xa hơn, tiết kiệm điện năng hơn ', 'http://genk.vn/tin-ict/chuan-wifi-moi-duoc-phe-duyet-manh-me-hon-xa-hon-tiet-kiem-dien-nang-hon-20160104235629976.chn', '0', 1, 1, 1, 230, 160, 160),
(193, 'Những điều người dùng chờ đợi Microsoft ra mắt trong năm 2016', 'nhung-dieu-nguoi-dung-cho-doi-microsoft-ra-mat-trong-nam-2016', '', 'Năm 2015 đánh dấu bước chuyển mình mạnh mẽ của Microsoft và năm tới, người ta đang rất chờ đợi xem gã khổng lồ xứ Redmond này sẽ mang đến gì cho thế giới.', '&#160;', '', '', '1453525434490.jpg', '12:03:54 - 23/01/2016', '', '', 'http://genk.vn/tin-ict/nhung-dieu-nguoi-dung-cho-doi-microsoft-ra-mat-trong-nam-2016-20151219231110727.chn', '0', 1, 1, 1, 230, 160, 160);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_office`
--

CREATE TABLE `tbl_office` (
  `office_id` int(11) NOT NULL,
  `office_name` varchar(100) NOT NULL,
  `office_rewrite` varchar(100) NOT NULL,
  `office_address` varchar(255) NOT NULL,
  `office_order` int(11) NOT NULL DEFAULT '0',
  `office_status` tinyint(1) NOT NULL DEFAULT '1',
  `language` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_office`
--

INSERT INTO `tbl_office` (`office_id`, `office_name`, `office_rewrite`, `office_address`, `office_order`, `office_status`, `language`) VALUES
(1, 'Chi Nhánh – TP.Vinh', 'Chi-Nhanh--TPVinh', '<div>72 Phan Bội Châu – TP.Vinh – Nghệ An</div>\r\n<div>ĐT : 038 3 929 668 / Fax: 038 3 929 886</div>\r\n<div>Email : cnvinh@tanphat.com</div>', 3, 1, 1),
(2, 'Chi Nhánh – TP. Hồ Chí Minh', 'Chi-Nhanh--TP-Ho-Chi-Minh', '1769/53 QL1A-Q12- TP. Hồ Chí Minh\r\n<div>\r\n<div>\r\n<div>ĐT: 08 6298 7987 / Fax: 08 6258 1800</div>\r\n<div>Email : saigon@tanphat.com</div>\r\n</div>\r\n</div>', 4, 1, 1),
(3, 'Chi nhánh Hải Phòng', 'Chi-nhanh-Hai-Phong', '<div>Số 02 Hồng Bàng – TP. Hải Phòng</div>\r\n<div>ĐT: 031 3 599 865 / Fax: 031 3 599 866</div>\r\n<div>Email : cnhaiphong@tanphat.com</div>', 1, 1, 1),
(4, 'Trụ Sở Chính – Hà Nội', 'Tru-So-Chinh--Ha-Noi', '<div>168 Phan Trọng Tuệ - Thanh Trì - Hà Nội</div>\n<div>ĐT : 04 3681 2043 / Fax : 04 3681 2042</div>\n<div>Email : tanphat@tanphat.com</div>', 5, 1, 1),
(5, 'Headquarters – Ha Noi', 'Headquarters--Ha-Noi', '<div>168 Phan Trong Tue – Hanoi</div>\r\n<div>Tel: 04 3681 2043 / Fax: 04 3681 2042</div>\r\n<div>Email: tanphat@tanphat.com</div>', 0, 1, 2),
(6, 'Branch Ho Chi Minh', 'Branch-Ho-Chi-Minh', '<div>TP 1A-Q 12- 1769/53. Ho Chi Minh</div>\r\n<div>Tel: 08 6298 7987 / Fax: 08 6258 1800</div>\r\n<div>Email: saigon@tanphat.com</div>', 0, 1, 2),
(7, 'Branch Vinh', 'Branch-Vinh', '<div>72 Phan Boi Chau – Vinh City – Nghe An</div>\r\n<div>Tel: 038 3929668 / Fax: 038 3929886</div>\r\n<div>Email: cnvinh@tanphat.com</div>', 0, 1, 2),
(8, 'Branch Hai Phong', 'Branch-Hai-Phong', '<div>02 Hong Bang – TP. Haiphong</div>\r\n<div>Tel: 031 3599865 / Fax: 031 3599866</div>\r\n<div>Email: cnhaiphong@tanphat.com</div>', 0, 1, 2),
(9, 'Văn phòng đại diện - Tp. Đà Nẵng', 'Van-phong-dai-dien---Tp-Da-Nang', '124 Lý Triện - Q.Thanh Khê - TP. Đà Nẵng<br />\nĐT: 0511 3 611 825 / Fax: 0511 3 617 825<br />\nEmail: tanphatdanang@tanphat.com', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_online`
--

CREATE TABLE `tbl_online` (
  `id` int(10) UNSIGNED NOT NULL,
  `time` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user_ip` varchar(100) CHARACTER SET utf8 NOT NULL,
  `local` varchar(150) CHARACTER SET utf8 NOT NULL,
  `date` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_online`
--

INSERT INTO `tbl_online` (`id`, `time`, `user_ip`, `local`, `date`) VALUES
(61674, '1453535542', '127.0.0.1', '/index.php/danh-muc/thiet-bi-oto-xe-may-619', 0),
(61673, '1453535522', '127.0.0.1', '/index.php/san-pham', 0),
(61672, '1453535513', '127.0.0.1', '/index.php/danh-muc/thiet-bi-oto-xe-may-619', 0),
(61670, '1453535478', '127.0.0.1', '/index.php/danh-muc/thiet-bi-oto-xe-may-619', 0),
(61671, '1453535499', '127.0.0.1', '/index.php/danh-muc/thiet-bi-oto-xe-may-619', 0),
(61639, '1453535259', '127.0.0.1', '/index.php', 0),
(61640, '1453535259', '127.0.0.1', '/index.php', 0),
(61641, '1453535262', '127.0.0.1', '/index.php/danh-muc/thiet-bi-oto-xe-may-619', 0),
(61642, '1453535265', '127.0.0.1', '/index.php/danh-muc/thiet-bi-oto-xe-may-619', 0),
(61643, '1453535277', '127.0.0.1', '/index.php', 0),
(61645, '1453535304', '127.0.0.1', '/index.php/danh-muc/thiet-bi-oto-xe-may-619', 0),
(61651, '1453535326', '127.0.0.1', '/index.php', 0),
(61660, '1453535392', '127.0.0.1', '/index.php', 0),
(61661, '1453535421', '127.0.0.1', '/index.php', 0),
(61653, '1453535355', '127.0.0.1', '/index.php', 0),
(61654, '1453535358', '127.0.0.1', '/index.php/san-pham', 0),
(61655, '1453535364', '127.0.0.1', '/index.php/san-pham', 0),
(61656, '1453535372', '127.0.0.1', '/index.php/san-pham', 0),
(61657, '1453535377', '127.0.0.1', '/index.php/san-pham/20', 0),
(61658, '1453535386', '127.0.0.1', '/index.php/danh-muc/thiet-bi-dien-dan-dung-626', 0),
(61635, '1453535236', '127.0.0.1', '/index.php/danh-muc/thiet-bi-oto-xe-may-619', 0),
(61659, '1453535392', '127.0.0.1', '/index.php', 0),
(61665, '1453535441', '127.0.0.1', '/index.php/lien-he', 0),
(61666, '1453535445', '127.0.0.1', '/index.php/danh-muc/thiet-bi-oto-xe-may-619', 0),
(61667, '1453535448', '127.0.0.1', '/index.php/danh-muc/dung-cu-chuyen-dung-sua-chua-he-thong-gam--lai--treo-629', 0),
(61668, '1453535450', '127.0.0.1', '/index.php/danh-muc/thiet-bi-oto-xe-may-619', 0),
(61688, '1453535696', '127.0.0.1', '/index.php', 0),
(61669, '1453535473', '127.0.0.1', '/index.php/danh-muc/thiet-bi-oto-xe-may-619', 0),
(61652, '1453535355', '127.0.0.1', '/index.php', 0),
(61650, '1453535326', '127.0.0.1', '/index.php', 0),
(61644, '1453535277', '127.0.0.1', '/index.php', 0),
(61647, '1453535315', '127.0.0.1', '/index.php/san-pham/20', 0),
(61648, '1453535318', '127.0.0.1', '/index.php/san-pham', 0),
(61646, '1453535312', '127.0.0.1', '/index.php/san-pham', 0),
(61649, '1453535323', '127.0.0.1', '/index.php/danh-muc/thiet-bi-oto-xe-may-619', 0),
(61632, '1453535086', '127.0.0.1', '/index.php/danh-muc/thiet-bi-oto-xe-may-619', 0),
(61638, '1453535257', '127.0.0.1', '/index.php/san-pham/hai-thiet-bi-toi-tan-danh-cho-oto-xuat-hien-tai-viet-nam-1625', 0),
(61634, '1453535095', '127.0.0.1', '/index.php', 0),
(61697, '1453535758', '127.0.0.1', '/index.php/san-pham', 0),
(61681, '1453535581', '127.0.0.1', '/index.php/danh-muc/tu-do-cam-tay-638', 0),
(61686, '1453535620', '127.0.0.1', '/index.php', 0),
(61685, '1453535620', '127.0.0.1', '/index.php', 0),
(61683, '1453535602', '127.0.0.1', '/index.php', 0),
(61684, '1453535602', '127.0.0.1', '/index.php', 0),
(61704, '1453535834', '127.0.0.1', '/index.php/san-pham/may-rua-nuoc-nong-ap-luc-cao-1611', 0),
(61700, '1453535814', '127.0.0.1', '/index.php', 0),
(61699, '1453535764', '127.0.0.1', '/index.php', 0),
(61698, '1453535764', '127.0.0.1', '/index.php', 0),
(61701, '1453535814', '127.0.0.1', '/index.php', 0),
(61702, '1453535821', '127.0.0.1', '/index.php', 0),
(61703, '1453535821', '127.0.0.1', '/index.php', 0),
(61695, '1453535751', '127.0.0.1', '/index.php/danh-muc/tu-do-cam-tay-638', 0),
(61630, '1453535018', '127.0.0.1', '/index.php/danh-muc/thiet-bi-oto-xe-may-619', 0),
(61637, '1453535241', '127.0.0.1', '/index.php/san-pham/hai-thiet-bi-toi-tan-danh-cho-oto-xuat-hien-tai-viet-nam-1625', 0),
(61682, '1453535585', '127.0.0.1', '/index.php/danh-muc/thiet-bi-oto-xe-may-619', 0),
(61675, '1453535560', '127.0.0.1', '/index.php/danh-muc/thiet-bi-oto-xe-may-619', 0),
(61633, '1453535095', '127.0.0.1', '/index.php', 0),
(61631, '1453535077', '127.0.0.1', '/index.php/danh-muc/thiet-bi-oto-xe-may-619', 0),
(61693, '1453535736', '127.0.0.1', '/index.php', 0),
(61694, '1453535749', '127.0.0.1', '/index.php/danh-muc/tu-do-nghe-va-dung-cu-cam-tay-630', 0),
(61689, '1453535696', '127.0.0.1', '/index.php', 0),
(61690, '1453535727', '127.0.0.1', '/index.php', 0),
(61664, '1453535423', '127.0.0.1', '/index.php', 0),
(61663, '1453535423', '127.0.0.1', '/index.php', 0),
(61662, '1453535421', '127.0.0.1', '/index.php', 0),
(61676, '1453535567', '127.0.0.1', '/index.php/danh-muc/tu-do-nghe-va-dung-cu-cam-tay-630', 0),
(61696, '1453535753', '127.0.0.1', '/index.php/san-pham', 0),
(61692, '1453535736', '127.0.0.1', '/index.php', 0),
(61691, '1453535727', '127.0.0.1', '/index.php', 0),
(61687, '1453535633', '127.0.0.1', '/index.php/san-pham/hai-thiet-bi-toi-tan-danh-cho-oto-xuat-hien-tai-viet-nam-1625', 0),
(61680, '1453535578', '127.0.0.1', '/index.php/danh-muc/tu-do-nghe-va-dung-cu-cam-tay-630', 0),
(61679, '1453535575', '127.0.0.1', '/index.php/danh-muc/thiet-bi-oto-xe-may-619', 0),
(61678, '1453535571', '127.0.0.1', '/index.php/san-pham', 0),
(61677, '1453535569', '127.0.0.1', '/index.php/danh-muc/tu-do-cam-tay-638', 0),
(61636, '1453535238', '127.0.0.1', '/index.php/danh-muc/thiet-bi-oto-xe-may-619', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `local` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 NOT NULL,
  `info` text CHARACTER SET utf8 NOT NULL,
  `price` varchar(100) CHARACTER SET utf8 NOT NULL,
  `message` text CHARACTER SET utf8 NOT NULL,
  `images` varchar(200) CHARACTER SET utf8 NOT NULL,
  `re_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `re_local` varchar(255) CHARACTER SET utf8 NOT NULL,
  `re_phone` varchar(100) CHARACTER SET utf8 NOT NULL,
  `re_email` varchar(200) CHARACTER SET utf8 NOT NULL,
  `number` int(100) NOT NULL,
  `date` varchar(200) NOT NULL,
  `date_count` varchar(200) CHARACTER SET utf8 NOT NULL,
  `nhanhang` text CHARACTER SET utf8 NOT NULL,
  `pay_method` int(10) NOT NULL,
  `ship_method` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `serial` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `name`, `local`, `phone`, `email`, `info`, `price`, `message`, `images`, `re_name`, `re_local`, `re_phone`, `re_email`, `number`, `date`, `date_count`, `nhanhang`, `pay_method`, `ship_method`, `status`, `user_id`, `serial`) VALUES
(134, 'Phạm Kỳ Khôi', 'Bình Xuyên - Vĩnh Phúc', 'phamkykhoi.info@gmail.com', '0973980948', '', '', '', '', '', '', '', '', 0, '21:48:52 - 01/01/2016', '', '', 0, 0, 13, 0, ''),
(135, 'Trần Thị Phượng', 'Bình Xuyên - Vĩnh Phúc', 'phuongtran.tl43@gmail.com', '0973980948', '', '', '', '', '', '', '', '', 0, '22:00:55 - 01/01/2016', '', '', 0, 0, 13, 0, ''),
(136, 'Nguyễn Như Quỳnh', 'Thanh Trù Vĩnh Yên', 'nhuquynh123@gmail.com', '01689964175', '', '', '', '', '', '', '', '', 0, '22:11:06 - 01/01/2016', '', '', 0, 0, 13, 0, ''),
(137, 'Nguyễn Trần Tuấn Tú', 'Thanh Trù Vĩnh Yên', 'tuantu123@gmail.com', '0123456789', '', '', '', '', '', '', '', '', 0, '22:15:51 - 01/01/2016', '', '', 0, 0, 13, 0, ''),
(138, 'Phạm Kỳ Khôi', 'Thanh Trù Vĩnh Yên', 'phamkykhoi.info@gmail.com', '0973980948', '', '', '', '', '', '', '', '', 0, '09:56:56 - 02/01/2016', '', '', 0, 0, 13, 0, ''),
(139, 'nguye xuan hoia', 'ha noi', 'hoa@hoa.com', '0099888', '', '', '', '', '', '', '', '', 0, '10:44:18 - 10/01/2016', '', '', 0, 0, 13, 0, ''),
(140, 'nguyễn xuân hòa', 'ss', 'hoanx@tanphat.com', '09844444', '', '', '', '', '', '', '', '', 0, '11:06:35 - 11/01/2016', '', '', 0, 0, 13, 0, ''),
(141, 'Test Final', 'Hà Nội', 'phamkykhoi.info@gmail.com', '098233242', '', '', '', '', '', '', '', '', 0, '08:28:02 - 13/01/2016', '', '', 0, 0, 13, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `page_id` int(10) UNSIGNED NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_rewrite` varchar(200) NOT NULL,
  `page_author` varchar(100) NOT NULL,
  `page_info` text NOT NULL,
  `page_full` longtext NOT NULL,
  `page_tags` varchar(255) NOT NULL,
  `page_tags_rewrite` varchar(255) NOT NULL,
  `page_images` varchar(255) NOT NULL,
  `page_key` text NOT NULL,
  `page_des` text NOT NULL,
  `page_date` varchar(100) NOT NULL,
  `page_view` int(10) NOT NULL,
  `page_status` int(1) NOT NULL DEFAULT '1',
  `page_lang` tinyint(1) NOT NULL DEFAULT '1',
  `cago_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`page_id`, `page_title`, `page_rewrite`, `page_author`, `page_info`, `page_full`, `page_tags`, `page_tags_rewrite`, `page_images`, `page_key`, `page_des`, `page_date`, `page_view`, `page_status`, `page_lang`, `cago_id`) VALUES
(106, 'Chính sách vận chuyển', 'chinh-sach-van-chuyen', 'Chính sách vận chuyển', 'abc', '<p><span style="color: rgb(51, 51, 51); font-family: Arial, MyriadPro, Tahoma; line-height: 18px; text-align: justify;">Nội dung đang chờ cập nhật và chỉnh sửa</span></p>', 'Chính sách vận chuyển', 'Chính sách vận chuyển', 'Chính sách vận chuyển', 'key', 'des\n', '18:54:42 - 26/03/2014', 110, 1, 1, 0),
(105, 'Chính sách bảo trì, bảo hành', 'chinh-sach-bao-tri-bao-hanh', '', '', '<p><span style="color: rgb(51, 51, 51); font-family: Arial, MyriadPro, Tahoma; line-height: 18px; text-align: justify;">Nội dung đang chờ cập nhật và chỉnh sửa</span></p>', '', '', '', '', '', '01:20:29 - 05/04/2014', 87, 1, 1, 0),
(107, 'Chính sách đổi trả hàng', 'chinh-sach-doi-tra-hang', '', '', '<p>\r\n	<span style="color: rgb(51, 51, 51); font-family: Arial, MyriadPro, Tahoma; line-height: 18px; text-align: justify;">Nội dung đang chờ cập nhật v&agrave; chỉnh sửa</span></p>\r\n', '', '', '', '', '', '04-12-2013', 82, 1, 1, 0),
(109, 'Hướng dẫn mua hàng online', 'huong-dan-mua-hang-online', '', 'sdfgsdgf', '<p style="text-align: justify; "><font color="#333333" face="Arial, MyriadPro, Tahoma"><span style="line-height: 18px;">dfgsdfdsfgfdgfgdgfvdcfvdcvcfvcfgvfcg`111212121212</span></font></p>', '', '', '', 'dsfgdfsgf', 'dfg', '23:39:20 - 04/06/2015', 153, 1, 1, 0),
(104, 'Địa chỉ giao dịch', 'dia-chi-giao-dich', '', '', '<p class="news_detail_description" style="margin: 0px; padding: 0px; color: gray; line-height: 18px; font-family: Tahoma, Geneva, sans-serif;">địa chỉ giao dịch tại 17 Lương Thế Vinh<br />\nliên hệ trực tiếp với cửa hàng nhé!</p>\n<div class="news_detail_full" style="margin: 0px 10px; padding: 0px; clear: left; color: rgb(54, 54, 54); line-height: 18px; text-align: justify; font-family: Tahoma, Geneva, sans-serif;">&#160;</div>', '', '', '', '', '', '01:20:19 - 05/04/2014', 107, 1, 1, 0),
(111, 'Các hình thức mua hàng', 'cac-hinh-thuc-mua-hang', '', '', '&#160;', '', '', '', 'key', 'des', '18:27:46 - 09/04/2014', 118, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_popup`
--

CREATE TABLE `tbl_popup` (
  `pop_id` int(1) NOT NULL,
  `pop_link` varchar(255) NOT NULL,
  `pop_images` varchar(255) NOT NULL,
  `pop_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_popup`
--

INSERT INTO `tbl_popup` (`pop_id`, `pop_link`, `pop_images`, `pop_status`) VALUES
(1, 'http://tanphatgroup.com/danh-muc/thiet-bi-oto-xe-may-619', '1453263144141.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `post_title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `post_title_rewrite` varchar(200) CHARACTER SET utf8 NOT NULL,
  `post_author` varchar(100) CHARACTER SET utf8 NOT NULL,
  `post_info` text CHARACTER SET utf8 NOT NULL,
  `post_value` longtext CHARACTER SET utf8 NOT NULL,
  `post_tags` varchar(255) CHARACTER SET utf8 NOT NULL,
  `post_tags_rewrite` varchar(255) CHARACTER SET utf8 NOT NULL,
  `post_image` varchar(200) CHARACTER SET utf8 NOT NULL,
  `post_status` int(10) DEFAULT NULL,
  `post_date` varchar(200) NOT NULL,
  `cate_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`post_id`, `post_title`, `post_title_rewrite`, `post_author`, `post_info`, `post_value`, `post_tags`, `post_tags_rewrite`, `post_image`, `post_status`, `post_date`, `cate_id`) VALUES
(1, 'Thiết kế website công ty', 'thiet-ke-website-cong-ty', 'admin', 'Thiết kế web công ty. <strong>Công ty thiết kế website North Star</strong> xin gửi tới Quý doanh nghiệp gói thiết kế web công ty', '<ul>\n    <li>Thời gian hoàn thành: 2 - 3 tuần</li>\n    <li>Bảo hành: Vĩnh viễn</li>\n    <li>Giao diện: Theo yêu cầu khách hàng</li>\n</ul>\n<br />\n<b>Gói website bao gồm:<br />\n<br />\n</b>\n<ul>\n    <li>Đăng ký 01 tên miền quốc tế dạng tencongty.com (hoặc .net, .org)</li>\n    <li>Đăng ký 01 năm lưu trữ website (hosting) dung lượng 200 MB, băng thông 5 GB (có thể nâng cấp dễ dàng khi cần)</li>\n    <li>Mã nguồn đã tối ưu hóa với máy tìm kiếm</li>\n    <li>Các URL chính đều rewrite tự động (VD: www.tenmien.com/ten-muc/tieu-de.htm)</li>\n    <li>Tư vấn quảng bá web vào Google</li>\n    <li>Thiết kế đồ họa giao diện</li>\n    <li>Lập trình các chức năng</li>\n    <li>Hướng dẫn, hỗ trợ quản trị thông tin</li>\n</ul>\n<br />\n<h3>Các chức năng của gói thiết kế website giới thiệu công ty</h3>\n<br />\n<ol>\n    <li>Trang chủ\n    <ul>\n        <li>Flash Slideshow</li>\n        <li>Giới thiệu tóm tắt</li>\n        <li>Các tin mới, tin nổi bật</li>\n        <li>Banner quảng cáo</li>\n    </ul>\n    </li>\n    <li>Giới thiệu\n    <ul>\n        <li>Các mục giới thiệu (không giới hạn số mục, tự động phân trang)</li>\n        <li>Xem chi tiết</li>\n        <li>Các thông tin giới thiệu khác</li>\n        <li>In ấn thông tin</li>\n        <li>Lưu thông tin</li>\n        <li>Download tin ra file Word</li>\n    </ul>\n    </li>\n    <li>Tin tức\n    <ul>\n        <li>Các mục tin (không giới hạn số mục, tự động phân trang)</li>\n        <li>Xem chi tiết</li>\n        <li>Tin mới hơn</li>\n        <li>Tin cũ hơn</li>\n        <li>In ấn tin</li>\n        <li>Lưu tin</li>\n        <li>Download tin ra file Word</li>\n    </ul>\n    </li>\n    <li>Album ảnh\n    <ul>\n        <li>Các album ảnh</li>\n        <li>Xem chi tiết các album</li>\n        <li>Xem hình ảnh dạng slideshow</li>\n        <li>Xem từng hình ảnh</li>\n    </ul>\n    </li>\n    <li>Tuyển dụng\n    <ul>\n        <li>Liệt kê các tin tuyển dụng (tiêu đề, vị trí, thời gian, hạn nộp hồ sơ)</li>\n        <li>Thông tin tuyển dụng khác</li>\n        <li>In ấn thông tin</li>\n        <li>Lưu thông tin</li>\n        <li>Download thông tin ra file Word</li>\n    </ul>\n    </li>\n    <li>Thăm dò ý kiến\n    <ul>\n        <li>Câu hỏi thăm dò</li>\n        <li>Các phương án lựa chọn</li>\n        <li>Xem kết quả</li>\n    </ul>\n    </li>\n    <li>Banner quảng cáo\n    <ul>\n        <li>Hiển thị banner theo nhiều vị trí, thứ tự</li>\n        <li>Mở liên kết khi click vào banner</li>\n    </ul>\n    </li>\n    <li>Tìm kiếm</li>\n    <li>Tiện ích\n    <ul>\n        <li>Thời tiết</li>\n        <li>Tỉ giá</li>\n    </ul>\n    </li>\n    <li>Thống kê\n    <ul>\n        <li>Số người đang tham gia</li>\n        <li>Số lượt truy cập</li>\n    </ul>\n    </li>\n    <li>Liên hệ\n    <ul>\n        <li>Thông tin liên hệ</li>\n        <li>Form liên hệ</li>\n    </ul>\n    </li>\n    <li>Bảng quản trị\n    <ul>\n        <li>Đăng nhập, thay đổi mật khẩu, thoát</li>\n        <li>Quản trị mục giới thiệu</li>\n        <li>Quản trị thông tin giới thiệu</li>\n        <li>Quản trị album</li>\n        <li>Quản trị hình ảnh</li>\n        <li>Quản trị mục tin tức</li>\n        <li>Quản trị tin tức</li>\n        <li>Quản trị tuyển dụng</li>\n        <li>Quản trị banner</li>\n        <li>Quản trị thăm dò</li>\n        <li>Theo dõi thống kê</li>\n        <li>Quản trị thanh menu (trên, dưới, trái)</li>\n        <li>Quản trị file upload</li>\n        <li><em>Giao diện tiếng Việt, dễ sử dụng, quản trị</em></li>\n        <li><em>Tích hợp bộ soạn thảo nội dung WYSIWYG tương tự Microsoft Words</em></li>\n        <li><em>* Quản trị: Tạo, sửa, xóa, cập nhật trạng thái, sắp xếp..</em></li>\n    </ul>\n    </li>\n</ol>', '', '', 'news_s207.png', 1, '26/03/2013', 52),
(8, 'Thiết kế website rao vặt', 'thiet-ke-website-rao-vat', 'admin', 'Công ty thiết kế North Star xin gửi tới quý khách hàng gói thiết kế web rao vặt. Dưới đây là một số thông tin mang tính tham khảo. Để được tư vấn giải pháp chi tiết theo từng yêu cầu cụ thể, quý khách vui lòng liên hệ với bộ phận tư vấn', '<span>Quý khách đang có nhu cầu&#160;</span><a href="http://northstar.vn/cac-goi-thiet-ke-web.html">thiết kế web</a><span>&#160;đăng tin giao vặt. Northstar giới thiệu với quý khách hàng gói&#160;</span><a href="http://northstar.vn/cac-goi-thiet-ke-web.html">thiết kế website</a><span> rao vặt với các tính năng cơ bản sau:<br />\n</span>\n<h3>&#160;</h3>\n<table width="100%" cellspacing="0" cellpadding="0" border="0">\n    <tbody>\n        <tr>\n            <td><strong>I. CHỨC NĂNG WEBSITE</strong></td>\n        </tr>\n        <tr>\n            <td>\n            <table width="100%" cellspacing="1" cellpadding="3" border="0" bgcolor="#dedede">\n                <tbody>\n                    <tr>\n                        <th bgcolor="#ffffff">STT</th>\n                        <th bgcolor="#ffffff">Tính năng</th>\n                        <th bgcolor="#ffffff">Chi tiết tính năng</th>\n                        <th bgcolor="#ffffff">Mô tả tính năng</th>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">1</td>\n                        <td bgcolor="#ffffff"><strong>Giao diện</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Logo</li>\n                            <li>Banner</li>\n                            <li>Khung website</li>\n                            <li>Hình ảnh</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Là bản thiết kế trang của website</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">2</td>\n                        <td bgcolor="#ffffff"><strong>Trang chủ</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh sách mục hiển thị</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Là trang chính hiển thị các thông tin quan trọng và tiêu điểm của website</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">3</td>\n                        <td bgcolor="#ffffff"><strong>Nhà cung cấp sản phẩm</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Bảng điều khiển tài khỏan</li>\n                            <li>Thông tin tài khoản</li>\n                            <li>Đăng ký</li>\n                            <li>Đăng nhập</li>\n                            <li>Sổ địa chỉ</li>\n                            <li>Đơn hàng – hóa đơn</li>\n                            <li>Thư đặt hàng</li>\n                            <li>Danh sách sản phẩm bán</li>\n                            <li>Chi tiết sản phẩm</li>\n                            <li>Danh sách khách hàng</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cho phép nhà cung cấp có thể mở tài khoản trên website để bán hàng, quản lý đơn hàng, nhận thông tin từ quản trị web, cho phép theo dõi sản phẩm và quản lý khách hàng trên website…vvv</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">4</td>\n                        <td bgcolor="#ffffff"><strong>Khách hàng</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Bảng điều khiển tài khoản</li>\n                            <li>Thông tin tài khoản</li>\n                            <li>Đăng ký</li>\n                            <li>Đăng nhập</li>\n                            <li>Sổ địa chỉ</li>\n                            <li>Đơn hàng – hóa đơn</li>\n                            <li>Thư đặt hàng</li>\n                            <li>Chi tiết sản phẩm</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cho phép khách hàng có thể mở tài khoản trên website để đặt hàng, quản lý đơn hàng, nhận thông tin từ Quản trị web …vvv</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">5</td>\n                        <td bgcolor="#ffffff"><strong>Sản phẩm</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh mục sản phẩm</li>\n                            <li>Danh sách sản phẩm</li>\n                            <li>Chi tiết sản phẩm</li>\n                            <li>Hình ảnh, video sản phẩm</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung cấp thông tin về danh mục sản phẩm và danh sách sản phẩm của doanh nghiệp</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">6</td>\n                        <td bgcolor="#ffffff"><strong>Sản phẩm bán chạy</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh sách sản phẩm bán chạy</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung cấp thông tin về các sản phẩm bán chạy nhất</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">7</td>\n                        <td bgcolor="#ffffff"><strong>Sản phẩm mới</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh sách sản phẩm mới</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung cấp thông tin về các sản phẩm mới</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">8</td>\n                        <td bgcolor="#ffffff"><strong>Sản phẩm khuyến mại</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh sách sản phẩm khuyến mại</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung cấp thông tin về các sản phẩm khuyến mại</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">9</td>\n                        <td bgcolor="#ffffff"><strong>Sản phẩm liên quan</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh sách sản phẩm liên quan</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung cấp thông tin về các sản phẩm liên quan</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">10</td>\n                        <td bgcolor="#ffffff"><strong>Lư sản phẩm</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh sách sản phẩm lưu</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cho phép khách hàng có thể lưu sản phẩm ưu thích sau khi xem</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">11</td>\n                        <td bgcolor="#ffffff"><strong>Đánh giá sản phẩm</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Đánh giá sản phẩm theo SAO</li>\n                            <li>Kết quả đánh giá</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cho phép khách hàng đánh giá các sản phẩm theo SAO.</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">12</td>\n                        <td bgcolor="#ffffff"><strong>So sánh sản phẩm</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh sách sản phẩm so sánh</li>\n                            <li>Kết quả so sánh</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cho phép khách hàng có thể so sánh sản phẩm</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">13</td>\n                        <td bgcolor="#ffffff"><strong>Top sản phẩm đã xem</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh sách sản phẩm đã xem</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung cấp tính năng xem danh sách sản phẩm đã truy cập</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">14</td>\n                        <td bgcolor="#ffffff"><strong>Trình bày sản phẩm</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Hiển thị kiểu lưới/danh sách</li>\n                            <li>Sắp xếp sản phẩm (theo giá, mã, tên, ngày đăng…)</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung cấp tính năng mở rộng hiển thị trên gian hàng</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">15</td>\n                        <td bgcolor="#ffffff"><strong>Đặt hàng</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Giỏ hàng</li>\n                            <li>Thông tin khách hàng</li>\n                            <li>Đặt hàng</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cho phép khách hàng đặt hàng trực tuyến thông qua website</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">16</td>\n                        <td bgcolor="#ffffff"><strong>Khuyến mại</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Sản phẩm giảm giá</li>\n                            <li>Sản phẩm tặng kèm</li>\n                            <li>Sản phẩm miễn phí</li>\n                            <li>Sản phẩm dùng thử</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung cấp tính năng cho phép doanh nghiệp có thể đặt các trương trình khuyến mại thông qua bán sản phẩm</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">17</td>\n                        <td bgcolor="#ffffff"><strong>Top 20 từ khóa tìm kiếm</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh sách từ khóa tìm kiếm</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung cấp tính năng hiển thị top 20 từ khóa tìm kiếm nhiều nhất (Từ khóa do ADMIN chỉ định)</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">18</td>\n                        <td bgcolor="#ffffff"><strong>Thông tin - Tin tức</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh mục thông tin</li>\n                            <li>Danh sách thông tin</li>\n                            <li>Chi tiết thông tin</li>\n                            <li>Hình ảnh – video kèm theo</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cho phép khách hàng đặt hàng trực tuyến thông qua website</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">19</td>\n                        <td bgcolor="#ffffff"><strong>Tiêu điểm</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh sách tin tiêu điểm</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung cấp thông tin tiêu điểm được lựa chọn trong danh sách thông tin – tin tức công ty cung cấp</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">20</td>\n                        <td bgcolor="#ffffff"><strong>Tin mới</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh sách tin mới</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung cấp thông tin mới từ danh sách thông tin – tin tức công ty cung cấp</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">21</td>\n                        <td bgcolor="#ffffff"><strong>Tin liên quan</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh sách tin liên quan</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung cấp thông tin liên quan đến tin tức khách hàng đang xem</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">22</td>\n                        <td bgcolor="#ffffff"><strong>Rao vặt</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh mục rao vặt</li>\n                            <li>Danh sách giao vặt</li>\n                            <li>Chi tiết rao vặt</li>\n                            <li>Hình ảnh – video</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cho phép khách hàng có thể đăng tin rao vặt thông qua website</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">23</td>\n                        <td bgcolor="#ffffff"><strong>Top 10 rao vặt</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh sách sản phẩm</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Hiển thị mỗi danh mục 10 tin đăng rao vặt tiêu biểu (có thể dùng cho khách hàng đăng tin vip)</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">24</td>\n                        <td bgcolor="#ffffff"><strong>Rao vặt mới</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh sách sản phẩm</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Hiển thị mỗi những tin đăng rao vặt mới nhất</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">25</td>\n                        <td bgcolor="#ffffff"><strong>Rao vặt liên quan</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh sách sản phẩm</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Hiển thị những tin đăng rao vặt liên quan đến tin đang xem.</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">26</td>\n                        <td bgcolor="#ffffff"><strong>Bộ lọc tìm kiếm sản phẩm</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh mục lọc sản phẩm</li>\n                            <li>Danh sách lọc</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cho phép khách hàng có thể tìm kiếm sản phẩm nhanh thông qua công cụ tìm kiếm</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">27</td>\n                        <td bgcolor="#ffffff"><strong>Tìm kiếm thông minh</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Tìm kiếm đa năng</li>\n                            <li>Tìm kiếm thông minh</li>\n                            <li>&#160;</li>\n                            <li>Kết quả tìm kiếm</li>\n                            <li>&#160;</li>\n                            <li>Liên kết đến thông tin</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cho phép khách hàng có thể tìm kiếm sản phẩm nhanh thông qua công cụ tìm kiếm. Công cụ tìm kiếm sẽ tự động liệt kê trên Textbox tìm kiếm.</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">28</td>\n                        <td bgcolor="#ffffff"><strong>Liên hệ</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Thông tin liên hệ</li>\n                            <li>Form gửi email liên hệ</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung cấp thông tin liên hệ của quản trị web cho khách hàng. Khách hàng có thể gửi email phản hồi cho quản trị web bằng Form gửi email</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">29</td>\n                        <td bgcolor="#ffffff"><strong>Thống kê trực tuyến</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Tổng lượt truy cập</li>\n                            <li>Số người đang online</li>\n                            <li>Số thành viên</li>\n                            <li>Tổng số gian hàng</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung cấp thông tin thống kê truy cập website cơ bản</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">30</td>\n                        <td bgcolor="#ffffff"><strong>Quảng cáo banner</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh sách banner</li>\n                            <li>Vị trí banner</li>\n                            <li>Link liên kết</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cho phép người quản trị có thể đặt các banner quảng cáo ở nhiều vị trí khác nhau.</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">31</td>\n                        <td bgcolor="#ffffff"><strong>Tối ứu hóa công cụ tìm kiếm</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Tối ưu hóa theo tiêu chuẩn Google.com.vn</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung cấp khả năng thân thiện với hệ thống tìm kiếm nâng cao hiệu quả quảng cáo SEO trenen Google, Yahoo, Bing…vvv</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">32</td>\n                        <td bgcolor="#ffffff"><strong>Gian hàng đảm bảo</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Gian hàng thường/gian hàng đảm bảo</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cho phép có thể mở rộng phân loại gian hàng. (tính năng này chỉ chạy dùng với tính năng Nhà Cung cấp).</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">33</td>\n                        <td bgcolor="#ffffff"><strong>Hệ thống địa lý – khu vực</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh sách tỉnh thành</li>\n                            <li>Danh sách huyện thi</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung cấp tính năng lọc doanh nghiệp và sản phẩm theo khu vực địa lý.</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">34</td>\n                        <td bgcolor="#ffffff"><strong>Đăng ký nhận tin</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Đăng ký email</li>\n                            <li>Hệ thống gửi email bản tin</li>\n                            <li>Thông tin phương thức vận chuyển</li>\n                            <li>Hệ thống tính cước vận chuyển</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cho phép khách hàng có thể nhận thông báo từ phía công ty</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">35</td>\n                        <td bgcolor="#ffffff"><strong>Hệ thống báo cáo</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Báo cáo nhà cung cấp</li>\n                            <li>Báo cáo đơn hàng</li>\n                            <li>Báo cáo sản phẩm</li>\n                            <li>Báo cáo khách hàng</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung cấp tính năng báo cáo chuyên nghiệp cho người quản trị.</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">36</td>\n                        <td bgcolor="#ffffff"><strong>Tỉ giá vàng (Tự động)</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Giá vàng mua vào</li>\n                            <li>Giá vàng bán ra</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung câp thông tin tỉ giá vàng hàng ngày.</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">37</td>\n                        <td bgcolor="#ffffff"><strong>Tỉ giá ngoại tệ (Tự động)</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Danh sách tỉ giá ngoại tệ</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung cấp thông tin tỉ giá ngoại tệ hàng ngày.</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">38</td>\n                        <td bgcolor="#ffffff"><strong>Thông tin thời tiết (Tự động)</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Thời tiết top tỉnh thành phố</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung cấp thông tin thời tiết về các thành phố lớn.</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">39</td>\n                        <td bgcolor="#ffffff"><strong>Bảng chứng khoán (Tự động)</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Bảng chứng khoản lấy tự động</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cung cấp thông tin giá chứng khoán hàng ngày.</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">40</td>\n                        <td bgcolor="#ffffff"><strong>Sitemap</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Sơ đồ cây thư mục web</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff">Cấp cấp tính năng tự động tạo sơ đồ web cho trang. Tính năng này sẽ liệt kê cấu trúc toàn bộ hệ thống web, giúp người dùng truy cập tiện lợi và dễ dàng….</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">41</td>\n                        <td bgcolor="#ffffff"><strong>Hệ thống email tự động</strong></td>\n                        <td bgcolor="#ffffff">\n                        <ul>\n                            <li>Email đăng ký</li>\n                            <li>Email đặt hàng</li>\n                            <li>Email quên mật khẩu</li>\n                            <li>Email nhận bản tin</li>\n                            <li>Email thông báo</li>\n                        </ul>\n                        </td>\n                        <td bgcolor="#ffffff" colspan="3">Cung cấp tính năng gửi email tự động cho người dùng thông qua website.</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff"><font color="red"><strong>Yêu cầu thêm</strong></font></td>\n                        <td bgcolor="#ffffff" align="center"><font color="red">Quý khách có thể yêu cầu thêm các module khác cho website doanh nghiệp của mình.</font></td>\n                    </tr>\n                </tbody>\n            </table>\n            </td>\n        </tr>\n        <tr>\n            <td>&#160;</td>\n        </tr>\n        <tr>\n            <td><strong>II.THÔNG TIN KỸ THUẬT</strong></td>\n        </tr>\n        <tr>\n            <td>- Trang web sử dụng kỹ thuật lập trình web động dựa trên ngôn ngữ kịch bản PHP<br />\n            - Thông tin được lưu trữ trên Hệ quản trị cơ sở dữ liệu PHP &amp; MYSQL Server.<br />\n            - Giao diện đồ họa: Photoshop CS5, Macromedial Flash Player.</td>\n        </tr>\n        <tr>\n            <td>&#160;</td>\n        </tr>\n        <tr>\n            <td><strong>III.HƯỚNG DẪN CHUẨN BỊ THÔNG TIN WEBSITE</strong></td>\n        </tr>\n        <tr>\n            <td>- Khi ký kết hợp đồng, Công ty Northstar sẽ hướng dẫn chuẩn bị nội dung cho trang web để khách hàng chuẩn bị.<br />\n            - Cho phép lập các thuộc tính sản phẩm top, bán chạy, hàng mới, khuyến mãi lên từng sản phẩm ( nếu có )</td>\n        </tr>\n        <tr>\n            <td>&#160;</td>\n        </tr>\n        <tr>\n            <td><strong>IV.CẬP NHẬT NỘI DUNG BAN ĐẦU</strong></td>\n        </tr>\n        <tr>\n            <td>Nếu thông tin sản phẩm của trang web được bàn giao trong thời gian 20 ngày sau khi ký Hợp đồng, Công ty Northstar sẽ hỗ trợ cập nhật ban đầu một số lượng về :<br />\n            - Thông tin sản phẩm lên trang web.<br />\n            - Ảnh sản phẩm lên trang web.<br />\n            - 01 bài viết giới thiệu về Công ty khách hàng.</td>\n        </tr>\n        <tr>\n            <td>&#160;</td>\n        </tr>\n        <tr>\n            <td><strong>V.ĐÀO TẠO, HƯỚNG DẪN SỬ DỤNG VÀ QUẢN TRỊ WEBSITE</strong></td>\n        </tr>\n        <tr>\n            <td>Thực hiện đào tạo tại Văn phòng Công ty khách hàng cho 02 cán bộ của khách hàng về sử dụng trang web (hoặc tại Công ty Northstar , hoặc qua Internet) bao gồm:<br />\n            - Đào tạo quản trị trang web trực tiếp trên máy tính. Thời gian: 02-03 ngày.<br />\n            - Khởi tạo các email trên máy chủ và hướng dẫn cài đặt, sử dụng email tại các máy trạm của khách hàng.<br />\n            - Cung cấp một tài liệu có đầy đủ 02 nội dung nói trên sau đào tạo.</td>\n        </tr>\n        <tr>\n            <td>&#160;</td>\n        </tr>\n        <tr>\n            <td><strong>VI.BÀN GIAO SẢN PHẨM</strong></td>\n        </tr>\n        <tr>\n            <td>- Bàn giao đĩa CD mã nguồn, tài liệu hướng dẫn sử dụng ( nếu có nhu cầu)<br />\n            - Ký biên bản nghiệm thu hợp đồng và chính thức đưa website vào sử dụng<br />\n            - Chuyển hóa đơn GTGT cho khách hàng.</td>\n        </tr>\n        <tr>\n            <td>&#160;</td>\n        </tr>\n        <tr>\n            <td><strong>VII.BẢO HÀNH WEBISTE</strong></td>\n        </tr>\n        <tr>\n            <td>- Dịch vụ bảo hành website có thời gian 05 năm từ ngày trang web được bàn giao. Cách thức nhận yêu cầu bảo hành qua email, điện thoại, Fax.<br />\n            - Phạm vi bảo hành bao gồm việc sửa lỗi của trang web nếu sai sót so với tính năng thiết kế, phát sinh lỗi trong khi sử dụng.<br />\n            - Thông báo cho khách hàng gia hạn sử dụng tên miền và duy trì hosting trước 01 tháng tại thời điểm hết hạn.</td>\n        </tr>\n        <tr>\n            <td>&#160;</td>\n        </tr>\n        <tr>\n            <td><strong>VII.HỖ TRỢ MIỄN PHÍ</strong></td>\n        </tr>\n        <tr>\n            <td>- Bảo hành source code 01 năm hoặc trong thời gian lưu trữ Hostinh tại Northstar.<br />\n            - Đăng ký tại các công cụ tìm kiếm phổ biến : Google …<br />\n            - Hướng dẫn biên tập miễn phí trong 01 tháng đầu tiên khi đã bàn giao website cho khách hàng.<br />\n            - Cài đặt email cho khách hàng.</td>\n        </tr>\n        <tr>\n            <td>&#160;</td>\n        </tr>\n        <tr>\n            <td><strong>IX.THỜI GIAN VÀ LỊCH TRÌNH: 6 - 8 ngày làm việc</strong></td>\n        </tr>\n        <tr>\n            <td>- Ngày 1-2: Hoàn thành giao diện thiết kế. - Ngày thứ 2-4: Lập trình website. - Ngày thứ 5: Chạy thử nghiệm và chỉnh sửa. - Ngày thứ 6: Hướng dẫn sử dụng, bàn giao - Bảo hành source code 01 năm hoặc trong thời gian lưu trữ Hosting tại Northstar - Đăng ký tại các công cụ tìm kiếm phổ biến : Google…</td>\n        </tr>\n        <tr>\n            <td>&#160;</td>\n        </tr>\n        <tr>\n            <td><strong>X.BÁO GIÁ VÀ THANH TOÁN</strong></td>\n        </tr>\n        <tr>\n            <td><strong>a. Báo giá:</strong><br />\n            <table cellspacing="1" cellpadding="3" border="0" bgcolor="#131313" align="center">\n                <tbody>\n                    <tr>\n                        <th bgcolor="#ffffff">STT</th>\n                        <th bgcolor="#ffffff">Hạng mục</th>\n                        <th bgcolor="#ffffff" align="center">Đơn giá&#160;<br />\n                        ( VNĐ )</th>\n                        <th bgcolor="#ffffff" align="center">Số lượng</th>\n                        <th bgcolor="#ffffff" align="center">Thành Tiền&#160;<br />\n                        ( VNĐ )</th>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">1</td>\n                        <td bgcolor="#ffffff">Khảo sát, Phân tích, Thiết kế và lập trình website</td>\n                        <td bgcolor="#ffffff">Liên hệ</td>\n                        <td bgcolor="#ffffff">1</td>\n                        <td bgcolor="#ffffff">Liên hệ</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">2</td>\n                        <td bgcolor="#ffffff">Email</td>\n                        <td bgcolor="#ffffff">Miễn phí</td>\n                        <td bgcolor="#ffffff">&#160;</td>\n                        <td bgcolor="#ffffff">Miễn phí</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">3</td>\n                        <td bgcolor="#ffffff">Máy chủ lưu trữ website</td>\n                        <td bgcolor="#ffffff">Liên hệ</td>\n                        <td bgcolor="#ffffff">12</td>\n                        <td bgcolor="#ffffff">Liên hệ</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff">4</td>\n                        <td bgcolor="#ffffff">Đào tạo sử dung, Tài liệu hướng dẫn, CD mã nguồn, Cập nhật nội dung</td>\n                        <td bgcolor="#ffffff">Miễn phí</td>\n                        <td bgcolor="#ffffff">&#160;</td>\n                        <td bgcolor="#ffffff">Miễn phí</td>\n                    </tr>\n                    <tr>\n                        <td bgcolor="#ffffff" colspan="2"><strong>Tổng cộng</strong></td>\n                        <td bgcolor="#ffffff" colspan="3">&#160;</td>\n                    </tr>\n                </tbody>\n            </table>\n            <br />\n            <strong>b. Thanh toán:</strong>&#160;thanh toán làm 2 lần<br />\n            -&#160;<i>Lần 01</i>: Thanh toán 60% giá trị hợp đồng sau khi ký hợp đồng. Đây là điều kiện bắt buộc để bắt đầu dịch vụ<br />\n            -&#160;<i>Lần 02</i>: Thanh toán 40% giá trị hợp đồng ngay sau khi website xây dựng hoàn chỉnh, đưa vào hoạt động.<br />\n            -&#160;<i>Phương thức thanh toán</i>: Tiền VNĐ( Trực tiếp bằng tiền mặt hoặc chuyển khoản)</td>\n        </tr>\n        <tr>\n            <td><strong>Công Ty TNHH North Star Media</strong>&#160;sẽ mang lại cho quý khách một sản phẩm với những chức năng phù hợp và giao diện độc đáo nhằm mang lại hiệu quả cao trong công việc kinh doanh của khách hàng.</td>\n        </tr>\n    </tbody>\n</table>\n<h3><strong><u><br />\n</u></strong></h3>\n<center><h3><strong><u>Thông tin liên hệ</u></strong></h3>\n<div><strong>Công ty TNHH North Star Media.</strong></div>\n<h4><span>Địa chỉ : Số 100 - Kiều Mai - Phú Diễn - Hà Nội</span></h4>\n<div><strong>Hotline - 0974.136.509 Hoặc 0976.256.106</strong></div>\n</center>\n<br />\n<h3>&#160;</h3>\n<span><br type="_moz" />\n</span>', '', '', 'rao_vat.gif', NULL, '19/03/2013', 52),
(2, 'Thiết kế website thương mại điện tử', 'thiet-ke-website-thuong-mai-dien-tu', 'admin', 'Thích hợp cho các doanh nghiệp chuyên về mua bán sản phẩm, hàng hóa qua mạng, hoặc các sàn giao dịch sản phẩm, hàng hóa. Cung cấp khả năng tích hợp gian hàng trực tuyến, rao vặt, trang tin tức, diễn đàn và nhiều chức năng khác tạo thành một cộng đồng kinh doanh trực tuyến mà chúng ta gọi chung là <b>Thương Mại Điện Tử</b>.', '<ul>\n    <li>Thời gian hoàn thành: 3 - 6 tuần</li>\n    <li>Bảo hành: Vĩnh viễn</li>\n</ul>\n<br />\n<b>Gói website bao gồm:</b>\n<ul>\n    <li>Đăng ký 01 tên miền quốc tế dạng tencongty.com (hoặc .net, .org)</li>\n    <li>Đăng ký 01 năm lưu trữ website (hosting) dung lượng 200 MB (có thể nâng cấp dễ dàng khi cần)</li>\n    <li>Mã nguồn đã tối ưu hóa với máy tìm kiếm</li>\n    <li>Các URL chính đều rewrite tự động (VD: www.tenmien.com/muc-san-pham/ten-san-pham.htm)</li>\n    <li>Tư vấn quảng bá web đạt thứ hạng cao ở Google</li>\n    <li>Thiết kế đồ họa giao diện</li>\n    <li>Lập trình các chức năng</li>\n    <li>Hướng dẫn, hỗ trợ quản trị thông tin</li>\n</ul>\n<br />\n<h3>Các chức năng của gói thiết kế website thương mại điện tử</h3>\n<br />\n<ol>\n    <li>Trang chủ</li>\n    <li>Giới thiệu\n    <ul>\n        <li>Các mục giới thiệu (không giới hạn số mục, tự động phân trang)</li>\n        <li>Xem chi tiết</li>\n        <li>Các thông tin giới thiệu khác</li>\n        <li>In ấn thông tin</li>\n        <li>Lưu thông tin</li>\n        <li>Download tin ra file Word</li>\n    </ul>\n    </li>\n    <li>Sản phẩm\n    <ul>\n        <li>Các mục sản phẩm (không giới hạn số mục, tự động phân trang)</li>\n        <li>Xem chi tiết sản phẩm\n        <ul>\n            <li>Đặc điểm, thông tin giới thiệu sản phẩm</li>\n            <li>Thời gian cập nhật</li>\n            <li>Số lượt xem sản phẩm</li>\n            <li>Các sản phẩm khác cùng mục</li>\n            <li>In ấn thông tin</li>\n            <li>Lưu sản phẩm</li>\n        </ul>\n        </li>\n    </ul>\n    </li>\n    <li>Giỏ hàng\n    <ul>\n        <li>Thêm sản phẩm vào giỏ</li>\n        <li>Xóa sản phẩm trong giỏ</li>\n        <li>Sửa số lượng sản phẩm</li>\n        <li>Tự động tính giá tiền</li>\n    </ul>\n    </li>\n    <li>Đặt hàng\n    <ul>\n        <li>Gửi đặt hàng theo đơn hàng (gồm các sản phẩm đã có trong Giỏ) vào email</li>\n    </ul>\n    </li>\n    <li>Tìm kiếm\n    <ul>\n        <li>Tìm kiếm theo từ khóa</li>\n    </ul>\n    </li>\n    <li>Hỗ trợ trực tuyến\n    <ul>\n        <li>Hiển thị thông tin hỗ trợ (Yahoo! Messenger, Skype, Hotline)</li>\n    </ul>\n    </li>\n    <li>Banner quảng cáo\n    <ul>\n        <li>Hiển thị banner theo nhiều vị trí, thứ tự</li>\n        <li>Mở liên kết khi click vào banner</li>\n    </ul>\n    </li>\n    <li>Tin tức\n    <ul>\n        <li>Các mục tin (không giới hạn số mục, tự động phân trang)</li>\n        <li>Xem chi tiết</li>\n        <li>Tin mới hơn</li>\n        <li>Tin cũ hơn</li>\n        <li>In ấn tin</li>\n        <li>Lưu tin</li>\n        <li>Download tin ra file Word</li>\n    </ul>\n    </li>\n    <li>Thăm dò ý kiến\n    <ul>\n        <li>Câu hỏi thăm dò</li>\n        <li>Các phương án lựa chọn</li>\n        <li>Xem kết quả</li>\n    </ul>\n    </li>\n    <li>Tiện ích\n    <ul>\n        <li>Thời tiết</li>\n        <li>Tỉ giá</li>\n    </ul>\n    </li>\n    <li>Thống kê\n    <ul>\n        <li>Số người đang tham gia</li>\n        <li>Số lượt truy cập</li>\n    </ul>\n    </li>\n    <li>Liên hệ\n    <ul>\n        <li>Thông tin liên hệ</li>\n        <li>Form liên hệ</li>\n    </ul>\n    </li>\n    <li>Bảng quản trị\n    <ul>\n        <li>Đăng nhập, thay đổi mật khẩu, thoát</li>\n        <li>Quản trị mục giới thiệu</li>\n        <li>Quản trị thông tin giới thiệu</li>\n        <li>Quản trị mục sản phẩm</li>\n        <li>Quản trị thông tin sản phẩm</li>\n        <li>Quản trị mục tin tức</li>\n        <li>Quản trị tin tức</li>\n        <li>Quản trị banner</li>\n        <li>Quản trị thăm dò</li>\n        <li>Theo dõi thống kê</li>\n        <li>Quản trị thanh menu (trên, dưới, trái)</li>\n        <li>Quản trị file upload</li>\n        <li><em>Giao diện tiếng Việt, dễ sử dụng, quản trị</em></li>\n        <li><em>Tích hợp bộ soạn thảo nội dung WYSIWYG tương tự Microsoft Words</em></li>\n        <li><em>* Quản trị: Tạo, sửa, xóa, cập nhật trạng thái, sắp xếp..</em></li>\n        <li>&#160;</li>\n    </ul>\n    </li>\n</ol>', '', '', '39-e-commerce.jpg', 1, '26/03/2013', 52),
(9, 'Thiết kế logo chuyên nghiệp', 'thiet-ke-logo-chuyen-nghiep', 'admin', 'Thiết kế web công ty. Công ty thiết kế website North Star xin gửi tới Quý doanh nghiệp gói thiết kế web công ty', '&#160;\n<table width="100%" border="0" cellpadding="3" cellspacing="3"  Verdana, Arial, Helvetica, sans-serif; background-color: rgb(240, 240, 240);">\n    <tbody>\n        <tr>\n            <td width="180" align="right" valign="middle"><span class="style80 style63"  rgb(0, 102, 153);"><strong>Giai đoạn 1 :</strong></span></td>\n            <td width="700"><span class="style80 style63"  rgb(0, 102, 153);"><strong>Thiết kế</strong></span></td>\n        </tr>\n        <tr>\n            <td width="180" align="right" valign="top">&#160;</td>\n            <td width="700" align="left" valign="top">\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">North Star thiết kế tối thiểu 4 mẫu đen trắng (hoặc màu), khách hàng lựa chọn&#160;1 đến 3 mẫu để chỉnh sửa. Trường hợp khách hàng không chọn được mẫu nào trong lần thiết kế lần đầu tiên, North Star sẽ thực hiện thiết kế lại lần 2, số lượng là 3 mẫu logo điều chỉnh tối đa khi nào khách hàng thấy vừa ý thì thôi</span></p>\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">Mẫu thiết kế sẽ được thực hiện trong vòng 7 ngày (hoặc theo thỏa thuận của hai bên)</span></p>\n            </td>\n        </tr>\n    </tbody>\n</table>\n<table width="100%" border="0" cellpadding="3" cellspacing="3"  Verdana, Arial, Helvetica, sans-serif; background-color: rgb(240, 240, 240);">\n    <tbody>\n        <tr>\n            <td width="180" align="right" valign="middle"><span class="style63"  rgb(0, 102, 153);"><strong>Giai đoạn 2 :</strong></span></td>\n            <td width="700"><span class="style15 style63"  rgb(0, 102, 153);"><strong>Phối màu</strong></span></td>\n        </tr>\n        <tr>\n            <td width="180" align="right" valign="top">&#160;</td>\n            <td width="700" align="left" valign="top">\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">Điều chỉnh mẫu được chọn theo ý của khách hàng và thực hiện phối 03 mẫu màu, căn cứ theo mẫu trắng đen mà khách hàng đã chọn.</span></p>\n            </td>\n        </tr>\n    </tbody>\n</table>\n<table width="100%" border="0" cellpadding="3" cellspacing="3"  Verdana, Arial, Helvetica, sans-serif; background-color: rgb(240, 240, 240);">\n    <tbody>\n        <tr>\n            <td width="180" align="right" valign="middle"><span class="style80 style63"  rgb(0, 102, 153);"><strong>Giai đoạn 3 :</strong></span></td>\n            <td width="700"><span class="style63 style5"  rgb(0, 102, 153);"><strong>Hoàn thiện</strong></span></td>\n        </tr>\n        <tr>\n            <td width="180" align="right" valign="top">&#160;</td>\n            <td width="700" align="left" valign="top">\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">Căn cứ theo mẫu Logo khách hàng chọn để thiết kế:</span></p>\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">- Danh thiếp (Card)</span></p>\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">- Bao thư nhỏ (120 x 220)</span></p>\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">-&#160;Bao thư khổ trung (170 x 220)</span></p>\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">-&#160;Bao thư lớn (250 x 350)</span></p>\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">- Giấy tiêu đề (200 x 300)</span></p>\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">- Thẻ nhân viên</span></p>\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">- Mẫu thư điện tử (E-mail)</span></p>\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">- Bảng hiệu công ty.</span></p>\n            </td>\n        </tr>\n    </tbody>\n</table>\n<table width="100%" border="0" cellpadding="3" cellspacing="3"  Verdana, Arial, Helvetica, sans-serif; background-color: rgb(240, 240, 240);">\n    <tbody>\n        <tr>\n            <td width="180" align="right" valign="middle"><span class="style80 style63"  rgb(0, 102, 153);"><strong>Giai đoạn 4 :</strong></span></td>\n            <td width="700"><span class="style63 style5"  rgb(0, 102, 153);"><strong>Kết thúc</strong></span></td>\n        </tr>\n        <tr>\n            <td width="180" align="right" valign="top">&#160;</td>\n            <td width="700" align="left" valign="top">\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">Sau khi có kết quả chọn màu, North Star bàn giao cho khách hàng một bộ hồ sơ gồm:</span></p>\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">+ Sách hướng dẫn sử dụng logo</span></p>\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">+ Bản tóm tắt ý nghĩa logo</span></p>\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">+ Hệ thống lưới caro hướng dẫn tỉ lệ quy cách</span></p>\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">+ Hệ thống màu quy định màu trong sử dụng logo</span>&#160;<span class="style71"  rgb(74, 140, 132);">(hệ màu CMYK, RGB, PANTONE)</span></p>\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">+ Các tình huống kích thước tỷ lệ &amp; màu nền không nên sử dụng trong logo</span></p>\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">+ Quy định giới hạn không gian logo</span></p>\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">+ Kích thước tối thiểu của logo</span></p>\n            <p class="style68"><span class="style71"  rgb(74, 140, 132);">+ Lưu hồ sơ gốc vào đĩa CDR có đuôi JPG, CorelDRAW hoặc Adobe IIlustrator.</span></p>\n            <p class="style68"><span class="style68 style82"><span class="style78"  rgb(102, 102, 102);"><img src="http://www.vietnamstart.com/images_2008/1-muiten.jpg" width="9" height="9" alt="" />&#160;Để biết thêm chi tiết vui lòng liên hệ với chúng tôi<br />\n            </span></span><br />\n            &#160;</p>\n            </td>\n        </tr>\n    </tbody>\n</table>', '', '', 'graphic-design.jpeg', NULL, '26/03/2013', 88),
(10, 'Thiết kế bao bì sản phẩm', 'thiet-ke-bao-bi-san-pham', 'admin', '', '&#160;', '', '', 'Colorful-Floral-Design.jpg', NULL, '26/02/2013', 88),
(11, 'Thiết kế catalogue - slogan', 'thiet-ke-catalogue---slogan', 'admin', '', '&#160;', '', '', 'design_services.jpg', NULL, '19/03/2013', 88);
INSERT INTO `tbl_posts` (`post_id`, `post_title`, `post_title_rewrite`, `post_author`, `post_info`, `post_value`, `post_tags`, `post_tags_rewrite`, `post_image`, `post_status`, `post_date`, `cate_id`) VALUES
(13, 'Seo website top 10 google', 'seo-website-top-10-google', 'admin', 'Bạn đang tìm kiếm một dịch vụ SEO Top 10 mà có thể giúp đảm bảo thứ hạng website của bạn trên các bộ máy tìm kiếm với thời gian thực hiện và giá cả hợp lý? GoodSEO.vn là một lựa chọn hàng đầu cho bạn và dưới đây là các lý do tại sao các bạn nên lựa chọn dịch vụ SEO Top 10 của chúng tôi để giúp cho website của bạn đạt được thứ hạng cao trên kết quả tìm kiếm.', '&#160;', '', '', 'seo.jpg', NULL, '27/02/2013', 124),
(16, 'Hosting linux', 'hosting-linux', 'admin', '', '&#160;', '', '', 'Linux-Web-Hosting1.jpg', NULL, '27/02/2013', 126),
(5, 'Thiết kế website bất động sản', 'thiet-ke-website-bat-dong-san', 'admin', 'Giải pháp <strong>thiết kế website bất động sản</strong> sẽ đem lại sự lựa chọn tốt nhất cho các doanh nghiệp bất động sản để xây dựng một website dự án bất động sản nhằm quảng bá dự án và cung cấp thông tin cho nhà đầu tư. <strong>Công ty thiết kế web chuyên nghiệp North Star</strong> chuyên thiết kế web bất động sản cho các công ty xây dựng, bất động sản, nhà đất hàng đầu tại Việt Nam.', '<ul>\n    <li>Thời gian hoàn thành: 3 - 6 tuần</li>\n    <li>Bảo hành: Vĩnh viễn</li>\n    <li>Giao diện: Theo yêu cầu khách hàng</li>\n</ul>\n<br />\n<b>Gói website bao gồm:</b>\n<ul>\n    <li>Đăng ký 01 tên miền quốc tế dạng tencongty.com (hoặc .net, .org)</li>\n    <li>Đăng ký 01 năm lưu trữ website (hosting) dung lượng 200 MB (có thể nâng cấp dễ dàng khi cần)</li>\n    <li>Mã nguồn đã tối ưu hóa với máy tìm kiếm</li>\n    <li>Các URL chính đều rewrite tự động (VD: www.tenmien.com/muc-san-pham/ten-san-pham.htm)</li>\n    <li>Tư vấn quảng bá web vào Google</li>\n    <li>Thiết kế đồ họa giao diện</li>\n    <li>Lập trình các chức năng</li>\n    <li>Hướng dẫn, hỗ trợ quản trị thông tin</li>\n</ul>\n<br />\n<h3>Các chức năng của gói thiết kế website bất động sản</h3>\n<br />\n<ol>\n    <li>Trang chủ</li>\n    <li>Giới thiệu\n    <ul>\n        <li>Các mục giới thiệu (không giới hạn số mục, tự động phân trang)</li>\n        <li>Xem chi tiết</li>\n        <li>Các thông tin giới thiệu khác</li>\n        <li>In ấn thông tin</li>\n        <li>Lưu thông tin</li>\n        <li>Download tin ra file Word</li>\n    </ul>\n    </li>\n    <li>Giới thiệu BĐS</li>\n    <li>Phân loại BĐS: Loại, Mức giá, Địa điểm...</li>\n    <li>Tìm kiếm nhanh</li>\n    <li>Tìm kiếm chi tiết theo phân loại</li>\n    <li>Banner quảng cáo\n    <ul>\n        <li>Hiển thị banner theo nhiều vị trí, thứ tự</li>\n        <li>Mở liên kết khi click vào banner</li>\n    </ul>\n    </li>\n    <li>Hỗ trợ trực tuyến\n    <ul>\n        <li>Hiển thị thông tin hỗ trợ (Yahoo! Messenger, Skype, Hotline)</li>\n    </ul>\n    </li>\n    <li>Tin tức\n    <ul>\n        <li>Các mục tin (không giới hạn số mục, tự động phân trang)</li>\n        <li>Xem chi tiết</li>\n        <li>Tin mới hơn</li>\n        <li>Tin cũ hơn</li>\n        <li>In ấn tin</li>\n        <li>Lưu tin</li>\n        <li>Download tin ra file Word</li>\n    </ul>\n    </li>\n    <li>Download</li>\n    <li>Thăm dò ý kiến\n    <ul>\n        <li>Câu hỏi thăm dò</li>\n        <li>Các phương án lựa chọn</li>\n        <li>Xem kết quả</li>\n    </ul>\n    </li>\n    <li>Tiện ích\n    <ul>\n        <li>Thời tiết</li>\n        <li>Tỉ giá</li>\n    </ul>\n    </li>\n    <li>Thống kê\n    <ul>\n        <li>Số người đang tham gia</li>\n        <li>Số lượt truy cập</li>\n    </ul>\n    </li>\n    <li>Liên hệ\n    <ul>\n        <li>Thông tin liên hệ</li>\n        <li>Form liên hệ</li>\n    </ul>\n    </li>\n    <li>Bảng quản trị\n    <ul>\n        <li>Đăng nhập, thay đổi mật khẩu, thoát</li>\n        <li>Quản trị mục giới thiệu</li>\n        <li>Quản trị thông tin giới thiệu</li>\n        <li>Quản trị mục bất động sản</li>\n        <li>Quản trị loại bất động sản</li>\n        <li>Quản trị thông tin bất động sản</li>\n        <li>Quản trị mục tin tức</li>\n        <li>Quản trị tin tức</li>\n        <li>Quản trị banner</li>\n        <li>Quản trị thăm dò</li>\n        <li>Theo dõi thống kê</li>\n        <li>Quản trị thanh menu (trên, dưới, trái)</li>\n        <li>Quản trị file upload</li>\n        <li><em>Giao diện tiếng Việt, dễ sử dụng, quản trị</em></li>\n        <li><em>Tích hợp bộ soạn thảo nội dung WYSIWYG tương tự Microsoft Words</em></li>\n        <li><em>* Quản trị: Tạo, sửa, xóa, cập nhật trạng thái, sắp xếp..</em></li>\n    </ul>\n    </li>\n</ol>', '', '', 'batdongsan.jpeg', NULL, '26/03/2013', 52),
(17, 'Phần mềm quản lý doanh nghiệp', 'phan-mem-quan-ly-doanh-nghiep', 'admin', 'Được thiết kế và xây dựng để quản lý tự động các hoạt động cơ bản trong công ty, từ mua hàng, bán hàng, kho hàng, kế toán… theo một quy trình chặt chẽ. Thiết kế để triển khai và áp dụng cho mọi loại hình và quy mô doanh nghiệp', '&#160;', '', '', 'SETUP.jpg', NULL, '04/03/2013', 149),
(6, 'Thiết kế website bán hàng', 'thiet-ke-website-ban-hang', 'admin', '<strong>Thiết kế website bán hàng trực tuyến</strong> là gói website dành cho các công ty, cửa hàng, cá nhân có nhu cầu bán hàng trực tuyến, tiếp cận với hàng triệu khách hàng thông qua Internet. Chỉ cần có một số vốn không nhiều, doanh nghiệp vẫn có thể thành công lớn trong việc nâng cao khả năng cạnh tranh, gia tăng lợi nhuận. Điều quan trọng là phải có một <strong>website bán hàng</strong> tốt và chiến lược marketing hữu hiệu.', '<div align="justify"><font face="Arial" size="2">Công ty chúng tôi sẽ giúp quý&#160;</font><font face="Arial" size="2">doanh nghiệp xây dựng một&#160;<strong>website</strong></font><strong>&#160;bán hàng trực tuyến</strong>&#160;như thiết kế web bán hàng thời trang,&#160;<strong>thiết kế web bán hàng</strong>&#160;nữ trang,&#160;<em>thiết kế web bán hàng điện thoại di động</em>... với đầy đủ các chức năng và chi phí hợp lý nhưng thấp hơn nhiều so với chi phí đầu tư và quảng cáo sản phẩm truyền thống. Một hệ thống bán hàng hiện đại, trực tuyến, mọi quy trình khép kín một cách khoa học, bài bản.</div>\n<p align="justify"><font face="Arial" size="2">Hệ thống quản trị hàng hóa, xuất, nhập, khuyến mãi, giảm giá, quản lý khách hàng, quản lý đơn hàng hoàn hảo. Tất cả nằm trong phần quản trị mà nhân viên của quý doanh nghiệp có thể tự thao tác một cách dễ dàng. Một&#160;<strong>website bán hàng trực tuyến</strong>, một siêu thị bán hàng trực tuyến với vô hạn danh mục hàng hóa, vô hạn chủng loại hàng hóa. Tất cả được quản lý tự động, chính xác.<br />\n<br />\n</font></p>\n<p><font face="Arial" size="2">Các chức năng cụ thể của g<font size="2">ói&#160;<strong>thi<font size="2">ết k<font size="2">ế&#160;</font></font></strong></font><strong>website bán hàng</strong>&#160;qua mạng:<br />\n<br type="_moz" />\n</font></p>\n<p><font face="Arial"><font size="2">1. Thiết kế đồ họa, giao diện:&#160;</font></font><font face="Arial"><font size="2"><font face="Arial" size="2">của g<font size="2">ói&#160;<strong>thi<font size="2">ết k<font size="2">ế&#160;</font></font></strong></font><strong>website bán hàng</strong></font><br />\n- Thiết kế giao diện đẹp có Flash.<br />\n<br type="_moz" />\n</font></font></p>\n<p><font face="Arial"><font size="2">2. Module giới thiệu công ty (&#160;</font></font><font face="Arial"><font size="2"><font face="Arial" size="2">của g<font size="2">ói&#160;<strong>thi<font size="2">ết k<font size="2">ế&#160;</font></font></strong></font><strong>website bán hàng</strong>&#160;)&#160;</font>:&#160;&#160;<br />\n- Trình bày thông tin&#160;</font></font><font face="Arial" size="2">giới thiệu</font><font face="Arial" size="2">&#160;về công ty, lĩnh vực hoạt động, cơ cấu tổ chức, các đơn vị thành viên...<br />\n<br type="_moz" />\n</font></p>\n<p><font face="Arial"><font size="2">3. Module giới thiệu về sản phẩm, dịch vụ:</font></font><font face="Arial"><font size="2"><font face="Arial"><font size="2">(&#160;</font></font><font face="Arial"><font size="2"><font face="Arial" size="2">của g<font size="2">ói&#160;<strong>thi<font size="2">ết k<font size="2">ế&#160;</font></font></strong></font><strong>website bán hàng</strong>&#160;)<br />\n</font></font></font></font></font>- Cung cấp cho khách hàng những thông tin cần thiết về các sản phẩm dịch vụ được chia theo danh mục mỗi danh mục có nhiều sản phẩm bên trong trình bày dưới dạng list sản phẩm,dịch vụ. Các thành phần này có thể bao gồm hình ảnh, mô tả và giá thành và không giới hạn danh mục sản phẩm.<br />\n&#160;</p>\n<p><font face="Arial"><font size="2">4. Module khách hàng - đối tác:&#160;&#160;</font></font><font face="Arial"><font size="2"><font face="Arial"><font size="2">(&#160;</font></font><font face="Arial"><font size="2"><font face="Arial" size="2">của g<font size="2">ói&#160;<strong>thi<font size="2">ết k<font size="2">ế&#160;</font></font></strong></font><strong>website bán hàng</strong>&#160;)</font></font></font></font></font><br />\n- Giúp đưa thông tin về&#160;<font face="Arial" size="2">đối tác</font><font face="Arial" size="2">,&#160;</font><font face="Arial" size="2">khách hàng</font><font face="Arial" size="2">, dự án của công ty.<br />\n<br type="_moz" />\n</font></p>\n<p><font face="Arial"><font size="2">5. Module quản lý sản phẩm:&#160;</font></font><font face="Arial"><font size="2"><font face="Arial"><font size="2">(&#160;</font></font><font face="Arial"><font size="2"><font face="Arial" size="2">của g<font size="2">ói&#160;<strong>thi<font size="2">ết k<font size="2">ế&#160;</font></font></strong></font><strong>website bán hàng</strong>&#160;)<br />\n</font></font></font></font></font>- Có thể thêm/xóa/sửa các thể loại sản phẩm, không giới hạn số lượng.<br />\n&#160;</p>\n<p><font face="Arial"><font size="2">6. Module giỏ hàng - Shopping Cart:&#160;</font></font><font face="Arial"><font size="2"><font face="Arial"><font size="2">(&#160;</font></font><font face="Arial"><font size="2"><font face="Arial" size="2">của g<font size="2">ói&#160;<strong>thi<font size="2">ết k<font size="2">ế&#160;</font></font></strong></font><strong>website bán hàng</strong>&#160;)<br />\n</font></font></font></font></font>- Bao gồm các chức năng giỏ hàng, đơn hàng, quản lý khách hàng… Khách hàng có thể chọn hàng và đăng ký đặt mua hàng một cách dễ dàng.<br />\n&#160;</p>\n<p><font face="Arial"><font size="2">&#160;7. Module sản phẩm mới:</font></font><font face="Arial"><font size="2"><font face="Arial"><font size="2">(&#160;</font></font><font face="Arial"><font size="2"><font face="Arial" size="2">của g<font size="2">ói&#160;<strong>thi<font size="2">ết k<font size="2">ế&#160;</font></font></strong></font><strong>website bán hàng</strong>&#160;)<br />\n</font></font></font></font></font>&#160; - Hiển thị các sản phẩm/dịch vụ mới nhất của công ty bằng các hình ảnh tiêu biểu, khách hàng có thể click vào hình sản phẩm để xem thông tin và hình ảnh mô tả chi tiết về sản phẩm đó.<br />\n&#160;</p>\n<p><font face="Arial"><font size="2">8. Module tiện ích, thăm dò ý kiến:&#160;&#160;</font></font><font face="Arial"><font size="2"><font face="Arial"><font size="2">(&#160;</font></font><font face="Arial"><font size="2"><font face="Arial" size="2">của g<font size="2">ói&#160;<strong>thi<font size="2">ết k<font size="2">ế&#160;</font></font></strong></font><strong>website bán hàng</strong>&#160;)<br />\n</font></font></font></font></font>- Giúp bạn thu thập được những phản hồi của khách hàng một cách hiệu quả nhất<br />\n&#160;</p>\n<p><font face="Arial"><font size="2">9.&#160; Module tìm kiếm:</font></font><font face="Arial"><font size="2"><font face="Arial"><font size="2">(&#160;</font></font><font face="Arial"><font size="2"><font face="Arial" size="2">của g<font size="2">ói&#160;<strong>thi<font size="2">ết k<font size="2">ế&#160;</font></font></strong></font><strong>website bán hàng</strong>&#160;)<br />\n</font></font></font></font></font>- Cho phép tìm các thông tin trên website bằng các&#160;<font face="Arial" size="2">từ khóa</font><font face="Arial" size="2">&#160;có liên quan.<br />\n<br type="_moz" />\n</font></p>\n<p><font face="Arial"><font size="2">10. Module quảng cáo:&#160;</font></font><font face="Arial"><font size="2"><font face="Arial"><font size="2">(&#160;</font></font><font face="Arial"><font size="2"><font face="Arial" size="2">của g<font size="2">ói&#160;<strong>thi<font size="2">ết k<font size="2">ế&#160;</font></font></strong></font><strong>website bán hàng</strong>&#160;)<br />\n</font></font></font></font></font>- Cho phép đặt các quảng cáo logo, banner trên website<br />\n&#160;</p>\n<p><font face="Arial"><font size="2">11. Module tuyển dụng:&#160;</font></font><font face="Arial"><font size="2"><font face="Arial"><font size="2">(&#160;</font></font><font face="Arial"><font size="2"><font face="Arial" size="2">của g<font size="2">ói&#160;<strong>thi<font size="2">ết k<font size="2">ế&#160;</font></font></strong></font><strong>website bán hàng</strong>&#160;)<br />\n</font></font></font></font></font>&#160; - Hiển thị thông tin&#160;<font face="Arial" size="2">tuyển dụng</font><font face="Arial" size="2">, cơ hội việc làm<br />\n<br type="_moz" />\n</font></p>\n<p><font face="Arial"><font size="2">12. Module liên hệ trực tuyến:<br />\n- Cung cấp 1 mẫu biểu trực tuyến cho phép khách hàng của doanh ngiệp có thể dễ dàng gửi những đánh giá, nhận xét cũng như những yêu cầu của mình đến với doanh nghiệp.<br />\n<br type="_moz" />\n</font></font></p>\n<p><font face="Arial"><font size="2">13. Module bộ đếm số người đã truy cập website:<br />\n- Cung cấp thông tin về số lượt người truy cập website công ty<br />\n<br type="_moz" />\n</font></font></p>\n<p><font face="Arial"><font size="2">14. Module ngôn ngữ:&#160;</font></font><br />\n<font face="Arial"><font size="2"><font face="Arial"><font size="2">(&#160;</font></font><font face="Arial"><font size="2"><font face="Arial" size="2">của g<font size="2">ói&#160;<strong>thi<font size="2">ết k<font size="2">ế&#160;</font></font></strong></font><strong>website bán hàng</strong>&#160;)<br />\n</font></font></font></font></font>- Một ngôn ngữ (có thể thêm nhiều ngôn ngữ khác như: Anh, Pháp, Nga, Trung Quốc, Hàn Quốc...)<br />\n&#160;</p>\n<p><strong><font face="Arial" size="2">Hỗ trợ sau khi</font></strong><font face="Arial" size="2">&#160;<a href="http://northstar.vn/"><strong>thiết kế website</strong></a></font></p>\n<p><font face="Arial" size="2">1.&#160;</font><font face="Arial" size="2">Quảng bá website</font><font face="Arial" size="2">:<br />\n</font><font face="Arial"><font size="2">(&#160;</font></font><font face="Arial"><font size="2">của g<font size="2">ói&#160;<strong>thi<font size="2">ết k<font size="2">ế&#160;</font></font></strong></font><strong>website bán hàng</strong>&#160;)</font></font></p>\n<p><font face="Arial" size="2">Website sẽ được chúng tôi quảng bá miễn phí bằng cách đăng ký website vào các công cụ tìm kiếm toàn cầu như Google, Yahoo, MSN...<br />\n<br type="_moz" />\n</font></p>\n<p><font face="Arial" size="2">2.&#160;</font><font face="Arial" size="2">Bảo hành website</font><font face="Arial" size="2">:</font></p>\n<p><font face="Arial" size="2">Công ty chúng tôi cam kết bảo hành, bảo trì website trong thời hạn 3 năm kể từ sau ngày bàn giao website cho khách hàng.<br />\n<br type="_moz" />\n</font></p>\n<p><font face="Arial" size="2">3. Hỗ trợ kỹ thuật,&#160;</font><font face="Arial" size="2"><a target="_blank" title="Quản trị web" href="http://northstar.vn/">quản trị website</a></font><font face="Arial" size="2">:<br />\n- Hỗ trợ miễn phí kỹ thuật 24/7<br />\n- Hỗ trợ miễn phí quản trị, hướng dẫn sử dụng website 24/7 theo các hình thức:&#160;</font><font face="Arial" size="2">tư vấn</font><font face="Arial" size="2">&#160;hỗ trợ trực tiếp, email, voice chat, điện thoại...</font></p>\n<p>&#160;</p>', '', '', 'f13d1225-0.jpg', NULL, '26/03/2013', 52),
(14, 'Hosting window', 'hosting-window', 'admin', 'Thiết kế web công ty. Công ty thiết kế website North Star xin gửi tới Quý doanh nghiệp gói thiết kế web công ty', '&#160;', '', '', 'windowslogo.jpg', NULL, '10/03/2013', 126),
(12, 'Google adwords ', 'google-adwords', 'admin', 'Thiết kế web công ty. Công ty thiết kế website North Star xin gửi tới Quý doanh nghiệp gói thiết kế web công ty', '&#160;', '', '', 'google-adwords-logo.jpg', NULL, '19/03/2013', 124),
(18, 'Thiết kế website tuyển dụng - việc làm', 'thiet-ke-website-tuyen-dung---viec-lam', 'admin', '', '&#160;', '', '', 'tuyendung.jpg', NULL, '18/03/2013', 149),
(19, 'Thiết kế website khách sạn - nhà hàng', 'thiet-ke-website-khach-san---nha-hang', 'admin', '', '&#160;', '', '', 'hotel.jpg', NULL, '18/03/2013', 52),
(20, 'Thiết kế web Kiến Trúc - Nội Thất - Xây Dựng', 'thiet-ke-web-kien-truc---noi-that---xay-dung', 'admin', '', '&#160;', '', '', 'nfp1307419300.jpg', NULL, '18/03/2013', 52),
(21, 'Thiết kế web Sức Khỏe Y Tế', 'thiet-ke-web-suc-khoe-y-te', 'admin', '<span  rgb(100, 100, 100); font-family: Arial, Helvetica, sans-serif; line-height: 18px; text-align: justify; background-color: rgb(173, 17, 18);">Sức khỏe - Y tế - Dược là các vấn đề đang được quan tâm nhất hiện nay. Từ các bệnh viện, đến các công ty cung cấp thuốc, các cửa hàng dược đều xây dựng cho mình những website chuyên nghiệp để hỗ trợ cho việc bán sản phẩm hoặc tạo điều kiện cho người dùng dễ dàng tìm kiếm thông tin về các dịch vụ, sản phẩm của bệnh viện hay doanh nghiệp... Nếu doanh nghiệp của bạn cũng kinh doanh ngành Sức khỏe - Y tế - Dược thì hãy xây dựng ngay cho mình 1 website để tăng thêm lợi thế cạnh tranh.</span>', '&#160;', '', '', 'logo-nganh-y-te-5.png', NULL, '20/03/2013', 52),
(22, 'Thiết kế web Làm Đẹp Spa', 'thiet-ke-web-lam-dep-spa', 'admin', '&#160;', '&#160;', '', '', 'Lan-da-dep.jpg', NULL, '26/03/2013', 52),
(23, 'Thiết kế web Cơ Khí,Máy móc', 'thiet-ke-web-co-khi-may-moc', 'admin', '&#160;', '&#160;', '', '', '24319403_1.jpg', NULL, '26/03/2013', 52),
(26, 'Thiết kế website tin tức', 'thiet-ke-website-tin-tuc', 'admin', '&#160;', '<ul>\n    <li>Thời gian hoàn thành: 3 - 6 tuần</li>\n    <li>Bảo hành: Vĩnh viễn</li>\n    <li>Giao diện: Theo yêu cầu khách hàng</li>\n</ul>\n<br />\n<b>Gói website bao gồm:<br />\n<br />\n</b>\n<ul>\n    <li>Đăng ký 01 tên miền quốc tế dạng tencongty.com (hoặc .net, .org)</li>\n    <li>Đăng ký 01 năm lưu trữ website (hosting) dung lượng 200 MB, băng thông 5 GB (có thể nâng cấp dễ dàng khi cần)</li>\n    <li>Mã nguồn đã tối ưu hóa với máy tìm kiếm</li>\n    <li>Các URL chính đều rewrite tự động (VD: www.tenmien.com/muc-tin/tieu-de-tin.htm)</li>\n    <li>Tư vấn quảng bá web vào Google</li>\n    <li>Thiết kế đồ họa giao diện</li>\n    <li>Lập trình các chức năng</li>\n    <li>Hướng dẫn, hỗ trợ quản trị thông tin</li>\n</ul>\n<br />\n<h2>Các chức năng của gói thiết kế website tin tức</h2>\n<br />\n<br />\n<ul>\n    <li>Trang chủ</li>\n    <li>Tin tức\n    <ul>\n        <li>Các mục tin (không giới hạn số mục, tự động phân trang)</li>\n        <li>Xem chi tiết</li>\n        <li>Tin mới hơn</li>\n        <li>Tin cũ hơn</li>\n        <li>In ấn tin</li>\n        <li>Lưu tin</li>\n        <li>Download tin ra file Word</li>\n        <li>Bookmark tin vào các mạng xã hội</li>\n        <li>Phân loại tin theo Thẻ (Tag)</li>\n        <li>Xem tin theo ngày tháng</li>\n    </ul>\n    </li>\n    <li>Bình luận tin tức</li>\n    <li>Banner quảng cáo\n    <ul>\n        <li>Hiển thị banner theo nhiều vị trí, thứ tự</li>\n        <li>Mở liên kết khi click vào banner</li>\n    </ul>\n    </li>\n    <li>Thăm dò ý kiến\n    <ul>\n        <li>Câu hỏi thăm dò</li>\n        <li>Các phương án lựa chọn</li>\n        <li>Xem kết quả</li>\n    </ul>\n    </li>\n    <li>Tiện ích\n    <ul>\n        <li>Thời tiết</li>\n        <li>Tỉ giá</li>\n    </ul>\n    </li>\n    <li>Thống kê\n    <ul>\n        <li>Số người đang tham gia</li>\n        <li>Số lượt truy cập</li>\n    </ul>\n    </li>\n    <li>Liên hệ\n    <ul>\n        <li>Thông tin liên hệ</li>\n        <li>Form liên hệ</li>\n    </ul>\n    </li>\n    <li>Bảng quản trị\n    <ul>\n        <li>Đăng nhập, thay đổi mật khẩu, thoát</li>\n        <li>Quản trị mục tin tức</li>\n        <li>Quản trị tin tức</li>\n        <li>Quản trị banner</li>\n        <li>Quản trị thăm dò</li>\n        <li>Quản trị bình luận</li>\n        <li>Theo dõi thống kê</li>\n    </ul>\n    </li>\n</ul>', '', '', 'newsimg.jpg', NULL, '26/03/2013', 52),
(27, 'Thiết kế website du lịch', 'thiet-ke-website-du-lich', 'admin', '&#160;<strong>Thiết kế web du lịch</strong><span>&#160;chuyên nghiệp tại Hà Nội. Với kinh nghiệm hơn 4 năm&#160;</span><em>thiết kế web du lịch</em><span>&#160;cho các công ty lữ hành, tập đoàn du lịch trong và ngoài nước.</span>\n<p><strong>Hệ thống website du lịch</strong>&#160;được lập trình qua nhiều năm đã tối ưu và hoàn thiện để đáp ứng với nhiều mô hình kinh doanh của các công ty lữ hành du lịch: kinh doanh tour nội địa, inbound tour,&#160;outbound tour.</p>\n<p><em>Hệ thống </em><strong><em>website du lịch</em></strong>&#160;được tích hợp nhiều tính năng quản lý tour, điều hành tour, mô tả tour và trình diễn các đặc điểm riêng biệt của kinh doanh tour: album tour theo từng tour, bản đồ lộ trình tour theo từng tour, book tour online và thanh toán trực tuyến bằng các thẻ visa card, master card ... với các cổng thanh toán quốc tế cũng như nội địa: paypal, onepal, ATM ...</p>\n<p>Hãy đến với dịch vụ&#160;<a href="http://northstar.vn" title="thiết kế web du lịch"><strong>thiết kế web du lịch</strong></a>&#160;của North Star sẽ làm Quý khách hàng hài lòng và không còn phải lo lắng về chất lượng, hệ thống website có đáp ứng được mô hình kinh doanh của mình hay không?</p>', '<ul>\n    <li>Giá trọn gói : Liên hệ</li>\n    <li>Phí duy trì từ năm thứ 2 : &#160;Liên hệ</li>\n    <li>Thời gian hoàn thành : 3 - 6 tuần</li>\n    <li>Bảo hành: Vĩnh viễn</li>\n    <li>Giao diện: Theo yêu cầu khách hàng</li>\n</ul>\n<br />\n<b>Gói website du lịch bao gồm:</b>\n<ul>\n    <li>Đăng ký 01 tên miền quốc tế dạng tencongty.com (hoặc .net, .org)</li>\n    <li>Đăng ký 01 năm lưu trữ website (hosting) dung lượng 200 MB, băng thông 5 GB (có thể nâng cấp dễ dàng khi cần)</li>\n    <li>Mã nguồn đã tối ưu hóa với máy tìm kiếm</li>\n    <li>Các URL chính đều rewrite tự động (VD: www.tenmien.com/muc-tour/ten-tour.htm)</li>\n    <li>Tư vấn quảng bá web vào Google</li>\n    <li>Thiết kế đồ họa giao diện</li>\n    <li>Lập trình các chức năng</li>\n    <li>Hướng dẫn, hỗ trợ quản trị thông tin</li>\n</ul>\n<br />\n<h3>Chức năng gói thiết kế website du lịch, resort</h3>\n<br />\n<ol>\n    <li>Trang chủ</li>\n    <li>Giới thiệu\n    <ul>\n        <li>Các mục giới thiệu (không giới hạn số mục, tự động phân trang)</li>\n        <li>Xem chi tiết giới thiệu (tour, khách sạn, địa điểm)</li>\n        <li>Các thông tin giới thiệu khác</li>\n        <li>In ấn thông tin</li>\n        <li>Lưu thông tin</li>\n        <li>Download tin ra file Word</li>\n    </ul>\n    </li>\n    <li>Đặt tour, phòng, vé... (vào email)</li>\n    <li>Tìm kiếm nhanh, tìm kiếm chi tiết</li>\n    <li>Tin tức\n    <ul>\n        <li>Các mục tin (không giới hạn số mục, tự động phân trang)</li>\n        <li>Xem chi tiết</li>\n        <li>Tin mới hơn</li>\n        <li>Tin cũ hơn</li>\n        <li>In ấn tin</li>\n        <li>Lưu tin</li>\n        <li>Download tin ra file Word</li>\n    </ul>\n    </li>\n    <li>Banner quảng cáo\n    <ul>\n        <li>Hiển thị banner theo nhiều vị trí, thứ tự</li>\n        <li>Mở liên kết khi click vào banner</li>\n    </ul>\n    </li>\n    <li>Hỗ trợ trực tuyến\n    <ul>\n        <li>Hiển thị thông tin hỗ trợ (Yahoo! Messenger, Skype, Hotline)</li>\n    </ul>\n    </li>\n    <li>Thăm dò ý kiến\n    <ul>\n        <li>Câu hỏi thăm dò</li>\n        <li>Các phương án lựa chọn</li>\n        <li>Xem kết quả</li>\n    </ul>\n    </li>\n    <li>Tiện ích\n    <ul>\n        <li>Thời tiết</li>\n        <li>Tỉ giá</li>\n    </ul>\n    </li>\n    <li>Thống kê\n    <ul>\n        <li>Số người đang tham gia</li>\n        <li>Số lượt truy cập</li>\n    </ul>\n    </li>\n    <li>Liên hệ\n    <ul>\n        <li>Thông tin liên hệ</li>\n        <li>Form liên hệ</li>\n    </ul>\n    </li>\n    <li>Bảng quản trị\n    <ul>\n        <li>Đăng nhập, thay đổi mật khẩu, thoát</li>\n        <li>Quản trị mục giới thiệu</li>\n        <li>Quản trị thông tin giới thiệu</li>\n        <li>Quản trị mục tour</li>\n        <li>Quản trị thông tin tour</li>\n        <li>Quản trị mục tin tức</li>\n        <li>Quản trị tin tức</li>\n        <li>Quản trị banner</li>\n        <li>Quản trị thăm dò</li>\n        <li>Theo dõi thống kê</li>\n        <li>Quản trị thanh menu (trên, dưới, trái)</li>\n        <li>Quản trị file upload</li>\n        <li><em>Giao diện tiếng Việt, dễ sử dụng, quản trị</em></li>\n        <li><em>Tích hợp bộ soạn thảo nội dung WYSIWYG tương tự Microsoft Words</em></li>\n        <li><em>* Quản trị: Tạo, sửa, xóa, cập nhật trạng thái, sắp xếp..</em></li>\n    </ul>\n    </li>\n</ol>', '', '', 'dulich.jpg', NULL, '26/03/2013', 52),
(28, 'Thiết kế website văn phòng luật sư', 'thiet-ke-website-van-phong-luat-su', 'admin', '<strong>&#160;</strong><a title="Thiết kế website" href="http://www.ttv.vn/" target="_blank"><strong>Thiết kế website</strong></a><span>&#160;cho lĩnh vực luật, luật sư, văn phòng tư vấn luật? Web thiết kế đặt thù cho các công ty Luật, văn phòng Luật sư. Web trình bày thông tin dịch vụ tư vấn luật, tố tụng... Văn phòng hoạt động tư vấn hoạt động liên tục 24/7.</span>\n<p>Website được thiết kế chuyên nghiệp về giao diện với <strong>hệ thống website</strong> được tối ưu và dễ sử dụng trong việc quản trị web, hiển thị thông tin, bản tin, thông tin được tổ chức theo cấp, nhóm tin và chi tiết tin</p>', '<ul>\n    <li>Thời gian hoàn thành: 3 - 6 tuần</li>\n    <li>Bảo hành: Vĩnh viễn</li>\n    <li>Giao diện: Theo yêu cầu khách hàng</li>\n</ul>\n<br />\n<b>Gói website bao gồm:</b>\n<ul>\n    <li>Đăng ký 01 tên miền quốc tế dạng tencongty.com (hoặc .net, .org)</li>\n    <li>Đăng ký 01 năm lưu trữ website (hosting) dung lượng 200 MB, băng thông 5 GB (có thể nâng cấp dễ dàng khi cần)</li>\n    <li>Mã nguồn đã tối ưu hóa với máy tìm kiếm</li>\n    <li>Các URL chính đều rewrite tự động (VD: www.tenmien.com/ten-muc/tieu-de.htm)</li>\n    <li>Tư vấn quảng bá web vào Google</li>\n    <li>Thiết kế đồ họa giao diện</li>\n    <li>Lập trình các chức năng</li>\n    <li>Hướng dẫn, hỗ trợ quản trị thông tin</li>\n</ul>\n<br />\n<h3>Các chức năng của gói thiết kế website văn phòng luật, luật sư</h3>\n<br />\n<ol>\n    <li>Trang chủ\n    <ul>\n        <li>Flash Slideshow</li>\n        <li>Giới thiệu tóm tắt</li>\n        <li>Các tin mới, tin nổi bật</li>\n        <li>Banner quảng cáo</li>\n    </ul>\n    </li>\n    <li>Giới thiệu\n    <ul>\n        <li>Các mục giới thiệu (không giới hạn số mục, tự động phân trang)</li>\n        <li>Xem chi tiết</li>\n        <li>Các thông tin giới thiệu khác</li>\n        <li>In ấn thông tin</li>\n        <li>Lưu thông tin</li>\n        <li>Download tin ra file Word</li>\n    </ul>\n    </li>\n    <li>Tin tức\n    <ul>\n        <li>Các mục tin (không giới hạn số mục, tự động phân trang)</li>\n        <li>Xem chi tiết</li>\n        <li>Tin mới hơn</li>\n        <li>Tin cũ hơn</li>\n        <li>In ấn tin</li>\n        <li>Lưu tin</li>\n        <li>Download tin ra file Word</li>\n    </ul>\n    </li>\n    <li>Album ảnh\n    <ul>\n        <li>Các album ảnh</li>\n        <li>Xem chi tiết các album</li>\n        <li>Xem hình ảnh dạng slideshow</li>\n        <li>Xem từng hình ảnh</li>\n    </ul>\n    </li>\n    <li>Tuyển dụng\n    <ul>\n        <li>Liệt kê các tin tuyển dụng (tiêu đề, vị trí, thời gian, hạn nộp hồ sơ)</li>\n        <li>Thông tin tuyển dụng khác</li>\n        <li>In ấn thông tin</li>\n        <li>Lưu thông tin</li>\n        <li>Download thông tin ra file Word</li>\n    </ul>\n    </li>\n    <li>Thăm dò ý kiến\n    <ul>\n        <li>Câu hỏi thăm dò</li>\n        <li>Các phương án lựa chọn</li>\n        <li>Xem kết quả</li>\n    </ul>\n    </li>\n    <li>Banner quảng cáo\n    <ul>\n        <li>Hiển thị banner theo nhiều vị trí, thứ tự</li>\n        <li>Mở liên kết khi click vào banner</li>\n    </ul>\n    </li>\n    <li>Tìm kiếm</li>\n    <li>Tiện ích\n    <ul>\n        <li>Thời tiết</li>\n        <li>Tỉ giá</li>\n    </ul>\n    </li>\n    <li>Thống kê\n    <ul>\n        <li>Số người đang tham gia</li>\n        <li>Số lượt truy cập</li>\n    </ul>\n    </li>\n    <li>Liên hệ\n    <ul>\n        <li>Thông tin liên hệ</li>\n        <li>Form liên hệ</li>\n    </ul>\n    </li>\n    <li>Bảng quản trị\n    <ul>\n        <li>Đăng nhập, thay đổi mật khẩu, thoát</li>\n        <li>Quản trị mục giới thiệu</li>\n        <li>Quản trị thông tin giới thiệu</li>\n        <li>Quản trị album</li>\n        <li>Quản trị hình ảnh</li>\n        <li>Quản trị mục tin tức</li>\n        <li>Quản trị tin tức</li>\n        <li>Quản trị tuyển dụng</li>\n        <li>Quản trị banner</li>\n        <li>Quản trị thăm dò</li>\n        <li>Theo dõi thống kê</li>\n        <li>Quản trị thanh menu (trên, dưới, trái)</li>\n        <li>Quản trị file upload</li>\n        <li><em>Giao diện tiếng Việt, dễ sử dụng, quản trị</em></li>\n        <li><em>Tích hợp bộ soạn thảo nội dung WYSIWYG tương tự Microsoft Words</em></li>\n        <li><em>* Quản trị: Tạo, sửa, xóa, cập nhật trạng thái, sắp xếp..</em></li>\n    </ul>\n    </li>\n</ol>', '', '', 'luat_03626.png', NULL, '26/03/2013', 52);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `pro_id` int(10) UNSIGNED NOT NULL,
  `pro_code` varchar(100) DEFAULT NULL,
  `pro_name` varchar(100) NOT NULL,
  `pro_qty` int(10) UNSIGNED NOT NULL,
  `pro_name_rewrite` varchar(200) NOT NULL,
  `pro_video` varchar(255) NOT NULL,
  `pro_status` char(1) NOT NULL DEFAULT '1',
  `pro_promotion` text NOT NULL,
  `pro_info` text NOT NULL,
  `pro_full` longtext NOT NULL,
  `pro_price` int(10) UNSIGNED NOT NULL,
  `pro_market` int(10) UNSIGNED NOT NULL,
  `pro_new` int(1) NOT NULL,
  `pro_hot` int(1) NOT NULL,
  `pro_saleoff` int(1) NOT NULL,
  `pro_bestsale` int(1) NOT NULL,
  `pro_location` varchar(200) NOT NULL,
  `pro_order` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `pro_new_check` int(20) UNSIGNED NOT NULL DEFAULT '0',
  `pro_hot_check` int(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_created` int(10) NOT NULL DEFAULT '0',
  `user_updated` int(11) NOT NULL DEFAULT '0',
  `pro_saleoff_check` int(20) UNSIGNED NOT NULL DEFAULT '0',
  `pro_bestsale_check` int(20) UNSIGNED NOT NULL DEFAULT '0',
  `pro_war` varchar(200) NOT NULL,
  `pro_ship` varchar(200) NOT NULL,
  `pro_folderimg` varchar(150) NOT NULL,
  `pro_images` text NOT NULL,
  `pro_date` date NOT NULL,
  `pro_view` int(10) NOT NULL DEFAULT '0',
  `pro_like` int(10) NOT NULL DEFAULT '0',
  `pro_buy` int(10) NOT NULL DEFAULT '0',
  `pro_key` text NOT NULL,
  `pro_des` text NOT NULL,
  `pro_lang` tinyint(1) NOT NULL DEFAULT '1',
  `hangsanxuat_id` int(11) NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `cate_id_parent` int(10) NOT NULL,
  `phukien` text NOT NULL,
  `video_youtube` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`pro_id`, `pro_code`, `pro_name`, `pro_qty`, `pro_name_rewrite`, `pro_video`, `pro_status`, `pro_promotion`, `pro_info`, `pro_full`, `pro_price`, `pro_market`, `pro_new`, `pro_hot`, `pro_saleoff`, `pro_bestsale`, `pro_location`, `pro_order`, `pro_new_check`, `pro_hot_check`, `user_created`, `user_updated`, `pro_saleoff_check`, `pro_bestsale_check`, `pro_war`, `pro_ship`, `pro_folderimg`, `pro_images`, `pro_date`, `pro_view`, `pro_like`, `pro_buy`, `pro_key`, `pro_des`, `pro_lang`, `hangsanxuat_id`, `cate_id`, `cate_id_parent`, `phukien`, `video_youtube`, `created_at`, `updated_at`) VALUES
(1585, NULL, 'Máy rửa xe áp lực cao IPC PW-C40', 0, 'may-rua-xe-ap-luc-cao-ipc-pw-c40', '', '1', '', 'Màu xanh<br />\r\nTrọng lượng: 11 tấn<br />\r\nHợp kim nhôm<br />\r\n<br type="_moz" />', '&#160;', 0, 0, 0, 1, 0, 0, '', 0, 4294967295, 4294967295, 153, 160, 4294967295, 4294967295, '', '', '30122015114214', 'a:1:{i:0;s:29:"301220151142149656_PW-C40.png";}', '0000-00-00', 65, 0, 0, 'Máy rửa xe áp lực cao IPC PW-C40', 'Máy rửa xe áp lực cao IPC PW-C40', 1, 0, 618, 0, '&#160;', '', '2016-01-23 07:07:07', '2016-01-23 04:43:45'),
(1586, NULL, 'Máy rửa xe bằng hơi nước nóng Kolumbo', 0, 'may-rua-xe-bang-hoi-nuoc-nong-kolumbo', '', '1', '', '<h3 style="color: red;">Đặc tính</h3>\n- Tạo hơi nước nóng lên tới 178 độ C<br />\n- Áp lực phun cao lên tới 10 bar<br />\n- Có chế độ trộn hóa chất tẩy vào hơi nước<br />\n- Tiết kiệm nước lên đến 90% so với rửa áp lực<br />\n- Không cần nguồn cấp nước<br />\n- Thuận tiện khi di chuyển<br />\n- Có loại dùng pin, không cần dùng điện<br />\n- Điều chỉnh nhiệt độ điện tử, đường khí gas đôi', '&#160;\n<h3 style="color: red;">Đặc tính</h3>\n- Tạo hơi nước nóng lên tới 178 độ C<br />\n- Áp lực phun cao lên tới 10 bar<br />\n- Có chế độ trộn hóa chất tẩy vào hơi nước<br />\n- Tiết kiệm nước lên đến 90% so với rửa áp lực<br />\n- Không cần nguồn cấp nước<br />\n- Thuận tiện khi di chuyển<br />\n- Có loại dùng pin, không cần dùng điện<br />\n- Điều chỉnh nhiệt độ điện tử, đường khí gas đôi', 0, 0, 1, 0, 0, 0, '', 0, 4294967295, 4294967295, 153, 160, 4294967295, 4294967295, '', '', '21012016113131', 'a:5:{i:0;s:55:"21012016113131full_0cf109c3769fcd48b234cc4f96be3c8a.jpg";i:1;s:26:"21012016113131da-quy-2.jpg";i:2;s:41:"21012016113131cua-hang-tranh-da-quy-5.jpg";i:3;s:67:"210120161131311438678735-Tranh-da-quy-thuan-buom-xuoi-gio-TPC41.jpg";i:4;s:65:"2101201611313112341155_1538031726517944_6123230405568250482_n.jpg";}', '0000-00-00', 46, 0, 0, 'Máy rửa xe bằng hơi nước nóng Kolumbo', 'Máy rửa xe bằng hơi nước nóng Kolumbo', 1, 9, 618, 0, '&#160;\n<h3 style="color: red;">Đặc tính</h3>\n- Tạo hơi nước nóng lên tới 178 độ C<br />\n- Áp lực phun cao lên tới 10 bar<br />\n- Có chế độ trộn hóa chất tẩy vào hơi nước<br />\n- Tiết kiệm nước lên đến 90% so với rửa áp lực<br />\n- Không cần nguồn cấp nước<br />\n- Thuận tiện khi di chuyển<br />\n- Có loại dùng pin, không cần dùng điện<br />\n- Điều chỉnh nhiệt độ điện tử, đường khí gas đôi', '', '2016-01-23 04:26:55', '0000-00-00 00:00:00'),
(1587, NULL, 'Máy rửa và làm sạch bằng hơi nước nóng', 0, 'may-rua-va-lam-sach-bang-hoi-nuoc-nong', '', '1', '', '&#160;', '&#160;', 0, 0, 1, 0, 0, 0, '', 0, 4294967295, 4294967295, 153, 0, 4294967295, 4294967295, '', '', '31122015120238', 'a:1:{i:0;s:39:"3112201512023827481_IVP Vesuvio phu.jpg";}', '0000-00-00', 28, 0, 0, 'Máy rửa và làm sạch bằng hơi nước nóng', 'Máy rửa và làm sạch bằng hơi nước nóng', 1, 9, 618, 0, '&#160;', '', '2016-01-23 04:26:55', '0000-00-00 00:00:00'),
(1588, NULL, 'Máy làm sạch bằng hơi nước nóng áp lực 9 Bar', 0, 'may-lam-sach-bang-hoi-nuoc-nong-ap-luc-9-bar', '', '1', '', '&#160;', '&#160;', 0, 0, 0, 0, 0, 0, '', 0, 4294967295, 4294967295, 153, 160, 4294967295, 4294967295, '', '', '31122015120327', 'a:1:{i:0;s:40:"311220151203278463_IVP 3.3M Gold phu.jpg";}', '0000-00-00', 47, 0, 0, 'Máy làm sạch bằng hơi nước nóng áp lực 9 Bar', 'Máy làm sạch bằng hơi nước nóng áp lực 9 Bar', 1, 9, 618, 0, '&#160;', '', '2016-01-23 06:53:44', '2016-01-23 04:36:01'),
(1589, NULL, 'Máy làm sạch bằng hơi nước nóng', 0, 'may-lam-sach-bang-hoi-nuoc-nong', '', '1', '', '&#160;', '&#160;', 0, 0, 0, 1, 0, 0, '', 0, 4294967295, 4294967295, 153, 160, 4294967295, 4294967295, '', '', '31122015120444', 'a:1:{i:0;s:43:"311220151204442309_IVP 4.0 VAC 4000 phu.jpg";}', '0000-00-00', 55, 0, 0, 'Máy làm sạch bằng hơi nước nóng', 'Máy làm sạch bằng hơi nước nóng', 1, 9, 618, 0, '&#160;', '', '2016-01-23 05:16:35', '2016-01-23 05:16:35'),
(1590, NULL, 'Máy rửa xe hai chế độ nóng - lạnh Okatsune', 0, 'may-rua-xe-hai-che-do-nong-lanh-okatsune', '', '1', '', '&#160;', '&#160;', 0, 0, 1, 0, 0, 0, '', 0, 4294967295, 4294967295, 153, 0, 4294967295, 4294967295, '', '', '31122015120556', 'a:1:{i:0;s:33:"3112201512055614160_PHT-5 phu.jpg";}', '0000-00-00', 50, 0, 0, 'Máy rửa xe hai chế độ nóng - lạnh Okatsune', 'Máy rửa xe hai chế độ nóng - lạnh Okatsune', 1, 10, 618, 0, '&#160;', '', '2016-01-23 04:26:55', '0000-00-00 00:00:00'),
(1591, NULL, 'Máy rửa xe áp lực cao và tạo bọt tuyết', 0, 'may-rua-xe-ap-luc-cao-va-tao-bot-tuyet', '', '1', '', '&#160;', '&#160;', 0, 0, 1, 0, 0, 0, '', 0, 4294967295, 4294967295, 153, 0, 4294967295, 4294967295, '', '', '31122015120650', 'a:1:{i:0;s:39:"3112201512065029433_AY-1 Series phu.jpg";}', '0000-00-00', 32, 0, 0, 'Máy rửa xe áp lực cao và tạo bọt tuyết', 'Máy rửa xe áp lực cao và tạo bọt tuyết', 1, 10, 618, 0, '&#160;', '', '2016-01-23 04:26:55', '0000-00-00 00:00:00'),
(1592, NULL, 'Máy rửa nóng-lạnh loại vi xử lý', 0, 'may-rua-nong-lanh-loai-vi-xu-ly', '', '1', '', '&#160;', '&#160;', 0, 0, 1, 0, 0, 0, '', 0, 4294967295, 4294967295, 153, 153, 4294967295, 4294967295, '', '', '31122015120733', 'a:1:{i:0;s:36:"3112201512073311263_SH-7-380 phu.gif";}', '0000-00-00', 73, 0, 0, 'Máy rửa nóng-lạnh loại vi xử lý', 'Máy rửa nóng-lạnh loại vi xử lý', 1, 8, 618, 0, '&#160;', '', '2016-01-23 04:26:55', '0000-00-00 00:00:00'),
(1593, NULL, 'Máy rửa nước nóng áp lực cao', 0, 'may-rua-nuoc-nong-ap-luc-cao', '', '1', '', '&#160;', '&#160;', 0, 0, 0, 0, 0, 0, '', 0, 4294967295, 4294967295, 153, 0, 4294967295, 4294967295, '', '', '31122015120856', 'a:1:{i:0;s:35:"3112201512085632429_MR-30VM phu.gif";}', '0000-00-00', 63, 0, 0, 'Máy rửa nước nóng áp lực cao', 'Máy rửa nước nóng áp lực cao', 1, 10, 618, 0, '&#160;', '', '2016-01-23 04:26:55', '0000-00-00 00:00:00'),
(1594, NULL, 'Máy rửa nước lạnh áp lực 9Mpa', 0, 'may-rua-nuoc-lanh-ap-luc-9mpa', '', '1', '', '&#160;', '&#160;', 0, 0, 0, 0, 0, 0, '', 0, 4294967295, 4294967295, 153, 0, 4294967295, 4294967295, '', '', '31122015120931', 'a:1:{i:0;s:37:"3112201512093128969_VJW-5C-18 phu.gif";}', '0000-00-00', 53, 0, 0, 'Máy rửa nước lạnh áp lực 9Mpa', 'Máy rửa nước lạnh áp lực 9Mpa', 1, 10, 618, 0, '&#160;', '', '2016-01-23 05:15:31', '0000-00-00 00:00:00'),
(1595, NULL, 'Máy rửa nước lạnh áp lực cao', 0, 'may-rua-nuoc-lanh-ap-luc-cao', '', '1', '', '&#160;', '&#160;', 0, 0, 0, 0, 0, 0, '', 0, 4294967295, 4294967295, 153, 160, 4294967295, 4294967295, '', '', '21012016112825', 'a:3:{i:0;s:67:"210120161128251438678735-Tranh-da-quy-thuan-buom-xuoi-gio-TPC41.jpg";i:1;s:64:"2101201611282512392062_905986836117801_4802367978333930016_n.jpg";i:2;s:65:"2101201611282512341155_1538031726517944_6123230405568250482_n.jpg";}', '0000-00-00', 93, 0, 0, 'Máy rửa nước lạnh áp lực cao Meta Keyword', 'Máy rửa nước lạnh áp lực cao khoi test Meta Description', 1, 8, 618, 0, '&#160;', '', '2016-01-23 06:57:28', '2016-01-23 04:47:03'),
(1607, NULL, 'Giường cấp cứu', 0, 'giuong-cap-cuu', '', '1', '', '&#160;Giường cấp cứu', 'Giường cấp cứu', 10000000, 0, 0, 0, 0, 0, '', 0, 0, 0, 160, 160, 0, 0, '1', '', '', '', '0000-00-00', 1, 0, 0, 'Giường cấp cứu', 'Giường cấp cứu', 1, 10, 626, 0, '&#160;Giường cấp cứu', '', '2016-01-23 07:19:45', '0000-00-00 00:00:00'),
(1608, NULL, 'Hệ thống cộng hưởng từ MRI', 0, 'he-thong-cong-huong-tu-mri', '', '1', '', '&#160;Hệ thống cộng hưởng từ MRI', '&#160;Hệ thống cộng hưởng từ MRI', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 160, 160, 0, 0, '3', '', '', '', '0000-00-00', 2, 0, 0, 'Hệ thống cộng hưởng từ MRI', 'Hệ thống cộng hưởng từ MRI', 1, 0, 620, 0, '&#160;Hệ thống cộng hưởng từ MRI', '', '2016-01-23 04:26:55', '0000-00-00 00:00:00'),
(1609, NULL, 'Máy rửa xe nước lạnh', 0, 'may-rua-xe-nuoc-lanh', '', '1', '', '&#160;Máy rửa xe nước lạnh', '&#160;Máy rửa xe nước lạnh', 3000000, 0, 0, 1, 0, 0, '', 0, 4294967295, 4294967295, 160, 160, 4294967295, 4294967295, '2', '', '', '', '0000-00-00', 3, 0, 0, 'Máy rửa xe nước lạnh', 'Máy rửa xe nước lạnh', 1, 0, 621, 0, '&#160;Máy rửa xe nước lạnh', '', '2016-01-23 07:07:23', '2016-01-23 04:43:54'),
(1610, NULL, 'Máy rửa nóng lạnh loại vi xử lý', 0, 'may-rua-nong-lanh-loai-vi-xu-ly', '', '1', '', '&#160;Máy rửa nóng lạnh loại vi xử lý', '&#160;Máy rửa nóng lạnh loại vi xử lý', 5000000, 0, 0, 0, 0, 0, '', 0, 0, 0, 160, 160, 0, 0, '1', '', '', '', '0000-00-00', 3, 0, 0, 'Máy rửa nóng lạnh loại vi xử lý', 'Máy rửa nóng lạnh loại vi xử lý', 1, 8, 626, 0, '&#160;Máy rửa nóng lạnh loại vi xử lý', '', '2016-01-23 07:19:42', '2016-01-23 05:16:40'),
(1611, NULL, 'Máy rửa nước nóng áp lực cao', 0, 'may-rua-nuoc-nong-ap-luc-cao', '', '1', '', '&#160;Máy rửa nước nóng áp lực cao', '&#160;Máy rửa nước nóng áp lực cao', 2500000, 0, 0, 0, 0, 0, '', 0, 0, 0, 160, 160, 0, 0, '1.5', '', '', '', '0000-00-00', 2, 0, 0, 'Máy rửa nước nóng áp lực cao', 'Máy rửa nước nóng áp lực cao', 1, 9, 626, 0, '&#160;Máy rửa nước nóng áp lực cao', '', '2016-01-23 07:57:14', '2016-01-23 04:35:00'),
(1612, NULL, 'Dao mổ điện', 0, 'dao-mo-dien', '', '1', '', '&#160;Dao mổ điện', '&#160;Dao mổ điện', 4000000, 0, 0, 0, 0, 0, '', 0, 0, 0, 160, 160, 0, 0, '4', '', '', '', '0000-00-00', 2, 0, 0, 'Dao mổ điện', 'Dao mổ điện', 1, 10, 623, 0, '&#160;Dao mổ điện', '', '2016-01-23 04:36:09', '2016-01-23 04:36:09'),
(1613, NULL, 'Máy rửa xe nước nóng áp lực cao', 0, 'may-rua-xe-nuoc-nong-ap-luc-cao', '', '1', '', '&#160;Máy rửa xe nước nóng áp lực cao&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;', '&#160;Máy rửa xe nước nóng áp lực cao', 6300000, 0, 0, 0, 0, 0, '', 0, 0, 0, 160, 160, 0, 0, '7', '', '', '', '0000-00-00', 0, 0, 0, 'Máy rửa xe nước nóng áp lực cao', 'Máy rửa xe nước nóng áp lực cao', 1, 10, 626, 0, '&#160;Máy rửa xe nước nóng áp lực cao', '', '2016-01-23 04:35:17', '2016-01-23 04:35:17'),
(1614, NULL, 'Máy đo huyết áp', 0, 'may-do-huyet-ap', '', '1', '', '&#160;Máy đo huyết áp', '&#160;Máy đo huyết áp', 1231000023, 0, 0, 0, 0, 0, '', 0, 0, 0, 160, 160, 0, 0, '', '', '', '', '0000-00-00', 0, 0, 0, 'Máy đo huyết áp', 'Máy đo huyết áp', 1, 9, 623, 0, '&#160;Máy đo huyết áp', '', '2016-01-23 04:34:40', '2016-01-23 04:34:40'),
(1615, NULL, 'Lò đốt rac thải y tế', 0, 'lo-dot-rac-thai-y-te', '', '1', '', '&#160;Lò đốt rác thải y tế', '&#160;Lò đốt rác thải y tế', 3900000, 0, 0, 1, 0, 0, '', 0, 4294967295, 4294967295, 160, 160, 4294967295, 4294967295, '3', '', '', '', '0000-00-00', 2, 0, 0, 'Lò đốt rac thải y tế', 'Lò đốt rac thải y tế', 1, 10, 622, 0, '&#160;Lò đốt rác thải y tế', '', '2016-01-23 06:56:24', '2016-01-23 04:51:04'),
(1616, NULL, 'Giường inox 2 tay quay', 0, 'giuong-inox-2-tay-quay', '', '1', '', '&#160;Giường Inox 2 tay quay', '&#160;Giường Inox 2 tay quay', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 160, 160, 0, 0, '', '', '', '', '0000-00-00', 2, 0, 0, 'Giường inox 2 tay quay', 'Giường inox 2 tay quay', 1, 10, 626, 0, '&#160;Giường Inox 2 tay quay', '', '2016-01-23 05:18:33', '2016-01-23 04:34:21'),
(1617, NULL, 'Test sản phẩm tân phát thiết bị sửa chữa oto', 0, 'test-san-pham-tan-phat-thiet-bi-sua-chua-oto', '', '1', '', '&#160;', '&#160;', 10000000, 0, 0, 1, 0, 0, '', 0, 4294967295, 4294967295, 160, 160, 4294967295, 4294967295, '12 tháng', '', '23012016092916', 'a:1:{i:0;s:41:"2301201609291622012016082823omron-ia1.jpg";}', '0000-00-00', 2, 0, 0, 'Test sản phẩm tân phát thiết bị sửa chữa oto', 'Test sản phẩm tân phát thiết bị sửa chữa oto', 1, 0, 621, 0, '&#160;', 'bb', '2016-01-23 07:07:27', '2016-01-23 04:34:15'),
(1618, NULL, 'Sản phẩm máy giặt cao cấp từ thì trường hoa kỳ', 0, 'san-pham-may-giat-cao-cap-tu-thi-truong-hoa-ky', '', '1', '', 'Thông tin mô tả sản phẩm', 'Thông tin chi tiết sản phẩm', 10000000, 0, 0, 0, 0, 0, '', 0, 0, 0, 160, 160, 0, 0, '3 tháng', '', '', '', '0000-00-00', 1, 0, 0, 'Sản phẩm máy giặt cao cấp từ thì trường hoa kỳ', 'Sản phẩm máy giặt cao cấp từ thì trường hoa kỳ', 1, 0, 619, 0, 'Thông tin chi tiết sản phẩm', '', '2016-01-23 06:58:21', '2016-01-23 04:33:29'),
(1619, NULL, 'Thiết bị oto kết hợp với internet of thing', 0, 'thiet-bi-oto-ket-hop-voi-internet-of-thing', '', '1', '', 'Thông tin mô tả sản phẩm', 'Thông tin chi tiết sản phẩm', 2500000, 0, 0, 0, 0, 0, '', 0, 0, 0, 160, 160, 0, 0, '12 tháng', '', '23012016122318', 'a:1:{i:0;s:68:"23012016122318chu-nhan-xe-ford-co-the-ra-lenh-cho-nha-thong-minh.jpg";}', '0000-00-00', 1, 0, 0, 'Thiết bị oto kết hợp với internet of thing', 'Thiết bị oto kết hợp với internet of thing', 1, 0, 625, 0, 'Thông tin phụ kiện', '', '2016-01-23 06:44:17', '2016-01-23 06:44:17'),
(1620, NULL, 'Sản phẩm điện dân dụng mới nhất năm 2015', 0, 'san-pham-dien-dan-dung-moi-nhat-nam-2015', '', '1', '', 'Thông tin mô tả sản phẩm', 'Thông tin chi tiết sản phẩm', 10000000, 0, 0, 0, 0, 0, '', 0, 0, 0, 160, 160, 0, 0, '12 tháng', '', '23012016014744', 'a:1:{i:0;s:95:"23012016014744china-pt06-new-thiet-bi-dinh-vi-gps-danh-cho-xe-may-den-5237-716562-1-product.jpg";}', '0000-00-00', 7, 0, 0, 'Sản phẩm điện dân dụng mới nhất năm 2015', 'Sản phẩm điện dân dụng mới nhất năm 2015', 1, 0, 626, 0, 'Thông tin phụ kiện', '', '2016-01-23 07:19:37', '2016-01-23 06:48:05'),
(1621, NULL, 'Camera hành trình tân phát (sản phẩm test)', 0, 'camera-hanh-trinh-tan-phat&amp;amp;amp;amp;ndash;&amp;amp;amp;amp;ndash;san-pham-test-', '', '1', '', '&#160;', '&#160;', 10000000, 0, 0, 0, 0, 0, '', 0, 0, 0, 160, 160, 0, 0, '12 tháng', '', '23012016021118', 'a:1:{i:0;s:35:"23012016021118camera-hanh-trinh.jpg";}', '0000-00-00', 14, 0, 0, 'Camera hành trình tân phát (sản phẩm test)', 'Camera hành trình tân phát (sản phẩm test)', 1, 11, 619, 0, '&#160;', '<iframe width="450" height="420" src="https://www.youtube.com/embed/6NP9fAVqEbg" frameborder="0" allowfullscreen></iframe>', '2016-01-23 07:30:14', '2016-01-23 07:14:19'),
(1622, NULL, 'Thiết bị dẫn đường cho ôtô sản phẩm test (công ty Tân Phát)', 0, 'thiet-bi-dan-duong-cho-oto-san-pham-test&amp;ndash;&amp;ndash;cong-ty-tan-phat-', '', '1', '', 'Thông tin mô tả sản phẩm', '&#160;', 500000000, 0, 0, 0, 0, 0, '', 0, 0, 0, 160, 160, 0, 0, '12 tháng', '', '23012016022224', 'a:1:{i:0;s:65:"23012016022224w620h405f1c1-files-articles-2013-1076744-tomtom.jpg";}', '0000-00-00', 2, 0, 0, 'Thiết bị dẫn đường cho ôtô sản phẩm test (công ty Tân Phát)', 'Thiết bị dẫn đường cho ôtô sản phẩm test (công ty Tân Phát)', 1, 0, 619, 0, 'Thông tin phụ kiện', '', '2016-01-23 07:37:57', '2016-01-23 07:22:24'),
(1623, NULL, 'Máy (thiết bị) chẩn đoán lỗi ô tô (sản phẩm test công ty Tan Phát)', 0, 'may&amp;ndash;&amp;ndash;thiet-bi&amp;ndash;&amp;ndash;chan-doan-loi-o-to&amp;ndash;&amp;ndash;san-pham-test-cong-ty-tan-phat-', '', '1', '', '&#160;', '&#160;', 3000000999, 0, 0, 0, 0, 0, '', 0, 0, 0, 160, 160, 0, 0, '12 tháng', '', '23012016022448', 'a:1:{i:0;s:19:"230120160224481.jpg";}', '0000-00-00', 0, 0, 0, 'Máy (thiết bị) chẩn đoán lỗi ô tô (sản phẩm test công ty Tan Phát)', 'Máy (thiết bị) chẩn đoán lỗi ô tô (sản phẩm test công ty Tan Phát)', 1, 0, 619, 0, '&#160;', '', '2016-01-23 07:24:48', '2016-01-23 07:24:48'),
(1624, NULL, 'Hai thiết bị tối tân dành cho ôtô', 0, 'hai-thiet-bi-toi-tan-danh-cho-oto-', '', '1', '', '&#160;', '&#160;', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 160, 160, 0, 0, '', '', '23012016022617', 'a:1:{i:0;s:24:"23012016022617a1 (1).jpg";}', '0000-00-00', 0, 0, 0, 'Hai thiết bị tối tân dành cho ôtô ', 'Hai thiết bị tối tân dành cho ôtô ', 1, 0, 619, 0, '&#160;', '', '2016-01-23 07:26:17', '2016-01-23 07:26:17'),
(1625, NULL, 'Hai thiết bị tối tân dành cho ôtô xuất hiện tại Việt Nam', 0, 'hai-thiet-bi-toi-tan-danh-cho-oto-xuat-hien-tai-viet-nam', '', '1', '', '&#160;', '&#160;', 0, 0, 0, 1, 0, 0, '', 0, 4294967295, 4294967295, 160, 160, 4294967295, 4294967295, '', '', '23012016022702', 'a:1:{i:0;s:43:"23012016022702Toyota_camry_2014__2.5Q_6.jpg";}', '0000-00-00', 3, 0, 0, 'Hai thiết bị tối tân dành cho ôtô xuất hiện tại Việt Nam', 'Hai thiết bị tối tân dành cho ôtô xuất hiện tại Việt Nam', 1, 0, 619, 0, '&#160;', '', '2016-01-23 07:53:53', '2016-01-23 07:53:38'),
(1626, NULL, 'Thiết bị định vị oto', 0, 'thiet-bi-dinh-vi-oto', '', '1', '', '&#160;', '&#160;', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 160, 160, 0, 0, '', '', '23012016022810', 'a:1:{i:0;s:34:"23012016022810dinh-vi-pt08 (1).jpg";}', '0000-00-00', 1, 0, 0, 'Thiết bị định vị oto', 'Thiết bị định vị oto', 1, 0, 619, 0, '&#160;', '', '2016-01-23 07:29:17', '2016-01-23 07:28:10'),
(1627, NULL, 'Thiết bị đo xung điện ô tô', 0, 'thiet-bi-do-xung-dien-o-to', '', '1', '', '&#160;', '&#160;', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 160, 160, 0, 0, '', '', '23012016023437', 'a:1:{i:0;s:37:"23012016023437maydocloioto.vn2_10.jpg";}', '0000-00-00', 0, 0, 0, 'Thiết bị đo xung điện ô tô', 'Thiết bị đo xung điện ô tô', 1, 0, 619, 0, '&#160;', '', '2016-01-23 07:34:37', '2016-01-23 07:34:37'),
(1628, NULL, 'Cốc lọc dầu ô tô', 0, 'coc-loc-dau-o-to', '', '1', '', '&#160;', '&#160;', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 160, 160, 0, 0, '', '', '23012016024129', 'a:1:{i:0;s:44:"23012016024129201301133645_15400_plc_004.jpg";}', '0000-00-00', 0, 0, 0, 'Cốc lọc dầu ô tô', 'Cốc lọc dầu ô tô', 1, 0, 619, 0, '&#160;', '', '2016-01-23 07:41:29', '2016-01-23 07:41:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_referer`
--

CREATE TABLE `tbl_referer` (
  `re_id` int(10) UNSIGNED NOT NULL,
  `re_domain` varchar(255) NOT NULL,
  `re_count` int(10) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_referer`
--

INSERT INTO `tbl_referer` (`re_id`, `re_domain`, `re_count`) VALUES
(67, 'www.netcraft.com', 2),
(66, 'tanphat.com', 9),
(65, 'tanphat.vn', 16),
(64, 'HGR5L4RWHUYQ5DK53FC2LQ47Z34LFNJVVA65C5FBKYSM34SVL234SKVXHM2CUH2.W.XB73YTAODFBBEHPSKYFDQUCD2CIKPTEU6DGVQ6T7Q7UJOGXC.cdn1.common.crawl.zone', 2),
(63, 'hundejo.com', 1),
(62, 'hvd-store.com', 1),
(61, 'tanphat.dev', 2),
(60, 'www.google.com.vn', 3),
(59, 'TANPHATGROUP.com', 1),
(58, 'www.facebook.com', 10),
(57, 'www.google.com', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_search`
--

CREATE TABLE `tbl_search` (
  `search_id` int(10) UNSIGNED NOT NULL,
  `search_text` varchar(255) NOT NULL,
  `search_count` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `service_id` int(10) UNSIGNED NOT NULL,
  `service_info` text CHARACTER SET utf8 NOT NULL,
  `service_full` longtext CHARACTER SET utf8 NOT NULL,
  `service_data` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`service_id`, `service_info`, `service_full`, `service_data`) VALUES
(1, '<p>\r\n	<img alt="" height="284" src="http://northstar.vn/uploaded/services.jpg" width="500" /></p>\r\n', '<div>\r\n	Ch&uacute;ng t&ocirc;i hiểu rằng n&oacute;i những lời hoa mỹ về m&igrave;nh th&igrave; dễ nhưng để được sự tin cậy của qu&iacute; kh&aacute;ch h&agrave;ng l&agrave; rất kh&oacute;, ch&iacute;nh v&igrave; vậy chỉ c&oacute; một con đường l&agrave; phải l&agrave;m ra những sản phẩm chuy&ecirc;n nghiệp v&agrave; mang lại hiệu quả thiết thực cho kh&aacute;ch h&agrave;ng, với phương ch&acirc;m đ&oacute; ch&uacute;ng t&ocirc;i lu&ocirc;n nỗ lực&nbsp;<span>mang đến cho kh&aacute;ch h&agrave;ng&nbsp;</span>những dịch vụ tốt nhất<span>, qua đ&oacute; n&acirc;ng cao khả năng cạnh tranh cho kh&aacute;ch h&agrave;ng trong lĩnh vực quảng b&aacute; t&ecirc;n tuổi tr&ecirc;n Internet.</span></div>\r\n<br />\r\n<div>\r\n	Ch&uacute;ng t&ocirc;i cũng đ&aacute;nh gi&aacute; cao chất lượng v&agrave; tr&igrave;nh độ nghiệp vụ trong c&ocirc;ng việc, cũng như những giải ph&aacute;p v&agrave; kinh nghiệm m&agrave; ch&uacute;ng t&ocirc;i cung cấp cho kh&aacute;ch h&agrave;ng.</div>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setup`
--

CREATE TABLE `tbl_setup` (
  `set_id` int(1) UNSIGNED NOT NULL,
  `set_pass` varchar(10) NOT NULL,
  `set_info` varchar(255) NOT NULL,
  `set_count_pro` varchar(200) NOT NULL,
  `set_count_news` varchar(200) NOT NULL,
  `set_pro_hot` varchar(10) NOT NULL,
  `set_pro_bestsale` varchar(10) NOT NULL,
  `set_pro_new` varchar(10) NOT NULL,
  `set_pro_saleoff` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_setup`
--

INSERT INTO `tbl_setup` (`set_id`, `set_pass`, `set_info`, `set_count_pro`, `set_count_news`, `set_pro_hot`, `set_pro_bestsale`, `set_pro_new`, `set_pro_saleoff`) VALUES
(1, '', 'Website đang bảo trì và nâng cấp, Quý khách vui lòng quay lại sau !', '20', '20', '15', '20', '15', '20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slideshow`
--

CREATE TABLE `tbl_slideshow` (
  `slide_id` int(10) UNSIGNED NOT NULL,
  `slide_title` varchar(200) NOT NULL,
  `slide_alt` varchar(200) NOT NULL,
  `slide_image` varchar(200) NOT NULL,
  `slide_link` varchar(200) NOT NULL,
  `slide_type` int(2) NOT NULL,
  `slide_status` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slideshow`
--

INSERT INTO `tbl_slideshow` (`slide_id`, `slide_title`, `slide_alt`, `slide_image`, `slide_link`, `slide_type`, `slide_status`) VALUES
(35, 'Slide 1', 'Slide 1', '010.jpg', '', 0, 1),
(36, 'Slide 2', 'Slide 2', '020.jpg', '', 0, 1),
(37, 'Slide 3', 'Slide 3', '030.jpg', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_support`
--

CREATE TABLE `tbl_support` (
  `sup_id` int(10) UNSIGNED NOT NULL,
  `sup_name` varchar(50) NOT NULL,
  `sup_yahoo` varchar(50) NOT NULL,
  `sup_phone` varchar(100) NOT NULL,
  `sup_sky` varchar(100) NOT NULL,
  `sup_email` varchar(150) NOT NULL,
  `sup_order` int(10) NOT NULL DEFAULT '0',
  `sup_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_support`
--

INSERT INTO `tbl_support` (`sup_id`, `sup_name`, `sup_yahoo`, `sup_phone`, `sup_sky`, `sup_email`, `sup_order`, `sup_status`) VALUES
(21, 'Tư vấn Khách Hàng', '', '043 681 2043', 'window_i386', 'hoa.vietnamnet@gmail.com', 1, 1),
(24, 'Hỗ Trợ Khách Hàng', '', '0983 330 658', 'window_i386', 'hoa.vietnamnet@gmail.com', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` char(50) NOT NULL,
  `user_fullname` varchar(50) NOT NULL,
  `user_gender` char(1) NOT NULL DEFAULT '2',
  `user_phone` varchar(100) DEFAULT NULL,
  `user_address` varchar(200) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_ip` varchar(100) NOT NULL DEFAULT '0',
  `user_date` varchar(100) NOT NULL,
  `user_lastlogin` varchar(100) NOT NULL,
  `user_level` int(10) UNSIGNED NOT NULL DEFAULT '2',
  `user_mod` int(10) NOT NULL DEFAULT '0',
  `user_status` int(1) NOT NULL DEFAULT '1',
  `user_role` int(1) NOT NULL DEFAULT '1',
  `categories` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_password`, `user_fullname`, `user_gender`, `user_phone`, `user_address`, `user_email`, `user_ip`, `user_date`, `user_lastlogin`, `user_level`, `user_mod`, `user_status`, `user_role`, `categories`) VALUES
(158, 'quannm@tanphat.com', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Minh Quân', '1', '', '', 'quannm@tanphat.com', '117.7.239.178', '18:12:24 - 20/01/2016', '10:37:02 - 20/01/2016', 3, 0, 1, 4, 'false'),
(159, 'lalien@tanphat.com', 'e10adc3949ba59abbe56e057f20f883e', 'Lã Thị Lien', '2', '', '', 'lalien@tanphat.com', '117.7.239.178', '18:12:53 - 20/01/2016', '18:13:05 - 20/01/2016', 5, 0, 1, 0, 'false'),
(153, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Administrator', '1', '0973980948', 'Vĩnh Phúc', 'phamkykshoi.info@gmail.com', '117.7.239.178', '23:02:54 - 26/12/2015', '11:32:25 - 21/01/2016', 3, 0, 1, 4, ''),
(156, 'hoanx@tanphat.com', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Xuân Hòa', '1', '0973980948', 'Vĩnh Phúc', 'hoanx@gmail.com', '117.7.239.178', '18:15:34 - 20/01/2016', '18:15:57 - 20/01/2016', 3, 0, 1, 4, 'false'),
(160, 'test', '96e79218965eb72c92a549dd5a330112', 'asdsadsadHTKHOI', '2', '0973980948asdsad', 'Vĩnh Phúcádsad', 'phamkykhoi.info@gmail.com', '127.0.0.1', '11:21:59 - 23/01/2016', '07:14:54 - 23/01/2016', 3, 0, 1, 4, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`),
  ADD KEY `word` (`word`);

--
-- Indexes for table `images_products`
--
ALTER TABLE `images_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_modules`
--
ALTER TABLE `role_modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanphat_posts`
--
ALTER TABLE `tanphat_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `tbl_categorie`
--
ALTER TABLE `tbl_categorie`
  ADD PRIMARY KEY (`cago_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `tbl_cloud`
--
ALTER TABLE `tbl_cloud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_config`
--
ALTER TABLE `tbl_config`
  ADD PRIMARY KEY (`config_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `tbl_contact_info`
--
ALTER TABLE `tbl_contact_info`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_content`
--
ALTER TABLE `tbl_content`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `tbl_count_search`
--
ALTER TABLE `tbl_count_search`
  ADD PRIMARY KEY (`count_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `tbl_doitac`
--
ALTER TABLE `tbl_doitac`
  ADD PRIMARY KEY (`doitac_id`);

--
-- Indexes for table `tbl_education`
--
ALTER TABLE `tbl_education`
  ADD PRIMARY KEY (`edu_id`);

--
-- Indexes for table `tbl_favorites`
--
ALTER TABLE `tbl_favorites`
  ADD PRIMARY KEY (`fa_id`);

--
-- Indexes for table `tbl_guide`
--
ALTER TABLE `tbl_guide`
  ADD PRIMARY KEY (`guide_id`),
  ADD UNIQUE KEY `guide_id` (`guide_id`);

--
-- Indexes for table `tbl_hangsanxuat`
--
ALTER TABLE `tbl_hangsanxuat`
  ADD PRIMARY KEY (`hangsanxuat_id`);

--
-- Indexes for table `tbl_intro`
--
ALTER TABLE `tbl_intro`
  ADD PRIMARY KEY (`in_id`);

--
-- Indexes for table `tbl_intro_one`
--
ALTER TABLE `tbl_intro_one`
  ADD PRIMARY KEY (`intro_id`);

--
-- Indexes for table `tbl_link`
--
ALTER TABLE `tbl_link`
  ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_office`
--
ALTER TABLE `tbl_office`
  ADD PRIMARY KEY (`office_id`);

--
-- Indexes for table `tbl_online`
--
ALTER TABLE `tbl_online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `tbl_popup`
--
ALTER TABLE `tbl_popup`
  ADD PRIMARY KEY (`pop_id`);

--
-- Indexes for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tbl_referer`
--
ALTER TABLE `tbl_referer`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `tbl_search`
--
ALTER TABLE `tbl_search`
  ADD PRIMARY KEY (`search_id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `tbl_setup`
--
ALTER TABLE `tbl_setup`
  ADD PRIMARY KEY (`set_id`);

--
-- Indexes for table `tbl_slideshow`
--
ALTER TABLE `tbl_slideshow`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `tbl_support`
--
ALTER TABLE `tbl_support`
  ADD PRIMARY KEY (`sup_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` bigint(13) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `images_products`
--
ALTER TABLE `images_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `role_modules`
--
ALTER TABLE `role_modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
--
-- AUTO_INCREMENT for table `tanphat_posts`
--
ALTER TABLE `tanphat_posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  MODIFY `article_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_categorie`
--
ALTER TABLE `tbl_categorie`
  MODIFY `cago_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=639;
--
-- AUTO_INCREMENT for table `tbl_config`
--
ALTER TABLE `tbl_config`
  MODIFY `config_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `con_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;
--
-- AUTO_INCREMENT for table `tbl_contact_info`
--
ALTER TABLE `tbl_contact_info`
  MODIFY `contact_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_content`
--
ALTER TABLE `tbl_content`
  MODIFY `con_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_count_search`
--
ALTER TABLE `tbl_count_search`
  MODIFY `count_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cus_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
--
-- AUTO_INCREMENT for table `tbl_doitac`
--
ALTER TABLE `tbl_doitac`
  MODIFY `doitac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_education`
--
ALTER TABLE `tbl_education`
  MODIFY `edu_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_favorites`
--
ALTER TABLE `tbl_favorites`
  MODIFY `fa_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tbl_guide`
--
ALTER TABLE `tbl_guide`
  MODIFY `guide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_hangsanxuat`
--
ALTER TABLE `tbl_hangsanxuat`
  MODIFY `hangsanxuat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_intro`
--
ALTER TABLE `tbl_intro`
  MODIFY `in_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_intro_one`
--
ALTER TABLE `tbl_intro_one`
  MODIFY `intro_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_link`
--
ALTER TABLE `tbl_link`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menu_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
--
-- AUTO_INCREMENT for table `tbl_office`
--
ALTER TABLE `tbl_office`
  MODIFY `office_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_online`
--
ALTER TABLE `tbl_online`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61705;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `page_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `tbl_popup`
--
ALTER TABLE `tbl_popup`
  MODIFY `pop_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `pro_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1629;
--
-- AUTO_INCREMENT for table `tbl_referer`
--
ALTER TABLE `tbl_referer`
  MODIFY `re_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `tbl_search`
--
ALTER TABLE `tbl_search`
  MODIFY `search_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `service_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_setup`
--
ALTER TABLE `tbl_setup`
  MODIFY `set_id` int(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_slideshow`
--
ALTER TABLE `tbl_slideshow`
  MODIFY `slide_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tbl_support`
--
ALTER TABLE `tbl_support`
  MODIFY `sup_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
