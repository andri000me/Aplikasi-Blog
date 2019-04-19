-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 20, 2019 at 02:20 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `foto_artikel` varchar(255) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `penulis_artikel` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `id_kategori`, `foto_artikel`, `judul_artikel`, `penulis_artikel`, `tanggal`, `isi_artikel`) VALUES
(9, 5, 'Tumbanaail.jpg', 'youtube', 'moza', '2019-02-20', '<p>semoga berhasil di upload ke database&nbsp;semoga berhasil di upload ke database&nbsp;semoga berhasil di upload ke database&nbsp;semoga berhasil di upload ke database&nbsp;semoga berhasil di upload ke database&nbsp;semoga berhasil di upload ke database&nbsp;semoga berhasil di upload ke database&nbsp;semoga berhasil di upload ke database&nbsp;semoga berhasil di upload ke database&nbsp;semoga berhasil di upload ke database</p>\r\n'),
(10, 3, '5c6e5165b34ab.jpg', 'Viral!!,Ditilang malah rusak motor ', 'rizal', '2019-02-20', '<p>hahaha lucu banget itu adlah hal ke tololan yang sangat unfaedah bagi dia lucu lah&nbsp;hahaha lucu banget itu adlah hal ke tololan yang sangat unfaedah bagi dia lucu lah&nbsp;hahaha lucu banget itu adlah hal ke tololan yang sangat unfaedah bagi dia lucu lah&nbsp;hahaha lucu banget itu adlah hal ke tololan yang sangat unfaedah bagi dia lucu lah&nbsp;hahaha lucu banget itu adlah hal ke tololan yang sangat unfaedah bagi dia lucu lah&nbsp;hahaha lucu banget itu adlah hal ke tololan yang sangat unfaedah bagi dia lucu lah&nbsp;</p>\r\n'),
(13, 3, '5c6f9aec5480b.png', 'Belajar PHP itu asyik banget', 'afaad', '2019-02-21', '<p>hvjhvjvbn&nbsp;hvjhvjvbn&nbsp;hvjhvjvbn vvvhvjhvjvbn&nbsp;hvjhvjvbn&nbsp;hvjhvjvbn&nbsp;hvjhvjvbn&nbsp;hvjhvjvbn&nbsp;hvjhvjvbn vvvhvjhvjvbn&nbsp;hvjhvjvbn&nbsp;hvjhvjvbn&nbsp;hvjhvjvbn&nbsp;hvjhvjvbn&nbsp;hvjhvjvbn vvvhvjhvjvbn&nbsp;hvjhvjvbn&nbsp;hvjhvjvbn&nbsp;</p>\r\n'),
(15, 7, '5c710629a1264.jpg', 'afaf', 'afag', '2019-02-23', '<h1>Heading 1</h1>\r\n\r\n<ul>\r\n	<li>isi adalah anad yang suka berbuat koca</li>\r\n</ul>\r\n\r\n<blockquote>\r\n<p>jahs&nbsp;</p>\r\n</blockquote>\r\n'),
(16, 6, '5c71a53ce51f0.jpg', 'Percobaan pertama', 'rizal', '2019-02-23', '<p><strong>ini adalah texs Bold</strong></p>\r\n\r\n<ol>\r\n	<li><em><strong>ini adalah texs italic</strong></em></li>\r\n	<li><em><strong>bissmillah</strong></em></li>\r\n</ol>\r\n'),
(17, 3, '5c9248c993cb0.jpg', 'Kelebihan dan Fitur Kamera HP Oppo Joy yang Harus Kamu Ketahui', 'Rizal', '2019-03-20', '<h2><strong>Kamera Oppo Joy berapa mp?</strong></h2>\r\n\r\n<p>Dengan harga Oppo Joy yang relative murah, wajar rasanya jika memiliki kekurangan. Tapi sayangnya, kekurangan yang diberikan vendor Oppo terhadap produk keluarannya bernama Oppo Joy terletak pada sector kameranya. Oppo Joy hanya dibekali kamera berukuran 3 MP pada kamera belakangnya, yang ukuran resolusinya setara dengan 2048 x 1536 pixels.</p>\r\n\r\n<p>Sedangkan pada kamera depannya juga hanya dibekali dengan kamera berjenis VGA, kamera jenis VGA masih bisa digunakan untuk berfoto, tetapi hasilnya jelas akan memiliki kualitas yang rendah. Untugnya, fungsi kamera belakang tidak hanya terletak pada pengambilan fotonya saja. Kamera belakang atau kamera utama yang dimiliki Oppo Joy juga dapat difungsikan sebagai perekam video.</p>\r\n\r\n<h2><strong>Hasil kamera Oppo Joy</strong></h2>\r\n\r\n<p>Kurang mantap rasanya jika tim futureloka hanya menyampaikan spesifikasi kamera pada handphone Oppo Joy tanpa adanya bukti&nbsp; hasil pengambilan gambarnya. Maka dari itu, di bawah ini tim futureloka akan memberikan&nbsp; hasil dari kamera depan dan kamera belakang Oppo Joy.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Fitur yang terdapat pada kamera Oppo Joy</strong></h2>\r\n\r\n<p>Kabar baik untuk kamu yang sangat ingin memiliki handphone jenis ini. Karena pada kamera Oppo Joy terdapat beberapa fitur yang mampu membantu kualitas pengambilan gambar yang ingin kamu abadikan. Apa saja sih fitur yang terdapat di dalamnya?</p>\r\n\r\n<p><strong>LED Flash</strong></p>\r\n\r\n<p>Dengan dibekali fitur LED flash, kamu bisa menikmati berfoto pada malam hari tanpa takut akan hasil yang gelap atau tak jelas. Karena fitur LED flash berfungsi sebagai cahaya tambahan dan bisa kamu manfaatkan di saat- saat kamu berada pada ruangan yang minum cahaya atau keadaan yang gelap. Tetapi sayangnya, dengan menambahkannya fitur ini pada hasil pengambilan gambar kamu, kualitas gambar yang dihasilkan akan menjadi sedikit lebih rendah dari pengambilan gambar tanpa&nbsp; menggunakan fitur ini.</p>\r\n\r\n<p><strong>Geo tagging</strong></p>\r\n\r\n<p>Geo tagging adalah proses menambahkan identifikasi geografis metadata untuk berbagai media seperti photo, video, website, atau RSS feed dan merupakan bentuk metadata geospasial. Data ini biasanya terdiri dari garis lintang dan bujur, juga dapat mencakup ketinggian, bantalan, jarak, akurasi data, dan nama tempat.</p>\r\n\r\n<p>Geotagging dapat membantu kamu menemukan berbagai macam informasi lokasi spesifik. Kamu dapat menemukan gambar-gambar yang diambil di dekat lokasi tertentu dengan memasukkan koordinat lintang dan bujur ke mesin photo geotagging-enabled pencarian. Geotagging dapat memberitahu kamu lokasi isi gambar yang diberikan atau media lain bengan menggunakan sudut pandang lain.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(3, 'Berita'),
(5, 'ngawak'),
(6, ' Pemprogaman'),
(7, 'Arduino');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `nama_komentar` varchar(40) NOT NULL,
  `isi_komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `id_artikel`, `nama_komentar`, `isi_komentar`) VALUES
(1, 9, 'Rizal', 'Bissmilalh Bisa Bissmilalh Bisa Bissmilalh Bisa Bissmilalh Bisa Bissmilalh BisaBissmilalh Bisa'),
(2, 10, 'Arfani', 'Bissmilalh Bisa Bissmilalh Bisa Bissmilalh BisaBissmilalh BisaBissmilalh Bisa ajdknajdf'),
(17, 15, 'Nanda', 'Aku sayang kow sadnajnf'),
(30, 13, 'moza', 'bisamulillah bisa lah bisamulillah bisa lah bisamulillah bisa lahbisamulillah bisa lah'),
(46, 9, 'Nanda', 'Iya ini kok rusak ya min hahahahahha'),
(47, 10, 'rijal', 'semoga bisa lah ws mumet men keh semoga bisa lah ws mumet men keh'),
(48, 16, 'Arfani', 'isicing elit, sed do eiusmod tempor incididunt ut labore et \r\nisicing elit, sed do eiusmod tempor incididunt ut labore et '),
(49, 16, 'rijal', 'isicing elit, sed do eiusmod tempor incididunt ut labore et  isicing elit, sed do eiusmod tempor incididunt ut labore et isicing elit, sed do eiusmod tempor incididunt ut labore et isicing elit, sed do eiusmod tempor incididunt ut labore et isicing elit, sed do eiusmod tempor incididunt ut labore et ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `komentar` (`id_artikel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD CONSTRAINT `tbl_artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
