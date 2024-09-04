-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Sep 2024 pada 14.50
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form`
--

CREATE TABLE `form` (
  `nama` varchar(25) NOT NULL,
  `nim` varchar(35) NOT NULL,
  `kelas` text NOT NULL,
  `email` varchar(15) NOT NULL,
  `saran` varchar(100) NOT NULL,
  `jenis kelamin` text NOT NULL,
  `submit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `form`
--

INSERT INTO `form` (`nama`, `nim`, `kelas`, `email`, `saran`, `jenis kelamin`, `submit`) VALUES
('rifqi', '2147483647', '0', 'athalah29@gmail', 'good job', 'perempuan', 'Daftar'),
('rifqi', '2147483647', '0', 'athalah29@gmail', 'good job', 'perempuan', 'Daftar'),
('abdul', '2147483647', 'T3E', 'athalah29@gmail', 'good job', 'laki-laki', 'Daftar'),
('femas', '233140701111008', 'T3E', 'femas9@gmail.co', 'excelent', 'laki-laki', 'Daftar'),
('al', '233140701111007', 'T3E', 'femas11@gmail.c', 'good', 'laki-laki', 'Daftar'),
('aldo', '233140701111009', 'T3A', 'femas11@gmail.c', 'mantap', 'laki-laki', 'Daftar'),
('aldo', '233140701111009', 'T3B', 'femas11@gmail.c', 'qqq', 'perempuan', 'Daftar'),
('aldi', '233140701111001', 'T3C', 'aldi11@gmail.co', 'kereen', 'laki-laki', 'Daftar'),
('sari', '23314070111900', 'T3D', 'sari@gmail.com', 'kueren', 'perempuan', 'Daftar'),
('sari', '23314070111900', 'T3D', 'sari@gmail.com', 'kueren', 'perempuan', 'Daftar'),
('sari', '233140701111009', 'T3A', 'femas9@gmail.co', 'sasaxa', 'laki-laki', 'Daftar'),
('sari', '233140701111009', 'T3A', 'femas9@gmail.co', 'saxamn', 'laki-laki', 'Daftar'),
('siti', '233140701109', 'T3D', 'siti@gmail.com', 'makasih', 'perempuan', 'Daftar'),
('', '', 'T3A', '', '                ', '', 'daftar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
