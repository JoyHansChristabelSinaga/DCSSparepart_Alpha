-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2024 pada 10.05
-- Versi server: 10.4.22-MariaDB-log
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparepart`
--

DELIMITER $$
--
-- Fungsi
--
CREATE DEFINER=`root`@`localhost` FUNCTION `addquantity` (`A` INT, `B` INT) RETURNS INT(11) BEGIN
return A + B;
end$$

CREATE DEFINER=`root`@`localhost` FUNCTION `takequantity` (`A` INT, `B` INT) RETURNS INT(11) BEGIN
return A - B;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `add`
--

CREATE TABLE `add` (
  `idadd` int(5) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Quantity_add` int(100) NOT NULL,
  `add_by` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `add`
--

INSERT INTO `add` (`idadd`, `Name`, `Quantity_add`, `add_by`, `created_at`, `updated_at`) VALUES
(3, 'Terminal AI Valmet', 4, 'Administrator', '2023-05-03 22:34:21', '2023-05-03 22:34:21'),
(4, 'Terminal AO Valmet', 5, 'Administrator', '2023-05-07 14:24:59', '2023-05-07 14:24:59'),
(5, 'IBC', 5, 'Administrator', '2023-05-08 21:52:40', '2023-05-08 21:52:40');

--
-- Trigger `add`
--
DELIMITER $$
CREATE TRIGGER `adding` AFTER INSERT ON `add` FOR EACH ROW BEGIN

update spare
set spare.Quantity = addquantity(
    spare.Quantity,
    New.Quantity_add)
where Name = new.Name;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `idlogin` int(5) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`idlogin`, `name`, `UserName`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', 'Log In', '2023-02-03 11:14:28', '2023-02-03 11:14:28'),
(2, 'Administrator', 'admin', 'Log Out', '2023-02-03 12:20:50', '2023-02-03 12:20:50'),
(3, 'Administrator', 'admin', 'Log In', '2023-02-03 12:20:56', '2023-02-03 12:20:56'),
(4, 'Administrator', 'admin', 'Log Out', '2023-02-03 12:21:18', '2023-02-03 12:21:18'),
(5, 'Pak Jokowi', 'jokowi', 'Log In', '2023-02-03 12:21:25', '2023-02-03 12:21:25'),
(6, 'Pak Jokowi', 'jokowi', 'Log Out', '2023-02-03 12:22:06', '2023-02-03 12:22:06'),
(11, 'Administrator', 'admin', 'Log In', '2023-05-03 23:22:21', '2023-05-03 23:22:21'),
(12, 'Administrator', 'admin', 'Log In', '2023-05-07 14:23:45', '2023-05-07 14:23:45'),
(13, 'Administrator', 'admin', 'Log Out', '2023-05-07 14:27:12', '2023-05-07 14:27:12'),
(14, 'Administrator', 'admin', 'Log In', '2023-05-07 14:27:51', '2023-05-07 14:27:51'),
(15, 'Administrator', 'admin', 'Log Out', '2023-05-07 14:28:18', '2023-05-07 14:28:18'),
(16, 'Administrator', 'admin', 'Log In', '2023-05-07 14:28:42', '2023-05-07 14:28:42'),
(17, 'Administrator', 'admin', 'Log In', '2023-05-08 10:35:21', '2023-05-08 10:35:21'),
(18, 'Administrator', 'admin', 'Log Out', '2023-05-08 10:37:00', '2023-05-08 10:37:00'),
(19, 'dummy user 1', 'dummyuser', 'Log In', '2023-05-08 10:37:12', '2023-05-08 10:37:12'),
(20, 'Administrator', 'admin', 'Log In', '2023-05-08 11:42:51', '2023-05-08 11:42:51'),
(21, 'Administrator', 'admin', 'Log Out', '2023-05-08 12:15:23', '2023-05-08 12:15:23'),
(22, 'Administrator', 'admin', 'Log In', '2023-05-08 12:15:36', '2023-05-08 12:15:36'),
(23, 'Administrator', 'admin', 'Log Out', '2023-05-08 12:16:02', '2023-05-08 12:16:02'),
(24, 'Administrator', 'admin', 'Log In', '2023-05-08 12:24:03', '2023-05-08 12:24:03'),
(25, 'Administrator', 'admin', 'Log Out', '2023-05-08 12:24:52', '2023-05-08 12:24:52'),
(26, 'Administrator', 'admin', 'Log In', '2023-05-08 12:25:05', '2023-05-08 12:25:05'),
(27, 'Administrator', 'admin', 'Log Out', '2023-05-08 12:25:20', '2023-05-08 12:25:20'),
(28, 'Administrator', 'admin', 'Log In', '2023-05-08 12:25:32', '2023-05-08 12:25:32'),
(29, 'Administrator', 'admin', 'Log Out', '2023-05-08 12:31:09', '2023-05-08 12:31:09'),
(30, 'dummy user 1', 'dummyuser', 'Log In', '2023-05-08 12:31:20', '2023-05-08 12:31:20'),
(31, 'Administrator', 'admin', 'Log In', '2023-05-08 21:50:28', '2023-05-08 21:50:28'),
(32, 'Administrator', 'admin', 'Log Out', '2023-05-08 21:54:17', '2023-05-08 21:54:17'),
(33, 'Administrator', 'admin', 'Log In', '2023-05-08 21:54:57', '2023-05-08 21:54:57'),
(34, 'Administrator', 'admin', 'Log In', '2023-05-08 21:58:00', '2023-05-08 21:58:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-10-20-044604', 'App\\Database\\Migrations\\User', 'default', 'App', 1675444451, 1),
(2, '2022-10-20-044704', 'App\\Database\\Migrations\\Sparepart', 'default', 'App', 1675444451, 1),
(3, '2023-01-24-163338', 'App\\Database\\Migrations\\Login', 'default', 'App', 1675444451, 1),
(4, '2023-01-24-202557', 'App\\Database\\Migrations\\Add', 'default', 'App', 1675444452, 1),
(5, '2023-01-24-202601', 'App\\Database\\Migrations\\Take', 'default', 'App', 1675444452, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spare`
--

CREATE TABLE `spare` (
  `id` int(5) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `MC` varchar(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Note` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `spare`
--

INSERT INTO `spare` (`id`, `Name`, `MC`, `Quantity`, `Location`, `Note`, `created_at`, `updated_at`) VALUES
(2, 'Terminal AI Valmet', '933974', 15, 'B3', '-', '2023-05-03 22:34:06', '2023-05-03 22:34:06'),
(3, 'Terminal AO Valmet', '545648', 15, 'B3', '-', '2023-05-07 14:24:37', '2023-05-07 14:24:37'),
(4, 'Terminal DI Valmet', '545648', 15, 'B3', '-', '2023-05-07 14:24:37', '2023-05-07 14:24:37'),
(5, 'Terminal DO Valmet', '545648', 9, 'B3', '-', '2023-05-07 14:24:37', '2023-05-07 14:24:37'),
(6, 'IBC', '545648', 20, 'B3', '-', '2023-05-07 14:24:37', '2023-05-07 14:24:37'),
(7, 'Module AI8H', '545648', 15, 'B3', '-', '2023-05-07 14:24:37', '2023-05-07 14:24:37'),
(8, 'Module AI8CN', '545648', 15, 'B3', '-', '2023-05-07 14:24:37', '2023-05-07 14:24:37'),
(9, 'Module DI16P', '545648', 15, 'B3', '-', '2023-05-07 14:24:37', '2023-05-07 14:24:37'),
(10, 'Module DO16P', '545648', 15, 'B3', '-', '2023-05-07 14:24:37', '2023-05-07 14:24:37'),
(11, 'Managed Switch', '545648', 15, 'B3', '-', '2023-05-07 14:24:37', '2023-05-07 14:24:37'),
(12, 'Unmanaged Switch 8 Port', '545648', 15, 'B3', '-', '2023-05-07 14:24:37', '2023-05-07 14:24:37'),
(13, 'Unmanaged Switch with FO Single', '545648', 15, 'B3', '-', '2023-05-07 14:24:37', '2023-05-07 14:24:37'),
(14, 'EDS-208A Redundant', '545648', 15, 'B3', '-', '2023-05-07 14:24:37', '2023-05-07 14:24:37'),
(15, 'Quint Diode 20A', '545648', 15, 'B3', '-', '2023-05-07 14:24:37', '2023-05-07 14:24:37'),
(16, 'Quint Diode 40A', '545648', 15, 'B3', '-', '2023-05-07 14:24:37', '2023-05-07 14:24:37'),
(17, 'Quint Power 20A', '545648', 15, 'B3', '-', '2023-05-07 14:24:37', '2023-05-07 14:24:37'),
(18, 'Quint Power 40A', '545648', 15, 'B3', '-', '2023-05-07 14:24:37', '2023-05-07 14:24:37'),
(19, 'qwerty', '177013', 45, 'A3', 'Test', '2023-05-08 21:52:20', '2023-05-08 21:52:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `take`
--

CREATE TABLE `take` (
  `idtake` int(5) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Quantity_take` int(100) NOT NULL,
  `take_by` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `take`
--

INSERT INTO `take` (`idtake`, `Name`, `Quantity_take`, `take_by`, `created_at`, `updated_at`) VALUES
(5, 'Dummy_SparePart', 2, 'Administrator', '2023-05-03 22:35:44', '2023-05-03 22:35:44'),
(6, 'Terminal AI Valmet', 2, 'Administrator', '2023-05-03 23:23:55', '2023-05-03 23:23:55'),
(7, 'Terminal AI Valmet', 5, 'Administrator', '2023-05-07 14:25:10', '2023-05-07 14:25:10'),
(8, 'Terminal DO Valmet', 6, 'Administrator', '2023-05-08 21:52:56', '2023-05-08 21:52:56');

--
-- Trigger `take`
--
DELIMITER $$
CREATE TRIGGER `taking` AFTER INSERT ON `take` FOR EACH ROW BEGIN

update spare
set spare.Quantity = takequantity(
    spare.Quantity,
    New.Quantity_take)
where Name = new.Name;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `created_at`, `updated_at`) VALUES
('admin', '$2y$10$.Ev1AhZYyZZ19HsmJKlCA.QTcIT1PkDNPD0iUgVynMLp//U7jmG.K', 'Administrator', '2023-05-08 21:54:44', '2023-05-08 21:54:44'),
('dummyuser', '$2y$10$tbbB6IeEEz3Yhcp.owKzjeyNzlIzUQxdHd9FwaUWkzdciAjfzmg3y', 'dummy user 1', '2023-05-08 10:36:53', '2023-05-08 10:36:53');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `add`
--
ALTER TABLE `add`
  ADD PRIMARY KEY (`idadd`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idlogin`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `spare`
--
ALTER TABLE `spare`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `take`
--
ALTER TABLE `take`
  ADD PRIMARY KEY (`idtake`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `add`
--
ALTER TABLE `add`
  MODIFY `idadd` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `idlogin` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `spare`
--
ALTER TABLE `spare`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `take`
--
ALTER TABLE `take`
  MODIFY `idtake` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
