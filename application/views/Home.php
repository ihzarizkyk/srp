<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
</head>
<body>

<h1>
	Sistem Ranking Poin
</h1>

<time>
	<b>
	<?php 
	echo unix_to_human($sekarang);
	 ?>
	</b>
</time>


<br><br>

<table border="2">
	<tr>
		<th>Rank</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Jurusan</th>
		<th>Angkatan</th>
		<th>Poin</th>
	</tr>
	<?php 
	$rank = 1;
	foreach($user as $usr):
	 ?>
	<tr>
		<td><?= $rank++; ?></td>
		<td><?= $usr->nim; ?></td>
		<td><?= $usr->nama; ?></td>
		<td><?= $usr->jurusan; ?></td>
		<td><?= $usr->angkatan; ?></td>
		<td><?= $usr->poin; ?></td>
	</tr>
	<?php
	endforeach;  
	?>
</table>

</body>
</html>