-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 08:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `addstory`
--

CREATE TABLE `addstory` (
  `id` int(255) NOT NULL,
  `story_img` varchar(255) NOT NULL,
  `story_title` varchar(255) NOT NULL,
  `display` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_img` varchar(255) NOT NULL,
  `uploaddate` varchar(255) NOT NULL,
  `todate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addstory`
--

INSERT INTO `addstory` (`id`, `story_img`, `story_title`, `display`, `user_id`, `user_name`, `user_email`, `user_img`, `uploaddate`, `todate`) VALUES
(14, '1672438.jpg', 'Nature', 'Public', '2', 'Vishal Patil', 'vishalpatil@gmail.com', 'Desert.jpg', '2021/04/03', '2021-04-04'),
(15, '@GAMINGMusicSoul.gif', 'Mood', 'Public', '2', 'Vishal Patil', 'vishalpatil@gmail.com', 'Desert.jpg', '2021/04/05', '2021-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `catagori` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `sendto_fname` varchar(255) NOT NULL,
  `sendto_lname` varchar(255) NOT NULL,
  `sendto_img` varchar(255) NOT NULL,
  `sendto_id` varchar(255) NOT NULL,
  `sendby_name` varchar(255) NOT NULL,
  `sendby_img` varchar(255) NOT NULL,
  `sendby_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `comm_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `p_img`, `p_name`, `catagori`, `p_id`, `sendto_fname`, `sendto_lname`, `sendto_img`, `sendto_id`, `sendby_name`, `sendby_img`, `sendby_id`, `user_id`, `comm_date`) VALUES
(33, 'Food', 'UPI-Cover-1-1024x512.png', 'UPI', 'Education', '9', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Piyush Babhulakar', 'scard.jpg', '6', '6', '2021-03-09'),
(34, 'Foodaaa', 'UPI-Cover-1-1024x512.png', 'UPI', 'Education', '9', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Piyush Babhulakar', 'scard.jpg', '6', '6', '2021-03-09'),
(35, 'Noce', 'UPI-Cover-1-1024x512.png', 'UPI', 'Education', '9', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Piyush Babhulakar', 'scard.jpg', '6', '6', '2021-03-09'),
(36, 'Pls explain in detail', '6785d0fa1dff0d7fc053bb5b36f90c06.gif', 'Book', 'Education', '10', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Piyush Babhulakar', 'scard.jpg', '6', '6', '2021-03-31'),
(37, 'Good Going on', '6785d0fa1dff0d7fc053bb5b36f90c06.gif', 'Book', 'Education', '10', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Piyush Babhulakar', 'scard.jpg', '6', '6', '2021-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `commstory`
--

CREATE TABLE `commstory` (
  `id` int(255) NOT NULL,
  `s_id` varchar(255) NOT NULL,
  `s_img` varchar(255) NOT NULL,
  `s_title` varchar(255) NOT NULL,
  `commto_name` varchar(255) NOT NULL,
  `commto_img` varchar(255) NOT NULL,
  `commto_id` varchar(255) NOT NULL,
  `commby_fname` varchar(255) NOT NULL,
  `commby_lname` varchar(255) NOT NULL,
  `commby_img` varchar(255) NOT NULL,
  `commby_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `comm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commstory`
--

INSERT INTO `commstory` (`id`, `s_id`, `s_img`, `s_title`, `commto_name`, `commto_img`, `commto_id`, `commby_fname`, `commby_lname`, `commby_img`, `commby_id`, `user_id`, `comm`) VALUES
(6, '5', 'thought-catalog-bGiMXk8sMHw-unsplash.jpg', 'Nature', 'Piyush Babhulakar', 'Lighthouse.jpg', '6', 'Vishal', 'Patil', 'Desert.jpg', '2', '2', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `dislikepost`
--

CREATE TABLE `dislikepost` (
  `id` int(255) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `catagori` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `disliketo_fname` varchar(255) NOT NULL,
  `disliketo_lname` varchar(255) NOT NULL,
  `disliketo_img` varchar(255) NOT NULL,
  `disliketo_id` varchar(255) NOT NULL,
  `dislikeby_name` varchar(255) NOT NULL,
  `dislikeby_img` varchar(255) NOT NULL,
  `dislikeby_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dislikepost`
--

INSERT INTO `dislikepost` (`id`, `p_img`, `p_name`, `catagori`, `p_id`, `disliketo_fname`, `disliketo_lname`, `disliketo_img`, `disliketo_id`, `dislikeby_name`, `dislikeby_img`, `dislikeby_id`, `user_id`) VALUES
(11, 'UPI-Cover-1-1024x512.png', 'UPI', 'Education', '9', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Piyush Babhulakar', 'Lighthouse.jpg', '6', '6');

-- --------------------------------------------------------

--
-- Table structure for table `disliketo_comment`
--

CREATE TABLE `disliketo_comment` (
  `id` int(255) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `catagori` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `disliketo_fname` varchar(255) NOT NULL,
  `disliketo_lname` varchar(255) NOT NULL,
  `disliketo_img` varchar(255) NOT NULL,
  `disliketo_id` varchar(255) NOT NULL,
  `dislikeby_name` varchar(255) NOT NULL,
  `dislikeby_lname` varchar(255) NOT NULL,
  `dislikeby_img` varchar(255) NOT NULL,
  `dislikeby_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `disliketocomm_fname` varchar(255) NOT NULL,
  `disliketocomm_lname` varchar(255) NOT NULL,
  `disliketocomm_img` varchar(255) NOT NULL,
  `disliketocomm_id` varchar(255) NOT NULL,
  `dislikebycomm_name` varchar(255) NOT NULL,
  `dislikebycomm_lname` varchar(255) NOT NULL,
  `dislikebycomm_img` varchar(255) NOT NULL,
  `dislikebycomm_id` varchar(255) NOT NULL,
  `comment_id` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disliketo_comment`
--

INSERT INTO `disliketo_comment` (`id`, `p_img`, `p_name`, `catagori`, `p_id`, `disliketo_fname`, `disliketo_lname`, `disliketo_img`, `disliketo_id`, `dislikeby_name`, `dislikeby_lname`, `dislikeby_img`, `dislikeby_id`, `user_id`, `disliketocomm_fname`, `disliketocomm_lname`, `disliketocomm_img`, `disliketocomm_id`, `dislikebycomm_name`, `dislikebycomm_lname`, `dislikebycomm_img`, `dislikebycomm_id`, `comment_id`, `comment`) VALUES
(16, 'UPI-Cover-1-1024x512.png', 'UPI', 'Education', '9', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Piyush', 'Babhulakar', 'scard.jpg', '6', '6', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Piyush', 'Babhulakar', 'scard.jpg', '6', '34', 'Foodaaa');

-- --------------------------------------------------------

--
-- Table structure for table `disliketo_subcomment`
--

CREATE TABLE `disliketo_subcomment` (
  `id` int(255) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `catagori` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `disliketo_fname` varchar(255) NOT NULL,
  `disliketo_lname` varchar(255) NOT NULL,
  `disliketo_img` varchar(255) NOT NULL,
  `disliketo_id` varchar(255) NOT NULL,
  `dislikeby_name` varchar(255) NOT NULL,
  `dislikeby_img` varchar(255) NOT NULL,
  `dislikeby_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `disliketosubcomm_fname` varchar(255) NOT NULL,
  `disliketosubcomm_img` varchar(255) NOT NULL,
  `disliketosubcomm_id` varchar(255) NOT NULL,
  `dislikebysubcomm_name` varchar(255) NOT NULL,
  `dislikebysubcomm_img` varchar(255) NOT NULL,
  `dislikebysubcomm_id` varchar(255) NOT NULL,
  `subcomment_id` varchar(255) NOT NULL,
  `subcomment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disliketo_subcomment`
--

INSERT INTO `disliketo_subcomment` (`id`, `p_img`, `p_name`, `catagori`, `p_id`, `disliketo_fname`, `disliketo_lname`, `disliketo_img`, `disliketo_id`, `dislikeby_name`, `dislikeby_img`, `dislikeby_id`, `user_id`, `disliketosubcomm_fname`, `disliketosubcomm_img`, `disliketosubcomm_id`, `dislikebysubcomm_name`, `dislikebysubcomm_img`, `dislikebysubcomm_id`, `subcomment_id`, `subcomment`) VALUES
(2, 'UPI-Cover-1-1024x512.png', 'UPI', 'Education', '9', '', '', '', '', '', 'Desert.jpg', '2', '2', '', '', '', '', 'Desert.jpg', '2', '68', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `des`, `type`, `user_id`, `f_name`, `l_name`, `email`) VALUES
(1, 'Good', 'Comment', '6', 'Piyush', 'Babhulakar', 'piyushbabhulakar12@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `id` int(255) NOT NULL,
  `foll_name` varchar(255) NOT NULL,
  `foll_namelast` varchar(255) NOT NULL,
  `foll_img` varchar(255) NOT NULL,
  `foll_id` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `user_img` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`id`, `foll_name`, `foll_namelast`, `foll_img`, `foll_id`, `user_name`, `user_lname`, `user_img`, `user_id`) VALUES
(85, 'Piyush', 'Babhulakar', 'scard.jpg', '6', 'Vishal', 'Patil', 'Desert.jpg', '2'),
(89, 'Yash ', 'Kanadagale', '—Pngtree—concept vector illustration of photographer_5435850.png', '7', 'Vishal', 'Patil', 'Desert.jpg', '2'),
(90, 'Vishal', 'Patil', 'Desert.jpg', '2', 'Yash ', 'Kanadagale', '—Pngtree—concept vector illustration of photographer_5435850.png', '7'),
(91, 'Vishal', 'Patil', 'Desert.jpg', '2', 'Piyush ', 'Babhulakar', 'scard.jpg', '6');

-- --------------------------------------------------------

--
-- Table structure for table `likepost`
--

CREATE TABLE `likepost` (
  `id` int(255) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `catagori` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `liketo_fname` varchar(255) NOT NULL,
  `liketo_lname` varchar(255) NOT NULL,
  `liketo_img` varchar(255) NOT NULL,
  `liketo_id` varchar(255) NOT NULL,
  `likeby_name` varchar(255) NOT NULL,
  `likeby_img` varchar(255) NOT NULL,
  `likeby_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likepost`
--

INSERT INTO `likepost` (`id`, `p_img`, `p_name`, `catagori`, `p_id`, `liketo_fname`, `liketo_lname`, `liketo_img`, `liketo_id`, `likeby_name`, `likeby_img`, `likeby_id`, `user_id`) VALUES
(26, 'UPI-Cover-1-1024x512.png', 'UPI', 'Education', '9', 'Vishal ', 'Patil ', 'Desert.jpg', '2', 'Piyush Babhulakar', 'Lighthouse.jpg', '6', '6'),
(27, '6785d0fa1dff0d7fc053bb5b36f90c06.gif', 'Book', 'Education', '10', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Piyush Babhulakar', 'scard.jpg', '6', '6'),
(28, 'UPI-Cover-1-1024x512.png', 'UPI', 'Education', '9', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Yash  Kanadagale', '—Pngtree—concept vector illustration of photographer_5435850.png', '7', '7'),
(29, 'big_buck_bunny_720p_5mb.mp4', 'Cartoon', 'Education', '34', 'Piyush', 'Babhulakar', 'scard.jpg', '6', 'Vishal Patil', 'Desert.jpg', '2', '2'),
(30, 'download.png', 'React Js Basics | Setting up Rect js', 'Education', '33', 'Piyush', 'Babhulakar', 'scard.jpg', '6', 'Piyush Babhulakar', 'scard.jpg', '6', '6');

-- --------------------------------------------------------

--
-- Table structure for table `likestory`
--

CREATE TABLE `likestory` (
  `id` int(255) NOT NULL,
  `s_img` varchar(255) NOT NULL,
  `s_title` varchar(255) NOT NULL,
  `s_id` varchar(255) NOT NULL,
  `liketo_name` varchar(255) NOT NULL,
  `liketo_img` varchar(255) NOT NULL,
  `liketo_id` varchar(255) NOT NULL,
  `likeby_fname` varchar(255) NOT NULL,
  `likeby_lname` varchar(255) NOT NULL,
  `likeby_img` varchar(255) NOT NULL,
  `likeby_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likestory`
--

INSERT INTO `likestory` (`id`, `s_img`, `s_title`, `s_id`, `liketo_name`, `liketo_img`, `liketo_id`, `likeby_fname`, `likeby_lname`, `likeby_img`, `likeby_id`, `user_id`) VALUES
(74, 'Chrysanthemum.jpg', 'aas', '8', 'Vishal Patil', 'Desert.jpg', '2', 'Piyush', 'Babhulakar', 'Lighthouse.jpg', '6', '6'),
(75, 'Desert.jpg', 'Nature', '7', 'Vishal Patil', 'Desert.jpg', '2', 'Piyush', 'Babhulakar', 'Lighthouse.jpg', '6', '6');

-- --------------------------------------------------------

--
-- Table structure for table `liketo_comment`
--

CREATE TABLE `liketo_comment` (
  `id` int(255) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `catagori` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `liketo_fname` varchar(255) NOT NULL,
  `liketo_lname` varchar(255) NOT NULL,
  `liketo_img` varchar(255) NOT NULL,
  `liketo_id` varchar(255) NOT NULL,
  `likeby_name` varchar(255) NOT NULL,
  `likeby_lname` varchar(255) NOT NULL,
  `likeby_img` varchar(255) NOT NULL,
  `likeby_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `liketocomm_fname` varchar(255) NOT NULL,
  `liketocomm_lname` varchar(255) NOT NULL,
  `liketocomm_img` varchar(255) NOT NULL,
  `liketocomm_id` varchar(255) NOT NULL,
  `likebycomm_name` varchar(255) NOT NULL,
  `likebycomm_lname` varchar(255) NOT NULL,
  `likebycomm_img` varchar(255) NOT NULL,
  `likebycomm_id` varchar(255) NOT NULL,
  `comment_id` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `liketo_comment`
--

INSERT INTO `liketo_comment` (`id`, `p_img`, `p_name`, `catagori`, `p_id`, `liketo_fname`, `liketo_lname`, `liketo_img`, `liketo_id`, `likeby_name`, `likeby_lname`, `likeby_img`, `likeby_id`, `user_id`, `liketocomm_fname`, `liketocomm_lname`, `liketocomm_img`, `liketocomm_id`, `likebycomm_name`, `likebycomm_lname`, `likebycomm_img`, `likebycomm_id`, `comment_id`, `comment`) VALUES
(167, 'UPI-Cover-1-1024x512.png', 'UPI', 'Education', '9', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Piyush', 'Babhulakar', 'scard.jpg', '6', '6', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Piyush', 'Babhulakar', 'scard.jpg', '6', '35', 'Noce'),
(169, 'UPI-Cover-1-1024x512.png', 'UPI', 'Education', '9', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Vishal', 'Patil', 'Desert.jpg', '2', '2', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Vishal', 'Patil', 'Desert.jpg', '2', '33', 'Food'),
(171, 'UPI-Cover-1-1024x512.png', 'UPI', 'Education', '9', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Piyush', 'Babhulakar', 'scard.jpg', '6', '6', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Piyush', 'Babhulakar', 'scard.jpg', '6', '33', 'Food'),
(172, '6785d0fa1dff0d7fc053bb5b36f90c06.gif', 'Book', 'Education', '10', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Yash ', 'Kanadagale', '—Pngtree—concept vector illustration of photographer_5435850.png', '7', '7', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Yash ', 'Kanadagale', '—Pngtree—concept vector illustration of photographer_5435850.png', '7', '36', 'Pls explain in detail'),
(173, '6785d0fa1dff0d7fc053bb5b36f90c06.gif', 'Book', 'Education', '10', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Yash ', 'Kanadagale', '—Pngtree—concept vector illustration of photographer_5435850.png', '7', '7', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Yash ', 'Kanadagale', '—Pngtree—concept vector illustration of photographer_5435850.png', '7', '37', 'Good Going on');

-- --------------------------------------------------------

--
-- Table structure for table `liketo_subcomment`
--

CREATE TABLE `liketo_subcomment` (
  `id` int(255) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `catagori` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `liketo_fname` varchar(255) NOT NULL,
  `liketo_lname` varchar(255) NOT NULL,
  `liketo_img` varchar(255) NOT NULL,
  `liketo_id` varchar(255) NOT NULL,
  `likeby_name` varchar(255) NOT NULL,
  `likeby_img` varchar(255) NOT NULL,
  `likeby_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `liketosubcomm_fname` varchar(255) NOT NULL,
  `liketosubcomm_img` varchar(255) NOT NULL,
  `liketosubcomm_id` varchar(255) NOT NULL,
  `likebysubcomm_name` varchar(255) NOT NULL,
  `likebysubcomm_img` varchar(255) NOT NULL,
  `likebysubcomm_id` varchar(255) NOT NULL,
  `subcomment_id` varchar(255) NOT NULL,
  `subcomment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `liketo_subcomment`
--

INSERT INTO `liketo_subcomment` (`id`, `p_img`, `p_name`, `catagori`, `p_id`, `liketo_fname`, `liketo_lname`, `liketo_img`, `liketo_id`, `likeby_name`, `likeby_img`, `likeby_id`, `user_id`, `liketosubcomm_fname`, `liketosubcomm_img`, `liketosubcomm_id`, `likebysubcomm_name`, `likebysubcomm_img`, `likebysubcomm_id`, `subcomment_id`, `subcomment`) VALUES
(87, 'UPI-Cover-1-1024x512.png', 'UPI', 'Education', '9', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Yash  Kanadagale', '—Pngtree—concept vector illustration of photographer_5435850.png', '7', '7', 'Piyush Babhulakar', 'scard.jpg', '6', 'Yash  Kanadagale', '—Pngtree—concept vector illustration of photographer_5435850.png', '7', '69', 'Thanks Piyush');

-- --------------------------------------------------------

--
-- Table structure for table `messagedata`
--

CREATE TABLE `messagedata` (
  `id` int(255) NOT NULL,
  `message` longtext NOT NULL,
  `sender_id` varchar(255) NOT NULL,
  `sendr_name` varchar(255) NOT NULL,
  `sender_img` varchar(255) NOT NULL,
  `reciver_id` varchar(255) NOT NULL,
  `reciver_name` varchar(255) NOT NULL,
  `reciver_img` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `seenviwed` varchar(255) NOT NULL,
  `timersend` varchar(255) NOT NULL,
  `datesend` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messagedata`
--

INSERT INTO `messagedata` (`id`, `message`, `sender_id`, `sendr_name`, `sender_img`, `reciver_id`, `reciver_name`, `reciver_img`, `user_id`, `seenviwed`, `timersend`, `datesend`) VALUES
(166, 'Hi Vishal', '6', 'Piyush Babhulakar', 'scard.jpg', '2', 'Vishal Patil', 'Desert.jpg', '6', 'Viewed', '01:10 PM', '28/03/2021'),
(167, 'Hi ', '7', 'Yash  Kanadagale', '—Pngtree—concept vector illustration of photographer_5435850.png', '2', 'Vishal Patil', 'Desert.jpg', '7', 'Viewed', '01:29 PM', '28/03/2021'),
(169, 'Hi Yash', '2', 'Vishal Patil', 'Desert.jpg', '7', 'Yash  Kanadagale', '—Pngtree—concept vector illustration of photographer_5435850.png', '2', 'Viewed', '03:35 PM', '28/03/2021'),
(170, 'Hi Piyush', '2', 'Vishal Patil', 'Desert.jpg', '6', 'Piyush Babhulakar', 'scard.jpg', '2', 'Viewed', '08:01 PM', '28/03/2021'),
(171, 'Kaisa Ahes Piyush', '2', 'Vishal Patil', 'Desert.jpg', '6', 'Piyush Babhulakar', 'scard.jpg', '2', 'Viewed', '10:54 PM', '02/04/2021'),
(172, 'Me Mast Tu Sang Vishal', '6', 'Piyush Babhulakar', 'scard.jpg', '2', 'Vishal Patil', 'Desert.jpg', '6', 'Viewed', '03:02 PM', '03/04/2021'),
(173, 'Me Mast Tu Sang Piyush', '2', 'Vishal Patil', 'Desert.jpg', '6', 'Piyush Babhulakar', 'scard.jpg', '2', '', '03:47 PM', '03/04/2021'),
(175, 'Collage Keva Start hot ahe', '6', 'Piyush Babhulakar', 'scard.jpg', '2', 'Vishal Patil', 'Desert.jpg', '6', 'Viewed', '07:31 PM', '05/04/2021');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_des` longtext NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `catagori` varchar(255) NOT NULL,
  `p_tag` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `type_cont` varchar(255) NOT NULL,
  `visibility` varchar(255) NOT NULL DEFAULT 'Public',
  `hidedown` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `p_name`, `p_des`, `p_img`, `catagori`, `p_tag`, `user_id`, `type_cont`, `visibility`, `hidedown`) VALUES
(4, 'Book', 'Contrary @piyush to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.', 'thought-catalog-bGiMXk8sMHw-unsplash.jpg', 'Education', 'Vishal Patil', '6', 'Image', 'Public', ''),
(8, 'Nature', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', 'thought-catalog-bGiMXk8sMHw-unsplash.jpg', 'Nature', 'Vishal Patil', '6', 'Image', 'Public', ''),
(9, 'UPI', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.', 'UPI-Cover-1-1024x512.png', 'Education', 'Piyush Babhulakar', '2', 'Image', 'Public', ''),
(10, 'Book', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.', '6785d0fa1dff0d7fc053bb5b36f90c06.gif', 'Education', 'Piyush Babhulakar', '2', 'Image', 'Public', ''),
(33, 'React Js Basics | Setting up Rect js', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'download.png', 'Education', 'Vishal Patil,', '6', 'Image', 'Public', ''),
(34, 'Cartoon', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', 'big_buck_bunny_720p_5mb.mp4', 'Education', '', '6', 'Video', 'Public', '');

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE `regi` (
  `id` int(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `catagori` varchar(255) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `p_baimg` varchar(255) NOT NULL DEFAULT 'non_user_background.jpg',
  `status` varchar(255) NOT NULL,
  `online_time` varchar(255) NOT NULL,
  `privacy` varchar(255) NOT NULL,
  `privacy_like` varchar(255) NOT NULL,
  `privacy_foll` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`id`, `f_name`, `l_name`, `email`, `phone`, `pass`, `cpass`, `catagori`, `p_img`, `p_baimg`, `status`, `online_time`, `privacy`, `privacy_like`, `privacy_foll`) VALUES
(2, 'Vishal', 'Patil', 'vishalpatil@gmail.com', '2015875421', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'Education', 'Desert.jpg', 'scard1.jpg', 'Online', '08:11 PM', '', '', ''),
(3, 'Sagar', 'Sonar', 'sagarsonar@gmail.com', '3048524859', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', '', 'user.png', 'non_user_background.jpg', 'Online', '12:10 AM', '', '', ''),
(6, 'Piyush', 'Babhulakar', 'piyushbabhulakar12@gmail.com', '7517090229', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'Education', 'scard.jpg', 'bg1.jpg', 'Online', '11:05 PM', '', '', 'private'),
(7, 'Yash ', 'Kanadagale', 'yashkandagale@gmail.com', '8548756845', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', '', '—Pngtree—concept vector illustration of photographer_5435850.png', 'non_user_background.jpg', 'Online', '04:37 PM', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `savepost`
--

CREATE TABLE `savepost` (
  `id` int(255) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `catagori` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `saveto_fname` varchar(255) NOT NULL,
  `saveto_lname` varchar(255) NOT NULL,
  `saveto_img` varchar(255) NOT NULL,
  `saveto_id` varchar(255) NOT NULL,
  `saveby_name` varchar(255) NOT NULL,
  `saveby_img` varchar(255) NOT NULL,
  `saveby_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `savepost`
--

INSERT INTO `savepost` (`id`, `p_img`, `p_name`, `catagori`, `p_id`, `saveto_fname`, `saveto_lname`, `saveto_img`, `saveto_id`, `saveby_name`, `saveby_img`, `saveby_id`, `user_id`) VALUES
(12, 'UPI-Cover-1-1024x512.png', 'UPI', 'Education', '9', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Piyush Babhulakar', 'Lighthouse.jpg', '6', '6'),
(13, '6785d0fa1dff0d7fc053bb5b36f90c06.gif', 'Book', 'Education', '10', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Piyush Babhulakar', 'scard.jpg', '6', '6'),
(14, 'thought-catalog-bGiMXk8sMHw-unsplash.jpg', 'Book', 'Education', '4', 'Piyush', 'Babhulakar', 'scard.jpg', '6', 'Vishal Patil', 'Desert.jpg', '2', '2'),
(15, 'big_buck_bunny_720p_5mb.mp4', 'Cartoon', 'Education', '34', 'Piyush', 'Babhulakar', 'scard.jpg', '6', 'Piyush Babhulakar', 'scard.jpg', '6', '6'),
(16, 'big_buck_bunny_720p_5mb.mp4', 'Cartoon', 'Education', '34', 'Piyush', 'Babhulakar', 'scard.jpg', '6', 'Vishal Patil', 'Desert.jpg', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `sendsub_comment`
--

CREATE TABLE `sendsub_comment` (
  `id` int(255) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `catagori` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `sendto_fname` varchar(255) NOT NULL,
  `sendto_lname` varchar(255) NOT NULL,
  `sendto_img` varchar(255) NOT NULL,
  `sendto_id` varchar(255) NOT NULL,
  `sendby_name` varchar(255) NOT NULL,
  `sendby_img` varchar(255) NOT NULL,
  `sendby_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `sendtocomm_fname` varchar(255) NOT NULL,
  `sendtocomm_img` varchar(255) NOT NULL,
  `sendtocomm_id` varchar(255) NOT NULL,
  `sendbycomm_name` varchar(255) NOT NULL,
  `sendbycomm_img` varchar(255) NOT NULL,
  `sendbycomm_id` varchar(255) NOT NULL,
  `comment_id` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `subcomment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sendsub_comment`
--

INSERT INTO `sendsub_comment` (`id`, `p_img`, `p_name`, `catagori`, `p_id`, `sendto_fname`, `sendto_lname`, `sendto_img`, `sendto_id`, `sendby_name`, `sendby_img`, `sendby_id`, `user_id`, `sendtocomm_fname`, `sendtocomm_img`, `sendtocomm_id`, `sendbycomm_name`, `sendbycomm_img`, `sendbycomm_id`, `comment_id`, `comment`, `subcomment`) VALUES
(67, 'UPI-Cover-1-1024x512.png', 'UPI', 'Education', '9', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Piyush Babhulakar', 'Desert.jpg', '2', '2', 'Piyush Babhulakar', 'scard.jpg', '6', 'Vishal Patil', 'Desert.jpg', '2', '33', 'Food', 'Thanks Piyush'),
(68, 'UPI-Cover-1-1024x512.png', 'UPI', 'Education', '9', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Piyush Babhulakar', 'scard.jpg', '6', '6', 'Piyush Babhulakar', 'scard.jpg', '6', 'Piyush Babhulakar', 'scard.jpg', '6', '33', 'Food', 'Good'),
(69, 'UPI-Cover-1-1024x512.png', 'UPI', 'Education', '9', 'Vishal', 'Patil', 'Desert.jpg', '2', 'Piyush Babhulakar', 'scard.jpg', '6', '6', 'Piyush Babhulakar', 'scard.jpg', '6', 'Piyush Babhulakar', 'scard.jpg', '6', '34', 'Foodaaa', 'Thanks Piyush');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addstory`
--
ALTER TABLE `addstory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commstory`
--
ALTER TABLE `commstory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dislikepost`
--
ALTER TABLE `dislikepost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disliketo_comment`
--
ALTER TABLE `disliketo_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disliketo_subcomment`
--
ALTER TABLE `disliketo_subcomment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likepost`
--
ALTER TABLE `likepost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likestory`
--
ALTER TABLE `likestory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `liketo_comment`
--
ALTER TABLE `liketo_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `liketo_subcomment`
--
ALTER TABLE `liketo_subcomment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messagedata`
--
ALTER TABLE `messagedata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regi`
--
ALTER TABLE `regi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `savepost`
--
ALTER TABLE `savepost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sendsub_comment`
--
ALTER TABLE `sendsub_comment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addstory`
--
ALTER TABLE `addstory`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `commstory`
--
ALTER TABLE `commstory`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dislikepost`
--
ALTER TABLE `dislikepost`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `disliketo_comment`
--
ALTER TABLE `disliketo_comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `disliketo_subcomment`
--
ALTER TABLE `disliketo_subcomment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `likepost`
--
ALTER TABLE `likepost`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `likestory`
--
ALTER TABLE `likestory`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `liketo_comment`
--
ALTER TABLE `liketo_comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `liketo_subcomment`
--
ALTER TABLE `liketo_subcomment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `messagedata`
--
ALTER TABLE `messagedata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `regi`
--
ALTER TABLE `regi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `savepost`
--
ALTER TABLE `savepost`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sendsub_comment`
--
ALTER TABLE `sendsub_comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
