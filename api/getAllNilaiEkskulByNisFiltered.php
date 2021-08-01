<?php
require_once 'conn.php';

$no = '1';
$getNis = $_GET['nis'];
$getSem = $_GET['semester'];
$getTahun = $_GET['tahun_ajaran'];

$query = "SELECT E.nama_ekskul, NE.nilai_akhir_ekskul, NE.deskripsi_nilai 
FROM nilai_ekstrakulikulers NE 
JOIN ekskuls E ON E.id_ekskul = NE.id_ekskul
WHERE NE.nis = '$getNis' AND NE.semester = '$getSem' AND NE.tahun_ajaran = '$getTahun'";

$result = mysqli_query($conn, $query);
$response = array();
while ($row = mysqli_fetch_assoc($result)){
	array_push($response,
		array(
			'no' => $no,
			'nama_ekskul' => $row['nama_ekskul'],
			'nilai_akhir_ekskul' => $row['nilai_akhir_ekskul'],
			'deskripsi_nilai' => $row['deskripsi_nilai']
		)
	);
	$no++;
}
echo json_encode($response);
mysqli_close($conn);
?>