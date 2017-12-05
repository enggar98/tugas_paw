-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2017 at 01:22 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pengelolaan_ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_seminarta1`
--

CREATE TABLE IF NOT EXISTS `daftar_seminarta1` (
  `id_daftar_seminarta1` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `peminatan` varchar(5) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `judul_penelitian` varchar(225) NOT NULL,
  `judul_perbaikan` varchar(225) NOT NULL,
  `ipk` varchar(5) NOT NULL,
  `total_sks` varchar(5) NOT NULL,
  `jml_d` varchar(5) NOT NULL,
  `jml_e` varchar(5) NOT NULL,
  `jml_mk_krs` varchar(5) NOT NULL,
  `jml_sks_krs` varchar(5) NOT NULL,
  `file_khs` varchar(40) NOT NULL,
  `file_krs` varchar(40) NOT NULL,
  `file_berkas` varchar(40) NOT NULL,
  `id_dosen_pem1` int(11) NOT NULL,
  `nama_dosen_pem1` varchar(40) NOT NULL,
  `id_dosen_pem2` int(11) NOT NULL,
  `nama_dosen_pem2` varchar(40) NOT NULL,
  `status_seminarta1` varchar(20) NOT NULL,
  PRIMARY KEY (`id_daftar_seminarta1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `daftar_seminarta1`
--

INSERT INTO `daftar_seminarta1` (`id_daftar_seminarta1`, `nim`, `nama`, `peminatan`, `semester`, `tahun_ajaran`, `judul_penelitian`, `judul_perbaikan`, `ipk`, `total_sks`, `jml_d`, `jml_e`, `jml_mk_krs`, `jml_sks_krs`, `file_khs`, `file_krs`, `file_berkas`, `id_dosen_pem1`, `nama_dosen_pem1`, `id_dosen_pem2`, `nama_dosen_pem2`, `status_seminarta1`) VALUES
(8, '3411141049', 'UTHEU BUDHI SUSETYO', 'SIE', 'Ganji', '2017/2018', 'PEMBANGUNAN SISTEM INFORMASI PENGELOLAAN TUGAS AKHIR', '--', '4', '4', '4', '4', '4', '4', 'PANITIA2.docx', 'riri1.docx', 'kop1.docx', 11, 'TACHBIR HENDRO PUDJIANTO, SSi.,MT.', 13, 'AGUS KOMARUDIN, ST.,MT', 'Acc'),
(9, '3411141045', 'DESTY IVANA PRIYANTIKA', 'SIE', 'Ganji', '', 'PEMBANGUNAN SISTEM INFORMASI PENGELOLAAN TUGAS AKHIR', '--', '5', '5', '5', '5', '5', '5', 'kop8.docx', 'PANITIA9.docx', 'kop7.docx', 23, 'Dr. Esmeralda Contessa D., Ir., M.T.', 22, 'Eddie Khrisna Putra, Drs., M.T.', 'Acc');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_seminarta2`
--

CREATE TABLE IF NOT EXISTS `daftar_seminarta2` (
  `id_daftar_seminarta2` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `peminatan` varchar(5) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `judul_penelitian` varchar(225) NOT NULL,
  `judul_perbaikan` varchar(225) NOT NULL,
  `ipk` varchar(5) NOT NULL,
  `total_sks` varchar(5) NOT NULL,
  `jml_d` varchar(5) NOT NULL,
  `jml_e` varchar(5) NOT NULL,
  `jml_mk_krs` varchar(5) NOT NULL,
  `jml_sks_krs` varchar(5) NOT NULL,
  `file_khs` varchar(40) NOT NULL,
  `file_krs` varchar(40) NOT NULL,
  `file_proposal` varchar(40) NOT NULL,
  `id_dosen_pem1` int(11) NOT NULL,
  `nama_dosen_pem1` varchar(40) NOT NULL,
  `id_dosen_pem2` int(11) NOT NULL,
  `nama_dosen_pem2` varchar(40) NOT NULL,
  `status_seminarta2` varchar(20) NOT NULL,
  PRIMARY KEY (`id_daftar_seminarta2`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `daftar_seminarta2`
--

INSERT INTO `daftar_seminarta2` (`id_daftar_seminarta2`, `nim`, `nama`, `peminatan`, `semester`, `tahun_ajaran`, `judul_penelitian`, `judul_perbaikan`, `ipk`, `total_sks`, `jml_d`, `jml_e`, `jml_mk_krs`, `jml_sks_krs`, `file_khs`, `file_krs`, `file_proposal`, `id_dosen_pem1`, `nama_dosen_pem1`, `id_dosen_pem2`, `nama_dosen_pem2`, `status_seminarta2`) VALUES
(2, '3411141049', 'UTHEU BUDHI SUSETYO', 'SIE', 'Ganjil', '2017/2018', 'PEMBANGUNAN SISTEM INFORMASI PENGELOLAAN TUGAS AKHIR', '--', '5', '5', '5', '5', '5', '5', 'PANITIA5.docx', 'riri4.docx', 'kop4.docx', 0, 'TACHBIR HENDRO PUDJIANTO, SSi.,MT.', 0, 'AGUS KOMARUDIN, ST.,MT', 'Acc');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ta1`
--

CREATE TABLE IF NOT EXISTS `daftar_ta1` (
  `id_daftar_ta1` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `peminatan` varchar(5) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `judul_penelitian` varchar(225) NOT NULL,
  `ipk` varchar(5) NOT NULL,
  `total_sks` varchar(5) NOT NULL,
  `jml_d` varchar(5) NOT NULL,
  `jml_e` varchar(5) NOT NULL,
  `jml_mk_krs` varchar(5) NOT NULL,
  `jml_sks_krs` varchar(5) NOT NULL,
  `file_khs` varchar(225) NOT NULL,
  `file_krs` varchar(225) NOT NULL,
  `file_proposal` varchar(225) NOT NULL,
  `id_dosen_pem1` int(11) NOT NULL,
  `nama_dosen_pem1` varchar(40) NOT NULL,
  `id_dosen_pem2` int(11) NOT NULL,
  `nama_dosen_pem2` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_daftar_ta1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `daftar_ta1`
--

INSERT INTO `daftar_ta1` (`id_daftar_ta1`, `nim`, `nama`, `peminatan`, `semester`, `tahun_ajaran`, `judul_penelitian`, `ipk`, `total_sks`, `jml_d`, `jml_e`, `jml_mk_krs`, `jml_sks_krs`, `file_khs`, `file_krs`, `file_proposal`, `id_dosen_pem1`, `nama_dosen_pem1`, `id_dosen_pem2`, `nama_dosen_pem2`, `status`) VALUES
(10, '3411141049', 'UTHEU BUDHI SUSETYO', 'SIE', 'Ganjil', '2017/2018', 'PEMANGUNAN SISTEM INFORMASI KEUANGAN', '3,4', '3', '3', '3', '3', '3', 'PANITIA6.docx', 'riri5.docx', 'kop5.docx', 24, 'Tacbir Hendro Pudjiantoro, S.Si., M.T.', 36, 'Puspita Nurul Sabrina, S.Kom., M.T.', 'Acc'),
(11, '3411141045', 'DESTY IVANA PRIYANTIKA', 'SIE', 'Ganjil', '', 'PEMBANGUNAN SISTEM INFORMASI PENGELOLAAN TUGAS AKHIR', '5', '5', '5', '5', '5', '5', 'PANITIA8.docx', 'riri6.docx', 'kop6.docx', 23, 'Dr. Esmeralda Contessa D., Ir., M.T.', 22, 'Eddie Khrisna Putra, Drs., M.T.', 'Acc');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ta2`
--

CREATE TABLE IF NOT EXISTS `daftar_ta2` (
  `id_daftar_ta2` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `peminatan` varchar(5) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `judul_penelitian` varchar(225) NOT NULL,
  `judul_perbaikan` varchar(225) NOT NULL,
  `ipk` varchar(5) NOT NULL,
  `total_sks` varchar(5) NOT NULL,
  `jml_d` varchar(5) NOT NULL,
  `jml_e` varchar(5) NOT NULL,
  `jml_mk_krs` varchar(5) NOT NULL,
  `jml_sks_krs` varchar(5) NOT NULL,
  `file_khs` varchar(40) NOT NULL,
  `file_krs` varchar(40) NOT NULL,
  `file_proposal` varchar(40) NOT NULL,
  `id_dosen_pem1` int(11) NOT NULL,
  `nama_dosen_pem1` varchar(40) NOT NULL,
  `id_dosen_pem2` int(11) NOT NULL,
  `nama_dosen_pem2` varchar(40) NOT NULL,
  `status_daftarta2` varchar(20) NOT NULL,
  PRIMARY KEY (`id_daftar_ta2`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `daftar_ta2`
--

INSERT INTO `daftar_ta2` (`id_daftar_ta2`, `nim`, `nama`, `peminatan`, `semester`, `tahun_ajaran`, `judul_penelitian`, `judul_perbaikan`, `ipk`, `total_sks`, `jml_d`, `jml_e`, `jml_mk_krs`, `jml_sks_krs`, `file_khs`, `file_krs`, `file_proposal`, `id_dosen_pem1`, `nama_dosen_pem1`, `id_dosen_pem2`, `nama_dosen_pem2`, `status_daftarta2`) VALUES
(4, '3411141049', 'UTHEU BUDHI SUSETYO', 'SIE', 'Ganjil', '2017/2018', 'PEMBANGUNAN SISTEM INFORMASI PENGELOLAAN TUGAS AKHIR', '--', '5', '5', '5', '5', '5', '5', 'PANITIA4.docx', 'riri3.docx', 'kop3.docx', 0, 'TACHBIR HENDRO PUDJIANTO, SSi.,MT.', 0, 'AGUS KOMARUDIN, ST.,MT', 'Acc');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_review`
--

CREATE TABLE IF NOT EXISTS `hasil_review` (
  `id_review` int(11) NOT NULL AUTO_INCREMENT,
  `dosen_review` varchar(40) NOT NULL,
  `nama_mhs` varchar(40) NOT NULL,
  `hasil_review` varchar(40) NOT NULL,
  PRIMARY KEY (`id_review`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE IF NOT EXISTS `informasi` (
  `id_informasi` int(11) NOT NULL AUTO_INCREMENT,
  `informasi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_informasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `informasi`) VALUES
(1, 'PANITIA7.docx'),
(2, 'kop9.docx');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_review`
--

CREATE TABLE IF NOT EXISTS `jadwal_review` (
  `id_jadwal_review` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ruang` varchar(40) NOT NULL,
  `tanggal` varchar(40) NOT NULL,
  `nama_mhs` varchar(40) NOT NULL,
  `nama_dosen` varchar(40) NOT NULL,
  PRIMARY KEY (`id_jadwal_review`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_seminarta1_pembimbing`
--

CREATE TABLE IF NOT EXISTS `nilai_seminarta1_pembimbing` (
  `id_nilai_seminarta1` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `peminatan` varchar(5) NOT NULL,
  `judul_penelitian` varchar(225) NOT NULL,
  `judul_perbaikan` varchar(225) NOT NULL,
  `nama_dosen_pem1` varchar(40) NOT NULL,
  `nama_dosen_pem2` varchar(40) NOT NULL,
  `materi_penelitian_pem1` int(11) NOT NULL,
  `pemahaman_pem1` int(11) NOT NULL,
  `pencapaian_target_pem1` int(11) NOT NULL,
  `aspek_kedisiplinan_pem1` int(11) NOT NULL,
  `pemahaman_penelitian_pem1` int(11) NOT NULL,
  `metode_penelitian_pem1` int(11) NOT NULL,
  `kedalaman_teori_pem1` int(11) NOT NULL,
  `analisis_hasil_penelitian_pem1` int(11) NOT NULL,
  `teknik_presentasi_pem1` int(11) NOT NULL,
  `teknik_penulisan_pem1` int(11) NOT NULL,
  `pemahaman_pengembangan_pl_pem1` int(11) NOT NULL,
  `materi_penelitian_pem2` int(11) NOT NULL,
  `pemahaman_pem2` int(11) NOT NULL,
  `pencapaian_target_pem2` int(11) NOT NULL,
  `aspek_kedisiplinan_pem2` int(11) NOT NULL,
  `pemahaman_penelitian_pem2` int(11) NOT NULL,
  `metode_penelitian_pem2` int(11) NOT NULL,
  `kedalaman_teori_pem2` int(11) NOT NULL,
  `analisis_hasil_penelitian_pem2` int(11) NOT NULL,
  `teknik_presentasi_pem2` int(11) NOT NULL,
  `teknik_penulisan_pem2` int(11) NOT NULL,
  `pemahaman_pengembangan_pl_pem2` int(11) NOT NULL,
  `nama_dosen_peng1` varchar(40) NOT NULL,
  `nama_dosen_peng2` varchar(40) NOT NULL,
  `pemahaman_penelitian_peng1` int(11) NOT NULL,
  `kedalaman_teori_peng1` int(11) NOT NULL,
  `metode_penelitian_peng1` int(11) NOT NULL,
  `analisis_hasil_penelitian_peng1` int(11) NOT NULL,
  `teknik_presentasi_peng1` int(11) NOT NULL,
  `teknik_penulisan_peng1` int(11) NOT NULL,
  `pemahaman_pengembangan_pl_peng1` int(11) NOT NULL,
  `pemahaman_penelitian_peng2` int(11) NOT NULL,
  `kedalaman_teori_peng2` int(11) NOT NULL,
  `metode_penelitian_peng2` int(11) NOT NULL,
  `analisis_hasil_penelitian_peng2` int(11) NOT NULL,
  `teknik_presentasi_peng2` int(11) NOT NULL,
  `teknik_penulisan_peng2` int(11) NOT NULL,
  `pemahaman_pengembangan_pl_peng2` int(11) NOT NULL,
  `angka_mutu` varchar(2) NOT NULL,
  PRIMARY KEY (`id_nilai_seminarta1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `nilai_seminarta1_pembimbing`
--

INSERT INTO `nilai_seminarta1_pembimbing` (`id_nilai_seminarta1`, `nama`, `nim`, `peminatan`, `judul_penelitian`, `judul_perbaikan`, `nama_dosen_pem1`, `nama_dosen_pem2`, `materi_penelitian_pem1`, `pemahaman_pem1`, `pencapaian_target_pem1`, `aspek_kedisiplinan_pem1`, `pemahaman_penelitian_pem1`, `metode_penelitian_pem1`, `kedalaman_teori_pem1`, `analisis_hasil_penelitian_pem1`, `teknik_presentasi_pem1`, `teknik_penulisan_pem1`, `pemahaman_pengembangan_pl_pem1`, `materi_penelitian_pem2`, `pemahaman_pem2`, `pencapaian_target_pem2`, `aspek_kedisiplinan_pem2`, `pemahaman_penelitian_pem2`, `metode_penelitian_pem2`, `kedalaman_teori_pem2`, `analisis_hasil_penelitian_pem2`, `teknik_presentasi_pem2`, `teknik_penulisan_pem2`, `pemahaman_pengembangan_pl_pem2`, `nama_dosen_peng1`, `nama_dosen_peng2`, `pemahaman_penelitian_peng1`, `kedalaman_teori_peng1`, `metode_penelitian_peng1`, `analisis_hasil_penelitian_peng1`, `teknik_presentasi_peng1`, `teknik_penulisan_peng1`, `pemahaman_pengembangan_pl_peng1`, `pemahaman_penelitian_peng2`, `kedalaman_teori_peng2`, `metode_penelitian_peng2`, `analisis_hasil_penelitian_peng2`, `teknik_presentasi_peng2`, `teknik_penulisan_peng2`, `pemahaman_pengembangan_pl_peng2`, `angka_mutu`) VALUES
(5, 'UTHEU BUDHI SUSETYO', '3411141049', 'SIE', 'PEMBANGUNAN SISTEM INFORMASI PENGELOLAAN TUGAS AKHIR', '--', 'TACHBIR HENDRO PUDJIANTO, SSi.,MT.', 'AGUS KOMARUDIN, ST.,MT', 3, 1, 1, 1, 1, 1, 1, 1, 1, 11, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 'FAIZA RENALDI', 'FAJRI RAHMAT UMBARA', 2, 2, 2, 2, 2, 2, 0, 2, 2, 2, 2, 2, 2, 2, 'E'),
(6, 'UTHEU BUDHI SUSETYO', '3411141049', 'SIE', 'PEMBANGUNAN SISTEM INFORMASI PENGELOLAAN TUGAS AKHIR', '--', 'TACHBIR HENDRO PUDJIANTO, SSi.,MT.', 'AGUS KOMARUDIN, ST.,MT', 3, 3, 3, 3, 33, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 33, 3, 'FAIZA RENALDI', 'FAJRI RAHMAT UMBARA', 3, 3, 3, 3, 3, 33, 0, 3, 3, 3, 3, 3, 3, 3, 'E');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_seminarta2`
--

CREATE TABLE IF NOT EXISTS `nilai_seminarta2` (
  `id_nilai_seminarta2` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `peminatan` varchar(5) NOT NULL,
  `judul_penelitian` varchar(225) NOT NULL,
  `judul_perbaikan` varchar(225) NOT NULL,
  `nama_dosen_pem1` varchar(40) NOT NULL,
  `nama_dosen_pem2` varchar(40) NOT NULL,
  `materi_penelitian_pem1` int(11) NOT NULL,
  `pemahaman_pem1` int(11) NOT NULL,
  `pencapaian_target_pem1` int(11) NOT NULL,
  `aspek_kedisiplinan_pem1` int(11) NOT NULL,
  `pemahaman_penelitian_pem1` int(11) NOT NULL,
  `metode_penelitian_pem1` int(11) NOT NULL,
  `kedalaman_teori_pem1` int(11) NOT NULL,
  `analisis_hasil_penelitian_pem1` int(11) NOT NULL,
  `teknik_presentasi_pem1` int(11) NOT NULL,
  `teknik_penulisan_pem1` int(11) NOT NULL,
  `pemahaman_pengembangan_pl_pem1` int(11) NOT NULL,
  `materi_penelitian_pem2` int(11) NOT NULL,
  `pemahaman_pem2` int(11) NOT NULL,
  `pencapaian_target_pem2` int(11) NOT NULL,
  `aspek_kedisiplinan_pem2` int(11) NOT NULL,
  `pemahaman_penelitian_pem2` int(11) NOT NULL,
  `metode_penelitian_pem2` int(11) NOT NULL,
  `kedalaman_teori_pem2` int(11) NOT NULL,
  `analisis_hasil_penelitian_pem2` int(11) NOT NULL,
  `teknik_presentasi_pem2` int(11) NOT NULL,
  `teknik_penulisan_pem2` int(11) NOT NULL,
  `pemahaman_pengembangan_pl_pem2` int(11) NOT NULL,
  `nama_dosen_peng1` varchar(40) NOT NULL,
  `nama_dosen_peng2` varchar(40) NOT NULL,
  `pemahaman_penelitian_peng1` int(11) NOT NULL,
  `kedalaman_teori_peng1` int(11) NOT NULL,
  `metode_penelitian_peng1` int(11) NOT NULL,
  `analisis_hasil_penelitian_peng1` int(11) NOT NULL,
  `teknik_presentasi_peng1` int(11) NOT NULL,
  `teknik_penulisan_peng1` int(11) NOT NULL,
  `pemahaman_pengembangan_pl_peng1` int(11) NOT NULL,
  `pemahaman_penelitian_peng2` int(11) NOT NULL,
  `kedalaman_teori_peng2` int(11) NOT NULL,
  `metode_penelitian_peng2` int(11) NOT NULL,
  `analisis_hasil_penelitian_peng2` int(11) NOT NULL,
  `teknik_presentasi_peng2` int(11) NOT NULL,
  `teknik_penulisan_peng2` int(11) NOT NULL,
  `pemahaman_pengembangan_pl_peng2` int(11) NOT NULL,
  `angka_mutu` varchar(2) NOT NULL,
  PRIMARY KEY (`id_nilai_seminarta2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_seminarta2`
--

INSERT INTO `nilai_seminarta2` (`id_nilai_seminarta2`, `nim`, `nama`, `peminatan`, `judul_penelitian`, `judul_perbaikan`, `nama_dosen_pem1`, `nama_dosen_pem2`, `materi_penelitian_pem1`, `pemahaman_pem1`, `pencapaian_target_pem1`, `aspek_kedisiplinan_pem1`, `pemahaman_penelitian_pem1`, `metode_penelitian_pem1`, `kedalaman_teori_pem1`, `analisis_hasil_penelitian_pem1`, `teknik_presentasi_pem1`, `teknik_penulisan_pem1`, `pemahaman_pengembangan_pl_pem1`, `materi_penelitian_pem2`, `pemahaman_pem2`, `pencapaian_target_pem2`, `aspek_kedisiplinan_pem2`, `pemahaman_penelitian_pem2`, `metode_penelitian_pem2`, `kedalaman_teori_pem2`, `analisis_hasil_penelitian_pem2`, `teknik_presentasi_pem2`, `teknik_penulisan_pem2`, `pemahaman_pengembangan_pl_pem2`, `nama_dosen_peng1`, `nama_dosen_peng2`, `pemahaman_penelitian_peng1`, `kedalaman_teori_peng1`, `metode_penelitian_peng1`, `analisis_hasil_penelitian_peng1`, `teknik_presentasi_peng1`, `teknik_penulisan_peng1`, `pemahaman_pengembangan_pl_peng1`, `pemahaman_penelitian_peng2`, `kedalaman_teori_peng2`, `metode_penelitian_peng2`, `analisis_hasil_penelitian_peng2`, `teknik_presentasi_peng2`, `teknik_penulisan_peng2`, `pemahaman_pengembangan_pl_peng2`, `angka_mutu`) VALUES
(1, '3411141049', 'UTHEU BUDHI SUSETYO', 'SIE', 'PEMBANGUNAN SISTEM INFORMASI PENGELOLAAN TUGAS AKHIR', '--', 'TACHBIR HENDRO PUDJIANTO, SSi.,MT.', 'AGUS KOMARUDIN, ST.,MT', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 'FAIZA RENALDI', 'FAJRI RAHMAT UMBARA', 3, 3, 3, 3, 3, 3, 0, 3, 3, 3, 3, 3, 3, 3, 'E'),
(2, '3411141049', 'UTHEU BUDHI SUSETYO', 'SIE', 'PEMBANGUNAN SISTEM INFORMASI PENGELOLAAN TUGAS AKHIR', '--', 'TACHBIR HENDRO PUDJIANTO, SSi.,MT.', 'AGUS KOMARUDIN, ST.,MT', 3, 3, 3, 3, 3, 3, 3, 33, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 'FAIZA RENALDI', 'FAJRI RAHMAT UMBARA', 3, 3, 3, 3, 33, 3, 0, 3, 3, 3, 3, 3, 3, 3, 'E'),
(3, '3411141049', 'UTHEU BUDHI SUSETYO', 'SIE', 'PEMBANGUNAN SISTEM INFORMASI PENGELOLAAN TUGAS AKHIR', '--', 'TACHBIR HENDRO PUDJIANTO, SSi.,MT.', 'AGUS KOMARUDIN, ST.,MT', 33, 33, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 'FAIZA RENALDI', 'FAJRI RAHMAT UMBARA', 3, 3, 3, 3, 3, 3, 0, 3, 3, 3, 3, 3, 3, 3, 'E');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_sidang`
--

CREATE TABLE IF NOT EXISTS `nilai_sidang` (
  `id_nilai_sidang` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `peminatan` varchar(5) NOT NULL,
  `judul_penelitian` varchar(225) NOT NULL,
  `judul_perbaikan` varchar(225) NOT NULL,
  `nama_dosen_pem1` varchar(40) NOT NULL,
  `nama_dosen_pem2` varchar(40) NOT NULL,
  `materi_penelitian_pem1` int(11) NOT NULL,
  `pemahaman_pem1` int(11) NOT NULL,
  `pencapaian_target_pem1` int(11) NOT NULL,
  `aspek_kedisiplinan_pem1` int(11) NOT NULL,
  `pemahaman_penelitian_pem1` int(11) NOT NULL,
  `metode_penelitian_pem1` int(11) NOT NULL,
  `kedalaman_teori_pem1` int(11) NOT NULL,
  `analisis_hasil_penelitian_pem1` int(11) NOT NULL,
  `teknik_presentasi_pem1` int(11) NOT NULL,
  `teknik_penulisan_pem1` int(11) NOT NULL,
  `pemahaman_pengembangan_pl_pem1` int(11) NOT NULL,
  `materi_penelitian_pem2` int(11) NOT NULL,
  `pemahaman_pem2` int(11) NOT NULL,
  `pencapaian_target_pem2` int(11) NOT NULL,
  `aspek_kedisiplinan_pem2` int(11) NOT NULL,
  `pemahaman_penelitian_pem2` int(11) NOT NULL,
  `metode_penelitian_pem2` int(11) NOT NULL,
  `kadalaman_teori_pem2` int(11) NOT NULL,
  `analisis_hasil_penelitian_pem2` int(11) NOT NULL,
  `teknik_presentasi_pem2` int(11) NOT NULL,
  `teknik_penulisan_pem2` int(11) NOT NULL,
  `pemahaman_pengembangan_pl_pem2` int(11) NOT NULL,
  `nama_dosen_peng1` varchar(40) NOT NULL,
  `nama_dosen_peng2` varchar(40) NOT NULL,
  `pemahaman_penelitian_peng1` int(11) NOT NULL,
  `kedalaman_teori_peng1` int(11) NOT NULL,
  `metode_penelitian_peng1` int(11) NOT NULL,
  `analisis_hasil_penelitian_peng1` int(11) NOT NULL,
  `teknik_presentasi_peng1` int(11) NOT NULL,
  `teknik_penulisan_peng1` int(11) NOT NULL,
  `pemahaman_pengembangan_pl_peng1` int(11) NOT NULL,
  `pemahaman_penelitian_peng2` int(11) NOT NULL,
  `kedalaman_teori_peng2` int(11) NOT NULL,
  `metode_penelitian_peng2` int(11) NOT NULL,
  `analisis_hasil_penelitian_peng2` int(11) NOT NULL,
  `teknik_presentasi_peng2` int(11) NOT NULL,
  `teknik_penulisan_peng2` int(11) NOT NULL,
  `pemahaman_pengembangan_pl_peng2` int(11) NOT NULL,
  PRIMARY KEY (`id_nilai_sidang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sidang`
--

CREATE TABLE IF NOT EXISTS `sidang` (
  `id_daftar_sidang` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `peminatan` varchar(5) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `judul_penelitian` varchar(225) NOT NULL,
  `judul_perbaikan` varchar(225) NOT NULL,
  `ipk` varchar(5) NOT NULL,
  `total_sks` varchar(5) NOT NULL,
  `jml_d` varchar(5) NOT NULL,
  `jml_e` varchar(5) NOT NULL,
  `jml_mk_krs` varchar(5) NOT NULL,
  `jml_sks_krs` varchar(5) NOT NULL,
  `file_khs` varchar(40) NOT NULL,
  `file_krs` varchar(40) NOT NULL,
  `file_proposal` varchar(40) NOT NULL,
  `id_dosen_pem1` int(11) NOT NULL,
  `nama_dosen_pem1` varchar(40) NOT NULL,
  `id_dosen_pem2` int(11) NOT NULL,
  `nama_dosen_pem2` varchar(40) NOT NULL,
  `status_sidang` varchar(20) NOT NULL,
  PRIMARY KEY (`id_daftar_sidang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sidang`
--

INSERT INTO `sidang` (`id_daftar_sidang`, `nim`, `nama`, `peminatan`, `semester`, `tahun_ajaran`, `judul_penelitian`, `judul_perbaikan`, `ipk`, `total_sks`, `jml_d`, `jml_e`, `jml_mk_krs`, `jml_sks_krs`, `file_khs`, `file_krs`, `file_proposal`, `id_dosen_pem1`, `nama_dosen_pem1`, `id_dosen_pem2`, `nama_dosen_pem2`, `status_sidang`) VALUES
(2, '3411141049', 'Utheu Budhi Susetyo', 'SIE', 'VII', '2017/2018', 'Pembangunan Sistem Informasi Pengelolaan Keuangan Fakultas MIPA UNJANI', '-', '3,45', '25', '0', '0', '7', '14', '', '', '', 2, 'Tacbir Hendro', 3, 'Ridwan Ilyas', 'Acc');

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE IF NOT EXISTS `tb_akun` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level_user` varchar(30) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id_user`, `username`, `password`, `level_user`) VALUES
(64, 'koorta1', '848ffb3c23731782d024c299ebdb6014', 'koorta1'),
(67, 'koorta2', '23cdeac0676a85e0daa86d369b2a813c', 'koorta2'),
(75, 'staff', '1253208465b1efa876f982d8a9e73eef', 'staff'),
(76, 'eddiekhrisna', 'a5a9a433435aab4b0310a3bbc8855877', 'dosen'),
(77, 'esmeralda', '34f765e519c08c3baae4ad41041cb639', 'dosen'),
(78, 'tacbirhendro', 'f18dc985de4b479c86a8de00869a3f0b', 'dosen'),
(79, 'winawitanti', '7840a7b1eb4a3cb32c2f4a6db1b66011', 'dosen'),
(80, 'yulison', 'bd891bff1d2823fe09f7c15a809f154b', 'dosen'),
(81, 'gunawan', 'dc96b97c4ffbead46ca25ef5d4b77cbe', 'dosen'),
(82, 'adekania', 'd5edb1ff5d65c1cd196658cb199c03bc', 'dosen'),
(83, 'faizarenaldi', '3a9a63ac76010d9d9ed11cd3ba926762', 'dosen'),
(84, 'rezkiyuniar', 'f098db08a92a579cf5db7a004ae11c9d', 'dosen'),
(85, 'aguskomarudin', 'e7c6bbbfe77a292b5f76c6f90ca15e18', 'dosen'),
(86, 'diannur', 'e3259ebeac63f3d0f6b1207a720445c5', 'dosen'),
(87, 'asepid', 'b654a9e046b0c0e83774c9bc82636b77', 'dosen'),
(88, 'ridwanilyas', '33b44870b350cbfd266f9c78f5af1415', 'dosen'),
(89, 'fajrirakhmat', '421ba34260b94a7dc65fb1aaa1130c86', 'dosen'),
(90, 'puspitanurul', '1dd13a1af5f65f4fe26dc0f942461f7e', 'dosen'),
(91, 'asrimaspupah', '0af5e76d1c3bfa41e49dc757fa6292b6', 'dosen'),
(92, 'santikarama', '142d3ac9b2def11fa806841a5f099013', 'dosen'),
(93, 'ernapiantari', '6b86f12e64193a0fcb8e4eeee87bb8a2', 'dosen'),
(95, 'tihe', '4e7006e6898102b9824f58a28fdeec6c', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar_sidang`
--

CREATE TABLE IF NOT EXISTS `tb_daftar_sidang` (
  `id_daftar_sidang` int(11) NOT NULL AUTO_INCREMENT,
  `id_daftar_ta2` int(11) NOT NULL,
  `file_berkas` varchar(50) NOT NULL,
  `file_khs` varchar(50) NOT NULL,
  `file_krs` varchar(50) NOT NULL,
  `judul_perbaikan` varchar(225) NOT NULL,
  `status_acc` varchar(15) NOT NULL,
  PRIMARY KEY (`id_daftar_sidang`),
  KEY `id_daftar_ta2` (`id_daftar_ta2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar_ta1`
--

CREATE TABLE IF NOT EXISTS `tb_daftar_ta1` (
  `id_daftar_ta1` int(11) NOT NULL AUTO_INCREMENT,
  `judul_penelitian` varchar(225) NOT NULL,
  `thn_ajaran` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `file_proposal` varchar(50) NOT NULL,
  `file_khs` varchar(50) NOT NULL,
  `file_krs` varchar(50) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `id_koordinator` int(11) DEFAULT NULL,
  `id_dosen_pem1` int(11) NOT NULL,
  `id_dosen_pem2` int(11) NOT NULL,
  `status_acc` varchar(30) NOT NULL,
  PRIMARY KEY (`id_daftar_ta1`),
  KEY `id_dosen_pem1` (`id_dosen_pem1`),
  KEY `id_mhs` (`id_mhs`),
  KEY `id_koordinator` (`id_koordinator`),
  KEY `id_dosen_pem2` (`id_dosen_pem2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar_ta2`
--

CREATE TABLE IF NOT EXISTS `tb_daftar_ta2` (
  `id_daftar_ta2` int(11) NOT NULL AUTO_INCREMENT,
  `id_daftar_ta1` int(11) NOT NULL,
  `file_berkas` varchar(50) NOT NULL,
  `file_khs` varchar(50) NOT NULL,
  `file_krs` varchar(50) NOT NULL,
  `judul_perbaikan` varchar(225) NOT NULL,
  `status_acc` varchar(15) NOT NULL,
  `id_koordinator` int(11) NOT NULL,
  PRIMARY KEY (`id_daftar_ta2`),
  KEY `id_daftar_ta1` (`id_daftar_ta1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE IF NOT EXISTS `tb_dosen` (
  `id_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `nid` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `struktural` varchar(20) NOT NULL,
  `pendidikan_terakhir` varchar(5) NOT NULL,
  `golongan` varchar(10) NOT NULL,
  `jabatan_akd` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_dosen`),
  KEY `id_user` (`id_user`),
  KEY `id_user_2` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nid`, `nama`, `struktural`, `pendidikan_terakhir`, `golongan`, `jabatan_akd`, `id_user`) VALUES
(22, '412110561', 'Eddie Khrisna Putra, Drs., M.T.', 'PENGAJAR', 'S2', 'IV/b', 'LEKTOR KEPALA', 76),
(23, '412127670', 'Dr. Esmeralda Contessa D., Ir., M.T.', 'PENGAJAR', 'S3', 'IV/b', 'LEKTOR KEPALA', 77),
(24, '41216696', 'Tacbir Hendro Pudjiantoro, S.Si., M.T.', 'WADEK II', 'S2', 'III/c', 'LEKTOR', 78),
(25, '412176273', 'Wina Witanti, S.T., M.T.', 'SEKJUR INFORMATIKA', 'S2', 'III/c', 'LEKTOR', 79),
(26, '412166863', 'Yulison Herry Chrisnanto, S.T., M.T.', 'WADEK I', 'S2', 'III/c', 'LEKTOR', 80),
(27, '412157175', 'Gunawan Abdillah, S.Si., M.Cs.', 'KAJUR INFORMATIKA', 'S2', 'III/a', 'LEKTOR', 81),
(28, '412146459', 'Ade Kanianingsih', 'PENGAJAR', 'S2', 'III/c', 'LEKTOR', 82),
(29, '412166779', 'Faiza Renaldi, S.T., M.Sc.', 'PENGAJAR', 'S2', 'III/b', 'ASISTEN AHLI', 83),
(30, '412174182', 'Rezki Yuniarti, S.T., M.T.', 'PENGAJAR', 'S2', 'III/b', 'ASISTEN AHLI', 84),
(31, '412175878', 'Agus Komarudin, S.T., M.T.', 'KALAB INFORMATIKA', 'S2', 'III/b', 'ASISTEN AHLI', 85),
(32, '412186385', 'Dian Nursantika, S.Kom., M.Cs.', 'PENGAJAR', 'S2', 'III/b', 'ASISTEN AHLI', 86),
(33, '412178078', 'Asep Id Hadiana S.Si., M.T.', 'PENGAJAR', 'S2', 'III/b', 'TENAGA PENGAJAR', 87),
(34, '412182990', 'Ridwan Ilyas, S.Si', 'PENGAJAR', 'S1', 'III/a', 'TENAGA PENGAJAR', 88),
(35, '412185888', 'Fajri Rakhmat Umbara, S.T., M.T.', 'PENGAJAR', 'S2', 'III/a', 'TENAGA PENGAJAR', 89),
(36, '412190585', 'Puspita Nurul Sabrina, S.Kom., M.T.', 'PENGAJAR', 'S2', 'III/a', 'TENAGA PENGAJAR', 90),
(37, '412194889', 'Asri Maspupah, S.ST., M.T.', 'PENGAJAR', 'S2', 'III/a', 'TENAGA PENGAJAR', 91),
(38, '-', 'Irma Santikarama, S.Kom., M.T.', 'PENGAJAR', 'S2', 'III/a', 'TENAGA PENGAJAR', 92),
(39, '-', 'Erna Piantari, S.Kom., M.T.', 'PENGAJAR', 'S2', 'III/a', 'TENAGA PENGAJAR', 93);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_seminar`
--

CREATE TABLE IF NOT EXISTS `tb_jadwal_seminar` (
  `id_jadwal_seminar` int(11) NOT NULL AUTO_INCREMENT,
  `id_ruang` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `judul_penelitian` varchar(225) NOT NULL,
  `pem1` varchar(50) NOT NULL,
  `pem2` varchar(50) NOT NULL,
  `peng1` varchar(50) NOT NULL,
  `peng2` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jadwal_seminar`),
  KEY `id_ruang` (`id_ruang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_koordinator`
--

CREATE TABLE IF NOT EXISTS `tb_koordinator` (
  `id_koordinator` int(11) NOT NULL AUTO_INCREMENT,
  `id_dosen` int(11) NOT NULL,
  `thn_ajaran` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id_koordinator`),
  KEY `id_dosen` (`id_dosen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mhs`
--

CREATE TABLE IF NOT EXISTS `tb_mhs` (
  `id_mhs` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `status_mhs` varchar(15) NOT NULL,
  `peminatan` varchar(5) NOT NULL,
  `dosen_wali` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level_user` varchar(20) NOT NULL,
  PRIMARY KEY (`id_mhs`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `tb_mhs`
--

INSERT INTO `tb_mhs` (`id_mhs`, `nim`, `nama`, `tmp_lahir`, `tgl_lahir`, `jk`, `alamat`, `email`, `no_hp`, `status_mhs`, `peminatan`, `dosen_wali`, `username`, `password`, `level_user`) VALUES
(20, '3411141004', 'RATIH MUTIARA SYAIDA', 'CIANJUR', '28021996', 'P', 'CIANJUR', 'ratihmutiarasyaida@gmail.com', '085720767403', 'AKTIF', 'SIE', '', '', '', ''),
(21, '3411141049', 'UTHEU BUDHI SUSETYO', 'SOREANG', '1996-02-28', 'L', 'SOREANG', 'utheu@yahoo.co.id', '08572043242', 'Aktif', 'SIE', '', '', '', ''),
(23, '3411141047', 'HENY INDRIANI', 'WONOGIRI', '1996-02-08', 'P', 'PERUMAHAN TERANGSARI BLOK K2 NO.19, KARAWANG', 'henyindriani08@gmail.com', '085872248296', 'Aktif', 'SIE', '', '', '', ''),
(24, '3411141025', 'LINTANG FEBRI SUCIANI', 'BANDUNG', '1996-02-23', 'P', 'RAJAWALI', 'LINTANGFEBRI@GMAIL.COM', '089677655413', 'Aktif', 'SIE', '', '', '', ''),
(26, '3411141057', 'DHENIAR HARFAYANTO', 'CIMAHI', '1996-06-09', 'P', 'CIMAHI', 'LAVLAVMINKYMOMO@GMAIL.COM', '085765456345', 'Aktif', 'SIE', '', '', '', ''),
(27, '3411141005', 'SUMIRAT ADI PURNAMA SUNTARA', 'KARAWANG', '1996-05-23', 'L', 'KARAWANG', 'sumirat@yahoo.com', '-', 'Aktif', 'SCDM', '', '', '', ''),
(29, '3411141017', 'EKA RAHMAWATI', 'CIMAHI', '1996-10-23', 'P', 'CIMAHI', 'eka@gmail.com', '--', 'Aktif', 'SCDM', '', '', '', ''),
(30, '3411141047', 'MOHAMAD REZA ADITYA', '--', '1996-10-04', 'L', '--', 'reza@gmail.com', '--', 'Aktif', 'SCDM', '', '', '', ''),
(31, '3411141018', 'AMANDA RAKHMAT MUGIONO', '--', '1993-05-17', 'L', '--', 'amanda@gmail.com', '--', 'Aktif', 'SCDM', '', '', '', ''),
(32, '3411141031', 'KARTIKA NUR OKTAVIANI', '--', '1994-10-08', 'L', '--', 'kartika@gmail.com', '--', 'Aktif', 'SCDM', '', '', '', ''),
(33, '3411141034', 'SARTIKA DEWI', '--', '1996-09-09', 'L', '--', 'sartika@gmail.com', '--', 'Aktif', 'SCDM', '', '', '', ''),
(34, '3411141044', 'M. RIZKY ALIMSYAH', '--', '1996-12-17', 'L', '--', 'eky@yahoo.com', '--', 'Aktif', 'SCDM', '', '', '', ''),
(35, '3411141044', 'NANDA RIZKY', '--', '1996-01-06', 'L', '--', 'nanda@gmail.com', '--', 'Aktif', 'SCDM', '', '', '', ''),
(36, '3411141046', 'INGGIT SUMIRAH', '--', '1996-10-18', 'P', '--', 'inggit@gmail.com', '--', 'Aktif', 'SCDM', '', '', '', ''),
(37, '3411141050', 'NURUL HASANAH', '--', '1996-02-11', 'P', '---', 'nurul@gmail', '--', 'Aktif', 'SCDM', '', '', '', ''),
(38, '3411141055', 'SHELLY NURKHADIJAH', '--', '1996-11-15', 'P', '--', 'shelly@gmail.com', '--', 'Aktif', 'SCDM', '', '', '', ''),
(39, '3411141059', 'YAMINA AZMI', '--', '1997-01-01', 'P', '--', 'yamina@gmail.com', '--', 'Aktif', 'SCDM', '', '', '', ''),
(40, '3411141006', 'RIA AMELIA JUNANDES', '--', '1996-12-23', 'P', '--', 'ria@gmail.com', '--', 'Aktif', 'SCDM', '', '', '', ''),
(41, '3411141008', 'IZMA DYAH FAUZIANI', 'CIANJUR', '1996-03-23', 'P', '---', 'izma@gmail.com', '--', 'Aktif', 'SCDM', '', '', '', ''),
(42, '3411141015', 'MUHAMMAD FACHRY RAMADHAN', '--', '1996-10-10', 'L', '--', 'fachry@gmail.com', '--', 'Aktif', 'SCDM', '', '', '', ''),
(43, '3411141019', 'AHMAD SATRIO', '--', '1996-11-18', 'L', '--', 'ahmad@gmail.com', '--', 'Aktif', 'SCDM', '', '', '', ''),
(44, '3411141024', 'AKBAR RAMADHAN', '--', '1996-02-05', 'L', '--', 'akbar@gmail.com', '---', 'Aktif', 'SCDM', '', '', '', ''),
(45, '3411141027', 'FADJRIN FUJA AGRIAWAN', 'PALANGKARAYA', '1995-10-15', 'L', '--', 'fadjrin@gmail.com', '--', 'Aktif', 'SIE', '', '', '', ''),
(46, '3411141032', 'HELSA HAWARIYAH', '--', '1996-09-26', 'P', '--', 'helsa@gmail.com', '--', 'Aktif', 'SIE', '', '', '', ''),
(48, '3411141080', 'ADIT SAPUTRA HIMAWAN', 'CIMAHI', '1995-12-21', 'L', 'KOMPLEK PESONA FAJAR ASRI BLOK A 2', 'ADITHIMAWAH12@GMAIL.COM', '081394761754', 'Aktif', 'SIE', '', '', '', ''),
(49, '3411141004', 'RATIH MUTIARA SYAIDA', 'CIANJUR', '2017-10-26', 'P', 'BTN PASIR SEMBUNG INDAH, CIANJUR', 'ratihmutiarasyaida@gmail.com', '085720767403', 'Aktif', 'SIE', '', '', '', ''),
(50, '3411141049', 'UTHEU BUDHI SUSETYO', 'SOREANG', '2017-10-29', 'P', 'SOREANG', 'utheu@yahoo.co.id', '081394761754', 'aktif', 'SIE', '0', 'utheubudhi', '70d0d2cf6996e3910713ee0beb464b2b', 'mhs'),
(51, '3411141045', 'DESTY IVANA PRIYANTIKA', 'SUBANG', '1996-12-25', 'P', 'Dsn. Krajan Timur RT 001/002 Desa Ciasem Tengah Ke', 'priyantika_ivana@yahoo.co.id', '085722615633', 'aktif', 'SIE', '0', 'destyivana', 'd1d6d5de3dc5218166c303904c32e99f', 'mhs'),
(52, '3411141057', 'REZA INDRAWAN', 'SUBANG', '2017-10-31', 'L', 'CIMAHI', 'ratihmutiarasyaida@yahoo.co.id', '085872248296', 'aktif', 'SIE', '0', 'rezaindrawan', 'c33e06bf30c1fcfee9b9fc7c577e248d', 'mhs'),
(53, '3411141080', 'ADIT SAPUTRA HIMAWAN', 'Cimahi', '2017-12-21', 'L', 'CIMAHI', 'aditsaput@gmail.com', '087789998989', 'aktif', 'SIE', '0', 'aditsaput', '956d70fcbe1ca86a67b8ab5eca6bdfb0', 'mhs'),
(54, '3411141057', 'DHENIAR HARFAYANTI', 'CIMAHI', '1996-05-06', 'P', 'CIMAHI', 'dheniarharfa@yahoo.com', '097778788666', 'aktif', 'SIE', '0', 'dheniarharfa', '1ea73df399ff056793833438d5d3ed4a', 'mhs'),
(55, '3411141008', 'IZMA DYAH FAUZIANI', 'CIANJUR', '2018-03-23', 'P', 'CIANJUR', 'izma@gmail.com', '09898987878', 'aktif', 'SIE', '0', 'izmadyah', 'b8c711379da10a26d2bdc0d24c0e3e7c', 'mhs'),
(56, '3411141047', 'HENY INDRIANI', 'KARAWANG', '1996-02-06', 'P', 'KARAWANG', 'henyin@yahoo.com', '089777676767', 'aktif', 'SIE', '0', 'henyin', 'bd0688ca44d83c0c8b02598c82062e0d', 'mhs'),
(57, '3411141025', 'LINTANG FEBRI SUCIYANI', 'BANDUNG', '1996-02-06', 'P', 'RAJAWALI, BANDUNG', 'lintangfebrisuciyani@gmail.com', '087887899898', 'aktif', 'SIE', '0', 'lintangsuci', 'e7eac7d71b80f5cc6c6005ce351029ee', 'mhs'),
(58, '3411141009', 'AKBAR RAMADHAN PERMEDI', 'KARAWANG', '1996-11-13', 'L', 'KARAWANG', 'akbarramadhan@gmail.com', '088999899898', 'aktif', 'SIE', '0', 'akbarramadhan', 'a2c0ea6450fd047366204414120dda5b', 'mhs'),
(59, '3411141089', 'IKA NURANI', 'CIMAHI', '1995-11-06', 'P', 'CIMAHI', 'ikanurai@gmail.com', '087876678898', 'aktif', 'SIE', '0', 'ikanurani', 'c7ef5e267062bff1febfa7fa66d57a76', 'mhs'),
(60, '3411141087', 'YUNI EKA PRATIWI', 'CIMAHI', '1996-11-28', 'P', 'CIMAHI', 'yunieka@gmail.com', '08787876668', 'aktif', 'SIE', '0', 'yunieka', '65d80d3c87254662102ab04b41ef9a28', 'mhs');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai_pembimbing`
--

CREATE TABLE IF NOT EXISTS `tb_nilai_pembimbing` (
  `id_nilai_pembimbing` int(11) NOT NULL AUTO_INCREMENT,
  `materi_penelitian` int(5) NOT NULL,
  `pemahaman` int(5) NOT NULL,
  `pencapaian_target` int(5) NOT NULL,
  `aspek_kedipsilan` int(5) NOT NULL,
  `pemahaman_penelitian` int(5) NOT NULL,
  `metode_penelitian` int(5) NOT NULL,
  `kedalaman_teori` int(5) NOT NULL,
  `analisis_hasil_penelitian` int(5) NOT NULL,
  `teknik_presentasi` int(5) NOT NULL,
  `teknik_penulisan` int(5) NOT NULL,
  `pemahaman_pengembangan_pl` int(5) NOT NULL,
  PRIMARY KEY (`id_nilai_pembimbing`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai_penguji`
--

CREATE TABLE IF NOT EXISTS `tb_nilai_penguji` (
  `id_nilai_penguji` int(11) NOT NULL,
  `pemahaman_penelitian` int(5) NOT NULL,
  `kedalaman_teori` int(5) NOT NULL,
  `metode_penelitian` int(5) NOT NULL,
  `analisis_hasil_penelitian` int(5) NOT NULL,
  `teknik_presentasi` int(5) NOT NULL,
  `teknik_penulisa` int(5) NOT NULL,
  `pemahaman_pengembangan_pl` int(5) NOT NULL,
  PRIMARY KEY (`id_nilai_penguji`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_periode`
--

CREATE TABLE IF NOT EXISTS `tb_periode` (
  `id_periode` int(11) NOT NULL AUTO_INCREMENT,
  `thn_ajaran` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `tgl_buka` date NOT NULL,
  `tgl_tutup` date NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id_periode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tb_periode`
--

INSERT INTO `tb_periode` (`id_periode`, `thn_ajaran`, `semester`, `tgl_buka`, `tgl_tutup`, `status`) VALUES
(1, '2017/2018', 'Ganjil', '2017-10-14', '2017-10-15', 'pendaftaran_ta1'),
(2, '2017/2018', 'Ganjil', '2017-10-14', '2017-10-15', 'seminar_ta1'),
(3, '2017/2018', 'GANJIL', '2017-10-22', '2017-10-28', 'pendaftaran_ta1'),
(6, '2017/2018', 'GANJIL', '2017-10-26', '2017-10-31', 'pendaftaran_ta1'),
(7, '2017/2018', 'GANJIL', '2017-10-31', '2017-11-02', 'seminar_ta2'),
(8, '2017/2018', 'GANJIL', '2017-10-28', '2017-10-31', 'seminar_ta2'),
(9, '2017/2018', 'GANJIL', '2017-10-24', '2017-10-31', 'seminar_ta1'),
(10, '2017/2018', 'GANJIL', '2017-10-26', '2017-10-31', 'pendaftaran_ta2'),
(11, '2017/2018', 'GANJIL', '2017-10-26', '2017-10-31', 'sidang'),
(12, '2017/2018', 'GANJIL', '2017-11-05', '2017-11-10', 'pendaftaran_ta1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruang`
--

CREATE TABLE IF NOT EXISTS `tb_ruang` (
  `id_ruang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ruang` varchar(5) NOT NULL,
  PRIMARY KEY (`id_ruang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_ruang`
--

INSERT INTO `tb_ruang` (`id_ruang`, `nama_ruang`) VALUES
(2, 'R1.3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_seminar_ta1`
--

CREATE TABLE IF NOT EXISTS `tb_seminar_ta1` (
  `id_seminar_ta1` int(11) NOT NULL AUTO_INCREMENT,
  `id_daftar_ta1` int(11) NOT NULL,
  `file_berkas` varchar(50) NOT NULL,
  `file_khs` varchar(50) NOT NULL,
  `file_krs` varchar(50) NOT NULL,
  `status_lulus` varchar(15) DEFAULT NULL,
  `status_acc` varchar(15) NOT NULL,
  `judul_perbaikan` varchar(225) DEFAULT NULL,
  `id_dosen_peng1` int(11) DEFAULT NULL,
  `id_dosen_peng2` int(11) DEFAULT NULL,
  `id_nilai_peng1` int(11) DEFAULT NULL,
  `id_nilai_peng2` int(11) DEFAULT NULL,
  `id_nilai_pem1` int(11) DEFAULT NULL,
  `id_nilai_pem2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_seminar_ta1`),
  KEY `id_daftar_ta1` (`id_daftar_ta1`),
  KEY `id_dosen_peng1` (`id_dosen_peng1`),
  KEY `id_dosen_peng2` (`id_dosen_peng2`),
  KEY `id_nilai_peng1` (`id_nilai_peng1`),
  KEY `id_nilai_peng2` (`id_nilai_peng2`),
  KEY `id_nilai_pem1` (`id_nilai_pem1`),
  KEY `id_nilai_pem2` (`id_nilai_pem2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_seminar_ta2`
--

CREATE TABLE IF NOT EXISTS `tb_seminar_ta2` (
  `id_seminar_ta2` int(11) NOT NULL AUTO_INCREMENT,
  `id_daftar_ta2` int(11) NOT NULL,
  `judul_perbaikan` varchar(225) NOT NULL,
  `file_berkas` varchar(50) NOT NULL,
  `file_khs` varchar(50) NOT NULL,
  `file_krs` varchar(50) NOT NULL,
  `status_lulus` int(15) NOT NULL,
  `status_acc` int(15) NOT NULL,
  `id_dosen_peng1` int(11) NOT NULL,
  `id_dosen_peng2` int(11) NOT NULL,
  `id_nilai_peng1` int(11) NOT NULL,
  `id_nilai_peng2` int(11) NOT NULL,
  `id_nilai_pem1` int(11) NOT NULL,
  `id_nilai_pem2` int(11) NOT NULL,
  PRIMARY KEY (`id_seminar_ta2`),
  KEY `id_daftar_ta2` (`id_daftar_ta2`),
  KEY `id_dosen_peng1` (`id_dosen_peng1`),
  KEY `id_dosen_peng2` (`id_dosen_peng2`),
  KEY `id_nilai_peng1` (`id_nilai_peng1`),
  KEY `id_nilai_peng2` (`id_nilai_peng2`),
  KEY `id_nilai_pem1` (`id_nilai_pem1`),
  KEY `id_nilai_pem2` (`id_nilai_pem2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sidang`
--

CREATE TABLE IF NOT EXISTS `tb_sidang` (
  `id_sidang` int(11) NOT NULL AUTO_INCREMENT,
  `id_daftar_sidang` int(11) NOT NULL,
  `file_berkas` varchar(50) NOT NULL,
  `file_khs` varchar(50) NOT NULL,
  `file_krs` varchar(50) NOT NULL,
  `status_lulus` varchar(15) NOT NULL,
  `status_acc` varchar(15) NOT NULL,
  `judul_perbaikan` varchar(225) NOT NULL,
  `id_dosen_peng1` int(11) NOT NULL,
  `id_dosen_peng2` int(11) NOT NULL,
  `id_nilai_peng1` int(11) NOT NULL,
  `id_nilai_peng2` int(11) NOT NULL,
  `id_nilai_pem1` int(11) NOT NULL,
  `id_nilai_pem2` int(11) NOT NULL,
  PRIMARY KEY (`id_sidang`),
  KEY `id_daftar_sidang` (`id_daftar_sidang`),
  KEY `id_dosen_peng1` (`id_dosen_peng1`),
  KEY `id_dosen_peng1_2` (`id_dosen_peng1`),
  KEY `id_dosen_peng2` (`id_dosen_peng2`),
  KEY `id_nilai_peng1` (`id_nilai_peng1`),
  KEY `id_nilai_peng2` (`id_nilai_peng2`),
  KEY `id_nilai_pem1` (`id_nilai_pem1`),
  KEY `id_nilai_pem2` (`id_nilai_pem2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_staff`
--

CREATE TABLE IF NOT EXISTS `tb_staff` (
  `id_staff` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_staff`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_studi`
--

CREATE TABLE IF NOT EXISTS `tb_studi` (
  `id_studi` int(11) NOT NULL AUTO_INCREMENT,
  `ipk` varchar(5) NOT NULL,
  `total_sks` varchar(5) NOT NULL,
  `jml_d` varchar(5) NOT NULL,
  `jml_e` varchar(5) NOT NULL,
  `jml_mk_krs` varchar(5) NOT NULL,
  `jml_sks_krs` varchar(5) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `thn_ajaran` varchar(10) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  PRIMARY KEY (`id_studi`),
  KEY `id_mhs` (`id_mhs`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- Dumping data for table `tb_studi`
--

INSERT INTO `tb_studi` (`id_studi`, `ipk`, `total_sks`, `jml_d`, `jml_e`, `jml_mk_krs`, `jml_sks_krs`, `semester`, `thn_ajaran`, `id_mhs`) VALUES
(2, '3,4', '135', '0', '0', '7', '14', 'Ganjil', '2017/2018', 21),
(4, '3,31', '135', '0', '0', '7', '14', 'Ganjil', '2017/2018', 23),
(5, '3,6', '135', '0', '0', '7', '144', 'Ganjil', '2017/2018', 24),
(9, '4', '144', '0', '0', '6', '12', 'Ganjil', '2017/2018', 20),
(10, '3,4', '135', '0', '0', '5', '10', 'Ganjil', '2017/2018', 20),
(11, '34', '43', '434', '432', '432', '32', 'Ganjil', '2017/2018', 21),
(17, '3,3', '3', '3', '3', '3', '3', 'Ganjil', '0', 24),
(23, '4.00', '5', '5', '5', '5', '54', 'Ganjil', '2', 21),
(24, '4.00', '5', '5', '5', '5', '54', 'Ganjil', '2', 21),
(25, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(26, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(27, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(28, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 20),
(29, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(30, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(31, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(32, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(33, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(34, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(35, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(36, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(37, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(38, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(39, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(40, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(41, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(42, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(43, '3,35', '133', '0', '0', '5', '10', 'Ganjil', '2017/2018', 26),
(44, '3,06', '131', '1', '0', '5', '10', 'Ganjil', '2017/2018', 48),
(58, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 20),
(59, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 20),
(60, '5', '5', '5', '5', '5', '54', 'Ganjil', '0', 21),
(61, '5', '5', '5', '55', '5', '54', 'Ganjil', '0', 20),
(65, '6', '65', '6', '6', '6', '6', 'Ganjil', '2017/2018', 20),
(66, '6', '65', '6', '6', '6', '6', 'Ganjil', '2017/2018', 20),
(67, '6', '65', '6', '6', '6', '6', 'Ganjil', '2017/2018', 20),
(68, '43', '3', '3', '3', '3', '3', 'Genap', '2017/2018', 48),
(69, '5', '5', '5', '5', '5', '54', 'Ganjil', '2017/2018', 24),
(70, '5', '5', '5', '5', '5', '54', 'Ganjil', '2017/2018', 24),
(71, '5', '5', '5', '5', '5', '54', 'Ganjil', '2017/2018', 24),
(72, '5', '5', '5', '5', '5', '54', 'Ganjil', '2017/2018', 24),
(73, '5', '5', '5', '5', '5', '54', 'Ganjil', '2017/2018', 24),
(77, '55', '5', '5', '5', '5', '54', 'Ganjil', '2017/2018', 24),
(78, '55', '5', '5', '5', '5', '54', 'Ganjil', '2017/2018', 24),
(79, '4', '4', '4', '4', '4', '4', 'Ganjil', '2017/2018', 24),
(80, '4', '4', '4', '4', '4', '4', 'Ganjil', '2017/2018', 24),
(81, '4', '4', '4', '4', '4', '4', 'Ganjil', '2017/2018', 24),
(82, '4', '4', '4', '4', '4', '4', 'Ganjil', '2017/2018', 24),
(83, '4', '4', '4', '4', '4', '4', 'Ganjil', '2017/2018', 24),
(84, '4', '4', '4', '4', '4', '4', 'Ganjil', '2017/2018', 24),
(85, '3,3', '135', '0', '0', '5', '10', 'Ganjil', '2017/2018', 20),
(86, '4', '4', '4', '4', '4', '4', 'Ganjil', '2017/2018', 24),
(87, '4', '4', '4', '4', '4', '4', 'Ganjil', '2017/2018', 20),
(88, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 21),
(89, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 21),
(90, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 21),
(91, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(92, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(93, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(94, '4', '4', '4', '4', '4', '4', 'Ganjil', '2017/2018', 24),
(99, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(100, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(101, '4', '4', '4', '4', '4', '4', 'Ganjil', '2017/2018', 48),
(102, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(103, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(104, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(105, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 24),
(106, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 20),
(107, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 20),
(108, '4', '4', '4', '4', '4', '4', 'Ganjil', '0', 20);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_daftar_sidang`
--
ALTER TABLE `tb_daftar_sidang`
  ADD CONSTRAINT `tb_daftar_sidang_ibfk_1` FOREIGN KEY (`id_daftar_ta2`) REFERENCES `tb_daftar_ta2` (`id_daftar_ta2`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_daftar_ta1`
--
ALTER TABLE `tb_daftar_ta1`
  ADD CONSTRAINT `tb_daftar_ta1_ibfk_1` FOREIGN KEY (`id_dosen_pem1`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_daftar_ta1_ibfk_2` FOREIGN KEY (`id_dosen_pem2`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_daftar_ta1_ibfk_3` FOREIGN KEY (`id_mhs`) REFERENCES `tb_mhs` (`id_mhs`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_daftar_ta1_ibfk_4` FOREIGN KEY (`id_koordinator`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_daftar_ta2`
--
ALTER TABLE `tb_daftar_ta2`
  ADD CONSTRAINT `tb_daftar_ta2_ibfk_1` FOREIGN KEY (`id_daftar_ta1`) REFERENCES `tb_daftar_ta1` (`id_daftar_ta1`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD CONSTRAINT `tb_dosen_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_akun` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_jadwal_seminar`
--
ALTER TABLE `tb_jadwal_seminar`
  ADD CONSTRAINT `tb_jadwal_seminar_ibfk_1` FOREIGN KEY (`id_ruang`) REFERENCES `tb_ruang` (`id_ruang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_koordinator`
--
ALTER TABLE `tb_koordinator`
  ADD CONSTRAINT `tb_koordinator_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_seminar_ta1`
--
ALTER TABLE `tb_seminar_ta1`
  ADD CONSTRAINT `tb_seminar_ta1_ibfk_1` FOREIGN KEY (`id_daftar_ta1`) REFERENCES `tb_daftar_ta1` (`id_daftar_ta1`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_seminar_ta1_ibfk_2` FOREIGN KEY (`id_dosen_peng1`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_seminar_ta1_ibfk_3` FOREIGN KEY (`id_dosen_peng2`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_seminar_ta1_ibfk_4` FOREIGN KEY (`id_nilai_pem1`) REFERENCES `tb_nilai_pembimbing` (`id_nilai_pembimbing`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_seminar_ta1_ibfk_5` FOREIGN KEY (`id_nilai_pem2`) REFERENCES `tb_nilai_pembimbing` (`id_nilai_pembimbing`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_seminar_ta1_ibfk_6` FOREIGN KEY (`id_nilai_peng1`) REFERENCES `tb_nilai_penguji` (`id_nilai_penguji`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_seminar_ta1_ibfk_7` FOREIGN KEY (`id_nilai_peng2`) REFERENCES `tb_nilai_penguji` (`id_nilai_penguji`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_seminar_ta2`
--
ALTER TABLE `tb_seminar_ta2`
  ADD CONSTRAINT `tb_seminar_ta2_ibfk_1` FOREIGN KEY (`id_daftar_ta2`) REFERENCES `tb_daftar_ta2` (`id_daftar_ta2`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_seminar_ta2_ibfk_2` FOREIGN KEY (`id_dosen_peng1`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_seminar_ta2_ibfk_3` FOREIGN KEY (`id_dosen_peng2`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_seminar_ta2_ibfk_4` FOREIGN KEY (`id_nilai_pem1`) REFERENCES `tb_nilai_pembimbing` (`id_nilai_pembimbing`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_seminar_ta2_ibfk_5` FOREIGN KEY (`id_nilai_pem2`) REFERENCES `tb_nilai_pembimbing` (`id_nilai_pembimbing`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_seminar_ta2_ibfk_6` FOREIGN KEY (`id_nilai_peng1`) REFERENCES `tb_nilai_penguji` (`id_nilai_penguji`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_seminar_ta2_ibfk_7` FOREIGN KEY (`id_nilai_peng2`) REFERENCES `tb_nilai_penguji` (`id_nilai_penguji`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_sidang`
--
ALTER TABLE `tb_sidang`
  ADD CONSTRAINT `tb_sidang_ibfk_1` FOREIGN KEY (`id_dosen_peng1`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_sidang_ibfk_2` FOREIGN KEY (`id_dosen_peng2`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_sidang_ibfk_3` FOREIGN KEY (`id_nilai_pem1`) REFERENCES `tb_nilai_pembimbing` (`id_nilai_pembimbing`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_sidang_ibfk_4` FOREIGN KEY (`id_nilai_pem2`) REFERENCES `tb_nilai_pembimbing` (`id_nilai_pembimbing`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_sidang_ibfk_5` FOREIGN KEY (`id_nilai_peng1`) REFERENCES `tb_nilai_penguji` (`id_nilai_penguji`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_sidang_ibfk_6` FOREIGN KEY (`id_nilai_peng2`) REFERENCES `tb_nilai_penguji` (`id_nilai_penguji`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_sidang_ibfk_7` FOREIGN KEY (`id_daftar_sidang`) REFERENCES `tb_daftar_sidang` (`id_daftar_sidang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD CONSTRAINT `tb_staff_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_akun` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_studi`
--
ALTER TABLE `tb_studi`
  ADD CONSTRAINT `tb_studi_ibfk_1` FOREIGN KEY (`id_mhs`) REFERENCES `tb_mhs` (`id_mhs`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
