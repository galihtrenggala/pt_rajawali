-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 09:55 AM
-- Server version: 10.1.30-MariaDB
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
-- Database: `db_rajawali`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `title`, `slug`, `text`, `image`) VALUES
(100, 'Artikel 1', 'artikel-1', 'Morbi porta tellus eu semper tempus. Mauris mollis congue felis, vitae vestibulum quam. Vestibulum ut odio vel est condimentum tempus ac sed elit. Donec quis massa quis ipsum viverra ultricies a eu ex. Nunc ut libero in diam placerat auctor. Integer sodales sem tortor, in laoreet leo ornare eu. Nulla congue metus eget tempus finibus. ', 'pexels-photo-212286.jpeg'),
(101, 'Artikel 2', 'artikel-2', 'Nullam consequat tempor tortor id tempus. Nulla laoreet eu magna quis vestibulum. Donec maximus dui a orci pulvinar gravida. Curabitur sollicitudin sem eget orci ultricies, sed luctus turpis tempus. Mauris at iaculis enim, non blandit lacus. Pellentesque vehicula purus nec augue pulvinar laoreet. Donec luctus aliquam urna, id laoreet sem sollicitudin sed. In hac habitasse platea dictumst. Nam sed leo vel elit tristique tincidunt quis at lacus. Suspendisse potenti. ', 'pexels-photo-1054218.jpeg'),
(102, 'Artikel 3 ', 'artikel-3', 'Vivamus maximus faucibus magna ullamcorper vulputate. Nunc elementum quis nulla ac tincidunt. Cras semper pretium lobortis. Vivamus egestas a nibh ac mollis. Mauris in mauris non nisl faucibus egestas eu id mauris. Maecenas est felis, tempus vitae consectetur eu, sagittis a tortor. Donec orci lorem, molestie non dapibus sit amet, lobortis vel dui. Sed quis dui a lacus vulputate ultricies. Nam rhoncus semper placerat. ', 'Strip_coal_mining.jpg'),
(103, 'Artikel 4', 'artikel-4', 'Nunc sit amet massa in lectus mollis consequat et ut arcu. Etiam vel libero at lectus placerat euismod. Nullam pulvinar metus sed nunc ultrices, eu consectetur mauris tempor. Nullam malesuada nunc ut nibh malesuada, id tincidunt nisi pellentesque. Nulla quis nibh eros. Mauris vestibulum ornare arcu, sit amet hendrerit felis bibendum in. Maecenas convallis volutpat enim vel molestie. Etiam fringilla egestas ultricies. Donec hendrerit vestibulum ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus. ', 'Arrow-COnstrucion.jpg'),
(106, 'Artikel 5', 'artikel-5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus congue euismod augue, vitae commodo tellus sagittis nec. Praesent at velit vitae orci gravida rutrum. Vestibulum ut facilisis tellus. Suspendisse volutpat est sit amet nulla mattis egestas. Sed placerat, ex quis accumsan maximus, nunc turpis facilisis nisl, sed dictum arcu lacus id nisi. Nam fringilla vitae mauris id accumsan. Ut sed ipsum ultricies, congue orci at, facilisis nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut dignissim sed justo id gravida. Nam tincidunt, est tristique suscipit mollis, arcu nisi malesuada felis, vitae dapibus urna libero id tellus. Vivamus pharetra pellentesque sapien vitae viverra. Curabitur sem massa, maximus nec varius et, eleifend vitae justo. Aliquam erat volutpat. Aliquam porttitor finibus augue. ', 'Leadhills_Railway_Station_-8__Shunting_Yard1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `barcode` varchar(15) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_transaksi`
--

CREATE TABLE `tbl_detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `harga_beli` int(15) NOT NULL,
  `harga_jual` int(15) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history_barang`
--

CREATE TABLE `tbl_history_barang` (
  `id_history_barang` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `harga_beli` int(15) NOT NULL,
  `harga_jual` int(15) NOT NULL,
  `stok` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemasukan`
--

CREATE TABLE `tbl_pemasukan` (
  `id_pemasukan` int(11) NOT NULL,
  `uraian` longtext NOT NULL,
  `jumlah` int(15) NOT NULL,
  `waktu` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengeluaran`
--

CREATE TABLE `tbl_pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `uraian` longtext NOT NULL,
  `jumlah` int(15) NOT NULL,
  `waktu` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sewa_alat`
--

CREATE TABLE `tbl_sewa_alat` (
  `id_sewa_alat` int(11) NOT NULL,
  `nama_alat` varchar(20) NOT NULL,
  `harga_sewa` int(15) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tambang_bahan`
--

CREATE TABLE `tbl_tambang_bahan` (
  `id_bahan_tbg` int(11) NOT NULL,
  `nama_bahan` varchar(20) NOT NULL,
  `harga` int(15) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tambang_transakasi`
--

CREATE TABLE `tbl_tambang_transakasi` (
  `id_trx_tambang` int(11) NOT NULL,
  `id_bahan_tbg` int(11) NOT NULL,
  `harga` int(15) NOT NULL,
  `waktu` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaki_barang`
--

CREATE TABLE `tbl_transaki_barang` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_bayar` int(15) NOT NULL,
  `kembalian` int(15) NOT NULL,
  `waktu` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi_sewa`
--

CREATE TABLE `tbl_transaksi_sewa` (
  `id_trx_sewa` int(11) NOT NULL,
  `id_sewa_alat` int(11) NOT NULL,
  `harga_sewa` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `waktu_mulai` date NOT NULL,
  `waktu_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `no_ktp` varchar(17) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `alamat` longtext NOT NULL,
  `no_telpon` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `username`, `password`, `role`, `no_ktp`, `foto`, `alamat`, `no_telpon`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '00902909109092', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_detail_transaksi`
--
ALTER TABLE `tbl_detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`);

--
-- Indexes for table `tbl_history_barang`
--
ALTER TABLE `tbl_history_barang`
  ADD PRIMARY KEY (`id_history_barang`);

--
-- Indexes for table `tbl_pemasukan`
--
ALTER TABLE `tbl_pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`);

--
-- Indexes for table `tbl_pengeluaran`
--
ALTER TABLE `tbl_pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `tbl_sewa_alat`
--
ALTER TABLE `tbl_sewa_alat`
  ADD PRIMARY KEY (`id_sewa_alat`);

--
-- Indexes for table `tbl_tambang_bahan`
--
ALTER TABLE `tbl_tambang_bahan`
  ADD PRIMARY KEY (`id_bahan_tbg`);

--
-- Indexes for table `tbl_tambang_transakasi`
--
ALTER TABLE `tbl_tambang_transakasi`
  ADD PRIMARY KEY (`id_trx_tambang`);

--
-- Indexes for table `tbl_transaki_barang`
--
ALTER TABLE `tbl_transaki_barang`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tbl_transaksi_sewa`
--
ALTER TABLE `tbl_transaksi_sewa`
  ADD PRIMARY KEY (`id_trx_sewa`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_detail_transaksi`
--
ALTER TABLE `tbl_detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_history_barang`
--
ALTER TABLE `tbl_history_barang`
  MODIFY `id_history_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pemasukan`
--
ALTER TABLE `tbl_pemasukan`
  MODIFY `id_pemasukan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pengeluaran`
--
ALTER TABLE `tbl_pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sewa_alat`
--
ALTER TABLE `tbl_sewa_alat`
  MODIFY `id_sewa_alat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tambang_bahan`
--
ALTER TABLE `tbl_tambang_bahan`
  MODIFY `id_bahan_tbg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tambang_transakasi`
--
ALTER TABLE `tbl_tambang_transakasi`
  MODIFY `id_trx_tambang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_transaki_barang`
--
ALTER TABLE `tbl_transaki_barang`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_transaksi_sewa`
--
ALTER TABLE `tbl_transaksi_sewa`
  MODIFY `id_trx_sewa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
