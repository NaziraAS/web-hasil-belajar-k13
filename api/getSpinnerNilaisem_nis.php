<?php
require "conn.php";
$getNamaKelas = $_GET['nama_kelas'];
// $nama_kelas = "Kelas 1A";

$query = "SELECT S.nis, K.nama_kelas 
FROM siswas S JOIN kelass K ON K.id_kelas = S.id_kelas
WHERE K.nama_kelas = '$getNamaKelas'";
$result = mysqli_query($conn, $query);
$response = array();
while ($row = mysqli_fetch_assoc($result)){
	array_push($response,
		array(
			'nis' => $row['nis']
		)
	);
}
echo json_encode($response);
mysqli_close($conn);

?>