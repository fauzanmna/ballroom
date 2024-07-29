-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2017 at 02:54 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookingkp`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_room`
--

CREATE TABLE IF NOT EXISTS `booking_room` (
  `id_booking` int(255) NOT NULL AUTO_INCREMENT,
  `id_room` int(255) NOT NULL,
  `nama_pembooking` varchar(255) NOT NULL,
  `telp_pembooking` varchar(255) NOT NULL,
  `tgl_booking` datetime NOT NULL,
  `tgl_selesai` datetime NOT NULL,
  `unit_kerja` varchar(255) NOT NULL,
  `agenda_rapat` varchar(255) NOT NULL,
  `status_room` varchar(255) NOT NULL,
  PRIMARY KEY (`id_booking`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `booking_room`
--

INSERT INTO `booking_room` (`id_booking`, `id_room`, `nama_pembooking`, `telp_pembooking`, `tgl_booking`, `tgl_selesai`, `unit_kerja`, `agenda_rapat`, `status_room`) VALUES
(6, 6, 'Yunus', '08174920123849', '2017-08-30 08:00:00', '2017-08-30 12:00:00', 'Unit', 'Agenda', '3'),
(7, 13, 'asdasdasd', '123123123123', '2017-08-30 21:15:00', '2017-08-31 22:00:00', 'asdasasd', 'asdasd', '0');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `id_room` int(255) NOT NULL AUTO_INCREMENT,
  `nama_room` varchar(255) NOT NULL,
  `detail_room` varchar(255) NOT NULL,
  `kapasitas_room` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`id_room`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id_room`, `nama_room`, `detail_room`, `kapasitas_room`, `gambar`) VALUES
(6, 'Room 1', 'Detail 1', '23 Orang', 'image/room/c3c8932b87d4fabd0fdd0326145edc27c4.jpg'),
(13, 'Room 2', 'Detail 2', '25 Orang', ''),
(14, 'Room 3', 'Detail 3', '25 Orang', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
