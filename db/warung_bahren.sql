-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2021 at 06:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warung_bahren`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` double NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(19, 'Nasi Tumpeng', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Makanan', 100000, 14, '2.jpg'),
(20, 'Sate Maranggi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Makanan', 2500, 992, '3.jpg'),
(21, 'Ayam Bakar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Makanan', 10000, 19, '4.jpg'),
(22, 'Ayam Geprek', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Makanan', 12000, 5, '10.jpg'),
(23, 'Ayam Sambel Matah', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Makanan', 10000, 25, '11.jpg'),
(24, 'Aneka Pepes', '1. Pepes Tahu 2. Pepes Jantung 3. Pepes Ikan Jambal 4. Pepes Ikan Teri 5. Pepes Ikan Mas 6. Pepes Ikan Peda 7. Pepes Jamur 8. Pepes Ayam 9. Pepes Laja 10. Pepes Terubuk 11. Pepes Lampuyang', 'Makanan', 5000, 38, '8.jpg'),
(25, 'Jus Buah', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Minuman', 10000, 19, '6.jpg'),
(27, 'Teh Manis', 'lorem ipsum dolor sit amete', 'Minuman', 3000, 8, '13.jpg'),
(28, 'Paket Nasi Box Kuning', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Makanan', 200000, 25, '14.jpg'),
(30, 'Wedang Jahe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Minuman', 8000, 248, 'wedang_jahe1.jpg'),
(37, 'Bajigur', 'lorem ipsum dolor sit amete', 'Minuman', 5000, 126, 'bajigur.jpg'),
(38, 'Kopi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Minuman', 5000, 98, '121.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_telp` varchar(11) NOT NULL,
  `catatan` varchar(225) NOT NULL,
  `jasa_pengiriman` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `no_telp`, `catatan`, `jasa_pengiriman`, `tgl_pesan`, `batas_bayar`) VALUES
(5, 'User Primary', 'Alamat Primary', '0899999999', 'Kopi Sanggabuana, Jus Anggur, Sate Maranggi 10 tusuk', 'Driver 1 (Fery)', '2021-03-08 21:01:37', '2021-03-09 21:01:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 5, 19, 'Nasi Tumpeng', 1, 100000, ''),
(2, 5, 20, 'Sate Maranggi', 1, 2500, ''),
(3, 5, 22, 'Ayam Geprek', 1, 12000, ''),
(4, 5, 24, 'Aneka Pepes', 1, 5000, ''),
(5, 5, 25, 'Jus Buah', 1, 10000, ''),
(6, 5, 26, 'Kopi', 1, 5000, ''),
(7, 5, 37, 'Bajigur', 1, 5000, ''),
(8, 5, 30, 'Wedang Jahe', 1, 8000, ''),
(9, 5, 28, 'Paket Nasi Box Kuning', 1, 200000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'user', 'user', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
