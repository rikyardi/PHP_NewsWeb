-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 03:52 PM
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
(29, '5ffd36903d0e25ffd36903d0e6269.jpg', 'Rektor Uhamka; Lantik Wakil Dekan FKIP, FEB, dan FFS dengan Memberikan 3 Pesan Penting', 'Terbaru', '<p style=\"text-align: justify;\">Sebagi bentuk peningkatan kualitas kelembagaan yang lebih baik lagi, seorang pimpinan perlu ada orang yang membantu untuk mengelola instansi yang dipimpin. Universitas Muhammadiyah Prof. DR. HAMKA atau&nbsp;<a href=\"https://www.blogger.com/blog/post/edit/2592544939204020935/4583486740003952996\">UHAMKA</a>&nbsp;yang saat ini memiliki 9 Fakultas dan 1 Sekolah Pascasarjana telah melaksanakan pelantikan oleh Rektor Uhamka kepada 11 orang Wakil Dekan untuk ditempatkan di Fakultas Keguan dan Ilmu Pendidikan (FKIP), Fakultas Ekonomi dan Bisnis (FEB), dan Fakultas Farmasi dan Sains (FFS).</p>\r\n\r\n<p style=\"text-align: justify;\">Pelantikan Wakil Dekan yang terlaksana secara hidmat serta mematuhi protokol kesehatan yang sangat ketat pasalnya seluruh tamu undangan mengikuti kegiatan ini secara virtual melalui zoom meeting serta bagi yang menghadiri kegiatan hanya yang terlibat dalam kegiatan pelantikan dengan mengenakan masker, hand sanitizer, serta jaga jarak (11/01).</p>\r\n\r\n<p style=\"text-align: justify;\">Wakil Dekan yang dilantik untuk ditempatkan di&nbsp;<a href=\"https://www.blogger.com/blog/post/edit/2592544939204020935/4583486740003952996\">FKIP</a>&nbsp;Uhamka yaitu Dr. Hj. Sri Astuti, M.Pd. sebagai Wakil Dekan I, Dr. Syamsul Maarif, M.Pd. sebagai Wakil Dekan II, Harinaredi, M.Pd. sebagai Wakil Dekan III, dan&nbsp; Dr. Izza Rahman, MA sebagai Wakil Dekan IV.</p>\r\n\r\n<p style=\"text-align: justify;\">Wakil Dekan yang dilantik untuk ditempatkan di&nbsp;<a href=\"https://www.blogger.com/blog/post/edit/2592544939204020935/4583486740003952996\">FEB</a>&nbsp;Uhamka yaitu Sumardi, S.E., M.Si. sebagai Wakil Dekan I, M. Nurrasyidin, S.E., M.Si. sebagai Wakil Dekan II, Edi Setiawan, S.E., M.M. sebagai Wakil Dekan III dan IV.</p>\r\n\r\n<p style=\"text-align: justify;\">Wakil Dekan yang dilantik untuk ditempatkan di&nbsp;<a href=\"https://www.blogger.com/blog/post/edit/2592544939204020935/4583486740003952996\">FFS</a>&nbsp;Uhamka yaitu Drs. Apt. Inding Gusmayadi, S.Si. sebagai Wakil Dekan I, apt. Kori Yati, M.Farm. sebagai Wakil Dekan II, apt. Kriana Efendi, M.Farm. sebagai Wakil Dekan III, dan&nbsp; Anang Rohwiyono, M. Ag. sebagai Wakil Dekan IV.</p>\r\n\r\n<p style=\"text-align: justify;\">Jabatan sebagai wakil dekan merupakan jabatan tambahan karena pada dasarnya tugas utamanya adalah sebagi dosen. Maka selayaknyalah catur dharma yang harus dilakukan oleh seorang dosen patut untuk dilaksanakan demi meningkatkan kualifikasi diri sendiri dan fakultas.</p>\r\n\r\n<p style=\"text-align: justify;\">Gunawan Suryoputro selaku Rektor Uhamka yang melantik berpesan bahwa bagi yang terpilih sebagai wakil dekan agar terus meningkatkan kualifikasi diri sendiri dan meningkatkan fakultas masing-masing dengan segera melanjutkan pendidikan ke jenjang S3 dan bagi yang telah selesai S3 agar segera mengurus kepangkatannya.</p>\r\n\r\n<p style=\"text-align: justify;\"><img alt=\"\" src=\"/Project-web/admin/kcfinder/upload/images/5ffd360c9af945ffd360c9af9828(1).jpg\" style=\"width: 1280px; height: 719px;\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Selain itu,&nbsp;<a href=\"https://www.blogger.com/blog/post/edit/2592544939204020935/4583486740003952996\">Gunawan</a>&nbsp;menambahkan &ldquo;bagi Bapak/Ibu yang telah dilantik dan mengikrarkan sumpah, saya berpesan dalam 3 poin; agar Bapak/Ibu betul-betul menginternalisasikan sumpah tersebut dalam kehidupan sehari-hari, harus dapat memahami akan renstra yang diberlakukan guna untuk membantu kinerja Dekan sebagai pimpinan saudara di Fakultas masing-masing, dan saya mengingatkan kepada Bapak/Ibu bahwa tugas utama Bapak/Ibu adalah Dosen yang tidak boleh untuk dikesampingkan karena tugas sebagai Wakil Dekan merupakan tugas tambahan. Dilain itu, bagi belum S3 agar segera melanjutkan pendidikannya ke jenjang S3 dan harus segera mengurus kepangkatannya,&rdquo; ujarnya.</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n', 'Wednesday, 20/01/2021'),
(30, '6003a412bbbef6003a412bbbf3271.jpg', 'Galeri Investasi Syariah FEB Uhamka Lahirkan Investor Muda dalam Sekolah Pasar Modal Syariah', 'Terbaru', '<p style=\"text-align: justify;\"><img alt=\"\" src=\"/Project-web/admin/kcfinder/upload/images/6003a412bbbef6003a412bbbf3271.jpg\" style=\"margin: 5px; width: 720px; height: 404px;\" /></p>\r\n\r\n<p style=\"text-align: justify;\">Galeri Investasi Syariah Fakultas Ekonomi dan Bisnis Universitas Muhammadiyah Prof. DR. Hamka (<a href=\"https://www.blogger.com/u/0/blog/post/edit/2592544939204020935/102413368201731041#\" target=\"_blank\">UHAMKA</a>) menyelenggarakan Sekolah Pasar Modal Syariah (SPMS) pada Sabtu, 16/01/2021 pagi hari ini secara virtual. Acara ini menghadirkan narasumber; Ibu Rosyidah (Bursa Efek Indonesia, Pengenalan Pasar Modal Syariah), Pak Andri muharizal (MNC Sekuritas,&nbsp; Mekanisme transaksi dengan SOTS melalui MNC Trade New Syariah, Analisis Fundamental dan Teknikal). Pada kesempatan ini, Dekan FEB UHAMKA memberikan sambutan dan membuka acara tersebut</p>\r\n\r\n<p style=\"text-align: justify;\">Acara SPMS ini bertujuan agar mahasiswa dapat mengenal apa itu pasar modal syariah karena pasar modal syariah adalah salah satu cara untuk mendukung perekonomian Indonesia. Harapannya mahasiswa ataupun peserta paham tentang investasi saham syariah dengan menggunakan analisa fundamental dan teknikal agar mendapatkan hasil investasi yang maksimal</p>\r\n\r\n<p style=\"text-align: justify;\">&quot;Alhamdulillah kegiatan berjalan dengan lancar, dengan materi yang di sampaikan sangatlah padat namun dapat di terima dengan baik oleh peserta dengan di buktikannya saat sesi tanya jawab, antusias peserta sangatlah baik dan sangatlah semangat. Besar harapan kami kepada mahasiswa dan mahasiswi Universitas Muhammadiyah Prof. DR. Hamka melahirkan investor muda yang berkualitas dan dapat berperan aktif terhadap perekonomian Indonesia melalui bidang pasar modal &quot;. Ujar Vito Pramudana selaku Ketua Galeri Investasi</p>\r\n\r\n<p style=\"text-align: justify;\">Pembicara pertama, Ibu Rosyidah menjelaskan bahwa Pasar Modal Syariah adalah seluruh aktivitas di pasar modal yang memenuhi prinsip Islam. Suatu pasar modal dikatakan memenuhi prinsip Islam apabila pelaku pasar, mekanisme transaksi, infrastruktur pasar dan Efek yang ditransaksikan telah memenuhi prinsip- prinsip Islam di pasar modal. Prinsip-prinsip dasar Islam yang utama di pasar modal terdiri atas pelarangan Riba, Gharar, Maysir (Judi) dan Kehalalan Barang. Prinsip Islam di Pasar Modal Syariah Indonesia merujuk pada</p>\r\n\r\n<p style=\"text-align: justify;\">Peraturan OJK No.15/POJK.04/2015 tentang Penerapan Prinsip Syariah di Pasar Modal.</p>\r\n\r\n<p style=\"text-align: justify;\">Pembicara kedua, Pak Andri Muharizal memaparkan Sharia Online Trading System (SOTS) merupakan sebuah fasilitas perdagangan saham syariah secara online. MNC Sekuritas mempersembahkan MNC Trade Syariah untuk para inverstor yang ingin bertransaksi saham sesuai dengan prinsip syariah. MNC Trade Syariah telah dievaluasi dan resmi mendapatkan sertifikat kesesuaian syariah dari Dewan Syariah Nasional Majelis Ulama Indonesia (DSN MUI) dengan nomor 004.41.02/DSN-MUI/V/2016.</p>\r\n\r\n<p style=\"text-align: justify;\">Selain membahas Sharia Online Trading System, beliau juga menjelaskan tentang analisa fundamental dan teknikal. Analisis fundamental dapat diperoleh dengan cara membaca berita-berita mengenai kondisi perusahaan yang diinginkan. Investor dapat menilai apakah perusahaan incarannya tengah berkembang dengan sehat atau tidak. Investor juga harus mencari tahu apakah perusahaan tersebut sedang untung atau justru merugi. Selain itu, investor dapat mempelajari rencana bisnis perusahaan, misalnya ekspansi, akuisisi perusahaan baru, atau justru ada penyusutan bisnis.</p>\r\n\r\n<p style=\"text-align: justify;\">Tak lupa untuk melihat kinerja perusahaan sebelum memutuskan untuk membeli saham suatu perusahaan. Selanjutnya membahas tentang analisa teknikal. Tujuan dari analisis teknikal adalah agar investor mengetahui bahwa saham yang dibeli memiliki harga jual dan harga beli yang baik. Investor dapat mengamati pergerakan harga saham melalui grafik harga saham. Grafik ini dapat menjadi pertimbangan dalam membuat keputusan beli ketika harga saham perusahaan yang diinginkan tengah dalam kondisi murah. Pastikan saham yang diincar juga memiliki prospek yang bagus ke depannya, sehingga investor memang membeli pada waktu yang tepat.</p>\r\n', 'Wednesday, 20/01/2021'),
(31, '6003a412bbbef6003a412bbbf3271.jpg', 'LPP AIK Uhamka: Manfaatkan Teknologi dalam Kegiatan Baitul Arqam Dosen untuk Berdakwah', 'Terbaru', '<p><img alt=\"\" src=\"/Project-web/admin/kcfinder/upload/images/6003942165b766003942165b7b270.jpg\" style=\"width: 1280px; height: 719px;\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Awal tahun 2021, sebanyak 96 dosen dari 9 Fakultas dan Sekolah Pascasarjana&nbsp;<a href=\"https://www.blogger.com/u/0/blog/post/edit/2592544939204020935/8883037993993995036#\">UHAMKA</a>&nbsp;mengikuti Baitul Arqam Dosen bertema&nbsp;<em>Mengabdi dan Berkhitmad dengan Ilmu Amaliah dan Amal Ilmiah</em>&nbsp; yang diselenggarakan oleh LPP&nbsp;<a href=\"https://www.blogger.com/u/0/blog/post/edit/2592544939204020935/8883037993993995036#\">AIK</a>&nbsp;UHAMKA. Kegiatan yang difasilitasi oleh&nbsp;<a href=\"https://www.blogger.com/u/0/blog/post/edit/2592544939204020935/8883037993993995036#\">BPTI</a>&nbsp;Uhamka ini diselenggarakan melalui online virtual zoom meeting&nbsp; ini terhitung mulai dari hari Jumat, 15-17 Januari 2021 M/ 2-4 Jumadil Akhir 1242 H.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ketua LPP AIK UHAMKA,&nbsp;<a href=\"https://www.blogger.com/u/0/blog/post/edit/2592544939204020935/8883037993993995036#\">Muhammad Dwi Fajri</a>&nbsp;mengungkapkan bahwa Baitul Arqam bertujuan sebagai upaya membangun kultur/budaya yang ada di Uhamka dan di persyarikatan Muhammadiyah. Selain itu, Uhamka menetapkan dan menegaskan bahwa kegiatan ini merupakan bagian dari sistem untuk membangun sumberdaya manusia sesuai dengan kultur instansi tersebut.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Apa yang ada di Uhamka tidak sama dengan perguruan tinggi lainnya maka Baitul Arqam satu media mengenalkan keuhamkaan dan persyarikatan Muhammadiyah serta menyelaraskan visi pribadi, visi uhamka dan visi persyarikatan muhammadiyah. Dari sinilah energi terbang, Uhamka ini tidak akan menjadi baik tanpa kebersamaan peserta Baitul Arqam. Uhamka tidak akan menjadi baik tanpa kebersamaan bersama persyarikatan Muhammadiyah. Kita&nbsp; akan unggul dan hebat di masa depan karena peran kita, peran Uhamka, dan peran persyarikatan,&rdquo; ujar Dwi Fajri.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kegiatan ini direalisasikan dalam rangkaian materi yang diberikan para instruktur, tugas kelompok dan tugas individu sebelum kegiatan berlangsung yang diselesaikan peserta berupa artikel, proposal mini mengenai penelitian dan pengabdian serta video menggunakan aplikasi tik tok. Selain aplikasi tiktok, kegiatan ini menggunakan Platform Online Learning Uhamka, WhatsApp, Youtube dan Instagram.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Selanjutnya, artikel yang ditulis peserta&nbsp; dapat digunakan untuk publikasi yang rencananya akan dijadikan buku, tergantung pada analisa dari LPP AIK&nbsp;UHAMKA. Sementara, proposal mini mengenai penelitian dan pengabdian sebagai bentuk kontribusi LPP AIK&nbsp;pada Uhamka untuk memajukan penelitian dan pengabdian instansi tersebut.&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dwi Fajri menambahkan bahwa, &ldquo;kita sadar betul bahwa salah satu unsur penting bagi kemajuan Uhamka adalah penelitian dan pengabdian, maka sejak Baitul arqam ini kita dorong para dosen untuk ikut serta dalam hal itu. Tentu ini upaya kami dari LPP AIK&nbsp;untuk berkontribusi bagi uhamka.&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Selain itu, karena Baitul arqam dilaksanakan secara daring, maka terdapat tugas tambahan yaitu membuat video perkenalan. Dan untuk video terbaik akan diberikan hadiah oleh LPP AIK. Dan terakhir, yang menarik dari beberapa tugas yang diberikan adalah membuat konten tiktok. Harapannya, dengan adanya tugas ini dapat menyebarkan dakwah lebih luas di dunia media sosial.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Semua alat itu tergantung pada siapa yang mengendalikan. Maka kita harus ikut berkontribusi untuk menyebarkan dakwah di dunia media sosial yang ada. Karena kalau kita tidak mengisi itu, maka akan diisi oleh orang lain. Kita manfaatkan sosial media yang ada untuk kepentingan dakwah kita, untuk sesuatu yang positif.&rdquo;&nbsp;<a href=\"https://www.blogger.com/u/0/blog/post/edit/2592544939204020935/8883037993993995036#\">Tutur Fajri</a>.</p>\r\n', 'Wednesday, 20/01/2021');

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
