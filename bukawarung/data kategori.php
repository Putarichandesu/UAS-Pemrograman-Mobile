<?php
	session_start();
	include 'db.php';
?>
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
			<h1><a href="Dashboard.php">AERI SHOP</a></h1>
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
			<h3>Data Kategori</h3>
			<div class="box">
				<p><a href="tambah-kategori.php">Tambah Data</a></p>
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="30px">No</th>
							<th>Kategori</th>
							<th width="150px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
							while ($row = mysqli_fetch_array($kategori)){
						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['category_name'] ?></td>
							<td>
								<a href="edit-kategori.php?id=<?php echo $row ['category_id'] ?>">Edit</a> || <a href="proses-hapus.php">Hapus</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>	
			</div>
		</div>		
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy 2025 - Puspita Rini Triansyah
		</div>
	</footer>
</body>
</html>