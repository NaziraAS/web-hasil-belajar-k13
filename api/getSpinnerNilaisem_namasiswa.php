<?php
require "conn.php";
$getNis = $_GET['nis'];
// $nama_kelas = "Kelas 1A";

$query = "SELECT nis, nama_siswa 
FROM siswas 
WHERE nis = '$getNis'";
$result = mysqli_query($conn, $query);
$response = array();
while ($row = mysqli_fetch_assoc($result)){
	array_push($response,
		array(
			'nama_siswa' => $row['nama_siswa']
		)
	);
}
echo json_encode($response);
mysqli_close($conn);

?>