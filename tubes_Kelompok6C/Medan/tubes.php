<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medan</title>
    <link rel="icon" href="images/medan.JPG">
    <link rel="stylesheet" href="style.css">
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
               if(empty($_SESSION['username'])){
                echo'
                <li><a href="register.php">Daftar</a></li>
                <li><a href="login.php">Login</a></li>';
               }
               else {
                 echo "<li>" ;
                 echo "<a href='../login/logout.php'>Logout</a>";
                 echo "</li>";
                 if($_SESSION['role']=="admin"){
                   echo"<li><a href='../login/manage'>Manage</a></li>";
                  }
                  echo "<li><b><a><img class='img rounded-circle' src='../contoh/images.jpg'/>  " ;
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
        <h1>M       E       D       A       N</h1>
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-img">
            <img src="images/medan2.jpg" alt="">
        </div>
        <div class="about-text">
            <h5>Latar Belakang</h5>
            <h2>Kota Medan</h2>
            <p align="justify">Kota Medan merupakan kota Metropolitan yang terletak di Sumatera Utara. 
                Kota Medan dibentuk dan berdiri secara resmi sejak tanggal 1 Desember 1952. 
                Medan adalah kota multietnis yang penduduknya terdiri dari orang-orang dengan latar belakang budaya 
                dan agama yang berbeda-beda. Selain Melayu dan Batak Karo sebagai penghuni awal, Medan didominasi oleh etnis 
                Jawa, Batak, Tionghoa, Minangkabau, dan India. Mayoritas penduduk Medan bekerja di sektor perdagangan, sehingga 
                banyak ditemukan ruko di berbagai sudut kota.</p>
            <div class="rating">
                <div class="col">
                    <h4>Besar</h4>
                    <p>No. 3 Kota Terbesar<br>di Indonesia</p>
                </div>
                <div class="col">
                    <h4>Julukan</h4>
                    <p>Disebut Sebagai Kota Melayu Deli</p>
                </div>
                <div class="col">
                    <h4>Ibukota</h4>
                    <p>Ibukota Sumatera Utara</p>
                </div>
            </div>
        </div>
    </section>

    <section class="activity">
        <div class="center-text" id="dest">
            <h2>Destinasi Wisata</h2>
        </div>
        <div class="activities-content">
        <div class="activity-content">
            <div class="box">
                <img src="images/mesjidraya.jpg" alt="">
                <h4>Masjid Raya</h4>
                <div class="overlay">
                    <div class="content">
                        <h3 style="color:white">
                            Masjid Raya Al-Mashun dibangun pada tahun 1906 dan selesai pada tahun 1909. Pada awal pendiriannya, 
                            masjid ini menyatu dengan kompleks Istana Maimun. Gaya arsitekturnya khas Timur Tengah, India dan Spanyol.
                        </h3>
                    </div>
                </div>
            </div>
            </div>
            <div class="activity-content">
            <div class="box">
                <img src="images/tjongafie.jpg" alt="">
                <h4>Tjong A Fie Mansion</h4>
                <div class="overlay">
                    <div class="content">
                        <h3>
                            Rumah Tjong A Fie dibangun oleh Tjong A Fie (1860–1921), pedagang Hakka yang memiliki banyak tanah perkebunan di Medan. 
                            Namun, sejak tahun 2009 sebagian rumah ini dibuka untuk dikunjungi umum. 
                        </h3>
                    </div>
                </div>
            </div>
            </div>
            <div class="activity-content">
            <div class="box">
                <img src="images/istanamaimun.jpg" alt="">
                <h4>Istana Maimun</h4>
                <div class="overlay">
                    <div class="content">
                        <h3>
                            Istana Maimun merupakan istana peninggalan kerajaan Deli yang dipimpin Sultan Al Rasyid Perkasa Alamsyah pada tahun 1973. 
                            Istana Maimun sempat ditempati oleh 4 Sultan Melayu yang memerintah saat itu. 
                        </h3>
                    </div>
                </div>
            </div>
            </div>
            <div class="activity-content">
            <div class="box">
                <img src="images/kuil copy.jpg" alt="">
                <h4>Kuil Shri Mariamman</h4>
                <div class="overlay">
                    <div class="content">
                        <h3>
                            Pada akhir abad ke19 orang-orang India yang berasal dari Madras, India selatan berimigrasi ke Medan. 
                            Seiring dengan peningkatan populasi mereka, pada 1884 dibangun kuil Sri Mariaman yang terletak di permukiman India yang disebut Kampung Keling.
                        </h3>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <div class="tiket" id="pesan">
        <a href="pesanMedan.php"><button>Pesan Sekarang ----></button></a>
    </div>
    <script src="medan.js"></script>
</body>
</html>