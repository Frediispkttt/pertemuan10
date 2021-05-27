<?php  
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h3>Daftar Mahasiswa</h3>

	<a href="tambah.php">Tambah Data Mahasiswa</a>
  	<br><br>
  	
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>#</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>NRP</th>
			<th>Jurusan</th>
			<th>Email</th>
			<th>Aksi</th>
		</tr>

		<?php $i = 1; 
		foreach($mahasiswa as $mhs) : ?>
		<tr>
			<td><?= $i++; ?></td>
			<td><img src="img/<?= $mhs['Gambar']; ?>" width="70"></td>
			<td><?= $mhs['Nama']; ?></td>
			<td><?= $mhs['NRP']; ?></td>
			<td><?= $mhs['Jurusan']; ?></td>
			<td><?= $mhs['Email']; ?></td>
		
			<td>
				<a href="detail.php?id=<?= $mhs['id']; ?>">lihat detail</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>