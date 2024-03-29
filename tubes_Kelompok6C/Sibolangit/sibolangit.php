<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sibolangit</title>
    <link rel="stylesheet" href="sibolangit.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav>
        <div class="layar-dalam">
            <div class="logo">
                <a href="../contoh/index.php"><img src="../contoh/3(2).png" class="putih" /></a>
                <a href="../contoh/index.php"><img src="../contoh/3(2).png" class="hitam" /></a>
            </div>
            <div class="menu">
                <a href="#" class="tombol-menu">
                    <span class="garis"></span>
                    <span class="garis"></span>
                    <span class="garis"></span>
                </a>
                <ul>
                    <li><a href="../contoh/index.php">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#dest">Destinasi</a></li>
                    <li><a href="#pesan">Pesan</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <?php
                    require "../login/koneksi.php";
                    if (empty($_SESSION['username'])) {
                        echo '
                <li><a href="register.php">Daftar</a></li>
                <li><a href="login.php">Login</a></li>';
                    } else {
                        echo "<li>";
                        echo "<a href='../login/logout.php'>Logout</a>";
                        echo "</li>";
                        if ($_SESSION['role'] == "admin") {
                            echo "<li><a href='../login/manage'>Manage</a></li>";
                        }
                        echo "<li><b><a><img class='img rounded-circle' src='../contoh/images.jpg'/>  ";
                        echo $_SESSION['username'];
                        echo "</a></b></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <section class="home" id="home">
        <div class="home-text">
            <h1>S I B O L A N G I T</h1>
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-img">
            <img src="IMG/2.jpg" alt="">
        </div>
        <div class="about-text">
            <h5>Latar Belakang</h5>
            <h2>Sibolangit</h2>
            <p align="justify">Sibolangit merupakan salah satu kecamatan yang berada di kawasan dataran tinggi, Kabupaten Deli Serdang, provinsi Sumatera Utara, Indonesia. Kecamatan Sibolangit berbatasan langsung dengan wilayah Kabupaten Karo. Di Sibolangit pernah jatuh sebuah pesawat Garuda Indonesia nomor penerbangan 152, tepatnya pada tanggal 26 September 1997 di desa Buah Nabar yang rencananya akan mendarat di bandara Polonia, Kota Medan.[3]

                Sibolangit juga merupakan kawasan perkemahan Pramuka yang populer. Sibolangit pernah menjadi tuan rumah penyelenggaraan Jambore Nasional Gerakan Pramuka Indonesia Tahun 1977. Jambore tersebut dilaksanakan pada tanggal 1-20 Juli 1977.</p>
            <div class="rating">
                <div class="col">
                    <h4>Hutan</h4>
                    <p>Hutan Sibolangit kawasan konservasi tertua di Indonesia.</p>
                </div>
                <div class="col">
                    <h4>Julukan</h4>
                    <p>Taman Wisata Alam Sibolangit.</p>
                </div>
                <div class="col">
                    <h4>Favorit</h4>
                    <p>Kawasan Perkemahan Pramuka yang populer.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="activity" id="dest">
        <div class="center-text">
            <h2>Destinasi Wisata</h2>
        </div>
        <div class="activities-content">
            <div class="activity-content">
                <div class="box">
                    <img src="./IMG/hutan.jpg" alt="">
                    <h4>Cagar Alam Sibolangit</h4>
                    <div class="overlay">
                        <div class="content">
                            <h3 style="color:white">
                                Terletak di Desa Sibolangit, objek wisata ini menyuguhkan indahnya pemandangan alam dan rumah dari berbagai macam flora dan fauna di Indonesia. Tempat ini cocok untuk healing dari hiruk pikuk perkotaan.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="activity-content">
                <div class="box">
                    <img src="IMG/sembahe.jpg" alt="">
                    <h4>Pemandian Alam Sembahe</h4>
                    <div class="overlay">
                        <div class="content">
                            <h3>
                                Pemandian Alam Sembahe merupakan aliran Sungai Betimus yang berhulu di Gunung Sibayak. Sungai ini memiliki karakteristik yang sejuk dan juga jernih. Inilah yang menjadi daya tarik wisatawan untuk mengunjungi pemandian Alam Sembahe.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="activity-content">
                <div class="box">
                    <img src="IMG/hillpark.jpg" alt="">
                    <h4>Hillpark Sibolangit</h4>
                    <div class="overlay">
                        <div class="content">
                            <h3>
                                Hillpark Sibolangit adalah sebuah taman bermain (themepark) yang terletak di Sibolangit dan diklaim sebagai yang terbesar di pulau Sumatera. Terbagi menjadi 3 tema besar yaitu Lost City, Toon town, dan Heritage.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="activity-content">
                <div class="box">
                    <img src="IMG/air.jpg" alt="">
                    <h4>Air Terjun Dua Warna</h4>
                    <div class="overlay">
                        <div class="content">
                            <h3>
                                Disebut Air Terjun Dua Warna karena air terjun ini sangat indah dan memiliki gradasi dua warna yang berbeda. Air terjun yang turun dari sela-sela bukit berwarna putih, sedangkan air yang berada di telaga di bawahnya berwarna biru muda.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="tiket" id="pesan">
        <a href="pesanSibolangit.php"><button>Pesan Sekarang ----></button></a>
    </div>
    <script src="sibolangit.js"></script>
</body>

</html>