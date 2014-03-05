-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2014 at 08:38 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hutan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `sumber_dana` varchar(255) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `urutan` int(11) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `module_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `content`, `sumber_dana`, `periode`, `urutan`, `alias`, `module_type_id`) VALUES
(1, 'TABEL 1.  GANGGUAN KEAMANAN KAWASAN DARI PENCURIAN KAYU/PENEBANGAN LIAR', 'UPT', 'Bulanan', 1, 'table_01', 1),
(2, 'TABEL 2.  GANGGUAN KEAMANAN KAWASAN HUTAN AKIBAT PERAMBAHAN DAN PEMUKIMAN LIAR', 'UPT', 'Bulanan', 2, '', 0),
(3, 'TABEL 3.  HASIL OPERASI PENGAMANAN HUTAN TERHADAP PERAMBAHAN DAN PEMUKIMAN LIAR DI KAWASAN KONSERVASI', 'UPT', 'Bulanan', 3, '', 0),
(4, 'TABEL 4.  HASIL OPERASI PENGAMANAN HUTAN TERHADAP PERLADANGAN LIAR DI KAWASAN KONSERVASI', 'UPT', 'Bulanan', 4, '', 0),
(5, 'TABEL 5.  HASIL OPERASI PENGAMANAN HUTAN TERHADAP PENAMBANGAN LIAR DI KAWASAN KONSERVASI', 'UPT', 'Bulanan', 5, '', 0),
(6, 'TABEL 6.  HASIL OPERASI PENGAMANAN HUTAN TERHADAP ILLEGAL LOGGING', 'UPT', 'Bulanan', 6, '', 0),
(7, 'TABEL 7.  HASIL OPERASI PENGAMANAN HUTAN TERHADAP TUMBUHAN DAN SATWA LIAR  ', 'UPT', 'Bulanan', 7, '', 0),
(8, 'TABEL 8.  PENGGUNAAN KAWASAN TANPA IZIN MENTERI UNTUK KEGIATAN PERKEBUNAN', 'UPT', 'Bulanan', 8, '', 0),
(9, 'TABEL 9.  PENGGUNAAN KAWASAN TANPA IZIN MENTERI UNTUK KEGIATAN PERTAMBANGAN', 'UPT', 'Bulanan', 9, '', 0),
(10, 'TABEL 10.  PENGGUNAAN KAWASAN TANPA IZIN MENTERI UNTUK KEGIATAN PEMBANGUNAN SARANA PRASARANA', 'UPT', 'Bulanan', 10, '', 0),
(11, 'TABEL 11.  PENANGANAN KERUSAKAN KAWASAN AKIBAT BENCANA ALAM', 'UPT', 'Triwulan', 11, '', 0),
(12, 'TABEL 12.  JUMLAH TENAGA PENGAMANAN HUTAN', 'UPT', 'Bulanan', 12, '', 0),
(13, 'TABEL 13.  REKAPITULASI PERKARA', 'UPT', 'Bulanan', 13, '', 0),
(14, 'TABEL 14.  SARANA PENGAMANAN HUTAN', 'UPT', 'Semester', 14, '', 0),
(15, 'TABEL 15.  PRASARANA PENGAMANAN HUTAN', 'UPT', 'Semester', 15, '', 0),
(16, 'TABEL 16.  SENJATA API DAN AMUNISI', 'UPT', 'Semester', 16, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `module_type`
--

CREATE TABLE IF NOT EXISTS `module_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `module_type`
--

INSERT INTO `module_type` (`id`, `name`, `alias`) VALUES
(1, 'PPH', 'pph');

-- --------------------------------------------------------

--
-- Table structure for table `pph_table_01`
--

CREATE TABLE IF NOT EXISTS `pph_table_01` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hutan_produksi_value` varchar(255) NOT NULL,
  `hutan_produksi_satuan` varchar(255) NOT NULL,
  `hutan_lidung_value` varchar(255) NOT NULL,
  `hutan_lindung_satuan` varchar(255) NOT NULL,
  `ksa_value` varchar(255) NOT NULL,
  `ksa_satuan` varchar(255) NOT NULL,
  `kpa_value` varchar(255) NOT NULL,
  `kps_satuan` varchar(255) NOT NULL,
  `tb_value` varchar(255) NOT NULL,
  `tb_satuan` varchar(255) NOT NULL,
  `hutan_lain_value` varchar(255) NOT NULL,
  `hutan_lain_satuan` varchar(255) NOT NULL,
  `nilai_rugi` int(11) NOT NULL,
  `upaya` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pph_table_01`
--

INSERT INTO `pph_table_01` (`id`, `hutan_produksi_value`, `hutan_produksi_satuan`, `hutan_lidung_value`, `hutan_lindung_satuan`, `ksa_value`, `ksa_satuan`, `kpa_value`, `kps_satuan`, `tb_value`, `tb_satuan`, `hutan_lain_value`, `hutan_lain_satuan`, `nilai_rugi`, `upaya`, `keterangan`, `update_time`) VALUES
(10, '11', '', '2', '', '3', '', '', '', '', '', '', '', 15, '', '', '2014-03-05 20:36:20'),
(9, '12', 'm3', '132', 'batang', '111', 'm3', '4', 'batang', '111', 'm3', '11', 'm3', 16, '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_type_id` int(11) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `register_date` datetime NOT NULL,
  `is_active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_type_id`, `alias`, `email`, `fullname`, `passwd`, `address`, `register_date`, `is_active`) VALUES
(1, 1, 'admin', 'her0satr@yahoo.com', 'Admin', 'fe30fa79056939db8cbe99c8d601de74', '1235', '2013-07-04 00:00:00', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
