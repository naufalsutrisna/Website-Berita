-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 06, 2023 at 03:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tapemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `category`, `image`, `username`) VALUES
(1, 'Guyuran Hujan Lebat Bikin Jalanan Depan RSUB Soehat Kota Malang Banjir', 'Hujan lebat mengguyur Kota Malang sejak siang. Guyuran hujan membuat sejumlah ruas jalan tergenang banjir.\r\nBanjir menggenangi jalan di depan Rumah Sakit Universitas Brawijaya (RSUB) yang berada di Jalan Soekarno-Hatta, Kecamatan Lowokwaru, Kota Malang.', 'Bencana', 'Images/647d86d0a0074_banjir-kota-malang.jpeg', 'admin'),
(2, 'Kebakaran landa warkop mi ayam di Kramat Senen akibat selang kompor', 'Warung makan di Senen, Jakarta Pusat, kebakaran. Sebanyak 13 unit mobil damkar dikerahkan. Kebakaran itu terjadi pagi ini sekitar pukul 09.00 WIB. Petugas damkar sudah berada di lokasi untuk melakukan pemadaman.', 'Bencana', 'Images/647d8885d74a6_kebakaran.jpeg', 'admin'),
(3, 'Tiket Indonesia Vs Argentina: Netizen Ngamuk Cat 3 Ludes Diborong Calo', 'Ada 4 kategori tiket yang dijual, yakni Kategori 3, Kategori 2, Kategori 1, dan VIP. Kategori 3 dibanderol Rp 600 ribu, Kategori 2 Rp 1,2 Juta, Kategori 1 Rp 2,5 juta, dan VIP Rp 4,25 juta. Pembelian tiket dibuka mulai 5 Juni dan 6-7 Juni. ', 'Olahraga', 'Images/647d8937e8329_Sepak%20bola.jpeg', 'admin'),
(4, '9 Rumah di Tanjabbar Jambi Ambruk Diterjang Tanah Longsor', 'Sebanyak 9 rumah di Kabupaten Tanjung Jabung Barat (Tanjabbar), Jambi ambruk setelah diterjang tanah longsor. Bencana longsor itu terjadi akibat ada pergeseran tanah di sekitar sungai.', 'Bencana', 'Images/647d8a3b794ba_tanah%20longsor.jpeg', 'admin'),
(5, 'Thailand Open 2023: Bagas/Fikri Kalah di Final', 'Thailand Open 2023 masuki babak final. Bagas/Fikri hadapi wakil China Liang Wei Keng/Wang Chang, pasangan Indonesia kalah dua gim langsung. Thailand Open 2023 babak final berlangsung di Indoor Stadium Huamark, Bangkok pada Minggu (4/6).\r\n', 'Olahraga', 'Images/647d8b0bd2317_bulu%20tangkis.jpeg', 'admin'),
(6, 'Dheva Anrimusthi, Penentu Emas Beregu Para Bulutangkis RI', 'Menjadi pemain penentu pada nomor beregu bulutangkis di ASEAN Para Games 2023 bukanlah perkara mudah. Beban yang ditanggung bukan main. Beruntung Dheva Anrimusthi mampu menanganinya dengan baik.', 'Olahraga', 'Images/647d8b7442b6a_juara%20bulu%20tangkis.jpeg', 'admin'),
(10, 'Tes', 'Ini cuman', 'Bencana', 'Images/647e83fc6431c_Mencari%20Ruangan%20(Gedung%20dropdown).png', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `username`, `password`) VALUES
('admin@student.ub.ac.id', 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223325;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_username` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
