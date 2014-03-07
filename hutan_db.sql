-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2014 at 11:14 PM
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
-- Table structure for table `kkbhl_table_01`
--

CREATE TABLE IF NOT EXISTS `kkbhl_table_01` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kawasan` varchar(255) NOT NULL,
  `kawasan_penunjukan_no` varchar(255) NOT NULL,
  `kawasan_penunjukan_tanggal` date NOT NULL,
  `kawasan_penunjukan_luas` varchar(255) NOT NULL,
  `kawasan_penetapan_no` varchar(255) NOT NULL,
  `kawasan_penetapan_tanggal` date NOT NULL,
  `kawasan_penetapan_luas` varchar(255) NOT NULL,
  `blog_penata_pengesah` varchar(255) NOT NULL,
  `blog_penata_no` varchar(255) NOT NULL,
  `blog_penata_tanggal` date NOT NULL,
  `blog_luas_inti` varchar(255) NOT NULL,
  `blog_luas_rimba` varchar(255) NOT NULL,
  `blog_luas_manfaat` varchar(255) NOT NULL,
  `blog_luas_lain` varchar(255) NOT NULL,
  `sk_pengesahaan_no` varchar(255) NOT NULL,
  `sk_pengesahaan_tanggal` date NOT NULL,
  `sk_pengesahaan_periode` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kkbhl_table_01`
--

INSERT INTO `kkbhl_table_01` (`id`, `nama_kawasan`, `kawasan_penunjukan_no`, `kawasan_penunjukan_tanggal`, `kawasan_penunjukan_luas`, `kawasan_penetapan_no`, `kawasan_penetapan_tanggal`, `kawasan_penetapan_luas`, `blog_penata_pengesah`, `blog_penata_no`, `blog_penata_tanggal`, `blog_luas_inti`, `blog_luas_rimba`, `blog_luas_manfaat`, `blog_luas_lain`, `sk_pengesahaan_no`, `sk_pengesahaan_tanggal`, `sk_pengesahaan_periode`, `update_time`) VALUES
(2, 'Bromo Tengger', '01', '2014-03-02', '03', '04', '2014-03-05', '06', '07', '08', '2014-03-09', '11', '12', '13', '14', '15', '2014-03-16', '17', '2014-03-06 10:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `kkbhl_table_02`
--

CREATE TABLE IF NOT EXISTS `kkbhl_table_02` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kawasan` varchar(255) NOT NULL,
  `penunjukan_no` varchar(255) NOT NULL,
  `penunjukan_tanggal` date NOT NULL,
  `penunjukan_luas` int(11) NOT NULL,
  `penetapan_no` varchar(255) NOT NULL,
  `penetapan_tangal` date NOT NULL,
  `penetapan_luas` int(11) NOT NULL,
  `kawasan_penambahan_fungsi` varchar(255) NOT NULL,
  `kawasan_penambahan_luas` int(11) NOT NULL,
  `kawasan_pengurangan_fungsi` varchar(255) NOT NULL,
  `kawasan_pengurangan_luas` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kkbhl_table_02`
--


-- --------------------------------------------------------

--
-- Table structure for table `kkbhl_table_03`
--

CREATE TABLE IF NOT EXISTS `kkbhl_table_03` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kawasan` varchar(255) NOT NULL,
  `batas_alam` int(11) NOT NULL,
  `batas_buatan` int(11) NOT NULL,
  `batas_total` int(11) NOT NULL,
  `tata_batas_sudah` int(11) NOT NULL,
  `tata_batas_belum` int(11) NOT NULL,
  `tata_batas_tahun` int(11) NOT NULL,
  `batb_no` varchar(255) NOT NULL,
  `batb_tanggal` date NOT NULL,
  `batb_luas` int(11) NOT NULL,
  `gelang_batb` varchar(255) NOT NULL,
  `gelang_tanggal` date NOT NULL,
  `gelang_luas` int(11) NOT NULL,
  `jumlah_pal` int(11) NOT NULL,
  `kondisi_pal_baik` int(11) NOT NULL,
  `kondisi_pal_rusak` int(11) NOT NULL,
  `kondisi_pal_hilang` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kkbhl_table_03`
--


-- --------------------------------------------------------

--
-- Table structure for table `kkbhl_table_04`
--

CREATE TABLE IF NOT EXISTS `kkbhl_table_04` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kawasan_nama_lama` varchar(255) NOT NULL,
  `kawasan_no_lama` varchar(255) NOT NULL,
  `kawasan_tanggal_lama` date NOT NULL,
  `kawasan_luas_lama` int(11) NOT NULL,
  `kawasan_nama_baru` varchar(255) NOT NULL,
  `kawasan_no_baru` varchar(255) NOT NULL,
  `kawasan_tanggal_baru` date NOT NULL,
  `kawasan_luas_baru` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kkbhl_table_04`
--


-- --------------------------------------------------------

--
-- Table structure for table `kkbhl_table_05`
--

CREATE TABLE IF NOT EXISTS `kkbhl_table_05` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kawasan` varchar(255) NOT NULL,
  `mitra` varchar(255) NOT NULL,
  `jenis_kegiatan` varchar(255) NOT NULL,
  `persetujuan_no` varchar(255) NOT NULL,
  `persetujuan_tanggal` date NOT NULL,
  `kerjasama_no` varchar(255) NOT NULL,
  `kerjasama_tanggal` date NOT NULL,
  `tanggal_berlaku` date NOT NULL,
  `luas` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kkbhl_table_05`
--


-- --------------------------------------------------------

--
-- Table structure for table `kkbhl_table_06`
--

CREATE TABLE IF NOT EXISTS `kkbhl_table_06` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kawasan` varchar(255) NOT NULL,
  `permasalahan` varchar(255) NOT NULL,
  `penyelesaian` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kkbhl_table_06`
--


-- --------------------------------------------------------

--
-- Table structure for table `kkbhl_table_07`
--

CREATE TABLE IF NOT EXISTS `kkbhl_table_07` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kawasan` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `propinsi` varchar(255) NOT NULL,
  `koordinat` varchar(255) NOT NULL,
  `luas` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `sk_penetapan` varchar(255) NOT NULL,
  `rantek` varchar(255) NOT NULL,
  `mou` varchar(255) NOT NULL,
  `bibit` varchar(255) NOT NULL,
  `lapangan` varchar(255) NOT NULL,
  `penanaman` varchar(255) NOT NULL,
  `permasalahan` varchar(255) NOT NULL,
  `tindak_lanjut` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kkbhl_table_07`
--


-- --------------------------------------------------------

--
-- Table structure for table `kkbhl_table_08`
--

CREATE TABLE IF NOT EXISTS `kkbhl_table_08` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_desa` varchar(255) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `jenis_kegiatan` varchar(255) NOT NULL,
  `jumlah_tenaga` varchar(255) NOT NULL,
  `manfaat` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `penggerak` varchar(255) NOT NULL,
  `peserta` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kkbhl_table_08`
--


-- --------------------------------------------------------

--
-- Table structure for table `kkbhl_table_09`
--

CREATE TABLE IF NOT EXISTS `kkbhl_table_09` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lokasi_kegiatan` varchar(255) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `pelaksana_kegiatan` varchar(255) NOT NULL,
  `waktu_kegiatan` varchar(255) NOT NULL,
  `sumber_dana` varchar(255) NOT NULL,
  `desa_nama` varchar(255) NOT NULL,
  `desa_penduduk_laki` int(11) NOT NULL,
  `desa_penduduk_perempuan` int(11) NOT NULL,
  `desa_jumlah_kk` int(11) NOT NULL,
  `respon` varchar(255) NOT NULL,
  `keberhasilan` int(11) NOT NULL,
  `dampak_positif` varchar(255) NOT NULL,
  `dampak_negatif` varchar(255) NOT NULL,
  `tindak_lanjut` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kkbhl_table_09`
--

INSERT INTO `kkbhl_table_09` (`id`, `lokasi_kegiatan`, `nama_kegiatan`, `pelaksana_kegiatan`, `waktu_kegiatan`, `sumber_dana`, `desa_nama`, `desa_penduduk_laki`, `desa_penduduk_perempuan`, `desa_jumlah_kk`, `respon`, `keberhasilan`, `dampak_positif`, `dampak_negatif`, `tindak_lanjut`, `keterangan`, `update_time`) VALUES
(1, '1', '2', '3', '4', '5', '6', 7, 8, 9, '10', 11, '12', '13', '14', '15', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kkbhl_table_10`
--

CREATE TABLE IF NOT EXISTS `kkbhl_table_10` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desa_nama` varchar(255) NOT NULL,
  `desa_letak` varchar(255) NOT NULL,
  `desa_x` varchar(255) NOT NULL,
  `jumlah_laki` int(11) NOT NULL,
  `jumlah_perempuan` int(11) NOT NULL,
  `jumlah_kk` int(11) NOT NULL,
  `jenis_kegiatan` varchar(255) NOT NULL,
  `aksesbilitas` varchar(255) NOT NULL,
  `tindak_lanjut` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kkbhl_table_10`
--


-- --------------------------------------------------------

--
-- Table structure for table `kkbhl_table_11`
--

CREATE TABLE IF NOT EXISTS `kkbhl_table_11` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kawasan` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `luas` varchar(255) NOT NULL,
  `pelaksanaan` varchar(255) NOT NULL,
  `potensi` varchar(255) NOT NULL,
  `pengembangan` varchar(255) NOT NULL,
  `rekomendasi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kkbhl_table_11`
--


-- --------------------------------------------------------

--
-- Table structure for table `kkbhl_table_12`
--

CREATE TABLE IF NOT EXISTS `kkbhl_table_12` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kawasan` varchar(255) NOT NULL,
  `surat_keputusan` varchar(255) NOT NULL,
  `surat_tanggal` date NOT NULL,
  `luas_darat` int(11) NOT NULL,
  `luas_laut` int(11) NOT NULL,
  `potensi` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kkbhl_table_12`
--


-- --------------------------------------------------------

--
-- Table structure for table `kkh_table_01`
--

CREATE TABLE IF NOT EXISTS `kkh_table_01` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(255) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `nama_spesies_indo` varchar(255) NOT NULL,
  `nama_spesies_ilmiah` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `populasi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kkh_table_01`
--

INSERT INTO `kkh_table_01` (`id`, `jenis`, `nama_kelas`, `nama_spesies_indo`, `nama_spesies_ilmiah`, `lokasi`, `populasi`, `keterangan`, `update_time`) VALUES
(5, 'satwa', '11', '22', '33', '44', '55', '66', '2014-03-06 10:08:47');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `content`, `sumber_dana`, `periode`, `urutan`, `alias`, `module_type_id`) VALUES
(1, 'TABEL 1.  GANGGUAN KEAMANAN KAWASAN DARI PENCURIAN KAYU/PENEBANGAN LIAR', 'UPT', 'Bulanan', 1, 'table_01', 1),
(2, 'TABEL 2.  GANGGUAN KEAMANAN KAWASAN HUTAN AKIBAT PERAMBAHAN DAN PEMUKIMAN LIAR', 'UPT', 'Bulanan', 2, 'table_02', 1),
(3, 'TABEL 3.  HASIL OPERASI PENGAMANAN HUTAN TERHADAP PERAMBAHAN DAN PEMUKIMAN LIAR DI KAWASAN KONSERVASI', 'UPT', 'Bulanan', 3, 'table_03', 1),
(4, 'TABEL 4.  HASIL OPERASI PENGAMANAN HUTAN TERHADAP PERLADANGAN LIAR DI KAWASAN KONSERVASI', 'UPT', 'Bulanan', 4, 'table_04', 1),
(5, 'TABEL 5.  HASIL OPERASI PENGAMANAN HUTAN TERHADAP PENAMBANGAN LIAR DI KAWASAN KONSERVASI', 'UPT', 'Bulanan', 5, 'table_05', 1),
(6, 'TABEL 6.  HASIL OPERASI PENGAMANAN HUTAN TERHADAP ILLEGAL LOGGING', 'UPT', 'Bulanan', 6, 'table_06', 1),
(7, 'TABEL 7.  HASIL OPERASI PENGAMANAN HUTAN TERHADAP TUMBUHAN DAN SATWA LIAR  ', 'UPT', 'Bulanan', 7, 'table_07', 1),
(8, 'TABEL 8.  PENGGUNAAN KAWASAN TANPA IZIN MENTERI UNTUK KEGIATAN PERKEBUNAN', 'UPT', 'Bulanan', 8, 'table_08', 1),
(9, 'TABEL 9.  PENGGUNAAN KAWASAN TANPA IZIN MENTERI UNTUK KEGIATAN PERTAMBANGAN', 'UPT', 'Bulanan', 9, 'table_09', 1),
(10, 'TABEL 10.  PENGGUNAAN KAWASAN TANPA IZIN MENTERI UNTUK KEGIATAN PEMBANGUNAN SARANA PRASARANA', 'UPT', 'Bulanan', 10, 'table_10', 1),
(11, 'TABEL 11.  PENANGANAN KERUSAKAN KAWASAN AKIBAT BENCANA ALAM', 'UPT', 'Triwulan', 11, 'table_11', 1),
(12, 'TABEL 12.  JUMLAH TENAGA PENGAMANAN HUTAN', 'UPT', 'Bulanan', 12, 'table_12', 1),
(13, 'TABEL 13.  REKAPITULASI PERKARA', 'UPT', 'Bulanan', 13, 'table_13', 1),
(14, 'TABEL 14.  SARANA PENGAMANAN HUTAN', 'UPT', 'Semester', 14, 'table_14', 1),
(15, 'TABEL 15.  PRASARANA PENGAMANAN HUTAN', 'UPT', 'Semester', 15, 'table_15', 1),
(16, 'TABEL 16.  SENJATA API DAN AMUNISI', 'UPT', 'Semester', 16, 'table_16', 1),
(17, 'TABEL 1.  POTENSI TUMBUHAN DAN SATWA LIAR DILINDUNGI', 'UPT', 'Triwulan', 1, 'table_01', 2),
(18, 'TABEL 2.  DAFTAR PENANGKAR TUMBUHAN DAN SATWA LIAR', 'UPT', 'Triwulan', 2, '', 2),
(19, 'TABEL 3.  DAFTAR PENGEDAR TUMBUHAN DAN SATWA LIAR ', 'UPT', 'Triwulan', 3, '', 2),
(20, 'TABEL 4.  KUOTA TANGKAP DAN EKSPOR TUMBUHAN DAN SATWA LIAR (APPENDIKS DAN NON APPENDIKS)', 'UPT', 'Tahunan', 4, '', 2),
(21, 'TABEL 5.  REALISASI TANGKAP TUMBUHAN DAN SATWA LIAR (APPENDIKS DAN NON APPENDIKS)', 'UPT', 'Triwulan', 5, '', 2),
(22, 'TABEL 6.  REALISASI EKSPOR TUMBUHAN DAN SATWA LIAR HASIL PENANGKARAN', 'UPT', 'Triwulan', 6, '', 2),
(23, 'TABEL 7.  REALISASI EKSPOR TUMBUHAN DAN SATWA LIAR DARI ALAM', 'UPT', 'Triwulan', 7, '', 2),
(24, 'TABEL 8.  LEMBAGA KONSERVASI', 'Pusat', 'Triwulan', 8, '', 2),
(25, 'TABEL 9.  PUSAT PENYELAMATAN SATWA ', 'UPT', 'Triwulan', 9, '', 2),
(26, 'TABEL 10. PUSAT PELATIHAN GAJAH', 'UPT', 'Triwulan', 10, '', 2),
(27, 'TABEL 11. PERAGAAN SATWA LIAR DI LINDUNGI DI DALAM NEGERI', 'UPT', 'Semester ', 11, '', 2),
(28, 'TABEL 12. PERAGAAN SATWA LIAR DILINDUNGI DI LUAR NEGERI', 'Pusat', 'Semester ', 12, '', 2),
(29, 'TABEL 13. KERJASAMA PROGRAM BREEDING', 'Pusat', 'Semester ', 13, '', 2),
(30, 'TABEL 14. KONFLIK ANTARA MANUSIA DAN SATWA LIAR', 'UPT', 'Triwulan', 14, '', 2),
(31, 'TABEL 1.  DATA KAWASAN KONSERVASI', 'UPT', 'Semester ', 1, 'table_01', 3),
(32, 'TABEL 2.  PERKEMBANGAN LUAS DAN FUNGSI', 'UPT', 'Semester ', 2, 'table_02', 3),
(33, 'TABEL 3.  KONDISI TATA BATAS', 'UPT', 'Semester ', 3, 'table_03', 3),
(34, 'TABEL 4.  PERUBAHAN FUNGSI', 'UPT', 'Semester ', 4, 'table_04', 3),
(35, 'TABEL 5.  PEMANFAATAN KAWASAN KONSERVASI UNTUK KEGIATAN NON KEHUTANAN ', 'UPT', 'Semester ', 5, 'table_05', 3),
(36, 'TABEL 6.  PERMASALAHAN KAWASAN KONSERVASI ', 'UPT', 'Triwulan', 6, 'table_06', 3),
(37, 'TABEL 7.  REHABILITASI/RESTORASI DI KAWASAN KONSERVASI  ', 'UPT', 'Tahunan', 7, 'table_07', 3),
(38, 'TABEL 8.  PEMBINAAN DAERAH PENYANGGA', 'UPT', 'Triwulan', 8, 'table_08', 3),
(39, 'TABEL 9.  PEMBERDAYAAN MASYARAKAT DI SEKITAR KAWASAN KONSERVASI', 'UPT', 'Semester ', 9, 'table_09', 3),
(40, 'TABEL 10. PERKEMBANGAN DAN PEMBENTUKAN DESA KONSERVASI', 'UPT', 'Triwulan', 10, 'table_10', 3),
(41, 'TABEL 11. POTENSI KAWASAN EKOSISTEM ESENSIAL ', 'UPT', 'Triwulan', 11, 'table_11', 3),
(42, 'TABEL 12. POTENSI KAWASAN KONSERVASI LAHAN BASAH ', 'UPT', 'Triwulan', 12, 'table_12', 3),
(43, 'TABEL 1.  LUASAN KEBAKARAN HUTAN BERDASARKAN FUNGSI HUTAN ', 'UPT', 'Bulanan', 1, 'table_01', 4),
(44, 'TABEL 2.  LAPORAN  HASIL GROUND CHECK HOTSPOT/TITIK PANAS', 'UPT', 'Bulanan', 2, '', 4),
(45, 'TABEL 3.  REKAPITULASI JUMLAH HOTSPOT/TITIK PANAS', 'UPT', 'Bulanan', 3, '', 4),
(46, 'TABEL 4.  JUMLAH DAN SEBARAN PERSONIL BRIGDALKAR MANGGALA AGNI DAOPS ', 'UPT', 'Semester', 4, '', 4),
(47, 'TABEL 5.  JUMLAH DAN SEBARAN PERSONIL BRIGDALKAR MANGGALA AGNI NON DAOPS ', 'UPT', 'Semester', 5, '', 4),
(48, 'TABEL 6.  PEMBENTUKAN DAN PELATIHAN  MASYARAKAT PEDULI API  (MPA)  ', 'UPT', 'Semester', 6, '', 4),
(49, 'TABEL 7.  KEADAAN SUMBER DAYA MANUSIA PENGENDALIAN KEBAKARAN HUTAN ', 'UPT', 'Semester', 7, '', 4),
(50, 'TABEL 8.  PELATIHAN YANG TELAH DIIKUTI OLEH ANGGOTA PENGENDALIAN KEBAKARAN HUTAN MANGGALA AGNI', 'UPT', 'Semester', 8, '', 4),
(51, 'TABEL 9.  PERALATAN TANGAN ', 'UPT', 'Semester', 9, '', 4),
(52, 'TABEL 10. FASILITAS BANGUNAN', 'UPT', 'Semester', 10, '', 4),
(53, 'TABEL 11. PERLENGKAPAN PERORANGAN', 'UPT', 'Semester', 11, '', 4),
(54, 'TABEL 12. PERALATAN TRANSPORTASI ', 'UPT', 'Semester', 12, '', 4),
(55, 'TABEL 13. PERALATAN MESIN POMPA DAN KELENGKAPANNYA ', 'UPT', 'Semester', 13, '', 4),
(56, 'TABEL 14. PERALATAN KOMUNIKASI DAN PENGAMATAN CUACA ', 'UPT', 'Semester', 14, '', 4),
(57, 'TABEL 15. PERLENGKAPAN BEREGU ', 'UPT', 'Semester', 15, '', 4),
(58, 'TABEL 1. DATA POTENSI WISATA ALAM DI TAMAN NASIONAL', 'UPT', 'Semester ', 1, 'table_01', 5),
(59, 'TABEL 2. DATA POTENSI AIR  DI TAMAN NASIONAL', 'UPT', 'Semester ', 2, '', 5),
(60, 'TABEL 3. DATA POTENSI KARBON  DI TAMAN NASIONAL', 'UPT', 'Semester ', 3, '', 5),
(61, 'TABEL 4. DATA POTENSI GEOTERMAL  DI TAMAN NASIONAL', 'UPT', 'Semester ', 4, '', 5),
(62, 'TABEL 5. DATA POTENSI TANAMAN OBAT DI TAMAN NASIONAL', 'UPT', 'Semester ', 5, '', 5),
(63, 'TABEL 6. PENGUNJUNG TAMAN NASIONAL', 'UPT', 'Triwulan', 6, '', 5),
(64, 'TABEL 7. KEJADIAN KECELAKAAN WISATA ALAM', 'UPT', 'Triwulan', 7, '', 5),
(65, 'TABEL 8. JUMLAH DAN LUAS IZIN USAHA PEMANFAATAN JASA LINGKUNGAN', 'UPT', 'Triwulan', 8, '', 5),
(66, 'TABEL 9. PERKEMBANGAN  IZIN PENGUSAHAAN PARIWISATA ALAM (IPPA) DI TAMAN NASIONAL', 'UPT', 'Triwulan', 9, '', 5),
(67, 'TABEL 10. PERKEMBANGAN PEMANFAATAN JASA LINGKUNGAN AIR DAN KARBON DI TAMAN NASIONAL', 'UPT', 'Triwulan', 10, '', 5),
(68, 'TABEL 11. PERKEMBANGAN PEMANFAATAN JASA LINGKUNGAN KETINGGIAN DI TAMAN NASIONAL', 'UPT', 'Triwulan', 11, '', 5),
(69, 'TABEL 12. PERKEMBANGAN PEMANFAATAN JASA LINGKUNGAN GEOTERMAL DI TAMAN NASIONAL', 'UPT', 'Triwulan', 12, '', 5),
(70, 'TABEL 13. PERKEMBANGAN PEMANFAATAN JASA LINGKUNGAN TANAMAN OBAT DI TAMAN NASIONAL', 'UPT', 'Triwulan', 13, '', 5),
(71, 'TABEL 14. PENERIMAAN NEGARA DARI PEMANFAATAN JASA LINGKUNGAN', 'UPT', 'Triwulan', 14, '', 5),
(72, 'TABEL 15. JUMLAH KADER, KELOMPOK PENCINTA ALAM DAN KELOMPOK SWADAYA MASYARAKAT/PROFESI', 'UPT', 'Triwulan', 15, '', 5),
(73, 'TABEL 16. PROMOSI DAN PUBLIKASI JASA LINGKUNGAN', 'UPT', 'Triwulan', 16, '', 5),
(74, 'TABEL 1.  SEBARAN PNS/CPNS BERDASARKAN TINGKAT PENDIDIKAN ', 'UPT ', 'Semester ', 1, 'table_01', 6),
(75, 'TABEL 2.  SEBARAN PNS/CPNS BERDASARKAN  GOLONGAN', 'UPT', 'Semester ', 2, '', 6),
(76, 'TABEL 3.  SEBARAN PNS BERDASARKAN NAMA JABATAN FUNGSIONAL', 'UPT', 'Semester ', 3, '', 6),
(77, 'TABEL 4.  SEBARAN PEGAWAI HARIAN LEPAS MENURUT TINGKAT PENDIDIKAN ', 'UPT', 'Semester ', 4, '', 6),
(78, 'TABEL 5.  SEBARAN PNS MENURUT JENIS JABATAN ', 'UPT', 'Semester ', 5, '', 6),
(79, 'TABEL 6.  SEBARAN PEGAWAI FUNGSIONAL MENURUT TINGKAT PENDIDIKAN ', 'UPT', 'Semester ', 6, '', 6),
(80, 'TABEL 7.  SEBARAN PEGAWAI FUNGSIONAL MENURUT GOLONGAN / RUANG', 'UPT', 'Semester ', 7, '', 6),
(81, 'TABEL 8.  PAGU DAN REALISASI ANGGARAN', 'UPT', 'Bulanan', 8, '', 6),
(82, 'TABEL 9.  REALISASI PNBP MENURUT JENIS PENERIMAAN ', 'UPT', 'Semester ', 9, '', 6),
(83, 'TABEL 10. DAFTAR INVENTARIS TANAH BANGUNAN', 'UPT', 'Tahunan', 10, '', 6),
(84, 'TABEL 11. DAFTAR INVENTARIS GEDUNG DAN BANGUNAN ', 'UPT', 'Tahunan', 11, '', 6),
(85, 'TABEL 12. DAFTAR INVENTARIS ALAT TRANSPORTASI', 'UPT', 'Tahunan', 12, '', 6),
(86, 'TABEL 13. DAFTAR  MUTASI BARANG', 'UPT', 'Tahunan', 13, '', 6),
(87, 'TABEL 14. DAFTAR KERJASAMA/KEMITRAAN/HLN', 'UPT', 'Tahunan', 14, '', 6),
(88, 'TABEL 15. DAFTAR TENAGA AHLI ASING DI LINGKUP DIREKTORAT JENDERAL PHKA ', 'UPT', 'Tahunan', 15, '', 6),
(89, 'TABEL 16. PUBLIKASI BIDANG PHKA', 'UPT', 'Triwulan', 16, '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `module_type`
--

CREATE TABLE IF NOT EXISTS `module_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `module_type`
--

INSERT INTO `module_type` (`id`, `name`, `alias`) VALUES
(1, 'PPH', 'pph'),
(2, 'KKH', 'kkh'),
(3, 'KKBHL', 'kkbhl'),
(4, 'PKH', 'pkh'),
(5, 'PJLKKHL', 'pjlkkhl'),
(6, 'Sekretariat', 'sekretariat');

-- --------------------------------------------------------

--
-- Table structure for table `odtwa`
--

CREATE TABLE IF NOT EXISTS `odtwa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `odtwa`
--

INSERT INTO `odtwa` (`id`, `title`) VALUES
(1, 'Pemandangan '),
(2, 'Pantai '),
(3, 'Lembah '),
(4, 'Air Terjun '),
(5, 'Telaga '),
(6, 'Danau '),
(7, 'Laut '),
(8, 'Kawah '),
(17, 'Anoa'),
(18, 'Kera'),
(19, 'Sapi liar'),
(20, 'Kancil'),
(21, 'Lutung'),
(22, 'Babi Rusa'),
(23, 'Kambing hutan'),
(24, 'Kerbau Liar'),
(25, 'Tapir'),
(26, 'Harimau Sumatera'),
(27, 'Badak Sumatera'),
(28, 'Gajah'),
(29, 'Rusa'),
(30, 'Macan Tutul'),
(31, 'Burung Enggan'),
(32, 'Burung elang'),
(33, 'Pasir putih'),
(34, 'Udara sejuk'),
(35, 'Itik liar'),
(36, 'Dll');

-- --------------------------------------------------------

--
-- Table structure for table `pjlkkhl_table_01`
--

CREATE TABLE IF NOT EXISTS `pjlkkhl_table_01` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `odtwa_id` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `fungsi` varchar(255) NOT NULL,
  `pengelola` varchar(255) NOT NULL,
  `luas` varchar(255) NOT NULL,
  `pariwisata` varchar(255) NOT NULL,
  `sarana` varchar(255) NOT NULL,
  `peluang` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pjlkkhl_table_01`
--

INSERT INTO `pjlkkhl_table_01` (`id`, `odtwa_id`, `lokasi`, `fungsi`, `pengelola`, `luas`, `pariwisata`, `sarana`, `peluang`, `keterangan`, `update_time`) VALUES
(2, 4, '1', '2', '3', '4', '5', '6', '7', '8', '2014-03-06 13:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `pkh_table_01`
--

CREATE TABLE IF NOT EXISTS `pkh_table_01` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_kebakaran` date NOT NULL,
  `lintang` varchar(255) NOT NULL,
  `bujur` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `hutan_sm` int(11) NOT NULL,
  `hutan_ca` int(11) NOT NULL,
  `hutan_tn` int(11) NOT NULL,
  `hutan_thr` int(11) NOT NULL,
  `hutan_twa` int(11) NOT NULL,
  `hutan_tb` int(11) NOT NULL,
  `hutan_hl` int(11) NOT NULL,
  `hutan_hti` int(11) NOT NULL,
  `hutan_ha` int(11) NOT NULL,
  `hutan_htr` int(11) NOT NULL,
  `hutan_terbakar` varchar(255) NOT NULL,
  `kerugian` varchar(255) NOT NULL,
  `luas_lain` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pkh_table_01`
--

INSERT INTO `pkh_table_01` (`id`, `tanggal_kebakaran`, `lintang`, `bujur`, `lokasi`, `hutan_sm`, `hutan_ca`, `hutan_tn`, `hutan_thr`, `hutan_twa`, `hutan_tb`, `hutan_hl`, `hutan_hti`, `hutan_ha`, `hutan_htr`, `hutan_terbakar`, `kerugian`, `luas_lain`, `update_time`) VALUES
(2, '2014-03-31', '1', '2', '3', 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, '14', '15', '16', '2014-03-06 11:39:58');

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
  `kpa_satuan` varchar(255) NOT NULL,
  `tb_value` varchar(255) NOT NULL,
  `tb_satuan` varchar(255) NOT NULL,
  `hutan_lain_value` varchar(255) NOT NULL,
  `hutan_lain_satuan` varchar(255) NOT NULL,
  `nilai_rugi` int(11) NOT NULL,
  `upaya` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `pph_table_01`
--

INSERT INTO `pph_table_01` (`id`, `hutan_produksi_value`, `hutan_produksi_satuan`, `hutan_lidung_value`, `hutan_lindung_satuan`, `ksa_value`, `ksa_satuan`, `kpa_value`, `kpa_satuan`, `tb_value`, `tb_satuan`, `hutan_lain_value`, `hutan_lain_satuan`, `nilai_rugi`, `upaya`, `keterangan`, `update_time`) VALUES
(10, '1', 'm3', '2', 'batang', '3', 'pohon', '4', 'm3', '5', 'batang', '6', 'pohon', 7, '8', '9', '2014-03-05 20:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `pph_table_02`
--

CREATE TABLE IF NOT EXISTS `pph_table_02` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hutan_produksi_value` varchar(255) NOT NULL,
  `hutan_produksi_satuan` varchar(255) NOT NULL,
  `hutan_lidung_value` varchar(255) NOT NULL,
  `hutan_lindung_satuan` varchar(255) NOT NULL,
  `ksa_value` varchar(255) NOT NULL,
  `ksa_satuan` varchar(255) NOT NULL,
  `kpa_value` varchar(255) NOT NULL,
  `kpa_satuan` varchar(255) NOT NULL,
  `tb_value` varchar(255) NOT NULL,
  `tb_satuan` varchar(255) NOT NULL,
  `hutan_lain_value` varchar(255) NOT NULL,
  `hutan_lain_satuan` varchar(255) NOT NULL,
  `nilai_rugi` int(11) NOT NULL,
  `upaya` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pph_table_02`
--


-- --------------------------------------------------------

--
-- Table structure for table `pph_table_03`
--

CREATE TABLE IF NOT EXISTS `pph_table_03` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kawasan` varchar(255) NOT NULL,
  `temuan_luas` int(11) NOT NULL,
  `temuan_jumlah` int(11) NOT NULL,
  `temuan_bangunan` varchar(255) NOT NULL,
  `temuan_bukti` varchar(255) NOT NULL,
  `sitaan_bangunan` varchar(255) NOT NULL,
  `sitaan_bukti` varchar(255) NOT NULL,
  `jumlah_kasus` int(11) NOT NULL,
  `jumlah_tersangka` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pph_table_03`
--

INSERT INTO `pph_table_03` (`id`, `nama_kawasan`, `temuan_luas`, `temuan_jumlah`, `temuan_bangunan`, `temuan_bukti`, `sitaan_bangunan`, `sitaan_bukti`, `jumlah_kasus`, `jumlah_tersangka`, `keterangan`, `update_time`) VALUES
(1, '11', 2, 3, '4', '55', '6', '7', 88, 9, '10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pph_table_04`
--

CREATE TABLE IF NOT EXISTS `pph_table_04` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kawasan` varchar(255) NOT NULL,
  `temuan_luas` int(11) NOT NULL,
  `temuan_jumlah` int(11) NOT NULL,
  `temuan_bangunan` varchar(255) NOT NULL,
  `temuan_bukti` varchar(255) NOT NULL,
  `sitaan_bangunan` varchar(255) NOT NULL,
  `sitaan_bukti` varchar(255) NOT NULL,
  `jumlah_kasus` int(11) NOT NULL,
  `jumlah_tersangka` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pph_table_04`
--


-- --------------------------------------------------------

--
-- Table structure for table `pph_table_05`
--

CREATE TABLE IF NOT EXISTS `pph_table_05` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kawasan` varchar(255) NOT NULL,
  `temuan_luas` int(11) NOT NULL,
  `temuan_jumlah` int(11) NOT NULL,
  `temuan_bangunan` varchar(255) NOT NULL,
  `temuan_bukti` varchar(255) NOT NULL,
  `sitaan_bangunan` varchar(255) NOT NULL,
  `sitaan_bukti` varchar(255) NOT NULL,
  `jumlah_kasus` int(11) NOT NULL,
  `jumlah_tersangka` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pph_table_05`
--


-- --------------------------------------------------------

--
-- Table structure for table `pph_table_06`
--

CREATE TABLE IF NOT EXISTS `pph_table_06` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kegiatan` varchar(255) NOT NULL,
  `jumlah_kasus` int(11) NOT NULL,
  `pelaku` int(11) NOT NULL,
  `bukti_kayu_value` int(11) NOT NULL,
  `bukti_kayu_satuan` varchar(50) NOT NULL,
  `bukti_alat` varchar(255) NOT NULL,
  `bukti_lain` varchar(255) NOT NULL,
  `kerugian` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pph_table_06`
--


-- --------------------------------------------------------

--
-- Table structure for table `pph_table_07`
--

CREATE TABLE IF NOT EXISTS `pph_table_07` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `temuan_tumbuhan` int(11) NOT NULL,
  `temuan_satwa` int(11) NOT NULL,
  `temuan_bukti` varchar(255) NOT NULL,
  `sitaan_tumbuhan` int(11) NOT NULL,
  `sitaan_satwa` int(11) NOT NULL,
  `sitaan_bukti` varchar(255) NOT NULL,
  `jumlah_kasus` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pph_table_07`
--


-- --------------------------------------------------------

--
-- Table structure for table `pph_table_08`
--

CREATE TABLE IF NOT EXISTS `pph_table_08` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perusahaan` varchar(255) NOT NULL,
  `temuan_luas` int(11) NOT NULL,
  `temuan_bangunan` int(11) NOT NULL,
  `temuan_bukti` varchar(255) NOT NULL,
  `sitaan_bangunan` varchar(255) NOT NULL,
  `sitaan_bukti` varchar(255) NOT NULL,
  `jumlah_kasus` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pph_table_08`
--


-- --------------------------------------------------------

--
-- Table structure for table `pph_table_09`
--

CREATE TABLE IF NOT EXISTS `pph_table_09` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perusahaan` varchar(255) NOT NULL,
  `temuan_luas` int(11) NOT NULL,
  `temuan_bangunan` int(11) NOT NULL,
  `temuan_bukti` varchar(255) NOT NULL,
  `sitaan_bangunan` varchar(255) NOT NULL,
  `sitaan_bukti` varchar(255) NOT NULL,
  `jumlah_kasus` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pph_table_09`
--


-- --------------------------------------------------------

--
-- Table structure for table `pph_table_10`
--

CREATE TABLE IF NOT EXISTS `pph_table_10` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perusahaan` varchar(255) NOT NULL,
  `temuan_luas` int(11) NOT NULL,
  `temuan_bangunan` int(11) NOT NULL,
  `temuan_bukti` varchar(255) NOT NULL,
  `sitaan_bangunan` varchar(255) NOT NULL,
  `sitaan_bukti` varchar(255) NOT NULL,
  `jumlah_kasus` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pph_table_10`
--


-- --------------------------------------------------------

--
-- Table structure for table `pph_table_11`
--

CREATE TABLE IF NOT EXISTS `pph_table_11` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bencana` varchar(255) NOT NULL,
  `luas` varchar(255) NOT NULL,
  `kerugian` int(11) NOT NULL,
  `upaya` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pph_table_11`
--


-- --------------------------------------------------------

--
-- Table structure for table `pph_table_12`
--

CREATE TABLE IF NOT EXISTS `pph_table_12` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `polhut` int(11) NOT NULL,
  `sporc` int(11) NOT NULL,
  `tphl` int(11) NOT NULL,
  `ppns` int(11) NOT NULL,
  `pabin` int(11) NOT NULL,
  `pamswakarsa` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pph_table_12`
--


-- --------------------------------------------------------

--
-- Table structure for table `pph_table_13`
--

CREATE TABLE IF NOT EXISTS `pph_table_13` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uraian` varchar(255) NOT NULL,
  `tersangka` int(11) NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `sidik` int(11) NOT NULL,
  `sp3` int(11) NOT NULL,
  `p21` int(11) NOT NULL,
  `vonis` int(11) NOT NULL,
  `volume` int(11) NOT NULL,
  `nilai_total` int(11) NOT NULL,
  `nilai_bersih` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pph_table_13`
--


-- --------------------------------------------------------

--
-- Table structure for table `pph_table_14`
--

CREATE TABLE IF NOT EXISTS `pph_table_14` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `senpi_genggam` int(11) NOT NULL,
  `senpi_panjang` int(11) NOT NULL,
  `senpi_bius` int(11) NOT NULL,
  `transport_mobil` int(11) NOT NULL,
  `transport_sepeda` int(11) NOT NULL,
  `transport_boat` int(11) NOT NULL,
  `transport_kapal` int(11) NOT NULL,
  `transport_pesawat` int(11) NOT NULL,
  `alat_radio` int(11) NOT NULL,
  `alat_ht` int(11) NOT NULL,
  `alat_ssb` int(11) NOT NULL,
  `alat_lain` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pph_table_14`
--


-- --------------------------------------------------------

--
-- Table structure for table `pph_table_15`
--

CREATE TABLE IF NOT EXISTS `pph_table_15` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pos_jaga` int(11) NOT NULL,
  `pondok_kerja` int(11) NOT NULL,
  `asrama_polhut` int(11) NOT NULL,
  `papan_larangan` int(11) NOT NULL,
  `papan_informasi` int(11) NOT NULL,
  `menara_pengintai` int(11) NOT NULL,
  `lain` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pph_table_15`
--


-- --------------------------------------------------------

--
-- Table structure for table `sekretariat_table_01`
--

CREATE TABLE IF NOT EXISTS `sekretariat_table_01` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s3_l` int(11) NOT NULL,
  `s3_p` int(11) NOT NULL,
  `s2_l` int(11) NOT NULL,
  `s2_p` int(11) NOT NULL,
  `s1_l` int(11) NOT NULL,
  `s1_p` int(11) NOT NULL,
  `d3_l` int(11) NOT NULL,
  `d3_p` int(11) NOT NULL,
  `slta_l` int(11) NOT NULL,
  `slta_p` int(11) NOT NULL,
  `sltp_l` int(11) NOT NULL,
  `sltp_p` int(11) NOT NULL,
  `sd_l` int(11) NOT NULL,
  `sd_p` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sekretariat_table_01`
--

INSERT INTO `sekretariat_table_01` (`id`, `s3_l`, `s3_p`, `s2_l`, `s2_p`, `s1_l`, `s1_p`, `d3_l`, `d3_p`, `slta_l`, `slta_p`, `sltp_l`, `sltp_p`, `sd_l`, `sd_p`, `update_time`) VALUES
(1, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, '0000-00-00 00:00:00');

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
