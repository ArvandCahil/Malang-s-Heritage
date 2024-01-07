<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5" class="jsx-2992227597">
    <link rel="stylesheet" href="./Admin.css">    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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

    <section class="dashboard">
        <div class="top">

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
        </div>

        <div class="dash-content">
           <div class="button">
                <button type="button" class="btn btn-primary">Tambah Artikel</button>
           </div>
        </div>

        <div class="container">
            <div class="hasil">
                <img class="gambar" src="./Gambar/Candi Singosari.jpeg" alt="Candi Singosari">
                <div class="deskripsi">
                    <div class="judul-artikel">Candi Singosari: Pesona Arsitektur Hindu di Malang, Jawa Timur</div>
                    <div class="rangkuman">Sejarah Candi Singosari terkait erat dengan sejarah Kerajaan Singasari.
                        Kerajaan Singasari, yang didirikan oleh raja pertamanya, Ken Arok, pada tahun 1222 M...</div>
                </div>
            </div>
    
            <div class="hasil">
                <img class="gambar" src="./Gambar/Candi Jago.jpeg" alt="Candi Jago">
                <div class="deskripsi">
                    <div class="judul-artikel">Candi Jago: Jejak Kehidupan Raja Wisnuwardhana di Malang, Jawa Timur</div>
                    <div class="rangkuman">Candi Jago adalah salah satu candi peninggalan Kerajaan Singasari yang
                        terletak di Desa Jago, Kecamatan Tumpang, Kabupaten Malang. Candi ini dibangun sebagai tempat
                        persemayaman abadi Raja Wisnuwardhana...</div>
                </div>
            </div>
    
            <div class="hasil">
                <img class="gambar" src="./Gambar/Candi Kidal.jpg" alt="Candi Kidal">
                <div class="deskripsi">
                    <div class="judul-artikel">Candi Kidal: Monumen Megah Anakanda Raja Kertanegara di Malang, Jawa Timur
                    </div>
                    <div class="rangkuman">Candi Kidal adalah candi Hindu yang terletak di Desa Rejokidal, Kecamatan
                        Tumpang, Kabupaten Malang. Candi ini dibangun pada tahun 1260 M sebagai tanda penghormatan kepada
                        Anusapati, putra Raja Kertanegara...</div>
                </div>
            </div>
    
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>