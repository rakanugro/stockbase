-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2020 pada 08.50
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stockbase`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_barang`
--

CREATE TABLE `history_barang` (
  `no_id` bigint(20) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `reference` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `packaging` float NOT NULL,
  `quantity` float NOT NULL,
  `lot_number` bigint(20) NOT NULL,
  `location` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `process` varchar(50) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `history_barang`
--

INSERT INTO `history_barang` (`no_id`, `kode_barang`, `nama_barang`, `reference`, `supplier`, `tgl_masuk`, `packaging`, `quantity`, `lot_number`, `location`, `keterangan`, `process`, `time`) VALUES
(2, 'lk22', 'keju', '92121sa', 'dasara', '2020-11-21', 0.001, 0.001, 2121212, 'bandung', 'ok', 'IN', '2020-11-20 14:25:55'),
(7, 'loka182', 'keju nzmp', '', 'abata', '2020-11-23', 10.003, 10.003, 32322323, 'jakarta', 'done', 'stock', '2020-11-23 14:24:02'),
(8, 'loka182', 'keju nzmp', '', 'abata', '2020-11-23', 10.003, 10.01, 32322323, 'jakarta', 'done', 'stock', '2020-11-23 14:25:09'),
(9, 'loka182', 'keju nzmp', '', 'abata', '2020-11-23', 0.007, 0.007, 323232, 'jakarta', 'ok', 'IN', '2020-11-23 14:25:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `instock_barang`
--

CREATE TABLE `instock_barang` (
  `no_id` bigint(20) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `reference` varchar(50) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `packaging` float NOT NULL,
  `quantity` float NOT NULL,
  `lot_number` bigint(20) NOT NULL,
  `location` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `process` varchar(50) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `instock_barang`
--

INSERT INTO `instock_barang` (`no_id`, `kode_barang`, `nama_barang`, `reference`, `supplier`, `tgl_masuk`, `packaging`, `quantity`, `lot_number`, `location`, `keterangan`, `process`, `time`) VALUES
(2, 'lk22', 'keju', '92121sa', 'dasara', '2020-11-21', 0.001, 0.001, 2121212, 'bandung', 'ok', 'IN', '2020-11-20 14:25:55'),
(5, 'loka182', 'keju nzmp', '', 'abata', '2020-11-23', 0.007, 0.007, 323232, 'jakarta', 'ok', 'IN', '2020-11-23 14:25:09');

--
-- Trigger `instock_barang`
--
DELIMITER $$
CREATE TRIGGER `kurang_stockbarang` BEFORE DELETE ON `instock_barang` FOR EACH ROW BEGIN
update master_barang set quantity = quantity - old.quantity
where kode_barang = old.kode_barang;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambah_stockbarang` AFTER INSERT ON `instock_barang` FOR EACH ROW BEGIN
update master_barang set quantity = quantity + new.quantity 
where kode_barang = new.kode_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_barang`
--

CREATE TABLE `master_barang` (
  `no_id` bigint(20) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `reference` varchar(50) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `packaging` float NOT NULL,
  `quantity` float NOT NULL,
  `lot_number` bigint(20) NOT NULL,
  `location` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `process` varchar(50) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_barang`
--

INSERT INTO `master_barang` (`no_id`, `kode_barang`, `nama_barang`, `reference`, `supplier`, `tgl_masuk`, `packaging`, `quantity`, `lot_number`, `location`, `keterangan`, `process`, `time`) VALUES
(2, 'AK24', 'Enzim', '', 'dogota prima', '2020-11-16', 0.544, 0.544, 348383, 'jakarta', 'ok', '', '2020-11-16 09:22:08'),
(4, 'ok88', 'pasta', '', 'amanda tek', '2020-11-20', 0.21, 0.21, 32432423, 'bandung', 'done', 'stock', '2020-11-20 07:58:31'),
(5, 'ak47', 'enzim ca', 'gl073044', 'bondang murni', '2020-11-30', 0.532, 0.532, 932323, 'jakarta', 'ok', 'stock', '2020-11-20 07:59:47'),
(7, 'loka182', 'keju nzmp', '', 'abata', '2020-11-23', 10.003, 10.01, 32322323, 'jakarta', 'done', 'stock', '2020-11-23 14:24:02');

--
-- Trigger `master_barang`
--
DELIMITER $$
CREATE TRIGGER `delete_history` AFTER DELETE ON `master_barang` FOR EACH ROW BEGIN
delete from history_barang where kode_barang = old.kode_barang;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `masuk_history` AFTER INSERT ON `master_barang` FOR EACH ROW BEGIN
insert into history_barang (kode_barang,nama_barang,reference,supplier,tgl_masuk,packaging,quantity,lot_number,location,keterangan,process)
VALUES(new.kode_barang,new.nama_barang,new.reference,new.supplier,new.tgl_masuk,new.packaging,new.quantity,new.lot_number,new.location,new.keterangan,new.process);
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_history` AFTER UPDATE ON `master_barang` FOR EACH ROW BEGIN
insert into history_barang (kode_barang,nama_barang,reference,supplier,tgl_masuk,packaging,quantity,lot_number,location,keterangan,process)
VALUES(new.kode_barang,new.nama_barang,new.reference,new.supplier,new.tgl_masuk,new.packaging,new.quantity,new.lot_number,new.location,new.keterangan,new.process);
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `history_barang`
--
ALTER TABLE `history_barang`
  ADD PRIMARY KEY (`no_id`);

--
-- Indeks untuk tabel `instock_barang`
--
ALTER TABLE `instock_barang`
  ADD PRIMARY KEY (`no_id`);

--
-- Indeks untuk tabel `master_barang`
--
ALTER TABLE `master_barang`
  ADD PRIMARY KEY (`no_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `history_barang`
--
ALTER TABLE `history_barang`
  MODIFY `no_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `instock_barang`
--
ALTER TABLE `instock_barang`
  MODIFY `no_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `master_barang`
--
ALTER TABLE `master_barang`
  MODIFY `no_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
