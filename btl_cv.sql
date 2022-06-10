-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 10, 2022 lúc 11:32 AM
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
-- Cơ sở dữ liệu: `btl_cv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `members`
--

CREATE TABLE `members` (
  `id_member` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `members`
--

INSERT INTO `members` (`id_member`, `user_name`, `password`, `fullname`, `description`, `email`) VALUES
(1, 'hqk99', 'hqkhanh123', 'Hà Quốc Khánh', 'Human beings are anatomically similar and related to the great apes but are distinguished by a more highly developed brain and a resultant capacity for articulate speech and abstract reasoning. In addition, human beings display a marked erectness of body carriage that frees the hands for use as manipulative members.', 'hqkhanh391999@gmail.com'),
(2, 'dtcminh', 'dtcminh123', 'Đường Thanh Công Minh', 'A human is a bipedal hominin characterized by having a higher and vertical forehead compared with earlier hominins. The brain volume is about 1,400 cc. The teeth and jaw are smaller and the chin is prominent. Humans are the hominins capable of creating and using complex tools, solving problems by sense and reasoning, using symbols and language, and creating complex social structures. Over time, humans have demonstrated behavioral modernity and advancement.', 'katminh2910@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `post_title` tinytext NOT NULL,
  `post_description` mediumtext NOT NULL,
  `post_body` text NOT NULL,
  `post_date` date NOT NULL,
  `id_member` int(11) NOT NULL,
  `post_picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `post_title`, `post_description`, `post_body`, `post_date`, `id_member`, `post_picture`) VALUES
(1, '10 Ways to Improve Your Digital Marketing Strategy', 'Tired of not having a clear direction for your online marketing activities? It\'s easy to regain focus and structure with our 10 tips.', 'When it comes to blogs, you want to make sure that you’re not too general in your body copy. If you’re thinking about a content marketing strategy, the better you tailor your content to your audience, the better engagement you will get. Having a niche helps, because that way you can really narrow down your content.\r\n\r\nHow you’re marketing your blog is another thing that’s important to remember when you’re starting out with your blog. While it takes a while to start dominating the search engines and search results, introducing a mailing list to announce the newest blog post is a great idea to drive traffic to your website and blog.\r\n\r\n', '2021-11-06', 1, 'https://www.insil.com.au/wp-content/uploads/2020/02/FeatureImage-1.jpg'),
(2, 'How I Built My Instagram Audience: A Lesson of Athenticity', 'While you might think that Instagram is only a visual platform, it\'s more a place for storytelling and authentic branding. Here\'s my story.', 'When it comes to blogs, you want to make sure that you’re not too general in your body copy. If you’re thinking about a content marketing strategy, the better you tailor your content to your audience, the better engagement you will get. Having a niche helps, because that way you can really narrow down your content.\r\n\r\nHow you’re marketing your blog is another thing that’s important to remember when you’re starting out with your blog. While it takes a while to start dominating the search engines and search results, introducing a mailing list to announce the newest blog post is a great idea to drive traffic to your website and blog.', '2021-11-16', 2, 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgVFRYYGBgaGhgaGhwYGhocGhoaGBgZGhkcG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `work` varchar(150) NOT NULL,
  `quotes` text NOT NULL,
  `picture` varchar(100) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `testimonials`
--

INSERT INTO `testimonials` (`id`, `full_name`, `work`, `quotes`, `picture`, `id_member`) VALUES
(1, 'Sharla McKinnen', 'Marketing Manager of McKinnen Properties Inc.', '”We\'d worked with a handful of influencer teams before but had grown sceptical due to the high costs and low returns. Dovile proved that social media can be a part of your marketing mix. ”', './image/carousel3.avif', 1),
(2, 'Jack Smith', 'CEO of FruitJuices Inc.', '”I was sick of wasting money on seemingly useless and empty Facebook campaigns, but thanks to Dovile, we were able to turn our marketing budget around and start making some real money.”', './image/carousel2.avif', 2),
(4, 'Nicollas Ductorn', 'Director of Corporate MarketingForge Inc.', '”We went from having zero online presence to dominating our niche on Google. As a technophobe I never thought we could do it, but currently social media amounts for the majority of our sales.”', './image/carousel1.avif', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id_member`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member` (`id_member`);

--
-- Chỉ mục cho bảng `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_member` (`id_member`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `members`
--
ALTER TABLE `members`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `members` (`id_member`);

--
-- Các ràng buộc cho bảng `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `members` (`id_member`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
