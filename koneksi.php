<?php

// konfigurasi koneksi
$host       =  "ec2-54-228-174-49.eu-west-1.compute.amazonaws.com";
$dbuser     =  "lyksjqyysbvfam";
$dbpass     =  "0e07aaee19193b6a6fbefa4b91b2dcac0bcb93f66acd6eb6312973be2c4e11f4";
$port       =  "5432";
$dbname    =  "d9n6jhicb20ut7";

$conn = pg_connect("host=ec2-54-228-174-49.eu-west-1.compute.amazonaws.com port=5432 dbname=d9n6jhicb20ut7 user=lyksjqyysbvfam password=0e07aaee19193b6a6fbefa4b91b2dcac0bcb93f66acd6eb6312973be2c4e11f4");
?>