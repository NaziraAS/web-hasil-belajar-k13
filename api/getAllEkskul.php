<?php
require_once 'conn.php';

$no = '1';

$query = "SELECT E.nama_ekskul, P.nama_pegawai
FROM ekskuls E
JOIN pegawais P ON P.id_pegawai = E.id_pegawai";

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