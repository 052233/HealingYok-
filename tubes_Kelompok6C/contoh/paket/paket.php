<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>

<body class=height:1000px>
    <section class="page-section bg-dark" id="home">
        <div class="container">
            <h2 class="text-center">Tour Packages</h2>
            <div class="d-flex w-100 justify-content-center">
                <hr class="border-warning" style="border:3px solid" width="15%">
            </div>
            <div class="row">
                <?php
                require "../../database/koneksi.php";
                $destinasi1=$_SESSION['destinasi'];
                $query = "SELECT * FROM packages WHERE destinasi='$destinasi1'";
                $result = $koneksi->query($query);

                while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="col-md-6">
                        <div class="card rounded-0">
                            <!-- <img class="card-img-top" src="<?php echo $gambar ?>" alt="<?php echo $row['judul'] ?>" height="200rem" style="object-fit:cover"> -->
                            <div class="card-body">
                                <h5 class="card-title truncate-1"><?php echo $row['judul'] ?></h5>
                                <p class="card-text truncate"><?php echo $row['deskripsi'] ?></p>
                                <div class="w-100 d-flex justify-content-end">
                                    <a href="" class="btn btn-sm btn-flat btn-warning"><?php echo "Rp ",$row['harga'] ?><i class="fa fa-arrow-right"></i></a><br>
                                    <form method="post" action="../../contoh/pesan1.php">
                                        <?php
                                        echo "<input type='text' name='harga' hidden value='$row[harga]'>";
                                        echo "<input type='text' name='paket' hidden value='$row[judul]'>";
                                        echo "<input type='text' name='destinasi' hidden value='$row[destinasi]'>";
                                    
                                        ?>
                                        <button type="submit" class="btn btn-sm btn-flat btn-warning">Pesan </button>
                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="row">
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
            
        </div>
    </section>
    <script src="../../js/jquery-3.7.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>
