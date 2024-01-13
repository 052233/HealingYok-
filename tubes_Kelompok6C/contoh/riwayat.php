<?php require "../login/koneksi.php" ;?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
        .btn {
        border: none;
        background-color: inherit;
        padding: 0px;
        font-size: 16px;
        color: blue;
        cursor: pointer;
        display: inline-block;
        }

        .btn:hover {background: #eee;}

        .success {color: green;}
        .info {color: dodgerblue;}
        .warning {color: orange;}
        .danger {color: red;}
        .default {color: black;}
    </style>
</head>

<body>
<h1>Riwayat Pembelian</h1>
<?php
    
    // Pastikan pengguna sudah login
    // session_start();
    // if (!isset($_SESSION['id'])) {
    //     // Redirect atau tindakan lain jika pengguna belum login
    //     header("Location: login.php");
    //     exit();
    // }


    
    // Pastikan pengguna dengan ID tersebut ada
    if ($_SESSION) {
 
        // Tampilkan data dalam tabel HTML
        echo "<table>";
        echo "<thead>
            <tr>
                <th>ID Pembelian</th>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Paket</th>
                <th>Destinasi</th>
                <th>Total Harga</th>
                <th>Status</th>
            </tr>
        </thead>";
        echo "<tbody>";
        $username=$_SESSION['username'];
        $query = "SELECT * FROM pesanan WHERE username='$username'";
        $hasil=mysqli_query($koneksi,$query);
        foreach($hasil as $data){
            echo"<tr>";
            echo"<td>$data[id]</td>";
            echo"<td>$data[username]</td>";
            echo"<td>$data[nama]</td>";
            echo"<td>$data[paket]</td>";
            echo"<td>$data[destinasi]</td>";
            echo"<td>Rp $data[total_harga],-</td>";
            
            if($data['status']=="Sudah Dikonfirmasi"){
                echo"<td>
                    <form name='invoice' action='invoice.php' method='post'>
                    <input type='text' name='id' value='$data[id]' hidden></input>
                    <button type='submit' class='btn'>$data[status]</button>
                    </form>
                    </td>";
            }
            else{
                echo"<td>$data[status]</td>";
            }
        }
        
        echo "</tbody>";
        echo "</table>";
    } else {
        // Handle jika pengguna dengan ID tersebut tidak ditemukan
        echo "Pengguna tidak ditemukan.";
    }
?>
</body>

</html>