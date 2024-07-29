-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jul 2024 pada 12.47
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookingkp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking_room`
--

CREATE TABLE `booking_room` (
  `id_booking` int(255) NOT NULL,
  `id_room` int(255) NOT NULL,
  `nama_pembooking` varchar(255) NOT NULL,
  `telp_pembooking` varchar(255) NOT NULL,
  `tgl_booking` datetime NOT NULL,
  `tgl_selesai` datetime NOT NULL,
  `unit_kerja` varchar(255) NOT NULL,
  `agenda_rapat` varchar(255) NOT NULL,
  `status_room` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `booking_room`
--

INSERT INTO `booking_room` (`id_booking`, `id_room`, `nama_pembooking`, `telp_pembooking`, `tgl_booking`, `tgl_selesai`, `unit_kerja`, `agenda_rapat`, `status_room`) VALUES
(10, 16, 'DISKOMINFO', '085659990094', '2024-07-31 17:45:00', '2024-08-01 18:00:00', 'DISKOMINFO KOTA SUKABUMI', 'SPBE', '3'),
(11, 16, 'DISKOMINFO', '085659990094', '2024-08-02 17:45:00', '2024-08-03 18:00:00', 'DISKOMINFO KOTA SUKABUMI', 'MANAJEMEN SPBE', '0'),
(12, 17, 'DISKOMINFO', '085659990094', '2024-08-02 17:45:00', '2024-08-03 18:00:00', 'DISKOMINFO KOTA SUKABUMI', 'AUDIT TIK', '1'),
(13, 18, 'DISKOMINFO', '085659990094', '2024-08-01 17:45:00', '2024-08-02 18:45:00', 'DISKOMINFO KOTA SUKABUMI', 'MANAJEMEN ASN', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `room`
--

CREATE TABLE `room` (
  `id_room` int(255) NOT NULL,
  `nama_room` varchar(255) NOT NULL,
  `detail_room` varchar(255) NOT NULL,
  `kapasitas_room` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `room`
--

INSERT INTO `room` (`id_room`, `nama_room`, `detail_room`, `kapasitas_room`, `gambar`) VALUES
(16, 'Santika Sukabumi', 'TV kabel berlayar datar, meja kerja, kulkas, AC, WiFi, Ketel listrik.', '35 Orang', 'image/room/be2c89a015aaf97ad82642b420ff400dsantika.jpg'),
(17, 'Balcony Sukabumi', 'Ruang rapat, Fasilitas rapat, Fotocopy, Proyektor, Teater/auditorium.', '50 Orang', 'image/room/f39ef73c12685bd2dc28b0c717e1b3a9balcony.jpg'),
(18, 'Bountie Sukabumi', 'Projector, Screen, Flip chart, Wireless Microphone, Notepad, Pencil and Mineral Water, Wifi, AC.', '20 Orang', 'image/room/31c836c89a3dec2b8bb0ac7172d995e3bountie.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking_room`
--
ALTER TABLE `booking_room`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indeks untuk tabel `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id_room`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking_room`
--
ALTER TABLE `booking_room`
  MODIFY `id_booking` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `room`
--
ALTER TABLE `room`
  MODIFY `id_room` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
