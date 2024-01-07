<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from akun where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['peran']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['peran'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location: ../8. Admin/Admin.html");
 
	// cek jika user login sebagai pegawai
	}else if($data['peran']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['peran'] = "user";
		// alihkan ke halaman dashboard pegawai
		header("location:../3. Beranda/Beranda.html");
 
 
	}else{
 
		header("location:Login.html?pesan=gagal");
	}	
}else{
	header("location:Login.html?pesan=gagal");
}

if($cek > 0){
	$data = mysqli_fetch_assoc($sql);
	if($data['level']=="admin"){
 
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:../3. Beranda/Beranda.html");
 
	}else if($data['level']=="user"){

		$_SESSION['username'] = $username;
		$_SESSION['level'] = "user";

		header("../3. Beranda/Beranda.html");
	}else{

		header("location:../2. Login/Login.html?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?> 
 
?>