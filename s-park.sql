-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Mar 2025 pada 04.02
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s-park`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_operator` int(11) NOT NULL,
  `nama_operator` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nomor_telepon` varchar(20) DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_operator`, `nama_operator`, `username`, `password`, `email`, `nomor_telepon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hana Aeni Mustahibah', 'hanaaeni.m', '12345', 'hanaaeni.m@gmail.com', '089528902228', 'Active', '2025-03-04 01:31:19', '2025-03-04 01:31:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `insiden`
--

CREATE TABLE `insiden` (
  `id_insiden` int(11) NOT NULL,
  `id_parkir` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT curdate(),
  `id_operator` int(11) DEFAULT NULL,
  `status` enum('Berlangsung','Selesai') DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi_parkir`
--

CREATE TABLE `lokasi_parkir` (
  `id_lokasi` int(11) NOT NULL,
  `kode_lokasi` varchar(10) DEFAULT NULL,
  `nama_lokasi` varchar(100) DEFAULT NULL,
  `slot_total` int(11) DEFAULT NULL,
  `slot_tersedia` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `lokasi_parkir`
--

INSERT INTO `lokasi_parkir` (`id_lokasi`, `kode_lokasi`, `nama_lokasi`, `slot_total`, `slot_tersedia`, `created_at`) VALUES
(1, 'A', 'Depan gedung RnD', 50, 50, '2025-03-04 01:34:22'),
(2, 'B', 'Depan gedung STC', 35, 35, '2025-03-04 01:34:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE `operator` (
  `id_operator` int(11) NOT NULL,
  `nama_operator` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nomor_telepon` varchar(20) DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`id_operator`, `nama_operator`, `username`, `password`, `email`, `nomor_telepon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ayu apriliani', 'ayuapriliani', '12345', 'ayuapp@gmail.com', '089726739182', 'Active', '2025-03-04 01:31:39', '2025-03-04 01:32:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `parkir`
--

CREATE TABLE `parkir` (
  `id_parkir` int(11) NOT NULL,
  `id_lokasi` int(11) DEFAULT NULL,
  `id_slot` int(11) DEFAULT NULL,
  `jenis_pengendara` enum('Pegawai','Magang/PKL','VIP/VVIP') DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `jenis_kendaraan` enum('Motor','Mobil') DEFAULT NULL,
  `nomor_plat` varchar(50) DEFAULT NULL,
  `waktu_masuk` datetime DEFAULT current_timestamp(),
  `waktu_keluar` datetime DEFAULT NULL,
  `id_operator_masuk` int(11) DEFAULT NULL,
  `id_operator_keluar` int(11) DEFAULT NULL,
  `status` enum('Berlangsung','Selesai') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_parkir`
--

CREATE TABLE `riwayat_parkir` (
  `id_riwayat` int(11) NOT NULL,
  `id_parkir` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slot_parkir`
--

CREATE TABLE `slot_parkir` (
  `id_slot` int(11) NOT NULL,
  `kode_lahan` varchar(10) DEFAULT NULL,
  `id_lokasi` int(11) DEFAULT NULL,
  `status` enum('Tersedia','Ditempati') DEFAULT NULL,
  `id_parkir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `slot_parkir`
--

INSERT INTO `slot_parkir` (`id_slot`, `kode_lahan`, `id_lokasi`, `status`, `id_parkir`) VALUES
(1, 'A', 1, 'Ditempati', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jenis_pengendara` enum('Pegawai','Magang/PKL','VIP/VVIP') DEFAULT NULL,
  `nomor_telepon` varchar(20) DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `email`, `jenis_pengendara`, `nomor_telepon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'faridah az-zahra', 'zahra.fa', '12345', 'azzahra@gmai.com', 'Pegawai', '09827364828', 'Active', '2025-03-04 01:33:28', '2025-03-04 01:33:28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_operator`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `insiden`
--
ALTER TABLE `insiden`
  ADD PRIMARY KEY (`id_insiden`),
  ADD KEY `id_parkir` (`id_parkir`),
  ADD KEY `id_operator` (`id_operator`);

--
-- Indeks untuk tabel `lokasi_parkir`
--
ALTER TABLE `lokasi_parkir`
  ADD PRIMARY KEY (`id_lokasi`),
  ADD UNIQUE KEY `kode_lokasi` (`kode_lokasi`);

--
-- Indeks untuk tabel `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_operator`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `parkir`
--
ALTER TABLE `parkir`
  ADD PRIMARY KEY (`id_parkir`),
  ADD KEY `id_lokasi` (`id_lokasi`),
  ADD KEY `id_slot` (`id_slot`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_operator_masuk` (`id_operator_masuk`),
  ADD KEY `id_operator_keluar` (`id_operator_keluar`);

--
-- Indeks untuk tabel `riwayat_parkir`
--
ALTER TABLE `riwayat_parkir`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `id_parkir` (`id_parkir`);

--
-- Indeks untuk tabel `slot_parkir`
--
ALTER TABLE `slot_parkir`
  ADD PRIMARY KEY (`id_slot`),
  ADD UNIQUE KEY `kode_lahan` (`kode_lahan`),
  ADD KEY `id_lokasi` (`id_lokasi`),
  ADD KEY `id_parkir` (`id_parkir`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `insiden`
--
ALTER TABLE `insiden`
  MODIFY `id_insiden` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lokasi_parkir`
--
ALTER TABLE `lokasi_parkir`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `operator`
--
ALTER TABLE `operator`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `parkir`
--
ALTER TABLE `parkir`
  MODIFY `id_parkir` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `riwayat_parkir`
--
ALTER TABLE `riwayat_parkir`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `slot_parkir`
--
ALTER TABLE `slot_parkir`
  MODIFY `id_slot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `insiden`
--
ALTER TABLE `insiden`
  ADD CONSTRAINT `insiden_ibfk_1` FOREIGN KEY (`id_parkir`) REFERENCES `parkir` (`id_parkir`) ON DELETE CASCADE,
  ADD CONSTRAINT `insiden_ibfk_2` FOREIGN KEY (`id_operator`) REFERENCES `operator` (`id_operator`);

--
-- Ketidakleluasaan untuk tabel `parkir`
--
ALTER TABLE `parkir`
  ADD CONSTRAINT `parkir_ibfk_1` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi_parkir` (`id_lokasi`),
  ADD CONSTRAINT `parkir_ibfk_2` FOREIGN KEY (`id_slot`) REFERENCES `slot_parkir` (`id_slot`),
  ADD CONSTRAINT `parkir_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE SET NULL,
  ADD CONSTRAINT `parkir_ibfk_4` FOREIGN KEY (`id_operator_masuk`) REFERENCES `operator` (`id_operator`),
  ADD CONSTRAINT `parkir_ibfk_5` FOREIGN KEY (`id_operator_keluar`) REFERENCES `operator` (`id_operator`) ON DELETE SET NULL;

--
-- Ketidakleluasaan untuk tabel `riwayat_parkir`
--
ALTER TABLE `riwayat_parkir`
  ADD CONSTRAINT `riwayat_parkir_ibfk_1` FOREIGN KEY (`id_parkir`) REFERENCES `parkir` (`id_parkir`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `slot_parkir`
--
ALTER TABLE `slot_parkir`
  ADD CONSTRAINT `slot_parkir_ibfk_1` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi_parkir` (`id_lokasi`),
  ADD CONSTRAINT `slot_parkir_ibfk_2` FOREIGN KEY (`id_parkir`) REFERENCES `parkir` (`id_parkir`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
