-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Bulan Mei 2023 pada 06.14
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbecomers`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `nama_kategori`) VALUES
(1, 'Elektronik'),
(8, 'Pakaian'),
(9, 'Makanan'),
(10, 'Otomotif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_pemesan` varchar(45) DEFAULT NULL,
  `alamat_pemesan` varchar(45) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `jumlah_pesanan` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `produk_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `nama_pemesan`, `alamat_pemesan`, `no_hp`, `email`, `jumlah_pesanan`, `deskripsi`, `produk_id`) VALUES
(1, '2023-04-26', 'Alif Nur Miftah', 'Depok', '86556783', 'alif@gmail.com', 2, 'jhhajbdjcjjdds', 1),
(2, '2023-04-27', 'Wahyu', 'Bogor', '974477322', 'huy@gmail.com', 2, 'jkjhabkjkddebbksgacgvccjh', 2),
(7, '2023-04-29', 'Alif M', 'Tangerang', '0986556777', 'alif1234@gmail.com', 2, 'Mantap', 5),
(8, '2023-04-30', 'Ahmadun', 'Bekasi Timur', '0875655626', 'admin12@gmail.com', 22, 'Gila Mantep', 2),
(9, '2023-05-04', 'Gunawan Akgus', 'Jawa Barat', '089764731834', 'alif1234@gmail.com', 4, 'Semoga Memuaskan', 9),
(10, '2023-05-19', 'Ahmadun', 'Malang', '089764731834', 'admin12@gmail.com', 22, 'Mantap boss', 2),
(11, '2023-05-04', 'Amar', 'Bogor', '089764731834', 'galih@gmail.com', 4, 'Okeee Broo', 5),
(12, '2023-05-04', 'Ahmad Waluyo', 'Bekasi', '089764731834', 'gataupengenbelitruk50@gmail.com', 1, 'Semoga Barang nya Sesuai ..', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `harga_jual` double DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `min_stok` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `kategori_produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `harga_jual`, `harga_beli`, `stok`, `min_stok`, `deskripsi`, `kategori_produk_id`) VALUES
(1, 'EL001', 'Kulkas', 2000000, 1800000, 2, 1, 'Adalah Untuk mendingin ', 1),
(2, 'MK001', 'Pizza', 50000, 48000, 10, 5, 'Makanan sangat lezat', 2),
(5, 'ELK023', 'Mesin Cuci', 50000, 35000, 6, 4, 'Untuk Mencuci Pakaian', 1),
(9, 'ELK908', 'TV LED 5 Inc', 4000000, 3500000, 4, 3, 'Membuat Siaran TV menjadi lebih Cerah', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
