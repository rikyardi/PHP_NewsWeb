-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 03:25 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_informasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `notelp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `alamat`, `notelp`, `email`, `password`) VALUES
(1, 'Riky Ardiansyah', 'bogor', '081937589312', 'riky@gmail.com', '123'),
(2, 'Ardiansyah', 'Bogor', '084728492142', 'ardi@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `notlp` varchar(15) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `asal kota` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `nama`, `alamat`, `notlp`, `ttl`, `asal kota`, `email`) VALUES
(1, 'Anwat Hidayat', 'Pusat Kota Jakarta, No.100 DKI Jakarta Indonesia', '081122334455', 'Jakarta, 17 Agustus 1998', 'DKI JAKARTA', 'Anwar_Henry@gmail.com'),
(2, 'Dafi Mu\'ammar Zulfikar', 'Jaksel, 12320', '081383975181', 'Jakarta, 02 Desember 2000', 'DKI JAKARTA', 'dafimuammar31@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `id` int(5) NOT NULL,
  `img` text NOT NULL,
  `judul` text NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `artikel` text NOT NULL,
  `created_at` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id`, `img`, `judul`, `kategori`, `artikel`, `created_at`) VALUES
(29, '5ffd36903d0e25ffd36903d0e6269.jpg', 'Rektor Uhamka; Lantik Wakil Dekan FKIP, FEB, dan FFS dengan Memberikan 3 Pesan Penting', 'Terbaru', '<p style=\"text-align: justify;\">Sebagi bentuk peningkatan kualitas kelembagaan yang lebih baik lagi, seorang pimpinan perlu ada orang yang membantu untuk mengelola instansi yang dipimpin. Universitas Muhammadiyah Prof. DR. HAMKA atau&nbsp;<a href=\"https://www.blogger.com/blog/post/edit/2592544939204020935/4583486740003952996\">UHAMKA</a>&nbsp;yang saat ini memiliki 9 Fakultas dan 1 Sekolah Pascasarjana telah melaksanakan pelantikan oleh Rektor Uhamka kepada 11 orang Wakil Dekan untuk ditempatkan di Fakultas Keguan dan Ilmu Pendidikan (FKIP), Fakultas Ekonomi dan Bisnis (FEB), dan Fakultas Farmasi dan Sains (FFS).</p>\r\n\r\n<p style=\"text-align: justify;\">Pelantikan Wakil Dekan yang terlaksana secara hidmat serta mematuhi protokol kesehatan yang sangat ketat pasalnya seluruh tamu undangan mengikuti kegiatan ini secara virtual melalui zoom meeting serta bagi yang menghadiri kegiatan hanya yang terlibat dalam kegiatan pelantikan dengan mengenakan masker, hand sanitizer, serta jaga jarak (11/01).</p>\r\n\r\n<p style=\"text-align: justify;\">Wakil Dekan yang dilantik untuk ditempatkan di&nbsp;<a href=\"https://www.blogger.com/blog/post/edit/2592544939204020935/4583486740003952996\">FKIP</a>&nbsp;Uhamka yaitu Dr. Hj. Sri Astuti, M.Pd. sebagai Wakil Dekan I, Dr. Syamsul Maarif, M.Pd. sebagai Wakil Dekan II, Harinaredi, M.Pd. sebagai Wakil Dekan III, dan&nbsp; Dr. Izza Rahman, MA sebagai Wakil Dekan IV.</p>\r\n\r\n<p style=\"text-align: justify;\">Wakil Dekan yang dilantik untuk ditempatkan di&nbsp;<a href=\"https://www.blogger.com/blog/post/edit/2592544939204020935/4583486740003952996\">FEB</a>&nbsp;Uhamka yaitu Sumardi, S.E., M.Si. sebagai Wakil Dekan I, M. Nurrasyidin, S.E., M.Si. sebagai Wakil Dekan II, Edi Setiawan, S.E., M.M. sebagai Wakil Dekan III dan IV.</p>\r\n\r\n<p style=\"text-align: justify;\">Wakil Dekan yang dilantik untuk ditempatkan di&nbsp;<a href=\"https://www.blogger.com/blog/post/edit/2592544939204020935/4583486740003952996\">FFS</a>&nbsp;Uhamka yaitu Drs. Apt. Inding Gusmayadi, S.Si. sebagai Wakil Dekan I, apt. Kori Yati, M.Farm. sebagai Wakil Dekan II, apt. Kriana Efendi, M.Farm. sebagai Wakil Dekan III, dan&nbsp; Anang Rohwiyono, M. Ag. sebagai Wakil Dekan IV.</p>\r\n\r\n<p style=\"text-align: justify;\">Jabatan sebagai wakil dekan merupakan jabatan tambahan karena pada dasarnya tugas utamanya adalah sebagi dosen. Maka selayaknyalah catur dharma yang harus dilakukan oleh seorang dosen patut untuk dilaksanakan demi meningkatkan kualifikasi diri sendiri dan fakultas.</p>\r\n\r\n<p style=\"text-align: justify;\">Gunawan Suryoputro selaku Rektor Uhamka yang melantik berpesan bahwa bagi yang terpilih sebagai wakil dekan agar terus meningkatkan kualifikasi diri sendiri dan meningkatkan fakultas masing-masing dengan segera melanjutkan pendidikan ke jenjang S3 dan bagi yang telah selesai S3 agar segera mengurus kepangkatannya.</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/Project-web/admin/kcfinder/upload/images/5ffd360c9af945ffd360c9af9828(1).jpg\" style=\"width: 1280px; height: 719px;\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Selain itu,&nbsp;<a href=\"https://www.blogger.com/blog/post/edit/2592544939204020935/4583486740003952996\">Gunawan</a>&nbsp;menambahkan &ldquo;bagi Bapak/Ibu yang telah dilantik dan mengikrarkan sumpah, saya berpesan dalam 3 poin; agar Bapak/Ibu betul-betul menginternalisasikan sumpah tersebut dalam kehidupan sehari-hari, harus dapat memahami akan renstra yang diberlakukan guna untuk membantu kinerja Dekan sebagai pimpinan saudara di Fakultas masing-masing, dan saya mengingatkan kepada Bapak/Ibu bahwa tugas utama Bapak/Ibu adalah Dosen yang tidak boleh untuk dikesampingkan karena tugas sebagai Wakil Dekan merupakan tugas tambahan. Dilain itu, bagi belum S3 agar segera melanjutkan pendidikannya ke jenjang S3 dan harus segera mengurus kepangkatannya,&rdquo; ujarnya.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n', 'Wednesday, 20/01/2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
