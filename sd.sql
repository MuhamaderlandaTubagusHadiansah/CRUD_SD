-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Agu 2020 pada 12.35
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` char(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`, `email`) VALUES
('01', 'Admin', 123, 'erlanda', 'muherlanda2324@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_guru`
--

CREATE TABLE `t_guru` (
  `NIP` int(11) NOT NULL,
  `Nama_guru` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_guru`
--

INSERT INTO `t_guru` (`NIP`, `Nama_guru`) VALUES
(12121212, 'suha'),
(12345678, 'sudrajat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pelajaran`
--

CREATE TABLE `t_pelajaran` (
  `kode_pel` varchar(6) NOT NULL,
  `nama_pel` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_pelajaran`
--

INSERT INTO `t_pelajaran` (`kode_pel`, `nama_pel`) VALUES
('w1122', 'sunda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pembelajaran`
--

CREATE TABLE `t_pembelajaran` (
  `NIS` int(8) NOT NULL,
  `Kode_pel` varchar(6) NOT NULL,
  `NIP` int(10) NOT NULL,
  `Nilai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_pembelajaran`
--

INSERT INTO `t_pembelajaran` (`NIS`, `Kode_pel`, `NIP`, `Nilai`) VALUES
(10118118, 'w1122', 12121212, 55);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_siswa`
--

CREATE TABLE `t_siswa` (
  `NIS` int(8) NOT NULL,
  `Nama_siswa` varchar(20) NOT NULL,
  `Tgl_Lahir` date NOT NULL,
  `Alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_siswa`
--

INSERT INTO `t_siswa` (`NIS`, `Nama_siswa`, `Tgl_Lahir`, `Alamat`) VALUES
(10118118, 'tole', '2019-05-01', 'pelebahencetati');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `t_guru`
--
ALTER TABLE `t_guru`
  ADD PRIMARY KEY (`NIP`);

--
-- Indeks untuk tabel `t_pelajaran`
--
ALTER TABLE `t_pelajaran`
  ADD PRIMARY KEY (`kode_pel`);

--
-- Indeks untuk tabel `t_pembelajaran`
--
ALTER TABLE `t_pembelajaran`
  ADD PRIMARY KEY (`NIS`),
  ADD KEY `NIM` (`NIS`),
  ADD KEY `Kode_mk` (`Kode_pel`),
  ADD KEY `NIP` (`NIP`);

--
-- Indeks untuk tabel `t_siswa`
--
ALTER TABLE `t_siswa`
  ADD PRIMARY KEY (`NIS`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_pembelajaran`
--
ALTER TABLE `t_pembelajaran`
  ADD CONSTRAINT `t_pembelajaran_ibfk_1` FOREIGN KEY (`NIS`) REFERENCES `t_siswa` (`NIS`),
  ADD CONSTRAINT `t_pembelajaran_ibfk_2` FOREIGN KEY (`NIP`) REFERENCES `t_guru` (`NIP`),
  ADD CONSTRAINT `t_pembelajaran_ibfk_3` FOREIGN KEY (`Kode_pel`) REFERENCES `t_pelajaran` (`Kode_pel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
