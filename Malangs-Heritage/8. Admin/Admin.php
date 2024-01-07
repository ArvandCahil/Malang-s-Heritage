<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5" class="jsx-2992227597">
    <link rel="stylesheet" href="./Admin.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Admin Dashboard</title>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="./Gambar/Logo_Fix.png" alt="">
            </div>

            <span class="logo_name">Malang's Heritage</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="./Admin.php">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dashboard</span>
                    </a></li>
                <li><a href="./Admin-Akun.php">
                        <i class="uil uil-user"></i>
                        <span class="link-name">Akun</span>
                    </a></li>
                <li><a href="./Admin-artikel.php">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="link-name">Artikel</span>
                    </a></li>
                <li><a href="./Admin-Komentar.php">
                        <i class="uil uil-comments"></i>
                        <span class="link-name">Komentar</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li><a href="../PHP/Logout.php">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="dashboard">
        <div class="top">

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="text">Total Artikel</span>
                        <span class="number">1</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-user"></i>
                        <span class="text">Akun</span>
                        <span class="number">1</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-comments"></i>
                        <span class="text">Komentar</span>
                        <span class="number">0</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Aktivitas Terbaru</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="judul-data">Nama</span>
                        <span class="list-data">User</span>
                    </div>
                    <div class="data email">
                        <span class="judul-data">Email</span>
                        <span class="list-data">User@gmail.com</span>
                    </div>
                    <div class="data joined">
                        <span class="judul-data">Username</span>
                        <span class="list-data">User</span>
                    </div>
                    <div class="data joined">
                        <span class="judul-data">Lokasi</span>
                        <span class="list-data">Kota Malang</span>
                    </div>
                    <div class="data joined">
                        <span class="judul-data">Bergabung</span>
                        <span class="list-data">20-11-2023</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>