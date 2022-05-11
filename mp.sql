-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 12:00 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'MP', '3c6dc260af2ebf7ec6d7ccc093a048e4c2cdce60');

-- --------------------------------------------------------

--
-- Table structure for table `aotw`
--

CREATE TABLE `aotw` (
  `id` int(200) NOT NULL,
  `artist` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `story` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aotw`
--

INSERT INTO `aotw` (`id`, `artist`, `genre`, `story`) VALUES
(1, 'Fwaxxy Rvssian', 'Gospel', 'He has made over 20 gospel hiphop music. His music journey started back in 2015.');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int(200) NOT NULL,
  `artist` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `artist`, `link`, `genre`, `picture`) VALUES
(1, 'Big Pablo', 'http://localhost/projects/mp/artists/big-pablo.php', 'HipHop', 'b.png'),
(2, 'A-Reece', 'http://localhost/projects/mp/artists/a-reece.php', 'HipHop', 'FB_IMG_16397461913361065.png'),
(3, 'Fwaxxy Rvssian', 'http://localhost/projects/mp/artists/fwaxxy-rvssian.php', 'Gospel', 'default.png'),
(4, 'Tom Macdonald', 'http://localhost/projects/mp/artists/tom-macdonald.php', 'HipHop', 'IMG_0024.png'),
(5, 'Lygah Verjus', 'http://localhost/projects/mp/artists/lygah-verjus.php', 'Afro', 'default.png'),
(6, 'Mabingo', 'http://localhost/projects/mp/artists/mabingo.php', 'DanceHall', 'default.png'),
(7, 'Tana Bling', 'http://localhost/projects/mp/artists/tana-bling.php', 'DanceHall', 'default.png'),
(8, 'Top Icon', 'http://localhost/projects/mp/artists/top-icon.php', 'DanceHall', 'default.png'),
(9, 'Vhizra', 'http://localhost/projects/mp/artists/vhizra.php', 'DanceHall', 'default.png'),
(10, 'Kendrick Lamar', 'http://localhost/projects/mp/artists/kendrick-lamar.php', 'HipHop', 'cover.png'),
(11, '50 Cent', 'http://localhost/projects/mp/artists/50-cent.php', 'HipHop', 'FB_IMG_16391507391378160.png');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(200) NOT NULL,
  `artist` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `song` varchar(200) NOT NULL,
  `artwork` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `downloads` int(200) NOT NULL,
  `link` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `artist`, `title`, `genre`, `song`, `artwork`, `time`, `date`, `downloads`, `link`) VALUES
(1, 'Big Pablo', 'Exhausted', 'HipHop', 'cosminpndr - WARZONE - Hard Freestyle Rap Trap Type Beat.mp3', 'b.png', '01:28', '22-03-17', 2, 'http://localhost/projects/mp/songs/links/big-pablo-exhausted-mp3.php'),
(2, 'Big Pablo', 'Too Much', 'Afro', 'cosminpndr - DEMONS - Hard Dark Fast Freestyle Trap Type Beat.mp3', 'a.png', '01:31', '22-03-17', 2, 'http://localhost/projects/mp/songs/links/big-pablo-too-much-mp3.php'),
(3, 'Big Pablo', 'F-W', 'DanceHall', 'cosminpndr - Drive by.mp3', 'FB_IMG_16397461913361065.png', '01:51', '22-03-17', 5, 'http://localhost/projects/mp/songs/links/big-pablo-fw-mp3.php'),
(4, 'Daffy Duck', 'Parade', 'Afro', 'daffy duck.mp3', 'daffy-duck-wallpaper-preview.png', '11:50', '22-03-17', 1, 'http://localhost/projects/mp/songs/links/daffy-duck-parade-mp3.php'),
(5, 'Pharell Williams', 'Freedom', 'Afro', 'Pharrell Williams - Freedom.mp3', '301-3012818_boondocks-hit-dem-folks-riley-freeman-wallpaper-hd.png', '11:51', '22-03-17', 1, 'http://localhost/projects/mp/songs/links/pharell-williams-freedom-mp3.php'),
(6, 'Lil Durk', 'Skrubs', 'HipHop', '07 Skrubs - (SongsLover.com).mp3', 'FB_IMG_16375612674759095.png', '11:52', '22-03-17', 2, 'http://localhost/projects/mp/songs/links/lil-durk-skrubs-mp3.php'),
(7, 'Lil Baby', 'Bruised Up', 'HipHop', 'Lil Baby & Lil Durk - Bruised Up (Official Audio).m4a', 'FB_IMG_16382807274966784.png', '11:53', '22-03-17', 1, 'http://localhost/projects/mp/songs/links/lil-baby-bruised-up-mp3.php'),
(8, 'Psy', 'Gangnam Style', 'Afro', 'Psy-Gangnam-Style-(BeatzJam.com).mp3', 'FB_IMG_16384681647942114.png', '11:55', '22-03-17', 13, 'http://localhost/projects/mp/songs/links/psy-gangnam-style-mp3.php'),
(9, '50 Cent', 'Many Men', 'HipHop', '04. Many Men (Wish Death) (www.SongsLover.com).mp3', 'FB_IMG_16391507391378160.png', '11:56', '22-03-17', 1, 'http://localhost/projects/mp/songs/links/50-cent-many-men-mp3.php'),
(10, 'A-Reece', 'Paradise', 'HipHop', 'A-Reece-Paradise.mp3', 'FB_IMG_16392270939875175.png', '11:57', '22-03-17', 1, 'http://localhost/projects/mp/songs/links/a-reece-paradise-mp3.php'),
(11, 'Tom Macdonald', 'Famous', 'HipHop', '07 Famous.mp3', 'IMG_0024.png', '11:59', '22-03-17', 0, 'http://localhost/projects/mp/songs/links/tom-macdonald-famous-mp3.php'),
(12, 'Vybz Kartel', 'Its A Sin', 'DanceHall', 'Vybz-Kartel-Its-A-Sin-Prod.-by-JB-Productions.mp3', 'default.png', '12:00', '22-03-18', 0, 'http://localhost/projects/mp/songs/links/vybz-kartel-its-a-sin-mp3.php'),
(13, 'Top Icon', 'Bad X2', 'DanceHall', 'Bad_x2_(Prod.J-Peace).mp3', 'default.png', '12:02', '22-03-18', 1, 'http://localhost/projects/mp/songs/links/top-icon-bad-x2-mp3.php'),
(14, 'Tana Bling', 'Dem Don', 'DanceHall', 'Dem_don(Prod.cheo_meek).mp3', 'default.png', '12:03', '22-03-18', 0, 'http://localhost/projects/mp/songs/links/tana-bling-dem-don-mp3.php'),
(15, 'Mabingo', 'Lock City', 'DanceHall', 'LOCK_CITY(prod.cheo_meek).mp3', 'default.png', '12:04', '22-03-18', 0, 'http://localhost/projects/mp/songs/links/mabingo-lock-city-mp3.php'),
(16, 'Vhizra', 'Real Time', 'DanceHall', 'Real_Time-Prod_by_J-Peace.mp3', 'default.png', '12:06', '22-03-18', 0, 'http://localhost/projects/mp/songs/links/vhizra-real-time-mp3.php'),
(17, 'Lygah Verjus', 'Engaged', 'Afro', 'Engagged.mp3', 'default.png', '12:07', '22-03-18', 3, 'http://localhost/projects/mp/songs/links/lygah-verjus-engaged-mp3.php'),
(18, 'YcMata Kwen', 'Allow', 'Afro', 'Allow (Prod By Kwen Touch).mp3', 'default.png', '12:09', '22-03-18', 0, 'http://localhost/projects/mp/songs/links/ycmata-kwen-allow-mp3.php'),
(19, 'Fwaxxy Rvssian', 'Back It Up', 'Gospel', 'back it up.mp3', 'default.png', '12:11', '22-03-18', 0, 'http://localhost/projects/mp/songs/links/fwaxxy-rvssian-back-it-up-mp3.php'),
(20, 'Fwaxxy Rvssian', 'Bad Gyal Love', 'Gospel', 'Bad Gyal Love[prod.Claytos].mp3', 'default.png', '12:12', '22-03-18', 1, 'http://localhost/projects/mp/songs/links/fwaxxy-rvssian-bad-gyal-mp3.php'),
(21, 'Fwaxxy Rvssian', 'Ndine Ndekha', 'Gospel', 'Ndine Ndekha[prod.Claytos].mp3', 'default.png', '12:13', '22-03-18', 0, 'http://localhost/projects/mp/songs/links/fwaxxy-rvssian-ndine-ndekha-mp3.php'),
(22, 'P!nk', 'Hustle', 'Gospel', '01 Hustle - (SongsLover.com).mp3', 'default.png', '12:14', '22-03-18', 0, 'http://localhost/projects/mp/songs/links/p!nk-hustle-mp3.php'),
(23, 'YBN Cordae', 'Have Mercy', 'Gospel', '02 Have Mercy - (SongsLover.com).mp3', 'default.png', '12:15', '22-03-18', 0, 'http://localhost/projects/mp/songs/links/ybn-cordae-have-mercy-mp3.php'),
(24, 'Tom Macdonald', 'Dummies', 'Gospel', 'Tom_Macdonald_-_Dummies_AfroNaija.com.mp3', 'default.png', '12:18', '22-03-18', 0, 'http://localhost/projects/mp/songs/links/tom-macdonald-dummies-mp3.php'),
(25, 'Kendrick Lamar', 'The Only Nigga', 'HipHop', '2. The Only Nigga - (SongsLover.com).mp3', 'cover.png', '07:30', '22-03-18', 3, 'http://localhost/projects/mp/songs/links/kendrick-lamar-the-only-nigga.php'),
(26, 'Kendrick Lamar', 'Fear', 'HipHop', '03 FEAR. - (www.SongsLover.club).mp3', 'default.png', '08:52', '22-03-18', 2, 'http://localhost/projects/mp/songs/links/kendrick-lamar-fear-mp3.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aotw`
--
ALTER TABLE `aotw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aotw`
--
ALTER TABLE `aotw`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
