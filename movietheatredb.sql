-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2024 at 07:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movietheatredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `seat` varchar(128) DEFAULT NULL,
  `booked` varchar(128) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `paid` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(200) NOT NULL,
  `payment_id` varchar(150) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `movie` varchar(100) NOT NULL,
  `seats` varchar(100) NOT NULL,
  `theatre` varchar(255) NOT NULL,
  `screen` varchar(255) NOT NULL,
  `bookingdate` varchar(255) NOT NULL,
  `showtime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `payment_id`, `amount`, `movie`, `seats`, `theatre`, `screen`, `bookingdate`, `showtime`) VALUES
(1, 1, 'pay_NfsJiCVhi4LfqB', '600', 'Tiger 3', 'N_26,N_27,N_28,N_29,N_30,N_31', '', '', '', ''),
(2, 1, 'pay_NgBL334Dftddc3', '100', 'Tiger 3', 'I_21', '', '', '', ''),
(4, 1, 'pay_NixRP2jL2op3AX', '400', 'Extra Ordinary Man', 'G_16,G_17,G_16', '', '', '', ''),
(5, 1, 'pay_NiyBKCL5yS5Ctj', '100', 'Tiger 3', 'H_17', '', '', '', ''),
(6, 1, 'pay_NiyClVnZeuRP0N', '800', 'Tiger 3', 'M_1,M_2,M_3,M_4,M_5,M_6,M_7,M_8,E_10,E_11,E_12,E_13,E_14,E_15,E_16,E_17,F_9,F_10,F_11,F_12,F_13,F_14', '', '', '', ''),
(14, 1, 'pay_NjK7pAMLcqiYYF', '600', 'Hii Nanna', 'F_16,F_17', '', '', '', ''),
(17, 1, 'pay_NjKSdLC2Pb1ndC', '400', 'Extra Ordinary Man', 'E_14', '', '', '', ''),
(18, 10, 'pay_NjKXoUHnuZPNpp', '900', 'Pindam', 'M_25,M_26', '', '', '', ''),
(26, 11, 'pay_NoAs55bf27bNck', '900', 'Hii Nanna', 'H_15,H_16,H_17', '', '', '', ''),
(27, 6, 'pay_NoVTgssNN6DVkZ', '700', 'Animal', 'I_8,I_9', '', '', '', ''),
(28, 6, 'pay_NoVWoVDfF45taW', '300', 'Conjuring  Kannappan ', 'J_8', '', '', '', ''),
(29, 6, 'pay_Nprqt32fAmk3Tf', '2250', 'Pindam', 'J_7,J_8,J_9,J_10,J_11', '', '', '', ''),
(30, 6, 'pay_NuoYyXbuFLxJ5u', '1050', 'Animal', 'M_10,M_11,M_12', '', '', '', ''),
(31, 6, 'pay_O74ZnFO8TcrJFk', '100', 'Tiger 3', 'M_13', '', '', '', ''),
(32, 6, 'pay_O75LIUmGz3m3KN', '100', 'Tiger 3', 'M_13', '', '', '', ''),
(33, 6, 'pay_O75NcZwahim8Vz', '350', 'Animal', 'M_13', '', '', '', ''),
(34, 6, 'pay_O75Pu3vzaPq1JQ', '300', 'Conjuring  Kannappan ', 'H_9', '', '', '', ''),
(35, 6, 'pay_O7SswkxK8vX0sv', '100', 'Tiger 3', 'J_10,J_11,J_12', '', '', '', ''),
(36, 6, 'pay_O7Sttva1y3Adqw', '100', 'Tiger 3', 'N_5', '', '', '', ''),
(37, 6, 'pay_O8i1qliNBuIXd9', '1600', 'Extra Ordinary Man', 'H_14,H_15,H_16,H_17,H_19,H_20,H_21,H_22,H_19,H_20,H_21,H_22,H_18,H_19,H_20,H_21', '', '', '', ''),
(38, 6, 'pay_O8jl6N080Ferpq', '600', 'Tiger 3', 'M_7,M_8,M_9,M_10,M_11,M_12', '', '', '', ''),
(39, 6, 'pay_OU1ZtusWRr1D1G', '300', 'Tiger 3', 'I_10,I_11,I_12', '', '', '', ''),
(40, 6, 'pay_OU1cJBh2jixxJG', '300', 'Tiger 3', 'A_13,A_13,A_12,A_13,A_12,A_11,A_10,A_11,A_12,A_13,A_13,A_12,A_13,A_12,A_10,A_11,A_12,A_13', '', '', '', ''),
(41, 6, 'pay_OU1dKISSqZPNJ5', '300', 'Tiger 3', 'A_13,A_13,A_12,A_13,A_12,A_11', '', '', '', ''),
(42, 6, 'pay_OU1hZsaBFOyJlg', '400', 'Tiger 3', 'H_12,H_13,H_14,H_15', '', '', '', ''),
(43, 6, 'pay_OU24u7cwo4SNSg', '600', 'Hii Nanna', 'I_9,I_10', '', '', '', ''),
(44, 6, 'pay_OU2jX8VoCqg4ME', '300', 'Hii Nanna', 'L_12,L_13,M_2,M_3,L_5,L_6,L_11,L_12,M_5,M_6,J_6,J_7,G_7,G_8,F_8,F_9,D_9,D_10,D_7,D_8,C_7,C_8,C_18,C_', '', '', '', ''),
(45, 6, 'pay_OU2mQdt33HL5tS', '2400', 'Hii Nanna', 'J_13,J_13,J_12,J_13,J_12,J_11,J_13,J_12,J_11,J_10,J_13,J_12,J_11,J_10,J_9,J_13,J_12,J_11,J_10,J_9,J_', '', '', '', ''),
(46, 6, 'pay_OU3N9coFqknLaO', '300', 'Hii Nanna', 'F_10', '', '', '', ''),
(47, 6, 'pay_OU3P5o3obvKayD', '600', 'Hii Nanna', 'E_10,E_11', '', '', '', ''),
(48, 6, 'pay_OU3VZ4nUcQ23kt', '600', 'Hii Nanna', 'K_8,K_9', 'AMC Theatre', 'Screen 4', '2024-07-03', '12:30 PM Matinee Show'),
(49, 6, 'pay_OU4BW4J5ysnJkm', '900', 'Hii Nanna', 'J_8,J_9,J_10', 'AMC Theatre', 'Screen 4', '2024-07-03', '12:30 PM Matinee Show'),
(50, 6, 'pay_OU4GyF2LESgH4a', '900', 'Hii Nanna', 'D_5,D_6,D_7', 'AMC Theatre', 'Screen 4', '2024-07-03', '12:30 PM Matinee Show'),
(51, 6, 'pay_OU6WzrC4PPkvms', '300', 'Hii Nanna', 'K_9,K_11,I_8', 'AMC Theatre', 'Screen 4', '2024-07-03', 'AMC Theatre'),
(52, 6, 'pay_OU7cx1ZNFMNEZk', '350', 'Animal', 'K_9', 'AMC Theatre', 'Screen 1', '2024-07-03', 'AMC Theatre'),
(53, 6, 'pay_OU7hHyiAs1LeFg', '350', 'Animal', 'L_11', 'AMC Theatre', 'Screen 1', '2024-07-03', 'AMC Theatre'),
(54, 6, 'pay_OU7iwBoAMZkGZS', '300', 'Hii Nanna', 'E_5', 'AMC Theatre', 'Screen 4', '2024-07-03', 'AMC Theatre'),
(55, 6, 'pay_OU7nAOC2A3mHl4', '200', 'Tiger 3', 'I_10,I_11', 'AMC Theatre', 'Screen 2', '2024-07-03', 'AMC Theatre'),
(56, 6, 'pay_OU88POFCfMuHTJ', '300', 'Hii Nanna', 'I_3,H_10,G_14', 'AMC Theatre', 'Screen 4', '2024-07-03', 'AMC Theatre'),
(57, 6, 'pay_OU8ErkEo3zO0k5', '600', 'Hii Nanna', 'E_14,E_15', 'AMC Theatre', 'Screen 4', '2024-07-03', 'AMC Theatre'),
(58, 6, 'pay_OUOg6aXCRQRuWF', '350', 'Animal', 'E_11', 'AMC Theatre', 'Screen 1', '2024-07-04', 'AMC Theatre'),
(59, 6, 'pay_OUOu01XKF4LU9z', '350', 'Animal', 'E_9', 'AMC Theatre', 'Screen 1', '2024-07-04', 'AMC Theatre'),
(60, 6, 'pay_OUOwVJ6FVFXKbu', '350', 'Animal', 'A_1', 'AMC Theatre', 'Screen 1', '2024-07-04', 'AMC Theatre'),
(61, 6, 'pay_OUPAZpRfV4XNDd', '350', 'Animal', 'A_1', 'AMC Theatre', 'Screen 1', '2024-07-04', 'AMC Theatre'),
(62, 6, 'pay_OUPRRjHnp2aScS', '350', 'Animal', 'J_5', 'AMC Theatre', 'Screen 1', '2024-07-04', 'AMC Theatre'),
(63, 6, 'pay_OUPV3CVCuRgm9d', '300', 'Hii Nanna', 'C_29', 'AMC Theatre', 'Screen 4', '2024-07-04', 'AMC Theatre'),
(64, 6, 'pay_OUPWGC1n2JdKEk', '350', 'Animal', 'D_10', 'AMC Theatre', 'Screen 1', '2024-07-04', '12:30 PM Matinee Show'),
(65, 6, 'pay_OUPYC4jPfN90hT', '2100', 'Animal', 'G_17,G_16,G_14,G_15,G_13,G_12', 'AMC Theatre', 'Screen 1', '2024-07-04', '12:30 PM Matinee Show'),
(66, 6, 'pay_OUPbQUK9179oo7', '300', 'Tiger 3', 'J_11,J_12,J_13', 'AMC Theatre', 'Screen 2', '2024-07-04', '12:30 PM Matinee Show'),
(67, 6, 'pay_OUQGYvDbNrhH0t', '300', 'Tiger 3', 'I_13,I_11,I_12', 'AMC Theatre', 'Screen 2', '2024-07-04', '10:00 AM Noon Show'),
(68, 6, 'pay_OUQHh7EgLn6npm', '900', 'Conjuring  Kannappan ', 'G_15,G_16,G_17', 'AMC Theatre', 'Screen 3', '2024-07-04', '12:30 PM Matinee Show'),
(69, 6, 'pay_OUQJb6KSApsTWl', '1200', 'Conjuring  Kannappan ', 'J_13,M_26,H_28,H_29', 'AMC Theatre', 'Screen 3', '2024-07-04', '12:30 PM Matinee Show'),
(70, 15, 'pay_OUQbts3jTzT6A5', '350', 'Manamey', 'K_13', 'AMC Theatre', 'Screen 5', '2024-07-04', '03:30 PM First Show');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookings`
--

CREATE TABLE `tbl_bookings` (
  `book_id` int(11) NOT NULL,
  `ticket_id` varchar(30) NOT NULL,
  `t_id` int(11) NOT NULL COMMENT 'theater id',
  `user_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `screen_id` int(11) NOT NULL,
  `no_seats` int(3) NOT NULL COMMENT 'number of seats',
  `amount` int(5) NOT NULL,
  `ticket_date` date NOT NULL,
  `date` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_bookings`
--

INSERT INTO `tbl_bookings` (`book_id`, `ticket_id`, `t_id`, `user_id`, `show_id`, `screen_id`, `no_seats`, `amount`, `ticket_date`, `date`, `status`) VALUES
(12, 'BKID6369842', 4, 4, 17, 3, 1, 380, '2021-04-15', '2021-04-15', 1),
(13, 'BKID2313964', 6, 5, 21, 6, 4, 2400, '2021-04-16', '2021-04-15', 1),
(14, 'BKID1766021', 6, 5, 22, 6, 2, 1200, '2021-04-16', '2021-04-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `subject` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `name`, `email`, `mobile`, `subject`) VALUES
(1, 'Madhu Javvaji', 'madhujavvaji579@gmail.com', 2147483647, ''),
(2, 'Madhu Javvaji', 'madhujavvaji579@gmail.com', 2147483647, ''),
(3, 'Madhu Javvaji', 'madhujavvaji579@gmail.com', 2147483647, ''),
(4, 'Madhu Javvaji', 'madhujavvaji579@gmail.com', 2147483647, ''),
(5, 'Madhu Javvaji', 'madhujavvaji579@gmail.com', 2147483647, ''),
(6, 'Madhu Javvaji', 'madhujavvaji579@gmail.com', 2147483647, ''),
(7, 'Madhu Javvaji', 'madhujavvaji579@gmail.com', 2147483647, ' hello'),
(8, 'Madhu Javvaji', 'madhujavvaji579@gmail.com', 2147483647, ' hello'),
(9, 'Madhu Javvaji', 'madhujavvaji579@gmail.com', 2147483647, ' I it is an intresting movie and story of father love'),
(10, '', '', 0, ''),
(11, '', '', 0, ''),
(12, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL COMMENT 'email',
  `password` varchar(50) NOT NULL,
  `user_type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `user_id`, `username`, `password`, `user_type`) VALUES
(1, 0, 'admin', 'password', 0),
(2, 3, 'theatre', 'password', 1),
(3, 4, 'theatre2', 'password', 1),
(12, 2, 'harryden@gmail.com', 'password', 2),
(15, 14, 'USR295127', 'PWD195747', 1),
(17, 4, 'bruno@gmail.com', 'password', 2),
(18, 6, 'THR760801', 'PWD649976', 1),
(19, 5, 'james@gmail.com', 'password', 2),
(20, 7, 'THR553816', 'PWD869612', 1),
(21, 8, 'madhu@gmail.com', 'madhu123', 1),
(22, 6, 'madhu@gmail.com', '1234567', 2),
(23, 7, 'kvs@gmail.com', '1234567', 2),
(24, 7, '', '', 1),
(25, 8, 'aravind@gmail.com', '12345', 2),
(26, 9, 'kak@gmail.com', '12345', 2),
(27, 10, 'meena@gmail.com', '12345', 2),
(28, 11, 'ashu@gmail.com', '12345', 2),
(29, 12, '', '12345', 2),
(30, 13, '', '123445', 2),
(31, 14, 'len@gmail.com', 'loen123', 2),
(32, 15, 'madhujavvaji579@gmail.com', '98765', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movie`
--

CREATE TABLE `tbl_movie` (
  `movie_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL COMMENT 'theatre id',
  `movie_name` varchar(255) NOT NULL,
  `cast` varchar(500) NOT NULL,
  `desc` varchar(1000) NOT NULL,
  `release_date` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `video_url` varchar(200) NOT NULL,
  `status` int(1) NOT NULL COMMENT '0 means active '
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_movie`
--

INSERT INTO `tbl_movie` (`movie_id`, `t_id`, `movie_name`, `cast`, `desc`, `release_date`, `image`, `video_url`, `status`) VALUES
(18, 3, 'Animal', 'Ranbir Kapoor', 'This is the story of a son whose love for his father knows no bounds. As their bond begins to fracture, a chain of extraordinary events unfold causing the son to undergo a remarkable transformation consumed by a thirst for vengeance.', '2023-12-01', 'images/Animal (1).png', './Vedios/ANIMAL (OFFICIAL TEASER).mp4\"', 0),
(19, 3, 'Tiger 3', 'Salman Khan', 'Tiger and Zoya are back - to save the country and their family. This time it personal.', '2023-11-12', 'images/Tiger3.png', './vedios/Tiger 3 Telugu.mp4', 0),
(20, 3, 'Conjuring  Kannappan ', 'Regina Cassandra  Elli AvrRam', 'Conjuring Kannappan is a Tamil movie starring Sathish Muthukrishnan, Regina Cassandra and Elli EvRam in prominent roles.', '2023-12-08', 'images/kannappan (1).png', './Vedios/Conjuring Kannappan.mp4\"', 0),
(21, 3, 'Hii Nanna', 'Nani', 'A doting father and his six-year-old daughter find their lives taking a dramatic turn when the woman he loves marries someone else.', '2023-12-07', 'images/Hii Nanna (2).png', './Vedios/HI NANNA.mp4', 0),
(22, 3, 'Sam Bahadur', 'Vicky kaushal', 'Sam Manekshaw is one of the most decorated officers in the Indian army, serving for over four decades and fighting in five wars. He is the first army officer to be promoted to the rank of Field Marshal.', '2023-12-01', 'images/sam bahadur (2).jpg', './vedios/Sam Official Trailer.mp4\"', 0),
(23, 3, 'Pindam', 'Sriram , Kushi', 'A powerful spirit starts to threaten the life of a six year old girl who has speech impairment. It is up to Annamma, the only Demonologist, to rescue the family and find out the real intention.', '2023-12-15', 'images/pindam (2).jpg', './Vedios/Pindam Official Trailer.mp4\"', 0),
(24, 3, 'Extra Ordinary Man', 'Nithiin', 'Extra Ordinary Man is a Telugu movie starring Nithiin and Sree Leela in the lead', '2023-12-08', 'images/extra ordinary man (1).jpg', './Vedios/Extra  Ordinary.mp4', 0),
(25, 3, 'Joruga Husharuga', 'Viraj Ashwin  Jarajapu ,Pojita Ponnada', 'A fun and easy-going and fun loving guy has to decide between his career and love while paying his fathers debt.', '2023-12-15', 'images/Joruga Husharuga (2).jpg', './Vedios/Jorugaa Husharugaa.mp4', 0),
(27, 3, 'Manamey', 'Sharwanand  , Krithi shetty', 'Manamey is a Telugu romantic family drama movie directed by Sriram Adittya. The movie casts Sharwanand and Krithi Shetty in the main lead roles along with Vikram Aditya, Seerat Kapoor, Ayesha Khan, Vennela Kishore, Rahul Ravindra, Rahul Ramakrishna, Shiva Kandhukuri, Sudharshan, and many others are seen in supporting roles.', '2024-06-24', 'images/m.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cast` varchar(100) NOT NULL,
  `news_date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `attachment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `name`, `cast`, `news_date`, `description`, `attachment`) VALUES
(9, 'Kalki 2898 AD', 'Prabhas, Deepika,Kamal Haasan,Rana', '2024-05-09', 'Upcoming Indian epic science-fiction dystopian film based on indian ', 'news_images/kalki.jpg'),
(13, 'Operation Valentine', 'Varun Tej, Manushi Chhillar,  Mir Sarwar', '2024-02-16', 'A patriotic edge-of-the-seat entertrainer and will showcaseour Air Force heores on the front-lines and the challenges they faced as they fought one of the biggest,fiercest aerial attacks that india.', 'news_images/operation valentine.jpg'),
(14, 'Devara', 'Jr.Ntr, Janhvi Kapoor,Prakash Raj,Srikanth', '2024-04-05', 'Devara movie deals with a forest backdrop, where NTR will be seen in two shades. One will be seen as a Student leader who is on a mission to put an end to the Forest mafia.', 'news_images/Devara.jpg'),
(16, 'Tillu-Square', 'Siddhu Jonnalagadda, Anupama Parameswaran', '2024-03-29', 'Tillu Square is a  Telugu movie starring Siddhu and Anupama in prominent roles. It is directed by Malik Ram forming of the crew.  ', 'news_images/Tillu-Square (1).jpg'),
(21, 'Pushpa2', 'Allu Arjun, Rashmika Mandanna, Vijay Sethupathi', '2024-08-15', 'The film tells the story of a daily labourer rise in the underlined of redwood smuggling', 'news_images/Pushpa 2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`user_id`, `name`, `email`, `phone`, `age`, `gender`, `password`) VALUES
(2, 'Harry Den', 'harryden@gmail.com', '1247778540', 22, 'gender', ''),
(4, 'Bruno', 'bruno@gmail.com', '7451112450', 30, 'gender', ''),
(5, 'James', 'james@gmail.com', '7124445696', 25, 'gender', ''),
(6, 'madhu', 'madhu@gmail.com', '7075673046', 21, 'male', ''),
(7, 'priya', 'kvs@gmail.com', '7075673046', 21, 'Female', ''),
(8, 'Aravind', '21', 'Male', 2147483647, 'aravind@gm', '12345'),
(9, 'ARAVIND', 'kak@gmail.com', '8886648894', 20, 'Male', '12345'),
(10, 'meena', 'meena@gmail.com', '9087654321', 22, 'Female', '12345'),
(11, 'ashu', 'ashu@gmail.com', '9023485761', 21, 'Female', '12345'),
(12, '', '', '', 0, '', '12345'),
(13, '', '', '', 0, '', '123445'),
(14, 'lenora', 'len@gmail.com', '9940212992', 25, 'Female', 'loen123'),
(15, 'Satya', 'madhujavvaji579@gmail.com', '9963576648', 21, 'Male', '98765');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_screens`
--

CREATE TABLE `tbl_screens` (
  `screen_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL COMMENT 'theatre id',
  `screen_name` varchar(110) NOT NULL,
  `seats` int(11) NOT NULL COMMENT 'number of seats',
  `charge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_screens`
--

INSERT INTO `tbl_screens` (`screen_id`, `t_id`, `screen_name`, `seats`, `charge`) VALUES
(1, 3, 'Screen 1', 100, 350),
(2, 3, 'Screen 2', 150, 100),
(3, 4, 'Screen 1', 200, 380),
(4, 14, 'Screen1', 34, 250),
(5, 6, 'Demo Screen', 150, 300),
(6, 6, 'IMX Screen', 200, 600),
(7, 7, 'madhu', 1, 120),
(8, 8, 'madhu', 56, 120),
(9, 3, 'Screen 3', 150, 300),
(10, 3, 'Screen 4', 150, 300),
(11, 3, 'Screen 5', 150, 350),
(12, 3, 'Screen 6', 150, 450),
(13, 3, 'Screen 7', 150, 400);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shows`
--

CREATE TABLE `tbl_shows` (
  `s_id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL COMMENT 'show time id',
  `theatre_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `status` int(11) NOT NULL COMMENT '1 means show available',
  `r_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_shows`
--

INSERT INTO `tbl_shows` (`s_id`, `st_id`, `theatre_id`, `movie_id`, `start_date`, `status`, `r_status`) VALUES
(33, 43, 3, 18, '2023-12-01', 1, 1),
(34, 44, 3, 18, '2023-12-01', 1, 1),
(35, 45, 3, 18, '2023-12-01', 1, 1),
(36, 46, 3, 18, '2023-12-01', 1, 1),
(37, 47, 3, 19, '2023-11-12', 1, 1),
(38, 48, 3, 19, '2023-11-12', 1, 1),
(39, 49, 3, 19, '2023-11-12', 1, 1),
(40, 50, 3, 19, '2023-11-12', 1, 1),
(41, 51, 3, 20, '2023-12-08', 1, 1),
(42, 52, 3, 20, '2023-12-08', 1, 1),
(43, 53, 3, 20, '2023-12-08', 1, 1),
(44, 54, 3, 20, '2023-12-08', 1, 1),
(45, 55, 3, 21, '2023-12-07', 1, 1),
(46, 56, 3, 21, '2023-12-07', 1, 1),
(47, 57, 3, 21, '2023-12-07', 1, 1),
(48, 58, 3, 21, '2023-12-07', 1, 1),
(49, 59, 3, 22, '2023-12-01', 1, 1),
(50, 60, 3, 22, '2023-12-01', 1, 1),
(51, 61, 3, 22, '2023-12-01', 1, 1),
(52, 62, 3, 22, '2023-12-01', 1, 1),
(53, 63, 3, 23, '2023-12-15', 1, 1),
(54, 64, 3, 23, '2023-12-15', 1, 1),
(55, 65, 3, 23, '2023-12-15', 1, 1),
(56, 66, 3, 23, '2023-12-15', 1, 1),
(57, 67, 3, 24, '2023-12-08', 1, 1),
(58, 68, 3, 24, '2023-12-08', 1, 1),
(59, 69, 3, 25, '2023-12-15', 1, 1),
(60, 70, 3, 25, '2023-12-15', 1, 1),
(61, 61, 3, 27, '2024-06-24', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_show_time`
--

CREATE TABLE `tbl_show_time` (
  `st_id` int(11) NOT NULL,
  `screen_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL COMMENT 'noon,second,etc',
  `start_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_show_time`
--

INSERT INTO `tbl_show_time` (`st_id`, `screen_id`, `name`, `start_time`) VALUES
(43, 1, 'Noon', '09:30:00'),
(44, 1, 'Matinee', '12:30:00'),
(45, 1, 'First', '15:00:00'),
(46, 1, 'Second', '18:00:00'),
(47, 2, 'Noon', '10:00:00'),
(48, 2, 'Matinee', '12:30:00'),
(49, 2, 'First', '15:00:00'),
(50, 2, 'Second', '18:00:00'),
(51, 9, 'Noon', '09:30:00'),
(52, 9, 'Matinee', '12:30:00'),
(53, 9, 'First', '18:00:00'),
(54, 9, 'Second', '15:00:00'),
(55, 10, 'Noon', '09:30:00'),
(56, 10, 'Matinee', '12:30:00'),
(57, 10, 'First', '15:00:00'),
(58, 10, 'Second', '18:00:00'),
(59, 11, 'Noon', '10:00:00'),
(60, 11, 'Matinee', '12:30:00'),
(61, 11, 'First', '15:30:00'),
(62, 11, 'Second', '18:30:00'),
(63, 12, 'Noon', '09:30:00'),
(64, 12, 'Matinee', '12:30:00'),
(65, 12, 'First', '15:30:00'),
(66, 12, 'Second', '18:30:00'),
(67, 13, 'Noon', '09:30:00'),
(68, 13, 'Matinee', '12:30:00'),
(69, 13, 'First', '15:30:00'),
(70, 13, 'Second', '18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_theatre`
--

CREATE TABLE `tbl_theatre` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_theatre`
--

INSERT INTO `tbl_theatre` (`id`, `name`, `address`, `place`, `state`, `pin`) VALUES
(3, 'AMC Theatre', '11500 Ash St', 'Leawd', 'DM', 691523),
(4, 'Cinemark', '3900 Dallas Parkway Suite 500 Plano', '12 Street, Ep', 'UD', 691523),
(5, 'Midtown Cinemas', 'Aue', 'Charles Street, EUS', 'DMM', 691523),
(6, 'Riverview Theater', '3800 42nd Ave S', 'Minneapolis, MN 55406', 'Minnesot', 224450),
(7, '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bookings`
--
ALTER TABLE `tbl_bookings`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_movie`
--
ALTER TABLE `tbl_movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_screens`
--
ALTER TABLE `tbl_screens`
  ADD PRIMARY KEY (`screen_id`);

--
-- Indexes for table `tbl_shows`
--
ALTER TABLE `tbl_shows`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tbl_show_time`
--
ALTER TABLE `tbl_show_time`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `tbl_theatre`
--
ALTER TABLE `tbl_theatre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tbl_bookings`
--
ALTER TABLE `tbl_bookings`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_movie`
--
ALTER TABLE `tbl_movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_screens`
--
ALTER TABLE `tbl_screens`
  MODIFY `screen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_shows`
--
ALTER TABLE `tbl_shows`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tbl_show_time`
--
ALTER TABLE `tbl_show_time`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tbl_theatre`
--
ALTER TABLE `tbl_theatre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
