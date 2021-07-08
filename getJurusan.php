<?php
include 'koneksi.php';

$result = pg_query($conn, "SELECT * FROM public.jurusan");

$arr = pg_fetch_all($result);
//print_r($arr[0])
$max = count($arr);

for($i=0;$i<$max;$i++){
    $json[$i] = [
        'id_jur' => $arr[$i]["id"],
        'nama_jur' => $arr[$i]["nama"],
        'max_kuota' => $arr[$i]["kuotamax"]
        ];
}
$data = ['data' => $json];
header('Content-Type: application/json');
echo json_encode($data);

?>