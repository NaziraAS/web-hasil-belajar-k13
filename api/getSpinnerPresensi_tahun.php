<?php
require "conn.php";

$id_kelas = $_GET['id_kelas'];

// $query = mysqli_query($conn, "SELECT id_kelas FROM kelass WHERE nama_kelas = 'Kelas $nama_kelas'");
// $result = mysqli_fetch_assoc($query);
// $getIdKelas = $result['id_kelas'];


$query_ta = "SELECT tahun_ajaran FROM presensis WHERE id_kelas = '$id_kelas'";
$result = mysqli_query($conn, $query_ta);
$response = array();
while ($row = mysqli_fetch_assoc($result)){
	array_push($response,
		array(
			'tahun_ajaran' => $row['tahun_ajaran']
		)
	);
}
// echo json_encode($getIdKelas);
echo json_encode($response);
mysqli_close($conn);


?>