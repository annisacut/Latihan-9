<?php
session_start();
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_fw";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database :" . mysqli_connect_eror());
}


?>