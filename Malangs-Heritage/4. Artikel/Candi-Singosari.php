<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5" class="jsx-2992227597">
    <title>Malang's Heritage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./Artikel.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="nav-bar">
        <div class="nav-container">
            <img class="logo" src="./Gambar/Logo_Fix.png">
            <span class="judul">Malang's Heritage</span>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <a href="../3. Beranda/Beranda.html" class="nav-home">Home</a>
            <a href="../7. Bookmark/Bookmark.php" class="nav-bookmark">Bookmark</a>
            <a href="../9. About/about.php" class="nav-about">About</a>
            <a href="../6. Profil/Profil.php"><img src="./Gambar/Profil icon.png" class="nav-profil"></a>
        </div>
    </div>

    <div class="artikel">
        <div class="artikel-container">
            <div class="gambar-container">
                <img class="gambar" src="./Gambar/Candi_Singosari.jpeg" alt="">
            </div>

            <div class="grid-isi">
                <div class="side-container">
                    <a href="javascript:void(0);" onclick="copyToClipboard();" title="Copy Link">
                        <img src="./Gambar/Share.png" class="Share">
                    </a>
                    <br>
                    <a href="../7. Bookmark/Bookmark.php" onclick="showBookmarkAlert()">
                        <img src="./Gambar/Bookmark.png">
                    </a>
                </div>

                <script>
                    function showBookmarkAlert() {
                        // Tambahkan kode atau panggilan AJAX untuk menambahkan bookmark ke server (jika diperlukan)

                        alert('Bookmark berhasil ditambahkan');
                    }

                    function copyToClipboard() {
                        // Mendapatkan elemen input yang tersembunyi
                        var dummyInput = document.createElement("input");

                        // Menambahkan nilai URL ke elemen input
                        dummyInput.value = window.location.href;

                        // Menambahkan elemen input ke dokumen
                        document.body.appendChild(dummyInput);

                        // Memilih dan menyalin teks dalam elemen input
                        dummyInput.select();
                        document.execCommand("copy");

                        // Menghapus elemen input yang tidak terlihat
                        document.body.removeChild(dummyInput);

                        // Menampilkan alert bahwa URL berhasil disalin
                        alert('Alamat link berhasil disalin ke clipboard!');
                    }
                </script>


                <div class="isi-artikel">
                    <h1>Candi Singosari: Pesona Arsitektur Hindu di Malang, Jawa Timur</h1>
                    <br><br>
                    <h3>Kejayaan Kerajaan Singasari</h3>
                    <br>
                    <p>
                        Candi Singosari, terletak di Desa Candirenggo, Kecamatan Singosari, Kabupaten Malang, menjadi
                        saksi bisu kejayaan Kerajaan Singosari pada
                        abad ke-13. Gaya arsitektur khasnya mencerminkan kemegahan Hindu-Buddha yang pernah berkuasa di
                        Nusantara.
                    </p>
                    <p>
                        Candi ini memiliki tiga bagian utama: batur, kala-makara, dan kelir. Batur sebagai bangunan
                        pendukung, kala-makara sebagai hiasan relief
                        mitologis, dan kelir sebagai atap yang menyerupai lonceng. Relief-relief di dinding candi
                        mengisahkan epik Ramayana dan Mahabharata,
                        menciptakan daya tarik artistik yang luar biasa.
                    </p>
                    <p>
                        Selain sebagai peninggalan sejarah, Candi Singosari juga menjadi pusat kegiatan budaya dan seni.
                        Setiap tahun, masyarakat setempat menggelar
                        upacara serta pementasan seni untuk merayakan warisan budaya yang kaya.
                    </p>
                    <p>
                        Candi Singosari bukan hanya sekadar bangunan bersejarah, namun juga tempat suci yang memiliki
                        makna religius dan spiritual bagi masyarakat pada masa itu.
                        Dengan menggabungkan elemen-elemen Hindu dan Buddha, candi ini menjadi tempat persembahan dan
                        meditasi. Seseorang dapat merasakan kekhidmatan spiritual yang
                        terpancar dari setiap sudut candi, menciptakan suasana yang tenang dan penuh ketenangan.
                    </p>
                    <p>
                        Candi Singosari bukan hanya destinasi wisata bagi para penggemar sejarah, tetapi juga menjadi
                        sumber pengetahuan yang berharga. Pengunjung
                        dapat belajar lebih dalam tentang kehidupan dan kebudayaan masyarakat Majapahit, serta
                        nilai-nilai spiritual yang tercermin dalam arsitektur
                        dan relief candi. Sebagai tempat yang sarat sejarah, Candi Singosari menjadi laboratorium
                        pembelajaran di alam terbuka yang memungkinkan
                        pengunjung menggali pengetahuan baru.
                    </p>
                    <p>
                        Pentingnya pemeliharaan dan pelestarian tidak hanya menjaga kemegahan Candi Singosari, tetapi
                        juga memastikan bahwa kekayaan sejarah ini
                        dapat dinikmati oleh generasi mendatang. Dengan mengunjungi Candi Singosari, para pengunjung
                        dapat meresapi keindahan arsitektur, mengagumi
                        relief bersejarah, dan merasakan keanggunan masa silam. Candi ini bukan sekadar monumen batu,
                        melainkan jendela yang membawa kita melintasi
                        waktu.
                    </p>
                    <p>
                        Candi Singosari tidak hanya menjadi peninggalan sejarah yang mengagumkan, tetapi juga menyimpan
                        kekayaan spiritual dan budaya. Keindahan
                        arsitektur dan makna religius yang terpancar dari setiap sudut candi membuatnya menjadi
                        destinasi wisata yang menarik. Dengan menjaga dan
                        melestarikan Candi Singosari, kita turut menjaga warisan budaya Indonesia agar tetap hidup dan
                        dapat dinikmati oleh generasi yang akan
                        datang.
                </div>

                <div id="disqus_thread"></div>
                <script>
                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function () { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://malangs-heritage.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                        powered by Disqus.</a></noscript>
            </div>
        </div>
    </div>
</body>

</html>