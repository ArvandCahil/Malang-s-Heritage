<?php
require 'Koneksi.php';
$nama = $_POST["nama"];
$email = $_POST["email"];
$username= $_POST["username"];
$password = $_POST["password"];

$query = "INSERT INTO akun (nama, email, username, password) VALUES ('$nama', '$email', '$username', '$password')";

if (mysqli_query($koneksi, $query)) {
    header("Location: ../2. Login/Login.html");
} else {
    echo"Pendaftaran Gagal : " . mysqli_error($koneksi);
    header("Location: ../1. Register/Register.html");
}