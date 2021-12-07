-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 09:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_harga`
--

CREATE TABLE `barang_harga` (
  `kode_barang` char(5) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(6) NOT NULL,
  `kode_dropshipper` char(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_master`
--

CREATE TABLE `barang_master` (
  `kode_barang` varchar(15) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `ukuran` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_master`
--

INSERT INTO `barang_master` (`kode_barang`, `nama_barang`, `satuan`, `ukuran`) VALUES
('VNS01', 'Vans Slip on Sidewalll', 'Pcs', '38'),
('VNS02', 'Vans Sk-8 Chekerboardd', 'Pcs', '39'),
('VNS04', 'Vans Ooldskool Black White', 'Pcs', '39'),
('VNS03', 'Vans Slip on Sidewall', 'Pcs', '39'),
('VNS06', 'Vans Slip on Sidewall', 'Pcs', '38');

-- --------------------------------------------------------

--
-- Table structure for table `dropshipper`
--

CREATE TABLE `dropshipper` (
  `nama_dropshipper` varchar(15) NOT NULL,
  `kode_dropshipper` varchar(15) NOT NULL,
  `alamat_dropshipper` varchar(100) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dropshipper`
--

INSERT INTO `dropshipper` (`nama_dropshipper`, `kode_dropshipper`, `alamat_dropshipper`, `telepon`) VALUES
('thian', 'thianjkt', 'JALAN KAPUK 3 JAKARTA BARAT', '08953228343'),
('Farhan', 'frhnjkt', 'pulojahe', '0865162412'),
('Suryo', 'suryojktbrt', 'jakarta timur bkt', '08953228343');

-- --------------------------------------------------------

--
-- Table structure for table `historibayar`
--

CREATE TABLE `historibayar` (
  `nobukti` varchar(14) NOT NULL,
  `no_fak_penj` varchar(13) NOT NULL,
  `tglbayar` date NOT NULL,
  `jenistransaksi` varchar(6) DEFAULT NULL,
  `jenisbayar` varchar(10) NOT NULL,
  `status_bayar` varchar(10) DEFAULT NULL,
  `bayar` int(11) NOT NULL,
  `id_giro` int(11) DEFAULT NULL,
  `id_transfer` int(11) DEFAULT NULL,
  `girotocash` char(1) DEFAULT NULL,
  `id_karyawan` char(7) DEFAULT NULL,
  `id_admin` smallint(6) NOT NULL,
  `date_created` timestamp NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `kode_pelanggan` varchar(13) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `alamat_pelanggan` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `kode_dropshipper` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`kode_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `no_hp`, `kode_dropshipper`) VALUES
('CS0001', 'fahri', 'kapuk 3', '0895322817343', 'thianjkt'),
('CS0002', 'ega', 'lioo', '0831273172', 'suryojktbrt'),
('CS0003', 'desta', 'jl kapuk', '0831273172', 'thianjkt'),
('CS004', 'Endol', 'jakarta timur', '09417247', 'thianjkt'),
('CS003', 'Endol', 'jakarta timur', '09417247', 'frhnjkt'),
('CS005', 'Endol', 'jakarta timur', '09417247', 'suryojktbrt');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `no_faktur` varchar(13) NOT NULL,
  `tgltransaksi` date NOT NULL,
  `kode_pelanggan` varchar(13) NOT NULL,
  `jenistransaksi` varchar(6) NOT NULL,
  `jatuhtempo` date DEFAULT NULL,
  `id_user` char(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_detail`
--

CREATE TABLE `penjualan_detail` (
  `no_fak_penj` varchar(13) DEFAULT NULL,
  `kode_barang` varchar(8) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_detail_temp`
--

CREATE TABLE `penjualan_detail_temp` (
  `no_fak_penj` varchar(13) NOT NULL,
  `kode_barang` varchar(8) NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `id_user` char(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` char(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(30) NOT NULL,
  `kode_dropshipper` char(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_lengkap`, `no_hp`, `username`, `password`, `level`, `kode_dropshipper`) VALUES
('USR001', 'septian yanuar', '0895322817343', 'septian yanuar', 'thian123', 'administrator', 'Hellobang'),
('USR002', 'septian', '0895421412', 'septian', 'thian123', 'administrator', 'Hellobang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_harga`
--
ALTER TABLE `barang_harga`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `barang_master`
--
ALTER TABLE `barang_master`
  ADD PRIMARY KEY (`kode_barang`) USING BTREE;

--
-- Indexes for table `dropshipper`
--
ALTER TABLE `dropshipper`
  ADD PRIMARY KEY (`nama_dropshipper`),
  ADD KEY `kode_cab_idx` (`nama_dropshipper`),
  ADD KEY `kode_dropshipper` (`kode_dropshipper`);

--
-- Indexes for table `historibayar`
--
ALTER TABLE `historibayar`
  ADD PRIMARY KEY (`nobukti`),
  ADD KEY `hb_id_giro` (`id_giro`),
  ADD KEY `hb_nofaktur` (`no_fak_penj`),
  ADD KEY `hb_idtransfer` (`id_transfer`),
  ADD KEY `hb_tglbayar_jenis` (`tglbayar`,`jenisbayar`),
  ADD KEY `hb_idkar` (`id_karyawan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`kode_pelanggan`) USING BTREE,
  ADD KEY `pel_nama` (`nama_pelanggan`),
  ADD KEY `pel_kodecab` (`kode_dropshipper`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`no_faktur`) USING BTREE,
  ADD KEY `kode_pelanggan` (`kode_pelanggan`),
  ADD KEY `tgltransaksi` (`tgltransaksi`);

--
-- Indexes for table `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  ADD KEY `detailpenj_nofaktur` (`no_fak_penj`),
  ADD KEY `detailpenj_kodebarang` (`kode_barang`);

--
-- Indexes for table `penjualan_detail_temp`
--
ALTER TABLE `penjualan_detail_temp`
  ADD KEY `detailpenj_nofaktur` (`no_fak_penj`),
  ADD KEY `detailpenj_kodebarang` (`kode_barang`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
