<?php
session_start() ;
include 'koneksi.php';



 ?>
 <!DOCTYPE html>
<html>
	<head>
		<title>
			Warung Tani
		</title>
			<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
	</head>
<body>
	<?php include "navbar.php"; ?>
		
	<?php include "koneksi.php"; ?>


<section>
	<div class="container">
		<h1>produk terbaru</h1>
		<div class="row">

			<?php $ambil=$koneksi->query("SELECT * FROM produk"); ?>

			<?php while ($perproduk=$ambil->fetch_assoc()){ ?>

			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="foto_produk/<?php echo $perproduk['foto_produk'] ?>" width="100">
						<div class="caption">
						<h3><?php echo $perproduk['nama_produk'] ?></h3>
						<h5> Rp <?php echo number_format ($perproduk['harga_produk']) ?></h5>
						<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
						<a href="detail.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-default">Detail</a>
						</div>
				</div>
			</div>
			<?php } ?>

		</div>
	</div>
</section>

	</body>
</html>