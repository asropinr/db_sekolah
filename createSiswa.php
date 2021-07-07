<?php 
include 'koneksi.php';
$sql = "insert into siswa(id, nama, image,alamat,notlep,sekolah_asal,nama_ortu,NISN)  
values('$_POST[id]', '$_POST[nama]', '$_POST[image]','$_POST[alamat]','$_POST[notelp]','$_POST[sekolah_aasl]','$_POST[nama_ortu]','$_POST[NISn]')";
$result = pg_query($dbconn, $sql);
if($result){
  echo "Berhasil";
}  
?>