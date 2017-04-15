-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 21 Sep 2015 pada 20.36
-- Versi Server: 5.5.34
-- Versi PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `dash`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adum`
--

CREATE TABLE IF NOT EXISTS `adum` (
  `idAdum` int(11) NOT NULL AUTO_INCREMENT,
  `tglAdum` date NOT NULL,
  `kali1Adum` int(11) NOT NULL,
  `kali2Adum` int(11) NOT NULL,
  `Tkali1Adum` int(11) NOT NULL,
  `Tkali2Adum` int(11) NOT NULL,
  PRIMARY KEY (`idAdum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=509 ;

--
-- Dumping data untuk tabel `adum`
--

INSERT INTO `adum` (`idAdum`, `tglAdum`, `kali1Adum`, `kali2Adum`, `Tkali1Adum`, `Tkali2Adum`) VALUES
(507, '2015-08-03', 25, 26, 50, 50),
(508, '2015-08-02', 4, 7, 50, 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `da`
--

CREATE TABLE IF NOT EXISTS `da` (
  `idDa` int(11) NOT NULL AUTO_INCREMENT,
  `tglDa` date NOT NULL,
  `kaliDa` int(11) NOT NULL,
  `persenDa` double NOT NULL,
  `TkaliDa` int(11) NOT NULL,
  `TpersenDa` double NOT NULL,
  PRIMARY KEY (`idDa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=404 ;

--
-- Dumping data untuk tabel `da`
--

INSERT INTO `da` (`idDa`, `tglDa`, `kaliDa`, `persenDa`, `TkaliDa`, `TpersenDa`) VALUES
(402, '2015-08-04', 9, 86, 50, 50),
(403, '2015-08-05', 3, 90, 50, 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarso`
--

CREATE TABLE IF NOT EXISTS `daftarso` (
  `idSO` int(11) NOT NULL AUTO_INCREMENT,
  `jenisSO` varchar(50) NOT NULL,
  PRIMARY KEY (`idSO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `daftarso`
--

INSERT INTO `daftarso` (`idSO`, `jenisSO`) VALUES
(1, 'Total SO Open'),
(2, 'Total SO Close'),
(3, 'Total SO Cancel'),
(4, 'Total SO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataadum`
--

CREATE TABLE IF NOT EXISTS `dataadum` (
  `idData` int(11) NOT NULL AUTO_INCREMENT,
  `idKet` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`idData`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `dataadum`
--

INSERT INTO `dataadum` (`idData`, `idKet`, `nilai`, `tanggal`) VALUES
(1, 1, 25, '2015-08-02'),
(2, 2, 50, '2015-08-02'),
(3, 3, 26, '2015-08-02'),
(4, 4, 50, '2015-08-02'),
(5, 1, 4, '2015-08-03'),
(6, 2, 50, '2015-08-03'),
(7, 3, 7, '2015-08-03'),
(8, 4, 50, '2015-08-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datada`
--

CREATE TABLE IF NOT EXISTS `datada` (
  `idData` int(11) NOT NULL AUTO_INCREMENT,
  `idKet` int(11) NOT NULL,
  `nilai` double NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`idData`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `datada`
--

INSERT INTO `datada` (`idData`, `idKet`, `nilai`, `tanggal`) VALUES
(1, 1, 9, '2015-08-04'),
(2, 2, 50, '2015-08-04'),
(3, 3, 86, '2015-08-04'),
(4, 4, 50, '2015-08-04'),
(5, 1, 3, '2015-08-05'),
(6, 2, 50, '2015-08-05'),
(7, 3, 90, '2015-08-05'),
(8, 4, 50, '2015-08-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datakpi`
--

CREATE TABLE IF NOT EXISTS `datakpi` (
  `idData` int(11) NOT NULL AUTO_INCREMENT,
  `idKPI` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`idData`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data untuk tabel `datakpi`
--

INSERT INTO `datakpi` (`idData`, `idKPI`, `nilai`, `tanggal`) VALUES
(1, 1, 85, '2015-05-04'),
(2, 1, 85, '2015-05-11'),
(3, 1, 85, '2015-05-18'),
(4, 1, 85, '2015-05-25'),
(5, 1, 85, '2015-06-01'),
(7, 2, 86, '2015-05-04'),
(8, 2, 89, '2015-05-11'),
(9, 2, 89, '2015-05-18'),
(10, 2, 79, '2015-05-25'),
(11, 2, 79, '2015-06-01'),
(12, 1, 85, '2015-06-08'),
(13, 1, 85, '2015-06-15'),
(14, 1, 85, '2015-06-22'),
(15, 1, 85, '2015-06-29'),
(16, 1, 85, '2015-07-06'),
(17, 1, 85, '2015-07-13'),
(18, 1, 85, '2015-07-20'),
(19, 1, 85, '2015-07-27'),
(20, 1, 85, '2015-08-03'),
(21, 2, 78, '2015-06-08'),
(22, 2, 78, '2015-06-15'),
(23, 2, 85, '2015-06-22'),
(24, 2, 92, '2015-06-29'),
(25, 2, 92, '2015-07-06'),
(26, 2, 90, '2015-07-13'),
(27, 2, 89, '2015-07-20'),
(28, 2, 89, '2015-07-27'),
(29, 2, 88, '2015-08-03'),
(30, 3, 30, '2015-05-04'),
(31, 3, 30, '2015-05-11'),
(32, 3, 30, '2015-05-18'),
(33, 3, 30, '2015-05-25'),
(34, 3, 30, '2015-06-01'),
(35, 3, 30, '2015-06-08'),
(36, 3, 30, '2015-06-15'),
(37, 3, 30, '2015-06-22'),
(38, 3, 30, '2015-06-29'),
(39, 3, 30, '2015-07-06'),
(40, 3, 30, '2015-07-13'),
(41, 3, 30, '2015-07-20'),
(42, 3, 30, '2015-07-27'),
(43, 3, 30, '2015-08-03'),
(44, 4, 18, '2015-05-04'),
(45, 4, 16, '2015-05-11'),
(46, 4, 17, '2015-05-18'),
(47, 4, 17, '2015-05-25'),
(48, 4, 16, '2015-06-01'),
(49, 4, 18, '2015-06-08'),
(50, 4, 17, '2015-06-15'),
(51, 4, 21, '2015-06-22'),
(52, 4, 20, '2015-06-29'),
(53, 4, 20, '2015-07-06'),
(54, 4, 23, '2015-07-13'),
(55, 4, 23, '2015-07-20'),
(56, 4, 19, '2015-07-27'),
(57, 4, 20, '2015-08-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapa`
--

CREATE TABLE IF NOT EXISTS `datapa` (
  `idData` int(11) NOT NULL AUTO_INCREMENT,
  `idKet` int(11) NOT NULL,
  `nilai` double NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`idData`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `datapa`
--

INSERT INTO `datapa` (`idData`, `idKet`, `nilai`, `tanggal`) VALUES
(1, 1, 29, '2015-05-04'),
(2, 2, 30, '2015-05-04'),
(3, 3, 79, '2015-05-04'),
(4, 4, 85, '2015-05-04'),
(5, 1, 25, '2015-05-11'),
(6, 2, 30, '2015-05-11'),
(7, 3, 79, '2015-05-11'),
(8, 4, 85, '2015-05-11'),
(9, 1, 21, '2015-05-18'),
(10, 2, 30, '2015-05-18'),
(11, 3, 88, '2015-05-18'),
(12, 4, 85, '2015-05-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapj`
--

CREATE TABLE IF NOT EXISTS `datapj` (
  `idData` int(11) NOT NULL AUTO_INCREMENT,
  `idKet` int(11) NOT NULL,
  `nilai` double NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`idData`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data untuk tabel `datapj`
--

INSERT INTO `datapj` (`idData`, `idKet`, `nilai`, `tanggal`) VALUES
(13, 1, 50, '2015-05-04'),
(14, 2, 90, '2015-05-04'),
(15, 3, 85, '2015-05-04'),
(16, 4, 81, '2015-05-04'),
(17, 1, 50, '2015-05-11'),
(18, 2, 93, '2015-05-11'),
(19, 3, 85, '2015-05-11'),
(20, 4, 79, '2015-05-11'),
(21, 1, 50, '2015-05-18'),
(22, 2, 63, '2015-05-18'),
(23, 3, 85, '2015-05-18'),
(24, 4, 79, '2015-05-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jaringan`
--

CREATE TABLE IF NOT EXISTS `jaringan` (
  `idJar` int(11) NOT NULL AUTO_INCREMENT,
  `tglJar` date NOT NULL,
  `menitJar` int(11) NOT NULL,
  `persenJar` double NOT NULL,
  `TmenitJar` int(11) NOT NULL,
  `TpersenJar` double NOT NULL,
  PRIMARY KEY (`idJar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=210 ;

--
-- Dumping data untuk tabel `jaringan`
--

INSERT INTO `jaringan` (`idJar`, `tglJar`, `menitJar`, `persenJar`, `TmenitJar`, `TpersenJar`) VALUES
(207, '2015-05-04', 90, 81, 50, 85),
(208, '2015-05-11', 87, 93, 50, 85),
(209, '2015-05-18', 63, 79, 50, 85);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketadum`
--

CREATE TABLE IF NOT EXISTS `ketadum` (
  `idKet` int(11) NOT NULL AUTO_INCREMENT,
  `ket` varchar(100) NOT NULL,
  PRIMARY KEY (`idKet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `ketadum`
--

INSERT INTO `ketadum` (`idKet`, `ket`) VALUES
(1, 'Pelaporan Fasilitas <br /> Kantor & Keuangan'),
(2, 'Target Pelaporan  <br /> Fasilitas Kantor <br /> & Keuangan'),
(3, 'Pelaporan Material <br /> Gudang'),
(4, 'Target Pelaporan <br /> Material Gudang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketda`
--

CREATE TABLE IF NOT EXISTS `ketda` (
  `idKet` int(11) NOT NULL AUTO_INCREMENT,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`idKet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `ketda`
--

INSERT INTO `ketda` (`idKet`, `ket`) VALUES
(1, 'Pengawasan Penggunaan <br/> ROW Ilegal'),
(2, 'Target Pengawasan <br /> Penggunaan ROW Ilegal'),
(3, 'Aset & ROW <br /> yang sudah digunakan'),
(4, 'Target Aset & ROW <br /> yang sudah digunakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketpa`
--

CREATE TABLE IF NOT EXISTS `ketpa` (
  `idKet` int(11) NOT NULL AUTO_INCREMENT,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`idKet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `ketpa`
--

INSERT INTO `ketpa` (`idKet`, `ket`) VALUES
(1, 'Rata-rata <br /> Lama Hari'),
(2, 'Target <br /> Lama Hari'),
(3, 'Peningkatan <br /> Akurasi'),
(4, 'Target Peningkatan <br /> Akurasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketpj`
--

CREATE TABLE IF NOT EXISTS `ketpj` (
  `idKet` int(11) NOT NULL AUTO_INCREMENT,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`idKet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `ketpj`
--

INSERT INTO `ketpj` (`idKet`, `ket`) VALUES
(1, 'Target Waktu <br /> Penanganan <br /> (menit)'),
(2, 'Realisasi Waktu <br /> Penanganan <br /> (menit)'),
(3, 'Target Persentase <br /> Peningkatan <br /> Kualit'),
(4, 'Persentase <br /> Peningkatan <br /> Kualitas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pa`
--

CREATE TABLE IF NOT EXISTS `pa` (
  `idPa` int(11) NOT NULL AUTO_INCREMENT,
  `tglPa` date NOT NULL,
  `hariPa` int(11) NOT NULL,
  `persenPa` double NOT NULL,
  `ThariPa` int(11) NOT NULL,
  `TpersenPa` double NOT NULL,
  PRIMARY KEY (`idPa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `pa`
--

INSERT INTO `pa` (`idPa`, `tglPa`, `hariPa`, `persenPa`, `ThariPa`, `TpersenPa`) VALUES
(1, '2015-05-04', 29, 79, 30, 85),
(3, '2015-05-11', 25, 79, 30, 85),
(4, '2015-05-18', 21, 88, 30, 85);

-- --------------------------------------------------------

--
-- Struktur dari tabel `plj`
--

CREATE TABLE IF NOT EXISTS `plj` (
  `idPlj` int(11) NOT NULL AUTO_INCREMENT,
  `tglPlj` date NOT NULL,
  `ThariPlj` double NOT NULL,
  `hariPlj` double NOT NULL,
  `targetPlj` double NOT NULL,
  `persenPlj` double NOT NULL,
  PRIMARY KEY (`idPlj`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=114 ;

--
-- Dumping data untuk tabel `plj`
--

INSERT INTO `plj` (`idPlj`, `tglPlj`, `ThariPlj`, `hariPlj`, `targetPlj`, `persenPlj`) VALUES
(100, '2015-05-04', 30, 17.7, 85, 86),
(101, '2014-05-11', 30, 15.9, 85, 89),
(102, '2015-05-18', 30, 16.5, 85, 89),
(103, '2015-05-25', 30, 17.2, 85, 79),
(104, '2015-06-01', 30, 16.4, 85, 79),
(105, '2015-06-08', 30, 17.5, 85, 78),
(106, '2015-06-15', 30, 17.2, 85, 78),
(107, '2015-06-22', 30, 20.8, 85, 85),
(108, '2015-06-29', 30, 19.8, 85, 92),
(109, '2015-07-06', 30, 19.6, 85, 92),
(110, '2015-07-13', 30, 22.9, 85, 90),
(111, '2015-07-20', 30, 22.5, 85, 89),
(112, '2015-07-27', 30, 19.4, 85, 89),
(113, '2015-08-03', 30, 19.5, 85, 88);

-- --------------------------------------------------------

--
-- Struktur dari tabel `so`
--

CREATE TABLE IF NOT EXISTS `so` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `topen` int(11) NOT NULL,
  `tclose` int(11) NOT NULL,
  `tcancel` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `so`
--

INSERT INTO `so` (`id`, `tanggal`, `topen`, `tclose`, `tcancel`, `total`) VALUES
(1, '2015-05-04', 54, 336, 32, 442),
(2, '2015-05-11', 45, 362, 33, 440),
(3, '2015-05-18', 45, 378, 35, 458),
(4, '2015-05-25', 108, 401, 39, 548),
(5, '2015-06-01', 113, 425, 39, 577),
(6, '2015-06-08', 127, 449, 41, 617),
(7, '2015-06-15', 132, 478, 41, 651),
(8, '2015-06-22', 97, 536, 42, 675),
(9, '2015-06-29', 50, 600, 44, 694),
(10, '2015-07-06', 55, 607, 45, 707),
(11, '2015-07-13', 70, 620, 47, 737),
(12, '2015-07-20', 73, 620, 47, 740),
(13, '2015-07-27', 80, 624, 47, 751),
(14, '2015-08-03', 86, 641, 51, 778);

-- --------------------------------------------------------

--
-- Struktur dari tabel `statuskpi`
--

CREATE TABLE IF NOT EXISTS `statuskpi` (
  `idKPI` int(11) NOT NULL AUTO_INCREMENT,
  `jenisKPI` varchar(50) NOT NULL,
  PRIMARY KEY (`idKPI`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `statuskpi`
--

INSERT INTO `statuskpi` (`idKPI`, `jenisKPI`) VALUES
(1, 'Target <br/> Penyelesaian (%)'),
(2, 'Realisasi <br /> Penyelesaian (%)'),
(3, 'Target Lama<br /> Hari'),
(4, 'Realisasi<br /> Lama Hari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statuso`
--

CREATE TABLE IF NOT EXISTS `statuso` (
  `idStatus` int(11) NOT NULL AUTO_INCREMENT,
  `idSO` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`idStatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data untuk tabel `statuso`
--

INSERT INTO `statuso` (`idStatus`, `idSO`, `nilai`, `tanggal`) VALUES
(1, 1, 54, '2015-05-04'),
(2, 2, 336, '2015-05-04'),
(3, 3, 32, '2015-05-04'),
(4, 4, 422, '2015-05-04'),
(5, 1, 45, '2015-05-11'),
(6, 2, 362, '2015-05-11'),
(7, 3, 33, '2015-05-11'),
(8, 4, 440, '2015-05-11'),
(9, 1, 113, '2015-06-01'),
(10, 2, 425, '2015-06-01'),
(11, 3, 39, '2015-06-01'),
(12, 4, 577, '2015-06-01'),
(13, 1, 127, '2015-06-08'),
(14, 2, 449, '2015-06-08'),
(15, 3, 41, '2015-06-08'),
(16, 4, 617, '2015-06-08'),
(17, 1, 132, '2015-06-15'),
(18, 2, 478, '2015-06-15'),
(19, 3, 41, '2015-06-15'),
(20, 4, 651, '2015-06-15'),
(21, 1, 97, '2015-06-22'),
(22, 2, 536, '2015-06-22'),
(23, 3, 42, '2015-06-22'),
(24, 4, 675, '2015-06-22'),
(25, 1, 50, '2015-06-29'),
(26, 2, 600, '2015-06-29'),
(27, 3, 44, '2015-06-29'),
(28, 4, 694, '2015-06-29'),
(29, 1, 55, '2015-07-06'),
(30, 2, 607, '2015-07-06'),
(31, 3, 45, '2015-07-06'),
(32, 4, 707, '2015-07-06'),
(33, 1, 70, '2015-07-13'),
(34, 2, 620, '2015-07-13'),
(35, 3, 47, '2015-07-13'),
(36, 4, 737, '2015-07-13'),
(37, 1, 73, '2015-07-20'),
(38, 2, 620, '2015-07-20'),
(39, 3, 47, '2015-07-20'),
(40, 4, 740, '2015-07-20'),
(41, 1, 80, '2015-07-27'),
(42, 2, 624, '2015-07-27'),
(43, 3, 47, '2015-07-27'),
(44, 4, 751, '2015-07-27'),
(45, 1, 86, '2015-08-03'),
(46, 2, 641, '2015-08-03'),
(47, 3, 51, '2015-08-03'),
(48, 4, 778, '2015-08-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(4) NOT NULL AUTO_INCREMENT,
  `email` char(50) NOT NULL,
  `password` char(32) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `divisi` varchar(40) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=606 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idUser`, `email`, `password`, `nama`, `jabatan`, `divisi`) VALUES
(600, 'admin@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin', 'Kepala divisi', 'Aktivasi'),
(603, 'bellaunyu@gmail.com', '1234', 'bella ajah', 'Ketua', 'Umum'),
(604, 'siti@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 'siti', 'ketua', 'nganggur'),
(605, 'mem@email.com', 'afc4fc7e48a0710a1dc94ef3e8bc5764', 'razhr', '-', '-');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
