-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2021 pada 18.25
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

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
('1164512009', 1000000, 'bank_transfer', '2021-05-15 22:53:38', 'bca', 'bca', 'https://app.sandbox.midtrans.com/snap/v1/transactions/ddbacda2-14a8-4f51-be97-d44719d3e71d/pdf', '201', ''),
('1367626161', 300000, 'bank_transfer', '2021-05-15 22:12:53', 'bca', 'bca', 'https://app.sandbox.midtrans.com/snap/v1/transactions/a0963cad-0874-4a27-8f88-4fb26f89fcc1/pdf', '201', ''),
('1493257444', 30000, 'bank_transfer', '2021-05-09 20:59:56', 'bca', 'bca', 'https://app.sandbox.midtrans.com/snap/v1/transactions/19727e89-5862-416d-940e-2b7390ed7d13/pdf', '201', ''),
('1672725878', 123, 'bank_transfer', '2021-05-15 22:32:42', 'bca', 'bca', 'https://app.sandbox.midtrans.com/snap/v1/transactions/b629dce6-ca1a-43f8-8b6f-1214e38ae907/pdf', '201', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pembayaran_undangan`
--
ALTER TABLE `pembayaran_undangan`
  ADD PRIMARY KEY (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
