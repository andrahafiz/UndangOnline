-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2021 pada 11.00
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
  `TglAkad` date DEFAULT NULL,
  `WaktuMulaiAkad` time DEFAULT NULL,
  `WaktuSelesaiAkad` time DEFAULT NULL,
  `TempatAkad` varchar(150) DEFAULT NULL,
  `AlamatAkad` text DEFAULT NULL,
  `TglResepsi` date DEFAULT NULL,
  `WaktuMulaiResepsi` time DEFAULT NULL,
  `WaktuSelesaiResepsi` time DEFAULT NULL,
  `TempatResepsi` varchar(150) DEFAULT NULL,
  `AlamatResepsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_acara`
--

INSERT INTO `tb_acara` (`ID_Acara`, `TglAkad`, `WaktuMulaiAkad`, `WaktuSelesaiAkad`, `TempatAkad`, `AlamatAkad`, `TglResepsi`, `WaktuMulaiResepsi`, `WaktuSelesaiResepsi`, `TempatResepsi`, `AlamatResepsi`) VALUES
('ACR1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `ID_Admin` varchar(256) NOT NULL,
  `Username_Admin` varchar(100) NOT NULL,
  `Password_Admin` varchar(256) NOT NULL,
  `Status_Admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akun`
--

CREATE TABLE `tb_akun` (
  `ID_akun` varchar(256) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email_akun` varchar(100) NOT NULL,
  `NoHp_akun` varchar(50) NOT NULL,
  `Password_akun` varchar(256) NOT NULL,
  `Created_akun` int(11) NOT NULL,
  `Status_akun` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_akun`
--

INSERT INTO `tb_akun` (`ID_akun`, `Username`, `Email_akun`, `NoHp_akun`, `Password_akun`, `Created_akun`, `Status_akun`) VALUES
('AKN1', 'Andra Hafiz', 'asd@gmail', '082276853382', '$2y$10$EjkyNFYFZKtPiEhlU0nKJ.Pc.y.i/Df4z0UUNs4dO.XpUAf6KvlPy', 1618680851, '1');

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
  `Nama_MPria` varchar(50) DEFAULT NULL,
  `Nama_MWanita` varchar(50) DEFAULT NULL,
  `NoHp_MPria` varchar(15) DEFAULT NULL,
  `NoHp_MWanita` varchar(15) DEFAULT NULL,
  `Alamat_MPria` varchar(15) DEFAULT NULL,
  `Alamat_MWanita` varchar(15) DEFAULT NULL,
  `Panggilan_MPria` varchar(15) DEFAULT NULL,
  `Panggilan_MWanita` varchar(15) DEFAULT NULL,
  `NamaOrtu_Ayah_MPria` varchar(50) DEFAULT NULL,
  `NamaOrtu_Ibu_MPria` varchar(50) DEFAULT NULL,
  `NamaOrtu_Ayah_MWanita` varchar(50) DEFAULT NULL,
  `NamaOrtu_Ibu_MWanita` varchar(50) DEFAULT NULL,
  `Foto_MPria` text DEFAULT NULL,
  `Foto_MWanita` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_mempelai`
--

INSERT INTO `tb_mempelai` (`ID_Mempelai`, `Nama_MPria`, `Nama_MWanita`, `NoHp_MPria`, `NoHp_MWanita`, `Alamat_MPria`, `Alamat_MWanita`, `Panggilan_MPria`, `Panggilan_MWanita`, `NamaOrtu_Ayah_MPria`, `NamaOrtu_Ibu_MPria`, `NamaOrtu_Ayah_MWanita`, `NamaOrtu_Ibu_MWanita`, `Foto_MPria`, `Foto_MWanita`) VALUES
('MPL1', 'asd', 'asd', '123', '123', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'foto_pria.jpg', 'foto_cewek.jpg');

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
-- Struktur dari tabel `tb_tamu`
--

CREATE TABLE `tb_tamu` (
  `ID_TamuUndangan` varchar(256) NOT NULL,
  `ID_Undangan` varchar(256) NOT NULL,
  `Nama_Tamu` varchar(150) NOT NULL,
  `Wa_Tamu` varchar(15) DEFAULT NULL,
  `Email_Tamu` varchar(100) DEFAULT NULL,
  `UcapanSelamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tamu`
--

INSERT INTO `tb_tamu` (`ID_TamuUndangan`, `ID_Undangan`, `Nama_Tamu`, `Wa_Tamu`, `Email_Tamu`, `UcapanSelamat`) VALUES
('TMU1', 'UND1', 'Kom', '123', 'kom@gmail.com', 'kosong');

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
  `tgl_buatakun` int(11) NOT NULL,
  `tgl_selesaiakun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_undangan`
--

INSERT INTO `tb_undangan` (`ID_Undangan`, `ID_Mempelai`, `ID_Acara`, `ID_Kategori`, `ID_Tema`, `ID_Akun`, `tgl_buatakun`, `tgl_selesaiakun`) VALUES
('UND1', 'MPL1', 'ACR1', 'KTG1', 'THM1', 'AKN1', 1618680851, 1619285651);

-- --------------------------------------------------------

--
-- Struktur dari tabel `thema`
--

CREATE TABLE `thema` (
  `id_thema` varchar(100) NOT NULL,
  `nama_thema` varchar(50) NOT NULL,
  `view_thema` varchar(50) DEFAULT NULL,
  `status_thema` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `thema`
--

INSERT INTO `thema` (`id_thema`, `nama_thema`, `view_thema`, `status_thema`) VALUES
('asd', 'asd', '', 'a'),
('asdasd', 'asd', '', 'asd'),
('asdd', '', '', ''),
('S', 'ASD', NULL, 'ASD'),
('THM1', 'butterfly.', 'butterfly.php', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `token`
--

CREATE TABLE `token` (
  `idtoken` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_acara`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_acara` (
`ID_Undangan` varchar(256)
,`ID_akun` varchar(256)
,`ID_Acara` varchar(256)
,`TglAkad` date
,`WaktuMulaiAkad` time
,`WaktuSelesaiAkad` time
,`TempatAkad` varchar(150)
,`AlamatAkad` text
,`TglResepsi` date
,`WaktuMulaiResepsi` time
,`WaktuSelesaiResepsi` time
,`TempatResepsi` varchar(150)
,`AlamatResepsi` text
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_all`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_all` (
`ID_Undangan` varchar(256)
,`ID_akun` varchar(256)
,`Username` varchar(100)
,`Email_akun` varchar(100)
,`NoHp_akun` varchar(50)
,`Password_akun` varchar(256)
,`Created_akun` int(11)
,`Status_akun` varchar(10)
,`ID_Acara` varchar(256)
,`TglAkad` date
,`WaktuMulaiAkad` time
,`WaktuSelesaiAkad` time
,`TempatAkad` varchar(150)
,`AlamatAkad` text
,`TglResepsi` date
,`WaktuMulaiResepsi` time
,`WaktuSelesaiResepsi` time
,`TempatResepsi` varchar(150)
,`AlamatResepsi` text
,`ID_Mempelai` varchar(256)
,`Nama_MPria` varchar(50)
,`Nama_MWanita` varchar(50)
,`NoHp_MPria` varchar(15)
,`NoHp_MWanita` varchar(15)
,`Alamat_MPria` varchar(15)
,`Alamat_MWanita` varchar(15)
,`Panggilan_MPria` varchar(15)
,`Panggilan_MWanita` varchar(15)
,`NamaOrtu_Ayah_MPria` varchar(50)
,`NamaOrtu_Ibu_MPria` varchar(50)
,`NamaOrtu_Ayah_MWanita` varchar(50)
,`NamaOrtu_Ibu_MWanita` varchar(50)
,`Foto_MPria` text
,`Foto_MWanita` text
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_mempelai`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_mempelai` (
`ID_Undangan` varchar(256)
,`ID_akun` varchar(256)
,`ID_Mempelai` varchar(256)
,`Nama_MPria` varchar(50)
,`Nama_MWanita` varchar(50)
,`NoHp_MPria` varchar(15)
,`NoHp_MWanita` varchar(15)
,`Alamat_MPria` varchar(15)
,`Alamat_MWanita` varchar(15)
,`Panggilan_MPria` varchar(15)
,`Panggilan_MWanita` varchar(15)
,`NamaOrtu_Ayah_MPria` varchar(50)
,`NamaOrtu_Ibu_MPria` varchar(50)
,`NamaOrtu_Ayah_MWanita` varchar(50)
,`NamaOrtu_Ibu_MWanita` varchar(50)
,`Foto_MPria` text
,`Foto_MWanita` text
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_acara`
--
DROP TABLE IF EXISTS `view_acara`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_acara`  AS SELECT `tb_undangan`.`ID_Undangan` AS `ID_Undangan`, `tb_akun`.`ID_akun` AS `ID_akun`, `tb_acara`.`ID_Acara` AS `ID_Acara`, `tb_acara`.`TglAkad` AS `TglAkad`, `tb_acara`.`WaktuMulaiAkad` AS `WaktuMulaiAkad`, `tb_acara`.`WaktuSelesaiAkad` AS `WaktuSelesaiAkad`, `tb_acara`.`TempatAkad` AS `TempatAkad`, `tb_acara`.`AlamatAkad` AS `AlamatAkad`, `tb_acara`.`TglResepsi` AS `TglResepsi`, `tb_acara`.`WaktuMulaiResepsi` AS `WaktuMulaiResepsi`, `tb_acara`.`WaktuSelesaiResepsi` AS `WaktuSelesaiResepsi`, `tb_acara`.`TempatResepsi` AS `TempatResepsi`, `tb_acara`.`AlamatResepsi` AS `AlamatResepsi` FROM ((`tb_undangan` join `tb_acara`) join `tb_akun`) WHERE `tb_undangan`.`ID_Acara` = `tb_acara`.`ID_Acara` AND `tb_undangan`.`ID_Akun` = `tb_akun`.`ID_akun` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_all`
--
DROP TABLE IF EXISTS `view_all`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_all`  AS SELECT `tb_undangan`.`ID_Undangan` AS `ID_Undangan`, `tb_akun`.`ID_akun` AS `ID_akun`, `tb_akun`.`Username` AS `Username`, `tb_akun`.`Email_akun` AS `Email_akun`, `tb_akun`.`NoHp_akun` AS `NoHp_akun`, `tb_akun`.`Password_akun` AS `Password_akun`, `tb_akun`.`Created_akun` AS `Created_akun`, `tb_akun`.`Status_akun` AS `Status_akun`, `tb_acara`.`ID_Acara` AS `ID_Acara`, `tb_acara`.`TglAkad` AS `TglAkad`, `tb_acara`.`WaktuMulaiAkad` AS `WaktuMulaiAkad`, `tb_acara`.`WaktuSelesaiAkad` AS `WaktuSelesaiAkad`, `tb_acara`.`TempatAkad` AS `TempatAkad`, `tb_acara`.`AlamatAkad` AS `AlamatAkad`, `tb_acara`.`TglResepsi` AS `TglResepsi`, `tb_acara`.`WaktuMulaiResepsi` AS `WaktuMulaiResepsi`, `tb_acara`.`WaktuSelesaiResepsi` AS `WaktuSelesaiResepsi`, `tb_acara`.`TempatResepsi` AS `TempatResepsi`, `tb_acara`.`AlamatResepsi` AS `AlamatResepsi`, `tb_mempelai`.`ID_Mempelai` AS `ID_Mempelai`, `tb_mempelai`.`Nama_MPria` AS `Nama_MPria`, `tb_mempelai`.`Nama_MWanita` AS `Nama_MWanita`, `tb_mempelai`.`NoHp_MPria` AS `NoHp_MPria`, `tb_mempelai`.`NoHp_MWanita` AS `NoHp_MWanita`, `tb_mempelai`.`Alamat_MPria` AS `Alamat_MPria`, `tb_mempelai`.`Alamat_MWanita` AS `Alamat_MWanita`, `tb_mempelai`.`Panggilan_MPria` AS `Panggilan_MPria`, `tb_mempelai`.`Panggilan_MWanita` AS `Panggilan_MWanita`, `tb_mempelai`.`NamaOrtu_Ayah_MPria` AS `NamaOrtu_Ayah_MPria`, `tb_mempelai`.`NamaOrtu_Ibu_MPria` AS `NamaOrtu_Ibu_MPria`, `tb_mempelai`.`NamaOrtu_Ayah_MWanita` AS `NamaOrtu_Ayah_MWanita`, `tb_mempelai`.`NamaOrtu_Ibu_MWanita` AS `NamaOrtu_Ibu_MWanita`, `tb_mempelai`.`Foto_MPria` AS `Foto_MPria`, `tb_mempelai`.`Foto_MWanita` AS `Foto_MWanita` FROM (((`tb_undangan` join `tb_acara`) join `tb_akun`) join `tb_mempelai`) WHERE `tb_undangan`.`ID_Acara` = `tb_acara`.`ID_Acara` AND `tb_undangan`.`ID_Akun` = `tb_akun`.`ID_akun` AND `tb_undangan`.`ID_Mempelai` = `tb_mempelai`.`ID_Mempelai` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_mempelai`
--
DROP TABLE IF EXISTS `view_mempelai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_mempelai`  AS SELECT `tb_undangan`.`ID_Undangan` AS `ID_Undangan`, `tb_akun`.`ID_akun` AS `ID_akun`, `tb_mempelai`.`ID_Mempelai` AS `ID_Mempelai`, `tb_mempelai`.`Nama_MPria` AS `Nama_MPria`, `tb_mempelai`.`Nama_MWanita` AS `Nama_MWanita`, `tb_mempelai`.`NoHp_MPria` AS `NoHp_MPria`, `tb_mempelai`.`NoHp_MWanita` AS `NoHp_MWanita`, `tb_mempelai`.`Alamat_MPria` AS `Alamat_MPria`, `tb_mempelai`.`Alamat_MWanita` AS `Alamat_MWanita`, `tb_mempelai`.`Panggilan_MPria` AS `Panggilan_MPria`, `tb_mempelai`.`Panggilan_MWanita` AS `Panggilan_MWanita`, `tb_mempelai`.`NamaOrtu_Ayah_MPria` AS `NamaOrtu_Ayah_MPria`, `tb_mempelai`.`NamaOrtu_Ibu_MPria` AS `NamaOrtu_Ibu_MPria`, `tb_mempelai`.`NamaOrtu_Ayah_MWanita` AS `NamaOrtu_Ayah_MWanita`, `tb_mempelai`.`NamaOrtu_Ibu_MWanita` AS `NamaOrtu_Ibu_MWanita`, `tb_mempelai`.`Foto_MPria` AS `Foto_MPria`, `tb_mempelai`.`Foto_MWanita` AS `Foto_MWanita` FROM ((`tb_undangan` join `tb_mempelai`) join `tb_akun`) WHERE `tb_undangan`.`ID_Mempelai` = `tb_mempelai`.`ID_Mempelai` AND `tb_undangan`.`ID_Akun` = `tb_akun`.`ID_akun` ;

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
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`ID_Admin`);

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
-- Indeks untuk tabel `tb_tamu`
--
ALTER TABLE `tb_tamu`
  ADD PRIMARY KEY (`ID_TamuUndangan`);

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
-- Indeks untuk tabel `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`idtoken`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `ID_Foto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `token`
--
ALTER TABLE `token`
  MODIFY `idtoken` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
