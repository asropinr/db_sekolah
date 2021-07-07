<?php 
include 'koneksi.php';
// $sql = "insert into siswa(id, nama, image,alamat,notlep,sekolah_asal,nama_ortu,NISN)  
// values('$_POST[id]', '$_POST[nama]', '$_POST[image]','$_POST[alamat]','$_POST[notelp]','$_POST[sekolah_aasl]','$_POST[nama_ortu]','$_POST[NISn]')";
// $result = pg_query($conn, $sql);
// if($result){
//   echo "Berhasil";
// }
// SET HEADER
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: PUT");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

//CREATE MESSAGE ARRAY AND SET EMPTY
$msg['message'] = '';

// CHECK IF RECEIVED DATA FROM THE REQUEST
if($_GET['id']){
    // CHECK DATA VALUE IS EMPTY OR NOT
      $query = "update siswa set nama = '$_GET[nama]',image = '$_GET[image]',alamat = '$_GET[alamat]',notelp = 1234,sekolah_asal = '$_GET[sekolah_asal]',nama_ortu = '$_GET[nama_ortu]',nisn = '$_GET[NISN]' where id = '$_GET[id]'";
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