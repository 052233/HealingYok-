<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Invoice</title>

		<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}
			.button{
				display: flex;
				justify-content: space-around;
			}
			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>

	<?php
	require"../login/koneksi.php";
	$id=$_POST['id'];
	$query="SELECT * FROM pesanan WHERE id='$id'";
	$hasil=mysqli_query($koneksi,$query);
	$row = mysqli_fetch_array($hasil);
	$nama=$row['nama'];
	$username=$row['username'];
	$queryuser="SELECT * FROM anggota WHERE username='$username'";
	$hasiluser=mysqli_query($koneksi,$queryuser);
	$rowuser = mysqli_fetch_array($hasiluser);
	$email=$rowuser['email'];
	$paket=$row['paket'];
	$tanggal=$row['tglpergi'];
	$harga=$row['total_harga']
	?>

	<body>
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img
										src="3(2).png"
										style="width: 80%; max-width: 200px"
									/>
								</td>

								<td>
									Invoice #: <?php echo"$id"?><br />
									
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									
								</td>

								<td>
									<?php
									echo"$nama";
									echo"<br>";
									echo"$email";
									?>
									
								</td>
							</tr>
						</table>
					</td>
				</tr>

			

				<tr class="heading">
					<td>Item</td>

					<td>Harga</td>
				</tr>

				<tr class="item">
					<?php
					echo"<td>$paket</td>";
					?>
					<td>Rp <?php echo"$harga"?></td>
					
				</tr>

				<tr class="total">
					<td></td>

					<td>Total: Rp <?php echo"$harga"?>,-</td>
				</tr>
				<tr>
					<td></td>
				</tr>
		
				<tr class="item">
					<th>Tanggal Pergi</th>
					<td><?php echo"$tanggal"?></td>
					
				</tr>
				<tr class="item">
					<th>Metode Pembayaran</th>
					<td>Transfer Bank</td>
					
				</tr>
			</table>
			<div class="button">

			<a href="index.php"><button>OK</button></a>

		</div>
		</div>
		
	</body>
</html>
