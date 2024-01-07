<?php
include 'koneksi.php';

function validateLogin($koneksi, $username, $password)
{
    $query = "SELECT * FROM akun WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);
        return $user['role'];
    }

    return false;
}

$username = $_POST['username'];
$password = $_POST['password'];

$role = validateLogin($koneksi, $username, $password);

if ($role === 'admin') {
    header('Location: ../8. Admin/Admin.php');
} elseif ($role === 'user') {
    header('Location: ../3. Beranda/Beranda.html');
} else {
    echo '<script>alert("Username atau password salah");';
    echo 'window.location.href="../2. Login/Login.html?error=1";</script>';
    exit();
}

mysqli_close($koneksi);
?>