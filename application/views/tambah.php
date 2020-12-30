<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>

<a href="<?= base_url('Admin'); ?>">
	Kembali
</a>

<h3>
	Tambah Data
</h3>

<form action="<?= site_url('Admin/input'); ?>" method="POST">
	<label>
		NIM : 
	</label>
	<br>
	<input type="number" name="nim">
	<br><br>
	<label>
		Nama :
	</label>
	<br>
	<input type="text" name="nama" required>
	<br><br>
	<label>
		Jurusan :
	</label>
	<br>
	<input type="text" name="jurusan" required>
	<br><br>
	<label>
		Angkatan :
	</label>
	<br>
	<input type="number" name="angkatan" required>
	<br><br>
	<label>
		Poin :
	</label>
	<br>
	<input type="number" name="poin" required>
	<br><br>
	<button type="submit" name="tambah">
		Tambah
	</button>
	&nbsp;&nbsp;&nbsp;
	<button type="reset" name="reset">
		Hapus
	</button>
</form>


</body>
</html>