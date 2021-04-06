-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Apr 2021 pada 09.01
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_undanganonline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_acara`
--

CREATE TABLE `tb_acara` (
  `ID_Acara` varchar(256) NOT NULL,
  `TglAkad` date NOT NULL,
  `WaktuMulaiAkad` datetime NOT NULL,
  `WaktuSelesaiAkad` datetime NOT NULL,
  `TempatAkad` varchar(150) NOT NULL,
  `AlamatAkad` text NOT NULL,
  `TglResepsi` date NOT NULL,
  `WaktuMulaiResepsi` datetime NOT NULL,
  `WaktuSelesaiResepsi` datetime NOT NULL,
  `TempatResepsi` varchar(150) NOT NULL,
  `AlamatResepsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_acara`
--

INSERT INTO `tb_acara` (`ID_Acara`, `TglAkad`, `WaktuMulaiAkad`, `WaktuSelesaiAkad`, `TempatAkad`, `AlamatAkad`, `TglResepsi`, `WaktuMulaiResepsi`, `WaktuSelesaiResepsi`, `TempatResepsi`, `AlamatResepsi`) VALUES
('ACR1', '2021-04-10', '2021-04-10 07:00:00', '2021-04-10 12:00:00', 'Mutiara Palace', 'Jl. Medan No.1', '2021-04-03', '2021-04-03 19:00:00', '2021-04-03 21:00:00', 'Rumah Mempelai Pria', 'Jl. Jakarta 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun`
--

CREATE TABLE `tb_akun` (
  `ID_akun` varchar(256) NOT NULL,
  `Email_akun` varchar(100) NOT NULL,
  `NoHp_akun` varchar(50) NOT NULL,
  `Password_akun` varchar(256) NOT NULL,
  `Created_akun` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Status_akun` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_akun`
--

INSERT INTO `tb_akun` (`ID_akun`, `Email_akun`, `NoHp_akun`, `Password_akun`, `Created_akun`, `Status_akun`) VALUES
('AKN1', 'andrahafizhsb03@gmail.com', '082276853382', 'andra123', '2021-04-03 16:49:06', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `ID_Foto` int(11) NOT NULL,
  `ID_Undangan` text NOT NULL,
  `Nama_foto` varchar(100) NOT NULL,
  `Tglupload_foto` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_foto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `ID_Kategori` varchar(10) NOT NULL,
  `Nama_Kategori` varchar(25) NOT NULL,
  `Harga_Kategori` int(11) NOT NULL,
  `Status_Kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`ID_Kategori`, `Nama_Kategori`, `Harga_Kategori`, `Status_Kategori`) VALUES
('KTG1', 'Free', 0, 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mempelai`
--

CREATE TABLE `tb_mempelai` (
  `ID_Mempelai` varchar(256) NOT NULL,
  `Nama_MPria` varchar(50) NOT NULL,
  `Nama_MWanita` varchar(50) NOT NULL,
  `NoHp_MPria` varchar(15) NOT NULL,
  `NoHp_MWanita` varchar(15) NOT NULL,
  `Alamat_MPria` varchar(15) NOT NULL,
  `Alamat_MWanita` varchar(15) NOT NULL,
  `Panggilan_MPria` varchar(15) NOT NULL,
  `Panggilan_MWanita` varchar(15) NOT NULL,
  `NamaOrtu_Ayah_MPria` varchar(50) NOT NULL,
  `NamaOrtu_Ibu_MPria` varchar(50) NOT NULL,
  `NamaOrtu_Ayah_MWanita` varchar(50) NOT NULL,
  `NamaOrtu_Ibu_MWanita` varchar(50) NOT NULL,
  `Foto_MPria` text NOT NULL,
  `Foto_MWanita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mempelai`
--

INSERT INTO `tb_mempelai` (`ID_Mempelai`, `Nama_MPria`, `Nama_MWanita`, `NoHp_MPria`, `NoHp_MWanita`, `Alamat_MPria`, `Alamat_MWanita`, `Panggilan_MPria`, `Panggilan_MWanita`, `NamaOrtu_Ayah_MPria`, `NamaOrtu_Ibu_MPria`, `NamaOrtu_Ayah_MWanita`, `NamaOrtu_Ibu_MWanita`, `Foto_MPria`, `Foto_MWanita`) VALUES
('MPL1', 'Andra', 'Ghea', '088', '011', 'Medan', 'Rengat', 'Andra Panggilan', 'Ghea Panggilan', 'Lawali', 'Rani', 'Rudi', 'Maryam', 'default.jpg', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mempelai_test`
--

CREATE TABLE `tb_mempelai_test` (
  `ID_Mempelai` varchar(256) NOT NULL,
  `ID_Akun` varchar(256) NOT NULL,
  `Nama_MPria` varchar(50) NOT NULL,
  `Nama_MWanita` varchar(50) NOT NULL,
  `NoHp_MPria` varchar(15) NOT NULL,
  `NoHp_MWanita` varchar(15) NOT NULL,
  `Alamat_MPria` varchar(15) NOT NULL,
  `Alamat_MWanita` varchar(15) NOT NULL,
  `Panggilan_MPria` varchar(15) NOT NULL,
  `Panggilan_MWanita` varchar(15) NOT NULL,
  `NamaOrtu_Ayah_MPria` varchar(50) NOT NULL,
  `NamaOrtu_Ibu_MPria` varchar(50) NOT NULL,
  `NamaOrtu_Ayah_MWanita` varchar(50) NOT NULL,
  `NamaOrtu_Ibu_MWanita` varchar(50) NOT NULL,
  `Foto_MPria` text NOT NULL,
  `Foto_MWanita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mempelai_test`
--

INSERT INTO `tb_mempelai_test` (`ID_Mempelai`, `ID_Akun`, `Nama_MPria`, `Nama_MWanita`, `NoHp_MPria`, `NoHp_MWanita`, `Alamat_MPria`, `Alamat_MWanita`, `Panggilan_MPria`, `Panggilan_MWanita`, `NamaOrtu_Ayah_MPria`, `NamaOrtu_Ibu_MPria`, `NamaOrtu_Ayah_MWanita`, `NamaOrtu_Ibu_MWanita`, `Foto_MPria`, `Foto_MWanita`) VALUES
('MPL1', 'AKN1', 'Andra', 'Ghea', '088', '011', 'Medan', 'Rengat', 'Andra Panggilan', 'Ghea Panggilan', 'Lawali', 'Rani', 'Rudi', 'Maryam', 'default.jpg', 'default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_undangan`
--

CREATE TABLE `tb_undangan` (
  `ID_Undangan` varchar(256) NOT NULL,
  `ID_Mempelai` varchar(256) NOT NULL,
  `ID_Acara` varchar(256) NOT NULL,
  `ID_Kategori` varchar(10) NOT NULL,
  `ID_Tema` varchar(100) NOT NULL,
  `ID_Akun` varchar(256) NOT NULL,
  `tgl_buatakun` datetime NOT NULL,
  `tgl_selesaiakun` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_undangan`
--

INSERT INTO `tb_undangan` (`ID_Undangan`, `ID_Mempelai`, `ID_Acara`, `ID_Kategori`, `ID_Tema`, `ID_Akun`, `tgl_buatakun`, `tgl_selesaiakun`) VALUES
('UND1', 'MPL1', 'ACR1', 'KTG1', 'THM1', 'AKN1', '2021-04-03 18:55:37', '2021-04-03 18:55:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `thema`
--

CREATE TABLE `thema` (
  `id_thema` varchar(100) NOT NULL,
  `nama_thema` varchar(50) NOT NULL,
  `view_thema` varchar(50) NOT NULL,
  `status_thema` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `thema`
--

INSERT INTO `thema` (`id_thema`, `nama_thema`, `view_thema`, `status_thema`) VALUES
('THM1', 'butterfly.', 'butterfly.php', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_acara`
--
ALTER TABLE `tb_acara`
  ADD PRIMARY KEY (`ID_Acara`),
  ADD KEY `ID_Acara` (`ID_Acara`);

--
-- Indeks untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`ID_akun`);

--
-- Indeks untuk tabel `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`ID_Foto`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`ID_Kategori`);

--
-- Indeks untuk tabel `tb_mempelai`
--
ALTER TABLE `tb_mempelai`
  ADD PRIMARY KEY (`ID_Mempelai`);

--
-- Indeks untuk tabel `tb_mempelai_test`
--
ALTER TABLE `tb_mempelai_test`
  ADD PRIMARY KEY (`ID_Mempelai`);

--
-- Indeks untuk tabel `tb_undangan`
--
ALTER TABLE `tb_undangan`
  ADD PRIMARY KEY (`ID_Undangan`);

--
-- Indeks untuk tabel `thema`
--
ALTER TABLE `thema`
  ADD PRIMARY KEY (`id_thema`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `ID_Foto` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
