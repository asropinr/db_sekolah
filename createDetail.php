<?php
include 'koneksi.php';
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

//CREATE MESSAGE ARRAY AND SET EMPTY
$msg['message'] = '';

// CHECK IF RECEIVED DATA FROM THE REQUEST
if($_GET['id_siswa']){
    // CHECK DATA VALUE IS EMPTY OR NOT
      $query = "insert into detailjurusan(id_siswa, id_jur) values('$_GET[id_siswa]', '$_GET[id_jur]')";
      $result = pg_query($query); 
      if($result){
        $msg['message'] = "SUKSES";
      }else{
        $msg['message'] = "DATA KURANG";
      }
}
else{
    $msg['message'] = 'Please fill all the fields | title, body, author';
}
//ECHO DATA IN JSON FORMAT
echo  json_encode($msg);
?>