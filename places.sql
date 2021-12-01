-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2021 at 07:12 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `earthquakenew`
--

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `Id` int(24) NOT NULL,
  `Time` varchar(24) NOT NULL,
  `latitude` decimal(6,4) NOT NULL,
  `longitude` decimal(6,4) NOT NULL,
  `depth` decimal(5,2) NOT NULL,
  `mag` decimal(2,1) NOT NULL,
  `magType` varchar(3) NOT NULL,
  `place` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`Id`, `Time`, `latitude`, `longitude`, `depth`, `mag`, `magType`, `place`) VALUES
(1, '2012-10-28T12:11:15.390Z', '36.4230', '71.1330', '208.30', '4.8', 'mb', 'Hindu Kush region, Afghanistan'),
(17, '2012-10-21T07:54:46.990Z', '13.6940', '96.1750', '35.00', '4.7', 'mb', 'Andaman Islands, India region'),
(29, '2009-12-31T09:57:29.720Z', '27.3190', '91.5100', '10.00', '5.5', 'mb', 'Bhutan'),
(30, '2009-12-29T13:33:22.870Z', '35.0170', '73.0050', '63.80', '4.0', 'mb', 'northwestern Kashmir'),
(31, '2009-12-29T09:01:55.310Z', '24.3570', '94.8070', '124.80', '5.6', 'mwb', 'Myanmar-India border region'),
(32, '2009-12-28T02:15:04.870Z', '30.6860', '83.7690', '10.00', '4.4', 'mb', 'western Xizang'),
(33, '2015-05-26T14:15:30.970Z', '27.3029', '85.0688', '10.00', '3.7', 'mb', '14km SSE of Hitura, Nepal'),
(34, '2015-05-25T22:26:22.580Z', '36.6077', '70.9237', '204.62', '4.3', 'mb', '29km SSE of Jarm, Afghanistan'),
(35, '2015-05-25T15:59:02.060Z', '22.1323', '93.2059', '53.29', '4.5', 'mb', '46km SSE of Saiha, India'),
(36, '2015-05-25T10:46:03.060Z', '28.5718', '87.2411', '42.44', '4.3', 'mb', '16km ESE of Xegar, China'),
(37, '2015-05-24T21:38:40.840Z', '28.0271', '84.6734', '10.00', '4.4', 'mb', '36km ESE of Lamjung, Nepal'),
(38, '2015-05-22T19:07:41.930Z', '29.8042', '81.6888', '10.00', '4.3', 'mb', '70km SE of Burang, China'),
(39, '2015-05-22T13:04:05.930Z', '27.6635', '85.6936', '10.00', '4.1', 'mb', '17km ENE of Banepa, Nepal'),
(40, '2015-05-22T11:45:47.370Z', '27.5438', '86.0511', '10.00', '4.3', 'mb', '24km N of Ramechhap, Nepal'),
(41, '2015-05-22T10:59:33.780Z', '27.9555', '84.9671', '10.00', '4.7', 'mb', '43km NW of Kirtipur, Nepal'),
(42, '2015-05-22T01:55:10.850Z', '36.5351', '70.5591', '183.51', '4.1', 'mb', '44km SW of Jarm, Afghanistan'),
(43, '2015-05-21T12:43:35.350Z', '22.7454', '95.8893', '22.56', '4.2', 'mb', '27km NE of Shwebo, Burma'),
(44, '2015-05-21T09:11:55.640Z', '27.8173', '85.2090', '10.00', '4.0', 'mb', '16km NW of Kathmandu, Nepal'),
(45, '2015-05-20T09:02:32.260Z', '27.3231', '85.0483', '10.00', '4.6', 'mb', '11km S of Hitura, Nepal'),
(46, '2015-05-20T08:54:27.900Z', '36.4993', '71.2685', '107.41', '4.0', 'mb', '31km SW of Ashkasham, Afghanistan'),
(47, '2015-05-19T10:59:30.690Z', '27.7722', '85.8680', '10.00', '4.2', 'mb', '21km SSW of Kodari, Nepal'),
(48, '2015-05-19T09:34:31.210Z', '36.2830', '70.8843', '124.12', '4.0', 'mb', '29km NNE of `Alaqahdari-ye Kiran wa Munjan, Afghanistan'),
(49, '2015-05-18T22:49:50.890Z', '27.5867', '85.8925', '10.00', '4.4', 'mb', '34km NNW of Ramechhap, Nepal'),
(50, '2015-05-18T16:46:36.840Z', '34.1771', '73.7435', '32.32', '4.3', 'mb', '21km N of Bagh, Pakistan'),
(51, '2015-05-12T08:59:39.740Z', '27.7729', '86.1950', '10.00', '4.5', 'mb', '27km SSW of Zuobude, China'),
(52, '2015-05-12T08:52:30.290Z', '28.0084', '86.3358', '10.00', '4.0', 'mb', '3km ENE of Camgyai, China'),
(53, '2015-05-12T08:51:32.500Z', '27.6469', '86.2138', '10.00', '4.3', 'mb', '37km NNE of Ramechhap, Nepal'),
(54, '2015-05-12T08:39:07.940Z', '27.7431', '86.0100', '10.00', '4.0', 'mb', '23km SSE of Kodari, Nepal'),
(55, '2015-05-12T08:35:36.710Z', '27.7042', '86.2108', '10.00', '4.4', 'mb', '33km SSW of Camgyai, China'),
(56, '2015-05-12T08:34:24.130Z', '28.1877', '86.0143', '16.34', '4.3', 'mb', '6km NE of Chongdui, China'),
(57, '2015-05-12T08:24:24.340Z', '27.7486', '86.0692', '10.00', '4.8', 'mb', '25km SSE of Kodari, Nepal'),
(58, '2015-05-12T08:21:10.760Z', '27.7298', '86.1316', '15.00', '5.2', 'mb', '30km SE of Kodari, Nepal'),
(59, '2015-05-12T08:13:54.600Z', '27.7629', '85.7574', '15.00', '5.1', 'mb', '23km ENE of Nagarkot, Nepal'),
(60, '2015-05-12T08:11:22.590Z', '27.4654', '85.7306', '10.00', '4.3', 'mb', '25km ESE of Panaoti, Nepal'),
(61, '2015-05-12T08:06:05.530Z', '27.7221', '86.0161', '15.00', '5.0', 'mb', '26km SSE of Kodari, Nepal'),
(62, '2015-05-12T08:05:25.540Z', '27.9198', '86.1387', '10.00', '4.2', 'mb', '16km ESE of Zham, China'),
(63, '2015-05-12T07:57:17.360Z', '27.7351', '86.5554', '10.00', '4.5', 'mb', '17km WSW of Namche Bazar, Nepal'),
(64, '2015-05-12T07:48:51.490Z', '27.7224', '86.2576', '10.00', '4.9', 'mb', '31km S of Zuobude, China'),
(65, '2015-05-12T07:47:46.350Z', '27.5579', '86.0390', '10.00', '4.9', 'mb', '26km N of Ramechhap, Nepal'),
(66, '2015-05-12T07:43:17.310Z', '27.6521', '86.2387', '11.77', '4.9', 'mb', '39km NNE of Ramechhap, Nepal'),
(67, '2015-05-12T07:36:54.490Z', '27.6250', '86.1617', '15.00', '6.3', 'mww', '33km NNE of Ramechhap, Nepal'),
(68, '2015-05-12T07:34:22.630Z', '27.7458', '86.2449', '10.00', '5.4', 'mb', '28km S of Camgyai, China'),
(69, '2014-06-10T19:45:45.760Z', '10.9021', '91.8209', '27.97', '4.0', 'mb', '131km SW of Bamboo Flat, India'),
(70, '2014-06-09T17:40:23.230Z', '24.1878', '91.5293', '31.79', '4.1', 'mb', '14km NW of Khowai, India'),
(71, '2014-06-08T09:27:26.020Z', '36.4753', '70.6598', '207.75', '4.2', 'mb', '45km SSW of Jarm, Afghanistan'),
(72, '2012-10-03T10:04:50.650Z', '33.4980', '75.9630', '35.00', '4.1', 'mb', 'eastern Kashmir'),
(73, '2012-10-02T18:51:38.010Z', '26.9130', '92.9390', '37.80', '4.5', 'mb', 'Assam, India'),
(74, '2012-10-02T18:40:42.920Z', '26.9530', '92.9940', '35.00', '4.6', 'mb', 'Assam, India'),
(75, '2012-10-02T18:37:38.700Z', '26.8790', '92.8180', '36.80', '5.2', 'mb', 'Assam, India'),
(76, '2012-10-02T08:34:54.360Z', '32.4710', '76.6320', '10.00', '4.8', 'mb', 'Himachal Pradesh, India'),
(77, '2012-10-02T03:45:30.090Z', '32.4010', '76.5070', '19.10', '4.6', 'mb', 'Himachal Pradesh, India'),
(78, '2012-10-01T23:21:42.660Z', '4.9940', '94.4870', '47.20', '4.3', 'mb', 'off the west coast of northern Sumatra'),
(79, '2012-09-29T11:24:32.650Z', '6.1070', '92.7800', '23.20', '5.3', 'mb', 'Nicobar Islands, India region'),
(80, '2012-09-28T22:14:44.940Z', '29.3080', '67.9180', '10.00', '4.3', 'mb', 'Pakistan'),
(81, '2012-09-28T19:30:12.350Z', '4.9060', '93.9200', '20.50', '4.3', 'mb', 'off the west coast of northern Sumatra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `Id` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
