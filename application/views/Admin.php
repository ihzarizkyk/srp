<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin -Srp</title>
</head>
<body>

	<h1>Halaman Admin - Srp</h1>

	<br>

	<a href="<?= site_url('Admin/tambah'); ?>">TAMBAH DATA</a>
	<br><br>

	<a href="<?= base_url('Auth/logout'); ?>">
		Keluar
	</a>

	<br><br>

	<time>
		<b><?= unix_to_human($sekarang); ?></b>
	</time>

	<br><br>

	<table border="2">
		<tr>
			<th>Rank</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jurusan / Prodi</th>
			<th>Angkatan</th>
			<th>Poin</th>
			<th>Aksi</th>
		</tr>
	<?php
	$rank = 1;
	foreach($user as $users): 
	 ?>
		<tr>
			<td><?= $rank++; ?></td>
			<td><?= $users->nim; ?></td>
			<td><?= $users->nama; ?></td>
			<td><?= $users->jurusan; ?></td>
			<td><?= $users->angkatan; ?></td>
			<td><?= $users->poin; ?></td>
			<td>
				<?= anchor("Admin/hapus/".$users->id,"Hapus"); ?>
				<?= anchor("Admin/edit/".$users->id,"Ubah"); ?>
			</td>
		</tr>
	<?php 
	endforeach;
	 ?>
	
	</table>

	<br>

	<a href="<?= base_url('Admin/pdf'); ?>">Export PDF</a>

</body>
</html>