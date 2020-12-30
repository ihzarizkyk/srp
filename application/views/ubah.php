<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data - Srp</title>
</head>
<body>

<?php 
foreach($user as $usr):
?>
	<form action="<?= base_url('Admin/ubah'); ?>" method="post">
		<input type="hidden" name="id" value="<?= $usr->id; ?>">
		<label>
			Nama :
		</label>
		<br>
		<input type="text" name="nama" value="<?= $usr->nama; ?>">
		<br><br>
		<label>
			Jurusan :
		</label>
		<br>
		<input type="text" name="jurusan" value="<?= $usr->jurusan; ?>">
		<br><br>
		<label>
			Angkatan :
		</label>
		<br>
		<input type="number" name="angkatan" value="<?= $usr->angkatan; ?>">
		<br><br>
		<label>
			Poin :
		</label>
		<br>
		<input type="number" name="poin" value="<?= $usr->poin; ?>">
		<br><br>
		<button type="submit" name="update">
			Perbarui
		</button>
		&nbsp;&nbsp;&nbsp;
		<button type="reset" name="reset">
			Hapus
		</button>
		&nbsp;&nbsp;&nbsp;
		<a href="<?= base_url('Admin') ?>">
			Kembali
		</a>
	</form>
<?php 
endforeach;
?>

</body>
</html>