-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Mar 2023 pada 06.26
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
-- Struktur dari tabel `tb_input`
--

CREATE TABLE `tb_input` (
  `Id` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Saldo` double NOT NULL,
  `Information` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_input`
--

INSERT INTO `tb_input` (`Id`, `Name`, `Date`, `Saldo`, `Information`) VALUES
(3, 'dini', '2023-02-20 03:01:45', 20000, 'p'),
(5, 'dini', '2023-03-01 01:43:06', 3000, 'sapu'),
(6, 'adel', '2023-03-01 02:15:53', 5000, 'keluar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_output`
--

CREATE TABLE `tb_output` (
  `Id` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Saldo` double NOT NULL,
  `Information` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_output`
--

INSERT INTO `tb_output` (`Id`, `Date`, `Saldo`, `Information`) VALUES
(1, '2023-02-19 21:14:51', 33, 'dadsaf'),
(2, '0000-00-00 00:00:00', 3000, 'keluar'),
(3, '2023-03-01 03:06:12', 1000, 'kluar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_student_list`
--

CREATE TABLE `tb_student_list` (
  `Id` int(11) NOT NULL,
  `Nisn` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Class` varchar(11) NOT NULL,
  `Gender` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_student_list`
--

INSERT INTO `tb_student_list` (`Id`, `Nisn`, `Name`, `Class`, `Gender`) VALUES
(22, 12345, 'Adelia fitriani', '12 Rpl 3', 'Perempuan'),
(23, 23456, 'Adi Adriansyah', '12 Rpl 3', 'Laki-Laki'),
(24, 34567, 'Ai Rika Amelia', '12 Rpl 3', 'Perempuan'),
(25, 45678, 'Azriel Fahmi', '12 Rpl 3', 'Laki-Laki'),
(26, 56789, 'Annisa Nurlaely A', '12 Rpl 3', 'Perempuan'),
(27, 280405, 'Dini Rahma Aprilianti', '12 Rpl 3', 'Perempuan'),
(28, 908070, 'Anisa Putri Rahayu', '12 Rpl 3', 'Perempuan'),
(29, 405060, 'Ashfiyyah Saddiqa', '12 Rpl 3', 'Perempuan'),
(30, 506050, 'Fathir Rahman H', '12 Rpl 3', 'Laki-Laki'),
(31, 607050, 'Fauzan Abdurahman', '12 Rpl 3', 'Laki-Laki'),
(32, 708050, 'Gilang Angga', '12 Rpl 3', 'Laki-Laki'),
(33, 896050, 'Gina Rahayu', '12 Rpl 3', 'Perempuan'),
(34, 106050, 'Habib', '12 Rpl 3', 'Laki-Laki'),
(35, 296050, 'Haifa Luri ', '12 Rpl 3', 'Perempuan'),
(36, 396050, 'Lukman Nurhakim', '12 Rpl 3', 'Perempuan'),
(37, 203050, 'M Arshal', '12 Rpl 3', 'Laki-Laki'),
(38, 304050, 'M Dilal Fadhilah', '12 Rpl 3', 'Laki-Laki'),
(39, 506070, 'M Ikbal Firdaus', '12 Rpl 3', 'Laki-Laki'),
(41, 507070, 'Rizki Firmansyah', '12 Rpl 3', 'Laki-Laki');

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
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Nisn` (`Nisn`);

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
-- AUTO_INCREMENT untuk tabel `tb_input`
--
ALTER TABLE `tb_input`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_output`
--
ALTER TABLE `tb_output`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_student_list`
--
ALTER TABLE `tb_student_list`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
