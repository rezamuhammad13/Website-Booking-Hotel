<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "indonesia";

$conn_alamat = mysqli_connect($host , $username , $password , $db);

if(!$conn_alamat){
    die("Koneksi gagal " . mysqli_connect_error());
}

?>