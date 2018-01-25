-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: shareddb-f.hosting.stackcp.net
-- Generation Time: Jan 25, 2018 at 03:46 PM
-- Server version: 10.1.14-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clicks-3236e37e`
--

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `location` text NOT NULL,
  `camera` text NOT NULL,
  `mode` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `title`, `location`, `camera`, `mode`, `date`, `time`, `photo`) VALUES
(1, 'Butterfly', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-08-25', '16:23:00', 'IMG_20171013_221206_460.jpg'),
(2, 'Butterfly ', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2016-04-02', '11:34:00', 'IMG_20171013_221303_102.jpg'),
(3, 'Orange garden', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-09-02', '10:22:00', 'IMG_20171013_221427_055.jpg'),
(4, 'Insect', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-09-02', '17:01:00', 'IMG_20171013_221652_803.jpg'),
(5, 'Mountain', 'Bodak, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2016-03-01', '16:29:00', 'IMG_20171013_221811_942.jpg'),
(6, 'Flower', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-08-25', '14:37:00', 'IMG_20171013_221926_044.jpg'),
(7, 'Fiery Sky', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-07-15', '17:01:00', 'IMG_20171013_222012_101.jpg'),
(8, 'Insect', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-08-25', '18:30:00', 'IMG_20171013_222120_116.jpg'),
(9, 'Butterfly ', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2014-06-26', '13:56:00', 'IMG_20171013_222253_056.jpg'),
(10, 'Insect', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-09-02', '14:37:00', 'IMG_20171013_222344_863.jpg'),
(11, 'Trip', 'Bodak, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '0000-00-00', '14:01:00', 'IMG_20171013_222452_341.jpg'),
(12, 'View', 'Itanagar, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2017-04-06', '11:34:00', 'IMG_20171013_222757_868.jpg'),
(13, 'Gompa (Buddha Mandir)', 'Itanagar, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2016-04-02', '16:23:00', 'IMG_20171013_222901_409.jpg'),
(14, 'Bee', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2016-01-06', '10:09:00', 'IMG_20171013_223016_822.jpg'),
(15, 'Flower induction', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2014-08-16', '07:49:00', 'IMG_20171013_223107_975.jpg'),
(16, 'Pink', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2016-01-28', '08:36:00', 'IMG_20171013_223206_987.jpg'),
(17, 'Shoot', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2014-07-29', '17:01:00', 'IMG_20171013_223254_595.jpg'),
(18, 'On an adventure ', 'Koyu, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2013-07-23', '14:24:00', 'IMG_20171013_223432_851.jpg'),
(19, 'Pearl', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-09-02', '13:22:00', 'IMG_20171013_223359_534.jpg'),
(20, 'Carpenter Bee', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-04-06', '09:50:00', 'IMG_20171013_223548_763.jpg'),
(21, 'Bliss', 'Bodak, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-09-02', '14:37:00', 'IMG_20171014_093535_509.jpg'),
(22, 'Sibo korong', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2013-07-06', '14:30:00', 'IMG_20171014_093628_670.jpg'),
(23, 'The way to heaven', 'Bodak, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2016-03-04', '15:04:00', 'IMG_20171014_093853_845.jpg'),
(24, 'Two little cute things â¤', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-09-19', '12:49:00', 'IMG_20171014_093750_381.jpg'),
(25, 'Flower', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-08-25', '16:23:00', 'IMG_20171014_093953_252.jpg'),
(26, 'Just perfect ', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2016-01-20', '14:00:00', 'IMG_20171014_094105_857.jpg'),
(27, 'Caterpillar ', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-08-25', '11:34:00', 'IMG_20171014_094245_218.jpg'),
(28, 'Ants', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2014-04-29', '10:40:00', 'IMG_20171014_094353_900.jpg'),
(29, 'Flower', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-08-13', '09:58:00', 'IMG_20171014_094454_636.jpg'),
(30, 'Flower', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2014-06-13', '16:57:00', 'IMG_20171014_094554_901.jpg'),
(31, 'Sunset', 'HIMS, Varanasi ', 'Asus zenfone max', 'Manual', '2017-09-27', '17:50:00', 'IMG_20171014_094725_788.jpg'),
(32, 'Sunset', 'HIMS, Varanasi ', 'Asus zenfone max', 'Manual', '2017-08-18', '17:01:00', 'IMG_20171014_094826_086.jpg'),
(33, 'Sunrise', 'HIMS, Varanasi ', 'Asus zenfone max', 'Manual', '2017-09-29', '05:45:00', 'IMG_20171014_094926_859.jpg'),
(34, 'Bamboo bridge ', 'Bodak, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2016-03-04', '14:01:00', 'IMG_20171014_095051_884.jpg'),
(35, 'Heritage Institute of Medical Sciences  (my college)', 'HIMS, Varanasi ', 'Asus zenfone max', 'Super resolution', '2015-08-25', '14:37:00', 'IMG_20170719_165840_807.jpg'),
(36, 'Heritage Institute of Medical Sciences  (my college)', 'HIMS, Varanasi ', 'Asus zenfone max', 'Manual', '2017-08-18', '16:23:00', 'IMG_20170717_053447_443.jpg'),
(37, 'Green â¤', 'HIMS, Varanasi ', 'Asus zenfone max', 'Super resolution', '2017-07-26', '15:21:00', 'IMG_20170803_213514_040.jpg'),
(38, 'Ghat', 'Bhrahmaputra, Bogibil', 'Sony_Dsc_W210 ', '', '2016-12-29', '10:22:00', 'IMG_20170824_030915_481.jpg'),
(39, 'Water Lily ', 'HIMS, Varanasi ', 'Asus zenfone max', 'Depth of field ', '2017-08-18', '05:49:00', 'IMG_20170901_063340_063.jpg'),
(40, 'Abandoned ', 'HIMS, Varanasi ', 'Asus zenfone max', 'Manual', '2017-09-29', '17:34:00', 'IMG_20171006_121233_039.jpg'),
(41, 'Flower', 'Vishwanath temple BHU, Varanasi ', 'One Plus 5', '', '2017-09-25', '15:20:00', 'IMG_20170926_195839_818.jpg'),
(42, 'Clouds â¤', 'HIMS, Varanasi ', 'One Plus 5', '', '2017-09-09', '10:22:00', 'IMG_20170918_184237_851.jpg'),
(43, 'Clouds x NTS =â¤', 'HIMS, Varanasi ', 'One Plus 5', '', '2017-10-10', '13:22:00', 'IMG_20171010_144441_099.jpg'),
(44, 'Lovely day â¤', 'HIMS, Varanasi ', 'One Plus 5', '', '2017-10-10', '13:45:00', 'IMG_20171010_144941_461.jpg'),
(45, 'Heaven â¤', 'HIMS, Varanasi ', 'Asus zenfone max', 'HDR', '2017-08-18', '14:37:00', 'IMG_20170828_194845_756.jpg'),
(46, 'Tulsi ', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-09-02', '17:01:00', 'IMG_20170828_213101_096.jpg'),
(47, 'Flower', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-08-25', '10:22:00', 'IMG_20170831_115732_442.jpg'),
(48, 'Pinkâ¤', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-08-25', '16:23:00', 'IMG_20170831_120103_407.jpg'),
(49, 'Hibiscus ', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2014-06-30', '13:40:00', 'IMG_20170831_120749_757.jpg'),
(50, 'Flower', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-09-02', '17:01:00', 'IMG_20170831_121749_551.jpg'),
(51, 'Those curls ðŸ˜', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-09-02', '16:23:00', 'IMG_20170831_123019_235.jpg'),
(52, 'Butterfly ', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2016-01-23', '15:21:00', 'IMG_20170831_123743_398.jpg'),
(53, 'Dew drop', 'HIMS, Varanasi ', 'Asus zenfone max', 'Depth of field ', '2017-08-18', '05:49:00', 'IMG_20170901_062803_934.jpg'),
(54, 'Dew drop', 'HIMS, Varanasi ', 'Asus zenfone max', 'Depth of field ', '2017-08-18', '06:15:00', 'IMG_20170901_062957_964.jpg'),
(55, 'Spidy', 'HIMS, Varanasi ', 'Asus zenfone max', 'Depth of field ', '2017-08-18', '06:32:00', 'IMG_20170901_063135_893.jpg'),
(56, 'Macro shot', 'HIMS, Varanasi ', 'Asus zenfone max', 'Depth of field ', '2017-08-18', '06:40:00', 'IMG_20170902_082528_468.jpg'),
(57, 'Sunset', 'HIMS, Varanasi ', 'One Plus 5', '', '2017-02-09', '18:30:00', 'IMG_20170909_082043_983.jpg'),
(58, 'Butterfly ', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-09-23', '07:22:00', 'IMG_20170907_101139_013.jpg'),
(59, 'Dispersion ', 'Pasighat, Arunachal Pradesh', 'Sony_Dsc_W210 ', '', '2015-08-25', '10:22:00', 'DSC06807.jpg'),
(60, 'Valiant Light', 'Chandauli, Uttar Pradesh ', 'Asus zenfone max', 'Depth of field ', '2017-10-19', '20:29:00', 'IMG_20171019_205216_582.jpg'),
(61, 'Diya', 'Chandauli, Uttar Pradesh ', 'Asus zenfone max', 'Depth of field ', '2017-10-20', '20:29:00', 'IMG_20171020_211847_200.jpg'),
(62, 'Diya', 'Chandauli, Uttar Pradesh ', 'Asus zenfone max', 'Depth of field ', '2017-10-20', '20:13:00', 'IMG_20171021_211824_878.jpg'),
(63, 'Diya', 'Chandauli, Uttar Pradesh ', 'Asus zenfone max', 'Depth of field ', '2017-10-20', '20:34:00', 'IMG_20171021_212608_422.jpg'),
(64, 'Dev Deepawali', 'Assi ghat, Varanasi ', 'One Plus 5', 'Depth mode', '2017-11-04', '19:30:00', 'IMG_20171105_081243_424.jpg'),
(65, 'Sunrise', 'HIMS, Varanasi ', 'Asus zenfone max', 'Manual', '2017-11-16', '06:15:00', 'IMG_20171120_123701_463.jpg'),
(66, 'Ray of sunshine', 'HIMS, Varanasi ', 'Asus zenfone max', 'Manual', '2017-11-17', '16:38:00', 'IMG_20171127_201942_621.jpg'),
(67, 'Flower', 'HIMS, Varanasi ', 'Asus ZenFone Max', 'Depth of field ', '2017-12-28', '15:22:00', 'IMG_20171228_161440_796.jpg'),
(68, 'Flower', 'HIMS, Varanasi ', 'Asus ZenFone Max', 'Depth of field ', '2017-12-28', '16:38:00', 'IMG_20171228_153201_965.jpg'),
(69, 'Flower', 'HIMS, Varanasi ', 'Asus ZenFone Max', 'Depth of field ', '2017-12-28', '16:32:00', 'IMG_20171228_155015_313.jpg'),
(70, 'Flower', 'HIMS, Varanasi ', 'Asus ZenFone Max', 'Depth of field ', '2018-01-05', '11:29:00', 'IMG_20180105_154735_167.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
