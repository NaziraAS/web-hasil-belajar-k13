-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2020 at 08:09 PM
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
(9, 12, 'B1229', '07:15:00', 'Senin'),
(10, 13, 'BhsIng12', '09:00:00', 'Senin'),
(11, 14, 'MTK123', '11:00:00', 'Senin'),
(13, 16, 'SB124', '09:00:00', 'Senin'),
(14, 17, 'BhsIng12', '11:00:00', 'Selasa'),
(15, 18, 'Ppkn123', '13:00:00', 'Selasa');

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
(3, 3, '197734', 'Izin'),
(4, 4, '197769', 'Sakit'),
(11, 9, '197734', 'Izin'),
(12, 9, '129990', 'Izin');

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
(5, 7, 'Tari 2'),
(6, 7, 'Basket'),
(7, 8, 'Sepak Bola'),
(8, 7, 'Musik'),
(9, 8, 'Takrauw');

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
(16, '002', 'I', '2020/2021'),
(17, '001', 'I', '2020/2021'),
(18, '002', 'I', '2020/2021');

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
('B1229', 12, 'Bahasa Indonesia'),
('BhsIng12', 9, 'Bahasa Inggris'),
('MTK123', 13, 'Matematika'),
('Penjas123', 8, 'Penjas Orkes'),
('Ppkn123', 8, 'PPKN'),
('SB124', 7, 'Seni Budaya'),
('SO123', 10, 'Sosiologi');

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
(3, '129990', 5, 'A', 'Sangat baik dalam melakukan ekstrakulikuler tari', '2020/2021', 'I'),
(4, '197767', 7, 'A', 'Sangat bagus dalam melaksanakan ekstrakulikuler sepak bola', '2020/2021', 'I'),
(5, '129990', 8, 'A', 'Sangat baik dalam melaksanakan ekstrakulikuler tari', '2020/2021', 'I');

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
(9, '197767', 'SO123', '002', 'I', '2020/2021', 70.375, 'B', 74.625, 'B', 'B', 60, 70, 65, 60, 75, 70, 68, 76, 76, 78),
(10, '129990', 'SO123', '001', 'I', '2020/2021', 84, 'A-', 84.125, 'A-', 'A', 80, 85, 90, 97, 86, 89, 98, 80, 85, 75),
(11, '129990', 'B1229', '001', 'I', '2020/2021', 81.5, 'B+', 81.5, 'B+', 'A', 90, 95, 75, 80, 80, 85, 85, 90, 76, 80),
(12, '197736', 'SO123', '001', 'I', '2020/2021', 78.875, 'B+', 81.875, 'B+', 'A', 80, 85, 76, 80, 80, 90, 95, 80, 70, 85);

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
(6, '0000000008', 'Test 44999', 'teeeeee', '123', '345345345345', 'Guru Wali'),
(7, '196106111987031011', 'Drs. H. Sarjuni', 'sarjuni_', '123', '089009822378', 'Guru Mapel'),
(8, '196312101989021002', 'Drs. Suyoto', 'yoto_', '123', '085678543221', 'Guru Mapel'),
(9, '196209191987032012', 'Dra. Rudy Maryati', 'rudy_', '123', '087654321111', 'Guru Mapel'),
(10, '196111051983031009', 'Muh. Ro\'uf Hudaya, S.Pd.', 'rouf_', '123', '082134256456', 'Guru Mapel'),
(11, '196206061982011006', 'H. Sya\'roni, S.Ag.', 'roni_', '123', '082546765432', 'Guru Mapel'),
(12, '196309051986012001', 'Sri Kusbianti, S.Pd', 'sri_', '123', '085764324333', 'Guru Mapel'),
(13, '196310311988032004', 'Sri Mulatsih, S.Pd', 'mulatsih_', '123', '087654325444', 'Guru Mapel'),
(15, '196302191999031001', 'Drs. H. Masyhudi.', 'hudi_', '123', '081254768999', 'Guru Wali');

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
(1, '001', '2020-06-22', '2017/2018', 'I'),
(2, '001', '2020-06-17', '2021/2022', 'I'),
(3, '001', '2020-06-21', '2020/2021', 'I'),
(4, '002', '2020-06-21', '2020/2021', 'I'),
(6, '007', '2020-06-25', '2022/2023', 'I'),
(7, '001', '2020-06-25', '2026/2027', 'I'),
(8, '001', '2020-06-25', '2029/2030', 'I'),
(9, '001', '2020-06-25', '2020/2021', 'I');

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
('129990', '001', 'ABILA ULFATUN NIKMAH', 'Perempuan', '2002-08-09', 'Lasem Rembang', '129990', '123'),
('197734', '001', 'Ahmad Agung Wahyudi', 'Laki-laki', '2002-09-02', 'Lasem Rembang', '197734', '123'),
('197735', '001', 'AHMAD KHAIRUL UMAM', 'Laki-laki', '2002-11-08', 'Lasem Rembang', '197735', 'umam123'),
('197736', '001', 'AINUN NAJIH MUBAROK', 'Laki-laki', '2002-09-24', 'Soditan Lasem Rembang', '197736', 'najih123'),
('197767', '002', 'AGUS SETIAWAN', 'Laki-laki', '2002-09-08', 'Lasem', '197767', 'agus123'),
('197768', '002', 'Ahmad Bahrul Ulum', 'Laki-laki', '2002-09-12', 'Rembang', '197768', 'ulum123'),
('197769', '002', 'AMELIA  NIHAYATUN  NI\'MAH', 'Perempuan', '2002-09-22', 'Lasem', '197769', 'amelia123');

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
  MODIFY `id_detail_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `detail_presensis`
--
ALTER TABLE `detail_presensis`
  MODIFY `id_detail_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ekskuls`
--
ALTER TABLE `ekskuls`
  MODIFY `id_ekskul` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id_jadwal` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `nilai_ekstrakulikulers`
--
ALTER TABLE `nilai_ekstrakulikulers`
  MODIFY `id_nilai_ekskul` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nilai_semesters`
--
ALTER TABLE `nilai_semesters`
  MODIFY `id_nilai_semester` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  ADD CONSTRAINT `detailjadwals_fk_id_mapel` FOREIGN KEY (`id_mapel`) REFERENCES `mapels` (`id_mapel`) ON UPDATE CASCADE;

--
-- Constraints for table `detail_presensis`
--
ALTER TABLE `detail_presensis`
  ADD CONSTRAINT `detpresensi_id_presensi` FOREIGN KEY (`id_presensi`) REFERENCES `presensis` (`id_presensi`),
  ADD CONSTRAINT `fk_nis_detailpresensi` FOREIGN KEY (`nis`) REFERENCES `siswas` (`nis`) ON UPDATE CASCADE;

--
-- Constraints for table `ekskuls`
--
ALTER TABLE `ekskuls`
  ADD CONSTRAINT `ekskuls_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawais` (`id_pegawai`);

--
-- Constraints for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD CONSTRAINT `jadwals_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelass` (`id_kelas`) ON UPDATE CASCADE;

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
  ADD CONSTRAINT `fk_nis_eskul` FOREIGN KEY (`nis`) REFERENCES `siswas` (`nis`) ON UPDATE CASCADE;

--
-- Constraints for table `nilai_semesters`
--
ALTER TABLE `nilai_semesters`
  ADD CONSTRAINT `fk_nis_nilaisemester` FOREIGN KEY (`nis`) REFERENCES `siswas` (`nis`) ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_semesters_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `mapels` (`id_mapel`) ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_semesters_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `kelass` (`id_kelas`) ON UPDATE CASCADE;

--
-- Constraints for table `presensis`
--
ALTER TABLE `presensis`
  ADD CONSTRAINT `presensis_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelass` (`id_kelas`) ON UPDATE CASCADE;

--
-- Constraints for table `siswas`
--
ALTER TABLE `siswas`
  ADD CONSTRAINT `fk_id_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelass` (`id_kelas`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
