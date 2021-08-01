-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2020 at 10:05 AM
-- Server version: 10.0.38-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alac8240_db_sman1_lasem`
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
(9, 12, 'B19389', '07:15:00', 'Senin'),
(10, 13, 'BhsIng12', '09:00:00', 'Senin'),
(11, 14, 'MTK123', '11:00:00', 'Senin'),
(12, 15, 'SO1234', '07:15:00', 'Senin'),
(13, 16, 'SB123', '09:00:00', 'Senin');

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
(5, 7, 'Tari');

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
(12, '001', 'I', '2020/2021'),
(13, '001', 'I', '2020/2021'),
(14, '001', 'I', '2020/2021'),
(15, '002', 'I', '2020/2021'),
(16, '002', 'I', '2020/2021');

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
('0001', 'X MIPA 1'),
('0002', 'X MIPA 2'),
('0003', 'X MIPA 3'),
('0004', 'X MIPA 4'),
('0005', 'X MIPA 5'),
('0006', 'XI MIPA 1'),
('0007', 'XI MIPA 2'),
('0008', 'XI MIPA 3'),
('0009', 'XI MIPA 4'),
('001', 'X IPS 1'),
('0010', 'XI MIPA 5'),
('0011', 'XII MIPA 1'),
('0012', 'XII MIPA 2'),
('0013', 'XII MIPA 3'),
('0014', 'XII MIPA 4'),
('0015', 'XII MIPA 5'),
('002', 'X IPS 2'),
('003', 'X IPS 3'),
('004', 'X IPS 4'),
('005', 'X IPS 5'),
('006', 'XI IPS 1'),
('007', 'XI IPS 2'),
('008', 'XI IPS 3'),
('009', 'XI IPS 4'),
('010', 'XII IPS 1'),
('011', 'XII IPS 2'),
('012', 'XII IPS 3'),
('013', 'XII IPS 4'),
('014', 'XII IPS 5');

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
('B19389', 12, 'Bahasa Indonesia'),
('BhsIng12', 9, 'Bahasa Inggris'),
('mp3', 3, 'Mapel Tiga'),
('MTK123', 13, 'Matematika'),
('PAI123', 11, 'Pend Agama Islam'),
('Penjas12', 8, 'Penjas Orkes'),
('SB123', 7, 'Seni Budaya'),
('SO1234', 10, 'Sosiologi');

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
(8, '1977331022', 'B19389', '0001', 'I', '2020/2021', 76.25, 'B+', 75.625, 'B+', 'A', 75, 80, 75, 80, 85, 65, 70, 85, 80, 70);

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
(6, '0000000008', 'Test 44999', 'teeeeee', '123', '345345345345', 'Guru Wali'),
(7, '1000000004', 'Drs. H. Sarjuni', 'sarjuni_', '123', '089009822378', 'Guru Mapel'),
(8, '1000000005', 'Drs. Suyoto', 'yoto_', '123', '085678543221', 'Guru Mapel'),
(9, '1000000006', 'Dra. Rudy Maryati', 'rudy_', '123', '087654321111', 'Guru Mapel'),
(10, '1000000007', 'Muh. Ro\'uf Hudaya, S.Pd.', 'rouf_', '123', '082134256456', 'Guru Mapel'),
(11, '1000000008', 'H. Sya\'roni, S.Ag.', 'roni_', '123', '082546765432', 'Guru Mapel'),
(12, '1000000009', 'Sri Kusbianti, S.Pd', 'sri_', '123', '085764324333', 'Guru Mapel'),
(13, '1000000010', 'Sri Mulatsih, S.Pd', 'mulatsih_', '123', '087654325444', 'Guru Mapel');

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
('1977331022', '0001', 'ABILA ULFATUN NIKMAH', 'Laki-laki', '2002-08-09', 'Lasem Rembang', '1977331022', '123');

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
  MODIFY `id_detail_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `detail_presensis`
--
ALTER TABLE `detail_presensis`
  MODIFY `id_detail_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ekskuls`
--
ALTER TABLE `ekskuls`
  MODIFY `id_ekskul` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id_jadwal` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `nilai_ekstrakulikulers`
--
ALTER TABLE `nilai_ekstrakulikulers`
  MODIFY `id_nilai_ekskul` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nilai_semesters`
--
ALTER TABLE `nilai_semesters`
  MODIFY `id_nilai_semester` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
