-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 05:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `img_about` text NOT NULL,
  `title_about1` varchar(100) NOT NULL,
  `discraption_about1` varchar(500) NOT NULL,
  `title_about2` varchar(100) NOT NULL,
  `discraption_about2` varchar(500) NOT NULL,
  `title_about3` varchar(100) NOT NULL,
  `discraption_about3` varchar(500) NOT NULL,
  `title_about4` varchar(100) NOT NULL,
  `discraption_about4` varchar(500) NOT NULL,
  `title_about5` varchar(100) NOT NULL,
  `discraption_about5` varchar(500) NOT NULL,
  `title_about6` varchar(100) NOT NULL,
  `discraption_about6` varchar(500) NOT NULL,
  `title_about7` varchar(100) NOT NULL,
  `discraption_about7` varchar(500) NOT NULL,
  `title_about8` varchar(100) NOT NULL,
  `discraption_about8` varchar(500) NOT NULL,
  `title_about9` varchar(100) NOT NULL,
  `discraption_about9` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `img_about`, `title_about1`, `discraption_about1`, `title_about2`, `discraption_about2`, `title_about3`, `discraption_about3`, `title_about4`, `discraption_about4`, `title_about5`, `discraption_about5`, `title_about6`, `discraption_about6`, `title_about7`, `discraption_about7`, `title_about8`, `discraption_about8`, `title_about9`, `discraption_about9`) VALUES
(1, 'about-us.jpg', 'Two-One Donec porttitor augues', 'Quisque bibendum cursus viverra. Mauris at ex ipsum. Aenean condimentum urna nisl, eget interdum ante euismod vel. Aliquam at metus sit amet nunc dapibus posuere.', 'Two-Two Donec porttitor augue', 'Maecenas et metus nisl. Morbi ac interdum metus. Aliquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapiend.\r\n', '1-03 Donec porttitor augue', 'Quisque bibendum cursus viverra. Mauris at ex ipsum. Aenean condimentum urna nisl, eget interdum ante euismod vel. Aliquam at metus sit amet nunc dapibus posuereee.', '2-03 Donec porttitor augue', 'Maecenas et metus nisl. Morbi ac interdum metus. Aliquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.', '3-03 Donec porttitor augue', 'Maecenas et metus nisl. Morbi ac interdum metus. Aliquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.', '01 Four Columns', 'Mauris at ex ipsum. Aenean condimentum urna nisl, eget interdum ante euismod vel. Aliquam at metus sit amet nunc dapibus posuerem.', '02 Four Columns', 'Aliquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapie.', '03 Four Columns', 'Morbi ac interdum metus. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus semper interdum et id sapien.', '04 Four Columns', 'Aliquam erat volutpat. Donec posuere tortor vel volutpat consequat. Mauris sagittis magna vel tellus ..');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id_blog` int(11) NOT NULL,
  `img_blogs` text NOT NULL,
  `title_blogs` varchar(200) NOT NULL,
  `sub_title_blogs` varchar(150) NOT NULL,
  `name_blogger_blogs` varchar(150) NOT NULL,
  `datepicker_blogs` varchar(150) NOT NULL,
  `num_comments_blog` varchar(20) NOT NULL,
  `discraption_blogs` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id_blog`, `img_blogs`, `title_blogs`, `sub_title_blogs`, `name_blogger_blogs`, `datepicker_blogs`, `num_comments_blog`, `discraption_blogs`) VALUES
(1, 'blog-post-01.jpg', 'LIFESTYLE', 'Best Template Website For HTML CSS', 'Admin', 'May 31, 2020', '12', 'Stand Blog is a free HTML CSS template for your CMS theme. You can easily adapt or customize it for any kind of CMS or website builder. You are allowed to use it for your business. You are NOT allowed to re-distribute the template ZIP file on any template collection site for the download purpose.Contact TemplateMo for more info. Thank you.'),
(2, 'blog-post-02.jpg', 'HEALTHY', 'Etiam Id Diam Vitae Lorem Dictum', 'Admin', 'May 24, 2020', '36', 'You can support us by contributing a little via PayPal. Please contact TemplateMo via Live Chat or Email. If you have any question or feedback about this template, feel free to talk to us. Also, you may check other CSS templates such as multi-page,resume, video, etc.'),
(3, 'blog-post-03.jpg', 'FASHION', 'Donec Tincidunt Leo Nec Magna', 'Admin', 'May 14, 2020', '48', 'Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo. Phasellus interdum, diam commodo egestas rhoncus, turpis nisi consectetur nibh, in vehicula eros orci vel neque sds.');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `Name_of_Comment` varchar(250) NOT NULL,
  `email_comment_inner` varchar(250) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `Name_of_Comment`, `email_comment_inner`, `subject`, `comment`, `created_at`) VALUES
(8, 'oijp', 'jbbkj@gmail.com', 'kljnklnklnkl KLs', 'You can browse different tags such as multi-page, resume, video, etc. to see more CSS templates. Sed hendrerit rutrum arcu, non malesuada nisi.', '2024-11-12 21:42:52'),
(9, 'lina', 'oijp@gmail.com', 'kljnklnklnkl', 'browse different tags such as multi-page, resume, video, etc. to see more CSS templates. Sed hendrerit rutrum arcu, non nisi.', '2024-11-12 21:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `phone_contact` varchar(200) NOT NULL,
  `email_contact` varchar(250) NOT NULL,
  `address_contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `phone_contact`, `email_contact`, `address_contact`) VALUES
(1, '333-444-6666', 'Clevermindpob@gmail.com', 'Amman-Jordan -King Hussein Business Park ZINC -23');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id_footer` int(11) NOT NULL,
  `facebook_footer` varchar(250) NOT NULL,
  `twitter_footer` varchar(250) NOT NULL,
  `instagram_footer` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id_footer`, `facebook_footer`, `twitter_footer`, `instagram_footer`) VALUES
(1, 'https://www.facebook.com/ClevermindICT/', 'https://twitter.com/search?q=cleverMindICT', 'https://www.instagram.com/clevermindpob/');

-- --------------------------------------------------------

--
-- Table structure for table `form_us`
--

CREATE TABLE `form_us` (
  `id_form_us` int(11) NOT NULL,
  `name_form_us` varchar(200) NOT NULL,
  `email_form_us` varchar(230) NOT NULL,
  `subject_form_us` varchar(255) NOT NULL,
  `message_form_us` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_us`
--

INSERT INTO `form_us` (`id_form_us`, `name_form_us`, `email_form_us`, `subject_form_us`, `message_form_us`) VALUES
(1, 'AAA bbb', 'aa@gmail.com', 'consectetur adipisicing', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus aliquid expedita quibusdam quidem .'),
(3, 'mahmod', 'mahmod32@gmail.com', 'cccvvtt', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus aliquid expedita quibusdam quidem .');

-- --------------------------------------------------------

--
-- Table structure for table `grid`
--

CREATE TABLE `grid` (
  `id_grid` int(11) NOT NULL,
  `img_grid` text NOT NULL,
  `title_grid` varchar(150) NOT NULL,
  `sub_title_grid` varchar(200) NOT NULL,
  `name_blogger_grid` varchar(100) NOT NULL,
  `datepicker_grid` varchar(200) NOT NULL,
  `num_comments_grid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grid`
--

INSERT INTO `grid` (`id_grid`, `img_grid`, `title_grid`, `sub_title_grid`, `name_blogger_grid`, `datepicker_grid`, `num_comments_grid`) VALUES
(1, 'blog-thumb-01.jpg', 'LIFESTYLE', 'Donec Tincidunt Leo', 'Admin', 'May 31, 2020', '12'),
(2, 'blog-thumb-02.jpg', 'LIFESTYLE', 'Suspendisse Et Metus', 'Admin', 'May 22, 2020', '26'),
(3, 'blog-thumb-03.jpg', 'LIFESTYLE', 'Mauris Ac Dolor Ornare', 'Admin', 'May 16, 2020', '28'),
(4, 'blog-thumb-04.jpg', 'LIFESTYLE', 'Responsive and Mobile Ready Layouts', 'Admin', 'May 18, 2020', '48'),
(5, 'blog-thumb-05.jpg', 'LIFESTYLE', 'Donec Tincidunt Leo', 'Admin', 'May 12, 2020', '16'),
(6, 'blog-thumb-06.jpg', 'LIFESTYLE', 'Mauris Ac Dolor Ornare', 'Admin', 'May 10, 2020', '3');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id_header` int(11) NOT NULL,
  `img_tab` text NOT NULL,
  `title_tab` varchar(150) NOT NULL,
  `name_logo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id_header`, `img_tab`, `title_tab`, `name_logo`) VALUES
(1, 'Website Logo.png', 'Stand Blog', 'Stand Blog');

-- --------------------------------------------------------

--
-- Table structure for table `inner`
--

CREATE TABLE `inner` (
  `id_inners` int(11) NOT NULL,
  `img_inners` text NOT NULL,
  `title_inners` varchar(200) NOT NULL,
  `sub_title_inners` varchar(250) NOT NULL,
  `name_blogger_inners` varchar(200) NOT NULL,
  `datepicker_inners` varchar(250) NOT NULL,
  `comments_inners` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inner`
--

INSERT INTO `inner` (`id_inners`, `img_inners`, `title_inners`, `sub_title_inners`, `name_blogger_inners`, `datepicker_inners`, `comments_inners`) VALUES
(1, 'blog-thumb-05.jpg', 'LIFESTYLE', 'Aenean Pulvinar Gravida Sem Nec', 'Admin', '4 September, 2023', '10');

-- --------------------------------------------------------

--
-- Table structure for table `slide_bar`
--

CREATE TABLE `slide_bar` (
  `id_slidebar` int(11) NOT NULL,
  `img_slidebar` text NOT NULL,
  `title_slidebar` varchar(200) NOT NULL,
  `sub_title_slidebar` varchar(150) NOT NULL,
  `name_blogger_slidebar` varchar(200) NOT NULL,
  `datepicker_slidebar` varchar(150) NOT NULL,
  `num_comments_slidebar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slide_bar`
--

INSERT INTO `slide_bar` (`id_slidebar`, `img_slidebar`, `title_slidebar`, `sub_title_slidebar`, `name_blogger_slidebar`, `datepicker_slidebar`, `num_comments_slidebar`) VALUES
(1, 'banner-item-01.jpg', 'Fashion', 'Morbi dapibus condimentum', 'Admin', 'May 12, 2020', '12'),
(2, 'banner-item-02.jpg', 'Nature', 'Donec porttitor augue at velit', 'Admin', 'May 14, 2020', '24'),
(3, 'banner-item-03.jpg', 'Lifestyle', 'Best HTML Templates on TemplateMo', 'Admin', 'May 16, 2020', '36'),
(4, 'banner-item-04.jpg', 'Fashion', 'Responsive and Mobile Ready Layouts', 'Admin', 'May 18, 2020', '48'),
(5, 'banner-item-05.jpg', 'Nature', 'Cras congue sed augue id ullamcorper', 'Admin', 'May 24, 2020', '64'),
(6, 'banner-item-06.jpg', 'Lifestyle', 'Suspendisse nec aliquet ligula', 'Admin', 'May 26, 2020', '72');

-- --------------------------------------------------------

--
-- Table structure for table `social_about`
--

CREATE TABLE `social_about` (
  `id_social_about` int(11) NOT NULL,
  `facebook_about` varchar(250) NOT NULL,
  `twitter_about` varchar(250) NOT NULL,
  `instagram_about` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_about`
--

INSERT INTO `social_about` (`id_social_about`, `facebook_about`, `twitter_about`, `instagram_about`) VALUES
(1, 'https://www.facebook.com/ClevermindICT/', 'https://twitter.com/search?q=cleverMindICT', 'https://www.instagram.com/clevermindpob/');

-- --------------------------------------------------------

--
-- Table structure for table `sub_comments`
--

CREATE TABLE `sub_comments` (
  `id` int(11) NOT NULL,
  `Name_of_Sub_Comment` varchar(250) NOT NULL,
  `sub_comment` text NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_comments`
--

INSERT INTO `sub_comments` (`id`, `Name_of_Sub_Comment`, `sub_comment`, `parent_id`, `created_at`) VALUES
(10, 'ssc', 'You can browse different tags such as multi-page, resume, video, etc. to see more. Sed hendrerit rutrum arcu, non malesuada nisi.', 9, '2024-11-12 21:44:13'),
(11, 'dxasdasxas', ' resume, video, etc. to see more CSS templates. Sed hendrerit rutrum arcu.', 8, '2024-11-12 21:45:07'),
(12, 'sschlkj', ' resume, video, etc. to see more CSS templates. Sed hendrerit rutrum arcu,', 9, '2024-11-12 21:46:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id_footer`);

--
-- Indexes for table `form_us`
--
ALTER TABLE `form_us`
  ADD PRIMARY KEY (`id_form_us`);

--
-- Indexes for table `grid`
--
ALTER TABLE `grid`
  ADD PRIMARY KEY (`id_grid`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id_header`);

--
-- Indexes for table `inner`
--
ALTER TABLE `inner`
  ADD PRIMARY KEY (`id_inners`);

--
-- Indexes for table `slide_bar`
--
ALTER TABLE `slide_bar`
  ADD PRIMARY KEY (`id_slidebar`);

--
-- Indexes for table `social_about`
--
ALTER TABLE `social_about`
  ADD PRIMARY KEY (`id_social_about`);

--
-- Indexes for table `sub_comments`
--
ALTER TABLE `sub_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id_footer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form_us`
--
ALTER TABLE `form_us`
  MODIFY `id_form_us` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `grid`
--
ALTER TABLE `grid`
  MODIFY `id_grid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id_header` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inner`
--
ALTER TABLE `inner`
  MODIFY `id_inners` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slide_bar`
--
ALTER TABLE `slide_bar`
  MODIFY `id_slidebar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `social_about`
--
ALTER TABLE `social_about`
  MODIFY `id_social_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_comments`
--
ALTER TABLE `sub_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_comments`
--
ALTER TABLE `sub_comments`
  ADD CONSTRAINT `sub_comments_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
