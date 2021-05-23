-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2021 pada 10.04
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
-- Struktur dari tabel `pembayaran_undangan`
--

CREATE TABLE `pembayaran_undangan` (
  `order_id` varchar(20) NOT NULL,
  `gross_amount` int(13) NOT NULL,
  `payment_type` varchar(15) NOT NULL,
  `transaction_time` varchar(19) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `va_numbers` varchar(30) NOT NULL,
  `pdf_url` text NOT NULL,
  `status_code` char(15) NOT NULL,
  `kode_undangan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran_undangan`
--

INSERT INTO `pembayaran_undangan` (`order_id`, `gross_amount`, `payment_type`, `transaction_time`, `bank`, `va_numbers`, `pdf_url`, `status_code`, `kode_undangan`) VALUES
('1164512009', 1000000, 'bank_transfer', '2021-05-15 22:53:38', 'bca', 'bca', 'https://app.sandbox.midtrans.com/snap/v1/transactions/ddbacda2-14a8-4f51-be97-d44719d3e71d/pdf', '1', ''),
('1367626161', 300000, 'bank_transfer', '2021-05-15 22:12:53', 'bca', 'bca', 'https://app.sandbox.midtrans.com/snap/v1/transactions/a0963cad-0874-4a27-8f88-4fb26f89fcc1/pdf', '201', ''),
('1493257444', 30000, 'bank_transfer', '2021-05-09 20:59:56', 'bca', 'bca', 'https://app.sandbox.midtrans.com/snap/v1/transactions/19727e89-5862-416d-940e-2b7390ed7d13/pdf', '201', ''),
('1672725878', 123, 'bank_transfer', '2021-05-15 22:32:42', 'bca', 'bca', 'https://app.sandbox.midtrans.com/snap/v1/transactions/b629dce6-ca1a-43f8-8b6f-1214e38ae907/pdf', '201', ''),
('1678796896', 10000, 'bank_transfer', '2021-05-15 23:27:16', 'bca', 'bca', 'https://app.sandbox.midtrans.com/snap/v1/transactions/5a834f3a-270e-4f45-ac9f-26273a1de806/pdf', '201', '');

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
('ACR1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ACR2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`ID_Admin`, `Username_Admin`, `Password_Admin`, `Status_Admin`) VALUES
('ADM1', 'asd', 'asd', 1);

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
('AKN1', 'Andra Hafiz', 'asd@gmail', '082276853382', '$2y$10$EjkyNFYFZKtPiEhlU0nKJ.Pc.y.i/Df4z0UUNs4dO.XpUAf6KvlPy', 1618680851, '1'),
('AKN2', 'zxc', 'zxc@gmail.com', '123', '$2y$10$E68AYEYM1rC0y3SYrNkiOOoL9SEs35RVFB2fD.jCU12QuZ7mfYg5G', 1621157202, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `ID_Media` int(11) NOT NULL,
  `ID_Undangan` text NOT NULL,
  `Judul_Media` varchar(100) NOT NULL,
  `Link_Media` text DEFAULT NULL,
  `Tipe_Media` enum('Foto','Video') DEFAULT NULL,
  `Size_Media` int(11) DEFAULT NULL,
  `Tglupload_Media` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Status_Media` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_gallery`
--

INSERT INTO `tb_gallery` (`ID_Media`, `ID_Undangan`, `Judul_Media`, `Link_Media`, `Tipe_Media`, `Size_Media`, `Tglupload_Media`, `Status_Media`) VALUES
(27, 'UND1', 'Gambar 1', 'gambar1.jpg', 'Foto', 12, '2021-05-17 18:35:28', '1'),
(28, 'UND1', 'Gambar 2', 'gambar2.jpg', 'Foto', 12, '2021-05-17 18:35:28', '1'),
(29, 'UND2', 'Gambar 2', 'gambar2.jpg', 'Foto', 12, '2021-05-17 18:35:28', '1'),
(35, 'UND1', 'asd', 'https://www.youtube.com/watch?v=iOeDvImB8wI&amp;t=350s', 'Video', NULL, '2021-05-18 07:22:09', '1'),
(38, 'UND1', '', 'NoobeID.png', 'Foto', NULL, '2021-05-22 05:36:42', '0'),
(39, 'UND1', '', 'NoobeID2.png', 'Foto', NULL, '2021-05-22 05:36:42', '0'),
(40, 'UND1', '', 'NoobeID3.png', 'Foto', NULL, '2021-05-22 05:36:42', '0'),
(41, 'UND1', '', 'NoobeID3.png', 'Foto', NULL, '2021-05-22 13:58:43', '0'),
(42, 'UND1', '', 'NoobeID2.png', 'Foto', NULL, '2021-05-22 13:58:43', '0'),
(43, 'UND1', '', 'NoobeID.png', 'Foto', NULL, '2021-05-22 13:58:44', '0');

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
('MPL1', 'zxc', 'xcz', '123', '123', 'zxc', 'cxz', 'zxc', 'zxc', 'xcz', 'xcz', 'zxc', 'zxc', 'KTP_AndraHotmartuaAlHafiz.JPG', 'logo_usu.png'),
('MPL2', 'asd', 'zx', '123', '123', 'zxc', 'zxc', 'zxc', 'zxc', 'zxc', 'zx', 'zxc', 'zx', 'NoobeID31.png', 'NoobeID21.png');

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
('TMU01', 'UND3', 'Wilson', '02532126148', 'king.chase@example.net', 'Velit nihil quasi nobis dolorem perferendis. Eos sunt exercitationem repudiandae libero a.'),
('TMU02', 'UND1', 'Dale', '1-566-070-8458x', 'laurence08@example.net', 'Error dolor omnis numquam. Quae est non quaerat. Id aut quasi non voluptatem aut enim alias.'),
('TMU03', 'UND1', 'Shea', '736.886.4532', 'hills.elinor@example.com', 'Excepturi ipsam enim autem et repellendus. Explicabo consectetur libero corporis et aliquid.'),
('TMU06', 'UND1', 'Gina', '(799)115-4459x2', 'cummerata.alena@example.org', 'Rem consequatur optio quisquam explicabo totam porro voluptates. Dolore sint voluptas aliquid.'),
('TMU09', 'UND1', 'Gilda', '646.128.1094x28', 'gaylord.brent@example.com', 'Repellat corporis eos culpa aut ipsa ut. Animi quis nobis veniam voluptatem quia ipsum.'),
('TMU1', 'UND1', 'Andra', '082276853382', 'andra18ti@mahasiswa.pcr.ac.id', 'Selamat'),
('TMU12', 'UND2', 'Mossie', '04460419649', 'fbailey@example.com', 'Officia iure rem et tempora fugit odio cum. Assumenda nihil sit iusto non ut.'),
('TMU15', 'UND2', 'Letitia', '(613)386-7030x2', 'irma.feest@example.com', 'Aliquid quos non enim nostrum. Aut quas voluptas et porro eos quo.'),
('TMU19', 'UND3', 'Ebba', '1-134-282-6590', 'smith.ruben@example.com', 'Occaecati quas dolore tenetur aliquid. Eius aut vel iusto vero ut. Deleniti qui non labore.'),
('TMU21', 'UND3', 'Ashlynn', '038-645-9326', 'wilderman.dawson@example.net', 'Assumenda nulla veniam explicabo numquam fugit. Ipsa quaerat dolorum cum iusto.'),
('TMU23', 'UND1', 'Anjali', '(599)882-5616', 'tlockman@example.org', 'Est facere et iure ut reprehenderit cumque. Tempora odit error aliquid.'),
('TMU29', 'UND1', 'Autumn', '335.513.8444x51', 'boyer.mitchel@example.com', 'Dolor vitae et aspernatur repellat. Consequuntur non sequi nesciunt unde. Quia rem hic dolorem non.'),
('TMU3', 'UND1', 'xzc', '21', 'qwe@gmail.com', 'kosong'),
('TMU30', 'UND3', 'Urban', '483.350.5882', 'welch.elvis@example.com', 'Sint dicta repellendus in nesciunt. Non repellendus et earum tempora dolores in.'),
('TMU33', 'UND3', 'Cory', '155-871-7947', 'boyle.saul@example.com', 'Quo quaerat quos quas enim. Sit est eum fuga id dignissimos harum quisquam.'),
('TMU38', 'UND3', 'Domenica', '09290939679', 'joelle87@example.org', 'Nisi rerum cum cupiditate. Accusamus excepturi dolor quis possimus ullam consequuntur.'),
('TMU41', 'UND1', 'Queenie', '762.080.8263', 'sonya18@example.org', 'Molestias repudiandae velit minus nulla. Autem ex quia ex voluptatibus.'),
('TMU43', 'UND3', 'Marley', '537-093-4692', 'lorine.raynor@example.net', 'Et veniam eius aut velit. Deleniti aut tempore error praesentium nemo. Unde incidunt id et aut est.'),
('TMU46', 'UND3', 'Maryjane', '(088)502-4445', 'malcolm61@example.com', 'Sit et corrupti est veritatis. Minima iste nesciunt facere. Quam dolorem voluptatem quo eveniet.'),
('TMU70', 'UND2', 'Alexandro', '06007347279', 'remington25@example.com', 'Dolores culpa tempora nobis neque. Perferendis id autem molestias et. Enim in a et eveniet modi.'),
('TMU72', 'UND2', 'Haven', '166.905.6443x35', 'martina28@example.org', 'Autem ea maxime iste. Autem quia autem rerum quidem quo.'),
('TMU73', 'UND2', 'Barton', '1-132-169-6630x', 'kendall59@example.org', 'Facilis sapiente labore magnam aut. Dolor ut at est enim est est porro ut. Et fugit aliquid optio.'),
('TMU75', 'UND2', 'Chanel', '1-335-453-9958', 'rachelle.mckenzie@example.org', 'Iste animi quaerat error sed est. Sed fuga quam nihil et ad. Culpa aut et a.'),
('TMU92', 'UND2', 'Chloe', '290.206.4776', 'ritchie.kylie@example.com', 'Perspiciatis et animi eos modi beatae. Ipsa non officia occaecati dolorem temporibus repellat.'),
('TMU93', 'UND1', 'asd', '', 'asd@gmail.com', 'kosong'),
('TMU94', 'UND1', 'zxc', '123', '', 'kosong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_testimoni`
--

CREATE TABLE `tb_testimoni` (
  `ID_Testiomoni` varchar(255) NOT NULL,
  `ID_Undangan` varchar(255) NOT NULL,
  `ID_Akun` varchar(255) NOT NULL,
  `Testimoni` text NOT NULL,
  `Tgl_Testimoni` int(11) NOT NULL,
  `Status_akun` enum('Posting','Non Aktif','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_testimoni`
--

INSERT INTO `tb_testimoni` (`ID_Testiomoni`, `ID_Undangan`, `ID_Akun`, `Testimoni`, `Tgl_Testimoni`, `Status_akun`) VALUES
('TSM1', 'UND1', 'AKN1', 'Website ini sangat mantab', 1618680851, 'Non Aktif');

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
('UND1', 'MPL1', 'ACR1', 'KTG1', 'THM1', 'AKN1', 1618680851, 1619285651),
('UND2', 'MPL2', 'ACR2', 'KTG1', 'THM1', 'AKN2', 1621157202, 1621762002),
('UND3', 'MPL2', 'ACR2', 'KTG1', 'THM2', 'AKN2', 1621157202, 1621762002),
('UND4', 'MPL2', 'ACR2', 'KTG1', 'THM4', 'AKN2', 1621157202, 1621762002),
('UND5', 'MPL1', 'ACR1', 'KTG1', 'THM4', 'AKN1', 1618680851, 1619285651),
('UND6', 'MPL2', 'ACR2', 'KTG1', 'THM4', 'AKN2', 1621157202, 1621762002),
('UND7', 'MPL1', 'ACR1', 'KTG1', 'THM2', 'AKN1', 1618680851, 1619285651),
('UND8', 'MPL1', 'ACR1', 'KTG1', 'THM3', 'AKN1', 1618680851, 1619285651);

-- --------------------------------------------------------

--
-- Struktur dari tabel `thema`
--

CREATE TABLE `thema` (
  `id_thema` varchar(100) NOT NULL,
  `nama_thema` varchar(50) NOT NULL,
  `view_thema` varchar(50) DEFAULT NULL,
  `image_thema` varchar(256) NOT NULL DEFAULT 'NoImage.png',
  `status_thema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `thema`
--

INSERT INTO `thema` (`id_thema`, `nama_thema`, `view_thema`, `image_thema`, `status_thema`) VALUES
('THM1', 'Butterfly ab', 'buterfly.php ab', 'tema-THM11.png', 0),
('THM2', 'tes', 'tes', 'tema-THM21.png', 1),
('THM3', 'asda', 'asda', 'NoImage.png', 1);

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
-- Indeks untuk tabel `pembayaran_undangan`
--
ALTER TABLE `pembayaran_undangan`
  ADD PRIMARY KEY (`order_id`);

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
  ADD PRIMARY KEY (`ID_Media`);

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
-- Indeks untuk tabel `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  ADD PRIMARY KEY (`ID_Testiomoni`);

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
  MODIFY `ID_Media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `token`
--
ALTER TABLE `token`
  MODIFY `idtoken` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
