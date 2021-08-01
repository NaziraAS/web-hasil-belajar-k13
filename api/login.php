<?php

require "conn.php";

$nis = $_GET["nis"];
$password = $_GET["password"];

$sql = "SELECT S.nis, S.nama_siswa, S.jenis_kelamin, S.tgl_lahir, S.alamat, S.username, S.password,
K.id_kelas, K.nama_kelas
FROM siswas S
JOIN kelass K ON K.id_kelas = S.id_kelas
WHERE nis = '$nis' and password = '$password'";

$result = mysqli_query($conn, $sql);

if (!mysqli_num_rows($result) > 0) //????????????
{
	$status = "failed";
	echo json_encode (array("response"=>$status));
}
else
{
	$row = mysqli_fetch_assoc($result);
	$nis = $row['nis'];
	$id_kelas = $row['id_kelas'];
	$nama_siswa = $row['nama_siswa'];
	$jenis_kelamin = $row['jenis_kelamin'];
	$tgl_lahir = $row['tgl_lahir'];
	$alamat = $row['alamat'];
	$username = $row['username'];
	$password = $row['password'];
	$nama_kelas = $row['nama_kelas'];

	$status = "ok";
	echo json_encode(array(
		"response"=>$status,

		"nis"=>$nis,
		"id_kelas"=>$id_kelas, 
		"nama_siswa"=>$nama_siswa,
		"jenis_kelamin"=>$jenis_kelamin,
		"tgl_lahir"=>$tgl_lahir,
		"alamat"=>$alamat,
		"username"=>$username,
		"password"=>$password,
		"nama_kelas"=>$nama_kelas
	));
	//echo json_encode(array("response"=>$status, "nama_user"=>$nama_user));
}

mysqli_close($conn);

?>