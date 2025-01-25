<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AERI SHOP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<lin href="https:fonts.googleapis.com/css2?family=quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<!-- header -->
	<header>
		<div class="container">
			<h1><a href="Dashboard.php"></a></h1>
			<ul>
				<li><a href="Dashboard.php">Dashboard</a></li>
				<li><a href="Data Kategori.php">Data Kategori</a></li>
				<li><a href="Produk.php">Produk</a></li>
				<li><a href="Keluar">Keluar</a></li>
		</ul>
		</div>
	</header>

	<!-- content -->
	<div class= "section">
		<div class="container">
			<h3>Tambah Data Kategori</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Kategori" class="input-control required">
					<input type="submit" name="submit" value="Submit" class="btn">
				</form>
				<?php
					if(isset($_POST['submit'])){

						$nama = ucwords($_POST['nama']);

						$insert = mysqli_query($conn, "INSERT INTO  tb_category VALUES ( 
											null,
											'".$nama."') ");
						
						if($insert){
							echo '<script>alert("Tambah Data Berhasil")</script>';
							echo '<script>window.location="data-kategori.php"</script>';
						}else{
							echo 'gagal' .mysql_error($conn);
						}

					}
				?>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy 2025 - Puspita Rini Triansyah.</small>
		</div>
	</footer>
</body>
</html>