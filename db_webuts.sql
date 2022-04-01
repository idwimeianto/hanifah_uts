-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2022 pada 04.35
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webuts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `ID` bigint(20) NOT NULL,
  `NIM` int(11) DEFAULT NULL,
  `Angkatan` int(11) DEFAULT NULL,
  `Kelas` char(255) DEFAULT NULL,
  `Jenis_Kelamin` text NOT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  `Hobi` varchar(255) DEFAULT NULL,
  `Tempat_Lahir` varchar(255) DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Nomor_Handphone` int(11) DEFAULT NULL,
  `Cita-cita` varchar(255) DEFAULT NULL,
  `Pembimbing_Akademik` varchar(255) DEFAULT NULL,
  `Nama_MK` varchar(255) DEFAULT NULL,
  `Kode_MK` varchar(255) DEFAULT NULL,
  `Dosen_MK` varchar(255) DEFAULT NULL,
  `UKM` varchar(255) DEFAULT NULL,
  `UKK` varchar(255) DEFAULT NULL,
  `Organisasi` varchar(255) DEFAULT NULL,
  `Bobot_Nilai` varchar(255) DEFAULT NULL,
  `Bobot_Angka` int(11) DEFAULT NULL,
  `Email` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`ID`, `NIM`, `Angkatan`, `Kelas`, `Jenis_Kelamin`, `Nama`, `Alamat`, `Hobi`, `Tempat_Lahir`, `Tanggal_Lahir`, `Nomor_Handphone`, `Cita-cita`, `Pembimbing_Akademik`, `Nama_MK`, `Kode_MK`, `Dosen_MK`, `UKM`, `UKK`, `Organisasi`, `Bobot_Nilai`, `Bobot_Angka`, `Email`) VALUES
(1, 2989, 2018, 'A', 'Laki-Laki', 'Budi', 'Bandung', 'Game', 'Jakarta', '2000-01-20', 2147483647, 'Dokter', 'Dr. Susilo', 'Manajemen', 'M201', 'Dr. Susi', 'Batminton', 'Batminton', 'BEM', 'B', 2, 'budi@gmai.com'),
(2, 2983, 2018, 'C', 'Laki-Laki', 'Anton', 'Bandung', 'Menyanyi', 'Jambi', '2001-04-29', 2147483647, 'Artis', 'Dr. Susilo', 'Seni rupa', 'M209', 'Dr. Jaka', 'Paduan suara', '-', 'Paduan suara', 'A', 3, 'anton@gmai.com'),
(3, 2936, 2018, 'B', 'Laki-Laki', 'Raja', 'Bandung', 'Travellinng', 'Sulawesi', '1999-02-09', 2147483647, 'Pengusaha', 'Dr. Bambang', 'Fatografi', 'F230', 'Dr. Nini', 'Fotografer', 'Fotografer', 'BEM', 'A', 3, 'raja@gmail.com'),
(4, 2987, 1019, 'D', 'Laki-Laki', 'Bayu', 'Bandung', 'Sepak Bola', 'Kalimantan', '2000-05-10', 873638263, 'Pemain sepak bola', 'Dr. Yasir', 'Olahraga', 'O452', 'Dr. Jaja', 'Catur', 'Sepak bola', '-', 'A+', 4, 'bayu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
