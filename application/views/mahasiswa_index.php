<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
</head>
<body>
	<h1>Mahasiswa</h1>
	<h3>Selamat datang, <?= $nama_lengkap ?></h3>
	<p>NIM gw <?= $nim ?></p>
	<hr>
	<a href="<?= site_url('mahasiswa/tambah') ?>">Tambah</a>
	<table border="1" >
		<tr>
			<th>NIM</th>
			<th>Nama Mahasiswa</th>
		</tr>
	<?php foreach ($Mahasiswa as $key): ?>
		<tr>
			<td><?= $key ['nim'] ?></td>
			<td><?= $key ['nama'] ?></td>
		</tr>
	<?php endforeach ?>
	</table>
</body>
</html>