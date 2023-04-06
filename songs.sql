-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 07:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `songID` varchar(5) NOT NULL,
  `songName` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `artist` varchar(50) NOT NULL,
  `songLength` int(4) NOT NULL,
  `ratings` varchar(10) NOT NULL,
  `releaseYear` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`songID`, `songName`, `genre`, `artist`, `songLength`, `ratings`, `releaseYear`) VALUES
('1', 'Starboy', 'Alternative R&B', 'The Weeknd', 230, '9.1/10', 2016),
('10', 'When I was Your Man', 'Pop', 'Bruno Mars', 214, '6.9/10', 2013),
('11', 'Believer', 'Rock', 'Imagine Dragons', 204, '5.5/10', 2017),
('12', 'Someone You Loved', 'Pop', 'Lewis Capaldi', 182, '2.3/10', 2018),
('13', 'Night Changes', 'Pop', 'One Direction', 227, '7.9/10', 2014),
('14', 'Do I Wanna Know?', 'Rock', 'Artic Monkeys', 273, '8.2/10', 2013),
('15', 'Photograph', 'Pop', 'Ed Sheeran', 259, '6.3/10', 2015),
('16', 'The Hills', 'R&B', 'The Weeknd', 242, '8.7/10', 2015),
('17', 'Locked out of Heaven', 'Pop', 'Bruno Mars', 233, '8.7/10', 2012),
('18', 'Love On The Brain', 'Hip-hop', 'Rihanna', 224, '8.9/10', 2016),
('19', 'Circles', 'Pop', 'Post Malone', 215, '8.0/10', 2019),
('2', 'Another Love', 'Pop', 'Tom Odell', 244, '6.0/10', 2012),
('20', 'Wake Me Up', 'Country', 'Avicii', 249, '7.9/10', 2013),
('21', 'Pink + White', 'Pop', 'Frank Ocean', 184, '9.5/10', 2016),
('22', 'Im Not The Only One', 'Soul', 'Sam Smith', 239, '7.6/10', 2014),
('23', 'Lover', 'Country', 'Taylor Swift', 221, '8.1/10', 2019),
('24', 'Thunder', 'Pop', 'Imagine Dragons', 187, '2.4/10', 2017),
('25', 'The Nights', 'House', 'Avicii', 176, '8.4/10', 2014),
('26', 'Stressed Out', 'Hip-hop', 'Twenty One Pilots', 202, '7.0/10', 2015),
('27', 'All of Me', 'Soul', 'John Legend', 270, '5.7/10', 2013),
('28', 'Treat You Better', 'Pop', 'Shawn Mendes', 187, '2.7/10', 2016),
('29', 'Adore You', 'Funk', 'Harry Styles', 207, '8.1/10', 2019),
('3', 'Sure Thing', 'R&B', 'Miguel', 193, '5.0/10', 2010),
('30', '7 rings', 'Pop', 'Ariana Grande', 178, '5.6/10', 2019),
('31', 'Gods Plan', 'Pop', 'Drake', 199, '6.5/10', 2018),
('32', 'Lucid Dreams', 'Rap', 'Juice WRLD', 239, '7.8/10', 2017),
('33', 'everything i wanted', 'Pop', 'Billie Eilish', 245, '8.2/10', 2019),
('34', 'Beggin', 'Rock', 'Maneskin', 211, '3.1/10', 2017),
('35', 'Let Me Down Slowly', 'Pop', 'Alec Benjamin', 169, '7.3/10', 2018),
('36', 'Counting Stars', 'Pop', 'OneRepublic', 259, '7.5/10', 2013),
('37', 'Before You Go', 'Pop', 'Lewis Capaldi', 215, '3.9/10', 2019),
('38', 'Thats What I Like', 'Hip-hop', 'Bruno Mars', 206, '7.5/10', 2017),
('39', 'Sign of the Times', 'Pop', 'Harry Styles', 340, '8.4/10', 2017),
('4', 'Sweater Weather', 'Rock', 'The Neightbourhood', 236, '7.0/10', 2012),
('40', 'A Sky Full of Stars', 'House', 'Coldplay', 267, '7.1/10', 2014),
('41', 'goosebumps', 'Hip-hop', 'Travis Scott', 243, '8.3/10', 2016),
('42', 'Stay With Me', 'Pop', 'Sam Smith', 172, '6.2/10', 2014),
('43', 'Paradise', 'R&B', 'Coldplay', 279, '7.2/10', 2011),
('44', 'Take Me To Church', 'Rock', 'Hozier', 241, '8.1/10', 2013),
('45', 'Bored', 'Pop', 'Billie Eilish', 180, '7.5/10', 2017),
('46', 'Too Good At Goodbyes', 'Pop', 'Sam Smith', 201, '6.4/10', 2017),
('47', 'Thinking out Loud', 'Soul', 'Ed Sheeran', 281, '5.8/10', 2014),
('48', 'Cant Feel My Face', 'Pop', 'The Weeknd', 215, '8.5/10', 2015),
('49', 'Passionfruit', 'House', 'Drake', 299, '8.5/10', 2017),
('5', 'No Role Modelz', 'Hip-hop', 'J. Cole', 292, '9.0/10', 2014),
('50', 'Hymn for the Weekend', 'R&B', 'Coldplay', 258, '7.0/10', 2016),
('6', 'Perfect', 'Pop', 'Ed Sheeran', 263, '5.0/10', 2017),
('7', 'Shape of You', 'Pop', 'Ed Sheeran', 234, '5.5/10', 2017),
('8', 'Watermelon Sugar', 'Rock', 'Harry Styles', 176, '6.7/10', 2020),
('9', 'Call Out My Name', 'R&B', 'The Weeknd', 228, '7.7/10', 2018);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`songID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
