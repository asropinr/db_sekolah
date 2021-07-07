<?php
include 'koneksi.php';
$result = pg_query($conn, "SELECT * FROM siswa where nisn = $_GET[nisn]");

$arr = pg_fetch_all($result);
//print_r($arr[0])
$max = count($arr);

for($i=0;$i<$max;$i++){
    $json[$i] = [
        'id_siswa' => $arr[$i]["id"],
        'nama_siswa' => $arr[$i]["nama"],
        'image' => $arr[$i]["image"],
        'alamat_siswa' => $arr[$i]["alamat"],
        'no_telp' => $arr[$i]["notelp"],
        'sekolah_asal' => $arr[$i]["sekolah_asal"],
        'nama_ortu' => $arr[$i]["nama_ortu"],
        'nisn' => $arr[$i]["nisn"],
        ];
}
$data = ['data' => $json];
header('Content-Type: application/json');
echo json_encode($data);

?>