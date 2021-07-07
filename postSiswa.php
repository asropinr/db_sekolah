<?php
include 'koneksi.php';
$result = pg_query($conn, "select * from jurusan ");

$arr = pg_fetch_all($result);
$max = count($arr);

for($i=0;$i<$max;$i++){
    $json[$i] = [
        'id' => $arr[$i]["id"],
        'nama' => $arr[$i]["nama"],
        'kuota' => $arr[$i]["kuotamax"],
        ];
}
$data = ['data' => $json];
header('Content-Type: application/json');
echo json_encode($data);
 
?>