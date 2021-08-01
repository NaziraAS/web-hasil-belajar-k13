<?php
require_once 'conn.php';

$no = '1';
$getKelas = $_GET['kelas'];
$getSemester = $_GET['semester'];
$getTahun = $_GET['tahun_ajaran'];

$query = "SELECT E.nama_ekskul, P.nama_pegawai
FROM ekskuls E
JOIN pegawais P ON P.id_pegawai = E.id_pegawai 
WHERE K.nama_kelas = '$getKelas'
AND J.semester = '$getSemester'
AND J.tahun_ajaran = '$getTahun'";

$result = mysqli_query($conn, $query);
$response = array();
while ($row = mysqli_fetch_assoc($result)){
	array_push($response,
		array(
			'no' => $no,
			'nama_ekskul' => $row['nama_ekskul'],
			'nama_pegawai' => $row['nama_pegawai']
		)
	);
	$no++;
}
echo json_encode($response);
mysqli_close($conn);
?>