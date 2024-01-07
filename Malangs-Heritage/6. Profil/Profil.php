<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5" class="jsx-2992227597">
    <title>Malang's Heritage</title>
    <link rel="stylesheet" type="text/css" href="./Login.css">
</head>

<body>
    <div class="nav-bar">
        <div class="nav-container">
            <img class="logo" src="./Gambar/Logo_Fix.png">
            <span class="judul">Malang's Heritage</span>
            <a href="../3. Beranda/Beranda.html" class="nav-home">Home</a>
            <a href="../7. Bookmark/Bookmark.html" class="nav-bookmark">Bookmark</a>
            <a href="../9. About/About.php" class="nav-about">About</a>
            <a href="../6. Profil/Profil.php"><img src="./Gambar/Profil icon.png" class="nav-profil"></a>
        </div>
    </div>

    <div class="form-login">
        <div class="bg-login">
            <svg xmlns="http://www.w3.org/2000/svg" width="550" height="550" viewBox="0 0 600 665" fill="none">
                <g filter="url(#filter0_d_21_150)">
                    <path
                        d="M4 50C4 22.3858 26.3858 0 54 0H554C581.614 0 604 22.3858 604 50V607C604 634.614 581.614 657 554 657H54C26.3858 657 4 634.614 4 607V50Z"
                        fill="#F1EFEF">
                    </path>
                </g>
                <defs>
                    <filter id="filter0_d_21_150" x="0" y="0" width="600" height="665" filterUnits="userSpaceOnUse"
                        color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                            result="hardAlpha"></feColorMatrix>
                        <feOffset dy="4"></feOffset>
                        <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                        <feComposite in2="hardAlpha" operator="out"></feComposite>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0">
                        </feColorMatrix>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_21_150"></feBlend>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_21_150" result="shape">
                        </feBlend>
                    </filter>
                </defs>
            </svg>
        </div>
        <div class="logo-form">
            <img src="./Gambar/Profile Icon.png" width="150rem" height="150rem">
        </div>
        <div class="login-container">
            <h1>User</h1>
            <div class="form-container">
                <label for="nama"><b>Nama</b></label>
                <br>
                <input type="text" name="nama" value="User" required="">
                <br>
                <label for="email"><b>Email</b></label>
                <br>
                <input type="email" name="email" value="user@gmail.com" required="">
            </div>
            <br>
            <a href="#" class="edit">Edit Profil</a>
            <br>
            <a href="../PHP/Logout.php" class="logout">Logout</a>
        </div>
    </div>
</body>

</html>