-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2017 at 06:50 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `police_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `location` text COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `user_id`, `title`, `content`, `location`, `date`, `status`) VALUES
(1, 3, 'qweqeq', 'inematography Jayesh Nair\nEditor Dilip Dennies\n\nNorth 24 Kaatham songs / North 24 Kaatham full songs / North 24 Kaatham movie trailer / North 24 Kaatham teaser / North 24 Kaatham promo / North 24 Kaatham trailer / North 24 Kaatham theatrical trailer / North 24 Kaatham first look / North 24 Kaatham songs. Starring Fahadh Faasil / Fahadh Fasil ( Cartoon, D Company, Artist, Olipporu, 5 Sundarikal, Akam, Immanuel, Amen, Red Wine, Natholi Oru Cheriya Meenalla, Annayum Rasoolum, Diamond Necklace, 22 Female Kottayam, Indian Rupee, Chaappa Kurishu, Cocktail, Kerala Cafe, Kaiyethum Doorath) Swathi / Swati Reddy / Colours Swathi ( Amen, Vadacurry, Idharkuthane Aasaipattai Balakumara, Amali Thumali, Karthikeya, Poraali, Swamy Ra Ra, Sangarshana, Kandireega, Mirapakaay, KSD Appalaraju, Golconda High School, Kalavaramaye Madilo, Ananthapuram 1980, Love Journey, Ashta Chamma, Adavari Matalaku Ardhalu Verule, Danger) Nedumudi Venu ( Moneyback Policy Onachan, Isaac Newton S/O Philipose-Philipose, Puthiya Theerangal, Ithra Mathram, Bhoopadathil Illatha Oridam-Panchayat President, Friday-Purushothaman, Mr. Marumakan-Rajagopalan Thampy, Mayamohini, Akasathinte Niram, Vaadhyar, Thiruvambadi Thamban, Hero Thankachan, The King & the Commissioner, Achante Aanmakkal, Njanum Ente Familiyum, Unnam, Arabeem, Ottakom etc ) among others. Directed by Anil Radhakrishnan Menon and produced by C V Sarathi. Music composed by Govind Menon. Produced by E4 Entertainment.', '', '2017-03-15', 1),
(2, 3, '6465', 'asd', '', '2017-03-15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `number` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `news` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `image` text CHARACTER SET latin1 NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `news`, `image`, `date`) VALUES
(3, 'asasd', 'ada', 'images/news/148935754258c5cae62e1f3.jpg', '2017-03-12'),
(5, 'à´‡à´¨àµà´¨àµà´®àµà´¤à´²àµâ€ à´ªà´£à´‚ à´ªà´¿à´¨àµâ€à´µà´²à´¿à´•àµà´•àµà´¨àµà´¨à´¤à´¿à´¨àµ à´¨à´¿à´¯à´¨àµà´¤àµà´°à´£à´®à´¿à´²àµà´² ', 'à´®àµà´‚à´¬àµˆ: à´‡à´¨àµà´¨àµ à´®àµà´¤à´²àµâ€ à´¬à´¾à´™àµà´•àµ à´…à´•àµà´•àµ—à´£àµà´Ÿàµà´•à´³à´¿à´²àµâ€à´¨à´¿à´¨àµà´¨àµà´‚ à´Žà´Ÿà´¿à´Žà´®àµà´®àµà´•à´³à´¿à´²àµâ€à´¨à´¿à´¨àµà´¨àµà´‚ à´ªà´£à´‚ à´ªà´¿à´¨àµâ€à´µà´²à´¿à´•àµà´•àµà´¨àµà´¨à´¤à´¿à´¨àµ à´¨à´¿à´¯à´¨àµà´¤àµà´°à´£à´®à´¿à´²àµà´². à´•àµ‡à´¨àµà´¦àµà´°à´¸à´°àµâ€à´•àµà´•à´¾à´°à´¿à´¨àµà´±àµ† à´¨àµ‹à´Ÿàµà´Ÿàµ à´…à´¸à´¾à´§àµà´µà´¾à´•àµà´•à´²à´¿à´¨àµ† à´¤àµà´Ÿà´°àµâ€à´¨àµà´¨àµ à´†à´°àµâ€à´¬à´¿à´ à´à´°àµâ€à´ªàµà´ªàµ†à´Ÿàµà´¤àµà´¤à´¿à´¯ à´¨à´¿à´¯à´¨àµà´¤àµà´°à´£à´™àµà´™à´³àµ†à´²àµà´²à´¾à´‚ à´…à´µà´¸à´¾à´¨à´¿à´šàµà´šàµ. à´…à´¤àµ‡à´¸à´®à´¯à´‚, à´ªà´£à´‚à´ªà´¿à´¨àµâ€à´µà´²à´¿à´•àµà´•àµà´¨àµà´¨à´¤à´¿à´¨àµà´³àµà´³ à´ªà´°à´¿à´§à´¿ à´¸à´‚à´¬à´¨àµà´§à´¿à´šàµà´šàµâ€Œ à´…à´¤à´¤àµ à´¬à´¾à´™àµà´•àµà´•à´³àµâ€à´•àµà´•àµ à´¤àµ€à´°àµà´®à´¾à´¨à´®àµ†à´Ÿàµà´•àµà´•à´¾à´‚. à´¨à´¾à´²àµ à´®à´¾à´¸à´‚à´¨àµ€à´£àµà´Ÿ à´¨à´¿à´¯à´¨àµà´¤àµà´°à´£à´™àµà´™à´³àµâ€à´•àµà´•à´¾à´£àµ à´…à´µà´¸à´¾à´¨à´®à´¾à´•àµà´¨àµà´¨à´¤àµ.\r\n\r\nà´‡à´¨àµà´¨àµ à´®àµà´¤à´²àµâ€ à´¸àµ‡à´µà´¿à´™àµà´¸àµ à´…à´•àµà´•àµ—à´£àµà´Ÿàµà´•à´³à´¿à´²àµâ€à´¨à´¿à´¨àµà´¨àµà´³àµâ€à´ªàµà´ªàµ†à´Ÿàµ† à´ªà´£à´‚ à´ªà´¿à´¨àµâ€à´µà´²à´¿à´•àµà´•àµà´¨àµà´¨à´¤à´¿à´¨àµà´³àµà´³ à´ªà´°à´¿à´§à´¿ à´‰à´£àµà´Ÿà´¾à´µà´¿à´²àµà´². à´‡à´°àµà´ªà´¤à´¿à´¨à´¾à´²à´¾à´¯à´¿à´°à´®à´¾à´¯à´¿à´°àµà´¨àµà´¨àµ à´¸àµ‡à´µà´¿à´™àµà´¸àµ à´…à´•àµà´•àµ—à´£àµà´Ÿà´¿à´²àµâ€à´¨à´¿à´¨àµà´¨àµà´‚ à´†à´´àµà´šà´¯à´¿à´²àµâ€ à´ªà´¿à´¨àµâ€à´µà´²à´¿à´•àµà´•à´¾à´µàµà´¨àµà´¨ à´¤àµà´•. à´Žà´¨àµà´¨à´¾à´²àµâ€ à´•à´´à´¿à´žàµà´žà´®à´¾à´¸à´‚ 20à´¨àµ à´…à´¨àµâ€à´ªà´¤à´¿à´¨à´¾à´¯à´¿à´°à´®à´¾à´¯à´¿ à´‰à´¯à´°àµâ€à´¤àµà´¤à´¿à´¯à´¿à´°àµà´¨àµà´¨àµ. à´Žà´Ÿà´¿à´Žà´®àµà´®àµà´•à´³à´¿à´²àµâ€à´¨à´¿à´¨àµà´¨àµà´‚ à´ªàµà´°à´¤à´¿à´¦à´¿à´¨à´‚ à´ªà´¿à´¨àµâ€à´µà´²à´¿à´•àµà´•à´¾à´µàµà´¨àµà´¨à´¤àµà´• à´°à´£àµà´Ÿà´¾à´¯à´¿à´°à´¤àµà´¤à´¿ à´…à´žàµà´žàµ‚à´±à´¿à´²àµâ€à´¨à´¿à´¨àµà´¨àµ à´†à´¦àµà´¯à´‚ à´¨à´¾à´²à´¾à´¯à´¿à´°à´¤àµà´¤à´¿ à´…à´žàµà´žàµ‚à´±à´¾à´¯àµà´‚ à´ªà´¿à´¨àµà´¨àµ€à´Ÿàµ à´ªà´¤à´¿à´¨à´¾à´¯à´¿à´°à´®à´¾à´¯àµà´‚ à´¨à´¿à´¶àµà´šà´¯à´¿à´šàµà´šà´¿à´°àµà´¨àµà´¨àµ. à´ˆ à´ªà´°à´¿à´§à´¿à´•à´³à´¾à´£àµ à´…à´µà´¸à´¾à´¨à´¿à´•àµà´•àµà´¨àµà´¨à´¤àµ.\r\n\r\nà´•à´±à´¨àµà´±àµ, à´•àµà´¯à´¾à´·àµ à´•àµà´°àµ†à´¡à´¿à´±àµà´±àµ, à´“à´µà´°àµâ€à´¡àµà´°à´¾à´«àµà´±àµà´±àµ à´…à´•àµà´•àµ—à´£àµà´Ÿàµà´•à´³àµâ€à´•àµà´•àµà´‚ à´¨à´¿à´²à´µà´¿à´²àµà´£àµà´Ÿà´¾à´¯à´¿à´°àµà´¨àµà´¨ à´Žà´²àµà´²à´¾ à´¨à´¿à´¯à´¨àµà´¤àµà´°à´£à´µàµà´‚ à´…à´µà´¸à´¾à´¨à´¿à´šàµà´šàµ. à´Žà´¨àµà´¨à´¾à´²àµâ€ à´ªà´£à´‚à´ªà´¿à´¨àµâ€à´µà´²à´¿à´•àµà´•àµà´¨àµà´¨à´¤à´¿à´¨àµà´³àµà´³ à´ªà´°à´¿à´§à´¿à´¸à´‚à´¬à´¨àµà´§à´¿à´šàµà´šàµâ€Œ à´…à´¤à´¤àµ à´¬à´¾à´™àµà´•àµà´•à´³àµâ€à´•àµà´•àµ à´‡à´¨à´¿ à´¤àµ€à´°àµà´®à´¾à´¨à´®àµ†à´Ÿàµà´•àµà´•à´¾à´¨à´¾à´•àµà´‚. à´¨àµ‹à´Ÿàµà´Ÿàµ à´ªà´¿à´¨àµâ€à´µà´²à´¿à´šàµà´šà´¤àµ‹à´Ÿàµ†à´¯àµà´£àµà´Ÿà´¾à´¯ à´ªàµà´°à´¤à´¿à´¸à´¨àµà´§à´¿à´•à´³àµâ€ à´…à´µà´¸à´¾à´¨à´¿à´•àµà´•àµà´¨àµà´¨ à´¸à´¾à´¹à´šà´°àµà´¯à´¤àµà´¤à´¿à´²àµâ€ à´Žà´²àµà´²à´¾ à´¨à´¿à´¯à´¨àµà´¤àµà´°à´£à´µàµà´‚ à´ªà´¿à´¨àµâ€à´µà´²à´¿à´•àµà´•àµà´®àµ†à´¨àµà´¨àµ à´•à´´à´¿à´žàµà´žà´®à´¾à´¸à´¤àµà´¤àµ† à´ªà´£à´µà´¾à´¯àµà´ªà´¾ à´…à´µà´²àµ‹à´•à´¨à´¤àµà´¤à´¿à´¨àµ à´¶àµ‡à´·à´®à´¾à´£àµ à´†à´°àµâ€à´¬à´¿à´ à´ªàµà´°à´–àµà´¯à´¾à´ªà´¿à´šàµà´šà´¤àµ.', 'images/news/148939030958c64ae57d847.jpg', '2017-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `message` varchar(255) COLLATE utf8_bin NOT NULL,
  `address` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `aadhar` text NOT NULL,
  `device_id` text NOT NULL,
  `fcm_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`, `aadhar`, `device_id`, `fcm_id`) VALUES
(3, 'prasanth', 'prasanth@codemagos.com', '9072388801', '123456', '646789', '6f39b944981c6266', 'cEWk9mNEskk:APA91bHZiXpZBmjBhopVVyOqz7JPhM8Jc8t3i4nNmaPURDASgWugtoNXhqK3JtJSWgf_Q7aqNxHymhK3snUqBDfnRvuJqBCY13Qpy9YZntzQN9I6qUPq5_Wmyc0pQ7r57zntGdOzYPi9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
