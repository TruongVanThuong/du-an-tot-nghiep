-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 04, 2023 lúc 05:20 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du-an-tot-nghiep`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_viet`
--

CREATE TABLE `bai_viet` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_bai_viet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_bai_viet_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loai_tin` bigint(20) UNSIGNED DEFAULT NULL,
  `mo_ta_ngan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ma_khach_hang` bigint(20) UNSIGNED NOT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hien_thi` int(11) DEFAULT NULL,
  `rating` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bai_viet`
--

INSERT INTO `bai_viet` (`id`, `ten_bai_viet`, `ten_bai_viet_slug`, `loai_tin`, `mo_ta_ngan`, `ma_khach_hang`, `noi_dung`, `hinh_anh`, `hien_thi`, `rating`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Test Tiêu Đề', 'Test Tiêu Đề', 2, 'Test Tiêu Đề', 4, 'Test Tiêu Đề', '111', 1, 1, '2023-12-04 08:55:44', '2023-01-09 17:00:00', '2023-12-04 08:55:44'),
(2, 'Test Tiêu Đề', 'Test Tiêu Đề', 2, 'Test Tiêu Đề', 3, 'Test Tiêu Đề', '111', 1, 1, '2023-12-04 08:54:46', '2023-01-09 17:00:00', '2023-12-04 08:54:46'),
(3, 'Test Tiêu Đề', 'Test Tiêu Đề', 2, 'Test Tiêu Đề', 3, 'Test Tiêu Đề', '111', 1, 1, '2023-12-04 08:53:16', '2023-01-09 17:00:00', '2023-12-04 08:53:16'),
(4, 'avc', 'avc', 2, 'abc', 4, '<p>abc</p>', '362893109_1799142003935498_3034979924445421777_n.jpg', 1, 0, NULL, '2023-11-10 19:57:41', '2023-11-14 19:42:34'),
(5, 'Israel sửa số liệu người thiệt mạng trong vụ đột kích của Hamas', 'israel-sua-so-lieu-nguoi-thiet-mang-trong-vu-dot-kich-cua-hamas', 2, 'Giới chức Israel cập nhật thống kê thương vong, cho biết số người thiệt mạng trong vụ tấn công của Hamas giảm từ 1.400 xuống khoảng 1.200.\r\n\r\nPhát ngôn viên Bộ Ngoại giao Israel Lior Haiat ngày 10/11 cho biết số liệu mới là \"ước tính cập nhật\", không phải con số cuối cùng và có thể thay đổi khi toàn bộ thi thể được nhận dạng. \"Con số này bao gồm lao động và công dân nước ngoài sau vụ tấn công ngày 7/10\", ông Haiat nói.', 4, '<h1>Israel sửa số liệu người thiệt mạng trong vụ đột k&iacute;ch của Hamas</h1>\n\n<p>Giới chức Israel cập nhật thống k&ecirc; thương vong, cho biết số người thiệt mạng trong vụ tấn c&ocirc;ng của Hamas giảm từ 1.400 xuống khoảng 1.200.</p>\n\n<p>Ph&aacute;t ng&ocirc;n vi&ecirc;n Bộ Ngoại giao Israel Lior Haiat ng&agrave;y 10/11 cho biết số liệu mới l&agrave; &quot;ước t&iacute;nh cập nhật&quot;, kh&ocirc;ng phải con số cuối c&ugrave;ng v&agrave; c&oacute; thể thay đổi khi to&agrave;n bộ thi thể được nhận dạng. &quot;Con số n&agrave;y bao gồm lao động v&agrave; c&ocirc;ng d&acirc;n nước ngo&agrave;i sau vụ tấn c&ocirc;ng ng&agrave;y 7/10&quot;, &ocirc;ng Haiat n&oacute;i.</p>\n\n<p>&Ocirc;ng Haiat từ chối giải th&iacute;ch l&yacute; do Israel sửa số liệu thống k&ecirc; về người thiệt mạng trong vụ tấn c&ocirc;ng của Hamas. Truyền th&ocirc;ng Israel đưa tin con số n&agrave;y giảm do nhiều thi thể của c&aacute;c tay s&uacute;ng tham gia vụ tấn c&ocirc;ng bị x&aacute;c định nhầm th&agrave;nh d&acirc;n thường Israel.</p>\n\n<p>Cơ quan y tế tại Dải Gaza c&ugrave;ng ng&agrave;y th&ocirc;ng b&aacute;o 11.078 người thiệt mạng, trong đ&oacute; c&oacute; 4.506 trẻ em, c&ugrave;ng 27.490 người bị thương sau hơn 5 tuần chiến sự Israel - Hamas.</p>\n\n<p><img alt=\"Một con đường tại thành phố Sdeot, Israel sau vụ tấn công ngày 7/10 của Hamas. Ảnh: Reuters\" src=\"https://i1-vnexpress.vnecdn.net/2023/11/11/5563187178137268080a-Israel-6098-1699666586.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=owS4FZ-uqplXhBjsRBQ6fA\" /></p>\n\n<p>&nbsp;</p>\n\n<p>Một con đường tại th&agrave;nh phố Sdeot, Israel sau vụ tấn c&ocirc;ng ng&agrave;y 7/10 của Hamas. Ảnh:&nbsp;<em>Reuters</em></p>\n\n<p>Cơ quan Li&ecirc;n Hợp Quốc phụ tr&aacute;ch người tị nạn Palestine (UNRWA), ng&agrave;y 10/11 th&ocirc;ng b&aacute;o 101 nh&acirc;n vi&ecirc;n của họ thiệt mạng trong hơn một th&aacute;ng giao tranh. &quot;Họ l&agrave; gi&aacute;o vi&ecirc;n, hiệu trưởng, kỹ sư, b&aacute;c sĩ, chuy&ecirc;n gia t&acirc;m l&yacute;, nh&acirc;n vi&ecirc;n hỗ trợ, nh&acirc;n vi&ecirc;n vệ sinh v&agrave; kỹ thuật vi&ecirc;n&quot;, UNRWA cho biết.</p>\n\n<p>Theo UNRWA, gần 1,6 triệu người tại&nbsp;<a href=\"https://vnexpress.net/chu-de/dai-gaza-6809\">Dải Gaza</a>&nbsp;phải rời bỏ nh&agrave; cửa từ ng&agrave;y 7/10, tương đương 2/3 d&acirc;n số khu vực. LHQ ước t&iacute;nh h&agrave;ng chục ngh&igrave;n d&acirc;n thường vẫn ở lại khu vực chiến sự diễn ra &aacute;c liệt nhất ở miền bắc Dải Gaza.</p>\n\n<p><a href=\"https://vnexpress.net/chu-de/lien-hop-quoc-4563\">LHQ</a>&nbsp;cũng k&ecirc;u gọi chấm dứt &quot;cuộc t&agrave;n s&aacute;t&quot; ở Gaza, cho biết &quot;san bằng to&agrave;n bộ khu d&acirc;n cư kh&ocirc;ng phải c&acirc;u trả lời cho những tội &aacute;c nghi&ecirc;m trọng m&agrave; Hamas đ&atilde; thực hiện&quot;. Philippe Lazzarini, l&atilde;nh đạo UNRWA, nhận định điều n&agrave;y &quot;đang tạo ra thế hệ người Palestine đau khổ mới, những người c&oacute; thể tiếp tục chu kỳ bạo lực&quot;.</p>\n\n<p>Tổng thống Ph&aacute;p&nbsp;<a href=\"https://vnexpress.net/chu-de/emmanuel-macron-1620\">Emmanuel Macron</a>&nbsp;ng&agrave;y 10/11 k&ecirc;u gọi Israel ngừng oanh tạc d&acirc;n thường tại Dải Gaza, cho biết &quot;kh&ocirc;ng c&oacute; lời biện minh n&agrave;o&quot; cho h&agrave;nh động n&agrave;y v&agrave; &quot;những c&aacute;i chết đang g&acirc;y phẫn uất khắp Trung Đ&ocirc;ng&quot;.</p>\n\n<p>Thủ tướng Israel Benjamin Netanyahu b&aacute;c bỏ lời k&ecirc;u gọi n&agrave;y của &ocirc;ng Macron, cho rằng ch&iacute;nh Hamas phải chịu tr&aacute;ch nhiệm với những d&acirc;n thường thiệt mạng.</p>\n\n<p>&quot;Israel l&agrave;m mọi thứ để hạn chế tổn hại đến d&acirc;n thường v&agrave; k&ecirc;u gọi họ rời khỏi v&ugrave;ng giao tranh, nhưng Hamas lại ngăn họ sơ t&aacute;n đến nơi an to&agrave;n, biến họ th&agrave;nh l&aacute; chắn sống&quot;, &ocirc;ng Netanyahun n&oacute;i.</p>\n\n<p><img alt=\"Thi thể các nạn nhân trong vụ tấn công bệnh viện Al-Shifa tại Gaza City, Dải Gaza ngày 10/11. Ảnh: AFP\" src=\"https://i1-vnexpress.vnecdn.net/2023/11/11/5563187178137268087a-Gaza-9679-4345-8792-1699666586.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=RjyIM056Omf--wt3fU6ZCA\" /></p>\n\n<p>Thi thể c&aacute;c nạn nh&acirc;n trong vụ tấn c&ocirc;ng bệnh viện Al-Shifa tại Gaza City, Dải Gaza ng&agrave;y 10/11. Ảnh:&nbsp;<em>AFP</em></p>\n\n<p>Trong cuộc họp b&aacute;o c&ugrave;ng ng&agrave;y tại New Delhi, Ấn Độ, Ngoại trưởng Mỹ Antony Blinken cho rằng đ&atilde; &quot;c&oacute; qu&aacute; nhiều người Palestine thiệt mạng&quot;.</p>\n\n<p>&quot;T&ocirc;i nghĩ rằng ch&uacute;ng ta đ&atilde; đạt được một số tiến bộ&quot;, &ocirc;ng Blinken n&oacute;i. &quot;Nhưng t&ocirc;i đ&atilde; n&oacute;i rất r&otilde; r&agrave;ng rằng cần phải l&agrave;m nhiều điều hơn để bảo vệ d&acirc;n thường v&agrave; chuyển viện trợ nh&acirc;n đạo cho họ&quot;.</p>\n\n<p>Israel cuối th&aacute;ng 10 đẩy mạnh hoạt động qu&acirc;n sự tại Dải Gaza nhằm trả đũa&nbsp;<a href=\"https://vnexpress.net/chu-de/hamas-6805\">Hamas</a>&nbsp;sau vụ đột k&iacute;ch ng&agrave;y 7/10 của nh&oacute;m. Lực lượng Ph&ograve;ng vệ Israel (IDF) bao v&acirc;y Gaza City từ ng&agrave;y 2/11 v&agrave; điều c&aacute;c đơn vị tiến v&agrave;o th&agrave;nh phố từ hai hướng.</p>\n\n<p>IDF ng&agrave;y 10/11 th&ocirc;ng b&aacute;o qu&acirc;n đội Israel tấn c&ocirc;ng v&agrave; chiếm một số tiền đồn của Hamas ở Gaza City, hạ khoảng 150 th&agrave;nh vi&ecirc;n của nh&oacute;m. Theo IDF, lực lượng Israel đ&atilde; tấn c&ocirc;ng hơn 15.000 mục ti&ecirc;u tại Dải Gaza, thu hơn 6.000 đơn vị vũ kh&iacute; kể từ khi chiến sự nổ ra hồi đầu th&aacute;ng 10.</p>', '362893109_1799142003935498_3034979924445421777_n.jpg', 1, 0, NULL, '2023-11-10 20:04:07', '2023-11-19 07:53:32'),
(6, 'Ông Zelensky nói Nga tăng cường tấn công Ukraine', 'ong-zelensky-noi-nga-tang-cuong-tan-cong-ukraine', 2, 'Tổng thống Ukraine Zelensky nói Nga đang tăng cường tấn công ở tiền tuyến, khi Kiev kêu gọi phương Tây viện trợ thêm vũ khí trước mùa đông.', 3, '<p>Tổng thống Ukraine Zelensky n&oacute;i Nga đang tăng cường tấn c&ocirc;ng ở tiền tuyến, khi Kiev k&ecirc;u gọi phương T&acirc;y viện trợ th&ecirc;m vũ kh&iacute; trước m&ugrave;a đ&ocirc;ng.</p>\r\n\r\n<p>&quot;Qu&acirc;n đội đ&atilde; b&aacute;o c&aacute;o số lượng cuộc tấn c&ocirc;ng của đối thủ gia tăng&quot;, Tổng thống Ukraine Volodymyr Zelensky đăng tr&ecirc;n Telegram ng&agrave;y 14/11. Lực lượng Nga đang tấn c&ocirc;ng xung quanh c&aacute;c th&agrave;nh phố Donetsk v&agrave; Avdeevka thuộc tỉnh Donetsk v&agrave; Kupyansk ở tỉnh Kharkov.</p>\r\n\r\n<p>&Ocirc;ng Zelensky cảnh b&aacute;o Nga c&oacute; thể tăng cường tập k&iacute;ch cơ sở hạ tầng năng lượng của Ukraine trước m&ugrave;a đ&ocirc;ng, giống như thời điểm n&agrave;y năm ngo&aacute;i.</p>\r\n\r\n<p><img alt=\"Tổng thống Ukraine Volodymyr Zelensky trong cuộc họp báo chung với Chủ tịch Ủy ban châu Âu tại Kiev ngày 4/11. Ảnh: AFP\" src=\"https://i1-vnexpress.vnecdn.net/2023/11/15/33ZV6GH-highres-4882-1700008387.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=OQmY08UUwey90ZjV7JYV2w\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tổng thống Ukraine Volodymyr Zelensky trong cuộc họp b&aacute;o chung với Chủ tịch Ủy ban ch&acirc;u &Acirc;u tại Kiev ng&agrave;y 4/11. Ảnh:&nbsp;<em>AFP</em></p>\r\n\r\n<p>Andriy Yermak, ch&aacute;nh văn ph&ograve;ng của &ocirc;ng&nbsp;<a href=\"https://vnexpress.net/chu-de/volodymyr-zelensky-4565\">Zelensky</a>, ng&agrave;y 13/11 gặp Ngoại trưởng Mỹ Antony Blinken tại Washington trong chuyến thăm nhằm th&uacute;c đẩy nguồn viện trợ vũ kh&iacute; phương T&acirc;y cho Ukraine.</p>\r\n\r\n<p>&quot;Khi m&ugrave;a đ&ocirc;ng cận kề, ch&uacute;ng t&ocirc;i dự đo&aacute;n c&aacute;c đợt tập k&iacute;ch t&ecirc;n lửa của Nga gia tăng&quot;, Yermak đăng tr&ecirc;n Telegram sau cuộc gặp. &quot;V&igrave; vậy ch&uacute;ng t&ocirc;i rất cần c&aacute;c hệ thống ph&ograve;ng kh&ocirc;ng v&agrave; t&ecirc;n lửa để bảo vệ những th&agrave;nh phố của Ukraine, cơ sở hạ tầng quan trọng v&agrave; h&agrave;nh lang vận chuyển ngũ cốc&quot;.</p>\r\n\r\n<p>&Ocirc;ng Yermak th&ecirc;m rằng &ocirc;ng đ&atilde; gặp Cố vấn An ninh Quốc gia Mỹ Jake Sullivan, c&ugrave;ng c&aacute;c cố vấn ch&iacute;nh s&aacute;ch đối ngoại v&agrave; an ninh Anh, ch&acirc;u &Acirc;u để thảo luận về t&igrave;nh h&igrave;nh chiến trường. &Ocirc;ng cho biết Nga đ&atilde; tăng lực lượng ở Ukraine v&agrave; Kiev cần &quot;duy tr&igrave; sự ủng hộ từ quốc tế&quot;.</p>\r\n\r\n<p>Khi xung đột k&eacute;o d&agrave;i gần 21 th&aacute;ng, Ukraine lo lắng sự mệt mỏi ng&agrave;y c&agrave;ng tăng ở phương T&acirc;y v&agrave; sự ch&uacute; &yacute; của quốc tế d&agrave;nh cho xung đột&nbsp;<a href=\"https://vnexpress.net/chu-de/chien-su-israel-hamas-6810\">Israel - Hamas</a>&nbsp;c&oacute; thể l&agrave;m suy yếu hỗ trợ cho qu&acirc;n đội của họ trong cuộc chiến với Nga.</p>\r\n\r\n<p>Trong một b&agrave;i ph&aacute;t biểu tại Washington ng&agrave;y 14/11, &ocirc;ng Yermak n&oacute;i Ukraine đ&atilde; &quot;c&oacute; vị tr&iacute; chắc chắn ở bờ t&acirc;y s&ocirc;ng Dnieper&quot;, song kh&ocirc;ng cung cấp th&ecirc;m th&ocirc;ng tin chi tiết.</p>\r\n\r\n<p><img alt=\"Cục diện chiến trường Nga - Ukraine. Đồ họa: WP\" src=\"https://i1-vnexpress.vnecdn.net/2023/11/15/cuc-dien-2-5467-1699502956-3128-1700010071.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=M1IRc3sqNytpbwt5FHKl-Q\" /></p>\r\n\r\n<p>C&aacute;c điểm n&oacute;ng giao tranh tại tỉnh Kharkov v&agrave; v&ugrave;ng Donbass. Đồ họa:&nbsp;<em>RYV</em></p>\r\n\r\n<p>S&ocirc;ng Dnieper đ&atilde; trở th&agrave;nh tiền tuyến ở miền nam&nbsp;<a href=\"https://vnexpress.net/chu-de/nga-710\">Ukraine</a>, với lực lượng Nga cố thủ ở bờ đ&ocirc;ng v&agrave; qu&acirc;n Ukraine ở ph&iacute;a đối diện. Trong nhiều tuần qua, c&aacute;c blogger qu&acirc;n sự Nga cho biết lực lượng Ukraine đ&atilde; đổ bộ th&agrave;nh c&ocirc;ng v&agrave;o ph&iacute;a Nga.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, Bộ Quốc ph&ograve;ng Nga v&agrave; Bộ Quốc ph&ograve;ng Ukraine đều kh&ocirc;ng b&igrave;nh luận về th&ocirc;ng tin n&agrave;y.</p>', 'chung-thuy-la-su-lua-chon-voh-3.jpg', 1, 0, NULL, '2023-11-14 19:35:53', '2023-11-14 20:18:16'),
(7, 'Ông Zelensky nói Nga tăng cường tấn công Ukraine', 'ong-zelensky-noi-nga-tang-cuong-tan-cong-ukraine', 2, 'Tổng thống Ukraine Zelensky nói Nga đang tăng cường tấn công ở tiền tuyến, khi Kiev kêu gọi phương Tây viện trợ thêm vũ khí trước mùa đông.', 3, '<p>Tổng thống Ukraine Zelensky n&oacute;i Nga đang tăng cường tấn c&ocirc;ng ở tiền tuyến, khi Kiev k&ecirc;u gọi phương T&acirc;y viện trợ th&ecirc;m vũ kh&iacute; trước m&ugrave;a đ&ocirc;ng.</p>\r\n\r\n<p>&quot;Qu&acirc;n đội đ&atilde; b&aacute;o c&aacute;o số lượng cuộc tấn c&ocirc;ng của đối thủ gia tăng&quot;, Tổng thống Ukraine Volodymyr Zelensky đăng tr&ecirc;n Telegram ng&agrave;y 14/11. Lực lượng Nga đang tấn c&ocirc;ng xung quanh c&aacute;c th&agrave;nh phố Donetsk v&agrave; Avdeevka thuộc tỉnh Donetsk v&agrave; Kupyansk ở tỉnh Kharkov.</p>\r\n\r\n<p>&Ocirc;ng Zelensky cảnh b&aacute;o Nga c&oacute; thể tăng cường tập k&iacute;ch cơ sở hạ tầng năng lượng của Ukraine trước m&ugrave;a đ&ocirc;ng, giống như thời điểm n&agrave;y năm ngo&aacute;i.</p>\r\n\r\n<p><img alt=\"Tổng thống Ukraine Volodymyr Zelensky trong cuộc họp báo chung với Chủ tịch Ủy ban châu Âu tại Kiev ngày 4/11. Ảnh: AFP\" src=\"https://i1-vnexpress.vnecdn.net/2023/11/15/33ZV6GH-highres-4882-1700008387.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=OQmY08UUwey90ZjV7JYV2w\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tổng thống Ukraine Volodymyr Zelensky trong cuộc họp b&aacute;o chung với Chủ tịch Ủy ban ch&acirc;u &Acirc;u tại Kiev ng&agrave;y 4/11. Ảnh:&nbsp;<em>AFP</em></p>\r\n\r\n<p>Andriy Yermak, ch&aacute;nh văn ph&ograve;ng của &ocirc;ng&nbsp;<a href=\"https://vnexpress.net/chu-de/volodymyr-zelensky-4565\">Zelensky</a>, ng&agrave;y 13/11 gặp Ngoại trưởng Mỹ Antony Blinken tại Washington trong chuyến thăm nhằm th&uacute;c đẩy nguồn viện trợ vũ kh&iacute; phương T&acirc;y cho Ukraine.</p>\r\n\r\n<p>&quot;Khi m&ugrave;a đ&ocirc;ng cận kề, ch&uacute;ng t&ocirc;i dự đo&aacute;n c&aacute;c đợt tập k&iacute;ch t&ecirc;n lửa của Nga gia tăng&quot;, Yermak đăng tr&ecirc;n Telegram sau cuộc gặp. &quot;V&igrave; vậy ch&uacute;ng t&ocirc;i rất cần c&aacute;c hệ thống ph&ograve;ng kh&ocirc;ng v&agrave; t&ecirc;n lửa để bảo vệ những th&agrave;nh phố của Ukraine, cơ sở hạ tầng quan trọng v&agrave; h&agrave;nh lang vận chuyển ngũ cốc&quot;.</p>\r\n\r\n<p>&Ocirc;ng Yermak th&ecirc;m rằng &ocirc;ng đ&atilde; gặp Cố vấn An ninh Quốc gia Mỹ Jake Sullivan, c&ugrave;ng c&aacute;c cố vấn ch&iacute;nh s&aacute;ch đối ngoại v&agrave; an ninh Anh, ch&acirc;u &Acirc;u để thảo luận về t&igrave;nh h&igrave;nh chiến trường. &Ocirc;ng cho biết Nga đ&atilde; tăng lực lượng ở Ukraine v&agrave; Kiev cần &quot;duy tr&igrave; sự ủng hộ từ quốc tế&quot;.</p>\r\n\r\n<p>Khi xung đột k&eacute;o d&agrave;i gần 21 th&aacute;ng, Ukraine lo lắng sự mệt mỏi ng&agrave;y c&agrave;ng tăng ở phương T&acirc;y v&agrave; sự ch&uacute; &yacute; của quốc tế d&agrave;nh cho xung đột&nbsp;<a href=\"https://vnexpress.net/chu-de/chien-su-israel-hamas-6810\">Israel - Hamas</a>&nbsp;c&oacute; thể l&agrave;m suy yếu hỗ trợ cho qu&acirc;n đội của họ trong cuộc chiến với Nga.</p>\r\n\r\n<p>Trong một b&agrave;i ph&aacute;t biểu tại Washington ng&agrave;y 14/11, &ocirc;ng Yermak n&oacute;i Ukraine đ&atilde; &quot;c&oacute; vị tr&iacute; chắc chắn ở bờ t&acirc;y s&ocirc;ng Dnieper&quot;, song kh&ocirc;ng cung cấp th&ecirc;m th&ocirc;ng tin chi tiết.</p>\r\n\r\n<p><img alt=\"Cục diện chiến trường Nga - Ukraine. Đồ họa: WP\" src=\"https://i1-vnexpress.vnecdn.net/2023/11/15/cuc-dien-2-5467-1699502956-3128-1700010071.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=M1IRc3sqNytpbwt5FHKl-Q\" /></p>\r\n\r\n<p>C&aacute;c điểm n&oacute;ng giao tranh tại tỉnh Kharkov v&agrave; v&ugrave;ng Donbass. Đồ họa:&nbsp;<em>RYV</em></p>\r\n\r\n<p>S&ocirc;ng Dnieper đ&atilde; trở th&agrave;nh tiền tuyến ở miền nam&nbsp;<a href=\"https://vnexpress.net/chu-de/nga-710\">Ukraine</a>, với lực lượng Nga cố thủ ở bờ đ&ocirc;ng v&agrave; qu&acirc;n Ukraine ở ph&iacute;a đối diện. Trong nhiều tuần qua, c&aacute;c blogger qu&acirc;n sự Nga cho biết lực lượng Ukraine đ&atilde; đổ bộ th&agrave;nh c&ocirc;ng v&agrave;o ph&iacute;a Nga.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, Bộ Quốc ph&ograve;ng Nga v&agrave; Bộ Quốc ph&ograve;ng Ukraine đều kh&ocirc;ng b&igrave;nh luận về th&ocirc;ng tin n&agrave;y.</p>', 'chung-thuy-la-su-lua-chon-voh-3.jpg', 1, 0, NULL, '2023-11-14 19:36:21', '2023-11-19 09:26:15'),
(8, 'Israel sửa số liệu ngư�', 'israel-sua-so-lieu-ngu', 2, '11213...', 3, '<p>ấds</p>\r\n<h1>test>\r\n<p>&nbsp;</p>\r\n\r\n<p>1<strong>adasd</strong></p>\r\n\r\n<p><strong><em>222123<s>34412</s></em></strong></p>', 'DHG_0483.jpeg', 1, 0, NULL, '2023-11-14 19:54:47', '2023-11-19 07:29:34'),
(9, 'test', 'test', 2, '123', 3, '<h3>Ch&uacute; &yacute;</h3>\r\n\r\n<p>Để ch&aacute;c chắn l&agrave; model của ch&uacute;ng ta mapping đ&uacute;ng với table trong CSDL hay chưa th&igrave; ch&uacute;ng ta sẽ test bằng&nbsp;<code>Tinker Artisan</code>. V&iacute; dụ bảng posts c&oacute; c&aacute;c trường (id, title, content, created_at, updated_at)</p>\r\n\r\n<p>&nbsp;Nếu trả về&nbsp;<code>true</code>&nbsp;th&igrave; chứng tỏ Eloquent đ&atilde; mapping đ&uacute;ng model với table trong CSDL rồi.</p>', 'DHG_0037.jpeg', NULL, 0, NULL, '2023-11-14 20:19:22', '2023-11-19 07:13:43'),
(10, 'tin khuyến mãi', 'tin-khuyen-mai', 1, 'khuyến mãi', 4, '<ul>\r\n	<li>tes<strong>t lỗi&nbsp;<em>22 3<s>333</s></em></strong></li>\r\n</ul>\r\n\r\n<ol>\r\n	<li><strong><em><s>1212</s></em></strong></li>\r\n</ol>', '1b.jpg', 1, 0, '2023-11-30 23:19:48', '2023-11-21 02:00:57', '2023-11-30 23:19:48'),
(11, 'tin khuyến mãi', 'tin-khuyen-mai', 2, 'test', 4, '<p>123</p>', '2_2-a.jpg', 1, 0, NULL, '2023-11-21 02:15:44', '2023-11-21 02:15:44'),
(12, 'Top 6 cách phối đồ mùa đông dành cho các bạn nữ sành điệu', 'top-6-cach-phoi-do-mua-dong-danh-cho-cac-ban-nu-sanh-dieu', 2, 'Phối đồ mùa đông dành cho nữ có thể mất khá nhiều thời gian vì đối với phái đẹp việc chăm chút vẻ bề ngoài trước khi ra đường vô cùng quan trọng. Đặc biệt, khi mùa đông đến, lựa chọn những set quần áo đông phù hợp với phong cách lẫn thời tiết cũng đòi hỏi rất nhiều công sức.', 4, '<p><strong>Phối đồ m&ugrave;a đ&ocirc;ng d&agrave;nh cho nữ</strong>&nbsp;c&oacute; thể mất khá nhiều thời gian v&igrave; đối với ph&aacute;i đẹp việc chăm ch&uacute;t vẻ bề ngo&agrave;i trước khi ra đường v&ocirc; c&ugrave;ng quan trọng. Đặc biệt, khi m&ugrave;a đ&ocirc;ng đến, lựa chọn những <strong>set quần &aacute;o</strong>&nbsp;ph&ugrave; hợp với phong c&aacute;ch lẫn thời tiết cũng đ&ograve;i hỏi rất nhiều c&ocirc;ng sức.</p>\r\n\r\n<p>V&igrave; vậy c&aacute;c n&agrave;ng tuyệt đối kh&ocirc;ng được bỏ lỡ&nbsp;<strong>7 c&aacute;ch phối đồ m&ugrave;a đ&ocirc;ng cho c&ocirc; n&agrave;ng s&agrave;nh điệu</strong>&nbsp;trong b&agrave;i viết dưới đ&acirc;y. V&agrave; đừng qu&ecirc;n note lại những phong c&aacute;ch m&agrave; bạn y&ecirc;u th&iacute;ch nhất để kho&aacute;c l&ecirc;n m&igrave;nh vẻ ngo&agrave;i xinh đẹp, tự tin trong m&ugrave;a đ&ocirc;ng n&agrave;y nh&eacute;!</p>\r\n\r\n<h2><strong>1. Xúng xính váy xinh trong kh&ocirc;ng khí mùa đ&ocirc;ng</strong></h2>\r\n\r\n<p>Mỗi độ đ&ocirc;ng về, c&aacute;c n&agrave;ng sẽ thường hạn chế diện những kiểu v&aacute;y đầm bởi e ngại kh&ocirc;ng kh&iacute; lạnh của m&ugrave;a đ&ocirc;ng. Tuy nhi&ecirc;n, chỉ cần kh&eacute;o l&eacute;o trong việc chọn d&aacute;ng v&aacute;y v&agrave; chất liệu ph&ugrave; hợp th&igrave; c&aacute;c n&agrave;ng vẫn c&oacute; thể v&ocirc; tư thả d&aacute;ng đầy nữ t&iacute;nh với những chiếc v&aacute;y m&agrave; m&igrave;nh y&ecirc;u th&iacute;ch.</p>\r\n\r\n<p>Trong kh&ocirc;ng kh&iacute; m&ugrave;a đ&ocirc;ng n&agrave;y, kh&ocirc;ng c&ograve;n g&igrave; th&iacute;ch hợp hơn những chiếc&nbsp;<strong><a href=\"https://routine.vn/thoi-trang-nu/chan-vay.html\" target=\"_blank\">ch&acirc;n v&aacute;y</a></strong>&nbsp;mang chất liệu len, jean hoặc nhung đầy ấm &aacute;p, v&agrave; kết hợp với d&aacute;ng v&aacute;y d&agrave;i mix với những chiếc &aacute;o kho&aacute;c chần b&ocirc;ng b&ecirc;n ngo&agrave;i, n&agrave;ng đ&atilde; c&oacute; ngay outfit đầy phong c&aacute;ch để xuống phố.</p>\r\n\r\n<p>Ngo&agrave;i ra, c&aacute;c n&agrave;ng c&ograve;n c&oacute; thể thử chọn&nbsp;<strong>m</strong><strong>ix đồ m&ugrave;a đ&ocirc;ng nữ với ch&acirc;n v&aacute;y,&nbsp;</strong>một item m&ugrave;a đ&ocirc;ng đa năng, tiện dụng với sự đa dạng c&oacute; thể phối với mọi kiểu &aacute;o.</p>\r\n\r\n<p><img alt=\"Phối đồ mùa đông cho nữ dịu dàng với chân váy dài\" src=\"https://routine.vn/media/amasty/webp/wysiwyg/Blog/phoi-do-mua-dong-cho-nu-diu-dang-voi-chan-vay-dai_jpg.webp\" style=\"width:900px\" /></p>\r\n\r\n<p><em>Ph&ocirc;́i đ&ocirc;̀ mùa đ&ocirc;ng cho nữ dịu dàng với ch&acirc;n váy dài</em></p>\r\n\r\n<p>B&ecirc;n cạnh đó, v&aacute;y x&ograve;e hay váy maxi bay bổng với &aacute;o kho&aacute;c kaki hoặc &aacute;o len d&aacute;ng d&agrave;i mang vẻ đẹp thời thượng cũng l&agrave; một sự lựa chọn tuyệt vời. T&acirc;́t cả hài hòa cùng n&eacute;t duy&ecirc;n d&aacute;ng của bạn tỏa s&aacute;ng trong những khoảnh khắc đ&aacute;ng nhớ.</p>\r\n\r\n<h2><strong>2. Phối quần &aacute;o đ&ocirc;ng đẹp d&agrave;nh cho nữ cũng set đồ nỉ</strong></h2>\r\n\r\n<p>Gi&oacute; m&ugrave;a đ&ocirc;ng thổi qua v&agrave; c&aacute;i lạnh đang đến dần sẽ kh&ocirc;ng c&oacute; g&igrave; th&iacute;ch hợp hơn sự ấm &aacute;p v&agrave; thoải m&aacute;i đến từ&nbsp;set đồ nỉ&nbsp;mang lại.&nbsp;Chất liệu&nbsp;vải nỉ&nbsp;dày dặn v&agrave; mềm mại, được thiết kế đa dạng mẫu m&atilde; như &aacute;o hoodie, &aacute;o sweater đi c&ugrave;ng với quần jogger, quần short bạn c&oacute; thể tạo n&ecirc;n những&nbsp;<strong>set đồ m&ugrave;a đ&ocirc;ng cho nữ&nbsp;nổi bật v&agrave; cuốn h&uacute;t</strong>&nbsp;trong những ng&agrave;y tiết trời lạnh gi&aacute;.</p>\r\n\r\n<p><img alt=\"Set sweater vải nỉ phù hợp với thời trang mùa đông cho nữ cá tính\" src=\"https://routine.vn/media/amasty/webp/wysiwyg/Blog/set-sweater-vai-ni-phu-hop-voi-thoi-trang-mua-dong-cho-nu-ca-tinh_jpg.webp\" style=\"width:900px\" /></p>\r\n\r\n<p><em>Set sweater vải nỉ phù hợp với thời trang mùa đ&ocirc;ng cho nữ cá tính</em></p>\r\n\r\n<p>Những set đồ n&agrave;y v&ocirc; c&ugrave;ng th&iacute;ch hợp cho những c&ocirc; n&agrave;ng y&ecirc;u th&iacute;ch phong c&aacute;ch thể thao v&agrave; năng động. Ngo&agrave;i việc diện những set đồ c&ugrave;ng t&ocirc;ng m&agrave;u, c&ugrave;ng chất liệu th&igrave; n&agrave;ng vẫn c&oacute; thể mix những chiếc &aacute;o nỉ với quần jean, quần kaki,.. v&agrave; tương tự chiếc quần nỉ cũng c&oacute; thể mix c&ugrave;ng những kiểu &aacute;o kh&aacute;c như &aacute;o thun, &aacute;o croptop để đa dạng phong c&aacute;ch của m&igrave;nh.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>3. Mix áo len nữ đơn giản, đầy c&aacute; t&iacute;nh</strong></h2>\r\n\r\n<p>Len lu&ocirc;n là ch&acirc;́t li&ecirc;̣u kh&ocirc;ng th&ecirc;̉ thi&ecirc;́u trong sản xuất những&nbsp;<strong>trang phục m&ugrave;a đ&ocirc;ng cho nữ</strong>. Đặc bi&ecirc;̣t là dòng sản ph&acirc;̉m&nbsp;<strong><a href=\"https://routine.vn/thoi-trang-nu/ao-nu/ao-len-nu.html\" target=\"_blank\">áo len nữ</a></strong>&nbsp;từ l&acirc;u đã là bi&ecirc;̉u tượng của phong cách thanh lịch, s&agrave;nh điệu cho mọi c&ocirc; gái.</p>\r\n\r\n<p>&Aacute;o len mang ưu điểm&nbsp;co gi&atilde;n tốt, linh hoạt,&nbsp;bền v&agrave; đ&agrave;n hồi, gi&uacute;p trang phục duy tr&igrave; h&igrave;nh d&aacute;ng ban đầu v&agrave; kh&oacute; bị biến dạng. Đ&acirc;y cũng l&agrave; kiểu &aacute;o dễ mặc, dễ phối c&ugrave;ng nhiều loại trang phục kh&aacute;c nhau như quần jean, quần vải ống rộng, ch&acirc;n v&aacute;y,... V&agrave; mỗi c&aacute;ch phối đều mang lại vẻ đẹp c&aacute; t&iacute;nh ri&ecirc;ng.</p>\r\n\r\n<p><img alt=\"Áo len dệt kim tạo nét thanh lịch phối đồ mùa đông cho nữ\" src=\"https://routine.vn/media/amasty/webp/wysiwyg/Blog/ao-len-det-kim-tao-net-dep-thanh-lich-phoi-do-mua-dong-cho-nu_jpg.webp\" style=\"width:900px\" /></p>\r\n\r\n<p><em>Áo len d&ecirc;̣t kim tạo nét thanh lịch ph&ocirc;́i đ&ocirc;̀ mùa đ&ocirc;ng cho nữ</em></p>\r\n\r\n<p>Đi&ecirc;̉m c&ocirc;̣ng cho c&ocirc; nàng mu&ocirc;́n n&ocirc;̉i b&acirc;̣t chi&ecirc;̀u cao của mình bằng cách kết hợp &aacute;o len lửng với những chiếc quần ống rộng cạp cao sẽ gi&uacute;p v&oacute;c d&aacute;ng của c&aacute;c bạn được cao v&agrave; thon thả hơn. Ngo&agrave;i ra, c&aacute;ch mix layer chiếc &aacute;o len nữ cổ V c&ugrave;ng &aacute;o sơ mi cũng l&agrave; một sự kết hợp th&uacute; vị m&agrave; c&aacute;c n&agrave;ng n&ecirc;n thử trong m&ugrave;a đ&ocirc;ng n&agrave;y.</p>\r\n\r\n<p>Bạn c&oacute; thể thử cả những phong c&aacute;ch layer kh&aacute;c nhau như &aacute;o len tay d&agrave;i, tay ngắn hoặc những chiếc &aacute;o len s&aacute;t n&aacute;ch. Mỗi kiểu d&aacute;ng sẽ mang lại một phong c&aacute;ch kh&aacute;c nhau v&agrave; ph&ugrave; hợp với mỗi thời tiết lạnh kh&aacute;c nhau để chọn một chiếc &aacute;o ph&ugrave; hợp.</p>\r\n\r\n<h2><strong>4. Blazer c&ocirc;ng sở s&agrave;nh điệu trong m&ugrave;a đ&ocirc;ng d&agrave;nh cho nữ</strong></h2>\r\n\r\n<p><strong><a href=\"https://routine.vn/thoi-trang-nu/ao-nu/ao-vest-blazer-nu.html\" target=\"_blank\">Blazer c&ocirc;ng sở nữ</a></strong>&nbsp;l&agrave; một item kh&ocirc;ng thể thiếu trong tủ đồ của c&aacute;c n&agrave;ng văn ph&ograve;ng. Với vẻ lịch sự v&agrave; chuy&ecirc;n nghiệp, &aacute;o kho&aacute;c blazer kh&ocirc;ng chỉ gi&uacute;p chị em tạo n&ecirc;n vẻ ngo&agrave;i trang nhã m&agrave; c&ograve;n mang đến phong th&aacute;i đầy tự tin.&nbsp;Đặc bi&ecirc;̣t, áo blazer nữ d&aacute;ng lửng được c&aacute;c n&agrave;ng ưa chu&ocirc;̣ng nhiều hơn do phong cách t&acirc;y &acirc;u quý phái, nhất định phải thử.</p>\r\n\r\n<p><img alt=\"Gợi ý cách phối quần áo đông cho nữ công sở cùng set blazer\" src=\"https://routine.vn/media/amasty/webp/wysiwyg/Blog/set-blazer-phoi-do-thoi-trang-mua-dong-cho-nu-cong-so_jpg.webp\" style=\"width:900px\" /></p>\r\n\r\n<p><em>Gợi &yacute; c&aacute;ch ph&ocirc;́i quần &aacute;o đ&ocirc;ng cho nữ c&ocirc;ng sở c&ugrave;ng set blazer</em></p>\r\n\r\n<p>Ngo&agrave;i ra, khi mix quần &aacute;o c&ugrave;ng những chiếc blazer c&ocirc;ng sở n&agrave;ng n&ecirc;n ch&uacute; &yacute; đến sự c&acirc;n đối về form dáng v&agrave; những phụ kiện như gi&agrave;y cao g&oacute;t, t&uacute;i x&aacute;ch, trang sức để gi&uacute;p ho&agrave;n thiện vẻ ngo&agrave;i chỉn chu v&agrave; chuy&ecirc;n nghiệp của bạn. Một số phụ kiện hạn chế khi bạn theo đuổi phong c&aacute;ch n&agrave;y l&agrave; d&eacute;p, gi&agrave;y bata hoặc những m&oacute;n phụ kiện rườm ra, rối mắt.</p>\r\n\r\n<h2><strong>5. C&aacute;ch ph&ocirc;́i áo khoác phao nữ v&agrave;o m&ugrave;a đ&ocirc;ng đẹp</strong></h2>\r\n\r\n<p>Mặc d&ugrave;&nbsp;<strong><a href=\"https://routine.vn/thoi-trang-nu/ao-nu/ao-khoac-nu.html\" target=\"_blank\">&aacute;o kho&aacute;c chần b&ocirc;ng nữ</a></strong>&nbsp;đ&atilde; trở th&agrave;nh một item thời trang đặc trưng, một biểu tượng của m&ugrave;a đ&ocirc;ng từ rất l&acirc;u, nhưng sức h&uacute;t của n&oacute; vẫn chưa bao giờ phai nhạt. Với thiết kế d&agrave;y dặn, mềm mại, &aacute;o kho&aacute;c phao kh&ocirc;ng chỉ giữ ấm khi nhi&ecirc;̣t đ&ocirc;̣ thời ti&ecirc;́t xu&ocirc;́ng thấp m&agrave; c&ograve;n mang lại sự thoải m&aacute;i, một phong c&aacute;ch c&aacute; t&iacute;nh cho người mặc.</p>\r\n\r\n<p>Bạn cũng c&oacute; thể kết hợp th&ecirc;m một số phụ kiện như mũ len, khăn qu&agrave;ng cổ hoặc găng tay để l&agrave;m nổi bật l&ecirc;n bộ outfit của m&igrave;nh v&agrave; tạo th&ecirc;m lớp giữ ấm cho ng&agrave;y đ&ocirc;ng lạnh. Sự linh hoạt v&agrave; dễ phối hợp của &aacute;o phao cho ph&eacute;p bạn thỏa sức s&aacute;ng tạo những bộ&nbsp;<strong><a href=\"https://routine.vn/collection/fall-winter.html\" target=\"_blank\">quần &aacute;o mùa đ&ocirc;ng</a></strong>&nbsp;đa dạng.</p>\r\n\r\n<p><img alt=\"Mix áo phao ngắn với quần jean cùng tone màu siêu xịn xò khi phối quần áo đông cho nữ\" src=\"https://routine.vn/media/amasty/webp/wysiwyg/Blog/mix-ao-phao-ngan-voi-quan-legging-sieu-xin-xo-khi-phoi-do-mua-dong-cho-nu_jpg.webp\" style=\"width:900px\" /></p>\r\n\r\n<p><em>Mix áo phao ngắn với qu&acirc;̀n jean c&ugrave;ng tone m&agrave;u si&ecirc;u xịn xò khi ph&ocirc;́i quần &aacute;o đ&ocirc;ng cho nữ</em></p>\r\n\r\n<p>D&ugrave; bạn đi làm, ở nhà hay tham gia c&aacute;c hoạt động ngoài trời th&igrave; &aacute;o kho&aacute;c phao nữ lu&ocirc;n l&agrave; một trang phục linh hoạt v&agrave; th&iacute;ch hợp. Với thiết kế si&ecirc;u nhẹ nhưng vẫn đảm bảo được sự ấm &aacute;p, gi&uacute;p điều chỉnh nhiệt độ cơ thể của bạn một c&aacute;ch dễ d&agrave;ng.&nbsp;Với thiết kế kh&ocirc;ng tay si&ecirc;u nhỏ gọn đến từ nh&agrave; Routine, gi&uacute;p bạn thuận tiện mang đi cũng như xếp gọn để sử dụng &aacute;o mọi l&uacute;c mọi nơi.</p>\r\n\r\n<h2><strong>6. Trang phục jean d&agrave;nh cho c&aacute;c c&ocirc; n&agrave;ng cá tính</strong></h2>\r\n\r\n<p>Ch&acirc;́t jean l&agrave; một trong những chất vải xuất hiện đầu ti&ecirc;n trong ng&agrave;nh thời trang nhưng những trang phục từ jean chưa bao giờ l&ocirc;̃i thời. Tr&ecirc;n thị trường hiện nay, người ta thường sử dụng vải jean nhi&ecirc;̀u nh&acirc;́t vào vi&ecirc;̣c may&nbsp;qu&acirc;̀n jean, &aacute;o kho&aacute;c denim, t&uacute;i vải hoặc một số phụ kiện kh&aacute;c như gi&agrave;y d&eacute;p, băng đ&ocirc;,...</p>\r\n\r\n<p>Với sự đa dạng mẫu m&atilde;&nbsp;<strong><a href=\"https://routine.vn/thoi-trang-nu/quan-nu/quan-jean-nu.html\" target=\"_blank\">quần jean nữ</a></strong>&nbsp;như qu&acirc;̀n &ocirc;́ng đứng, &ocirc;́ng su&ocirc;ng, họa ti&ecirc;́t, qu&acirc;̀n xẻ lai, qu&acirc;̀n jean &ocirc;́ng r&ocirc;̣ng hoặc &ocirc;́ng r&ocirc;̣ng x&ecirc;́p ly.&nbsp;Đi&ecirc;̉m nh&acirc;́n này sẽ khi&ecirc;́n bạn đã &ldquo;hồ bi&ecirc;́n&rdquo; cho mình style mùa đ&ocirc;ng đ&acirc;̣m ch&acirc;́t cá tính, tỏa ra năng lượng tươi mới cho những ngày chăm chỉ cu&ocirc;́i năm.</p>\r\n\r\n<p>Hơn nữa, set đồ Denim-On-Denim đang là xu hướng thời trang Thu Đ&ocirc;ng hi&ecirc;̣n nay. Phong c&aacute;ch n&agrave;y đ&atilde; tồn tại từ những năm 60 v&agrave; vẫn thu h&uacute;t sự ch&uacute; &yacute; của giới mộ điệu, trở th&agrave;nh xu hướng g&acirc;y sốt năm 2023. Khi kết hợp c&aacute;c m&oacute;n đồ denim kh&aacute;c nhau, bạn c&oacute; thể tạo ra một bộ trang phục đa chi&ecirc;̀u và đa phong cách.</p>\r\n\r\n<p><img alt=\"Cách kết hợp chân váy jean trong mix match đồ đông cho phụ nữ hiện đại\" src=\"https://routine.vn/media/amasty/webp/wysiwyg/Blog/ket-hop-vay-jean-trong-phoi-do-mua-dong-cho-nu-hien-dai_jpg.webp\" style=\"width:900px\" /></p>\r\n\r\n<p><em>C&aacute;ch k&ecirc;́t hợp ch&acirc;n váy jean trong mix match đ&ocirc;̀ đ&ocirc;ng cho phụ nữ hi&ecirc;̣n đại</em></p>\r\n\r\n<p>N&ecirc;́u bạn mu&ocirc;́n trải nghi&ecirc;̣m chi&ecirc;́c qu&acirc;̀n jean khác màu so với màu jean truy&ecirc;̀n th&ocirc;́ng, một chiếc quần jeans m&agrave;u be ch&iacute;nh l&agrave; một lựa chọn tuyệt vời cho m&ugrave;a đ&ocirc;ng này. Ngo&agrave;i t&ocirc;ng m&agrave;u cơ bản, dễ mix&amp;match, quần c&ograve;n mang một phong c&aacute;ch trẻ trung, hiện đại cho n&agrave;ng thỏa sức tạo n&ecirc;n những phong c&aacute;ch của ri&ecirc;ng m&igrave;nh.</p>', '17a.jpg', 1, 0, NULL, '2023-11-24 20:44:35', '2023-11-24 20:44:35'),
(13, 'tin khuyến mãi', 'tin-khuyen-mai', 1, 'Tận hưởng làn gió ƯU ĐÃI chỉ có tại YODY. POLO giá dùng thử chỉ 269K với loạt siêu phẩm POLO từ BST Xuân – Hè 2023', 4, '<h2>&nbsp;</h2>\r\n\r\n<p><br />\r\nLẦN ĐẦU TI&Ecirc;N ❌TO&Agrave;N BỘ POLO NAM/NỮ GI&Aacute; D&Ugrave;NG THỬ CHỈ #269K<br />\r\nDuy nhất từ NAY &ndash; 19/03 👉Để lại (.) nhận ưu đ&atilde;i ngay</p>\r\n\r\n<p>Tận hưởng l&agrave;n gi&oacute; ƯU Đ&Atilde;I chỉ c&oacute; tại YODY. POLO gi&aacute; d&ugrave;ng thử chỉ 269K với loạt si&ecirc;u phẩm POLO từ BST Xu&acirc;n &ndash; H&egrave; 2023</p>\r\n\r\n<p>🍀MẶC MỖI NG&Agrave;Y, THOẢI M&Aacute;I MỖI NG&Agrave;Y🍀</p>\r\n\r\n<p>Cơ hội sở hữu em &aacute;o mới toang &ldquo;POLO &ndash; C&agrave; ph&ecirc; dệt tổ ong&rdquo; chất liệu độc quyền nh&agrave; YODY được l&agrave;m 100% từ bả c&agrave; ph&ecirc; th&acirc;n thiện với m&ocirc;i trường</p>\r\n\r\n<p>👉Số lượng c&oacute; hạn nh&agrave; m&igrave;nh nhanh ch&acirc;n gh&eacute; YODY để mua đồ đẹp với gi&aacute; ưu đ&atilde;i nha🥰<br />\r\n&mdash;&mdash;&mdash;&mdash;&ndash;<br />\r\nĐại chỉ: 240 Phạm Văn Đồng, Thị Trấn Ch&acirc;u Ổ, B&igrave;nh Sơn, Quảng Ng&atilde;i (Vị tr&iacute; cửa h&agrave;ng ngay đầu cầu Ch&acirc;u Ổ, đối diện với nh&agrave; thuốc Long Ch&acirc;u)<br />\r\nHotline: 0819 484 259<br />\r\nZalo OA CH: https://zalo.me/3864260940967076149</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://openend.vn/wp-content/uploads/2022/01/chuong-trinh-khuyen-mai-trong-kinh-doanh-scaled.jpg\" style=\"height:1684px; width:2560px\" /></p>', 'KHUYẾN MẠI.png', 1, 0, NULL, '2023-12-04 09:00:13', '2023-12-04 09:00:13'),
(14, 'Tin tức mới', 'tin-tuc-moi', 2, 'Có rất nhiều Chị em hỏi về TRIỆT LÔNG\r\n– Chân, Tay, Bi… Hiện tại bên em đang có chương trình Ưu đãi chỉ 149K , Siêu Tiết Kiệm', 4, '<p>C&oacute; rất nhiều Chị em hỏi về TRIỆT L&Ocirc;NG<br />\r\n&ndash; Ch&acirc;n, Tay, Bi&hellip; Hiện tại b&ecirc;n em đang c&oacute; chương tr&igrave;nh Ưu đ&atilde;i chỉ 149K , Si&ecirc;u Tiết Kiệm<br />\r\n👉🏻 Để hiểu hơn về dịch vụ triệt l&ocirc;ng l&agrave;m đẹp, c&aacute;c chị c&oacute; thể inbox v&agrave;o page để b&ecirc;n em tư vấn chi tiết cho m&igrave;nh nh&eacute; ❤️<br />\r\n💯𝐔̛𝐔 Đ𝐀̃𝐈 𝐂𝐔̛̣𝐂 𝐒𝐎̂́𝐂 𝐓𝐑𝐈𝐄̣̂𝐓 𝐋𝐎̂𝐍𝐆 𝐓𝐎𝐀̀𝐍 𝐁𝐎̣̂ 𝐕𝐔̀𝐍𝐆 &ndash; 𝐓𝐑𝐎̣𝐍 𝐆𝐎́𝐈 𝟖𝟎𝟎𝐊 𝐍𝐀𝐘 𝐂𝐇𝐈̉ 𝐂𝐎̀𝐍 𝟏𝟒𝟗𝐤<br />\r\n👌 Đồng gi&aacute; triệt l&ocirc;ng bikini / full tay / full ch&acirc;n chỉ 𝟗𝟗𝐤 (gi&aacute; gốc 500k)<br />\r\n👌 Triệt l&ocirc;ng to&agrave;n v&ugrave;ng chỉ từ 𝟏𝟒𝟗𝐤/ 6 𝐛𝐮𝐨̂̉𝐢 (gi&aacute; gốc 800k)<br />\r\n👌 Triệt L&ocirc;ng V&ugrave;ng Lớn 𝟗𝟗𝐊 tặng v&ugrave;ng nhỏ<br />\r\n👉 Mua 10 tặng 3, mua 5 tặng 1 tất cả liệu tr&igrave;nh<br />\r\nNgo&agrave;i ra, n&acirc;ng cấp kh&aacute;ch h&agrave;ng VIP chỉ từ 10 triệu đồng với quyền lợi ưu đ&atilde;i trọn đời<br />\r\nDuy nhất 180 suất d&agrave;nh cho chị em n&agrave;o để lại SĐT đầu ti&ecirc;n!</p>\r\n\r\n<p><img alt=\"\" src=\"https://openend.vn/wp-content/uploads/2022/01/cac-hinh-thuc-khuyen-mai-pho-bien-scaled.jpg\" style=\"height:1707px; width:2560px\" /></p>', 'chuong-trinh-khuyen-mai-trong-kinh-doanh-scaled.jpg', 1, 0, NULL, '2023-12-04 09:03:34', '2023-12-04 09:03:34'),
(15, 'tin khuyến mãi', 'tin-khuyen-mai', 1, 'CHỈ SAU 60 PHÚT TÁI SINH MẦM TÓC NANOMAX HAIR', 4, '<p>CHỈ SAU 60 PH&Uacute;T T&Aacute;I SINH MẦM T&Oacute;C NANOMAX HAIR<br />\r\n⚡Ưu đ&atilde;i #888k cho 20 kh&aacute;ch h&agrave;ng đầu ti&ecirc;n để lại SĐT<br />\r\n⚡️ Cam kết ho&agrave;n tiền nếu kh&ocirc;ng hiệu quả!<br />\r\n⚡️ Bảo h&agrave;nh 10 năm, cam kết bằng văn bản<br />\r\n&mdash;&mdash;&mdash;&mdash;&mdash;&ndash;❖❖❖&mdash;&mdash;&mdash;&mdash;&mdash;<br />\r\n👉 Với si&ecirc;u c&ocirc;ng nghệ T&Aacute;I SINH MẦM T&Oacute;C NANOMAX HAIR:<br />\r\n✔️ Ứng dụng Vi B&agrave;o Gốc tự th&acirc;n NANOMAX HAIR cực kỳ an to&agrave;n v&agrave; tương th&iacute;ch ho&agrave;n to&agrave;n với cơ thể<br />\r\n✔️ Thay thế v&agrave; k&iacute;ch th&iacute;ch c&aacute;c nang t&oacute;c yếu, k&iacute;ch th&iacute;ch t&oacute;c mọc tự th&acirc;n<br />\r\n✔️ T&oacute;c d&agrave;i su&ocirc;n mượt m&agrave; kh&ocirc;ng cần x&acirc;m lấn, đau đớn<br />\r\n✔️ Ngăn ngừa g&atilde;y rụng, t&oacute;c d&agrave;i chắc khỏe chỉ 60 ph&uacute;t liệu tr&igrave;nh<br />\r\n✔️ Bảo h&agrave;nh 10 năm, cam kết bằng văn bản Đặc biệt, an to&agrave;n cho tất cả c&aacute;c loại da, n&oacute;i kh&ocirc;ng với g&atilde;y rụng. NHANH TAY ĐĂNG K&Yacute; NGAY!!<br />\r\n🏢 HỆ THỐNG PH&Ograve;NG KH&Aacute;M DA LIỄU MERCY<br />\r\nⓂ️ Địa chỉ: 72 &Ocirc; Chợ Dừa, Đống Đa, H&agrave; Nội<br />\r\nⓂ️ Địa chỉ: 158 Trần Nguy&ecirc;n H&atilde;n &ndash; L&ecirc; Ch&acirc;n &ndash; Hải Ph&ograve;ng<br />\r\n🌐 Website: https://www.mercyvietnam.site/tai-sinh-mam-toc-nanomaxhair<br />\r\n☎ Hotline : 0912 499 426</p>\r\n\r\n<p><img alt=\"Thủ tục đăng ký chương trình khuyến mại mới nhất\" src=\"https://cdn.thuvienphapluat.vn//uploads/tintuc/2022/02/21/KHUY%E1%BA%BEN%20M%E1%BA%A0I.png\" /></p>\r\n\r\n<p><em>Thủ tục đăng k&yacute; chương tr&igrave;nh khuyến mại mới nhất (Ảnh minh họa)</em></p>', 'cac-hinh-thuc-khuyen-mai-pho-bien-1536x1024.jpg', 1, 0, NULL, '2023-12-04 09:04:52', '2023-12-04 09:04:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_anh_banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_anh_banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hien_thi` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_san_pham` bigint(20) UNSIGNED NOT NULL,
  `ma_khach_hang` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `hien_thi` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `noi_dung`, `ma_san_pham`, `ma_khach_hang`, `rating`, `hien_thi`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Test noi dung', 1, 3, 1, 1, NULL, '2023-01-09 17:00:00', '2023-11-23 06:08:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan_bai_viet`
--

CREATE TABLE `binh_luan_bai_viet` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_khach_hang` bigint(20) UNSIGNED NOT NULL,
  `ma_bai_viet` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `hien_thi` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan_bai_viet`
--

INSERT INTO `binh_luan_bai_viet` (`id`, `noi_dung`, `ma_khach_hang`, `ma_bai_viet`, `rating`, `hien_thi`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Test noi dung', 3, 1, 1, 1, NULL, '2023-01-09 17:00:00', '2023-11-23 06:08:55'),
(2, 'Test noi dung', 3, 2, 1, 1, NULL, '2023-01-09 17:00:00', '2023-11-23 06:09:08'),
(3, 'Test noi dung', 3, 2, 1, 1, NULL, '2023-01-09 17:00:00', '2023-11-23 06:09:14'),
(4, 'Test noi dung', 3, 6, 1, 1, NULL, '2023-01-09 17:00:00', '2023-11-23 06:09:53'),
(5, 'Test noi dung', 3, 6, 1, 1, NULL, '2023-01-09 17:00:00', '2023-11-23 06:10:05'),
(6, 'Test noi dung', 3, 6, 1, 1, NULL, '2023-01-09 17:00:00', '2023-11-23 06:10:10'),
(7, 'Test noi dung', 3, 6, 1, 1, NULL, '2023-01-09 17:00:00', '2023-12-03 20:17:33'),
(8, '121212', 4, 1, 1, 1, NULL, '2023-12-03 23:09:13', '2023-12-03 23:09:13'),
(9, '121212', 4, 1, 1, 1, NULL, '2023-12-03 23:09:24', '2023-12-03 23:09:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_danh_muc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_danh_muc_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `ten_danh_muc`, `ten_danh_muc_slug`, `deleted_at`, `created_at`, `updated_at`, `is_delete`) VALUES
(1, 'Nam', 'Nam', NULL, '2023-11-10 21:11:40', '2023-11-10 21:11:40', 0),
(2, 'Nữ', 'Nữ', NULL, '2023-11-10 21:12:32', '2023-11-10 21:12:32', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `so_luong` int(11) NOT NULL,
  `ma_san_pham` bigint(20) UNSIGNED NOT NULL,
  `ma_khach_hang` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh_anh`
--

CREATE TABLE `hinh_anh` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_san_pham` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinh_anh`
--

INSERT INTO `hinh_anh` (`id`, `hinh_anh`, `ma_san_pham`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2_3-a-1.jpg', 1, NULL, '2023-11-11 04:22:04', '2023-11-11 04:22:04'),
(2, '362893109_1799142003935498_3034979924445421777_n.jpg', 1, NULL, '2023-11-11 04:22:05', '2023-11-11 04:22:05'),
(3, 'chung-thuy-la-su-lua-chon-voh-3.jpg', 1, NULL, '2023-11-14 20:10:27', '2023-11-14 20:10:27'),
(4, 'avatar-10.png', 2, '2023-12-04 08:42:18', '2023-11-19 07:16:23', '2023-12-04 08:42:18'),
(5, '5a.jpg', 3, NULL, '2023-11-30 23:49:07', '2023-11-30 23:49:07'),
(6, '5b.jpg', 3, NULL, '2023-11-30 23:49:10', '2023-11-30 23:49:10'),
(7, '5c.jpg', 3, NULL, '2023-11-30 23:49:12', '2023-11-30 23:49:12'),
(8, '5d.jpg', 3, NULL, '2023-11-30 23:49:14', '2023-11-30 23:49:14'),
(9, '11a.jpg', 4, NULL, '2023-12-04 06:33:12', '2023-12-04 06:33:12'),
(10, '11b.jpg', 4, NULL, '2023-12-04 06:33:23', '2023-12-04 06:33:23'),
(11, '11c.jpg', 4, NULL, '2023-12-04 06:33:29', '2023-12-04 06:33:29'),
(12, '11d.jpg', 4, NULL, '2023-12-04 06:33:34', '2023-12-04 06:33:34'),
(13, '16a.jpg', 5, NULL, '2023-12-04 06:35:19', '2023-12-04 06:35:19'),
(14, '16c.jpg', 5, NULL, '2023-12-04 06:35:23', '2023-12-04 06:35:23'),
(15, '16d.jpg', 5, NULL, '2023-12-04 06:35:27', '2023-12-04 06:35:27'),
(16, '16e.jpg', 5, NULL, '2023-12-04 06:35:30', '2023-12-04 06:35:30'),
(17, '6a.jpg', 2, NULL, '2023-12-04 08:41:32', '2023-12-04 08:41:32'),
(18, '6b.jpg', 2, NULL, '2023-12-04 08:41:35', '2023-12-04 08:41:35'),
(19, '7_1-a.jpg', 6, NULL, '2023-12-04 08:43:36', '2023-12-04 08:43:36'),
(20, '7_1-b.jpg', 6, NULL, '2023-12-04 08:43:39', '2023-12-04 08:43:39'),
(21, '7_1-c.jpg', 6, NULL, '2023-12-04 08:43:42', '2023-12-04 08:43:42'),
(22, '7_1-d.jpg', 7, NULL, '2023-12-04 08:44:47', '2023-12-04 08:44:47'),
(23, '7_1-e.jpg', 7, NULL, '2023-12-04 08:44:50', '2023-12-04 08:44:50'),
(24, '17c.jpg', 8, NULL, '2023-12-04 08:45:51', '2023-12-04 08:45:51'),
(25, '17d.jpg', 8, NULL, '2023-12-04 08:45:54', '2023-12-04 08:45:54'),
(26, '17a.jpg', 9, NULL, '2023-12-04 08:46:57', '2023-12-04 08:46:57'),
(27, '17b.jpg', 9, NULL, '2023-12-04 08:46:59', '2023-12-04 08:46:59'),
(28, '14a.jpg', 10, NULL, '2023-12-04 08:48:05', '2023-12-04 08:48:05'),
(29, '14b.jpg', 10, NULL, '2023-12-04 08:48:09', '2023-12-04 08:48:09'),
(30, '14c.jpg', 10, NULL, '2023-12-04 08:48:13', '2023-12-04 08:48:13'),
(31, '15a.jpg', 11, NULL, '2023-12-04 08:49:27', '2023-12-04 08:49:27'),
(32, '15b.jpg', 11, NULL, '2023-12-04 08:49:33', '2023-12-04 08:49:33'),
(33, '28a.jpg', 12, NULL, '2023-12-04 09:07:02', '2023-12-04 09:07:02'),
(34, '28b.jpg', 12, NULL, '2023-12-04 09:07:03', '2023-12-04 09:07:03'),
(35, '28c.jpg', 12, NULL, '2023-12-04 09:07:05', '2023-12-04 09:07:05'),
(36, '26a.jpg', 13, NULL, '2023-12-04 09:14:59', '2023-12-04 09:14:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_khach_hang` bigint(20) UNSIGNED NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_dien_thoai` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tong_tien` int(11) NOT NULL,
  `trang_thai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghi_chu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_hoa_don` bigint(20) UNSIGNED NOT NULL,
  `ma_san_pham` bigint(20) UNSIGNED NOT NULL,
  `so_luong` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ho_va_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_bam_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_sinh` date NOT NULL,
  `gioi_tinh` int(11) NOT NULL,
  `loai_tai_khoan` int(20) NOT NULL DEFAULT 0,
  `ma_bam_quen_mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `ho_va_ten`, `email`, `password`, `so_dien_thoai`, `dia_chi`, `ma_bam_email`, `ngay_sinh`, `gioi_tinh`, `loai_tai_khoan`, `ma_bam_quen_mat_khau`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'phu hung', 'bhoome22@gmail.com', '$2y$10$gQEjrNNW1CHJ85dBrPKF4epX9B7BpZ9i7n8WLjPkQoK28eevSbioC', '0123456789', 'abcabc', '4c9ebf5a-442b-496f-865a-ec38703fdaaa', '2023-11-02', 1, 3, NULL, NULL, '2023-11-05 07:26:49', '2023-11-05 07:26:49'),
(4, 'hunghung', 'hcoone22@gmail.com', '$2y$10$oAFZGx2Dn98GUgsCnKSjfu4hpgMKw6fT5fVn9mJR.bwNQ1uuwz9Ry', '0123456789', 'abcabc', '', '2023-11-08', 1, 3, '', NULL, '2023-11-06 04:55:12', '2023-11-06 05:17:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lien_he`
--

CREATE TABLE `lien_he` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_khach_hang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_dien_thoai` int(11) NOT NULL,
  `xu_ly` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_loai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_loai_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_danh_muc` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_delete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`id`, `ten_loai`, `ten_loai_slug`, `ma_danh_muc`, `deleted_at`, `created_at`, `updated_at`, `is_delete`) VALUES
(1, 'gucci', 'gucci', 1, NULL, '2023-11-10 21:15:25', '2023-11-17 06:41:00', 0),
(2, 'gucci', 'gucci', 2, NULL, '2023-11-10 21:15:37', '2023-11-10 21:15:37', 0),
(3, 'luis-vuiton', 'luis-vuiton', 1, NULL, '2023-11-10 21:15:57', '2023-11-10 21:15:57', 0),
(4, 'luis-vuiton', 'luis-vuiton', 2, NULL, '2023-11-10 21:16:06', '2023-11-10 21:16:06', 0),
(5, 'chanel', 'chanel', 1, NULL, '2023-11-10 21:16:14', '2023-11-10 21:16:14', 0),
(6, 'chanel', 'chanel', 2, NULL, '2023-11-10 21:16:23', '2023-11-10 21:16:23', 0),
(7, 'Suprime', 'Suprime', 1, NULL, '2023-11-10 21:16:43', '2023-11-10 21:16:43', 0),
(8, 'Suprime', 'Suprime', 2, NULL, '2023-11-10 21:16:49', '2023-11-10 21:16:49', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_08_27_144523_create_san_pham_table', 1),
(3, '2023_08_27_162902_create_loai_san_pham_table', 1),
(4, '2023_08_27_162933_create_loai_danh_muc_table', 1),
(5, '2023_09_12_130117_create_hinh_anh_table', 1),
(6, '2023_10_14_104157_create_hoa_don_chi_tiet_table', 1),
(7, '2023_10_14_104432_create_hoa_don_table', 1),
(8, '2023_10_14_104540_create_binh_luan_table', 1),
(9, '2023_10_14_104708_create_user_table', 1),
(10, '2023_10_14_104733_create_phan_quyen_table', 1),
(11, '2023_10_14_104803_create_bai_viet_table', 1),
(12, '2023_10_14_104848_create_gio_hang_table', 1),
(13, '2023_10_14_104923_create_lien_he_table', 1),
(14, '2023_10_14_104940_create_banner_table', 1),
(15, '2023_10_17_144113_create_khach_hangs_table', 1),
(16, '2023_10_26_150731_creat_table_binh_luanbaiviet', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phan_quyen`
--

CREATE TABLE `phan_quyen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_phan_quyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_phan_quyen` int(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phan_quyen`
--

INSERT INTO `phan_quyen` (`id`, `ten_phan_quyen`, `role_phan_quyen`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Chưa Kích Hoạt', -1, NULL, '2023-11-24 21:35:54', '2023-11-24 21:35:54'),
(2, 'Chưa Kích Hoạt', 0, NULL, '2023-11-24 21:36:14', '2023-11-24 21:36:14'),
(3, 'Khách hàng', 1, NULL, '2023-11-24 21:36:29', '2023-11-24 21:36:29'),
(4, 'Nhân Viên', 2, NULL, '2023-11-24 21:36:43', '2023-11-24 21:36:43'),
(5, 'Quản Trị Viên', 3, NULL, '2023-11-24 21:37:00', '2023-11-24 21:37:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_san_pham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_san_pham_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_san_pham` int(11) NOT NULL,
  `giam_gia_san_pham` int(11) NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong` int(11) NOT NULL,
  `ma_loai` bigint(20) UNSIGNED NOT NULL,
  `luot_xem` int(11) DEFAULT NULL,
  `dat_biet` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten_san_pham`, `ten_san_pham_slug`, `gia_san_pham`, `giam_gia_san_pham`, `mo_ta`, `so_luong`, `ma_loai`, `luot_xem`, `dat_biet`, `deleted_at`, `trang_thai`, `created_at`, `updated_at`) VALUES
(1, 'túi nam', 'tui-nam', 1200000, 1000000, '<p>t&uacute;i x&aacute;ch nam&lt;...</p>', 12, 1, NULL, 0, '2023-11-19 07:15:02', 0, '2023-11-11 04:22:00', '2023-11-19 07:15:02'),
(2, 'Bao tay', 'bao-tay', 120000, 110000, '<p>123</p>', 12, 2, NULL, 0, NULL, 1, '2023-11-19 07:16:18', '2023-12-04 08:41:35'),
(3, 'Giày Nam', 'giay-nam', 1000000, 900000, '<ol>\r\n	<li>Da thật</li>\r\n	<li>M&agrave;u đẹp</li>\r\n</ol>', 1234, 1, NULL, 1, NULL, 1, '2023-11-30 23:48:58', '2023-11-30 23:48:58'),
(4, 'Khăn quàn cổ', 'khan-quan-co', 123000, 1, '<p>Khăn qu&agrave;n cổ</p>', 123000, 4, NULL, 0, NULL, 1, '2023-12-04 06:33:04', '2023-12-04 08:39:18'),
(5, 'Thắt lưng da', 'that-lung-da', 123000, 110000, '<p>Thắt lưng da</p>', 123000, 4, NULL, 0, NULL, 1, '2023-12-04 06:35:15', '2023-12-04 08:39:58'),
(6, 'Giày Nam', 'giay-nam', 500000, 490000, '<ol>\r\n	<li>Da thật</li>\r\n	<li>M&agrave;u đẹp</li>\r\n</ol>', 123, 3, NULL, 0, NULL, 1, '2023-12-04 08:43:34', '2023-12-04 08:43:34'),
(7, 'Giày Nam', 'giay-nam', 300000, 290000, '<ol>\r\n	<li>Da thật</li>\r\n	<li>M&agrave;u đẹp</li>\r\n</ol>', 1234, 5, NULL, 0, NULL, 1, '2023-12-04 08:44:45', '2023-12-04 08:44:45'),
(8, 'VÍ', 'vi', 300000, 290000, '<ol>\r\n	<li>Da thật</li>\r\n	<li>M&agrave;u đẹp</li>\r\n</ol>', 132, 6, NULL, 0, NULL, 1, '2023-12-04 08:45:48', '2023-12-04 08:45:48'),
(9, 'Ví da', 'vi-da', 400000, 390000, '<ol>\r\n	<li>Da thật</li>\r\n	<li>M&agrave;u đẹp</li>\r\n</ol>', 1234, 5, NULL, 0, NULL, 1, '2023-12-04 08:46:54', '2023-12-04 08:46:54'),
(10, 'Thắt lưng da', 'that-lung-da', 400000, 359999, '<ol>\r\n	<li>Da thật</li>\r\n	<li>M&agrave;u đẹp</li>\r\n</ol>', 1234, 7, NULL, 0, NULL, 1, '2023-12-04 08:48:01', '2023-12-04 08:48:01'),
(11, 'Nước hoa', 'nuoc-hoa', 500000, 399999, '<p>Hương thơm tự nhi&ecirc;n</p>', 123, 8, NULL, 1, NULL, 1, '2023-12-04 08:49:22', '2023-12-04 08:49:22'),
(12, 'Thắt lưng da', 'that-lung-da', 689999, 479999, '<p>v&iacute; đẹp</p>\r\n\r\n<p>&nbsp;</p>', 1234, 8, NULL, 1, NULL, 1, '2023-12-04 09:07:01', '2023-12-04 09:15:24'),
(13, 'VÍ', 'vi', 799999, 677777, '<ol>\r\n	<li>Da thật</li>\r\n	<li>m&agrave;u đẹp</li>\r\n</ol>', 123, 6, NULL, 0, NULL, 1, '2023-12-04 09:14:58', '2023-12-04 09:14:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham_yeu_thich`
--

CREATE TABLE `san_pham_yeu_thich` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_san_pham` bigint(20) UNSIGNED NOT NULL,
  `ma_khach_hang` bigint(20) UNSIGNED NOT NULL,
  `created_at` date DEFAULT NULL,
  `update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `san_pham_yeu_thich`
--

INSERT INTO `san_pham_yeu_thich` (`id`, `ma_san_pham`, `ma_khach_hang`, `created_at`, `update_at`) VALUES
(1, 6, 4, '2023-12-01', '2023-12-01'),
(2, 4, 3, NULL, NULL),
(3, 10, 4, NULL, NULL),
(4, 5, 3, NULL, NULL),
(5, 3, 3, NULL, NULL),
(6, 4, 4, NULL, NULL),
(7, 6, 3, NULL, NULL),
(8, 5, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_khach_hang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kich_hoat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vai_tro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai_tai_khoan` bigint(20) UNSIGNED NOT NULL,
  `so_dien_thoai` int(11) NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_khach_hang` (`ma_khach_hang`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_san_pham` (`ma_san_pham`,`ma_khach_hang`),
  ADD KEY `ma_khach_hang` (`ma_khach_hang`);

--
-- Chỉ mục cho bảng `binh_luan_bai_viet`
--
ALTER TABLE `binh_luan_bai_viet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_khach_hang` (`ma_khach_hang`,`ma_bai_viet`),
  ADD KEY `ma_bai_viet` (`ma_bai_viet`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_san_pham` (`ma_san_pham`,`ma_khach_hang`),
  ADD KEY `ma_khach_hang` (`ma_khach_hang`);

--
-- Chỉ mục cho bảng `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_san_pham` (`ma_san_pham`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_khach_hang` (`ma_khach_hang`);

--
-- Chỉ mục cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_hoa_don` (`ma_hoa_don`,`ma_san_pham`),
  ADD KEY `ma_san_pham` (`ma_san_pham`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loai_tai_khoan` (`loai_tai_khoan`);

--
-- Chỉ mục cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_danh_muc` (`ma_danh_muc`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `phan_quyen`
--
ALTER TABLE `phan_quyen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_phan_quyen` (`role_phan_quyen`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_loai` (`ma_loai`);

--
-- Chỉ mục cho bảng `san_pham_yeu_thich`
--
ALTER TABLE `san_pham_yeu_thich`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_san_pham` (`ma_san_pham`,`ma_khach_hang`),
  ADD KEY `ma_khach_hang` (`ma_khach_hang`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `binh_luan_bai_viet`
--
ALTER TABLE `binh_luan_bai_viet`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinh_anh`
--
ALTER TABLE `hinh_anh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phan_quyen`
--
ALTER TABLE `phan_quyen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `san_pham_yeu_thich`
--
ALTER TABLE `san_pham_yeu_thich`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD CONSTRAINT `bai_viet_ibfk_1` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khach_hang` (`id`);

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khach_hang` (`id`),
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`id`);

--
-- Các ràng buộc cho bảng `binh_luan_bai_viet`
--
ALTER TABLE `binh_luan_bai_viet`
  ADD CONSTRAINT `binh_luan_bai_viet_ibfk_1` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khach_hang` (`id`),
  ADD CONSTRAINT `binh_luan_bai_viet_ibfk_2` FOREIGN KEY (`ma_bai_viet`) REFERENCES `bai_viet` (`id`);

--
-- Các ràng buộc cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `gio_hang_ibfk_1` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`id`),
  ADD CONSTRAINT `gio_hang_ibfk_2` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khach_hang` (`id`);

--
-- Các ràng buộc cho bảng `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD CONSTRAINT `hinh_anh_ibfk_1` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`id`);

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khach_hang` (`id`);

--
-- Các ràng buộc cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_1` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`id`),
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_2` FOREIGN KEY (`ma_hoa_don`) REFERENCES `hoa_don` (`id`);

--
-- Các ràng buộc cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD CONSTRAINT `khach_hang_ibfk_1` FOREIGN KEY (`loai_tai_khoan`) REFERENCES `phan_quyen` (`role_phan_quyen`);

--
-- Các ràng buộc cho bảng `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD CONSTRAINT `loai_san_pham_ibfk_1` FOREIGN KEY (`ma_danh_muc`) REFERENCES `danh_muc` (`id`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai_san_pham` (`id`);

--
-- Các ràng buộc cho bảng `san_pham_yeu_thich`
--
ALTER TABLE `san_pham_yeu_thich`
  ADD CONSTRAINT `san_pham_yeu_thich_ibfk_1` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khach_hang` (`id`),
  ADD CONSTRAINT `san_pham_yeu_thich_ibfk_2` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
