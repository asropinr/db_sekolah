<?php
include 'koneksi.php';
$result = pg_query($conn, "SELECT j.id, j.nama, j.kuotamax, count( dj.id_siswa) as jumlah FROM jurusan j JOIN detailjurusan dj ON j.id = dj.id_jur GROUP BY j.id ");

$arr = pg_fetch_all($result);
$max = count($arr);

for($i=0;$i<$max;$i++){
    $json[$i] = [
        'id' => $arr[$i]["id"],
        'nama' => $arr[$i]["nama"],
        'kuota' => $arr[$i]["kuotamax"],
        'jumlah_sekarang' => $arr[$i]["jumlah"]
        ];
}
$data = ['data' => $json];
header('Content-Type: application/json');
echo json_encode($data);
 
?>