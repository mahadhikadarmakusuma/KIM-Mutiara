-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 07:18 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kim_mutiara`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pemerintahan_tb`
--

CREATE TABLE `kategori_pemerintahan_tb` (
  `id` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_pemerintahan_tb`
--

INSERT INTO `kategori_pemerintahan_tb` (`id`, `nama`, `keterangan`) VALUES
(1, 'umum', 'bersifat umum'),
(2, 'kelembagaan masyarakat', ''),
(3, 'keamanan dan ketertiban', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_potensi_tb`
--

CREATE TABLE `kategori_potensi_tb` (
  `id` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_potensi_tb`
--

INSERT INTO `kategori_potensi_tb` (`id`, `nama`, `keterangan`) VALUES
(1, 'seni budaya', ''),
(2, 'pemberdayaan masyarakat', ''),
(3, 'ekonomi masyarakat', ''),
(4, 'pendidikan', ''),
(5, 'kesehatan', ''),
(6, 'kuliner', ''),
(7, 'umkm', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_tentangkim_tb`
--

CREATE TABLE `kategori_tentangkim_tb` (
  `id` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_tentangkim_tb`
--

INSERT INTO `kategori_tentangkim_tb` (`id`, `nama`, `keterangan`) VALUES
(1, 'visi misi', ''),
(2, 'strukrur organisasi', ''),
(3, 'program kerja', ''),
(4, 'selayang pandang', ''),
(5, 'dasar hukum', '');

-- --------------------------------------------------------

--
-- Table structure for table `postingan_tb`
--

CREATE TABLE `postingan_tb` (
  `id` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `sub_kategori` varchar(255) DEFAULT NULL,
  `keterangan` varchar(30000) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `pembaca` int(5) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `delete_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postingan_tb`
--

INSERT INTO `postingan_tb` (`id`, `nama`, `kategori`, `sub_kategori`, `keterangan`, `deskripsi`, `gambar`, `pembaca`, `created_at`, `delete_at`) VALUES
(129, 'sesuk review', 'pemerintahan', 'umum', '<p>Semoga Keterangan</p>', '<p>Bismillah Deskripsi</p>', 'postingan_Makelaran_92.mp4', NULL, '2019-12-09 12:44:22', NULL),
(135, 'qwC', 'pemerintahan', 'umum', '<p>KET</p>\r\n<p>https://www.youtube.com/</p>', '<p>DES</p>', 'postingan_alur_49.jpg', NULL, '2019-12-10 01:56:49', NULL),
(136, 'nttyntt', 'potensi', 'umkm', '<p>ketttttttt</p>', '<p>desss</p>', 'file_billy_69.jpg', NULL, '2019-12-10 06:35:24', NULL),
(137, 'NKB Crew part 2', 'potensi', 'seni budaya', '<p>Nkb merupakan salah satu kesenian di bugel kec.sidorejo kota salatiga. yang berkesenian berbagai jeneis seni budaya tari tradisional.</p>', '<p>Nkb merupakan salah satu kesenian di bugel kec.sidorejo kota salatiga</p>', 'postingan_jogja_52.mp4', NULL, '2019-12-11 02:20:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prestasi_tb`
--

CREATE TABLE `prestasi_tb` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` varchar(500) NOT NULL,
  `keterangan` varchar(15000) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi_tb`
--

INSERT INTO `prestasi_tb` (`id`, `nama`, `kategori`, `keterangan`, `deskripsi`, `tanggal`, `gambar`, `created_at`) VALUES
(18, 've', 'prestasi', '', '', '', 'file_Ardhito_22.mp4', '2019-12-09 14:56:43'),
(19, 'gb', 'prestasi', '<p>qwdqdwdqwwqdwqqwqwddqwqwdqdqwdqqwdqddqwdqwdqw</p>', '<p>qwdddqwqqdqw</p>', '2019-12-10', 'prestasi_KOMENG_26.mp4', '2019-12-09 15:06:31'),
(20, 'a', 'prestasi', '', '', '', '', '2019-12-09 15:08:17'),
(21, 'hgj', 'prestasi', '', '', '', '', '2019-12-09 23:00:45'),
(22, 'gjmjmgmg', 'prestasi', '', '', '', '', '2019-12-09 23:01:00'),
(23, 'meylinda ayu rpatiwi', 'prestasi', '', '', '', '', '2019-12-09 23:01:27');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kategori`
--

CREATE TABLE `sub_kategori` (
  `id` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `master_kategori` varchar(255) NOT NULL,
  `keterangan` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tautan_tb`
--

CREATE TABLE `tautan_tb` (
  `id` int(5) NOT NULL,
  `nama` varchar(124) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `website` varchar(124) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tautan_tb`
--

INSERT INTO `tautan_tb` (`id`, `nama`, `alamat`, `website`, `create_at`) VALUES
(1, 'Kelurahan Bugel', 'jl. Mutiara No.44', 'http://bugel.salatiga.go.id/', '2019-07-07 13:52:04');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_tb`
--

CREATE TABLE `tentang_tb` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` varchar(25555) NOT NULL,
  `deskripsi` varchar(15000) NOT NULL,
  `tanggal` varchar(555) NOT NULL,
  `gambar` varchar(555) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang_tb`
--

INSERT INTO `tentang_tb` (`id`, `nama`, `keterangan`, `deskripsi`, `tanggal`, `gambar`, `created_at`) VALUES
(4, 'VISI-MISI', '<p style=\"text-align: center;\"><strong>VISI</strong></p>\r\n<p style=\"text-align: center;\">Terwujudnya Kelompok Informasi Masyarakat (KIM) yang inovatif dalam meningkatkan nilai tambah bagi masyarakat melalui pendayagunaan informasi dan komunikasi dalam rangka mencapai masyarakat informasi yang sejahtera.</p>\r\n<p style=\"text-align: center;\"><strong>MISI</strong></p>\r\n<p style=\"text-align: center;\">Mendorong tumbuh dan berkembangnya KIM secara mandiri sebagai wahana informasi dalam masyarakat. Meningkatkan peranan KIM dalam memperlancar arus informasi antar anggota masyarakat dan antara pemerintah dengan masyarakat. Meningkatkan kemampuan Anggota KIM dan masyarakat dalam<br /> mengakses dan mengelola informasi dalam rangka meningkatkan literasi informasi dan mengatasi kesenjangan informasi.</p>', '', '2019-11-09', '', '2019-11-09 03:58:00'),
(5, 'STRUKTUR ORGANISASI KIM', '<ul>\r\n<li><strong>Ketua</strong> Nurul Huda</li>\r\n<li><strong>Sekretaris</strong>- Endra Gunawan Hermanto</li>\r\n<li><strong>bendahara</strong>- Ahmad Nasirudin</li>\r\n<li><strong>Koor. Pengumpulan Informasi</strong> (6 anggota)- Eko BIlly Jinawi</li>\r\n<li><strong>Koor. Pengolahan informasi</strong> (6 anggota)- Purnomo Sidi Ario Wibowo</li>\r\n<li><strong>Koor. Desiminasi Informasi</strong> (6 anggota)- Jlamprong Somadi</li>\r\n</ul>', '', '2019-11-09', '', '2019-11-09 04:12:56'),
(6, 'PROGRAM KERJA KIM', '<p style=\"text-align: left;\">1. Meningkatkan Kualitas Pelayanan Umum<br />2. Meningkatkan Kompetensi Aparatur<br />3. Penguatan Kelembagaan Masyarakat<br />4. Optimalisasi Kemitraan Dengan Stakeholder</p>', '', '2019-11-09', '', '2019-11-09 04:15:31'),
(7, 'SELAYANG PANDANG', '<p style=\"text-align: justify;\">Lembaga layanan publik yang dibentuk dan dikelola dari, oleh, dan untuk masyarakat yang berorientasi pada layanan informasi dan pemberdayaan masyarakat sesuai kebutuhannya. Kelompok Informasi Masyarakat (KIM) Mutiara Bugel ialah KIM yang pertama kali dibentuk pada tahun 2018 oleh Dinas Komunikasi dan Informasi (Diskominfo) Kota Salatiga. KIM Mutiara Bugel menjadi <em>pilot</em> <em>project</em> Diskominfo Kota Salatiga. KIM Mutiara beranggotakan warga Kelurahan Bugel yang mendedikasikan dirinya untuk memajukan Kelurahan Bugel melalui media elektronik dengan cara menyebarkan informasi kepada publik melalu website.</p>', '', '2019-11-09', '', '2019-11-09 04:20:13'),
(8, 'DASAR HUKUM', '<p style=\"text-align: justify;\">Setelah menimbang dan mengingat beberapa aspek dan dasar hukum yang berlaku, Kelompok Informasi Masyarakat (KIM) Mutiara berdiri dengan sah setelah disahkan dalam <strong>Keputusan Walikota Nomor 490/143/2018</strong> Tentang Pengesahan Kelompok Informasi Masyarakat \"Mutiara\" Kelurahan Bugel Kecamatan Sidorejo, pada 8 Maret 2018 oleh Walikota Salatiga.</p>', '', '2019-11-09', '', '2019-11-09 04:24:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_pemerintahan_tb`
--
ALTER TABLE `kategori_pemerintahan_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_potensi_tb`
--
ALTER TABLE `kategori_potensi_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_tentangkim_tb`
--
ALTER TABLE `kategori_tentangkim_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postingan_tb`
--
ALTER TABLE `postingan_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasi_tb`
--
ALTER TABLE `prestasi_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tautan_tb`
--
ALTER TABLE `tautan_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang_tb`
--
ALTER TABLE `tentang_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_pemerintahan_tb`
--
ALTER TABLE `kategori_pemerintahan_tb`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_potensi_tb`
--
ALTER TABLE `kategori_potensi_tb`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori_tentangkim_tb`
--
ALTER TABLE `kategori_tentangkim_tb`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `postingan_tb`
--
ALTER TABLE `postingan_tb`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `prestasi_tb`
--
ALTER TABLE `prestasi_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tautan_tb`
--
ALTER TABLE `tautan_tb`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tentang_tb`
--
ALTER TABLE `tentang_tb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
