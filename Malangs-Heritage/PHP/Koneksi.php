<?php
$host="localhost";
$database= "db_malang's_heritage";
$username= "root";
$password= "";


$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>