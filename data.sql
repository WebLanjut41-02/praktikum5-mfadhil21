-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2019 at 04:44 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pagi_maha`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `ipk` decimal(2,0) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`nim`, `nama`, `tanggal`, `ipk`, `kelas`) VALUES
('0001', 'fadhil', '1999-09-21', 3, '42-02'),
('0002', 'firza', '1999-07-11', 4, '42-02'),
('0003', 'egan', '1998-05-21', 4, '42-02'),
('0004', 'rizsa', '1998-08-21', 4, '42-02'),
('0005', 'rafata', '1998-07-21', 4, '42-02'),
('0006', 'nia', '1999-09-21', 4, '42-02'),
('0007', 'bojong', '0000-00-00', 4, '42-02'),
('0008', 'abror', '1999-03-29', 4, '42-01'),
('0009', 'faiz', '1999-06-25', 4, '42-01'),
('0010', 'jodi', '1999-04-22', 3, '42-01'),
('0011', 'bayu', '1999-10-21', 3, '42-01'),
('0012', 'abay', '1999-09-21', 4, '42-01'),
('0013', 'firman', '1999-07-23', 4, '42-01'),
('0014', 'tatang', '1999-08-11', 4, '42-01'),
('0015', 'faris', '1999-03-19', 4, '42-01'),
('0016', 'faris', '1999-02-10', 4, '42-01'),
('0017', 'faris', '1999-01-12', 4, '42-01'),
('0018', 'faris', '1999-05-14', 4, '42-01'),
('0019', 'faris', '1999-06-11', 4, '42-01'),
('0020', 'faris', '1999-08-01', 4, '42-01'),
('6701174098', 'amien', '2019-03-01', 4, '41-01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
