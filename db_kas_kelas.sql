-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Feb 2023 pada 02.10
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kas_kelas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_class_cash`
--

CREATE TABLE `tb_class_cash` (
  `Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Input` float NOT NULL,
  `Output` float NOT NULL,
  `Total` float NOT NULL,
  `Information` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_input`
--

CREATE TABLE `tb_input` (
  `Id` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Input` double NOT NULL,
  `Information` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_input`
--

INSERT INTO `tb_input` (`Id`, `Name`, `Date`, `Input`, `Information`) VALUES
(1, 'dii', '2023-02-21 00:44:44', 600, 'Saldo'),
(3, 'dii', '2023-02-22 00:55:26', 20000, 'vgfytg8g8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_output`
--

CREATE TABLE `tb_output` (
  `Id` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Output` double NOT NULL,
  `Information` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_output`
--

INSERT INTO `tb_output` (`Id`, `Date`, `Output`, `Information`) VALUES
(1, '0000-00-00 00:00:00', 0, 'saldo'),
(2, '2023-02-21 02:51:16', 0, 'Saldo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_student_list`
--

CREATE TABLE `tb_student_list` (
  `Id` int(11) NOT NULL,
  `Nisn` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Gender` enum('L',' P') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `No Hp` char(20) NOT NULL,
  `Address` text NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`Id`, `Name`, `No Hp`, `Address`, `username`, `password`, `role`) VALUES
(1, 'Dini', '088289821917', 'Kp. Lembur sawah', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'April', '085861880785', 'Kp. Lembur Sawah', 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_class_cash`
--
ALTER TABLE `tb_class_cash`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tb_input`
--
ALTER TABLE `tb_input`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tb_output`
--
ALTER TABLE `tb_output`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tb_student_list`
--
ALTER TABLE `tb_student_list`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_class_cash`
--
ALTER TABLE `tb_class_cash`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_input`
--
ALTER TABLE `tb_input`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_output`
--
ALTER TABLE `tb_output`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
