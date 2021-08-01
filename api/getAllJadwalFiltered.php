<?php
require_once 'conn.php';

$no = '1';
$getNis = $_GET['nis'];
$getIdKelas = $_GET['id_kelas'];
$getSemester = $_GET['semester'];
$getTahun = $_GET['tahun_ajaran'];

$query = "SELECT DJ.hari, DJ.jam, M.nama_mapel, P.nama_pegawai
FROM detail_jadwals DJ
JOIN mapels M ON M.id_mapel = DJ.id_mapel
JOIN pegawais P ON P.id_pegawai = M.id_pegawai
JOIN jadwals J ON J.id_jadwal = DJ.id_jadwal
WHERE J.id_kelas = '$getIdKelas'
AND J.semester = '$getSemester'
AND J.tahun_ajaran = '$getTahun'";

$result = mysqli_query($conn, $query);
$response = array();
while ($row = mysqli_fetch_assoc($result)){
	array_push($response,
		array(
			'no' => $no,
			'hari' => $row['hari'],
			'jam' => $row['jam'],
			'nama_mapel' => $row['nama_mapel'],
			'nama_pegawai' => $row['nama_pegawai']
		)
	);
	$no++;
}
echo json_encode($response);
mysqli_close($conn);
?>