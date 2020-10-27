<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa Index</title>
</head>
<body>

	<h1>Mahasiswa</h1>
	<h3>Selamat Datang, <?= $nama_lengkap ?></h3>
	<p>Jenis Kelmain : <?= $jenis_kelamin ?></p>
	<hr>
	<a href="<?= site_url('mahasiswa/tambah') ?>">Tambah</a>
	<table border="1">
		<tr>
			<th>Nim</th>
			<th>Nama</th>
		</tr>
		<?php foreach ($mahasiswa as $key): ?>
			<tr>
				<td><?= $key['nim'] ?></td>
				<td><?= $key['nama'] ?></td>
			</tr>
		<?php endforeach ?>
	</table>
	<br>
	<?= $mahasiswa[0]['profil'] ?>
	<br>

</body>
</html>