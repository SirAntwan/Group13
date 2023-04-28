-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 06:42 PM
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
  `releaseYear` int(4) NOT NULL,
  `album` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`songID`, `songName`, `genre`, `artist`, `songLength`, `ratings`, `releaseYear`, `album`, `audio`) VALUES
('01', 'Starboy', 'Alternative R&B', 'The Weeknd', 230, '9.1/10', 2016, 'The_Weeknd-starboy.png', 'Starboy.mp3'),
('02', 'Another Love', 'Pop', 'Tom Odell', 244, '6.0/10', 2012, 'another_love.jpg', 'Tom Odell - Another Love (Lyrics).mp3'),
('03', 'Sure Thing', 'R&B', 'Miguel', 193, '5.0/10', 2010, 'Miguel_All-I-Want-Is-You.jpg', 'Miguel - Sure Thing (Lyrics).mp3'),
('04', 'Sweater Weather', 'Rock', 'The Neightbourhood', 236, '7.0/10', 2012, 'Iloveyou_the_neighbourhood.jpeg', 'The Neighbourhood - Sweater Weather (Lyrics).mp3'),
('05', 'No Role Modelz', 'Hip-hop', 'J. Cole', 292, '9.0/10', 2014, 'norolemodel8.jpg', 'No Role Modelz.mp3'),
('06', 'Perfect', 'Pop', 'Ed Sheeran', 263, '5.0/10', 2017, 'eds.jpg', 'Ed Sheeran - Perfect (Lyrics).mp3'),
('07', 'Shape of You', 'Pop', 'Ed Sheeran', 234, '5.5/10', 2017, 'eds.jpg', 'Ed Sheeran - Shape Of You (Lyrics).mp3'),
('08', 'Watermelon Sugar', 'Rock', 'Harry Styles', 176, '6.7/10', 2020, 'Harry_Styles_-_Fine_Line.png', 'Harry Styles - Watermelon Sugar (Official Audio).mp3'),
('09', 'Call Out My Name', 'R&B', 'The Weeknd', 228, '7.7/10', 2018, 'Weekenddownload.jpg', 'The Weeknd - Call Out My Name (LYRICS).mp3'),
('10', 'When I was Your Man', 'Pop', 'Bruno Mars', 214, '6.9/10', 2013, 'When i was.jpg', 'Bruno Mars - When I Was Your Man.mp3'),
('11', 'Believer', 'Rock', 'Imagine Dragons', 204, '5.5/10', 2017, 'ImagineDragonsEvolve.jpg', 'Imagine Dragons - Believer (Lyrics).mp3'),
('12', 'Someone You Loved', 'Pop', 'Lewis Capaldi', 182, '2.3/10', 2018, 'someone you loved3fc2101e6889d6ce9025f85f2.jpg', 'Lewis Capaldi - Someone You Loved (Lyrics).mp3'),
('13', 'Night Changes', 'Pop', 'One Direction', 227, '7.9/10', 2014, 'night changes500x500.jpg', 'One Direction - Night Changes (Audio).mp3'),
('14', 'Do I Wanna Know?', 'Rock', 'Artic Monkeys', 273, '8.2/10', 2013, '_AM__(Arctic_Monkeys).jpg', 'Arctic Monkeys - Do I Wanna Know_ (Lyrics).mp3'),
('15', 'Photograph', 'Pop', 'Ed Sheeran', 259, '6.3/10', 2015, 'Ed photograph8a0c247b550bccd.jpg', 'The Hills.mp3'),
('16', 'The Hills', 'R&B', 'The Weeknd', 242, '8.7/10', 2015, 'the hills500x500.jpg', 'Ed Sheeran - Photograph (Lyrics).mp3'),
('17', 'Locked out of Heaven', 'Pop', 'Bruno Mars', 233, '8.7/10', 2012, 'lockedout.jpg', 'Locked Out Of Heaven - Bruno Mars (Lyrics).mp3'),
('18', 'Love On The Brain', 'Hip-hop', 'Rihanna', 224, '8.9/10', 2016, 'love on brain.jpg', 'Rihanna - Love On The Brain (Lyrics).mp3'),
('19', 'Circles', 'Pop', 'Post Malone', 215, '8.0/10', 2019, 'circles posta7e02.jpg', 'Post Malone - Circles (Clean - Lyrics).mp3'),
('20', 'Wake Me Up', 'Country', 'Avicii', 249, '7.9/10', 2013, 'Avicii_Wake_Me_Up_Official_Single_Cover.png', 'Avicii - Wake Me Up (Lyrics).mp3'),
('21', 'Pink + White', 'Pop', 'Frank Ocean', 184, '9.5/10', 2016, 'blonde.jpg', 'Frank Ocean - Pink  White (lyrics).mp3'),
('22', 'Im Not The Only One', 'Soul', 'Sam Smith', 239, '7.6/10', 2014, 'sam im notdownload.jpg', 'Sam Smith - I\'m Not The Only One (Lyrics).mp3'),
('23', 'Lover', 'Country', 'Taylor Swift', 221, '8.1/10', 2019, 'Taylor_Swift_-_Lover.png', 'Taylor Swift - Lover (Lyrics).mp3'),
('24', 'Thunder', 'Pop', 'Imagine Dragons', 187, '2.4/10', 2017, 'ImagineDragonsEvolve.jpg', 'Imagine Dragons - Thunder (Lyrics).mp3'),
('25', 'The Nights', 'House', 'Avicii', 176, '8.4/10', 2014, 'The-Days-Nights-EP-by-Avicii.jpg', 'Avicii - The Nights (Lyrics) _my father told me_.mp3'),
('26', 'Stressed Out', 'Hip-hop', 'Twenty One Pilots', 202, '7.0/10', 2015, 'Blurryface_by_Twenty_One_Pilots.png', 'twenty one pilots - Stressed Out (Audio).mp3'),
('27', 'All of Me', 'Soul', 'John Legend', 270, '5.7/10', 2013, 'John_Legend_Love_in_the_Future.jpg', 'John Legend - All of Me (Lyrics).mp3'),
('28', 'Treat You Better', 'Pop', 'Shawn Mendes', 187, '2.7/10', 2016, 'Treat_You_Better_(Official_Single_Cover)_by_Shawn_Mendes.png', 'Shawn Mendes - Treat You Better (Lyrics).mp3'),
('29', 'Adore You', 'Funk', 'Harry Styles', 207, '8.1/10', 2019, 'Harry_Styles_-_Fine_Line.png', 'Harry Styles - Adore You (Official Audio).mp3'),
('30', '7 rings', 'Pop', 'Ariana Grande', 178, '5.6/10', 2019, 'Thank_U,_Next_album_cover.png', 'Ariana Grande - 7 rings (Audio).mp3'),
('31', 'Gods Plan', 'Pop', 'Drake', 199, '6.5/10', 2018, 'Scorpion_by_Drake.jpg', 'God\'s Plan.mp3'),
('32', 'Lucid Dreams', 'Rap', 'Juice WRLD', 239, '7.8/10', 2017, 'Juice_WRLD_-_Lucid_Dreams.png', 'Juice Wrld - Lucid Dreams (Lyrics).mp3'),
('33', 'Everything i wanted', 'Pop', 'Billie Eilish', 245, '8.2/10', 2019, 'Billie-Eilish-Everything-I-Wanted-820x820.jpg', 'Billie Eilish - everything i wanted (Audio).mp3'),
('34', 'Beggin', 'Rock', 'Maneskin', 211, '3.1/10', 2017, 'beggin.jpg', 'Madcon - Beggin (Lyrics)  Beggin\', beggin\' you.mp3'),
('35', 'Let Me Down Slowly', 'Pop', 'Alec Benjamin', 169, '7.3/10', 2018, 'let me down500x500.jpg', 'Alec Benjamin - Let Me Down Slowly (Lyrics).mp3'),
('36', 'Counting Stars', 'Pop', 'OneRepublic', 259, '7.5/10', 2013, 'OneRepublic_-_Native.png', 'OneRepublic - Counting Stars (Lyrics).mp3'),
('37', 'Before You Go', 'Pop', 'Lewis Capaldi', 215, '3.9/10', 2019, 'someone you loved3fc2101e6889d6ce9025f85f2.jpg', 'Lewis Capaldi - Before You Go (Lyrics).mp3'),
('38', 'Thats What I Like', 'Hip-hop', 'Bruno Mars', 206, '7.5/10', 2017, 'thats what i like500x500.jpg', 'Bruno Mars - Thats What I Like (Lyrics).mp3'),
('39', 'Sign of the Times', 'Pop', 'Harry Styles', 340, '8.4/10', 2017, 'Harry_Styles_-_Sign_of_the_Times_(Official_Single_Cover).png', 'Harry Styles - Sign of the Times (Lyrics).mp3'),
('40', 'A Sky Full of Stars', 'House', 'Coldplay', 267, '7.1/10', 2014, 'a sky full1d17ae0.jpg', 'Coldplay - A Sky Full Of Stars (Lyrics).mp3'),
('41', 'goosebumps', 'Hip-hop', 'Travis Scott', 243, '8.3/10', 2016, 'goosebumps7403ce.jpg', 'Travis Scott - goosebumps ft. Kendrick Lamar.mp3'),
('42', 'Stay With Me', 'Pop', 'Sam Smith', 172, '6.2/10', 2014, 'sam im notdownload.jpg', 'Sam Smith - Stay With Me.mp3'),
('43', 'Paradise', 'R&B', 'Coldplay', 279, '7.2/10', 2011, 'Coldplay_-_Paradise.jpg', 'Coldplay - Paradise (Lyrics).mp3'),
('44', 'Take Me To Church', 'Rock', 'Hozier', 241, '8.1/10', 2013, 'Hozier_-_Hozier.png', 'Hozier - Take Me To Church (Lyrics).mp3'),
('45', 'Bored', 'Pop', 'Billie Eilish', 180, '7.5/10', 2017, 'bored bille4aeaa84e.jpg', 'Billie Eilish - Bored (Audio).mp3'),
('46', 'Too Good At Goodbyes', 'Pop', 'Sam Smith', 201, '6.4/10', 2017, 'too good at1f6cca.jpg', 'Sam Smith - Too Good At Goodbyes (Lyrics).mp3'),
('47', 'Thinking out Loud', 'Soul', 'Ed Sheeran', 281, '5.8/10', 2014, 'Ed photograph8a0c247b550bccd.jpg', 'Ed Sheeran - Thinking Out Loud [Official Audio].mp3'),
('48', 'Cant Feel My Face', 'Pop', 'The Weeknd', 215, '8.5/10', 2015, 'the hills500x500.jpg', 'Can\'t Feel My Face - The Weeknd (Lyrics).mp3'),
('49', 'Passionfruit', 'House', 'Drake', 299, '8.5/10', 2017, 'Drake_-_More_Life_cover.jpg', 'Passionfruit.mp3'),
('50', 'Hymn for the Weekend', 'R&B', 'Coldplay', 258, '7.0/10', 2016, 'Coldplay,_Hymn_for_the_Weekend,_Artwork.jpg', 'Coldplay - Hymn For The Weekend (Lyrics).mp3');

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
