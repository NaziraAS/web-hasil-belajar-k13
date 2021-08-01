<?php
require_once 'conn.php';

$no = '1';

$query = "SELECT DJ.hari, DJ.jam, M.nama_mapel, P.nama_pegawai
FROM detail_jadwals DJ
JOIN mapels M ON M.id_mapel = DJ.id_mapel
JOIN pegawais P ON P.id_pegawai = M.id_pegawai
JOIN jadwals J ON J.id_jadwal = DJ.id_jadwal
JOIN kelass K ON K.id_kelas = J.id_kelas";

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