<?php
require_once 'conn.php';

$no = '1';

$query = "SELECT M.nama_mapel, NS.nilai_pengetahuan, NS.konversi_nilai_pengetahuan, NS.nilai_keterampilan, NS.konversi_nilai_keterampilan, NS.nilai_sikap 
FROM nilai_semesters NS 
JOIN mapels M ON M.id_mapel = NS.id_mapel";

$result = mysqli_query($conn, $query);
$response = array();
while ($row = mysqli_fetch_assoc($result)){
	array_push($response,
		array(
			'no' => $no,
			'nama_mapel' => $row['nama_mapel'],
			'nilai_pengetahuan' => $row['nilai_pengetahuan'],
			'konversi_nilai_pengetahuan' => $row['konversi_nilai_pengetahuan'],
			'nilai_keterampilan' => $row['nilai_keterampilan'],
			'konversi_nilai_keterampilan' => $row['konversi_nilai_keterampilan'],
			'nilai_sikap' => $row['nilai_sikap']
		)
	);
	$no++;
}
echo json_encode($response);
mysqli_close($conn);
?>