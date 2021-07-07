<?php
// $host       =  "ec2-54-228-174-49.eu-west-1.compute.amazonaws.com";
// $dbuser     =  "lyksjqyysbvfam";
// $dbpass     =  "0e07aaee19193b6a6fbefa4b91b2dcac0bcb93f66acd6eb6312973be2c4e11f4";
// $port       =  "5432";
// $dbname    =  "d9n6jhicb20ut7";

// script koneksi php postgree
// $conn = new PDO("pgsql:dbname=$dbname;host=$host", $dbuser, $dbpass); 
include 'koneksi.php'; 
$result = pg_query($conn, "SELECT * FROM public.siswa");

$arr = pg_fetch_all($result);
//print_r($arr[0])
$max = count($arr);

for($i=0;$i<$max;$i++){
    $json[$i] = [
        'id_siswa' => $arr[$i]["id"],
        'nama_siswa' => $arr[$i]["nama"]
        ];
}
$data = ['data' => $json];
header('Content-Type: application/json');
echo json_encode($data);





?>