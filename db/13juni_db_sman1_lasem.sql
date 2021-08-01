-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 06:07 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sman1_lasem`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_jadwals`
--

CREATE TABLE `detail_jadwals` (
  `id_detail_jadwal` int(11) NOT NULL,
  `id_jadwal` int(20) NOT NULL,
  `id_mapel` varchar(20) NOT NULL,
  `jam` time NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_jadwals`
--

INSERT INTO `detail_jadwals` (`id_detail_jadwal`, `id_jadwal`, `id_mapel`, `jam`, `hari`) VALUES
(2, 2, 'mp3', '09:00:00', 'Senin'),
(3, 3, 'mp3', '10:00:00', 'Senin'),
(7, 10, 'mp9', '11:11:00', 'Jumat'),
(8, 11, 'mp9', '14:22:00', 'Rabu');

-- --------------------------------------------------------

--
-- Table structure for table `detail_presensis`
--

CREATE TABLE `detail_presensis` (
  `id_detail_presensi` int(11) NOT NULL,
  `id_presensi` int(20) DEFAULT NULL,
  `nis` varchar(20) DEFAULT NULL,
  `status` enum('Alpha','Izin','Sakit') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_presensis`
--

INSERT INTO `detail_presensis` (`id_detail_presensi`, `id_presensi`, `nis`, `status`) VALUES
(1, 8, '1000000002', 'Alpha'),
(2, 9, '1000000002', 'Alpha'),
(3, 9, '1000000003', 'Izin'),
(4, 8, '1000000003', 'Sakit');

-- --------------------------------------------------------

--
-- Table structure for table `ekskuls`
--

CREATE TABLE `ekskuls` (
  `id_ekskul` int(20) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `nama_ekskul` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ekskuls`
--

INSERT INTO `ekskuls` (`id_ekskul`, `id_pegawai`, `nama_ekskul`) VALUES
(1, 1, 'Ekskul 1'),
(2, 2, 'Ekskul 2'),
(3, 3, 'Ekskul 3'),
(4, 4, 'Ekskul 4');

-- --------------------------------------------------------

--
-- Table structure for table `jadwals`
--

CREATE TABLE `jadwals` (
  `id_jadwal` int(20) NOT NULL,
  `id_kelas` varchar(5) DEFAULT NULL,
  `semester` enum('I','II') DEFAULT NULL,
  `tahun_ajaran` enum('2017/2018','2018/2019','2019/2020','2020/2021','2021/2022','2022/2023','2023/2024','2024/2025','2025/2026','2026/2027','2027/2028','2028/2029','2029/2030') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwals`
--

INSERT INTO `jadwals` (`id_jadwal`, `id_kelas`, `semester`, `tahun_ajaran`) VALUES
(2, '1B', 'I', '2019/2020'),
(3, '1C', 'II', '2020/2021'),
(10, '2D', 'II', '2029/2030'),
(11, '2A', 'II', '2028/2029');

-- --------------------------------------------------------

--
-- Table structure for table `kelass`
--

CREATE TABLE `kelass` (
  `id_kelas` varchar(5) NOT NULL,
  `nama_kelas` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelass`
--

INSERT INTO `kelass` (`id_kelas`, `nama_kelas`) VALUES
('1A', 'Kelas 1A'),
('1B', 'Kelas 1B'),
('1C', 'Kelas 1C'),
('1D', 'Kelas 1D'),
('2A', 'Kelas 2A'),
('2B', 'Kelas 2B'),
('2C', 'Kelas 2C'),
('2D', 'Kelas 2DD');

-- --------------------------------------------------------

--
-- Table structure for table `mapels`
--

CREATE TABLE `mapels` (
  `id_mapel` varchar(20) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `nama_mapel` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapels`
--

INSERT INTO `mapels` (`id_mapel`, `id_pegawai`, `nama_mapel`) VALUES
('mp2', 2, 'Mapel Dua'),
('mp3', 3, 'Mapel Tiga'),
('mp4', 4, 'Mapel Empat'),
('mp5', 2, 'Mapel Lima'),
('mp9', 3, 'Mapel Semb');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_ekstrakulikulers`
--

CREATE TABLE `nilai_ekstrakulikulers` (
  `id_nilai_ekskul` int(20) NOT NULL,
  `nis` varchar(20) DEFAULT NULL,
  `id_ekskul` int(20) DEFAULT NULL,
  `nilai_akhir_ekskul` char(2) DEFAULT NULL,
  `deskripsi_nilai` varchar(100) DEFAULT NULL,
  `tahun_ajaran` enum('2017/2018','2018/2019','2019/2020','2020/2021','2021/2022','2022/2023','2023/2024','2024/2025','2025/2026','2026/2027','2027/2028','2028/2029','2029/2030') DEFAULT NULL,
  `semester` enum('I','II') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_ekstrakulikulers`
--

INSERT INTO `nilai_ekstrakulikulers` (`id_nilai_ekskul`, `nis`, `id_ekskul`, `nilai_akhir_ekskul`, `deskripsi_nilai`, `tahun_ajaran`, `semester`) VALUES
(1, '1000000001', 1, 'A', 'deskripsi 1', '2019/2020', 'I'),
(2, '1000000002', 2, 'B', 'deskripsi 2', '2019/2020', 'I'),
(3, '1000000003', 3, 'C', 'deskripsi 3', '2020/2021', 'II'),
(5, '1000000005', 1, 'D', 'deskripsi 6', '2020/2021', 'II'),
(6, '1000000004', 3, 'E', 'lima enam', '2027/2028', 'II');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_semesters`
--

CREATE TABLE `nilai_semesters` (
  `id_nilai_semester` int(20) NOT NULL,
  `nis` varchar(20) DEFAULT NULL,
  `id_mapel` varchar(20) DEFAULT NULL,
  `id_kelas` varchar(5) DEFAULT NULL,
  `semester` enum('I','II') DEFAULT NULL,
  `tahun_ajaran` enum('2017/2018','2018/2019','2019/2020','2020/2021','2021/2022','2022/2023','2023/2024','2024/2025','2025/2026','2026/2027','2027/2028','2028/2029','2029/2030') NOT NULL,
  `nilai_pengetahuan` float DEFAULT NULL,
  `konversi_nilai_pengetahuan` varchar(4) NOT NULL,
  `nilai_keterampilan` float DEFAULT NULL,
  `konversi_nilai_keterampilan` varchar(4) NOT NULL,
  `nilai_sikap` char(2) DEFAULT NULL,
  `nilai_tugas1_p` float DEFAULT NULL,
  `nilai_tugas2_p` float DEFAULT NULL,
  `nilai_ulanganH1_p` float DEFAULT NULL,
  `nilai_ulanganH2_p` float DEFAULT NULL,
  `nilai_tugas1_k` float NOT NULL,
  `nilai_tugas2_k` float NOT NULL,
  `nilai_ulanganH1_k` float NOT NULL,
  `nilai_ulanganH2_k` float NOT NULL,
  `nilai_UTS` float DEFAULT NULL,
  `nilai_UAS` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_semesters`
--

INSERT INTO `nilai_semesters` (`id_nilai_semester`, `nis`, `id_mapel`, `id_kelas`, `semester`, `tahun_ajaran`, `nilai_pengetahuan`, `konversi_nilai_pengetahuan`, `nilai_keterampilan`, `konversi_nilai_keterampilan`, `nilai_sikap`, `nilai_tugas1_p`, `nilai_tugas2_p`, `nilai_ulanganH1_p`, `nilai_ulanganH2_p`, `nilai_tugas1_k`, `nilai_tugas2_k`, `nilai_ulanganH1_k`, `nilai_ulanganH2_k`, `nilai_UTS`, `nilai_UAS`) VALUES
(6, '1000000005', 'mp3', '2D', 'II', '2025/2026', 100, 'A', 100, 'A', 'C', 100, 100, 100, 100, 100, 100, 100, 100, 100, 100),
(7, '1000000004', 'mp9', '2D', 'I', '2025/2026', 89.625, 'A-', 90, 'A-', 'B', 87, 90, 90, 90, 90, 90, 90, 90, 90, 90);

-- --------------------------------------------------------

--
-- Table structure for table `pegawais`
--

CREATE TABLE `pegawais` (
  `id_pegawai` int(11) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama_pegawai` varchar(30) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `level` enum('Admin','Guru Wali','Guru Mapel') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawais`
--

INSERT INTO `pegawais` (`id_pegawai`, `nip`, `nama_pegawai`, `username`, `password`, `no_hp`, `level`) VALUES
(1, '0000000001', 'Admin 1', 'admin_1', '123', '081111111111', 'Admin'),
(2, '0000000002', 'Guru Mapel 1', 'guru_1', '123', '08222222221', 'Guru Mapel'),
(3, '0000000003', 'Guru Wali 1', 'wali_1', '123', '08333333331', 'Guru Wali'),
(4, '0000000004', 'Guru Mapel 2', 'mapel_1', '123', '08444444441', 'Guru Mapel'),
(6, '0000000008', 'Test 44999', 'teeeeee', '123', '345345345345', 'Guru Wali');

-- --------------------------------------------------------

--
-- Table structure for table `presensis`
--

CREATE TABLE `presensis` (
  `id_presensi` int(20) NOT NULL,
  `id_kelas` varchar(5) DEFAULT NULL,
  `tgl_presensi` date DEFAULT NULL,
  `tahun_ajaran` enum('2017/2018','2018/2019','2019/2020','2020/2021','2021/2022','2022/2023','2023/2024','2024/2025','2025/2026','2026/2027','2027/2028','2028/2029','2029/2030') DEFAULT NULL,
  `semester` enum('I','II') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presensis`
--

INSERT INTO `presensis` (`id_presensi`, `id_kelas`, `tgl_presensi`, `tahun_ajaran`, `semester`) VALUES
(8, '1A', '2020-06-01', '2019/2020', 'I'),
(9, '1A', '2020-06-02', '2019/2020', 'II');

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `nis` varchar(20) NOT NULL,
  `id_kelas` varchar(5) DEFAULT NULL,
  `nama_siswa` varchar(30) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(70) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`nis`, `id_kelas`, `nama_siswa`, `jenis_kelamin`, `tgl_lahir`, `alamat`, `username`, `password`) VALUES
('1000000001', '1A', 'Siswa 1', 'Perempuan', '1998-08-07', 'Alamat Siswa 1', 'siswa_1', '123'),
('1000000002', '1A', 'Siswa 2', 'Laki-laki', '1998-08-10', 'Alamat Siswa 2', 'siswa_2', '123'),
('1000000003', '2A', 'Siswa 3', 'Perempuan', '1998-06-02', 'Alamat Siswa 3', 'siswa_3', '123'),
('1000000004', '2C', 'Siswa 4', 'Laki-laki', '1998-03-11', 'Alamat Siswa 4', 'siswa_4', '123'),
('1000000005', '2D', 'Siswa 5', 'Perempuan', '1998-01-09', 'Alamat Siswa 5Alamat Siswa 3Alamat Siswa 3Alamat Siswa 3Alamat Siswa 3', 'siswa_5', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_jadwals`
--
ALTER TABLE `detail_jadwals`
  ADD PRIMARY KEY (`id_detail_jadwal`),
  ADD KEY `detailjadwals_fk_id_jadwal` (`id_jadwal`),
  ADD KEY `detailjadwals_fk_id_mapel` (`id_mapel`);

--
-- Indexes for table `detail_presensis`
--
ALTER TABLE `detail_presensis`
  ADD PRIMARY KEY (`id_detail_presensi`),
  ADD KEY `id_presensi` (`id_presensi`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `ekskuls`
--
ALTER TABLE `ekskuls`
  ADD PRIMARY KEY (`id_ekskul`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `kelass`
--
ALTER TABLE `kelass`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mapels`
--
ALTER TABLE `mapels`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `nilai_ekstrakulikulers`
--
ALTER TABLE `nilai_ekstrakulikulers`
  ADD PRIMARY KEY (`id_nilai_ekskul`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_ekskul` (`id_ekskul`);

--
-- Indexes for table `nilai_semesters`
--
ALTER TABLE `nilai_semesters`
  ADD PRIMARY KEY (`id_nilai_semester`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `presensis`
--
ALTER TABLE `presensis`
  ADD PRIMARY KEY (`id_presensi`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `fk_id_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_jadwals`
--
ALTER TABLE `detail_jadwals`
  MODIFY `id_detail_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `detail_presensis`
--
ALTER TABLE `detail_presensis`
  MODIFY `id_detail_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ekskuls`
--
ALTER TABLE `ekskuls`
  MODIFY `id_ekskul` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id_jadwal` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nilai_ekstrakulikulers`
--
ALTER TABLE `nilai_ekstrakulikulers`
  MODIFY `id_nilai_ekskul` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nilai_semesters`
--
ALTER TABLE `nilai_semesters`
  MODIFY `id_nilai_semester` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `presensis`
--
ALTER TABLE `presensis`
  MODIFY `id_presensi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_jadwals`
--
ALTER TABLE `detail_jadwals`
  ADD CONSTRAINT `detailjadwals_fk_id_jadwal` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwals` (`id_jadwal`),
  ADD CONSTRAINT `detailjadwals_fk_id_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapels` (`id_mapel`);

--
-- Constraints for table `detail_presensis`
--
ALTER TABLE `detail_presensis`
  ADD CONSTRAINT `detpresensi_id_presensi` FOREIGN KEY (`id_presensi`) REFERENCES `presensis` (`id_presensi`),
  ADD CONSTRAINT `fk_nis_detailpresensi` FOREIGN KEY (`nis`) REFERENCES `siswas` (`nis`);

--
-- Constraints for table `ekskuls`
--
ALTER TABLE `ekskuls`
  ADD CONSTRAINT `ekskuls_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawais` (`id_pegawai`);

--
-- Constraints for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD CONSTRAINT `jadwals_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelass` (`id_kelas`);

--
-- Constraints for table `mapels`
--
ALTER TABLE `mapels`
  ADD CONSTRAINT `mapels_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawais` (`id_pegawai`);

--
-- Constraints for table `nilai_ekstrakulikulers`
--
ALTER TABLE `nilai_ekstrakulikulers`
  ADD CONSTRAINT `fk_id_ekskul_nilaiekskul` FOREIGN KEY (`id_ekskul`) REFERENCES `ekskuls` (`id_ekskul`),
  ADD CONSTRAINT `fk_nis_eskul` FOREIGN KEY (`nis`) REFERENCES `siswas` (`nis`);

--
-- Constraints for table `nilai_semesters`
--
ALTER TABLE `nilai_semesters`
  ADD CONSTRAINT `fk_nis_nilaisemester` FOREIGN KEY (`nis`) REFERENCES `siswas` (`nis`),
  ADD CONSTRAINT `nilai_semesters_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `mapels` (`id_mapel`),
  ADD CONSTRAINT `nilai_semesters_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `kelass` (`id_kelas`);

--
-- Constraints for table `presensis`
--
ALTER TABLE `presensis`
  ADD CONSTRAINT `presensis_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelass` (`id_kelas`);

--
-- Constraints for table `siswas`
--
ALTER TABLE `siswas`
  ADD CONSTRAINT `fk_id_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelass` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
