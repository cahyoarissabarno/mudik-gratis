-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 05:16 PM
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
-- Database: `mudik`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `nik` text NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `rute` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `kode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`nik`, `nama`, `alamat`, `hp`, `rute`, `tanggal`, `kode`) VALUES
('987654321', 'budi', 'jl buntu', '08563788293', 'SURABAYA-JAKARTA', '20 Mei 2020', '6ebe76c9fb411be97b3b0d48b791a7c9'),
('2210191030', 'cahyo', 'jl bububu', '089765657', 'SURABAYA-JOGJA', '18 Mei 2020', '0309d9006de6506bf54d9627ad3e75d1'),
('112233445566', 'burhan', 'jl jalanan ini awokwokwowkk', '098789644667', 'SURABAYA-JAKARTA', '20 Mei 2020', 'eb341820cd3a3485461a61b1e97d31b1'),
('3434343434', 'zaky', 'jl.pens 123', '0897773737373', 'SURABAYA-MALANG', '18 Mei 2020', '22be0926f98c5185e95f45915b3a7b2d'),
('1234554321', 'toreh', 'jl. kenangan', '098778877', 'SURABAYA-MALANG', '18 Mei 2020', 'b0f8b3e58f093359fe1af416b5ea8ed6'),
('90807060', 'sukarno', 'proklamasi', '08737272727', 'SURABAYA-JAKARTA', '20 Mei 2020', 'b51aa9e176fb9b3fa34ea2b46449212e'),
('91817161', 'alert', '', '', '', '', 'ced0d6a4e2d668f4941633c8ec60827c'),
('', '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
('928272', 'fizi', '', '', 'SURABAYA-JAKARTA', '20 Mei 2020', '7eac8c9941a4427de6675f1e857b8f4f'),
('323134', 'admin3', 'jalanan', '098282828', 'SURABAYA-JAKARTA', '20 Mei 2020', '92b24c7466d5fff0c13791d50281bbe5'),
('61514131', 'wowo', 'jalanini', '9884844', 'SURABAYA-JAKARTA', '20 Mei 2020', '56ecfdea2f17a576a9dad5cc05a5c371');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nik` bigint(100) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nik`, `status`) VALUES
(1, 'budi', '9c5fa085ce256c7c598f6710584ab25d', 987654321, 'submit'),
(2, 'cahyo', '7761248b458549aeceaf1a911533b08e', 2210191030, 'submit'),
(3, 'burhan', 'c1a5c76d5d692a72c570ac3dcf1eaf5a', 112233445566, 'submit'),
(4, 'edi', 'd0163339ed4f88a47eb254aa784f4230', 12345678910, 'not submit'),
(5, 'jumantoro', 'a54f65379cc57f5b2e1e83e3740c53c9', 2121212121, 'not submit'),
(6, 'zaky', '918dba1e5b053c3ae4aef690a7aa8585', 3434343434, 'submit'),
(7, 'bambang', '357c5eaefeda3bf103d525b58d3fef73', 123456, 'not submit'),
(8, 'toreh', '5f4dcc3b5aa765d61d8327deb882cf99', 1234554321, 'submit'),
(9, 'abdi', '5f4dcc3b5aa765d61d8327deb882cf99', 5432112345, 'not submit'),
(12, 'sukarno', '5f4dcc3b5aa765d61d8327deb882cf99', 90807060, 'submit'),
(13, 'alert', '5f4dcc3b5aa765d61d8327deb882cf99', 91817161, 'submit'),
(14, 'fizi', '5f4dcc3b5aa765d61d8327deb882cf99', 928272, 'submit'),
(15, 'admin3', '5f4dcc3b5aa765d61d8327deb882cf99', 323134, 'submit'),
(16, 'wowo', '5f4dcc3b5aa765d61d8327deb882cf99', 61514131, 'submit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
