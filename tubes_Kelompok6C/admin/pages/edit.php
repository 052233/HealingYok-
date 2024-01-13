<?php 
require "../../login/koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/startmin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="">Pengguna</a>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a href="../../contoh/index.php"><i class="fa fa-home fa-fw"></i> Website</a></li>
            </ul>

            <ul class="nav navbar-right navbar-top-links">
                <li class="dropdown navbar-inverse">
                   

                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['username']; ?> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">

                        <li class="divider"></li>
                        <li>
                            <a href="../../contoh/login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                        
                    </ul>
                </li>
            </ul>
            <!-- /.navbar-top-links -->
        </nav>

        <aside class="sidebar navbar-default" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                       
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="tables.php"><i class="fa fa-table fa-fw"></i>Pengguna</a>
                    </li>
                    <li>
                        <a href="pesan.php"><i class="fa fa-table fa-fw"></i>Pesanan</a>
                    </li>
                    <li>
                        <a href="paket.php"><i class="fa fa-table fa-fw"></i>Paket</a>
                    </li>
                    <li>
                        <a href="contactus.php"><i class="fa fa-table fa-fw"></i>Feedback</a>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </aside>
        <!-- /.sidebar -->

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Daftar Pengguna</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <h1 class="h3 mb-0 text-gray-800">Update Data Akun</h1>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                            <div class="container-fluid w-25">

    <?php

        $id = $_POST['id'];
        $query = "SELECT * FROM anggota WHERE id='$id'";
        $hasil = mysqli_query($koneksi,$query);
        foreach($hasil as $data){
    ?>
</div>
    <form method="POST" class="my-login-validation" novalidate="">
            <div class="form-group mb-3">
                <input hidden type="text" name="id" value="<?php echo $data ['id'];?>">
                <label for="username">Username</label>
                <input value="<?php echo $data ['username'];?>" id="username" type="text" class="form-control" name="username" required autofocus>

            </div>

            <div class="form-group mb-3">
                <label for="password">Password Baru</label>
                <input  id="password" type="password" class="form-control" name="password" required data-eye>
            </div>

            <div class="form-group mb-3">
                <label for="email">E-Mail</label>
                <input value="<?php echo $data ['email'];?>" id="email" type="email" class="form-control" name="email" required>
            </div>

            <div class="form-group mb-3">
                <label for="phone">No.HP</label><br>
                <input  value="<?php echo $data ['phone'];?>" type="text" name="phone" id="phone" class="form-control" ></input>
            </div>

            <div class="form-group m-0">
                <button name="btnUpdate" type="submit" class="btn btn-primary btn-block">
                    Update
                </button>
            </div>
        </form>
        <?php
        }
        ?>

        <?php
            if (isset($_POST['btnUpdate'])){
                $id = $_POST['id'];
                $password = $_POST['password'];
                $hashedPassword = hash('sha256', $password);
                $username = $_POST['username'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $query = "UPDATE anggota SET password='$hashedPassword',username='$username',email='$email',phone='$phone' WHERE id='$id'";
                $hasil = mysqli_query($koneksi,$query);
                echo "<p class='alert alert-success text-center'>";
                echo "<b>Data Berhasil Diupdate</b>";
                echo "</p>";
                $page = "anggota.php";
                $sec = "1";
            }
        ?>
</div>
                                      
                                
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../js/dataTables/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/startmin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>

</body>

</html>