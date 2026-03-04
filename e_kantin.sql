-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Mar 2026 pada 14.19
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_kantin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `id_detail` int(11) NOT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `varian` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kantin`
--

CREATE TABLE `tb_kantin` (
  `id_kantin` int(11) NOT NULL,
  `id_penjual` int(11) DEFAULT NULL,
  `nama_kantin` varchar(100) NOT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `foto_kantin` varchar(255) DEFAULT NULL,
  `jam_operasional` varchar(50) DEFAULT NULL,
  `nmid` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `id_kantin` int(11) DEFAULT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `kategori` enum('makanan','minuman','snack') NOT NULL,
  `stok` int(11) DEFAULT 0,
  `status` enum('tersedia','habis') DEFAULT 'tersedia',
  `foto_menu` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rating`
--

CREATE TABLE `tb_rating` (
  `id_rating` int(11) NOT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nilai_rating` tinyint(4) DEFAULT NULL CHECK (`nilai_rating` between 1 and 5),
  `komentar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_kantin` int(11) DEFAULT NULL,
  `total_harga` decimal(10,2) DEFAULT NULL,
  `metode_bayar` enum('tunai','qris') NOT NULL,
  `status_pesanan` enum('diproses','siap_diambil','selesai','dibatalkan') DEFAULT 'diproses',
  `waktu_transaksi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `role` enum('siswa','guru','penjual','admin') NOT NULL,
  `nisn` varchar(20) DEFAULT NULL,
  `nuptk` varchar(20) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `email`, `password`, `nama_lengkap`, `role`, `nisn`, `nuptk`, `no_hp`) VALUES
(1, 'admin@kantinkita.com', 'admin404', 'Admin KantinKita', 'admin', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indeks untuk tabel `tb_kantin`
--
ALTER TABLE `tb_kantin`
  ADD PRIMARY KEY (`id_kantin`),
  ADD KEY `id_penjual` (`id_penjual`);

--
-- Indeks untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_kantin` (`id_kantin`);

--
-- Indeks untuk tabel `tb_rating`
--
ALTER TABLE `tb_rating`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `id_menu` (`id_menu`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kantin` (`id_kantin`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kantin`
--
ALTER TABLE `tb_kantin`
  MODIFY `id_kantin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_rating`
--
ALTER TABLE `tb_rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `tb_menu` (`id_menu`);

--
-- Ketidakleluasaan untuk tabel `tb_kantin`
--
ALTER TABLE `tb_kantin`
  ADD CONSTRAINT `tb_kantin_ibfk_1` FOREIGN KEY (`id_penjual`) REFERENCES `tb_user` (`id_user`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD CONSTRAINT `tb_menu_ibfk_1` FOREIGN KEY (`id_kantin`) REFERENCES `tb_kantin` (`id_kantin`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_rating`
--
ALTER TABLE `tb_rating`
  ADD CONSTRAINT `tb_rating_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `tb_menu` (`id_menu`),
  ADD CONSTRAINT `tb_rating_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_kantin`) REFERENCES `tb_kantin` (`id_kantin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
