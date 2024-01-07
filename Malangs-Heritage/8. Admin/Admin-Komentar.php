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
        <div class="navbar">
            <div class="checkbox">
                <input type="checkbox" id="check" />
                <label for="check">Pilih Semua</label>
            </div>
            <div class="dropdown">
                <img src="../8. Admin/Gambar/calendar.svg" class="left-icon">
                <select id="time">
                    <option value="all">All time</option>
                    <option value="year">Past year</option>
                    <option value="year">Past month</option>
                    <option value="year">Past week</option>
                    <option value="year">Past day</option>
                </select>
            </div>
            <div class="dropdown">
                <img src="../8. Admin/Gambar/filter.svg" class="left-icon">
                <select id="sort">
                    <option value="newest">Newest</option>
                    <option value="oldest">Oldest</option>
                </select>
            </div>
        </div>
        <div class="comment-section">
            <img src="./Gambar/no komentar.png" class="no-komentar">
            <h2>No comment yet</h2>
        </div>  
    </section>

    <script src="script.js"></script>
</body>

</html>