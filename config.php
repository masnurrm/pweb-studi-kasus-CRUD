<?php

$server = "localhost";
$user = "root";
$password = "masnm_nihbos";
$nama_database = "pendaftaran_siswa_1";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>