<?php
require "../../login/koneksi.php";
if($_SESSION['role']=="admin"){
}
else{
    header("location: ../../contoh/index.php");
}

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

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="">Paket</a>
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
                        <h1 class="page-header">Feedback</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Daftar Feedback
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <?php
                                    $query = "SELECT * FROM contactus";
                                    $hasil = mysqli_query($koneksi, $query);
                                    echo "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>";
                                    echo "<thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                            </tr>
                                        </thead>";
                                    echo "<tbody>";

                                    foreach ($hasil as $data) {
                                        echo "<tr>";
                                        echo "<td>$data[id]</td>";
                                        echo "<td>$data[username]</td>";
                                        echo "<td>$data[email]</td>";
                                        echo "<td>$data[subject]</td>";
                                        echo "<td>$data[message]</td>";
                                        
                                    }
                                    echo "</tbody>";
                                    echo "</table>";


                                    ?>
                                    <?php
                                    if (isset($_POST['btnhapus'])) {
                                        $id = $_POST['id'];
                                        if ($koneksi) {
                                            $query = "DELETE FROM anggota WHERE id=$id ";
                                            mysqli_query($koneksi, $query);
                                            echo "<p class='alert alert-success'>";
                                            echo "<b>Data Berhasil Dihapus</b>";
                                            echo "</p>";
                                        } elseif ($koneksi->connect_error) {
                                            echo "<p class='alert alert-danger text-center'>";
                                            echo "<b>Data Gagal Dihapus</b>";
                                            echo "Terjadi Kesalahan: " . $koneksi->connect_error;
                                            echo "</p>";
                                        }
                                    }
                                    ?>
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div><a href="../../contoh/paket/index.php"></a>
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